<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_102b9f0600ae7dffa1e6cfef2661902e0f33827312a7b37369632ebb95f503d5 extends Twig_Template
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
        $__internal_f6c079f5551df13b47e9118b410ead1747cc13a73579b2ff723cef0d4c21d600 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6c079f5551df13b47e9118b410ead1747cc13a73579b2ff723cef0d4c21d600->enter($__internal_f6c079f5551df13b47e9118b410ead1747cc13a73579b2ff723cef0d4c21d600_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_73d675893b5600fd3ec78d8256af6939cb2898a2946a6f65aef1258b9ae5f9ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73d675893b5600fd3ec78d8256af6939cb2898a2946a6f65aef1258b9ae5f9ac->enter($__internal_73d675893b5600fd3ec78d8256af6939cb2898a2946a6f65aef1258b9ae5f9ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_f6c079f5551df13b47e9118b410ead1747cc13a73579b2ff723cef0d4c21d600->leave($__internal_f6c079f5551df13b47e9118b410ead1747cc13a73579b2ff723cef0d4c21d600_prof);

        
        $__internal_73d675893b5600fd3ec78d8256af6939cb2898a2946a6f65aef1258b9ae5f9ac->leave($__internal_73d675893b5600fd3ec78d8256af6939cb2898a2946a6f65aef1258b9ae5f9ac_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/var/www/html/jComercial/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
