<?php

require('./employers.php'); // هنا لما بنجيب داتا من فايل تانى 
//for loop

//for ($i = 0; $i < count($employers); $i++) { // <- هنا استخدمنا count علشان يجيب الهدد بتاع الموظفين 

  //  echo ($employers[$i]['first_name'].'<br>'); //(.) here concatenate 
    
//}
// while loop طول ما الشرط بيتحقق هى بتشتغل 
//$i = 3;
//while ($i < 10){
  //  echo $i."<br>";
   // $i++;
//}

//do while loop  هنا بينفذ دو الأول بعد كدا بيتشك الكونديشن 
//do{
//    echo " welcome";

//}while($i< 2);


// foreach loop  هنا بنشوف فى الأول احنا هنلوب على ارااي عامل ازاي 
// سواء كان انديكس ارااي  او اسوشتيف ارااي 
// او انديكس ارااي هنعمل  فاريبل واحد 
// لو اسوشتيف اراي هنعمل 2 فاريبلز 
// ومش بنستخدمها غير مع الأرااي فقط 
/*
$employer = [
    "id" => 1, 
    "frist_name" => " jack",
    "last_name" => "franckton",
    "email" => "asdasfasfdasd@gmail.com",
    "gender" => "male",
    "salary" => 1020
];
foreach ($employer as $key => $value){
    echo "$value <br>";
}
*/

foreach ($employers as $index => $employer) {
     $employers[$index]['Salary'] += ($employer['Salary']* 0.2);
}
var_dump($employers);
