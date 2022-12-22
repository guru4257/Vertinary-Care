<?php
     $firstname = $_POST['firstname'];
     $lastname = $_POST['lastname'];
     $gender = $_POST['gender'];
     $countrycode = $_POST['countrycode'];
     $phone = $_POST['phone'];
     $email =$_POST['email'];
     $password= $_POST['password'];
     $retypepassword = $_POST['retypepassword']
https://youtu.be/qeudj-evY44
     // Database connection
     $conn = new mysqli('localhost','root','','database');
     if($conn->connect_error){
          die('Connection Failed : ' . $conn->connect_error);
     } else {
          $stmt = $conn->prepare("insert into registration(firstname, lastname, gender, countrycode, phone, email, password,retypepassword) 
               values(?, ?, ?, ?, ?, ?, ?, ?)");
          $stmt->bind_param("sssiisss", $firstname, $lastname, $gender, $countrycode, $phone, $email, $password,$retypepassword);
          $stmt->execute();
          echo "Registration successfully...";
          $stmt->close();
          $conn->close();
     }
?>