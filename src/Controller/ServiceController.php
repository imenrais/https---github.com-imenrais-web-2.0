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

    #[Route('/showService', name: 'showService')]
    public function showService(): Response
{
        $authors = array(
            array('id' => 1, 'picture' => '/images/Victor-Hugo.jpg','username' => 'Victor Hugo', 'email' => 'victor.hugo@gmail.com ', 'nb_books' => 100),
            array('id' => 2, 'picture' => '/images/william-shakespeare.jpg','username' => ' William Shakespeare', 'email' =>  ' william.shakespeare@gmail.com', 'nb_books' => 200 ),
            array('id' => 3, 'picture' => '/images/Taha_Hussein.jpg','username' => 'Taha Hussein', 'email' => 'taha.hussein@gmail.com', 'nb_books' => 300),
            );
            if (!isset($authors) || empty($authors)) 
            {
                return $this->render('service/noAuthors.html.twig');
                {% for $authors in $authors %}
               {{ author['username']|upper }}
                 {% endfor %}
                echo "Nombre d'auteurs : " . count($authors);
            }
            
            
    
    return $this->render('service/showService.html.twig',['auth'=>$authors]);
    
}
#[Route('/goToIndex', name: 'goToIndex')]
    public function goToIndex(): Response
{
    return $this->render('home/index.html.twig');
    
    
}


}