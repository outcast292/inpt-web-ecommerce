<?php 


$files = array_diff(scandir("./img/banners"), array('..', '.'));
var_dump($files);