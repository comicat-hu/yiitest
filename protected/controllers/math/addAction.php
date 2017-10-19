<?php

class addAction extends MathAction
{
    public function calc($a, $b)
    {
        $result = $a + $b;
        return $result;
    }
}