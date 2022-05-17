def valid_phn(func):
    def inner(num):
        if len(str(num))!=10:
            raise Exception("invalid phon number")
        else:
            return (func(num))

    return (inner)

@valid_phn
def phn(num):
    num1=str(num)
    return "valid"+num1


print(phn(90615373))
