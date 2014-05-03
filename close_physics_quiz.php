<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>physics quiz close</title>
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
text-decoration: aquamarine;
}
        </style>
    </head>
    <body background="bg.jpg">
    <center>
        <div>
        <?php
        session_start();
        //if($_SESSION['views_phy_quiz']==11)
        //{
        //$_SESSION['views_phy_quiz']=$_SESSION['views_phy_quiz']-1;
        //}
        //else
        //{
           // $_SESSION['views_phy_quiz']=$_SESSION['views_phy_quiz'];
        //}
        $con=mysqli_connect("localhost","root","root","quiz_db");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
  $corr_ans= $_SESSION['views1'];
  echo "<h1>The correct answer is ".$corr_ans."</h1><br>";
  $attempt_ques=$_SESSION['views_phy_quiz'];
  echo "<h1>The number of questions attempted is ".$attempt_ques."</h1><br>";
  $user= $_COOKIE["user"];
  echo "<h1>The user is ".$user."</h1><br>";
  $date1= date("Y-m-d");
  echo "<h1>The date is ".$date1."</h1><br>";
  echo (($corr_ans/$attempt_ques)*100)."%<br>";
 $sql="INSERT INTO user_phy_score VALUES('$user','$date1','$corr_ans','$attempt_ques')";
 if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
echo "1 record added";

mysqli_close($con);

  print '<script type="text/javascript">'; 
            print 'alert("Your Score is added")'; 
            print '</script>';
        
        //echo "<h1> you have scored: ".$_SESSION['views1']."<br>";
        //echo "<h1> Number of questions attempted: ".$_SESSION['views_phy_quiz']."<br>";
        if(isset($_SESSION['views1']))
        unset($_SESSION['views1']);
        
        if(isset($_SESSION['views_phy_quiz']))
        unset($_SESSION['views_phy_quiz']);
        /*if(isset($_SESSION['views1']))
        unset($_SESSION['views1']);
        if(isset($_SESSION['views_phy_quiz']))
        unset($_SESSION['views_phy_quiz']);*/
        ?>
            </div>
        </center>
    </body>
</html>
