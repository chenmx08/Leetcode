<?php

class Solution {
    /**
     * 暴力法
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        for($i=0;i<count($nums) - 1;$i++){
            for($j=$i+1;$j<count($nums);$j++){
                if($nums[$i] + $nums[$j] == $target){
                        return [$i,$j];
                    }
                }
            }
            return [];
        }
    }

    /**
     * hashMap
     */
    function twoSum2($nums, $target) {
        for ($i=0;$i<count($nums);$i++){
            $ele = $target - $nums[$i];
            $exists = array_keys($nums, $ele);
            foreach($exists as $key){
                if($key != $i) return [$i, $key];
            }
        }
        return [];
    }

$a = new Solution();
$b = $a->twoSum2([1,2,7],9);
var_dump($b);