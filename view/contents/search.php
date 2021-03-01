<section class="wp-main--body">
<div class="container">
    <div class="row">
    <?php
    require_once get_template_directory().'/view/sidebar.php';
    ?>
    <div class="col-12 col-sm-9">
        <div class="wp-main--contents__searchpage">
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
              <ul>
                <?php
                if (have_posts() && get_search_query()) : while (have_posts()) :the_post();
                $this_psot_category = null;
                $this_psot_category = get_the_category();
                echo '<li>
                <a href="'.get_the_permalink().'">
                  <p>'.get_the_title().'</p>
                  <span>'.@$this_psot_category[0]->name.'</span>
                </a>
                 </li>';
                endwhile;endif;
                ?>
              </ul>
            </div>
        </div>
    </div>
    </div>
</div>
</section>
