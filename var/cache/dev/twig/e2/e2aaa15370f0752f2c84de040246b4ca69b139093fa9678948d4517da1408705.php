<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_24f79e9a879a5aff6b292c39a18a31fd6280c85a16d19e23e64a6e0c67930f3a extends Twig_Template
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
        $__internal_0130ad5ba7cf1127e6e6e4623f932265155c7bb0c68ce3495e721453d1d800e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0130ad5ba7cf1127e6e6e4623f932265155c7bb0c68ce3495e721453d1d800e3->enter($__internal_0130ad5ba7cf1127e6e6e4623f932265155c7bb0c68ce3495e721453d1d800e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_3d99a3a5afaeb8468f7a5a5e229c0d0b0449608224d50dd61c122aa598089240 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d99a3a5afaeb8468f7a5a5e229c0d0b0449608224d50dd61c122aa598089240->enter($__internal_3d99a3a5afaeb8468f7a5a5e229c0d0b0449608224d50dd61c122aa598089240_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_0130ad5ba7cf1127e6e6e4623f932265155c7bb0c68ce3495e721453d1d800e3->leave($__internal_0130ad5ba7cf1127e6e6e4623f932265155c7bb0c68ce3495e721453d1d800e3_prof);

        
        $__internal_3d99a3a5afaeb8468f7a5a5e229c0d0b0449608224d50dd61c122aa598089240->leave($__internal_3d99a3a5afaeb8468f7a5a5e229c0d0b0449608224d50dd61c122aa598089240_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/var/www/html/jComercial/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
