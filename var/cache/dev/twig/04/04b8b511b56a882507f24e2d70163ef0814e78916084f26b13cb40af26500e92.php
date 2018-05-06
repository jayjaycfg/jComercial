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
        $__internal_60277a4a765f6050a7b122dc762963ea1ac3d9a4ea3439d95e14100ef44a6c5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60277a4a765f6050a7b122dc762963ea1ac3d9a4ea3439d95e14100ef44a6c5c->enter($__internal_60277a4a765f6050a7b122dc762963ea1ac3d9a4ea3439d95e14100ef44a6c5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_f258b53e8652b2929883b3e27eaa7b0248290df163de16a26b9ccb16503dd5f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f258b53e8652b2929883b3e27eaa7b0248290df163de16a26b9ccb16503dd5f7->enter($__internal_f258b53e8652b2929883b3e27eaa7b0248290df163de16a26b9ccb16503dd5f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_60277a4a765f6050a7b122dc762963ea1ac3d9a4ea3439d95e14100ef44a6c5c->leave($__internal_60277a4a765f6050a7b122dc762963ea1ac3d9a4ea3439d95e14100ef44a6c5c_prof);

        
        $__internal_f258b53e8652b2929883b3e27eaa7b0248290df163de16a26b9ccb16503dd5f7->leave($__internal_f258b53e8652b2929883b3e27eaa7b0248290df163de16a26b9ccb16503dd5f7_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_2d35c83e9d66190eaebd1972d039d68c7dd5cabf9d25e66cf1c324d079b72666 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d35c83e9d66190eaebd1972d039d68c7dd5cabf9d25e66cf1c324d079b72666->enter($__internal_2d35c83e9d66190eaebd1972d039d68c7dd5cabf9d25e66cf1c324d079b72666_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1d2d32e03b6327454ab04f502d9a3366e16e8e21b242e91addb6fe4956f18ef4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d2d32e03b6327454ab04f502d9a3366e16e8e21b242e91addb6fe4956f18ef4->enter($__internal_1d2d32e03b6327454ab04f502d9a3366e16e8e21b242e91addb6fe4956f18ef4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_1d2d32e03b6327454ab04f502d9a3366e16e8e21b242e91addb6fe4956f18ef4->leave($__internal_1d2d32e03b6327454ab04f502d9a3366e16e8e21b242e91addb6fe4956f18ef4_prof);

        
        $__internal_2d35c83e9d66190eaebd1972d039d68c7dd5cabf9d25e66cf1c324d079b72666->leave($__internal_2d35c83e9d66190eaebd1972d039d68c7dd5cabf9d25e66cf1c324d079b72666_prof);

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
