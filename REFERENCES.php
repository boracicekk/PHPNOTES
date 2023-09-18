<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // REFERENCES:
    $firstVariable = "BoraÇiçek";
    $secondVariable = $firstVariable;

    echo $firstVariable;
    echo "<br />";
    echo $secondVariable; // These shown us : BoraÇiçek , BoraÇiçek
    echo "<br /> <br />";

    $firstVariable = "SiberVatan";
    echo $firstVariable; // Now we changed only firstVariable 
    echo "<br />";
    echo $secondVariable;
    echo "<br /> <br />";

    //But if we use & what will be happen?

    $firstVariable = "BoraÇiçek";
    $secondVariable = &$firstVariable; //We assigned to firstVariable's adress to secondVariable.
    echo $firstVariable;
    echo "<br />";
    echo $secondVariable; // These shown us : BoraÇiçek , BoraÇiçek
    echo "<br /> <br />"; 

    $firstVariable = "SiberVatan";
    echo $firstVariable; // Now we changed both of them! 
    echo "<br />";
    echo $secondVariable;







    ?>
</body>
</html>