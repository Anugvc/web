# lst=[1,2,3,4,5,6]
# evens=list(filter(lambda num:num>3,lst))
# print(evens)
player=[
    {"name":"sachin","matches":500,"rank":1},
    {"name":"dravid","matches":400,"rank":12},
    {"name":"sewagh","matches":250,"rank":52}

]

lst2=list(filter(lambda dict:dict["matches"]>320,player))
lst=list(map(lambda dict:dict["name"],lst2))
print(lst)
#print employee name, designation developer
#print employee details experience >2year
#print count of employees whose deignation =quality analyst
