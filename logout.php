<?php 
setcookie("username", "", time() -1,'/'); // 86400 = 1 day
?>
<script>
	
window.location = "login.php";
</script>