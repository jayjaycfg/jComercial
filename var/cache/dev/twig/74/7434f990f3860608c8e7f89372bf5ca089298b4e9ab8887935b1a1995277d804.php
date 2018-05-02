<?php

/* admin/user/edit.html.twig */
class __TwigTemplate_df6257d4a598f4c6173dc7e3df4dcee2963523b4d3b6dd07b1613db9a77a7f02 extends Twig_Template
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
        $__internal_4c0f7fbda38ed78c381d8601bc0416f552ac84013b3bb00222499b0c7112b9da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c0f7fbda38ed78c381d8601bc0416f552ac84013b3bb00222499b0c7112b9da->enter($__internal_4c0f7fbda38ed78c381d8601bc0416f552ac84013b3bb00222499b0c7112b9da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/user/edit.html.twig"));

        $__internal_55663694822d2cc5ccc4dad616e59ef4c6722f6a3f0cf940ad06304cf38d366e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55663694822d2cc5ccc4dad616e59ef4c6722f6a3f0cf940ad06304cf38d366e->enter($__internal_55663694822d2cc5ccc4dad616e59ef4c6722f6a3f0cf940ad06304cf38d366e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/user/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c0f7fbda38ed78c381d8601bc0416f552ac84013b3bb00222499b0c7112b9da->leave($__internal_4c0f7fbda38ed78c381d8601bc0416f552ac84013b3bb00222499b0c7112b9da_prof);

        
        $__internal_55663694822d2cc5ccc4dad616e59ef4c6722f6a3f0cf940ad06304cf38d366e->leave($__internal_55663694822d2cc5ccc4dad616e59ef4c6722f6a3f0cf940ad06304cf38d366e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_22b1381aab49c765e26422b3f50327afa6ad08f78aabbf62fb39db575bd7719e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22b1381aab49c765e26422b3f50327afa6ad08f78aabbf62fb39db575bd7719e->enter($__internal_22b1381aab49c765e26422b3f50327afa6ad08f78aabbf62fb39db575bd7719e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c28b4faa8dcc62bb37ddebbfe9d91cd8b99e225470fe6ab2cea217cea1d6d393 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c28b4faa8dcc62bb37ddebbfe9d91cd8b99e225470fe6ab2cea217cea1d6d393->enter($__internal_c28b4faa8dcc62bb37ddebbfe9d91cd8b99e225470fe6ab2cea217cea1d6d393_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c28b4faa8dcc62bb37ddebbfe9d91cd8b99e225470fe6ab2cea217cea1d6d393->leave($__internal_c28b4faa8dcc62bb37ddebbfe9d91cd8b99e225470fe6ab2cea217cea1d6d393_prof);

        
        $__internal_22b1381aab49c765e26422b3f50327afa6ad08f78aabbf62fb39db575bd7719e->leave($__internal_22b1381aab49c765e26422b3f50327afa6ad08f78aabbf62fb39db575bd7719e_prof);

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
