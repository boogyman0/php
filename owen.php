<?php
$fruits1  = ['a'=>"apple",'b'=>"bee",'c'=>"cat",'d'=>"dog"];
$fruits2  = ['b' => 'boy','d'=> 'dog'];
foreach ($fruits1 as $a => $value){
    echo "[$a] : $value<br>";
}
$result = array_merge($fruits1,$fruits2);
foreach ($result as $a => $value){
    echo "[$a] : $value<br>";
}
?>