text="hello hello sorry sorry sorry sorry hello"
words=text.split(" ")
dict={}
for word in words:
    if word not in dict:
        dict[word]=1
    else:
        dict[word]+=1
print(dict)
temp=0
temp2=""
for k,v in dict.items():
    if v>temp:
        temp=v
        temp2=k
print("highest occuring =",temp2)
