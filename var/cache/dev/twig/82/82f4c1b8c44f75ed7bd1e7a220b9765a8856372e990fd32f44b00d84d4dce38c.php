<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_ed3b3db883f01d8d6fe5df2e879bf1fde8ffd89a675275dc3c1b18da7a4ee2df extends Twig_Template
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
        $__internal_400102de6d9e622d501a6dfe7f95cbdea8095b86229ae0e256fd0554edf759b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_400102de6d9e622d501a6dfe7f95cbdea8095b86229ae0e256fd0554edf759b9->enter($__internal_400102de6d9e622d501a6dfe7f95cbdea8095b86229ae0e256fd0554edf759b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_53b4b513735e0d4f6d495abde851b18188c69c23ba2adc0ae2a4c1d33e79edde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53b4b513735e0d4f6d495abde851b18188c69c23ba2adc0ae2a4c1d33e79edde->enter($__internal_53b4b513735e0d4f6d495abde851b18188c69c23ba2adc0ae2a4c1d33e79edde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_400102de6d9e622d501a6dfe7f95cbdea8095b86229ae0e256fd0554edf759b9->leave($__internal_400102de6d9e622d501a6dfe7f95cbdea8095b86229ae0e256fd0554edf759b9_prof);

        
        $__internal_53b4b513735e0d4f6d495abde851b18188c69c23ba2adc0ae2a4c1d33e79edde->leave($__internal_53b4b513735e0d4f6d495abde851b18188c69c23ba2adc0ae2a4c1d33e79edde_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
", "TwigBundle:Exception:exception.css.twig", "/var/www/html/jComercial/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
