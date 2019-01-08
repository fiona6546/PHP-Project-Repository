<?php
$host = "127.0.0.1";
$user = "fiona6546";                     
$pass = "";  
$db = "c9";
$port = 3306;
$connection = mysqli_connect
$query = "SELECT * FROM users";
$result = mysqli_query($connection, $query);
      while ($row = mysqli_fetch_assoc($result)) {
		  echo "The ID is: " . $row['1'] . " and the Username is: " . $row['fiona6546'];
	  }
	  