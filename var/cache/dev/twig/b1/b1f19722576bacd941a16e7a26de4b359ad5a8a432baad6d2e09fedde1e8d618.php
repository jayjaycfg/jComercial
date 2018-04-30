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
        $__internal_8d78ee7145095e4f86d4572f95db811129a2b679f1e8cb857eeea730dcf6aaa4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d78ee7145095e4f86d4572f95db811129a2b679f1e8cb857eeea730dcf6aaa4->enter($__internal_8d78ee7145095e4f86d4572f95db811129a2b679f1e8cb857eeea730dcf6aaa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_a20fefd04d8a5acd25a28648ad3b5762ed9d4413e2904b832f91060808858c22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a20fefd04d8a5acd25a28648ad3b5762ed9d4413e2904b832f91060808858c22->enter($__internal_a20fefd04d8a5acd25a28648ad3b5762ed9d4413e2904b832f91060808858c22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
    <header class=\"header\">

        <img class=\"logo-icon\" src=\"\">
        <h1 class=\"logo\" ><a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\"> jComercial </a></h1>
        <ul class=\"navi\">
\t\t\t";
        // line 19
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 20
            echo "\t\t\t<li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_users");
            echo "\">Usuarios</a></li>
\t\t\t";
        } else {
            // line 22
            echo "\t\t\t<li>
\t\t\t\t<a href=\"";
            // line 23
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_client");
            echo "\">Contratos
\t\t\t\t\t<span class=\"caret\"></span>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li><a href=\"";
            // line 27
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_factura");
            echo "\">Facturas</a></li>
            ";
        }
        // line 29
        echo "\t\t\t";
        // line 30
        echo "\t\t    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 31
            echo "            <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("security_logout");
            echo "\">Logout</a></li>
            ";
        } else {
            // line 33
            echo "            <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("security_login");
            echo "\">Login</a></li>
            ";
        }
        // line 35
        echo "        </ul>
    </header>
    <div class=\"main-content\">


\t\t";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 41
            echo "            <div class=\"alert alert-success\">
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 47
            echo "            <div class=\"alert alert-danger\">
\t\t\t\t";
            // line 48
            echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
            echo "
            </div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "
\t\t";
        // line 52
        $this->displayBlock('body', $context, $blocks);
        // line 53
        echo "    </div>
        <div class=\"footer\">
            <p>&copy; Todos los derechos reservados, CNCI ";
        // line 55
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "today", "Y"), "html", null, true);
        echo "</p>
        </div>
        ";
        // line 57
        $this->displayBlock('javascripts', $context, $blocks);
        // line 61
        echo "    </body>
</html>
";
        
        $__internal_8d78ee7145095e4f86d4572f95db811129a2b679f1e8cb857eeea730dcf6aaa4->leave($__internal_8d78ee7145095e4f86d4572f95db811129a2b679f1e8cb857eeea730dcf6aaa4_prof);

        
        $__internal_a20fefd04d8a5acd25a28648ad3b5762ed9d4413e2904b832f91060808858c22->leave($__internal_a20fefd04d8a5acd25a28648ad3b5762ed9d4413e2904b832f91060808858c22_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_cc0ac8406d6697694814ad0a84b176d0bd0dc257e695a433f87987f7cd9cbf38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc0ac8406d6697694814ad0a84b176d0bd0dc257e695a433f87987f7cd9cbf38->enter($__internal_cc0ac8406d6697694814ad0a84b176d0bd0dc257e695a433f87987f7cd9cbf38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_218807d2bf3bb8c6147d59377450b027916185c2abfde2ebc79d66c73069fa65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_218807d2bf3bb8c6147d59377450b027916185c2abfde2ebc79d66c73069fa65->enter($__internal_218807d2bf3bb8c6147d59377450b027916185c2abfde2ebc79d66c73069fa65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "jComercial";
        
        $__internal_218807d2bf3bb8c6147d59377450b027916185c2abfde2ebc79d66c73069fa65->leave($__internal_218807d2bf3bb8c6147d59377450b027916185c2abfde2ebc79d66c73069fa65_prof);

        
        $__internal_cc0ac8406d6697694814ad0a84b176d0bd0dc257e695a433f87987f7cd9cbf38->leave($__internal_cc0ac8406d6697694814ad0a84b176d0bd0dc257e695a433f87987f7cd9cbf38_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_43b05d96e6e59a7e867db7951fb9947c47cb1183c4365e18cad4d0c697f928d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43b05d96e6e59a7e867db7951fb9947c47cb1183c4365e18cad4d0c697f928d4->enter($__internal_43b05d96e6e59a7e867db7951fb9947c47cb1183c4365e18cad4d0c697f928d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_5d1adb0d221d7e0803f0bfa82f32bcd9d956c92ebe601b802566e05835b2de14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d1adb0d221d7e0803f0bfa82f32bcd9d956c92ebe601b802566e05835b2de14->enter($__internal_5d1adb0d221d7e0803f0bfa82f32bcd9d956c92ebe601b802566e05835b2de14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_5d1adb0d221d7e0803f0bfa82f32bcd9d956c92ebe601b802566e05835b2de14->leave($__internal_5d1adb0d221d7e0803f0bfa82f32bcd9d956c92ebe601b802566e05835b2de14_prof);

        
        $__internal_43b05d96e6e59a7e867db7951fb9947c47cb1183c4365e18cad4d0c697f928d4->leave($__internal_43b05d96e6e59a7e867db7951fb9947c47cb1183c4365e18cad4d0c697f928d4_prof);

    }

    // line 52
    public function block_body($context, array $blocks = array())
    {
        $__internal_70151455dec53a10c22137444928be0d03ef3cd24d545ab5bd5b0e0a1f269347 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70151455dec53a10c22137444928be0d03ef3cd24d545ab5bd5b0e0a1f269347->enter($__internal_70151455dec53a10c22137444928be0d03ef3cd24d545ab5bd5b0e0a1f269347_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_004ca65b95e00e852c78a69b8a84994f3ef6b4ba0ce393fb6886e8098705efbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_004ca65b95e00e852c78a69b8a84994f3ef6b4ba0ce393fb6886e8098705efbc->enter($__internal_004ca65b95e00e852c78a69b8a84994f3ef6b4ba0ce393fb6886e8098705efbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_004ca65b95e00e852c78a69b8a84994f3ef6b4ba0ce393fb6886e8098705efbc->leave($__internal_004ca65b95e00e852c78a69b8a84994f3ef6b4ba0ce393fb6886e8098705efbc_prof);

        
        $__internal_70151455dec53a10c22137444928be0d03ef3cd24d545ab5bd5b0e0a1f269347->leave($__internal_70151455dec53a10c22137444928be0d03ef3cd24d545ab5bd5b0e0a1f269347_prof);

    }

    // line 57
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cdf33369d30639759fdd9f9b31b5406cd2fb403e2b48d13d11be2b8a289bc8f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdf33369d30639759fdd9f9b31b5406cd2fb403e2b48d13d11be2b8a289bc8f3->enter($__internal_cdf33369d30639759fdd9f9b31b5406cd2fb403e2b48d13d11be2b8a289bc8f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_882da3ce2c6f26cad9ff4a8f556fa39a07ba9640ea02cc0056c73ffc88d7033c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_882da3ce2c6f26cad9ff4a8f556fa39a07ba9640ea02cc0056c73ffc88d7033c->enter($__internal_882da3ce2c6f26cad9ff4a8f556fa39a07ba9640ea02cc0056c73ffc88d7033c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 58
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-2.1.4.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_882da3ce2c6f26cad9ff4a8f556fa39a07ba9640ea02cc0056c73ffc88d7033c->leave($__internal_882da3ce2c6f26cad9ff4a8f556fa39a07ba9640ea02cc0056c73ffc88d7033c_prof);

        
        $__internal_cdf33369d30639759fdd9f9b31b5406cd2fb403e2b48d13d11be2b8a289bc8f3->leave($__internal_cdf33369d30639759fdd9f9b31b5406cd2fb403e2b48d13d11be2b8a289bc8f3_prof);

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
        return array (  245 => 59,  240 => 58,  231 => 57,  214 => 52,  202 => 9,  198 => 8,  193 => 7,  184 => 6,  166 => 5,  154 => 61,  152 => 57,  147 => 55,  143 => 53,  141 => 52,  138 => 51,  129 => 48,  126 => 47,  122 => 46,  119 => 45,  110 => 42,  107 => 41,  103 => 40,  96 => 35,  90 => 33,  84 => 31,  81 => 30,  79 => 29,  74 => 27,  67 => 23,  64 => 22,  58 => 20,  56 => 19,  51 => 17,  41 => 11,  39 => 6,  35 => 5,  29 => 1,);
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
    <header class=\"header\">

        <img class=\"logo-icon\" src=\"\">
        <h1 class=\"logo\" ><a href=\"{{ path('homepage') }}\"> jComercial </a></h1>
        <ul class=\"navi\">
\t\t\t{% if is_granted('ROLE_ADMIN') %}
\t\t\t<li><a href=\"{{ path('list_users') }}\">Usuarios</a></li>
\t\t\t{% else %}
\t\t\t<li>
\t\t\t\t<a href=\"{{ path('list_client') }}\">Contratos
\t\t\t\t\t<span class=\"caret\"></span>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li><a href=\"{{ path('list_factura') }}\">Facturas</a></li>
            {% endif %}
\t\t\t{#<li class=\"search\"><a href=\"#\" class=\"js-header-search-toggle\"><i class=\"fa fa-search\"></i></a></li>#}
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
