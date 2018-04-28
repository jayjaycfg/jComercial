<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_d9997e02530486a8c69d6bdaeedda434894c94a81c6d9f15ed7afb2ff70cace5 extends Twig_Template
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
        $__internal_5995287325c768a2712ce44f752fd38b23f8162aeb044576e69a5ee5d0fa561a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5995287325c768a2712ce44f752fd38b23f8162aeb044576e69a5ee5d0fa561a->enter($__internal_5995287325c768a2712ce44f752fd38b23f8162aeb044576e69a5ee5d0fa561a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_e0c12de2f60ef05754b2bd4a81b5e8f03c3cadbbf5fe1564279d83ed6b5a8e50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0c12de2f60ef05754b2bd4a81b5e8f03c3cadbbf5fe1564279d83ed6b5a8e50->enter($__internal_e0c12de2f60ef05754b2bd4a81b5e8f03c3cadbbf5fe1564279d83ed6b5a8e50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_5995287325c768a2712ce44f752fd38b23f8162aeb044576e69a5ee5d0fa561a->leave($__internal_5995287325c768a2712ce44f752fd38b23f8162aeb044576e69a5ee5d0fa561a_prof);

        
        $__internal_e0c12de2f60ef05754b2bd4a81b5e8f03c3cadbbf5fe1564279d83ed6b5a8e50->leave($__internal_e0c12de2f60ef05754b2bd4a81b5e8f03c3cadbbf5fe1564279d83ed6b5a8e50_prof);

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
", "@Framework/Form/percent_widget.html.php", "/var/www/html/HeroQuest/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
