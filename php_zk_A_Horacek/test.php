<?php
if(!isset($_POST['submit'])){
?>
<!DOCTYPE html>
<html>
<head>
<title>Žádost o studijní pobyt</title>
<meta charset="UTF-8">
</head>
<body>
<h1>Žádost o studijní pobyt - vstupní formulář </h1>
<form method="POST">
       <fieldset>
       <legend>Údaje o žadateli</legend>
                  Jméno: <input type="text" name="first"  required>
                  <br>
                  Přijmení: <input type="text" name="last" required>
                  <br>
                  E-Mail: <input type="email" name="mail" placeholder="Vyplntě emailovou adresu" required>
                  <br>
                  Státní příslušnost: <input type="text" name="prislusnost" value="ČR" required>
       </fieldset>
       <br><br>
       Pohlaví:
       <br>
       muž <input type="radio" name="gender" value="muž" required checked> žena <input type="radio" name="gender" value="žena" required>
       <br>      <br>
       Úroveň znalosti anglického jazyka:
       <select name="anglictina" required>
                <option value="začátečník">Začátečník</option>
                <option value="mírně pokročilý">Mírně pokročilý</option>
                <option value="středně pokročilý">Středně pokročilý</option>
                <option value="pokročilý">Pokročilý</option>
                <option value="jazykově způsobilý">Jazykově způsobilý</option>
       </select>
       <br>   <br>
       Znalost dalších cizích jazyků: 
       <br>
       ruský <input type="checkbox" name="rusky" checked> německý <input type="checkbox" name="nemecky"> francouzský <input type="checkbox" name="francouzsky"> španělský <input type="checkbox" name="spanelsky">
       <br>  <br>
       Zájmy:
       <br>
       <textarea name="zajmy" required>
       
       </textarea>
       <br>
       <input type="submit" name="submit" value="Odeslat vstupní údaje">
</form>
</body>
</html>
<?php
}
else
{
  if($_POST['gender']=="muž"){
    $osloveni="Vyplnil jste tyto vstupní údaje:";
  }
  else
  {
    $osloveni="Vyplnila jste tyto vstupní údaje:";
  }
  echo "<h1>".$osloveni."</h1>";
  echo "<br><br>";
  echo "Žadatel: ".$_POST['first']." ".$_POST['last'];
  echo "<br>";
  echo "E-mail: ".$_POST['mail'];
  echo "<br>";
  echo "Úroveň znalosti anglického jazyka: ".$_POST['anglictina'];
  echo "<br><br>";
    if(isset($_POST['rusky']) || isset($_POST['nemecky']) || isset($_POST['francouzsky']) || isset($_POST['spanelsky']))
    {
    echo "Další jazyky:";
    echo "<br>";
      if(isset($_POST['rusky'])){
      echo "ruský jazyk"; 
      }
      if(isset($_POST['nemecky'])){ 
      echo "<br>";
      echo "německý jazyk"; 
      }
      if(isset($_POST['francouzsky'])){ 
      echo "<br>"; 
      echo "francouzský jazyk";
      }
      if(isset($_POST['spanelsky'])){ 
      echo "<br>";
      echo "španělský jazyk";
      }
       echo "<br><br>";
    }
  echo "Zájmy:";
  echo "<br>";
  echo $_POST['zajmy'];
  echo "<br><br>";
  echo "Děkujeme za vyplnění formuláře."; 
} 
?>
