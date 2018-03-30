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
        $__internal_6f6bd4860e3e1e6f645765a7acbe0437b7a2856965330432e45c30de23800410 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f6bd4860e3e1e6f645765a7acbe0437b7a2856965330432e45c30de23800410->enter($__internal_6f6bd4860e3e1e6f645765a7acbe0437b7a2856965330432e45c30de23800410_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_146af147c804d1ee475d404fd7797e9ff4c827d98c4dbdd3671fa8cc60251525 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_146af147c804d1ee475d404fd7797e9ff4c827d98c4dbdd3671fa8cc60251525->enter($__internal_146af147c804d1ee475d404fd7797e9ff4c827d98c4dbdd3671fa8cc60251525_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f6bd4860e3e1e6f645765a7acbe0437b7a2856965330432e45c30de23800410->leave($__internal_6f6bd4860e3e1e6f645765a7acbe0437b7a2856965330432e45c30de23800410_prof);

        
        $__internal_146af147c804d1ee475d404fd7797e9ff4c827d98c4dbdd3671fa8cc60251525->leave($__internal_146af147c804d1ee475d404fd7797e9ff4c827d98c4dbdd3671fa8cc60251525_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ade66f1d4ae0adb7c6a1ad8b834c217991563a8afd66e26abb806a7315906804 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ade66f1d4ae0adb7c6a1ad8b834c217991563a8afd66e26abb806a7315906804->enter($__internal_ade66f1d4ae0adb7c6a1ad8b834c217991563a8afd66e26abb806a7315906804_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_90822cab4d9f71c33b5c460cf55b7ffb55f895ba58af8215314768f0e67b0517 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90822cab4d9f71c33b5c460cf55b7ffb55f895ba58af8215314768f0e67b0517->enter($__internal_90822cab4d9f71c33b5c460cf55b7ffb55f895ba58af8215314768f0e67b0517_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_90822cab4d9f71c33b5c460cf55b7ffb55f895ba58af8215314768f0e67b0517->leave($__internal_90822cab4d9f71c33b5c460cf55b7ffb55f895ba58af8215314768f0e67b0517_prof);

        
        $__internal_ade66f1d4ae0adb7c6a1ad8b834c217991563a8afd66e26abb806a7315906804->leave($__internal_ade66f1d4ae0adb7c6a1ad8b834c217991563a8afd66e26abb806a7315906804_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_36387acce20d8625070dcd326e57376f1bc2a38eeb8736da45ebc7e68726d937 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36387acce20d8625070dcd326e57376f1bc2a38eeb8736da45ebc7e68726d937->enter($__internal_36387acce20d8625070dcd326e57376f1bc2a38eeb8736da45ebc7e68726d937_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_503b3ed5f051e5bb08a17b64ea8672fd1f9bb7bca19800840bbbd7f466bd8b51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_503b3ed5f051e5bb08a17b64ea8672fd1f9bb7bca19800840bbbd7f466bd8b51->enter($__internal_503b3ed5f051e5bb08a17b64ea8672fd1f9bb7bca19800840bbbd7f466bd8b51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_503b3ed5f051e5bb08a17b64ea8672fd1f9bb7bca19800840bbbd7f466bd8b51->leave($__internal_503b3ed5f051e5bb08a17b64ea8672fd1f9bb7bca19800840bbbd7f466bd8b51_prof);

        
        $__internal_36387acce20d8625070dcd326e57376f1bc2a38eeb8736da45ebc7e68726d937->leave($__internal_36387acce20d8625070dcd326e57376f1bc2a38eeb8736da45ebc7e68726d937_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ae465de4b6a26906cd2ad3fde0d9fe18102e811cd429be553865eb9fb5db726b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae465de4b6a26906cd2ad3fde0d9fe18102e811cd429be553865eb9fb5db726b->enter($__internal_ae465de4b6a26906cd2ad3fde0d9fe18102e811cd429be553865eb9fb5db726b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_40420d86a50236a2c55235e0d3f1ce73da760ad76817d2026968b6a37b721c89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40420d86a50236a2c55235e0d3f1ce73da760ad76817d2026968b6a37b721c89->enter($__internal_40420d86a50236a2c55235e0d3f1ce73da760ad76817d2026968b6a37b721c89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_40420d86a50236a2c55235e0d3f1ce73da760ad76817d2026968b6a37b721c89->leave($__internal_40420d86a50236a2c55235e0d3f1ce73da760ad76817d2026968b6a37b721c89_prof);

        
        $__internal_ae465de4b6a26906cd2ad3fde0d9fe18102e811cd429be553865eb9fb5db726b->leave($__internal_ae465de4b6a26906cd2ad3fde0d9fe18102e811cd429be553865eb9fb5db726b_prof);

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
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\PPE4_TOBAT\\TOBAT\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
