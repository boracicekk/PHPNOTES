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
                **** $_SERVER ****
    $_GET
    $_POST
    $_REQUEST
    $_FILES
    $_COOKIE
    $_SESSION
    */
//What is the $_SERVER ?
/*
The most popular usage of $_SERVER:

PHP_SELF:

$_SERVER["PHP_SELF"] : Its return to URL's path of working php page.(Note: It's not returns to domain name info.)
--> You can attend into any variable or you can use with echo function for reach the information.

*/

$path = $_SERVER["PHP_SELF"];

echo $path;
echo $_SERVER["PHP_SELF"];//for example: "BoraCicek/index.php"

/*
GATEWAY_INTERFACE:

$_SERVER["GATEWAY_INTERFACE"] : Its return to supporting version of CGI(Common Gateway Interface) of PHP page.

*/
echo $_SERVER["GATEWAY_INTERFACE"]; // for example: "CGI/1.1"

/*
SERVER_ADDR:

$_SERVER["SERVER_ADDR"] : It gives the address information of the server where the PHP file is running.

*/
echo $_SERVER["SERVER_ADDR"]; // for example: "::1"

/*
SERVER_NAME:

$_SERVER["SERVER_NAME"] : It gives the name information of the server where the PHP file is running.

*/

echo $_SERVER["SERVER_NAME"]; // for example: "localhost"

/*
SERVER_SOFTWARE:

$_SERVER["SERVER_SOFTWARE"] : It gives the software information of the server where the PHP file is running.

*/
echo $_SERVER["SERVER_SOFTWARE"]; // for example: "Apache/2.4.29(Win32) OpenSSL/1.1.0g PHP/7.2.1"

/*
SERVER_PROTOCOL:

$_SERVER["SERVER_PROTOCOL"] : It gives the protocol information(name and version) of the server where the PHP file is running.

*/
echo $_SERVER["SERVER_PROTOCOL"]; // for example: "HTTP/1.1"

/*
REQUEST_METHOD:

$_SERVER["REQUEST_METHOD"] : Returns the request method information value used to access PHP.

*/
echo $_SERVER["REQUEST_METHOD"]; // for example: "GET"

/*
QUERY_STRING:

$_SERVER["QUERY_STRING"] : Returns the query string information used when accessing the PHP file. 
Does not contain the website's domain name or path information.

*/

echo $_SERVER["QUERY_STRING"]; // for example: "id=12345=name=Bora" 

/*
DOCUMENT_ROOT:

$_SERVER["DOCUMENT_ROOT"] : It gives of information about the root directory where the current PHP file is running, 
as defined in the server's settings file.


*/
echo $_SERVER["DOCUMENT_ROOT"]; // for example: "C:/xampp/htdocs"
/*
HTTP_ACCEPT:

$_SERVER["HTTP_ACCEPT"] : Returns the accepted header content information value for a PHP file access request.


*/

echo $_SERVER["HTTP_ACCEPT"]; // for example: "text/html.application/xhtml+xml,application/xml;q=0.9,image/webp.image/apng.*/*;q=0.8"

/*
HTTP_HOST:

$_SERVER["HTTP_HOST"] :It gives us the domain name.


*/
echo $_SERVER["HTTP_HOST"]; // for example: "localhost"

/*
HTTP_USER_AGENT:

$_SERVER["HTTP_USER_AGENT"] : Its returns to users' browser information.


*/

echo $_SERVER["HTTP_USER_AGENT"]; // for example: "Mozilla/5.0(windows NT 10:0; Win64; x64; Firefox/59.0)"

/*
REMOTE_ADDR:

$_SERVER["REMOTE_ADDR"] : Its returns to users' IP information.


*/
echo $_SERVER["REMOTE_ADDR"]; // for example: "192.158.1.38"

/*
REMOTE_PORT:

$_SERVER["REMOTE_PORT:"] : Its returns the port information value used by the user device viewing the running PHP file to communicate with the web server.


*/
echo $_SERVER["REMOTE_PORT:"]; // for example: "62691"

/*
SERVER_ADMIN:

$_SERVER["SERVER_ADMIN"] : Its returns the admin's mail adress. This information defined within "ServerAdmin".


*/

echo $_SERVER["SERVER_ADMIN"]; //for example: "info@boracicek.com"

/*
SERVER_PORT:

$_SERVER["SERVER_PORT"] : It's return to server's port value. This information defined within "Listen"


*/

echo $_SERVER["SERVER_PORT"]; //for example: "80"

/*
SERVER_SIGNATURE:

$_SERVER["SERVER_SIGNATURE"] : Its return to server, server's software and the others software's version, host's name and server's port value.


*/
echo $_SERVER["SERVER_SIGNATURE"]; // for example: "Apache/2.4.29(Win32) OpenSSL/1.1.0g PHP/7.2.1 Server at localhost Port 80"

    ?>
</body>
</html>