f1=open("testqual","r")
f2=open("testteam","r")
lst=[]
lst2=[]
lstqual=[]
for lines in f1:
    lst.append(lines.rstrip("\n"))
print(lst)
for lines in f2:
    lst2.append(lines.rstrip("\n"))
print(lst2)
for words in lst2:
    if words not in  lst:
        print(words)



