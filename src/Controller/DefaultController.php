<?php

namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller

{
    public function index()
    {
        return $this->render('default/index.html.twig', ['greeting' => 'hello']);
    }
    
    public function test() {
	return new Response('Test :)');
    }
    
}