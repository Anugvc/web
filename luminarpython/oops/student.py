class student:
    def set_student(self,roll,name,total):
        self.total=total
        self.roll=roll
        self.name=name
    def print_student(self):
        print(self.roll)
        print(self.name)
        print(self.total)
obj1=student()
obj1.set_student(10,"abhi",30)
obj1.print_student()
