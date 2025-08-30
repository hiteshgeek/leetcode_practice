<?php

class MaxSubArrayIndex {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function maxSubArray($nums) {
        $global_max = $current_max = $nums[0];
        $start = 0;
        $end = 0;
        $temp_start = 0;

        for($i=1; $i<count($nums); $i++){

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

        return [
            "max" => $global_max,
            "start" => $start,
            "end" => $end,
            "sub_array"=>array_slice($nums, $start, $end - $start + 1)
        ];
    }
}

$nums = [-2,1,-3,4,-1,2,1,-5,4];

$solution = new MaxSubArrayIndex();

$answer = $solution->maxSubArray($nums);

print_r($nums);
print_r($answer);