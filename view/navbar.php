<header class="wp-main--header">
<div class="container">
    <h1 class="wp-main--header__logo">
        <a href="<?php echo site_url(); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/dist/images/image-logo.png" alt="">
        </a>
    </h1>
    <div class="wp-main--header__account d-none d-sm-block">
    <button type="button" id="toggleAccountMenu">
        <img src="<?php echo get_template_directory_uri(); ?>/dist/images/icon-account.svg" alt="">
    </button>
    <div class="wp-main--header__account--menu">
        <a href="<?php echo site_url('/wp-admin/'); ?>">WP管理画面</a>
        <a href="<?php echo site_url('/wp-admin/admin.php?page=wpknowledgebaseconfig'); ?>">WPKB設定</a>
        <a href="<?php echo site_url('/?action=logout'); ?>">ログアウト</a>
    </div>
    </div>
    <button type="button" id="toggleMobileMenu" class="d-block d-sm-none">
    <img src="<?php echo get_template_directory_uri(); ?>/dist/images/icon-show-menu.svg" alt="">
    </button>
    <div class="wp-main--sidebar" id="mobileMenu">
    <a class="back-toppage" href="#">ホーム</a>
    <?php
        foreach ($basic_category as $gcat => $gcatvalue) {
            if(!empty($array_contents_index[$gcat]) and is_array($array_contents_index[$gcat])){
                echo '<div class="wp-main--sidebar__group">';
                echo '<h4 class="wp-main--sidebar__group--title">'.$gcatvalue.'</h4>';
                foreach ($array_contents_index[$gcat] as $menu) {
                    echo '<div class="wp-main--sidebar__group--submenu">';
                    echo ' <p><span class="wp-main--sidebar__group--icon"></span>'.$menu['name'].'</p>';
                    if(is_array($menu['post'])){
                        echo '<ul>';
                        foreach ($menu['post'] as $menupost) {
                            echo '<li><a href="'.$menupost['url'].'">'.$menupost['title'].'</a></li>';
                        }
                        echo '</ul>';
                    }
                    echo ' </div>';
                }
                echo '</div>';
            }
        }
        
        ?>
    </div>
</div>
</header>