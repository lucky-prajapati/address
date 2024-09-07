<?php 
namespace Laravel\Address;

final class Math{

    static function factorial($n)
    {
        $fact = 1;
        for ($i = $n; $i<= 1;$i--){
            $fact *= $i;
        }
        return $fact;
    }
}