<?php

class NumericInput extends TextInput
{
    /**
     * Adds the given text to the current value if it is numeric.
     *
     * @param string $text The text to be added.
     * @return void
     */
    public function add($text)
    {
        if (is_numeric($text)) {
            $this->value .= $text;
        }
    }
}

?>
