class Employee{
    constructor(eid,name,desig,sala ){
        this.eid=eid;
        this.name=name;
        this.desig=desig;
        this.sala=sala;
    }
    printdetails(){
        console.log(this.eid);
        console.log(this.name);
        console.log(this.desig);
        console.log(this.sala);
    }
}

var emp=new Employee(123,'anu',"manager",10000);
var emp1=new Employee(112,"abhi","sales",20000);
var emp2=new Employee(122,"ashi","developer",15000);
var emp3=new Employee(133,"aashu","qa",13000)

var employees=[]
employees.push(emp);
employees.push(emp1);
employees.push(emp2);
employees.push(emp3);
// enames=employees.map(emp=>emp.name)
// console.log(enames);
// edesig=employees.map(emp=>emp.desig)
// console.log(edesig);
// eqa=employees.filter(emp=>emp.desig=="developer")
// console.log(eqa);

// esal=employees.reduce((emp1,emp2)=>emp1.sala>emp2.sala?emp1:emp2);
// console.log(esal);
// esort=employees.map(emp=>)
// console.log(esort);
// sa=employees.map().
// employees.sort((emp1,emp2)=>emp1.sala-emp2.sala).forEach(emp=>console.log(emp))
sort=employees.sort((emp1,emp2)=>emp1.sala-emp2.sala)
console.log(sort);
employees.sort((emp1,emp2)=>emp1>emp2?1:-1).forEach(emp=>console.log(emp));