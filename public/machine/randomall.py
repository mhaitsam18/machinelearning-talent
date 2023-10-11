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
    sql_select_query_data = '''SELECT name from predicts WHERE algoritma = 'randomforest' ORDER BY id desc limit 1'''
    cursor.execute(sql_select_query_data)
    datahasil = cursor.fetchone()
    for datacoba in datahasil:
        berkasfile = 'machine/berkas/'
        file = berkasfile + datacoba
        # print(file)

    # mengambil model
    # randomforest
    sql_select_query_model = '''SELECT name from models WHERE type = 'randomforest' ORDER BY id desc limit 1'''
    cursor.execute(sql_select_query_model)
    ModelHasil = cursor.fetchone()
    for datamodel in ModelHasil:
        berkasmodel = 'machine/model/'
        mode = berkasmodel + datamodel
        # print(mode)

    # neighbors
    sql_select_query_model2 = '''SELECT name from models WHERE type = 'neighbors' ORDER BY id desc limit 1'''
    cursor.execute(sql_select_query_model2)
    ModelHasil2 = cursor.fetchone()
    for datamodel2 in ModelHasil2:
        berkasmodel2 = 'machine/model/'
        mode2 = berkasmodel2 + datamodel2
        # print(mode)

    # tree boosting
    sql_select_query_model3 = '''SELECT name from models WHERE type = 'treeboosting' ORDER BY id desc limit 1'''
    cursor.execute(sql_select_query_model3)
    ModelHasil3 = cursor.fetchone()
    for datamodel3 in ModelHasil3:
        berkasmodel3 = 'machine/model/'
        mode3 = berkasmodel3 + datamodel3
        # print(mode)
    readfile = pd.read_excel(file)
    loaded_model = joblib.load(mode)
    loaded_model2 = joblib.load(mode2)  # neighbors
    loaded_model3 = joblib.load(mode3)  # treboosting

    features = readfile.loc[:, 'MD': 'SISTEMATIKA_KERJA'].values
    scaler = preprocessing.StandardScaler().fit(features)
    scaled_feature = scaler.transform(features)
    result = loaded_model.predict(scaled_feature)
    result2 = loaded_model2.predict(scaled_feature)
    result3 = loaded_model3.predict(scaled_feature)
    hasil = pd.DataFrame(result)
    hasil2 = pd.DataFrame(result2)  # neighbors
    hasil3 = pd.DataFrame(result3)  # treboosting
    nip = readfile['NIP']
    name = readfile['NAMA']
    label = readfile['LABEL']
    df = pd.concat([nip, name, label, hasil, hasil2, hasil3], axis=1)
    # i = pd.DataFrame(df, columns=['NIP', 'NAMA', 'HASIL'])
    # print(i)

    # Hasil to excel
    savenama = 'banding_hasil_' + datacoba
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
