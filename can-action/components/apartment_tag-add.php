<?php 
if(isset($_POST['add_apartment_tag']))
{
	include 'db-con.php';
	$tag_name = $_POST['tag_name'];

	//$tag_name = strtolower($tag_name);
	//$tag_name = str_replace(" ","-",$tag_name);
	$qq = "INSERT INTO apartment_tag(tag_name) VALUES('$tag_name')";
	mysqli_query( $link,$qq );
}
 ?>

<div class="card-box col-12">
	<form method="post" action='' class="form-horizontal" role="form">
	    <div class="form-group row">
	        <div class="col-12 p-0">
	            <input type="text" class="form-control mt-1" placeholder="Tên Danh Mục" name="tag_name">
	        </div>
	        <button type="submit" name="add_apartment_tag" class=" mt-3 col-12 btn btn-block btn-primary waves-effect waves-light">Thêm mới</button>
	    </div>
	</form>   
</div> <!-- end card-box -->