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

// strings

// double quotes -> like f-strings in python (?)
$name = 'Name';
$name2 = "Name";
echo "Hi, $name! <br/>";
echo 'Hi, $name';

// compare strings with == operator
if ($name==$name2){
    echo "<br/> $name == $name2 <br/>";
}

// check if it's a string with is_string
if (is_string($name)){
    echo "$name is a string.<br/>";
}

?>