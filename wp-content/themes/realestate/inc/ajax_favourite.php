<?php
add_action("wp_ajax_user_favourite", "user_favourite");

function user_favourite() {
    $array_favourite = array();
    $post_id = $_REQUEST["post_id"];
    if(count($_COOKIE['home_favourites']) > 0) {
        $cookie = $_COOKIE['home_favourites'];
        $cookie = stripslashes($cookie);
        $array_favourite = json_decode($cookie, true);
    }

    if(!in_array($post_id, $array_favourite)){
        array_push($array_favourite, $post_id);
    }

    $json = json_encode($array_favourite);

    setcookie("home_favourites", $json, time()+3600 * 24 * 365, COOKIEPATH, COOKIE_DOMAIN, false);

    return true;
    die();
}

