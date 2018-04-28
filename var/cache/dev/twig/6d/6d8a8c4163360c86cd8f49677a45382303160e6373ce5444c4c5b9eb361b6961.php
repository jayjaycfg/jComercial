<?php

/* ::base.html.twig */
class __TwigTemplate_ef6a598e82a5011af52d5b328f0cd2f8830bea5f4c88506ad9e23671aec9697a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_454c367f2a2af3d04e21ab07d666548dd9ac7ddb4bef95ef2c8125b9d306702c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_454c367f2a2af3d04e21ab07d666548dd9ac7ddb4bef95ef2c8125b9d306702c->enter($__internal_454c367f2a2af3d04e21ab07d666548dd9ac7ddb4bef95ef2c8125b9d306702c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_c33890d355ff8f9239e91d69fcc990c835563e9a994e90aa44c375dcdcc852b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c33890d355ff8f9239e91d69fcc990c835563e9a994e90aa44c375dcdcc852b0->enter($__internal_c33890d355ff8f9239e91d69fcc990c835563e9a994e90aa44c375dcdcc852b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
    <div class=\"search-bar\">
        <form method=\"GET\" action=\"\" class=\"js-sea-search sea-search\">
            <input type=\"search\" name=\"q\" placeholder=\"Search Sea Creatures\" autocomplete=\"off\" class=\"search-input\">
        </form>
    </div>
    <header class=\"header\">
        <img class=\"logo-icon\" src=\"\">
        <h1 class=\"logo\">Hero Quest</h1>
        <ul class=\"navi\">
            <li class=\"search\"><a href=\"#\" class=\"js-header-search-toggle\"><i class=\"fa fa-search\"></i></a></li>
\t\t     <li><a href=\"\">Login</a></li>
        </ul>
    </header>
        ";
        // line 27
        $this->displayBlock('body', $context, $blocks);
        // line 28
        echo "        <div class=\"footer\">
            <p>Todos los derechos reservados</p>
        </div>
        ";
        // line 31
        $this->displayBlock('javascripts', $context, $blocks);
        // line 35
        echo "    </body>
</html>
";
        
        $__internal_454c367f2a2af3d04e21ab07d666548dd9ac7ddb4bef95ef2c8125b9d306702c->leave($__internal_454c367f2a2af3d04e21ab07d666548dd9ac7ddb4bef95ef2c8125b9d306702c_prof);

        
        $__internal_c33890d355ff8f9239e91d69fcc990c835563e9a994e90aa44c375dcdcc852b0->leave($__internal_c33890d355ff8f9239e91d69fcc990c835563e9a994e90aa44c375dcdcc852b0_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a388217e4115e40afc0682bfca2da0058cf15e6e410cc4de203c49e02608b81b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a388217e4115e40afc0682bfca2da0058cf15e6e410cc4de203c49e02608b81b->enter($__internal_a388217e4115e40afc0682bfca2da0058cf15e6e410cc4de203c49e02608b81b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cbbb908e2b7f95ff7cab6ff1057db13bf7afaae7bfc32fb370c877c5619b727e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbbb908e2b7f95ff7cab6ff1057db13bf7afaae7bfc32fb370c877c5619b727e->enter($__internal_cbbb908e2b7f95ff7cab6ff1057db13bf7afaae7bfc32fb370c877c5619b727e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_cbbb908e2b7f95ff7cab6ff1057db13bf7afaae7bfc32fb370c877c5619b727e->leave($__internal_cbbb908e2b7f95ff7cab6ff1057db13bf7afaae7bfc32fb370c877c5619b727e_prof);

        
        $__internal_a388217e4115e40afc0682bfca2da0058cf15e6e410cc4de203c49e02608b81b->leave($__internal_a388217e4115e40afc0682bfca2da0058cf15e6e410cc4de203c49e02608b81b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1d521b883ab28f2219abac7c9e5ce5a9a034fb14aa72dae03356f860f4385392 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d521b883ab28f2219abac7c9e5ce5a9a034fb14aa72dae03356f860f4385392->enter($__internal_1d521b883ab28f2219abac7c9e5ce5a9a034fb14aa72dae03356f860f4385392_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_c45568f982536a4af8e52442b1b6612aa922168abe434938b8a3628a82631793 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c45568f982536a4af8e52442b1b6612aa922168abe434938b8a3628a82631793->enter($__internal_c45568f982536a4af8e52442b1b6612aa922168abe434938b8a3628a82631793_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/styles.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/fontawesome/css/font-awesome.min.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_c45568f982536a4af8e52442b1b6612aa922168abe434938b8a3628a82631793->leave($__internal_c45568f982536a4af8e52442b1b6612aa922168abe434938b8a3628a82631793_prof);

        
        $__internal_1d521b883ab28f2219abac7c9e5ce5a9a034fb14aa72dae03356f860f4385392->leave($__internal_1d521b883ab28f2219abac7c9e5ce5a9a034fb14aa72dae03356f860f4385392_prof);

    }

    // line 27
    public function block_body($context, array $blocks = array())
    {
        $__internal_48be9eed0a7b0b153f8139ff8cc05ad62e018ac350382cce80181777c133e982 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48be9eed0a7b0b153f8139ff8cc05ad62e018ac350382cce80181777c133e982->enter($__internal_48be9eed0a7b0b153f8139ff8cc05ad62e018ac350382cce80181777c133e982_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_09e03a7ad82540f8e1360a1a869b746b490f05ea57a04b06d40cd28f0feebb8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09e03a7ad82540f8e1360a1a869b746b490f05ea57a04b06d40cd28f0feebb8d->enter($__internal_09e03a7ad82540f8e1360a1a869b746b490f05ea57a04b06d40cd28f0feebb8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_09e03a7ad82540f8e1360a1a869b746b490f05ea57a04b06d40cd28f0feebb8d->leave($__internal_09e03a7ad82540f8e1360a1a869b746b490f05ea57a04b06d40cd28f0feebb8d_prof);

        
        $__internal_48be9eed0a7b0b153f8139ff8cc05ad62e018ac350382cce80181777c133e982->leave($__internal_48be9eed0a7b0b153f8139ff8cc05ad62e018ac350382cce80181777c133e982_prof);

    }

    // line 31
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_89d1f233e7931f810ac3112a10800ef5e287b289b095108ad1e13838ecc335ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89d1f233e7931f810ac3112a10800ef5e287b289b095108ad1e13838ecc335ca->enter($__internal_89d1f233e7931f810ac3112a10800ef5e287b289b095108ad1e13838ecc335ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_ad20e058b72c41b989bf432affa9a93392aa2ca887d6e65971c1b73049377b37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad20e058b72c41b989bf432affa9a93392aa2ca887d6e65971c1b73049377b37->enter($__internal_ad20e058b72c41b989bf432affa9a93392aa2ca887d6e65971c1b73049377b37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 32
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-2.1.4.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_ad20e058b72c41b989bf432affa9a93392aa2ca887d6e65971c1b73049377b37->leave($__internal_ad20e058b72c41b989bf432affa9a93392aa2ca887d6e65971c1b73049377b37_prof);

        
        $__internal_89d1f233e7931f810ac3112a10800ef5e287b289b095108ad1e13838ecc335ca->leave($__internal_89d1f233e7931f810ac3112a10800ef5e287b289b095108ad1e13838ecc335ca_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 33,  156 => 32,  147 => 31,  130 => 27,  118 => 9,  114 => 8,  109 => 7,  100 => 6,  82 => 5,  70 => 35,  68 => 31,  63 => 28,  61 => 27,  41 => 11,  39 => 6,  35 => 5,  29 => 1,);
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
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/styles.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('vendor/fontawesome/css/font-awesome.min.css') }}\">
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
    <div class=\"search-bar\">
        <form method=\"GET\" action=\"\" class=\"js-sea-search sea-search\">
            <input type=\"search\" name=\"q\" placeholder=\"Search Sea Creatures\" autocomplete=\"off\" class=\"search-input\">
        </form>
    </div>
    <header class=\"header\">
        <img class=\"logo-icon\" src=\"\">
        <h1 class=\"logo\">Hero Quest</h1>
        <ul class=\"navi\">
            <li class=\"search\"><a href=\"#\" class=\"js-header-search-toggle\"><i class=\"fa fa-search\"></i></a></li>
\t\t     <li><a href=\"\">Login</a></li>
        </ul>
    </header>
        {% block body %}{% endblock %}
        <div class=\"footer\">
            <p>Todos los derechos reservados</p>
        </div>
        {% block javascripts %}
            <script src=\"{{ asset('js/jquery-2.1.4.min.js') }}\"></script>
            <script src=\"{{ asset('js/main.js') }}\"></script>
        {% endblock %}
    </body>
</html>
", "::base.html.twig", "/var/www/html/HeroQuest/app/Resources/views/base.html.twig");
    }
}
