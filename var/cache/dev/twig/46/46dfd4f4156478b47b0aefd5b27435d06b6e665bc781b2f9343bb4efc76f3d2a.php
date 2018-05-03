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
        $__internal_b47bdb971a00dc91b995d5fd4e765768cd222b0943132bea1144240386910b56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b47bdb971a00dc91b995d5fd4e765768cd222b0943132bea1144240386910b56->enter($__internal_b47bdb971a00dc91b995d5fd4e765768cd222b0943132bea1144240386910b56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_9a76ddcc5fd90b822a13ee2d3a928f1e5853bef838b7a3bb76e61409c84a0a6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a76ddcc5fd90b822a13ee2d3a928f1e5853bef838b7a3bb76e61409c84a0a6b->enter($__internal_9a76ddcc5fd90b822a13ee2d3a928f1e5853bef838b7a3bb76e61409c84a0a6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

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
        
        $__internal_b47bdb971a00dc91b995d5fd4e765768cd222b0943132bea1144240386910b56->leave($__internal_b47bdb971a00dc91b995d5fd4e765768cd222b0943132bea1144240386910b56_prof);

        
        $__internal_9a76ddcc5fd90b822a13ee2d3a928f1e5853bef838b7a3bb76e61409c84a0a6b->leave($__internal_9a76ddcc5fd90b822a13ee2d3a928f1e5853bef838b7a3bb76e61409c84a0a6b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f480023c17f7e100bdc76a543eeb07bd312674fe29f4e76d0c34316593ed586d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f480023c17f7e100bdc76a543eeb07bd312674fe29f4e76d0c34316593ed586d->enter($__internal_f480023c17f7e100bdc76a543eeb07bd312674fe29f4e76d0c34316593ed586d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9d090431e7f3e066d849157a19c8d7b097c80f5e317c6de95dab0b9b5d024439 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d090431e7f3e066d849157a19c8d7b097c80f5e317c6de95dab0b9b5d024439->enter($__internal_9d090431e7f3e066d849157a19c8d7b097c80f5e317c6de95dab0b9b5d024439_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_9d090431e7f3e066d849157a19c8d7b097c80f5e317c6de95dab0b9b5d024439->leave($__internal_9d090431e7f3e066d849157a19c8d7b097c80f5e317c6de95dab0b9b5d024439_prof);

        
        $__internal_f480023c17f7e100bdc76a543eeb07bd312674fe29f4e76d0c34316593ed586d->leave($__internal_f480023c17f7e100bdc76a543eeb07bd312674fe29f4e76d0c34316593ed586d_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_37426b17d343df016ab74c8edc186bec6d7bb237a9e5a633fc49800b9946893c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37426b17d343df016ab74c8edc186bec6d7bb237a9e5a633fc49800b9946893c->enter($__internal_37426b17d343df016ab74c8edc186bec6d7bb237a9e5a633fc49800b9946893c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_372ca0fceef3bf068fe8b684c06c2f2c3a92656fda199dc51b985237ebf5c8d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_372ca0fceef3bf068fe8b684c06c2f2c3a92656fda199dc51b985237ebf5c8d2->enter($__internal_372ca0fceef3bf068fe8b684c06c2f2c3a92656fda199dc51b985237ebf5c8d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_372ca0fceef3bf068fe8b684c06c2f2c3a92656fda199dc51b985237ebf5c8d2->leave($__internal_372ca0fceef3bf068fe8b684c06c2f2c3a92656fda199dc51b985237ebf5c8d2_prof);

        
        $__internal_37426b17d343df016ab74c8edc186bec6d7bb237a9e5a633fc49800b9946893c->leave($__internal_37426b17d343df016ab74c8edc186bec6d7bb237a9e5a633fc49800b9946893c_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_4590bdb27612d03387420d85fdf7cbaa505e95502b6df66e04f18c02d6d2c3e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4590bdb27612d03387420d85fdf7cbaa505e95502b6df66e04f18c02d6d2c3e7->enter($__internal_4590bdb27612d03387420d85fdf7cbaa505e95502b6df66e04f18c02d6d2c3e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_48b8ba0c78515e90771aeb33ba7e189220a4ae4dbccafe5d15a2029f834f53da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48b8ba0c78515e90771aeb33ba7e189220a4ae4dbccafe5d15a2029f834f53da->enter($__internal_48b8ba0c78515e90771aeb33ba7e189220a4ae4dbccafe5d15a2029f834f53da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_48b8ba0c78515e90771aeb33ba7e189220a4ae4dbccafe5d15a2029f834f53da->leave($__internal_48b8ba0c78515e90771aeb33ba7e189220a4ae4dbccafe5d15a2029f834f53da_prof);

        
        $__internal_4590bdb27612d03387420d85fdf7cbaa505e95502b6df66e04f18c02d6d2c3e7->leave($__internal_4590bdb27612d03387420d85fdf7cbaa505e95502b6df66e04f18c02d6d2c3e7_prof);

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
