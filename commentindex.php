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
            echo "Correct answer";
            $count3++;  
            echo "count is ".$count3."<br>";
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
        <input type="button" name="next" value="next" onclick="gotonext()"><br>
        <input type="button" name="gotolgpg" value="close this quiz" onclick="gotologin_pg()">
        
        <script language="javascript">
            function gotonext()
            {
                //windows.location.href="take_quiz1.php";
                window.location="take_quiz1.php";
            }
            function gotologin_pg()
            {
                window.location="nextpage.php";
            }
        </script>
        
    </body>
</html>