<?php
    function sum($x){
        $sum = 0;
        for($i=1;$i<=$x;$i++){
            $sum += $i;
        }
        return $sum;
    } 