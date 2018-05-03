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
        $__internal_e3d27d6567c85c156fe4cb47aefdf7a8a26f5aa1535f99d63b6e257c6da78f03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3d27d6567c85c156fe4cb47aefdf7a8a26f5aa1535f99d63b6e257c6da78f03->enter($__internal_e3d27d6567c85c156fe4cb47aefdf7a8a26f5aa1535f99d63b6e257c6da78f03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":factura:edit.html.twig"));

        $__internal_7dac2ec087ad688bb9961f3f53195d591c0ca92231125c5696dcad8af89820ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7dac2ec087ad688bb9961f3f53195d591c0ca92231125c5696dcad8af89820ad->enter($__internal_7dac2ec087ad688bb9961f3f53195d591c0ca92231125c5696dcad8af89820ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":factura:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e3d27d6567c85c156fe4cb47aefdf7a8a26f5aa1535f99d63b6e257c6da78f03->leave($__internal_e3d27d6567c85c156fe4cb47aefdf7a8a26f5aa1535f99d63b6e257c6da78f03_prof);

        
        $__internal_7dac2ec087ad688bb9961f3f53195d591c0ca92231125c5696dcad8af89820ad->leave($__internal_7dac2ec087ad688bb9961f3f53195d591c0ca92231125c5696dcad8af89820ad_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d675229608e7bab749b8107e08ae487c5f42866cd1a979fc14d82c6ace9930e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d675229608e7bab749b8107e08ae487c5f42866cd1a979fc14d82c6ace9930e7->enter($__internal_d675229608e7bab749b8107e08ae487c5f42866cd1a979fc14d82c6ace9930e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a681197b3b50d4a048606baf233d7efec42cf87507527ec692d670878c9998d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a681197b3b50d4a048606baf233d7efec42cf87507527ec692d670878c9998d2->enter($__internal_a681197b3b50d4a048606baf233d7efec42cf87507527ec692d670878c9998d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a681197b3b50d4a048606baf233d7efec42cf87507527ec692d670878c9998d2->leave($__internal_a681197b3b50d4a048606baf233d7efec42cf87507527ec692d670878c9998d2_prof);

        
        $__internal_d675229608e7bab749b8107e08ae487c5f42866cd1a979fc14d82c6ace9930e7->leave($__internal_d675229608e7bab749b8107e08ae487c5f42866cd1a979fc14d82c6ace9930e7_prof);

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
