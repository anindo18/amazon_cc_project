<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Registration Page</title>
<link rel="icon" href="favicon1.png" type="image/gif" sizes="16x16">
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />

<!--<script language="javascript">
    
    if(form.username.value="")
    {
        echo("enter your ")
    }
</script>-->

    </head>
    <body>
        <div id="contact">
	<h1>ADMIN REGISTRATION</h1>
	<form name="form" action="<?php $_SERVER["PHP_SELF"]?>" method="post">
		<fieldset>
                    <label for="username">Username*:</label>
                    <input type="text" name="username" placeholder="Set the username(req)"><br>
                    
                     <label for="set_password">Set Password*:</label>
                    <input type="password" name="password" placeholder="Set password(req)"><br>
                    
                     <label for="confirm_password">Confirm Password*:</label>
                    <input type="password" name="conf_password" placeholder="password Confirm(req)"><br>
                    
			<label for="name">Name*:</label>
                        <input type="text" name="fname" placeholder="Enter first name(req)" />&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="text" name="lname" placeholder="Enter Last name" /><br>
                        
			<label for="email">Email*:</label>
			<input type="email" name="email" placeholder="Enter email ID(req)" /><br>
                        
                        <label for="contact number">Contact Number*:</label>
                        <input type="text" name="con_num" placeholder="Enter Contact no.(req)" /><br>
                        
			<label for="occupation"> Occupation*:</label>
			<input type="text" name="occupation" placeholder="Enter Occupation(req)" /><br>
			
                        <label for="master_username"> Master Username</label>
			<input type="text" name="master_usn" placeholder="Enter Master Username(req)" /><br>
                        
                        <label for="master_password"> Master Password</label>
                        <input type="password" name="master_pass" placeholder="Enter Master Password(req)" /><br>
                        <input type="submit" value="Submit" name="submit1" />
			
		</fieldset>
            
            
            
	</form>
</div>
        <?php
          if (isset($_POST['submit1']))
        {
              $flag=0;
        $username=$_POST['username'];
        $pass= $_POST['password'];
        $conf_pass= $_POST['conf_password'];
        $fname= $_POST['fname'];
        $email = $_POST['email'];
        $contact = $_POST['con_num'];
        $occupation = $_POST['occupation'];
        $master_usn = $_POST['master_usn'];
        $master_pass = $_POST['master_pass'];
        if (isset($_POST["master_usn"]) && isset($_POST["master_pass"]))
       {
           $con=mysqli_connect("localhost","root","root","quiz_db");
            // Check connection
        if (mysqli_connect_errno())
         {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
         }

           $query = "SELECT COUNT(*) FROM admin WHERE username='$_POST[master_usn]' and password='$_POST[master_pass]'";
           $result = mysqli_query($con,$query) or die(mysql_error());;
            $row = mysqli_fetch_array($result);
            if ($row["COUNT(*)"] != 0) 
                {
                    $flag=0;
                }
                else
                {
                    $flag=1;
                }
                mysqli_close($con);
        }
        if($username=="")
        {
            print '<script type="text/javascript">'; 
            print 'alert("USERNAME Field is empty!!! This field cannot be kept empty")'; 
            print '</script>';  
            
        }
        else if($pass=="")
        {
            print '<script type="text/javascript">'; 
            print 'alert("Set Password Field is empty!!! This field cannot be kept empty")'; 
            print '</script>';  
        }
        else if($conf_pass=="")
        {
            print '<script type="text/javascript">'; 
            print 'alert("Confirm Password Field is empty!!! This field cannot be kept empty")'; 
            print '</script>';  
        }
        else if($fname=="")
        {
            print '<script type="text/javascript">'; 
            print 'alert("FIRST NAME Field is empty!!! This field cannot be kept empty")'; 
            print '</script>';  
        }
        else if($email=="")
        {
            print '<script type="text/javascript">'; 
            print 'alert("Email Field is empty!!! This field cannot be kept empty")'; 
            print '</script>';  
        }
         else if($contact=="")
        {
            print '<script type="text/javascript">'; 
            print 'alert("Contact is empty!!! This field cannot be kept empty")'; 
            print '</script>';  
        }
        else if($occupation=="")
        {
            print '<script type="text/javascript">'; 
            print 'alert("Occupation Field is empty!!! This field cannot be kept empty")'; 
            print '</script>';  
        }
        else if($master_usn=="")
        {
            print '<script type="text/javascript">'; 
            print 'alert("Master usn Field is empty!!! This field cannot be kept empty")'; 
            print '</script>';  
        }
        else if($master_pass=="")
        {
            print '<script type="text/javascript">'; 
            print 'alert("Master password Field is empty!!! This field cannot be kept empty")'; 
            print '</script>';  
        }
        else if(strlen($pass)<4)
        {
            print '<script type="text/javascript">'; 
            print 'alert("Password strength too weak!! it should be minimum 4 letters")'; 
            print '</script>';  
        }
        else if(strlen($contact)>10)
        {
            print '<script type="text/javascript">'; 
            print 'alert("Contact cannot be less than 10 digits")'; 
            print '</script>';  
        }
        else if(strcmp($pass, $conf_pass)!=0)
        {
            print '<script type="text/javascript">'; 
            print 'alert("Confirm password is not the same as password")'; 
            print '</script>';  
        }
        else if(!is_numeric($contact))
        {
            print '<script type="text/javascript">'; 
            print 'alert("contact number should be digits")'; 
            print '</script>';  
        }
        else if($flag==1)
        {
            print '<script type="text/javascript">'; 
            print 'alert("master password and master username does not match")'; 
            print '</script>';  
        }
        else 
        {
             if (isset($_POST["username"]) && isset($_POST["password"]) && isset($_POST["fname"]) && isset($_POST["email"]) && isset($_POST["con_num"]) && isset($_POST["occupation"]))
       {
           $con=mysqli_connect("localhost","root","root","quiz_db");
            // Check connection
        if (mysqli_connect_errno())
         {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
         }

           $query = "SELECT COUNT(*) FROM user WHERE username='$_POST[username]'";
           $result = mysqli_query($con,$query) or die(mysql_error());;
            $row = mysqli_fetch_array($result);
            if ($row["COUNT(*)"] != 0) 
                {
                    print '<script type="text/javascript">'; 
            print 'alert("THE USERNAME ALREADY EXISTS")'; 
            print '</script>';  
                }
                
            else 
            {
             $sql="INSERT INTO admin (username, password, fname, lname, email, contact, occupation, masterusn, masterpass)
VALUES ('$_POST[username]','$_POST[password]','$_POST[fname]','$_POST[lname]','$_POST[email]','$_POST[con_num]','$_POST[occupation]','$_POST[master_usn]','$_POST[master_pass]')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
print '<script type="text/javascript">'; 
            print 'alert("1 record added")'; 
            print '</script>';
header("Location: nextpage_admin.php");
mysqli_close($con);
   
            }
       }
            
        }
        } 
        ?>
    </body>
</html>
