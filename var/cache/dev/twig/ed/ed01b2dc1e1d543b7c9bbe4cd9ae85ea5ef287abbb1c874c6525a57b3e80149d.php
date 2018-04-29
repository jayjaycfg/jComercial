<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_d9f0a8f7487f9d67c4017661dc9ac6bdf13d8bca12e387ec8356865926ebac4c extends Twig_Template
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
        $__internal_c732dceb491374fabb9a86e711a08f7ebd74f62c90299558f900477954b3d87f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c732dceb491374fabb9a86e711a08f7ebd74f62c90299558f900477954b3d87f->enter($__internal_c732dceb491374fabb9a86e711a08f7ebd74f62c90299558f900477954b3d87f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_5490644f67363b0295a8c439e9d13f94d4719050856e93a8ce1199335146b81f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5490644f67363b0295a8c439e9d13f94d4719050856e93a8ce1199335146b81f->enter($__internal_5490644f67363b0295a8c439e9d13f94d4719050856e93a8ce1199335146b81f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_c732dceb491374fabb9a86e711a08f7ebd74f62c90299558f900477954b3d87f->leave($__internal_c732dceb491374fabb9a86e711a08f7ebd74f62c90299558f900477954b3d87f_prof);

        
        $__internal_5490644f67363b0295a8c439e9d13f94d4719050856e93a8ce1199335146b81f->leave($__internal_5490644f67363b0295a8c439e9d13f94d4719050856e93a8ce1199335146b81f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/var/www/html/jComercial/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
