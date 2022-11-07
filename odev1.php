<?php
function ucgen($i){
    for($i=1; $i<=15; $i++){
        $a=1;
        while ($a<=$i){
            echo "O";
            $a++;
        }
    echo  "<br>";
    }
}
echo ucgen(15);
