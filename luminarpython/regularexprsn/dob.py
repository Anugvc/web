from re import *
f=open("dobfile","r")
words=[]
lst=[]
for lines in f:
    words.append(lines.rstrip("\n"))
rule='[0-3][0-9]-[0-1][0-2]-[1-2][0-9][0-9][0-9]'
for num in words:
    match=fullmatch(rule,num)
    if match!=None:
        lst.append(num)
print(lst)
