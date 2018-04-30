<?php

namespace AppBundle\Security;

use AppBundle\Form\User\LoginForm;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Encoder\PasswordEncoderInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Guard\Authenticator\AbstractFormLoginAuthenticator;
use Symfony\Component\Security\Http\Util\TargetPathTrait;

class LoginFormAuthenticator extends AbstractFormLoginAuthenticator
{
    use TargetPathTrait;
    private $formFactory;
    private $entityManager;
    private $router;
    private $passwordEncoder;

    public function __construct(FormFactoryInterface $formFactory, EntityManagerInterface $entityManager, RouterInterface $router, UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->formFactory = $formFactory;
        $this->entityManager = $entityManager;
        $this->router = $router;
        $this->passwordEncoder = $passwordEncoder;
    }

    public function getCredentials(Request $request)
    {
        $isLoginSubmited = $request->getPathInfo()=="/login" && $request->isMethod('POST');

        if(!$isLoginSubmited){
            return null;
        }
        $form = $this->formFactory->create(LoginForm::class);
        $form->handleRequest($request);

        $data = $form->getData();

        $request->getSession()->set(
            Security::LAST_USERNAME,
            $data['_username']
        );
        return $data;
    }

    public function getUser($credentials, UserProviderInterface $userProvider)
    {
        $user = $credentials['_username'];

        return $this->entityManager->getRepository('AppBundle:User')
            ->findOneBy([
                'name' => $user,
            ]);
    }

    public function checkCredentials($credentials, UserInterface $user)
    {
        $password = $credentials['_password'];

        if($this->passwordEncoder->isPasswordValid($user, $password)){
            return true;
        }
        return false;
    }

    protected function getLoginUrl()
    {
        return $this->router->generate('security_login');
    }

    public function getDefaultSuccessRedirectUrl()
    {
        return $this->router->generate('homepage');
    }

//    public function onAuthenticationSuccess(Request $request, TokenInterface $token, $providerKey)
//    {
//        $targetPathTrait =
//    }

}