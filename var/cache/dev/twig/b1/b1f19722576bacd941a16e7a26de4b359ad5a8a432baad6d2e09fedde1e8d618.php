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
        $__internal_b732d7286466c7027478ee7b1ecaf0809aa569e66329aa8ed6e44881bd8fba27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b732d7286466c7027478ee7b1ecaf0809aa569e66329aa8ed6e44881bd8fba27->enter($__internal_b732d7286466c7027478ee7b1ecaf0809aa569e66329aa8ed6e44881bd8fba27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_3bd602ee1642a4be1033d13d8624b1c1ecdc3ff07adf15e1e26990b56f74f43e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bd602ee1642a4be1033d13d8624b1c1ecdc3ff07adf15e1e26990b56f74f43e->enter($__internal_3bd602ee1642a4be1033d13d8624b1c1ecdc3ff07adf15e1e26990b56f74f43e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        <h1 class=\"logo\" ><a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\"> jComercial </a></h1>
        <ul class=\"navi\">
\t\t\t";
        // line 23
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 24
            echo "\t\t\t<li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_users");
            echo "\">Usuarios</a></li>
\t\t\t";
        } else {
            // line 26
            echo "\t\t\t<li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_client");
            echo "\">Contratos</a></li>
\t\t\t<li><a href=\"";
            // line 27
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_proveedor");
            echo "\">Facturas</a></li>
            ";
        }
        // line 29
        echo "\t\t\t<li class=\"search\"><a href=\"#\" class=\"js-header-search-toggle\"><i class=\"fa fa-search\"></i></a></li>
\t\t    ";
        // line 30
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
        
        $__internal_b732d7286466c7027478ee7b1ecaf0809aa569e66329aa8ed6e44881bd8fba27->leave($__internal_b732d7286466c7027478ee7b1ecaf0809aa569e66329aa8ed6e44881bd8fba27_prof);

        
        $__internal_3bd602ee1642a4be1033d13d8624b1c1ecdc3ff07adf15e1e26990b56f74f43e->leave($__internal_3bd602ee1642a4be1033d13d8624b1c1ecdc3ff07adf15e1e26990b56f74f43e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2efd1ff6590e071d5ef2fa22d3f7d7e29d2b2c8fc1466d5a04cd11bd118e7841 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2efd1ff6590e071d5ef2fa22d3f7d7e29d2b2c8fc1466d5a04cd11bd118e7841->enter($__internal_2efd1ff6590e071d5ef2fa22d3f7d7e29d2b2c8fc1466d5a04cd11bd118e7841_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3646214ee14702e8e16174ab009e137cd04854475c72589417e3ab2de2578367 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3646214ee14702e8e16174ab009e137cd04854475c72589417e3ab2de2578367->enter($__internal_3646214ee14702e8e16174ab009e137cd04854475c72589417e3ab2de2578367_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "jComercial";
        
        $__internal_3646214ee14702e8e16174ab009e137cd04854475c72589417e3ab2de2578367->leave($__internal_3646214ee14702e8e16174ab009e137cd04854475c72589417e3ab2de2578367_prof);

        
        $__internal_2efd1ff6590e071d5ef2fa22d3f7d7e29d2b2c8fc1466d5a04cd11bd118e7841->leave($__internal_2efd1ff6590e071d5ef2fa22d3f7d7e29d2b2c8fc1466d5a04cd11bd118e7841_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fc273397e7a1474aacd12c232bccdcb9b6c695df9f9befde6229c4bac374aff1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc273397e7a1474aacd12c232bccdcb9b6c695df9f9befde6229c4bac374aff1->enter($__internal_fc273397e7a1474aacd12c232bccdcb9b6c695df9f9befde6229c4bac374aff1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_81a4df5a83799262a0f26160184686cc399906fcdb6ae86de993b5706340d833 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81a4df5a83799262a0f26160184686cc399906fcdb6ae86de993b5706340d833->enter($__internal_81a4df5a83799262a0f26160184686cc399906fcdb6ae86de993b5706340d833_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_81a4df5a83799262a0f26160184686cc399906fcdb6ae86de993b5706340d833->leave($__internal_81a4df5a83799262a0f26160184686cc399906fcdb6ae86de993b5706340d833_prof);

        
        $__internal_fc273397e7a1474aacd12c232bccdcb9b6c695df9f9befde6229c4bac374aff1->leave($__internal_fc273397e7a1474aacd12c232bccdcb9b6c695df9f9befde6229c4bac374aff1_prof);

    }

    // line 52
    public function block_body($context, array $blocks = array())
    {
        $__internal_b8aa5bb06f96779eee133c7ff84f6adb08da856fb3997cbe8833bbb62ddd827e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8aa5bb06f96779eee133c7ff84f6adb08da856fb3997cbe8833bbb62ddd827e->enter($__internal_b8aa5bb06f96779eee133c7ff84f6adb08da856fb3997cbe8833bbb62ddd827e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a16de77671648ae0cc558460f8b78e6bcfaae0a26aa542dd5192b944e78663d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a16de77671648ae0cc558460f8b78e6bcfaae0a26aa542dd5192b944e78663d5->enter($__internal_a16de77671648ae0cc558460f8b78e6bcfaae0a26aa542dd5192b944e78663d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a16de77671648ae0cc558460f8b78e6bcfaae0a26aa542dd5192b944e78663d5->leave($__internal_a16de77671648ae0cc558460f8b78e6bcfaae0a26aa542dd5192b944e78663d5_prof);

        
        $__internal_b8aa5bb06f96779eee133c7ff84f6adb08da856fb3997cbe8833bbb62ddd827e->leave($__internal_b8aa5bb06f96779eee133c7ff84f6adb08da856fb3997cbe8833bbb62ddd827e_prof);

    }

    // line 57
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3782714c1043e75cd6e574208ffeea4ef704ea5bd6065c297cc6dbba2bdb3d18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3782714c1043e75cd6e574208ffeea4ef704ea5bd6065c297cc6dbba2bdb3d18->enter($__internal_3782714c1043e75cd6e574208ffeea4ef704ea5bd6065c297cc6dbba2bdb3d18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_44e012699d66a087bcdab8a2bc5d06c9d135bfcae63c7c02c9a1c398c53011fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44e012699d66a087bcdab8a2bc5d06c9d135bfcae63c7c02c9a1c398c53011fa->enter($__internal_44e012699d66a087bcdab8a2bc5d06c9d135bfcae63c7c02c9a1c398c53011fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 58
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-2.1.4.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_44e012699d66a087bcdab8a2bc5d06c9d135bfcae63c7c02c9a1c398c53011fa->leave($__internal_44e012699d66a087bcdab8a2bc5d06c9d135bfcae63c7c02c9a1c398c53011fa_prof);

        
        $__internal_3782714c1043e75cd6e574208ffeea4ef704ea5bd6065c297cc6dbba2bdb3d18->leave($__internal_3782714c1043e75cd6e574208ffeea4ef704ea5bd6065c297cc6dbba2bdb3d18_prof);

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
        return array (  244 => 59,  239 => 58,  230 => 57,  213 => 52,  201 => 9,  197 => 8,  192 => 7,  183 => 6,  165 => 5,  153 => 61,  151 => 57,  146 => 55,  142 => 53,  140 => 52,  137 => 51,  128 => 48,  125 => 47,  121 => 46,  118 => 45,  109 => 42,  106 => 41,  102 => 40,  95 => 35,  89 => 33,  83 => 31,  81 => 30,  78 => 29,  73 => 27,  68 => 26,  62 => 24,  60 => 23,  55 => 21,  41 => 11,  39 => 6,  35 => 5,  29 => 1,);
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
        <h1 class=\"logo\" ><a href=\"{{ path('homepage') }}\"> jComercial </a></h1>
        <ul class=\"navi\">
\t\t\t{% if is_granted('ROLE_ADMIN') %}
\t\t\t<li><a href=\"{{ path('list_users') }}\">Usuarios</a></li>
\t\t\t{% else %}
\t\t\t<li><a href=\"{{ path('list_client') }}\">Contratos</a></li>
\t\t\t<li><a href=\"{{ path('list_proveedor') }}\">Facturas</a></li>
            {% endif %}
\t\t\t<li class=\"search\"><a href=\"#\" class=\"js-header-search-toggle\"><i class=\"fa fa-search\"></i></a></li>
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
