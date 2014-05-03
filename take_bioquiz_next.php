
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

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
<li><a href="#">Home</a></li>
<li><a href="#">About Us</a></li>
<li><a href="#">Facilities</a></li>
<li><a href="#">Overview</a></li>
<li><a href="#">Contact Us</a></li>
</ul>
    </body>
</html>

<?php
echo "<div class='box'>";
if(isset($_POST['submit1']))
{
$count3=0;

        $selected_button = "hello";
       
            
        if(isset($_POST['opt']))
        {
            
            $selected_button = $_POST['opt'];
        }
        $correct_answer1 = $_POST['corr_answer'];
        echo "<br>the selected button value is ".$selected_button."<br>";
        echo "<br>the correct answer is ".$correct_answer1."<br>";
        
        if($correct_answer1==$selected_button)
        {
            session_start();
            if(isset($_SESSION['viewsb']))
            $_SESSION['viewsb']=$_SESSION['viewsb']+1;
            else
            $_SESSION['viewsb']=1;
            echo "Number of correct answer is :". $_SESSION['viewsb']."<br>";
            echo "Correct answer";
            $count3++;  
            //echo "count is ".$count3."<br>";
        }
        else
        {
            echo "InCorrect answer";
        }
}
        ?>
        
<html>
    <head>
        <style type="text/css">
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
        
        <br>
        <br>
        <form name="form" action="<?php $_SERVER["PHP_SELF"]?>" method="post">
            
       <input type="button" name="next" value="next" onclick="gotonext();"><br>
       <input type="button" name="gotolgpg" value="close this quiz" onclick="gotologin_pg();">
        
        <script language="javascript">
            function gotonext()
            {
                //windows.location.href="take_quiz1.php";
                window.location="take_bio_quiz.php";
            }
            function gotologin_pg()
            {
                
                window.location="close_bio_quiz.php";
            }
        </script>
        <!--<input type='submit' name='submit1' value='submit'>-->
        <?php
       if(isset($_POST['gotolgpg']))
           {
           session_destroy();
            header("Location: usernext.php");
}
        
            echo "</div>"
        
        ?>
        
      </form>  
    </body>
</html>

