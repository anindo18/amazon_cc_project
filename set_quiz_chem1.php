<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->

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
<li><a href="home_page1.html">Home</a></li>
<li><a href="usernext.php">Take Test</a></li>
<!--<li><a href="home_page.html">GO To Home</a></li>-->
<li><a href="intro.html">Go to Chapters</a></li>
<li><a href="logout.php">Log out</a></li>
</ul>
 
</body>
</html>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>CHEMISTRY QUIZ</title>
        <style type="text/css">
            
            div
{
border:1px solid #a1a1a1;
padding:10px 40px; 
background: firebrick;
width:800px;
border-radius:25px;
box-shadow: 10px 10px 5px #888888;
}
            
            h1
{
text-shadow: 5px 5px 5px #FF0000;
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
	width:120px;
	height:32px
}
        </style>
    </head>
    <body background="bg.jpg">
        <?php
        echo "<p style='position: relative; left: 100px'><b><i><a href='admin_info.php'>".$_COOKIE["admin"]."</a></i></b></p>" ;?>
        <hr>
        <br>
    <center>
        <div>
        <h1><font color="aqua" size="13">STORE CHEMISTRY QUESTION</font></h1>
        <form action="<?php $_SERVER["PHP_SELF"]?>" method="post">
        <font color="white" size="5"> <b>QUESTION:</b></font><br> <textarea rows="10" cols="50" name="ques"></textarea><br><br>
        <font color="white" size="5"><b>OPTION 1:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="option1"><br><br>
       <font color="white" size="5"><b>OPTION 2:</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="option2"><br><br>
       <font color="white" size="5"><b>OPTION 3:</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="option3"><br><br>
       <font color="white" size="5"><b>OPTION 4:</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="option4"><br><br>
       <font color="white" size="5"><b>ANSWER :</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="answer"><br>
       <input type="submit" value="submit" class="styled-button-5">&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" name="reset" class="styled-button-5"> <br>
       </div>
       </center>
           <?php
        if (isset($_POST["ques"]) && isset($_POST["option1"]) && isset($_POST["option2"]) && isset($_POST["option3"]) && isset($_POST["option4"]))
       {
           //require("db.php");
           $con=mysqli_connect("localhost","root","root","quiz_db");
           if (mysqli_connect_errno())
            {
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
            }
            
            //$ques = mysql_real_escape_string($_POST["ques"]);
            $query = "SELECT COUNT(*) FROM quiz_chemisrty WHERE question='$_POST[ques]'";
           $result = mysqli_query($con,$query) or die(mysql_error());;
            $row = mysql_fetch_array($result);
            if ($row["COUNT(*)"] != 0) 
                {
                    echo "The question already exists!<br />";
                }
  
           
           //$query = "SELECT COUNT(*) FROM quiz_physics WHERE question='$ques'";
           //$result = mysqli_query($con,$query) or die(mysql_error());;
           // $row = mysqli_fetch_array($result);
           // if ($row["COUNT(*)"] != 0) 
             //   {
               //     echo "The question already exists!<br />";
                //}
                
            else 
            {
             //$option1 = mysql_real_escape_string($_POST[option1]);
             //$option2 = mysql_real_escape_string($_POST[option2]);
             //$option3 = mysql_real_escape_string($_POST[option3]);
             //$option4 = mysql_real_escape_string($_POST[option4]);
             //$answer = mysql_real_escape_string($_POST[answer]);
             $query = "INSERT INTO quiz_chemisrty (question,option1,option2,option3,option4,answer) VALUES ('$_POST[ques]','$_POST[option1]', '$_POST[option2]', '$_POST[option3]', '$_POST[option4]', '$_POST[answer]')";
              if (!mysqli_query($con,$query))
  {
  die('Error: ' . mysqli_error($con));
  }
print '<script type="text/javascript">'; 
            print 'alert("1 record added")'; 
            print '</script>';
//header("Location: nextpage.php");
mysqli_close($con);
   
    
    //$success = true;
            }
       }
        ?>
            </form>
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
