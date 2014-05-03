<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    <style type="text/css">
              div
{
border:1px solid #a1a1a1;
padding:10px 40px; 
background: firebrick;
width:700px;
border-radius:25px;
box-shadow: 10px 10px 5px #888888;
}
.styled-button-5 {
	background-color: #004a80;
	color: #fff;
	font-family:'Helvetica Neue',sans-serif;
	font-size:18px;
	line-height:30px;
	border-radius:20px;
	-webkit-border-radius:20px;
	-moz-border-radius:20px;
	border:0;
	text-shadow:#C17C3A 0 -1px 0;
	width:300px;
	height:32px
}
    </style>
    <script language="javascript">
    function logout()
    {
        window.location="admin_logout.php";
    }
    function cont()
    {
        window.location='nextpage_admin_login.php';
    }
    </script>
    </head>
    
    <body bg="bg.jpg">
        <form name="form" action="<?php $_SERVER["PHP_SELF"]?>" method="post">
    <center>
        <div>
        <?php
        if(isset($_COOKIE["admin"]))
        {
        echo "<h1><font color='aqua'> 1 ADMIN IS ALREADY LOGGED IN</h1><br>";
        echo "<h3> the looged admin is ".$_COOKIE["admin"]."<br>";
        echo "preferred action: <br>";
        //echo "<input type='button' value='log out???' name='log_out' class='styled-button-5'>";
         //echo "<input type='button' value='log out???' name='log_out' class='styled-button-5'>";
        }
        else
        {
            header("Location: admin_login.php");
        }
        if(isset($_POST['log_out']))
        {
            header("Location: logout.php");
        }
        ?>
            <input type='button' value='log out???' name='log_out' class='styled-button-5' onclick="logout();">
            <input type='button' value='Continue with the same user???' name='log_out' class='styled-button-5' onclick="cont();">
            </div>
        </center>
            </form>
    </body>
</html>
