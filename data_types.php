<?php 
// integers
$a = 10;
echo is_int($a), $a;
$b = 0723;
echo is_int($b), $b;
$c = 0xA19;
echo is_integer($c), $c;
$d = 0b10001;
echo is_integer($d), $d;

// floats
$someFloat = 3.14;
$anotherFloat = 0.0314E2;


//implode -> like join in python
echo implode(", ", array($someFloat, $anotherFloat));

//compare to three decimal places
if (intval($someFloat)==intval($anotherFloat)){
    //nums are equal to three decimal places
    echo nl2br("\n equal to three decimal places ---> oui\n");
}

// check if it's a float
if (is_float($someFloat)){
    echo implode('this is a float: ', array($someFloat));
}
?>