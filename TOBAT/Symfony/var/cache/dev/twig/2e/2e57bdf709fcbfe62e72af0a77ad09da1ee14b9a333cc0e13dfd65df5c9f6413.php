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
        $__internal_52c81eb18c999bb5a779ef7762c406abc5f4e33550bad6e1b936339f1c465303 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52c81eb18c999bb5a779ef7762c406abc5f4e33550bad6e1b936339f1c465303->enter($__internal_52c81eb18c999bb5a779ef7762c406abc5f4e33550bad6e1b936339f1c465303_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TOBATBundle:Default:ajout.html.twig"));

        $__internal_2a3404f69b33963e611bf70dbdfcc6ce3f73e5f9067e973fd05b1fc39305a09d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a3404f69b33963e611bf70dbdfcc6ce3f73e5f9067e973fd05b1fc39305a09d->enter($__internal_2a3404f69b33963e611bf70dbdfcc6ce3f73e5f9067e973fd05b1fc39305a09d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TOBATBundle:Default:ajout.html.twig"));

        // line 1
        $this->displayBlock('title', $context, $blocks);
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('Sioblog_body', $context, $blocks);
        
        $__internal_52c81eb18c999bb5a779ef7762c406abc5f4e33550bad6e1b936339f1c465303->leave($__internal_52c81eb18c999bb5a779ef7762c406abc5f4e33550bad6e1b936339f1c465303_prof);

        
        $__internal_2a3404f69b33963e611bf70dbdfcc6ce3f73e5f9067e973fd05b1fc39305a09d->leave($__internal_2a3404f69b33963e611bf70dbdfcc6ce3f73e5f9067e973fd05b1fc39305a09d_prof);

    }

    // line 1
    public function block_title($context, array $blocks = array())
    {
        $__internal_4de749a4d506439ef5148f5507746f7bf536a689505f99ad795653ea16b2dec4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4de749a4d506439ef5148f5507746f7bf536a689505f99ad795653ea16b2dec4->enter($__internal_4de749a4d506439ef5148f5507746f7bf536a689505f99ad795653ea16b2dec4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3a789d96ea115a7224e141c22150591928f3de4c9d23cab3138227f37c08437c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a789d96ea115a7224e141c22150591928f3de4c9d23cab3138227f37c08437c->enter($__internal_3a789d96ea115a7224e141c22150591928f3de4c9d23cab3138227f37c08437c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 2
        echo "\t
";
        
        $__internal_3a789d96ea115a7224e141c22150591928f3de4c9d23cab3138227f37c08437c->leave($__internal_3a789d96ea115a7224e141c22150591928f3de4c9d23cab3138227f37c08437c_prof);

        
        $__internal_4de749a4d506439ef5148f5507746f7bf536a689505f99ad795653ea16b2dec4->leave($__internal_4de749a4d506439ef5148f5507746f7bf536a689505f99ad795653ea16b2dec4_prof);

    }

    // line 5
    public function block_Sioblog_body($context, array $blocks = array())
    {
        $__internal_9633951d618273e243b4f776c474c8ae0d04545c84267dd47c5aa6594f43d7ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9633951d618273e243b4f776c474c8ae0d04545c84267dd47c5aa6594f43d7ed->enter($__internal_9633951d618273e243b4f776c474c8ae0d04545c84267dd47c5aa6594f43d7ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Sioblog_body"));

        $__internal_a609d6293210d1a52f87eed36394a971969370450e0f0edfd20c95985ee390f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a609d6293210d1a52f87eed36394a971969370450e0f0edfd20c95985ee390f1->enter($__internal_a609d6293210d1a52f87eed36394a971969370450e0f0edfd20c95985ee390f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Sioblog_body"));

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
        
        $__internal_a609d6293210d1a52f87eed36394a971969370450e0f0edfd20c95985ee390f1->leave($__internal_a609d6293210d1a52f87eed36394a971969370450e0f0edfd20c95985ee390f1_prof);

        
        $__internal_9633951d618273e243b4f776c474c8ae0d04545c84267dd47c5aa6594f43d7ed->leave($__internal_9633951d618273e243b4f776c474c8ae0d04545c84267dd47c5aa6594f43d7ed_prof);

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
