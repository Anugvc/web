f=open("demo.txt","r")
lst=[]
for lines in f:
    print(lines)
    lst.append(lines)

print(lst)