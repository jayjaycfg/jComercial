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
        $__internal_8705f71bd8954ed9f0242583adf052789ddba578a93115abac55a9cfa4adf92c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8705f71bd8954ed9f0242583adf052789ddba578a93115abac55a9cfa4adf92c->enter($__internal_8705f71bd8954ed9f0242583adf052789ddba578a93115abac55a9cfa4adf92c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_c415335b80ce3201538babb8037463d5e9589090ac043d30f0752c9b28628c12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c415335b80ce3201538babb8037463d5e9589090ac043d30f0752c9b28628c12->enter($__internal_c415335b80ce3201538babb8037463d5e9589090ac043d30f0752c9b28628c12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_8705f71bd8954ed9f0242583adf052789ddba578a93115abac55a9cfa4adf92c->leave($__internal_8705f71bd8954ed9f0242583adf052789ddba578a93115abac55a9cfa4adf92c_prof);

        
        $__internal_c415335b80ce3201538babb8037463d5e9589090ac043d30f0752c9b28628c12->leave($__internal_c415335b80ce3201538babb8037463d5e9589090ac043d30f0752c9b28628c12_prof);

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
