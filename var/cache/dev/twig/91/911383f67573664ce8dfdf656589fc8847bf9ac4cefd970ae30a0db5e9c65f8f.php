<?php

/* :proveedor:edit.html.twig */
class __TwigTemplate_4e209be9e26b7e399ff03aaed69212b4621278b9bbe15f310bce83a858daf947 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":cliente:FormLayout.html.twig", ":proveedor:edit.html.twig", 1);
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
        $__internal_e61106ceb5039763e14bb37b924db957ceb4a216e44231315fcd6c58f9e0f744 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e61106ceb5039763e14bb37b924db957ceb4a216e44231315fcd6c58f9e0f744->enter($__internal_e61106ceb5039763e14bb37b924db957ceb4a216e44231315fcd6c58f9e0f744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":proveedor:edit.html.twig"));

        $__internal_48de479bfe483678674fa35fe7051073d2b097a35c36fefbc3e01aacb6ad6c69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48de479bfe483678674fa35fe7051073d2b097a35c36fefbc3e01aacb6ad6c69->enter($__internal_48de479bfe483678674fa35fe7051073d2b097a35c36fefbc3e01aacb6ad6c69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":proveedor:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e61106ceb5039763e14bb37b924db957ceb4a216e44231315fcd6c58f9e0f744->leave($__internal_e61106ceb5039763e14bb37b924db957ceb4a216e44231315fcd6c58f9e0f744_prof);

        
        $__internal_48de479bfe483678674fa35fe7051073d2b097a35c36fefbc3e01aacb6ad6c69->leave($__internal_48de479bfe483678674fa35fe7051073d2b097a35c36fefbc3e01aacb6ad6c69_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d66d3de475a37fa9dd8b89edebfe57678cac00d2d2b1054b38c49725996d09f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d66d3de475a37fa9dd8b89edebfe57678cac00d2d2b1054b38c49725996d09f2->enter($__internal_d66d3de475a37fa9dd8b89edebfe57678cac00d2d2b1054b38c49725996d09f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d05c82b21aacf656fde36995a6f500b8a462980bcfbe4effafeec1cb6c722739 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d05c82b21aacf656fde36995a6f500b8a462980bcfbe4effafeec1cb6c722739->enter($__internal_d05c82b21aacf656fde36995a6f500b8a462980bcfbe4effafeec1cb6c722739_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d05c82b21aacf656fde36995a6f500b8a462980bcfbe4effafeec1cb6c722739->leave($__internal_d05c82b21aacf656fde36995a6f500b8a462980bcfbe4effafeec1cb6c722739_prof);

        
        $__internal_d66d3de475a37fa9dd8b89edebfe57678cac00d2d2b1054b38c49725996d09f2->leave($__internal_d66d3de475a37fa9dd8b89edebfe57678cac00d2d2b1054b38c49725996d09f2_prof);

    }

    public function getTemplateName()
    {
        return ":proveedor:edit.html.twig";
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
{% endblock %}", ":proveedor:edit.html.twig", "/var/www/html/jComercial/app/Resources/views/proveedor/edit.html.twig");
    }
}
