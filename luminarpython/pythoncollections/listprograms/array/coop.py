lst=[1,2,3,5,3,4,]
low=0
upp=len(lst)-1
num=6
i=0
while i<6:
    while(low<upp):
        total=lst[low]+lst[upp]

        if num==total:
            print(lst[low],lst[upp])
            low+=1

        elif total>num:
            upp-=1
        elif total<num:
            low+=1
    i+=1




