<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_83b00cd8ec6fa655aca50a1dee56595eb9f7c4abce07c6be5c4e8d74be931d83 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'button_widget' => array($this, 'block_button_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'form_label' => array($this, 'block_form_label'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d19c3264d9efc573e409d43f4878f6185a4ac3aa3129b3bd4fa3c3a19136100c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d19c3264d9efc573e409d43f4878f6185a4ac3aa3129b3bd4fa3c3a19136100c->enter($__internal_d19c3264d9efc573e409d43f4878f6185a4ac3aa3129b3bd4fa3c3a19136100c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_154d9ae154ab26d2bd6cf807d372b48ed09c59ea4dcec4171bfce78da546dd6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_154d9ae154ab26d2bd6cf807d372b48ed09c59ea4dcec4171bfce78da546dd6e->enter($__internal_154d9ae154ab26d2bd6cf807d372b48ed09c59ea4dcec4171bfce78da546dd6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('button_widget', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('money_widget', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 41
        echo "
";
        // line 42
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 55
        echo "
";
        // line 56
        $this->displayBlock('date_widget', $context, $blocks);
        // line 74
        echo "
";
        // line 75
        $this->displayBlock('time_widget', $context, $blocks);
        // line 90
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 128
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 132
        echo "
";
        // line 133
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 152
        echo "
";
        // line 153
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 163
        echo "
";
        // line 164
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 174
        echo "
";
        // line 176
        echo "
";
        // line 177
        $this->displayBlock('form_label', $context, $blocks);
        // line 181
        echo "
";
        // line 182
        $this->displayBlock('choice_label', $context, $blocks);
        // line 187
        echo "
";
        // line 188
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 191
        echo "
";
        // line 192
        $this->displayBlock('radio_label', $context, $blocks);
        // line 195
        echo "
";
        // line 196
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 220
        echo "
";
        // line 222
        echo "
";
        // line 223
        $this->displayBlock('form_row', $context, $blocks);
        // line 230
        echo "
";
        // line 231
        $this->displayBlock('button_row', $context, $blocks);
        // line 236
        echo "
";
        // line 237
        $this->displayBlock('choice_row', $context, $blocks);
        // line 241
        echo "
";
        // line 242
        $this->displayBlock('date_row', $context, $blocks);
        // line 246
        echo "
";
        // line 247
        $this->displayBlock('time_row', $context, $blocks);
        // line 251
        echo "
";
        // line 252
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 256
        echo "
";
        // line 257
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 263
        echo "
";
        // line 264
        $this->displayBlock('radio_row', $context, $blocks);
        // line 270
        echo "
";
        // line 272
        echo "
";
        // line 273
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_d19c3264d9efc573e409d43f4878f6185a4ac3aa3129b3bd4fa3c3a19136100c->leave($__internal_d19c3264d9efc573e409d43f4878f6185a4ac3aa3129b3bd4fa3c3a19136100c_prof);

        
        $__internal_154d9ae154ab26d2bd6cf807d372b48ed09c59ea4dcec4171bfce78da546dd6e->leave($__internal_154d9ae154ab26d2bd6cf807d372b48ed09c59ea4dcec4171bfce78da546dd6e_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_b9a9891c48d5d47154ba9e047323ba6fb4617000fc1b684c2ef45085ba58578b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9a9891c48d5d47154ba9e047323ba6fb4617000fc1b684c2ef45085ba58578b->enter($__internal_b9a9891c48d5d47154ba9e047323ba6fb4617000fc1b684c2ef45085ba58578b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_e43c1447aa4548bd6f264f62fc214cf06012f761641850a641f0e7093aac04f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e43c1447aa4548bd6f264f62fc214cf06012f761641850a641f0e7093aac04f4->enter($__internal_e43c1447aa4548bd6f264f62fc214cf06012f761641850a641f0e7093aac04f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter(($context["type"] ?? $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_e43c1447aa4548bd6f264f62fc214cf06012f761641850a641f0e7093aac04f4->leave($__internal_e43c1447aa4548bd6f264f62fc214cf06012f761641850a641f0e7093aac04f4_prof);

        
        $__internal_b9a9891c48d5d47154ba9e047323ba6fb4617000fc1b684c2ef45085ba58578b->leave($__internal_b9a9891c48d5d47154ba9e047323ba6fb4617000fc1b684c2ef45085ba58578b_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_316f0866730b6776a4985b8364badac33a29a6a41bff0d06d81da3088f41e0af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_316f0866730b6776a4985b8364badac33a29a6a41bff0d06d81da3088f41e0af->enter($__internal_316f0866730b6776a4985b8364badac33a29a6a41bff0d06d81da3088f41e0af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_16a6a4e0437d68e4eeef5184e73d8837bf09e2ebe1e54f45816d2bb08dc65d46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16a6a4e0437d68e4eeef5184e73d8837bf09e2ebe1e54f45816d2bb08dc65d46->enter($__internal_16a6a4e0437d68e4eeef5184e73d8837bf09e2ebe1e54f45816d2bb08dc65d46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_16a6a4e0437d68e4eeef5184e73d8837bf09e2ebe1e54f45816d2bb08dc65d46->leave($__internal_16a6a4e0437d68e4eeef5184e73d8837bf09e2ebe1e54f45816d2bb08dc65d46_prof);

        
        $__internal_316f0866730b6776a4985b8364badac33a29a6a41bff0d06d81da3088f41e0af->leave($__internal_316f0866730b6776a4985b8364badac33a29a6a41bff0d06d81da3088f41e0af_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_f46aa63f3d82ba79d527e3f624264ca2162cf4ad0ecd863307c23094bf956b3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f46aa63f3d82ba79d527e3f624264ca2162cf4ad0ecd863307c23094bf956b3b->enter($__internal_f46aa63f3d82ba79d527e3f624264ca2162cf4ad0ecd863307c23094bf956b3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_9512049eff0857c9a124e735fec85298b01b86a48d0425881465b4891bfea7dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9512049eff0857c9a124e735fec85298b01b86a48d0425881465b4891bfea7dd->enter($__internal_9512049eff0857c9a124e735fec85298b01b86a48d0425881465b4891bfea7dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_9512049eff0857c9a124e735fec85298b01b86a48d0425881465b4891bfea7dd->leave($__internal_9512049eff0857c9a124e735fec85298b01b86a48d0425881465b4891bfea7dd_prof);

        
        $__internal_f46aa63f3d82ba79d527e3f624264ca2162cf4ad0ecd863307c23094bf956b3b->leave($__internal_f46aa63f3d82ba79d527e3f624264ca2162cf4ad0ecd863307c23094bf956b3b_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_f102cf3e2a56534e675deb3a08d07453662008b0f60ba223c9b625553e4699ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f102cf3e2a56534e675deb3a08d07453662008b0f60ba223c9b625553e4699ba->enter($__internal_f102cf3e2a56534e675deb3a08d07453662008b0f60ba223c9b625553e4699ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_6e194e5b0a84e65900b9aa1f080bd577b86f797b4fd14c1a19ed29d235c1d636 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e194e5b0a84e65900b9aa1f080bd577b86f797b4fd14c1a19ed29d235c1d636->enter($__internal_6e194e5b0a84e65900b9aa1f080bd577b86f797b4fd14c1a19ed29d235c1d636_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        echo "<div class=\"input-group\">
        ";
        // line 24
        $context["append"] = (is_string($__internal_87f9b7cea85e0413dc18e0e735b36a7e389c482a4b2a4a5583ad9e6d9c909205 = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_3dea78cc3c5865ac5edba1bcebe70a8259fce2f2fd3e3d5a785ef714e09ccae3 = "{{") && ('' === $__internal_3dea78cc3c5865ac5edba1bcebe70a8259fce2f2fd3e3d5a785ef714e09ccae3 || 0 === strpos($__internal_87f9b7cea85e0413dc18e0e735b36a7e389c482a4b2a4a5583ad9e6d9c909205, $__internal_3dea78cc3c5865ac5edba1bcebe70a8259fce2f2fd3e3d5a785ef714e09ccae3)));
        // line 25
        echo "        ";
        if ( !($context["append"] ?? $this->getContext($context, "append"))) {
            // line 26
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 28
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 29
        if (($context["append"] ?? $this->getContext($context, "append"))) {
            // line 30
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 32
        echo "    </div>";
        
        $__internal_6e194e5b0a84e65900b9aa1f080bd577b86f797b4fd14c1a19ed29d235c1d636->leave($__internal_6e194e5b0a84e65900b9aa1f080bd577b86f797b4fd14c1a19ed29d235c1d636_prof);

        
        $__internal_f102cf3e2a56534e675deb3a08d07453662008b0f60ba223c9b625553e4699ba->leave($__internal_f102cf3e2a56534e675deb3a08d07453662008b0f60ba223c9b625553e4699ba_prof);

    }

    // line 35
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_ff83eed1f9746da5a79aefaea36a7ab08bd37bfec8164eea813e177df0706a98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff83eed1f9746da5a79aefaea36a7ab08bd37bfec8164eea813e177df0706a98->enter($__internal_ff83eed1f9746da5a79aefaea36a7ab08bd37bfec8164eea813e177df0706a98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_e52c20282241527162f743e863cf6e0bd636bcb7f7675f3f55eddac630e32fe6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e52c20282241527162f743e863cf6e0bd636bcb7f7675f3f55eddac630e32fe6->enter($__internal_e52c20282241527162f743e863cf6e0bd636bcb7f7675f3f55eddac630e32fe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 36
        echo "<div class=\"input-group\">";
        // line 37
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 38
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_e52c20282241527162f743e863cf6e0bd636bcb7f7675f3f55eddac630e32fe6->leave($__internal_e52c20282241527162f743e863cf6e0bd636bcb7f7675f3f55eddac630e32fe6_prof);

        
        $__internal_ff83eed1f9746da5a79aefaea36a7ab08bd37bfec8164eea813e177df0706a98->leave($__internal_ff83eed1f9746da5a79aefaea36a7ab08bd37bfec8164eea813e177df0706a98_prof);

    }

    // line 42
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_6e7bb5ff5ad0f1ad442135d44470b0d1e96a50be34b3f90be522f651bbde6f23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e7bb5ff5ad0f1ad442135d44470b0d1e96a50be34b3f90be522f651bbde6f23->enter($__internal_6e7bb5ff5ad0f1ad442135d44470b0d1e96a50be34b3f90be522f651bbde6f23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_331c44aac78f5fbafb4244594ef0e097f182574033a7314d802dc45d46f06fbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_331c44aac78f5fbafb4244594ef0e097f182574033a7314d802dc45d46f06fbd->enter($__internal_331c44aac78f5fbafb4244594ef0e097f182574033a7314d802dc45d46f06fbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 43
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 44
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 46
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 47
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 48
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
            // line 49
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'errors');
            // line 50
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            // line 51
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            // line 52
            echo "</div>";
        }
        
        $__internal_331c44aac78f5fbafb4244594ef0e097f182574033a7314d802dc45d46f06fbd->leave($__internal_331c44aac78f5fbafb4244594ef0e097f182574033a7314d802dc45d46f06fbd_prof);

        
        $__internal_6e7bb5ff5ad0f1ad442135d44470b0d1e96a50be34b3f90be522f651bbde6f23->leave($__internal_6e7bb5ff5ad0f1ad442135d44470b0d1e96a50be34b3f90be522f651bbde6f23_prof);

    }

    // line 56
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_a8380624da35bdee410aed59b2a6ea9e64cd6d9b6fb12cee9085c8648039c91f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8380624da35bdee410aed59b2a6ea9e64cd6d9b6fb12cee9085c8648039c91f->enter($__internal_a8380624da35bdee410aed59b2a6ea9e64cd6d9b6fb12cee9085c8648039c91f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_84aba07b492b4b5f80f21bb4ae63ff2cfea6641175769dd5ff5621f6c5b2977d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84aba07b492b4b5f80f21bb4ae63ff2cfea6641175769dd5ff5621f6c5b2977d->enter($__internal_84aba07b492b4b5f80f21bb4ae63ff2cfea6641175769dd5ff5621f6c5b2977d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 57
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 58
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 60
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 61
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 62
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 64
            echo twig_replace_filter(($context["date_pattern"] ?? $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 65
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 66
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 67
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 69
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 70
                echo "</div>";
            }
        }
        
        $__internal_84aba07b492b4b5f80f21bb4ae63ff2cfea6641175769dd5ff5621f6c5b2977d->leave($__internal_84aba07b492b4b5f80f21bb4ae63ff2cfea6641175769dd5ff5621f6c5b2977d_prof);

        
        $__internal_a8380624da35bdee410aed59b2a6ea9e64cd6d9b6fb12cee9085c8648039c91f->leave($__internal_a8380624da35bdee410aed59b2a6ea9e64cd6d9b6fb12cee9085c8648039c91f_prof);

    }

    // line 75
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_99c9aa0d6497673f23f13109e931bdb9a6380a563baa84d2448984902bc8d293 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99c9aa0d6497673f23f13109e931bdb9a6380a563baa84d2448984902bc8d293->enter($__internal_99c9aa0d6497673f23f13109e931bdb9a6380a563baa84d2448984902bc8d293_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_16d7b47f7ffc8e0de62eb2cb61c14c68e095167a69842e54ed99ffa4e9475645 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16d7b47f7ffc8e0de62eb2cb61c14c68e095167a69842e54ed99ffa4e9475645->enter($__internal_16d7b47f7ffc8e0de62eb2cb61c14c68e095167a69842e54ed99ffa4e9475645_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 76
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 77
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 79
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 80
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 81
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 83
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
            }
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "second", array()), 'widget');
            }
            // line 84
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 85
                echo "</div>";
            }
        }
        
        $__internal_16d7b47f7ffc8e0de62eb2cb61c14c68e095167a69842e54ed99ffa4e9475645->leave($__internal_16d7b47f7ffc8e0de62eb2cb61c14c68e095167a69842e54ed99ffa4e9475645_prof);

        
        $__internal_99c9aa0d6497673f23f13109e931bdb9a6380a563baa84d2448984902bc8d293->leave($__internal_99c9aa0d6497673f23f13109e931bdb9a6380a563baa84d2448984902bc8d293_prof);

    }

    // line 90
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_8bd76bfd9264eff1d288147a9f05fffc48468a7362bd4e3a6f2e4efb9dab3e9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bd76bfd9264eff1d288147a9f05fffc48468a7362bd4e3a6f2e4efb9dab3e9f->enter($__internal_8bd76bfd9264eff1d288147a9f05fffc48468a7362bd4e3a6f2e4efb9dab3e9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_5795a3b8a272a8de3f1280437c14eadc8b4b9a8abcb1c6996cb019d46a871328 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5795a3b8a272a8de3f1280437c14eadc8b4b9a8abcb1c6996cb019d46a871328->enter($__internal_5795a3b8a272a8de3f1280437c14eadc8b4b9a8abcb1c6996cb019d46a871328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 91
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 92
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 94
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 95
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 96
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            // line 97
            echo "<div class=\"table-responsive\">
                <table class=\"table ";
            // line 98
            echo twig_escape_filter($this->env, ((array_key_exists("table_class", $context)) ? (_twig_default_filter(($context["table_class"] ?? $this->getContext($context, "table_class")), "table-bordered table-condensed table-striped")) : ("table-bordered table-condensed table-striped")), "html", null, true);
            echo "\">
                    <thead>
                    <tr>";
            // line 101
            if (($context["with_years"] ?? $this->getContext($context, "with_years"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "years", array()), 'label');
                echo "</th>";
            }
            // line 102
            if (($context["with_months"] ?? $this->getContext($context, "with_months"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "months", array()), 'label');
                echo "</th>";
            }
            // line 103
            if (($context["with_weeks"] ?? $this->getContext($context, "with_weeks"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weeks", array()), 'label');
                echo "</th>";
            }
            // line 104
            if (($context["with_days"] ?? $this->getContext($context, "with_days"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "days", array()), 'label');
                echo "</th>";
            }
            // line 105
            if (($context["with_hours"] ?? $this->getContext($context, "with_hours"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hours", array()), 'label');
                echo "</th>";
            }
            // line 106
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minutes", array()), 'label');
                echo "</th>";
            }
            // line 107
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "seconds", array()), 'label');
                echo "</th>";
            }
            // line 108
            echo "</tr>
                    </thead>
                    <tbody>
                    <tr>";
            // line 112
            if (($context["with_years"] ?? $this->getContext($context, "with_years"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "years", array()), 'widget');
                echo "</td>";
            }
            // line 113
            if (($context["with_months"] ?? $this->getContext($context, "with_months"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "months", array()), 'widget');
                echo "</td>";
            }
            // line 114
            if (($context["with_weeks"] ?? $this->getContext($context, "with_weeks"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weeks", array()), 'widget');
                echo "</td>";
            }
            // line 115
            if (($context["with_days"] ?? $this->getContext($context, "with_days"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "days", array()), 'widget');
                echo "</td>";
            }
            // line 116
            if (($context["with_hours"] ?? $this->getContext($context, "with_hours"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hours", array()), 'widget');
                echo "</td>";
            }
            // line 117
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minutes", array()), 'widget');
                echo "</td>";
            }
            // line 118
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "seconds", array()), 'widget');
                echo "</td>";
            }
            // line 119
            echo "</tr>
                    </tbody>
                </table>
            </div>";
            // line 123
            if (($context["with_invert"] ?? $this->getContext($context, "with_invert"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "invert", array()), 'widget');
            }
            // line 124
            echo "</div>";
        }
        
        $__internal_5795a3b8a272a8de3f1280437c14eadc8b4b9a8abcb1c6996cb019d46a871328->leave($__internal_5795a3b8a272a8de3f1280437c14eadc8b4b9a8abcb1c6996cb019d46a871328_prof);

        
        $__internal_8bd76bfd9264eff1d288147a9f05fffc48468a7362bd4e3a6f2e4efb9dab3e9f->leave($__internal_8bd76bfd9264eff1d288147a9f05fffc48468a7362bd4e3a6f2e4efb9dab3e9f_prof);

    }

    // line 128
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_5d250989b3961ce95c494e9ebfdccaf5c4e52989d4b870d220b25d44ac3d394f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d250989b3961ce95c494e9ebfdccaf5c4e52989d4b870d220b25d44ac3d394f->enter($__internal_5d250989b3961ce95c494e9ebfdccaf5c4e52989d4b870d220b25d44ac3d394f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_14f98f4b7c55a167a232741f353ed9628dac995f848ff285cbe3c607707dfe20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14f98f4b7c55a167a232741f353ed9628dac995f848ff285cbe3c607707dfe20->enter($__internal_14f98f4b7c55a167a232741f353ed9628dac995f848ff285cbe3c607707dfe20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 129
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 130
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_14f98f4b7c55a167a232741f353ed9628dac995f848ff285cbe3c607707dfe20->leave($__internal_14f98f4b7c55a167a232741f353ed9628dac995f848ff285cbe3c607707dfe20_prof);

        
        $__internal_5d250989b3961ce95c494e9ebfdccaf5c4e52989d4b870d220b25d44ac3d394f->leave($__internal_5d250989b3961ce95c494e9ebfdccaf5c4e52989d4b870d220b25d44ac3d394f_prof);

    }

    // line 133
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_11cb74dd47ac616259043aae0a3dd769cedf4cdb9a9f4d5fb9bb584d471940d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11cb74dd47ac616259043aae0a3dd769cedf4cdb9a9f4d5fb9bb584d471940d8->enter($__internal_11cb74dd47ac616259043aae0a3dd769cedf4cdb9a9f4d5fb9bb584d471940d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_8ec7cef6086a1cb6456c414e0ff57deb4e3f33e21bc64129abc176956169be52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ec7cef6086a1cb6456c414e0ff57deb4e3f33e21bc64129abc176956169be52->enter($__internal_8ec7cef6086a1cb6456c414e0ff57deb4e3f33e21bc64129abc176956169be52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 134
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 135
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 136
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 137
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 138
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 142
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 143
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 144
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 145
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 146
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 149
            echo "</div>";
        }
        
        $__internal_8ec7cef6086a1cb6456c414e0ff57deb4e3f33e21bc64129abc176956169be52->leave($__internal_8ec7cef6086a1cb6456c414e0ff57deb4e3f33e21bc64129abc176956169be52_prof);

        
        $__internal_11cb74dd47ac616259043aae0a3dd769cedf4cdb9a9f4d5fb9bb584d471940d8->leave($__internal_11cb74dd47ac616259043aae0a3dd769cedf4cdb9a9f4d5fb9bb584d471940d8_prof);

    }

    // line 153
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_be99f6cb2480d0d0483b5240628ff41770699efa35b01b542d2c41a06aa5a9a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be99f6cb2480d0d0483b5240628ff41770699efa35b01b542d2c41a06aa5a9a0->enter($__internal_be99f6cb2480d0d0483b5240628ff41770699efa35b01b542d2c41a06aa5a9a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_5c4a5b71b2c0580a8567a22dccc92dd9daa2228413072fbb8d36b9cf13a2151f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c4a5b71b2c0580a8567a22dccc92dd9daa2228413072fbb8d36b9cf13a2151f->enter($__internal_5c4a5b71b2c0580a8567a22dccc92dd9daa2228413072fbb8d36b9cf13a2151f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 154
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 155
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 156
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 158
            echo "<div class=\"checkbox\">";
            // line 159
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 160
            echo "</div>";
        }
        
        $__internal_5c4a5b71b2c0580a8567a22dccc92dd9daa2228413072fbb8d36b9cf13a2151f->leave($__internal_5c4a5b71b2c0580a8567a22dccc92dd9daa2228413072fbb8d36b9cf13a2151f_prof);

        
        $__internal_be99f6cb2480d0d0483b5240628ff41770699efa35b01b542d2c41a06aa5a9a0->leave($__internal_be99f6cb2480d0d0483b5240628ff41770699efa35b01b542d2c41a06aa5a9a0_prof);

    }

    // line 164
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_fbf1c778ef1427a7fae149a27a4bf9fdd8f237ea7c4e23b26563e079679d231e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbf1c778ef1427a7fae149a27a4bf9fdd8f237ea7c4e23b26563e079679d231e->enter($__internal_fbf1c778ef1427a7fae149a27a4bf9fdd8f237ea7c4e23b26563e079679d231e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_aba51d7378e895a73ee9dbc38db3c6e20535f5acdd77002550de556f50ff219b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aba51d7378e895a73ee9dbc38db3c6e20535f5acdd77002550de556f50ff219b->enter($__internal_aba51d7378e895a73ee9dbc38db3c6e20535f5acdd77002550de556f50ff219b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 165
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 166
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 167
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 169
            echo "<div class=\"radio\">";
            // line 170
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 171
            echo "</div>";
        }
        
        $__internal_aba51d7378e895a73ee9dbc38db3c6e20535f5acdd77002550de556f50ff219b->leave($__internal_aba51d7378e895a73ee9dbc38db3c6e20535f5acdd77002550de556f50ff219b_prof);

        
        $__internal_fbf1c778ef1427a7fae149a27a4bf9fdd8f237ea7c4e23b26563e079679d231e->leave($__internal_fbf1c778ef1427a7fae149a27a4bf9fdd8f237ea7c4e23b26563e079679d231e_prof);

    }

    // line 177
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_d7b1c4a6b5a370e08ae57500236ec757cc597642965a9dff202261a797176b7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7b1c4a6b5a370e08ae57500236ec757cc597642965a9dff202261a797176b7f->enter($__internal_d7b1c4a6b5a370e08ae57500236ec757cc597642965a9dff202261a797176b7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_2d4c9c2013542538c1b26dd96da21a265121891fc881ab5398e7f43d4718886b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d4c9c2013542538c1b26dd96da21a265121891fc881ab5398e7f43d4718886b->enter($__internal_2d4c9c2013542538c1b26dd96da21a265121891fc881ab5398e7f43d4718886b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 178
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 179
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_2d4c9c2013542538c1b26dd96da21a265121891fc881ab5398e7f43d4718886b->leave($__internal_2d4c9c2013542538c1b26dd96da21a265121891fc881ab5398e7f43d4718886b_prof);

        
        $__internal_d7b1c4a6b5a370e08ae57500236ec757cc597642965a9dff202261a797176b7f->leave($__internal_d7b1c4a6b5a370e08ae57500236ec757cc597642965a9dff202261a797176b7f_prof);

    }

    // line 182
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_6848bb9f2b201725ad7d78d76bf63d5175a025117af631f3648b6ca2f817c9e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6848bb9f2b201725ad7d78d76bf63d5175a025117af631f3648b6ca2f817c9e0->enter($__internal_6848bb9f2b201725ad7d78d76bf63d5175a025117af631f3648b6ca2f817c9e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_ce9100e3efdd99563905ad1ab837680d98845a20bd0d1648082dbaf0b5dff1a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce9100e3efdd99563905ad1ab837680d98845a20bd0d1648082dbaf0b5dff1a9->enter($__internal_ce9100e3efdd99563905ad1ab837680d98845a20bd0d1648082dbaf0b5dff1a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 184
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 185
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_ce9100e3efdd99563905ad1ab837680d98845a20bd0d1648082dbaf0b5dff1a9->leave($__internal_ce9100e3efdd99563905ad1ab837680d98845a20bd0d1648082dbaf0b5dff1a9_prof);

        
        $__internal_6848bb9f2b201725ad7d78d76bf63d5175a025117af631f3648b6ca2f817c9e0->leave($__internal_6848bb9f2b201725ad7d78d76bf63d5175a025117af631f3648b6ca2f817c9e0_prof);

    }

    // line 188
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_7e2bb1f349252196dc1e2e3f4604b3c0a79434aa1bfb3d98d7e96d41001ed90b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e2bb1f349252196dc1e2e3f4604b3c0a79434aa1bfb3d98d7e96d41001ed90b->enter($__internal_7e2bb1f349252196dc1e2e3f4604b3c0a79434aa1bfb3d98d7e96d41001ed90b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_fc1221bf9f81865e2e46f7f91238c68efe0ce258062b3b70f15f57c917c30a65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc1221bf9f81865e2e46f7f91238c68efe0ce258062b3b70f15f57c917c30a65->enter($__internal_fc1221bf9f81865e2e46f7f91238c68efe0ce258062b3b70f15f57c917c30a65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 189
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_fc1221bf9f81865e2e46f7f91238c68efe0ce258062b3b70f15f57c917c30a65->leave($__internal_fc1221bf9f81865e2e46f7f91238c68efe0ce258062b3b70f15f57c917c30a65_prof);

        
        $__internal_7e2bb1f349252196dc1e2e3f4604b3c0a79434aa1bfb3d98d7e96d41001ed90b->leave($__internal_7e2bb1f349252196dc1e2e3f4604b3c0a79434aa1bfb3d98d7e96d41001ed90b_prof);

    }

    // line 192
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_b80b8e5a3227841901de39bdf9dd942a2373f9a24f322b8d1c23462d37d004b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b80b8e5a3227841901de39bdf9dd942a2373f9a24f322b8d1c23462d37d004b4->enter($__internal_b80b8e5a3227841901de39bdf9dd942a2373f9a24f322b8d1c23462d37d004b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_63d297b60bd501763344ab73163b619c927e9a5aa9836c9f753f44172f4413e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63d297b60bd501763344ab73163b619c927e9a5aa9836c9f753f44172f4413e2->enter($__internal_63d297b60bd501763344ab73163b619c927e9a5aa9836c9f753f44172f4413e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 193
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_63d297b60bd501763344ab73163b619c927e9a5aa9836c9f753f44172f4413e2->leave($__internal_63d297b60bd501763344ab73163b619c927e9a5aa9836c9f753f44172f4413e2_prof);

        
        $__internal_b80b8e5a3227841901de39bdf9dd942a2373f9a24f322b8d1c23462d37d004b4->leave($__internal_b80b8e5a3227841901de39bdf9dd942a2373f9a24f322b8d1c23462d37d004b4_prof);

    }

    // line 196
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_c590bda8af944ec460c9e56a72fad01d27886cbbce42b31523d33f2349640ec7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c590bda8af944ec460c9e56a72fad01d27886cbbce42b31523d33f2349640ec7->enter($__internal_c590bda8af944ec460c9e56a72fad01d27886cbbce42b31523d33f2349640ec7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_278914c02e73917fca0ecaedc85668fe70ec5d7dd83fbe04e04728565770e9c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_278914c02e73917fca0ecaedc85668fe70ec5d7dd83fbe04e04728565770e9c7->enter($__internal_278914c02e73917fca0ecaedc85668fe70ec5d7dd83fbe04e04728565770e9c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 197
        echo "    ";
        // line 198
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 199
            echo "        ";
            if (($context["required"] ?? $this->getContext($context, "required"))) {
                // line 200
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
                // line 201
                echo "        ";
            }
            // line 202
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 203
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class"))))));
                // line 204
                echo "        ";
            }
            // line 205
            echo "        ";
            if (( !(($context["label"] ?? $this->getContext($context, "label")) === false) && twig_test_empty(($context["label"] ?? $this->getContext($context, "label"))))) {
                // line 206
                if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                    // line 207
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                     // line 208
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                     // line 209
($context["id"] ?? $this->getContext($context, "id"))));
                } else {
                    // line 212
                    $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
                }
            }
            // line 215
            echo "        <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 216
            echo ($context["widget"] ?? $this->getContext($context, "widget"));
            echo " ";
            echo twig_escape_filter($this->env, (( !(($context["label"] ?? $this->getContext($context, "label")) === false)) ? ((((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            // line 217
            echo "</label>
    ";
        }
        
        $__internal_278914c02e73917fca0ecaedc85668fe70ec5d7dd83fbe04e04728565770e9c7->leave($__internal_278914c02e73917fca0ecaedc85668fe70ec5d7dd83fbe04e04728565770e9c7_prof);

        
        $__internal_c590bda8af944ec460c9e56a72fad01d27886cbbce42b31523d33f2349640ec7->leave($__internal_c590bda8af944ec460c9e56a72fad01d27886cbbce42b31523d33f2349640ec7_prof);

    }

    // line 223
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_8d0670c28485b1d2e14d95b3943c5b78cc74ed08f11d209c8f11a1d951e78172 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d0670c28485b1d2e14d95b3943c5b78cc74ed08f11d209c8f11a1d951e78172->enter($__internal_8d0670c28485b1d2e14d95b3943c5b78cc74ed08f11d209c8f11a1d951e78172_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_c00727103c9981fa81d65e1e8f13fafa62d994575eb9de2408aa314965d49b73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c00727103c9981fa81d65e1e8f13fafa62d994575eb9de2408aa314965d49b73->enter($__internal_c00727103c9981fa81d65e1e8f13fafa62d994575eb9de2408aa314965d49b73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 224
        echo "<div class=\"form-group";
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 225
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 226
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 227
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 228
        echo "</div>";
        
        $__internal_c00727103c9981fa81d65e1e8f13fafa62d994575eb9de2408aa314965d49b73->leave($__internal_c00727103c9981fa81d65e1e8f13fafa62d994575eb9de2408aa314965d49b73_prof);

        
        $__internal_8d0670c28485b1d2e14d95b3943c5b78cc74ed08f11d209c8f11a1d951e78172->leave($__internal_8d0670c28485b1d2e14d95b3943c5b78cc74ed08f11d209c8f11a1d951e78172_prof);

    }

    // line 231
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_c00194a60b2d9ef8682b271bfe443faff75a830ae598d8e6839d4d021ee76f7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c00194a60b2d9ef8682b271bfe443faff75a830ae598d8e6839d4d021ee76f7c->enter($__internal_c00194a60b2d9ef8682b271bfe443faff75a830ae598d8e6839d4d021ee76f7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_f5938153f13863d04c4c75166832cc8d2a5f8e39b5b8a4fa2315ea49d09cae17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5938153f13863d04c4c75166832cc8d2a5f8e39b5b8a4fa2315ea49d09cae17->enter($__internal_f5938153f13863d04c4c75166832cc8d2a5f8e39b5b8a4fa2315ea49d09cae17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 232
        echo "<div class=\"form-group\">";
        // line 233
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 234
        echo "</div>";
        
        $__internal_f5938153f13863d04c4c75166832cc8d2a5f8e39b5b8a4fa2315ea49d09cae17->leave($__internal_f5938153f13863d04c4c75166832cc8d2a5f8e39b5b8a4fa2315ea49d09cae17_prof);

        
        $__internal_c00194a60b2d9ef8682b271bfe443faff75a830ae598d8e6839d4d021ee76f7c->leave($__internal_c00194a60b2d9ef8682b271bfe443faff75a830ae598d8e6839d4d021ee76f7c_prof);

    }

    // line 237
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_5ca36d8ad3e70b12a115e8428cdaf78bc7135c53fb1382cafb5c2beb7c37416f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ca36d8ad3e70b12a115e8428cdaf78bc7135c53fb1382cafb5c2beb7c37416f->enter($__internal_5ca36d8ad3e70b12a115e8428cdaf78bc7135c53fb1382cafb5c2beb7c37416f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_d9e5a8e7afd1a7bc69159c7378ba34f76bc9f299ae972ff2b3aeaa1a70449c27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9e5a8e7afd1a7bc69159c7378ba34f76bc9f299ae972ff2b3aeaa1a70449c27->enter($__internal_d9e5a8e7afd1a7bc69159c7378ba34f76bc9f299ae972ff2b3aeaa1a70449c27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 238
        $context["force_error"] = true;
        // line 239
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_d9e5a8e7afd1a7bc69159c7378ba34f76bc9f299ae972ff2b3aeaa1a70449c27->leave($__internal_d9e5a8e7afd1a7bc69159c7378ba34f76bc9f299ae972ff2b3aeaa1a70449c27_prof);

        
        $__internal_5ca36d8ad3e70b12a115e8428cdaf78bc7135c53fb1382cafb5c2beb7c37416f->leave($__internal_5ca36d8ad3e70b12a115e8428cdaf78bc7135c53fb1382cafb5c2beb7c37416f_prof);

    }

    // line 242
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_3bf5b8f518f4761fac5f1f089f5a8a2ae1c6938206cd141a7bf9f9f7de5bfe02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bf5b8f518f4761fac5f1f089f5a8a2ae1c6938206cd141a7bf9f9f7de5bfe02->enter($__internal_3bf5b8f518f4761fac5f1f089f5a8a2ae1c6938206cd141a7bf9f9f7de5bfe02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_7e6666b40c706dfbd331113e8c19e9549ec8d165f7dc42e7ec70b174c8005585 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e6666b40c706dfbd331113e8c19e9549ec8d165f7dc42e7ec70b174c8005585->enter($__internal_7e6666b40c706dfbd331113e8c19e9549ec8d165f7dc42e7ec70b174c8005585_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 243
        $context["force_error"] = true;
        // line 244
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_7e6666b40c706dfbd331113e8c19e9549ec8d165f7dc42e7ec70b174c8005585->leave($__internal_7e6666b40c706dfbd331113e8c19e9549ec8d165f7dc42e7ec70b174c8005585_prof);

        
        $__internal_3bf5b8f518f4761fac5f1f089f5a8a2ae1c6938206cd141a7bf9f9f7de5bfe02->leave($__internal_3bf5b8f518f4761fac5f1f089f5a8a2ae1c6938206cd141a7bf9f9f7de5bfe02_prof);

    }

    // line 247
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_f0a09eea855799fcf82048ece13907325b60eb85be5e91830a364a330632c69c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0a09eea855799fcf82048ece13907325b60eb85be5e91830a364a330632c69c->enter($__internal_f0a09eea855799fcf82048ece13907325b60eb85be5e91830a364a330632c69c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_e33fa623dc730f83986d8340c37f2fdd9fe70653a78416c1420e9575e87d5f14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e33fa623dc730f83986d8340c37f2fdd9fe70653a78416c1420e9575e87d5f14->enter($__internal_e33fa623dc730f83986d8340c37f2fdd9fe70653a78416c1420e9575e87d5f14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 248
        $context["force_error"] = true;
        // line 249
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_e33fa623dc730f83986d8340c37f2fdd9fe70653a78416c1420e9575e87d5f14->leave($__internal_e33fa623dc730f83986d8340c37f2fdd9fe70653a78416c1420e9575e87d5f14_prof);

        
        $__internal_f0a09eea855799fcf82048ece13907325b60eb85be5e91830a364a330632c69c->leave($__internal_f0a09eea855799fcf82048ece13907325b60eb85be5e91830a364a330632c69c_prof);

    }

    // line 252
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_a946ea147cc950cbc4df64c11dc3096b95b66472b3c9fbd419bef496200d902f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a946ea147cc950cbc4df64c11dc3096b95b66472b3c9fbd419bef496200d902f->enter($__internal_a946ea147cc950cbc4df64c11dc3096b95b66472b3c9fbd419bef496200d902f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_94601ed6d4e7a3129e568d5055420a5c97965bd5b5581374061688d85e4854e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94601ed6d4e7a3129e568d5055420a5c97965bd5b5581374061688d85e4854e6->enter($__internal_94601ed6d4e7a3129e568d5055420a5c97965bd5b5581374061688d85e4854e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 253
        $context["force_error"] = true;
        // line 254
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_94601ed6d4e7a3129e568d5055420a5c97965bd5b5581374061688d85e4854e6->leave($__internal_94601ed6d4e7a3129e568d5055420a5c97965bd5b5581374061688d85e4854e6_prof);

        
        $__internal_a946ea147cc950cbc4df64c11dc3096b95b66472b3c9fbd419bef496200d902f->leave($__internal_a946ea147cc950cbc4df64c11dc3096b95b66472b3c9fbd419bef496200d902f_prof);

    }

    // line 257
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_8ee0f6c6457f88b95da372c537d36993f766f97a119c84f4a1962165bd406974 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ee0f6c6457f88b95da372c537d36993f766f97a119c84f4a1962165bd406974->enter($__internal_8ee0f6c6457f88b95da372c537d36993f766f97a119c84f4a1962165bd406974_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_83f3907347f87e37d55e1cb49d80a2abbc32902354548123a6d213d119be1e5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83f3907347f87e37d55e1cb49d80a2abbc32902354548123a6d213d119be1e5a->enter($__internal_83f3907347f87e37d55e1cb49d80a2abbc32902354548123a6d213d119be1e5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 258
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 259
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 260
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 261
        echo "</div>";
        
        $__internal_83f3907347f87e37d55e1cb49d80a2abbc32902354548123a6d213d119be1e5a->leave($__internal_83f3907347f87e37d55e1cb49d80a2abbc32902354548123a6d213d119be1e5a_prof);

        
        $__internal_8ee0f6c6457f88b95da372c537d36993f766f97a119c84f4a1962165bd406974->leave($__internal_8ee0f6c6457f88b95da372c537d36993f766f97a119c84f4a1962165bd406974_prof);

    }

    // line 264
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_afc89d92f277036f542342d75c1a3efca0a49ff326e227c39b3eb8d378727146 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afc89d92f277036f542342d75c1a3efca0a49ff326e227c39b3eb8d378727146->enter($__internal_afc89d92f277036f542342d75c1a3efca0a49ff326e227c39b3eb8d378727146_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_98b6720d0cd5e9ce475fc9c75391c5c88da376f1cacbb1d56dcd9855e873b95a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98b6720d0cd5e9ce475fc9c75391c5c88da376f1cacbb1d56dcd9855e873b95a->enter($__internal_98b6720d0cd5e9ce475fc9c75391c5c88da376f1cacbb1d56dcd9855e873b95a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 265
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 266
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 267
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 268
        echo "</div>";
        
        $__internal_98b6720d0cd5e9ce475fc9c75391c5c88da376f1cacbb1d56dcd9855e873b95a->leave($__internal_98b6720d0cd5e9ce475fc9c75391c5c88da376f1cacbb1d56dcd9855e873b95a_prof);

        
        $__internal_afc89d92f277036f542342d75c1a3efca0a49ff326e227c39b3eb8d378727146->leave($__internal_afc89d92f277036f542342d75c1a3efca0a49ff326e227c39b3eb8d378727146_prof);

    }

    // line 273
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_de23a571113b1db5e2d4342e4894ccd6f31c82f14cb681e094529c8b91647a9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de23a571113b1db5e2d4342e4894ccd6f31c82f14cb681e094529c8b91647a9e->enter($__internal_de23a571113b1db5e2d4342e4894ccd6f31c82f14cb681e094529c8b91647a9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_69c736ff0b570bbd1b68e3798a3103c115b909ebaa3c72979c7ae8de717afeb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69c736ff0b570bbd1b68e3798a3103c115b909ebaa3c72979c7ae8de717afeb8->enter($__internal_69c736ff0b570bbd1b68e3798a3103c115b909ebaa3c72979c7ae8de717afeb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 274
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 275
            if ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array())) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 276
            echo "    <ul class=\"list-unstyled\">";
            // line 277
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 278
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 280
            echo "</ul>
    ";
            // line 281
            if ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array())) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_69c736ff0b570bbd1b68e3798a3103c115b909ebaa3c72979c7ae8de717afeb8->leave($__internal_69c736ff0b570bbd1b68e3798a3103c115b909ebaa3c72979c7ae8de717afeb8_prof);

        
        $__internal_de23a571113b1db5e2d4342e4894ccd6f31c82f14cb681e094529c8b91647a9e->leave($__internal_de23a571113b1db5e2d4342e4894ccd6f31c82f14cb681e094529c8b91647a9e_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1135 => 281,  1132 => 280,  1124 => 278,  1120 => 277,  1118 => 276,  1112 => 275,  1110 => 274,  1101 => 273,  1091 => 268,  1089 => 267,  1087 => 266,  1081 => 265,  1072 => 264,  1062 => 261,  1060 => 260,  1058 => 259,  1052 => 258,  1043 => 257,  1033 => 254,  1031 => 253,  1022 => 252,  1012 => 249,  1010 => 248,  1001 => 247,  991 => 244,  989 => 243,  980 => 242,  970 => 239,  968 => 238,  959 => 237,  949 => 234,  947 => 233,  945 => 232,  936 => 231,  926 => 228,  924 => 227,  922 => 226,  920 => 225,  914 => 224,  905 => 223,  893 => 217,  889 => 216,  874 => 215,  870 => 212,  867 => 209,  866 => 208,  865 => 207,  863 => 206,  860 => 205,  857 => 204,  854 => 203,  851 => 202,  848 => 201,  845 => 200,  842 => 199,  839 => 198,  837 => 197,  828 => 196,  818 => 193,  809 => 192,  799 => 189,  790 => 188,  780 => 185,  778 => 184,  769 => 182,  759 => 179,  757 => 178,  748 => 177,  737 => 171,  735 => 170,  733 => 169,  730 => 167,  728 => 166,  726 => 165,  717 => 164,  706 => 160,  704 => 159,  702 => 158,  699 => 156,  697 => 155,  695 => 154,  686 => 153,  675 => 149,  669 => 146,  668 => 145,  667 => 144,  663 => 143,  659 => 142,  652 => 138,  651 => 137,  650 => 136,  646 => 135,  644 => 134,  635 => 133,  625 => 130,  623 => 129,  614 => 128,  603 => 124,  599 => 123,  594 => 119,  588 => 118,  582 => 117,  576 => 116,  570 => 115,  564 => 114,  558 => 113,  552 => 112,  547 => 108,  541 => 107,  535 => 106,  529 => 105,  523 => 104,  517 => 103,  511 => 102,  505 => 101,  500 => 98,  497 => 97,  495 => 96,  491 => 95,  489 => 94,  486 => 92,  484 => 91,  475 => 90,  463 => 85,  460 => 84,  450 => 83,  445 => 81,  443 => 80,  441 => 79,  438 => 77,  436 => 76,  427 => 75,  415 => 70,  413 => 69,  411 => 67,  410 => 66,  409 => 65,  408 => 64,  403 => 62,  401 => 61,  399 => 60,  396 => 58,  394 => 57,  385 => 56,  374 => 52,  372 => 51,  370 => 50,  368 => 49,  366 => 48,  362 => 47,  360 => 46,  357 => 44,  355 => 43,  346 => 42,  335 => 38,  333 => 37,  331 => 36,  322 => 35,  312 => 32,  306 => 30,  304 => 29,  302 => 28,  296 => 26,  293 => 25,  291 => 24,  288 => 23,  279 => 22,  269 => 19,  267 => 18,  258 => 17,  248 => 14,  246 => 13,  237 => 12,  227 => 9,  224 => 7,  222 => 6,  213 => 5,  203 => 273,  200 => 272,  197 => 270,  195 => 264,  192 => 263,  190 => 257,  187 => 256,  185 => 252,  182 => 251,  180 => 247,  177 => 246,  175 => 242,  172 => 241,  170 => 237,  167 => 236,  165 => 231,  162 => 230,  160 => 223,  157 => 222,  154 => 220,  152 => 196,  149 => 195,  147 => 192,  144 => 191,  142 => 188,  139 => 187,  137 => 182,  134 => 181,  132 => 177,  129 => 176,  126 => 174,  124 => 164,  121 => 163,  119 => 153,  116 => 152,  114 => 133,  111 => 132,  109 => 128,  107 => 90,  105 => 75,  102 => 74,  100 => 56,  97 => 55,  95 => 42,  92 => 41,  90 => 35,  87 => 34,  85 => 22,  82 => 21,  80 => 17,  77 => 16,  75 => 12,  72 => 11,  70 => 5,  67 => 4,  64 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{# Widgets #}

{% block form_widget_simple -%}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block money_widget -%}
    <div class=\"input-group\">
        {% set append = money_pattern starts with '{{' %}
        {% if not append %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
        {{- block('form_widget_simple') -}}
        {% if append %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
    </div>
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"input-group\">
        {{- block('form_widget_simple') -}}
        <span class=\"input-group-addon\">%</span>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date, { datetime: true } ) -}}
            {{- form_widget(form.time, { datetime: true } ) -}}
        </div>
    {%- endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or not datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif %}
            {{- date_pattern|replace({
                '{{ year }}': form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}': form_widget(form.day),
            })|raw -}}
        {% if datetime is not defined or not datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or false == datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif -%}
        {{- form_widget(form.hour) }}{% if with_minutes %}:{{ form_widget(form.minute) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second) }}{% endif %}
        {% if datetime is not defined or false == datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock time_widget %}

{%- block dateinterval_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form) -}}
            <div class=\"table-responsive\">
                <table class=\"table {{ table_class|default('table-bordered table-condensed table-striped') }}\">
                    <thead>
                    <tr>
                        {%- if with_years %}<th>{{ form_label(form.years) }}</th>{% endif -%}
                        {%- if with_months %}<th>{{ form_label(form.months) }}</th>{% endif -%}
                        {%- if with_weeks %}<th>{{ form_label(form.weeks) }}</th>{% endif -%}
                        {%- if with_days %}<th>{{ form_label(form.days) }}</th>{% endif -%}
                        {%- if with_hours %}<th>{{ form_label(form.hours) }}</th>{% endif -%}
                        {%- if with_minutes %}<th>{{ form_label(form.minutes) }}</th>{% endif -%}
                        {%- if with_seconds %}<th>{{ form_label(form.seconds) }}</th>{% endif -%}
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        {%- if with_years %}<td>{{ form_widget(form.years) }}</td>{% endif -%}
                        {%- if with_months %}<td>{{ form_widget(form.months) }}</td>{% endif -%}
                        {%- if with_weeks %}<td>{{ form_widget(form.weeks) }}</td>{% endif -%}
                        {%- if with_days %}<td>{{ form_widget(form.days) }}</td>{% endif -%}
                        {%- if with_hours %}<td>{{ form_widget(form.hours) }}</td>{% endif -%}
                        {%- if with_minutes %}<td>{{ form_widget(form.minutes) }}</td>{% endif -%}
                        {%- if with_seconds %}<td>{{ form_widget(form.seconds) }}</td>{% endif -%}
                    </tr>
                    </tbody>
                </table>
            </div>
            {%- if with_invert %}{{ form_widget(form.invert) }}{% endif -%}
        </div>
    {%- endif -%}
{%- endblock dateinterval_widget -%}

{% block choice_widget_collapsed -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') -%}
        {%- for child in form %}
            {{- form_widget(child, {
                parent_label_class: label_attr.class|default(''),
                translation_domain: choice_translation_domain,
            }) -}}
        {% endfor -%}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                }) -}}
            {% endfor -%}
        </div>
    {%- endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'radio-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock %}

{% block checkbox_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label %}
    {# Do not display the label if widget is not defined in order to prevent double label rendering #}
    {% if widget is defined %}
        {% if required %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
        {% endif %}
        {% if parent_label_class is defined %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) %}
        {% endif %}
        {% if label is not same as(false) and label is empty %}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {% endif %}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        </label>
    {% endif %}
{% endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock form_row %}

{% block button_row -%}
    <div class=\"form-group\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
    {% if form.parent %}<span class=\"help-block\">{% else %}<div class=\"alert alert-danger\">{% endif %}
    <ul class=\"list-unstyled\">
        {%- for error in errors -%}
            <li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> {{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {% if form.parent %}</span>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "bootstrap_3_layout.html.twig", "/var/www/html/jComercial/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_3_layout.html.twig");
    }
}
