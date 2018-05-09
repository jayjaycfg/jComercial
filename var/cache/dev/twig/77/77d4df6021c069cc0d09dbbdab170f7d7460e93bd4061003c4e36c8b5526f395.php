<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_da8fc418165ddf240387f2927a5ad948fc64aaef9c0912c250723afb6ee5c683 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_be705cf4bf8ca82b06f5d5b31cc77992738a3bcac43f1dd12beb5f02749d6b5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be705cf4bf8ca82b06f5d5b31cc77992738a3bcac43f1dd12beb5f02749d6b5a->enter($__internal_be705cf4bf8ca82b06f5d5b31cc77992738a3bcac43f1dd12beb5f02749d6b5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_38f7d9434a9dca8e7cc94b456a848e46472db011b3eccf86701fdb196c3c2d4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38f7d9434a9dca8e7cc94b456a848e46472db011b3eccf86701fdb196c3c2d4b->enter($__internal_38f7d9434a9dca8e7cc94b456a848e46472db011b3eccf86701fdb196c3c2d4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be705cf4bf8ca82b06f5d5b31cc77992738a3bcac43f1dd12beb5f02749d6b5a->leave($__internal_be705cf4bf8ca82b06f5d5b31cc77992738a3bcac43f1dd12beb5f02749d6b5a_prof);

        
        $__internal_38f7d9434a9dca8e7cc94b456a848e46472db011b3eccf86701fdb196c3c2d4b->leave($__internal_38f7d9434a9dca8e7cc94b456a848e46472db011b3eccf86701fdb196c3c2d4b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3bc30033e23497a73405d07e67412a235c00a72499cd4292034bf172e14db4fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bc30033e23497a73405d07e67412a235c00a72499cd4292034bf172e14db4fc->enter($__internal_3bc30033e23497a73405d07e67412a235c00a72499cd4292034bf172e14db4fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_7067b0edcda5d92a96788eb8633646ac6a76f51881548a9368ec35954ede98cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7067b0edcda5d92a96788eb8633646ac6a76f51881548a9368ec35954ede98cf->enter($__internal_7067b0edcda5d92a96788eb8633646ac6a76f51881548a9368ec35954ede98cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_7067b0edcda5d92a96788eb8633646ac6a76f51881548a9368ec35954ede98cf->leave($__internal_7067b0edcda5d92a96788eb8633646ac6a76f51881548a9368ec35954ede98cf_prof);

        
        $__internal_3bc30033e23497a73405d07e67412a235c00a72499cd4292034bf172e14db4fc->leave($__internal_3bc30033e23497a73405d07e67412a235c00a72499cd4292034bf172e14db4fc_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/var/www/html/jComercial/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
