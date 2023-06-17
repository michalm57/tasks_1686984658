<?php

class TextInput
{
    /**
     * @var string The current value of the text input.
     */
    protected $value = '';

    /**
     * Adds the given text to the current value.
     *
     * @param string $text The text to be added.
     * @return void
     */
    public function add($text)
    {
        $this->value .= $text;
    }

    /**
     * Returns the current value.
     *
     * @return string The current value.
     */
    public function getValue()
    {
        return $this->value;
    }
}

?>