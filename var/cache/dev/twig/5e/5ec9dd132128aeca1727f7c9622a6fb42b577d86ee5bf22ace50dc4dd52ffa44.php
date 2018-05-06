<?php

/* :factura:edit.html.twig */
class __TwigTemplate_8febbbdf4aaa591eeb057e460117a01555ed8054e9b91e80ee5c5cead1ee8585 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":cliente:FormLayout.html.twig", ":factura:edit.html.twig", 1);
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
        $__internal_683b72d53bebb790dd3673b6fd594ed43dbbf7f566914b554e8e78b0559f90b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_683b72d53bebb790dd3673b6fd594ed43dbbf7f566914b554e8e78b0559f90b0->enter($__internal_683b72d53bebb790dd3673b6fd594ed43dbbf7f566914b554e8e78b0559f90b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":factura:edit.html.twig"));

        $__internal_ba09b56d77e2bfdee660464f4704526e6972cd98f01efc8364f5c73ff36f7a2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba09b56d77e2bfdee660464f4704526e6972cd98f01efc8364f5c73ff36f7a2c->enter($__internal_ba09b56d77e2bfdee660464f4704526e6972cd98f01efc8364f5c73ff36f7a2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":factura:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_683b72d53bebb790dd3673b6fd594ed43dbbf7f566914b554e8e78b0559f90b0->leave($__internal_683b72d53bebb790dd3673b6fd594ed43dbbf7f566914b554e8e78b0559f90b0_prof);

        
        $__internal_ba09b56d77e2bfdee660464f4704526e6972cd98f01efc8364f5c73ff36f7a2c->leave($__internal_ba09b56d77e2bfdee660464f4704526e6972cd98f01efc8364f5c73ff36f7a2c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fb20a832cad059ab1e18853a09098f291466a6f750a7c40e757d28e727b3b2ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb20a832cad059ab1e18853a09098f291466a6f750a7c40e757d28e727b3b2ca->enter($__internal_fb20a832cad059ab1e18853a09098f291466a6f750a7c40e757d28e727b3b2ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6d9ffdc43806208099dd428af539aea5f2ebc14497a14eb87c527ee8ae93b755 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d9ffdc43806208099dd428af539aea5f2ebc14497a14eb87c527ee8ae93b755->enter($__internal_6d9ffdc43806208099dd428af539aea5f2ebc14497a14eb87c527ee8ae93b755_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6d9ffdc43806208099dd428af539aea5f2ebc14497a14eb87c527ee8ae93b755->leave($__internal_6d9ffdc43806208099dd428af539aea5f2ebc14497a14eb87c527ee8ae93b755_prof);

        
        $__internal_fb20a832cad059ab1e18853a09098f291466a6f750a7c40e757d28e727b3b2ca->leave($__internal_fb20a832cad059ab1e18853a09098f291466a6f750a7c40e757d28e727b3b2ca_prof);

    }

    public function getTemplateName()
    {
        return ":factura:edit.html.twig";
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
\t\t\t\t<h1>Editar Factura</h1>
\t\t\t\t{{ include(':/factura:_form.html.twig') }}
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}

", ":factura:edit.html.twig", "/var/www/html/jComercial/app/Resources/views/factura/edit.html.twig");
    }
}
