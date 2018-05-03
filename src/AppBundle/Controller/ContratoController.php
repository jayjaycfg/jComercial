<?php
/**
 * Created by PhpStorm.
 * User: audioxtreme
 * Date: 2/05/18
 * Time: 21:05
 */

namespace AppBundle\Controller;


use AppBundle\Entity\Contrato;

use AppBundle\Form\ContratoFormType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class ContratoController
 * @package AppBundle\Controller
 * @Route("/contrato")
 */
class ContratoController extends Controller
{
    /**
     * @Route("/listar", name="listar_contrato")
     */
    public function listarAction()
    {
        $em = $this->getDoctrine()->getManager();
        $contratos = $em->getRepository('AppBundle:Contrato')
            ->findAll();
            if(!$contratos){
               $this->addFlash(
                   'error',
                   'No se encontraron Contratos en el sistema, por favor inserte un contrato');
                    return $this->redirectToRoute('crear_contrato');
            }
            return $this->render('contrato/list.html.twig',[
                'contratos' => $contratos
            ]);
    }

    /**
     * @Route("/crear", name="crear_contrato")
     */
    public function crearAction(Request $request)
    {
        $form = $this->createForm(ContratoFormType::class);
        $form->handleRequest($request);
            if($form->isSubmitted() && $form->isValid()){
                $contrato = $form->getData();

                $em = $this->getDoctrine()->getManager();
                $em->persist($contrato);
                $em->flush();

                $this->addFlash(
                    'success',
                    'Contrato creado con exito');
                    return $this->redirectToRoute('listar_contrato');
            }elseif ($form->isSubmitted()){
                $this->addFlash(
                    'error',
                    'No se pudo insertar los datos del nuevo contrato');
            }
                    return $this->render('contrato/new.html.twig',[
                        'form' => $form->createView()
                    ]);
    }

    /**
     * @Route("/{id}/editar", name="modificar_contrato")
     */
    public function editarAction(Request $request, Contrato $contrato)
    {

        $form  = $this->createForm(ContratoFormType::class,$contrato);
        $form->handleRequest($request);
            if($form->isSubmitted() && $form->isValid()){
                $contrato = $form->getData();

                $em = $this->getDoctrine()->getManager();
                $em->persist($contrato);
                $em->flush();
                $this->addFlash(
                    'success',
                    'Contrato modificado con exito');
                    return $this->redirectToRoute('listar_contrato');
            }elseif ($form->isSubmitted()){
                $this->addFlash(
                    'error',
                    'Hubo un error en la modificacion del contrato');
            }
            return $this->render('contrato/edit.html.twig',[
                'form' => $form->createView()
            ]);
    }

    /**
     * @Route("/{id}/mostrar", name="mostrar_contrato")
     */
    public function mostrarAction(Contrato $contrato)
    {
        $em = $this->getDoctrine()->getManager();
        $contrato = $em->getRepository('AppBundle:Contrato')
            ->findOneBy([
                'id' => $contrato->getId()
            ]);
            return $this->render('contrato/show.html.twig',[
                'contrato' => $contrato
            ]);
    }

}