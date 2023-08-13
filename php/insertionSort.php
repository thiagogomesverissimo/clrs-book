<?php

class insertionSort
{
    public function __construct(array $array){
        echo "\nInput array: " . implode(',',$array);
        $n = count($array);
        for($i = 1; $i < $n; $i++){
            $key = $array[$i];
            echo "\nAnalisando elemento $key: " . implode(',',$array);
            $j = $i - 1;
            while($j >= 0 and $array[$j] > $key){
                $array[$j+1] = $array[$j];
                echo "\n {$array[$j+1]} movido para direita: " . implode(',',$array);
                $j = $j - 1;
            }
            $right = $j+1;
            $array[$right] = $key;
            echo "\n-> posição $right recebeu $key: " . implode(',',$array);
        }
        echo "\nOutput array ordenado: " . implode(',',$array);
    }

}

$input = [5,2,4,6,1,3];
$obj = new insertionSort($input);