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
        $__internal_f95d2ac91e89bb4d148f225305126876ba96b4bc7ff34317fbeead4d0bb55e35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f95d2ac91e89bb4d148f225305126876ba96b4bc7ff34317fbeead4d0bb55e35->enter($__internal_f95d2ac91e89bb4d148f225305126876ba96b4bc7ff34317fbeead4d0bb55e35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_835e8139d7ada9e5209c279ce2bbaaa4fc0f81587a473dae3e1f2914552d5422 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_835e8139d7ada9e5209c279ce2bbaaa4fc0f81587a473dae3e1f2914552d5422->enter($__internal_835e8139d7ada9e5209c279ce2bbaaa4fc0f81587a473dae3e1f2914552d5422_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_f95d2ac91e89bb4d148f225305126876ba96b4bc7ff34317fbeead4d0bb55e35->leave($__internal_f95d2ac91e89bb4d148f225305126876ba96b4bc7ff34317fbeead4d0bb55e35_prof);

        
        $__internal_835e8139d7ada9e5209c279ce2bbaaa4fc0f81587a473dae3e1f2914552d5422->leave($__internal_835e8139d7ada9e5209c279ce2bbaaa4fc0f81587a473dae3e1f2914552d5422_prof);

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
