function check(){
 var c =0;
 var q1= document.quiz.question1.value;
 var q2= document.quiz.question2.value;
 var q3= document.quiz.question3.value;
 var q4= document.quiz.question4.value;
 var q5= document.quiz.question5.value;
 if(q1=="o3"){c++}
 if(q2=="o1"){c++}
 if(q3=="o4"){c++}
 if(q4=="o2"){c++}
 if(q5=="o1"){c++}
 document.write("Your Score is ")
 document.write(c);
}