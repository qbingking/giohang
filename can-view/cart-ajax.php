<?php 

if(isset($_POST['idapm']))
{
	include "db-con.php";
	$idapm = $_POST['idapm'];
	$account = $_POST['account'];

	$q1 = "SELECT id FROM cart WHERE (id_apartment = '$idapm') AND (account = '$account') ";
	if(!mysqli_num_rows(mysqli_query($link, $q1)))
	{
		$q = "INSERT INTO cart(id_apartment, account) VALUES('$idapm', '$account')";
		mysqli_query($link, $q);
	}

	

}

if(isset($_POST['delincart']))
{
	include "db-con.php";
	$idapm = $_POST['delincart'];
	$account = $_POST['delaccount'];

	$qq = "DELETE FROM cart WHERE (id_apartment = '$idapm') AND (account = '$account') ";
	mysqli_query($link, $qq);

}

 ?>