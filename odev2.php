<?php
$planets = ["Mercury", "Venus", "Earth", "Mars", "Jupiter", "Saturn", "Uranus", "Neptune", "", "", NULL];
function newArray($n,$r){
    $dizi1=array_filter($n,function ($var){return $var != (NULL || "") ? $var : false;});
    $dizi2=array_rand($dizi1,$r);
    $dizi3=array_map(function ($e) use ($dizi1) {return $dizi1[$e];}, $dizi2);
return $dizi3;
}
echo "<pre>";
print_r(newArray($planets, 2));
print_r(newArray($planets, 3));
print_r(newArray($planets, 2));
print_r(newArray($planets, 4));
print_r(newArray($planets, 5));
?>
