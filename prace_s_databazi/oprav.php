<?php
/**
 * Created by PhpStorm.
 * User: horacekmar
 * Date: 24.01.2018
 * Time: 12:55
 */
include_once "connect_db.php";
?>
<h1>
    Změna adresy
</h1>
<form method="post">
    Zadej přijmení: <input type="text" name="prijmeni">
    <br>
    Zadej novou ulici: <input type="text" name="ulice">
    <br>
    Zadej novou čp: <input type="text" name="cp">
    <br>
    Zadej nové město: <input type="text" name="mesto">
    <br>
    Zadej nové PSČ <input type="text" name="psc">
    <br>
    <input type="submit" value="Změnit" name="change">
</form>
<?php
if (isset($_POST['change'])){
    if ($condb->query("SELECT prijmeni FROM osoby2 WHERE prijmeni='".$_POST['prijmeni']."'")->num_rows > 0) {
        if ($condb->query("UPDATE osoby2 SET ulice = '".$_POST['ulice']."', mesto = '".$_POST['mesto']."', cp = '".$_POST['cp']."', psc = '".$_POST['psc']."' WHERE prijmeni='".$_POST['prijmeni']."'")) {
            echo 'Upraveno: '.$_POST['prijmeni'];
        }
        else{
            die(mysqli_error($condb ));
        }
    } else {
        echo 'Přijmení neexistuje.';
    }
}