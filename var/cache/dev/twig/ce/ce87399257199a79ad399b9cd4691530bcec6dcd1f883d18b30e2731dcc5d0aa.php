<?php

/* :admin/user:list.html.twig */
class __TwigTemplate_5d36f86b3083e0e9b1ecbc8094365e0234f5fc4247f6bc8e491b4a739deb08ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":admin/user:list.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_88a78ebdfd73d4e553cb77ee070421480f2fe2ad21d7cbd1722a8736f0e860d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88a78ebdfd73d4e553cb77ee070421480f2fe2ad21d7cbd1722a8736f0e860d2->enter($__internal_88a78ebdfd73d4e553cb77ee070421480f2fe2ad21d7cbd1722a8736f0e860d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":admin/user:list.html.twig"));

        $__internal_27c88fac567ad5b7a61e7d43c2704acd5f40da47dfe37636e48e9a932f0f81bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27c88fac567ad5b7a61e7d43c2704acd5f40da47dfe37636e48e9a932f0f81bc->enter($__internal_27c88fac567ad5b7a61e7d43c2704acd5f40da47dfe37636e48e9a932f0f81bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":admin/user:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_88a78ebdfd73d4e553cb77ee070421480f2fe2ad21d7cbd1722a8736f0e860d2->leave($__internal_88a78ebdfd73d4e553cb77ee070421480f2fe2ad21d7cbd1722a8736f0e860d2_prof);

        
        $__internal_27c88fac567ad5b7a61e7d43c2704acd5f40da47dfe37636e48e9a932f0f81bc->leave($__internal_27c88fac567ad5b7a61e7d43c2704acd5f40da47dfe37636e48e9a932f0f81bc_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2d48907c7abd86b974caf5a9489895950c65b7e760911e6f63ec32532515577d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d48907c7abd86b974caf5a9489895950c65b7e760911e6f63ec32532515577d->enter($__internal_2d48907c7abd86b974caf5a9489895950c65b7e760911e6f63ec32532515577d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_05827d28f735c4bf2392f9235ec1ae3e5355de11a1c6d4fa32038ced296f786b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05827d28f735c4bf2392f9235ec1ae3e5355de11a1c6d4fa32038ced296f786b->enter($__internal_05827d28f735c4bf2392f9235ec1ae3e5355de11a1c6d4fa32038ced296f786b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"row\">

            <div class=\"col-xs-12\">
                <div class=\"pull-right\" style=\"margin-bottom: 10px; margin-top: 20px;\">
                    <a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register_user");
        echo "\" class=\"btn btn-primary pull-right\">Insertar <span class=\"fa fa-plus-circle\"></span></a>
                </div>

                <h1>Usuarios</h1>

                <table class=\"table table-striped js-user-table\">
                    <tr>
                        <th>Usuario</th>
                        <th>Ocupación</th>
                        <th>&nbsp;</th>
                    </tr>
                    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 21
            echo "                        <tr>
                            <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "name", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute($context["user"], "roles", array())), "html", null, true);
            echo "</td>
                            <td>
                                <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_edit", array("id" => $this->getAttribute(            // line 26
$context["user"], "id", array()))), "html", null, true);
            // line 27
            echo "\" class=\"btn btn-xs btn-success\">
\t\t\t\t\t\t\t\t\t<span class=\"fa fa-pencil\"></span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn-xs btn-primary js-delete-user\"
\t\t\t\t\t\t\t\tdata-url=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete_user", array("id" => $this->getAttribute(            // line 33
$context["user"], "id", array()))), "html", null, true);
            // line 34
            echo "\"
\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t<span class=\"fa fa-trash\"></span>
\t\t\t\t\t\t\t\t</a>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "                </table>
            </div>
        </div>
    </div>
";
        
        $__internal_05827d28f735c4bf2392f9235ec1ae3e5355de11a1c6d4fa32038ced296f786b->leave($__internal_05827d28f735c4bf2392f9235ec1ae3e5355de11a1c6d4fa32038ced296f786b_prof);

        
        $__internal_2d48907c7abd86b974caf5a9489895950c65b7e760911e6f63ec32532515577d->leave($__internal_2d48907c7abd86b974caf5a9489895950c65b7e760911e6f63ec32532515577d_prof);

    }

    // line 49
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3e6103b99f5e4c0b0268245a2d480a8a4fa5416d6b130392887ccba5c950baf2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e6103b99f5e4c0b0268245a2d480a8a4fa5416d6b130392887ccba5c950baf2->enter($__internal_3e6103b99f5e4c0b0268245a2d480a8a4fa5416d6b130392887ccba5c950baf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_8ef4bd40ffa460585abe71a83cdfcfd506ba2d9a85377574c6a841f133554199 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ef4bd40ffa460585abe71a83cdfcfd506ba2d9a85377574c6a841f133554199->enter($__internal_8ef4bd40ffa460585abe71a83cdfcfd506ba2d9a85377574c6a841f133554199_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 50
        echo "\t";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
\t<script>
        \$(document).ready(function(){

            var \$table = \$('.js-user-table');

            \$table.find('.js-delete-user').on('click',function(e){
                e.preventDefault();

                \$(this).find('.fa')
                    .removeClass('fa-trash')
\t\t\t\t\t.addClass('fa-spinner')
                    .addClass('fa-spin');

                var \$row = \$(this).closest('tr');

                \$.ajax({
\t\t\t\t\turl: \$(this).data('url'),
\t\t\t\t\tmethod: 'DELETE'

\t\t\t\t}).done(function () {
\t\t\t\t\t\$row.fadeOut();
                });
            });
        });
\t</script>
";
        
        $__internal_8ef4bd40ffa460585abe71a83cdfcfd506ba2d9a85377574c6a841f133554199->leave($__internal_8ef4bd40ffa460585abe71a83cdfcfd506ba2d9a85377574c6a841f133554199_prof);

        
        $__internal_3e6103b99f5e4c0b0268245a2d480a8a4fa5416d6b130392887ccba5c950baf2->leave($__internal_3e6103b99f5e4c0b0268245a2d480a8a4fa5416d6b130392887ccba5c950baf2_prof);

    }

    public function getTemplateName()
    {
        return ":admin/user:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 50,  126 => 49,  112 => 41,  100 => 34,  98 => 33,  97 => 32,  90 => 27,  88 => 26,  87 => 25,  82 => 23,  78 => 22,  75 => 21,  71 => 20,  57 => 9,  50 => 4,  41 => 3,  11 => 1,);
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

            <div class=\"col-xs-12\">
                <div class=\"pull-right\" style=\"margin-bottom: 10px; margin-top: 20px;\">
                    <a href=\"{{ path('register_user') }}\" class=\"btn btn-primary pull-right\">Insertar <span class=\"fa fa-plus-circle\"></span></a>
                </div>

                <h1>Usuarios</h1>

                <table class=\"table table-striped js-user-table\">
                    <tr>
                        <th>Usuario</th>
                        <th>Ocupación</th>
                        <th>&nbsp;</th>
                    </tr>
                    {% for user in users %}
                        <tr>
                            <td>{{ user.name }}</td>
                            <td>{{ user.roles|json_encode }}</td>
                            <td>
                                <a href=\"{{ path('user_edit',{
\t\t\t\t\t\t\t\t\t'id' : user.id
\t\t\t\t\t\t\t\t}) }}\" class=\"btn btn-xs btn-success\">
\t\t\t\t\t\t\t\t\t<span class=\"fa fa-pencil\"></span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn-xs btn-primary js-delete-user\"
\t\t\t\t\t\t\t\tdata-url=\"{{ path('delete_user',{
\t\t\t\t\t\t\t\t\t'id' : user.id
\t\t\t\t\t\t\t\t})  }}\"
\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t<span class=\"fa fa-trash\"></span>
\t\t\t\t\t\t\t\t</a>
                            </td>
                        </tr>
                    {% endfor %}
                </table>
            </div>
        </div>
    </div>
{% endblock %}



{% block javascripts %}
\t{{ parent() }}
\t<script>
        \$(document).ready(function(){

            var \$table = \$('.js-user-table');

            \$table.find('.js-delete-user').on('click',function(e){
                e.preventDefault();

                \$(this).find('.fa')
                    .removeClass('fa-trash')
\t\t\t\t\t.addClass('fa-spinner')
                    .addClass('fa-spin');

                var \$row = \$(this).closest('tr');

                \$.ajax({
\t\t\t\t\turl: \$(this).data('url'),
\t\t\t\t\tmethod: 'DELETE'

\t\t\t\t}).done(function () {
\t\t\t\t\t\$row.fadeOut();
                });
            });
        });
\t</script>
{% endblock %}


", ":admin/user:list.html.twig", "/var/www/html/jComercial/app/Resources/views/admin/user/list.html.twig");
    }
}
