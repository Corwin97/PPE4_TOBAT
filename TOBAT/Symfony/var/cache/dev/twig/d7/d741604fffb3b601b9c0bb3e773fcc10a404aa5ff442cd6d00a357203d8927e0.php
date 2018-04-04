<?php

/* TOBATBundle:Default:modification.html.twig */
class __TwigTemplate_080829db3d5b7995d98c219277f96489d9da63fb71e3cc1f97f393dfafc2a13b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'Sioblog_body' => array($this, 'block_Sioblog_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f0edac9ad57ad95d742bd1d43e27b136984fb4550209877eba54658e3d0b32d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0edac9ad57ad95d742bd1d43e27b136984fb4550209877eba54658e3d0b32d8->enter($__internal_f0edac9ad57ad95d742bd1d43e27b136984fb4550209877eba54658e3d0b32d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TOBATBundle:Default:modification.html.twig"));

        $__internal_05a3f9fb82474bebfb7ed852f86cf8ca7b8f2b2fde9ac808cfb65c7d174d6165 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05a3f9fb82474bebfb7ed852f86cf8ca7b8f2b2fde9ac808cfb65c7d174d6165->enter($__internal_05a3f9fb82474bebfb7ed852f86cf8ca7b8f2b2fde9ac808cfb65c7d174d6165_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TOBATBundle:Default:modification.html.twig"));

        // line 1
        $this->displayBlock('title', $context, $blocks);
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('Sioblog_body', $context, $blocks);
        
        $__internal_f0edac9ad57ad95d742bd1d43e27b136984fb4550209877eba54658e3d0b32d8->leave($__internal_f0edac9ad57ad95d742bd1d43e27b136984fb4550209877eba54658e3d0b32d8_prof);

        
        $__internal_05a3f9fb82474bebfb7ed852f86cf8ca7b8f2b2fde9ac808cfb65c7d174d6165->leave($__internal_05a3f9fb82474bebfb7ed852f86cf8ca7b8f2b2fde9ac808cfb65c7d174d6165_prof);

    }

    // line 1
    public function block_title($context, array $blocks = array())
    {
        $__internal_46a0bb4c10ed1191904832683a4fa56241f8b6436457737229ed5568b0c14853 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46a0bb4c10ed1191904832683a4fa56241f8b6436457737229ed5568b0c14853->enter($__internal_46a0bb4c10ed1191904832683a4fa56241f8b6436457737229ed5568b0c14853_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_41fdb7ba0ed3866a757df3459a200ddfa191d5a03086f926b69da0bcb0ef1752 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41fdb7ba0ed3866a757df3459a200ddfa191d5a03086f926b69da0bcb0ef1752->enter($__internal_41fdb7ba0ed3866a757df3459a200ddfa191d5a03086f926b69da0bcb0ef1752_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 2
        echo "\t
";
        
        $__internal_41fdb7ba0ed3866a757df3459a200ddfa191d5a03086f926b69da0bcb0ef1752->leave($__internal_41fdb7ba0ed3866a757df3459a200ddfa191d5a03086f926b69da0bcb0ef1752_prof);

        
        $__internal_46a0bb4c10ed1191904832683a4fa56241f8b6436457737229ed5568b0c14853->leave($__internal_46a0bb4c10ed1191904832683a4fa56241f8b6436457737229ed5568b0c14853_prof);

    }

    // line 5
    public function block_Sioblog_body($context, array $blocks = array())
    {
        $__internal_54de20b3096957598710e8b44facaf8e76095d30d7a481ef367acfbcfe7632c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54de20b3096957598710e8b44facaf8e76095d30d7a481ef367acfbcfe7632c1->enter($__internal_54de20b3096957598710e8b44facaf8e76095d30d7a481ef367acfbcfe7632c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Sioblog_body"));

        $__internal_4d8eaab7d275bdd3dbda171631aeced88fb3d0b0510a281823494f7a35195b86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d8eaab7d275bdd3dbda171631aeced88fb3d0b0510a281823494f7a35195b86->enter($__internal_4d8eaab7d275bdd3dbda171631aeced88fb3d0b0510a281823494f7a35195b86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Sioblog_body"));

        // line 6
        echo "
\t";
        // line 7
        echo twig_include($this->env, $context, "TOBATBundle:Default:formAjout.html.twig");
        echo "
\t
\t<ul>
\t\t
\t</ul>

";
        
        $__internal_4d8eaab7d275bdd3dbda171631aeced88fb3d0b0510a281823494f7a35195b86->leave($__internal_4d8eaab7d275bdd3dbda171631aeced88fb3d0b0510a281823494f7a35195b86_prof);

        
        $__internal_54de20b3096957598710e8b44facaf8e76095d30d7a481ef367acfbcfe7632c1->leave($__internal_54de20b3096957598710e8b44facaf8e76095d30d7a481ef367acfbcfe7632c1_prof);

    }

    public function getTemplateName()
    {
        return "TOBATBundle:Default:modification.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  74 => 7,  71 => 6,  62 => 5,  51 => 2,  42 => 1,  32 => 5,  29 => 4,  27 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block title %}
\t
{% endblock %}

{% block Sioblog_body %}

\t{{ include (\"TOBATBundle:Default:formAjout.html.twig\")}}
\t
\t<ul>
\t\t
\t</ul>

{% endblock %}", "TOBATBundle:Default:modification.html.twig", "C:\\wamp64\\www\\PPE4_TOBAT\\TOBAT\\Symfony\\src\\TOBAT\\Bundle/Resources/views/Default/modification.html.twig");
    }
}
