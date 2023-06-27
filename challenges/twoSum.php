<?php

namespace Challenges;

class twoSum
{
    /**
     * @param Int[] $nums
     * @param Int $target
     * @return Int[]
     */
    function solution($nums, $target) {
        $prevs = [];
        foreach ($nums as $key => $value) {
            $sub = $target - $value;
            if (array_key_exists($sub, $prevs)) {
                return [$prevs[$sub], $key];
            }
            $prevs[$value] = $key;
        }
        return [];
    }
}
