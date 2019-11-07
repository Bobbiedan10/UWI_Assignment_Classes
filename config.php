<?php
    define('APP_ROOT_DIR', 'C:/wamp64/www/Assignment2' );

    //setting the data constants
    define('DB_USER', 'root');
    define('DB_NAME', 'vlrms');
    define('DB_PASS', '');
    define('DB_HOST', 'localhost');

    //connect to database
    $host = 'localhost';
	$username = 'root';
	$password = '';
	$database = 'assignment2';
	$conn = mysqli_connect($host, $username, $password, $database);


	//$conn is outr database object
	if(!$conn)
	{
		die('Cannot connect to server');
	}
?>