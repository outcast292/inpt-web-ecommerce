<?php 
echo($_SERVER['REQUEST_URI']."<br>");
$link = preg_replace('~(\?|&)disconnect=[^&]*~','$1',$_SERVER['REQUEST_URI']);
$link = rtrim($link, '?&');
echo($link);
header("location: " . $link);

