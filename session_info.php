<?php
session_start();
include('config.php');
if(isset($_SESSION['login_validation'])) :
	$session_id = $_SESSION['login_validation'];
	$user_data = "SELECT * FROM login_users_groups WHERE id = '$session_id'";
	$query = $db->query($user_data);
	while($row = mysqli_fetch_assoc($query))
	{
		$users_type = $row['users_type'];
	}
else : 
	echo 'Your session data expired. Please <a href="index.php">login</a> again and continue.'; exit;
endif;

?>