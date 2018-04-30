<?php

/* :/cliente:_form.html.twig */
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
        $__internal_59de020ff2ed8379f4f3f1840012ce6a415700831943fc038fd3320bc8038291 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59de020ff2ed8379f4f3f1840012ce6a415700831943fc038fd3320bc8038291->enter($__internal_59de020ff2ed8379f4f3f1840012ce6a415700831943fc038fd3320bc8038291_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":/cliente:_form.html.twig"));

        $__internal_25842b69b991f966490efb4aa23728b3422bf88dd0ebcf3f5d9d7e8dc19f409e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25842b69b991f966490efb4aa23728b3422bf88dd0ebcf3f5d9d7e8dc19f409e->enter($__internal_25842b69b991f966490efb4aa23728b3422bf88dd0ebcf3f5d9d7e8dc19f409e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":/cliente:_form.html.twig"));

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
        
        $__internal_59de020ff2ed8379f4f3f1840012ce6a415700831943fc038fd3320bc8038291->leave($__internal_59de020ff2ed8379f4f3f1840012ce6a415700831943fc038fd3320bc8038291_prof);

        
        $__internal_25842b69b991f966490efb4aa23728b3422bf88dd0ebcf3f5d9d7e8dc19f409e->leave($__internal_25842b69b991f966490efb4aa23728b3422bf88dd0ebcf3f5d9d7e8dc19f409e_prof);

    }

    public function getTemplateName()
    {
        return ":/cliente:_form.html.twig";
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
{{ form_end(form) }}", ":/cliente:_form.html.twig", "/var/www/html/jComercial/app/Resources/views/cliente/_form.html.twig");
    }
}
