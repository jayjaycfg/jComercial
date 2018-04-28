<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_f67d2fc2f7a2285ee9e986e046017b1d8e54b71d0756e0ffdddbf5be77ea14a4 extends Twig_Template
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
        $__internal_89e18b15f99ee3c87d13e40e34337a65a0b41902455135cf32c5b7b0c30689e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89e18b15f99ee3c87d13e40e34337a65a0b41902455135cf32c5b7b0c30689e9->enter($__internal_89e18b15f99ee3c87d13e40e34337a65a0b41902455135cf32c5b7b0c30689e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_330d8a733eff1e7a75d466c693ac43ea13caf840bb00925904779451a5641d3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_330d8a733eff1e7a75d466c693ac43ea13caf840bb00925904779451a5641d3a->enter($__internal_330d8a733eff1e7a75d466c693ac43ea13caf840bb00925904779451a5641d3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_89e18b15f99ee3c87d13e40e34337a65a0b41902455135cf32c5b7b0c30689e9->leave($__internal_89e18b15f99ee3c87d13e40e34337a65a0b41902455135cf32c5b7b0c30689e9_prof);

        
        $__internal_330d8a733eff1e7a75d466c693ac43ea13caf840bb00925904779451a5641d3a->leave($__internal_330d8a733eff1e7a75d466c693ac43ea13caf840bb00925904779451a5641d3a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.rdf.twig", "/var/www/html/HeroQuest/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
