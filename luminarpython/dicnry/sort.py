text="hello hello sorry sorry hello"
words=text.split(" ")
dict={}
for word in words:
    if word not in dict:
        dict[word]=1
    else:
        dict[word]+=1

sdata=sorted(dict,key=dict.get)
print(sdata)
