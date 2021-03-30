<?php
function siam_bootstrapping()
{
    load_theme_textdomain("siam");
    add_theme_support('post-thumbnails');
    add_theme_support("title-tag");
}
add_action("after_setup_theme", "siam_bootstrapping");

function siam_assets()
{
    wp_enqueue_style("siam", get_stylesheet_uri());
    wp_enqueue_style("bootstrap", "//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css");
}
add_action("wp_enqueue_scripts", "siam_assets");