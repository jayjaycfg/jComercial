<?php

namespace AppBundle\Controller;


use AppBundle\Entity\Factura;
use AppBundle\Form\FacturaFormType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class FacturaController extends Controller
{


    /**
     * @Route("/factura/listar", name="list_factura")
     */
    public function listAction()
    {
        $em = $this->getDoctrine()->getManager();

        $facturas = $em->getRepository('AppBundle:Factura')
            ->findAll();
        if(!$facturas){
            $this->addFlash(
                'error',
                'No se encontraron facturas en el sistema, por favor inserte una nueva'
            );
            $this->redirectToRoute('new_factura');
        }
        return $this->render('factura/list.html.twig',[
            'facturas' => $facturas
        ]);
    }

    /**
     * @Route("/factura/nueva", name="new_factura")
     */
    public function newAction(Request $request)
    {
        $form = $this->createForm(FacturaFormType::class);
        $form->handleRequest($request);
            if($form->isSubmitted() && $form->isValid()){
                $factura  = $form->getData();

                $em  = $this->getDoctrine()->getManager();
                $em->persist($factura);
                $em->flush();

                $this->addFlash(
                    'success',
                    'Factura creada satisfactoriamente');

                 return $this->redirectToRoute('list_factura');
            }elseif ($form->isSubmitted()){
                $this->addFlash(
                    'error',
                    'Hubo un error en la creación de la factura');
            }
            return $this->render('factura/new.html.twig',[
                'form' => $form->createView()
            ]);
    }

    /**
     * @Route("/factura/{id}", name="show_factura")
     */
    public function showAction(Factura $factura)
    {
        $em = $this->getDoctrine()->getRepository('AppBundle:Factura')
            ->findOneBy([
                'id' => $factura->getId()
            ]);
        $factura = $em;
        if(!$factura){
            return $this->createNotFoundException("No se encontró la factura solicitada");
        }
            return $this->render('factura/show.html.twig',[
                'factura' => $factura
            ]);
    }

    /**
     * @Route("/factura/{id}/editar", name="edit_factura")
     */
    public function editAction(Request $request,Factura $factura)
    {
        $form = $this->createForm(FacturaFormType::class, $factura);
        $form->handleRequest($request);
            if($form->isSubmitted() && $form->isValid()){
                $factura = $form->getData();

                $em = $this->getDoctrine()->getManager();
                $em->persist($factura);
                $em->flush();

                $this->addFlash(
                    'success',
                    'Factura modificada satisfactoriamente');
                return $this->redirectToRoute('list_factura');
            }elseif ($form->isSubmitted()){
                $this->addFlash(
                    'error',
                    'Hubo un error en la edición de la factura');
            }
            return $this->render('factura/edit.html.twig',[
                'form' => $form->createView()
            ]);
    }
}