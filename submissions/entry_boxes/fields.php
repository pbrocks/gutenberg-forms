<?php 


require_once ABSPATH . 'wp-content/plugins/gutenberg-forms/markdown/table.php';


function fields() {


    $post_type = "cwp_gf_entries";
    $post_id = get_the_ID();
    $post_meta = get_post_meta( $post_id, "fields__$post_type", true );

    
    echo Table($post_meta);

}   