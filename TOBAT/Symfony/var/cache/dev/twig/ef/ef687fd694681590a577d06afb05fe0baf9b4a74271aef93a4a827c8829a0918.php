<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_298b9d532c6f95ae216b7e059274db33509b27f2aacdee327036a4a77528d802 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_44339f9332b13edbb36544956d16f8a84fe44b0f759b43db42397a67dbac547f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44339f9332b13edbb36544956d16f8a84fe44b0f759b43db42397a67dbac547f->enter($__internal_44339f9332b13edbb36544956d16f8a84fe44b0f759b43db42397a67dbac547f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_a46fbae5ce6a8d29a0842c7935f0388891599ae8f0b85614cfa44e1def02418c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a46fbae5ce6a8d29a0842c7935f0388891599ae8f0b85614cfa44e1def02418c->enter($__internal_a46fbae5ce6a8d29a0842c7935f0388891599ae8f0b85614cfa44e1def02418c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_44339f9332b13edbb36544956d16f8a84fe44b0f759b43db42397a67dbac547f->leave($__internal_44339f9332b13edbb36544956d16f8a84fe44b0f759b43db42397a67dbac547f_prof);

        
        $__internal_a46fbae5ce6a8d29a0842c7935f0388891599ae8f0b85614cfa44e1def02418c->leave($__internal_a46fbae5ce6a8d29a0842c7935f0388891599ae8f0b85614cfa44e1def02418c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_796bf202044cb21b018124fc303f65671d33089b0161a2bbad3bfcb9b9f9237e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_796bf202044cb21b018124fc303f65671d33089b0161a2bbad3bfcb9b9f9237e->enter($__internal_796bf202044cb21b018124fc303f65671d33089b0161a2bbad3bfcb9b9f9237e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_9277c5c80b76e15fa7007bdd5c0bdc431a4c9f877154f40385221268acee19ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9277c5c80b76e15fa7007bdd5c0bdc431a4c9f877154f40385221268acee19ea->enter($__internal_9277c5c80b76e15fa7007bdd5c0bdc431a4c9f877154f40385221268acee19ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9277c5c80b76e15fa7007bdd5c0bdc431a4c9f877154f40385221268acee19ea->leave($__internal_9277c5c80b76e15fa7007bdd5c0bdc431a4c9f877154f40385221268acee19ea_prof);

        
        $__internal_796bf202044cb21b018124fc303f65671d33089b0161a2bbad3bfcb9b9f9237e->leave($__internal_796bf202044cb21b018124fc303f65671d33089b0161a2bbad3bfcb9b9f9237e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0f0b7e7ee867a16512c25b1df39761f4ef5edb2913d5ef477c4e2bad04df66fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f0b7e7ee867a16512c25b1df39761f4ef5edb2913d5ef477c4e2bad04df66fb->enter($__internal_0f0b7e7ee867a16512c25b1df39761f4ef5edb2913d5ef477c4e2bad04df66fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4dfe043b31c7bcf737acaf9532ddc989d893d5e96fae3ad099025ed0c54f7f7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dfe043b31c7bcf737acaf9532ddc989d893d5e96fae3ad099025ed0c54f7f7c->enter($__internal_4dfe043b31c7bcf737acaf9532ddc989d893d5e96fae3ad099025ed0c54f7f7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4dfe043b31c7bcf737acaf9532ddc989d893d5e96fae3ad099025ed0c54f7f7c->leave($__internal_4dfe043b31c7bcf737acaf9532ddc989d893d5e96fae3ad099025ed0c54f7f7c_prof);

        
        $__internal_0f0b7e7ee867a16512c25b1df39761f4ef5edb2913d5ef477c4e2bad04df66fb->leave($__internal_0f0b7e7ee867a16512c25b1df39761f4ef5edb2913d5ef477c4e2bad04df66fb_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fc343538bfe425ef034c8f7525c365867dfb30a5ee854d37d6cb5fd9b354ca0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc343538bfe425ef034c8f7525c365867dfb30a5ee854d37d6cb5fd9b354ca0e->enter($__internal_fc343538bfe425ef034c8f7525c365867dfb30a5ee854d37d6cb5fd9b354ca0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_379b59d51ee0fe054202a45afa18b5d5747ac04053d0e422915bd815f3149377 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_379b59d51ee0fe054202a45afa18b5d5747ac04053d0e422915bd815f3149377->enter($__internal_379b59d51ee0fe054202a45afa18b5d5747ac04053d0e422915bd815f3149377_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_379b59d51ee0fe054202a45afa18b5d5747ac04053d0e422915bd815f3149377->leave($__internal_379b59d51ee0fe054202a45afa18b5d5747ac04053d0e422915bd815f3149377_prof);

        
        $__internal_fc343538bfe425ef034c8f7525c365867dfb30a5ee854d37d6cb5fd9b354ca0e->leave($__internal_fc343538bfe425ef034c8f7525c365867dfb30a5ee854d37d6cb5fd9b354ca0e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\PPE4_TOBAT.git\\TOBAT\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
