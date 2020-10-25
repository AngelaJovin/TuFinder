<?php
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname="tufinder";

//real for deployment in heroku
$servername="us-cdbr-east-02.cleardb.com";
$username = "b9ac30daddae48";
$password = "e8625356";
$dbname="heroku_c8d476e1a5e6864";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
else{
  // echo "connected";
  // $sql="CREATE TABLE `registration` (
  //   `id` int(11) NOT NULL,
  //   `email` varchar(100) DEFAULT NULL,
  //   `name` varchar(200) DEFAULT NULL,
  //   `password` varchar(200) DEFAULT NULL,
  //   `status` varchar(50) DEFAULT NULL,
  //   `subject1` varchar(100) DEFAULT NULL,
  //   `subject2` varchar(100) DEFAULT NULL,
  //   `subject3` varchar(100) DEFAULT NULL,
  //   `bio` text DEFAULT NULL,
  //   `contact` varchar(255) DEFAULT NULL,
  //   `profilePicture` varchar(255) DEFAULT NULL
  // ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
  // ";
//$result_set=mysqli_query($conn,$sql);
// if(!$result_set){
//   die("Database Query failed");
//  }
}

?>