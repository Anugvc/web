// class parent{
//     phone(){
//         console.log("have noia");

//     }
// }
// class child extends parent{

// }
// var ch=new child()
// ch.phone()

//multilvel inheritance


class Parent{
    m1(){
        console.log("have nokia");

    }
    
}
class Child extends Parent(){
    m2(){
        console.log("m2 method");
    }
}
class Subchild extends Child(){
    m3(){
        console.log("m3 method");

    }
}
ch=new Subchild()
ch.m1();
ch.m2();
ch.m3();
