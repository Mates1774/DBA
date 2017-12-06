<?php
/**
 * Created by PhpStorm.
 * User: horacekmar
 * Date: 23.11.2017
 * Time: 13:27
 */
if(!isset($_POST['submit'])){
 ?>
    <!DOCTYPE html>
    <html>
    <head>
        <title>
            Kalkulačka
        </title>
        <meta charset="utf-8">
    </head>
    <body>
    <form method="post">
        <label for="1">Číslo 1: </label><input type="number" name="1" id="1">
        <br>
        <label for="2">Číslo 2: </label><input type="number" id="2" name="2">
        <br>
        <input type="submit" value="Potvrdit" name="submit">
    </form>
    </body>
    </html>
<?php
}
else{
    echo "Zadali jste následující hodnoty: ".$_POST['1']." a ".$_POST['2'];
    if($_POST['2']==0){
        $deleni="Nelze dělit nulou!";
        $podil="Nelze dělit nulou!";
    }
    else
    {
        $deleni=$_POST['1']%$_POST['2'];
        $podil=$_POST['1']/$_POST['2'];
    }
?>
    <style>
        table{
            border-collapse: collapse;
        }

        table, td, tr{
            border-style: solid;
            border-color: deeppink;
        }
    </style>
    <table>
        <tr>
            <td>
                Operace
            </td>
            <td>
                Příklad
            </td>
            <td>
                Výsledek
            </td>
        </tr>
        <tr>
            <td>
                Součet
            </td>
            <td>
                <?php echo $_POST['1']." + ".$_POST['2']; ?>
            </td>
            <td>
                <?php echo $_POST['1']+$_POST['2']; ?>
            </td>
        </tr>
        <tr>
            <td>
                Rozdíl
            </td>
            <td>
                <?php echo $_POST['1']." - ".$_POST['2']; ?>
            </td>
            <td>
                <?php echo $_POST['1']-$_POST['2']; ?>
            </td>
        </tr>
        <tr>
            <td>
                Součin
            </td>
            <td>
                <?php echo $_POST['1']." * ".$_POST['2']; ?>
            </td>
            <td>
                <?php echo $_POST['1']*$_POST['2']; ?>
            </td>
        </tr>
        <tr>
            <td>
                Podíl
            </td>
            <td>
                <?php echo $_POST['1']." / ".$_POST['2']; ?>
            </td>
            <td>
                <?php echo $podil; ?>
            </td>
        </tr>
        <tr>
            <td>
                Zbytek po dělení
            </td>
            <td>
                <?php echo $_POST['1']." % ".$_POST['2']; ?>
            </td>
            <td>
                <?php echo $deleni; ?>
            </td>
        </tr>
    </table>
    <button id="myButton" class="float-left submit-button" >Zadat znovu</button>

    <script type="text/javascript">
        document.getElementById("myButton").onclick = function () {
            location.href = "kalkulacka.php";
        };
    </script>
<?php

}