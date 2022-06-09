<?php
#php Constant----
define ("masudur", "This is class 2");
function rahman(){
    echo masudur;
}

rahman();

// assignment operator

$a = 20;
$b = 10;
echo "<br>";
echo $b += 30;

// comparison 
$a = 20;
$b = 10;
echo "<br>";

if ($a<=25){
    echo $b + 20;
    // echo "total number = " .$b;
}
// post increment 
$d = 5;
$e = $d++;
echo "<br>";
echo ($d ."<br>" .$e);

// ternary operator 
echo "<br>";
echo (8>10) ? "8 is smaller than 10" : "10 is greater tha 8";


// if else 
echo "<br>";
$f = 20;
$g = 30;
$h = 40;

if ($f>$g){
    echo "f is smaller than g";
}elseif ($f<$g) {
    echo "g is greater than f";
}else{
    echo "f is equal to g";
}

// switch 
echo "<br>";
$offDay = "Monday";
switch($offDay){
    case "Saturday":
    echo "Today is $offDay";
    break;

    case "Sunday":
    echo "Today is $offDay";
    break;

    case "Monday":
        echo "Today is $offDay";
    break;

    case "Tuesday";
    echo "Today is $offDay";
    break;

    case "Wednesday":
        echo "Today is ";
    break;

    case "Thrusday":
        echo "Today is ";
    break;

    case "Friday":
        echo "Today is ";
    break;

    default:
    echo "Please Select a day";
    break;
}


// spaceship operator 
echo "<br>";
echo (100<=>100) ."<br>"; # if value is equal  result 0

echo "<br>";
echo (100<=>110) ."<br>"; # if left value is smaller  result -1

echo "<br>";
echo (120<=>110) ."<br>"; # if right value is small  result 1

// loop || while
echo "<br>";
$m = 20;
while ($m>0){
    echo $m ."<br>";
    $m--;
}
// loop || do
echo "<br>";
$m = 20;
do{
    echo $m .'<br>';
    $m--;
}While ($m<0);


// loop || for 
echo "<br>";
$p = 10;

for ($p; $p<20; $p++){
    echo $p ."<br>";
}
// array 
echo "<br>";
$name = array("masudur", "rakib", "sakib", "rayham");

foreach ($name as $value){
    echo $value ."<br>";
}

// array 
echo "<br>";
$age = array(
"masudur" => "26", 
"rakib" => "30",
 "sakib" => "10",
  "rayham" => "60");

foreach ($age as$key => $value){
    echo $key .' is ' . $value ." years old" ."<br>";
}

// break and continue 

$r = 0;
for ($r; $r<= 20; $r++){
    if ($r == 5){
        break;
    }
    echo $r ."<br>";
}
$r = 0;
for ($r; $r<= 20; $r++){
    if ($r == 5){
        echo "skipped 5<br>";
        continue;
    }
    echo $r ."<br>";
}

?>