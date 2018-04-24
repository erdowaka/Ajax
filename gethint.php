<?php
$a[]="Ayam";
$a[]="Bebek";
$a[]="Cicak";
$a[]="Domba";
$a[]="Elang";
$a[]="Flaminggo";

$q = $_REQUEST["q"];

$hint = "";

if ($q !== "") {
    $q = strtolower($q);
    $len = strlen($q);
    foreach ($a as $name) {
        if(stristr($q, substr($name, 0, $len))){
          if($hint === ""){
            $hint = $name;
          }else{
            $hint .= ", $name";
          }
        }
    }
  
}

echo $hint === ""? "No sugestion " : $hint;
?>