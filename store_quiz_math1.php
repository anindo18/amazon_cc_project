<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>MATHS QUIZ</title>
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
        echo "<p style='position: relative; left:900px'><b><i><a href='admin_info.php'><font color='white'>".$_COOKIE["admin"]."</a></font><font color='red'></i></b></p>" ;?>
        <hr>
    <center>
        <div>
        <h1><font color="aqua" size="13">STORE MATHEMATICS QUESTION</font></h1>
        <form action="<?php $_SERVER["PHP_SELF"]?>" method="post">
            QUESTION:<br> <textarea rows="10" cols="50" name="ques"></textarea><br><br>
            <font color="white" size="5"> <b>OPTION 1:</b></font> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="option1"><br>
       <font color="white" size="5"> <b>OPTION 2:</b></font> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="option2"><br>
       <font color="white" size="5"> <b>OPTION 3:</b></font> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="option3"><br>
       <font color="white" size="5"> <b>OPTION 4:</b></font> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="option4"><br>
       <font color="white" size="5"> <b>ANSWER :<b></font> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="answer"><br>
       <input type="submit" value="submit">&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" name="reset"> <br>
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
            $query = "SELECT COUNT(*) FROM quiz_math WHERE question='$_POST[ques]'";
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
             $query = "INSERT INTO quiz_math (question,option1,option2,option3,option4,answer) VALUES ('$_POST[ques]','$_POST[option1]', '$_POST[option2]', '$_POST[option3]', '$_POST[option4]', '$_POST[answer]')";
              if (!mysqli_query($con,$query))
  {
  die('Error: ' . mysqli_error($con));
  }
print '<script type="text/javascript">'; 
            print 'alert("1 question is added in biology")';
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
