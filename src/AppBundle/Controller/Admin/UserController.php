<?php
/**
 * Created by PhpStorm.
 * User: audioxtreme
 * Date: 28/04/18
 * Time: 18:11
 */

namespace AppBundle\Controller\Admin;


use AppBundle\Entity\User;
use AppBundle\Form\UserEditForm;
use AppBundle\Form\UserRegisterForm;
use AppBundle\Security\LoginFormAuthenticator;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\BrowserKit\Response;
use Symfony\Component\HttpFoundation\Request;

class UserController extends Controller
{

    /**
     * @Route("/admin/user/register", name="register_user")
     */
    public function registerAction(Request $request, LoginFormAuthenticator $authenticator)
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
//                return $this->get('security.authentication.guard_handler')
//                ->authenticateUserAndHandleSuccess(
//                    $user,
//                    $request,
//                    $authenticator,
//                    'main'
//                );
            }
        return $this->render("admin/user/register.html.twig",[
            'form' => $form->createView()
        ]);

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

                    return $this->redirectToRoute('user_edit',[
                        'id'=> $user->getId()
                    ]);
            }
            return $this->render("admin/user/edit.html.twig",[
                'userForm' => $form->createView()
            ]);
    }


}