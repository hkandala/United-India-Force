<?php
    ob_start();
    require_once './include/php/connect.php';
    require_once 'UserClass.php';
	require_once 'include/php/password.php';

    session_start();
    $user = $_POST['email'];
    $pass = $_POST['password'];
    $result = $GLOBALS['db']->select('*','users','email',"$user");
    if($result != NULL) {
        $no = $result->num_rows;
        if($no==1) {
            $row = $result->fetch_assoc();
            if(!(password_verify($pass, $row['password']))) {
                echo ('Wrong Password, Please try again');
            } else {
		        $myUser = new User;
		        $myUser->getUserFromUserName($user);
		        $_SESSION['curUser'] = $myUser->id;
                echo ('Logged In');
            }
        } else if($no == 0) {
            echo ('User not registered');
        } else {
            echo ('Unknown Error, Please try again');
        }
    } else {
        echo ('Logged In');
    }
    ob_end_flush();
