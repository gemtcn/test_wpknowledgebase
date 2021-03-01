<?php
if(!empty($_POST['emailaddress']) and !empty($_POST['password'])){
  $user_data = get_user_by( 'email', $_POST['emailaddress'] );
  $user_data2 = get_user_by( 'login', $_POST['emailaddress'] );
  if(!empty($user_data->user_login) or !empty($user_data2->user_login)){
    if(!empty($user_data->user_login)){
      $userlogin = $user_data->user_login;
    }
    else{
      $userlogin = $user_data2->user_login;
    }
    $creds['user_login'] = $userlogin;
  	$creds['user_password'] = $_POST['password'];
    if(!empty($_POST['remember'])){
      $creds['remember'] = true;
    }
  	$user = wp_signon($creds,false);
    if ( is_wp_error($user) ){
      wp_safe_redirect(site_url('/?pageerror=1'));
      exit;
    }
    else{
      wp_clear_auth_cookie();
      do_action('wp_login', $user->ID);
      wp_set_current_user($user->ID);
      wp_set_auth_cookie($user->ID, true);
      wp_safe_redirect(site_url());
      exit;
    }
  }
  else{
    wp_safe_redirect(site_url('/?pageerror=1'));
    exit;
  }
}
else{
  wp_safe_redirect(site_url('/?pageerror=1'));
  exit;
}
