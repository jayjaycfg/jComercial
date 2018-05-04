<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_aa83498be161242a9f91d6a22df145b34e65dacd1633e3e28a2baeb8081b4468 extends Twig_Template
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
        $__internal_9e34c65b852c86bc33f8846a0b0df7a0cd16fe84d0303fd855958b78cdfaa009 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e34c65b852c86bc33f8846a0b0df7a0cd16fe84d0303fd855958b78cdfaa009->enter($__internal_9e34c65b852c86bc33f8846a0b0df7a0cd16fe84d0303fd855958b78cdfaa009_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_47d4a5b839eb58bdb63a6eb0eb9568d7559ce8ea35506f68e60e03824f62a5fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47d4a5b839eb58bdb63a6eb0eb9568d7559ce8ea35506f68e60e03824f62a5fc->enter($__internal_47d4a5b839eb58bdb63a6eb0eb9568d7559ce8ea35506f68e60e03824f62a5fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_9e34c65b852c86bc33f8846a0b0df7a0cd16fe84d0303fd855958b78cdfaa009->leave($__internal_9e34c65b852c86bc33f8846a0b0df7a0cd16fe84d0303fd855958b78cdfaa009_prof);

        
        $__internal_47d4a5b839eb58bdb63a6eb0eb9568d7559ce8ea35506f68e60e03824f62a5fc->leave($__internal_47d4a5b839eb58bdb63a6eb0eb9568d7559ce8ea35506f68e60e03824f62a5fc_prof);

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
", "TwigBundle:Exception:exception.atom.twig", "/var/www/html/jComercial/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
