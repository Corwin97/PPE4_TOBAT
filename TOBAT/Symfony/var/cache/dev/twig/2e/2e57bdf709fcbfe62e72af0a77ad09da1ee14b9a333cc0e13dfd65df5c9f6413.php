<?php

/* TOBATBundle:Default:ajout.html.twig */
class __TwigTemplate_27a2ef1ae1242687bfa34b921929875bb4da1de265b037f7bb45e69f912ed2a3 extends Twig_Template
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
        $__internal_b9011ecd1ccdeb41b54b51783773f9edabac6581634ce8ac8aa2bcac6da1ad9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9011ecd1ccdeb41b54b51783773f9edabac6581634ce8ac8aa2bcac6da1ad9f->enter($__internal_b9011ecd1ccdeb41b54b51783773f9edabac6581634ce8ac8aa2bcac6da1ad9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TOBATBundle:Default:ajout.html.twig"));

        $__internal_937eb1e58a271435b56b8213e1ec4a9615f91dbef67db7bad4386f4e27c20802 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_937eb1e58a271435b56b8213e1ec4a9615f91dbef67db7bad4386f4e27c20802->enter($__internal_937eb1e58a271435b56b8213e1ec4a9615f91dbef67db7bad4386f4e27c20802_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TOBATBundle:Default:ajout.html.twig"));

        // line 1
        $this->displayBlock('title', $context, $blocks);
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('Sioblog_body', $context, $blocks);
        
        $__internal_b9011ecd1ccdeb41b54b51783773f9edabac6581634ce8ac8aa2bcac6da1ad9f->leave($__internal_b9011ecd1ccdeb41b54b51783773f9edabac6581634ce8ac8aa2bcac6da1ad9f_prof);

        
        $__internal_937eb1e58a271435b56b8213e1ec4a9615f91dbef67db7bad4386f4e27c20802->leave($__internal_937eb1e58a271435b56b8213e1ec4a9615f91dbef67db7bad4386f4e27c20802_prof);

    }

    // line 1
    public function block_title($context, array $blocks = array())
    {
        $__internal_5f0f8aae237b9e31f0d954538838a042c630e2d5c7c4f0b1166af994d9e89d3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f0f8aae237b9e31f0d954538838a042c630e2d5c7c4f0b1166af994d9e89d3f->enter($__internal_5f0f8aae237b9e31f0d954538838a042c630e2d5c7c4f0b1166af994d9e89d3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c10d4fd6b395b111650725b23a28f3adcef45b0785af5e8af95fcd67e1be54ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c10d4fd6b395b111650725b23a28f3adcef45b0785af5e8af95fcd67e1be54ce->enter($__internal_c10d4fd6b395b111650725b23a28f3adcef45b0785af5e8af95fcd67e1be54ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 2
        echo "\t
";
        
        $__internal_c10d4fd6b395b111650725b23a28f3adcef45b0785af5e8af95fcd67e1be54ce->leave($__internal_c10d4fd6b395b111650725b23a28f3adcef45b0785af5e8af95fcd67e1be54ce_prof);

        
        $__internal_5f0f8aae237b9e31f0d954538838a042c630e2d5c7c4f0b1166af994d9e89d3f->leave($__internal_5f0f8aae237b9e31f0d954538838a042c630e2d5c7c4f0b1166af994d9e89d3f_prof);

    }

    // line 5
    public function block_Sioblog_body($context, array $blocks = array())
    {
        $__internal_006b5e69b1b9544f8992588fb62b3419c66d920e19a717854400c90291c9188c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_006b5e69b1b9544f8992588fb62b3419c66d920e19a717854400c90291c9188c->enter($__internal_006b5e69b1b9544f8992588fb62b3419c66d920e19a717854400c90291c9188c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Sioblog_body"));

        $__internal_8fbafee84ca40b61cd048510f95be48451f64bc8d4b49bc37704d17c3c433098 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fbafee84ca40b61cd048510f95be48451f64bc8d4b49bc37704d17c3c433098->enter($__internal_8fbafee84ca40b61cd048510f95be48451f64bc8d4b49bc37704d17c3c433098_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Sioblog_body"));

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
        
        $__internal_8fbafee84ca40b61cd048510f95be48451f64bc8d4b49bc37704d17c3c433098->leave($__internal_8fbafee84ca40b61cd048510f95be48451f64bc8d4b49bc37704d17c3c433098_prof);

        
        $__internal_006b5e69b1b9544f8992588fb62b3419c66d920e19a717854400c90291c9188c->leave($__internal_006b5e69b1b9544f8992588fb62b3419c66d920e19a717854400c90291c9188c_prof);

    }

    public function getTemplateName()
    {
        return "TOBATBundle:Default:ajout.html.twig";
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

{% endblock %}", "TOBATBundle:Default:ajout.html.twig", "C:\\wamp64\\www\\PPE4_TOBAT\\TOBAT\\Symfony\\src\\TOBAT\\Bundle/Resources/views/Default/ajout.html.twig");
    }
}
