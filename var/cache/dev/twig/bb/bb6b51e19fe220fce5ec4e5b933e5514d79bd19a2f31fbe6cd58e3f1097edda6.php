<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_90c515f661ba0957029f62e7816d6064d95afb900007341e45d52ce01e9b60ac extends Twig_Template
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
        $__internal_22ee2db91227de09932b3f951d2200c47efaa4414c1fbf58f7f3750e349f701c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22ee2db91227de09932b3f951d2200c47efaa4414c1fbf58f7f3750e349f701c->enter($__internal_22ee2db91227de09932b3f951d2200c47efaa4414c1fbf58f7f3750e349f701c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_bea53cb74f61108776a6f9e430dd89933c1419ef60e73b82e3b1fc53da071926 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bea53cb74f61108776a6f9e430dd89933c1419ef60e73b82e3b1fc53da071926->enter($__internal_bea53cb74f61108776a6f9e430dd89933c1419ef60e73b82e3b1fc53da071926_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_22ee2db91227de09932b3f951d2200c47efaa4414c1fbf58f7f3750e349f701c->leave($__internal_22ee2db91227de09932b3f951d2200c47efaa4414c1fbf58f7f3750e349f701c_prof);

        
        $__internal_bea53cb74f61108776a6f9e430dd89933c1419ef60e73b82e3b1fc53da071926->leave($__internal_bea53cb74f61108776a6f9e430dd89933c1419ef60e73b82e3b1fc53da071926_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/var/www/html/jComercial/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
