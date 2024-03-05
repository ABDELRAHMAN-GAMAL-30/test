<?php
// if statment = if some condition is true, do something 
//               if condition is false, don't do it 

/*
$age =16; 
if($age >=18){
    echo " you may enter this site ";

}
elseif($age == 0){
   echo "you were just born";
}
else{
    echo"you must be 18+ to enter";
}
*/
// another example 
/*
$age = 100; 
if($age >=18){
    echo " you may enter this site ";

}
elseif($age <= 0){
   echo "that wasn't a vailed age ";
}
elseif($age >= 100){
echo "you are too old to enter this site";
}

else{
    echo"you must be 18+ to enter";
}
*/

// another example 
/*
$hours = 30;
$rate = 15; 
$weekly_pay = null;

if($hours <= 0){
     $weekly_pay = 0;
}
elseif($hours <= 40 ){
 $weekly_pay = $hours * $rate;
}
else{
    $weekly_pay = ($rate*40) + (($hours-40)*($rate * 1.5));
}
echo "you made \$($weekly_pay) this week "

*/

// another example 
 $salary =4500;
 $work_time = 10;
if($work_time >= 50){
 echo "your salary is \$($salary)";
}
elseif($work_time == 30 ){
 echo " your salary is less than \$($salary)";
}
else 
echo "you have an investgation becouse you didn't work full time "

?>