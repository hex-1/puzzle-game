
<?php
header( "Location: http://192.168.1.168/page1.php" );
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("192.168.1.168","phpuser","Ig86N3tUa9","ws28tg");
 
// Check connection
if($link === false){
    die("an error has occured, please check your connection and try again");
}
 
// Escape user inputs for security
$name = mysqli_real_escape_string($link, $_REQUEST['user_name']);
$id = rand(0,999999999);
$check="SELECT COUNT(*) FROM users WHERE userid == id'";
if (mysqli_query($con,$check)>=1)
{
    echo "an error has occured, please check your connection and try again";
}
$t=time();
// Attempt insert query execution
$sql = "INSERT INTO users (userid,name,startTime) VALUES ('$id', '$name', '$t')";
if(mysqli_query($link, $sql)){
} else{
    echo "an error has occured, this is moslt likly due to you not having cookies enabled";
}
$cookie_name = "user";
setcookie($cookie_name, $id, time() + (86400), "/"); // 86400 = 1 day
$cookie_name = "user";
setcookie($cookie_name, $name, time() + (86400), "/"); // 86400 = 1 day
// Close connection
mysqli_close($link);
?>
<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head></head>
<body>
<a href="http://192.168.1.168/page1.php">challenge</a>
</body>
</html>