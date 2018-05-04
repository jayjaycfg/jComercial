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
        $__internal_b8ea0795f30176e1af942c9e7ab4516ffafce602f3fd8b2c74e599bb1fe9473f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8ea0795f30176e1af942c9e7ab4516ffafce602f3fd8b2c74e599bb1fe9473f->enter($__internal_b8ea0795f30176e1af942c9e7ab4516ffafce602f3fd8b2c74e599bb1fe9473f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":proveedor:edit.html.twig"));

        $__internal_1bbc216be5f12e53cad45c744db6c7e21f17c981b577ac89c20d8c5805c9d1ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bbc216be5f12e53cad45c744db6c7e21f17c981b577ac89c20d8c5805c9d1ff->enter($__internal_1bbc216be5f12e53cad45c744db6c7e21f17c981b577ac89c20d8c5805c9d1ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":proveedor:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b8ea0795f30176e1af942c9e7ab4516ffafce602f3fd8b2c74e599bb1fe9473f->leave($__internal_b8ea0795f30176e1af942c9e7ab4516ffafce602f3fd8b2c74e599bb1fe9473f_prof);

        
        $__internal_1bbc216be5f12e53cad45c744db6c7e21f17c981b577ac89c20d8c5805c9d1ff->leave($__internal_1bbc216be5f12e53cad45c744db6c7e21f17c981b577ac89c20d8c5805c9d1ff_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_78b9d6bacab181bfd7d22df404ccd62d7fe14fff933a0efe1f1cb2f50b1c71c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78b9d6bacab181bfd7d22df404ccd62d7fe14fff933a0efe1f1cb2f50b1c71c4->enter($__internal_78b9d6bacab181bfd7d22df404ccd62d7fe14fff933a0efe1f1cb2f50b1c71c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_db58cab117703e2cd4df46487d44c7f7fd89fee0b707bde4f38aa60245553bd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db58cab117703e2cd4df46487d44c7f7fd89fee0b707bde4f38aa60245553bd7->enter($__internal_db58cab117703e2cd4df46487d44c7f7fd89fee0b707bde4f38aa60245553bd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_db58cab117703e2cd4df46487d44c7f7fd89fee0b707bde4f38aa60245553bd7->leave($__internal_db58cab117703e2cd4df46487d44c7f7fd89fee0b707bde4f38aa60245553bd7_prof);

        
        $__internal_78b9d6bacab181bfd7d22df404ccd62d7fe14fff933a0efe1f1cb2f50b1c71c4->leave($__internal_78b9d6bacab181bfd7d22df404ccd62d7fe14fff933a0efe1f1cb2f50b1c71c4_prof);

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
