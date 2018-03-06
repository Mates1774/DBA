<?php
/**
 * Created by PhpStorm.
 * User: horacekmar
 * Date: 28.02.2018
 * Time: 13:34
 */
$server="127.0.0.1";
$user="root";
$paswd="";
$datab="horacek";

$condb=mysqli_connect($server, $user, $paswd, $datab);
mysqli_set_charset($condb,"utf8");
if(!isset($_POST['submit'])) {
    ?>
    <h1>Přihlášení do systému</h1>
    <br>
    <form method="post">
        <fieldset>
            <legend>Zadejte vaše přihlašovací údaje</legend>
            Jméno: <input type="text" name="username" required autofocus>
            <br>
            Heslo: <input type="password" name="password" required autofocus>
            <br>
            <input type="submit" value="OK" name="submit">
        </fieldset>
    </form>
    <?php
}
else
{
    $login = $_POST["username"];
    $password = $_POST["password"];
    $dotaz = mysqli_query($condb, "select * from uzivatele where ujmeno = '$login' and heslo = '$password'");
    $count = mysqli_num_rows($dotaz);
    if($count == 1){
    //if($vysledek['ujmeno']==$_POST['username'] || $vysledek['heslo'] ==$_POST['password']) {
        $sql = "SELECT * FROM uzivatele WHERE ujmeno=" . $_POST['username'] . "AND heslo=" . $_POST['password']."";
        $done = mysqli_query($condb, $sql) or die($condb->error);
        if ($done['povoleno'] == "A") {
            echo "<table border='1'><tr><th>Jméno</th><th>Přijmení</th><th>Skupina</th><th>poznámka</th></tr>";
            while ($row = $vysledek->fetch_assoc()) {
                echo "<tr><td>" . $done['jmeno'] . "</td><td>" . $done["prijmeni"] . "</td><td>" . $done["skupina"] . "</td><td>" . $done["poznamka"] . "</td></tr>";
            }
            echo "</table>";
        }
        else
        {
            echo "<table border='1'><tr><th>Jméno</th><th>Přijmení</th><th>Skupina</th><th>poznámka</th></tr>";
                echo "<tr><td>" . $done['jmeno'] . "</td><td>" . $done["prijmeni"] . "</td><td>" . $done["skupina"] . "</td><td>" . $done["poznamka"] . "</td></tr>";
            echo "</table>";
        }
    }
    else{
        echo "Zadali jste špatné přihlašovací údaje. <a href='./'>Zpět na přihlášení</a>";
    }
    mysqli_close($condb);
}