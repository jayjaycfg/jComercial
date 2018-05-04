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
        $__internal_ba4f942e79a11a1e36076a8352fb6e587afdaba1b5caedf812522d6e453f7ee6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba4f942e79a11a1e36076a8352fb6e587afdaba1b5caedf812522d6e453f7ee6->enter($__internal_ba4f942e79a11a1e36076a8352fb6e587afdaba1b5caedf812522d6e453f7ee6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_9289a6b91f9e2d1501dfe2a998967d070e8f2cd60f2dbdc6979c14f976a0cd73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9289a6b91f9e2d1501dfe2a998967d070e8f2cd60f2dbdc6979c14f976a0cd73->enter($__internal_9289a6b91f9e2d1501dfe2a998967d070e8f2cd60f2dbdc6979c14f976a0cd73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_ba4f942e79a11a1e36076a8352fb6e587afdaba1b5caedf812522d6e453f7ee6->leave($__internal_ba4f942e79a11a1e36076a8352fb6e587afdaba1b5caedf812522d6e453f7ee6_prof);

        
        $__internal_9289a6b91f9e2d1501dfe2a998967d070e8f2cd60f2dbdc6979c14f976a0cd73->leave($__internal_9289a6b91f9e2d1501dfe2a998967d070e8f2cd60f2dbdc6979c14f976a0cd73_prof);

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
