<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_41beac728198993731c562523c12cd3b20e7bb3d2627b8faff2ebf8f3db45573 extends Twig_Template
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
        $__internal_1fe4d6bf45b89cae78dc2cb3c36fd61699ea358608c57ba9b598a1b376e2174d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fe4d6bf45b89cae78dc2cb3c36fd61699ea358608c57ba9b598a1b376e2174d->enter($__internal_1fe4d6bf45b89cae78dc2cb3c36fd61699ea358608c57ba9b598a1b376e2174d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_4da75e08d9675e43c8f1e0f6fe533a7f3cccde75e154d33d9453ea947653a9ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4da75e08d9675e43c8f1e0f6fe533a7f3cccde75e154d33d9453ea947653a9ff->enter($__internal_4da75e08d9675e43c8f1e0f6fe533a7f3cccde75e154d33d9453ea947653a9ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_1fe4d6bf45b89cae78dc2cb3c36fd61699ea358608c57ba9b598a1b376e2174d->leave($__internal_1fe4d6bf45b89cae78dc2cb3c36fd61699ea358608c57ba9b598a1b376e2174d_prof);

        
        $__internal_4da75e08d9675e43c8f1e0f6fe533a7f3cccde75e154d33d9453ea947653a9ff->leave($__internal_4da75e08d9675e43c8f1e0f6fe533a7f3cccde75e154d33d9453ea947653a9ff_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/var/www/html/jComercial/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
