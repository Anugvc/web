employee={"id":1000,"name":"anju","desig":"manager","salary":25000}
print(employee["name"])
print(employee["salary"])
if "gender" in employee:
    print("exist")
else:
    employee["gender"]="male"
    print(employee)
employee["salary"]+=5000
print(employee)
for k,v in employee.items():
    print(k,v)

