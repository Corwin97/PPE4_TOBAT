<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_37a2b8842ee708c26f6fa6e486014cd70fc5b8eb23a3963d7365c6bde6c61abc extends Twig_Template
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
        $__internal_772826054537904be646a96c5c4c874389394904dbf03d3f6a417c9c768f5971 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_772826054537904be646a96c5c4c874389394904dbf03d3f6a417c9c768f5971->enter($__internal_772826054537904be646a96c5c4c874389394904dbf03d3f6a417c9c768f5971_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_250e1926040a6b029964d2a436e55d0f2670a6f042c099693f6e8a43ee9d6b9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_250e1926040a6b029964d2a436e55d0f2670a6f042c099693f6e8a43ee9d6b9b->enter($__internal_250e1926040a6b029964d2a436e55d0f2670a6f042c099693f6e8a43ee9d6b9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

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
        // line 39
        echo "
";
        // line 40
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 46
        echo "
";
        // line 47
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 60
        echo "
";
        // line 61
        $this->displayBlock('date_widget', $context, $blocks);
        // line 79
        echo "
";
        // line 80
        $this->displayBlock('time_widget', $context, $blocks);
        // line 95
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 133
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 137
        echo "
";
        // line 138
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 157
        echo "
";
        // line 158
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 168
        echo "
";
        // line 169
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 179
        echo "
";
        // line 181
        echo "
";
        // line 182
        $this->displayBlock('form_label', $context, $blocks);
        // line 186
        echo "
";
        // line 187
        $this->displayBlock('choice_label', $context, $blocks);
        // line 192
        echo "
";
        // line 193
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 198
        echo "
";
        // line 199
        $this->displayBlock('radio_label', $context, $blocks);
        // line 204
        echo "
";
        // line 205
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 229
        echo "
";
        // line 231
        echo "
";
        // line 232
        $this->displayBlock('form_row', $context, $blocks);
        // line 239
        echo "
";
        // line 240
        $this->displayBlock('button_row', $context, $blocks);
        // line 245
        echo "
";
        // line 246
        $this->displayBlock('choice_row', $context, $blocks);
        // line 250
        echo "
";
        // line 251
        $this->displayBlock('date_row', $context, $blocks);
        // line 255
        echo "
";
        // line 256
        $this->displayBlock('time_row', $context, $blocks);
        // line 260
        echo "
";
        // line 261
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 265
        echo "
";
        // line 266
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 272
        echo "
";
        // line 273
        $this->displayBlock('radio_row', $context, $blocks);
        // line 279
        echo "
";
        // line 281
        echo "
";
        // line 282
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_772826054537904be646a96c5c4c874389394904dbf03d3f6a417c9c768f5971->leave($__internal_772826054537904be646a96c5c4c874389394904dbf03d3f6a417c9c768f5971_prof);

        
        $__internal_250e1926040a6b029964d2a436e55d0f2670a6f042c099693f6e8a43ee9d6b9b->leave($__internal_250e1926040a6b029964d2a436e55d0f2670a6f042c099693f6e8a43ee9d6b9b_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_ce232c42a2634048457701966a666e288df842ad0b0d9a6ccf48d6c61cc61746 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce232c42a2634048457701966a666e288df842ad0b0d9a6ccf48d6c61cc61746->enter($__internal_ce232c42a2634048457701966a666e288df842ad0b0d9a6ccf48d6c61cc61746_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_875142f467ab382dc395ab55c6d85f76f81e91a09d931723ed63565b566d98b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_875142f467ab382dc395ab55c6d85f76f81e91a09d931723ed63565b566d98b0->enter($__internal_875142f467ab382dc395ab55c6d85f76f81e91a09d931723ed63565b566d98b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_875142f467ab382dc395ab55c6d85f76f81e91a09d931723ed63565b566d98b0->leave($__internal_875142f467ab382dc395ab55c6d85f76f81e91a09d931723ed63565b566d98b0_prof);

        
        $__internal_ce232c42a2634048457701966a666e288df842ad0b0d9a6ccf48d6c61cc61746->leave($__internal_ce232c42a2634048457701966a666e288df842ad0b0d9a6ccf48d6c61cc61746_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_0985e7cdb7ae9e3c806ab40269eeddb549256118a44de2be929eb93359099039 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0985e7cdb7ae9e3c806ab40269eeddb549256118a44de2be929eb93359099039->enter($__internal_0985e7cdb7ae9e3c806ab40269eeddb549256118a44de2be929eb93359099039_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_27fa5b72923ea8722d599a153ab600909ec5bc7f6b5813a65927e12c7b290573 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27fa5b72923ea8722d599a153ab600909ec5bc7f6b5813a65927e12c7b290573->enter($__internal_27fa5b72923ea8722d599a153ab600909ec5bc7f6b5813a65927e12c7b290573_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_27fa5b72923ea8722d599a153ab600909ec5bc7f6b5813a65927e12c7b290573->leave($__internal_27fa5b72923ea8722d599a153ab600909ec5bc7f6b5813a65927e12c7b290573_prof);

        
        $__internal_0985e7cdb7ae9e3c806ab40269eeddb549256118a44de2be929eb93359099039->leave($__internal_0985e7cdb7ae9e3c806ab40269eeddb549256118a44de2be929eb93359099039_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_87b7f5cea862c162fda2590799eafcddc07cc54bb54d8dcdc1b9b936d966fedc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87b7f5cea862c162fda2590799eafcddc07cc54bb54d8dcdc1b9b936d966fedc->enter($__internal_87b7f5cea862c162fda2590799eafcddc07cc54bb54d8dcdc1b9b936d966fedc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_1d8302b22cb804ab9151289501565ca41aeeb665c7ec7950b9178cfd877decc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d8302b22cb804ab9151289501565ca41aeeb665c7ec7950b9178cfd877decc1->enter($__internal_1d8302b22cb804ab9151289501565ca41aeeb665c7ec7950b9178cfd877decc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_1d8302b22cb804ab9151289501565ca41aeeb665c7ec7950b9178cfd877decc1->leave($__internal_1d8302b22cb804ab9151289501565ca41aeeb665c7ec7950b9178cfd877decc1_prof);

        
        $__internal_87b7f5cea862c162fda2590799eafcddc07cc54bb54d8dcdc1b9b936d966fedc->leave($__internal_87b7f5cea862c162fda2590799eafcddc07cc54bb54d8dcdc1b9b936d966fedc_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_585ecfe88d4822afbb0942fb838fbff8ad7033a36c471c34229f22bf39a90f49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_585ecfe88d4822afbb0942fb838fbff8ad7033a36c471c34229f22bf39a90f49->enter($__internal_585ecfe88d4822afbb0942fb838fbff8ad7033a36c471c34229f22bf39a90f49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_ecea342bf6faa37f2a8e1879030ca75a9dafbdec3d17b15f3b7e8dbbb987a3df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecea342bf6faa37f2a8e1879030ca75a9dafbdec3d17b15f3b7e8dbbb987a3df->enter($__internal_ecea342bf6faa37f2a8e1879030ca75a9dafbdec3d17b15f3b7e8dbbb987a3df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        $context["prepend"] =  !(is_string($__internal_6073dbc40ebf77bf5bf5a5d6e895f0f73032b35aca0be42d9483c74ddb48c308 = (isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern"))) && is_string($__internal_2e51ac9f52e8c31fc81340dcf8c03b188ac547451775a0ff9d1d69eb440d67c3 = "{{") && ('' === $__internal_2e51ac9f52e8c31fc81340dcf8c03b188ac547451775a0ff9d1d69eb440d67c3 || 0 === strpos($__internal_6073dbc40ebf77bf5bf5a5d6e895f0f73032b35aca0be42d9483c74ddb48c308, $__internal_2e51ac9f52e8c31fc81340dcf8c03b188ac547451775a0ff9d1d69eb440d67c3)));
        // line 24
        echo "    ";
        $context["append"] =  !(is_string($__internal_60e84b479d09d55f866e854280edc0dc76328f97b686bfedbd33ac54be0a1d1a = (isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern"))) && is_string($__internal_ee85b3b8938980846798a953e7fdc700b4d2985857206326f41c356c2eff0f80 = "}}") && ('' === $__internal_ee85b3b8938980846798a953e7fdc700b4d2985857206326f41c356c2eff0f80 || $__internal_ee85b3b8938980846798a953e7fdc700b4d2985857206326f41c356c2eff0f80 === substr($__internal_60e84b479d09d55f866e854280edc0dc76328f97b686bfedbd33ac54be0a1d1a, -strlen($__internal_ee85b3b8938980846798a953e7fdc700b4d2985857206326f41c356c2eff0f80))));
        // line 25
        echo "    ";
        if (((isset($context["prepend"]) ? $context["prepend"] : $this->getContext($context, "prepend")) || (isset($context["append"]) ? $context["append"] : $this->getContext($context, "append")))) {
            // line 26
            echo "        <div class=\"input-group\">
            ";
            // line 27
            if ((isset($context["prepend"]) ? $context["prepend"] : $this->getContext($context, "prepend"))) {
                // line 28
                echo "                <span class=\"input-group-addon\">";
                echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
                echo "</span>
            ";
            }
            // line 30
            $this->displayBlock("form_widget_simple", $context, $blocks);
            // line 31
            if ((isset($context["append"]) ? $context["append"] : $this->getContext($context, "append"))) {
                // line 32
                echo "                <span class=\"input-group-addon\">";
                echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
                echo "</span>
            ";
            }
            // line 34
            echo "        </div>
    ";
        } else {
            // line 36
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        
        $__internal_ecea342bf6faa37f2a8e1879030ca75a9dafbdec3d17b15f3b7e8dbbb987a3df->leave($__internal_ecea342bf6faa37f2a8e1879030ca75a9dafbdec3d17b15f3b7e8dbbb987a3df_prof);

        
        $__internal_585ecfe88d4822afbb0942fb838fbff8ad7033a36c471c34229f22bf39a90f49->leave($__internal_585ecfe88d4822afbb0942fb838fbff8ad7033a36c471c34229f22bf39a90f49_prof);

    }

    // line 40
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_706ec71f6630aaf8702773d333000442966a3dab9b736b2b6a04e9afec6f009e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_706ec71f6630aaf8702773d333000442966a3dab9b736b2b6a04e9afec6f009e->enter($__internal_706ec71f6630aaf8702773d333000442966a3dab9b736b2b6a04e9afec6f009e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_5042e50576113d50cc0ab2c93dd77ac40e54b175f01041be0281d88512339159 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5042e50576113d50cc0ab2c93dd77ac40e54b175f01041be0281d88512339159->enter($__internal_5042e50576113d50cc0ab2c93dd77ac40e54b175f01041be0281d88512339159_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 41
        echo "<div class=\"input-group\">";
        // line 42
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 43
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_5042e50576113d50cc0ab2c93dd77ac40e54b175f01041be0281d88512339159->leave($__internal_5042e50576113d50cc0ab2c93dd77ac40e54b175f01041be0281d88512339159_prof);

        
        $__internal_706ec71f6630aaf8702773d333000442966a3dab9b736b2b6a04e9afec6f009e->leave($__internal_706ec71f6630aaf8702773d333000442966a3dab9b736b2b6a04e9afec6f009e_prof);

    }

    // line 47
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_b9b95ab15b10330481e1e8040323207d755ba1210ab6fa12409658b7aa467267 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9b95ab15b10330481e1e8040323207d755ba1210ab6fa12409658b7aa467267->enter($__internal_b9b95ab15b10330481e1e8040323207d755ba1210ab6fa12409658b7aa467267_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_2c152d2fd3708d172f3c77e667bf6a6a283988655d68139385ef3cdea2b58353 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c152d2fd3708d172f3c77e667bf6a6a283988655d68139385ef3cdea2b58353->enter($__internal_2c152d2fd3708d172f3c77e667bf6a6a283988655d68139385ef3cdea2b58353_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 48
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 49
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 51
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 52
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 53
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'errors');
            // line 54
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'errors');
            // line 55
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            // line 56
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            // line 57
            echo "</div>";
        }
        
        $__internal_2c152d2fd3708d172f3c77e667bf6a6a283988655d68139385ef3cdea2b58353->leave($__internal_2c152d2fd3708d172f3c77e667bf6a6a283988655d68139385ef3cdea2b58353_prof);

        
        $__internal_b9b95ab15b10330481e1e8040323207d755ba1210ab6fa12409658b7aa467267->leave($__internal_b9b95ab15b10330481e1e8040323207d755ba1210ab6fa12409658b7aa467267_prof);

    }

    // line 61
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_84171f3fa729488b5bcf80f1d016a39bdaae4619b64117c7755370a96de98dce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84171f3fa729488b5bcf80f1d016a39bdaae4619b64117c7755370a96de98dce->enter($__internal_84171f3fa729488b5bcf80f1d016a39bdaae4619b64117c7755370a96de98dce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_bfff9cd1ebcc3e7120344c4b8f0b40346c477f5b94faed5bc480a63fb7d2ccdb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfff9cd1ebcc3e7120344c4b8f0b40346c477f5b94faed5bc480a63fb7d2ccdb->enter($__internal_bfff9cd1ebcc3e7120344c4b8f0b40346c477f5b94faed5bc480a63fb7d2ccdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 62
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 63
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 65
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 66
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime")))) {
                // line 67
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 69
            echo twig_replace_filter((isset($context["date_pattern"]) ? $context["date_pattern"] : $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 70
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 71
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 72
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 74
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime")))) {
                // line 75
                echo "</div>";
            }
        }
        
        $__internal_bfff9cd1ebcc3e7120344c4b8f0b40346c477f5b94faed5bc480a63fb7d2ccdb->leave($__internal_bfff9cd1ebcc3e7120344c4b8f0b40346c477f5b94faed5bc480a63fb7d2ccdb_prof);

        
        $__internal_84171f3fa729488b5bcf80f1d016a39bdaae4619b64117c7755370a96de98dce->leave($__internal_84171f3fa729488b5bcf80f1d016a39bdaae4619b64117c7755370a96de98dce_prof);

    }

    // line 80
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_4bc9d2e405e2a4036e3138021dfe005629be94a0607ae96c0a571342d1409030 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bc9d2e405e2a4036e3138021dfe005629be94a0607ae96c0a571342d1409030->enter($__internal_4bc9d2e405e2a4036e3138021dfe005629be94a0607ae96c0a571342d1409030_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_1bfa7397d3eafb75c2a092adf9397ddbc9f76692bf6d47a62af17c1ee0e48abe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bfa7397d3eafb75c2a092adf9397ddbc9f76692bf6d47a62af17c1ee0e48abe->enter($__internal_1bfa7397d3eafb75c2a092adf9397ddbc9f76692bf6d47a62af17c1ee0e48abe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 81
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 82
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 84
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 85
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime"))))) {
                // line 86
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 88
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hour", array()), 'widget');
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minute", array()), 'widget');
            }
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "second", array()), 'widget');
            }
            // line 89
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime"))))) {
                // line 90
                echo "</div>";
            }
        }
        
        $__internal_1bfa7397d3eafb75c2a092adf9397ddbc9f76692bf6d47a62af17c1ee0e48abe->leave($__internal_1bfa7397d3eafb75c2a092adf9397ddbc9f76692bf6d47a62af17c1ee0e48abe_prof);

        
        $__internal_4bc9d2e405e2a4036e3138021dfe005629be94a0607ae96c0a571342d1409030->leave($__internal_4bc9d2e405e2a4036e3138021dfe005629be94a0607ae96c0a571342d1409030_prof);

    }

    // line 95
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_b347bcfd341c6750c9bc7c29095e20db614943ca55ebfcb22d10292c15e1fba7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b347bcfd341c6750c9bc7c29095e20db614943ca55ebfcb22d10292c15e1fba7->enter($__internal_b347bcfd341c6750c9bc7c29095e20db614943ca55ebfcb22d10292c15e1fba7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_a34d6024881c7e8bc186c9c0a67ad772f6803ddbe9cbef7d25d0719aef44f0de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a34d6024881c7e8bc186c9c0a67ad772f6803ddbe9cbef7d25d0719aef44f0de->enter($__internal_a34d6024881c7e8bc186c9c0a67ad772f6803ddbe9cbef7d25d0719aef44f0de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 96
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 97
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 99
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 100
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 101
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            // line 102
            echo "<div class=\"table-responsive\">
                <table class=\"table ";
            // line 103
            echo twig_escape_filter($this->env, ((array_key_exists("table_class", $context)) ? (_twig_default_filter((isset($context["table_class"]) ? $context["table_class"] : $this->getContext($context, "table_class")), "table-bordered table-condensed table-striped")) : ("table-bordered table-condensed table-striped")), "html", null, true);
            echo "\">
                    <thead>
                    <tr>";
            // line 106
            if ((isset($context["with_years"]) ? $context["with_years"] : $this->getContext($context, "with_years"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "years", array()), 'label');
                echo "</th>";
            }
            // line 107
            if ((isset($context["with_months"]) ? $context["with_months"] : $this->getContext($context, "with_months"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "months", array()), 'label');
                echo "</th>";
            }
            // line 108
            if ((isset($context["with_weeks"]) ? $context["with_weeks"] : $this->getContext($context, "with_weeks"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "weeks", array()), 'label');
                echo "</th>";
            }
            // line 109
            if ((isset($context["with_days"]) ? $context["with_days"] : $this->getContext($context, "with_days"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "days", array()), 'label');
                echo "</th>";
            }
            // line 110
            if ((isset($context["with_hours"]) ? $context["with_hours"] : $this->getContext($context, "with_hours"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hours", array()), 'label');
                echo "</th>";
            }
            // line 111
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : $this->getContext($context, "with_minutes"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minutes", array()), 'label');
                echo "</th>";
            }
            // line 112
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "seconds", array()), 'label');
                echo "</th>";
            }
            // line 113
            echo "</tr>
                    </thead>
                    <tbody>
                    <tr>";
            // line 117
            if ((isset($context["with_years"]) ? $context["with_years"] : $this->getContext($context, "with_years"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "years", array()), 'widget');
                echo "</td>";
            }
            // line 118
            if ((isset($context["with_months"]) ? $context["with_months"] : $this->getContext($context, "with_months"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "months", array()), 'widget');
                echo "</td>";
            }
            // line 119
            if ((isset($context["with_weeks"]) ? $context["with_weeks"] : $this->getContext($context, "with_weeks"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "weeks", array()), 'widget');
                echo "</td>";
            }
            // line 120
            if ((isset($context["with_days"]) ? $context["with_days"] : $this->getContext($context, "with_days"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "days", array()), 'widget');
                echo "</td>";
            }
            // line 121
            if ((isset($context["with_hours"]) ? $context["with_hours"] : $this->getContext($context, "with_hours"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hours", array()), 'widget');
                echo "</td>";
            }
            // line 122
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : $this->getContext($context, "with_minutes"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minutes", array()), 'widget');
                echo "</td>";
            }
            // line 123
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "seconds", array()), 'widget');
                echo "</td>";
            }
            // line 124
            echo "</tr>
                    </tbody>
                </table>
            </div>";
            // line 128
            if ((isset($context["with_invert"]) ? $context["with_invert"] : $this->getContext($context, "with_invert"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "invert", array()), 'widget');
            }
            // line 129
            echo "</div>";
        }
        
        $__internal_a34d6024881c7e8bc186c9c0a67ad772f6803ddbe9cbef7d25d0719aef44f0de->leave($__internal_a34d6024881c7e8bc186c9c0a67ad772f6803ddbe9cbef7d25d0719aef44f0de_prof);

        
        $__internal_b347bcfd341c6750c9bc7c29095e20db614943ca55ebfcb22d10292c15e1fba7->leave($__internal_b347bcfd341c6750c9bc7c29095e20db614943ca55ebfcb22d10292c15e1fba7_prof);

    }

    // line 133
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_9d86aca17c7a969578596302d075b5e6df713c90729fa0eee21b860fd5e474f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d86aca17c7a969578596302d075b5e6df713c90729fa0eee21b860fd5e474f2->enter($__internal_9d86aca17c7a969578596302d075b5e6df713c90729fa0eee21b860fd5e474f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_8b59dc367a657192fb4e201f20f8d4c2ed74293b063c61a59a87cbbcb858a41c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b59dc367a657192fb4e201f20f8d4c2ed74293b063c61a59a87cbbcb858a41c->enter($__internal_8b59dc367a657192fb4e201f20f8d4c2ed74293b063c61a59a87cbbcb858a41c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 134
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 135
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_8b59dc367a657192fb4e201f20f8d4c2ed74293b063c61a59a87cbbcb858a41c->leave($__internal_8b59dc367a657192fb4e201f20f8d4c2ed74293b063c61a59a87cbbcb858a41c_prof);

        
        $__internal_9d86aca17c7a969578596302d075b5e6df713c90729fa0eee21b860fd5e474f2->leave($__internal_9d86aca17c7a969578596302d075b5e6df713c90729fa0eee21b860fd5e474f2_prof);

    }

    // line 138
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_9ba864d43b8ae58b4b1321c0f787d15746492d5d5cdb44bbfbabd7b138897bdb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ba864d43b8ae58b4b1321c0f787d15746492d5d5cdb44bbfbabd7b138897bdb->enter($__internal_9ba864d43b8ae58b4b1321c0f787d15746492d5d5cdb44bbfbabd7b138897bdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_cf790f8e15e3e4cf165ae1221c9cd950f231b4dd1f244a391d82cbe85cdfa246 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf790f8e15e3e4cf165ae1221c9cd950f231b4dd1f244a391d82cbe85cdfa246->enter($__internal_cf790f8e15e3e4cf165ae1221c9cd950f231b4dd1f244a391d82cbe85cdfa246_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 139
        if (twig_in_filter("-inline", (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) {
            // line 140
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 141
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 142
(isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 143
(isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 147
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 148
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 149
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 150
(isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 151
(isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 154
            echo "</div>";
        }
        
        $__internal_cf790f8e15e3e4cf165ae1221c9cd950f231b4dd1f244a391d82cbe85cdfa246->leave($__internal_cf790f8e15e3e4cf165ae1221c9cd950f231b4dd1f244a391d82cbe85cdfa246_prof);

        
        $__internal_9ba864d43b8ae58b4b1321c0f787d15746492d5d5cdb44bbfbabd7b138897bdb->leave($__internal_9ba864d43b8ae58b4b1321c0f787d15746492d5d5cdb44bbfbabd7b138897bdb_prof);

    }

    // line 158
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_9ad638333ad4247ebc05065e306681e745ca67407eaa2b8ddae070ad8694e92d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ad638333ad4247ebc05065e306681e745ca67407eaa2b8ddae070ad8694e92d->enter($__internal_9ad638333ad4247ebc05065e306681e745ca67407eaa2b8ddae070ad8694e92d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_0c5810b9cfbab105044e6a71d017311cc08cd24e4f83f2f2ef9b6ee2fbda4f53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c5810b9cfbab105044e6a71d017311cc08cd24e4f83f2f2ef9b6ee2fbda4f53->enter($__internal_0c5810b9cfbab105044e6a71d017311cc08cd24e4f83f2f2ef9b6ee2fbda4f53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 159
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")), (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) : ((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))));
        // line 160
        if (twig_in_filter("checkbox-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")))) {
            // line 161
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 163
            echo "<div class=\"checkbox\">";
            // line 164
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 165
            echo "</div>";
        }
        
        $__internal_0c5810b9cfbab105044e6a71d017311cc08cd24e4f83f2f2ef9b6ee2fbda4f53->leave($__internal_0c5810b9cfbab105044e6a71d017311cc08cd24e4f83f2f2ef9b6ee2fbda4f53_prof);

        
        $__internal_9ad638333ad4247ebc05065e306681e745ca67407eaa2b8ddae070ad8694e92d->leave($__internal_9ad638333ad4247ebc05065e306681e745ca67407eaa2b8ddae070ad8694e92d_prof);

    }

    // line 169
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_248218fc1748f5ce8b6c047ab6d6252f0cbf2ad451fbb0c71d8d490b1bbfd825 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_248218fc1748f5ce8b6c047ab6d6252f0cbf2ad451fbb0c71d8d490b1bbfd825->enter($__internal_248218fc1748f5ce8b6c047ab6d6252f0cbf2ad451fbb0c71d8d490b1bbfd825_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_207115cd4d9e66137ebe237b9e51692954ce104a2617043fa59a54d5267b7ba1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_207115cd4d9e66137ebe237b9e51692954ce104a2617043fa59a54d5267b7ba1->enter($__internal_207115cd4d9e66137ebe237b9e51692954ce104a2617043fa59a54d5267b7ba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 170
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")), (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) : ((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))));
        // line 171
        if (twig_in_filter("radio-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")))) {
            // line 172
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 174
            echo "<div class=\"radio\">";
            // line 175
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 176
            echo "</div>";
        }
        
        $__internal_207115cd4d9e66137ebe237b9e51692954ce104a2617043fa59a54d5267b7ba1->leave($__internal_207115cd4d9e66137ebe237b9e51692954ce104a2617043fa59a54d5267b7ba1_prof);

        
        $__internal_248218fc1748f5ce8b6c047ab6d6252f0cbf2ad451fbb0c71d8d490b1bbfd825->leave($__internal_248218fc1748f5ce8b6c047ab6d6252f0cbf2ad451fbb0c71d8d490b1bbfd825_prof);

    }

    // line 182
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_e6cc22930a06b566216e0b23bac21e6b4cd4ae645492d6fa12f82844abc945de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6cc22930a06b566216e0b23bac21e6b4cd4ae645492d6fa12f82844abc945de->enter($__internal_e6cc22930a06b566216e0b23bac21e6b4cd4ae645492d6fa12f82844abc945de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_9a8e87b7d8bb54406bccad5b5cded067fb715bf6a44ac1dc1c64600223a0d380 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a8e87b7d8bb54406bccad5b5cded067fb715bf6a44ac1dc1c64600223a0d380->enter($__internal_9a8e87b7d8bb54406bccad5b5cded067fb715bf6a44ac1dc1c64600223a0d380_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 183
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " control-label"))));
        // line 184
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_9a8e87b7d8bb54406bccad5b5cded067fb715bf6a44ac1dc1c64600223a0d380->leave($__internal_9a8e87b7d8bb54406bccad5b5cded067fb715bf6a44ac1dc1c64600223a0d380_prof);

        
        $__internal_e6cc22930a06b566216e0b23bac21e6b4cd4ae645492d6fa12f82844abc945de->leave($__internal_e6cc22930a06b566216e0b23bac21e6b4cd4ae645492d6fa12f82844abc945de_prof);

    }

    // line 187
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_7644b14620d7b0407a4fb77b1d1d2ba496a578edfc22a8301057905902a06be7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7644b14620d7b0407a4fb77b1d1d2ba496a578edfc22a8301057905902a06be7->enter($__internal_7644b14620d7b0407a4fb77b1d1d2ba496a578edfc22a8301057905902a06be7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_c528bfbb5a138021470b73eebf30b526fe387666b082fe124f7909753dad3de9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c528bfbb5a138021470b73eebf30b526fe387666b082fe124f7909753dad3de9->enter($__internal_c528bfbb5a138021470b73eebf30b526fe387666b082fe124f7909753dad3de9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 189
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 190
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_c528bfbb5a138021470b73eebf30b526fe387666b082fe124f7909753dad3de9->leave($__internal_c528bfbb5a138021470b73eebf30b526fe387666b082fe124f7909753dad3de9_prof);

        
        $__internal_7644b14620d7b0407a4fb77b1d1d2ba496a578edfc22a8301057905902a06be7->leave($__internal_7644b14620d7b0407a4fb77b1d1d2ba496a578edfc22a8301057905902a06be7_prof);

    }

    // line 193
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_5edf714fcdcbba18cf3059af1e38afa8c354c70d69d02af4c746d3d32988255b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5edf714fcdcbba18cf3059af1e38afa8c354c70d69d02af4c746d3d32988255b->enter($__internal_5edf714fcdcbba18cf3059af1e38afa8c354c70d69d02af4c746d3d32988255b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_5f59cd5b1c4d503ef74feb091cb486e1b567bcefeec565a645666c9b6f560f65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f59cd5b1c4d503ef74feb091cb486e1b567bcefeec565a645666c9b6f560f65->enter($__internal_5f59cd5b1c4d503ef74feb091cb486e1b567bcefeec565a645666c9b6f560f65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 194
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("for" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
        // line 196
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_5f59cd5b1c4d503ef74feb091cb486e1b567bcefeec565a645666c9b6f560f65->leave($__internal_5f59cd5b1c4d503ef74feb091cb486e1b567bcefeec565a645666c9b6f560f65_prof);

        
        $__internal_5edf714fcdcbba18cf3059af1e38afa8c354c70d69d02af4c746d3d32988255b->leave($__internal_5edf714fcdcbba18cf3059af1e38afa8c354c70d69d02af4c746d3d32988255b_prof);

    }

    // line 199
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_607627033226e2b992db50eac6ef15c4287bad57a4d0a072ffe4c7c09a110e03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_607627033226e2b992db50eac6ef15c4287bad57a4d0a072ffe4c7c09a110e03->enter($__internal_607627033226e2b992db50eac6ef15c4287bad57a4d0a072ffe4c7c09a110e03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_610f2c753000740d58e655ae116b282ae464525d00a57886773ee8f90f76f212 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_610f2c753000740d58e655ae116b282ae464525d00a57886773ee8f90f76f212->enter($__internal_610f2c753000740d58e655ae116b282ae464525d00a57886773ee8f90f76f212_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 200
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("for" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
        // line 202
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_610f2c753000740d58e655ae116b282ae464525d00a57886773ee8f90f76f212->leave($__internal_610f2c753000740d58e655ae116b282ae464525d00a57886773ee8f90f76f212_prof);

        
        $__internal_607627033226e2b992db50eac6ef15c4287bad57a4d0a072ffe4c7c09a110e03->leave($__internal_607627033226e2b992db50eac6ef15c4287bad57a4d0a072ffe4c7c09a110e03_prof);

    }

    // line 205
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_8e7bd5d570e766a20af6dde42f5d2af36aafbf9e362d21c1d62b04d390448a0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e7bd5d570e766a20af6dde42f5d2af36aafbf9e362d21c1d62b04d390448a0d->enter($__internal_8e7bd5d570e766a20af6dde42f5d2af36aafbf9e362d21c1d62b04d390448a0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_67cf2ffc8238e05cb9266fde0442eaab1eac41cf30f72b68b063a9e763201fd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67cf2ffc8238e05cb9266fde0442eaab1eac41cf30f72b68b063a9e763201fd2->enter($__internal_67cf2ffc8238e05cb9266fde0442eaab1eac41cf30f72b68b063a9e763201fd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 206
        echo "    ";
        // line 207
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 208
            echo "        ";
            if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
                // line 209
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
                // line 210
                echo "        ";
            }
            // line 211
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 212
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " ") . (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class"))))));
                // line 213
                echo "        ";
            }
            // line 214
            echo "        ";
            if (( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false) && twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))))) {
                // line 215
                if ( !twig_test_empty((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")))) {
                    // line 216
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")), array("%name%" =>                     // line 217
(isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "%id%" =>                     // line 218
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
                } else {
                    // line 221
                    $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
                }
            }
            // line 224
            echo "        <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")));
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
            // line 225
            echo (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget"));
            echo " ";
            echo twig_escape_filter($this->env, (( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) ? (((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            // line 226
            echo "</label>
    ";
        }
        
        $__internal_67cf2ffc8238e05cb9266fde0442eaab1eac41cf30f72b68b063a9e763201fd2->leave($__internal_67cf2ffc8238e05cb9266fde0442eaab1eac41cf30f72b68b063a9e763201fd2_prof);

        
        $__internal_8e7bd5d570e766a20af6dde42f5d2af36aafbf9e362d21c1d62b04d390448a0d->leave($__internal_8e7bd5d570e766a20af6dde42f5d2af36aafbf9e362d21c1d62b04d390448a0d_prof);

    }

    // line 232
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_0361bcdc9ab06a3b4565e2b54ad8b6852dab151825731de7115b148f760eb273 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0361bcdc9ab06a3b4565e2b54ad8b6852dab151825731de7115b148f760eb273->enter($__internal_0361bcdc9ab06a3b4565e2b54ad8b6852dab151825731de7115b148f760eb273_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_40ff9b33810f0229eaa1ce66863af683d24cdc78241d13749ba9604e62dba681 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40ff9b33810f0229eaa1ce66863af683d24cdc78241d13749ba9604e62dba681->enter($__internal_40ff9b33810f0229eaa1ce66863af683d24cdc78241d13749ba9604e62dba681_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 233
        echo "<div class=\"form-group";
        if ((( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) ? $context["force_error"] : $this->getContext($context, "force_error")), false)) : (false))) &&  !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 234
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        // line 235
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 236
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 237
        echo "</div>";
        
        $__internal_40ff9b33810f0229eaa1ce66863af683d24cdc78241d13749ba9604e62dba681->leave($__internal_40ff9b33810f0229eaa1ce66863af683d24cdc78241d13749ba9604e62dba681_prof);

        
        $__internal_0361bcdc9ab06a3b4565e2b54ad8b6852dab151825731de7115b148f760eb273->leave($__internal_0361bcdc9ab06a3b4565e2b54ad8b6852dab151825731de7115b148f760eb273_prof);

    }

    // line 240
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_782c3a6c94e96379e428b8d9daacb2afee75b1f80758f2ec5f2d3a424f3b9ebe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_782c3a6c94e96379e428b8d9daacb2afee75b1f80758f2ec5f2d3a424f3b9ebe->enter($__internal_782c3a6c94e96379e428b8d9daacb2afee75b1f80758f2ec5f2d3a424f3b9ebe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_3f8f279afadb4c5b60dcc79e017b6eac5ab32ea2af64f4340fc5e442aa7ee11a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f8f279afadb4c5b60dcc79e017b6eac5ab32ea2af64f4340fc5e442aa7ee11a->enter($__internal_3f8f279afadb4c5b60dcc79e017b6eac5ab32ea2af64f4340fc5e442aa7ee11a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 241
        echo "<div class=\"form-group\">";
        // line 242
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 243
        echo "</div>";
        
        $__internal_3f8f279afadb4c5b60dcc79e017b6eac5ab32ea2af64f4340fc5e442aa7ee11a->leave($__internal_3f8f279afadb4c5b60dcc79e017b6eac5ab32ea2af64f4340fc5e442aa7ee11a_prof);

        
        $__internal_782c3a6c94e96379e428b8d9daacb2afee75b1f80758f2ec5f2d3a424f3b9ebe->leave($__internal_782c3a6c94e96379e428b8d9daacb2afee75b1f80758f2ec5f2d3a424f3b9ebe_prof);

    }

    // line 246
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_f87155cc8c0b122c7653632f4d0c02b3f0659cb5a38fff6ea3e534047b6e51bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f87155cc8c0b122c7653632f4d0c02b3f0659cb5a38fff6ea3e534047b6e51bb->enter($__internal_f87155cc8c0b122c7653632f4d0c02b3f0659cb5a38fff6ea3e534047b6e51bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_7f3df62772140e2bd06155fb40d94a237b3d9121f102f75cdbc0af037e467c96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f3df62772140e2bd06155fb40d94a237b3d9121f102f75cdbc0af037e467c96->enter($__internal_7f3df62772140e2bd06155fb40d94a237b3d9121f102f75cdbc0af037e467c96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 247
        $context["force_error"] = true;
        // line 248
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_7f3df62772140e2bd06155fb40d94a237b3d9121f102f75cdbc0af037e467c96->leave($__internal_7f3df62772140e2bd06155fb40d94a237b3d9121f102f75cdbc0af037e467c96_prof);

        
        $__internal_f87155cc8c0b122c7653632f4d0c02b3f0659cb5a38fff6ea3e534047b6e51bb->leave($__internal_f87155cc8c0b122c7653632f4d0c02b3f0659cb5a38fff6ea3e534047b6e51bb_prof);

    }

    // line 251
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_5cc07e430228858f9b0492e3d1cdf3896199ffe599a8faa67e49a545d08bf065 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cc07e430228858f9b0492e3d1cdf3896199ffe599a8faa67e49a545d08bf065->enter($__internal_5cc07e430228858f9b0492e3d1cdf3896199ffe599a8faa67e49a545d08bf065_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_874dd9e497b718f5ff3a54393b810424ee40fc78b2e2db0805acf857d4bcbf5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_874dd9e497b718f5ff3a54393b810424ee40fc78b2e2db0805acf857d4bcbf5a->enter($__internal_874dd9e497b718f5ff3a54393b810424ee40fc78b2e2db0805acf857d4bcbf5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 252
        $context["force_error"] = true;
        // line 253
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_874dd9e497b718f5ff3a54393b810424ee40fc78b2e2db0805acf857d4bcbf5a->leave($__internal_874dd9e497b718f5ff3a54393b810424ee40fc78b2e2db0805acf857d4bcbf5a_prof);

        
        $__internal_5cc07e430228858f9b0492e3d1cdf3896199ffe599a8faa67e49a545d08bf065->leave($__internal_5cc07e430228858f9b0492e3d1cdf3896199ffe599a8faa67e49a545d08bf065_prof);

    }

    // line 256
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_0b204df6e3a6122a461c1093bcf508d73b433c6e9e40b80db2d39a9c914e7427 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b204df6e3a6122a461c1093bcf508d73b433c6e9e40b80db2d39a9c914e7427->enter($__internal_0b204df6e3a6122a461c1093bcf508d73b433c6e9e40b80db2d39a9c914e7427_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_8930a4c1f9a32e681475324435dd29d827ba4685e75784aea3a3bc2568622b4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8930a4c1f9a32e681475324435dd29d827ba4685e75784aea3a3bc2568622b4b->enter($__internal_8930a4c1f9a32e681475324435dd29d827ba4685e75784aea3a3bc2568622b4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 257
        $context["force_error"] = true;
        // line 258
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_8930a4c1f9a32e681475324435dd29d827ba4685e75784aea3a3bc2568622b4b->leave($__internal_8930a4c1f9a32e681475324435dd29d827ba4685e75784aea3a3bc2568622b4b_prof);

        
        $__internal_0b204df6e3a6122a461c1093bcf508d73b433c6e9e40b80db2d39a9c914e7427->leave($__internal_0b204df6e3a6122a461c1093bcf508d73b433c6e9e40b80db2d39a9c914e7427_prof);

    }

    // line 261
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_99ae7b47bc2dc3ef73cfb8ab257374706d39ae62d347dae8c48e7dd01791cf22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99ae7b47bc2dc3ef73cfb8ab257374706d39ae62d347dae8c48e7dd01791cf22->enter($__internal_99ae7b47bc2dc3ef73cfb8ab257374706d39ae62d347dae8c48e7dd01791cf22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_09441120eab8aeb3ae57e341700e179a3e5af2ed6749ea5a25b1489e4ae9450c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09441120eab8aeb3ae57e341700e179a3e5af2ed6749ea5a25b1489e4ae9450c->enter($__internal_09441120eab8aeb3ae57e341700e179a3e5af2ed6749ea5a25b1489e4ae9450c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 262
        $context["force_error"] = true;
        // line 263
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_09441120eab8aeb3ae57e341700e179a3e5af2ed6749ea5a25b1489e4ae9450c->leave($__internal_09441120eab8aeb3ae57e341700e179a3e5af2ed6749ea5a25b1489e4ae9450c_prof);

        
        $__internal_99ae7b47bc2dc3ef73cfb8ab257374706d39ae62d347dae8c48e7dd01791cf22->leave($__internal_99ae7b47bc2dc3ef73cfb8ab257374706d39ae62d347dae8c48e7dd01791cf22_prof);

    }

    // line 266
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_6a7292e2cd075c6617ebe34d28108dadbf1182c019c2be91fbbc1b829a935625 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a7292e2cd075c6617ebe34d28108dadbf1182c019c2be91fbbc1b829a935625->enter($__internal_6a7292e2cd075c6617ebe34d28108dadbf1182c019c2be91fbbc1b829a935625_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_3220846a6c7933f1af9f86a4153f6289a2893ae958639f1b01d163314e494861 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3220846a6c7933f1af9f86a4153f6289a2893ae958639f1b01d163314e494861->enter($__internal_3220846a6c7933f1af9f86a4153f6289a2893ae958639f1b01d163314e494861_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 267
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 268
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 269
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 270
        echo "</div>";
        
        $__internal_3220846a6c7933f1af9f86a4153f6289a2893ae958639f1b01d163314e494861->leave($__internal_3220846a6c7933f1af9f86a4153f6289a2893ae958639f1b01d163314e494861_prof);

        
        $__internal_6a7292e2cd075c6617ebe34d28108dadbf1182c019c2be91fbbc1b829a935625->leave($__internal_6a7292e2cd075c6617ebe34d28108dadbf1182c019c2be91fbbc1b829a935625_prof);

    }

    // line 273
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_330539c475f73fa2c5ebfdea788b932262c6e75657d33fcb5f862eeac64744e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_330539c475f73fa2c5ebfdea788b932262c6e75657d33fcb5f862eeac64744e9->enter($__internal_330539c475f73fa2c5ebfdea788b932262c6e75657d33fcb5f862eeac64744e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_ee06b239460b44b49dc4697b231d20f7b3b220a0c8d6cf215d00f2d584610f2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee06b239460b44b49dc4697b231d20f7b3b220a0c8d6cf215d00f2d584610f2d->enter($__internal_ee06b239460b44b49dc4697b231d20f7b3b220a0c8d6cf215d00f2d584610f2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 274
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 275
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 276
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 277
        echo "</div>";
        
        $__internal_ee06b239460b44b49dc4697b231d20f7b3b220a0c8d6cf215d00f2d584610f2d->leave($__internal_ee06b239460b44b49dc4697b231d20f7b3b220a0c8d6cf215d00f2d584610f2d_prof);

        
        $__internal_330539c475f73fa2c5ebfdea788b932262c6e75657d33fcb5f862eeac64744e9->leave($__internal_330539c475f73fa2c5ebfdea788b932262c6e75657d33fcb5f862eeac64744e9_prof);

    }

    // line 282
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_4f666ecb2ca92af7af2a9fea5abb5eb1fdacb9cd3c2eef5e421229367b27c3c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f666ecb2ca92af7af2a9fea5abb5eb1fdacb9cd3c2eef5e421229367b27c3c4->enter($__internal_4f666ecb2ca92af7af2a9fea5abb5eb1fdacb9cd3c2eef5e421229367b27c3c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_20e5c95cd5c95726b10ad4878f83d8c5d9cd810b5217c466e8b0cceb4f2201bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20e5c95cd5c95726b10ad4878f83d8c5d9cd810b5217c466e8b0cceb4f2201bb->enter($__internal_20e5c95cd5c95726b10ad4878f83d8c5d9cd810b5217c466e8b0cceb4f2201bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 283
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 284
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")))) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 285
            echo "    <ul class=\"list-unstyled\">";
            // line 286
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 287
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 289
            echo "</ul>
    ";
            // line 290
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")))) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_20e5c95cd5c95726b10ad4878f83d8c5d9cd810b5217c466e8b0cceb4f2201bb->leave($__internal_20e5c95cd5c95726b10ad4878f83d8c5d9cd810b5217c466e8b0cceb4f2201bb_prof);

        
        $__internal_4f666ecb2ca92af7af2a9fea5abb5eb1fdacb9cd3c2eef5e421229367b27c3c4->leave($__internal_4f666ecb2ca92af7af2a9fea5abb5eb1fdacb9cd3c2eef5e421229367b27c3c4_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1149 => 290,  1146 => 289,  1138 => 287,  1134 => 286,  1132 => 285,  1126 => 284,  1124 => 283,  1115 => 282,  1105 => 277,  1103 => 276,  1101 => 275,  1095 => 274,  1086 => 273,  1076 => 270,  1074 => 269,  1072 => 268,  1066 => 267,  1057 => 266,  1047 => 263,  1045 => 262,  1036 => 261,  1026 => 258,  1024 => 257,  1015 => 256,  1005 => 253,  1003 => 252,  994 => 251,  984 => 248,  982 => 247,  973 => 246,  963 => 243,  961 => 242,  959 => 241,  950 => 240,  940 => 237,  938 => 236,  936 => 235,  934 => 234,  928 => 233,  919 => 232,  907 => 226,  903 => 225,  888 => 224,  884 => 221,  881 => 218,  880 => 217,  879 => 216,  877 => 215,  874 => 214,  871 => 213,  868 => 212,  865 => 211,  862 => 210,  859 => 209,  856 => 208,  853 => 207,  851 => 206,  842 => 205,  832 => 202,  830 => 200,  821 => 199,  811 => 196,  809 => 194,  800 => 193,  790 => 190,  788 => 189,  779 => 187,  769 => 184,  767 => 183,  758 => 182,  747 => 176,  745 => 175,  743 => 174,  740 => 172,  738 => 171,  736 => 170,  727 => 169,  716 => 165,  714 => 164,  712 => 163,  709 => 161,  707 => 160,  705 => 159,  696 => 158,  685 => 154,  679 => 151,  678 => 150,  677 => 149,  673 => 148,  669 => 147,  662 => 143,  661 => 142,  660 => 141,  656 => 140,  654 => 139,  645 => 138,  635 => 135,  633 => 134,  624 => 133,  613 => 129,  609 => 128,  604 => 124,  598 => 123,  592 => 122,  586 => 121,  580 => 120,  574 => 119,  568 => 118,  562 => 117,  557 => 113,  551 => 112,  545 => 111,  539 => 110,  533 => 109,  527 => 108,  521 => 107,  515 => 106,  510 => 103,  507 => 102,  505 => 101,  501 => 100,  499 => 99,  496 => 97,  494 => 96,  485 => 95,  473 => 90,  470 => 89,  460 => 88,  455 => 86,  453 => 85,  451 => 84,  448 => 82,  446 => 81,  437 => 80,  425 => 75,  423 => 74,  421 => 72,  420 => 71,  419 => 70,  418 => 69,  413 => 67,  411 => 66,  409 => 65,  406 => 63,  404 => 62,  395 => 61,  384 => 57,  382 => 56,  380 => 55,  378 => 54,  376 => 53,  372 => 52,  370 => 51,  367 => 49,  365 => 48,  356 => 47,  345 => 43,  343 => 42,  341 => 41,  332 => 40,  321 => 36,  317 => 34,  311 => 32,  309 => 31,  307 => 30,  301 => 28,  299 => 27,  296 => 26,  293 => 25,  290 => 24,  288 => 23,  279 => 22,  269 => 19,  267 => 18,  258 => 17,  248 => 14,  246 => 13,  237 => 12,  227 => 9,  224 => 7,  222 => 6,  213 => 5,  203 => 282,  200 => 281,  197 => 279,  195 => 273,  192 => 272,  190 => 266,  187 => 265,  185 => 261,  182 => 260,  180 => 256,  177 => 255,  175 => 251,  172 => 250,  170 => 246,  167 => 245,  165 => 240,  162 => 239,  160 => 232,  157 => 231,  154 => 229,  152 => 205,  149 => 204,  147 => 199,  144 => 198,  142 => 193,  139 => 192,  137 => 187,  134 => 186,  132 => 182,  129 => 181,  126 => 179,  124 => 169,  121 => 168,  119 => 158,  116 => 157,  114 => 138,  111 => 137,  109 => 133,  107 => 95,  105 => 80,  102 => 79,  100 => 61,  97 => 60,  95 => 47,  92 => 46,  90 => 40,  87 => 39,  85 => 22,  82 => 21,  80 => 17,  77 => 16,  75 => 12,  72 => 11,  70 => 5,  67 => 4,  64 => 2,  14 => 1,);
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
    {% set prepend = not (money_pattern starts with '{{') %}
    {% set append = not (money_pattern ends with '}}') %}
    {% if prepend or append %}
        <div class=\"input-group\">
            {% if prepend %}
                <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            {% endif %}
            {{- block('form_widget_simple') -}}
            {% if append %}
                <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            {% endif %}
        </div>
    {% else %}
        {{- block('form_widget_simple') -}}
    {% endif %}
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
    {%- set label_attr = label_attr|merge({'for': id}) -%}

    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {%- set label_attr = label_attr|merge({'for': id}) -%}

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
    {% if form is not rootform %}<span class=\"help-block\">{% else %}<div class=\"alert alert-danger\">{% endif %}
    <ul class=\"list-unstyled\">
        {%- for error in errors -%}
            <li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> {{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {% if form is not rootform %}</span>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "bootstrap_3_layout.html.twig", "C:\\wamp64\\www\\PPE4_TOBAT\\TOBAT\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Resources\\views\\Form\\bootstrap_3_layout.html.twig");
    }
}
