<?php

namespace App\Entity;

interface transformer
{
    public function transform(string $string) : string;
}
