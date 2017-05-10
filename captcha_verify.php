<?php 
include('config.php');
session_start();
if (!empty($_POST['captch'])) {
    if (empty($_SESSION['captcha']) || trim(strtolower($_POST['captch'])) != $_SESSION['captcha'] || empty($_POST['captch'])) {
        echo 0;        
    } 
    else
    {
    	$username = $db->real_escape_string($_POST['username']);
    	$password = md5($db->real_escape_string($_POST['password']));
        $sql = "SELECT id,username,password,users_type FROM login_users_groups WHERE username = '$username' AND password = '$password'";
        $result = $db->query($sql);
        if (mysqli_num_rows($result) == 1):
        	while ($row = mysqli_fetch_assoc($result)) {
			    $_SESSION['login_validation'] = $row['users_type'];     
			}
			echo 1;
        	unset($_SESSION['captcha']);
        else :
        	echo 2;
        endif;
    }   
}
?>
