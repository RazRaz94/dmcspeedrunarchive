<?php
$request=$_SERVER['REQUEST_URI'];
$router=str_replace('/DMCSpeedrunArchive','',$request);

if($router=='/'){
    include('Home.php');
}elseif($router=='/DMC1'){
    include('DMC1.html');
}else{
    include('404.php');
}
?>