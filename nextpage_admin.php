<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
         <title>REGISTRATION Success</title>
<link rel="icon" href="favicon1.png" type="image/gif" sizes="16x16">
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />

<style>
#menu
{
    /*Styling the menu width and height*/
    list-style:none;
    margin:30px auto 0px auto;
    width:1000px;
    height:45px;
    padding:0px 20px 0px 20px;
     
    /* Creating the curved corner of the border*/
    border-radius:10px;
    -moz-border-radius:10px;
    -webkit-border-radius:10px;
    /*Styling the background with fading effect*/
     
    background:#333333;
    background: -moz-linear-gradient(top, #000, #999);
    background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#000), to( #999));
     
    /*Making the shadow effect into the menu bar */
    box-shadow: inset 1px 1px 10px #FFFFFF;
    -moz-box-shadow: inset 1px 1px 10px #FFFFFF;
    -webkit-box-shadow: inset 1px 1px 10px #FFFFFF;
    border:1px solid #000;
     
     
}
#menu li /*Styling the li part of the menu*/
{
    float:left;
    padding:10px 20px 30px 40px;
    display: block;
    position:relative;
    text-align:center;
    margin-right:30px;
    margin-top:7px;
    border:none;
 
     
}
 
#menu li a /*Styling the link part of the menu li*/
{
    text-decoration:none;
    color:#999999;
    text-shadow:1px 1px 10px #FFCC99;
}
#menu li:hover a /*Styling the link part of the menu li in hover state*/
{
    color:#FFF;
    text-shadow:1px 1px 10px #CCC;
}
</style>

<script language="javascript">
    function intro()
    {
         window.location.href = "intro.html";

    }
     function store_phy()
    {
         window.location.href = "set_quiz_phy1.php";

    }
    function store_chem()
    {
         window.location.href = "set_quiz_chem1.php";

    }
    function store_bio()
    {
         window.location.href = "set_quiz_bio1.php";

    }
    function store_math()
    {
         window.location.href = "store_quiz_math1.php";

    }
   function user_view()
   {
       //alert("hello");
       window.location.href = "admin_user_view.php";
   }
</script>
    </head>
    <body>
        <ul id="menu">
<li><a href="#">Home</a></li>
<li><a href="#">About Us</a></li>
<li><a href="#">Facilities</a></li>
<li><a href="#">Overview</a></li>
<li><a href="#">Contact Us</a></li>
</ul>
        <?php
        echo "<p style='position: relative; left: -100px'><b><i>".$_COOKIE["admin"]." is logged in</i></b></p>" ;?>
         <div id="contact">
	<h1>REGISTRATION SUCCESSFUL</h1>
	<form name="form1" action="" method="post">
            <fieldset>
                <p>CONGRATULATIONS!!! YOU HAVE BEEN SUCCESSFULLY REGISTERED!!!!</p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>PREFERRED ACTIONS:</b></p>
                <input type="button" value="LOGIN" name="take_quiz" onclick="login_page();"/><br><br><br><br><br>
                <input type="button" value="ADD PHYSICS QUESTIONS" name="str_ph" onclick="store_phy();"/>
                <input type="button" value="ADD CHEMISTRY QUESTIONS" name="Str_ch" onclick="store_chem();"/>
                <input type="button" value="ADD BIOLOGY QUESTIONS" name="str_bio" onclick="store_bio();"/><
                <input type="button" value="ADD MATHS QUESTIONS" name="str_math" onclick="store_math();"/>
                <input type="button" value="VIEW USERS" name="view_user" onclick="user_view();"/>
            </fieldset>
        
        <?php
        //require(db.php);
        
        ?>
    </body>
</html>
