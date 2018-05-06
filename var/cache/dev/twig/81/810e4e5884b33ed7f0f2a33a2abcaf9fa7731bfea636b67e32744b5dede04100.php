<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_23d2a24170420de7d4c3e5aed4a2f763687bcaa704969614733b72bfc477a56d extends Twig_Template
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
        $__internal_8c45a80582b6dd908b12707eb92bde05d9f9414bb3d3e82317069e4e4e2e1811 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c45a80582b6dd908b12707eb92bde05d9f9414bb3d3e82317069e4e4e2e1811->enter($__internal_8c45a80582b6dd908b12707eb92bde05d9f9414bb3d3e82317069e4e4e2e1811_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_e2ffd9bdda69e922d69505748924dabbfd71b1efbcb1b3bd6e7ec534f32ee842 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2ffd9bdda69e922d69505748924dabbfd71b1efbcb1b3bd6e7ec534f32ee842->enter($__internal_e2ffd9bdda69e922d69505748924dabbfd71b1efbcb1b3bd6e7ec534f32ee842_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_8c45a80582b6dd908b12707eb92bde05d9f9414bb3d3e82317069e4e4e2e1811->leave($__internal_8c45a80582b6dd908b12707eb92bde05d9f9414bb3d3e82317069e4e4e2e1811_prof);

        
        $__internal_e2ffd9bdda69e922d69505748924dabbfd71b1efbcb1b3bd6e7ec534f32ee842->leave($__internal_e2ffd9bdda69e922d69505748924dabbfd71b1efbcb1b3bd6e7ec534f32ee842_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/var/www/html/jComercial/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
