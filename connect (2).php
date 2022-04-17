<?php
  $firstName = $_POST['firstName'];
  $lastName = $_POST['lastName'];
  $gender = $_POST['gender'];
  $email = $_POST['email'];
  $phonenumber = $_POST['phonenumber'];
  $password = $_POST['password'];

//database connection
  $conn = new mysqli('localhost','root','','hackathon glory');
  if($conn->connect_error){
     die('connection failed : '.$conn->connect_error);
  }else{
    $stmt = $conn->prepare("insert into login(firstName, lastName, gender, email, phonenumber, password) values(?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssis",$firstName,$lastName,$gender,$email,$phonenumber,$password);
    $stmt->execute();
    echo"Registration Successful";
    $stmt->close();
    $conn->close();
}
?>