<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity(repositoryClass="App\Repository\CapitaliseRepository")
 */
class Capitalise implements transformer
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $string;

    public function transform($str): string
    {
        return preg_replace_callback('/(\w)(.)/',function ($m){
            return strtoupper($m[1]).$m[2];
        }, $str);

    }

}
