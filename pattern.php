<?php

$rows=6;
for($i=1; $i<$rows; $i++){
    echo str_repeat('*', $i) . "<br>";
}

for($i=$rows-2; $i>=1; $i--){
    echo str_repeat('*', $i) . "<br>";
}