<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_fd9884ea6e69926d08e06aa018a95bc85a683fa90791ffcd74a6d168addbfc0c extends Twig_Template
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
        $__internal_9535f82e0ebd6ebbffa55056a3e702ec9c24bbacd1ed9e26da3fe04f46d99b11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9535f82e0ebd6ebbffa55056a3e702ec9c24bbacd1ed9e26da3fe04f46d99b11->enter($__internal_9535f82e0ebd6ebbffa55056a3e702ec9c24bbacd1ed9e26da3fe04f46d99b11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_af0ca91bba8f8e42f45ac117434cb2951dce3b7eabc97026039fa39affca6c5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af0ca91bba8f8e42f45ac117434cb2951dce3b7eabc97026039fa39affca6c5d->enter($__internal_af0ca91bba8f8e42f45ac117434cb2951dce3b7eabc97026039fa39affca6c5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_9535f82e0ebd6ebbffa55056a3e702ec9c24bbacd1ed9e26da3fe04f46d99b11->leave($__internal_9535f82e0ebd6ebbffa55056a3e702ec9c24bbacd1ed9e26da3fe04f46d99b11_prof);

        
        $__internal_af0ca91bba8f8e42f45ac117434cb2951dce3b7eabc97026039fa39affca6c5d->leave($__internal_af0ca91bba8f8e42f45ac117434cb2951dce3b7eabc97026039fa39affca6c5d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/var/www/html/jComercial/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
