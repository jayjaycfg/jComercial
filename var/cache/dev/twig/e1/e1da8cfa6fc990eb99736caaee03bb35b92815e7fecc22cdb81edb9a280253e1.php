<?php

/* :/contrato:_form.html.twig */
class __TwigTemplate_90c62ac3d8b3dbd10cd7b3b7400cd22edac7fd6243c72f19c16e73136ca1f6e9 extends Twig_Template
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
        $__internal_6fb710ff935e7156239265720834b7e503191f7b87471479f300f0b5f193c6ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fb710ff935e7156239265720834b7e503191f7b87471479f300f0b5f193c6ab->enter($__internal_6fb710ff935e7156239265720834b7e503191f7b87471479f300f0b5f193c6ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":/contrato:_form.html.twig"));

        $__internal_48e54348e45bbf361f65d91f7bb27734c5cd56732dd3dfe22758f5734aa3cf58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48e54348e45bbf361f65d91f7bb27734c5cd56732dd3dfe22758f5734aa3cf58->enter($__internal_48e54348e45bbf361f65d91f7bb27734c5cd56732dd3dfe22758f5734aa3cf58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":/contrato:_form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
\t\t\t\t\t";
        // line 2
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "noDeOrden", array()), 'row');
        echo "
\t\t\t\t\t";
        // line 3
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "empresa", array()), 'row');
        echo "
\t\t\t\t\t";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tipoDeContrato", array()), 'row');
        echo "
\t\t\t\t\t";
        // line 5
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "valorInicialMn", array()), 'row');
        echo "
\t\t\t\t\t";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "valorInicialCuc", array()), 'row');
        echo "
\t\t\t\t\t";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "isSuplemento", array()), 'row');
        echo "
\t\t\t\t\t";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "actaDeFirmado", array()), 'row');
        echo "
\t\t\t\t\t";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fechaDeOtorgamiento", array()), 'row');
        echo "
\t\t\t\t\t";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fechaDeVencimiento", array()), 'row');
        echo "
\t\t\t\t\t";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "telefono", array()), 'row');
        echo "
\t\t\t\t\t";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "correo", array()), 'row');
        echo "
\t\t\t\t\t";
        // line 14
        echo "\t\t\t\t\t";
        // line 15
        echo "\t\t\t\t\t";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "isClienteOrProveedor", array()), 'row');
        echo "
\t\t\t\t\t";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ministerio", array()), 'row');
        echo "

<button type=\"submit\" class=\"btn btn-primary\" formnovalidate>Añadir</button>
";
        // line 19
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        
        $__internal_6fb710ff935e7156239265720834b7e503191f7b87471479f300f0b5f193c6ab->leave($__internal_6fb710ff935e7156239265720834b7e503191f7b87471479f300f0b5f193c6ab_prof);

        
        $__internal_48e54348e45bbf361f65d91f7bb27734c5cd56732dd3dfe22758f5734aa3cf58->leave($__internal_48e54348e45bbf361f65d91f7bb27734c5cd56732dd3dfe22758f5734aa3cf58_prof);

    }

    public function getTemplateName()
    {
        return ":/contrato:_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 19,  80 => 16,  75 => 15,  73 => 14,  69 => 12,  65 => 11,  61 => 10,  57 => 9,  53 => 8,  49 => 7,  45 => 6,  41 => 5,  37 => 4,  33 => 3,  29 => 2,  25 => 1,);
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
\t\t\t\t\t{{ form_row(form.noDeOrden) }}
\t\t\t\t\t{{ form_row(form.empresa) }}
\t\t\t\t\t{{ form_row(form.tipoDeContrato) }}
\t\t\t\t\t{{ form_row(form.valorInicialMn) }}
\t\t\t\t\t{{ form_row(form.valorInicialCuc) }}
\t\t\t\t\t{{ form_row(form.isSuplemento) }}
\t\t\t\t\t{{ form_row(form.actaDeFirmado) }}
\t\t\t\t\t{{ form_row(form.fechaDeOtorgamiento) }}
\t\t\t\t\t{{ form_row(form.fechaDeVencimiento) }}
\t\t\t\t\t{{ form_row(form.telefono) }}
\t\t\t\t\t{{ form_row(form.correo) }}
\t\t\t\t\t{#{{ form_row(form.isCliente) }}#}
\t\t\t\t\t{#{{ form_row(form.isProveedor) }}#}
\t\t\t\t\t{{ form_row(form.isClienteOrProveedor) }}
\t\t\t\t\t{{ form_row(form.ministerio) }}

<button type=\"submit\" class=\"btn btn-primary\" formnovalidate>Añadir</button>
{{ form_end(form) }}", ":/contrato:_form.html.twig", "/var/www/html/jComercial/app/Resources/views/contrato/_form.html.twig");
    }
}
