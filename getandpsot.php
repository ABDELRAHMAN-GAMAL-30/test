<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="getandpost.php" method="get">
         <label >username</label><br>
         <input type="text" name="username"><br>
         <label >password</label><br>
         <input type="password" name="password"><br>
         <input type="submit" value="log in">
    </form>

</body>
</html>

<?php
// $Get  and  $post =Spical  Variables  used to collect data from an html form data
                //   is sent to the file in the action attribute of <form> </form>
                //   <form action =" some_file.php" method="get">
// $_Get = Data is appended to the url 
        // NOT SECURE
        // char limit 
        // Bookmark is possible w/ Values
        // GET requests can be cached 
        // Better for a search page 



// $_Post = Data is Packaged inside the body of the HTTP request 
        // More SECURE
        // No data limit 
        // Cannot Bookmark 
        // GET requests  are not cached 
        // Better for submitting credentials 


?>