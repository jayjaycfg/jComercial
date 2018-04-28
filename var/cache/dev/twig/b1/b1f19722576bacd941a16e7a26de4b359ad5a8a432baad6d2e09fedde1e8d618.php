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
        $__internal_23ee7efb2de2778124e63f279df1c8ade5bb2450d80f0fdf731d922a80fd601e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23ee7efb2de2778124e63f279df1c8ade5bb2450d80f0fdf731d922a80fd601e->enter($__internal_23ee7efb2de2778124e63f279df1c8ade5bb2450d80f0fdf731d922a80fd601e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_14ff3aa9e79046316fb6cbf7b5fd606f83cd0cae84cf72ba1f72e78b1169e956 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14ff3aa9e79046316fb6cbf7b5fd606f83cd0cae84cf72ba1f72e78b1169e956->enter($__internal_14ff3aa9e79046316fb6cbf7b5fd606f83cd0cae84cf72ba1f72e78b1169e956_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
\t\t    ";
        // line 24
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_PLAYER")) {
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
        ";
        // line 31
        $this->displayBlock('body', $context, $blocks);
        // line 32
        echo "        <div class=\"footer\">
            <p>Todos los derechos reservados</p>
        </div>
        ";
        // line 35
        $this->displayBlock('javascripts', $context, $blocks);
        // line 39
        echo "    </body>
</html>
";
        
        $__internal_23ee7efb2de2778124e63f279df1c8ade5bb2450d80f0fdf731d922a80fd601e->leave($__internal_23ee7efb2de2778124e63f279df1c8ade5bb2450d80f0fdf731d922a80fd601e_prof);

        
        $__internal_14ff3aa9e79046316fb6cbf7b5fd606f83cd0cae84cf72ba1f72e78b1169e956->leave($__internal_14ff3aa9e79046316fb6cbf7b5fd606f83cd0cae84cf72ba1f72e78b1169e956_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f68a5d4c97e5ae496291d36d058dc34f2839a045f406c7a1d1e4e8db0e062426 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f68a5d4c97e5ae496291d36d058dc34f2839a045f406c7a1d1e4e8db0e062426->enter($__internal_f68a5d4c97e5ae496291d36d058dc34f2839a045f406c7a1d1e4e8db0e062426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e3f76a07d9756b0750072386dc69219aa841f4d9c390477de2595b44db665d83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3f76a07d9756b0750072386dc69219aa841f4d9c390477de2595b44db665d83->enter($__internal_e3f76a07d9756b0750072386dc69219aa841f4d9c390477de2595b44db665d83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_e3f76a07d9756b0750072386dc69219aa841f4d9c390477de2595b44db665d83->leave($__internal_e3f76a07d9756b0750072386dc69219aa841f4d9c390477de2595b44db665d83_prof);

        
        $__internal_f68a5d4c97e5ae496291d36d058dc34f2839a045f406c7a1d1e4e8db0e062426->leave($__internal_f68a5d4c97e5ae496291d36d058dc34f2839a045f406c7a1d1e4e8db0e062426_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4700aa768feaffa89babe9ebb74a1ba9ad4144db160153f898044c9b159a45c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4700aa768feaffa89babe9ebb74a1ba9ad4144db160153f898044c9b159a45c9->enter($__internal_4700aa768feaffa89babe9ebb74a1ba9ad4144db160153f898044c9b159a45c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_9b7d6424f89dcc37b64b56a3c436c1694f7b5d7fa0920aaa0a00c3caefb6b64e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b7d6424f89dcc37b64b56a3c436c1694f7b5d7fa0920aaa0a00c3caefb6b64e->enter($__internal_9b7d6424f89dcc37b64b56a3c436c1694f7b5d7fa0920aaa0a00c3caefb6b64e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_9b7d6424f89dcc37b64b56a3c436c1694f7b5d7fa0920aaa0a00c3caefb6b64e->leave($__internal_9b7d6424f89dcc37b64b56a3c436c1694f7b5d7fa0920aaa0a00c3caefb6b64e_prof);

        
        $__internal_4700aa768feaffa89babe9ebb74a1ba9ad4144db160153f898044c9b159a45c9->leave($__internal_4700aa768feaffa89babe9ebb74a1ba9ad4144db160153f898044c9b159a45c9_prof);

    }

    // line 31
    public function block_body($context, array $blocks = array())
    {
        $__internal_a6f5f7c829cf00989c1c6f71b4e93a5b916c7396c29429a3661b9966812f20e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6f5f7c829cf00989c1c6f71b4e93a5b916c7396c29429a3661b9966812f20e2->enter($__internal_a6f5f7c829cf00989c1c6f71b4e93a5b916c7396c29429a3661b9966812f20e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_441267f558dd807570ef272471d644a697ecd3a8dbef3196c75aadf77b4403cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_441267f558dd807570ef272471d644a697ecd3a8dbef3196c75aadf77b4403cb->enter($__internal_441267f558dd807570ef272471d644a697ecd3a8dbef3196c75aadf77b4403cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_441267f558dd807570ef272471d644a697ecd3a8dbef3196c75aadf77b4403cb->leave($__internal_441267f558dd807570ef272471d644a697ecd3a8dbef3196c75aadf77b4403cb_prof);

        
        $__internal_a6f5f7c829cf00989c1c6f71b4e93a5b916c7396c29429a3661b9966812f20e2->leave($__internal_a6f5f7c829cf00989c1c6f71b4e93a5b916c7396c29429a3661b9966812f20e2_prof);

    }

    // line 35
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_97fe55bb2cfa77bcc6fa4b77c1f756be062ce6bafc08a1f5c1e16c02c31cc14a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97fe55bb2cfa77bcc6fa4b77c1f756be062ce6bafc08a1f5c1e16c02c31cc14a->enter($__internal_97fe55bb2cfa77bcc6fa4b77c1f756be062ce6bafc08a1f5c1e16c02c31cc14a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_1252b3b7837785965a417fe7c210ce480e37d8137221d22cda653ea13aa2b55a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1252b3b7837785965a417fe7c210ce480e37d8137221d22cda653ea13aa2b55a->enter($__internal_1252b3b7837785965a417fe7c210ce480e37d8137221d22cda653ea13aa2b55a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 36
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-2.1.4.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_1252b3b7837785965a417fe7c210ce480e37d8137221d22cda653ea13aa2b55a->leave($__internal_1252b3b7837785965a417fe7c210ce480e37d8137221d22cda653ea13aa2b55a_prof);

        
        $__internal_97fe55bb2cfa77bcc6fa4b77c1f756be062ce6bafc08a1f5c1e16c02c31cc14a->leave($__internal_97fe55bb2cfa77bcc6fa4b77c1f756be062ce6bafc08a1f5c1e16c02c31cc14a_prof);

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
        return array (  176 => 37,  171 => 36,  162 => 35,  145 => 31,  133 => 9,  129 => 8,  124 => 7,  115 => 6,  97 => 5,  85 => 39,  83 => 35,  78 => 32,  76 => 31,  72 => 29,  66 => 27,  60 => 25,  58 => 24,  41 => 11,  39 => 6,  35 => 5,  29 => 1,);
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
\t\t    {% if is_granted('ROLE_PLAYER') %}
            <li><a href=\"{{ path('security_logout') }}\">Logout</a></li>
            {% else %}
            <li><a href=\"{{ path('security_login') }}\">Login</a></li>
            {% endif %}
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
", "base.html.twig", "/var/www/html/HeroQuest/app/Resources/views/base.html.twig");
    }
}
