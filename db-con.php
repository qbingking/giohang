<?php

const HOST = "localhost";
const DB_NAME = "253";
const DB_USER = "root";
const DB_PASSWORD = "";
              
$link = mysqli_connect(HOST, DB_USER, DB_PASSWORD, DB_NAME); 

	if (mysqli_connect_errno()) {
 	printf("Connect failed: %s\n", mysqli_connect_error());
 	exit();
	}

	mysqli_select_db($link, DB_NAME);
	mysqli_set_charset($link, 'utf8');
?>

<?php



              

// $link = mysqli_connect("localhost","khanhna92_115","sinvaipo"); 

// 	if (mysqli_connect_errno()) {
//     	printf("Connect failed: %s\n", mysqli_connect_error());
//     	exit();
// 	}

// 	mysqli_select_db($link,"khanhna92_115");
//  	mysqli_set_charset($link, 'utf8');

?>