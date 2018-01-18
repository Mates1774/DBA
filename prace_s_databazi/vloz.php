<?php
/**
 * Created by PhpStorm.
 * User: horacekmar
 * Date: 18.01.2018
 * Time: 13:39
 */
include_once "connect_db.php";
if(isset($_POST['odeslat'])) {
    $jmeno = $_POST['first'];
    $prijmeni = $_POST['last'];
    $ulice = $_POST['ulice'];
    $cp = $_POST['cp'];
    $mesto = $_POST['mesto'];
    $psc = $_POST['psc'];
    $vloz="Insert into osoby2 (jmeno, prijmeni, mesto, ulice, cp, psc) VALUES ('".$jmeno."','".$prijmeni."','".$mesto."','".$ulice."','".$cp."','".$psc."')";
    mysqli_query($condb, $vloz);
    mysqli_close();
    header("Location: ./");
}