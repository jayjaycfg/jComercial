<?php
/**
 * Created by PhpStorm.
 * User: audioxtreme
 * Date: 7/05/18
 * Time: 16:18
 */

namespace AppBundle\Controller;


use AppBundle\Form\BuscarFormType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class BuscarController
 * @package AppBundle\Controller
 * @Route("/buscar")
 */
class BuscarController extends Controller
{
    /**
     * @Route("/", name="buscar")
     */
    public function busquedaAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $resultados = null;

        $form = $this->createForm(BuscarFormType::class);
        $form->handleRequest($request);

            $data = $form->getData();
            dump($data['comboBox']);
            if($form->isSubmitted()){
                $busqueda =  $form->getData();
                    if($busqueda['comboBox'] == '1'){
                        $resultados = $em->getRepository('AppBundle:Contrato')
                            ->findContratosQueVencenEnTresMeses();
                            return $this->render('buscar/resultados.html.twig',[
                                'resultados' => $resultados,
                                'form' => $form->createView()
                            ]);
                    }
                    if($busqueda['comboBox'] == '2'){
                        $resultados = $em->getRepository('AppBundle:Contrato')
                            ->findContratosQueVencenEnSeisMeses();
                        return $this->render('buscar/resultados.html.twig',[
                            'resultados' => $resultados,
                            'form' => $form->createView()
                        ]);
                    }
                if($busqueda['comboBox'] == '5'){
                    $resultados = $em->getRepository('AppBundle:Contrato')
                        ->findContratosDelMinem();
                    return $this->render('buscar/resultados.html.twig',[
                        'resultados' => $resultados,
                        'form' => $form->createView()
                    ]);
                }
                if($busqueda['comboBox'] == '6'){
                    $resultados = $em->getRepository('AppBundle:Contrato')
                        ->findContratosFueraDelMinem();
                    return $this->render('buscar/resultados.html.twig',[
                        'resultados' => $resultados,
                        'form' => $form->createView()
                    ]);
                }
            }
            return $this->render('buscar/resultados.html.twig',[
                'form' => $form->createView(),
                'resultados' => $resultados

            ]);
    }
}