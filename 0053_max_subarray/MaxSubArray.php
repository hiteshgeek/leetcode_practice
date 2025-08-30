<?php

class MaxSubArray {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function maxSubArray($nums) {
        $global_max = $current_max = $nums[0];

        for($i=1; $i<count($nums); $i++){
            $current_max = max($nums[$i], $current_max + $nums[$i]);
            if($current_max > $global_max){
                $global_max = $current_max;
            }
        }

        return $global_max;
    }
}

$nums = [-2,1,-3,4,-1,2,1,-5,4];

$solution = new MaxSubArray();

$answer = $solution->maxSubArray($nums);

echo $answer."\n";