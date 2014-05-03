<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>User Path</title>
<link rel="stylesheet" href="styles/wheel/sunpeach.css" media="screen" />
<!--[if lt IE 9]>
<link rel="stylesheet" href="styles/ie.css" media="screen" />
<![endif]-->
<style type="text/css">
    .hello
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
</style>
</head>

    <body background="bg.jpg">
        <center>
            <div class="hello">
        
    <?php
        //echo "<hr>";
        echo "<p style='position: relative; left: -100px'><b><i><font color='white'>USER logger: </font><a href='user_info.php'><font color='aqua'>".$_COOKIE["user"]."</font></a></i></b></p>" ;
        echo "<hr>";
        echo "<h1>HELLO ".$_COOKIE["user"]."</h1>";
        ?>
                </div>  
            <h1><font color="aqua" size="12">CHOOSE YOUR DESTINY</font></h1>
            </center>
<div id="menu-wrap">
<div class="wrap1">
<div class="wrap2">
<div class="wrap3">
<div class="wrap4"> 
    <span class="img1"><img class="orbit orbit-frame" src="menu.jpg" alt="card08" /></span>

<div class="completer"></div>
<div class="completer2"></div>
<div class="wrap5">
<div class="nav-holder">

<!-- start menu !-->

<ul class="menuBuild">

  <li id="menu1"><a href="#">take Quiz</a>
    <ul class="submenu sub1">
        <li class="first"><a href="take_physics_quiz.php">Physics</a></li>

      <li class="second"><a href="#">Chemistry</a></li>
      <li class="third"><a href="#">Biology</a></li>
      <li class="last"><a href="#">Mathematics</a></li>
      <!--<li class="last"><a href="#">Submenu Item</a></li>-->
    </ul>
  </li>
  
  <li id="menu2"><a href="">English Concepts</a>

    <ul class="submenu sub2">
        <li class="first"><a href="intro_phy1.html">Physics</a></li>
      <li class="second"><a href="intro_chem1.html">Chemistry</a></li>
      <li class="third"><a href="intro_bio1.html">Biology</a></li>\
      <li class="last"><a href="intro_math1.html">Mathematics</a></li>
    </ul>
  </li>
  
  <li id="menu3"><a href="#">ಕನ್ನಡ ಪರಿಕಲ್ಪನೆಗಳು</a>
    <ul class="submenu sub3">

      <li class="first"><a href="#">ಭೌತವಿಜ್ಞಾನ</a></li>
      <li class="second"><a href="intro_chem_kan.html">ರಸಾಯನಶಾಸ್ತ್ರ</a></li>
      <li class="third"><a href="intro_bio_kan.html">ಜೀವವಿಜ್ಞಾನ</a></li>\
      <li class="last"><a href="intro_math_k.html">ಗಣಿತ</a></li>
    </ul>
  </li>
  
  <li id="menu4"><a href="#">View Profile</a>
    <ul class="submenu sub4">

      <li class="first"><a href="user_info.php">Your details</a></li>
      <li class="second"><a href="phy_quiz_history.php">Phy Quiz History</a></li>
      <li class="third"><a href="chem_quiz_history.php">chem Quiz History</a></li>
      <li class="last"><a href="bio_quiz_history.php">Bio Quiz History</a></li>
      <!--<li><a href="#">Submenu Item</a></li>-->
    </ul>
  </li>
  
</ul>

<!-- end menu !-->

</div><!-- nav holder !-->
</div><!-- wrap5 !-->
</div><!-- wrap4 !-->
</div><!-- wrap3 !-->
</div><!-- wrap2 !-->
</div><!-- wrap1 !-->
</div><!-- menu-wrap !-->


<!--<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>-->
</body>
</html>
