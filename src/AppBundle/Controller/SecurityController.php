<?php

namespace AppBundle\Controller;


use AppBundle\Form\User\LoginForm;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Config\Definition\Exception\Exception;

class SecurityController extends Controller
{
    /**
     * @Route("/login", name="security_login")
     */
    public function loginAction()
    {
        $AuthenticationUtils = $this->get('security.authentication_utils');

        $lastUsername = $AuthenticationUtils->getLastUsername();
        $error = $AuthenticationUtils->getLastAuthenticationError();

        $form = $this->createForm(LoginForm::class,[
            '_username' => $lastUsername
        ]);

        return $this->render('security/login.html.twig',[
            'error' => $error,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/logout", name="security_logout")
     */
    public function logoutAction()
    {
        return new \Exception("Error");
    }
}