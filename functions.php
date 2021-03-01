<?php
require_once get_template_directory().'/wpccore/functions/form.php';
require_once get_template_directory().'/wpccore/functions/form-action.php';
require_once get_template_directory().'/wpccore/functions/form-image.php';
require_once get_template_directory().'/wpccore/functions/admin-page.php';

function wpknowledgebaseconfig(){
    add_menu_page('WPKB設定','WPKB設定', 'manage_options', 'wpknowledgebaseconfig', 'wpknowledgebaseconfigPage', 'dashicons-admin-generic', 50);
}
add_action('admin_menu', 'wpknowledgebaseconfig');

function load_custom_wp_admin_style() {
    wp_register_style( 'custom_wp_admin_css', get_stylesheet_directory_uri() . '/admin.css', false, '1.0.0' );
    wp_enqueue_style( 'custom_wp_admin_css' );
}
add_action( 'admin_enqueue_scripts', 'load_custom_wp_admin_style' );

function wpknowledgebaseconfigPage(){
  $array_form = array(
    array(
      'title' => '基本情報',
      'row' => array(
        array(
          array('col' => 6,'title' => 'サイト名','type' => 'text','name' => 'blogname','value-type' => 'option'),
        ),
        array(
            array('col' => 12,'title' => 'サイト説明文','type' => 'textarea','name' => 'blogdescription','value-type' => 'option'),
        ),
        array(
          array('col' => 6,'title' => 'ロゴ','type' => 'image','name' => 'sitelogo','value-type' => 'option'),
        ),
      )
    ),
  );

  if(!empty($_POST['submit'])){
    wpc_actions($array_form); 
  }
  echo adminpage_view(array(
    'title' => 'WPKB設定',
    'forms' => $array_form
  ));
}