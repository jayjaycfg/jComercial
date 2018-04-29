<?php

/* admin/user/list.html.twig */
class __TwigTemplate_5d36f86b3083e0e9b1ecbc8094365e0234f5fc4247f6bc8e491b4a739deb08ba extends Twig_Template
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
        $__internal_666422e31315998e72dc6d16a344381ddd5497260e63de2599926539360a3197 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_666422e31315998e72dc6d16a344381ddd5497260e63de2599926539360a3197->enter($__internal_666422e31315998e72dc6d16a344381ddd5497260e63de2599926539360a3197_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/user/list.html.twig"));

        $__internal_e2a96d481fe30531aa15c8ab875c06298f5a237749945d1786b4ee669d5e3e1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2a96d481fe30531aa15c8ab875c06298f5a237749945d1786b4ee669d5e3e1e->enter($__internal_e2a96d481fe30531aa15c8ab875c06298f5a237749945d1786b4ee669d5e3e1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/user/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_666422e31315998e72dc6d16a344381ddd5497260e63de2599926539360a3197->leave($__internal_666422e31315998e72dc6d16a344381ddd5497260e63de2599926539360a3197_prof);

        
        $__internal_e2a96d481fe30531aa15c8ab875c06298f5a237749945d1786b4ee669d5e3e1e->leave($__internal_e2a96d481fe30531aa15c8ab875c06298f5a237749945d1786b4ee669d5e3e1e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fc0e68e16ad15bd408fb956bd89f4edb2ee30f510977921ef452e046e1e5b654 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc0e68e16ad15bd408fb956bd89f4edb2ee30f510977921ef452e046e1e5b654->enter($__internal_fc0e68e16ad15bd408fb956bd89f4edb2ee30f510977921ef452e046e1e5b654_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_67c3eaa825b21a68d66656f4f57882665a4da68a8a307814c3162a3febaebc2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67c3eaa825b21a68d66656f4f57882665a4da68a8a307814c3162a3febaebc2a->enter($__internal_67c3eaa825b21a68d66656f4f57882665a4da68a8a307814c3162a3febaebc2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h2>Listado de Usuarios</h2>
\t<a href=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register_user");
        echo "\">
\t\t<span class=\"btn btn-link fa fa-plus-circle\"></span>
\t</a>

\t<table class=\"table table-striped js-user-table\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th>Nombre</th>
\t\t\t\t<th>Ocupacion</th>
\t\t\t\t<th>Acciones</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 19
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_user", array("id" => $this->getAttribute(            // line 22
$context["user"], "id", array()))), "html", null, true);
            // line 23
            echo "\">
\t\t\t\t\t\t";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "name", array()), "html", null, true);
            echo "
\t\t\t\t\t\t</a>
\t\t\t\t\t</td>
\t\t\t\t\t<td>";
            // line 27
            echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute($context["user"], "roles", array())), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"#\" class=\"pull-left btn btn-link js-delete-user\"
\t\t\t\t\t\tdata-url=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete_user", array("id" => $this->getAttribute(            // line 31
$context["user"], "id", array()))), "html", null, true);
            // line 32
            echo "\"
\t\t\t\t\t\t>
\t\t\t\t\t\t\t<span class=\"fa fa-trash\"></span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "\t\t</tbody>
\t</table>
";
        
        $__internal_67c3eaa825b21a68d66656f4f57882665a4da68a8a307814c3162a3febaebc2a->leave($__internal_67c3eaa825b21a68d66656f4f57882665a4da68a8a307814c3162a3febaebc2a_prof);

        
        $__internal_fc0e68e16ad15bd408fb956bd89f4edb2ee30f510977921ef452e046e1e5b654->leave($__internal_fc0e68e16ad15bd408fb956bd89f4edb2ee30f510977921ef452e046e1e5b654_prof);

    }

    // line 43
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b9c446cd74c0089414d97640a714aa3d9323fc7c90a8a7d2727911e24fcf33f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9c446cd74c0089414d97640a714aa3d9323fc7c90a8a7d2727911e24fcf33f1->enter($__internal_b9c446cd74c0089414d97640a714aa3d9323fc7c90a8a7d2727911e24fcf33f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_9cb235ac6ce458bc5d8e0ae56c59657594367c3d9aba392ba52d1275f3862273 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cb235ac6ce458bc5d8e0ae56c59657594367c3d9aba392ba52d1275f3862273->enter($__internal_9cb235ac6ce458bc5d8e0ae56c59657594367c3d9aba392ba52d1275f3862273_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 44
        echo "\t";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
\t<script>
        \$(document).ready(function(){

            var \$table = \$('.js-user-table');

            \$table.find('.js-delete-user').on('click',function(e){
                e.preventDefault();

                \$(this).addClass('text-danger');
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
        
        $__internal_9cb235ac6ce458bc5d8e0ae56c59657594367c3d9aba392ba52d1275f3862273->leave($__internal_9cb235ac6ce458bc5d8e0ae56c59657594367c3d9aba392ba52d1275f3862273_prof);

        
        $__internal_b9c446cd74c0089414d97640a714aa3d9323fc7c90a8a7d2727911e24fcf33f1->leave($__internal_b9c446cd74c0089414d97640a714aa3d9323fc7c90a8a7d2727911e24fcf33f1_prof);

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
        return array (  131 => 44,  122 => 43,  110 => 39,  98 => 32,  96 => 31,  95 => 30,  89 => 27,  83 => 24,  80 => 23,  78 => 22,  77 => 21,  73 => 19,  69 => 18,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
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
<h2>Listado de Usuarios</h2>
\t<a href=\"{{ path('register_user') }}\">
\t\t<span class=\"btn btn-link fa fa-plus-circle\"></span>
\t</a>

\t<table class=\"table table-striped js-user-table\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th>Nombre</th>
\t\t\t\t<th>Ocupacion</th>
\t\t\t\t<th>Acciones</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t{% for user in users  %}
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"{{ path('show_user',{
\t\t\t\t\t\t\t'id' : user.id
\t\t\t\t\t\t}) }}\">
\t\t\t\t\t\t{{ user.name }}
\t\t\t\t\t\t</a>
\t\t\t\t\t</td>
\t\t\t\t\t<td>{{ user.roles|json_encode }}</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"#\" class=\"pull-left btn btn-link js-delete-user\"
\t\t\t\t\t\tdata-url=\"{{ path('delete_user',{
\t\t\t\t\t\t\t'id': user.id
\t\t\t\t\t\t}) }}\"
\t\t\t\t\t\t>
\t\t\t\t\t\t\t<span class=\"fa fa-trash\"></span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t{% endfor %}
\t\t</tbody>
\t</table>
{% endblock %}

{% block javascripts %}
\t{{ parent() }}
\t<script>
        \$(document).ready(function(){

            var \$table = \$('.js-user-table');

            \$table.find('.js-delete-user').on('click',function(e){
                e.preventDefault();

                \$(this).addClass('text-danger');
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
