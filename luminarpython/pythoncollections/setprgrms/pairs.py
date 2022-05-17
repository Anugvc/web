lst=[1,2,3,4]
no=int(input("enter the num"))#5
st=set(lst)
out=set()

for num in st:#1
    op=no-num#5-1=4
    if op in st:
        if op>num:
            out.add((op,num))
        else:
         out.add((op,num))
print(out)        