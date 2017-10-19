<?php

class subAction extends MathAction
{
    public function calc($a, $b)
    {
        $result = $a - $b;
        return $result;
    }
}