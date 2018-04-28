<?php

/* :main:homepage.html.twig */
class __TwigTemplate_d2eb7e5f36a8babac9c81666981adc3569ec78476f364e8815ba98409de78bd0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":main:homepage.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7d4fb837bb1b933e17201a8234c1ea0b99ad4e2849e1f2fd60e10a8fdfe643aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d4fb837bb1b933e17201a8234c1ea0b99ad4e2849e1f2fd60e10a8fdfe643aa->enter($__internal_7d4fb837bb1b933e17201a8234c1ea0b99ad4e2849e1f2fd60e10a8fdfe643aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":main:homepage.html.twig"));

        $__internal_d58a1f44ccaff770f44299c106c24c15a9ecd71a01fcf4265861241f8c237073 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d58a1f44ccaff770f44299c106c24c15a9ecd71a01fcf4265861241f8c237073->enter($__internal_d58a1f44ccaff770f44299c106c24c15a9ecd71a01fcf4265861241f8c237073_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":main:homepage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d4fb837bb1b933e17201a8234c1ea0b99ad4e2849e1f2fd60e10a8fdfe643aa->leave($__internal_7d4fb837bb1b933e17201a8234c1ea0b99ad4e2849e1f2fd60e10a8fdfe643aa_prof);

        
        $__internal_d58a1f44ccaff770f44299c106c24c15a9ecd71a01fcf4265861241f8c237073->leave($__internal_d58a1f44ccaff770f44299c106c24c15a9ecd71a01fcf4265861241f8c237073_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f0de001299ca6c9f7d7277f032062a35f7c2f01e23df20a9d73f1bed88342616 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0de001299ca6c9f7d7277f032062a35f7c2f01e23df20a9d73f1bed88342616->enter($__internal_f0de001299ca6c9f7d7277f032062a35f7c2f01e23df20a9d73f1bed88342616_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_14271f2efa61c8f491fe1567ab2adfb101291de75daf322bb8cd1c06cb0e7088 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14271f2efa61c8f491fe1567ab2adfb101291de75daf322bb8cd1c06cb0e7088->enter($__internal_14271f2efa61c8f491fe1567ab2adfb101291de75daf322bb8cd1c06cb0e7088_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<h1 class=\"page-header text-center\">Bienvenido</h1>
";
        
        $__internal_14271f2efa61c8f491fe1567ab2adfb101291de75daf322bb8cd1c06cb0e7088->leave($__internal_14271f2efa61c8f491fe1567ab2adfb101291de75daf322bb8cd1c06cb0e7088_prof);

        
        $__internal_f0de001299ca6c9f7d7277f032062a35f7c2f01e23df20a9d73f1bed88342616->leave($__internal_f0de001299ca6c9f7d7277f032062a35f7c2f01e23df20a9d73f1bed88342616_prof);

    }

    public function getTemplateName()
    {
        return ":main:homepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
\t<h1 class=\"page-header text-center\">Bienvenido</h1>
{% endblock %}", ":main:homepage.html.twig", "/var/www/html/HeroQuest/app/Resources/views/main/homepage.html.twig");
    }
}
