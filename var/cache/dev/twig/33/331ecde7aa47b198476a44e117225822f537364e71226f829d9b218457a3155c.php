<?php

/* :factura:_form.html.twig */
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
        $__internal_d73cbdf7b1d6a00c1f34ba542218cddc9fa010495680cc24d47d67162b8024cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d73cbdf7b1d6a00c1f34ba542218cddc9fa010495680cc24d47d67162b8024cf->enter($__internal_d73cbdf7b1d6a00c1f34ba542218cddc9fa010495680cc24d47d67162b8024cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":factura:_form.html.twig"));

        $__internal_e9e7b181c1c7c779cc2e9e814794aef2e9399792679bcb4915b7a703398b9572 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9e7b181c1c7c779cc2e9e814794aef2e9399792679bcb4915b7a703398b9572->enter($__internal_e9e7b181c1c7c779cc2e9e814794aef2e9399792679bcb4915b7a703398b9572_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":factura:_form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
\t";
        // line 2
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "

\t";
        // line 5
        echo "\t\t";
        // line 6
        echo "\t";
        // line 7
        echo "\t";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "contrato", array()), 'row');
        echo "
\t";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "empresa", array()), 'row');
        echo "
\t";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "programa", array()), 'row');
        echo "
\t";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "descripcionDelGasto", array()), 'row');
        echo "
\t";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cantidad", array()), 'row');
        echo "
\t";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "precio", array()), 'row');
        echo "
\t";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "participante", array()), 'row');
        echo "
\t";
        // line 15
        echo "\t";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "isCancelada", array()), 'row');
        echo "

\t";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "explicacionPorCancelada", array()), 'row');
        echo "

<button type=\"submit\" class=\"btn btn-primary\" formnovalidate>Añadir</button>
";
        // line 20
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_d73cbdf7b1d6a00c1f34ba542218cddc9fa010495680cc24d47d67162b8024cf->leave($__internal_d73cbdf7b1d6a00c1f34ba542218cddc9fa010495680cc24d47d67162b8024cf_prof);

        
        $__internal_e9e7b181c1c7c779cc2e9e814794aef2e9399792679bcb4915b7a703398b9572->leave($__internal_e9e7b181c1c7c779cc2e9e814794aef2e9399792679bcb4915b7a703398b9572_prof);

    }

    public function getTemplateName()
    {
        return ":factura:_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 20,  73 => 17,  67 => 15,  63 => 13,  59 => 12,  55 => 11,  51 => 10,  47 => 9,  43 => 8,  38 => 7,  36 => 6,  34 => 5,  29 => 2,  25 => 1,);
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

\t{#{{ form_row(form.usuario,{#}
\t\t{#'value' : '{{ app.user.name }}'#}
\t{#}) }}#}
\t{{ form_row(form.contrato) }}
\t{{ form_row(form.empresa) }}
\t{{ form_row(form.programa) }}
\t{{ form_row(form.descripcionDelGasto) }}
\t{{ form_row(form.cantidad) }}
\t{{ form_row(form.precio) }}
\t{{ form_row(form.participante) }}
\t{#{{ form_row(form.fechaAt) }}#}
\t{{ form_row(form.isCancelada) }}

\t{{ form_row(form.explicacionPorCancelada) }}

<button type=\"submit\" class=\"btn btn-primary\" formnovalidate>Añadir</button>
{{ form_end(form) }}
", ":factura:_form.html.twig", "/var/www/html/jComercial/app/Resources/views/factura/_form.html.twig");
    }
}
