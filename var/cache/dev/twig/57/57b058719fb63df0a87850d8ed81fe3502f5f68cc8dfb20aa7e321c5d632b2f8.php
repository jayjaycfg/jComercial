<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_a2b079f00ea46b0ca523b1c68a813c5faf2b958c961375da2754bf79afa549a0 extends Twig_Template
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
        $__internal_989cf9f8a7ff40c08395dd74c9d93c25dd2db20c7a46f30f69ddb08187f4d8bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_989cf9f8a7ff40c08395dd74c9d93c25dd2db20c7a46f30f69ddb08187f4d8bb->enter($__internal_989cf9f8a7ff40c08395dd74c9d93c25dd2db20c7a46f30f69ddb08187f4d8bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_32cdd5f1bc0a2873ffa84242ff7490233f27682c21b49e4846e731d554d41b67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32cdd5f1bc0a2873ffa84242ff7490233f27682c21b49e4846e731d554d41b67->enter($__internal_32cdd5f1bc0a2873ffa84242ff7490233f27682c21b49e4846e731d554d41b67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_989cf9f8a7ff40c08395dd74c9d93c25dd2db20c7a46f30f69ddb08187f4d8bb->leave($__internal_989cf9f8a7ff40c08395dd74c9d93c25dd2db20c7a46f30f69ddb08187f4d8bb_prof);

        
        $__internal_32cdd5f1bc0a2873ffa84242ff7490233f27682c21b49e4846e731d554d41b67->leave($__internal_32cdd5f1bc0a2873ffa84242ff7490233f27682c21b49e4846e731d554d41b67_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/var/www/html/jComercial/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
