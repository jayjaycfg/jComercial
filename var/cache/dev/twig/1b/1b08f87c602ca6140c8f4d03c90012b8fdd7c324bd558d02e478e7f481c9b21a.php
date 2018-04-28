<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_5ace0514ac51dddf7015e278581d1ccbc34e9ce9c04fa0c5adac0bc55a3fad5b extends Twig_Template
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
        $__internal_3c4799abcb27e19ca3deca63cf8f0157bc177026b39375a0746e12a750773521 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c4799abcb27e19ca3deca63cf8f0157bc177026b39375a0746e12a750773521->enter($__internal_3c4799abcb27e19ca3deca63cf8f0157bc177026b39375a0746e12a750773521_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_fed2efab52985bdd0e3f687762b9f41ccd2956b46f903908e222cdc5a5aca7b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fed2efab52985bdd0e3f687762b9f41ccd2956b46f903908e222cdc5a5aca7b7->enter($__internal_fed2efab52985bdd0e3f687762b9f41ccd2956b46f903908e222cdc5a5aca7b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c4799abcb27e19ca3deca63cf8f0157bc177026b39375a0746e12a750773521->leave($__internal_3c4799abcb27e19ca3deca63cf8f0157bc177026b39375a0746e12a750773521_prof);

        
        $__internal_fed2efab52985bdd0e3f687762b9f41ccd2956b46f903908e222cdc5a5aca7b7->leave($__internal_fed2efab52985bdd0e3f687762b9f41ccd2956b46f903908e222cdc5a5aca7b7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_bd08a86da80a2bb7382459e451fefb569661f6e283a76bbb211f586236862f81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd08a86da80a2bb7382459e451fefb569661f6e283a76bbb211f586236862f81->enter($__internal_bd08a86da80a2bb7382459e451fefb569661f6e283a76bbb211f586236862f81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3f15f402b644a1b0afb4d994743b31de8332bf2dc06af5f1b893e79011ae053a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f15f402b644a1b0afb4d994743b31de8332bf2dc06af5f1b893e79011ae053a->enter($__internal_3f15f402b644a1b0afb4d994743b31de8332bf2dc06af5f1b893e79011ae053a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_3f15f402b644a1b0afb4d994743b31de8332bf2dc06af5f1b893e79011ae053a->leave($__internal_3f15f402b644a1b0afb4d994743b31de8332bf2dc06af5f1b893e79011ae053a_prof);

        
        $__internal_bd08a86da80a2bb7382459e451fefb569661f6e283a76bbb211f586236862f81->leave($__internal_bd08a86da80a2bb7382459e451fefb569661f6e283a76bbb211f586236862f81_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_7df216f316fd2b47ce2f95e7398067cff36d4d6c9f136ebb699c8c694766d255 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7df216f316fd2b47ce2f95e7398067cff36d4d6c9f136ebb699c8c694766d255->enter($__internal_7df216f316fd2b47ce2f95e7398067cff36d4d6c9f136ebb699c8c694766d255_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e1055acd3b395e99798452d59b94a4031d88feb15e3367342eafeec8d5c153af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1055acd3b395e99798452d59b94a4031d88feb15e3367342eafeec8d5c153af->enter($__internal_e1055acd3b395e99798452d59b94a4031d88feb15e3367342eafeec8d5c153af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e1055acd3b395e99798452d59b94a4031d88feb15e3367342eafeec8d5c153af->leave($__internal_e1055acd3b395e99798452d59b94a4031d88feb15e3367342eafeec8d5c153af_prof);

        
        $__internal_7df216f316fd2b47ce2f95e7398067cff36d4d6c9f136ebb699c8c694766d255->leave($__internal_7df216f316fd2b47ce2f95e7398067cff36d4d6c9f136ebb699c8c694766d255_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_a3621d316b57590e2c85c4538b15491410f0cd59ec6f92c134cc019fc84654e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3621d316b57590e2c85c4538b15491410f0cd59ec6f92c134cc019fc84654e5->enter($__internal_a3621d316b57590e2c85c4538b15491410f0cd59ec6f92c134cc019fc84654e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3d5638a174dc43399de7ebda385aa9d7fe918081d6bc4d9a04708c06d2254d62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d5638a174dc43399de7ebda385aa9d7fe918081d6bc4d9a04708c06d2254d62->enter($__internal_3d5638a174dc43399de7ebda385aa9d7fe918081d6bc4d9a04708c06d2254d62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_3d5638a174dc43399de7ebda385aa9d7fe918081d6bc4d9a04708c06d2254d62->leave($__internal_3d5638a174dc43399de7ebda385aa9d7fe918081d6bc4d9a04708c06d2254d62_prof);

        
        $__internal_a3621d316b57590e2c85c4538b15491410f0cd59ec6f92c134cc019fc84654e5->leave($__internal_a3621d316b57590e2c85c4538b15491410f0cd59ec6f92c134cc019fc84654e5_prof);

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
", "TwigBundle:Exception:exception_full.html.twig", "/var/www/html/HeroQuest/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
