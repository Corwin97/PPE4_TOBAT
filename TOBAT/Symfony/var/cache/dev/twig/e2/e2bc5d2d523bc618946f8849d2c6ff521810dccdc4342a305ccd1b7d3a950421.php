<?php

/* TOBATBundle:Default:formAjout.html.twig */
class __TwigTemplate_430c2ad31bad5b1c938aca20e89e8db3fa7bf20d9e9430595d19debafe3ebf22 extends Twig_Template
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
        $__internal_9f9eacda85dd0ee97152366d57c8baeba39aaf220d4eb3c67615042809aa9655 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f9eacda85dd0ee97152366d57c8baeba39aaf220d4eb3c67615042809aa9655->enter($__internal_9f9eacda85dd0ee97152366d57c8baeba39aaf220d4eb3c67615042809aa9655_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TOBATBundle:Default:formAjout.html.twig"));

        $__internal_038893c60e3c1adc000efb4862723c39f35d0908e242f8e50ef4a911a517b99a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_038893c60e3c1adc000efb4862723c39f35d0908e242f8e50ef4a911a517b99a->enter($__internal_038893c60e3c1adc000efb4862723c39f35d0908e242f8e50ef4a911a517b99a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TOBATBundle:Default:formAjout.html.twig"));

        // line 1
        echo "<h3>Ajouter un bateau</h3>

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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Nom "));
        echo "

    ";
        // line 19
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'errors');
        echo "

    <div class=\"col-sm-10\">
      ";
        // line 23
        echo "      ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
  </div>

 ";
        // line 28
        echo "  <div class=\"form-group\">
    ";
        // line 30
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prix", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Prix "));
        echo "

    ";
        // line 33
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prix", array()), 'errors');
        echo "

    <div class=\"col-sm-10\">
      ";
        // line 37
        echo "      ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prix", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
  </div>

   ";
        // line 42
        echo "  <div class=\"form-group\">
    ";
        // line 44
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "annee", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Année "));
        echo "

    ";
        // line 47
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "annee", array()), 'errors');
        echo "

    <div class=\"col-sm-10\">
      ";
        // line 51
        echo "      ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "annee", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
  </div>

 ";
        // line 56
        echo "  <div class=\"form-group\">
    ";
        // line 58
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "longueur", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Longueur "));
        echo "

    ";
        // line 61
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "longueur", array()), 'errors');
        echo "

    <div class=\"col-sm-10\">
      ";
        // line 65
        echo "      ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "longueur", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
  </div>

";
        // line 70
        echo "  <div class=\"form-group\">
    ";
        // line 72
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "largeur", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Largeur "));
        echo "

    ";
        // line 75
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "largeur", array()), 'errors');
        echo "

    <div class=\"col-sm-10\">
      ";
        // line 79
        echo "      ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "largeur", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
  </div>

";
        // line 84
        echo "  <div class=\"form-group\">
    ";
        // line 86
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hauteur", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Hauteur "));
        echo "

    ";
        // line 89
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hauteur", array()), 'errors');
        echo "

    <div class=\"col-sm-10\">
      ";
        // line 93
        echo "      ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hauteur", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
  </div>

";
        // line 98
        echo "  <div class=\"form-group\">
    ";
        // line 100
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "etat", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Etat "));
        echo "

    ";
        // line 103
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "etat", array()), 'errors');
        echo "

    <div class=\"col-sm-10\">
      ";
        // line 107
        echo "      ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "etat", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
  </div>

";
        // line 112
        echo "  <div class=\"form-group\">
    ";
        // line 114
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nbCabine", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Nombre de cabine "));
        echo "

    ";
        // line 117
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nbCabine", array()), 'errors');
        echo "

    <div class=\"col-sm-10\">
      ";
        // line 121
        echo "      ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nbCabine", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
  </div>

";
        // line 126
        echo "  <div class=\"form-group\">
    ";
        // line 128
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nbSaleEau", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Nombre de Salles d'eau "));
        echo "

    ";
        // line 131
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nbSaleEau", array()), 'errors');
        echo "

    <div class=\"col-sm-10\">
      ";
        // line 135
        echo "      ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nbSaleEau", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
  </div>

";
        // line 140
        echo "  <div class=\"form-group\">
    ";
        // line 142
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nbMoteur", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Nombre de Moteurs "));
        echo "

    ";
        // line 145
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nbMoteur", array()), 'errors');
        echo "

    <div class=\"col-sm-10\">
      ";
        // line 149
        echo "      ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nbMoteur", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
  </div>

";
        // line 154
        echo "  <div class=\"form-group\">
    ";
        // line 156
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "puissance", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Puissance "));
        echo "

    ";
        // line 159
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "puissance", array()), 'errors');
        echo "

    <div class=\"col-sm-10\">
      ";
        // line 163
        echo "      ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "puissance", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
  </div>

  ";
        // line 168
        echo "  <div class=\"form-group\">
    ";
        // line 170
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nbHMoteur", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "nbHMoteur "));
        echo "

    ";
        // line 173
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nbHMoteur", array()), 'errors');
        echo "

    <div class=\"col-sm-10\">
      ";
        // line 177
        echo "      ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nbHMoteur", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
  </div>

";
        // line 182
        echo "  <div class=\"form-group\">
    ";
        // line 184
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "energie", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Energie "));
        echo "

    ";
        // line 187
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "energie", array()), 'errors');
        echo "

    <div class=\"col-sm-10\">
      ";
        // line 191
        echo "      ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "energie", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
  </div>

  ";
        // line 196
        echo "  <div class=\"form-group\">
    ";
        // line 198
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "latitude", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Latitude "));
        echo "

    ";
        // line 201
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "latitude", array()), 'errors');
        echo "

    <div class=\"col-sm-10\">
      ";
        // line 205
        echo "      ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "latitude", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
  </div>

  ";
        // line 210
        echo "  <div class=\"form-group\">
    ";
        // line 212
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "longitude", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Longitude  "));
        echo "

    ";
        // line 215
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "longitude", array()), 'errors');
        echo "

    <div class=\"col-sm-10\">
      ";
        // line 219
        echo "      ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "longitude", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
  </div>

  ";
        // line 224
        echo "  <div class=\"form-group\">
    ";
        // line 226
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Type  "));
        echo "

    ";
        // line 229
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type", array()), 'errors');
        echo "

    <div class=\"col-sm-10\">
      ";
        // line 233
        echo "      ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
  </div>

    ";
        // line 238
        echo "  <div class=\"form-group\">
    ";
        // line 239
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "photo", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Photo "));
        echo "
    ";
        // line 240
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "photo", array()), 'errors');
        echo "
    <div class=\"col-sm-10\">
      ";
        // line 242
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "photo", array()), 'widget');
        echo "
    </div>
  </div>




  


  
</div>";
        
        $__internal_9f9eacda85dd0ee97152366d57c8baeba39aaf220d4eb3c67615042809aa9655->leave($__internal_9f9eacda85dd0ee97152366d57c8baeba39aaf220d4eb3c67615042809aa9655_prof);

        
        $__internal_038893c60e3c1adc000efb4862723c39f35d0908e242f8e50ef4a911a517b99a->leave($__internal_038893c60e3c1adc000efb4862723c39f35d0908e242f8e50ef4a911a517b99a_prof);

    }

    public function getTemplateName()
    {
        return "TOBATBundle:Default:formAjout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  442 => 242,  437 => 240,  433 => 239,  430 => 238,  422 => 233,  415 => 229,  409 => 226,  406 => 224,  398 => 219,  391 => 215,  385 => 212,  382 => 210,  374 => 205,  367 => 201,  361 => 198,  358 => 196,  350 => 191,  343 => 187,  337 => 184,  334 => 182,  326 => 177,  319 => 173,  313 => 170,  310 => 168,  302 => 163,  295 => 159,  289 => 156,  286 => 154,  278 => 149,  271 => 145,  265 => 142,  262 => 140,  254 => 135,  247 => 131,  241 => 128,  238 => 126,  230 => 121,  223 => 117,  217 => 114,  214 => 112,  206 => 107,  199 => 103,  193 => 100,  190 => 98,  182 => 93,  175 => 89,  169 => 86,  166 => 84,  158 => 79,  151 => 75,  145 => 72,  142 => 70,  134 => 65,  127 => 61,  121 => 58,  118 => 56,  110 => 51,  103 => 47,  97 => 44,  94 => 42,  86 => 37,  79 => 33,  73 => 30,  70 => 28,  62 => 23,  55 => 19,  49 => 16,  46 => 14,  41 => 10,  35 => 7,  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h3>Ajouter un bateau</h3>

<div class=\"well\">
  {{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}

  {# Les erreurs générales du formulaire. #}
  {{ form_errors(form) }}

  {# Génération du label + error + widget pour un champ. #}

 

  {# Génération manuelle du champ nom #}
  <div class=\"form-group\">
    {# Génération du label. #}
    {{ form_label(form.nom, \"Nom \", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}

    {# Affichage des erreurs pour ce champ précis. #}
    {{ form_errors(form.nom) }}

    <div class=\"col-sm-10\">
      {# Génération de l'input. #}
      {{ form_widget(form.nom, {'attr': {'class': 'form-control'}}) }}
    </div>
  </div>

 {# Génération manuelle du champ prix #}
  <div class=\"form-group\">
    {# Génération du label. #}
    {{ form_label(form.prix, \"Prix \", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}

    {# Affichage des erreurs pour ce champ précis. #}
    {{ form_errors(form.prix) }}

    <div class=\"col-sm-10\">
      {# Génération de l'input. #}
      {{ form_widget(form.prix, {'attr': {'class': 'form-control'}}) }}
    </div>
  </div>

   {# Génération manuelle du champ annee #}
  <div class=\"form-group\">
    {# Génération du label. #}
    {{ form_label(form.annee, \"Année \", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}

    {# Affichage des erreurs pour ce champ précis. #}
    {{ form_errors(form.annee) }}

    <div class=\"col-sm-10\">
      {# Génération de l'input. #}
      {{ form_widget(form.annee, {'attr': {'class': 'form-control'}}) }}
    </div>
  </div>

 {# Génération manuelle du champ longueur #}
  <div class=\"form-group\">
    {# Génération du label. #}
    {{ form_label(form.longueur, \"Longueur \", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}

    {# Affichage des erreurs pour ce champ précis. #}
    {{ form_errors(form.longueur) }}

    <div class=\"col-sm-10\">
      {# Génération de l'input. #}
      {{ form_widget(form.longueur, {'attr': {'class': 'form-control'}}) }}
    </div>
  </div>

{# Génération manuelle du champ largeur #}
  <div class=\"form-group\">
    {# Génération du label. #}
    {{ form_label(form.largeur, \"Largeur \", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}

    {# Affichage des erreurs pour ce champ précis. #}
    {{ form_errors(form.largeur) }}

    <div class=\"col-sm-10\">
      {# Génération de l'input. #}
      {{ form_widget(form.largeur, {'attr': {'class': 'form-control'}}) }}
    </div>
  </div>

{# Génération manuelle du champ hauteur #}
  <div class=\"form-group\">
    {# Génération du label. #}
    {{ form_label(form.hauteur, \"Hauteur \", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}

    {# Affichage des erreurs pour ce champ précis. #}
    {{ form_errors(form.hauteur) }}

    <div class=\"col-sm-10\">
      {# Génération de l'input. #}
      {{ form_widget(form.hauteur, {'attr': {'class': 'form-control'}}) }}
    </div>
  </div>

{# Génération manuelle du champ etat #}
  <div class=\"form-group\">
    {# Génération du label. #}
    {{ form_label(form.etat, \"Etat \", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}

    {# Affichage des erreurs pour ce champ précis. #}
    {{ form_errors(form.etat) }}

    <div class=\"col-sm-10\">
      {# Génération de l'input. #}
      {{ form_widget(form.etat, {'attr': {'class': 'form-control'}}) }}
    </div>
  </div>

{# Génération manuelle du champ nbCabine #}
  <div class=\"form-group\">
    {# Génération du label. #}
    {{ form_label(form.nbCabine, \"Nombre de cabine \", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}

    {# Affichage des erreurs pour ce champ précis. #}
    {{ form_errors(form.nbCabine) }}

    <div class=\"col-sm-10\">
      {# Génération de l'input. #}
      {{ form_widget(form.nbCabine, {'attr': {'class': 'form-control'}}) }}
    </div>
  </div>

{# Génération manuelle du champ nbSaleEau #}
  <div class=\"form-group\">
    {# Génération du label. #}
    {{ form_label(form.nbSaleEau, \"Nombre de Salles d'eau \", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}

    {# Affichage des erreurs pour ce champ précis. #}
    {{ form_errors(form.nbSaleEau) }}

    <div class=\"col-sm-10\">
      {# Génération de l'input. #}
      {{ form_widget(form.nbSaleEau, {'attr': {'class': 'form-control'}}) }}
    </div>
  </div>

{# Génération manuelle du champ nbMoteur #}
  <div class=\"form-group\">
    {# Génération du label. #}
    {{ form_label(form.nbMoteur, \"Nombre de Moteurs \", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}

    {# Affichage des erreurs pour ce champ précis. #}
    {{ form_errors(form.nbMoteur) }}

    <div class=\"col-sm-10\">
      {# Génération de l'input. #}
      {{ form_widget(form.nbMoteur, {'attr': {'class': 'form-control'}}) }}
    </div>
  </div>

{# Génération manuelle du champ puissance #}
  <div class=\"form-group\">
    {# Génération du label. #}
    {{ form_label(form.puissance, \"Puissance \", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}

    {# Affichage des erreurs pour ce champ précis. #}
    {{ form_errors(form.puissance) }}

    <div class=\"col-sm-10\">
      {# Génération de l'input. #}
      {{ form_widget(form.puissance, {'attr': {'class': 'form-control'}}) }}
    </div>
  </div>

  {# Génération manuelle du champ nbHMoteur #}
  <div class=\"form-group\">
    {# Génération du label. #}
    {{ form_label(form.nbHMoteur, \"nbHMoteur \", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}

    {# Affichage des erreurs pour ce champ précis. #}
    {{ form_errors(form.nbHMoteur) }}

    <div class=\"col-sm-10\">
      {# Génération de l'input. #}
      {{ form_widget(form.nbHMoteur, {'attr': {'class': 'form-control'}}) }}
    </div>
  </div>

{# Génération manuelle du champ energie #}
  <div class=\"form-group\">
    {# Génération du label. #}
    {{ form_label(form.energie, \"Energie \", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}

    {# Affichage des erreurs pour ce champ précis. #}
    {{ form_errors(form.energie) }}

    <div class=\"col-sm-10\">
      {# Génération de l'input. #}
      {{ form_widget(form.energie, {'attr': {'class': 'form-control'}}) }}
    </div>
  </div>

  {# Génération manuelle du champ latitude #}
  <div class=\"form-group\">
    {# Génération du label. #}
    {{ form_label(form.latitude, \"Latitude \", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}

    {# Affichage des erreurs pour ce champ précis. #}
    {{ form_errors(form.latitude) }}

    <div class=\"col-sm-10\">
      {# Génération de l'input. #}
      {{ form_widget(form.latitude, {'attr': {'class': 'form-control'}}) }}
    </div>
  </div>

  {# Génération manuelle du champ longitude  #}
  <div class=\"form-group\">
    {# Génération du label. #}
    {{ form_label(form.longitude , \"Longitude  \", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}

    {# Affichage des erreurs pour ce champ précis. #}
    {{ form_errors(form.longitude ) }}

    <div class=\"col-sm-10\">
      {# Génération de l'input. #}
      {{ form_widget(form.longitude , {'attr': {'class': 'form-control'}}) }}
    </div>
  </div>

  {# Génération manuelle du champ type  #}
  <div class=\"form-group\">
    {# Génération du label. #}
    {{ form_label(form.type , \"Type  \", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}

    {# Affichage des erreurs pour ce champ précis. #}
    {{ form_errors(form.type ) }}

    <div class=\"col-sm-10\">
      {# Génération de l'input. #}
      {{ form_widget(form.type , {'attr': {'class': 'form-control'}}) }}
    </div>
  </div>

    {# Idem pour le champ \"photo\". #}
  <div class=\"form-group\">
    {{ form_label(form.photo, \"Photo \", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}
    {{ form_errors(form.photo) }}
    <div class=\"col-sm-10\">
      {{ form_widget(form.photo)}}
    </div>
  </div>




  


  
</div>", "TOBATBundle:Default:formAjout.html.twig", "C:\\wamp64\\www\\PPE4_TOBAT.git\\TOBAT\\Symfony\\src\\TOBAT\\Bundle/Resources/views/Default/formAjout.html.twig");
    }
}
