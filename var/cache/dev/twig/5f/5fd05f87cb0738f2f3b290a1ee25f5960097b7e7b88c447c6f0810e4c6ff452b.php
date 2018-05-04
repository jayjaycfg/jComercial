<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_9c85e1c6dc6cd7fd4d29b0657daf3d563e349ecb6f696cf03a9b48e4804332a5 extends Twig_Template
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
        $__internal_aa652df35df902db874d62894bfb5e18df9ce9a1824e958c21a436f0443efd13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa652df35df902db874d62894bfb5e18df9ce9a1824e958c21a436f0443efd13->enter($__internal_aa652df35df902db874d62894bfb5e18df9ce9a1824e958c21a436f0443efd13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_cc9f3141d2f51a53815e448a1ce9ece3a1afa578e97c6ac2e9c906472be2e3d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc9f3141d2f51a53815e448a1ce9ece3a1afa578e97c6ac2e9c906472be2e3d1->enter($__internal_cc9f3141d2f51a53815e448a1ce9ece3a1afa578e97c6ac2e9c906472be2e3d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_aa652df35df902db874d62894bfb5e18df9ce9a1824e958c21a436f0443efd13->leave($__internal_aa652df35df902db874d62894bfb5e18df9ce9a1824e958c21a436f0443efd13_prof);

        
        $__internal_cc9f3141d2f51a53815e448a1ce9ece3a1afa578e97c6ac2e9c906472be2e3d1->leave($__internal_cc9f3141d2f51a53815e448a1ce9ece3a1afa578e97c6ac2e9c906472be2e3d1_prof);

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
", "TwigBundle:Exception:error.rdf.twig", "/var/www/html/jComercial/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
