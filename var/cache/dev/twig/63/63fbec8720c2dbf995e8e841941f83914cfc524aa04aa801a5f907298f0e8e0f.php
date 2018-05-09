<?php

/* base.html.twig */
class __TwigTemplate_d29d7b3c164635f26fbf4632bb3585377c1f0f25ba7d617b174bc70aac48b372 extends Twig_Template
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
        $__internal_13484ece4addbb70134ef003cb85f6294f300ed1f7114084bb9ad524896cdf86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13484ece4addbb70134ef003cb85f6294f300ed1f7114084bb9ad524896cdf86->enter($__internal_13484ece4addbb70134ef003cb85f6294f300ed1f7114084bb9ad524896cdf86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_f715925266ddd4976013a14ee8828f5b0c307f2e24881742ed1ec8165204f147 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f715925266ddd4976013a14ee8828f5b0c307f2e24881742ed1ec8165204f147->enter($__internal_f715925266ddd4976013a14ee8828f5b0c307f2e24881742ed1ec8165204f147_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listar_clientes");
        echo "\">Cliente</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listar_proveedores");
        echo "\">Proveedor</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listar_contrato");
        echo "\">Todos</a></li>
\t\t\t\t</ul>
\t\t\t</li>
\t\t\t<li><a href=\"";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_factura");
        echo "\">Facturas</a></li>
            ";
        // line 34
        echo "\t\t\t<li class=\"search\"><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("buscar");
        echo "\" class=\"js-header-search-toggle\">Buscar <i class=\"fa fa-search\"></i></a></li>
\t\t    ";
        // line 35
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 36
            echo "            <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("security_logout");
            echo "\">Logout</a></li>
            ";
        } else {
            // line 38
            echo "            <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("security_login");
            echo "\">Login</a></li>
            ";
        }
        // line 40
        echo "        </ul>
    </header>
    <div class=\"main-content\">


\t\t";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 46
            echo "            <div class=\"alert alert-success\">
\t\t\t\t";
            // line 47
            echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
            echo "
            </div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "
\t\t";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 52
            echo "            <div class=\"alert alert-danger\">
\t\t\t\t";
            // line 53
            echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
            echo "
            </div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "
\t\t";
        // line 57
        $this->displayBlock('body', $context, $blocks);
        // line 58
        echo "    </div>
        <div class=\"footer\">
            <p>&copy; Todos los derechos reservados, CNCI ";
        // line 60
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "today", "Y"), "html", null, true);
        echo "</p>
        </div>
        ";
        // line 62
        $this->displayBlock('javascripts', $context, $blocks);
        // line 67
        echo "    </body>
</html>
";
        
        $__internal_13484ece4addbb70134ef003cb85f6294f300ed1f7114084bb9ad524896cdf86->leave($__internal_13484ece4addbb70134ef003cb85f6294f300ed1f7114084bb9ad524896cdf86_prof);

        
        $__internal_f715925266ddd4976013a14ee8828f5b0c307f2e24881742ed1ec8165204f147->leave($__internal_f715925266ddd4976013a14ee8828f5b0c307f2e24881742ed1ec8165204f147_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_28d3700e594ab3a7b6842f02fda668ed6af42a8524ebcdf06bfdeed91f3a991a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28d3700e594ab3a7b6842f02fda668ed6af42a8524ebcdf06bfdeed91f3a991a->enter($__internal_28d3700e594ab3a7b6842f02fda668ed6af42a8524ebcdf06bfdeed91f3a991a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0e0117ac2fd6a111c9ba18e7f7f4475b0ed72a927f65025c808a19c4f2c1af5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e0117ac2fd6a111c9ba18e7f7f4475b0ed72a927f65025c808a19c4f2c1af5b->enter($__internal_0e0117ac2fd6a111c9ba18e7f7f4475b0ed72a927f65025c808a19c4f2c1af5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "jComercial";
        
        $__internal_0e0117ac2fd6a111c9ba18e7f7f4475b0ed72a927f65025c808a19c4f2c1af5b->leave($__internal_0e0117ac2fd6a111c9ba18e7f7f4475b0ed72a927f65025c808a19c4f2c1af5b_prof);

        
        $__internal_28d3700e594ab3a7b6842f02fda668ed6af42a8524ebcdf06bfdeed91f3a991a->leave($__internal_28d3700e594ab3a7b6842f02fda668ed6af42a8524ebcdf06bfdeed91f3a991a_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_07e2dfee95574c3d8c5c58fbb416e9acc8ed3eec517478b7eb97bd857eefbb0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07e2dfee95574c3d8c5c58fbb416e9acc8ed3eec517478b7eb97bd857eefbb0d->enter($__internal_07e2dfee95574c3d8c5c58fbb416e9acc8ed3eec517478b7eb97bd857eefbb0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_29f8b127dc7e02c53ca13e91e54c07f4c3d294161ba518ce3b23ee8819abe6ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29f8b127dc7e02c53ca13e91e54c07f4c3d294161ba518ce3b23ee8819abe6ff->enter($__internal_29f8b127dc7e02c53ca13e91e54c07f4c3d294161ba518ce3b23ee8819abe6ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_29f8b127dc7e02c53ca13e91e54c07f4c3d294161ba518ce3b23ee8819abe6ff->leave($__internal_29f8b127dc7e02c53ca13e91e54c07f4c3d294161ba518ce3b23ee8819abe6ff_prof);

        
        $__internal_07e2dfee95574c3d8c5c58fbb416e9acc8ed3eec517478b7eb97bd857eefbb0d->leave($__internal_07e2dfee95574c3d8c5c58fbb416e9acc8ed3eec517478b7eb97bd857eefbb0d_prof);

    }

    // line 57
    public function block_body($context, array $blocks = array())
    {
        $__internal_e8a2379d756f6dc59a6435fb66f05d3f841175cae09a07ed91f3af24be8edbb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8a2379d756f6dc59a6435fb66f05d3f841175cae09a07ed91f3af24be8edbb9->enter($__internal_e8a2379d756f6dc59a6435fb66f05d3f841175cae09a07ed91f3af24be8edbb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3256b59b2c1f18155d364cc4e71572332fe367d7ee7477f5d3fe69cc3f8de222 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3256b59b2c1f18155d364cc4e71572332fe367d7ee7477f5d3fe69cc3f8de222->enter($__internal_3256b59b2c1f18155d364cc4e71572332fe367d7ee7477f5d3fe69cc3f8de222_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3256b59b2c1f18155d364cc4e71572332fe367d7ee7477f5d3fe69cc3f8de222->leave($__internal_3256b59b2c1f18155d364cc4e71572332fe367d7ee7477f5d3fe69cc3f8de222_prof);

        
        $__internal_e8a2379d756f6dc59a6435fb66f05d3f841175cae09a07ed91f3af24be8edbb9->leave($__internal_e8a2379d756f6dc59a6435fb66f05d3f841175cae09a07ed91f3af24be8edbb9_prof);

    }

    // line 62
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7d859bfa6f9b23c62516f18d51a354af0ee29255dfcb5661774694bdeab88f05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d859bfa6f9b23c62516f18d51a354af0ee29255dfcb5661774694bdeab88f05->enter($__internal_7d859bfa6f9b23c62516f18d51a354af0ee29255dfcb5661774694bdeab88f05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c7e9be095a5f19c432aff139257aae8de82bda9c681b0028d2b2a8bf233a4b25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7e9be095a5f19c432aff139257aae8de82bda9c681b0028d2b2a8bf233a4b25->enter($__internal_c7e9be095a5f19c432aff139257aae8de82bda9c681b0028d2b2a8bf233a4b25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 63
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-2.1.4.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/bootstrap/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_c7e9be095a5f19c432aff139257aae8de82bda9c681b0028d2b2a8bf233a4b25->leave($__internal_c7e9be095a5f19c432aff139257aae8de82bda9c681b0028d2b2a8bf233a4b25_prof);

        
        $__internal_7d859bfa6f9b23c62516f18d51a354af0ee29255dfcb5661774694bdeab88f05->leave($__internal_7d859bfa6f9b23c62516f18d51a354af0ee29255dfcb5661774694bdeab88f05_prof);

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
        return array (  258 => 65,  254 => 64,  249 => 63,  240 => 62,  223 => 57,  211 => 9,  207 => 8,  202 => 7,  193 => 6,  175 => 5,  163 => 67,  161 => 62,  156 => 60,  152 => 58,  150 => 57,  147 => 56,  138 => 53,  135 => 52,  131 => 51,  128 => 50,  119 => 47,  116 => 46,  112 => 45,  105 => 40,  99 => 38,  93 => 36,  91 => 35,  86 => 34,  82 => 32,  76 => 29,  72 => 28,  68 => 27,  61 => 22,  56 => 20,  51 => 17,  41 => 11,  39 => 6,  35 => 5,  29 => 1,);
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
                    <li><a href=\"{{ path('listar_clientes') }}\">Cliente</a></li>
\t\t\t\t\t<li><a href=\"{{ path('listar_proveedores') }}\">Proveedor</a></li>
\t\t\t\t\t<li><a href=\"{{ path('listar_contrato') }}\">Todos</a></li>
\t\t\t\t</ul>
\t\t\t</li>
\t\t\t<li><a href=\"{{ path('list_factura') }}\">Facturas</a></li>
            {#{% endif %}#}
\t\t\t<li class=\"search\"><a href=\"{{ path('buscar') }}\" class=\"js-header-search-toggle\">Buscar <i class=\"fa fa-search\"></i></a></li>
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
