<?php
require_once "Pinterest.php";

$res = Pinterest::getPins("mathematical riddles fun");

foreach ($res as $re){
  echo "<img src='{$re}'>";
  echo "<p>{$re}</p>";
}

?>
