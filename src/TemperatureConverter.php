<?php

namespace jpMoreno12\TempConv;

class TemeperatureConverter
{

    public function convert($temperature, $unit) {

        if ($unit === 'C') {
            $fahrenheit = ($temperature * 9/ 5) + 32;
            return $fahrenheit;
        } elseif ($unit === 'F'){
            $celsius = ($temperature - 32)  * 5 / 9;
            return $celsius;
        } else {
            throw new \InvalidArgumentException('Invalid unit, only C (Celsius) or F (Fahrenheit) are allowed'); 
        }
    }
}