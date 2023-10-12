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

// casting
$some_int = 3;
$cast_to_float = (float)$some_int;
$some_concat = strval(32.56);
echo nl2br("{$cast_to_float}, {$some_concat}\n");

// str concat
echo "this is a str concat"."  concat.";

// number_format - set the decimals, but IT RETURNS A STR!!!
$num_format_1 = number_format($some_int, 3, ".");
echo nl2br("\n{$num_format_1}"); 

// auto increment and decrement
// nums
$some_n1 = 1;
$some_n2 = --$some_n1;
$some_n3 = $some_n1--;
echo nl2br("\n{$some_n1}, {$some_n2}, {$some_n3}"); 

// str
$some_s1 = 'K9';
$some_s2 = --$some_s1;
$some_s3 = $some_s1++;
echo nl2br("\n{$some_s1}, {$some_s2}, {$some_s3}\n");

?>