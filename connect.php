<?php

$firstname = $_POST['firstname'];
$lastname= $_POST['lastname'];
$gender= $_POST['gender'];
$countrycode= $_POST['countrycode'];
$phone= $_POST['phone'];
$email= $_POST['email'];
$password= $_POST['password'];
$retypepassword= $_POST['retypepassword'];



if (!empty($firstname) || !empty($lastname) || !empty($gender) ||  !empty($countrycode) || !empty($phone) || !empty($email) || !empty($password) || !empty($retypepassword)  )
{

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "database";



// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()){
  die('Connect Error ('. mysqli_connect_errno() .')'
    . mysqli_connect_error());
}
else{
  $SELECT = "SELECT email From registration Where email = ? Limit 1";
  $INSERT = "INSERT Into registration (firstname ,lastname ,gender ,countrycode ,phone, email ,password ,retypepassword )values(?,?,?,?,?,?,?,?)";

//Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $email);
     $stmt->execute();
     $stmt->bind_result($email);
     $stmt->store_result();
     $rnum = $stmt->num_rows;

     //checking username
      if ($rnum==0){
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("sssiisss", $firstname ,$lastname ,$gender ,$countrycode ,$phone, $email ,$password ,$retypepassword );
      $stmt->execute();
      echo "New record inserted sucessfully";
      } else {
      echo "Someone already register using this email";
     }
     $stmt->close();
     $conn->close();
    }
} else {
 echo "All field are required";
 die();
}
?>