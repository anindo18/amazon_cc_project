<?php
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
  echo  "<input type='radio' name='opt' value='1' onclick='displayResult()'>".$row['option1']."<br>" ;
  echo  "<input type='radio' name='opt' value='2'>".$row['option2']."<br>";
  echo  "<input type='radio' name='opt' value='3'>".$row['option3']."<br>";
  echo  "<input type='radio' name='opt' value='4'>".$row['option4']."<br>";
  echo "<br>";
  echo "<br>";
  echo "<br>";
  echo "correct answer is "."$correct_answer";
  echo "<br>";
  echo "<br>";
  }
  if (isset($_GET['opt']))
  {

  // Show the radio button value, i.e. which one was checked when the form was sent
  echo $_GET['opt%'];
}
echo "<input type='submit' name='sub1'>";
?>
