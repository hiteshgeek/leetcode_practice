<?php 

class ContainDuplicate {

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

$nums = [1, 2, 3, 1];
$ob = new ContainDuplicate();
echo $ob->containsDuplicate($nums) ? "True" : "False";
echo "\n";