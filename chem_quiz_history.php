<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Bio Quiz History</title>
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
    <body background="table.jpg">
    
        <?php
        echo "<br>";
        echo "<center>";
       echo "<div>";
        echo "<h1><font color='aqua'> HI ".$_COOKIE["user"]." SEE YOUR CHEMISTRY SCORE </font></h1>";
       echo "</div>";
        echo "</center>";
        $user=$_COOKIE["user"];
        $con=mysqli_connect("localhost","root","root","quiz_db");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$result = mysqli_query($con,"SELECT * FROM user_chem_score where username='$user'");

echo "<table border='1' align='center'>
<tr>
<th>QUIZ SUBJECT</th>
<th>QUIZ DATE</th>
<th>SCORE</th>
<th>No. of Question Attempted</th>
</tr>";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>CHEMISTRY</td>";
  echo "<td>" . $row['quiz_date'] . "</td>";
  echo "<td>" . $row['chem_score'] . "</td>";
  echo "<td>" . $row['ques_attempt'] . "</td>";
  echo "</tr>";
  }
echo "</table>";

mysqli_close($con);
        ?>
        
        
    </body>
</html>
