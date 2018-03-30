<?php

/* TOBATBundle:Default:form.html.twig */
class __TwigTemplate_03607eba868c8815fd6998e79fca67931dab17d3570aa2063b0a477df692f755 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b08135ae66eac5c1e482430f5e38518e2bc4a742e99b34249ab9ff0433accd32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b08135ae66eac5c1e482430f5e38518e2bc4a742e99b34249ab9ff0433accd32->enter($__internal_b08135ae66eac5c1e482430f5e38518e2bc4a742e99b34249ab9ff0433accd32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TOBATBundle:Default:form.html.twig"));

        $__internal_df8435aea9846db6315529fce93ed05dc1851645a5d77da248846e43e051ec50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df8435aea9846db6315529fce93ed05dc1851645a5d77da248846e43e051ec50->enter($__internal_df8435aea9846db6315529fce93ed05dc1851645a5d77da248846e43e051ec50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TOBATBundle:Default:form.html.twig"));

        // line 1
        echo "<h3>Connexion</h3>

<div class=\"well\">
  ";
        // line 4
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "

  ";
        // line 7
        echo "  ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

  ";
        // line 10
        echo "
 

  ";
        // line 14
        echo "  <div class=\"form-group\">
    ";
        // line 16
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "login", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Login "));
        echo "

    ";
        // line 19
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "login", array()), 'errors');
        echo "

    <div class=\"col-sm-10\">
      ";
        // line 23
        echo "      ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "login", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
  </div>

  ";
        // line 28
        echo "  <div class=\"form-group\">
    ";
        // line 30
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Password "));
        echo "

    ";
        // line 33
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'errors');
        echo "

    <div class=\"col-sm-10\">
      ";
        // line 37
        echo "      ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
  </div>

  


  
</div>";
        
        $__internal_b08135ae66eac5c1e482430f5e38518e2bc4a742e99b34249ab9ff0433accd32->leave($__internal_b08135ae66eac5c1e482430f5e38518e2bc4a742e99b34249ab9ff0433accd32_prof);

        
        $__internal_df8435aea9846db6315529fce93ed05dc1851645a5d77da248846e43e051ec50->leave($__internal_df8435aea9846db6315529fce93ed05dc1851645a5d77da248846e43e051ec50_prof);

    }

    public function getTemplateName()
    {
        return "TOBATBundle:Default:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 37,  79 => 33,  73 => 30,  70 => 28,  62 => 23,  55 => 19,  49 => 16,  46 => 14,  41 => 10,  35 => 7,  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h3>Connexion</h3>

<div class=\"well\">
  {{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}

  {# Les erreurs générales du formulaire. #}
  {{ form_errors(form) }}

  {# Génération du label + error + widget pour un champ. #}

 

  {# Génération manuelle du champ login #}
  <div class=\"form-group\">
    {# Génération du label. #}
    {{ form_label(form.login, \"Login \", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}

    {# Affichage des erreurs pour ce champ précis. #}
    {{ form_errors(form.login) }}

    <div class=\"col-sm-10\">
      {# Génération de l'input. #}
      {{ form_widget(form.login, {'attr': {'class': 'form-control'}}) }}
    </div>
  </div>

  {# Génération manuelle du champ password #}
  <div class=\"form-group\">
    {# Génération du label. #}
    {{ form_label(form.password, \"Password \", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}

    {# Affichage des erreurs pour ce champ précis. #}
    {{ form_errors(form.password) }}

    <div class=\"col-sm-10\">
      {# Génération de l'input. #}
      {{ form_widget(form.password, {'attr': {'class': 'form-control'}}) }}
    </div>
  </div>

  


  
</div>", "TOBATBundle:Default:form.html.twig", "C:\\wamp64\\www\\PPE4_TOBAT\\TOBAT\\Symfony\\src\\TOBAT\\Bundle/Resources/views/Default/form.html.twig");
    }
}
