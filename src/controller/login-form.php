<?php 
require_once('../utils/script.php');
require_once('../utils/login_utils.php');
$result = is_valid_user($_POST['email'], $_POST['password']);
if($result){
    session_start();
    $_SESSION['user'] = $result;
    header('Location: /?page=home');
} else {
    header('Location: /?page=login');
};
?>