class Account():
    def set_acc(self,name,acc_no,year,investment,phone):
        self.name=name
        self.acc_no=acc_no
        self.year=year
        self.investent=investment
        self.phone=phone
    def print_person(self):
        print(self.name,self.acc_no,self.year,self.investent,self.phone)
obj1=Account()
obj1.set_acc("abc",446455,2017,44444,901464755)
obj2=Account()
obj2.set_acc("fdtr",5445,55646,656,90454666)
#obj3
#obj4


arr=[obj1,obj2]
n=2

for i in range(n):
    for j in range(0,n-i-1):
        if(arr[j].investent>arr[j+1].investent):
            arr[j],arr[j+1] = arr[j+1], arr[j]
print(arr[0].investent)

print("highest investmennt=")
arr[-1].print_person()
print("lowest investmennt=")
arr[0].print_person()
