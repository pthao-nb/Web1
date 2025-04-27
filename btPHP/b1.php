<table border="2px">
<?php
    for ($i = 2; $i <= 9; $i++) {
        echo"<td>";
        for ($j = 1; $j <= 10; $j++) {
            echo $i . " x " . $j . " = " . ($i * $j) ;
            echo"<br>";
        }
    }
    echo"</td>";
?>
</table>