<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_6bb4ff11626cecb59a03a84f061116282fce74892df7fd9a7e10f17811feb733 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4810e7e954fb6b23d914dd09650c5be376fad09d9881721653f3fe5fde97a78e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4810e7e954fb6b23d914dd09650c5be376fad09d9881721653f3fe5fde97a78e->enter($__internal_4810e7e954fb6b23d914dd09650c5be376fad09d9881721653f3fe5fde97a78e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_a97512edbe4f3f79065e6db142ff52be9499513b4a855cd95c7bdb524fbfc3ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a97512edbe4f3f79065e6db142ff52be9499513b4a855cd95c7bdb524fbfc3ad->enter($__internal_a97512edbe4f3f79065e6db142ff52be9499513b4a855cd95c7bdb524fbfc3ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4810e7e954fb6b23d914dd09650c5be376fad09d9881721653f3fe5fde97a78e->leave($__internal_4810e7e954fb6b23d914dd09650c5be376fad09d9881721653f3fe5fde97a78e_prof);

        
        $__internal_a97512edbe4f3f79065e6db142ff52be9499513b4a855cd95c7bdb524fbfc3ad->leave($__internal_a97512edbe4f3f79065e6db142ff52be9499513b4a855cd95c7bdb524fbfc3ad_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1707611a60fe9f647a68bc0d38ced9a9fca63ef7a0e01ff0bde18f07c8e0c1c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1707611a60fe9f647a68bc0d38ced9a9fca63ef7a0e01ff0bde18f07c8e0c1c4->enter($__internal_1707611a60fe9f647a68bc0d38ced9a9fca63ef7a0e01ff0bde18f07c8e0c1c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_eff70a5eccd1c87991bb35b5ea53da78ec9507d59ba683bd43204371c60f816b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eff70a5eccd1c87991bb35b5ea53da78ec9507d59ba683bd43204371c60f816b->enter($__internal_eff70a5eccd1c87991bb35b5ea53da78ec9507d59ba683bd43204371c60f816b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_eff70a5eccd1c87991bb35b5ea53da78ec9507d59ba683bd43204371c60f816b->leave($__internal_eff70a5eccd1c87991bb35b5ea53da78ec9507d59ba683bd43204371c60f816b_prof);

        
        $__internal_1707611a60fe9f647a68bc0d38ced9a9fca63ef7a0e01ff0bde18f07c8e0c1c4->leave($__internal_1707611a60fe9f647a68bc0d38ced9a9fca63ef7a0e01ff0bde18f07c8e0c1c4_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_eccaf07be7e3e620769f34800e1b4848ae357ea15059decd7c0bed3e946d00d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eccaf07be7e3e620769f34800e1b4848ae357ea15059decd7c0bed3e946d00d5->enter($__internal_eccaf07be7e3e620769f34800e1b4848ae357ea15059decd7c0bed3e946d00d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_369ce97f75ef6b8abd00840c15693735dad0a5615c55b88b7683a54709656f7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_369ce97f75ef6b8abd00840c15693735dad0a5615c55b88b7683a54709656f7a->enter($__internal_369ce97f75ef6b8abd00840c15693735dad0a5615c55b88b7683a54709656f7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_369ce97f75ef6b8abd00840c15693735dad0a5615c55b88b7683a54709656f7a->leave($__internal_369ce97f75ef6b8abd00840c15693735dad0a5615c55b88b7683a54709656f7a_prof);

        
        $__internal_eccaf07be7e3e620769f34800e1b4848ae357ea15059decd7c0bed3e946d00d5->leave($__internal_eccaf07be7e3e620769f34800e1b4848ae357ea15059decd7c0bed3e946d00d5_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "C:\\wamp64\\www\\PPE4_TOBAT\\TOBAT\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
