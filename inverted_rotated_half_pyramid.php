<!-- inverted and rotated half pyramid -->
<?php 
$n=4;
for($i=1; $i<=4; $i++){
    for($j=1; $j<=$n-$i; $j++){
        echo "-";
    }
    for($j=1; $j<=$i; $j++){
        echo "*";
    }
    echo "<br>";
}
?>