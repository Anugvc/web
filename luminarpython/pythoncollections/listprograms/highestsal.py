employees=[
    [100,"Tom","Developer",25000],
    [101,"Jack","developer",18000],
    [103,"John","Ba",28000],
    [104,"Dinu","qa",10000],
]
highsal=0
for employee in employees:
    if(employee[3]>highsal):
        highsal=employee[3]
print(highsal)
