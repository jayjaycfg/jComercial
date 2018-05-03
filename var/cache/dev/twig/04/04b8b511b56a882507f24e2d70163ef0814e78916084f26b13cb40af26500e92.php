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
        $__internal_95bf5b1b987953af82c40000d96390135be2eb367d91edff985a7536e9bc377b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95bf5b1b987953af82c40000d96390135be2eb367d91edff985a7536e9bc377b->enter($__internal_95bf5b1b987953af82c40000d96390135be2eb367d91edff985a7536e9bc377b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_1355946540774371a8c5f481b893a3b585e01731cc300bf9f75535c24ab8eed1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1355946540774371a8c5f481b893a3b585e01731cc300bf9f75535c24ab8eed1->enter($__internal_1355946540774371a8c5f481b893a3b585e01731cc300bf9f75535c24ab8eed1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_95bf5b1b987953af82c40000d96390135be2eb367d91edff985a7536e9bc377b->leave($__internal_95bf5b1b987953af82c40000d96390135be2eb367d91edff985a7536e9bc377b_prof);

        
        $__internal_1355946540774371a8c5f481b893a3b585e01731cc300bf9f75535c24ab8eed1->leave($__internal_1355946540774371a8c5f481b893a3b585e01731cc300bf9f75535c24ab8eed1_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_cf062b9e0500b15296e1c909b139f45bc3b889bf9c1ed6239b5b14fbba152558 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf062b9e0500b15296e1c909b139f45bc3b889bf9c1ed6239b5b14fbba152558->enter($__internal_cf062b9e0500b15296e1c909b139f45bc3b889bf9c1ed6239b5b14fbba152558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c96a41a871447d904c2b907ceeccde6e0ac9ec1673004dbf24bbeaf6ffc6b86e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c96a41a871447d904c2b907ceeccde6e0ac9ec1673004dbf24bbeaf6ffc6b86e->enter($__internal_c96a41a871447d904c2b907ceeccde6e0ac9ec1673004dbf24bbeaf6ffc6b86e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_c96a41a871447d904c2b907ceeccde6e0ac9ec1673004dbf24bbeaf6ffc6b86e->leave($__internal_c96a41a871447d904c2b907ceeccde6e0ac9ec1673004dbf24bbeaf6ffc6b86e_prof);

        
        $__internal_cf062b9e0500b15296e1c909b139f45bc3b889bf9c1ed6239b5b14fbba152558->leave($__internal_cf062b9e0500b15296e1c909b139f45bc3b889bf9c1ed6239b5b14fbba152558_prof);

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
