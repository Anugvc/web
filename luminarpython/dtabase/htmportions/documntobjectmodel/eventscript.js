var clk=document.querySelector("#clkid")
clk.addEventListener("click",()=>
{clk.textContent="clicked"
clk.style.color="red"})

var dbc=document.querySelector("#dbclkid")
dbc.addEventListener("dblclick",()=>{
    dbc.textContent="doubleclicked"
    dbc.style.color="red"
})      
var mo=document.querySelector("#mo")
mo.addEventListener("mouseover",()=>{
    mo.textContent="overmouse"
    mo.style.color="blue"
})      