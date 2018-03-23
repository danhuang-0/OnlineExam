<?php
/**
 * Date: 2018.1.1
 * Time: 07:35 AM
 */

function shortText($text, $chars =150){
    $text = $text." ";
    $text = substr($text,0,$chars);
    $text = substr($text,0,strrpos($text,' '));
    return $text;
}
?>