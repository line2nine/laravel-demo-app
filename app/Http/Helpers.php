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

function maxMinAvg(array $arr)
    {
        $newArr = [];
        $sum = 0;
        foreach ($arr as $val) {
            $sum += $val;
        }
        $newArr[] = max($arr);
        $newArr[] = min($arr);
        $newArr[] = $sum / count($arr);
    
        return $newArr;
    }

function swap(array $arr)
    {
        $newArr = array_slice($arr, 0);
        $first = $newArr[0];
        $last = $newArr[count($newArr) - 1];
        $newArr[0] = $last;
        $newArr[count($newArr) - 1] = $first;
        
        return $newArr;
    }

function numToStr(array $arr)
    {
        $newArr = [];
        foreach ($arr as $val) {
            if ($val < 0) {
                $val = "Dojo";
            }
            $newArr[] = $val;
        }
        return $newArr;
    }
