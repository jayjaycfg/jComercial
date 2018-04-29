<?php

/* base.html.twig */
class __TwigTemplate_e7512925d8fb00307cc049a1006d437f3028b1723b810d6e2acede88a13e1891 extends Twig_Template
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
        $__internal_699f1e4af1a7a28575fbd5cc9bf53f918ea32f04688c9137257fe0021de0741d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_699f1e4af1a7a28575fbd5cc9bf53f918ea32f04688c9137257fe0021de0741d->enter($__internal_699f1e4af1a7a28575fbd5cc9bf53f918ea32f04688c9137257fe0021de0741d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_f89aa374d4d3b27d191541119d382e8decbe877904b9ea9d68203d3b36a282ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f89aa374d4d3b27d191541119d382e8decbe877904b9ea9d68203d3b36a282ec->enter($__internal_f89aa374d4d3b27d191541119d382e8decbe877904b9ea9d68203d3b36a282ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        <h1 class=\"logo\">jComercial</h1>
        <ul class=\"navi\">
            <li class=\"search\"><a href=\"#\" class=\"js-header-search-toggle\"><i class=\"fa fa-search\"></i></a></li>
\t\t    ";
        // line 24
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 25
            echo "            <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("security_logout");
            echo "\">Logout</a></li>
            ";
        } else {
            // line 27
            echo "            <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("security_login");
            echo "\">Login</a></li>
            ";
        }
        // line 29
        echo "        </ul>
    </header>
    <div class=\"main-content\">


\t\t";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 35
            echo "            <div class=\"alert alert-success\">
\t\t\t\t";
            // line 36
            echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
            echo "
            </div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "
\t\t";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 41
            echo "            <div class=\"alert alert-danger\">
\t\t\t\t";
            // line 42
            echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
            echo "
            </div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "
\t\t";
        // line 46
        $this->displayBlock('body', $context, $blocks);
        // line 47
        echo "    </div>
        <div class=\"footer\">
            <p>&copy; Todos los derechos reservados, CNCI ";
        // line 49
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "today", "Y"), "html", null, true);
        echo "</p>
        </div>
        ";
        // line 51
        $this->displayBlock('javascripts', $context, $blocks);
        // line 55
        echo "    </body>
</html>
";
        
        $__internal_699f1e4af1a7a28575fbd5cc9bf53f918ea32f04688c9137257fe0021de0741d->leave($__internal_699f1e4af1a7a28575fbd5cc9bf53f918ea32f04688c9137257fe0021de0741d_prof);

        
        $__internal_f89aa374d4d3b27d191541119d382e8decbe877904b9ea9d68203d3b36a282ec->leave($__internal_f89aa374d4d3b27d191541119d382e8decbe877904b9ea9d68203d3b36a282ec_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6a5bcf9ba75dedcfe0c9b432d1f8903f72f8f1889eb6086feb84a8a19e4f40f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a5bcf9ba75dedcfe0c9b432d1f8903f72f8f1889eb6086feb84a8a19e4f40f6->enter($__internal_6a5bcf9ba75dedcfe0c9b432d1f8903f72f8f1889eb6086feb84a8a19e4f40f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0b36d0c3742370dd02ee89c57a2f4ab23ce267b8f7b2c86b98671e65ed3354f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b36d0c3742370dd02ee89c57a2f4ab23ce267b8f7b2c86b98671e65ed3354f1->enter($__internal_0b36d0c3742370dd02ee89c57a2f4ab23ce267b8f7b2c86b98671e65ed3354f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "jComercial";
        
        $__internal_0b36d0c3742370dd02ee89c57a2f4ab23ce267b8f7b2c86b98671e65ed3354f1->leave($__internal_0b36d0c3742370dd02ee89c57a2f4ab23ce267b8f7b2c86b98671e65ed3354f1_prof);

        
        $__internal_6a5bcf9ba75dedcfe0c9b432d1f8903f72f8f1889eb6086feb84a8a19e4f40f6->leave($__internal_6a5bcf9ba75dedcfe0c9b432d1f8903f72f8f1889eb6086feb84a8a19e4f40f6_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_deb26ac90a5e66904aca2ba25ee6d8d3890c25c838cd9d7babec1845caf5824c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_deb26ac90a5e66904aca2ba25ee6d8d3890c25c838cd9d7babec1845caf5824c->enter($__internal_deb26ac90a5e66904aca2ba25ee6d8d3890c25c838cd9d7babec1845caf5824c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_1a6d302d4a4209678ec330a6b38755c4f02de309a219cfedddcaf34b475f2872 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a6d302d4a4209678ec330a6b38755c4f02de309a219cfedddcaf34b475f2872->enter($__internal_1a6d302d4a4209678ec330a6b38755c4f02de309a219cfedddcaf34b475f2872_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_1a6d302d4a4209678ec330a6b38755c4f02de309a219cfedddcaf34b475f2872->leave($__internal_1a6d302d4a4209678ec330a6b38755c4f02de309a219cfedddcaf34b475f2872_prof);

        
        $__internal_deb26ac90a5e66904aca2ba25ee6d8d3890c25c838cd9d7babec1845caf5824c->leave($__internal_deb26ac90a5e66904aca2ba25ee6d8d3890c25c838cd9d7babec1845caf5824c_prof);

    }

    // line 46
    public function block_body($context, array $blocks = array())
    {
        $__internal_c4878196802a09e9ffe6566a6a8e7808bc35ed7578f881a9baf0aad70665d051 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4878196802a09e9ffe6566a6a8e7808bc35ed7578f881a9baf0aad70665d051->enter($__internal_c4878196802a09e9ffe6566a6a8e7808bc35ed7578f881a9baf0aad70665d051_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4b5c7a5981ea9d7c045aacc134b3bd3699f43b5610253815f66546ffea113d75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b5c7a5981ea9d7c045aacc134b3bd3699f43b5610253815f66546ffea113d75->enter($__internal_4b5c7a5981ea9d7c045aacc134b3bd3699f43b5610253815f66546ffea113d75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4b5c7a5981ea9d7c045aacc134b3bd3699f43b5610253815f66546ffea113d75->leave($__internal_4b5c7a5981ea9d7c045aacc134b3bd3699f43b5610253815f66546ffea113d75_prof);

        
        $__internal_c4878196802a09e9ffe6566a6a8e7808bc35ed7578f881a9baf0aad70665d051->leave($__internal_c4878196802a09e9ffe6566a6a8e7808bc35ed7578f881a9baf0aad70665d051_prof);

    }

    // line 51
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5a2bbc501da0964f466df563b0270925764c84e377226e5bff10ce8b276e519b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a2bbc501da0964f466df563b0270925764c84e377226e5bff10ce8b276e519b->enter($__internal_5a2bbc501da0964f466df563b0270925764c84e377226e5bff10ce8b276e519b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_335b1e2239a4322f1cbfe97f6c88538e11b464cfafa8674aee21c7278816cf1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_335b1e2239a4322f1cbfe97f6c88538e11b464cfafa8674aee21c7278816cf1e->enter($__internal_335b1e2239a4322f1cbfe97f6c88538e11b464cfafa8674aee21c7278816cf1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 52
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-2.1.4.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_335b1e2239a4322f1cbfe97f6c88538e11b464cfafa8674aee21c7278816cf1e->leave($__internal_335b1e2239a4322f1cbfe97f6c88538e11b464cfafa8674aee21c7278816cf1e_prof);

        
        $__internal_5a2bbc501da0964f466df563b0270925764c84e377226e5bff10ce8b276e519b->leave($__internal_5a2bbc501da0964f466df563b0270925764c84e377226e5bff10ce8b276e519b_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 53,  216 => 52,  207 => 51,  190 => 46,  178 => 9,  174 => 8,  169 => 7,  160 => 6,  142 => 5,  130 => 55,  128 => 51,  123 => 49,  119 => 47,  117 => 46,  114 => 45,  105 => 42,  102 => 41,  98 => 40,  95 => 39,  86 => 36,  83 => 35,  79 => 34,  72 => 29,  66 => 27,  60 => 25,  58 => 24,  41 => 11,  39 => 6,  35 => 5,  29 => 1,);
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
        <title>{% block title %}jComercial{% endblock %}</title>
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
        <h1 class=\"logo\">jComercial</h1>
        <ul class=\"navi\">
            <li class=\"search\"><a href=\"#\" class=\"js-header-search-toggle\"><i class=\"fa fa-search\"></i></a></li>
\t\t    {% if is_granted('ROLE_USER') %}
            <li><a href=\"{{ path('security_logout') }}\">Logout</a></li>
            {% else %}
            <li><a href=\"{{ path('security_login') }}\">Login</a></li>
            {% endif %}
        </ul>
    </header>
    <div class=\"main-content\">


\t\t{% for msg in app.session.flashBag.get('success') %}
            <div class=\"alert alert-success\">
\t\t\t\t{{ msg }}
            </div>
\t\t{% endfor %}

\t\t{% for msg in app.session.flashBag.get('error') %}
            <div class=\"alert alert-danger\">
\t\t\t\t{{ msg }}
            </div>
\t\t{% endfor %}

\t\t{% block body %}{% endblock %}
    </div>
        <div class=\"footer\">
            <p>&copy; Todos los derechos reservados, CNCI {{ 'today'|date('Y') }}</p>
        </div>
        {% block javascripts %}
            <script src=\"{{ asset('js/jquery-2.1.4.min.js') }}\"></script>
            <script src=\"{{ asset('js/main.js') }}\"></script>
        {% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/html/jComercial/app/Resources/views/base.html.twig");
    }
}
