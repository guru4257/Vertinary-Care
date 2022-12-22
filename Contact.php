<?php

$firstname = $_POST['firstname'];
$lastname= $_POST['lastname'];
$country= $_POST['country'];
$subject= $_POST['subject'];
$fromemail= $_POST['fromemail'];
$toemail= $_POST['toemail'];



if (!empty($firstname) || !empty($lastname) || !empty($country) ||  !empty($subject) || !empty($fromemail) || !empty($toemail) )
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
  $SELECT = "SELECT fromemail From contact Where fromemail = ? Limit 1";
  $INSERT = "INSERT Into contact (firstname ,lastname ,country ,subject ,fromemail, toemail )values(?,?,?,?,?,?)";

//Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $fromemail);
     $stmt->execute();
     $stmt->bind_result($fromemail);
     $stmt->store_result();
     $rnum = $stmt->num_rows;

     //checking username
      if ($rnum==0){
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("ssssss", $firstname ,$lastname ,$country ,$subject ,$fromemail, $toemail );
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