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
        <form name="form" action="<?php $_SERVER["PHP_SELF"]?>" method="post">
        <input type="submit" class="styled-button-5" value="YES" name="yes"/> 
        <input type="button" class="styled-button-6" value="NO" name="no"/> 
<style type="text/css">
.styled-button-5 {
	background-color:#ed8223;
	color:#fff;
	font-family:'Helvetica Neue',sans-serif;
	font-size:18px;
	line-height:30px;
	border-radius:20px;
	-webkit-border-radius:20px;
	-moz-border-radius:20px;
	border:0;
	text-shadow:#C17C3A 0 -1px 0;
	width:120px;
	height:32px;
        position: absolute;
        top: 180px;
        left: 400px;
        cursor: pointer;
        
}
.styled-button-6 {
	background-color:#ed8223;
	color:#fff;
	font-family:'Helvetica Neue',sans-serif;
	font-size:18px;
	line-height:30px;
	border-radius:20px;
	-webkit-border-radius:20px;
	-moz-border-radius:20px;
	border:0;
	text-shadow:#C17C3A 0 -1px 0;
	width:120px;
	height:32px;
        position: absolute;
        top: 180px;
        left: 600px;
        cursor: pointer;
        
}
</style>
        <?php
        echo "<h2 style='font-family:arial;color:red;font-size:26px; position: absolute; top: 40px; left: 250px'> ARE YOU SURE YOU WANT TO LOGOUT????</h2><br><br>";
       
            setcookie("admin","",time()-3600);
        echo "your cookie has been deleted<br>";
        header("Location: home_page1.html");
        ?>
        </form>
    </body>
</html>
--
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
        <form name="form" action="<?php $_SERVER["PHP_SELF"]?>" method="post">
        <input type="submit" class="styled-button-5" value="YES" name="yes"/> 
        <input type="button" class="styled-button-6" value="NO" name="no"/> 
<style type="text/css">
.styled-button-5 {
	background-color:#ed8223;
	color:#fff;
	font-family:'Helvetica Neue',sans-serif;
	font-size:18px;
	line-height:30px;
	border-radius:20px;
	-webkit-border-radius:20px;
	-moz-border-radius:20px;
	border:0;
	text-shadow:#C17C3A 0 -1px 0;
	width:120px;
	height:32px;
        position: absolute;
        top: 180px;
        left: 400px;
        cursor: pointer;
        
}
.styled-button-6 {
	background-color:#ed8223;
	color:#fff;
	font-family:'Helvetica Neue',sans-serif;
	font-size:18px;
	line-height:30px;
	border-radius:20px;
	-webkit-border-radius:20px;
	-moz-border-radius:20px;
	border:0;
	text-shadow:#C17C3A 0 -1px 0;
	width:120px;
	height:32px;
        position: absolute;
        top: 180px;
        left: 600px;
        cursor: pointer;
        
}
</style>
        <?php
        echo "<h2 style='font-family:arial;color:red;font-size:26px; position: absolute; top: 40px; left: 250px'> ARE YOU SURE YOU WANT TO LOGOUT????</h2><br><br>";
       
            setcookie("user","",time()-3600);
        echo "your cookie has been deleted<br>";
        header("Location: home_page1.html");
        ?>
        </form>
    </body>
</h