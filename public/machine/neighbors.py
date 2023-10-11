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
    sql_select_query_data = '''SELECT name from predicts WHERE algoritma = 'neighbors' ORDER BY id desc limit 1'''
    cursor.execute(sql_select_query_data)
    datahasil = cursor.fetchone()
    for datacoba in datahasil:
        berkasfile = 'machine/berkas/'
        file = berkasfile + datacoba
        # print(file)

    # mengambil model
    sql_select_query_model = '''SELECT name from models WHERE type = 'neighbors' ORDER BY id desc limit 1'''
    cursor.execute(sql_select_query_model)
    ModelHasil = cursor.fetchone()
    for datamodel in ModelHasil:
        berkasmodel = 'machine/model/'
        mode = berkasmodel + datamodel
        # print(mode)

    readfile = pd.read_excel(file)
    loaded_model = joblib.load(mode)

    features = readfile.loc[:, 'MD': 'SISTEMATIKA_KERJA'].values
    scaler = preprocessing.StandardScaler().fit(features)
    scaled_feature = scaler.transform(features)
    result = loaded_model.predict(scaled_feature)
    hasil = pd.DataFrame(result)
    nip = readfile['NIP']
    name = readfile['NAMA']
    label = readfile['LABEL']
    df = pd.concat([nip, name, label, hasil], axis=1)
    # i = pd.DataFrame(df, columns=['NIP', 'NAMA', 'HASIL'])
    # print(i)

    # Hasil to excel
    savenama = 'neighbors_hasil_' + datacoba
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
