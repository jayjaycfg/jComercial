<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_ac4d899aa45c8e04f11a0a37f3a572a06d5eda37db28656b55197b0a03d66249 extends Twig_Template
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
        $__internal_fe60f8ed7d0f5e112eb53850a0739a3cbaa968b771ca3372bd60f02c58a515de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe60f8ed7d0f5e112eb53850a0739a3cbaa968b771ca3372bd60f02c58a515de->enter($__internal_fe60f8ed7d0f5e112eb53850a0739a3cbaa968b771ca3372bd60f02c58a515de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_65d2b3c49a5de4a1ef8d1a93efb37aeaee6b5717695d8710d08ccad8ce58631d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65d2b3c49a5de4a1ef8d1a93efb37aeaee6b5717695d8710d08ccad8ce58631d->enter($__internal_65d2b3c49a5de4a1ef8d1a93efb37aeaee6b5717695d8710d08ccad8ce58631d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_fe60f8ed7d0f5e112eb53850a0739a3cbaa968b771ca3372bd60f02c58a515de->leave($__internal_fe60f8ed7d0f5e112eb53850a0739a3cbaa968b771ca3372bd60f02c58a515de_prof);

        
        $__internal_65d2b3c49a5de4a1ef8d1a93efb37aeaee6b5717695d8710d08ccad8ce58631d->leave($__internal_65d2b3c49a5de4a1ef8d1a93efb37aeaee6b5717695d8710d08ccad8ce58631d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "/var/www/html/jComercial/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
