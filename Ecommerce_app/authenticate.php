
<?php
	
	$id = $_GET['id'];
	$pass = $_GET['pwd'];

	if ($id == 'Admin' && $pass == 'admin') {
			header("Location: dashboard.php");
		}
	

?>