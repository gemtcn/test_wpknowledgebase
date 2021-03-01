<?php
// Config
require_once get_template_directory().'/controller/config-menu.php';

// View
if(have_posts()): while(have_posts()):the_post();
require_once get_template_directory().'/view/head.php';
require_once get_template_directory().'/view/navbar.php';
require_once get_template_directory().'/view/contents/single.php';
require_once get_template_directory().'/view/foot.php';
endwhile;endif;