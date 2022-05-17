//class=>blueprint,design,pattern,plan,template
//object=>realworld entity
//reference=>
//constructor=>initialise instance variable
class Student{
    constructor(name,rollno,course,marks){
        this.name=name;
        this.rollno=rollno;
        this.course=course;
        this.marks=marks;

    }
    printStudent(){
        console.log(this.name);
        console.log(this.rollno);
        console.log(this.course);
        console.log(this.marks);
    }

}

var obj=new Student("Anu",14,"CSE",34)

obj.printStudent();
