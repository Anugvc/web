text="ABAC"
dict={}
for char in text:
    if char not in dict:
        dict[char]=1
    else:
        print(char,"is first recursive")
        break
