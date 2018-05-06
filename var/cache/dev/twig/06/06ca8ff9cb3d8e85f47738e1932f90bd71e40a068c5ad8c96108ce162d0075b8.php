<?php

/* :empresa:_form.html.twig */
class __TwigTemplate_ebc804b98528d9001ee95beb51d59097b4281ac9583f067360c2a32b9561e724 extends Twig_Template
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
        $__internal_5d5e086414a6bf123ec5c6b0d95a44d89bf4e9fc1dc50e4336f1042a1a51d6f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d5e086414a6bf123ec5c6b0d95a44d89bf4e9fc1dc50e4336f1042a1a51d6f8->enter($__internal_5d5e086414a6bf123ec5c6b0d95a44d89bf4e9fc1dc50e4336f1042a1a51d6f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":empresa:_form.html.twig"));

        $__internal_d0569a7407d040b622ff730a98a339e22341a6420d68862f1551ec173819b263 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0569a7407d040b622ff730a98a339e22341a6420d68862f1551ec173819b263->enter($__internal_d0569a7407d040b622ff730a98a339e22341a6420d68862f1551ec173819b263_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":empresa:_form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
\t";
        // line 2
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
\t";
        // line 3
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nombre", array()), 'row');
        echo "
\t";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "domicilioLegal", array()), 'row');
        echo "

<button type=\"submit\" class=\"btn btn-primary\" formnovalidate>Añadir</button>
";
        // line 7
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        
        $__internal_5d5e086414a6bf123ec5c6b0d95a44d89bf4e9fc1dc50e4336f1042a1a51d6f8->leave($__internal_5d5e086414a6bf123ec5c6b0d95a44d89bf4e9fc1dc50e4336f1042a1a51d6f8_prof);

        
        $__internal_d0569a7407d040b622ff730a98a339e22341a6420d68862f1551ec173819b263->leave($__internal_d0569a7407d040b622ff730a98a339e22341a6420d68862f1551ec173819b263_prof);

    }

    public function getTemplateName()
    {
        return ":empresa:_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  37 => 4,  33 => 3,  29 => 2,  25 => 1,);
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
\t{{ form_row(form.nombre) }}
\t{{ form_row(form.domicilioLegal) }}

<button type=\"submit\" class=\"btn btn-primary\" formnovalidate>Añadir</button>
{{form_end(form) }}", ":empresa:_form.html.twig", "/var/www/html/jComercial/app/Resources/views/empresa/_form.html.twig");
    }
}
