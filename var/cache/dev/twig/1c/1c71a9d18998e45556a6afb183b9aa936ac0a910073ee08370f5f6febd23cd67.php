<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_e929bec2e6a149b6930b05325c178490343a7a918507da619e91abbae1879c4e extends Twig_Template
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
        $__internal_7b114bcb210d382a87c3b529eed59ef24268b5199fef60923ddb8051423cec53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b114bcb210d382a87c3b529eed59ef24268b5199fef60923ddb8051423cec53->enter($__internal_7b114bcb210d382a87c3b529eed59ef24268b5199fef60923ddb8051423cec53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_b03bbc81ad709e2962fb29800103b31d4ae31b39228c24647d9b753b84abb97b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b03bbc81ad709e2962fb29800103b31d4ae31b39228c24647d9b753b84abb97b->enter($__internal_b03bbc81ad709e2962fb29800103b31d4ae31b39228c24647d9b753b84abb97b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_7b114bcb210d382a87c3b529eed59ef24268b5199fef60923ddb8051423cec53->leave($__internal_7b114bcb210d382a87c3b529eed59ef24268b5199fef60923ddb8051423cec53_prof);

        
        $__internal_b03bbc81ad709e2962fb29800103b31d4ae31b39228c24647d9b753b84abb97b->leave($__internal_b03bbc81ad709e2962fb29800103b31d4ae31b39228c24647d9b753b84abb97b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/var/www/html/jComercial/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
