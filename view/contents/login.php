<section class="wp-main--contents__login">
    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-6 offset-sm-3 col-xl-4 offset-xl-4">
            <form method="POST" action="" enctype="multipart/form-data">
                <?php
                $rand = substr(str_shuffle('1234567890abcdefghijklmnopqrstuvwxyz'), 0, 8);
                $nonce = wp_create_nonce( $rand );
                $_SESSION['mynonce'] = $rand;
                echo '<input type="hidden" name="mynonce" value="'.$nonce.'">';
                ?>
                <img src="<?php echo get_template_directory_uri(); ?>/dist/images/image-logo-loginform.png" alt="">
                <?php 
                if(@$_GET['pageerror'] == 1){
                  echo '<div class="mb-3 text-danger">ログインできませんでした</div>';
                }
                ?>
                <div class="form-group has-label">
                <input type="text" name="emailaddress" placeholder="ID" value="">
                </div>
                <div class="form-group">
                <input type="password" name="password" placeholder="PASS" value="">
                <div class="mt-3 d-grid gap-2 col-6 mx-auto"><button class="btn btn-dark" type="submit" name="login" value="login">LOGIN</button></div>
                </div>
            </form>
        </div>
      </div>
    </div>
  </section>