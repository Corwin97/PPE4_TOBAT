<?php

/* TOBATBundle:Default:voir.html.twig */
class __TwigTemplate_df60fc3db30a08c78ae6566d9a69c2d6a0d8e53eec0d141cd70e29fa36cb0a6c extends Twig_Template
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
        $__internal_fbadcb9c8513ea46349a1fbbf8efbbaafadb8c750970e0ecb836134bb7931dfa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbadcb9c8513ea46349a1fbbf8efbbaafadb8c750970e0ecb836134bb7931dfa->enter($__internal_fbadcb9c8513ea46349a1fbbf8efbbaafadb8c750970e0ecb836134bb7931dfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TOBATBundle:Default:voir.html.twig"));

        $__internal_64a65b71518c739d11e0df75a28a2243040f304c682ae1cea5a64680da448e35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64a65b71518c739d11e0df75a28a2243040f304c682ae1cea5a64680da448e35->enter($__internal_64a65b71518c739d11e0df75a28a2243040f304c682ae1cea5a64680da448e35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TOBATBundle:Default:voir.html.twig"));

        // line 1
        echo "

<ul>
\t<li><a href=\"";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tobat_ajouter");
        echo "\">Ajouter un bateau</a></li>
\t<table>
\t<tr> <th> Prenom </th> 
\t<th> Prix </th>
\t\t<th> Type</th>
\t <th> Modifier </th>
\t <th> Supprimer</th> </tr>
\t";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["LesBateaux"]) ? $context["LesBateaux"] : $this->getContext($context, "LesBateaux")));
        foreach ($context['_seq'] as $context["_key"] => $context["bateau"]) {
            // line 12
            echo "\t\t<tr>
\t\t\t<td>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["bateau"], "nom", array()), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["bateau"], "prix", array()), "html", null, true);
            echo "
\t\t\t<td>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["bateau"], "type", array()), "html", null, true);
            echo "</td>
\t\t\t<td> <a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tobat_modifier", array("id" => $this->getAttribute($context["bateau"], "id", array()))), "html", null, true);
            echo "\">modifier</a>
\t\t\t<td> <a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tobat_supprimer", array("id" => $this->getAttribute($context["bateau"], "id", array()))), "html", null, true);
            echo "\">supprimer</a>
\t\t</tr>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bateau'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "\t</table>
\t\t
\t</ul>


";
        
        $__internal_fbadcb9c8513ea46349a1fbbf8efbbaafadb8c750970e0ecb836134bb7931dfa->leave($__internal_fbadcb9c8513ea46349a1fbbf8efbbaafadb8c750970e0ecb836134bb7931dfa_prof);

        
        $__internal_64a65b71518c739d11e0df75a28a2243040f304c682ae1cea5a64680da448e35->leave($__internal_64a65b71518c739d11e0df75a28a2243040f304c682ae1cea5a64680da448e35_prof);

    }

    public function getTemplateName()
    {
        return "TOBATBundle:Default:voir.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 20,  63 => 17,  59 => 16,  55 => 15,  51 => 14,  47 => 13,  44 => 12,  40 => 11,  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("

<ul>
\t<li><a href=\"{{ path('tobat_ajouter') }}\">Ajouter un bateau</a></li>
\t<table>
\t<tr> <th> Prenom </th> 
\t<th> Prix </th>
\t\t<th> Type</th>
\t <th> Modifier </th>
\t <th> Supprimer</th> </tr>
\t{% for bateau in LesBateaux %}
\t\t<tr>
\t\t\t<td>{{ bateau.nom }}</td>
\t\t\t<td>{{ bateau.prix}}
\t\t\t<td>{{ bateau.type }}</td>
\t\t\t<td> <a href=\"{{ path('tobat_modifier', {'id': bateau.id}) }}\">modifier</a>
\t\t\t<td> <a href=\"{{ path('tobat_supprimer', {'id': bateau.id}) }}\">supprimer</a>
\t\t</tr>
\t{% endfor %}
\t</table>
\t\t
\t</ul>


", "TOBATBundle:Default:voir.html.twig", "C:\\wamp64\\www\\PPE4_TOBAT\\TOBAT\\Symfony\\src\\TOBAT\\Bundle/Resources/views/Default/voir.html.twig");
    }
}
