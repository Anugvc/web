



class Employee:
    def __init__(self,eid,name,desig,sal,exp):
        self.eid=eid
        self.name=name
        self.desig=desig
        self.sal=sal
        self.exp=exp
    def print_details(self):
        print(self.eid,self.name,self.desig,self.sal,self.exp)
    def __str__(self):
        return str(self.name)

f=open("employee.txt","r")
Employees=[]
for lines in f:
    eid2,ename2,desig2,sal2,exp2=lines.rstrip("\n").split(",")
    Employees.append(Employee(eid2,ename2,desig2,sal2,exp2))

# salar=[]
# for num in Employees:
#     salar.append(num.name)
# print(salar)
# nm=list(map(lambda emp:emp.name,Employees))
# print(nm)
des=list(map(lambda empl:empl.name,(list(filter(lambda emp:emp.desig=="developer",Employees)))))
# for num in des:
#     print(num)
#     print(str(num))
print(des)
print(max(list(map(lambda emp:emp.sal,Employees))))
details=[]
explist=[details.append(list(map(emp.name,emp.sal:employee)))]
