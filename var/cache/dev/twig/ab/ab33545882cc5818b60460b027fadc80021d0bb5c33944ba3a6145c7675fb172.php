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
        $__internal_34052bb55c67286ce158c955ee00001cc807209173b779ed98a3bf806144d37a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34052bb55c67286ce158c955ee00001cc807209173b779ed98a3bf806144d37a->enter($__internal_34052bb55c67286ce158c955ee00001cc807209173b779ed98a3bf806144d37a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_5b725180302bbe30259b1927a98797275d7b1cd9b3228bf5109119106587a16e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b725180302bbe30259b1927a98797275d7b1cd9b3228bf5109119106587a16e->enter($__internal_5b725180302bbe30259b1927a98797275d7b1cd9b3228bf5109119106587a16e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_34052bb55c67286ce158c955ee00001cc807209173b779ed98a3bf806144d37a->leave($__internal_34052bb55c67286ce158c955ee00001cc807209173b779ed98a3bf806144d37a_prof);

        
        $__internal_5b725180302bbe30259b1927a98797275d7b1cd9b3228bf5109119106587a16e->leave($__internal_5b725180302bbe30259b1927a98797275d7b1cd9b3228bf5109119106587a16e_prof);

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
