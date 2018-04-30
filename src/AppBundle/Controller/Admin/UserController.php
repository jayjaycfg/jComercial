<?php
/**
 * Created by PhpStorm.
 * User: audioxtreme
 * Date: 28/04/18
 * Time: 18:11
 */

namespace AppBundle\Controller\Admin;


use AppBundle\Entity\User;
use AppBundle\Form\User\UserEditForm;
use AppBundle\Form\User\UserRegisterForm;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{

    /**
     * @Route("/admin/user/register", name="register_user")
     */
    public function registerAction(Request $request)
    {
        $form = $this->createForm(UserRegisterForm::class);
        $form->handleRequest($request);
            if( $form->isSubmitted() && $form->isValid()){
                $user = $form->getData();

                $em = $this->getDoctrine()->getManager();
                $em->persist($user);
                $em->flush();

                $this->addFlash(
                    'success',
                    'Usuario insertado con exito'
                );
                 return $this->redirectToRoute("list_users");
            }elseif ($form->isSubmitted()){
                $this->addFlash(
                    'error',
                    'Hubo un problema en la creación del usuario'
                );
            }
        return $this->render("admin/user/register.html.twig",[
            'form' => $form->createView()
        ]);

    }


    /**
     * @Route("/admin/user/delete/{id}", name="delete_user")
     * @Method("DELETE")
     */
    public function deleteAction(User $user)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($user);
        $em->flush();

            return new Response(null,204);
    }

    /**
     * @Route("/admin/user/list", name="list_users")
     */
    public function listAction()
    {
        $em = $this->getDoctrine()->getManager();

        $users = $em->getRepository('AppBundle:User')
            ->findAll();

        return $this->render("admin/user/list.html.twig",[
            'users' => $users
        ]);
    }

    /**
     * @Route("/admin/user/{id}", name="show_user")
     */
    public function showAction(User $user)
    {
        $em = $this->getDoctrine()->getManager();

        $user = $em->getRepository('AppBundle:User')
            ->findOneBy([
                'id' => $user
            ]);
        return $this->render("admin/user/show.html.twig",[
            'user' => $user
        ]);
    }

    /**
     * @Route("/admin/user/{id}/edit", name="user_edit")
     */
    public function editAction(User $user, Request $request)
    {
        $form = $this->createForm(UserEditForm::class, $user);
        $form->handleRequest($request);
            if( $form->isSubmitted() && $form->isValid() ){

                $user = $form->getData();

                $em = $this->getDoctrine()->getManager();
                $em->persist($user);
                $em->flush();

                $this->addFlash(
                    'success',
                    'Usuario editado con exito'
                );

                    return $this->redirectToRoute('list_users',[
                        'id'=> $user->getId()
                    ]);
            }elseif ($form->isSubmitted()){
                $this->addFlash(
                    'error',
                    'Hubo un problema en la edición del usuario'
                );
            }
            return $this->render("admin/user/edit.html.twig",[
                'userForm' => $form->createView()
            ]);
    }

}