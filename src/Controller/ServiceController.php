<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ServiceController extends AbstractController
{
    #[Route('/service', name: 'app_service')]
    public function index(): Response
    {
        return $this->render('service/index.html.twig', [
            'controller_name' => 'ServiceController',
        ]);
    }

    #[Route('/showService/{name}', name: 'showService')]
    public function showService($name): Response
{
    return new Response('<h1>Service: </h1>'.$name);
    
}#[Route('/goToIndex', name: 'goToIndex')]
    public function goToIndex(): Response
{
    return $this->render('home/index.html.twig');
    
    
}


}