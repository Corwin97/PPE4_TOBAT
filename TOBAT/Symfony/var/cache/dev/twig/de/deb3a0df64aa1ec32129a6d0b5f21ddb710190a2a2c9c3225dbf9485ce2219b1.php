<?php

/* TOBATBundle:Default:index.html.twig */
class __TwigTemplate_e402b0ae740cf828851b23fbb2095c65b6fe721bedc050c7820aedef7495852e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'TOBAT_body' => array($this, 'block_TOBAT_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a4347e7ff565bb0166fb468d2eb926977d11c524d7ab244bdaa23d210aeaafa0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4347e7ff565bb0166fb468d2eb926977d11c524d7ab244bdaa23d210aeaafa0->enter($__internal_a4347e7ff565bb0166fb468d2eb926977d11c524d7ab244bdaa23d210aeaafa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TOBATBundle:Default:index.html.twig"));

        $__internal_e4a6c3aa281508dbb18377fa4ad73c7093a893c83d2b129b3a1860fe10d2681c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4a6c3aa281508dbb18377fa4ad73c7093a893c83d2b129b3a1860fe10d2681c->enter($__internal_e4a6c3aa281508dbb18377fa4ad73c7093a893c83d2b129b3a1860fe10d2681c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TOBATBundle:Default:index.html.twig"));

        // line 1
        $this->displayBlock('title', $context, $blocks);
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('TOBAT_body', $context, $blocks);
        
        $__internal_a4347e7ff565bb0166fb468d2eb926977d11c524d7ab244bdaa23d210aeaafa0->leave($__internal_a4347e7ff565bb0166fb468d2eb926977d11c524d7ab244bdaa23d210aeaafa0_prof);

        
        $__internal_e4a6c3aa281508dbb18377fa4ad73c7093a893c83d2b129b3a1860fe10d2681c->leave($__internal_e4a6c3aa281508dbb18377fa4ad73c7093a893c83d2b129b3a1860fe10d2681c_prof);

    }

    // line 1
    public function block_title($context, array $blocks = array())
    {
        $__internal_7b5f025d15d73c96cff3b5d2d3f7b2d726edb165d9efb19e652f30c587559452 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b5f025d15d73c96cff3b5d2d3f7b2d726edb165d9efb19e652f30c587559452->enter($__internal_7b5f025d15d73c96cff3b5d2d3f7b2d726edb165d9efb19e652f30c587559452_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_78939a1042161652558c1754fb74679d9472fb95e55927226b8e147881446a37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78939a1042161652558c1754fb74679d9472fb95e55927226b8e147881446a37->enter($__internal_78939a1042161652558c1754fb74679d9472fb95e55927226b8e147881446a37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 2
        echo "\t
";
        
        $__internal_78939a1042161652558c1754fb74679d9472fb95e55927226b8e147881446a37->leave($__internal_78939a1042161652558c1754fb74679d9472fb95e55927226b8e147881446a37_prof);

        
        $__internal_7b5f025d15d73c96cff3b5d2d3f7b2d726edb165d9efb19e652f30c587559452->leave($__internal_7b5f025d15d73c96cff3b5d2d3f7b2d726edb165d9efb19e652f30c587559452_prof);

    }

    // line 5
    public function block_TOBAT_body($context, array $blocks = array())
    {
        $__internal_fcb62fee81dfe23cf66df0ffb326e2d9488dc2128a9532dc8d37783428498d33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcb62fee81dfe23cf66df0ffb326e2d9488dc2128a9532dc8d37783428498d33->enter($__internal_fcb62fee81dfe23cf66df0ffb326e2d9488dc2128a9532dc8d37783428498d33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "TOBAT_body"));

        $__internal_9e6bf5b0f4bd64d0bc555d82aefc1afb1ed8f8bb9527040786d6042bb2eb14b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e6bf5b0f4bd64d0bc555d82aefc1afb1ed8f8bb9527040786d6042bb2eb14b1->enter($__internal_9e6bf5b0f4bd64d0bc555d82aefc1afb1ed8f8bb9527040786d6042bb2eb14b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "TOBAT_body"));

        // line 6
        echo "
\t";
        // line 7
        echo twig_include($this->env, $context, "TOBATBundle:Default:form.html.twig");
        echo "
\t<a href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tobat_connexion");
        echo "\">Valider</a>

\t<ul>
\t\t
\t</ul>

";
        
        $__internal_9e6bf5b0f4bd64d0bc555d82aefc1afb1ed8f8bb9527040786d6042bb2eb14b1->leave($__internal_9e6bf5b0f4bd64d0bc555d82aefc1afb1ed8f8bb9527040786d6042bb2eb14b1_prof);

        
        $__internal_fcb62fee81dfe23cf66df0ffb326e2d9488dc2128a9532dc8d37783428498d33->leave($__internal_fcb62fee81dfe23cf66df0ffb326e2d9488dc2128a9532dc8d37783428498d33_prof);

    }

    public function getTemplateName()
    {
        return "TOBATBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  78 => 8,  74 => 7,  71 => 6,  62 => 5,  51 => 2,  42 => 1,  32 => 5,  29 => 4,  27 => 1,);
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

{% block TOBAT_body %}

\t{{ include (\"TOBATBundle:Default:form.html.twig\")}}
\t<a href=\"{{ path('tobat_connexion') }}\">Valider</a>

\t<ul>
\t\t
\t</ul>

{% endblock %}", "TOBATBundle:Default:index.html.twig", "C:\\wamp64\\www\\PPE4_TOBAT\\TOBAT\\Symfony\\src\\TOBAT\\Bundle/Resources/views/Default/index.html.twig");
    }
}
