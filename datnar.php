<?php
/**
 * Created by PhpStorm.
 * User: horacekmar
 * Date: 22.11.2017
 * Time: 13:32
 */
if(!isset($_POST['submit'])){
    $den=range(1,31);
    $mesic=array(1=>"leden",2=>"únor",3=>"březen",4=>"duben",5=>"květen",6=>"červen",7=>"červenec",8=>"srpen",9=>"září",10=>"říjen",11=>"listopad",12=>"prosinec");
    $rok=range(date('Y'),date('Y', strtotime('-110 year')));
    ?>
<form method="post">
    <h2>
        Datum narození:
    </h2>
    <br>
    Pohlaví:
    <br>
    <input type="radio" name="gender" value="muž"> Muž
    <br>
    <input type="radio" name="gender" value="žena"> Žena
    <br>
    Den: <select name="den" size="1">
        <?php foreach ($den as $value){ echo "<option value='$value'>$value</option>"; } ?>
    </select>
    Měsíc: <select name="mesic" size="1">
        <?php foreach ($mesic as $value){ echo "<option value='$value'>$value</option>";} ?>
    </select>
    Rok: <select name="rok" size="1">
        <?php foreach ($rok as $value){
            echo "<option value='$value'>$value</option>";
        } ?>
    </select>
    <br>
    <input type="submit" name="submit" value="Potvrdit">
</form>

<?php
}
else
{
if ($_POST['gender']=="muž"){
    echo "Narodil jste se:";
}
else
{
    echo "Narodila jste se:";
}
echo "<br>";
echo $_POST['den'].".".$_POST['mesic']." ".$_POST['rok'];
}
?>