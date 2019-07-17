<?php

$pessoa= array(
    "nome" => 'João',
    "idade" => 20
);
$a=10;
$b=&$a;
foreach ($pessoa as $key => &$value){
    if(gettype($value)==="integer"){
        $value +=10;
        
    }
    echo $key ."= ".$value."<br>";
    //echo $value ."<br>";
}
echo $pessoa['idade'];
echo "<br>------------------- $a";
echo "<br>------------------- $b";
$b=30;
echo "<br>------------------- $b";
echo "<br>------------------- $a";
echo "<br>-------------------";
$c=&$d;
?>