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
        $__internal_05f91eb0c7706bb10662792e6b6feabb4e9a111b492dff330699c758f90f3d35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05f91eb0c7706bb10662792e6b6feabb4e9a111b492dff330699c758f90f3d35->enter($__internal_05f91eb0c7706bb10662792e6b6feabb4e9a111b492dff330699c758f90f3d35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":admin/user:list.html.twig"));

        $__internal_f92dd8123bdd9a1f4d283dae022b7f0924ce1d0472a66568b41e9f56934100aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f92dd8123bdd9a1f4d283dae022b7f0924ce1d0472a66568b41e9f56934100aa->enter($__internal_f92dd8123bdd9a1f4d283dae022b7f0924ce1d0472a66568b41e9f56934100aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":admin/user:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_05f91eb0c7706bb10662792e6b6feabb4e9a111b492dff330699c758f90f3d35->leave($__internal_05f91eb0c7706bb10662792e6b6feabb4e9a111b492dff330699c758f90f3d35_prof);

        
        $__internal_f92dd8123bdd9a1f4d283dae022b7f0924ce1d0472a66568b41e9f56934100aa->leave($__internal_f92dd8123bdd9a1f4d283dae022b7f0924ce1d0472a66568b41e9f56934100aa_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8acd87d1ae4df520308209ec3e1f905c7732eed13a5299e7b3c05f6f77b18a67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8acd87d1ae4df520308209ec3e1f905c7732eed13a5299e7b3c05f6f77b18a67->enter($__internal_8acd87d1ae4df520308209ec3e1f905c7732eed13a5299e7b3c05f6f77b18a67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9dd898db439cdab6bf7a852c91b5899fb44fec38b0112f85d28d162c19da0fba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9dd898db439cdab6bf7a852c91b5899fb44fec38b0112f85d28d162c19da0fba->enter($__internal_9dd898db439cdab6bf7a852c91b5899fb44fec38b0112f85d28d162c19da0fba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9dd898db439cdab6bf7a852c91b5899fb44fec38b0112f85d28d162c19da0fba->leave($__internal_9dd898db439cdab6bf7a852c91b5899fb44fec38b0112f85d28d162c19da0fba_prof);

        
        $__internal_8acd87d1ae4df520308209ec3e1f905c7732eed13a5299e7b3c05f6f77b18a67->leave($__internal_8acd87d1ae4df520308209ec3e1f905c7732eed13a5299e7b3c05f6f77b18a67_prof);

    }

    // line 49
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_58ceeb20ab45174a2e810e1343ceb2a00f211487d979959aeb29a90671ef2c26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58ceeb20ab45174a2e810e1343ceb2a00f211487d979959aeb29a90671ef2c26->enter($__internal_58ceeb20ab45174a2e810e1343ceb2a00f211487d979959aeb29a90671ef2c26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_f792048b2f05be81867b353a2445c418c2dfebdfdf0652fe76022daf360a66b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f792048b2f05be81867b353a2445c418c2dfebdfdf0652fe76022daf360a66b0->enter($__internal_f792048b2f05be81867b353a2445c418c2dfebdfdf0652fe76022daf360a66b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_f792048b2f05be81867b353a2445c418c2dfebdfdf0652fe76022daf360a66b0->leave($__internal_f792048b2f05be81867b353a2445c418c2dfebdfdf0652fe76022daf360a66b0_prof);

        
        $__internal_58ceeb20ab45174a2e810e1343ceb2a00f211487d979959aeb29a90671ef2c26->leave($__internal_58ceeb20ab45174a2e810e1343ceb2a00f211487d979959aeb29a90671ef2c26_prof);

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
