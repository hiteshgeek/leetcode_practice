<?php 

class Solution {

    /**
     * @param Integer[] $nums
     * @return Boolean
     */
    function containsDuplicate($nums) {
        $map = [];
        
        foreach($nums AS $index => $num){
            if(isset($map[$num])){
                return true;
            }

            $map[$num] = $index;
        }

        return false;
    }
}