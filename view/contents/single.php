<section class="wp-main--body">
<div class="container">
    <div class="row">
    <?php
    require_once get_template_directory().'/view/sidebar.php';
    ?>
        <div class="col-12 col-sm-9">
          <div class="wp-main--contents__sigle">
            <h2 class="wp-main--contents__sigle--title"><?php the_title(); ?></h2>
            <ul class="wp-main--contents__sigle--detail">
              <?php
              echo '<li>作成日：'.get_the_time('Y年m月d日').'</li>';
              echo '<li>更新日：'.get_the_modified_date('Y年m月d日').'</li>';
              echo '<li>作成者：'.get_the_author().'</li>';
              $this_psot_category = get_the_category();
              if(is_array($this_psot_category)){echo '<li>カテゴリー：'.@$this_psot_category[0]->name.'</li>';}
              ?>
            </ul>
            <div class="wp-main--contents--single-content">
              <?php the_content(); ?>
            </div>
            <div class="wp-main--dots">
              <ul>
                <li></li>
                <li></li>
                <li></li>
              </ul>
            </div>
            <div class="text-center">
              <a class="wp-main--button" href="<?php echo site_url('/wp-admin/post.php?post='.get_the_ID().'&action=edit'); ?>">このマニュアルを編集する</a>
            </div>
          </div>
        </div>
    </div>
</div>
</section>
