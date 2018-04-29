<?php

/* :admin/user:list.html.twig */
class __TwigTemplate_feeba2001c97831d04befd4fdfba801f1735370ecef49d446ab6d885d9405959 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":admin/user:list.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "\t<h2>Listado de Usuarios</h2>
\t<table class=\"table table-striped\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th>Nombre</th>
\t\t\t\t<th>Ocupacion</th>
\t\t\t\t<th>Acciones</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 15
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_user", array("id" => $this->getAttribute(            // line 18
$context["user"], "id", array()))), "html", null, true);
            // line 19
            echo "\">
\t\t\t\t\t\t";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "name", array()), "html", null, true);
            echo "
\t\t\t\t\t\t</a>
\t\t\t\t\t</td>
\t\t\t\t\t<td>";
            // line 23
            echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute($context["user"], "roles", array())), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"#\" class=\"pull-left btn btn-link\">
\t\t\t\t\t\t\t<span class=\"fa fa-trash js-delete-row\">Eliminar</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "\t\t</tbody>
\t</table>
";
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
        return array (  77 => 31,  63 => 23,  57 => 20,  54 => 19,  52 => 18,  51 => 17,  47 => 15,  43 => 14,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":admin/user:list.html.twig", "/var/www/html/jComercial/app/Resources/views/admin/user/list.html.twig");
    }
}
