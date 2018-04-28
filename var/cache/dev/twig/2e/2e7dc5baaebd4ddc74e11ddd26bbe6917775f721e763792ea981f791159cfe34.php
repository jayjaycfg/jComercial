<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_25f33fd65cdea225244a4fa5fe9ad30cf4bfdf4e2f3452fb019efa2435d6a7cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d373f34601e00226259a621ea1362d2c266643d863e052044fa03c3f868f1459 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d373f34601e00226259a621ea1362d2c266643d863e052044fa03c3f868f1459->enter($__internal_d373f34601e00226259a621ea1362d2c266643d863e052044fa03c3f868f1459_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_aaa66f9f2660303b1b87f3fd3c237abe9b67778e4f66426bd8702572e50d3705 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aaa66f9f2660303b1b87f3fd3c237abe9b67778e4f66426bd8702572e50d3705->enter($__internal_aaa66f9f2660303b1b87f3fd3c237abe9b67778e4f66426bd8702572e50d3705_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_d373f34601e00226259a621ea1362d2c266643d863e052044fa03c3f868f1459->leave($__internal_d373f34601e00226259a621ea1362d2c266643d863e052044fa03c3f868f1459_prof);

        
        $__internal_aaa66f9f2660303b1b87f3fd3c237abe9b67778e4f66426bd8702572e50d3705->leave($__internal_aaa66f9f2660303b1b87f3fd3c237abe9b67778e4f66426bd8702572e50d3705_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_e72b08786a0fd4c078a4d09e9df73f4356952a68707f6bf62d35d1654e999e02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e72b08786a0fd4c078a4d09e9df73f4356952a68707f6bf62d35d1654e999e02->enter($__internal_e72b08786a0fd4c078a4d09e9df73f4356952a68707f6bf62d35d1654e999e02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8b27e4355917d7a4abca8c65aed0996e978db9e14c9a9fb04da1f13bc573c697 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b27e4355917d7a4abca8c65aed0996e978db9e14c9a9fb04da1f13bc573c697->enter($__internal_8b27e4355917d7a4abca8c65aed0996e978db9e14c9a9fb04da1f13bc573c697_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_8b27e4355917d7a4abca8c65aed0996e978db9e14c9a9fb04da1f13bc573c697->leave($__internal_8b27e4355917d7a4abca8c65aed0996e978db9e14c9a9fb04da1f13bc573c697_prof);

        
        $__internal_e72b08786a0fd4c078a4d09e9df73f4356952a68707f6bf62d35d1654e999e02->leave($__internal_e72b08786a0fd4c078a4d09e9df73f4356952a68707f6bf62d35d1654e999e02_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/var/www/html/HeroQuest/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
