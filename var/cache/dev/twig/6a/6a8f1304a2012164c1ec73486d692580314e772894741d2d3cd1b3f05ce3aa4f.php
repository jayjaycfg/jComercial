<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_d51d7bd2d000387a4f379bfbe98f408cb3698f0c5647124d935918a37b033b98 extends Twig_Template
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
        $__internal_70a95f261081494c1344b0ac544af1f0dd9b6e1fdd2e93c3bec317407800a14f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70a95f261081494c1344b0ac544af1f0dd9b6e1fdd2e93c3bec317407800a14f->enter($__internal_70a95f261081494c1344b0ac544af1f0dd9b6e1fdd2e93c3bec317407800a14f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        $__internal_52be3e1f9db268796df3ceac1f75df6350f7ecfcfa07db7a6dbd234ecb15d9fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52be3e1f9db268796df3ceac1f75df6350f7ecfcfa07db7a6dbd234ecb15d9fa->enter($__internal_52be3e1f9db268796df3ceac1f75df6350f7ecfcfa07db7a6dbd234ecb15d9fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_70a95f261081494c1344b0ac544af1f0dd9b6e1fdd2e93c3bec317407800a14f->leave($__internal_70a95f261081494c1344b0ac544af1f0dd9b6e1fdd2e93c3bec317407800a14f_prof);

        
        $__internal_52be3e1f9db268796df3ceac1f75df6350f7ecfcfa07db7a6dbd234ecb15d9fa->leave($__internal_52be3e1f9db268796df3ceac1f75df6350f7ecfcfa07db7a6dbd234ecb15d9fa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
", "@Framework/Form/range_widget.html.php", "/var/www/html/HeroQuest/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/range_widget.html.php");
    }
}
