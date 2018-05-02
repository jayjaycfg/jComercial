<?php

/* admin/user/list.html.twig */
class __TwigTemplate_4b4a29dc69ed52a9e56e0c4709440648235d59b5eb915ad5d24e9a5b9070a74b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/user/list.html.twig", 1);
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
        $__internal_fe2f77203b3311328b9e25ef0d80993e117066025ea33ab0aa4d00db4e64582a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe2f77203b3311328b9e25ef0d80993e117066025ea33ab0aa4d00db4e64582a->enter($__internal_fe2f77203b3311328b9e25ef0d80993e117066025ea33ab0aa4d00db4e64582a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/user/list.html.twig"));

        $__internal_44d308ca7ba5b20ab76dec932ffea177f1a3daf462657d5582af0fdae07f63e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44d308ca7ba5b20ab76dec932ffea177f1a3daf462657d5582af0fdae07f63e5->enter($__internal_44d308ca7ba5b20ab76dec932ffea177f1a3daf462657d5582af0fdae07f63e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/user/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe2f77203b3311328b9e25ef0d80993e117066025ea33ab0aa4d00db4e64582a->leave($__internal_fe2f77203b3311328b9e25ef0d80993e117066025ea33ab0aa4d00db4e64582a_prof);

        
        $__internal_44d308ca7ba5b20ab76dec932ffea177f1a3daf462657d5582af0fdae07f63e5->leave($__internal_44d308ca7ba5b20ab76dec932ffea177f1a3daf462657d5582af0fdae07f63e5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1d36860d5f37b4fbd2343c8b04922845e0a1708bda6a1dc803c86e25c5d432ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d36860d5f37b4fbd2343c8b04922845e0a1708bda6a1dc803c86e25c5d432ac->enter($__internal_1d36860d5f37b4fbd2343c8b04922845e0a1708bda6a1dc803c86e25c5d432ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8590ffd354fd0129709ee2ef6aa82a4410db5b0f2453a5d6f86f1f760bfd84e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8590ffd354fd0129709ee2ef6aa82a4410db5b0f2453a5d6f86f1f760bfd84e7->enter($__internal_8590ffd354fd0129709ee2ef6aa82a4410db5b0f2453a5d6f86f1f760bfd84e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8590ffd354fd0129709ee2ef6aa82a4410db5b0f2453a5d6f86f1f760bfd84e7->leave($__internal_8590ffd354fd0129709ee2ef6aa82a4410db5b0f2453a5d6f86f1f760bfd84e7_prof);

        
        $__internal_1d36860d5f37b4fbd2343c8b04922845e0a1708bda6a1dc803c86e25c5d432ac->leave($__internal_1d36860d5f37b4fbd2343c8b04922845e0a1708bda6a1dc803c86e25c5d432ac_prof);

    }

    // line 49
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e21920efc14751528837d633d35431f52b9899b906f010be38f3d20bf7ac590f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e21920efc14751528837d633d35431f52b9899b906f010be38f3d20bf7ac590f->enter($__internal_e21920efc14751528837d633d35431f52b9899b906f010be38f3d20bf7ac590f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_1db649d3964631643a9c4e653fa8c4fc5e003013e88224e9ef5dae757b6206b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1db649d3964631643a9c4e653fa8c4fc5e003013e88224e9ef5dae757b6206b8->enter($__internal_1db649d3964631643a9c4e653fa8c4fc5e003013e88224e9ef5dae757b6206b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 50
        echo "\t";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
\t<script>
        \$(document).ready(function(){

            var \$table = \$('.js-user-table');

            \$table.find('.js-delete-user').on('click',function(e){
                e.preventDefault();

                // \$(this).addClass('text-danger');
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
        
        $__internal_1db649d3964631643a9c4e653fa8c4fc5e003013e88224e9ef5dae757b6206b8->leave($__internal_1db649d3964631643a9c4e653fa8c4fc5e003013e88224e9ef5dae757b6206b8_prof);

        
        $__internal_e21920efc14751528837d633d35431f52b9899b906f010be38f3d20bf7ac590f->leave($__internal_e21920efc14751528837d633d35431f52b9899b906f010be38f3d20bf7ac590f_prof);

    }

    public function getTemplateName()
    {
        return "admin/user/list.html.twig";
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

                // \$(this).addClass('text-danger');
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


", "admin/user/list.html.twig", "/var/www/html/jComercial/app/Resources/views/admin/user/list.html.twig");
    }
}
