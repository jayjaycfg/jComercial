<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_66869ba7eff9fd715468a31dfed603debc51a886aad83e18551ac236ba3e16e9 extends Twig_Template
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
        $__internal_aca56f4f6b24fb3eb544f030b490686206c67c6711e00d3d7dffb4de82cd7236 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aca56f4f6b24fb3eb544f030b490686206c67c6711e00d3d7dffb4de82cd7236->enter($__internal_aca56f4f6b24fb3eb544f030b490686206c67c6711e00d3d7dffb4de82cd7236_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_023545dc6a636d351c41641e8d14e7244732ef7e6cfbbb47b9ff47f5d82b4663 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_023545dc6a636d351c41641e8d14e7244732ef7e6cfbbb47b9ff47f5d82b4663->enter($__internal_023545dc6a636d351c41641e8d14e7244732ef7e6cfbbb47b9ff47f5d82b4663_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_aca56f4f6b24fb3eb544f030b490686206c67c6711e00d3d7dffb4de82cd7236->leave($__internal_aca56f4f6b24fb3eb544f030b490686206c67c6711e00d3d7dffb4de82cd7236_prof);

        
        $__internal_023545dc6a636d351c41641e8d14e7244732ef7e6cfbbb47b9ff47f5d82b4663->leave($__internal_023545dc6a636d351c41641e8d14e7244732ef7e6cfbbb47b9ff47f5d82b4663_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/var/www/html/HeroQuest/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
