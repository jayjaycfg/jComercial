<?php

/* admin/user/edit.html.twig */
class __TwigTemplate_9010cb5255cd36da8a1c34366e90d820c853ce5bd3c361736c0f2eac10151cd8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/user/edit.html.twig", 1);
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
        $__internal_29a3243e7ec9c4d8602663bb545b289373f4e7435c49bc059fcde97e7c316468 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29a3243e7ec9c4d8602663bb545b289373f4e7435c49bc059fcde97e7c316468->enter($__internal_29a3243e7ec9c4d8602663bb545b289373f4e7435c49bc059fcde97e7c316468_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/user/edit.html.twig"));

        $__internal_5f5d8ec1b272eea597e915e04402964ad59f8ca9efbfa246a6f7b6b0fc6d689e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f5d8ec1b272eea597e915e04402964ad59f8ca9efbfa246a6f7b6b0fc6d689e->enter($__internal_5f5d8ec1b272eea597e915e04402964ad59f8ca9efbfa246a6f7b6b0fc6d689e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/user/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_29a3243e7ec9c4d8602663bb545b289373f4e7435c49bc059fcde97e7c316468->leave($__internal_29a3243e7ec9c4d8602663bb545b289373f4e7435c49bc059fcde97e7c316468_prof);

        
        $__internal_5f5d8ec1b272eea597e915e04402964ad59f8ca9efbfa246a6f7b6b0fc6d689e->leave($__internal_5f5d8ec1b272eea597e915e04402964ad59f8ca9efbfa246a6f7b6b0fc6d689e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ccd64e7abc8eb6cacfb44ca92472dda4bcb6991e221be4e0703a1d099b63340b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccd64e7abc8eb6cacfb44ca92472dda4bcb6991e221be4e0703a1d099b63340b->enter($__internal_ccd64e7abc8eb6cacfb44ca92472dda4bcb6991e221be4e0703a1d099b63340b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_54e06f79d0d5c8d57b031d063adade72743611a1275b1eac717a3b21f67ee4b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54e06f79d0d5c8d57b031d063adade72743611a1275b1eac717a3b21f67ee4b1->enter($__internal_54e06f79d0d5c8d57b031d063adade72743611a1275b1eac717a3b21f67ee4b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_54e06f79d0d5c8d57b031d063adade72743611a1275b1eac717a3b21f67ee4b1->leave($__internal_54e06f79d0d5c8d57b031d063adade72743611a1275b1eac717a3b21f67ee4b1_prof);

        
        $__internal_ccd64e7abc8eb6cacfb44ca92472dda4bcb6991e221be4e0703a1d099b63340b->leave($__internal_ccd64e7abc8eb6cacfb44ca92472dda4bcb6991e221be4e0703a1d099b63340b_prof);

    }

    public function getTemplateName()
    {
        return "admin/user/edit.html.twig";
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
", "admin/user/edit.html.twig", "/var/www/html/jComercial/app/Resources/views/admin/user/edit.html.twig");
    }
}
