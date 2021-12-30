<?php
 if($_SERVER['REQUEST_METHOD']=='POST'&&isset($_POST['submit'])){
     $conn=mysqli_connect('localhost','root','','details') or die("connection failed:".mysqli_connect_error());
     if(isset($_POST['user'])&&isset($_POST['password']))
     {
         $user=$_POST['user'];
         $password=$_POST['password']

         $sql="INSERT INTO 'details'('user','password') VALUES ('$user','$password') ";

         $query=mysqli_query($conn,$sql);
         if(query){
             echo "ok";
         }
         else{
             echo "not ok";
         }
     }
 }