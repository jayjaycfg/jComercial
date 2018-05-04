<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_589da9bf4712d58ce229ce2f01c52a7859f00baa0fb140d7796a05f5af2b0683 extends Twig_Template
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
        $__internal_f899c5dd8f78bfb1d6a2b95967bb78a76cbecd409445ce4eba86d241c17cb621 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f899c5dd8f78bfb1d6a2b95967bb78a76cbecd409445ce4eba86d241c17cb621->enter($__internal_f899c5dd8f78bfb1d6a2b95967bb78a76cbecd409445ce4eba86d241c17cb621_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_f0de2a5f1bcf865a1a7dae2a01ecc239a7bd38b94e21c5260ada45b9c4b2a922 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0de2a5f1bcf865a1a7dae2a01ecc239a7bd38b94e21c5260ada45b9c4b2a922->enter($__internal_f0de2a5f1bcf865a1a7dae2a01ecc239a7bd38b94e21c5260ada45b9c4b2a922_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_f899c5dd8f78bfb1d6a2b95967bb78a76cbecd409445ce4eba86d241c17cb621->leave($__internal_f899c5dd8f78bfb1d6a2b95967bb78a76cbecd409445ce4eba86d241c17cb621_prof);

        
        $__internal_f0de2a5f1bcf865a1a7dae2a01ecc239a7bd38b94e21c5260ada45b9c4b2a922->leave($__internal_f0de2a5f1bcf865a1a7dae2a01ecc239a7bd38b94e21c5260ada45b9c4b2a922_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/var/www/html/jComercial/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
