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
        $__internal_256f6ab818797f28dc651a467c49dddf4693c8eebc62879d267311cb81fa02c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_256f6ab818797f28dc651a467c49dddf4693c8eebc62879d267311cb81fa02c4->enter($__internal_256f6ab818797f28dc651a467c49dddf4693c8eebc62879d267311cb81fa02c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_53cf85a2e7edfffee76d174417c81bca75df6ebf4ceda8c42d5b8e6dd2800302 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53cf85a2e7edfffee76d174417c81bca75df6ebf4ceda8c42d5b8e6dd2800302->enter($__internal_53cf85a2e7edfffee76d174417c81bca75df6ebf4ceda8c42d5b8e6dd2800302_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 20
        echo "\t\t\t<li><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_users");
        echo "\">Usuarios</a></li>
\t\t\t";
        // line 22
        echo "\t\t\t<li class=\"dropdown\">
\t\t\t\t<a href=\"#\" class=\"dropdown\" data-toggle=\"dropdown\">Contrato
\t\t\t\t\t<span class=\"caret\"></span>
\t\t\t\t</a>
                <ul class=\"dropdown-menu\">
                    <li><a href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listar_contrato");
        echo "\">Cliente</a></li>
                    <li><a href=\"#\">Proveedor</a></li>
                </ul>
\t\t\t</li>
\t\t\t<li><a href=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_factura");
        echo "\">Facturas</a></li>
            ";
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
        
        $__internal_256f6ab818797f28dc651a467c49dddf4693c8eebc62879d267311cb81fa02c4->leave($__internal_256f6ab818797f28dc651a467c49dddf4693c8eebc62879d267311cb81fa02c4_prof);

        
        $__internal_53cf85a2e7edfffee76d174417c81bca75df6ebf4ceda8c42d5b8e6dd2800302->leave($__internal_53cf85a2e7edfffee76d174417c81bca75df6ebf4ceda8c42d5b8e6dd2800302_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4f0e255e98d6afb3be6d5be54a5ad257e8b325fea2cd777f2853282d1386fd5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f0e255e98d6afb3be6d5be54a5ad257e8b325fea2cd777f2853282d1386fd5a->enter($__internal_4f0e255e98d6afb3be6d5be54a5ad257e8b325fea2cd777f2853282d1386fd5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_df4eb882d98575a2a8ffbd22931cba3f7eaf8281e0ca60d1b33204c984070512 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df4eb882d98575a2a8ffbd22931cba3f7eaf8281e0ca60d1b33204c984070512->enter($__internal_df4eb882d98575a2a8ffbd22931cba3f7eaf8281e0ca60d1b33204c984070512_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "jComercial";
        
        $__internal_df4eb882d98575a2a8ffbd22931cba3f7eaf8281e0ca60d1b33204c984070512->leave($__internal_df4eb882d98575a2a8ffbd22931cba3f7eaf8281e0ca60d1b33204c984070512_prof);

        
        $__internal_4f0e255e98d6afb3be6d5be54a5ad257e8b325fea2cd777f2853282d1386fd5a->leave($__internal_4f0e255e98d6afb3be6d5be54a5ad257e8b325fea2cd777f2853282d1386fd5a_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cf59e687f985642765cc164838af746068d4afcbe70f9d1ce26ba1c5554c86c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf59e687f985642765cc164838af746068d4afcbe70f9d1ce26ba1c5554c86c9->enter($__internal_cf59e687f985642765cc164838af746068d4afcbe70f9d1ce26ba1c5554c86c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_8449e257c28c75e024249c7b8f75e107de75e3752ad6cb79b5436a258c276d44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8449e257c28c75e024249c7b8f75e107de75e3752ad6cb79b5436a258c276d44->enter($__internal_8449e257c28c75e024249c7b8f75e107de75e3752ad6cb79b5436a258c276d44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_8449e257c28c75e024249c7b8f75e107de75e3752ad6cb79b5436a258c276d44->leave($__internal_8449e257c28c75e024249c7b8f75e107de75e3752ad6cb79b5436a258c276d44_prof);

        
        $__internal_cf59e687f985642765cc164838af746068d4afcbe70f9d1ce26ba1c5554c86c9->leave($__internal_cf59e687f985642765cc164838af746068d4afcbe70f9d1ce26ba1c5554c86c9_prof);

    }

    // line 56
    public function block_body($context, array $blocks = array())
    {
        $__internal_f1ee1ae8c0c3542511fc3b5be37625a2c23dcc71b251c0f1c0f0cd1e4cb79e13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1ee1ae8c0c3542511fc3b5be37625a2c23dcc71b251c0f1c0f0cd1e4cb79e13->enter($__internal_f1ee1ae8c0c3542511fc3b5be37625a2c23dcc71b251c0f1c0f0cd1e4cb79e13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bf4e8fcc89bafe32872c021b84b509d12cf82b6f5d2265dc50cec6c6bd526b86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf4e8fcc89bafe32872c021b84b509d12cf82b6f5d2265dc50cec6c6bd526b86->enter($__internal_bf4e8fcc89bafe32872c021b84b509d12cf82b6f5d2265dc50cec6c6bd526b86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_bf4e8fcc89bafe32872c021b84b509d12cf82b6f5d2265dc50cec6c6bd526b86->leave($__internal_bf4e8fcc89bafe32872c021b84b509d12cf82b6f5d2265dc50cec6c6bd526b86_prof);

        
        $__internal_f1ee1ae8c0c3542511fc3b5be37625a2c23dcc71b251c0f1c0f0cd1e4cb79e13->leave($__internal_f1ee1ae8c0c3542511fc3b5be37625a2c23dcc71b251c0f1c0f0cd1e4cb79e13_prof);

    }

    // line 61
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0a38d7d20c1efc58db67071a38325c3e1117dc1b9654a4bfe50ae67509304a00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a38d7d20c1efc58db67071a38325c3e1117dc1b9654a4bfe50ae67509304a00->enter($__internal_0a38d7d20c1efc58db67071a38325c3e1117dc1b9654a4bfe50ae67509304a00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_0de7fed4e3718e845774d9b1e96873f3e89f9d0e4ad1ea1aeff6134b9d3494cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0de7fed4e3718e845774d9b1e96873f3e89f9d0e4ad1ea1aeff6134b9d3494cc->enter($__internal_0de7fed4e3718e845774d9b1e96873f3e89f9d0e4ad1ea1aeff6134b9d3494cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_0de7fed4e3718e845774d9b1e96873f3e89f9d0e4ad1ea1aeff6134b9d3494cc->leave($__internal_0de7fed4e3718e845774d9b1e96873f3e89f9d0e4ad1ea1aeff6134b9d3494cc_prof);

        
        $__internal_0a38d7d20c1efc58db67071a38325c3e1117dc1b9654a4bfe50ae67509304a00->leave($__internal_0a38d7d20c1efc58db67071a38325c3e1117dc1b9654a4bfe50ae67509304a00_prof);

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
        return array (  249 => 64,  245 => 63,  240 => 62,  231 => 61,  214 => 56,  202 => 9,  198 => 8,  193 => 7,  184 => 6,  166 => 5,  154 => 66,  152 => 61,  147 => 59,  143 => 57,  141 => 56,  138 => 55,  129 => 52,  126 => 51,  122 => 50,  119 => 49,  110 => 46,  107 => 45,  103 => 44,  96 => 39,  90 => 37,  84 => 35,  81 => 34,  79 => 33,  75 => 31,  68 => 27,  61 => 22,  56 => 20,  51 => 17,  41 => 11,  39 => 6,  35 => 5,  29 => 1,);
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
\t\t\t{#{% if is_granted('ROLE_ADMIN') %}#}
\t\t\t<li><a href=\"{{ path('list_users') }}\">Usuarios</a></li>
\t\t\t{#{% else %}#}
\t\t\t<li class=\"dropdown\">
\t\t\t\t<a href=\"#\" class=\"dropdown\" data-toggle=\"dropdown\">Contrato
\t\t\t\t\t<span class=\"caret\"></span>
\t\t\t\t</a>
                <ul class=\"dropdown-menu\">
                    <li><a href=\"{{ path('listar_contrato') }}\">Cliente</a></li>
                    <li><a href=\"#\">Proveedor</a></li>
                </ul>
\t\t\t</li>
\t\t\t<li><a href=\"{{ path('list_factura') }}\">Facturas</a></li>
            {#{% endif %}#}
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
