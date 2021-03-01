<?php
/**
 * Route
 */
session_start();

if(is_user_logged_in()){
    if(is_front_page()){
        if(!empty($_GET['action'])){
            require_once get_template_directory().'/controller/action-logout.php';
        }
        else{
            require_once get_template_directory().'/controller/dashboard.php';
        }
    }
    elseif(is_search()){
        require_once get_template_directory().'/controller/search.php';
    }
    elseif(is_single()){
        require_once get_template_directory().'/controller/single.php';
    }
}
else{
    if(!empty($_POST['mynonce']) and wp_verify_nonce(@$_POST['mynonce'],@$_SESSION['mynonce'])){
        require_once get_template_directory().'/controller/action-login.php';
    }
    else{
        require_once get_template_directory().'/controller/login.php';
    }
}