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
     * @Route("/contrato/cliente/listar", name="list_client")
     */
    public function listAction()
    {
        $em = $this->getDoctrine()->getManager();

        $clientes = $em->getRepository('AppBundle:Cliente')
                ->findAll();
        if(!$clientes){
            return $this->createNotFoundException("No hay contratos con clientes en el sistema, por favor inserte uno nuevo");
        }
            return $this->render('cliente/list.html.twig',[
                'clients' => $clientes
            ]);
    }

    /**
     * @Route("/contrato/cliente/nuevo", name="new_client")
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
     * @Route("/contrato/cliente/{id}", name="show_client")
     */
    public function showAction(Cliente $cliente)
    {
        $em = $this->getDoctrine()->getManager();
        $cliente = $em->getRepository('AppBundle:Cliente')
            ->findOneBy([
                'id' => $cliente->getId()
            ]);
        if(!$cliente){
            return $this->createNotFoundException("No se encontró el cliente solicitado");
        }
            return $this->render('cliente/show.html.twig',[
                'cliente' => $cliente
            ]);
    }

    /**
     * @Route("/contrato/cliente/{id}/editar", name="edit_client")
     */
    public function editCliente(Request $request, Cliente $cliente)
    {
        $form = $this->createForm(ClientFormType::class, $cliente);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){

            $cliente  = $form->getData();

            $em = $this->getDoctrine()->getManager();
            $em->persist($cliente);
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