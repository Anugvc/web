arr1=[12,13,14,15,16]
arr2=[12,13,14,15,16]
res=[]
for i in arr1:
    for j in arr2:
        if i==j:
            res.append(i)
print(res)