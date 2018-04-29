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
        $__internal_c197b02af920dbe09485eb0be06db44a35a7c8f7f0647f97e80775225ebcb150 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c197b02af920dbe09485eb0be06db44a35a7c8f7f0647f97e80775225ebcb150->enter($__internal_c197b02af920dbe09485eb0be06db44a35a7c8f7f0647f97e80775225ebcb150_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6b5b9ec801a6d03a6512882310d691c116051cb6e1e11757cc9d3a01d4b47aad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b5b9ec801a6d03a6512882310d691c116051cb6e1e11757cc9d3a01d4b47aad->enter($__internal_6b5b9ec801a6d03a6512882310d691c116051cb6e1e11757cc9d3a01d4b47aad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
\t\t\t<li><a href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_users");
        echo "\">Usuarios</a></li>
\t\t\t<li><a href=\"\">Contratos</a></li>
\t\t\t<li><a href=\"\">Facturas</a></li>
            <li class=\"search\"><a href=\"#\" class=\"js-header-search-toggle\"><i class=\"fa fa-search\"></i></a></li>
\t\t    ";
        // line 27
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 28
            echo "            <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("security_logout");
            echo "\">Logout</a></li>
            ";
        } else {
            // line 30
            echo "            <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("security_login");
            echo "\">Login</a></li>
            ";
        }
        // line 32
        echo "        </ul>
    </header>
    <div class=\"main-content\">


\t\t";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 38
            echo "            <div class=\"alert alert-success\">
\t\t\t\t";
            // line 39
            echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
            echo "
            </div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "
\t\t";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 44
            echo "            <div class=\"alert alert-danger\">
\t\t\t\t";
            // line 45
            echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
            echo "
            </div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "
\t\t";
        // line 49
        $this->displayBlock('body', $context, $blocks);
        // line 50
        echo "    </div>
        <div class=\"footer\">
            <p>&copy; Todos los derechos reservados, CNCI ";
        // line 52
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "today", "Y"), "html", null, true);
        echo "</p>
        </div>
        ";
        // line 54
        $this->displayBlock('javascripts', $context, $blocks);
        // line 58
        echo "    </body>
</html>
";
        
        $__internal_c197b02af920dbe09485eb0be06db44a35a7c8f7f0647f97e80775225ebcb150->leave($__internal_c197b02af920dbe09485eb0be06db44a35a7c8f7f0647f97e80775225ebcb150_prof);

        
        $__internal_6b5b9ec801a6d03a6512882310d691c116051cb6e1e11757cc9d3a01d4b47aad->leave($__internal_6b5b9ec801a6d03a6512882310d691c116051cb6e1e11757cc9d3a01d4b47aad_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6c6ec2b591a44af2ff1bf84128cdcb343edcec29624c95172db755fce8637834 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c6ec2b591a44af2ff1bf84128cdcb343edcec29624c95172db755fce8637834->enter($__internal_6c6ec2b591a44af2ff1bf84128cdcb343edcec29624c95172db755fce8637834_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_481f1fb6228876e9c04c654329db05b3be9c316e36a2bbb44ca84ed12f9afad1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_481f1fb6228876e9c04c654329db05b3be9c316e36a2bbb44ca84ed12f9afad1->enter($__internal_481f1fb6228876e9c04c654329db05b3be9c316e36a2bbb44ca84ed12f9afad1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "jComercial";
        
        $__internal_481f1fb6228876e9c04c654329db05b3be9c316e36a2bbb44ca84ed12f9afad1->leave($__internal_481f1fb6228876e9c04c654329db05b3be9c316e36a2bbb44ca84ed12f9afad1_prof);

        
        $__internal_6c6ec2b591a44af2ff1bf84128cdcb343edcec29624c95172db755fce8637834->leave($__internal_6c6ec2b591a44af2ff1bf84128cdcb343edcec29624c95172db755fce8637834_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d0447cf5b557db3efe4024f835a956603b6ba65f40916a9c2807afae7b635470 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0447cf5b557db3efe4024f835a956603b6ba65f40916a9c2807afae7b635470->enter($__internal_d0447cf5b557db3efe4024f835a956603b6ba65f40916a9c2807afae7b635470_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6c268d436a088e385f8bfc1c4fcc51fb1b9623ecb2caeaf1c74a96d46f4f7192 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c268d436a088e385f8bfc1c4fcc51fb1b9623ecb2caeaf1c74a96d46f4f7192->enter($__internal_6c268d436a088e385f8bfc1c4fcc51fb1b9623ecb2caeaf1c74a96d46f4f7192_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_6c268d436a088e385f8bfc1c4fcc51fb1b9623ecb2caeaf1c74a96d46f4f7192->leave($__internal_6c268d436a088e385f8bfc1c4fcc51fb1b9623ecb2caeaf1c74a96d46f4f7192_prof);

        
        $__internal_d0447cf5b557db3efe4024f835a956603b6ba65f40916a9c2807afae7b635470->leave($__internal_d0447cf5b557db3efe4024f835a956603b6ba65f40916a9c2807afae7b635470_prof);

    }

    // line 49
    public function block_body($context, array $blocks = array())
    {
        $__internal_04e9ed604c861bc678b73423ccbff5b0975434afc0ebef2d817b49385c517b46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04e9ed604c861bc678b73423ccbff5b0975434afc0ebef2d817b49385c517b46->enter($__internal_04e9ed604c861bc678b73423ccbff5b0975434afc0ebef2d817b49385c517b46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1f47c1ee675cc570e63803f6984d89958d1b617660bfec4c1eff6efd847b0f1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f47c1ee675cc570e63803f6984d89958d1b617660bfec4c1eff6efd847b0f1f->enter($__internal_1f47c1ee675cc570e63803f6984d89958d1b617660bfec4c1eff6efd847b0f1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1f47c1ee675cc570e63803f6984d89958d1b617660bfec4c1eff6efd847b0f1f->leave($__internal_1f47c1ee675cc570e63803f6984d89958d1b617660bfec4c1eff6efd847b0f1f_prof);

        
        $__internal_04e9ed604c861bc678b73423ccbff5b0975434afc0ebef2d817b49385c517b46->leave($__internal_04e9ed604c861bc678b73423ccbff5b0975434afc0ebef2d817b49385c517b46_prof);

    }

    // line 54
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e825be4f9b2d1cdc0d28a6c40c6d508162debf27466fc8d6bfe5ad32c084562a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e825be4f9b2d1cdc0d28a6c40c6d508162debf27466fc8d6bfe5ad32c084562a->enter($__internal_e825be4f9b2d1cdc0d28a6c40c6d508162debf27466fc8d6bfe5ad32c084562a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_fc8b1eb88c3e2c0709c708c99608b09228f5a6921336bf46ec53759f61664219 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc8b1eb88c3e2c0709c708c99608b09228f5a6921336bf46ec53759f61664219->enter($__internal_fc8b1eb88c3e2c0709c708c99608b09228f5a6921336bf46ec53759f61664219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 55
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-2.1.4.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_fc8b1eb88c3e2c0709c708c99608b09228f5a6921336bf46ec53759f61664219->leave($__internal_fc8b1eb88c3e2c0709c708c99608b09228f5a6921336bf46ec53759f61664219_prof);

        
        $__internal_e825be4f9b2d1cdc0d28a6c40c6d508162debf27466fc8d6bfe5ad32c084562a->leave($__internal_e825be4f9b2d1cdc0d28a6c40c6d508162debf27466fc8d6bfe5ad32c084562a_prof);

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
        return array (  227 => 56,  222 => 55,  213 => 54,  196 => 49,  184 => 9,  180 => 8,  175 => 7,  166 => 6,  148 => 5,  136 => 58,  134 => 54,  129 => 52,  125 => 50,  123 => 49,  120 => 48,  111 => 45,  108 => 44,  104 => 43,  101 => 42,  92 => 39,  89 => 38,  85 => 37,  78 => 32,  72 => 30,  66 => 28,  64 => 27,  57 => 23,  41 => 11,  39 => 6,  35 => 5,  29 => 1,);
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
\t\t\t<li><a href=\"{{ path('list_users') }}\">Usuarios</a></li>
\t\t\t<li><a href=\"\">Contratos</a></li>
\t\t\t<li><a href=\"\">Facturas</a></li>
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
