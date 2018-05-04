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
        $__internal_8d94a8abf4e3b0412398c9fa11930210082f41f281b78f1291fd68cd4e388bf7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d94a8abf4e3b0412398c9fa11930210082f41f281b78f1291fd68cd4e388bf7->enter($__internal_8d94a8abf4e3b0412398c9fa11930210082f41f281b78f1291fd68cd4e388bf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_6c8e4f9ec960da612d71df459c318941f081d6a9de0f05e7a82bfe1f16643677 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c8e4f9ec960da612d71df459c318941f081d6a9de0f05e7a82bfe1f16643677->enter($__internal_6c8e4f9ec960da612d71df459c318941f081d6a9de0f05e7a82bfe1f16643677_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_8d94a8abf4e3b0412398c9fa11930210082f41f281b78f1291fd68cd4e388bf7->leave($__internal_8d94a8abf4e3b0412398c9fa11930210082f41f281b78f1291fd68cd4e388bf7_prof);

        
        $__internal_6c8e4f9ec960da612d71df459c318941f081d6a9de0f05e7a82bfe1f16643677->leave($__internal_6c8e4f9ec960da612d71df459c318941f081d6a9de0f05e7a82bfe1f16643677_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_54510055ce894c433a4552765f832c2178940f4ea4cfabd8fca32a5b80a7a7b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54510055ce894c433a4552765f832c2178940f4ea4cfabd8fca32a5b80a7a7b9->enter($__internal_54510055ce894c433a4552765f832c2178940f4ea4cfabd8fca32a5b80a7a7b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c8604671861d39908c1de33d7e1452c25adf6470ce0ca165ccb3bd9cd9f576fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8604671861d39908c1de33d7e1452c25adf6470ce0ca165ccb3bd9cd9f576fb->enter($__internal_c8604671861d39908c1de33d7e1452c25adf6470ce0ca165ccb3bd9cd9f576fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_c8604671861d39908c1de33d7e1452c25adf6470ce0ca165ccb3bd9cd9f576fb->leave($__internal_c8604671861d39908c1de33d7e1452c25adf6470ce0ca165ccb3bd9cd9f576fb_prof);

        
        $__internal_54510055ce894c433a4552765f832c2178940f4ea4cfabd8fca32a5b80a7a7b9->leave($__internal_54510055ce894c433a4552765f832c2178940f4ea4cfabd8fca32a5b80a7a7b9_prof);

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
