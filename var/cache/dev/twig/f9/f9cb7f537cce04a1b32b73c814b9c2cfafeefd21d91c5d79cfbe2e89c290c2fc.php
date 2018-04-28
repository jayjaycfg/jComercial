<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_6617c35e4b163bb5fa72e904f99f2d36ff92926e7d3b72951b8daaeb4b58cb94 extends Twig_Template
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
        $__internal_f3648b67073aa5729d4ad2e29d4baa4d51e1b15544f4b0abe4ff9fccc84aa1c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3648b67073aa5729d4ad2e29d4baa4d51e1b15544f4b0abe4ff9fccc84aa1c4->enter($__internal_f3648b67073aa5729d4ad2e29d4baa4d51e1b15544f4b0abe4ff9fccc84aa1c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_93fd40257f1d303e77e58e4906f2ac5500e0e27a47b0f3393ef444436a965caa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93fd40257f1d303e77e58e4906f2ac5500e0e27a47b0f3393ef444436a965caa->enter($__internal_93fd40257f1d303e77e58e4906f2ac5500e0e27a47b0f3393ef444436a965caa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

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
        
        $__internal_f3648b67073aa5729d4ad2e29d4baa4d51e1b15544f4b0abe4ff9fccc84aa1c4->leave($__internal_f3648b67073aa5729d4ad2e29d4baa4d51e1b15544f4b0abe4ff9fccc84aa1c4_prof);

        
        $__internal_93fd40257f1d303e77e58e4906f2ac5500e0e27a47b0f3393ef444436a965caa->leave($__internal_93fd40257f1d303e77e58e4906f2ac5500e0e27a47b0f3393ef444436a965caa_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_ffc97d1179de1252e2f7e2169f44ef7804de3a04e48785669ec0951441ad0f0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffc97d1179de1252e2f7e2169f44ef7804de3a04e48785669ec0951441ad0f0e->enter($__internal_ffc97d1179de1252e2f7e2169f44ef7804de3a04e48785669ec0951441ad0f0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_f42804661f0e63cd9ee2cd3e7962e64ee6121f38714065212e3aabbdf40e36e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f42804661f0e63cd9ee2cd3e7962e64ee6121f38714065212e3aabbdf40e36e3->enter($__internal_f42804661f0e63cd9ee2cd3e7962e64ee6121f38714065212e3aabbdf40e36e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter(($context["type"] ?? $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_f42804661f0e63cd9ee2cd3e7962e64ee6121f38714065212e3aabbdf40e36e3->leave($__internal_f42804661f0e63cd9ee2cd3e7962e64ee6121f38714065212e3aabbdf40e36e3_prof);

        
        $__internal_ffc97d1179de1252e2f7e2169f44ef7804de3a04e48785669ec0951441ad0f0e->leave($__internal_ffc97d1179de1252e2f7e2169f44ef7804de3a04e48785669ec0951441ad0f0e_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_72e4e54313f0e1f5958ee3b5766a0652f9be9658df42949bc649f08e951d2704 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72e4e54313f0e1f5958ee3b5766a0652f9be9658df42949bc649f08e951d2704->enter($__internal_72e4e54313f0e1f5958ee3b5766a0652f9be9658df42949bc649f08e951d2704_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_923901064950bbb5ebfd108c721bbc7e11d0e6eb39e0e2ed84b20c538586370d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_923901064950bbb5ebfd108c721bbc7e11d0e6eb39e0e2ed84b20c538586370d->enter($__internal_923901064950bbb5ebfd108c721bbc7e11d0e6eb39e0e2ed84b20c538586370d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_923901064950bbb5ebfd108c721bbc7e11d0e6eb39e0e2ed84b20c538586370d->leave($__internal_923901064950bbb5ebfd108c721bbc7e11d0e6eb39e0e2ed84b20c538586370d_prof);

        
        $__internal_72e4e54313f0e1f5958ee3b5766a0652f9be9658df42949bc649f08e951d2704->leave($__internal_72e4e54313f0e1f5958ee3b5766a0652f9be9658df42949bc649f08e951d2704_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_3c19dc515d91185740500d3d88c6237b06fd848d0529a687315bfe4d027bcfc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c19dc515d91185740500d3d88c6237b06fd848d0529a687315bfe4d027bcfc2->enter($__internal_3c19dc515d91185740500d3d88c6237b06fd848d0529a687315bfe4d027bcfc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_f11b22d4c682ba761ef4db5b5bb9dfde2db97b711c646e5853dea628571e7a42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f11b22d4c682ba761ef4db5b5bb9dfde2db97b711c646e5853dea628571e7a42->enter($__internal_f11b22d4c682ba761ef4db5b5bb9dfde2db97b711c646e5853dea628571e7a42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_f11b22d4c682ba761ef4db5b5bb9dfde2db97b711c646e5853dea628571e7a42->leave($__internal_f11b22d4c682ba761ef4db5b5bb9dfde2db97b711c646e5853dea628571e7a42_prof);

        
        $__internal_3c19dc515d91185740500d3d88c6237b06fd848d0529a687315bfe4d027bcfc2->leave($__internal_3c19dc515d91185740500d3d88c6237b06fd848d0529a687315bfe4d027bcfc2_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_ee424e5345594e205684100ba19e22582514a0e53114f98a2e52eadfe08fc4de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee424e5345594e205684100ba19e22582514a0e53114f98a2e52eadfe08fc4de->enter($__internal_ee424e5345594e205684100ba19e22582514a0e53114f98a2e52eadfe08fc4de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_951c4c0729d563e7b3913e783d5759e6f0e78d8755be1217795d303283728729 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_951c4c0729d563e7b3913e783d5759e6f0e78d8755be1217795d303283728729->enter($__internal_951c4c0729d563e7b3913e783d5759e6f0e78d8755be1217795d303283728729_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        echo "<div class=\"input-group\">
        ";
        // line 24
        $context["append"] = (is_string($__internal_e2adaa72c7ea27d862fd853e3e2c8c1d8c97ec62a0ee419fce3c0ed2daeb9c9b = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_8dfcf0b273f6da939c30913a330aae08bbe024ece6093592d5658cadd1e14413 = "{{") && ('' === $__internal_8dfcf0b273f6da939c30913a330aae08bbe024ece6093592d5658cadd1e14413 || 0 === strpos($__internal_e2adaa72c7ea27d862fd853e3e2c8c1d8c97ec62a0ee419fce3c0ed2daeb9c9b, $__internal_8dfcf0b273f6da939c30913a330aae08bbe024ece6093592d5658cadd1e14413)));
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
        
        $__internal_951c4c0729d563e7b3913e783d5759e6f0e78d8755be1217795d303283728729->leave($__internal_951c4c0729d563e7b3913e783d5759e6f0e78d8755be1217795d303283728729_prof);

        
        $__internal_ee424e5345594e205684100ba19e22582514a0e53114f98a2e52eadfe08fc4de->leave($__internal_ee424e5345594e205684100ba19e22582514a0e53114f98a2e52eadfe08fc4de_prof);

    }

    // line 35
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_4be6cf33019ed038edb6756cd8b208e1120977b635dfcbe0049789f98873ff9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4be6cf33019ed038edb6756cd8b208e1120977b635dfcbe0049789f98873ff9c->enter($__internal_4be6cf33019ed038edb6756cd8b208e1120977b635dfcbe0049789f98873ff9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_f3c746ccd4bf657d7b461ec5cab353746740e6c50fcb86ddccc647344dfb3557 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3c746ccd4bf657d7b461ec5cab353746740e6c50fcb86ddccc647344dfb3557->enter($__internal_f3c746ccd4bf657d7b461ec5cab353746740e6c50fcb86ddccc647344dfb3557_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 36
        echo "<div class=\"input-group\">";
        // line 37
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 38
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_f3c746ccd4bf657d7b461ec5cab353746740e6c50fcb86ddccc647344dfb3557->leave($__internal_f3c746ccd4bf657d7b461ec5cab353746740e6c50fcb86ddccc647344dfb3557_prof);

        
        $__internal_4be6cf33019ed038edb6756cd8b208e1120977b635dfcbe0049789f98873ff9c->leave($__internal_4be6cf33019ed038edb6756cd8b208e1120977b635dfcbe0049789f98873ff9c_prof);

    }

    // line 42
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_5dbf631f7e4e67872a6e79785f4d73bc49aba4bb8491ab8ac5de1dbd73b86f9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5dbf631f7e4e67872a6e79785f4d73bc49aba4bb8491ab8ac5de1dbd73b86f9b->enter($__internal_5dbf631f7e4e67872a6e79785f4d73bc49aba4bb8491ab8ac5de1dbd73b86f9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_c2e8af4eaa59526d74a3c6d5601995d42fae072acb8be90fb491a2cd1ecc6a97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2e8af4eaa59526d74a3c6d5601995d42fae072acb8be90fb491a2cd1ecc6a97->enter($__internal_c2e8af4eaa59526d74a3c6d5601995d42fae072acb8be90fb491a2cd1ecc6a97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

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
        
        $__internal_c2e8af4eaa59526d74a3c6d5601995d42fae072acb8be90fb491a2cd1ecc6a97->leave($__internal_c2e8af4eaa59526d74a3c6d5601995d42fae072acb8be90fb491a2cd1ecc6a97_prof);

        
        $__internal_5dbf631f7e4e67872a6e79785f4d73bc49aba4bb8491ab8ac5de1dbd73b86f9b->leave($__internal_5dbf631f7e4e67872a6e79785f4d73bc49aba4bb8491ab8ac5de1dbd73b86f9b_prof);

    }

    // line 56
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_19e7fb3257f9e79d1ea7271ed211918b9eb63aa93903372532b6d795c1329ca2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19e7fb3257f9e79d1ea7271ed211918b9eb63aa93903372532b6d795c1329ca2->enter($__internal_19e7fb3257f9e79d1ea7271ed211918b9eb63aa93903372532b6d795c1329ca2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_1f3c4faef3e121d20d6abbb5768ef3a58fefdb959e175d2352976bba0acac6f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f3c4faef3e121d20d6abbb5768ef3a58fefdb959e175d2352976bba0acac6f5->enter($__internal_1f3c4faef3e121d20d6abbb5768ef3a58fefdb959e175d2352976bba0acac6f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

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
        
        $__internal_1f3c4faef3e121d20d6abbb5768ef3a58fefdb959e175d2352976bba0acac6f5->leave($__internal_1f3c4faef3e121d20d6abbb5768ef3a58fefdb959e175d2352976bba0acac6f5_prof);

        
        $__internal_19e7fb3257f9e79d1ea7271ed211918b9eb63aa93903372532b6d795c1329ca2->leave($__internal_19e7fb3257f9e79d1ea7271ed211918b9eb63aa93903372532b6d795c1329ca2_prof);

    }

    // line 75
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_13f898fa73bed46da058b6cf7a08ad9645adcd27402761afb852f35331a52003 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13f898fa73bed46da058b6cf7a08ad9645adcd27402761afb852f35331a52003->enter($__internal_13f898fa73bed46da058b6cf7a08ad9645adcd27402761afb852f35331a52003_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_d6b9a1000c80694513e4d1c130b5234b3500b424529053a265c45b82a98cb6c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6b9a1000c80694513e4d1c130b5234b3500b424529053a265c45b82a98cb6c3->enter($__internal_d6b9a1000c80694513e4d1c130b5234b3500b424529053a265c45b82a98cb6c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

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
        
        $__internal_d6b9a1000c80694513e4d1c130b5234b3500b424529053a265c45b82a98cb6c3->leave($__internal_d6b9a1000c80694513e4d1c130b5234b3500b424529053a265c45b82a98cb6c3_prof);

        
        $__internal_13f898fa73bed46da058b6cf7a08ad9645adcd27402761afb852f35331a52003->leave($__internal_13f898fa73bed46da058b6cf7a08ad9645adcd27402761afb852f35331a52003_prof);

    }

    // line 90
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_659b8e89c73081158266a26de3013ccb3e5c3d2f46c2a744af153394409f4354 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_659b8e89c73081158266a26de3013ccb3e5c3d2f46c2a744af153394409f4354->enter($__internal_659b8e89c73081158266a26de3013ccb3e5c3d2f46c2a744af153394409f4354_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_74c8e25e550c6e52947b60fd01cf2c8c83d977526e8ede46886fef6a69d1a9e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74c8e25e550c6e52947b60fd01cf2c8c83d977526e8ede46886fef6a69d1a9e1->enter($__internal_74c8e25e550c6e52947b60fd01cf2c8c83d977526e8ede46886fef6a69d1a9e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

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
        
        $__internal_74c8e25e550c6e52947b60fd01cf2c8c83d977526e8ede46886fef6a69d1a9e1->leave($__internal_74c8e25e550c6e52947b60fd01cf2c8c83d977526e8ede46886fef6a69d1a9e1_prof);

        
        $__internal_659b8e89c73081158266a26de3013ccb3e5c3d2f46c2a744af153394409f4354->leave($__internal_659b8e89c73081158266a26de3013ccb3e5c3d2f46c2a744af153394409f4354_prof);

    }

    // line 128
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_2aa4fe31c3da4f332ad98afb8d062301585b95cf28566ca10067610769aec9d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2aa4fe31c3da4f332ad98afb8d062301585b95cf28566ca10067610769aec9d2->enter($__internal_2aa4fe31c3da4f332ad98afb8d062301585b95cf28566ca10067610769aec9d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_8592283baf11b06beaea58656c630042c41ed9cdb6d406c16f3785058e31a431 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8592283baf11b06beaea58656c630042c41ed9cdb6d406c16f3785058e31a431->enter($__internal_8592283baf11b06beaea58656c630042c41ed9cdb6d406c16f3785058e31a431_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 129
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 130
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_8592283baf11b06beaea58656c630042c41ed9cdb6d406c16f3785058e31a431->leave($__internal_8592283baf11b06beaea58656c630042c41ed9cdb6d406c16f3785058e31a431_prof);

        
        $__internal_2aa4fe31c3da4f332ad98afb8d062301585b95cf28566ca10067610769aec9d2->leave($__internal_2aa4fe31c3da4f332ad98afb8d062301585b95cf28566ca10067610769aec9d2_prof);

    }

    // line 133
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_5efe5d9070ff95e5cdf57e810f9661d2423d8f5117c2900bb9b8700ab43a15f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5efe5d9070ff95e5cdf57e810f9661d2423d8f5117c2900bb9b8700ab43a15f5->enter($__internal_5efe5d9070ff95e5cdf57e810f9661d2423d8f5117c2900bb9b8700ab43a15f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_afb8b09346d500adc4404edd80379de348b9e31e93e5fa0d5a1df30417aef90a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afb8b09346d500adc4404edd80379de348b9e31e93e5fa0d5a1df30417aef90a->enter($__internal_afb8b09346d500adc4404edd80379de348b9e31e93e5fa0d5a1df30417aef90a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

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
        
        $__internal_afb8b09346d500adc4404edd80379de348b9e31e93e5fa0d5a1df30417aef90a->leave($__internal_afb8b09346d500adc4404edd80379de348b9e31e93e5fa0d5a1df30417aef90a_prof);

        
        $__internal_5efe5d9070ff95e5cdf57e810f9661d2423d8f5117c2900bb9b8700ab43a15f5->leave($__internal_5efe5d9070ff95e5cdf57e810f9661d2423d8f5117c2900bb9b8700ab43a15f5_prof);

    }

    // line 153
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_a40d5844ae4aea5e0fe08272b7aa3ed0f25e6e33db90a9a0810389ecf9dc9529 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a40d5844ae4aea5e0fe08272b7aa3ed0f25e6e33db90a9a0810389ecf9dc9529->enter($__internal_a40d5844ae4aea5e0fe08272b7aa3ed0f25e6e33db90a9a0810389ecf9dc9529_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_18f2b48f7da42bb7f133b266d9091e9f2d0087ebdc143700cf04778959896753 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18f2b48f7da42bb7f133b266d9091e9f2d0087ebdc143700cf04778959896753->enter($__internal_18f2b48f7da42bb7f133b266d9091e9f2d0087ebdc143700cf04778959896753_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_18f2b48f7da42bb7f133b266d9091e9f2d0087ebdc143700cf04778959896753->leave($__internal_18f2b48f7da42bb7f133b266d9091e9f2d0087ebdc143700cf04778959896753_prof);

        
        $__internal_a40d5844ae4aea5e0fe08272b7aa3ed0f25e6e33db90a9a0810389ecf9dc9529->leave($__internal_a40d5844ae4aea5e0fe08272b7aa3ed0f25e6e33db90a9a0810389ecf9dc9529_prof);

    }

    // line 164
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_b4c38604672c784b6c20dc1ba49ba9a944f6228fbb0345d585839c4ae4a0f271 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4c38604672c784b6c20dc1ba49ba9a944f6228fbb0345d585839c4ae4a0f271->enter($__internal_b4c38604672c784b6c20dc1ba49ba9a944f6228fbb0345d585839c4ae4a0f271_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_8b83b7014addd4c35a84cd1d1886d59156074df794eac52b2bbd44a3f9d63a26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b83b7014addd4c35a84cd1d1886d59156074df794eac52b2bbd44a3f9d63a26->enter($__internal_8b83b7014addd4c35a84cd1d1886d59156074df794eac52b2bbd44a3f9d63a26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

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
        
        $__internal_8b83b7014addd4c35a84cd1d1886d59156074df794eac52b2bbd44a3f9d63a26->leave($__internal_8b83b7014addd4c35a84cd1d1886d59156074df794eac52b2bbd44a3f9d63a26_prof);

        
        $__internal_b4c38604672c784b6c20dc1ba49ba9a944f6228fbb0345d585839c4ae4a0f271->leave($__internal_b4c38604672c784b6c20dc1ba49ba9a944f6228fbb0345d585839c4ae4a0f271_prof);

    }

    // line 177
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_a0033ba0ce0d56b2bc6621dba6a1040e415de26388847478102fd012b43304d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0033ba0ce0d56b2bc6621dba6a1040e415de26388847478102fd012b43304d2->enter($__internal_a0033ba0ce0d56b2bc6621dba6a1040e415de26388847478102fd012b43304d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_d5612eef0b7c74b206665e6d2d0818fa50e80b94ffa4946874741ee5a23b780a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5612eef0b7c74b206665e6d2d0818fa50e80b94ffa4946874741ee5a23b780a->enter($__internal_d5612eef0b7c74b206665e6d2d0818fa50e80b94ffa4946874741ee5a23b780a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 178
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 179
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_d5612eef0b7c74b206665e6d2d0818fa50e80b94ffa4946874741ee5a23b780a->leave($__internal_d5612eef0b7c74b206665e6d2d0818fa50e80b94ffa4946874741ee5a23b780a_prof);

        
        $__internal_a0033ba0ce0d56b2bc6621dba6a1040e415de26388847478102fd012b43304d2->leave($__internal_a0033ba0ce0d56b2bc6621dba6a1040e415de26388847478102fd012b43304d2_prof);

    }

    // line 182
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_904ef4887781bb2b325c3b06bcd67b67a496d772d3402f9873773dc5a13c70f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_904ef4887781bb2b325c3b06bcd67b67a496d772d3402f9873773dc5a13c70f2->enter($__internal_904ef4887781bb2b325c3b06bcd67b67a496d772d3402f9873773dc5a13c70f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_d04a38e966c2edbacd20608b562179052cec0c618fc009f4f137dbbb5c69cc76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d04a38e966c2edbacd20608b562179052cec0c618fc009f4f137dbbb5c69cc76->enter($__internal_d04a38e966c2edbacd20608b562179052cec0c618fc009f4f137dbbb5c69cc76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 184
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 185
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_d04a38e966c2edbacd20608b562179052cec0c618fc009f4f137dbbb5c69cc76->leave($__internal_d04a38e966c2edbacd20608b562179052cec0c618fc009f4f137dbbb5c69cc76_prof);

        
        $__internal_904ef4887781bb2b325c3b06bcd67b67a496d772d3402f9873773dc5a13c70f2->leave($__internal_904ef4887781bb2b325c3b06bcd67b67a496d772d3402f9873773dc5a13c70f2_prof);

    }

    // line 188
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_fd225959316e802084fc93c2c3167ae590735b06e11cd84b3b5563a8b46221fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd225959316e802084fc93c2c3167ae590735b06e11cd84b3b5563a8b46221fb->enter($__internal_fd225959316e802084fc93c2c3167ae590735b06e11cd84b3b5563a8b46221fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_e562e9740c36dd036c18524e4d2a72da670e964d1b24ed73fd5f49762e2f4ed9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e562e9740c36dd036c18524e4d2a72da670e964d1b24ed73fd5f49762e2f4ed9->enter($__internal_e562e9740c36dd036c18524e4d2a72da670e964d1b24ed73fd5f49762e2f4ed9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 189
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_e562e9740c36dd036c18524e4d2a72da670e964d1b24ed73fd5f49762e2f4ed9->leave($__internal_e562e9740c36dd036c18524e4d2a72da670e964d1b24ed73fd5f49762e2f4ed9_prof);

        
        $__internal_fd225959316e802084fc93c2c3167ae590735b06e11cd84b3b5563a8b46221fb->leave($__internal_fd225959316e802084fc93c2c3167ae590735b06e11cd84b3b5563a8b46221fb_prof);

    }

    // line 192
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_0626788bef19b00dac5f549bb6a17a26c43bfb8173ca64979af39e83ae6ed982 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0626788bef19b00dac5f549bb6a17a26c43bfb8173ca64979af39e83ae6ed982->enter($__internal_0626788bef19b00dac5f549bb6a17a26c43bfb8173ca64979af39e83ae6ed982_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_07d22cd9b20f74901ae29ce823a748fde6b67b58e6f9d189fe3c9617d1779c88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07d22cd9b20f74901ae29ce823a748fde6b67b58e6f9d189fe3c9617d1779c88->enter($__internal_07d22cd9b20f74901ae29ce823a748fde6b67b58e6f9d189fe3c9617d1779c88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 193
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_07d22cd9b20f74901ae29ce823a748fde6b67b58e6f9d189fe3c9617d1779c88->leave($__internal_07d22cd9b20f74901ae29ce823a748fde6b67b58e6f9d189fe3c9617d1779c88_prof);

        
        $__internal_0626788bef19b00dac5f549bb6a17a26c43bfb8173ca64979af39e83ae6ed982->leave($__internal_0626788bef19b00dac5f549bb6a17a26c43bfb8173ca64979af39e83ae6ed982_prof);

    }

    // line 196
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_f354d9a08589c428fe95c6cf27a347824bb2c6332cc754e50938b9ccee74f661 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f354d9a08589c428fe95c6cf27a347824bb2c6332cc754e50938b9ccee74f661->enter($__internal_f354d9a08589c428fe95c6cf27a347824bb2c6332cc754e50938b9ccee74f661_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_4fcc0d0c43caa27ab2f3e297124457aafd5025cf753097615a6aed1ba8947851 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fcc0d0c43caa27ab2f3e297124457aafd5025cf753097615a6aed1ba8947851->enter($__internal_4fcc0d0c43caa27ab2f3e297124457aafd5025cf753097615a6aed1ba8947851_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

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
        
        $__internal_4fcc0d0c43caa27ab2f3e297124457aafd5025cf753097615a6aed1ba8947851->leave($__internal_4fcc0d0c43caa27ab2f3e297124457aafd5025cf753097615a6aed1ba8947851_prof);

        
        $__internal_f354d9a08589c428fe95c6cf27a347824bb2c6332cc754e50938b9ccee74f661->leave($__internal_f354d9a08589c428fe95c6cf27a347824bb2c6332cc754e50938b9ccee74f661_prof);

    }

    // line 223
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_ea554179fb25523d127c6c1fe2083d1136a211868dc881c67fd6932632a39b44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea554179fb25523d127c6c1fe2083d1136a211868dc881c67fd6932632a39b44->enter($__internal_ea554179fb25523d127c6c1fe2083d1136a211868dc881c67fd6932632a39b44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_b5c402810034012196387692c32a31f7c03c9bb2485b110f3209356632d515e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5c402810034012196387692c32a31f7c03c9bb2485b110f3209356632d515e1->enter($__internal_b5c402810034012196387692c32a31f7c03c9bb2485b110f3209356632d515e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_b5c402810034012196387692c32a31f7c03c9bb2485b110f3209356632d515e1->leave($__internal_b5c402810034012196387692c32a31f7c03c9bb2485b110f3209356632d515e1_prof);

        
        $__internal_ea554179fb25523d127c6c1fe2083d1136a211868dc881c67fd6932632a39b44->leave($__internal_ea554179fb25523d127c6c1fe2083d1136a211868dc881c67fd6932632a39b44_prof);

    }

    // line 231
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_d8c9f29db9b35010ab3e62effb1ef533a2c00ea7684f842e0c12aba1000652f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8c9f29db9b35010ab3e62effb1ef533a2c00ea7684f842e0c12aba1000652f3->enter($__internal_d8c9f29db9b35010ab3e62effb1ef533a2c00ea7684f842e0c12aba1000652f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_20d55f442c3e50f5cc8b8f5e16c1c361be9d9818416b26a8045fa0a1955bf078 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20d55f442c3e50f5cc8b8f5e16c1c361be9d9818416b26a8045fa0a1955bf078->enter($__internal_20d55f442c3e50f5cc8b8f5e16c1c361be9d9818416b26a8045fa0a1955bf078_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 232
        echo "<div class=\"form-group\">";
        // line 233
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 234
        echo "</div>";
        
        $__internal_20d55f442c3e50f5cc8b8f5e16c1c361be9d9818416b26a8045fa0a1955bf078->leave($__internal_20d55f442c3e50f5cc8b8f5e16c1c361be9d9818416b26a8045fa0a1955bf078_prof);

        
        $__internal_d8c9f29db9b35010ab3e62effb1ef533a2c00ea7684f842e0c12aba1000652f3->leave($__internal_d8c9f29db9b35010ab3e62effb1ef533a2c00ea7684f842e0c12aba1000652f3_prof);

    }

    // line 237
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_7e1ec771fd9b28c646625deda74fcd97871359c4c15721d3a2aac278680a8caf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e1ec771fd9b28c646625deda74fcd97871359c4c15721d3a2aac278680a8caf->enter($__internal_7e1ec771fd9b28c646625deda74fcd97871359c4c15721d3a2aac278680a8caf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_4ff71136e6ddbda4c79b2e03abd9ecb5d35155f094f33d6a843a09c984164113 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ff71136e6ddbda4c79b2e03abd9ecb5d35155f094f33d6a843a09c984164113->enter($__internal_4ff71136e6ddbda4c79b2e03abd9ecb5d35155f094f33d6a843a09c984164113_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 238
        $context["force_error"] = true;
        // line 239
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_4ff71136e6ddbda4c79b2e03abd9ecb5d35155f094f33d6a843a09c984164113->leave($__internal_4ff71136e6ddbda4c79b2e03abd9ecb5d35155f094f33d6a843a09c984164113_prof);

        
        $__internal_7e1ec771fd9b28c646625deda74fcd97871359c4c15721d3a2aac278680a8caf->leave($__internal_7e1ec771fd9b28c646625deda74fcd97871359c4c15721d3a2aac278680a8caf_prof);

    }

    // line 242
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_649634b1d833841e0a7cd74b24476e20b2b1189413be24c7f80166590f5fc9e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_649634b1d833841e0a7cd74b24476e20b2b1189413be24c7f80166590f5fc9e7->enter($__internal_649634b1d833841e0a7cd74b24476e20b2b1189413be24c7f80166590f5fc9e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_58ba8d36b1f6128d4c7c4aa765d8dd494999c4b2007b0af3cb7809d4c69565ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58ba8d36b1f6128d4c7c4aa765d8dd494999c4b2007b0af3cb7809d4c69565ac->enter($__internal_58ba8d36b1f6128d4c7c4aa765d8dd494999c4b2007b0af3cb7809d4c69565ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 243
        $context["force_error"] = true;
        // line 244
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_58ba8d36b1f6128d4c7c4aa765d8dd494999c4b2007b0af3cb7809d4c69565ac->leave($__internal_58ba8d36b1f6128d4c7c4aa765d8dd494999c4b2007b0af3cb7809d4c69565ac_prof);

        
        $__internal_649634b1d833841e0a7cd74b24476e20b2b1189413be24c7f80166590f5fc9e7->leave($__internal_649634b1d833841e0a7cd74b24476e20b2b1189413be24c7f80166590f5fc9e7_prof);

    }

    // line 247
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_1aba73aec2b95ad20e1eaa704bc342684dab882e4563ff70f1445eea82bbd294 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1aba73aec2b95ad20e1eaa704bc342684dab882e4563ff70f1445eea82bbd294->enter($__internal_1aba73aec2b95ad20e1eaa704bc342684dab882e4563ff70f1445eea82bbd294_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_5c7313def923ff3a3ba6cdf0942970e1d2ebda1ee40c89b8e32b195700423e01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c7313def923ff3a3ba6cdf0942970e1d2ebda1ee40c89b8e32b195700423e01->enter($__internal_5c7313def923ff3a3ba6cdf0942970e1d2ebda1ee40c89b8e32b195700423e01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 248
        $context["force_error"] = true;
        // line 249
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_5c7313def923ff3a3ba6cdf0942970e1d2ebda1ee40c89b8e32b195700423e01->leave($__internal_5c7313def923ff3a3ba6cdf0942970e1d2ebda1ee40c89b8e32b195700423e01_prof);

        
        $__internal_1aba73aec2b95ad20e1eaa704bc342684dab882e4563ff70f1445eea82bbd294->leave($__internal_1aba73aec2b95ad20e1eaa704bc342684dab882e4563ff70f1445eea82bbd294_prof);

    }

    // line 252
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_95c24bcfdea4b9f6e15d138262dde1f88fd22e61365a291d183ca4ab2ff52797 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95c24bcfdea4b9f6e15d138262dde1f88fd22e61365a291d183ca4ab2ff52797->enter($__internal_95c24bcfdea4b9f6e15d138262dde1f88fd22e61365a291d183ca4ab2ff52797_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_b63eadad9c8c5a907d37bae3e69fb612f42e8ac4663822c6146efbee386f8a33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b63eadad9c8c5a907d37bae3e69fb612f42e8ac4663822c6146efbee386f8a33->enter($__internal_b63eadad9c8c5a907d37bae3e69fb612f42e8ac4663822c6146efbee386f8a33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 253
        $context["force_error"] = true;
        // line 254
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_b63eadad9c8c5a907d37bae3e69fb612f42e8ac4663822c6146efbee386f8a33->leave($__internal_b63eadad9c8c5a907d37bae3e69fb612f42e8ac4663822c6146efbee386f8a33_prof);

        
        $__internal_95c24bcfdea4b9f6e15d138262dde1f88fd22e61365a291d183ca4ab2ff52797->leave($__internal_95c24bcfdea4b9f6e15d138262dde1f88fd22e61365a291d183ca4ab2ff52797_prof);

    }

    // line 257
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_760ac86d8683a2adc16c81babf41e64b735dbd5041a73fefb9ea6b61dcc0d345 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_760ac86d8683a2adc16c81babf41e64b735dbd5041a73fefb9ea6b61dcc0d345->enter($__internal_760ac86d8683a2adc16c81babf41e64b735dbd5041a73fefb9ea6b61dcc0d345_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_91b86a4dcbac88594d6499f069fbc929709edb48656b2c2d7a7af5294ec29b69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91b86a4dcbac88594d6499f069fbc929709edb48656b2c2d7a7af5294ec29b69->enter($__internal_91b86a4dcbac88594d6499f069fbc929709edb48656b2c2d7a7af5294ec29b69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_91b86a4dcbac88594d6499f069fbc929709edb48656b2c2d7a7af5294ec29b69->leave($__internal_91b86a4dcbac88594d6499f069fbc929709edb48656b2c2d7a7af5294ec29b69_prof);

        
        $__internal_760ac86d8683a2adc16c81babf41e64b735dbd5041a73fefb9ea6b61dcc0d345->leave($__internal_760ac86d8683a2adc16c81babf41e64b735dbd5041a73fefb9ea6b61dcc0d345_prof);

    }

    // line 264
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_7e81a14b7f57bc21bc4ce5b9bd3a07a8b81ab184a966ac235c85c7e6166382ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e81a14b7f57bc21bc4ce5b9bd3a07a8b81ab184a966ac235c85c7e6166382ec->enter($__internal_7e81a14b7f57bc21bc4ce5b9bd3a07a8b81ab184a966ac235c85c7e6166382ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_5ffe449093f1fad0ed30b736e46300cf17d014dc5aba5a80b4f32f8549f1c6bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ffe449093f1fad0ed30b736e46300cf17d014dc5aba5a80b4f32f8549f1c6bb->enter($__internal_5ffe449093f1fad0ed30b736e46300cf17d014dc5aba5a80b4f32f8549f1c6bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

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
        
        $__internal_5ffe449093f1fad0ed30b736e46300cf17d014dc5aba5a80b4f32f8549f1c6bb->leave($__internal_5ffe449093f1fad0ed30b736e46300cf17d014dc5aba5a80b4f32f8549f1c6bb_prof);

        
        $__internal_7e81a14b7f57bc21bc4ce5b9bd3a07a8b81ab184a966ac235c85c7e6166382ec->leave($__internal_7e81a14b7f57bc21bc4ce5b9bd3a07a8b81ab184a966ac235c85c7e6166382ec_prof);

    }

    // line 273
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_d92f949e6ff137ecb2d99b20e4f1b914815fd9e4c7bbd84a62bee44c5b66f6f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d92f949e6ff137ecb2d99b20e4f1b914815fd9e4c7bbd84a62bee44c5b66f6f6->enter($__internal_d92f949e6ff137ecb2d99b20e4f1b914815fd9e4c7bbd84a62bee44c5b66f6f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_71d8443e127dd60dc04db5eda4a060a34d2b3f20007e6dbb4125bd41d771d510 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71d8443e127dd60dc04db5eda4a060a34d2b3f20007e6dbb4125bd41d771d510->enter($__internal_71d8443e127dd60dc04db5eda4a060a34d2b3f20007e6dbb4125bd41d771d510_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_71d8443e127dd60dc04db5eda4a060a34d2b3f20007e6dbb4125bd41d771d510->leave($__internal_71d8443e127dd60dc04db5eda4a060a34d2b3f20007e6dbb4125bd41d771d510_prof);

        
        $__internal_d92f949e6ff137ecb2d99b20e4f1b914815fd9e4c7bbd84a62bee44c5b66f6f6->leave($__internal_d92f949e6ff137ecb2d99b20e4f1b914815fd9e4c7bbd84a62bee44c5b66f6f6_prof);

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
", "bootstrap_3_layout.html.twig", "/var/www/html/HeroQuest/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_3_layout.html.twig");
    }
}
