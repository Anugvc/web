// //method overloading
// //method overriding

// class Calcu{
//     add(){
//         console.log("inside single arg method");

//     }
//     add(num1,num2){
//         console.log("inside two arrgument memthod");
//     }
// }

// var obj=new Calcu()
// obj.add();
// obj.add(10,20);

class Parent{
    phone(){
    console.log("inside phone method");
    }

}
class child extends Parent{
    phone(){
        console.log("inside child phone method");
    }

}

var obj=new Parent()
obj.phone();
obj2=new child();
obj2.phone();