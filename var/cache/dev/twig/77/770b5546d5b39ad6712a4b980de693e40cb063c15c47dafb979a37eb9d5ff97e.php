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
        $__internal_d9c7c8f1526bc966252be18b762c0ec58ea1dff9d9f6f8e61993bb77081bd404 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9c7c8f1526bc966252be18b762c0ec58ea1dff9d9f6f8e61993bb77081bd404->enter($__internal_d9c7c8f1526bc966252be18b762c0ec58ea1dff9d9f6f8e61993bb77081bd404_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":security:login.html.twig"));

        $__internal_19d45f02227b07717b97832c2658b2d84ba0fdc1d4cd41c8947a21e89a64f43c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19d45f02227b07717b97832c2658b2d84ba0fdc1d4cd41c8947a21e89a64f43c->enter($__internal_19d45f02227b07717b97832c2658b2d84ba0fdc1d4cd41c8947a21e89a64f43c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d9c7c8f1526bc966252be18b762c0ec58ea1dff9d9f6f8e61993bb77081bd404->leave($__internal_d9c7c8f1526bc966252be18b762c0ec58ea1dff9d9f6f8e61993bb77081bd404_prof);

        
        $__internal_19d45f02227b07717b97832c2658b2d84ba0fdc1d4cd41c8947a21e89a64f43c->leave($__internal_19d45f02227b07717b97832c2658b2d84ba0fdc1d4cd41c8947a21e89a64f43c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_07e44d151dfb21d8b2be07ad23b7106043769c593d14b5ccf325715ad2d5e943 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07e44d151dfb21d8b2be07ad23b7106043769c593d14b5ccf325715ad2d5e943->enter($__internal_07e44d151dfb21d8b2be07ad23b7106043769c593d14b5ccf325715ad2d5e943_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d9ca2fe7644da969c36a0cc512b408a80d45c10d3eee73a8eaeec4f7975819e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9ca2fe7644da969c36a0cc512b408a80d45c10d3eee73a8eaeec4f7975819e4->enter($__internal_d9ca2fe7644da969c36a0cc512b408a80d45c10d3eee73a8eaeec4f7975819e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d9ca2fe7644da969c36a0cc512b408a80d45c10d3eee73a8eaeec4f7975819e4->leave($__internal_d9ca2fe7644da969c36a0cc512b408a80d45c10d3eee73a8eaeec4f7975819e4_prof);

        
        $__internal_07e44d151dfb21d8b2be07ad23b7106043769c593d14b5ccf325715ad2d5e943->leave($__internal_07e44d151dfb21d8b2be07ad23b7106043769c593d14b5ccf325715ad2d5e943_prof);

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
