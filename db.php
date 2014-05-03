

<?php


//Create a connection variable
$con = mysql_connect('localhost','root','root') or die(mysql_error());

//Create database
mysql_query("CREATE DATABASE IF NOT EXISTS quiz_db") or die(mysql_error());

//Select database
mysql_select_db("quiz_db",$con) or die (mysql_error());

//Create table
mysql_query("CREATE TABLE IF NOT EXISTS quiz1( id MEDIUMINT NOT NULL AUTO_INCREMENT, question VARCHAR(8192) NOT NULL, option1 VARCHAR(300) NOT NULL, option2 VARCHAR(300) NOT NULL, option3 VARCHAR(300) NOT NULL,option4 VARCHAR(300) NOT NULL, answer VARCHAR(300) NOT NULL, PRIMARY KEY (id))") or die(mysql_error());	

//mysql_query("CREATE TABLE IF NOT EXISTS msg_database( GRP VARCHAR(20), MSG VARCHAR(40))") or die(mysql_error());	
mysql_query("CREATE TABLE IF NOT EXISTS user(username VARCHAR(200) NOT NULL PRIMARY KEY, password VARCHAR(100) NOT NULL,fname VARCHAR(200) NOT NULL, lname VARCHAR(100), email VARCHAR(200) NOT NULL, contact BIGINT, occupation VARCHAR(200) NOT NULL)") or die(mysql_error());	
mysql_query("CREATE TABLE IF NOT EXISTS admin(username VARCHAR(200) NOT NULL PRIMARY KEY, password VARCHAR(100) NOT NULL,fname VARCHAR(200) NOT NULL, lname VARCHAR(100), email VARCHAR(200) NOT NULL, contact BIGINT, occupation VARCHAR(200) NOT NULL, masterusn VARCHAR(200), masterpass VARCHAR(200))") or die(mysql_error());	
mysql_query("CREATE TABLE IF NOT EXISTS comment_table(username VARCHAR(200) NOT NULL, comment VARCHAR(8000) NOT NULL, entry_date DATE, entry_time TIME)") or die(mysql_error());
mysql_query("CREATE TABLE IF NOT EXISTS quiz_physics( id MEDIUMINT NOT NULL AUTO_INCREMENT, question VARCHAR(8192) NOT NULL, option1 VARCHAR(300) NOT NULL, option2 VARCHAR(300) NOT NULL, option3 VARCHAR(300) NOT NULL,option4 VARCHAR(300) NOT NULL, answer VARCHAR(300) NOT NULL, PRIMARY KEY (id))") or die(mysql_error());

mysql_query("CREATE TABLE IF NOT EXISTS quiz_chemisrty( id MEDIUMINT NOT NULL AUTO_INCREMENT, question VARCHAR(8192) NOT NULL, option1 VARCHAR(300) NOT NULL, option2 VARCHAR(300) NOT NULL, option3 VARCHAR(300) NOT NULL,option4 VARCHAR(300) NOT NULL, answer VARCHAR(300) NOT NULL, PRIMARY KEY (id))") or die(mysql_error());

mysql_query("CREATE TABLE IF NOT EXISTS quiz_math( id MEDIUMINT NOT NULL AUTO_INCREMENT, question VARCHAR(8192) NOT NULL, option1 VARCHAR(300) NOT NULL, option2 VARCHAR(300) NOT NULL, option3 VARCHAR(300) NOT NULL,option4 VARCHAR(300) NOT NULL, answer VARCHAR(300) NOT NULL, PRIMARY KEY (id))") or die(mysql_error());

mysql_query("CREATE TABLE IF NOT EXISTS quiz_biology( id MEDIUMINT NOT NULL AUTO_INCREMENT, question VARCHAR(8192) NOT NULL, option1 VARCHAR(300) NOT NULL, option2 VARCHAR(300) NOT NULL, option3 VARCHAR(300) NOT NULL,option4 VARCHAR(300) NOT NULL, answer VARCHAR(300) NOT NULL, PRIMARY KEY (id))") or die(mysql_error());

mysql_query("CREATE TABLE IF NOT EXISTS user_phy_score(username VARCHAR(200), quiz_date DATE, phy_score INT, ques_attempt INT, FOREIGN KEY (username) REFERENCES user(username))") or die(mysql_error());

mysql_query("CREATE TABLE IF NOT EXISTS user_bio_score(username VARCHAR(200), quiz_date DATE, bio_score INT, ques_attempt INT, FOREIGN KEY (username) REFERENCES user(username))") or die(mysql_error());

mysql_query("CREATE TABLE IF NOT EXISTS user_chem_score(username VARCHAR(200), quiz_date DATE, chem_score INT, ques_attempt INT, FOREIGN KEY (username) REFERENCES user(username))") or die(mysql_error());
?>
