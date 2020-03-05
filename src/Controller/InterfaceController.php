<?php

namespace App\Controller;

use App\Entity\Capitalise;
use App\Entity\Spaces;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class InterfaceController extends AbstractController
{
    /**
     * @Route("/interface", name="interface")
     */


    public function index()
    {
        if(isset($_POST['string'])){
            $capitalise = new Capitalise();
            $spaces = new Spaces();
            return $this->render('interface/index.html.twig', [
                'controller_name' => 'InterfaceController',
                'capitalise' => $capitalise->transform($_POST["string"]),
                'spaces' => $spaces->transform($_POST["string"])
            ]);
        }
        else {
            $_POST['string'] = "Please enter something";
        }

    }
}
