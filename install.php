<html>
<body>
<?php
 // Connect to the MySQL server
 $link = mysql_connect('localhost', "root", "");
 mysql_query('CREATE DATABASE robotics');
 mysql_query('USE robotics');

 mysql_query('CREATE TABLE teamdata (team VARCHAR(25), s1 VARCHAR(25), s2 VARCHAR(25),s3 VARCHAR(25),s4 VARCHAR(25),s5 VARCHAR(25),mob1 VARCHAR(25),mob2 VARCHAR(25),mcscore float,rwscore float,rsscore float,lfscore float,c1 VARCHAR(50),c2 VARCHAR(50),c3 VARCHAR(50),c4 VARCHAR(50) )');
 echo "Created Tabble teamdata";
?>
</body>
</html>