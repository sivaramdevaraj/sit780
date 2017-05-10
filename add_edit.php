<?php 
    session_start();
    include("config.php");
    if(isset($_POST['form_data'])) :
        $surname = $db->real_escape_string($_POST['surname']);
        $user_email = $db->real_escape_string($_POST['email']);
        $givenname = $db->real_escape_string($_POST['givenname']);
        $address = $db->real_escape_string($_POST['address']);
        $id = ($_POST['id']!="") ? $_POST['id'] : '';
        if($id!="") :
        	$query = " UPDATE `staff_infromation` SET `surname`= '$surname', `email`='$user_email',
             `givenname`='$givenname' , `address`='$address' WHERE id=$id";
        	$msg = "Successfully Updated Your Record";
        else: 
        	$query = " INSERT INTO `staff_infromation` SET `surname`= '$surname', `email`='$user_email',
             `givenname`='$givenname',`address`='$address'";
        	$msg = "Successfully Inserted Your Record";        	
        endif;
        $sql = $db->query($query);
        $_SESSION['flash_msg'] = $msg;
        header("Location:staff_info.php");
    endif;

    if(isset($_POST['ct_id'])) :
        $id = ($_POST['ct_id']!="") ? $_POST['ct_id'] : '';
        if($id!="") :
            $query = "DELETE FROM staff_infromation WHERE id =$id";
            $sql = $db->query($query);
            echo 1;
        else :
            echo 0;
        endif;
    else :
        echo 0;
    endif;
?>