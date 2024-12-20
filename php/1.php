<?php
echo "Hello world<br>";
$Var="This is a case sensitive variable";
$var=" This is a different variable";
//This is a single line comment.
/*
This is a multi 
line 
comment
*/
$intvar=10;
$floatvar=10.5;
$boolvar=true;
$arrayvar=array(1,2,3);
$stringvar="this is a string";
var_dump($intvar);
echo "<br>";
var_dump($floatvar);
echo "<br>";
var_dump($boolvar);
echo "<br>";
var_dump($arrayvar);
echo "\n";
var_dump($stringvar);
echo '\n';

$globalvar="Global variable";
function local(){
    $localvar="localvar";
    global $globalvar;
    echo $localvar ."\n";
    echo $globalvar ."\n";

    static $staticvar=0;
    $staticvar++;
    echo("static var:" .$staticvar ."<br>");
}
local();
$var = "10" + 5;   
echo "Implicit Conversion result: " . $var . "<br>"; 

$var = (int)"10.5";  
echo "Explicit Conversion result: " . $var . "<br>"; 

$filename = "nonexistent_file.txt";
$file = @fopen($filename, "r"); 
if (!$file) {
    echo "Error suppressed for missing file.<br>";
} else {
    echo "File opened successfully.<br>";
}
?>