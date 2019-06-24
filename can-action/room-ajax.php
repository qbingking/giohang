<?php 

if(isset($_POST['idRoom']))
{
	include "db-con.php";
	$field = $_POST['field'];
	$value = $_POST['value'];
	$editid = $_POST['idRoom'];

	$query = "UPDATE roomkit SET ".$field."='".$value."' WHERE id =".$editid;
	mysqli_query($link,$query);
	date_default_timezone_set('Asia/Ho_Chi_Minh');
	$dateup = date('H:i, d-m');
	$qq = "UPDATE apartment, roomkit SET apartment.dateup = '$dateup' 
			WHERE (roomkit.id = ".$editid ." ) 
			AND (roomkit.id_apartment = apartment.id ) " ;
	mysqli_query($link,$qq);

}

if(isset($_POST["del_room"]))
{
	include "db-con.php";
	$idRoom  = $_POST['del_room'];
	$query = "DELETE FROM roomkit WHERE id = ".$idRoom;
	mysqli_query($link,$query);
}

 ?>