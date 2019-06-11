<?php

function link_url(string $uri) : string
{

    $url  = BASE_URL . $uri ;

    return $url ;

}

function fetch_posts(string $file_path , int $situation_assoc = 0)
{

    $file_read = file_get_contents(BASE_PATH.$file_path );

    $posts = json_decode($file_read ,  $situation_assoc);

    return $posts ;

}
function add_posts($file_name , array $new_posts):bool
{
    $file_array = json_decode(file_get_contents(BASE_PATH . $file_name) , 1);
    $file_array[] = $new_posts ;
    $result = file_put_contents(BASE_PATH . $file_name , json_encode($file_array));
    return true ;
}
