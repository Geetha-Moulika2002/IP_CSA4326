<?php
$marks=78;
switch(true){
case($marks>=90 && $marks<=100):
echo "Grade: A";
break;
case($marks>=75 && $marks<90):
echo "Grade: B";
break;
case(marks>=60 && $marks<75):
echo "Grade: C";
break;
case($marks>=40 && $marks<60):
echo "Grade: D";
break;
case($mark>=0 && $marks<40):
echo "Grade :F(Fail)";
break;

default:
echo "Invalid Marks";
}
?>