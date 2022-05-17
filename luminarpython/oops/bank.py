from datetime import *
class bank:
    bank_name="sbk"
    def create_acc(self,accno,c_name,balance):
        self.accno=accno
        self.c_name=c_name
        self.balance=balance

    def deposit(self,amount):
        self.balance+=amount
        print("your account has been credited with ",amount,"on ",datetime.now(),"\n")
        print(bank.bank_name,"account no: ",self.accno,"Account holder: ",self.c_name,"Availabl Balance: ",self.balance)
    def withdraw(self,amount):
        if amount>self.balance:
            print("Transaction error")
        else:
            self.balance-=amount
            print("your account has been debited with ", amount)
            print(bank.bank_name,"account no: ", self.accno, "Account holder: ", self.c_name, "Availabl Balance: ", self.balance)
    def bal_enquiry(self):
        print("your account number: ",self.accno)
        print("available blance: ",self.balance)
obj=bank()
obj.create_acc(1121,"abhi",20000)
obj.deposit(120)
obj.withdraw(330)
obj.bal_enquiry()