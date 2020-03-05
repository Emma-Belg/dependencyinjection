<?php

namespace App\Controller;

use App\Entity\Capitalise;
use App\Entity\Logger;
use App\Entity\Masterclass;
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
            $capitalise = new Masterclass(new Capitalise());
            $spaces = new Masterclass(new Spaces());
            $log = new Masterclass(new Logger());

            $log->transformer($_POST["string"]);

            if($_POST["choice"] == "capital"){
                return $this->render('interface/index.html.twig', [
                    'controller_name' => 'InterfaceController',
                    'capitalise' => $capitalise->transformer($_POST["string"]),
                    'spaces' => " "
                ]);
            }else{
                return $this->render('interface/index.html.twig', [
                    'controller_name' => 'InterfaceController',
                    'capitalise' => "",
                    'spaces' => $spaces->transformer($_POST["string"])
                ]);
            }

        }
        else {
            $_POST['string'] = "Please enter something";
            $_POST['choice'] = "capital";
            return $this->render('interface/index.html.twig', [
                'controller_name' => 'InterfaceController',
                'capitalise' => " ",
                'spaces' => " "
            ]);
        }

    }
}
