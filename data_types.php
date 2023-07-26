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


// boolean
$aa = 10; //true
$bb = true;
$cc = ""; //false
$dd = false;


if (is_bool($bb)){
    echo "<br/>$bb is a boolean<br/>";
}

// array
$arr1[0] = 0;
$arr1[1] = 1;
$arr1[2] = 200;

$a_dict['1'] = 'hi php';
$a_dict['2'] = 'hi python';
$a_dict['3'] = 5;

// constructor array()

$someArray = array('0', 0.1, 200, 3E2);
$someArrayLikeADict = array(
    'a' => 'b',
    3 => 2.3
);

// foreach(){}

foreach ($a_dict as $el){
    echo "<br/>{$el} is an element";
}

// dict.items with foreach
// foreach (name_of_dict_var as $k=>$v){}
foreach ($someArrayLikeADict as $k=>$v){
    echo "<br/>{$k} : {$v} the second dict";
}

// is_array()
if (is_array($arr1)){
    echo "</br>",json_encode($arr1);
}

// classes 
class Person{
    public $name = '';

    function name ($someName = NULL){
        if (!is_null($someName)){
            $this->name = $someName;
        }
        return $this->name;
    }
}

$someone = new Person;
$someone->name('Someone');

// serialize (object)
$serialized = serialize($someone);
echo "</br>OOP classes example name {$someone->name}";

// is_object()
if (is_object($someone)){
    echo "</br>{$serialized} is an object";
}

?>