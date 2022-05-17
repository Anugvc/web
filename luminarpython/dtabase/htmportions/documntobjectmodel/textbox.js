// function text() {

//     var cl=document.querySelector("button")
//     cl.addEventListener("click",()=>{
//         var n=document.querySelector("")
//     alert("num")
//     })
// }
function name(params) {
    var num=document.querySelector("#age").value
    var html_content=("");
    if(num>18){
        html_content="eligible"

    }   
    else{
        html_content="not eligible"
    }
    document.querySelector(".resultarea").innerHTML=`<h1>$(html_content)</h1>`
}
