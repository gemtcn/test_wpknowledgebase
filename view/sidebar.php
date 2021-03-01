<div class="col-12 col-sm-3">
        <div class="wp-main--sidebar d-none d-sm-block">
        <a class="back-toppage" href="<?php echo site_url(); ?>">ホーム</a>
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