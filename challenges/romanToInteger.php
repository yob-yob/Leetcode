<?php

namespace Challenges;

class romanToInteger
{
    public $symbols = [
        'I' => 1,
        'V' => 5,
        'X' => 10,
        'L' => 50,
        'C' => 100,
        'D' => 500,
        'M' => 1000,
    ];

    /**
     * @param String $s
     * @return Integer
     */
    public function solution($s)
    {
        $symbols = array_map(fn ($sym) => $this->symbols[$sym], str_split($s));

        $sym_count = (count($symbols) - 1);

        $new_sym = [];

        for ($i=0; $i <= $sym_count; $i++) { 
            $curr_sym = $symbols[$i];
            if (array_key_exists($i + 1, $symbols)) {
                $next_sym = $symbols[$i + 1];
                if ($curr_sym < $next_sym) {
                    $curr_sym = $next_sym - $curr_sym;
                    $i++;
                }
            }
            $new_sym[] = $curr_sym;
        }

        return array_sum($new_sym);
    }
}
