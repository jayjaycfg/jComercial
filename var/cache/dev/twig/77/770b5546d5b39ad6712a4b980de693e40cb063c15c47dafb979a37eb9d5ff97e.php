<?php

/* :security:login.html.twig */
class __TwigTemplate_4bb177b7a5d7f6b54e567686082257f165657b55087539c4bc329e7b2b6786e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":security:login.html.twig", 1);
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
        $__internal_4b9accce8cef2992d8c3e1d426e9fc74486106626a425273c25032d89f2c17a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b9accce8cef2992d8c3e1d426e9fc74486106626a425273c25032d89f2c17a3->enter($__internal_4b9accce8cef2992d8c3e1d426e9fc74486106626a425273c25032d89f2c17a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":security:login.html.twig"));

        $__internal_dc4d0c7291c247bd298a489fcb035f1aa4af3d2aa63d478c174989b1a5087d13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc4d0c7291c247bd298a489fcb035f1aa4af3d2aa63d478c174989b1a5087d13->enter($__internal_dc4d0c7291c247bd298a489fcb035f1aa4af3d2aa63d478c174989b1a5087d13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b9accce8cef2992d8c3e1d426e9fc74486106626a425273c25032d89f2c17a3->leave($__internal_4b9accce8cef2992d8c3e1d426e9fc74486106626a425273c25032d89f2c17a3_prof);

        
        $__internal_dc4d0c7291c247bd298a489fcb035f1aa4af3d2aa63d478c174989b1a5087d13->leave($__internal_dc4d0c7291c247bd298a489fcb035f1aa4af3d2aa63d478c174989b1a5087d13_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_74d694ef6d5ba839fb8a2047710e93bc1129cbf5b6e44e9d87e101bb297942f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74d694ef6d5ba839fb8a2047710e93bc1129cbf5b6e44e9d87e101bb297942f0->enter($__internal_74d694ef6d5ba839fb8a2047710e93bc1129cbf5b6e44e9d87e101bb297942f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_216224de2f6a2e822d19b706544c7eb8c5a4564297f0e49eac6974d7277e0402 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_216224de2f6a2e822d19b706544c7eb8c5a4564297f0e49eac6974d7277e0402->enter($__internal_216224de2f6a2e822d19b706544c7eb8c5a4564297f0e49eac6974d7277e0402_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                ";
        // line 7
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 8
            echo "                    <div class=\"alert alert-danger\">
                        ";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "
                    </div>
                ";
        }
        // line 12
        echo "
                ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                    ";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
                    ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_username", array()), 'row', array("label" => "Usuario"));
        // line 17
        echo "
                    ";
        // line 18
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_password", array()), 'row', array("label" => "Contrasenna"));
        // line 20
        echo "
                <button type=\"submit\" class=\"btn btn-success\" formnovalidate>Entrar <span class=\"fa fa-lock\"></span></button>
                ";
        // line 22
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>
    </div>

";
        
        $__internal_216224de2f6a2e822d19b706544c7eb8c5a4564297f0e49eac6974d7277e0402->leave($__internal_216224de2f6a2e822d19b706544c7eb8c5a4564297f0e49eac6974d7277e0402_prof);

        
        $__internal_74d694ef6d5ba839fb8a2047710e93bc1129cbf5b6e44e9d87e101bb297942f0->leave($__internal_74d694ef6d5ba839fb8a2047710e93bc1129cbf5b6e44e9d87e101bb297942f0_prof);

    }

    public function getTemplateName()
    {
        return ":security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 22,  83 => 20,  81 => 18,  78 => 17,  76 => 15,  72 => 14,  68 => 13,  65 => 12,  59 => 9,  56 => 8,  54 => 7,  49 => 4,  40 => 3,  11 => 1,);
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
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                {% if error %}
                    <div class=\"alert alert-danger\">
                        {{ error.messageKey|trans(error.messageData,'security') }}
                    </div>
                {% endif %}

                {{ form_start(form) }}
                    {{ form_errors(form) }}
                    {{ form_row(form._username,{
                        label : 'Usuario'
                    }) }}
                    {{ form_row(form._password,{
                        label : 'Contrasenna'
                    }) }}
                <button type=\"submit\" class=\"btn btn-success\" formnovalidate>Entrar <span class=\"fa fa-lock\"></span></button>
                {{ form_end(form) }}
            </div>
        </div>
    </div>

{% endblock %}", ":security:login.html.twig", "/var/www/html/jComercial/app/Resources/views/security/login.html.twig");
    }
}
