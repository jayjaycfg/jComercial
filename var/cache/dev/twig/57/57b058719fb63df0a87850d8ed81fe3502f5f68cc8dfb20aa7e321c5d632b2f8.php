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
        $__internal_d471f56b3d41ce410a4e6361e89853da4c893bb7b2a7c5f3da374ec994078cff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d471f56b3d41ce410a4e6361e89853da4c893bb7b2a7c5f3da374ec994078cff->enter($__internal_d471f56b3d41ce410a4e6361e89853da4c893bb7b2a7c5f3da374ec994078cff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_56d301e1269e693ea443465c7bbfaf4c25614b50c8cd3196d44b3d503004f438 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56d301e1269e693ea443465c7bbfaf4c25614b50c8cd3196d44b3d503004f438->enter($__internal_56d301e1269e693ea443465c7bbfaf4c25614b50c8cd3196d44b3d503004f438_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_d471f56b3d41ce410a4e6361e89853da4c893bb7b2a7c5f3da374ec994078cff->leave($__internal_d471f56b3d41ce410a4e6361e89853da4c893bb7b2a7c5f3da374ec994078cff_prof);

        
        $__internal_56d301e1269e693ea443465c7bbfaf4c25614b50c8cd3196d44b3d503004f438->leave($__internal_56d301e1269e693ea443465c7bbfaf4c25614b50c8cd3196d44b3d503004f438_prof);

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
