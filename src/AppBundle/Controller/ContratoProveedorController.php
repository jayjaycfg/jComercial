<?php

namespace AppBundle\Controller;


use AppBundle\Entity\Proveedor;
use AppBundle\Form\ProveedorFormType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ContratoProveedorController extends Controller
{
    /**
     * @Route("/contrato/proveedor/list", name="list_proveedor")
     */
    public function listAction()
    {
        $em = $this->getDoctrine()->getManager();

        $proveedores = $em->getRepository('AppBundle:Proveedor')
                ->findAll();
        if(!$proveedores){
            return $this->createNotFoundException("No hay contratos con proveedores en el sistema, por favor inserte uno nuevo");
        }
            return $this->render('proveedor/list.html.twig',[
                'proveedores' => $proveedores
            ]);
    }

    /**
     * @Route("/contrato/proveedor/new", name="new_proveedor")
     */
    public function newProveedor(Request $request)
    {
        $form = $this->createForm(ProveedorFormType::class);
        $form->handleRequest($request);
            if($form->isSubmitted() && $form->isValid()){

                $client  = $form->getData();


                $em = $this->getDoctrine()->getManager();
                $em->persist($client);
                $em->flush();

                $this->addFlash(
                    'success',
                    'Contrato con proveedor guardado satisfactoriamente!
                    ');
                return $this->redirectToRoute('list_proveedor');
            }elseif ($form->isSubmitted()){
                $this->addFlash(
                    'error',
                    'Hubo un problema en la creación del contrato'
                );
            }
            return $this->render('proveedor/new.html.twig',[
                'form'=> $form->createView()
            ]);
    }

    /**
     * @Route("/contrato/proveedor/{id}/edit", name="edit_proveedor")
     */
    public function editProveedor(Request $request, Proveedor $proveedor)
    {
        $form = $this->createForm(ProveedorFormType::class, $proveedor);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){

            $proveedor  = $form->getData();

            $em = $this->getDoctrine()->getManager();
            $em->persist($proveedor);
            $em->flush();

            $this->addFlash(
                'success',
                'Contrato con proveedor modificado satisfactoriamente!
                    ');
            return $this->redirectToRoute('list_proveedor');
        }elseif ($form->isSubmitted()){
            $this->addFlash(
                'error',
                'Hubo un problema mientras se modificaba el contrato'
            );
        }
        return $this->render('proveedor/edit.html.twig',[
            'form'=> $form->createView()
        ]);
    }
}