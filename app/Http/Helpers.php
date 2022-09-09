<?php

function noNeg(array $arr)
    {
        $newArr = [];
        foreach ($arr as $val) {
            if ($val < 0) {
                $val = 0;
            }
            $newArr[] = $val;
        }
        return $newArr;
    }
