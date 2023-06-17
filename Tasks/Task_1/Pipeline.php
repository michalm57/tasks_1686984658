<?php

class Pipeline
{
    /**
     * Creates a pipeline function that sequentially executes the given functions on the provided argument.
     *
     * @param callable ...$functions Functions to be executed sequentially.
     * @return callable A pipeline function that takes an argument and sequentially executes the given functions on that argument.
     */
    public static function make(...$functions)
    {
        return function ($arg) use ($functions) {

            $result = $arg;
            foreach ($functions as $func) {
                $result = $func($result);
            }

            return $result;
        };
    }
}

?>