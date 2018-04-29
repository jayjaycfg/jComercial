<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_cd665b4961e8ff189fad7ba52230790b95be514d9def5f1d7c72958f14873073 extends Twig_Template
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
        $__internal_c0c786f380bdb169f87605cfcc07cc7d95b6f0527db6be603f649a783f1e31fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0c786f380bdb169f87605cfcc07cc7d95b6f0527db6be603f649a783f1e31fb->enter($__internal_c0c786f380bdb169f87605cfcc07cc7d95b6f0527db6be603f649a783f1e31fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_60e928d2a41592cf7bc30eae5349f113b7766fc7943a9041c68ceb9ecb568512 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60e928d2a41592cf7bc30eae5349f113b7766fc7943a9041c68ceb9ecb568512->enter($__internal_60e928d2a41592cf7bc30eae5349f113b7766fc7943a9041c68ceb9ecb568512_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_c0c786f380bdb169f87605cfcc07cc7d95b6f0527db6be603f649a783f1e31fb->leave($__internal_c0c786f380bdb169f87605cfcc07cc7d95b6f0527db6be603f649a783f1e31fb_prof);

        
        $__internal_60e928d2a41592cf7bc30eae5349f113b7766fc7943a9041c68ceb9ecb568512->leave($__internal_60e928d2a41592cf7bc30eae5349f113b7766fc7943a9041c68ceb9ecb568512_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/var/www/html/jComercial/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}
