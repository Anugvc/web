class Person(object):
    def __init__(self,age,name):
        self.age=age
        self.name=name
    def __str__(self):
        return self.name+str(self.age)
p=Person(25,"ajay")
p1=Person(24,"varun")
print(p)
print(p1)