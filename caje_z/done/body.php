<?php
/**
 * Created by PhpStorm.
 * User: horacekmar
 * Date: 06.12.2017
 * Time: 12:50
 */
$dir = "include";
if(isset($_GET['page']) && !empty($_GET['page'])) {
    $page = $_GET['page'];
}
else
{
    $page = "home";
}
$page = str_replace(".","-",$page);
$page = str_replace("/","-",$page);
$page = str_replace("'","-",$page);
$page = str_replace('"',"-",$page);
include $dir."/".$page.".php";
?>
