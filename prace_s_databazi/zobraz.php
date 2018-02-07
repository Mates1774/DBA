<?php
/**
 * Created by PhpStorm.
 * User: horacekmar
 * Date: 18.01.2018
 * Time: 13:52
 */
include_once "connect_db.php";
?>
<a href="?sort=desc">Seřaď podle přijmení sestupně</a>
<br>
<a href="?">Seřaď podle přijmení vzestupně</a>
<?php
if(!$_GET){
    $sql = "SELECT * FROM osoby2 order by prijmeni asc";
}
if (isset($_GET['sort'])){
    if($_GET['sort']=="desc"){
        $sql = "SELECT * FROM osoby2 order by prijmeni desc";
    }
   /* elseif ($_GET['sort']=="asc"){
            $sql = "SELECT * FROM osoby2 order by prijmeni asc";
        
    }*/
}
 $vysledek= mysqli_query($condb,$sql);
            echo "<table><tr><th>Jméno</th><th>Přijmení</th><th>Město</th><th>Ulice</th><th>Čp</th><th>PSČ</th></tr>";
                while($row = $vysledek->fetch_assoc()) {
                echo "<tr><td>".$row["jmeno"]."</td><td>".$row["prijmeni"]."</td><td>".$row["prijmeni"]."</td><td>".$row["mesto"]."</td><td>".$row["ulice"]."</td><td>".$row["cp"]."</td><td>".$row["psc"]."</td></tr>";
                }
                echo "</table>";