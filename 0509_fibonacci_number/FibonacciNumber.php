<?php

class FibonacciNumber
{

    /**
     * @param Integer $n
     * @return Integer
     */

    private $map = [];

    function fib($n)
    {
        if ($n < 2) {
            return $n;
        }

        if (isset($this->map[$n])) {
            return $this->map[$n];
        }

        $result = $this->fib($n - 1) + $this->fib($n - 2);
        $this->map[$n] = $result;
        return $result;
    }
}

$ob = new FibonacciNumber();

$answer = $ob->fib(6);

echo "Asnwer is " . $answer . "\n";
