var text="anu abc aje ashi"
var word=text.split(" ")
console.log(word);
var emp={}
for(let i of word){
    if (i in emp){
        emp[i]+=1
    }
    else
    {
        emp[i]=1
    }
}
console.log(emp);