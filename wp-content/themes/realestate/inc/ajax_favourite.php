<?php
add_action("wp_ajax_user_favourite", "user_favourite");

function user_favourite() {
    $post_id = $_REQUEST["post_id"];

    echo '$post_id:'.$post_id;

    die();
}

