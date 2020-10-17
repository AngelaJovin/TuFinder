<?php
session_start();
require_once("includes/db.php");
require_once("includes/functions.php");




if(isset($_POST["login"])){
  
$username=$_POST["loginEmail"];
$password=$_POST["loginPassword"];
    $email=authenticate_user($username, $password); //use this to store in an session
    if($email){// user verfied
        $_SESSION["email"]=$email;
        unset($_SESSION['message']);
        echo "you are logged in";
        echo $email;
        header("Location: index.php"); 

    }
    else{
      $_SESSION["message"]="not logged in";
      $_SESSION["failedToSignin"]="yes";
          header("Location: index.php"); 
           
        }
}elseif(isset($_POST["signup"])){
  print_r($_POST);
  $signupName=$_POST["signupName"];
  $SignupAs=$_POST["SignupAs"];
  $Subject=$_POST["Subject"];
  $signupPhone=$_POST["signupPhone"];
  $signupEmail=$_POST["signupEmail"];
  $signupPassword=$_POST["signupPassword"];
  
echo "here to signup";
}

//print_r($conn);
?>