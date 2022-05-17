var text="anugrah"
word=text.split("")
emp={}
for(char of word)
    {
        if(char in emp){
            emp[char]+=1
            console.log(`first recursive=${char}`)
            break
        }
        else{
            emp[char]=1
            
        }
    }