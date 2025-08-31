<?php

class BestTimeToBuyAndSellStock
{
    /**
     * @param int[] $prices
     * @return int
     */
    function maxProfit1($prices)
    {
        $left = 0;
        $right = 1;
        $maxP = 0;

        while ($right < count($prices)) {
            if ($prices[$left] < $prices[$right]) {
                $profit = $prices[$right] - $prices[$left];
                $maxP = max($maxP, $profit);
            } else {
                $left = $right;
            }

            $right++;
        }

        return $maxP;
    }

    function maxProfit($prices)
    {
        $min_price = PHP_INT_MAX;
        $max_profit = 0;
        $buy_day = -1;
        $sell_day = -1;

        foreach ($prices as $index => $price) {
            if ($price < $min_price) {
                $min_price = $price;
                $buy_day = $index;
                $sell_day = -1;
            } else if ($price - $min_price > $max_profit) {
                $max_profit = $price - $min_price;
                $sell_day = $index;
            }
        }


        echo "Buy at {$buy_day} : {$prices[$buy_day]}\n";
        echo "Sell at {$sell_day} : {$prices[$sell_day]}\n";

        return $max_profit;
    }
}

$solution = new BestTimeToBuyAndSellStock();

$nums = [7, 1, 5, 3, 6, 4];
print_r($nums);
echo $solution->maxProfit($nums);
echo "\n";
