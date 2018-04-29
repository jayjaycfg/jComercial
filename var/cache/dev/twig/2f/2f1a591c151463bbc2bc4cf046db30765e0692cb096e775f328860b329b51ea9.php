<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_bd261761b9df5032b9aa3cb8b0af94d0d155b6dd5a02f66fcea2fc15316666b1 extends Twig_Template
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
        $__internal_b26ee660bd491c97ca5a7c569e1cafec84a96c77d9553f76e63a2700e4575f27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b26ee660bd491c97ca5a7c569e1cafec84a96c77d9553f76e63a2700e4575f27->enter($__internal_b26ee660bd491c97ca5a7c569e1cafec84a96c77d9553f76e63a2700e4575f27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_a44c50dee431bbf80dd284202b833baa235d03645096e6a892ab9fad7e2a5061 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a44c50dee431bbf80dd284202b833baa235d03645096e6a892ab9fad7e2a5061->enter($__internal_a44c50dee431bbf80dd284202b833baa235d03645096e6a892ab9fad7e2a5061_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_b26ee660bd491c97ca5a7c569e1cafec84a96c77d9553f76e63a2700e4575f27->leave($__internal_b26ee660bd491c97ca5a7c569e1cafec84a96c77d9553f76e63a2700e4575f27_prof);

        
        $__internal_a44c50dee431bbf80dd284202b833baa235d03645096e6a892ab9fad7e2a5061->leave($__internal_a44c50dee431bbf80dd284202b833baa235d03645096e6a892ab9fad7e2a5061_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/var/www/html/jComercial/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
