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
    $_GET
    $_POST
    $_REQUEST
    $_FILES
                ****$_COOKIE****
    $_SESSION
    */
    //What is the $_COOKIE method ?
    // --> Allows access to COOKIE data stored in any user's browser. It is stored in the user's BROWSER as a cookie, but it has a different function than a cookie. Users' information is stored more securely in the system SERVER.
    
    /*
    index.php file should include:

     <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
            <?php
            setcookie("User","BoraÇiçek - Im learning to PHP!");
            $Cookie = $_COOKIE["USER"];

            echo  $Cookie; 


            *?>
</body>
</html>




*/


?>
</body>
</html>