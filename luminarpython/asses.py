lst=[1,2,3,4]
no=int(input("enter the num"))
st=set(lst)
for num in st:
    op=no-num
    if op in st:
         print(num,op)
         break