
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>quantity</label> <br>
        <input type="text" name="quantity"><br>
        <input type="submit" value = "total">

    </form>

</body>
</html>

<?php
$item = "pizza";
$prices = 5.99;
$quantity = $_POST["quantity"];
$total=null;
$total = $quantity * $prices;

echo "you have orderd {$quantity} x {$item}/s <br>";
echo " your total is: \${$total}";

/*
$name = "Bro Code"; // is string Var 
$food = " pizza";
$email = "fake@gmail.com";


$age = 21; // this is an integer Var
$users = 2;
$quantity = 4;

$gpa = 2.5; // this is an float Var
$prices = 6.99;
$tax_rate = 5.1;


$employed = true; // this is booleans var ( true = 1  or False = 0)
$online= false;
$for_sale= true;


$total = null;

echo " Hello {$name} <br>"; // this is another way to display string var  
echo " you like pizz {$food} <br>";
echo " your email is  {$email} <br>";


echo "you are {$age} years old <br>" ;
echo " there are {$users} users online <br>";
echo "you would like to buy  {$quantity} items <br> ";




echo "your gpa is : {$gpa}  <br> ";
echo "your Pizza is : \${$prices}  <br> "; // here we need to use $ before amount we used skip suqunice 
echo "your tax rate is: {$tax_rate} %<br> ";


echo" Online status :{$online} <br> ";
echo" this T-Shirt  :{$for_sale} <br> ";

//execrise
echo " you have orderd {$quantity} beef {$food} <br>";
$total = $quantity * $prices;
echo" your total is: \${$total}<br>" ;


// arithmatic opperator  // + - *  (** it means power of) %
$x = 10;
$y= 2;
$z= null;
$a= null;
$z= $x ** $y;
$a= $x + $y;
echo "$z <br>";
echo "$a <br>";
*/
//increment and Decrement Oprators // ++ // -- 
// Operator Precedence  -> () -- */%  + -
/*
$counter = 10;
$counter-=5;
echo $counter;



?>
*/