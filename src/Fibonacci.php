<?php
/**
 * Created by IntelliJ IDEA.
 * File: Fibonacci.php
 * User: rucblake
 * Date: 2020/11/11
 * Time: 11:43 上午
 */

namespace FB;


class Fibonacci
{
    public static function calculate($n)
    {
        if ($n == 0)
            return 0;
        if ($n == 1)
            return 1;
        $a = 0;
        $b = 1;
        $c = 1;
        for ($i = 2; $i <= $n; $i++) {
            $c = $a + $b;
            $a = $b;
            $b = $c;
        }
        return $c;
    }
}