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
        $__internal_a7d1745f6ad1b683c9588258a68ccaf65e3ec6ef0958dd0f7b1266885465c293 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7d1745f6ad1b683c9588258a68ccaf65e3ec6ef0958dd0f7b1266885465c293->enter($__internal_a7d1745f6ad1b683c9588258a68ccaf65e3ec6ef0958dd0f7b1266885465c293_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_da77d2b6f16034ed025310770ecf569a74ae4faf2346c51be448445dd939c2c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da77d2b6f16034ed025310770ecf569a74ae4faf2346c51be448445dd939c2c2->enter($__internal_da77d2b6f16034ed025310770ecf569a74ae4faf2346c51be448445dd939c2c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_a7d1745f6ad1b683c9588258a68ccaf65e3ec6ef0958dd0f7b1266885465c293->leave($__internal_a7d1745f6ad1b683c9588258a68ccaf65e3ec6ef0958dd0f7b1266885465c293_prof);

        
        $__internal_da77d2b6f16034ed025310770ecf569a74ae4faf2346c51be448445dd939c2c2->leave($__internal_da77d2b6f16034ed025310770ecf569a74ae4faf2346c51be448445dd939c2c2_prof);

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
