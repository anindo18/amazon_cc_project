<?php
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
            if(isset($_SESSION['views']))
            $_SESSION['views']=$_SESSION['views']+1;
            else
            $_SESSION['views']=1;
            echo "Views=". $_SESSION['views']."<br>";
            echo "Correct answer";
            $count3++;  
            //echo "count is ".$count3."<br>";
        }
        else
        {
            echo "INCorrect answer";
        }
        
        ?>
        
<html>
    <head>
       
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
                window.location="take_quiz2.php";
            }
            function gotologin_pg()
            {
                
                window.location="nextpage.php";
            }
        </script>
        <!--<input type='submit' name='submit1' value='submit'>-->
        <?php
       if(isset($_POST['gotolgpg'])){
           session_destroy();
            header("Location: nextpage.php");
}
        
            
        
        ?>
        
      </form>  
    </body>
</html>

