from re import *
rule="[a-k][3,6,9][a-zA-Z0-9]*"
variablenm=input("enter variable")
matcher=fullmatch(rule,variablenm)
if matcher!=None:
    print("valid variable name")
else:
    print("invalid variable name")