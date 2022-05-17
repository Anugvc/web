from re import *
rule="[K][L][0-9][0-9][A-Z][A-Z][0-9][0-9]*[0-9]*[0-9]*"
variable=(input("enter regitration number"))
matcher=fullmatch(rule,variable)
if matcher!=None:
    print("valid")
else:
    print("invalid")
