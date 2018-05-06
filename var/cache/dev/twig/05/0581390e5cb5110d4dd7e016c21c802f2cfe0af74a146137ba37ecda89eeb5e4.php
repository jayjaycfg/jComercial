<?php

/* :empresa:new.html.twig */
class __TwigTemplate_3cd1d1f6923efbf85300d280842dda7d867c480da08adb4b6b59fd2a3472a106 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":cliente:FormLayout.html.twig", ":empresa:new.html.twig", 1);
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
        $__internal_f6084494c465d74fff3aa940da4ecf7ca333d1b416a838fa87cb7feacaabeb66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6084494c465d74fff3aa940da4ecf7ca333d1b416a838fa87cb7feacaabeb66->enter($__internal_f6084494c465d74fff3aa940da4ecf7ca333d1b416a838fa87cb7feacaabeb66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":empresa:new.html.twig"));

        $__internal_9a894d6334fe590f7c0282a9f5c98c19d991c8a6063b86774110599b1a8cd57f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a894d6334fe590f7c0282a9f5c98c19d991c8a6063b86774110599b1a8cd57f->enter($__internal_9a894d6334fe590f7c0282a9f5c98c19d991c8a6063b86774110599b1a8cd57f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":empresa:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f6084494c465d74fff3aa940da4ecf7ca333d1b416a838fa87cb7feacaabeb66->leave($__internal_f6084494c465d74fff3aa940da4ecf7ca333d1b416a838fa87cb7feacaabeb66_prof);

        
        $__internal_9a894d6334fe590f7c0282a9f5c98c19d991c8a6063b86774110599b1a8cd57f->leave($__internal_9a894d6334fe590f7c0282a9f5c98c19d991c8a6063b86774110599b1a8cd57f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a927580610989363c2fd431afef80e0b55ff54f2f3e6b154b79346cc398b7596 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a927580610989363c2fd431afef80e0b55ff54f2f3e6b154b79346cc398b7596->enter($__internal_a927580610989363c2fd431afef80e0b55ff54f2f3e6b154b79346cc398b7596_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ea5bc51c2c0060bc8b7615cff4577cf7231afaa8e0e3fdbf33d6aa0dfb119afb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea5bc51c2c0060bc8b7615cff4577cf7231afaa8e0e3fdbf33d6aa0dfb119afb->enter($__internal_ea5bc51c2c0060bc8b7615cff4577cf7231afaa8e0e3fdbf33d6aa0dfb119afb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-12\">
\t\t\t\t<h1>Crear empresa</h1>
\t\t\t\t";
        // line 8
        echo twig_include($this->env, $context, ":/empresa:_form.html.twig");
        echo "
\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_ea5bc51c2c0060bc8b7615cff4577cf7231afaa8e0e3fdbf33d6aa0dfb119afb->leave($__internal_ea5bc51c2c0060bc8b7615cff4577cf7231afaa8e0e3fdbf33d6aa0dfb119afb_prof);

        
        $__internal_a927580610989363c2fd431afef80e0b55ff54f2f3e6b154b79346cc398b7596->leave($__internal_a927580610989363c2fd431afef80e0b55ff54f2f3e6b154b79346cc398b7596_prof);

    }

    public function getTemplateName()
    {
        return ":empresa:new.html.twig";
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
\t\t\t\t<h1>Crear empresa</h1>
\t\t\t\t{{ include(':/empresa:_form.html.twig') }}
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}", ":empresa:new.html.twig", "/var/www/html/jComercial/app/Resources/views/empresa/new.html.twig");
    }
}
