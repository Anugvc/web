// sub=(num1,num2)=>num1-num2
// console.log(sub(2,3))
// add=(num1,num2)=>num1+num2
// console.log(add(2,3));
// cube=num1=>num1**3
// console.log(cube(3));


var arr=[10,11,12,13,14]
// var square=arr.map(no1=>no1**2)
// console.log(square);
// var evens=arr.filter(no=>no%2==0)
// console.log(evens);

// var sum=arr.reduce((n1,n2)=>n1+n2)
// console.log(sum);

var min=arr.reduce((n1,n2)=>n1>n2?n2:n1)
console.log(min);

var max=arr.reduce((n1,n2)=>n1<n2?n2:n1)
console.log(max);