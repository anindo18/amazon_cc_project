<!--<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>
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
</style>
</head>
 
<body>
<ul id="menu">
<li><a href="home_page.html">Home</a></li>
<!--<li><a href="usernext.php">Take Test</a></li>
<!--<li><a href="home_page.html">GO To Home</a></li>
<li><a href="intro.html">Go to Chapters</a></li>
<li><a href="logout.php">Log out</a></li>
</ul>
 
</body>
</html>
-->
</body>
</html>

<head>
<meta charset="utf-8">
<title>User Login</title>
<link rel="stylesheet" type="text/css" href="style1.css" />
<link rel="icon" href="favicon1.png" type="image/gif" sizes="16x16">
</head>
<body>
<div class="container">
	<section id="content">
            <form action="<?php $_SERVER["PHP_SELF"]?>" method="post">
			<h1>Login Form</h1>
			<div>
				<input type="text" placeholder="Username" required="" id="username" name="username" />
			</div>
			<div>
				<input type="password" placeholder="Password" required="" id="password" name="password"/>
			</div>
			<div>
				<input type="submit" value="Log in" name="submit1" />
				<!--<a href="#">Lost your password?</a>-->
				<a href="user_reg.php">Register</a>
			</div>
		</form><!-- form -->
		<div class="button">
			
		</div><!-- button -->
	</section><!-- content -->
</div><!-- container -->
        <?php
        if (isset($_POST['submit1']))
        {
            $username = $_POST['username'];
            $password = $_POST['password'];
        
            if (isset($_POST["username"]) && isset($_POST["password"]))
       {
           $con=mysqli_connect("localhost","root","root","quiz_db");
            // Check connection
        if (mysqli_connect_errno())
         {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
         }

           $query = "SELECT COUNT(*) FROM user WHERE username='$_POST[username]' and password='$_POST[password]'";
           $username1=$_POST[username];
           $result = mysqli_query($con,$query) or die(mysql_error());;
            $row = mysqli_fetch_array($result);
            if ($row["COUNT(*)"] == 0) 
                {
                    print '<script type="text/javascript">'; 
                    print 'alert("Sorry!!!! The username and password does not match")'; 
                    print '</script>';  
                }
                else
                {
                    //header("Location: usernext.php");
                    $expire=time()+60*60*24*30;
                    setcookie("user", $username1, $expire);
                    header("Location: usernext.php");
                }
        }
        }
        ?>
</body>
</html>