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
       
       $user=$_COOKIE["user"];
/* @var $_POST type */
$put_comment= $_POST["take_comment"];
               echo "the comment is :<br>".$put_comment."<br>";
        echo"the current user is ".$user."<br>";
           $date1= date("Y-m-d"); 
           echo $date1."<br>";
           $time1= date("H:i:s", time());
           echo "<br>".$time1."<br>";
        
        echo "hi";
           
           $con=mysqli_connect("localhost","root","root","quiz_db");
           if (mysqli_connect_errno())
            {
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
            }
            
            
                     
                  $query = "INSERT INTO comment_table (username,comment,entry_date,entry_time) VALUES ('$user','$_POST[take_comment]', '$date1', '$time1')";
              if (!mysqli_query($con,$query))
  {
  die('Error: ' . mysqli_error($con));
  print '<script type="text/javascript">'; 
            print 'alert("Sorry!!! comment not added")'; 
            print '</script>';
  }
print '<script type="text/javascript">'; 
            print 'alert("1 comment added")'; 
            print '</script>';
//header("Location: nextpage.php");
mysqli_close($con);
   
    
    //$success = true;
       
        
        ?>
    </body>
</html>
