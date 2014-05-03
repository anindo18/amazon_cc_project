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
        <form name="form" action="jst_checking.php" method="post">
        <?php
        $count2=0;
        //$i=0;
        $count1=0;
        $random1= (rand() % 8);
        if ($random1==0)
         {
           echo "Bad number";
           $random1=rand()%8;
           
         }
         if($random1==$count1)
         {
             $random1=$random1+1;
         }
        echo($random1)."<br/>";
       $con=mysqli_connect("localhost","root","root","quiz_db");
       
        if (mysqli_connect_errno())
        {
          echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }

  $result = mysqli_query($con,"SELECT id, question, option1, option2, option3,option4,answer FROM quiz1 where id=$random1");
  
  while($row = mysqli_fetch_array($result))
  {
  $correct_answer = $row['answer']; 
  $option1=$row['option1'];
  $option2=$row['option2'];
  $option3=$row['option3'];
  $option4=$row['option4'];
  
  echo  $row['id'];
  echo  $row['question'] . "<br/>";
  echo  "<input type='radio' name='opt' value='$option1'>".$row['option1']."<br>" ;
  echo  "<input type='radio' name='opt' value='$option2'>".$row['option2']."<br>";
  echo  "<input type='radio' name='opt' value='$option3'>".$row['option3']."<br>";
  echo  "<input type='radio' name='opt' value='$option4'>".$row['option4']."<br>";
  echo  "<input type='hidden' name='corr_answer' value='$correct_answer'"."<br>";
  echo "<br>";
  echo "<br>";
  echo "<br>";
  echo "correct answer is "."$correct_answer";
  echo "<br>";
  echo "<br>";
  }     
        
        ?>
        <br>
        <input type='submit' name='submit1' value='submit'>
       
        
        
        </form>
    </body>
</html>
