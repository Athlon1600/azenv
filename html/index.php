<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>AZ Environment variables 1.04</title>
<meta name="keywords" content="proxyjudge, proxy judge, azenv proxy judge, azenv.php" />
</head>
<body>
<h1>PHP Proxy Judge</h1>
<pre>
<?php

##########################################################################
#	
#	AZ Environment variables 1.04 © 2004 AZ
#	Civil Liberties Advocacy Network
#	http://clan.cyaccess.com   http://clanforum.cyaccess.com
#	
#	AZenv is written in PHP & Perl. It is coded to be simple,
#	fast and have negligible load on the server.
#	AZenv is primarily aimed for programs using external scripts to
#	verify the passed Environment variables.
#	Only the absolutely necessary parameters are included.
#	AZenv is free software; you can use and redistribute it freely.
#	Please do not remove the copyright information.
#

/*

Meta-variables with names beginning with "HTTP_" contain values read from the client request header fields, if the protocol used is HTTP.
The HTTP header field name is converted to upper case, has all occurrences of "-" replaced with "_" and has "HTTP_" prepended to give the meta-variable name.

*/ 
##########################################################################


if(isset($_SERVER['HTTP_X_CUSTOM_REAL_IP'])){
	$_SERVER['REMOTE_ADDR'] = $_SERVER['HTTP_X_CUSTOM_REAL_IP'];
	unset($_SERVER['HTTP_X_CUSTOM_REAL_IP']);
}

   
foreach ($_SERVER as $header => $value )
{ if 	(strpos($header , 'REMOTE')!== false || strpos($header , 'HTTP')!== false ||
	strpos($header , 'REQUEST')!== false) {echo $header.' = '.$value."\n"; } }
?>
</pre>
</body>
</html>
