<?php
/**
 * Created by PhpStorm.
 * User: horacekmar
 * Date: 13.12.2017
 * Time: 12:39
 */
$kniha="kniha.txt";
$pocitadlo="pocitadlo.txt";
$kniha_o = fopen($kniha,"r");
$kniha_r = fread($kniha_o, filesize($kniha));
$kniha_z = $kniha_r + 1;
fclose($kniha_o);
$kniha_write = fopen($kniha, "w");
fwrite($kniha_write, $kniha_z);
fclose($kniha_write);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            Random
        </title>
        <meta charset="utf-8">
    </head>
    <body>
    Random text for this website...
    <br>
    <H1>
        Počítadlo přístupu na tuto stránku
    </H1>
        Počet návštěv:
    <br>
    <?php
    $kniha_pocet = fopen($kniha, "r");
    $kniha_cist = fread($kniha_pocet, filesize($kniha));
    echo $kniha_cist;
    fclose($kniha_pocet);
    ?>
    <br>
    <h1>
        Kniha návštěv:
    </h1>
        <form method="post">
            E-Mail: <input type="email" name="mail" required>
            <br>
            Přezdívka: <input type="text" name="nick" required>
            <br>
            <textarea name="text">

            </textarea>
            <br>
            <input type="submit" name="submit" required>
        </form>
        <?php
        if(isset($_POST['submit'])){
            $pocitadlo_read = fopen($pocitadlo, "r");
            $pocitadlo_cteni = fread($pocitadlo_read, filesize($pocitadlo));
            fclose($pocitadlo_read);
            $pocitadlo_o = fopen($pocitadlo, "w");
            $text_to_write = $pocitadlo_cteni." E-mail: <a href='mailto:".$_POST['mail']."'>".$_POST['mail']."</a><br> Jméno: ".$_POST['nick']."<br> Datum:  ".date("j. n. Y G:i:s")."<br> Text: ".$_POST['text']."<br><br>";
            fwrite($pocitadlo_o, $text_to_write);
            fclose($pocitadlo_o);
        }
        echo "<br><br>";
        $pocitadlo_cist = fopen($pocitadlo, "r");
    $file_array = array();

    while (!feof($pocitadlo_cist)) {
        $line = fgets($pocitadlo_cist, filesize($pocitadlo));
        array_unshift($file_array, $line);
    }
    fclose($pocitadlo_cist);

    foreach($file_array as $line){
        echo $line . '<hr/>';
    }
?>
    </h1>
    </body>
</html>
