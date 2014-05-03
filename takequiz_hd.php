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
        <?php
        
        $i=0;
        $count1=0;
        $count2=0;
        for($i=0;$i<4;$i++)
       {
        $random1[$i]= (rand() % 8);
        if ($random1[$i]==0)
         {
           echo "Bad number";
           $random1[$i]=rand()%8;
           
         }
         if($random1[$i]==$count1)
         {
             $random1[$i]=$random1+1;
         }
        echo($random1[$i])."<br/>";
       $con=mysqli_connect("localhost","root","root","quiz_db");
       
        if (mysqli_connect_errno())
        {
          echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }

  $result[$i] = mysqli_query($con,"SELECT id, question, option1, option2, option3,option4,answer FROM quiz1 where id=$random1[$i]");
  
  while($row = mysqli_fetch_array($result[$i]))
  {
  $correct_answer[$i] = $row['answer']; 
  $option1[$i]=$row['option1'];
  $option2[$i]=$row['option2'];
  $option3[$i]=$row['option3'];
  $option4[$i]=$row['option4'];
  
  echo  $row['id'];
  echo  $row['question'] . "<br/>";
        
        echo <<< END
<input type="radio" name="$random1[$i]" value="$option1[$i]" onclick="r1($this->value)"> $option1[$i] <br>
<input type="radio" name="$random1[$i]" value="$option2[$i]" onclick="r1($this->value)"> $option2[$i] <br>
<input type="radio" name="$random1[$i]" value="$option3[$i]" onclick="r1($this->value)"> $option3[$i] <br>
<input type="radio" name="$random1[$i]" value="$option4[$i]" onclick="r1($this->value)"> $option4[$i] <br> 
<input type="button" name="submit2" value="submit" onclick="count()">
<script language="javascript">
                
                 function r1($this->value)
           {
               
               if($this->value==$correct_answer[$i])
                   {
                alert($correct_answer[$i]);
                     $count2= $count2+1;  
                   }
               alert($this->value);
           }
                function count()
                {
                /*alert($correct_answer[$i]);*/
                alert($count2);
                }
</script>
                
END;
        echo "corect answer is ".$correct_answer[$i]."<br>";
  }
       }
        ?>
            </form>
    </body>
</html>
