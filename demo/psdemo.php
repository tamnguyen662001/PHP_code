<?php
include 'ps.php';
// Create a basic fraction
$a = new Fraction(1,2);
$b = new Fraction(1,2);
// Because the Fraction constructor only accepts a numerator, and denominator, you can use this method to convert a mixed number to a Fraction object 
// $b = Fractions::fromArray(array(1,2,2)); // là cách viết ngắn gọn của $b1 = new Fractions();$b1->fromArray(array(0,6,5));

// =================================================

echo $a->toString();
echo $b->toString();

// $b1 = new Fractions();
// $b1->fromArray(array(0,6,5));
// echo $b->toString();

//  $sum = Fractions::add($a, $b); 
//  echo "\n Sum = ".$sum->toString();

//  $sum1 = new Fractions();

//  $sum1->add($a, $b);
//  $sum1->toString(true);
//  echo "\n Sum1 = ".$sum1;

// $d = Fractions::fromString("-2/3");
// echo $d->toString();



// =================================================

// The denominator is assumed to be 1 if none is given
// $c = new Fraction(5);
// // Convert a well formed string to a fraction
$d = Fractions::fromString("-1 5/5");
// $e = Fractions::fromString("8/10");
echo "\n dsfdsfdf: ".$d->toString()."\n";
$sum = Fractions::add($a, $b); 
// Fraction::toString() is dumb, and just prints the numerator/denominator
echo $d->toString(), "\n"; // 4/2
// Fractions::toString() prints in lowest terms, and mixed numbers
// $sum_lowestterm = $sum;
$sum = Fractions::add($a, $b); 
$sum_lowestterm =  Fractions::toString($sum); // 2
$ps  = Fractions::fromString($sum_lowestterm);



echo $sum_lowestterm;
echo "\n ".$ps->toString();
// echo Fractions::toString($Fractions::divide($a, $b)), "\n"; // 2

// $diff = Fractions::subtract($c, $b, $e);
// echo Fractions::toString($diff), "\n";

// $prod = Fractions::multiply($c, $b, $e);
// echo Fractions::toString($prod), "\n";

// $quo = Fractions::divide($c, $b, $e);
// // Don't convert to a mixed number with the Fractions::toString method
// echo Fractions::toString($quo, false), "\n";
// // Don't convert to a mixed number, or convert to lowest terms
// echo Fractions::toString($quo, false, false), "\n";
?>