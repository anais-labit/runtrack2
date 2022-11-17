<?php

$str="Certaines choses changent, et d'autres ne changeront jamais";
$new_str="0";

for ($i=0; isset($str[$i]); $i++) {
    $new_str++;
    };

for ($i = 0; isset($str[$i]); $i++) {

    if ($i == 0){
        echo ($str[1]);
    } 
    
    elseif($i==($new_str-1)){
            echo ($str[0]);
    }
 
    else{
        $j=$i+1;
        echo $str[$j];
    };
}
?>
