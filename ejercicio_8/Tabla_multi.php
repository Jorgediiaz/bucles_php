<?php
var dump($_GET);
$numero = $_GET("numero");
echo "<h1> La tabla del $numero:</h1>";

echo "<table>";
 for($i=0; $i<=10; $i=$i++){
    $res=$numero*$i;
    echo "<tr>";
    echo "<td>$numero</td>"."<td>x</td>"."<td>$i</td>"."<td>=</td>"."<td>$res</td>";
    echo "</tr>";
}
echo "</table>";
?>

