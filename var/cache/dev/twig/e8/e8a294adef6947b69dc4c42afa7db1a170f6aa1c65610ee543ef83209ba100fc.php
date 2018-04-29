<?php

/* admin/user/register.html.twig */
class __TwigTemplate_99ff1fb598f2f03dd40dd2e52e2904ee6499db96e0aaefbc9743c338fd95899e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/user/register.html.twig", 1);
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
        $__internal_539d2d91a713282b82e57003cb044857609bfac9f5b74bf1218e61be9f2762de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_539d2d91a713282b82e57003cb044857609bfac9f5b74bf1218e61be9f2762de->enter($__internal_539d2d91a713282b82e57003cb044857609bfac9f5b74bf1218e61be9f2762de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/user/register.html.twig"));

        $__internal_a93f97c79c54b4ce2af1b231d6cd1367a9d8d850fd9311f3cdaf82c8e1eaa84b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a93f97c79c54b4ce2af1b231d6cd1367a9d8d850fd9311f3cdaf82c8e1eaa84b->enter($__internal_a93f97c79c54b4ce2af1b231d6cd1367a9d8d850fd9311f3cdaf82c8e1eaa84b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/user/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_539d2d91a713282b82e57003cb044857609bfac9f5b74bf1218e61be9f2762de->leave($__internal_539d2d91a713282b82e57003cb044857609bfac9f5b74bf1218e61be9f2762de_prof);

        
        $__internal_a93f97c79c54b4ce2af1b231d6cd1367a9d8d850fd9311f3cdaf82c8e1eaa84b->leave($__internal_a93f97c79c54b4ce2af1b231d6cd1367a9d8d850fd9311f3cdaf82c8e1eaa84b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8ce0f310cf858da543628d6de4297379285cf01d4456a25d83b5168eeb0c724f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ce0f310cf858da543628d6de4297379285cf01d4456a25d83b5168eeb0c724f->enter($__internal_8ce0f310cf858da543628d6de4297379285cf01d4456a25d83b5168eeb0c724f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e0edfea104471f0d242778306b27125b0e9c008553a77ef09321ee5a9834004d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0edfea104471f0d242778306b27125b0e9c008553a77ef09321ee5a9834004d->enter($__internal_e0edfea104471f0d242778306b27125b0e9c008553a77ef09321ee5a9834004d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'row', array("label" => "Contraseña"));
        // line 13
        echo "
\t\t\t\t\t\t";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'row', array("label" => "Repetir Contraseña"));
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
        
        $__internal_e0edfea104471f0d242778306b27125b0e9c008553a77ef09321ee5a9834004d->leave($__internal_e0edfea104471f0d242778306b27125b0e9c008553a77ef09321ee5a9834004d_prof);

        
        $__internal_8ce0f310cf858da543628d6de4297379285cf01d4456a25d83b5168eeb0c724f->leave($__internal_8ce0f310cf858da543628d6de4297379285cf01d4456a25d83b5168eeb0c724f_prof);

    }

    public function getTemplateName()
    {
        return "admin/user/register.html.twig";
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
\t\t\t\t\t\t\t'label' : 'Contraseña'
\t\t\t\t\t\t}) }}
\t\t\t\t\t\t{{ form_row(form.plainPassword.second,{
\t\t\t\t\t\t\t'label' : 'Repetir Contraseña'
\t\t\t\t\t\t}) }}
\t\t\t\t\t\t{{ form_row(form.roles) }}
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\" formnovalidate>Registrar!</button>
\t\t\t\t\t{{ form_end(form) }}
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}", "admin/user/register.html.twig", "/var/www/html/jComercial/app/Resources/views/admin/user/register.html.twig");
    }
}
