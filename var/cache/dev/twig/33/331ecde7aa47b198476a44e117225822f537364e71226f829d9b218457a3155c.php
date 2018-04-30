<?php

/* :/factura:_form.html.twig */
class __TwigTemplate_bc68a533d3c929f418ac2f4cd8136bd0850b36df66bc2f61261322c24d8580eb extends Twig_Template
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
        $__internal_ed0086c15599af28ba4fb976a426fe1311aa43eed5070b1634647d6f04de27fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed0086c15599af28ba4fb976a426fe1311aa43eed5070b1634647d6f04de27fb->enter($__internal_ed0086c15599af28ba4fb976a426fe1311aa43eed5070b1634647d6f04de27fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":/factura:_form.html.twig"));

        $__internal_4d46fbf4b4a35c8bd3b714a2f241c00c2b20973f50ae83a2fecb68e10b1e81ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d46fbf4b4a35c8bd3b714a2f241c00c2b20973f50ae83a2fecb68e10b1e81ec->enter($__internal_4d46fbf4b4a35c8bd3b714a2f241c00c2b20973f50ae83a2fecb68e10b1e81ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":/factura:_form.html.twig"));

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
        
        $__internal_ed0086c15599af28ba4fb976a426fe1311aa43eed5070b1634647d6f04de27fb->leave($__internal_ed0086c15599af28ba4fb976a426fe1311aa43eed5070b1634647d6f04de27fb_prof);

        
        $__internal_4d46fbf4b4a35c8bd3b714a2f241c00c2b20973f50ae83a2fecb68e10b1e81ec->leave($__internal_4d46fbf4b4a35c8bd3b714a2f241c00c2b20973f50ae83a2fecb68e10b1e81ec_prof);

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
