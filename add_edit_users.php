<?php 
    session_start();
    include("config.php");
    if(isset($_POST['form_data'])) :
        $name = $db->real_escape_string($_POST['name']);
        $username = $db->real_escape_string($_POST['username']);
        if(isset($_POST['password'])) : 
            $password = md5($db->real_escape_string($_POST['password']));
        else :
            $password = $db->real_escape_string($_POST['old_password']);
        endif;
        $id = ($_POST['id']!="") ? $_POST['id'] : '';
        if($id!="") :
        	$query = " UPDATE `login_users_groups` SET `name`= '$name', `username`='$username',
             `password`='$password' , `users_type`='2' WHERE id=$id";
        	$msg = "Successfully Updated Your Record";
        else: 
        	$query = " INSERT INTO `login_users_groups` SET `name`= '$name', `username`='$username',
             `password`='$password',`users_type`='2'";
        	$msg = "Successfully Inserted Your Record";        	
        endif;
        $sql = $db->query($query);
        $_SESSION['flash_msg'] = $msg;
        header("Location:users.php");
    endif;

    if(isset($_POST['ct_id'])) :
        $id = ($_POST['ct_id']!="") ? $_POST['ct_id'] : '';
        if($id!="") :
            $query = "DELETE FROM login_users_groups WHERE id =$id";
            $sql = $db->query($query);
            echo 1;
        else :
            echo 0;
        endif;
    else :
        echo 0;
    endif;
?>