<?php
$basic_category = array(
    'manual' => 'マニュアル',
    'qa' => 'Q&A',
    'download' => 'ダウンロード',
);
$array_contents_index = null;
foreach ($basic_category as $catl_key => $catl_val) {
    $thiscatobj = $categories = null;
    $thiscatobj = get_category_by_slug($catl_key);
    if($thiscatobj !== false){
        $categories = get_categories( array('parent' => $thiscatobj->term_id) );
        if(is_array($categories)){
            foreach ($categories as $category) {
                $the_query = $thiscategory_post = null;
                $the_query = new WP_Query( array('cat' => $category->cat_ID,'posts_per_page' => -1) );
                if ( $the_query->have_posts() ) {
                    echo '<ul>';
                    while ( $the_query->have_posts() ) {
                        $the_query->the_post();
                        $thiscategory_post[] = array(
                            'title' => get_the_title(),
                            'url' => get_the_permalink(),
                            'id' => get_the_ID()
                        );
                    }
                    echo '</ul>';
                    wp_reset_postdata();
                }
                $array_contents_index[$catl_key][] = array(
                    'name' => $category->name,
                    'slug' => $category->slug,
                    'id' => $category->cat_ID,
                    'post' => $thiscategory_post
                );
            }
        }
    }
}