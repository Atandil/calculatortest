<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use App\Form\CalcType;

/**
 * Main Calculator controller
 */
class CalcController extends AbstractController{
    
    public function index(Request $request)
    {
       $result[error]= "No opperations provided";
        return $this->render('calc/index.html.twig', ['result' => $result]);
    }
    
    public function operations($slug, Request $request)
    {
        $form = $this->createForm(CalcType::class, array());
        $form->handleRequest($request);
        
        echo $slug;

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            
            print_r($data);
            
        }
        
        $result= array();
        return $this->render('calc/index.html.twig', ['result' => $result]);
    }
}
