<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;


class Masterclass
{

    /**
     * @var transformer
     */
    private $transform;

    public function __construct(transformer $transform)
    {
        $this->transform = $transform;

    }

    public function transformer(string $string){
        return $this->transform->transform($string);
    }
}
