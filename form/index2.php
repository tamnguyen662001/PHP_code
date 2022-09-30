<?php
$a = rand(1, 4);
$b = rand(10, 1000);
switch ($a) {
  case 1:
    echo "Hinh vuong";
    echo "<br />a = $a";
    echo "<br />b = $b";
    echo "<br />Chu vi: " . ($b * 4);
    echo "<br />Dien tich: " . ($b * $b);
    break;
  case 2:
    echo "Hinh tron";
    echo "<br />a = $a";
    echo "<br />b = $b";
    echo "<br />Chu vi: " . (2 * $b * 3.14);
    echo "<br />Dien tich: " . (3.14 * pow($b, 2));
    break;
  case 3:
    echo "Hinh tam giac";
    echo "<br />a = $a";
    echo "<br />b = $b";
    echo "<br />Chu vi: " . ($b * 3);
    echo "<br />Dien tich: " . (1 / 2 * $b * sqrt(3) / 2 * $b);
    break;
  default:
    echo "Hinh chu nhat";
    echo "<br />a = $a";
    echo "<br />b = $b";
    echo "<br />Chu vi: " . (($a + $b) * 2);
    echo "<br />Dien tich: " . ($a * $b);
}

