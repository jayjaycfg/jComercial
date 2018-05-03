<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_c90bb60ee7e39ceadc9027a4f93417cf1e414564460c46b6079701f480f248d6 extends Twig_Template
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
        $__internal_c580c912cc9737542e171b618a659b2a950423f5ef68085d8859486e7fdd9848 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c580c912cc9737542e171b618a659b2a950423f5ef68085d8859486e7fdd9848->enter($__internal_c580c912cc9737542e171b618a659b2a950423f5ef68085d8859486e7fdd9848_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_49996836b81bac6617af24a8e1abf45ac6abbd921ffd830b7729dce6c75efbbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49996836b81bac6617af24a8e1abf45ac6abbd921ffd830b7729dce6c75efbbf->enter($__internal_49996836b81bac6617af24a8e1abf45ac6abbd921ffd830b7729dce6c75efbbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_c580c912cc9737542e171b618a659b2a950423f5ef68085d8859486e7fdd9848->leave($__internal_c580c912cc9737542e171b618a659b2a950423f5ef68085d8859486e7fdd9848_prof);

        
        $__internal_49996836b81bac6617af24a8e1abf45ac6abbd921ffd830b7729dce6c75efbbf->leave($__internal_49996836b81bac6617af24a8e1abf45ac6abbd921ffd830b7729dce6c75efbbf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/var/www/html/jComercial/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
