<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_2c0a50a619372b98dc5ec5c8378e81c3aebfa8516c3277e0dc074be8aff9bc04 extends Twig_Template
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
        $__internal_ec3fae1c02da2dc44b3ba341a0cb6801b69bfef73664949f4590903173397014 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec3fae1c02da2dc44b3ba341a0cb6801b69bfef73664949f4590903173397014->enter($__internal_ec3fae1c02da2dc44b3ba341a0cb6801b69bfef73664949f4590903173397014_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_45ac81ca4ef1b2a57fdad12e52973e8046eadda51af74dd9eeb4c362d38d4146 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45ac81ca4ef1b2a57fdad12e52973e8046eadda51af74dd9eeb4c362d38d4146->enter($__internal_45ac81ca4ef1b2a57fdad12e52973e8046eadda51af74dd9eeb4c362d38d4146_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_ec3fae1c02da2dc44b3ba341a0cb6801b69bfef73664949f4590903173397014->leave($__internal_ec3fae1c02da2dc44b3ba341a0cb6801b69bfef73664949f4590903173397014_prof);

        
        $__internal_45ac81ca4ef1b2a57fdad12e52973e8046eadda51af74dd9eeb4c362d38d4146->leave($__internal_45ac81ca4ef1b2a57fdad12e52973e8046eadda51af74dd9eeb4c362d38d4146_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/var/www/html/HeroQuest/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
