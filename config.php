<?php
    define('APP_ROOT_DIR', 'C:/wamp64/www/Assignment2' );

    //setting the data constants
    define('DB_USER', 'root');
    define('DB_NAME', 'vlrms');
    define('DB_PASS', '');
    define('DB_HOST', 'localhost');

    //connect to database
	$conn = mysqli_connect(DB_HOST ,DB_USER, DB_PASS, DB_NAME);

	//$conn is outr database object
	if(!$conn)
	{
		die('Cannot connect to server');
	}
?>