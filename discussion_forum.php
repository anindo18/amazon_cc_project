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
        <form name="form" action="discussion_next.php" type="post">
        <?php
        
            echo "<br>";
            echo "<hr>";
            echo "<p style='left: 1000px; font-size: 17px;'><b><i><a href='user_info.php'>".$_COOKIE["user"]."</a> is logged in</i></b></p>" ;
        echo "<hr>";
            ?>
        
        
        
        <?php
        
         echo "ENTER YOUR QUERY<br> <textarea rows='10' cols='50' name='take_comment'></textarea><br><br>";
        ?>
        <input type="submit" name="submit1" value="submit">
        </form>
    </body>
</html>
