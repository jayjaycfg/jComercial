<?php

/* :admin/user:edit.html.twig */
class __TwigTemplate_9010cb5255cd36da8a1c34366e90d820c853ce5bd3c361736c0f2eac10151cd8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":admin/user:edit.html.twig", 1);
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
        $__internal_2f43c0e68083be8586b17d091bb44b0b356da220d7a446d678ba93ebb4faf884 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f43c0e68083be8586b17d091bb44b0b356da220d7a446d678ba93ebb4faf884->enter($__internal_2f43c0e68083be8586b17d091bb44b0b356da220d7a446d678ba93ebb4faf884_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":admin/user:edit.html.twig"));

        $__internal_1ef1993c9c66f3b9218529a182da6935b77a571c893faaacbcebda3e3e7c5f4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ef1993c9c66f3b9218529a182da6935b77a571c893faaacbcebda3e3e7c5f4a->enter($__internal_1ef1993c9c66f3b9218529a182da6935b77a571c893faaacbcebda3e3e7c5f4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":admin/user:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f43c0e68083be8586b17d091bb44b0b356da220d7a446d678ba93ebb4faf884->leave($__internal_2f43c0e68083be8586b17d091bb44b0b356da220d7a446d678ba93ebb4faf884_prof);

        
        $__internal_1ef1993c9c66f3b9218529a182da6935b77a571c893faaacbcebda3e3e7c5f4a->leave($__internal_1ef1993c9c66f3b9218529a182da6935b77a571c893faaacbcebda3e3e7c5f4a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b69fed37e69b50e8c368aa7ccdac2ab3147292c33870f271932e4e7409db27df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b69fed37e69b50e8c368aa7ccdac2ab3147292c33870f271932e4e7409db27df->enter($__internal_b69fed37e69b50e8c368aa7ccdac2ab3147292c33870f271932e4e7409db27df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f6fa54ab300778b9a5cecc8e86a0026573ac058388dfcd3038b206d240ae22f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6fa54ab300778b9a5cecc8e86a0026573ac058388dfcd3038b206d240ae22f1->enter($__internal_f6fa54ab300778b9a5cecc8e86a0026573ac058388dfcd3038b206d240ae22f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-8\">
                <h1>Editar usuario</h1>

                ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["userForm"] ?? $this->getContext($context, "userForm")), 'form_start');
        echo "
                    ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["userForm"] ?? $this->getContext($context, "userForm")), 'errors');
        echo "
                    ";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["userForm"] ?? $this->getContext($context, "userForm")), "name", array()), 'row');
        echo "
                    ";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["userForm"] ?? $this->getContext($context, "userForm")), "lastName", array()), 'row');
        echo "
\t\t\t\t    ";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["userForm"] ?? $this->getContext($context, "userForm")), "plainPassword", array()), 'row');
        echo "
\t\t\t\t    ";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["userForm"] ?? $this->getContext($context, "userForm")), "roles", array()), 'row');
        echo "

                    <button type=\"submit\" class=\"btn btn-primary\" formnovalidate>Editar</button>
                ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["userForm"] ?? $this->getContext($context, "userForm")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_f6fa54ab300778b9a5cecc8e86a0026573ac058388dfcd3038b206d240ae22f1->leave($__internal_f6fa54ab300778b9a5cecc8e86a0026573ac058388dfcd3038b206d240ae22f1_prof);

        
        $__internal_b69fed37e69b50e8c368aa7ccdac2ab3147292c33870f271932e4e7409db27df->leave($__internal_b69fed37e69b50e8c368aa7ccdac2ab3147292c33870f271932e4e7409db27df_prof);

    }

    public function getTemplateName()
    {
        return ":admin/user:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 17,  76 => 14,  72 => 13,  68 => 12,  64 => 11,  60 => 10,  56 => 9,  49 => 4,  40 => 3,  11 => 1,);
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
            <div class=\"col-xs-8\">
                <h1>Editar usuario</h1>

                {{ form_start(userForm) }}
                    {{ form_errors(userForm) }}
                    {{ form_row(userForm.name) }}
                    {{ form_row(userForm.lastName) }}
\t\t\t\t    {{ form_row(userForm.plainPassword) }}
\t\t\t\t    {{ form_row(userForm.roles) }}

                    <button type=\"submit\" class=\"btn btn-primary\" formnovalidate>Editar</button>
                {{ form_end(userForm) }}
            </div>
        </div>
    </div>
{% endblock %}
", ":admin/user:edit.html.twig", "/var/www/html/jComercial/app/Resources/views/admin/user/edit.html.twig");
    }
}
