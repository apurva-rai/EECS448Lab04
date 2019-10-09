<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

/*$ans1 = $_POST['ans1'];
$ans2 = $_POST['ans2'];
$ans3 = $_POST['ans3'];
$ans4 = $_POST['ans4'];
$ans5 = $_POST['ans5'];*/

function getVal($points)
{

  $val =$_POST[$points];
  echo "Your answer: " . $val . "<br>";
  return $val;

}

$points = 0;

echo "Question 1: What is the capital of Zoupa Touscano?<br>";
if(getVal("ans1") == "Not Spain") $points++;
echo "Correct answer: Not Spain<br><br>";

echo "Question 2: What happens in The Matrix(1999)?<br>";
if(getVal("ans2") == "Neo hacks the system #Hackerman") $points++;
echo "Correct answer: Neo hacks the system #Hackerman<br><br>";

echo "Question 3: When did the exchange happen?<br>";
if(getVal("ans3") == "March 21, 2014") $points++;
echo "Correct answer: March 21, 2014<br><br>";

echo "Question 4: OK Computer?<br>";
if(getVal("ans4") == "Kid A") $points++;
echo "Correct answer: Kid A<br><br>";

echo "Question 5: What was the absolute magnitude of the gamma ray burst from the Soft Gamma Repeater Magnetar SGR 1806-20 that was felt on Earth on December 24, 2004?<br>";
if(getVal("ans5") == "-29") $points++;
echo "Correct answer: -29<br><br>";

echo "Total correct answers: " . $points . "<br>";
echo "<br>Score Percentage: ". ($points*100)/5 . "%";
?>
