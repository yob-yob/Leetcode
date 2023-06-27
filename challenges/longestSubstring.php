<?php

namespace Challenges;

class longestSubstring
{
    /**
     * @param String $s
     * @return Int
     */
    function solution($s) {
      $maxLength = 0;
      $start = 0;
      $map = array();

      for ($end = 0; $end < strlen($s); $end++) {
          $char = $s[$end];

          if (array_key_exists($char, $map) && $map[$char] >= $start) {
              $start = $map[$char] + 1;
          }

          $map[$char] = $end;
          $maxLength = max($maxLength, $end - $start + 1);
      }

      return $maxLength;
    }

    public static function generateLargeString($length) {
      $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
      $randomString = '';
  
      for ($i = 0; $i < $length; $i++) {
          $randomString .= $characters[rand(0, strlen($characters) - 1)];
      }
  
      return $randomString;
    }
}
