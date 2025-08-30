<?php 

class Solution {

    /**
     * @param Integer[] $prices
     * @return Integer
     */
    function maxProfit($prices) {
        $left = 0;
        $right = 1;
        $maxP = 0;

        while($right < count($prices)){
            if($prices[$left] < $prices[$right]){
                $profit = $prices[$right] - $prices[$left];
                $maxP = max($maxP, $profit);                               
            }else{
                $left = $right; 
            }

            $right++;
        }

        return $maxP;
    }
}

$solution = new Solution();

echo $solution->maxProfit([7,1,5,3,6,4]);
echo "\n";