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
        $__internal_03686a29c2673e72c60e58e521b21e84ef5611af97bfbb5fab6779637fea8d37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03686a29c2673e72c60e58e521b21e84ef5611af97bfbb5fab6779637fea8d37->enter($__internal_03686a29c2673e72c60e58e521b21e84ef5611af97bfbb5fab6779637fea8d37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":security:login.html.twig"));

        $__internal_4346bbbf7689e577804427cb0cac89551252b35f8257921b9768ec61fef42608 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4346bbbf7689e577804427cb0cac89551252b35f8257921b9768ec61fef42608->enter($__internal_4346bbbf7689e577804427cb0cac89551252b35f8257921b9768ec61fef42608_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_03686a29c2673e72c60e58e521b21e84ef5611af97bfbb5fab6779637fea8d37->leave($__internal_03686a29c2673e72c60e58e521b21e84ef5611af97bfbb5fab6779637fea8d37_prof);

        
        $__internal_4346bbbf7689e577804427cb0cac89551252b35f8257921b9768ec61fef42608->leave($__internal_4346bbbf7689e577804427cb0cac89551252b35f8257921b9768ec61fef42608_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1224a5b7d68be65bf0563f22b0d502a122aed443270ca738ccee6c29202aeed5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1224a5b7d68be65bf0563f22b0d502a122aed443270ca738ccee6c29202aeed5->enter($__internal_1224a5b7d68be65bf0563f22b0d502a122aed443270ca738ccee6c29202aeed5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9488df51fb1fbb1c9ca13c182fba6d002beef3bfb1a3986b19046aebf188b291 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9488df51fb1fbb1c9ca13c182fba6d002beef3bfb1a3986b19046aebf188b291->enter($__internal_9488df51fb1fbb1c9ca13c182fba6d002beef3bfb1a3986b19046aebf188b291_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9488df51fb1fbb1c9ca13c182fba6d002beef3bfb1a3986b19046aebf188b291->leave($__internal_9488df51fb1fbb1c9ca13c182fba6d002beef3bfb1a3986b19046aebf188b291_prof);

        
        $__internal_1224a5b7d68be65bf0563f22b0d502a122aed443270ca738ccee6c29202aeed5->leave($__internal_1224a5b7d68be65bf0563f22b0d502a122aed443270ca738ccee6c29202aeed5_prof);

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
