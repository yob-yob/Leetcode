<?php

use Challenges\romanToInteger;

test('III', function () {
    $romanToInteger = new romanToInteger();
    $output = $romanToInteger->solution('III');
    expect($output)->toBe(3);
});

test('LVIII', function () {
    $romanToInteger = new romanToInteger();
    $output = $romanToInteger->solution('LVIII');
    expect($output)->toBe(58);
});

test('MCMXCIV', function () {
    $romanToInteger = new romanToInteger();
    $output = $romanToInteger->solution('MCMXCIV');
    expect($output)->toBe(1994);
});

test('IV', function () {
    $romanToInteger = new romanToInteger();
    $output = $romanToInteger->solution('IV');
    expect($output)->toBe(4);
});

test('MMMDCX', function () {
    $romanToInteger = new romanToInteger();
    $output = $romanToInteger->solution('MMMDCX');
    expect($output)->toBe(3610);
});

test('XX', function () {
    $romanToInteger = new romanToInteger();
    $output = $romanToInteger->solution('XX');
    expect($output)->toBe(20);
});

test('XV', function () {
    $romanToInteger = new romanToInteger();
    $output = $romanToInteger->solution('XV');
    expect($output)->toBe(15);
});


