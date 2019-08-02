<?php 
class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLongestSubstring($s)
    {
        $i = $j = $k = $max = 0;
        $size = strlen($s);
        for($j = 0;$j<$size;$j++){
            for($k = $i;$k<$j;$k++)
                if($s[$k]==$s[$j]){  
                    $i = $k+1;
                    break;
                }
            if($j-$i+1 > $max)
                $max = $j-$i+1;
        }
        return $max;
    }
}


    