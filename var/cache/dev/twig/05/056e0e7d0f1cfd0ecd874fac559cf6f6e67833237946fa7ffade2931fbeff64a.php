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
        $__internal_09ca8b9d04dce1ca7c2a83487f53fcc8799c98fe1e3c060eaf244d26aefbc906 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09ca8b9d04dce1ca7c2a83487f53fcc8799c98fe1e3c060eaf244d26aefbc906->enter($__internal_09ca8b9d04dce1ca7c2a83487f53fcc8799c98fe1e3c060eaf244d26aefbc906_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_4fe0f1c4cfc1600ad43c2c076c15bd4573395c3e2505d279ae7aaa7732def0b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fe0f1c4cfc1600ad43c2c076c15bd4573395c3e2505d279ae7aaa7732def0b2->enter($__internal_4fe0f1c4cfc1600ad43c2c076c15bd4573395c3e2505d279ae7aaa7732def0b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_09ca8b9d04dce1ca7c2a83487f53fcc8799c98fe1e3c060eaf244d26aefbc906->leave($__internal_09ca8b9d04dce1ca7c2a83487f53fcc8799c98fe1e3c060eaf244d26aefbc906_prof);

        
        $__internal_4fe0f1c4cfc1600ad43c2c076c15bd4573395c3e2505d279ae7aaa7732def0b2->leave($__internal_4fe0f1c4cfc1600ad43c2c076c15bd4573395c3e2505d279ae7aaa7732def0b2_prof);

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
