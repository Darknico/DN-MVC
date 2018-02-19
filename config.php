<?php
	if (!defined("DN-MVC")) die("Hacking...");	
	
	/* Framework Preferences */
	
	/* Put selected language here, something like 'en-US' will make the system look for a file named en-US.xml in the localization folder;   *
	 * Use 'auto' to auto-choose the language according to the users' browser preferences, if no language is found, the system automatically *
	 * falls back to en-US.xml, use the keyword 'disabled' to disable the translationEngine  */
	$language = 'auto';


	########## Directories/Files ##########
	$site_name = 'DN-MVC';
	$site_url = 'http://localhost/DN-MVC';
	$site_desc = ''; // default description

	/* Database Configuration */
	
	$dbms = 'mysql';				// used DBMS (used to load correct driver)
	
	$dbhost = 'localhost';			// DBMS hostname
	$dbuser = 'root';				// DBMS username
	$dbpass = '';					// DBMS password
	$dbname = 'dn_mvc';				// Database Name
	$dbport = NULL;					// DBMS port
	$dbsocket = NULL;				// DBMS socket
	
?>
