<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SpacesRepository")
 */
class Spaces implements transformer
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */

    private $string;

    public function transform(string $string): string
    {
        return str_replace(' ', '-', $string);
    }
}
