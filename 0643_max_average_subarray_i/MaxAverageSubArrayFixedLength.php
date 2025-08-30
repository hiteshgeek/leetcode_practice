<?php

class MaxAverageSubArrayFixedLength
{

    /**
     * @param int[] $nums
     * @param int $k
     * @return Float
     */
    function findMaxAverage($nums, $k)
    {
        $max_sum = $window_sum = array_sum(array_slice($nums, 0, $k));
        $start = 0;

        for ($i = $k; $i < count($nums); $i++) {
            $window_sum += $nums[$i] - $nums[$i - $k];

            if ($window_sum > $max_sum) {
                $max_sum = $window_sum;
                $start = $i - $k + 1;
            }
        }

        for ($i = $start; $i < $start + $k; $i++) {
            echo "{nums[$i]} = {$nums[$i]} \n";
        }

        return floatval($max_sum / $k);
    }
}

$solution = new MaxAverageSubArrayFixedLength();

$nums = [1, 12, -5, -6, 50, 3];
$k = 4;

print_r($nums);
$answer = $solution->findMaxAverage($nums, $k);

echo "Answer : {$answer}\n";
