<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_ca22c6ed7129b14750fa99a4627e4d14f1a188f5721b3fd8e0738d0dc1cc6940 extends Twig_Template
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
        $__internal_879ed80bd4b0fc299988498f01b6b8c01cac8a1e3a65700eea12ff63afd657c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_879ed80bd4b0fc299988498f01b6b8c01cac8a1e3a65700eea12ff63afd657c3->enter($__internal_879ed80bd4b0fc299988498f01b6b8c01cac8a1e3a65700eea12ff63afd657c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_638396ad483ae245c54e43763c7ff420ebcca1b4b8c4dc34c8507ea995e27910 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_638396ad483ae245c54e43763c7ff420ebcca1b4b8c4dc34c8507ea995e27910->enter($__internal_638396ad483ae245c54e43763c7ff420ebcca1b4b8c4dc34c8507ea995e27910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_879ed80bd4b0fc299988498f01b6b8c01cac8a1e3a65700eea12ff63afd657c3->leave($__internal_879ed80bd4b0fc299988498f01b6b8c01cac8a1e3a65700eea12ff63afd657c3_prof);

        
        $__internal_638396ad483ae245c54e43763c7ff420ebcca1b4b8c4dc34c8507ea995e27910->leave($__internal_638396ad483ae245c54e43763c7ff420ebcca1b4b8c4dc34c8507ea995e27910_prof);

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
", "@Framework/FormTable/hidden_row.html.php", "/var/www/html/HeroQuest/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
