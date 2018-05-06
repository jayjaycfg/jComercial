<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_1ba13413b4ed4f06f8ac2c03afa72d1213546ef5b2ae1d318b812ffacc9119d1 extends Twig_Template
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
        $__internal_d6e1ed3601d22fd0c6ca198bd4cf8e8cda58fe09b05c66eb92447d8afcb063e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6e1ed3601d22fd0c6ca198bd4cf8e8cda58fe09b05c66eb92447d8afcb063e3->enter($__internal_d6e1ed3601d22fd0c6ca198bd4cf8e8cda58fe09b05c66eb92447d8afcb063e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_31db79ac4662402ef4502027fc7708962ef1b3b31adadf7bdb313149e5be602a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31db79ac4662402ef4502027fc7708962ef1b3b31adadf7bdb313149e5be602a->enter($__internal_31db79ac4662402ef4502027fc7708962ef1b3b31adadf7bdb313149e5be602a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_d6e1ed3601d22fd0c6ca198bd4cf8e8cda58fe09b05c66eb92447d8afcb063e3->leave($__internal_d6e1ed3601d22fd0c6ca198bd4cf8e8cda58fe09b05c66eb92447d8afcb063e3_prof);

        
        $__internal_31db79ac4662402ef4502027fc7708962ef1b3b31adadf7bdb313149e5be602a->leave($__internal_31db79ac4662402ef4502027fc7708962ef1b3b31adadf7bdb313149e5be602a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/var/www/html/jComercial/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
