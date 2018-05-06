<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_5f485990e19975f2fc49879b76b3dbef14e71bbc44366a68a96b2e5ff040571b extends Twig_Template
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
        $__internal_ac796ff8deb4ecc5139a858ee20c5e837e335ded25d9e79a6a354ec491b17e27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac796ff8deb4ecc5139a858ee20c5e837e335ded25d9e79a6a354ec491b17e27->enter($__internal_ac796ff8deb4ecc5139a858ee20c5e837e335ded25d9e79a6a354ec491b17e27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_3aafb784247312390f4e8cb08508e54662ee263c9f72d1af580dc76b128a9691 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3aafb784247312390f4e8cb08508e54662ee263c9f72d1af580dc76b128a9691->enter($__internal_3aafb784247312390f4e8cb08508e54662ee263c9f72d1af580dc76b128a9691_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_ac796ff8deb4ecc5139a858ee20c5e837e335ded25d9e79a6a354ec491b17e27->leave($__internal_ac796ff8deb4ecc5139a858ee20c5e837e335ded25d9e79a6a354ec491b17e27_prof);

        
        $__internal_3aafb784247312390f4e8cb08508e54662ee263c9f72d1af580dc76b128a9691->leave($__internal_3aafb784247312390f4e8cb08508e54662ee263c9f72d1af580dc76b128a9691_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/var/www/html/jComercial/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
