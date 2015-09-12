<?php 
require('db.php');
require_once('functions.php');
//figure out what page to show
$page = $_GET['page'];
?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Radical Blog</title>
<link href="format.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="wrapper">
  <div id="header">
    <h1><a href="index.php">PHP Blog Starter</a></h1>
       
  </div><!--END HEADER-->
  
 
  <div id="content" class="cf">
  	<main class="main">
		<?php
		//switch to determine what content to show
		//url will look something like index.php?page=blog
		switch($page){
				case 'blog':
				include('blog_content.php');
				break;
				case 'single':
				include('single_content.php');
				break;
				case 'category':
				include('category_content.php');
				break;
				case 'search':
				include('search.php');
				break;
				default:
				include('home_content.php');
			
		}
		?>
	</main><!-- close main -->
	
	<?php include ('sidebar.php') ?>

</div><!--END CONTENT-->

 
  <div id="footer">
&copy; <?php echo date('Y'); ?> Nicholas Palomares |  Powered by PHP &amp; MYSQL
   </div><!--END FOOTER--> 
  
</div>
<!--END WRAPPER-->
</body>
</html>