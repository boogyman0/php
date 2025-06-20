<?php
$fruits1  = ['a'=>"Apple",'b'=>"Bee",'c'=>"cat",'d'=>"Dog"];
$fruits2  = ['b' => 'boy','d'=> 'dog'];
foreach ($fruits1 as $a => $value){
    echo "[$a] : $value<br>";

}
$result = array_merge($fruits1,$fruits2);
foreach ($result as $a => $value){
    echo "[$a] : $value<br>";

}
?>