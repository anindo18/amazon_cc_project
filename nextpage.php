<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
         <title>REGISTRATION Success</title>
<link rel="icon" href="favicon1.png" type="image/gif" sizes="16x16">
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<script language="javascript">
    function intro()
    {
         window.location.href = "intro.html";

    }
     function login_page()
    {
         window.location.href = "userlogin.php";

    }
</script>
    </head>
    <body>
         <div id="contact">
	<h1>REGISTRATION SUCCESSFUL</h1>
	<form name="form1" action="" method="post">
            <fieldset>
                <p>CONGRATULATIONS!!! YOU HAVE BEEN SUCCESSFULLY REGISTERED!!!! A MAIL HAS BEEN SENT TO YOU</p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>PREFERRED ACTIONS:</b></p>
                <input type="button" value="LOGIN" name="take_quiz" onclick="login_page()"/><br><br><br><br><br>
                <input type="button" value="GO TO CHAPTERS" name="chap" onclick="intro()"/><br>
            </fieldset>
        
        <?php
        //require(db.php);
        
        ?>
    </body>
</html>
