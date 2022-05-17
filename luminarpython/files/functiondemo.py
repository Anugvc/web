def add(*args):
    total=0
    for num in args:
        total+=num
    print(total)

add(10,20,30,40,50)


def data(**arg):
    for k,v in arg.items():
        print(k,v)

data(eid=100,ename="anugrah",eplace="kochi")

