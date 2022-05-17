#map function
lst=[1,2,3,4,5,6]
sq=list(map(lambda num1:num1**2,lst))
print(sq)

names=["ram","raju","ravi"]
caps=list(map(lambda name:name.upper(),names))
print(caps)
caps2=list(map(lambda name:name.capitalize(),names))
print(caps2)