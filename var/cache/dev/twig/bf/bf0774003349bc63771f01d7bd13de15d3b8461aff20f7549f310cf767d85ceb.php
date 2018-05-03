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
        $__internal_8d40efd470e35745d958960b8cf562f285e83afe6ef24b05f5ad654f2c425181 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d40efd470e35745d958960b8cf562f285e83afe6ef24b05f5ad654f2c425181->enter($__internal_8d40efd470e35745d958960b8cf562f285e83afe6ef24b05f5ad654f2c425181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_8523715a783e538e343d0c1b7144568603fab62a956f555386a18e4591dd2b9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8523715a783e538e343d0c1b7144568603fab62a956f555386a18e4591dd2b9f->enter($__internal_8523715a783e538e343d0c1b7144568603fab62a956f555386a18e4591dd2b9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_8d40efd470e35745d958960b8cf562f285e83afe6ef24b05f5ad654f2c425181->leave($__internal_8d40efd470e35745d958960b8cf562f285e83afe6ef24b05f5ad654f2c425181_prof);

        
        $__internal_8523715a783e538e343d0c1b7144568603fab62a956f555386a18e4591dd2b9f->leave($__internal_8523715a783e538e343d0c1b7144568603fab62a956f555386a18e4591dd2b9f_prof);

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
