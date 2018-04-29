<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_1878275fdbc32b660cfbee6afea5d6e15c55adb100b0dbddcb4be415750c22a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_931e84e630ad1f7e57ad63f3a2ae0e6878399c585293c9058b3b11a40b6e1634 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_931e84e630ad1f7e57ad63f3a2ae0e6878399c585293c9058b3b11a40b6e1634->enter($__internal_931e84e630ad1f7e57ad63f3a2ae0e6878399c585293c9058b3b11a40b6e1634_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_18f8069f3dc27912273082c6538f10681e835f131c185d0884ae2fde294d6e88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18f8069f3dc27912273082c6538f10681e835f131c185d0884ae2fde294d6e88->enter($__internal_18f8069f3dc27912273082c6538f10681e835f131c185d0884ae2fde294d6e88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_931e84e630ad1f7e57ad63f3a2ae0e6878399c585293c9058b3b11a40b6e1634->leave($__internal_931e84e630ad1f7e57ad63f3a2ae0e6878399c585293c9058b3b11a40b6e1634_prof);

        
        $__internal_18f8069f3dc27912273082c6538f10681e835f131c185d0884ae2fde294d6e88->leave($__internal_18f8069f3dc27912273082c6538f10681e835f131c185d0884ae2fde294d6e88_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c6097919f045e0a32756474e837c110b620cc739a4f251daa38178ea5ca8ff7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6097919f045e0a32756474e837c110b620cc739a4f251daa38178ea5ca8ff7b->enter($__internal_c6097919f045e0a32756474e837c110b620cc739a4f251daa38178ea5ca8ff7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1c778a187afb54685ecb0737f8b4d4d5e0e0c1660a53590b0dc2207570052cce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c778a187afb54685ecb0737f8b4d4d5e0e0c1660a53590b0dc2207570052cce->enter($__internal_1c778a187afb54685ecb0737f8b4d4d5e0e0c1660a53590b0dc2207570052cce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_1c778a187afb54685ecb0737f8b4d4d5e0e0c1660a53590b0dc2207570052cce->leave($__internal_1c778a187afb54685ecb0737f8b4d4d5e0e0c1660a53590b0dc2207570052cce_prof);

        
        $__internal_c6097919f045e0a32756474e837c110b620cc739a4f251daa38178ea5ca8ff7b->leave($__internal_c6097919f045e0a32756474e837c110b620cc739a4f251daa38178ea5ca8ff7b_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_ee1601c223dc95ae8bd1a51889213ce25c5db5d8c9f5a1a7a3f54f6c4342dc2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee1601c223dc95ae8bd1a51889213ce25c5db5d8c9f5a1a7a3f54f6c4342dc2e->enter($__internal_ee1601c223dc95ae8bd1a51889213ce25c5db5d8c9f5a1a7a3f54f6c4342dc2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_60bfba3138ddc25d0002ed5cb0fa5b26e9ad53a8f02f76891d561080f733a711 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60bfba3138ddc25d0002ed5cb0fa5b26e9ad53a8f02f76891d561080f733a711->enter($__internal_60bfba3138ddc25d0002ed5cb0fa5b26e9ad53a8f02f76891d561080f733a711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_60bfba3138ddc25d0002ed5cb0fa5b26e9ad53a8f02f76891d561080f733a711->leave($__internal_60bfba3138ddc25d0002ed5cb0fa5b26e9ad53a8f02f76891d561080f733a711_prof);

        
        $__internal_ee1601c223dc95ae8bd1a51889213ce25c5db5d8c9f5a1a7a3f54f6c4342dc2e->leave($__internal_ee1601c223dc95ae8bd1a51889213ce25c5db5d8c9f5a1a7a3f54f6c4342dc2e_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_198d4e0a091a0ce474915ebe9c4828d72840938a1773f7a77bef294e01f5c3be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_198d4e0a091a0ce474915ebe9c4828d72840938a1773f7a77bef294e01f5c3be->enter($__internal_198d4e0a091a0ce474915ebe9c4828d72840938a1773f7a77bef294e01f5c3be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fcbd7919fb96ce89b55464cd6cf88b628ebaa22766e8609806fc572bdc355fbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcbd7919fb96ce89b55464cd6cf88b628ebaa22766e8609806fc572bdc355fbf->enter($__internal_fcbd7919fb96ce89b55464cd6cf88b628ebaa22766e8609806fc572bdc355fbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_fcbd7919fb96ce89b55464cd6cf88b628ebaa22766e8609806fc572bdc355fbf->leave($__internal_fcbd7919fb96ce89b55464cd6cf88b628ebaa22766e8609806fc572bdc355fbf_prof);

        
        $__internal_198d4e0a091a0ce474915ebe9c4828d72840938a1773f7a77bef294e01f5c3be->leave($__internal_198d4e0a091a0ce474915ebe9c4828d72840938a1773f7a77bef294e01f5c3be_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/var/www/html/jComercial/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
