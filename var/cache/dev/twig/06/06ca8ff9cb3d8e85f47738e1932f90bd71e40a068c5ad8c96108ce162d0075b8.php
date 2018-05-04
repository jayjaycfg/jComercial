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
        $__internal_a1114288b8072ff967d70c0a2130f7cff64c5d256244a449a104f7dff02025be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1114288b8072ff967d70c0a2130f7cff64c5d256244a449a104f7dff02025be->enter($__internal_a1114288b8072ff967d70c0a2130f7cff64c5d256244a449a104f7dff02025be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":empresa:_form.html.twig"));

        $__internal_86a8506846124f9ac413ec6cb00347b245e10e2d362414fb2052e3215be880f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86a8506846124f9ac413ec6cb00347b245e10e2d362414fb2052e3215be880f2->enter($__internal_86a8506846124f9ac413ec6cb00347b245e10e2d362414fb2052e3215be880f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":empresa:_form.html.twig"));

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
        
        $__internal_a1114288b8072ff967d70c0a2130f7cff64c5d256244a449a104f7dff02025be->leave($__internal_a1114288b8072ff967d70c0a2130f7cff64c5d256244a449a104f7dff02025be_prof);

        
        $__internal_86a8506846124f9ac413ec6cb00347b245e10e2d362414fb2052e3215be880f2->leave($__internal_86a8506846124f9ac413ec6cb00347b245e10e2d362414fb2052e3215be880f2_prof);

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
