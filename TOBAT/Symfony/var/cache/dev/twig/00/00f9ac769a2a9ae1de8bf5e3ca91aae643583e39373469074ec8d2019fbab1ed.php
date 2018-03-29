<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_45210378ad38c86f804adad8123ee2e01207f245b419baad86a07fba02c444de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e9a70e882be7ef53d21f8f5887d439df3efb6a6aa2dc40f164c448991842ef38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9a70e882be7ef53d21f8f5887d439df3efb6a6aa2dc40f164c448991842ef38->enter($__internal_e9a70e882be7ef53d21f8f5887d439df3efb6a6aa2dc40f164c448991842ef38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_d5066fa37af6eb4099ec5d38dec79fd675b9670539e1328bdac8bff4a18375e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5066fa37af6eb4099ec5d38dec79fd675b9670539e1328bdac8bff4a18375e8->enter($__internal_d5066fa37af6eb4099ec5d38dec79fd675b9670539e1328bdac8bff4a18375e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_e9a70e882be7ef53d21f8f5887d439df3efb6a6aa2dc40f164c448991842ef38->leave($__internal_e9a70e882be7ef53d21f8f5887d439df3efb6a6aa2dc40f164c448991842ef38_prof);

        
        $__internal_d5066fa37af6eb4099ec5d38dec79fd675b9670539e1328bdac8bff4a18375e8->leave($__internal_d5066fa37af6eb4099ec5d38dec79fd675b9670539e1328bdac8bff4a18375e8_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f74deefe81ca342023b2273ea83d8238bfab504ee692c9524bd0838df9c7b0f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f74deefe81ca342023b2273ea83d8238bfab504ee692c9524bd0838df9c7b0f6->enter($__internal_f74deefe81ca342023b2273ea83d8238bfab504ee692c9524bd0838df9c7b0f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b67b5de89f899fe577997776540247904e891b328a340479c5b9abc67ce8e10e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b67b5de89f899fe577997776540247904e891b328a340479c5b9abc67ce8e10e->enter($__internal_b67b5de89f899fe577997776540247904e891b328a340479c5b9abc67ce8e10e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_b67b5de89f899fe577997776540247904e891b328a340479c5b9abc67ce8e10e->leave($__internal_b67b5de89f899fe577997776540247904e891b328a340479c5b9abc67ce8e10e_prof);

        
        $__internal_f74deefe81ca342023b2273ea83d8238bfab504ee692c9524bd0838df9c7b0f6->leave($__internal_f74deefe81ca342023b2273ea83d8238bfab504ee692c9524bd0838df9c7b0f6_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_e135dcbfa91f95034c6fb58b6b8dc8bf2a4fc638d81389af011c42c3f6f7700d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e135dcbfa91f95034c6fb58b6b8dc8bf2a4fc638d81389af011c42c3f6f7700d->enter($__internal_e135dcbfa91f95034c6fb58b6b8dc8bf2a4fc638d81389af011c42c3f6f7700d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_39f25f1fe88f4a8baa3420f44e0b881236c1bc0261f5cb3952e4343d8bb3b4d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39f25f1fe88f4a8baa3420f44e0b881236c1bc0261f5cb3952e4343d8bb3b4d1->enter($__internal_39f25f1fe88f4a8baa3420f44e0b881236c1bc0261f5cb3952e4343d8bb3b4d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_39f25f1fe88f4a8baa3420f44e0b881236c1bc0261f5cb3952e4343d8bb3b4d1->leave($__internal_39f25f1fe88f4a8baa3420f44e0b881236c1bc0261f5cb3952e4343d8bb3b4d1_prof);

        
        $__internal_e135dcbfa91f95034c6fb58b6b8dc8bf2a4fc638d81389af011c42c3f6f7700d->leave($__internal_e135dcbfa91f95034c6fb58b6b8dc8bf2a4fc638d81389af011c42c3f6f7700d_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_0b61431903379149ba4c3951bee219710205e2ac2bcedce85d2bf58d2f3a2a74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b61431903379149ba4c3951bee219710205e2ac2bcedce85d2bf58d2f3a2a74->enter($__internal_0b61431903379149ba4c3951bee219710205e2ac2bcedce85d2bf58d2f3a2a74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bf56344f407a0834d94c50bd7bd92246d04972048b4e9e65763394889ff0fc39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf56344f407a0834d94c50bd7bd92246d04972048b4e9e65763394889ff0fc39->enter($__internal_bf56344f407a0834d94c50bd7bd92246d04972048b4e9e65763394889ff0fc39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_bf56344f407a0834d94c50bd7bd92246d04972048b4e9e65763394889ff0fc39->leave($__internal_bf56344f407a0834d94c50bd7bd92246d04972048b4e9e65763394889ff0fc39_prof);

        
        $__internal_0b61431903379149ba4c3951bee219710205e2ac2bcedce85d2bf58d2f3a2a74->leave($__internal_0b61431903379149ba4c3951bee219710205e2ac2bcedce85d2bf58d2f3a2a74_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "C:\\wamp64\\www\\PPE4_TOBAT.git\\TOBAT\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
