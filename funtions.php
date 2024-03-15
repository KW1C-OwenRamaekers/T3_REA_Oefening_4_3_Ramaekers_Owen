// functions.php
/**
 * User: Owen Ramaekers
 * Date: 7-3-2024
 * File: function.php
 */
<?php
function CalculateInterest($carPrice, $savedAmount){
    echo "We gaan berekenen hoeveel maanden het duurt om een auto te kopen door rente te sparen.";
    echo "De auto kost $carPrice en het gespaarde bedrag is $savedAmount.";

    $counter = 0;
    while($savedAmount < $carPrice){
        $counter++;
        $savedAmount = $savedAmount * 1.06;
        echo "Na maand $counter is het gespaarde bedrag: $savedAmount.<br>";
    }
    echo "Het heeft $counter maanden geduurd om genoeg te sparen voor de auto.";
}

function createPiramid($height){
    for($i=1; $i<=$height; $i++){
        for($j=1; $j<=$i; $j++){
            echo "* ";
        }
        echo "<br>";
    }
}
?>