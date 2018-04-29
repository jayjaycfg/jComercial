<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_22b1ee51354d38bbec455b13ce2f0c8f15d791a7a7830730ca0c6e67d5856847 extends Twig_Template
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
        $__internal_6e984cefcdf923697816cc6ceb0fced7bd5a65c4a48295f175f94ba49772e63d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e984cefcdf923697816cc6ceb0fced7bd5a65c4a48295f175f94ba49772e63d->enter($__internal_6e984cefcdf923697816cc6ceb0fced7bd5a65c4a48295f175f94ba49772e63d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_5767731a73389303c070fa68bc2e654cd46efd901005560051b66f6b8aa7fd4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5767731a73389303c070fa68bc2e654cd46efd901005560051b66f6b8aa7fd4b->enter($__internal_5767731a73389303c070fa68bc2e654cd46efd901005560051b66f6b8aa7fd4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_6e984cefcdf923697816cc6ceb0fced7bd5a65c4a48295f175f94ba49772e63d->leave($__internal_6e984cefcdf923697816cc6ceb0fced7bd5a65c4a48295f175f94ba49772e63d_prof);

        
        $__internal_5767731a73389303c070fa68bc2e654cd46efd901005560051b66f6b8aa7fd4b->leave($__internal_5767731a73389303c070fa68bc2e654cd46efd901005560051b66f6b8aa7fd4b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
", "TwigBundle:Exception:exception.rdf.twig", "/var/www/html/jComercial/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
