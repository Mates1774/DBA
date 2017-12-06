<?php
/**
 * Created by PhpStorm.
 * User: horacekmar
 * Date: 23.11.2017
 * Time: 13:56
 */
if(!isset($_POST['odeslat'])){
    ?>
    <html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
    <form method="post">
        Váš e-mail: <input type="email" name="mail" required>
        <br>
        Předmět Zprávy: <input type="text" name="subject" value="DBA">
        <br>
        Text:
        <br>
        <textarea name="text" required>

        </textarea>
        <br>
        <input type="submit" name="odeslat" value="Odeslat">
    </form>
    </body>
    </html>

<?php
}
else
{
    mail("mates@martinho.cz", $_POST['subject'],$_POST['string']);
    echo "mail odeslán";
}