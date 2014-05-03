<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Admin Information</title>
         <style type="text/css">
             
             #menu
{
    /*Styling the menu width and height*/
    list-style:none;
    margin:30px auto 0px auto;
    width:1000px;
    height:45px;
    padding:0px 20px 0px 20px;
     
    /* Creating the curved corner of the border*/
    border-radius:10px;
    -moz-border-radius:10px;
    -webkit-border-radius:10px;
    /*Styling the background with fading effect*/
     
    background:#333333;
    background: -moz-linear-gradient(top, #000, #999);
    background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#000), to( #999));
     
    /*Making the shadow effect into the menu bar */
    box-shadow: inset 1px 1px 10px #FFFFFF;
    -moz-box-shadow: inset 1px 1px 10px #FFFFFF;
    -webkit-box-shadow: inset 1px 1px 10px #FFFFFF;
    border:1px solid #000;
     
     
}
#menu li /*Styling the li part of the menu*/
{
    float:left;
    padding:10px 20px 30px 40px;
    display: block;
    position:relative;
    text-align:center;
    margin-right:30px;
    margin-top:7px;
    border:none;
 
     
}
 
#menu li a /*Styling the link part of the menu li*/
{
    text-decoration:none;
    color:#999999;
    text-shadow:1px 1px 10px #FFCC99;
}
#menu li:hover a /*Styling the link part of the menu li in hover state*/
{
    color:#FFF;
    text-shadow:1px 1px 10px #CCC;
}
             
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
         <ul id="menu">
<li><a href="home_page1.html">Home</a></li>
<li><a href="#">About Us</a></li>
<li><a href="nextpage_admin_login.php">Back to main Menu</a></li>
<!--<li><a href="#"></a></li>-->
<li><a href="admin_logout.php">Log Out</a></li>
</ul>
         <?php
        echo "<h3><b><i><font color='white'> Admin Logged:</font> <font color='red'>".$_COOKIE["admin"]."</font></b></i><br><hr>";
        ?>
    <center>
        <h1><font color="aquamarine">USER INFORMATION</font></h1>
        </center>
    <center>
        <div>
        <?php
        
        $admin = $_COOKIE["admin"];
        //echo "the user is ".$user."<br>";
        
        $con=mysqli_connect("localhost","root","root","quiz_db");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$result = mysqli_query($con,"SELECT * FROM admin where username='$admin'");

while($row = mysqli_fetch_array($result))
  {
    echo "<h3>YOUR USER NAME:&nbsp;&nbsp;&nbsp;".$row['username']."<br>";
    echo "<h3>YOUR PASSWORD: ".$row['password']."<br>";
    echo "<h3>YOUR FIRST NAME: ".$row['fname']."<br>";
    echo "<h3>YOUR LAST NAME: ".$row['lname']."<br>";
    echo "<h3>YOUR EMAIL: ".$row['email']."<br>";
    echo "<h3>YOUR MASTER USERNAME: ".$row['masterusn']."<br>";
  }
        
        // put your code here
        ?>
    </div>
        </center>
    </body>
</html>
<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        ?>
    </body>
</html>
