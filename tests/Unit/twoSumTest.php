<?php

use Challenges\twoSum;

test('twoSum 2-7-11-15:9', function () {
    $twoSum = new twoSum();
    $output = $twoSum->solution([2,7,11,15], 9);
    expect($output)->toBe([0,1]);
});

test('twoSum 3-2-4:6', function () {
    $twoSum = new twoSum();
    $output = $twoSum->solution([3,2,4], 6);
    expect($output)->toBe([1,2]);
});

test('twoSum 3-3:6', function () {
    $twoSum = new twoSum();
    $output = $twoSum->solution([3,3], 6);
    expect($output)->toBe([0,1]);
});

test('twoSum SPEED TEST', function () {
    $nums = range(1, 1000000);
    shuffle($nums);
    $twoSum = new twoSum();
    $start = microtime(true);
    $twoSum->solution($nums, 999999);
    $end = microtime(true);
    $elapsedTime = $end - $start;
    expect($elapsedTime)->toBeLessThanOrEqual(1);
});