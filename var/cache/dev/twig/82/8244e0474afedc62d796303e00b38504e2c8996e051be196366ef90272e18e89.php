<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_103e10cc104c0b40daf4b4fe99961f77bd9645f170ff7cb7bad7d4b8e86ad26c extends Twig_Template
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
        $__internal_19c02e6b881d2a92c4fc1ed4263e3cf94b8d67d7f433c1c2f06648822426d1d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19c02e6b881d2a92c4fc1ed4263e3cf94b8d67d7f433c1c2f06648822426d1d6->enter($__internal_19c02e6b881d2a92c4fc1ed4263e3cf94b8d67d7f433c1c2f06648822426d1d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_6a563857f6b50354e4fd73278b55564e981ed111f0e643409efdcee2e41e11aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a563857f6b50354e4fd73278b55564e981ed111f0e643409efdcee2e41e11aa->enter($__internal_6a563857f6b50354e4fd73278b55564e981ed111f0e643409efdcee2e41e11aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_19c02e6b881d2a92c4fc1ed4263e3cf94b8d67d7f433c1c2f06648822426d1d6->leave($__internal_19c02e6b881d2a92c4fc1ed4263e3cf94b8d67d7f433c1c2f06648822426d1d6_prof);

        
        $__internal_6a563857f6b50354e4fd73278b55564e981ed111f0e643409efdcee2e41e11aa->leave($__internal_6a563857f6b50354e4fd73278b55564e981ed111f0e643409efdcee2e41e11aa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/var/www/html/jComercial/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
