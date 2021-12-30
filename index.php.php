<?php
?>
<html>
    <head>
        <title>
         login page
        </title>
        <style>
            body{
                background-color: #cccccc;
                color:black;
                margin-bottom: 200px;
            
            }
       
       
           
            div{
                background-color: white;
                
                
                border-radius: 20px;
            }
            #main{
               
                padding: 30px;
                margin-top: 150px;
                margin-left: 250px;
                margin-right: 250px;
                background-color: white;
                border-radius: 20px; 
                font-size: 20px;
                font-family: verdena;
                box-shadow:0 4px 5px 0 rgb(0,0,0,0.1),0 4px 5px 0 rgb(0,0,0,0.2);
            }
            input{
                border: none;
                outline: none;
                border-bottom: 3px solid green;
                text-decoration: none;
                font-size: 25px;
                text-align:center;
                letter-spacing: 2px;
                
                
            }
            #submit{
                color:white;
                background-color:blue;
                border:none;
                width: 60%;
                font-size:30px;
                padding-top:2px;
                padding-bottom:2px;
            }
            #submit:hover{
                color:blue;
                background-color:#6699ff;
                border:2px solid blue;
                font-size:30px;
                padding-top:2px;
                padding-bottom:2px;
                border-radius:10px;

            }
            #signup{
                color:white;
                background-color:green;
                border:none;
                width: 60%;
                font-size:30px;
                padding-top:2px;
                padding-bottom:2px;
            

            }
            a{
                text-decoration:none;
                color:white;
            }
            a:hover{
                color:green;
            }
            #signup:hover{
                color:green;
                background-color:#66ff99;
                border:2px solid green;
                font-size:30px;
                padding-top:2px;
                padding-bottom:2px;
                border-radius:10px;

            }



           


        </style>
    </head>
    <body>
      
           <center>
          <div id="main"> <div>  <h2>LOGIN</h2></div> <hr><hr><br>
    <form method="post" >
       ENTER USERNAME: <input id="a" type="text" name="name" placeholder="username" required><br><br>
       ENTER PASSWORD: <input id="b" type="password" name="password" placeholder="password" required><br><br>
      
        <button type="submit" name="submit" id="submit">Login</button>
        
      
        

    </form>

    <form type="submit"  action="Sign Up.php">
    <button type="submit" id="signup">Sign Up</button>
    </form>
</div> 
</center>


       
    </body>
</html>
<?php
session_start();
    $con=mysqli_connect("localhost","root","","details");
    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $password=$_POST['password'];
        
        $sql="SELECT * FROM info where name='$name' AND password='$password'";
        $run=mysqli_query($con,$sql);
        if(mysqli_num_rows($run)>0){
            $_SESSION['name']=$name;
       
            header('location:homePage.html');
        }
        else{
            //invalid
            echo "<script>alert('invalid credentials')</script>";
            return false;

        }
    }
    ?>