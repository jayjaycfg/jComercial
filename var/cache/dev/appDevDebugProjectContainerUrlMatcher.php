<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        elseif (0 === strpos($pathinfo, '/admin/user')) {
            // register_user
            if ('/admin/user/register' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\Admin\\UserController::registerAction',  '_route' => 'register_user',);
            }

            // delete_user
            if (0 === strpos($pathinfo, '/admin/user/delete') && preg_match('#^/admin/user/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_delete_user;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_user')), array (  '_controller' => 'AppBundle\\Controller\\Admin\\UserController::deleteAction',));
            }
            not_delete_user:

            // list_users
            if ('/admin/user/list' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\Admin\\UserController::listAction',  '_route' => 'list_users',);
            }

            // show_user
            if (preg_match('#^/admin/user/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'show_user')), array (  '_controller' => 'AppBundle\\Controller\\Admin\\UserController::showAction',));
            }

            // user_edit
            if (preg_match('#^/admin/user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_edit')), array (  '_controller' => 'AppBundle\\Controller\\Admin\\UserController::editAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/contrato')) {
            // listar_contrato
            if ('/contrato/listar' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\ContratoController::listarAction',  '_route' => 'listar_contrato',);
            }

            // crear_contrato
            if ('/contrato/crear' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\ContratoController::crearAction',  '_route' => 'crear_contrato',);
            }

            // modificar_contrato
            if (preg_match('#^/contrato/(?P<id>[^/]++)/editar$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'modificar_contrato')), array (  '_controller' => 'AppBundle\\Controller\\ContratoController::editarAction',));
            }

            // mostrar_contrato
            if (preg_match('#^/contrato/(?P<id>[^/]++)/mostrar$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mostrar_contrato')), array (  '_controller' => 'AppBundle\\Controller\\ContratoController::mostrarAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/empresa')) {
            // listar_empresa
            if ('/empresa/listar' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\EmpresaController::listarAction',  '_route' => 'listar_empresa',);
            }

            // crear_empresa
            if ('/empresa/crear' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\EmpresaController::crearAction',  '_route' => 'crear_empresa',);
            }

            // modificar_empresa
            if (preg_match('#^/empresa/(?P<id>[^/]++)/editar$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'modificar_empresa')), array (  '_controller' => 'AppBundle\\Controller\\EmpresaController::editarAction',));
            }

            // mostrar_empresa
            if (preg_match('#^/empresa/(?P<id>[^/]++)/mostrar$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mostrar_empresa')), array (  '_controller' => 'AppBundle\\Controller\\EmpresaController::mostrarAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/factura')) {
            // testin
            if ('/factura/test' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\FacturaController::testAction',  '_route' => 'testin',);
            }

            // list_factura
            if ('/factura/listar' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\FacturaController::listAction',  '_route' => 'list_factura',);
            }

            // new_factura
            if ('/factura/nueva' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\FacturaController::newAction',  '_route' => 'new_factura',);
            }

            // show_factura
            if (preg_match('#^/factura/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'show_factura')), array (  '_controller' => 'AppBundle\\Controller\\FacturaController::showAction',));
            }

            // edit_factura
            if (preg_match('#^/factura/(?P<id>[^/]++)/editar$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'edit_factura')), array (  '_controller' => 'AppBundle\\Controller\\FacturaController::editAction',));
            }

            // cancelada
            if (preg_match('#^/factura/(?P<id>[^/]++)/cancelar$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cancelada')), array (  '_controller' => 'AppBundle\\Controller\\FacturaController::canceladaAction',));
            }

        }

        // security_login
        if ('/login' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::loginAction',  '_route' => 'security_login',);
        }

        // security_logout
        if ('/logout' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'security_logout',);
        }

        // homepage
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\MainController::homepageAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
