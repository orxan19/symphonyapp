<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Psr\Log\LoggerInterface;

class LuckyController extends AbstractController
{

    /**
     * @Route("/lucky/number/{number}")
     */
    public function number($number)
    {
        $number = random_int(0, $number);
        return $this->render('lucky/number.html.twig', compact('number'));
    }
}