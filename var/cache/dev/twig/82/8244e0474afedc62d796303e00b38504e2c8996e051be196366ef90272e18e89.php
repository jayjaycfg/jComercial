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
        $__internal_986516f716583c6746665f9bba6c8f5bef3bece74813b3f1bda93390cc119ee3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_986516f716583c6746665f9bba6c8f5bef3bece74813b3f1bda93390cc119ee3->enter($__internal_986516f716583c6746665f9bba6c8f5bef3bece74813b3f1bda93390cc119ee3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_08e8be523656c0ae45c0b6dbe533c6fbc3cf37f7d40e6d45e38ad6ba1dbbe540 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08e8be523656c0ae45c0b6dbe533c6fbc3cf37f7d40e6d45e38ad6ba1dbbe540->enter($__internal_08e8be523656c0ae45c0b6dbe533c6fbc3cf37f7d40e6d45e38ad6ba1dbbe540_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_986516f716583c6746665f9bba6c8f5bef3bece74813b3f1bda93390cc119ee3->leave($__internal_986516f716583c6746665f9bba6c8f5bef3bece74813b3f1bda93390cc119ee3_prof);

        
        $__internal_08e8be523656c0ae45c0b6dbe533c6fbc3cf37f7d40e6d45e38ad6ba1dbbe540->leave($__internal_08e8be523656c0ae45c0b6dbe533c6fbc3cf37f7d40e6d45e38ad6ba1dbbe540_prof);

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
