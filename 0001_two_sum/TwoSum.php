<?php
class TwoSum {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        $used_numbers = [];

        for($i = 0; $i<count($nums); $i++){
            $complement = $target - $nums[$i];

            if(isset($used_numbers[$complement])){
                return [$used_numbers[$complement], $i];
            }

            $used_numbers[$nums[$i]] = $i;
        }

        return [];
    }
}

function printAnswer($nums, $target, $answer){
    $csv = implode(", ", $nums);

    // Print with square brackets
    echo "Nums : [" . $csv . "]\n";

    echo "Target : {$target}\n";

    $csv = implode(", ", $answer);

    // Print with square brackets
    echo "Answer : [" . $csv . "]\n";

    echo "\n-----------------------\n\n";
}

$ob = new TwoSum();

$nums = [2,7,11,15];
$target = 9;
$answer = $ob->twoSum($nums, $target);
printAnswer($nums, $target, $answer);

$nums = [3,2,4];
$target = 6;
$answer = $ob->twoSum($nums, $target);
printAnswer($nums, $target, $answer);

$nums = [3,3];
$target = 6;
$answer = $ob->twoSum($nums, $target);
printAnswer($nums, $target, $answer);