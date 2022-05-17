f1=open("testqual","r")
f2=open("testteam","r")
def get_team_set(f):
    st=set()
    for lines in f:
        st.add(lines.rstrip("\n"))
    return st



lst=get_team_set(f1)
lst2= get_team_set(f2)
st3=lst-lst2
print(st3)