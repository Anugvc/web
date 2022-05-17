f=open("demo.txt","r")
lst=[]
for lines in f:
    words=lines.rstrip("\n").split(" ")
    for word in words:
        lst.append(word)
for wrd in lst:

    print(wrd)