<?php
/**
 * Created by PhpStorm.
 * User: horacekmar
 * Date: 24.01.2018
 * Time: 12:38
 */
include_once "connect_db.php";
?>
<form method="post">
    Zadej Přijmení:<input type="text" name="prijmeni">
    <br>
    <input type="submit" value="Smazat" name="smazat">
</form>
<?php
if(isset($_POST['smazat'])){
/*    $sql="delete from osoby2 where 'prijmeni'='".$_POST['prijmeni']."'";
    $smaz = mysqli_query($condb, $sql);
    if(!$smaz<0){
        echo "Záznam neexistuje!";
    }
    else{
        echo "Smázáno: ".$_POST['prijmeni'];
    }*/
    if ($condb->query("SELECT prijmeni FROM osoby2 WHERE prijmeni='".$_POST['prijmeni']."'")->num_rows > 0) {
        if ($condb->query("delete from osoby2 where prijmeni='".$_POST['prijmeni']."'")) {
            echo 'Smázáno: '.$_POST['prijmeni'];
        }
    } else {
        echo 'Přijmení neexistuje.';
    }
}
