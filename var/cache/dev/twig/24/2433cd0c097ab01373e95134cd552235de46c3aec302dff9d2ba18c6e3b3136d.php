<?php

/* :proveedor:_form.html.twig */
class __TwigTemplate_c15d258fa66db304c772d0b4f3dffbffc08df8502fba5a1928968a63f8071966 extends Twig_Template
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
        $__internal_eec934bff2dffa6d45428384c728677344ee3f18a41e5676198f80ec2b93b4d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eec934bff2dffa6d45428384c728677344ee3f18a41e5676198f80ec2b93b4d9->enter($__internal_eec934bff2dffa6d45428384c728677344ee3f18a41e5676198f80ec2b93b4d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":proveedor:_form.html.twig"));

        $__internal_67ddfb1248b525a4821e5ea8d8c249a9a7a716821d40c00caa46c15cdb3c4fe4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67ddfb1248b525a4821e5ea8d8c249a9a7a716821d40c00caa46c15cdb3c4fe4->enter($__internal_67ddfb1248b525a4821e5ea8d8c249a9a7a716821d40c00caa46c15cdb3c4fe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":proveedor:_form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "

\t";
        // line 3
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
\t";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "contratNumber", array()), 'row');
        echo "
\t";
        // line 5
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "numberAccount", array()), 'row');
        echo "
\t";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "startAt", array()), 'row');
        echo "
\t";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "endAt", array()), 'row');
        echo "

<button class=\"btn btn-primary\" type=\"submit\" formnovalidate>Guardar!</button>

";
        // line 11
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        
        $__internal_eec934bff2dffa6d45428384c728677344ee3f18a41e5676198f80ec2b93b4d9->leave($__internal_eec934bff2dffa6d45428384c728677344ee3f18a41e5676198f80ec2b93b4d9_prof);

        
        $__internal_67ddfb1248b525a4821e5ea8d8c249a9a7a716821d40c00caa46c15cdb3c4fe4->leave($__internal_67ddfb1248b525a4821e5ea8d8c249a9a7a716821d40c00caa46c15cdb3c4fe4_prof);

    }

    public function getTemplateName()
    {
        return ":proveedor:_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 11,  46 => 7,  42 => 6,  38 => 5,  34 => 4,  30 => 3,  25 => 1,);
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
\t{{ form_row(form.contratNumber) }}
\t{{ form_row(form.numberAccount) }}
\t{{ form_row(form.startAt) }}
\t{{ form_row(form.endAt) }}

<button class=\"btn btn-primary\" type=\"submit\" formnovalidate>Guardar!</button>

{{ form_end(form) }}", ":proveedor:_form.html.twig", "/var/www/html/jComercial/app/Resources/views/proveedor/_form.html.twig");
    }
}
