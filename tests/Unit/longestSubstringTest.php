<?php

use Challenges\longestSubstring;

test('longestSubstring abcabcbb', function () {
    $lswrc = new longestSubstring();
    $output = $lswrc->solution('abcabcbb');
    expect($output)->toBe(3);
});

test('longestSubstring bbbbb', function () {
    $twoSum = new longestSubstring();
    $output = $twoSum->solution('bbbbb');
    expect($output)->toBe(1);
});

test('longestSubstring pwwkew', function () {
    $twoSum = new longestSubstring();
    $output = $twoSum->solution('pwwkew');
    expect($output)->toBe(3);
});

test('longestSubstring speed-test', function () {
    $twoSum = new longestSubstring();
    $start = microtime(true);
    $twoSum->solution(longestSubstring::generateLargeString(10000000));
    $end = microtime(true);
    $elapsedTime = $end - $start;
    expect($elapsedTime)->toBeLessThanOrEqual(2);
});