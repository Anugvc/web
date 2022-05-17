class swift:
    def start(self):
        print("swift starts")
    def accelerate(self):
        print("swift accelerates")
    def breake(self):
        print("swift stops")


class seltos:
    def start(self):
        print("seltos starts")

    def accelerate(self):
        print("seltos accelerates")

    def breake(self):
        print("seltos stops")

class Person:
    def drive(self,car):
        car.start()
        car.accelerate()
        car.breake()
sw=swift()
p=Person()
p.drive(sw)
