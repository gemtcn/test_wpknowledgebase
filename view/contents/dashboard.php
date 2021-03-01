<section class="wp-main--body">
<div class="container">
    <div class="row">
    <?php
    require_once get_template_directory().'/view/sidebar.php';
    ?>
    <div class="col-12 col-sm-9">
        <div class="wp-main--contents__toppage">
        <form role="search" method="get" id="searchform" action="/" class="wp-main--contents__toppage--form">
            <input type="text" placeholder="検索" name="s" value="<?php echo @$_GET['s']; ?>">
        </form>
        <div class="wp-main--dots">
            <ul>
            <li></li>
            <li></li>
            <li></li>
            </ul>
        </div>
        <div class="wp-main--contents__toppage--group">
            <h3 class="title">最近追加されたマニュアル</h3>
            <?php
            $the_query = null;
            $the_query = new WP_Query( array('tax_query' => array(
                array(
                    'taxonomy' => 'category',
                    'field'    => 'slug',
                    'terms'    => 'manual',
                    'include_children'    => true,
                ),
            ),'posts_per_page' => 5) );
            if ( $the_query->have_posts() ) {
                echo '<ul>';
                while ( $the_query->have_posts() ) {
                    $the_query->the_post();
                    $thiscat = null;
                    $thiscat = get_the_category();
                    echo '<li><a href="'.get_the_permalink().'"><p>'.get_the_title().'</p><span>'.@$thiscat[0]->name.'</span></a>
                </li>';
                }
                echo '</ul>';
                wp_reset_postdata();
            }
            ?>
        </div>
        <div class="wp-main--dots">
            <ul>
            <li></li>
            <li></li>
            <li></li>
            </ul>
        </div>
        <div class="wp-main--contents__toppage--group">
            <h3 class="title">最近追加されたQ&A</h3>
            <?php
            $the_query = null;
            $the_query = new WP_Query( array('tax_query' => array(
                array(
                    'taxonomy' => 'category',
                    'field'    => 'slug',
                    'terms'    => 'qa',
                    'include_children'    => true,
                ),
            ),'posts_per_page' => 5) );
            if ( $the_query->have_posts() ) {
                echo '<ul>';
                while ( $the_query->have_posts() ) {
                    $the_query->the_post();
                    $thiscat = null;
                    $thiscat = get_the_category();
                    echo '<li><a href="'.get_the_permalink().'"><p>'.get_the_title().'</p><span>'.@$thiscat[0]->name.'</span></a>
                </li>';
                }
                echo '</ul>';
                wp_reset_postdata();
            }
            ?>
        </div>
        <div class="wp-main--dots">
            <ul>
            <li></li>
            <li></li>
            <li></li>
            </ul>
        </div>
        <div class="wp-main--contents__toppage--group">
            <h3 class="title">最近追加されたダウンロード</h3>
            <?php
            $the_query = null;
            $the_query = new WP_Query( array('tax_query' => array(
                array(
                    'taxonomy' => 'category',
                    'field'    => 'slug',
                    'terms'    => 'download',
                    'include_children'    => true,
                ),
            ),'posts_per_page' => 5) );
            if ( $the_query->have_posts() ) {
                echo '<ul>';
                while ( $the_query->have_posts() ) {
                    $the_query->the_post();
                    $thiscat = null;
                    $thiscat = get_the_category();
                    echo '<li><a href="'.get_the_permalink().'"><p>'.get_the_title().'</p><span>'.@$thiscat[0]->name.'</span></a>
                </li>';
                }
                echo '</ul>';
                wp_reset_postdata();
            }
            ?>
        </div>
        </div>
    </div>
    </div>
</div>
</section>
