<?php

class MathFilter extends CFilter
{
    // Before action
    protected function preFilter($filterChain)
    {
        // echo 'run MathFilter preFilter<br>';

        $request = Yii::app()->request;
        $a = $request->getQuery('a');
        $b = $request->getQuery('b');

        if (is_numeric($a) && is_numeric($b)) {
            return true;
        }

        echo 'Invalid query params. (MathFilter)<br>';
        return false;
    }

    // After action
    protected function postFilter()
    {

    }
}