<?php
$server="127.0.0.1";
$user="root";
$paswd="";
$datab="kys";

$condb=mysqli_connect($server, $user, $paswd, $datab);
".mysqli_connect_error())";
                        mysqli_set_charset($condb,"utf8");
                        
                        
                        
                        $dotaz = "Select * from knihy where jmeno_autora = 'Jan' or Prijmeni_autora = \"Vlk\"";
                        
                  $vysledek= mysqli_query($condb,$dotaz);
                              $pocet=mysqli_num_rows($vysledek);                                 
                echo "<table border ='1'>";
                  while ($radek=mysqli_fetch_array($vysledek))
                                                            {  
  echo "<tr><td>$radek[0]</td><td>".$radek['Nazev']."</td><td>$radek[2]</td><td>$radek[3]</td><td>$radek[4]</td><td>$radek[5]</td><td>$radek[6]</td></tr>";
                                                            }

echo "</table>";                        

$dotaz = "UPDATE knihy SET Cena = Cena + 1 WHERE Prijmeni_autora = 'Moravec'";
$vysledek = mysqli_query($condb, $dotaz);
echo $vysledek;

mysqli_close($condb);

?>