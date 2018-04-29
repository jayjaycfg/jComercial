<?php

/* :admin/user:register.html.twig */
class __TwigTemplate_99ff1fb598f2f03dd40dd2e52e2904ee6499db96e0aaefbc9743c338fd95899e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":admin/user:register.html.twig", 1);
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
        $__internal_46f3331bf87332bf499c945fdf56c9ff1235cfdf3845eaacf7a2889e690eea71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46f3331bf87332bf499c945fdf56c9ff1235cfdf3845eaacf7a2889e690eea71->enter($__internal_46f3331bf87332bf499c945fdf56c9ff1235cfdf3845eaacf7a2889e690eea71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":admin/user:register.html.twig"));

        $__internal_46834c09744205423207ec504a4e28b48c65f9666ee9edbf13aacdb3239f1b9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46834c09744205423207ec504a4e28b48c65f9666ee9edbf13aacdb3239f1b9f->enter($__internal_46834c09744205423207ec504a4e28b48c65f9666ee9edbf13aacdb3239f1b9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":admin/user:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_46f3331bf87332bf499c945fdf56c9ff1235cfdf3845eaacf7a2889e690eea71->leave($__internal_46f3331bf87332bf499c945fdf56c9ff1235cfdf3845eaacf7a2889e690eea71_prof);

        
        $__internal_46834c09744205423207ec504a4e28b48c65f9666ee9edbf13aacdb3239f1b9f->leave($__internal_46834c09744205423207ec504a4e28b48c65f9666ee9edbf13aacdb3239f1b9f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cb8f5788bf036895762a8f212bcce293e9e673aeb7f58c5bd058708a5c8d9f6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb8f5788bf036895762a8f212bcce293e9e673aeb7f58c5bd058708a5c8d9f6b->enter($__internal_cb8f5788bf036895762a8f212bcce293e9e673aeb7f58c5bd058708a5c8d9f6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5333671c125a166b6c19688076ffb2923bd8c246bdc14972a62e442a6701af59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5333671c125a166b6c19688076ffb2923bd8c246bdc14972a62e442a6701af59->enter($__internal_5333671c125a166b6c19688076ffb2923bd8c246bdc14972a62e442a6701af59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-12\">
\t\t\t\t<h1>Registro de Usuario</h1>
\t\t\t\t\t";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
\t\t\t\t\t\t";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "name", array()), 'row');
        echo "
\t\t\t\t\t\t";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "lastName", array()), 'row');
        echo "
\t\t\t\t\t\t";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'row', array("label" => "ContraseNNA"));
        // line 13
        echo "
\t\t\t\t\t\t";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'row', array("label" => "Repetir ContraseNNA"));
        // line 16
        echo "
\t\t\t\t\t\t";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "roles", array()), 'row');
        echo "
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\" formnovalidate>Registrar!</button>
\t\t\t\t\t";
        // line 19
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_5333671c125a166b6c19688076ffb2923bd8c246bdc14972a62e442a6701af59->leave($__internal_5333671c125a166b6c19688076ffb2923bd8c246bdc14972a62e442a6701af59_prof);

        
        $__internal_cb8f5788bf036895762a8f212bcce293e9e673aeb7f58c5bd058708a5c8d9f6b->leave($__internal_cb8f5788bf036895762a8f212bcce293e9e673aeb7f58c5bd058708a5c8d9f6b_prof);

    }

    public function getTemplateName()
    {
        return ":admin/user:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 19,  77 => 17,  74 => 16,  72 => 14,  69 => 13,  67 => 11,  63 => 10,  59 => 9,  55 => 8,  49 => 4,  40 => 3,  11 => 1,);
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
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-12\">
\t\t\t\t<h1>Registro de Usuario</h1>
\t\t\t\t\t{{ form_start(form) }}
\t\t\t\t\t\t{{ form_row(form.name) }}
\t\t\t\t\t\t{{ form_row(form.lastName) }}
\t\t\t\t\t\t{{ form_row(form.plainPassword.first,{
\t\t\t\t\t\t\t'label' : 'ContraseNNA'
\t\t\t\t\t\t}) }}
\t\t\t\t\t\t{{ form_row(form.plainPassword.second,{
\t\t\t\t\t\t\t'label' : 'Repetir ContraseNNA'
\t\t\t\t\t\t}) }}
\t\t\t\t\t\t{{ form_row(form.roles) }}
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\" formnovalidate>Registrar!</button>
\t\t\t\t\t{{ form_end(form) }}
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}", ":admin/user:register.html.twig", "/var/www/html/jComercial/app/Resources/views/admin/user/register.html.twig");
    }
}
