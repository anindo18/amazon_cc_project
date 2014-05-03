<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
         <title>Admin</title>
<link rel="icon" href="favicon1.png" type="image/gif" sizes="16x16">
<!--<link href="style.css" rel="stylesheet" type="text/css" media="screen" />-->
<style type="text/css">
            
            div
{
border:1px solid #a1a1a1;
padding:10px 40px; 
background: firebrick;
width:700px;
border-radius:25px;
box-shadow: 10px 10px 5px #888888;
}
            
            h1
{
text-shadow: 5px 5px 5px #FF0000;
}

.styled-button-5 {
	background-color: #004a80;
	color: #fff;
	font-family:'Helvetica Neue',sans-serif;
	font-size:18px;
	line-height:30px;
	border-radius:20px;
	-webkit-border-radius:20px;
	-moz-border-radius:20px;
	border:0;
	text-shadow:#C17C3A 0 -1px 0;
	width:300px;
	height:32px
}
        </style>
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
    function logout()
    {
        window.location.href = "admin_logout.php";
    }
    function intro()
    {
         window.location.href = "intro.html";

    }
     function store_phy()
    {
         window.location.href = "set_quiz_physics1.php";

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
    <body background="bg.jpg">
        <ul id="menu">
<li><a href="home_page1.html">Home</a></li>
<li><a href="#">About Us</a></li>
<li><a href="check_admin_login.php">Back</a></li>
<!--<li><a href="#"></a></li>-->
<li><a href="admin_logout.php">Log Out</a></li>
</ul>
        <?php
        //echo "<hr>";
        echo "<p style='position: relative; left: 200px'><b><i><font color='white'>Admin Logger:</font> <a href='admin_info.php'>".$_COOKIE["admin"]."</a></i></b></p>" ;
        echo "<hr>";
        ?>
    <center>
         <div>
	<h1>LOGIN SUCCESSFUL</h1>
	<form name="form1" action="" method="post">
       
                
                <h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PREFERRED ACTIONS:</h1><br>
                <input type="button" value="LOGOUT" name="logout" onclick="logout();" class="styled-button-5" cursor="pointer"/><br><br>
                <input type="button" value="ADD PHYSICS QUESTIONS" name="str_ph" onclick="store_phy();" class="styled-button-5" cursor="pointer"/><br><br>
                <input type="button" value="ADD CHEMISTRY QUESTIONS" name="Str_ch" onclick="store_chem();" class="styled-button-5" cursor="pointer"/><br><br>
                <input type="button" value="ADD BIOLOGY QUESTIONS" name="str_bio" onclick="store_bio();" class="styled-button-5" cursor="pointer"/><br><br>
                <input type="button" value="ADD MATHS QUESTIONS" name="str_math" onclick="store_math();" class="styled-button-5" cursor="pointer"/><br><br>
                <input type="button" value="VIEW USERS" name="view_user" onclick="user_view();" class="styled-button-5" cursor="pointer"/><br>
         
       
        </form>
         </div>
        </center>
    </body>
</html>
