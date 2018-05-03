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
        $__internal_493e27ffdf4d4be27603cd54b3e6f5371d7320c524cea03dc46693d2383053f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_493e27ffdf4d4be27603cd54b3e6f5371d7320c524cea03dc46693d2383053f7->enter($__internal_493e27ffdf4d4be27603cd54b3e6f5371d7320c524cea03dc46693d2383053f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_54ef8bdca13a4f22234860f44af6e096beaa7a7445f05a413dc92019447ff281 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54ef8bdca13a4f22234860f44af6e096beaa7a7445f05a413dc92019447ff281->enter($__internal_54ef8bdca13a4f22234860f44af6e096beaa7a7445f05a413dc92019447ff281_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_493e27ffdf4d4be27603cd54b3e6f5371d7320c524cea03dc46693d2383053f7->leave($__internal_493e27ffdf4d4be27603cd54b3e6f5371d7320c524cea03dc46693d2383053f7_prof);

        
        $__internal_54ef8bdca13a4f22234860f44af6e096beaa7a7445f05a413dc92019447ff281->leave($__internal_54ef8bdca13a4f22234860f44af6e096beaa7a7445f05a413dc92019447ff281_prof);

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
