<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
         <title>YOUR pathway</title>
<link rel="icon" href="favicon1.png" type="image/gif" sizes="16x16">
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<script language="javascript">
    function intro()
    {
         window.location.href = "intro.html";

    }
     function take_physics_quiz()
    {
         window.location.href = "take_quiz2.php";

    }
</script>
    </head>
    <body>
         <div id="contact">
	<h1>CHOOSE YOUR DESTINY</h1>
	<form name="form1" action="" method="post">
            <fieldset>
                <!--<p>CONGRATULATIONS!!! YOU HAVE BEEN SUCCESSFULLY REGISTERED!!!! A MAIL HAS BEEN SENT TO YOU</p>-->
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>PREFERRED ACTIONS:</b></p><br><br><br>
                <input type="button" value="PHYSICS QUIZ" name="take_phy_quiz" onclick="take_physics_quiz()"/><br><br><br><br><br>
                <input type="button" value="CHEMISTRY QUIZ" name="take_che_quiz" onclick="take_chemistry_quiz()"/>
                <input type="button" value="BIOLOGY QUIZ" name="take_bio_quiz" onclick="take_bio_quiz()"/><br><br><br><br><br>
                <input type="button" value="MATHS QUIZ" name="take_math_quiz" onclick="take_math_quiz()"/><br><br><br><br><br>
                <input type="button" value="GO TO CHAPTERS" name="chap" onclick="intro()"/><br>
            </fieldset>
        
        <?php
        //require(db.php);
        
        ?>
    </body>
</html>
