<?php

namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Form\CalcType;

class DefaultController extends AbstractController

{
    public function index()
    {
        $form = $this->createForm(CalcType::class, array());
        return $this->render('default/index.html.twig', array(
            'form' => $form->createView(),
        ));
    }
    
    public function test() {
	return new Response('Test :)');
    }
    
}