<?php 
const BASE_TEMPLATE = "http://localhost/giohang/super-template/horizontal/";
const BASE_PLUGIN =  "http://localhost/giohang/super-template/";
const DOMAIN = "http://localhost/giohang/";


$ROLE_SETUP = array(0 => 'login.php',   // out team
					1 => 'role-sales' , // CTV
					2 => 'role-sales',  // Chuyên Viên
					3 => 'role-sales',  // QLKDoanh
					4 => 'role-qlda',   // Quản Lý Dự Án
					22 => 'role-onlysee',
					100 => 'super-admin');

$INCOME_SETUP = array(1 => [0.50, 0.55, 0.60], 
					  2 => [0.50, 0.60, 0.60], 
					  3 => [0.70, 0.70, 0.70],
					  4 => [0.65, 0.65, 0.65] );


/*
INSERT INTO apartment(id, address,id_district)
SELECT id, diachi, quan FROM building;

UPDATE apartment,building_info
SET 
apartment.dien = building_info.dien,
apartment.nuoc = building_info.nuoc,
apartment.net = building_info.internet,
apartment.thangmay = building_info.thangmay,
apartment.maygiat = building_info.maygiat,
apartment.donphong = building_info.donphong,
apartment.note = building_info.note,
apartment.hoahong = building_info.hoahong,
apartment.coc = building_info.coc,
apartment.parking = building_info.parking
WHERE apartment.id = building_info.id_building

INSERT INTO roomkit(id, id_apartment, id_status, id_type, maphong, saptrong, price, square)
SELECT id, id_building, stt, loaiphong, maphong, saptrong, tienthue, dientich
FROM room;

UPDATE apartment
SET
id_district = 'binhthanh'
WHERE id_district = 'Bình Thạnh'

SELECT MONTH(STR_TO_DATE(birthdate, '%d-%m-%Y')) FROM customer
*/

 ?>