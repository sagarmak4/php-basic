<?php
/*n PHP we have the following conditional statements:

if statement - executes some code if one condition is true
if...else statement - executes some code if a condition is true and another code if that condition is false
if...elseif...else statement - executes different codes for more than two conditions
switch statement - selects one of many blocks of code to be executed


1.  if statement executes some code if one condition is true.
 syntax :
   if (condition) {
  code to be executed if condition is true;
}*/

    $t = date("H");
    if ($t<"20"){
        echo "Have good day";
    }

 /*2. The if...else statement executes some code if a condition is true and another code if that condition is false.
  syntax :

  if (condition) {
    code to be executed if condition is true;
  } else {
    code to be executed if condition is false;
  }
*/  
 
  $t = date("H");
  if ($t < "20"){
    echo "have good day";
  }else{
    echo "have  good night";
  }

 /*3. The if...elseif...else statement executes different codes for more than two conditions.
   syntax :
     if (condition) {
    code to be executed if this condition is true;
  } elseif (condition) {
    code to be executed if first condition is false and this condition is true;
  } else {
    code to be executed if all conditions are false;
  }
*/
  if ($t < "10") {
  echo "Have a good morning!";
 } elseif ($t < "20") {
  echo "Have a good day!";
 } else {
  echo "Have a good night!";
 } 
 









?>