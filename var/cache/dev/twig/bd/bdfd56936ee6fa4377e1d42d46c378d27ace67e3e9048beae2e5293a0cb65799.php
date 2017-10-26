<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_2dd97f27ac5f89f865cd89a67f3139f287d1870106b58a513127a69dba998323 extends Twig_Template
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
        $__internal_28d33976bd647e7571cd2afd6c8ab97d7385ef8c13fbec063fe0af0ed540cf70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28d33976bd647e7571cd2afd6c8ab97d7385ef8c13fbec063fe0af0ed540cf70->enter($__internal_28d33976bd647e7571cd2afd6c8ab97d7385ef8c13fbec063fe0af0ed540cf70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_f3bbf27f8a38f1a4e640420c32e73b324f11dd8c1ac7013fd9c6bfe9fce80037 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3bbf27f8a38f1a4e640420c32e73b324f11dd8c1ac7013fd9c6bfe9fce80037->enter($__internal_f3bbf27f8a38f1a4e640420c32e73b324f11dd8c1ac7013fd9c6bfe9fce80037_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_28d33976bd647e7571cd2afd6c8ab97d7385ef8c13fbec063fe0af0ed540cf70->leave($__internal_28d33976bd647e7571cd2afd6c8ab97d7385ef8c13fbec063fe0af0ed540cf70_prof);

        
        $__internal_f3bbf27f8a38f1a4e640420c32e73b324f11dd8c1ac7013fd9c6bfe9fce80037->leave($__internal_f3bbf27f8a38f1a4e640420c32e73b324f11dd8c1ac7013fd9c6bfe9fce80037_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_16d1febd37523bbf146e011de6d261f087940b88b2cffe56257a8949d47c6928 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16d1febd37523bbf146e011de6d261f087940b88b2cffe56257a8949d47c6928->enter($__internal_16d1febd37523bbf146e011de6d261f087940b88b2cffe56257a8949d47c6928_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d2f64a391a6be5358a0b1abfd085204873bb9355ce3dcd5644d44a36b1ca9493 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2f64a391a6be5358a0b1abfd085204873bb9355ce3dcd5644d44a36b1ca9493->enter($__internal_d2f64a391a6be5358a0b1abfd085204873bb9355ce3dcd5644d44a36b1ca9493_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_d2f64a391a6be5358a0b1abfd085204873bb9355ce3dcd5644d44a36b1ca9493->leave($__internal_d2f64a391a6be5358a0b1abfd085204873bb9355ce3dcd5644d44a36b1ca9493_prof);

        
        $__internal_16d1febd37523bbf146e011de6d261f087940b88b2cffe56257a8949d47c6928->leave($__internal_16d1febd37523bbf146e011de6d261f087940b88b2cffe56257a8949d47c6928_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_532c3c3ad8e5ec0e801f62b243e159f717d862105038b783296f12cede19db55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_532c3c3ad8e5ec0e801f62b243e159f717d862105038b783296f12cede19db55->enter($__internal_532c3c3ad8e5ec0e801f62b243e159f717d862105038b783296f12cede19db55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_276ba2895d045aa79bb7f52b524475961bc9c3ba98db3b020a59cb7cc15f1a92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_276ba2895d045aa79bb7f52b524475961bc9c3ba98db3b020a59cb7cc15f1a92->enter($__internal_276ba2895d045aa79bb7f52b524475961bc9c3ba98db3b020a59cb7cc15f1a92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_276ba2895d045aa79bb7f52b524475961bc9c3ba98db3b020a59cb7cc15f1a92->leave($__internal_276ba2895d045aa79bb7f52b524475961bc9c3ba98db3b020a59cb7cc15f1a92_prof);

        
        $__internal_532c3c3ad8e5ec0e801f62b243e159f717d862105038b783296f12cede19db55->leave($__internal_532c3c3ad8e5ec0e801f62b243e159f717d862105038b783296f12cede19db55_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_b07cf5e98942a45a5c16a28a2a306eaa2ac6027fdb83574b8af161d383bf532c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b07cf5e98942a45a5c16a28a2a306eaa2ac6027fdb83574b8af161d383bf532c->enter($__internal_b07cf5e98942a45a5c16a28a2a306eaa2ac6027fdb83574b8af161d383bf532c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f37c54184441bfde5b492f55eac91c6a67a9184dfd8617a63b2eee97769aa44a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f37c54184441bfde5b492f55eac91c6a67a9184dfd8617a63b2eee97769aa44a->enter($__internal_f37c54184441bfde5b492f55eac91c6a67a9184dfd8617a63b2eee97769aa44a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f37c54184441bfde5b492f55eac91c6a67a9184dfd8617a63b2eee97769aa44a->leave($__internal_f37c54184441bfde5b492f55eac91c6a67a9184dfd8617a63b2eee97769aa44a_prof);

        
        $__internal_b07cf5e98942a45a5c16a28a2a306eaa2ac6027fdb83574b8af161d383bf532c->leave($__internal_b07cf5e98942a45a5c16a28a2a306eaa2ac6027fdb83574b8af161d383bf532c_prof);

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
", "@Twig/layout.html.twig", "/Users/julioromero/Desktop/cursoSymfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
