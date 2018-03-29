<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_5d54ece49f3eaea3b8641a621aa5ea65eab7f2456c91cd9fb7e51d715f7116e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_ee60bc69acbc15ed12c92e6651250c12714aec1cb85d8365ee4ab44db89efe31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee60bc69acbc15ed12c92e6651250c12714aec1cb85d8365ee4ab44db89efe31->enter($__internal_ee60bc69acbc15ed12c92e6651250c12714aec1cb85d8365ee4ab44db89efe31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_f7bc128b6f005395bdd8ec63a59dd7360b25c0eaaf7a98cc25e918efcf9f3d6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7bc128b6f005395bdd8ec63a59dd7360b25c0eaaf7a98cc25e918efcf9f3d6b->enter($__internal_f7bc128b6f005395bdd8ec63a59dd7360b25c0eaaf7a98cc25e918efcf9f3d6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee60bc69acbc15ed12c92e6651250c12714aec1cb85d8365ee4ab44db89efe31->leave($__internal_ee60bc69acbc15ed12c92e6651250c12714aec1cb85d8365ee4ab44db89efe31_prof);

        
        $__internal_f7bc128b6f005395bdd8ec63a59dd7360b25c0eaaf7a98cc25e918efcf9f3d6b->leave($__internal_f7bc128b6f005395bdd8ec63a59dd7360b25c0eaaf7a98cc25e918efcf9f3d6b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4406365b83628aa0a35d25734240b22328fee2e3fc3ab1ee5b394605926ff807 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4406365b83628aa0a35d25734240b22328fee2e3fc3ab1ee5b394605926ff807->enter($__internal_4406365b83628aa0a35d25734240b22328fee2e3fc3ab1ee5b394605926ff807_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_55dd75293b0108f9e690e0c2a7dcf38e0f934f29215fca1f7afd1e1d3dbc47d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55dd75293b0108f9e690e0c2a7dcf38e0f934f29215fca1f7afd1e1d3dbc47d9->enter($__internal_55dd75293b0108f9e690e0c2a7dcf38e0f934f29215fca1f7afd1e1d3dbc47d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_55dd75293b0108f9e690e0c2a7dcf38e0f934f29215fca1f7afd1e1d3dbc47d9->leave($__internal_55dd75293b0108f9e690e0c2a7dcf38e0f934f29215fca1f7afd1e1d3dbc47d9_prof);

        
        $__internal_4406365b83628aa0a35d25734240b22328fee2e3fc3ab1ee5b394605926ff807->leave($__internal_4406365b83628aa0a35d25734240b22328fee2e3fc3ab1ee5b394605926ff807_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9f4698024756b63bfd39403d9b74a5acf2b8b25b4af6c517b17c2c32ae3e2da2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f4698024756b63bfd39403d9b74a5acf2b8b25b4af6c517b17c2c32ae3e2da2->enter($__internal_9f4698024756b63bfd39403d9b74a5acf2b8b25b4af6c517b17c2c32ae3e2da2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a5ca316d7c4e81f75b72a581df9743625fa91bd67aaf0a47e545514694a87653 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5ca316d7c4e81f75b72a581df9743625fa91bd67aaf0a47e545514694a87653->enter($__internal_a5ca316d7c4e81f75b72a581df9743625fa91bd67aaf0a47e545514694a87653_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_a5ca316d7c4e81f75b72a581df9743625fa91bd67aaf0a47e545514694a87653->leave($__internal_a5ca316d7c4e81f75b72a581df9743625fa91bd67aaf0a47e545514694a87653_prof);

        
        $__internal_9f4698024756b63bfd39403d9b74a5acf2b8b25b4af6c517b17c2c32ae3e2da2->leave($__internal_9f4698024756b63bfd39403d9b74a5acf2b8b25b4af6c517b17c2c32ae3e2da2_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_22843df99fd6ae085d503170c72565ea297e172c6d2aa2084bb6a06731d387ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22843df99fd6ae085d503170c72565ea297e172c6d2aa2084bb6a06731d387ec->enter($__internal_22843df99fd6ae085d503170c72565ea297e172c6d2aa2084bb6a06731d387ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6b53003c7164790ad966eabc80997d52964b285d321df383cbd2428516ce2fe0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b53003c7164790ad966eabc80997d52964b285d321df383cbd2428516ce2fe0->enter($__internal_6b53003c7164790ad966eabc80997d52964b285d321df383cbd2428516ce2fe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_6b53003c7164790ad966eabc80997d52964b285d321df383cbd2428516ce2fe0->leave($__internal_6b53003c7164790ad966eabc80997d52964b285d321df383cbd2428516ce2fe0_prof);

        
        $__internal_22843df99fd6ae085d503170c72565ea297e172c6d2aa2084bb6a06731d387ec->leave($__internal_22843df99fd6ae085d503170c72565ea297e172c6d2aa2084bb6a06731d387ec_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp64\\www\\PPE4_TOBAT.git\\TOBAT\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
