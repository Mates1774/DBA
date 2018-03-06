<?php
/**
 * Created by PhpStorm.
 * User: horacekmar
 * Date: 21.02.2018
 * Time: 13:29
 */
$server="127.0.0.1";
$user="root";
$paswd="";
$datab="horacek_tes";

$condb=mysqli_connect($server, $user, $paswd, $datab);
mysqli_set_charset($condb,"utf8");
?>
<form method="post">
Seřaď podle:
<br>
    <select name="seradit">
        <option value=""></option>
        <option value="nazev">Název</option>
        <option value="typ">Typ</option>
        <option value="ulice">Ulice</option>
        <option value="mesto">Město</option>
        <option value="psc">PSČ</option>
        <option value="luzka">Počet Lůžek</option>
        <option value="parkovist">Parkoviště</option>
    </select>
    <br>
    <input type="radio" name="serazeni" value="vzestupne" checked> Vzestupně
    <br>
    <input type="radio" name="serazeni" value="sestupne"> Sestupně
    <br>
    Vyber typ ubytování:
    <br>
    <select name="typ">
        <option value="">Vše</option>
        <option value="botel">Botel</option>
        <option value="hotel">Hotel</option>
        <option value="motel">Motel</option>
        <option value="penzion">Penzion</option>
        <option value="soukrome">Soukromě</option>
    </select>
    <br>
    Parkování v místě:
    <br>
    <select name="parkovani">
        <option value="">Nerozhoduje</option>
        <option name="ano">Ano</option>
        <option name="ne">Ne</option>
    </select>
    <br>
    <input type="submit" name="submit" value="Zobraz">
</form>
<?php
if(!isset($_POST['submit'])) {
    $sql = "SELECT * FROM hotely";
}
if(isset($_POST['submit'])){
    if($_POST["seradit"]==""){
        $seradit = "";
    }
    elseif ($_POST['seradit']=="nazev"){
        $seradit = "order by nazev";
    }
    elseif ($_POST['seradit'] == "typ"){
        $seradit = "order by typ";
    }
    elseif ($_POST['seradit'] == "ulice"){
        $seradit = "order by ulice";
    }
    elseif ($_POST['seradit'] == "mesto"){
        $seradit = "order by mesto";
    }
    elseif ($_POST['seradit'] == "psc"){
        $seradit = "order by psc";
    }
    elseif ($_POST['seradit'] == "luzka"){
        $seradit = "order by pocetluzek";
    }
    elseif ($_POST['seradit'] == "parkovist"){
        $seradit = "order by parkoviste";
    }
    if($_POST['serazeni']=="sestupne"){
        $serazeni = "ASC";
    }
    elseif ($_POST['serazeni']=="vzestupne"){
        $serazeni = "DESC";
    }
    elseif ($_POST['serazeni']==""){
        $serazeni = "";
    }
    if($_POST['typ']=="botel"){
        $typ = "botel";
    }
    elseif ($_POST['typ']=="hotel"){
        $typ = "hotel";
    }
    elseif ($_POST['typ']=="motel"){
        $typ = "motel";
    }
    elseif ($_POST['typ']=="penzion"){
        $typ = "penzion";
    }
    elseif ($_POST['typ']=="soukrome"){
        $typ = "soukrome";
    }
    elseif ($_POST['typ']==""){
        $typ ="";
    }
    $sql = "SELECT * FROM hotely " . " WHERE typ='".$typ."'" . $seradit . " " . $serazeni;
}
    $vysledek = mysqli_query($condb, $sql) or die($condb->error);
echo "<table border='1'><tr><th>cislo</th><th>nazev</th><th>typ</th><th>ulice</th><th>mesto</th><th>psc</th><th>hvezdicky</th><th>pocet luzek</th><th>parkoviste</th></tr>";
    while($row = $vysledek->fetch_assoc()) {
    echo "<tr><td>".$row["slo"]."</td><td>".$row["nazev"]."</td><td>".$row["typ"]."</td><td>".$row["ulice"]."</td><td>".$row["mesto"]."</td><td>".$row["psc"]."</td><td>".$row["hvezdicky"]."</td><td>".$row["pocetluzek"]."</td><td>".$row["parkoviste"]."</td></tr>";
    }
    echo "</table>";
mysqli_close($condb);