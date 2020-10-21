<?php

class DivineByZeroException extends Exception
{
}

function divine($numerator, $denominator)
{
        if($denominator === 0 ) {
            throw new DivineByZeroException("Can't divide by zero");
        }
        return $numerator / $denominator;
}

try {
    divine(100, 0);
} catch (Exception $e) {
    echo "Error : " . $e->getMessage();
}