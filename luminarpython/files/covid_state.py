f=open("covid_19_india(1).csv","r")
dict={}
for lines in f:
    data=lines.split(",")

    state=data[3]
    confirmedcase=int(data[-1])


