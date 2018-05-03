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
        $__internal_547c13a4334cb9e8ab0108b11036cf8ccc2a6e591f8c8057a7361986569bc0b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_547c13a4334cb9e8ab0108b11036cf8ccc2a6e591f8c8057a7361986569bc0b3->enter($__internal_547c13a4334cb9e8ab0108b11036cf8ccc2a6e591f8c8057a7361986569bc0b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_7cbf65d03ff8d45c3fe75ea954b6657d05fd3f231c7fb23c69b7102fe8e02622 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cbf65d03ff8d45c3fe75ea954b6657d05fd3f231c7fb23c69b7102fe8e02622->enter($__internal_7cbf65d03ff8d45c3fe75ea954b6657d05fd3f231c7fb23c69b7102fe8e02622_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
            echo "\t\t\t<li class=\"dropdown\">
\t\t\t\t<a href=\"#\" class=\"dropdown\" data-toggle=\"dropdown\">Contrato
\t\t\t\t\t<span class=\"caret\"></span>
\t\t\t\t</a>
                <ul class=\"dropdown-menu\">
                    <li><a href=\"#\">Cliente</a></li>
                    <li><a href=\"#\">Proveedor</a></li>
                </ul>
\t\t\t</li>
\t\t\t<li><a href=\"";
            // line 31
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_factura");
            echo "\">Facturas</a></li>
            ";
        }
        // line 33
        echo "\t\t\t";
        // line 34
        echo "\t\t    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 35
            echo "            <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("security_logout");
            echo "\">Logout</a></li>
            ";
        } else {
            // line 37
            echo "            <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("security_login");
            echo "\">Login</a></li>
            ";
        }
        // line 39
        echo "        </ul>
    </header>
    <div class=\"main-content\">


\t\t";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 45
            echo "            <div class=\"alert alert-success\">
\t\t\t\t";
            // line 46
            echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
            echo "
            </div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "
\t\t";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 51
            echo "            <div class=\"alert alert-danger\">
\t\t\t\t";
            // line 52
            echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
            echo "
            </div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "
\t\t";
        // line 56
        $this->displayBlock('body', $context, $blocks);
        // line 57
        echo "    </div>
        <div class=\"footer\">
            <p>&copy; Todos los derechos reservados, CNCI ";
        // line 59
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "today", "Y"), "html", null, true);
        echo "</p>
        </div>
        ";
        // line 61
        $this->displayBlock('javascripts', $context, $blocks);
        // line 66
        echo "    </body>
</html>
";
        
        $__internal_547c13a4334cb9e8ab0108b11036cf8ccc2a6e591f8c8057a7361986569bc0b3->leave($__internal_547c13a4334cb9e8ab0108b11036cf8ccc2a6e591f8c8057a7361986569bc0b3_prof);

        
        $__internal_7cbf65d03ff8d45c3fe75ea954b6657d05fd3f231c7fb23c69b7102fe8e02622->leave($__internal_7cbf65d03ff8d45c3fe75ea954b6657d05fd3f231c7fb23c69b7102fe8e02622_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6748266291eefeb76adb05e488fe0593db96f1cf61e9a5e08eb69abf71eb9b75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6748266291eefeb76adb05e488fe0593db96f1cf61e9a5e08eb69abf71eb9b75->enter($__internal_6748266291eefeb76adb05e488fe0593db96f1cf61e9a5e08eb69abf71eb9b75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bc3e94dd6a62bad5bf0423bf4e0b3d9a60c66eeee81c90d2393bf86ab4d123f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc3e94dd6a62bad5bf0423bf4e0b3d9a60c66eeee81c90d2393bf86ab4d123f1->enter($__internal_bc3e94dd6a62bad5bf0423bf4e0b3d9a60c66eeee81c90d2393bf86ab4d123f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "jComercial";
        
        $__internal_bc3e94dd6a62bad5bf0423bf4e0b3d9a60c66eeee81c90d2393bf86ab4d123f1->leave($__internal_bc3e94dd6a62bad5bf0423bf4e0b3d9a60c66eeee81c90d2393bf86ab4d123f1_prof);

        
        $__internal_6748266291eefeb76adb05e488fe0593db96f1cf61e9a5e08eb69abf71eb9b75->leave($__internal_6748266291eefeb76adb05e488fe0593db96f1cf61e9a5e08eb69abf71eb9b75_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b00b259541376266ad02667c29fe71723f7ffcc9942b8d82cc417ae653461280 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b00b259541376266ad02667c29fe71723f7ffcc9942b8d82cc417ae653461280->enter($__internal_b00b259541376266ad02667c29fe71723f7ffcc9942b8d82cc417ae653461280_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_033fb9a4b2edd7e0ebc7be54b1ce38b9edaecd3a1c3d3f222ff170742ff09ef6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_033fb9a4b2edd7e0ebc7be54b1ce38b9edaecd3a1c3d3f222ff170742ff09ef6->enter($__internal_033fb9a4b2edd7e0ebc7be54b1ce38b9edaecd3a1c3d3f222ff170742ff09ef6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_033fb9a4b2edd7e0ebc7be54b1ce38b9edaecd3a1c3d3f222ff170742ff09ef6->leave($__internal_033fb9a4b2edd7e0ebc7be54b1ce38b9edaecd3a1c3d3f222ff170742ff09ef6_prof);

        
        $__internal_b00b259541376266ad02667c29fe71723f7ffcc9942b8d82cc417ae653461280->leave($__internal_b00b259541376266ad02667c29fe71723f7ffcc9942b8d82cc417ae653461280_prof);

    }

    // line 56
    public function block_body($context, array $blocks = array())
    {
        $__internal_765c347eadb67259fded635369a461d869a8c4b753137d114a14b06612eeae9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_765c347eadb67259fded635369a461d869a8c4b753137d114a14b06612eeae9d->enter($__internal_765c347eadb67259fded635369a461d869a8c4b753137d114a14b06612eeae9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e923f1ded0444da92765c578855737bb2f039a37afd9d9cbda3c7cb7cdbf0865 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e923f1ded0444da92765c578855737bb2f039a37afd9d9cbda3c7cb7cdbf0865->enter($__internal_e923f1ded0444da92765c578855737bb2f039a37afd9d9cbda3c7cb7cdbf0865_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e923f1ded0444da92765c578855737bb2f039a37afd9d9cbda3c7cb7cdbf0865->leave($__internal_e923f1ded0444da92765c578855737bb2f039a37afd9d9cbda3c7cb7cdbf0865_prof);

        
        $__internal_765c347eadb67259fded635369a461d869a8c4b753137d114a14b06612eeae9d->leave($__internal_765c347eadb67259fded635369a461d869a8c4b753137d114a14b06612eeae9d_prof);

    }

    // line 61
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fb68188fee6011542c4a93e0560af1b07885172387d19da84415205cf2945b65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb68188fee6011542c4a93e0560af1b07885172387d19da84415205cf2945b65->enter($__internal_fb68188fee6011542c4a93e0560af1b07885172387d19da84415205cf2945b65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_7524204166d9458e63acd2ec420627f1f51b15e4f84bd3eb3ec106e1d403660d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7524204166d9458e63acd2ec420627f1f51b15e4f84bd3eb3ec106e1d403660d->enter($__internal_7524204166d9458e63acd2ec420627f1f51b15e4f84bd3eb3ec106e1d403660d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 62
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-2.1.4.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/bootstrap/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_7524204166d9458e63acd2ec420627f1f51b15e4f84bd3eb3ec106e1d403660d->leave($__internal_7524204166d9458e63acd2ec420627f1f51b15e4f84bd3eb3ec106e1d403660d_prof);

        
        $__internal_fb68188fee6011542c4a93e0560af1b07885172387d19da84415205cf2945b65->leave($__internal_fb68188fee6011542c4a93e0560af1b07885172387d19da84415205cf2945b65_prof);

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
        return array (  250 => 64,  246 => 63,  241 => 62,  232 => 61,  215 => 56,  203 => 9,  199 => 8,  194 => 7,  185 => 6,  167 => 5,  155 => 66,  153 => 61,  148 => 59,  144 => 57,  142 => 56,  139 => 55,  130 => 52,  127 => 51,  123 => 50,  120 => 49,  111 => 46,  108 => 45,  104 => 44,  97 => 39,  91 => 37,  85 => 35,  82 => 34,  80 => 33,  75 => 31,  64 => 22,  58 => 20,  56 => 19,  51 => 17,  41 => 11,  39 => 6,  35 => 5,  29 => 1,);
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
\t\t\t<li class=\"dropdown\">
\t\t\t\t<a href=\"#\" class=\"dropdown\" data-toggle=\"dropdown\">Contrato
\t\t\t\t\t<span class=\"caret\"></span>
\t\t\t\t</a>
                <ul class=\"dropdown-menu\">
                    <li><a href=\"#\">Cliente</a></li>
                    <li><a href=\"#\">Proveedor</a></li>
                </ul>
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
            <script src=\"{{ asset('vendor/bootstrap/js/bootstrap.js') }}\"></script>
            <script src=\"{{ asset('js/main.js') }}\"></script>
        {% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/html/jComercial/app/Resources/views/base.html.twig");
    }
}
