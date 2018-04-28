<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_8020539636230066ee4f2cdfdbaafef45c1baea671c770ad4575d9ae6da66ab6 extends Twig_Template
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
        $__internal_63d99594564bf32cec8fbac4de3122937173801f317b5181238b1f474e9106c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63d99594564bf32cec8fbac4de3122937173801f317b5181238b1f474e9106c8->enter($__internal_63d99594564bf32cec8fbac4de3122937173801f317b5181238b1f474e9106c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_a6e779975f3fd839b87dbe232d75919e33b48fe189c2c5e076b47b4e3ddaff41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6e779975f3fd839b87dbe232d75919e33b48fe189c2c5e076b47b4e3ddaff41->enter($__internal_a6e779975f3fd839b87dbe232d75919e33b48fe189c2c5e076b47b4e3ddaff41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_63d99594564bf32cec8fbac4de3122937173801f317b5181238b1f474e9106c8->leave($__internal_63d99594564bf32cec8fbac4de3122937173801f317b5181238b1f474e9106c8_prof);

        
        $__internal_a6e779975f3fd839b87dbe232d75919e33b48fe189c2c5e076b47b4e3ddaff41->leave($__internal_a6e779975f3fd839b87dbe232d75919e33b48fe189c2c5e076b47b4e3ddaff41_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/var/www/html/HeroQuest/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
