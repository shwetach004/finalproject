<?php
  function OpenCon(){
     $host="localhost";
     $user="root";
     $pass="";
     $dbname="contact1";

     $conn= new mysqli($host, $user, $pass, $dbname);
     return $conn;
  }
 
  function CloseCon($conn){
     $conn -> close();
  }
?>
