<?php
// Note : Smarty a un 'S' majuscule
require_once('../libs/Smarty.class.php');
require_once('utils/login_utils.php');
require_once('utils/script.php');
require_once('controller/search.php');

$smarty = new Smarty();
session_start();
$valid_session = is_valid_session();
$smarty->assign('valid_session',$valid_session);
if(!isset($_GET['page'])){
    $_GET['page'] = "home";
}
switch ($_GET['page']) {
    case 'login':
        $content = $smarty->fetch('./html/login.tpl');
        break;
    case 'register':
        $content = $smarty->fetch('./html/register.tpl');
        break;
    case 'logout':
        session_destroy();
        header('Location: /?page=home');
        break;
    case 'home':
        $content = $smarty->fetch('./html/home.tpl');
        break;
    case 'search':
        if($valid_session){
            $meridiens = getMeridiens();
            $smarty->assign('meridiens',$meridiens);
            $content = $smarty->fetch('./html/search.tpl');
        }else{
            header('Location: /?page=login');
        }
        break;
    case 'profile':
        if($valid_session){
            $content = $smarty->fetch('./html/profile.tpl');
        }else{
            header('Location: /?page=login');
        }
        break;
    case 'profile_form' :
        if($valid_session){
            $content = $smarty->fetch('./html/profile_form.tpl');
        }else{
            header('Location: /?page=login');
        }
        break;
    default:
        $content = $smarty->fetch('./html/home.tpl');
        break;
}
$smarty->assign('content',$content);
$smarty->display('./html/template.tpl');
?>