
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
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
</head>
 
    <body>
<ul id="menu">
<li><a href="home_page1.html">Home</a></li>
<li><a href="usernext.php">Take Test</a></li>
<!--<li><a href="home_page.html">GO To Home</a></li>-->
<li><a href="intro.html">Go to Chapters</a></li>
<li><a href="logout.php">Log out</a></li>
</ul>
 
</body>
</html>

<!--
+
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
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
	width:120px;
	height:32px
}

table {
        position: absolute;
        left: 300px;
	/*font-family:Arial, Helvetica, sans-serif;*/
        font-family: cursive;
        font-weight: bold;
	color:#666;
	font-size:14px;
	text-shadow: 1px 1px 0px #fff;
	background:#eaebec;
	margin:20px;
	border:#ccc 1px solid;

	-moz-border-radius:3px;
	-webkit-border-radius:3px;
	border-radius:3px;

	-moz-box-shadow: 0 1px 2px #d1d1d1;
	-webkit-box-shadow: 0 1px 2px #d1d1d1;
	box-shadow: 0 1px 2px #d1d1d1;
}
table th {
	padding:21px 25px 22px 25px;
	border-top:1px solid #fafafa;
	border-bottom:1px solid #e0e0e0;

	background: #ededed;
	background: -webkit-gradient(linear, left top, left bottom, from(#ededed), to(#ebebeb));
	background: -moz-linear-gradient(top,  #ededed,  #ebebeb);
}
table th:first-child{
	text-align: left;
	padding-left:20px;
}
table tr:first-child th:first-child{
	-moz-border-radius-topleft:3px;
	-webkit-border-top-left-radius:3px;
	border-top-left-radius:3px;
}
table tr:first-child th:last-child{
	-moz-border-radius-topright:3px;
	-webkit-border-top-right-radius:3px;
	border-top-right-radius:3px;
}
table tr{
	text-align: center;
	padding-left:20px;
}
table tr td:first-child{
	text-align: left;
	padding-left:20px;
	border-left: 0;
}
table tr td {
	padding:18px;
	border-top: 1px solid #ffffff;
	border-bottom:1px solid #e0e0e0;
	border-left: 1px solid #e0e0e0;
	
	background: #fafafa;
	background: -webkit-gradient(linear, left top, left bottom, from(#fbfbfb), to(#fafafa));
	background: -moz-linear-gradient(top,  #fbfbfb,  #fafafa);
}
table tr.even td{
	background: #f6f6f6;
	background: -webkit-gradient(linear, left top, left bottom, from(#f8f8f8), to(#f6f6f6));
	background: -moz-linear-gradient(top,  #f8f8f8,  #f6f6f6);
}
table tr:last-child td{
	border-bottom:0;
}
table tr:last-child td:first-child{
	-moz-border-radius-bottomleft:3px;
	-webkit-border-bottom-left-radius:3px;
	border-bottom-left-radius:3px;
}
table tr:last-child td:last-child{
	-moz-border-radius-bottomright:3px;
	-webkit-border-bottom-right-radius:3px;
	border-bottom-right-radius:3px;
}
table tr:hover td{
	background: #f2f2f2;
	background: -webkit-gradient(linear, left top, left bottom, from(#f2f2f2), to(#f0f0f0));
	background: -moz-linear-gradient(top,  #f2f2f2,  #f0f0f0);	
}



        </style>
    </head>
    <body  background="table.jpg">
        <br>
        
        <?php
$con=mysqli_connect("localhost","root","root","quiz_db");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$result = mysqli_query($con,"SELECT * FROM user");
echo "<center>";
echo "<table cellpadding='15' border='1' align='center'>
<tr>
<th>username</th>
<th>first name</th>
<th>last name</th>
<th>email ID</th>
<th>occupation</th>
<th>status</th>
</tr>";


while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['username'] . "</td>";
  echo "<td>" . $row['fname'] . "</td>";
  echo "<td>" . $row['lname'] . "</td>";
  echo "<td>" . $row['email'] . "</td>";
  echo "<td>" . $row['occupation'] . "</td>";
  if(isset($_COOKIE["user"]))
  {
  if($_COOKIE["user"]==$row['username'])
  {
      echo "<td>Logged in </td>";
  }
  else
  {
      echo "<td> </td>";
  }
  }
  else
  {
      echo "<td> </td>";
  }
  echo "</tr>";
  }
echo "</table>";
echo "</center>";
mysqli_close($con);
?>
            </div>
    </body>
</html>


