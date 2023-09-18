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
                ****$_GET****
    $_POST
    $_REQUEST
    $_FILES
    $_COOKIE
    $_SESSION
    */
    //What is the $_GET method ? --> It provides the opportunity to access requests and form transactions via URL.
    /*
    We assume that we have got index.php file and result.php file. NOTE: If you are using the GET method in index.php you must to use GET method in result.php.Otherwise, you can't reach the data.
    index.php file should include:


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


Now we can build result.php part:
You can create 2 type it.
First: you can create in default html code  or you can create only 
<?php     ?> tag.

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php


$Directedgname = $_GET["Name"];
$DirectedSurname = $_GET["Surname"];

echo $Directedgname;                   ---> Now we can see the values.
echo $DirectedSurname;
 
    
*?>
</body>
</html>

*/
?>
</body>
</html>
