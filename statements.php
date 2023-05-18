<?php
echo "This is a statement";
//myFirstPhpFunc(42, 'func call here, but where is the func?');
$some_var = 1;
$other_var = 'Just a var';
$some_var1 = $some_var / 25.0;
if ($some_var == $some_var1) {
    //nl2br works with "" only, not w/ single ''
    echo nl2br(" equal");
}
else {
    echo nl2br("\n not equal");
}


?>