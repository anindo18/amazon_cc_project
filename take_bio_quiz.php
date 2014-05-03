<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>

<html>
    <head>
        <style type="text/css">
             #menu
{
    /*Styling the menu width and height*/
    list-style:none;
    margin:30px auto 0px auto;
    width:1000px;
    height:45px;
    padding:0px 10px 0px 20px;
     
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
<li><a href="#">Home</a></li>
<li><a href="#">About Us</a></li>
<li><a href="#">Facilities</a></li>
<li><a href="#">Overview</a></li>
<li><a href="#">Contact Us</a></li>
</ul>
    </body>
</html>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <script language="javascript">
            
            function imageRollover (img, imgSrc) 
            {
            img.src = imgSrc;
             }
        </script>
        <style type="text/css">
            body{ background-color: whitesmoke;}
            h1{
                margin-left: 420px;
                margin-top: 0px;
                position: absolute;
                font-family: serif;
                font-style: oblique;
                color: black;
            }
            button{
                position: absolute;
                margin-left:590px;
                margin-top: 15px;
                color: green;
                width: 120px;
                height: 40px;
                font-size: 20px;
            }
            
            .box
            {
                width: 1310px;
                height:1400px;
                position: absolute;
                margin-left: 10px;
                margin-top: 60px;
                background-color: whitesmoke;
                border-color: black;
                border-style: solid;
            }
            .image 
            {
                position: absolute;
                    margin-top: 120px;
                    margin-left: 10px; 
            }
             .box1
            {
                width: 1310px;
                height:1020px;
                position: absolute;
                margin-left: 10px;
                margin-top: 120px;
                background-color: whitesmoke;
                border-color: black;
                border-style: solid;
                
            }
           
            .text
            {
                position: absolute;
                 margin-left: 50px;
                margin-top: 1150px;                
            }
            
            .result
            {
                position: absolute;
                 margin-left: 100px;
                margin-top: 1150px;    
                font-size: 18px;
                 color: black;
                 width: 120px;
                height: 40px;
            }
            .ans
            {
                font-size: 34px;
                position: absolute;
                margin-left:420px;
                margin-top: 1200px; 
            }
            
            .fig
            {
                position: absolute;
                margin-left:660px;
                margin-top: -50px;
            }
        </style>
    </head>
    <body>
        <form name="form" action="take_bioquiz_next.php" method="post">
            <?php
            
            session_start();
            if(isset($_SESSION['views_bio_quiz']))
            $_SESSION['views_bio_quiz']=$_SESSION['views_bio_quiz']+1;
            else
            $_SESSION['views_bio_quiz']=1;
            echo "Number of questions attempted is :". $_SESSION['views_bio_quiz']."<br>";
            if( $_SESSION['views_bio_quiz']>10)
            {
                header("Location: close_physics_quiz.php");
            }
            echo "<br>";
            echo "<hr>";
            echo "<p style='left: 1000px; font-size: 17px;'><font color='red'>User Logger: </font><b><i><a href='user_info.php'>".$_COOKIE["user"]."</a></i></b></p>" ;
        echo "<hr>";
            ?>
            <div class="box">
            <?php
        $count1=0;
          $con=mysqli_connect("localhost","root","root","quiz_db");
       
        if (mysqli_connect_errno())
        {
          echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
        $result1 = mysqli_query($con,"select * FROM quiz_biology");
        $num_rows = mysqli_num_rows($result1);

echo "Total rows: " . $num_rows."<br>";
        $random1= (rand() % $num_rows);
        if ($random1==0)
         {
           //echo "Bad number";
           $random1=rand()% $num_rows;
           
         }
         if($random1==$count1)
         {
             $random1=$random1+1;
         }
        //echo($random1)."<br/>";
     

  $result = mysqli_query($con,"SELECT id, question, option1, option2, option3,option4,answer FROM quiz_biology where id=$random1");
  
  while($row = mysqli_fetch_array($result))
  {
  $correct_answer = $row['answer']; 
  $option1=$row['option1'];
  $option2=$row['option2'];
  $option3=$row['option3'];
  $option4=$row['option4'];
  
  echo  $row['id'];
  echo  "<p><b><i>".$row['question'] . "</i></b></p><br/>";
  echo  "<b><i><input type='radio' name='opt' value='$option1'>".$row['option1']."</i></b><br>" ;
  echo  "<b><i><input type='radio' name='opt' value='$option2'>".$row['option2']."</i></b><br>";
  echo  "<b><i><input type='radio' name='opt' value='$option3'>".$row['option3']."</i></b><br>";
  echo  "<b><i><input type='radio' name='opt' value='$option4'>".$row['option4']."</i></b><br>";
  echo  "<b><i><input type='hidden' name='corr_answer' value='$correct_answer'>"."</i></b><br>";
  echo "<br>";
  echo "<br>";
  echo "<br>";
  //echo "correct answer is "."$correct_answer";
  echo "<br>";
  echo "<br>";
  }     
        
        ?>
        <br>
        <input type='submit' name='submit1' value='submit'>
         <p class="fig">         
        <img name="Tree" src="images/1.jpg" width="560px" height="460px" border="0"
        onmouseover="imageRollover(this, 'images/2.jpg');"
        onmouseout="imageRollover(this, 'images/1.jpg');">
        
             </p>
        
        </div>
        </form>
    </body>
</html>
