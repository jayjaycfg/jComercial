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
        $__internal_172bdc0be244bc46bcde97568741fadda2aaaa6651d91e2baa205eaae2d89dd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_172bdc0be244bc46bcde97568741fadda2aaaa6651d91e2baa205eaae2d89dd4->enter($__internal_172bdc0be244bc46bcde97568741fadda2aaaa6651d91e2baa205eaae2d89dd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_447a31872473b64dde7eb4fd3eda1830960161cfc355cf4e911b316395bc5628 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_447a31872473b64dde7eb4fd3eda1830960161cfc355cf4e911b316395bc5628->enter($__internal_447a31872473b64dde7eb4fd3eda1830960161cfc355cf4e911b316395bc5628_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_172bdc0be244bc46bcde97568741fadda2aaaa6651d91e2baa205eaae2d89dd4->leave($__internal_172bdc0be244bc46bcde97568741fadda2aaaa6651d91e2baa205eaae2d89dd4_prof);

        
        $__internal_447a31872473b64dde7eb4fd3eda1830960161cfc355cf4e911b316395bc5628->leave($__internal_447a31872473b64dde7eb4fd3eda1830960161cfc355cf4e911b316395bc5628_prof);

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
