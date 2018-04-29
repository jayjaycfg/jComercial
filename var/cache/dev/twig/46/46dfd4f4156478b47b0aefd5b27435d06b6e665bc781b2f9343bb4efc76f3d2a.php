<?php

/* TwigBundle::layout.html.twig */
class __TwigTemplate_40d17f889cda0e9198fdd0de6a45002f4e95d20d7f1dda71b6e52967dec960e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6d62b4e21a4873508d81927cfc192d98d1aa5fd5bbac2ecf93ffb5a3272daa01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d62b4e21a4873508d81927cfc192d98d1aa5fd5bbac2ecf93ffb5a3272daa01->enter($__internal_6d62b4e21a4873508d81927cfc192d98d1aa5fd5bbac2ecf93ffb5a3272daa01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_ff6ae421b74b10c1c2bd798b92d31f4521f33f4aa14c5a06118ed95d7bc03edc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff6ae421b74b10c1c2bd798b92d31f4521f33f4aa14c5a06118ed95d7bc03edc->enter($__internal_ff6ae421b74b10c1c2bd798b92d31f4521f33f4aa14c5a06118ed95d7bc03edc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_6d62b4e21a4873508d81927cfc192d98d1aa5fd5bbac2ecf93ffb5a3272daa01->leave($__internal_6d62b4e21a4873508d81927cfc192d98d1aa5fd5bbac2ecf93ffb5a3272daa01_prof);

        
        $__internal_ff6ae421b74b10c1c2bd798b92d31f4521f33f4aa14c5a06118ed95d7bc03edc->leave($__internal_ff6ae421b74b10c1c2bd798b92d31f4521f33f4aa14c5a06118ed95d7bc03edc_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3b02e44a8dcfdff25c270bb86dda61b78b6b2fe1fc926bf7d9665a9841320dee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b02e44a8dcfdff25c270bb86dda61b78b6b2fe1fc926bf7d9665a9841320dee->enter($__internal_3b02e44a8dcfdff25c270bb86dda61b78b6b2fe1fc926bf7d9665a9841320dee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_193a0cfd5b748a99e5c779aec8d29eaad56b52f831dc489cb966c4d928e5a484 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_193a0cfd5b748a99e5c779aec8d29eaad56b52f831dc489cb966c4d928e5a484->enter($__internal_193a0cfd5b748a99e5c779aec8d29eaad56b52f831dc489cb966c4d928e5a484_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_193a0cfd5b748a99e5c779aec8d29eaad56b52f831dc489cb966c4d928e5a484->leave($__internal_193a0cfd5b748a99e5c779aec8d29eaad56b52f831dc489cb966c4d928e5a484_prof);

        
        $__internal_3b02e44a8dcfdff25c270bb86dda61b78b6b2fe1fc926bf7d9665a9841320dee->leave($__internal_3b02e44a8dcfdff25c270bb86dda61b78b6b2fe1fc926bf7d9665a9841320dee_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_db5d633b33210238f71e02397ddc8247664176270e76871e023a2c133cca269f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db5d633b33210238f71e02397ddc8247664176270e76871e023a2c133cca269f->enter($__internal_db5d633b33210238f71e02397ddc8247664176270e76871e023a2c133cca269f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b99396730ba73ca095405e3d61dfab080ba7b0f2018e8d9e77530679848460fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b99396730ba73ca095405e3d61dfab080ba7b0f2018e8d9e77530679848460fb->enter($__internal_b99396730ba73ca095405e3d61dfab080ba7b0f2018e8d9e77530679848460fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_b99396730ba73ca095405e3d61dfab080ba7b0f2018e8d9e77530679848460fb->leave($__internal_b99396730ba73ca095405e3d61dfab080ba7b0f2018e8d9e77530679848460fb_prof);

        
        $__internal_db5d633b33210238f71e02397ddc8247664176270e76871e023a2c133cca269f->leave($__internal_db5d633b33210238f71e02397ddc8247664176270e76871e023a2c133cca269f_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_9b96ca142ff2cc113234ae49365cb594a9d5a66b4955c5260e03de8c8ffd2953 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b96ca142ff2cc113234ae49365cb594a9d5a66b4955c5260e03de8c8ffd2953->enter($__internal_9b96ca142ff2cc113234ae49365cb594a9d5a66b4955c5260e03de8c8ffd2953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b200e668adca2ad5c7ae8daf28403ff0493ff07dd9730f39c6961f314146691c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b200e668adca2ad5c7ae8daf28403ff0493ff07dd9730f39c6961f314146691c->enter($__internal_b200e668adca2ad5c7ae8daf28403ff0493ff07dd9730f39c6961f314146691c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b200e668adca2ad5c7ae8daf28403ff0493ff07dd9730f39c6961f314146691c->leave($__internal_b200e668adca2ad5c7ae8daf28403ff0493ff07dd9730f39c6961f314146691c_prof);

        
        $__internal_9b96ca142ff2cc113234ae49365cb594a9d5a66b4955c5260e03de8c8ffd2953->leave($__internal_9b96ca142ff2cc113234ae49365cb594a9d5a66b4955c5260e03de8c8ffd2953_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "TwigBundle::layout.html.twig", "/var/www/html/jComercial/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
