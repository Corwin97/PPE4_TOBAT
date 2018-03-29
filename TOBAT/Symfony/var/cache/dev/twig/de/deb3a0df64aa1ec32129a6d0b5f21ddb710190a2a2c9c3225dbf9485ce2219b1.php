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
            'Sioblog_body' => array($this, 'block_Sioblog_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b45910e9c8b0c8741402de1e7cf629beef9b0d1f3044a6c3479b716a229767d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b45910e9c8b0c8741402de1e7cf629beef9b0d1f3044a6c3479b716a229767d6->enter($__internal_b45910e9c8b0c8741402de1e7cf629beef9b0d1f3044a6c3479b716a229767d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TOBATBundle:Default:index.html.twig"));

        $__internal_80b74b1298fc61d07a20e855338745241bf96389a5ecb411ee9b6e31c115ba24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80b74b1298fc61d07a20e855338745241bf96389a5ecb411ee9b6e31c115ba24->enter($__internal_80b74b1298fc61d07a20e855338745241bf96389a5ecb411ee9b6e31c115ba24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TOBATBundle:Default:index.html.twig"));

        // line 1
        $this->displayBlock('title', $context, $blocks);
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('Sioblog_body', $context, $blocks);
        
        $__internal_b45910e9c8b0c8741402de1e7cf629beef9b0d1f3044a6c3479b716a229767d6->leave($__internal_b45910e9c8b0c8741402de1e7cf629beef9b0d1f3044a6c3479b716a229767d6_prof);

        
        $__internal_80b74b1298fc61d07a20e855338745241bf96389a5ecb411ee9b6e31c115ba24->leave($__internal_80b74b1298fc61d07a20e855338745241bf96389a5ecb411ee9b6e31c115ba24_prof);

    }

    // line 1
    public function block_title($context, array $blocks = array())
    {
        $__internal_2db064a1253e3c4014eb39ea2a6a9ac070fd447415299a2fdfc6f383a575c330 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2db064a1253e3c4014eb39ea2a6a9ac070fd447415299a2fdfc6f383a575c330->enter($__internal_2db064a1253e3c4014eb39ea2a6a9ac070fd447415299a2fdfc6f383a575c330_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_308ae1ba6bea2a321f0e50660d00583a83d61226838854451fbd91cc8af51cdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_308ae1ba6bea2a321f0e50660d00583a83d61226838854451fbd91cc8af51cdf->enter($__internal_308ae1ba6bea2a321f0e50660d00583a83d61226838854451fbd91cc8af51cdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 2
        echo "\t
";
        
        $__internal_308ae1ba6bea2a321f0e50660d00583a83d61226838854451fbd91cc8af51cdf->leave($__internal_308ae1ba6bea2a321f0e50660d00583a83d61226838854451fbd91cc8af51cdf_prof);

        
        $__internal_2db064a1253e3c4014eb39ea2a6a9ac070fd447415299a2fdfc6f383a575c330->leave($__internal_2db064a1253e3c4014eb39ea2a6a9ac070fd447415299a2fdfc6f383a575c330_prof);

    }

    // line 5
    public function block_Sioblog_body($context, array $blocks = array())
    {
        $__internal_186ff1e327d8d2d7cd604afd75c896083dfb001ee0aacd3199a740df85133dbe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_186ff1e327d8d2d7cd604afd75c896083dfb001ee0aacd3199a740df85133dbe->enter($__internal_186ff1e327d8d2d7cd604afd75c896083dfb001ee0aacd3199a740df85133dbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Sioblog_body"));

        $__internal_e4625adf19393fecbef24be3ecdccd1678ab6ca6d3286af4747704efb90762ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4625adf19393fecbef24be3ecdccd1678ab6ca6d3286af4747704efb90762ef->enter($__internal_e4625adf19393fecbef24be3ecdccd1678ab6ca6d3286af4747704efb90762ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Sioblog_body"));

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
        
        $__internal_e4625adf19393fecbef24be3ecdccd1678ab6ca6d3286af4747704efb90762ef->leave($__internal_e4625adf19393fecbef24be3ecdccd1678ab6ca6d3286af4747704efb90762ef_prof);

        
        $__internal_186ff1e327d8d2d7cd604afd75c896083dfb001ee0aacd3199a740df85133dbe->leave($__internal_186ff1e327d8d2d7cd604afd75c896083dfb001ee0aacd3199a740df85133dbe_prof);

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

{% block Sioblog_body %}

\t{{ include (\"TOBATBundle:Default:form.html.twig\")}}
\t<a href=\"{{ path('tobat_connexion') }}\">Valider</a>

\t<ul>
\t\t
\t</ul>

{% endblock %}", "TOBATBundle:Default:index.html.twig", "C:\\wamp64\\www\\PPE4_TOBAT.git\\TOBAT\\Symfony\\src\\TOBAT\\Bundle/Resources/views/Default/index.html.twig");
    }
}
