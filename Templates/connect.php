<?php 

include 'dbconnect.php';
$uname = $_POST["name"];
$uemail = $_POST["email"];
$umessage = $_POST["message"];

$sql  = "INSERT INTO contact(name,email,message)  VALUES('$uname','$uemail','$umessage')";
$qry = mysqli_query($conn, $sql);

if($qry) {
    header('location:contact.html');
  }
  else{
    echo"Operation Failed!!";
  }
?>

