<?php

/* :admin/user:show.html.twig */
class __TwigTemplate_67a08d0153586af87b618afbb478068c9d5ebb70d538eebbe3889797ca54409f extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-8\">
                <h1>
                    ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "name", array()), "html", null, true);
        echo "
                    <a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_edit", array("id" => $this->getAttribute(        // line 10
($context["user"] ?? null), "id", array()))), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "fullName", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Ocupacion</th>
                        <td>";
        // line 25
        echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute(($context["user"] ?? null), "roles", array())), "html", null, true);
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
        return array (  97 => 44,  95 => 43,  93 => 42,  91 => 41,  89 => 40,  87 => 39,  85 => 38,  83 => 37,  81 => 36,  79 => 35,  77 => 34,  75 => 33,  73 => 32,  71 => 31,  63 => 25,  56 => 21,  44 => 11,  42 => 10,  41 => 9,  37 => 8,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":admin/user:show.html.twig", "/var/www/html/jComercial/app/Resources/views/admin/user/show.html.twig");
    }
}
