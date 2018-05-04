<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_c8948eab21f13e8d1a5944c9aa6a68b35a475a21ebdbde87d9199569f7b41d48 extends Twig_Template
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
        $__internal_4740a30abf6d4d4c97c21ff0843e22a57ce4d02ce10c4803500d75fe52e32f6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4740a30abf6d4d4c97c21ff0843e22a57ce4d02ce10c4803500d75fe52e32f6c->enter($__internal_4740a30abf6d4d4c97c21ff0843e22a57ce4d02ce10c4803500d75fe52e32f6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_63fd66577191d5bbb0f5e8f4961d4193c230579f62ee1d7ae7d7358cc271c83f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63fd66577191d5bbb0f5e8f4961d4193c230579f62ee1d7ae7d7358cc271c83f->enter($__internal_63fd66577191d5bbb0f5e8f4961d4193c230579f62ee1d7ae7d7358cc271c83f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_4740a30abf6d4d4c97c21ff0843e22a57ce4d02ce10c4803500d75fe52e32f6c->leave($__internal_4740a30abf6d4d4c97c21ff0843e22a57ce4d02ce10c4803500d75fe52e32f6c_prof);

        
        $__internal_63fd66577191d5bbb0f5e8f4961d4193c230579f62ee1d7ae7d7358cc271c83f->leave($__internal_63fd66577191d5bbb0f5e8f4961d4193c230579f62ee1d7ae7d7358cc271c83f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/var/www/html/jComercial/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
