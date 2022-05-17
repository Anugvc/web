lst1=[1,2,3]
lst2=[3,4,5]

# for i in lst1:
#     for j in lst2:
#         lst4=[i,j]
op=[i**2 for i in lst2]
print(op)
op2=[(k,l) for k in lst1 for l in lst2]

print(op2)
op3=[(i,j) for i in lst1 for j in lst2 if i==j]
print(op3)