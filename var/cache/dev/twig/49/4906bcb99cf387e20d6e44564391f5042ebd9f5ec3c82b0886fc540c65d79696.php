<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_cf81ec3092be0f0084facd9830a10688cc18b459082fade1c92fda720aeace07 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5d83e64b9afd4b37ac84cb78cb3f01e8319c1acd00662e22032925d4178710f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d83e64b9afd4b37ac84cb78cb3f01e8319c1acd00662e22032925d4178710f7->enter($__internal_5d83e64b9afd4b37ac84cb78cb3f01e8319c1acd00662e22032925d4178710f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_2469fccc000c85283a211318ec7e940cc48824ffc353cdc0463c880c90b87e30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2469fccc000c85283a211318ec7e940cc48824ffc353cdc0463c880c90b87e30->enter($__internal_2469fccc000c85283a211318ec7e940cc48824ffc353cdc0463c880c90b87e30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_5d83e64b9afd4b37ac84cb78cb3f01e8319c1acd00662e22032925d4178710f7->leave($__internal_5d83e64b9afd4b37ac84cb78cb3f01e8319c1acd00662e22032925d4178710f7_prof);

        
        $__internal_2469fccc000c85283a211318ec7e940cc48824ffc353cdc0463c880c90b87e30->leave($__internal_2469fccc000c85283a211318ec7e940cc48824ffc353cdc0463c880c90b87e30_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/var/www/html/jComercial/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
