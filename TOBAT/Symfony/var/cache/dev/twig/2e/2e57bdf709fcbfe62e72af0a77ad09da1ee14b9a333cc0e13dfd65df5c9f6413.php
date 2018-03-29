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
        $__internal_faa4871e181dedae2774340795e7b7a0c5fe1ecb25500a667259e0cf758f0040 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_faa4871e181dedae2774340795e7b7a0c5fe1ecb25500a667259e0cf758f0040->enter($__internal_faa4871e181dedae2774340795e7b7a0c5fe1ecb25500a667259e0cf758f0040_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TOBATBundle:Default:ajout.html.twig"));

        $__internal_37f7e5db69c62566746939841b5903c6fa9d0f6ed335ded1023ed6c9edd1686c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37f7e5db69c62566746939841b5903c6fa9d0f6ed335ded1023ed6c9edd1686c->enter($__internal_37f7e5db69c62566746939841b5903c6fa9d0f6ed335ded1023ed6c9edd1686c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TOBATBundle:Default:ajout.html.twig"));

        // line 1
        $this->displayBlock('title', $context, $blocks);
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('Sioblog_body', $context, $blocks);
        
        $__internal_faa4871e181dedae2774340795e7b7a0c5fe1ecb25500a667259e0cf758f0040->leave($__internal_faa4871e181dedae2774340795e7b7a0c5fe1ecb25500a667259e0cf758f0040_prof);

        
        $__internal_37f7e5db69c62566746939841b5903c6fa9d0f6ed335ded1023ed6c9edd1686c->leave($__internal_37f7e5db69c62566746939841b5903c6fa9d0f6ed335ded1023ed6c9edd1686c_prof);

    }

    // line 1
    public function block_title($context, array $blocks = array())
    {
        $__internal_dd63cb0d42d3a08beba58f4c765e1b9025348d6f5b25ca8c129bf418ff106363 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd63cb0d42d3a08beba58f4c765e1b9025348d6f5b25ca8c129bf418ff106363->enter($__internal_dd63cb0d42d3a08beba58f4c765e1b9025348d6f5b25ca8c129bf418ff106363_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a5e0d5cd87edea52ce0421788a0d335571a222405b8c11bf696fc35869bbffbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5e0d5cd87edea52ce0421788a0d335571a222405b8c11bf696fc35869bbffbc->enter($__internal_a5e0d5cd87edea52ce0421788a0d335571a222405b8c11bf696fc35869bbffbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 2
        echo "\t
";
        
        $__internal_a5e0d5cd87edea52ce0421788a0d335571a222405b8c11bf696fc35869bbffbc->leave($__internal_a5e0d5cd87edea52ce0421788a0d335571a222405b8c11bf696fc35869bbffbc_prof);

        
        $__internal_dd63cb0d42d3a08beba58f4c765e1b9025348d6f5b25ca8c129bf418ff106363->leave($__internal_dd63cb0d42d3a08beba58f4c765e1b9025348d6f5b25ca8c129bf418ff106363_prof);

    }

    // line 5
    public function block_Sioblog_body($context, array $blocks = array())
    {
        $__internal_beb5b5deaffa7d84b09e464d489b61a222f3113790e1da7a0476d316040c05c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_beb5b5deaffa7d84b09e464d489b61a222f3113790e1da7a0476d316040c05c8->enter($__internal_beb5b5deaffa7d84b09e464d489b61a222f3113790e1da7a0476d316040c05c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Sioblog_body"));

        $__internal_4985bdea3bb4550d20d64677081da1e39dc3524f12290e51094504de7c8785e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4985bdea3bb4550d20d64677081da1e39dc3524f12290e51094504de7c8785e9->enter($__internal_4985bdea3bb4550d20d64677081da1e39dc3524f12290e51094504de7c8785e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Sioblog_body"));

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
        
        $__internal_4985bdea3bb4550d20d64677081da1e39dc3524f12290e51094504de7c8785e9->leave($__internal_4985bdea3bb4550d20d64677081da1e39dc3524f12290e51094504de7c8785e9_prof);

        
        $__internal_beb5b5deaffa7d84b09e464d489b61a222f3113790e1da7a0476d316040c05c8->leave($__internal_beb5b5deaffa7d84b09e464d489b61a222f3113790e1da7a0476d316040c05c8_prof);

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

{% endblock %}", "TOBATBundle:Default:ajout.html.twig", "C:\\wamp64\\www\\PPE4_TOBAT.git\\TOBAT\\Symfony\\src\\TOBAT\\Bundle/Resources/views/Default/ajout.html.twig");
    }
}
