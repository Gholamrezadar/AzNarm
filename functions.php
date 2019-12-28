<?php

function custom_excerpt_length()
{
    return 25;
}

add_filter('excerpt_length','custom_excerpt_length');