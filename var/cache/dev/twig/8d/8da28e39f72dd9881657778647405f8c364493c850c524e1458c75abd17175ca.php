<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_106381100ca096094ec19a76bf49b8a44bc896a72f685beb71be075e7b303da6 extends Twig_Template
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
        $__internal_dfe4f6dd1da30abef24120aa06e30dcaec38206a0a66063406110c2d5d589815 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfe4f6dd1da30abef24120aa06e30dcaec38206a0a66063406110c2d5d589815->enter($__internal_dfe4f6dd1da30abef24120aa06e30dcaec38206a0a66063406110c2d5d589815_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_704cf640b5a7d8b29a69fe4913829777f0912b3ceaac7e152b4fbdf77053cb44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_704cf640b5a7d8b29a69fe4913829777f0912b3ceaac7e152b4fbdf77053cb44->enter($__internal_704cf640b5a7d8b29a69fe4913829777f0912b3ceaac7e152b4fbdf77053cb44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_dfe4f6dd1da30abef24120aa06e30dcaec38206a0a66063406110c2d5d589815->leave($__internal_dfe4f6dd1da30abef24120aa06e30dcaec38206a0a66063406110c2d5d589815_prof);

        
        $__internal_704cf640b5a7d8b29a69fe4913829777f0912b3ceaac7e152b4fbdf77053cb44->leave($__internal_704cf640b5a7d8b29a69fe4913829777f0912b3ceaac7e152b4fbdf77053cb44_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.atom.twig", "/var/www/html/HeroQuest/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
