<?php
//Inside firstprogram.php

error_reporting(E_ALL);
ini_set("display_errors", 1);

function multiplier($x, $y) {
    $z = $x * $y;
    return $z;
}

/*echo "5 + 10 = <b>" . sum(5, 10) . "</b><br>";
echo "7 + 13 = <b>" . sum(7, 13) . "</b><br>";
echo "2 + 4 = <b>" . sum(2, 4) . "</b>";*/

echo"<table>";
  for($rep1 = 1; $rep1 < 101; $rep1++)
  {

      echo"<tr>";

    for($rep2 = 1; $rep2 < 101; $rep2++)
    {

      echo "<td>" . multiplier($rep1,$rep2) . "</td>";

    }

    echo"</tr>";

  }

echo"</table>";

?>
