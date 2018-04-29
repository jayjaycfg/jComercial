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
        $__internal_c0fc02dccf32c39ea4783317c0355b27f2324f45c5f8229483d3f6530cf96fb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0fc02dccf32c39ea4783317c0355b27f2324f45c5f8229483d3f6530cf96fb6->enter($__internal_c0fc02dccf32c39ea4783317c0355b27f2324f45c5f8229483d3f6530cf96fb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_8794eafe55d43c0c647e9f29df8e53e67a1c88e1d6c917aa8d07c1dee2a10f95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8794eafe55d43c0c647e9f29df8e53e67a1c88e1d6c917aa8d07c1dee2a10f95->enter($__internal_8794eafe55d43c0c647e9f29df8e53e67a1c88e1d6c917aa8d07c1dee2a10f95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_c0fc02dccf32c39ea4783317c0355b27f2324f45c5f8229483d3f6530cf96fb6->leave($__internal_c0fc02dccf32c39ea4783317c0355b27f2324f45c5f8229483d3f6530cf96fb6_prof);

        
        $__internal_8794eafe55d43c0c647e9f29df8e53e67a1c88e1d6c917aa8d07c1dee2a10f95->leave($__internal_8794eafe55d43c0c647e9f29df8e53e67a1c88e1d6c917aa8d07c1dee2a10f95_prof);

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
