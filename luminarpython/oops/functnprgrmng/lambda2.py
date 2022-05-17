player=[
    {"name":"sachin","matches":500,"rank":1},
    {"name":"dravid","matches":400,"rank":12},
    {"name":"sewagh","matches":250,"rank":52}

]

nm=list(map(lambda dict:dict["rank"],player))
print(nm)
