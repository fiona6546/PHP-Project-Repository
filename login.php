<?php
 $usernameERROR=$passwordERROR="";
 $username=$password="";
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = test_input($_POST["username"]);
  $password = test_input($_POST["password"]);
 }
  function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
  
if (empty($_POST["username"])) {
$usernameErr = "Username is required";
} else {
    $name = test_input($_POST["username"]);
	}
	
if (empty($_POST["password"])) {
$passwordErr = "Password is required";
} else {
    $password = test_input($_POST["password"]);
  }
  
 //credentials 
$host = "127:0:0:1";
$user = "fjain"
$pass = "";
$db = phpproject;
$port = 3306;
$connection = mysqli_connect($host, $user, $pass, $db, $port)or die(mysql_error());

if ($conn->query($sql) === TRUE) {
    echo "You have successfully subscribed!";
} else {
    echo "Error! : " . $connection->error;
}

Username: <input type="text" name="username" value="<?php echo $username;?>">
Password: <input type="text" name="password" value="<?php echo $password;?>">


?>

