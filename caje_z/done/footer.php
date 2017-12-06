<?php
/**
 * Created by PhpStorm.
 * User: horacekmar
 * Date: 06.12.2017
 * Time: 12:53
 */
?>
<footer>
    <div>Copyright ©2017 </div>

    <div>
        Zdroje: <a href="http://www.cajovna.cz" target="_blank" title="www.cajovna.cz">http://www.cajovna.cz</a>; <a href="http://cs.wikipedia.org/wiki/%C4%8Caj" target="_blank" title="cs.wikipedia.org">http://cs.wikipedia.org</a>
    </div>
    <?php
    $aj_month = array("January","February","March","April","May","June","July","August","September","October","November","December");
    $month = array("Leden", "Únor", "Březen", "Duben", "Květen", "Červen", "Červenec", "Srpen", "Září", "Říjen", "Listopad", "Prosinec");
    $aj_day = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday");
    $day = array("Pondělí", "Úterý", "Středa", "Čtvrtek", "Pátek", "Sobota", "Neděle");
    $mesic = str_replace($aj_month,$month, date("F"));
    $den = str_replace($aj_day,$day,date("l"));
    echo date("H:m")." ".$den." ".date("j")." / ".$mesic." / ".date("y");
    ?>
</footer>
