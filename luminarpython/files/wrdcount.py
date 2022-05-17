f=open("demo.txt","r")
lst=[]
dict={}
for lines in f:
    words=lines.rstrip("\n").split(" ")
    for word in words:
        lst.append(word)
    for wrd in lst:
        if wrd not in dict:
            dict[wrd]=1
        else:
            dict[wrd]+=1
for k,v in dict.items():
    print(k,"==>",v)