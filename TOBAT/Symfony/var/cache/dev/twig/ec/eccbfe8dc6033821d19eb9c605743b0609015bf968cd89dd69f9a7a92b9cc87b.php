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
        $__internal_62bdd7e8d728b9acb98637c20cb9217758063bd63bfaa54269c3f4a515f20dba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62bdd7e8d728b9acb98637c20cb9217758063bd63bfaa54269c3f4a515f20dba->enter($__internal_62bdd7e8d728b9acb98637c20cb9217758063bd63bfaa54269c3f4a515f20dba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TOBATBundle:Default:voir.html.twig"));

        $__internal_4a5597f6de0f3bc50244233422c29db6e714e9f8926eb5a5aed77efe2139bf1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a5597f6de0f3bc50244233422c29db6e714e9f8926eb5a5aed77efe2139bf1c->enter($__internal_4a5597f6de0f3bc50244233422c29db6e714e9f8926eb5a5aed77efe2139bf1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TOBATBundle:Default:voir.html.twig"));

        // line 1
        echo "

<ul>
\t<li><a href=\"";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tobat_ajouter");
        echo "\">Ajouter un bateau</a></li>
\t<table>
\t<tr> <th> Prenom </th> </tr>
\t";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["LesBateaux"]) ? $context["LesBateaux"] : $this->getContext($context, "LesBateaux")));
        foreach ($context['_seq'] as $context["_key"] => $context["bateau"]) {
            // line 8
            echo "\t\t<tr>
\t\t\t<td>";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["bateau"], "nom", array()), "html", null, true);
            echo "</td>
\t\t</tr>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bateau'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "\t</table>
\t\t
\t</ul>


";
        
        $__internal_62bdd7e8d728b9acb98637c20cb9217758063bd63bfaa54269c3f4a515f20dba->leave($__internal_62bdd7e8d728b9acb98637c20cb9217758063bd63bfaa54269c3f4a515f20dba_prof);

        
        $__internal_4a5597f6de0f3bc50244233422c29db6e714e9f8926eb5a5aed77efe2139bf1c->leave($__internal_4a5597f6de0f3bc50244233422c29db6e714e9f8926eb5a5aed77efe2139bf1c_prof);

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
        return array (  52 => 12,  43 => 9,  40 => 8,  36 => 7,  30 => 4,  25 => 1,);
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
\t<tr> <th> Prenom </th> </tr>
\t{% for bateau in LesBateaux %}
\t\t<tr>
\t\t\t<td>{{ bateau.nom }}</td>
\t\t</tr>
\t{% endfor %}
\t</table>
\t\t
\t</ul>


", "TOBATBundle:Default:voir.html.twig", "C:\\wamp64\\www\\PPE4_TOBAT\\TOBAT\\Symfony\\src\\TOBAT\\Bundle/Resources/views/Default/voir.html.twig");
    }
}
