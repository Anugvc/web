import mysql.connector
db=mysql.connector.connect(
    host="localhost",
    user="root",
    password="Password@123",
    auth_plugin="mysql_native_password",
    database="ZY"
)
cursor=db.cursor()
f=open("emp","r")
for lines in f:
    word=lines.rstrip("\n").split(",")
    sql="insert into employee values(%s,%s,%s,%s)"
    cursor.execute(sql,word)
    db.commit()
