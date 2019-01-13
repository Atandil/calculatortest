<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use App\Form\CalcType;
use App\Calculator\Calculator;

/**
 * Main Calculator controller
 */
class CalcController extends AbstractController{
    
    public function index() 
    {
       $result["error"]= "No opperations provided";        
        return $this->render('calc/index.html.twig', ['result' => $result]);
    }
    
    
    public function operations($slug, Request $request)
    {
        $form = $this->createForm(CalcType::class, array());
        $form->handleRequest($request);
       
        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();   
         } else {
          $error= "No input or bad value";
        }   
        //clean Operation name to be sure
        $operationName= 'App\Calculator\Operations\\'  . preg_replace('/[^a-zA-Z]/', '', $slug);
        if(!class_exists($operationName)) {
            $error= "Operation $slug is not implemented";
        }    
   
        if(!isset($error)) {
            try {
                    $calc = new Calculator;
                    //Main Calc  - using Class with Operation
                    $out=$calc->set(new $operationName)->count($data['num1'],$data['num2']);
                    $result['decimal']=$out;
                    //binary for integers
                    $result['binary']= ($out >= 0 && $out < 1000000 && floor( $out ) == $out  )? decbin($out) : '-' ;
                } catch (\Exception $e) {
                    $error=  $e->getMessage();
                }
        }
        $result['error']=isset($error) ? $error : '';    
        return $this->render('calc/index.html.twig', ['result' => $result ]);
    }
}
