<?php

class divAction extends MathAction
{
    public function calc($a = 0, $b = 1)
    {
        if ($b == 0) {
            $result = 'Divsion by zero!';
        } else {
            $result = $a / $b;
        }
        return $result;
    }
}