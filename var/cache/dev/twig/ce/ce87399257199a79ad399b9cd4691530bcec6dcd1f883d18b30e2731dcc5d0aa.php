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
        $__internal_848afdab5879e9d7fc4efd1f242600aee8b3bc832d9c54a6ca0d5c875a0eb902 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_848afdab5879e9d7fc4efd1f242600aee8b3bc832d9c54a6ca0d5c875a0eb902->enter($__internal_848afdab5879e9d7fc4efd1f242600aee8b3bc832d9c54a6ca0d5c875a0eb902_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/user/list.html.twig"));

        $__internal_949c10cdcf247fcf2ca54e468a6364e75e3657d3758f20ea4775373f4faed2dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_949c10cdcf247fcf2ca54e468a6364e75e3657d3758f20ea4775373f4faed2dd->enter($__internal_949c10cdcf247fcf2ca54e468a6364e75e3657d3758f20ea4775373f4faed2dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/user/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_848afdab5879e9d7fc4efd1f242600aee8b3bc832d9c54a6ca0d5c875a0eb902->leave($__internal_848afdab5879e9d7fc4efd1f242600aee8b3bc832d9c54a6ca0d5c875a0eb902_prof);

        
        $__internal_949c10cdcf247fcf2ca54e468a6364e75e3657d3758f20ea4775373f4faed2dd->leave($__internal_949c10cdcf247fcf2ca54e468a6364e75e3657d3758f20ea4775373f4faed2dd_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_08715d47beeef312a304bce238cd3648596d563257049742894f26bcb16fb8e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08715d47beeef312a304bce238cd3648596d563257049742894f26bcb16fb8e9->enter($__internal_08715d47beeef312a304bce238cd3648596d563257049742894f26bcb16fb8e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2364325fa5bc5c7aae5c6559d5e3b7ba0660186c8047a60c0313689490e89eeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2364325fa5bc5c7aae5c6559d5e3b7ba0660186c8047a60c0313689490e89eeb->enter($__internal_2364325fa5bc5c7aae5c6559d5e3b7ba0660186c8047a60c0313689490e89eeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-xs btn-success js-delete-user\"
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
        
        $__internal_2364325fa5bc5c7aae5c6559d5e3b7ba0660186c8047a60c0313689490e89eeb->leave($__internal_2364325fa5bc5c7aae5c6559d5e3b7ba0660186c8047a60c0313689490e89eeb_prof);

        
        $__internal_08715d47beeef312a304bce238cd3648596d563257049742894f26bcb16fb8e9->leave($__internal_08715d47beeef312a304bce238cd3648596d563257049742894f26bcb16fb8e9_prof);

    }

    // line 49
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7404a14d9af39f2fbd487b60aacea75679539e02619e1bbd11e8c8cdd49926e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7404a14d9af39f2fbd487b60aacea75679539e02619e1bbd11e8c8cdd49926e6->enter($__internal_7404a14d9af39f2fbd487b60aacea75679539e02619e1bbd11e8c8cdd49926e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_dcd1124675e50694c2653d9c575a969365eacd4b5810158b58290e5c38e872c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcd1124675e50694c2653d9c575a969365eacd4b5810158b58290e5c38e872c8->enter($__internal_dcd1124675e50694c2653d9c575a969365eacd4b5810158b58290e5c38e872c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_dcd1124675e50694c2653d9c575a969365eacd4b5810158b58290e5c38e872c8->leave($__internal_dcd1124675e50694c2653d9c575a969365eacd4b5810158b58290e5c38e872c8_prof);

        
        $__internal_7404a14d9af39f2fbd487b60aacea75679539e02619e1bbd11e8c8cdd49926e6->leave($__internal_7404a14d9af39f2fbd487b60aacea75679539e02619e1bbd11e8c8cdd49926e6_prof);

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
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-xs btn-success js-delete-user\"
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
