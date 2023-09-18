<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
       /*Super Globals are : 
    $GLOBALS
    $_SERVER 
    $_GET
                ****$_POST****
    $_REQUEST
    $_FILES
    $_COOKIE
    $_SESSION
    */
    //What is the $_POST method ? --> It provides access to incoming data via request send tags SECRETLY.(You can't see any information in URL.)
    /*

    Firstly we will create index.php and result.php:(NOTE:If you are using the POST method in index.php you must to use POST method in result.php.Otherwise, you can't reach the data.)

    index.php:

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form action"sonuc.php" method="post">

    Name: <input type="text" name="Name"> <br />
    Name: <input type="text" name="Name"> <br />
    <input type="submit" value="Submit">

   </form>


   result.php:
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $Name=$_POST["Name:"]; ---> We can reach the Post information now !
    $Surname=$_POST["Surname:"];

    echo $Name;                         --> You can see, we can reach the data. But you can't see any information in URL part.
    echo $Surname;
    *?>
    */
?>
</body>
</html>