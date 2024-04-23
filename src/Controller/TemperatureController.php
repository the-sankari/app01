<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TemperatureController extends AbstractController
{

    #[Route('/temperature', name: 'temp_conv')]
    public function converTemp(Request $request)
    {
        $temp =$request->query->get('temp');
    if (!is_numeric($temp)) {
            
        return new Response('Error: Temperature must be a number', 400);
        }else {
            $fahrenhit = ($temp * 9 / 5 ) + 32;
            return new Response('The temperature in Fahrenhit: ' . $fahrenhit);
        }
    }
}
