<!DOCTYPE html>
<html>
<head>
<title>Quiz</title>

<script type="text/javascript" src="quiz.js"></script>
</head>
<body style="background:url('oc.jpg');background-repeat:no-repeat;background-size:100% 100%;color:black;font-size:30px">
<h1 style="color:#DFFF00">Quiz</h1>
<form name="quiz" id="quiz">
<div>
<p>Q 1 - What is correct syntax for main method of a java class?</p>
<p><input type="radio"  name="question1" value="o1">A)public static int main(String[] args)</p>
<p><input type="radio"  name="question1" value="o2">B)public int main(String[] args)</p>
<p><input type="radio"  name="question1" value="o3">C)public static</p>
<p><input type="radio"  name="question1" value="o4">D)None of the above</p>
</div>
<div>
<p>Q 2- What is the size of int variable?</p>
<p><input type="radio"  name="question2" value="o1">A)2 bytes</p>
<p><input type="radio"  name="question2" value="o2">B)4 bytes</p>
<p><input type="radio"  name="question2" value="o3">C)16 bytes</p>
<p><input type="radio"  name="question2" value="o4">D)84 bytes</p>
</div>
<div>
<p>Q 3 -What is the default value of float variable? </p>
<p><input type="radio"  name="question3" value="o1">A)0.0d</p>
<p><input type="radio"  name="question3" value="o2">B)0.0f</p>
<p><input type="radio"  name="question3" value="o3">C)0</p>
<p><input type="radio"  name="question3" value="o4">D)not defined</p>
</div>
<div>
<p>Q 4 -Which of the following is true about super class? </p>
<p><input type="radio"  name="question4" value="o1">A)Variables, methods and constructors which are declared private can be accessed only by the members of the super class.</p>
<p><input type="radio"  name="question4" value="o2">B)Variables, methods and constructors which are declared protected can be accessed by any subclass of the super class.</p>
<p><input type="radio"  name="question4" value="o3">C)Variables, methods and constructors which are declared public in the superclass can be accessed by any class.</p>
<p><input type="radio"  name="question4" value="o4">D)all of the above</p>
</div>
<div>
<p>Q 5 -What is JRE? </p>
<p><input type="radio"  name="question5" value="o1">A)JRE is a java based GUI application.</p>
<p><input type="radio"  name="question5" value="o2">B)JRE is an application development framework.</p>
<p><input type="radio"  name="question5" value="o3">C)JRE is an implementation of the Java Virtual Machine which executes Java programs.
</p>
<p><input type="radio"  name="question5" value="o4">D)None of the above.</p>
</div>

<input type="button" name="" value="submit" onclick="check()">
</form>
</body>
</html>