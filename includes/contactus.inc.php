<?php

if (isset($_POST['submit'])){
	include_once 'dbh.inc.php';

  $name = mysqli_real_escape_string($conn, $_POST['name']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$subject = mysqli_real_escape_string($conn, $_POST['subject']);
	$message = mysqli_real_escape_string($conn, $_POST['message']);


  if(empty($name) || empty($email) || empty($subject) || empty($message)){
  header("Location: ../contactus.php?contact=empty");
  exit();
  }else{
    if (!preg_match("/^[a-zA-Z]*$/",$name)){
    header("Location: ../contactus.php?contact=name");
    exit();
    }else {

  if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
    header("Location: ../contactus.php?contact=email");
    exit();
    }
  else{
        $sql = "INSERT INTO comments (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message');";
				 mysqli_query($conn, $sql);
				 header("Location: ../contactus.php?signup=Success");
				exit();

      }
    }
  }
}
