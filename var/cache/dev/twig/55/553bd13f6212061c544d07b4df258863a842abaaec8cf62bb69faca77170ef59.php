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
        $__internal_c67e52efc2cb78f77a6f8bdac863ddb08658a8407cc389c26dfef8779a4e9917 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c67e52efc2cb78f77a6f8bdac863ddb08658a8407cc389c26dfef8779a4e9917->enter($__internal_c67e52efc2cb78f77a6f8bdac863ddb08658a8407cc389c26dfef8779a4e9917_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_5cb16c2b120d843ec80ac70efc4bc5235fa8f0395883e791fd786b20d7659b3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cb16c2b120d843ec80ac70efc4bc5235fa8f0395883e791fd786b20d7659b3d->enter($__internal_5cb16c2b120d843ec80ac70efc4bc5235fa8f0395883e791fd786b20d7659b3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_c67e52efc2cb78f77a6f8bdac863ddb08658a8407cc389c26dfef8779a4e9917->leave($__internal_c67e52efc2cb78f77a6f8bdac863ddb08658a8407cc389c26dfef8779a4e9917_prof);

        
        $__internal_5cb16c2b120d843ec80ac70efc4bc5235fa8f0395883e791fd786b20d7659b3d->leave($__internal_5cb16c2b120d843ec80ac70efc4bc5235fa8f0395883e791fd786b20d7659b3d_prof);

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
