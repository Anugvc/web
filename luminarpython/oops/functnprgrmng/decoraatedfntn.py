def my_sub(func):
    def inner(num1,num2):
        if num2>num1:
            num1,num2=num2,num1
        return func(num1,num2)
    return (inner)

@my_sub
def div(num1,num2):
    return (num1/num2)


print(div(2,10))