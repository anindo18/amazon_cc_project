<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>User Information</title>
        <style type="text/css">
             div
{
    position: absolute;
    top: 200px;
    left: 300px;
border:1px solid #a1a1a1;
padding:10px 40px; 
background: firebrick;
width:700px;
border-radius:25px;
box-shadow: 10px 10px 5px #888888;
}
               h1
{
text-shadow: 5px 5px 5px #FF0000;
}
        </style>
    </head>
    <body background="bg.jpg">
        <?php
        echo "<h3><b><i><font color='white'> User Logged:</font> <font color='red'>".$_COOKIE["user"]."</font></b></i><br><hr>";
        ?>
    <center>
        <h1><font color="aquamarine">USER INFORMATION</font></h1>
        </center>
    <center>
        <div>
    
        <?php
        
        $user = $_COOKIE["user"];
        //echo "the user is ".$user."<br>";
        
        $con=mysqli_connect("localhost","root","root","quiz_db");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$result = mysqli_query($con,"SELECT * FROM user where username='$user'");

while($row = mysqli_fetch_array($result))
  {
    echo "<h2>YOUR USER NAME: ".$row['username']."<br>";
    echo "<h2>YOUR PASSWORD: ".$row['password']."<br>";
    echo "<h2>YOUR FIRST NAME: ".$row['fname']."<br>";
    echo "<h2>YOUR LAST NAME: ".$row['lname']."<br>";
    echo "<h2>YOUR EMAIL: ".$row['email']."<br>";
    
  }
        
        // put your code here
        ?>
            </div>  
        </center>
    </body>
</html>
