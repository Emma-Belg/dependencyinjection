<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

class Logger implements transformer
{

    public function transform(string $string): string
    {
        file_put_contents(__DIR__."Logs/log.txt", $string, FILE_APPEND);
    }
}
