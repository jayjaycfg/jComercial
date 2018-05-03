<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_152be14bf245dde0993fee44ab57b03b6f71fae4ee64224036a160eba6407aa6 extends Twig_Template
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
        $__internal_511aca5f3206313546d3e78bd33df9bc12379fd021392bae7e966236c918ab61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_511aca5f3206313546d3e78bd33df9bc12379fd021392bae7e966236c918ab61->enter($__internal_511aca5f3206313546d3e78bd33df9bc12379fd021392bae7e966236c918ab61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_1c9df70032f8d9a74666bb075657126df8576071706e8590a82749279530204f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c9df70032f8d9a74666bb075657126df8576071706e8590a82749279530204f->enter($__internal_1c9df70032f8d9a74666bb075657126df8576071706e8590a82749279530204f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_511aca5f3206313546d3e78bd33df9bc12379fd021392bae7e966236c918ab61->leave($__internal_511aca5f3206313546d3e78bd33df9bc12379fd021392bae7e966236c918ab61_prof);

        
        $__internal_1c9df70032f8d9a74666bb075657126df8576071706e8590a82749279530204f->leave($__internal_1c9df70032f8d9a74666bb075657126df8576071706e8590a82749279530204f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/var/www/html/jComercial/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
