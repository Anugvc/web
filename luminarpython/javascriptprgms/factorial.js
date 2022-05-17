var i=10
var j=1
function fact(num1) {
    fac=1
    for(let i=num1;i>=1;i--){
        fac=fac*i;
    }
    return fac
}
num=fact(4)
console.log(num);