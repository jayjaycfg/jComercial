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
        $__internal_75a7bb439b90bd536b8d56c87cf44ad86ce0bf431c65a122ca74b340d78a9d48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75a7bb439b90bd536b8d56c87cf44ad86ce0bf431c65a122ca74b340d78a9d48->enter($__internal_75a7bb439b90bd536b8d56c87cf44ad86ce0bf431c65a122ca74b340d78a9d48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_180be1063c5b4243bec8e9f1d6b8a1ee6bb862cceab463d0767e4e86cce2f74a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_180be1063c5b4243bec8e9f1d6b8a1ee6bb862cceab463d0767e4e86cce2f74a->enter($__internal_180be1063c5b4243bec8e9f1d6b8a1ee6bb862cceab463d0767e4e86cce2f74a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

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
        
        $__internal_75a7bb439b90bd536b8d56c87cf44ad86ce0bf431c65a122ca74b340d78a9d48->leave($__internal_75a7bb439b90bd536b8d56c87cf44ad86ce0bf431c65a122ca74b340d78a9d48_prof);

        
        $__internal_180be1063c5b4243bec8e9f1d6b8a1ee6bb862cceab463d0767e4e86cce2f74a->leave($__internal_180be1063c5b4243bec8e9f1d6b8a1ee6bb862cceab463d0767e4e86cce2f74a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6401ad0434b41b467546a289cfc0a9234d43a178ec51539e0ed05867ce3a3831 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6401ad0434b41b467546a289cfc0a9234d43a178ec51539e0ed05867ce3a3831->enter($__internal_6401ad0434b41b467546a289cfc0a9234d43a178ec51539e0ed05867ce3a3831_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d1e2fa93a285d6156ff48dc233d518e241fff945ca5a52a354086ff3741ed44a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1e2fa93a285d6156ff48dc233d518e241fff945ca5a52a354086ff3741ed44a->enter($__internal_d1e2fa93a285d6156ff48dc233d518e241fff945ca5a52a354086ff3741ed44a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_d1e2fa93a285d6156ff48dc233d518e241fff945ca5a52a354086ff3741ed44a->leave($__internal_d1e2fa93a285d6156ff48dc233d518e241fff945ca5a52a354086ff3741ed44a_prof);

        
        $__internal_6401ad0434b41b467546a289cfc0a9234d43a178ec51539e0ed05867ce3a3831->leave($__internal_6401ad0434b41b467546a289cfc0a9234d43a178ec51539e0ed05867ce3a3831_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_d1547a0c69ef313325dd96b2b549ca1614a6f151d3d79e9586c3ff85139b8ff8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1547a0c69ef313325dd96b2b549ca1614a6f151d3d79e9586c3ff85139b8ff8->enter($__internal_d1547a0c69ef313325dd96b2b549ca1614a6f151d3d79e9586c3ff85139b8ff8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_bb88f94724254568eea71019f42056a147d61d682aff24f2ce811b21ef1e053b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb88f94724254568eea71019f42056a147d61d682aff24f2ce811b21ef1e053b->enter($__internal_bb88f94724254568eea71019f42056a147d61d682aff24f2ce811b21ef1e053b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_bb88f94724254568eea71019f42056a147d61d682aff24f2ce811b21ef1e053b->leave($__internal_bb88f94724254568eea71019f42056a147d61d682aff24f2ce811b21ef1e053b_prof);

        
        $__internal_d1547a0c69ef313325dd96b2b549ca1614a6f151d3d79e9586c3ff85139b8ff8->leave($__internal_d1547a0c69ef313325dd96b2b549ca1614a6f151d3d79e9586c3ff85139b8ff8_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_ad54f1f8f117ff859d8c12735a619fa3eee4fdba0175de4f27c54f1c788822b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad54f1f8f117ff859d8c12735a619fa3eee4fdba0175de4f27c54f1c788822b9->enter($__internal_ad54f1f8f117ff859d8c12735a619fa3eee4fdba0175de4f27c54f1c788822b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b9a97c865c7d046eacddd50321e56b80094f61882a09e96c83665b8478325841 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9a97c865c7d046eacddd50321e56b80094f61882a09e96c83665b8478325841->enter($__internal_b9a97c865c7d046eacddd50321e56b80094f61882a09e96c83665b8478325841_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b9a97c865c7d046eacddd50321e56b80094f61882a09e96c83665b8478325841->leave($__internal_b9a97c865c7d046eacddd50321e56b80094f61882a09e96c83665b8478325841_prof);

        
        $__internal_ad54f1f8f117ff859d8c12735a619fa3eee4fdba0175de4f27c54f1c788822b9->leave($__internal_ad54f1f8f117ff859d8c12735a619fa3eee4fdba0175de4f27c54f1c788822b9_prof);

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
