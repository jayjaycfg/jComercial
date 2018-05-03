<?php

/* :cliente:_form.html.twig */
class __TwigTemplate_f3a9722d0f423d61aef04be3c4491748e9ecd1b86cbe642a9a43e2476208add9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a6fbeeeaa88aabc299f456c539fb77edfc2421d43727f4479ea342b35dc042e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6fbeeeaa88aabc299f456c539fb77edfc2421d43727f4479ea342b35dc042e3->enter($__internal_a6fbeeeaa88aabc299f456c539fb77edfc2421d43727f4479ea342b35dc042e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":cliente:_form.html.twig"));

        $__internal_c71364642a52bf3f0840441ab467fa6d250df7fc9c947de57ad9b9c38cab0995 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c71364642a52bf3f0840441ab467fa6d250df7fc9c947de57ad9b9c38cab0995->enter($__internal_c71364642a52bf3f0840441ab467fa6d250df7fc9c947de57ad9b9c38cab0995_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":cliente:_form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "

\t";
        // line 3
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
   ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "clientNumber", array()), 'row');
        echo "
   ";
        // line 5
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "startAt", array()), 'row');
        echo "
   ";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "endAt", array()), 'row');
        echo "
   ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "description", array()), 'row');
        echo "

<button class=\"btn btn-primary\" type=\"submit\" formnovalidate>Guardar!</button>
";
        // line 10
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        
        $__internal_a6fbeeeaa88aabc299f456c539fb77edfc2421d43727f4479ea342b35dc042e3->leave($__internal_a6fbeeeaa88aabc299f456c539fb77edfc2421d43727f4479ea342b35dc042e3_prof);

        
        $__internal_c71364642a52bf3f0840441ab467fa6d250df7fc9c947de57ad9b9c38cab0995->leave($__internal_c71364642a52bf3f0840441ab467fa6d250df7fc9c947de57ad9b9c38cab0995_prof);

    }

    public function getTemplateName()
    {
        return ":cliente:_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 10,  46 => 7,  42 => 6,  38 => 5,  34 => 4,  30 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ form_start(form) }}

\t{{ form_errors(form) }}
   {{ form_row(form.clientNumber) }}
   {{ form_row(form.startAt) }}
   {{ form_row(form.endAt) }}
   {{ form_row(form.description) }}

<button class=\"btn btn-primary\" type=\"submit\" formnovalidate>Guardar!</button>
{{ form_end(form) }}", ":cliente:_form.html.twig", "/var/www/html/jComercial/app/Resources/views/cliente/_form.html.twig");
    }
}
