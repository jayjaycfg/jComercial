<?php
/**
 * Created by PhpStorm.
 * User: audioxtreme
 * Date: 3/05/18
 * Time: 14:32
 */

namespace AppBundle\Controller;


use AppBundle\Entity\Empresa;
use AppBundle\Form\EmpresaFormType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class EmpresaController
 * @package AppBundle\Controller
 * @Route("/empresa")
 */
class EmpresaController extends Controller
{


    /**
    * @Route("/listar", name="listar_empresa")
    */
    public function listarAction()
    {
        $em = $this->getDoctrine()->getManager();
        $empresas = $em->getRepository('AppBundle:Empresa')
            ->findAll();
        if(!$empresas){
            $this->addFlash(
                'error',
                'No se encontraron Empresas en el sistema, por favor inserte una empresa');
            return $this->redirectToRoute('crear_empresa');
        }
        return $this->render('empresa/list.html.twig',[
            'empresas' => $empresas
        ]);
    }

    /**
     * @Route("/crear", name="crear_empresa")
     */
    public function crearAction(Request $request)
    {
        $form = $this->createForm(EmpresaFormType::class);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $empresa = $form->getData();

            $em = $this->getDoctrine()->getManager();
            $em->persist($empresa);
            $em->flush();

            $this->addFlash(
                'success',
                'Contrato creado con exito');
            return $this->redirectToRoute('listar_empresa');
        }elseif ($form->isSubmitted()){
            $this->addFlash(
                'error',
                'No se pudo insertar los datos de la nueva empresa');
        }
        return $this->render('empresa/new.html.twig',[
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/{id}/editar", name="modificar_empresa")
     */
    public function editarAction(Request $request, Empresa $empresa)
    {

        $form  = $this->createForm(EmpresaFormType::class,$empresa);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $empresa = $form->getData();

            $em = $this->getDoctrine()->getManager();
            $em->persist($empresa);
            $em->flush();
            $this->addFlash(
                'success',
                'Empresa modificada con exito');
            return $this->redirectToRoute('listar_empresa');
        }elseif ($form->isSubmitted()){
            $this->addFlash(
                'error',
                'Hubo un error en la modificacion de la empresa');
        }
        return $this->render('empresa/edit.html.twig',[
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/{id}/mostrar", name="mostrar_empresa")
     */
    public function mostrarAction(Empresa $empresa)
    {
        $em = $this->getDoctrine()->getManager();
        $empresa = $em->getRepository('AppBundle:Empresa')
            ->findOneBy([
                'id' => $empresa->getId()
            ]);
        return $this->render('empresa/show.html.twig',[
            'empresa' => $empresa
        ]);
    }

}