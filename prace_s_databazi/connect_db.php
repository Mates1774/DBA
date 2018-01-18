<?php
/**
 * Created by PhpStorm.
 * User: horacekmar
 * Date: 18.01.2018
 * Time: 13:38
 */
$server="127.0.0.1";
$user="root";
$paswd="";
$datab="horacek";

$condb=mysqli_connect($server, $user, $paswd, $datab);
mysqli_set_charset($condb,"utf8");