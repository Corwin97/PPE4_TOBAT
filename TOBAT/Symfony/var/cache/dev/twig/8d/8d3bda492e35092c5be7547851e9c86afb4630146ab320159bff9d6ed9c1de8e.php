<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_d1016fd08ddf20257e0d706e70ef21793052c0e71d719a1e4b2afd56a5320f97 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6898b5246058ae21268534bc15467380926d705cfd34e41a190c50e6175fa219 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6898b5246058ae21268534bc15467380926d705cfd34e41a190c50e6175fa219->enter($__internal_6898b5246058ae21268534bc15467380926d705cfd34e41a190c50e6175fa219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_653bea202ccab02b05399e7c8730c87c5b99d72254c6c8b818d99c05c74432e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_653bea202ccab02b05399e7c8730c87c5b99d72254c6c8b818d99c05c74432e8->enter($__internal_653bea202ccab02b05399e7c8730c87c5b99d72254c6c8b818d99c05c74432e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6898b5246058ae21268534bc15467380926d705cfd34e41a190c50e6175fa219->leave($__internal_6898b5246058ae21268534bc15467380926d705cfd34e41a190c50e6175fa219_prof);

        
        $__internal_653bea202ccab02b05399e7c8730c87c5b99d72254c6c8b818d99c05c74432e8->leave($__internal_653bea202ccab02b05399e7c8730c87c5b99d72254c6c8b818d99c05c74432e8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_88272d93176cbf5733e1d1f11a6adefbdcff799ab9ff2e19fb051978b51e63d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88272d93176cbf5733e1d1f11a6adefbdcff799ab9ff2e19fb051978b51e63d6->enter($__internal_88272d93176cbf5733e1d1f11a6adefbdcff799ab9ff2e19fb051978b51e63d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_766f1d6a7df7af5b1fea0d2667e63c4750d840f3f5871ad6a5afbbcebe9f3770 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_766f1d6a7df7af5b1fea0d2667e63c4750d840f3f5871ad6a5afbbcebe9f3770->enter($__internal_766f1d6a7df7af5b1fea0d2667e63c4750d840f3f5871ad6a5afbbcebe9f3770_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_766f1d6a7df7af5b1fea0d2667e63c4750d840f3f5871ad6a5afbbcebe9f3770->leave($__internal_766f1d6a7df7af5b1fea0d2667e63c4750d840f3f5871ad6a5afbbcebe9f3770_prof);

        
        $__internal_88272d93176cbf5733e1d1f11a6adefbdcff799ab9ff2e19fb051978b51e63d6->leave($__internal_88272d93176cbf5733e1d1f11a6adefbdcff799ab9ff2e19fb051978b51e63d6_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_c20d8765aa82a5905fac916e779624ca0b0a255d8536224e53a5d4064af19a9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c20d8765aa82a5905fac916e779624ca0b0a255d8536224e53a5d4064af19a9f->enter($__internal_c20d8765aa82a5905fac916e779624ca0b0a255d8536224e53a5d4064af19a9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cfd5f62a1e7fd472eae3710435d26821c44b6be7e3910435411b297021589a83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfd5f62a1e7fd472eae3710435d26821c44b6be7e3910435411b297021589a83->enter($__internal_cfd5f62a1e7fd472eae3710435d26821c44b6be7e3910435411b297021589a83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_cfd5f62a1e7fd472eae3710435d26821c44b6be7e3910435411b297021589a83->leave($__internal_cfd5f62a1e7fd472eae3710435d26821c44b6be7e3910435411b297021589a83_prof);

        
        $__internal_c20d8765aa82a5905fac916e779624ca0b0a255d8536224e53a5d4064af19a9f->leave($__internal_c20d8765aa82a5905fac916e779624ca0b0a255d8536224e53a5d4064af19a9f_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_33083c53185ccf682947f828d5d7a4d10879f3e3bd6c4231875ff9f5c8623aec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33083c53185ccf682947f828d5d7a4d10879f3e3bd6c4231875ff9f5c8623aec->enter($__internal_33083c53185ccf682947f828d5d7a4d10879f3e3bd6c4231875ff9f5c8623aec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_16804ab9393bdcf05418df1ccba528c08b284e8cbabd5c348e4535a18bcd38f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16804ab9393bdcf05418df1ccba528c08b284e8cbabd5c348e4535a18bcd38f1->enter($__internal_16804ab9393bdcf05418df1ccba528c08b284e8cbabd5c348e4535a18bcd38f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_16804ab9393bdcf05418df1ccba528c08b284e8cbabd5c348e4535a18bcd38f1->leave($__internal_16804ab9393bdcf05418df1ccba528c08b284e8cbabd5c348e4535a18bcd38f1_prof);

        
        $__internal_33083c53185ccf682947f828d5d7a4d10879f3e3bd6c4231875ff9f5c8623aec->leave($__internal_33083c53185ccf682947f828d5d7a4d10879f3e3bd6c4231875ff9f5c8623aec_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp64\\www\\PPE4_TOBAT.git\\TOBAT\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
