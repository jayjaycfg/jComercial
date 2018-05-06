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
        $__internal_fa5c0e953e7d3fdf8fdac4d80e1954fa71564374ff55d63f565a280deda80734 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa5c0e953e7d3fdf8fdac4d80e1954fa71564374ff55d63f565a280deda80734->enter($__internal_fa5c0e953e7d3fdf8fdac4d80e1954fa71564374ff55d63f565a280deda80734_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_802c07ef3867942f2bc5428fbaae54b2ecb224f71381d13b3366feb771b10718 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_802c07ef3867942f2bc5428fbaae54b2ecb224f71381d13b3366feb771b10718->enter($__internal_802c07ef3867942f2bc5428fbaae54b2ecb224f71381d13b3366feb771b10718_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_fa5c0e953e7d3fdf8fdac4d80e1954fa71564374ff55d63f565a280deda80734->leave($__internal_fa5c0e953e7d3fdf8fdac4d80e1954fa71564374ff55d63f565a280deda80734_prof);

        
        $__internal_802c07ef3867942f2bc5428fbaae54b2ecb224f71381d13b3366feb771b10718->leave($__internal_802c07ef3867942f2bc5428fbaae54b2ecb224f71381d13b3366feb771b10718_prof);

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
