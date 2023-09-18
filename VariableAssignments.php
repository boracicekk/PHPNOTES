<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //Variable assignment examples :
    $a = 999;  // GLOBAL VARIABLE ASSIGNMENT PART
    $b = 1;
    $c = $a + $b;

    function test(){
        //LOCAL VARIABLE ASSIGNMENT PART
        $a=898;
        $b=2;
        $c= $a + $b;
        echo "The result of your addition = ";
        echo $c;
        
    }
    
    test(); // LOCAL VARIABLE PART SHOWN US 900


    echo "  The result of your addition = ";
    echo $c; // GLOBAL VARIABLE PART SHOWN US 1000
    

    
    $a = 1097;  // ALSO WE CAN CHANGE THE GLOBAL ASSIGNMENT VARIABLE LATER WITH SAME NAME... 
    $b = 3;
    $c = $a + $b;

    echo "  The result of your addition = ";
    echo $c; // THE NEW RESULT WILL BE 1100!
    
    ?>
</body>
</html>