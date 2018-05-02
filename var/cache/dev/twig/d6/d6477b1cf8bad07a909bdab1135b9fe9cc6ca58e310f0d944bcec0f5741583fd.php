<?php

/* :/factura:_form.html.twig */
class __TwigTemplate_e323c19f0f61551689c64949ac5730f3306be07bfff0398035ca1efb839cf120 extends Twig_Template
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
        $__internal_c29226524b5ae7a6acfd4390e166dd204e40dd72f29b2edb2a1d6d2e0f9f917a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c29226524b5ae7a6acfd4390e166dd204e40dd72f29b2edb2a1d6d2e0f9f917a->enter($__internal_c29226524b5ae7a6acfd4390e166dd204e40dd72f29b2edb2a1d6d2e0f9f917a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":/factura:_form.html.twig"));

        $__internal_83831d649c48730f8b52d1c326b2f0c2e0564c4b30d955d383fcf833dbeac194 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83831d649c48730f8b52d1c326b2f0c2e0564c4b30d955d383fcf833dbeac194->enter($__internal_83831d649c48730f8b52d1c326b2f0c2e0564c4b30d955d383fcf833dbeac194_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":/factura:_form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
\t";
        // line 2
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "

\t";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "importeCuc", array()), 'row');
        echo "
\t";
        // line 5
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "importeCup", array()), 'row');
        echo "
\t";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "contratos", array()), 'row');
        echo "
<button type=\"submit\" class=\"btn btn-primary\" formnovalidate>Añadir</button>
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        
        $__internal_c29226524b5ae7a6acfd4390e166dd204e40dd72f29b2edb2a1d6d2e0f9f917a->leave($__internal_c29226524b5ae7a6acfd4390e166dd204e40dd72f29b2edb2a1d6d2e0f9f917a_prof);

        
        $__internal_83831d649c48730f8b52d1c326b2f0c2e0564c4b30d955d383fcf833dbeac194->leave($__internal_83831d649c48730f8b52d1c326b2f0c2e0564c4b30d955d383fcf833dbeac194_prof);

    }

    public function getTemplateName()
    {
        return ":/factura:_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  42 => 6,  38 => 5,  34 => 4,  29 => 2,  25 => 1,);
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

\t{{ form_row(form.importeCuc) }}
\t{{ form_row(form.importeCup) }}
\t{{ form_row(form.contratos) }}
<button type=\"submit\" class=\"btn btn-primary\" formnovalidate>Añadir</button>
{{ form_end(form) }}", ":/factura:_form.html.twig", "/var/www/html/jComercial/app/Resources/views/factura/_form.html.twig");
    }
}
