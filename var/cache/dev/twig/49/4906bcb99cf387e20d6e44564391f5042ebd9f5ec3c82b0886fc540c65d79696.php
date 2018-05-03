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
        $__internal_ea772c1728754f7d8e99b559ab2845d26b66cac07221fb808e358766719c849a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea772c1728754f7d8e99b559ab2845d26b66cac07221fb808e358766719c849a->enter($__internal_ea772c1728754f7d8e99b559ab2845d26b66cac07221fb808e358766719c849a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_a320c14f52b53a32a953146acc64024a9eae59caeb5428cd978e39177ac40ed0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a320c14f52b53a32a953146acc64024a9eae59caeb5428cd978e39177ac40ed0->enter($__internal_a320c14f52b53a32a953146acc64024a9eae59caeb5428cd978e39177ac40ed0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_ea772c1728754f7d8e99b559ab2845d26b66cac07221fb808e358766719c849a->leave($__internal_ea772c1728754f7d8e99b559ab2845d26b66cac07221fb808e358766719c849a_prof);

        
        $__internal_a320c14f52b53a32a953146acc64024a9eae59caeb5428cd978e39177ac40ed0->leave($__internal_a320c14f52b53a32a953146acc64024a9eae59caeb5428cd978e39177ac40ed0_prof);

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
