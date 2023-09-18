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
                ****$_FILES****
    $_COOKIE
    $_SESSION
    */
    //What is the $_FILES method ?
    // --> It provides the opportunity to access the relevant file data while uploading any file to the HTTP server.
    
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

    <form action="result.php" method="post" enctype="multipart/form-data">    ------> The method must be POST for file actions. 

    Choose: <input type="file name="File">

    <input type="submit" value="Upload File">
</body>
</html>

Secondly we will create a result.php file:

<?php

IncomingFile = $_FILES["File"];

<-----X   echo $IncomingFile   X-----> This is a common mistake. We can't use to echo() function. We should use to print_r() function.

echo "<pre>";
print_r($IncomingFile);        ---> Now we can reach the file's data(file name,type,tmp_name,error information and file's size.).
echo "<pre>";

In addition;

You can shown these:

echo "Incoming file's name: " . $_FILES["File"]["name"];  // for example :"Incoming file's name : Logo.png"


*?>


*/

?>
</body>
</html>