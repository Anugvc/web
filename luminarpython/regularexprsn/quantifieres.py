from re import *
patteren="a{2,3}"
matcher=finditer(patteren,"aaaabbabaaaxc")
for matc in matcher:
    print(matc.start())
    print(matc.group())
    