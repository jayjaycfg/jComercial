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
        $__internal_253faa760342987c7a51a0ad7498d01933bffa0d49303d70b71842e33761b1ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_253faa760342987c7a51a0ad7498d01933bffa0d49303d70b71842e33761b1ad->enter($__internal_253faa760342987c7a51a0ad7498d01933bffa0d49303d70b71842e33761b1ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_be4835741454f4052d2b46aafd0a9c217af3563a1601316cf13b7c4332a51cec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be4835741454f4052d2b46aafd0a9c217af3563a1601316cf13b7c4332a51cec->enter($__internal_be4835741454f4052d2b46aafd0a9c217af3563a1601316cf13b7c4332a51cec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_253faa760342987c7a51a0ad7498d01933bffa0d49303d70b71842e33761b1ad->leave($__internal_253faa760342987c7a51a0ad7498d01933bffa0d49303d70b71842e33761b1ad_prof);

        
        $__internal_be4835741454f4052d2b46aafd0a9c217af3563a1601316cf13b7c4332a51cec->leave($__internal_be4835741454f4052d2b46aafd0a9c217af3563a1601316cf13b7c4332a51cec_prof);

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
