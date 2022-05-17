employeees={1000:{"eid":1000,"ename":"ram","desig":"developer","salary":30000},
            1001:{"eid":1001,"ename":"amith","desig":"manager","sa;ary":25000},
            1002:{"eid":1002,"ename":"gopu","desig":"ba","sa;ary":20000}}

#eid=int(input("enter eid"))
#property=(input("enter property"))
#if eid in employeees:
 #   print(employeees[eid])
  #  if proper in employeees[eid]:
   #     print(employeees[eid][proper])
   # else:
    #    print("invalid property")
#else:print("invalid eid")


def print_employee_details(**kwargs):
    id=kwargs["eid"]
    prop=kwargs["property"]

    if id in employeees:

        print(employeees[id]["ename"])
        propp=kwargs["property"]
        print(employeees[id][propp])

print_employee_details(eid=1000,property="salary")





