<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_185465045c6dc15145cc74432053d972c640213f9859b623a87d06d8b4f0eb98 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_564365be2703279cd12dee5ce9cf5c1989b5ed7bffa71e668f6b1df90d4da613 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_564365be2703279cd12dee5ce9cf5c1989b5ed7bffa71e668f6b1df90d4da613->enter($__internal_564365be2703279cd12dee5ce9cf5c1989b5ed7bffa71e668f6b1df90d4da613_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_273d496b377e5c66ecc696576769117cdc5a577743aa49c768849a6b35a7f429 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_273d496b377e5c66ecc696576769117cdc5a577743aa49c768849a6b35a7f429->enter($__internal_273d496b377e5c66ecc696576769117cdc5a577743aa49c768849a6b35a7f429_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_564365be2703279cd12dee5ce9cf5c1989b5ed7bffa71e668f6b1df90d4da613->leave($__internal_564365be2703279cd12dee5ce9cf5c1989b5ed7bffa71e668f6b1df90d4da613_prof);

        
        $__internal_273d496b377e5c66ecc696576769117cdc5a577743aa49c768849a6b35a7f429->leave($__internal_273d496b377e5c66ecc696576769117cdc5a577743aa49c768849a6b35a7f429_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.js.twig", "/var/www/html/HeroQuest/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
