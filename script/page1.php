<?php
$conn = new mysqli("192.168.1.168","phpuser","Ig86N3tUa9","ws28tg");
if ($conn->connect_error) {
    die("an error has occured, please check your connection and try again");
}
$t=time();
$cookie_name = "user";
if(!isset($_COOKIE[$cookie_name])) {
    echo "an Error has occured, please ensure that cookies are enabled and try again";
} 
else {
$userid = $_COOKIE[$cookie_name];
  $sql = "UPDATE `ws28tg`.`users` SET `finished` = '1',`endTime` = '$t' WHERE (`userid` = '$userid');";
  if(mysqli_query($conn, $sql)){
    echo "Welldone, you have completed the challenge ";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
}




// Create connection
//$conn = new mysqli("192.168.1.168","phpuser","Ig86N3tUa9","ws28tg");
// Check connection
//if ($conn->connect_error) {
//    die("Connection failed: " . $conn->connect_error);
//}

//$sql = "SELECT * FROM users WHERE (userid = 139215583)";
//$result = $conn->query($sql);

//if ($result->num_rows > 0) {
    // output data of each row
//    while($row = $result->fetch_assoc()) {
//        echo "id: " . $row["userid"];
//    }
//} else {
//    echo "0 results";
//}
//$conn->close();


//mysqli_close($conn);
?>