<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

function makeTable($size)
{

  echo "<tr><th />";
    echo "<th>Quantity</th><th>Cost Per Item</th><th>Total</th>";
  echo"</tr><br>";

    if(isset($_POST["i1"])) $bat = (int)$_POST["i1"];
    else $bat = 0;

  echo "<tr>";
    echo "<th>Metal bat</th>";
      echo "<th>" . $bat. "</th>";
      echo "<th>28</th>";
      echo "<th>" . ($bat * 28) . "</th>";
  echo "</tr><br><tr>";

    if(isset($_POST["i2"])) $ball = (int)$_POST["i2"];
    else $ball = 0;

    echo "<th>Metal Ball</th>";
      echo "<th>" . $ball . "</th>";
      echo "<th>6</th>";
      echo "<th>" . ($ball * 6) . "</th>";
  echo "</tr><br><tr>";

    if(isset($_POST["i3"])) $cap = (int)$_POST["i3"];
    else $cap = 0;

    echo "<th>Metal Cap</th>";
      echo "<th>" . $cap . "</th>";
      echo "<th>40</th>";
      echo "<th>" . ($cap * 40) . "</th>";
  echo "</tr><br><tr>";

    if(isset($_POST["shipping"])) $ship = $_POST["shipping"];
    else $ship = 0;

    $shipPrice = 0;

    if($ship == "Free 7 Day") $shipPrice = 0;
    else if($ship == "Three Day($5.00)") $shipPrice = 5;
    else if($ship == "Overnight($50.00)") $shipPrice = 50.00;

    echo "<th>Shipping</th>";
      echo "<th>" . $ship . "</th>";
      echo "<th></th>";
      echo "<th>" . $shipPrice . "</th>";
  echo "</tr><br><tr>";

    echo "<th>Total Cost</th>";
      echo "<th></th>";
      echo "<th></th>";
      echo "<th>" . (($bat*28) + ($ball*6) + ($cap*40) + $shipPrice). "</th>";
  echo "</tr><br>";

return null;

}

  echo "<br><br><b>Your username is " . $_POST['name'] . " and your password is " . $_POST['pass'] . "</b><table style='width:100%' bgcolor='Aqua' frame='box'>";

  makeTable(5);

  echo "</table>";

?>
