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
        $__internal_f83607ab1b61ad9058a16fbeccb7e58eacd5bc02c2e54f1738f9072c7b5cd9f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f83607ab1b61ad9058a16fbeccb7e58eacd5bc02c2e54f1738f9072c7b5cd9f1->enter($__internal_f83607ab1b61ad9058a16fbeccb7e58eacd5bc02c2e54f1738f9072c7b5cd9f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":proveedor:_form.html.twig"));

        $__internal_a1c9eb3ce80c3e3d4277e53cc0b790f6f9752255d8cd38dc0851b18248acc1c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1c9eb3ce80c3e3d4277e53cc0b790f6f9752255d8cd38dc0851b18248acc1c2->enter($__internal_a1c9eb3ce80c3e3d4277e53cc0b790f6f9752255d8cd38dc0851b18248acc1c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":proveedor:_form.html.twig"));

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
        
        $__internal_f83607ab1b61ad9058a16fbeccb7e58eacd5bc02c2e54f1738f9072c7b5cd9f1->leave($__internal_f83607ab1b61ad9058a16fbeccb7e58eacd5bc02c2e54f1738f9072c7b5cd9f1_prof);

        
        $__internal_a1c9eb3ce80c3e3d4277e53cc0b790f6f9752255d8cd38dc0851b18248acc1c2->leave($__internal_a1c9eb3ce80c3e3d4277e53cc0b790f6f9752255d8cd38dc0851b18248acc1c2_prof);

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
