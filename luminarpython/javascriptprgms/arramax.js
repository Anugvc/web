var arr=[2,3,4,6,5,9,7]
max=0;
for(let i=0;i<arr.length;i++){
    if (max<arr[i]){
        max=arr[i]
    }
}
console.log(max);