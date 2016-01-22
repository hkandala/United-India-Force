<?php
    require_once 'include/php/connect.php';
    require_once 'UserClass.php';
	require_once 'include/php/password.php';

    session_start();
    $name = $_POST['name'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $mobile = $_POST['mobile'];
    $profession = $_POST['profession'];
    $city = $_POST['city'];
    $pincode = $_POST['pincode'];

    $result = $GLOBALS['db']->select('*','users','email',"$email");
    if($result == NULL) {
	    echo ('Something wrong happened, Please try again');
    } else {
        $no = $result->num_rows;
        if($no != 0) {
            echo ('This email is already registered');
        } else if(($pass != NULL) && ($name != NULL) && ($email != NULL)) {
            $myUser = new User;
            $myUser->newUser($name, $age, $email, password_hash($pass,PASSWORD_DEFAULT), $mobile, $profession, $city, $pincode);
            $myUser->insertUser();
            $myUser->getUserFromUserName($email);
            echo ('You have successfully registered');
        } else {
            echo ('Something wrong happened, Please try again');
        }
    }
