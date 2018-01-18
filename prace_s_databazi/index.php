<?php
/**
 * Created by PhpStorm.
 * User: horacekmar
 * Date: 18.01.2018
 * Time: 13:31
 */
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            Práce s databází
        </title>
        <meta charset="utf-8">
    </head>
    <body>
    <form method="post" action="vloz.php">
        <fieldset>
            <legend>
                Vložte údaje
            </legend>
            <table>
                <tr>
                    <td>
                        Jméno:
                    </td>
                    <td>
                        <input type="text" name="first">
                    </td>
                </tr>
                <tr>
                    <td>
                        Přijmení:
                    </td>
                    <td>
                        <input type="text" name="last">
                    </td>
                </tr>
                <tr>
                    <td>
                        Ulice:
                    </td>
                    <td>
                        <input type="text" name="ulice">
                    </td>
                </tr>
                <tr>
                    <td>
                        Čp.:
                    </td>
                    <td>
                        <input type="text" name="cp">
                    </td>
                </tr>
                <tr>
                    <td>
                        Město:
                    </td>
                    <td>
                        <input type="text" name="mesto">
                    </td>
                </tr>
                <tr>
                    <td>
                        PSČ:
                    </td>
                    <td>
                        <input type="text" name="psc">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="Odeslat" name="odeslat">
                    </td>
                </tr>
            </table>
        </fieldset>
    </form>
    <br>
    <a href="zobraz.php">Zobraz všechny data</a>
    <br>
    <a href="smaz.php">Smazání záznamu podle přijmení</a>
    </body>
</html>
