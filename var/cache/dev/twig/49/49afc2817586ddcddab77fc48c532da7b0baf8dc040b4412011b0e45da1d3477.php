<?php

/* base.html.twig */
class __TwigTemplate_559e907860c46520099dcbde370f6353b32f541dcfcac85bea6c45c73c49bfbf extends Twig_Template
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
        $__internal_56f276081ecbc8add5e49f8f5a29e118d885b721ad7d255bbc45ca3d9d2c9a15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56f276081ecbc8add5e49f8f5a29e118d885b721ad7d255bbc45ca3d9d2c9a15->enter($__internal_56f276081ecbc8add5e49f8f5a29e118d885b721ad7d255bbc45ca3d9d2c9a15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_9eb7f6843c5386e7efed0665295d6b08ac0d491d1e7931d94efa7908274f52ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9eb7f6843c5386e7efed0665295d6b08ac0d491d1e7931d94efa7908274f52ab->enter($__internal_9eb7f6843c5386e7efed0665295d6b08ac0d491d1e7931d94efa7908274f52ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
                    <li><a href=\"";
            // line 27
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_client");
            echo "\">Cliente</a></li>
                    <li><a href=\"";
            // line 28
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_proveedor");
            echo "\">Proveedor</a></li>
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
        
        $__internal_56f276081ecbc8add5e49f8f5a29e118d885b721ad7d255bbc45ca3d9d2c9a15->leave($__internal_56f276081ecbc8add5e49f8f5a29e118d885b721ad7d255bbc45ca3d9d2c9a15_prof);

        
        $__internal_9eb7f6843c5386e7efed0665295d6b08ac0d491d1e7931d94efa7908274f52ab->leave($__internal_9eb7f6843c5386e7efed0665295d6b08ac0d491d1e7931d94efa7908274f52ab_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_90e68f70ecdbabc6b365d142856a2f6f7d8d31d6545ad7f92095e37394480b21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90e68f70ecdbabc6b365d142856a2f6f7d8d31d6545ad7f92095e37394480b21->enter($__internal_90e68f70ecdbabc6b365d142856a2f6f7d8d31d6545ad7f92095e37394480b21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_be7104e97893d013f29b02192b323d5f8f7c75a8ce1fc0e390c5eb6c5b3169c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be7104e97893d013f29b02192b323d5f8f7c75a8ce1fc0e390c5eb6c5b3169c1->enter($__internal_be7104e97893d013f29b02192b323d5f8f7c75a8ce1fc0e390c5eb6c5b3169c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "jComercial";
        
        $__internal_be7104e97893d013f29b02192b323d5f8f7c75a8ce1fc0e390c5eb6c5b3169c1->leave($__internal_be7104e97893d013f29b02192b323d5f8f7c75a8ce1fc0e390c5eb6c5b3169c1_prof);

        
        $__internal_90e68f70ecdbabc6b365d142856a2f6f7d8d31d6545ad7f92095e37394480b21->leave($__internal_90e68f70ecdbabc6b365d142856a2f6f7d8d31d6545ad7f92095e37394480b21_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_88865b44550e5fe2fde3c3bb19c4aa3cdec900a1d93a62ad8bd87bb56f52048e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88865b44550e5fe2fde3c3bb19c4aa3cdec900a1d93a62ad8bd87bb56f52048e->enter($__internal_88865b44550e5fe2fde3c3bb19c4aa3cdec900a1d93a62ad8bd87bb56f52048e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_5cd422929c5930918337f21236c0f9241f2efa544123748298b6e0896b7087d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cd422929c5930918337f21236c0f9241f2efa544123748298b6e0896b7087d2->enter($__internal_5cd422929c5930918337f21236c0f9241f2efa544123748298b6e0896b7087d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_5cd422929c5930918337f21236c0f9241f2efa544123748298b6e0896b7087d2->leave($__internal_5cd422929c5930918337f21236c0f9241f2efa544123748298b6e0896b7087d2_prof);

        
        $__internal_88865b44550e5fe2fde3c3bb19c4aa3cdec900a1d93a62ad8bd87bb56f52048e->leave($__internal_88865b44550e5fe2fde3c3bb19c4aa3cdec900a1d93a62ad8bd87bb56f52048e_prof);

    }

    // line 56
    public function block_body($context, array $blocks = array())
    {
        $__internal_d23c1fd590b48d4df5354142106c648f08bd8eb4f0e7576b25a39bfee4bc71a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d23c1fd590b48d4df5354142106c648f08bd8eb4f0e7576b25a39bfee4bc71a9->enter($__internal_d23c1fd590b48d4df5354142106c648f08bd8eb4f0e7576b25a39bfee4bc71a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_88801b598b7a7afb14cdfb7f411db59fd953aface780f8d9c0d3b81a770b78ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88801b598b7a7afb14cdfb7f411db59fd953aface780f8d9c0d3b81a770b78ae->enter($__internal_88801b598b7a7afb14cdfb7f411db59fd953aface780f8d9c0d3b81a770b78ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_88801b598b7a7afb14cdfb7f411db59fd953aface780f8d9c0d3b81a770b78ae->leave($__internal_88801b598b7a7afb14cdfb7f411db59fd953aface780f8d9c0d3b81a770b78ae_prof);

        
        $__internal_d23c1fd590b48d4df5354142106c648f08bd8eb4f0e7576b25a39bfee4bc71a9->leave($__internal_d23c1fd590b48d4df5354142106c648f08bd8eb4f0e7576b25a39bfee4bc71a9_prof);

    }

    // line 61
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d9f8412e9e392168eb347038e4acab9a0d3cd9aefea508db0c5588b1b024b966 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9f8412e9e392168eb347038e4acab9a0d3cd9aefea508db0c5588b1b024b966->enter($__internal_d9f8412e9e392168eb347038e4acab9a0d3cd9aefea508db0c5588b1b024b966_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_56ac835688351e07ca6e872e1a68716f55f9b09de057b9d3c811a391c0e984c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56ac835688351e07ca6e872e1a68716f55f9b09de057b9d3c811a391c0e984c0->enter($__internal_56ac835688351e07ca6e872e1a68716f55f9b09de057b9d3c811a391c0e984c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_56ac835688351e07ca6e872e1a68716f55f9b09de057b9d3c811a391c0e984c0->leave($__internal_56ac835688351e07ca6e872e1a68716f55f9b09de057b9d3c811a391c0e984c0_prof);

        
        $__internal_d9f8412e9e392168eb347038e4acab9a0d3cd9aefea508db0c5588b1b024b966->leave($__internal_d9f8412e9e392168eb347038e4acab9a0d3cd9aefea508db0c5588b1b024b966_prof);

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
        return array (  256 => 64,  252 => 63,  247 => 62,  238 => 61,  221 => 56,  209 => 9,  205 => 8,  200 => 7,  191 => 6,  173 => 5,  161 => 66,  159 => 61,  154 => 59,  150 => 57,  148 => 56,  145 => 55,  136 => 52,  133 => 51,  129 => 50,  126 => 49,  117 => 46,  114 => 45,  110 => 44,  103 => 39,  97 => 37,  91 => 35,  88 => 34,  86 => 33,  81 => 31,  75 => 28,  71 => 27,  64 => 22,  58 => 20,  56 => 19,  51 => 17,  41 => 11,  39 => 6,  35 => 5,  29 => 1,);
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
                    <li><a href=\"{{ path('list_client') }}\">Cliente</a></li>
                    <li><a href=\"{{ path('list_proveedor') }}\">Proveedor</a></li>
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
