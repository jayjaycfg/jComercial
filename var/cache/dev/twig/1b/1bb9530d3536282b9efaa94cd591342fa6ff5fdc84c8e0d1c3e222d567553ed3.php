<?php

/* :admin/user:show.html.twig */
class __TwigTemplate_e32318a1fedf1394593b129b7db9f476275f28b7e576e122f83573b1cf3e2594 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":admin/user:show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f288da303f8a116904b7302d83c166a1403db2a992e071e8ba3b0a1900c4dae1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f288da303f8a116904b7302d83c166a1403db2a992e071e8ba3b0a1900c4dae1->enter($__internal_f288da303f8a116904b7302d83c166a1403db2a992e071e8ba3b0a1900c4dae1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":admin/user:show.html.twig"));

        $__internal_aeb7bf8818d360ec92252669595fd0ebbacac296fcbcd963791741a933917f2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aeb7bf8818d360ec92252669595fd0ebbacac296fcbcd963791741a933917f2a->enter($__internal_aeb7bf8818d360ec92252669595fd0ebbacac296fcbcd963791741a933917f2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":admin/user:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f288da303f8a116904b7302d83c166a1403db2a992e071e8ba3b0a1900c4dae1->leave($__internal_f288da303f8a116904b7302d83c166a1403db2a992e071e8ba3b0a1900c4dae1_prof);

        
        $__internal_aeb7bf8818d360ec92252669595fd0ebbacac296fcbcd963791741a933917f2a->leave($__internal_aeb7bf8818d360ec92252669595fd0ebbacac296fcbcd963791741a933917f2a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c796f0f81f87b46c2c205c516d89e96582f2d3cc2eaab727c11135bd5dfdd354 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c796f0f81f87b46c2c205c516d89e96582f2d3cc2eaab727c11135bd5dfdd354->enter($__internal_c796f0f81f87b46c2c205c516d89e96582f2d3cc2eaab727c11135bd5dfdd354_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_71c9ff2f1c31eaf3520a85cf0b0da36388133e603915304c2b8b0edb5ddd0bc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71c9ff2f1c31eaf3520a85cf0b0da36388133e603915304c2b8b0edb5ddd0bc3->enter($__internal_71c9ff2f1c31eaf3520a85cf0b0da36388133e603915304c2b8b0edb5ddd0bc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-8\">
                <h1>
                    ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "name", array()), "html", null, true);
        echo "
                    <a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_edit", array("id" => $this->getAttribute(        // line 10
($context["user"] ?? $this->getContext($context, "user")), "id", array()))), "html", null, true);
        // line 11
        echo "\" class=\"pull-right btn btn-link\">
                        <span class=\"fa fa-pencil\"></span>
                    </a>

                </h1>

                <table class=\"table\">
                    <tbody>
                    <tr>
                        <th>Nombre Completo</th>
                        <td>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "fullName", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Ocupación</th>
                        <td>";
        // line 25
        echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "roles", array())), "html", null, true);
        echo "</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            ";
        // line 31
        echo "                ";
        // line 32
        echo "                ";
        // line 33
        echo "                    ";
        // line 34
        echo "                        ";
        // line 35
        echo "                            ";
        // line 36
        echo "                                ";
        // line 37
        echo "                            ";
        // line 38
        echo "                            ";
        // line 39
        echo "                            ";
        // line 40
        echo "                        ";
        // line 41
        echo "                    ";
        // line 42
        echo "                ";
        // line 43
        echo "            ";
        // line 44
        echo "        </div>
    </div>
";
        
        $__internal_71c9ff2f1c31eaf3520a85cf0b0da36388133e603915304c2b8b0edb5ddd0bc3->leave($__internal_71c9ff2f1c31eaf3520a85cf0b0da36388133e603915304c2b8b0edb5ddd0bc3_prof);

        
        $__internal_c796f0f81f87b46c2c205c516d89e96582f2d3cc2eaab727c11135bd5dfdd354->leave($__internal_c796f0f81f87b46c2c205c516d89e96582f2d3cc2eaab727c11135bd5dfdd354_prof);

    }

    public function getTemplateName()
    {
        return ":admin/user:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 44,  113 => 43,  111 => 42,  109 => 41,  107 => 40,  105 => 39,  103 => 38,  101 => 37,  99 => 36,  97 => 35,  95 => 34,  93 => 33,  91 => 32,  89 => 31,  81 => 25,  74 => 21,  62 => 11,  60 => 10,  59 => 9,  55 => 8,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-8\">
                <h1>
                    {{ user.name }}
                    <a href=\"{{ path('user_edit',{
                        'id': user.id
                    }) }}\" class=\"pull-right btn btn-link\">
                        <span class=\"fa fa-pencil\"></span>
                    </a>

                </h1>

                <table class=\"table\">
                    <tbody>
                    <tr>
                        <th>Nombre Completo</th>
                        <td>{{ user.fullName }}</td>
                    </tr>
                    <tr>
                        <th>Ocupación</th>
                        <td>{{ user.roles|json_encode }}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            {#<div class=\"col-xs-4\">#}
                {#<h3>Genus Studied</h3>#}
                {#<ul class=\"list-group\">#}
                    {#{% for genusStudied in user.genusStudied %}#}
                        {#<li class=\"list-group-item\">#}
                            {#<a href=\"{{ path('genus_show',{#}
                                {#'genusName' : genusStudied.name#}
                            {#}) }}\">#}
                            {#{{ genusStudied.name }}#}
                            {#</a>#}
                        {#</li>#}
                    {#{% endfor %}#}
                {#</ul>#}
            {#</div>#}
        </div>
    </div>
{% endblock %}
", ":admin/user:show.html.twig", "/var/www/html/jComercial/app/Resources/views/admin/user/show.html.twig");
    }
}
