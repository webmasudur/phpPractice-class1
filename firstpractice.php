<?php

//php single line comment
#php single line comment 

/* php multi line comment */


echo "<h1> This is Masudur </h1>" ."<br>";
echo "This is 2nd Practice, How can i help You?" ."<br>" ."<br>";


//php vairables--------- 


//Number concat
$firstNumber = 10;
$lastNumber = 20;

$total = $firstNumber + $lastNumber;

echo $total ."<br>";

//String concat 

$firstName = "Masudur";
$LastName = "Rahman";

$fullName = $firstName. ' ' . $LastName ."<br>";

echo $fullName;

//how to create a function

function practiceFunc(){
    global $a, $b, $c, $d;
    $a = 4;
    $b = 2;
    $c = 8;

    $d = $a + $b + $c;

    echo $d ."<br>";
}

practiceFunc();


//local var to global var system start
function practiceFunct(){
    global $a, $b, $c, $d;
    $a = 4;
    $b = 2;
    $c = 8;

    $d = $a + $b + $c;
}

practiceFunct();
echo $d ."<br>";
//local var to global var system end


//static print system
function staticPrint(){
   static $e = 0;
    echo $e ."<br>";
    $e++;
}
staticPrint();
staticPrint();
staticPrint();
staticPrint();


//parent thesis write system

echo "<h2> without parent thesis <h2>";
echo ("<h2> with parent thesis") ."<br>";

//how to check data type in php 
$f = 10;
$g = 3.9;
$h = array(1.9,2,3,4,-9);
var_dump($f);
echo "<br>";
var_dump($g);
echo "<br>";
var_dump($h);


//string character length check
echo "<br>";
$k = "We love Bangladesh. Our capital is Dhaka";
echo strlen($k);

//string word length check
echo "<br>";
$l = "We love Bangladesh. Our capital is Dhaka";
echo str_word_count($l);

//string reverse
echo "<br>";
$m = "We love Bangladesh. Our capital is Dhaka";
echo strrev($m);

//find character index number
echo "<br>";
$n = "We love Bangladesh. Our capital is Dhaka";
echo strpos($n, "capital");

//String value (text) replace
echo "<br>";
$o = "We love Bangladesh. Our capital is Dhaka";
echo str_replace("capital", "city", $o);


//math practice
echo "<br>";
echo pi(); //with out parent thesis
echo "<br>";
echo (pi()); //with  parent thesis


//min value find
echo "<br>";
echo (min(2,9,3,50,30,13,-9));

$r = array(30,400,300,299,20,40,98);
echo "<br>";
echo (min($r));

//max value find
echo "<br>";
echo (max(2,9,3,50,30,13,-9));

$p = array(30,400,300,299,20,40,98);
echo "<br>";
echo (max($p));


//square root 
echo "<br>";
echo sqrt(20);


//round value
echo "<br>";
$s = 9.653;
echo round($s);

//random value
echo "<br>";
echo rand(10,90);


?>

