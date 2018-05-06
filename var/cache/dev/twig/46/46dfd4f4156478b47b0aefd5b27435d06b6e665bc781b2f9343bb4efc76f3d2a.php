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
        $__internal_1dea028fe04164139f2b3689006dc801d2d26de5afd568a2ee069109b2d843cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1dea028fe04164139f2b3689006dc801d2d26de5afd568a2ee069109b2d843cc->enter($__internal_1dea028fe04164139f2b3689006dc801d2d26de5afd568a2ee069109b2d843cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_7d0d62c1c1f9b1e7044a8b496ee0dd971b2dcf845f2fff6dc33a5b5ecb5250b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d0d62c1c1f9b1e7044a8b496ee0dd971b2dcf845f2fff6dc33a5b5ecb5250b2->enter($__internal_7d0d62c1c1f9b1e7044a8b496ee0dd971b2dcf845f2fff6dc33a5b5ecb5250b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

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
        
        $__internal_1dea028fe04164139f2b3689006dc801d2d26de5afd568a2ee069109b2d843cc->leave($__internal_1dea028fe04164139f2b3689006dc801d2d26de5afd568a2ee069109b2d843cc_prof);

        
        $__internal_7d0d62c1c1f9b1e7044a8b496ee0dd971b2dcf845f2fff6dc33a5b5ecb5250b2->leave($__internal_7d0d62c1c1f9b1e7044a8b496ee0dd971b2dcf845f2fff6dc33a5b5ecb5250b2_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ba127dc653afe06a506e298d03c161c4f4381119140d2eee5bf8c6016ae2b932 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba127dc653afe06a506e298d03c161c4f4381119140d2eee5bf8c6016ae2b932->enter($__internal_ba127dc653afe06a506e298d03c161c4f4381119140d2eee5bf8c6016ae2b932_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_584ea61ffb256ecdbc976081723dbc53e8250ff245b772f74f90bd583f9d3bd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_584ea61ffb256ecdbc976081723dbc53e8250ff245b772f74f90bd583f9d3bd3->enter($__internal_584ea61ffb256ecdbc976081723dbc53e8250ff245b772f74f90bd583f9d3bd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_584ea61ffb256ecdbc976081723dbc53e8250ff245b772f74f90bd583f9d3bd3->leave($__internal_584ea61ffb256ecdbc976081723dbc53e8250ff245b772f74f90bd583f9d3bd3_prof);

        
        $__internal_ba127dc653afe06a506e298d03c161c4f4381119140d2eee5bf8c6016ae2b932->leave($__internal_ba127dc653afe06a506e298d03c161c4f4381119140d2eee5bf8c6016ae2b932_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_3f1c9765b0fd1c98ca54f27cb1e5cbe3195baa21ae1851c2b903840095a5e03d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f1c9765b0fd1c98ca54f27cb1e5cbe3195baa21ae1851c2b903840095a5e03d->enter($__internal_3f1c9765b0fd1c98ca54f27cb1e5cbe3195baa21ae1851c2b903840095a5e03d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b75bbe664e6592be71fff9efc94c56306ff15f1d7b7d08fa5101fb8010653f6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b75bbe664e6592be71fff9efc94c56306ff15f1d7b7d08fa5101fb8010653f6a->enter($__internal_b75bbe664e6592be71fff9efc94c56306ff15f1d7b7d08fa5101fb8010653f6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_b75bbe664e6592be71fff9efc94c56306ff15f1d7b7d08fa5101fb8010653f6a->leave($__internal_b75bbe664e6592be71fff9efc94c56306ff15f1d7b7d08fa5101fb8010653f6a_prof);

        
        $__internal_3f1c9765b0fd1c98ca54f27cb1e5cbe3195baa21ae1851c2b903840095a5e03d->leave($__internal_3f1c9765b0fd1c98ca54f27cb1e5cbe3195baa21ae1851c2b903840095a5e03d_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_14ee22e007d39a12aa2cc5f218a088e49e7996d868af502fd8beb0e267986d08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14ee22e007d39a12aa2cc5f218a088e49e7996d868af502fd8beb0e267986d08->enter($__internal_14ee22e007d39a12aa2cc5f218a088e49e7996d868af502fd8beb0e267986d08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_eb8ab0cdeda0f1df2c94b571a303b4a62c1dab4c3713d0d9eab9377a50630f06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb8ab0cdeda0f1df2c94b571a303b4a62c1dab4c3713d0d9eab9377a50630f06->enter($__internal_eb8ab0cdeda0f1df2c94b571a303b4a62c1dab4c3713d0d9eab9377a50630f06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_eb8ab0cdeda0f1df2c94b571a303b4a62c1dab4c3713d0d9eab9377a50630f06->leave($__internal_eb8ab0cdeda0f1df2c94b571a303b4a62c1dab4c3713d0d9eab9377a50630f06_prof);

        
        $__internal_14ee22e007d39a12aa2cc5f218a088e49e7996d868af502fd8beb0e267986d08->leave($__internal_14ee22e007d39a12aa2cc5f218a088e49e7996d868af502fd8beb0e267986d08_prof);

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
