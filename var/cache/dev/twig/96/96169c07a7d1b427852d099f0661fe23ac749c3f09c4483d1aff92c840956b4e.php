<?php

/* factura/edit.html.twig */
class __TwigTemplate_b0650a46e658f33b8a4755bb4fbe0b77dd72fcbd3d464b77549de1b67ceca616 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "factura/edit.html.twig", 1);
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
        $__internal_6c6193d999e370a22fe5d247e62abd1dafbfc924dc3d9946944c39067f4a8182 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c6193d999e370a22fe5d247e62abd1dafbfc924dc3d9946944c39067f4a8182->enter($__internal_6c6193d999e370a22fe5d247e62abd1dafbfc924dc3d9946944c39067f4a8182_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "factura/edit.html.twig"));

        $__internal_8f4c15af1a3b8388a0f0f2ec8cd5f71910314646975957ff9c09474e92f94e48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f4c15af1a3b8388a0f0f2ec8cd5f71910314646975957ff9c09474e92f94e48->enter($__internal_8f4c15af1a3b8388a0f0f2ec8cd5f71910314646975957ff9c09474e92f94e48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "factura/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c6193d999e370a22fe5d247e62abd1dafbfc924dc3d9946944c39067f4a8182->leave($__internal_6c6193d999e370a22fe5d247e62abd1dafbfc924dc3d9946944c39067f4a8182_prof);

        
        $__internal_8f4c15af1a3b8388a0f0f2ec8cd5f71910314646975957ff9c09474e92f94e48->leave($__internal_8f4c15af1a3b8388a0f0f2ec8cd5f71910314646975957ff9c09474e92f94e48_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_51b6c36d02c875bfd483640592d86fae722ed2569fbdb7c3d58483e9db2970ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51b6c36d02c875bfd483640592d86fae722ed2569fbdb7c3d58483e9db2970ed->enter($__internal_51b6c36d02c875bfd483640592d86fae722ed2569fbdb7c3d58483e9db2970ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_72db12b4d6708be02c38f2b081e13eced0c3cc77ca8f94e31a4248735c86859d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72db12b4d6708be02c38f2b081e13eced0c3cc77ca8f94e31a4248735c86859d->enter($__internal_72db12b4d6708be02c38f2b081e13eced0c3cc77ca8f94e31a4248735c86859d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-12\">
\t\t\t\t<h1>Editar Factura</h1>
\t\t\t\t";
        // line 8
        echo twig_include($this->env, $context, ":/factura:_form.html.twig");
        echo "
\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_72db12b4d6708be02c38f2b081e13eced0c3cc77ca8f94e31a4248735c86859d->leave($__internal_72db12b4d6708be02c38f2b081e13eced0c3cc77ca8f94e31a4248735c86859d_prof);

        
        $__internal_51b6c36d02c875bfd483640592d86fae722ed2569fbdb7c3d58483e9db2970ed->leave($__internal_51b6c36d02c875bfd483640592d86fae722ed2569fbdb7c3d58483e9db2970ed_prof);

    }

    public function getTemplateName()
    {
        return "factura/edit.html.twig";
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
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-12\">
\t\t\t\t<h1>Editar Factura</h1>
\t\t\t\t{{ include(':/factura:_form.html.twig') }}
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}

", "factura/edit.html.twig", "/var/www/html/jComercial/app/Resources/views/factura/edit.html.twig");
    }
}
