<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

//we are going to learn Array rules in PHP!
//Arrays defines array() function or [] in PHP.
//Users can see the defined array's whole elements with print_r() function.

$user =  array("Bora Çiçek","Aziz Sancar","Albert Einstein");
// print_r($user); --> We can use with <pre> tags. Thus, the outputs look like more tidy.

echo("<pre>");
print_r($user);
echo("</pre>");

// Also we can see the each elements on our screen with echo() function!

echo "The first element in User Array:" . $user[0] . "<br />";  // The first element's index number start is 0 in Array defaultly.
echo "The second element in User Array:" . $user[1] . "<br />";
echo "The third element in User Array:" . $user[2] . "<br />";

// We can define spesific key instead of 0.

$definekey = array("Color"=>"Blue","Car"=>"Mercedes","Bora Çiçek","PHP" );

echo "<pre>";
print_r($definekey);
echo "</pre>";              // As you can see, we defined the key values but Bora Çiçek and PHP elements defined default key(index) numbers with 0 and 1.

// How we can call Blue or Mercedes elements in our array?

echo "<br />";
echo $definekey["Color"]; // As you can see, we can call the "Blue" element with it's key value.
echo "<br />";

echo "<br />";
echo $definekey["Car"]; // As you can see, we can call the "Blue" element with it's key value.
echo "<br />";



//Can we assign the same KEY values?

$keyrules = array("Color"=>"Blue","Color" => "Red","Car"=>"Mercedes","Bora Çiçek","PHP" );

echo "<br />";
echo $definekey["Color"]; // As you can see, we can't reach the Red elements because of we should define UNIQUE KEY like Color,COlor,COLor,COLOr,COLOR.
echo "<br />";

// what is the constant array; There are 2 ways to create a constant array(PHP recommends create with array() function.), we can't add,edit,delete process later. Let's construct it!

define("constantArray",array("Bora","Çiçek","Learning","PHP"));// we can create with [] like : define constantArray = ["Bora","Çiçek","Learning","PHP"];

echo("<pre>");
print_r(constantArray);             
echo("</pre>");

const ConstantArray = array("Bora","Çiçek","Learning","PHP");  // we can create with [] like : const ConstantArray = ["Bora","Çiçek","Learning","PHP"];

echo("<pre>");
print_r(ConstantArray);             
echo("</pre>");


//Adding elements in array one by one:

$names[] = "Bora";
$names[] = "Çiçek";
$names [] = "Aziz";
$names [] = "Sancar";

echo("<pre>");
print_r($names);
echo("</pre>");

// How we can assign KEY values adding one by one? Let's see!


$namess["Name1"] = "Bora";
$namess["Surname1"] = "Çiçek";
$namess ["Name2"] = "Aziz";
$namess ["Surname2"] = "Sancar";

echo("<pre>");
print_r($namess);
echo("</pre>");

// How to assign a variable or constant to an array? Let's see!

define("Vehicle","Car");
define("Name","BoraÇiçek");

const Color = "Blue";
const COLOR = "Red";

$Values = array("Vehicle","Name", Color, COLOR,"PHP");

echo("<pre>");
print_r($Values);
echo("</pre>");

// Can we assign our array variable and fill it later? Let's see!
$fillItLater = [];
$fillItLater[] ="Bora";
$fillItLater[] = "Çiçek";

echo("<pre>");
print_r($fillItLater);  //As you can see, we can fill the array later..
echo("</pre>");

//Adding new data to an already created array:
$AddingnewData = array("Bora","Çiçek","PHP");
$AddingnewData["First"] = "Code";
$AddingnewData["Second"] = "Is";
$AddingnewData["Third"] = "Fun";

echo("<pre>");
print_r($AddingnewData);  //As you can see, we can fill new elements with key later..
echo("</pre>");

// Can we rechange elements of the array? Let's see!

$userData = array("PHP"=> "Bora", "HTML" => "Burak", "JS"=> "Fatih", "CSS"=>"Hatice");
$userData["HTML"] = "Furkan";
$userData["JS"]= "Özge";

echo "<pre>";
print_r($userData);
echo "</pre> <br />";

echo $userData["PHP"] . "<br />";
echo $userData["HTML"] . "<br />";
echo $userData["JS"] . "<br />";
echo $userData["CSS"] . "<br />";

//Assigning an array to a different value:

$mainArray = array("PHP"=> "Bora", "Hakan","JS"=>"Burak");

echo "<pre>";
print_r($mainArray);
echo "</pre> <br /> <br />";

$differentValue = $mainArray;

$differentValue["CSS"]= "Fatih";     
$differentValue[]= "Tolga";     //1.index
$differentValue[]= "Yunus";     //2.index

echo "<pre>";
print_r($differentValue);               // As we can see, We assigned array to a different value..
echo "</pre> <br /> <br />";


// Combining 2 Arrays into a single array:

$FootballTeams = array("Fenerbahce","Galatasaray","Beşiktaş","Trabzonspor");
$BasketballTeams = array("AnadoluEfes","BahçeşehirKoleji","TürkTelekom","PetkimSpor","Karşıyaka");

$SportTeams = $FootballTeams + $BasketballTeams;

echo "<pre>";
print_r($differentValue);               // As we can see, We combining 2 Arrays into a single array!
echo "</pre> <br /> <br />";

//Creating a nested multidimensional array:
$MultidimensionalArray = array("Bora", "Çiçek", array("Blue","Red","Yellow","Black"),"Burak","Sercan");

echo "<pre>";
print_r($MultidimensionalArray);
echo "</pre> <br /> <br />";

echo $MultidimensionalArray[0]. "<br />";
echo $MultidimensionalArray[1]. "<br />";

echo $MultidimensionalArray[2][0] . "<br />";
echo $MultidimensionalArray[2][1] . "<br />";

echo "<br />" . $MultidimensionalArray[3] . "<br />";
echo $MultidimensionalArray[4];

?>



    
</body>
</html>