<?php
/**
 * Created by PhpStorm.
 * User: horacekmar
 * Date: 06.12.2017
 * Time: 12:49
 */
if(!isset($_GET['page'])){
    $title = "ČAJ - lahodný nápoj";
}
if(isset($_GET['page'])) {
    if ($_GET['page'] == "cerny") {
        $title = "Čaj - Černý čaj";
    } elseif ($_GET['page'] == "bily") {
        $title = "Čaj - Bílý čaj";
    } elseif ($_GET['page'] == "oolong") {
        $title = "Čaj - Oolong čaj";
    } else {
        $title = "Čaj - Zelený čaj";
    }
}
?>
<head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="style.css" type="text/css">

</head>
