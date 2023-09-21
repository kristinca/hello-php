<?php 
class SomeClass{
    public $var1;

    public function __construct($var1){
        $this->var1 = $var1;
    }

    public function someFunc(){
        echo nl2br("This is some var {$this->var1}\n");
    }
}

// clone, new - > create new object
$someObj = new SomeClass('A Var');
$someObj->someFunc();
$clonedObj = clone($someObj);
$clonedObj->someFunc();

// ** -> exp; like python
$var2 = 2**3;
echo nl2br("2 ^ 3 = {$var2}\n");

// ~ -> bitwise not
$var3 = 5; // 0000 0101
$bitwiseNotVar3 = ~$var3; // 1111 1010
echo nl2br("Number: $var3\nBitwise NOT: $bitwiseNotVar3\n");

// ++ 
$var4 = ++$var3;
echo nl2br("{$var4}\n");

// --
$var5 = --$var3;
echo nl2br("{$var5}\n");

// casting: (int), (bool), (float), (string), (array), (object), (unset)

$var6 = (int)$var4;
$var7 = (float)$var4;
$var8 = (bool)$var4;
$var9 = (string)$var4;
$var10 = (array)$var4;
$var11 = (object)$var4;
unset($var4);
?>