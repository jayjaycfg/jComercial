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
        $__internal_083a0fa7e448623583ba3d9426edc78c2d9748ae9333d9cb752bf0d29a2e83ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_083a0fa7e448623583ba3d9426edc78c2d9748ae9333d9cb752bf0d29a2e83ba->enter($__internal_083a0fa7e448623583ba3d9426edc78c2d9748ae9333d9cb752bf0d29a2e83ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_30ec17c12007e0c8a28b220935a7603fd9d1c53618127496a4fcdbcc15d17bf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30ec17c12007e0c8a28b220935a7603fd9d1c53618127496a4fcdbcc15d17bf8->enter($__internal_30ec17c12007e0c8a28b220935a7603fd9d1c53618127496a4fcdbcc15d17bf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_083a0fa7e448623583ba3d9426edc78c2d9748ae9333d9cb752bf0d29a2e83ba->leave($__internal_083a0fa7e448623583ba3d9426edc78c2d9748ae9333d9cb752bf0d29a2e83ba_prof);

        
        $__internal_30ec17c12007e0c8a28b220935a7603fd9d1c53618127496a4fcdbcc15d17bf8->leave($__internal_30ec17c12007e0c8a28b220935a7603fd9d1c53618127496a4fcdbcc15d17bf8_prof);

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
