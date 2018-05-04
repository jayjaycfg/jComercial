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
        $__internal_76b1a7e971d055509bcea2b4b76d0d6688dcaaa2ff34a4658a77863d3e28fdf9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76b1a7e971d055509bcea2b4b76d0d6688dcaaa2ff34a4658a77863d3e28fdf9->enter($__internal_76b1a7e971d055509bcea2b4b76d0d6688dcaaa2ff34a4658a77863d3e28fdf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":security:login.html.twig"));

        $__internal_684537b98289272b9f7cfc87743d8f33b2b3836634315f682b49812ef1904874 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_684537b98289272b9f7cfc87743d8f33b2b3836634315f682b49812ef1904874->enter($__internal_684537b98289272b9f7cfc87743d8f33b2b3836634315f682b49812ef1904874_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_76b1a7e971d055509bcea2b4b76d0d6688dcaaa2ff34a4658a77863d3e28fdf9->leave($__internal_76b1a7e971d055509bcea2b4b76d0d6688dcaaa2ff34a4658a77863d3e28fdf9_prof);

        
        $__internal_684537b98289272b9f7cfc87743d8f33b2b3836634315f682b49812ef1904874->leave($__internal_684537b98289272b9f7cfc87743d8f33b2b3836634315f682b49812ef1904874_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9a8cfda8be3c6b888881d7568523497a8b9f33e935020b91db98b8d0875d30ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a8cfda8be3c6b888881d7568523497a8b9f33e935020b91db98b8d0875d30ee->enter($__internal_9a8cfda8be3c6b888881d7568523497a8b9f33e935020b91db98b8d0875d30ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0ebafde83b52ba4268e74bbec2ef8a211cc92ec15316ec8fc98abdfbfe8ceaff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ebafde83b52ba4268e74bbec2ef8a211cc92ec15316ec8fc98abdfbfe8ceaff->enter($__internal_0ebafde83b52ba4268e74bbec2ef8a211cc92ec15316ec8fc98abdfbfe8ceaff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0ebafde83b52ba4268e74bbec2ef8a211cc92ec15316ec8fc98abdfbfe8ceaff->leave($__internal_0ebafde83b52ba4268e74bbec2ef8a211cc92ec15316ec8fc98abdfbfe8ceaff_prof);

        
        $__internal_9a8cfda8be3c6b888881d7568523497a8b9f33e935020b91db98b8d0875d30ee->leave($__internal_9a8cfda8be3c6b888881d7568523497a8b9f33e935020b91db98b8d0875d30ee_prof);

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
