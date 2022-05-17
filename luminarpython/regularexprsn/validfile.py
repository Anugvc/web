from re import *
rule="[K][L][0-9][0-9]*[A-Z][A-Z]*[0-9][0-9]*[0-9]*[0-9]*"
f=open("valid")
words=[]
lst=[]
for lines in f:
    words=lines.rstrip('\n')


    matcher=match(rule,words)
    if matcher!=None:
        lst.append(words)
    else:
        pass
print(lst)