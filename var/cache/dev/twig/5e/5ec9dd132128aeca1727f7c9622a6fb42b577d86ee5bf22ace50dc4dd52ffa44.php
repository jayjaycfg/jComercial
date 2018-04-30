<?php

/* factura/edit.html.twig */
class __TwigTemplate_8febbbdf4aaa591eeb057e460117a01555ed8054e9b91e80ee5c5cead1ee8585 extends Twig_Template
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
        $__internal_0db3bd3747fce867c034757ffa74893345bfab571dd5d8e58c42dda230f2d290 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0db3bd3747fce867c034757ffa74893345bfab571dd5d8e58c42dda230f2d290->enter($__internal_0db3bd3747fce867c034757ffa74893345bfab571dd5d8e58c42dda230f2d290_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "factura/edit.html.twig"));

        $__internal_9d203e487ff51f7c427a99d55089289ddcb83fdd67de23dd832e1771b5cd2ae6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d203e487ff51f7c427a99d55089289ddcb83fdd67de23dd832e1771b5cd2ae6->enter($__internal_9d203e487ff51f7c427a99d55089289ddcb83fdd67de23dd832e1771b5cd2ae6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "factura/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0db3bd3747fce867c034757ffa74893345bfab571dd5d8e58c42dda230f2d290->leave($__internal_0db3bd3747fce867c034757ffa74893345bfab571dd5d8e58c42dda230f2d290_prof);

        
        $__internal_9d203e487ff51f7c427a99d55089289ddcb83fdd67de23dd832e1771b5cd2ae6->leave($__internal_9d203e487ff51f7c427a99d55089289ddcb83fdd67de23dd832e1771b5cd2ae6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_747f8f3f0bc169cb851791c5a27bff2e4e651d72d9807caa94536b1ca240967c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_747f8f3f0bc169cb851791c5a27bff2e4e651d72d9807caa94536b1ca240967c->enter($__internal_747f8f3f0bc169cb851791c5a27bff2e4e651d72d9807caa94536b1ca240967c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bf1ddd796876ee82b98b974adecd89a56fadd1973c0b2ca530bdcc50249bc9ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf1ddd796876ee82b98b974adecd89a56fadd1973c0b2ca530bdcc50249bc9ad->enter($__internal_bf1ddd796876ee82b98b974adecd89a56fadd1973c0b2ca530bdcc50249bc9ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-12\">
\t\t\t\t<h1>Editar Factura</h1>
\t\t\t\t\t";
        // line 9
        echo "\t\t\t\t\t\t";
        // line 10
        echo "\t\t\t\t";
        // line 11
        echo "\t\t\t\t\t\t";
        // line 12
        echo "\t\t\t\t\t\t";
        // line 13
        echo "\t\t\t\t\t\t";
        // line 14
        echo "\t\t\t\t";
        // line 15
        echo "\t\t\t\t\t";
        // line 16
        echo "\t\t\t\t";
        echo twig_include($this->env, $context, ":/factura:_form.html.twig");
        echo "
\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_bf1ddd796876ee82b98b974adecd89a56fadd1973c0b2ca530bdcc50249bc9ad->leave($__internal_bf1ddd796876ee82b98b974adecd89a56fadd1973c0b2ca530bdcc50249bc9ad_prof);

        
        $__internal_747f8f3f0bc169cb851791c5a27bff2e4e651d72d9807caa94536b1ca240967c->leave($__internal_747f8f3f0bc169cb851791c5a27bff2e4e651d72d9807caa94536b1ca240967c_prof);

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
        return array (  69 => 16,  67 => 15,  65 => 14,  63 => 13,  61 => 12,  59 => 11,  57 => 10,  55 => 9,  49 => 4,  40 => 3,  11 => 1,);
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
\t\t\t\t\t{#{{ form_start(form) }}\t\t\t\t#}
\t\t\t\t\t\t{#{{ form_errors(form) }}#}
\t\t\t\t{##}
\t\t\t\t\t\t{#{{ form_row(form.importeCuc) }}#}
\t\t\t\t\t\t{#{{ form_row(form.importeCup) }}#}
\t\t\t\t\t\t{#{{ form_row(form.contratos) }}#}
\t\t\t\t{#<button type=\"submit\" class=\"btn btn-primary\" formnovalidate>Añadir</button>#}
\t\t\t\t\t{#{{ form_end(form) }}#}
\t\t\t\t{{ include(':/factura:_form.html.twig') }}
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}

", "factura/edit.html.twig", "/var/www/html/jComercial/app/Resources/views/factura/edit.html.twig");
    }
}
