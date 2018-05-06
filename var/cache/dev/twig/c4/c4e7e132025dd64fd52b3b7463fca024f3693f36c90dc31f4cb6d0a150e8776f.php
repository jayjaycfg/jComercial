<?php

/* :cliente:new.html.twig */
class __TwigTemplate_06a7405efdc5a260b061b63f7f096d3a193a797cb5e62a3e34af3126fd042849 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":cliente:FormLayout.html.twig", ":cliente:new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return ":cliente:FormLayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9e3e2301833a014a8990f39a279fa79d9403eb0a56d37d147e7ccb3510f0c8de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e3e2301833a014a8990f39a279fa79d9403eb0a56d37d147e7ccb3510f0c8de->enter($__internal_9e3e2301833a014a8990f39a279fa79d9403eb0a56d37d147e7ccb3510f0c8de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":cliente:new.html.twig"));

        $__internal_86fb1a4b57affc9b40d973b24ad46f4e1e7b773cc2901333564a58e48b59ca86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86fb1a4b57affc9b40d973b24ad46f4e1e7b773cc2901333564a58e48b59ca86->enter($__internal_86fb1a4b57affc9b40d973b24ad46f4e1e7b773cc2901333564a58e48b59ca86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":cliente:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e3e2301833a014a8990f39a279fa79d9403eb0a56d37d147e7ccb3510f0c8de->leave($__internal_9e3e2301833a014a8990f39a279fa79d9403eb0a56d37d147e7ccb3510f0c8de_prof);

        
        $__internal_86fb1a4b57affc9b40d973b24ad46f4e1e7b773cc2901333564a58e48b59ca86->leave($__internal_86fb1a4b57affc9b40d973b24ad46f4e1e7b773cc2901333564a58e48b59ca86_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_df7f34c69045adacf8ad108ad497b1e6de98d7e0325fef56c6ed8a00f2b5208e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df7f34c69045adacf8ad108ad497b1e6de98d7e0325fef56c6ed8a00f2b5208e->enter($__internal_df7f34c69045adacf8ad108ad497b1e6de98d7e0325fef56c6ed8a00f2b5208e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3fe77b82be8e3a7027114f980743598131f1d1e9d98cf0e5ca794aa4881c31d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fe77b82be8e3a7027114f980743598131f1d1e9d98cf0e5ca794aa4881c31d1->enter($__internal_3fe77b82be8e3a7027114f980743598131f1d1e9d98cf0e5ca794aa4881c31d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-12\">
\t\t\t\t<h1>Nuevo Contrato con cliente</h1>
\t\t\t\t";
        // line 9
        echo twig_include($this->env, $context, ":/cliente:_form.html.twig");
        echo "
\t\t\t</div>
\t\t</div>
\t</div>

";
        
        $__internal_3fe77b82be8e3a7027114f980743598131f1d1e9d98cf0e5ca794aa4881c31d1->leave($__internal_3fe77b82be8e3a7027114f980743598131f1d1e9d98cf0e5ca794aa4881c31d1_prof);

        
        $__internal_df7f34c69045adacf8ad108ad497b1e6de98d7e0325fef56c6ed8a00f2b5208e->leave($__internal_df7f34c69045adacf8ad108ad497b1e6de98d7e0325fef56c6ed8a00f2b5208e_prof);

    }

    public function getTemplateName()
    {
        return ":cliente:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 9,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends ':cliente:FormLayout.html.twig' %}

{% block body %}

\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-12\">
\t\t\t\t<h1>Nuevo Contrato con cliente</h1>
\t\t\t\t{{ include(':/cliente:_form.html.twig') }}
\t\t\t</div>
\t\t</div>
\t</div>

{% endblock %}

", ":cliente:new.html.twig", "/var/www/html/jComercial/app/Resources/views/cliente/new.html.twig");
    }
}
