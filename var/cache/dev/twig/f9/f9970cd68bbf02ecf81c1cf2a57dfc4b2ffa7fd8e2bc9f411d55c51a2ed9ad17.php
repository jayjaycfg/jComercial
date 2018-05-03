<?php

/* :factura:new.html.twig */
class __TwigTemplate_bfad2b125762be9f1df5683a2f8e022a7ba502a784320db9a3e1fe3734d52056 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":cliente:FormLayout.html.twig", ":factura:new.html.twig", 1);
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
        $__internal_dbb202523c4385c8a64b9abfedeb8c76979fab34baf3ed1715f4d74de81e6d36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbb202523c4385c8a64b9abfedeb8c76979fab34baf3ed1715f4d74de81e6d36->enter($__internal_dbb202523c4385c8a64b9abfedeb8c76979fab34baf3ed1715f4d74de81e6d36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":factura:new.html.twig"));

        $__internal_d39ddf0236c5ec0c52f6dab6358a1d5565e8e04ddf1e94a124bdf0d8174a0ba5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d39ddf0236c5ec0c52f6dab6358a1d5565e8e04ddf1e94a124bdf0d8174a0ba5->enter($__internal_d39ddf0236c5ec0c52f6dab6358a1d5565e8e04ddf1e94a124bdf0d8174a0ba5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":factura:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dbb202523c4385c8a64b9abfedeb8c76979fab34baf3ed1715f4d74de81e6d36->leave($__internal_dbb202523c4385c8a64b9abfedeb8c76979fab34baf3ed1715f4d74de81e6d36_prof);

        
        $__internal_d39ddf0236c5ec0c52f6dab6358a1d5565e8e04ddf1e94a124bdf0d8174a0ba5->leave($__internal_d39ddf0236c5ec0c52f6dab6358a1d5565e8e04ddf1e94a124bdf0d8174a0ba5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_326e2366fab98674d8f5c6a4f2e8212b121509dc7ad3b719ba301ea7bdb672cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_326e2366fab98674d8f5c6a4f2e8212b121509dc7ad3b719ba301ea7bdb672cf->enter($__internal_326e2366fab98674d8f5c6a4f2e8212b121509dc7ad3b719ba301ea7bdb672cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cd491c75da6eb7cf917eecdd5f5a47e34649ab74d6d1b30dcc79481683e56af3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd491c75da6eb7cf917eecdd5f5a47e34649ab74d6d1b30dcc79481683e56af3->enter($__internal_cd491c75da6eb7cf917eecdd5f5a47e34649ab74d6d1b30dcc79481683e56af3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-12\">
\t\t\t\t<h1>Nueva Factura</h1>
\t\t\t\t";
        // line 8
        echo twig_include($this->env, $context, ":/factura:_form.html.twig");
        echo "
\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_cd491c75da6eb7cf917eecdd5f5a47e34649ab74d6d1b30dcc79481683e56af3->leave($__internal_cd491c75da6eb7cf917eecdd5f5a47e34649ab74d6d1b30dcc79481683e56af3_prof);

        
        $__internal_326e2366fab98674d8f5c6a4f2e8212b121509dc7ad3b719ba301ea7bdb672cf->leave($__internal_326e2366fab98674d8f5c6a4f2e8212b121509dc7ad3b719ba301ea7bdb672cf_prof);

    }

    public function getTemplateName()
    {
        return ":factura:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 8,  49 => 4,  40 => 3,  11 => 1,);
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
\t\t\t\t<h1>Nueva Factura</h1>
\t\t\t\t{{ include(':/factura:_form.html.twig') }}
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}
", ":factura:new.html.twig", "/var/www/html/jComercial/app/Resources/views/factura/new.html.twig");
    }
}
