<?php 

// Sửa Bảng BUILDINGS & BUILDING INFO
if(isset($_POST['idBuilding']))
{
include "db-con.php";
$field = $_POST['field'];
$value = $_POST['value'];
$editid = $_POST['idBuilding'];
//echo $editid;

	$query = "UPDATE customer_coll SET ".$field."='".$value."' WHERE id =".$editid;
	mysqli_query($link,$query);

}

if(isset($_POST['idApm']))
{
include "db-con.php";
$field = $_POST['field'];
$value = $_POST['value'];
$editid = $_POST['idBuilding'];
//echo $editid;

	$query = "UPDATE apartment_tag SET ".$field."='".$value."' WHERE id =".$editid;
	mysqli_query($link,$query);


}

if(isset($_POST["del_apm"]))
{
	include "db-con.php";
	/* Xóa Phòng & Xóa Thông tin dự án */
	$idapm  = $_POST['del_apm'];
	$query = "DELETE FROM roomkit WHERE id_apartment = ".$idapm;
	mysqli_query($link,$query);
	$query = "DELETE FROM apartment WHERE id = ".$idapm;
	mysqli_query($link,$query);
}

 ?>