<?php

/* main/homepage.html.twig */
class __TwigTemplate_4b101d96c36e27ad491790df6ccc51d306d4984cf47062bd6efee2e59ad4921a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "main/homepage.html.twig", 1);
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
        $__internal_f89b676d448abfcccb676380481172cf6c73059a4fe1a0389ad67463e48a27f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f89b676d448abfcccb676380481172cf6c73059a4fe1a0389ad67463e48a27f6->enter($__internal_f89b676d448abfcccb676380481172cf6c73059a4fe1a0389ad67463e48a27f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "main/homepage.html.twig"));

        $__internal_402ff080d84f7a3b86efae63f9cb9ca59313a217377fadebb473d80b51724013 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_402ff080d84f7a3b86efae63f9cb9ca59313a217377fadebb473d80b51724013->enter($__internal_402ff080d84f7a3b86efae63f9cb9ca59313a217377fadebb473d80b51724013_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "main/homepage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f89b676d448abfcccb676380481172cf6c73059a4fe1a0389ad67463e48a27f6->leave($__internal_f89b676d448abfcccb676380481172cf6c73059a4fe1a0389ad67463e48a27f6_prof);

        
        $__internal_402ff080d84f7a3b86efae63f9cb9ca59313a217377fadebb473d80b51724013->leave($__internal_402ff080d84f7a3b86efae63f9cb9ca59313a217377fadebb473d80b51724013_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ecf6ee030a4f39c445947272e5e3798dce38e5c9c1024312f2b76bb985e5227c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecf6ee030a4f39c445947272e5e3798dce38e5c9c1024312f2b76bb985e5227c->enter($__internal_ecf6ee030a4f39c445947272e5e3798dce38e5c9c1024312f2b76bb985e5227c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cab2229fc08b9ca934e87e6d59096539c124fee57acf21800903a501fda19597 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cab2229fc08b9ca934e87e6d59096539c124fee57acf21800903a501fda19597->enter($__internal_cab2229fc08b9ca934e87e6d59096539c124fee57acf21800903a501fda19597_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
\t<h1 class=\"page-header text-center\">
\t\tBienvenido
\t\t";
        // line 7
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) ? ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "name", array())) : (" ")), "html", null, true);
        echo "
\t\ta jComercial</h1>
";
        
        $__internal_cab2229fc08b9ca934e87e6d59096539c124fee57acf21800903a501fda19597->leave($__internal_cab2229fc08b9ca934e87e6d59096539c124fee57acf21800903a501fda19597_prof);

        
        $__internal_ecf6ee030a4f39c445947272e5e3798dce38e5c9c1024312f2b76bb985e5227c->leave($__internal_ecf6ee030a4f39c445947272e5e3798dce38e5c9c1024312f2b76bb985e5227c_prof);

    }

    public function getTemplateName()
    {
        return "main/homepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 7,  49 => 4,  40 => 3,  11 => 1,);
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

\t<h1 class=\"page-header text-center\">
\t\tBienvenido
\t\t{{ app.user ? app.user.name : ' ' }}
\t\ta jComercial</h1>
{% endblock %}", "main/homepage.html.twig", "/var/www/html/jComercial/app/Resources/views/main/homepage.html.twig");
    }
}
