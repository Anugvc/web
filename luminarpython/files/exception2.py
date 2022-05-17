# pos=int(input("enter the position"))
# lst=[10,20,30]
# try:
#     print(lst[pos])
# except Exception as e:
#     print(e.args)
n1=int(input("enter number"))
try:
    if n1<0:
        raise Exception("invalid")
except Exception as e:
    print(e.args)
