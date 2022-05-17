# from re import *
# rule='\w{1,64}@gmail.com'
# variable=(input("enter gmail id"))
# matcher=fullmatch(rule,variable)
# if matcher!=None:
#     print("valid")
# else:
#     print("invalid")
from re import *
rule='\d{10}'
variable=(input("enter variable"))
matcher=fullmatch(rule,variable)
if matcher!=None:
    print("valid")
else:
    print("invalid")
