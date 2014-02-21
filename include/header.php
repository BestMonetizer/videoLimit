<?php
/*
 * Starting the PHP session in the header.php file
 * Include this file in all pages to set session and the top navigation bar according the user signIn or SignOut Status
 * 
 * This file defines 
 * Session
 * Top Menu
 * <head> tag
 * Scripts and files to be included should be added here
 * */
session_start();
?>
<!DOCTYPE html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>

  <meta charset="utf-8" />
  <!-- Set the viewport width to device width for mobile -->
  <meta name="viewport" content="width=device-width" />
				<title><?php /*Custom Title Setting*/echo $title; ?></title>
				<!--[if lt IE9]>
					<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
					<![endif]-->
					<meta name="viewport" content="width=device-width, initial-scale=1">
					<link rel="stylesheet" href="style/style.css">
					
					<?php
						if(isset($inc))
						{
							//insert extra script if required Include the address of the script file in $inc variable
							//
							echo "<script type=\"text/javascript\" src=\"$inc\"></script>";
						}
						?>
						
						<link rel="stylesheet" href="/stylesheet/foundation.min.css">
  <link rel="stylesheet" href="/stylesheet/main.css">
  <link rel="stylesheet" href="/stylesheet/app.css">

  <script src="/js/modernizr.foundation.js"></script>
  
  <link rel="stylesheet" href="/ligature.css">
  	  <!-- IE Fix for HTML5 Tags -->
	  <!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	  <![endif]-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Playfair+Display:400italic' rel='stylesheet' type='text/css' />
			</head>
			
			<body>
				<nav>

     <div class="twelve columns header_nav">
     <div class="row">
      
        <ul id="menu-header" class="nav-bar horizontal">
        	
        	<?php
						/*
						 * Changing the signup/signout menus if a session is active!
						 * */
						if(isset($_SESSION['id']) && ($_SESSION['password']))
						/*
						 * These will be displayed a Session is Set/Active
						 * */
						{
							echo "<li class=\"active\"><a href=\"/\">Home</a></li>";
							echo "<li><a href=\"/account\">My Account</a></li>";
							echo "<li><a href=\"/upload\">Upload</a></li>";
							echo "<li><a href=\"/logout\">Logout</a></li>";
							echo "<li><a href=\"/help\">Help</a></li>";
						}
						else
						/*
						 * Displyed if the session is not set/active
						 * */
						{
							echo "<li class=\"active\"><a href=\"/\">Home</a></li>";
							echo "<li><a>Hi Guest!</a></li>";
							echo "<li><a href=\"/signup\">Join Now</a></li>";
							echo "<li><a href=\"/login\">Login</a></li>";
							echo "<li><a href=\"/upload\">Upload</a></li>";
							echo "<li><a href=\"/help\">Help</a></li>";
						}
						?>
      
        </ul>
        
        <script type="text/javascript">
         //<![CDATA[
         $('ul#menu-header').nav-bar();
          //]]>
        </script>
        
      </div>  
      </div>
      
</nav>
      
      
<!-- ######################## Header ######################## -->
        
        <header>
              <h1 class="heading_supersize">Company Name</h1>
              <h2 class="welcome_text">We do some Stuff</h2>    
        </header>