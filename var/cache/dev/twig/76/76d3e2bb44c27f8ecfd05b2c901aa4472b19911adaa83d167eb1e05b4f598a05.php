<?php

/* :factura:FormLayout.html.twig */
class __TwigTemplate_a1c5cb4e21b1016790b62a431cc8b0ad05a9a6526f6521f26ef3970f05e48c6b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":factura:FormLayout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e487f46d559968eb06b6ede3aeed6660ee99e240dce0015e906fa789103b072d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e487f46d559968eb06b6ede3aeed6660ee99e240dce0015e906fa789103b072d->enter($__internal_e487f46d559968eb06b6ede3aeed6660ee99e240dce0015e906fa789103b072d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":factura:FormLayout.html.twig"));

        $__internal_831a90a7ce3d13da67346e6506dbfaf8f62b4a483f7b87f861650f94a15a1c41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_831a90a7ce3d13da67346e6506dbfaf8f62b4a483f7b87f861650f94a15a1c41->enter($__internal_831a90a7ce3d13da67346e6506dbfaf8f62b4a483f7b87f861650f94a15a1c41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":factura:FormLayout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e487f46d559968eb06b6ede3aeed6660ee99e240dce0015e906fa789103b072d->leave($__internal_e487f46d559968eb06b6ede3aeed6660ee99e240dce0015e906fa789103b072d_prof);

        
        $__internal_831a90a7ce3d13da67346e6506dbfaf8f62b4a483f7b87f861650f94a15a1c41->leave($__internal_831a90a7ce3d13da67346e6506dbfaf8f62b4a483f7b87f861650f94a15a1c41_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d08ae70dcbb1060a67b5a45dee6f724e789e20f84e52acc379102495e1e69978 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d08ae70dcbb1060a67b5a45dee6f724e789e20f84e52acc379102495e1e69978->enter($__internal_d08ae70dcbb1060a67b5a45dee6f724e789e20f84e52acc379102495e1e69978_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_13d7e73cee30fe09d793bb40091b5b403ed3b6802bf87c473b6ac9c3ff9748fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13d7e73cee30fe09d793bb40091b5b403ed3b6802bf87c473b6ac9c3ff9748fd->enter($__internal_13d7e73cee30fe09d793bb40091b5b403ed3b6802bf87c473b6ac9c3ff9748fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-12\">

\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_13d7e73cee30fe09d793bb40091b5b403ed3b6802bf87c473b6ac9c3ff9748fd->leave($__internal_13d7e73cee30fe09d793bb40091b5b403ed3b6802bf87c473b6ac9c3ff9748fd_prof);

        
        $__internal_d08ae70dcbb1060a67b5a45dee6f724e789e20f84e52acc379102495e1e69978->leave($__internal_d08ae70dcbb1060a67b5a45dee6f724e789e20f84e52acc379102495e1e69978_prof);

    }

    public function getTemplateName()
    {
        return ":factura:FormLayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-12\">

\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}
", ":factura:FormLayout.html.twig", "/var/www/html/jComercial/app/Resources/views/factura/FormLayout.html.twig");
    }
}
