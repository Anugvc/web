expe={"jan":1000,"feb":2000,"mar":3000,"april":4000,"may":5000,"july":98}

print(expe["feb"])

if "july" in expe:
    print("exist")
else:
    expe["july"]=200
print(expe)