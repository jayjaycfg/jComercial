<?php

/* TwigBundle::layout.html.twig */
class __TwigTemplate_5bb381d2016f4fb31ed76213b789caa25a3f81b0f29e559643b0dd7ce9f134c4 extends Twig_Template
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
        $__internal_d63acac7893671e1e6afb94b0067df9acf150f254a312f67ba8247877b22f702 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d63acac7893671e1e6afb94b0067df9acf150f254a312f67ba8247877b22f702->enter($__internal_d63acac7893671e1e6afb94b0067df9acf150f254a312f67ba8247877b22f702_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_1a4cdd5e2138dbb824e7497cca562436cb8ea62976ca9d4cb881a214cce91fb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a4cdd5e2138dbb824e7497cca562436cb8ea62976ca9d4cb881a214cce91fb7->enter($__internal_1a4cdd5e2138dbb824e7497cca562436cb8ea62976ca9d4cb881a214cce91fb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

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
        
        $__internal_d63acac7893671e1e6afb94b0067df9acf150f254a312f67ba8247877b22f702->leave($__internal_d63acac7893671e1e6afb94b0067df9acf150f254a312f67ba8247877b22f702_prof);

        
        $__internal_1a4cdd5e2138dbb824e7497cca562436cb8ea62976ca9d4cb881a214cce91fb7->leave($__internal_1a4cdd5e2138dbb824e7497cca562436cb8ea62976ca9d4cb881a214cce91fb7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_77c64f90f6df783ee5a5de2a398151ba00d058f8e7d680d860390c93bb30a276 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77c64f90f6df783ee5a5de2a398151ba00d058f8e7d680d860390c93bb30a276->enter($__internal_77c64f90f6df783ee5a5de2a398151ba00d058f8e7d680d860390c93bb30a276_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_784874bbd86093c2ba6103a7e493af717110d6f88f7db0393d83be5301dd57cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_784874bbd86093c2ba6103a7e493af717110d6f88f7db0393d83be5301dd57cd->enter($__internal_784874bbd86093c2ba6103a7e493af717110d6f88f7db0393d83be5301dd57cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_784874bbd86093c2ba6103a7e493af717110d6f88f7db0393d83be5301dd57cd->leave($__internal_784874bbd86093c2ba6103a7e493af717110d6f88f7db0393d83be5301dd57cd_prof);

        
        $__internal_77c64f90f6df783ee5a5de2a398151ba00d058f8e7d680d860390c93bb30a276->leave($__internal_77c64f90f6df783ee5a5de2a398151ba00d058f8e7d680d860390c93bb30a276_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_13c1d8be99cee25598eda18d4a3f26ba7066601dda233a5f3232f37d15983df9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13c1d8be99cee25598eda18d4a3f26ba7066601dda233a5f3232f37d15983df9->enter($__internal_13c1d8be99cee25598eda18d4a3f26ba7066601dda233a5f3232f37d15983df9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a4982e6c88879a5124e43cbec9ba5ecb96156c2c94474a94e5f5cf8a7c5140aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4982e6c88879a5124e43cbec9ba5ecb96156c2c94474a94e5f5cf8a7c5140aa->enter($__internal_a4982e6c88879a5124e43cbec9ba5ecb96156c2c94474a94e5f5cf8a7c5140aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_a4982e6c88879a5124e43cbec9ba5ecb96156c2c94474a94e5f5cf8a7c5140aa->leave($__internal_a4982e6c88879a5124e43cbec9ba5ecb96156c2c94474a94e5f5cf8a7c5140aa_prof);

        
        $__internal_13c1d8be99cee25598eda18d4a3f26ba7066601dda233a5f3232f37d15983df9->leave($__internal_13c1d8be99cee25598eda18d4a3f26ba7066601dda233a5f3232f37d15983df9_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_4fab77ad5198b61f1a4915ea8abed5b53dc824094298a1887557e69f2033d37b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fab77ad5198b61f1a4915ea8abed5b53dc824094298a1887557e69f2033d37b->enter($__internal_4fab77ad5198b61f1a4915ea8abed5b53dc824094298a1887557e69f2033d37b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b66f8de3f5d5b7f9a17f643e13147a288b042eddeb7a10ba036cfcf008ab9b5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b66f8de3f5d5b7f9a17f643e13147a288b042eddeb7a10ba036cfcf008ab9b5f->enter($__internal_b66f8de3f5d5b7f9a17f643e13147a288b042eddeb7a10ba036cfcf008ab9b5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b66f8de3f5d5b7f9a17f643e13147a288b042eddeb7a10ba036cfcf008ab9b5f->leave($__internal_b66f8de3f5d5b7f9a17f643e13147a288b042eddeb7a10ba036cfcf008ab9b5f_prof);

        
        $__internal_4fab77ad5198b61f1a4915ea8abed5b53dc824094298a1887557e69f2033d37b->leave($__internal_4fab77ad5198b61f1a4915ea8abed5b53dc824094298a1887557e69f2033d37b_prof);

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
", "TwigBundle::layout.html.twig", "/var/www/html/HeroQuest/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
