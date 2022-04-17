import mysql.connector

cnx = mysql.connector.connect(user='root',
                              host='127.0.0.1',
                              database='fintech')
cursor = cnx.cursor()

query = ("SELECT TankName, TankDescription FROM `fishtanks`")


cursor.execute(query)

for (tank_name, tank_description) in cursor:
  print("{}, {} was hired on".format(
    tank_name, tank_description))

cursor.close()
cnx.close()
