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
        $__internal_331d529521079ee9a6b98221caf19040a0f89c475c9d694fed6fcfe773a778af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_331d529521079ee9a6b98221caf19040a0f89c475c9d694fed6fcfe773a778af->enter($__internal_331d529521079ee9a6b98221caf19040a0f89c475c9d694fed6fcfe773a778af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_7219d70a125f03720fa4f1e927d7dda2cd6b912b41db50c835831d61ab75d3a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7219d70a125f03720fa4f1e927d7dda2cd6b912b41db50c835831d61ab75d3a2->enter($__internal_7219d70a125f03720fa4f1e927d7dda2cd6b912b41db50c835831d61ab75d3a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_331d529521079ee9a6b98221caf19040a0f89c475c9d694fed6fcfe773a778af->leave($__internal_331d529521079ee9a6b98221caf19040a0f89c475c9d694fed6fcfe773a778af_prof);

        
        $__internal_7219d70a125f03720fa4f1e927d7dda2cd6b912b41db50c835831d61ab75d3a2->leave($__internal_7219d70a125f03720fa4f1e927d7dda2cd6b912b41db50c835831d61ab75d3a2_prof);

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
