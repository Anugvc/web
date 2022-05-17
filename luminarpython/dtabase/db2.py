import mysql.connector
db=mysql.connector.connect(
    host="localhost",
    user='root',
    password="Password@123",
    auth_plugin="mysql_native_password",
    database="ZY"
)
cursor=db.cursor()
sql="create table employee1(eid int, name varchar(50),salary int,desig varchar(50))"
cursor.execute(sql)
print("table created")