<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_693ce7bb96d9146ba67ab268f7a81cdf4f1608e56b661641748f705c7b7a2e1b extends Twig_Template
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
        $__internal_9b9981fa1f000630ca7ad51ba900132105352088a6b8d5aad2a338f9d69f093d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b9981fa1f000630ca7ad51ba900132105352088a6b8d5aad2a338f9d69f093d->enter($__internal_9b9981fa1f000630ca7ad51ba900132105352088a6b8d5aad2a338f9d69f093d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_4a9f91dad06d020ac80a7a0a13a08403f320737453574985a569f83cb1e28bfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a9f91dad06d020ac80a7a0a13a08403f320737453574985a569f83cb1e28bfb->enter($__internal_4a9f91dad06d020ac80a7a0a13a08403f320737453574985a569f83cb1e28bfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_9b9981fa1f000630ca7ad51ba900132105352088a6b8d5aad2a338f9d69f093d->leave($__internal_9b9981fa1f000630ca7ad51ba900132105352088a6b8d5aad2a338f9d69f093d_prof);

        
        $__internal_4a9f91dad06d020ac80a7a0a13a08403f320737453574985a569f83cb1e28bfb->leave($__internal_4a9f91dad06d020ac80a7a0a13a08403f320737453574985a569f83cb1e28bfb_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_6fc12854a4ecfac08292da29c1a0336d628486fbd8318c541a183679d06a3479 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fc12854a4ecfac08292da29c1a0336d628486fbd8318c541a183679d06a3479->enter($__internal_6fc12854a4ecfac08292da29c1a0336d628486fbd8318c541a183679d06a3479_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_16170a26a34c244340a688f9e6e56d817ece60aaebb1065737f805ddacb81114 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16170a26a34c244340a688f9e6e56d817ece60aaebb1065737f805ddacb81114->enter($__internal_16170a26a34c244340a688f9e6e56d817ece60aaebb1065737f805ddacb81114_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_16170a26a34c244340a688f9e6e56d817ece60aaebb1065737f805ddacb81114->leave($__internal_16170a26a34c244340a688f9e6e56d817ece60aaebb1065737f805ddacb81114_prof);

        
        $__internal_6fc12854a4ecfac08292da29c1a0336d628486fbd8318c541a183679d06a3479->leave($__internal_6fc12854a4ecfac08292da29c1a0336d628486fbd8318c541a183679d06a3479_prof);

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
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/var/www/html/jComercial/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
