<?php

$texte = "mon texte j'ai pas d'inspi";
echo $texte;

echo "<br><br>";
$array = ["coucou", "bisous", "Ayana", "chips"];
echo $array[1];

echo "<br><br>";
for ($i = 0; $i < count($array); $i++) {
    echo $array[$i];
}
echo "<br><br>";
?>

<ul>
    <?php
        foreach ($array as $value) {
            echo "<li>$value</li>";
        }
      ?>
</ul>
