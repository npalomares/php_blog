<?php
//connect to the user
$db = mysql_connect('localhost','npalomares_blog','vK7BKG7qEzxHPMvq');
//select the data base (db)
mysql_select_db('blog_np',$db) or die('Could not connect to the database. Try again later.');