<?php

$string = ":abc and :def have apples.";
$replacements = array('Mary', 'Jane');
 preg_replace_callback('/:\w+/', function($matches) use (&$replacements) {
    return array_shift($replacements);
}, $string);


//$string = ": and :def have apples.";
//$replacements = array('Mary', 'Jane');
//
//echo preg_replace("/:\\w+/e", 'array_shift($replacements)', $string);

//$to_replace = array(':abc', ':def', ':ghi');
//$replace_with = array('Marry', 'Jane', 'Bob');
//
//$string = ":abc and :def have apples, but :ghi doesn't";
//
//$string = strtr($string, array_combine($to_replace, $replace_with));
//echo $string;
$err =[];

//$err['test1']='t';
//$err['test2']='eteteekje';
//print_r($err);
//echo count($err);
// json_encode($err);
//echo json_decode($err);

//$a=array("red","green");
//array_push($a,"blue","yellow");
////print_r($a);
//
//
//$cars = array
//  (
//  array("Volvo",22,18),
//  array("BMW",15,13),
//  array("Saab",5,2),
//  array("Land Rover",17,15)
//  );
//    
//for ($row = 0; $row < 1; $row++) {
//  array_push($cars, array("test",22,18));
//}
//echo count($cars);
//for ($row = 0; $row < 5; $row++) {
//  echo "<p><b>Row number $row</b></p>";
//  echo "<ul>";
//  for ($col = 0; $col < 3; $col++) {
//    echo "<li>".$cars[$row][$col]."</li>";
//  }
//  echo "</ul>";
//}
//$t = null;
//echo  empty($t);
//$str = '';
//echo strlen($str); // 6

echo $var = 'Василий. Теркин-';
$username = preg_replace('/[^\p{L}\p{N}.-]/u', "", $var);
var_dump($username); // Василий.Теркин-
