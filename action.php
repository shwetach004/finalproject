<?php
     include 'database.php';

     $username=$_POST['username'];
     $email=$_POST['email'];
     $contact=$_POST['contact'];
     $address=$_POST['address'];
     $message=$_POST['message'];

//users==table_name in database
 
     $sql="INSERT INTO users(Username, Email, Contact, Address, Message) VALUES('$username', '$email', '$contact', '$address', '$message')";
     $result=mysqli_query($conn, $sql);
     if($result){
        echo "Error: " . mysql_error($conn);
        return false;
        }
     else{
        header('Location: ./thankyou.html');
     }
?>