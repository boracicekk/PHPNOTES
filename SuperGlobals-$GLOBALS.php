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
                ****$GLOBALS****
    $_SERVER
    $_GET
    $_POST
    $_REQUEST
    $_FILES
    $_COOKIE
    $_SESSION
    */

//What is the usage of $GLOBALS type?

 $a = 100;
 $b = 150;
 $c = $a + $b;
 echo $c;
 echo "<br />";
 //We know these are global variables. variable "c" gives us 250.
 function wrongUsage(){
    $d = 50;
 }
 wrongusage();
//echo $c + $d;  Its wronge usage because d variable is local variable. Because of that we cannot reach the value of d. At this point $GLOBALS tag helps us.
function trueUsage(){
    $GLOBALS["d"]=50;
}
trueUsage(); // Now we changed the type of local variable. We can reach the global side to local side's value!
echo $c + $d;
// We can see that the result: 300.


    ?>
</body>
</html>