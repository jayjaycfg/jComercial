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
        $__internal_f0e3276ef982ccd23e8763ceea8d82325a74ac807dd249957adb1fdbf1ed25e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0e3276ef982ccd23e8763ceea8d82325a74ac807dd249957adb1fdbf1ed25e5->enter($__internal_f0e3276ef982ccd23e8763ceea8d82325a74ac807dd249957adb1fdbf1ed25e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":proveedor:edit.html.twig"));

        $__internal_c5d7e72c4f16372d0564521e02c463b5592c487055ba202b34e8595ab754eaea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5d7e72c4f16372d0564521e02c463b5592c487055ba202b34e8595ab754eaea->enter($__internal_c5d7e72c4f16372d0564521e02c463b5592c487055ba202b34e8595ab754eaea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":proveedor:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f0e3276ef982ccd23e8763ceea8d82325a74ac807dd249957adb1fdbf1ed25e5->leave($__internal_f0e3276ef982ccd23e8763ceea8d82325a74ac807dd249957adb1fdbf1ed25e5_prof);

        
        $__internal_c5d7e72c4f16372d0564521e02c463b5592c487055ba202b34e8595ab754eaea->leave($__internal_c5d7e72c4f16372d0564521e02c463b5592c487055ba202b34e8595ab754eaea_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_eff5314dcff73b7087eb2f459c1cf232e790c87cecb75c393fbc1b667a1b16a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eff5314dcff73b7087eb2f459c1cf232e790c87cecb75c393fbc1b667a1b16a6->enter($__internal_eff5314dcff73b7087eb2f459c1cf232e790c87cecb75c393fbc1b667a1b16a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4ba44e18a45046722feb1dfd73b296e9fb6eac268b34c22eeaf022031115b314 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ba44e18a45046722feb1dfd73b296e9fb6eac268b34c22eeaf022031115b314->enter($__internal_4ba44e18a45046722feb1dfd73b296e9fb6eac268b34c22eeaf022031115b314_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4ba44e18a45046722feb1dfd73b296e9fb6eac268b34c22eeaf022031115b314->leave($__internal_4ba44e18a45046722feb1dfd73b296e9fb6eac268b34c22eeaf022031115b314_prof);

        
        $__internal_eff5314dcff73b7087eb2f459c1cf232e790c87cecb75c393fbc1b667a1b16a6->leave($__internal_eff5314dcff73b7087eb2f459c1cf232e790c87cecb75c393fbc1b667a1b16a6_prof);

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
