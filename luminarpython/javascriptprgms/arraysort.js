var arr=[2,7,6,4,9,5]
console.log(arr);
arr.sort((no1,no2)=>no1>no2?-1:1)
console.log(arr);
console.log(`largest number= ${arr[0]}`)
var len=arr.length;
console.log(`smallest =${arr[len-1]}`);