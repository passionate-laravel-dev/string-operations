<?php

namespace Spatie\StringReverse;

class StringReverseClass
{
    public static function string(string $str): self
    {
        return new static($str);
    }

    public function __construct(protected string $str)
    {
    }

    /**
     * Reverse string
     *
     * @return string
     */
    public function reverse(): string
    {
        $length = strlen($this->str);

        for ($i = 0; $i < $length / 2; $i++) {
            $temp = $this->str[$i];
            $this->str[$i] = $this->str[$length - $i - 1];
            $this->str[$length - $i - 1] = $temp;
        }

        return $this->str;
    }
}
