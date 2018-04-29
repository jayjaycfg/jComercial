<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_64372ec0c3594942c0d4c852b69f635b1becbc9c7e8e1115139c40e559327468 extends Twig_Template
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
        $__internal_8804c62b9d5a3a38e774c4e9485531daf6a02bdb6233dea65fae946d2484f815 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8804c62b9d5a3a38e774c4e9485531daf6a02bdb6233dea65fae946d2484f815->enter($__internal_8804c62b9d5a3a38e774c4e9485531daf6a02bdb6233dea65fae946d2484f815_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_cffbde121f8b596452ebe52c939660ea02be804eb627adb09396201991452930 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cffbde121f8b596452ebe52c939660ea02be804eb627adb09396201991452930->enter($__internal_cffbde121f8b596452ebe52c939660ea02be804eb627adb09396201991452930_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
";
        
        $__internal_8804c62b9d5a3a38e774c4e9485531daf6a02bdb6233dea65fae946d2484f815->leave($__internal_8804c62b9d5a3a38e774c4e9485531daf6a02bdb6233dea65fae946d2484f815_prof);

        
        $__internal_cffbde121f8b596452ebe52c939660ea02be804eb627adb09396201991452930->leave($__internal_cffbde121f8b596452ebe52c939660ea02be804eb627adb09396201991452930_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/var/www/html/jComercial/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
