<?php 
require_once('./script.php');
require_once('./login_utils.php');

session_start();

$valid_session = is_valid_session();
if($valid_session){
    if(is_valid_user($_SESSION['user']['email'], $_SESSION['user']['password'])){
        $sql_create_user = "UPDATE users set password = :password,name = :name ,last_name = :last_name where email = :email";
        $sql_args = array('email' => $_POST['email'] , 'password' => $_POST['password'], 'name' => $_POST['name'], 'last_name' => $_POST['last_name']);
        $result = requestSQL($sql_create_user, $sql_args);

        $_SESSION['user'][0] = $sql_args;
        header('Location: /?page=profile');
    }else{
        header('Location: /?page=profile_form');
    }
}else{
    header('Location: /?page=profile_form');
}

?>