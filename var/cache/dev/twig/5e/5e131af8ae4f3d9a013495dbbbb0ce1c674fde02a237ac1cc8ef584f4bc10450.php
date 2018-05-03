<?php

/* :proveedor:new.html.twig */
class __TwigTemplate_25a3a0572fc6f2d72c4557f7de4722721a0aa2a4d6b23e8b3a957b207dc221a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":cliente:FormLayout.html.twig", ":proveedor:new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return ":cliente:FormLayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b8364f17d7a5ff881acbe5426e64295b20183400b6a7980c6d78c2e3833455a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8364f17d7a5ff881acbe5426e64295b20183400b6a7980c6d78c2e3833455a2->enter($__internal_b8364f17d7a5ff881acbe5426e64295b20183400b6a7980c6d78c2e3833455a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":proveedor:new.html.twig"));

        $__internal_df50b5782c9ac1cb73946b5619e9bf135874326ac06e55a21f7692dbd9b77b8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df50b5782c9ac1cb73946b5619e9bf135874326ac06e55a21f7692dbd9b77b8c->enter($__internal_df50b5782c9ac1cb73946b5619e9bf135874326ac06e55a21f7692dbd9b77b8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":proveedor:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b8364f17d7a5ff881acbe5426e64295b20183400b6a7980c6d78c2e3833455a2->leave($__internal_b8364f17d7a5ff881acbe5426e64295b20183400b6a7980c6d78c2e3833455a2_prof);

        
        $__internal_df50b5782c9ac1cb73946b5619e9bf135874326ac06e55a21f7692dbd9b77b8c->leave($__internal_df50b5782c9ac1cb73946b5619e9bf135874326ac06e55a21f7692dbd9b77b8c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e8cc3d2fe51c9c3aa957b1868fa9632375f8d111071145869be9337c2b5a07c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8cc3d2fe51c9c3aa957b1868fa9632375f8d111071145869be9337c2b5a07c9->enter($__internal_e8cc3d2fe51c9c3aa957b1868fa9632375f8d111071145869be9337c2b5a07c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9ba6cb55fb56a33b04136dd8bd256a28a434088d3e231b3e77bcde3c7a144f09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ba6cb55fb56a33b04136dd8bd256a28a434088d3e231b3e77bcde3c7a144f09->enter($__internal_9ba6cb55fb56a33b04136dd8bd256a28a434088d3e231b3e77bcde3c7a144f09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-12\">
\t\t\t\t<h1>Nuevo Contrato con proveedor</h1>
\t\t\t\t";
        // line 8
        echo twig_include($this->env, $context, ":/proveedor:_form.html.twig");
        echo "
\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_9ba6cb55fb56a33b04136dd8bd256a28a434088d3e231b3e77bcde3c7a144f09->leave($__internal_9ba6cb55fb56a33b04136dd8bd256a28a434088d3e231b3e77bcde3c7a144f09_prof);

        
        $__internal_e8cc3d2fe51c9c3aa957b1868fa9632375f8d111071145869be9337c2b5a07c9->leave($__internal_e8cc3d2fe51c9c3aa957b1868fa9632375f8d111071145869be9337c2b5a07c9_prof);

    }

    public function getTemplateName()
    {
        return ":proveedor:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 8,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends ':cliente:FormLayout.html.twig' %}

{% block body %}
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-12\">
\t\t\t\t<h1>Nuevo Contrato con proveedor</h1>
\t\t\t\t{{ include(':/proveedor:_form.html.twig') }}
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}", ":proveedor:new.html.twig", "/var/www/html/jComercial/app/Resources/views/proveedor/new.html.twig");
    }
}
