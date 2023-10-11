from sklearn import preprocessing
import pandas as pd
import joblib
import mysql.connector

conn = mysql.connector.connect(
    host='localhost',
    database='talent',
    user='root',
    password='',
)
cursor = conn.cursor()

try:
    # mengambil data test
    sql_select_query_data = '''SELECT name from predicts WHERE algoritma = 'treeboosting' ORDER BY id desc limit 1'''
    cursor.execute(sql_select_query_data)
    datahasil = cursor.fetchone()
    for datacoba in datahasil:
        berkasfile = 'machine/berkas/'
        file = berkasfile + datacoba
        # print(file)

    # mengambil model
    sql_select_query_model = '''SELECT name from models WHERE type = 'treeboosting' ORDER BY id desc limit 1'''
    cursor.execute(sql_select_query_model)
    ModelHasil = cursor.fetchone()
    for datamodel in ModelHasil:
        berkasmodel = 'machine/model/'
        mode = berkasmodel + datamodel
        # print(mode)
    sql_select_query_model2 = '''SELECT name from models WHERE type = 'neighbors' ORDER BY id desc limit 1'''
    cursor.execute(sql_select_query_model2)
    ModelHasil2 = cursor.fetchone()
    for datamodel2 in ModelHasil2:
        berkasmodel2 = 'machine/model/'
        mode2 = berkasmodel2 + datamodel2

    readfile = pd.read_excel(file)
    loaded_model = joblib.load(mode)  # boosting
    loaded_model2 = joblib.load(mode2)  # neighbors

    features = readfile.loc[:, 'MD': 'SISTEMATIKA_KERJA'].values
    scaler = preprocessing.StandardScaler().fit(features)
    scaled_feature = scaler.transform(features)
    result = loaded_model.predict(scaled_feature)  # boosting
    result2 = loaded_model2.predict(scaled_feature)  # neighbors
    hasil = pd.DataFrame(result)  # boosting
    hasil2 = pd.DataFrame(result2)  # neighbors
    nip = readfile['NIP']
    name = readfile['NAMA']
    label = readfile['LABEL']
    df = pd.concat([nip, name, label, hasil, hasil2], axis=1)
    # i = pd.DataFrame(df, columns=['NIP', 'NAMA', 'HASIL'])
    # print(i)

    # Hasil to excel
    savenama = 'treeboosting_neighbors_hasil_' + datacoba
    savefile = "machine/hasil/" + savenama

    df.to_excel(savefile)
    # hasil to sql
    sql_update_predicts = '''UPDATE predicts SET result = %s where name = %s'''
    namaresult = savenama
    namawhere = datacoba
    input_data = (namaresult, namawhere)
    cursor.execute(sql_update_predicts, input_data)
    conn.commit()
    print("Berhasil Prediksi")

except:
    print("Gagal Prediksi")
