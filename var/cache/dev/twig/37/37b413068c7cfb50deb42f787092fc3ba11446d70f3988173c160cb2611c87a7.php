<?php

/* security/login.html.twig */
class __TwigTemplate_62fe56c6cba3d003de66fac3a79386f85f69ef1e8a097d1576773743b1447298 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
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
        $__internal_e0ef306653ca2e5eb25a7031f7c0574720de410f51a9ee9f004bbe5282c750d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0ef306653ca2e5eb25a7031f7c0574720de410f51a9ee9f004bbe5282c750d2->enter($__internal_e0ef306653ca2e5eb25a7031f7c0574720de410f51a9ee9f004bbe5282c750d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_15371c5776ca175b1694090be63ad574016f497ae2120372c9116091a8e15827 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15371c5776ca175b1694090be63ad574016f497ae2120372c9116091a8e15827->enter($__internal_15371c5776ca175b1694090be63ad574016f497ae2120372c9116091a8e15827_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e0ef306653ca2e5eb25a7031f7c0574720de410f51a9ee9f004bbe5282c750d2->leave($__internal_e0ef306653ca2e5eb25a7031f7c0574720de410f51a9ee9f004bbe5282c750d2_prof);

        
        $__internal_15371c5776ca175b1694090be63ad574016f497ae2120372c9116091a8e15827->leave($__internal_15371c5776ca175b1694090be63ad574016f497ae2120372c9116091a8e15827_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_33c5c2f25cbb94cfcdf6391fcf4b20e8ad6d21ea0247907937565fe49884aafa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33c5c2f25cbb94cfcdf6391fcf4b20e8ad6d21ea0247907937565fe49884aafa->enter($__internal_33c5c2f25cbb94cfcdf6391fcf4b20e8ad6d21ea0247907937565fe49884aafa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_58e1b77d72289ea14662e1118859aee97dd121f77ac74b7b6176ba61cf570330 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58e1b77d72289ea14662e1118859aee97dd121f77ac74b7b6176ba61cf570330->enter($__internal_58e1b77d72289ea14662e1118859aee97dd121f77ac74b7b6176ba61cf570330_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_password", array()), 'row', array("label" => "Contraseña"));
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
        
        $__internal_58e1b77d72289ea14662e1118859aee97dd121f77ac74b7b6176ba61cf570330->leave($__internal_58e1b77d72289ea14662e1118859aee97dd121f77ac74b7b6176ba61cf570330_prof);

        
        $__internal_33c5c2f25cbb94cfcdf6391fcf4b20e8ad6d21ea0247907937565fe49884aafa->leave($__internal_33c5c2f25cbb94cfcdf6391fcf4b20e8ad6d21ea0247907937565fe49884aafa_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
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
                        label : 'Contraseña'
                    }) }}
                <button type=\"submit\" class=\"btn btn-success\" formnovalidate>Entrar <span class=\"fa fa-lock\"></span></button>
                {{ form_end(form) }}
            </div>
        </div>
    </div>

{% endblock %}", "security/login.html.twig", "/var/www/html/jComercial/app/Resources/views/security/login.html.twig");
    }
}
