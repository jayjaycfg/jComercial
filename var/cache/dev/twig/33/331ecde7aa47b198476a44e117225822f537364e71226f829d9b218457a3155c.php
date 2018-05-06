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
        $__internal_74bc776ae1c6cd57cc1acd41d9649b4bd98db0da7aacaa7d11066ca92467fc70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74bc776ae1c6cd57cc1acd41d9649b4bd98db0da7aacaa7d11066ca92467fc70->enter($__internal_74bc776ae1c6cd57cc1acd41d9649b4bd98db0da7aacaa7d11066ca92467fc70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":factura:_form.html.twig"));

        $__internal_fd19484284132461b6ca180007510e48ae876c8bdcdbc137260bc1fa9241d13b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd19484284132461b6ca180007510e48ae876c8bdcdbc137260bc1fa9241d13b->enter($__internal_fd19484284132461b6ca180007510e48ae876c8bdcdbc137260bc1fa9241d13b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":factura:_form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
\t";
        // line 2
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "

\t";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "empresa", array()), 'row');
        echo "
\t";
        // line 5
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "contrato", array()), 'row');
        echo "
\t";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "programa", array()), 'row');
        echo "
\t";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "descripcionDelGasto", array()), 'row');
        echo "
\t";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cantidad", array()), 'row');
        echo "
\t";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "precio", array()), 'row');
        echo "
\t";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "participante", array()), 'row');
        echo "
\t";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "isCancelada", array()), 'row');
        echo "

\t";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "explicacionPorCancelada", array()), 'row');
        echo "

<button type=\"submit\" class=\"btn btn-primary\" formnovalidate>Añadir</button>
";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_74bc776ae1c6cd57cc1acd41d9649b4bd98db0da7aacaa7d11066ca92467fc70->leave($__internal_74bc776ae1c6cd57cc1acd41d9649b4bd98db0da7aacaa7d11066ca92467fc70_prof);

        
        $__internal_fd19484284132461b6ca180007510e48ae876c8bdcdbc137260bc1fa9241d13b->leave($__internal_fd19484284132461b6ca180007510e48ae876c8bdcdbc137260bc1fa9241d13b_prof);

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
        return array (  73 => 16,  67 => 13,  62 => 11,  58 => 10,  54 => 9,  50 => 8,  46 => 7,  42 => 6,  38 => 5,  34 => 4,  29 => 2,  25 => 1,);
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

\t{{ form_row(form.empresa) }}
\t{{ form_row(form.contrato) }}
\t{{ form_row(form.programa) }}
\t{{ form_row(form.descripcionDelGasto) }}
\t{{ form_row(form.cantidad) }}
\t{{ form_row(form.precio) }}
\t{{ form_row(form.participante) }}
\t{{ form_row(form.isCancelada) }}

\t{{ form_row(form.explicacionPorCancelada) }}

<button type=\"submit\" class=\"btn btn-primary\" formnovalidate>Añadir</button>
{{ form_end(form) }}
", ":factura:_form.html.twig", "/var/www/html/jComercial/app/Resources/views/factura/_form.html.twig");
    }
}
