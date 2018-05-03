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
        $__internal_30f738b3e60fb52be360cead1a93c8d9ff6f56ffbbf5e3008010f900ae831557 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30f738b3e60fb52be360cead1a93c8d9ff6f56ffbbf5e3008010f900ae831557->enter($__internal_30f738b3e60fb52be360cead1a93c8d9ff6f56ffbbf5e3008010f900ae831557_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_b5f581ff56235dc3d4e14e1f18f584c233da02d17a8076c8485b618f708110d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5f581ff56235dc3d4e14e1f18f584c233da02d17a8076c8485b618f708110d0->enter($__internal_b5f581ff56235dc3d4e14e1f18f584c233da02d17a8076c8485b618f708110d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_30f738b3e60fb52be360cead1a93c8d9ff6f56ffbbf5e3008010f900ae831557->leave($__internal_30f738b3e60fb52be360cead1a93c8d9ff6f56ffbbf5e3008010f900ae831557_prof);

        
        $__internal_b5f581ff56235dc3d4e14e1f18f584c233da02d17a8076c8485b618f708110d0->leave($__internal_b5f581ff56235dc3d4e14e1f18f584c233da02d17a8076c8485b618f708110d0_prof);

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
