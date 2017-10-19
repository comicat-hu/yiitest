<?php

class mulAction extends MathAction
{
    public function calc($a, $b)
    {
        $result = $a * $b;
        return $result;
    }
}