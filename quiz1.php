<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>QUIZ</title>
    </head>
    <body>
        <h1>ADMIN PAGE</h1>
        <form action="<?php $_SERVER["PHP_SELF"]?>" method="post">
            QUESTION:<br> <textarea rows="10" cols="50" name="ques"></textarea><br><br>
       OPTION 1: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="option1"><br>
       OPTION 2: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="option2"><br>
       OPTION 3: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="option3"><br>
       OPTION 4: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="option4"><br>
       ANSWER : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="answer"><br>
       <input type="submit" value="submit">&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" name="reset"> <br>
           <?php
        if (isset($_POST["ques"]) && isset($_POST["option1"]) && isset($_POST["option2"]) && isset($_POST["option3"]) && isset($_POST["option4"]))
       {
           require("db.php");
           $ques = mysql_real_escape_string($_POST["ques"]);
           $query = "SELECT COUNT(*) FROM quiz1 WHERE question='$ques'";
           $result = mysql_query($query, $con) or die(mysql_error());;
            $row = mysql_fetch_array($result);
            if ($row["COUNT(*)"] != 0) 
                {
                    echo "The question already exists!<br />";
                }
                
            else 
            {
             $option1 = mysql_real_escape_string($_POST["option1"]);
             $option2 = mysql_real_escape_string($_POST["option2"]);
             $option3 = mysql_real_escape_string($_POST["option3"]);
             $option4 = mysql_real_escape_string($_POST["option4"]);
             $answer = mysql_real_escape_string($_POST["answer"]);
             $query = "INSERT INTO quiz1 (question,option1,option2,option3,option4,answer) VALUES ('$ques', '$option1', '$option2', '$option3', '$option4', '$answer')";
              mysql_query($query, $con) or die(mysql_error());
    echo "<b>$ques</b><br> has been successfully added..!!! :) <br /><br />";
    
    $success = true;
            }
       }
        ?>
            </form>
    </body>
</html>
