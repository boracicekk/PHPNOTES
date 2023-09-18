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
    $_POST
                ****$_REQUEST****
    $_FILES
    $_COOKIE
    $_SESSION
    */
    //What is the $_REQUEST method ? --> It provides access regardless of requests coming via the GET or POST method.

    /*
    Firstly we will create a index.php file. For get usage get method.
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <form action="result.php" method="get">                             ---> (we linked both php file)
        Name : <input type="text" name = Name> <br />
        Surname : <input type="text" name = Surname> 
        <input type="submit" value="submit">
        </form>
</body>
</html>

Secondly we will create a result.php file:

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php


$Directedgname = $_REQUEST["Name"];
$DirectedSurname = $_REQUEST["Surname"];

echo $Directedgname;                   ---> Now we can see the values.
echo $DirectedSurname;
 
    
*?>


Now we will configure the use of the POST method..
Firstly we will create a index.php file.


    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <form action="result.php" method="post">                             ---> (we linked both php file)
        Name : <input type="text" name = Name> <br />
        Surname : <input type="text" name = Surname> 
        <input type="submit" value="submit">
        </form>
</body>
</html>


Secondly we will create a result.php file:

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php


$Directedname = $_REQUEST["Name"];
$DirectedSurname = $_REQUEST["Surname"];

echo $Directedgname;    ---> **Now we can figure out the main point. $_REQUEST method provides us to reach GET or POST method's informaiton!**
echo $DirectedSurname;
 
    
*?>


    */

    ?>

</body>
</html>