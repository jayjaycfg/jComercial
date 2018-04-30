<?php
/**
 * Created by PhpStorm.
 * User: audioxtreme
 * Date: 29/04/18
 * Time: 16:14
 */

namespace AppBundle\Controller;


use AppBundle\Entity\Cliente;
use AppBundle\Form\ClientFormType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ContratoClienteController extends Controller
{
    /**
     * @Route("/contrato/cliente/list", name="list_client")
     */
    public function listAction()
    {
        $em = $this->getDoctrine()->getManager();

        $clients = $em->getRepository('AppBundle:Cliente')
                ->findAll();
        if(!$clients){
            return $this->createNotFoundException("No hay contratos con clientes en el sistema, por favor inserte uno nuevo");
        }
            return $this->render('cliente/list.html.twig',[
                'clients' => $clients
            ]);
    }

    /**
     * @Route("/contrato/cliente/new", name="new_client")
     */
    public function newCliente(Request $request)
    {
        $form = $this->createForm(ClientFormType::class);
        $form->handleRequest($request);
            if($form->isSubmitted() && $form->isValid()){

                $client  = $form->getData();


                $em = $this->getDoctrine()->getManager();
                $em->persist($client);
                $em->flush();

                $this->addFlash(
                    'success',
                    'Contrato con cliente guardado satisfactoriamente!
                    ');
                return $this->redirectToRoute('list_client');
            }elseif ($form->isSubmitted()){
                $this->addFlash(
                    'error',
                    'Hubo un problema en la creación del contrato'
                );
            }
            return $this->render('cliente/new.html.twig',[
                'form'=> $form->createView()
            ]);
    }

    /**
     * @Route("/contrato/cliente/{id}/edit", name="edit_client")
     */
    public function editCliente(Request $request, Cliente $client)
    {
        $form = $this->createForm(ClientFormType::class, $client);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){

            $client  = $form->getData();

            $em = $this->getDoctrine()->getManager();
            $em->persist($client);
            $em->flush();

            $this->addFlash(
                'success',
                'Contrato con cliente modificado satisfactoriamente!
                    ');
            return $this->redirectToRoute('list_client');
        }elseif ($form->isSubmitted()){
            $this->addFlash(
                'error',
                'Hubo un problema mientras se modificaba el contrato'
            );
        }
        return $this->render('cliente/edit.html.twig',[
            'form'=> $form->createView()
        ]);
    }
}