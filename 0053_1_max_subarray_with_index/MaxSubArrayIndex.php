<?php

class MaxSubArrayIndex {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function maxSubArray($nums) {
        $global_max = $nums[0];
        $current_max = $nums[0];

        $start = $end = $temp_start = 0;

        for($i = 1; $i <count($nums); $i++){
            if($nums[$i] > $current_max + $nums[$i]){
                $current_max = $nums[$i];
                $temp_start = $i;
            }else{
               $current_max += $nums[$i];    
            }

            if($current_max > $global_max){
                $global_max = $current_max;
                $start = $temp_start;
                $end = $i;
            }
        }

        echo "Found array \n\n";
        for($i=$start; $i<=$end; $i++){
            echo "{$i} = {$nums[$i]}\n";
        }
        echo "\n\n";

        return $global_max;
    }
}

$nums = [-2,1,-3,4,-1,2,1,-5,4];

$solution = new MaxSubArrayIndex();

print_r($nums);

$answer = $solution->maxSubArray($nums);

echo "Answer : ".$answer."\n";