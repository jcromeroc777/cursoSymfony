<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_8501c2cdd657970e453951a369ec58d334079abb00ee3b5064fae6749ed1cef9 extends Twig_Template
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
        $__internal_c7e27d585902c58c72955658eb2ef1be7fab5335cf252d6ab3e76ea126952927 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7e27d585902c58c72955658eb2ef1be7fab5335cf252d6ab3e76ea126952927->enter($__internal_c7e27d585902c58c72955658eb2ef1be7fab5335cf252d6ab3e76ea126952927_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_e2e2dbc4b648005ad76d10b546671e8abd6635208270e9591f210e31612cbc42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2e2dbc4b648005ad76d10b546671e8abd6635208270e9591f210e31612cbc42->enter($__internal_e2e2dbc4b648005ad76d10b546671e8abd6635208270e9591f210e31612cbc42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_c7e27d585902c58c72955658eb2ef1be7fab5335cf252d6ab3e76ea126952927->leave($__internal_c7e27d585902c58c72955658eb2ef1be7fab5335cf252d6ab3e76ea126952927_prof);

        
        $__internal_e2e2dbc4b648005ad76d10b546671e8abd6635208270e9591f210e31612cbc42->leave($__internal_e2e2dbc4b648005ad76d10b546671e8abd6635208270e9591f210e31612cbc42_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7e919224fddd8d57fdaf720e32a8bea9f3acf732e99ea7e3b8de50fab005284a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e919224fddd8d57fdaf720e32a8bea9f3acf732e99ea7e3b8de50fab005284a->enter($__internal_7e919224fddd8d57fdaf720e32a8bea9f3acf732e99ea7e3b8de50fab005284a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a92c1060455664d9ebf107dd8ce837529d2987c28fe81337eb206c4db1280b73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a92c1060455664d9ebf107dd8ce837529d2987c28fe81337eb206c4db1280b73->enter($__internal_a92c1060455664d9ebf107dd8ce837529d2987c28fe81337eb206c4db1280b73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_a92c1060455664d9ebf107dd8ce837529d2987c28fe81337eb206c4db1280b73->leave($__internal_a92c1060455664d9ebf107dd8ce837529d2987c28fe81337eb206c4db1280b73_prof);

        
        $__internal_7e919224fddd8d57fdaf720e32a8bea9f3acf732e99ea7e3b8de50fab005284a->leave($__internal_7e919224fddd8d57fdaf720e32a8bea9f3acf732e99ea7e3b8de50fab005284a_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_35f95a7e88c43393be79722f2bd77da1e7699abe0170ae2e17fbb30c60305234 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35f95a7e88c43393be79722f2bd77da1e7699abe0170ae2e17fbb30c60305234->enter($__internal_35f95a7e88c43393be79722f2bd77da1e7699abe0170ae2e17fbb30c60305234_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_55cc058534e9cc4f7a42dd912ac9d311a14072ee1e718e3e1caea04203f6f7db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55cc058534e9cc4f7a42dd912ac9d311a14072ee1e718e3e1caea04203f6f7db->enter($__internal_55cc058534e9cc4f7a42dd912ac9d311a14072ee1e718e3e1caea04203f6f7db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_55cc058534e9cc4f7a42dd912ac9d311a14072ee1e718e3e1caea04203f6f7db->leave($__internal_55cc058534e9cc4f7a42dd912ac9d311a14072ee1e718e3e1caea04203f6f7db_prof);

        
        $__internal_35f95a7e88c43393be79722f2bd77da1e7699abe0170ae2e17fbb30c60305234->leave($__internal_35f95a7e88c43393be79722f2bd77da1e7699abe0170ae2e17fbb30c60305234_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_7d22e0a02ee428047bf7fbb82e48a96d3ea00cb6defbefc42a1197eb2b0d9bdf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d22e0a02ee428047bf7fbb82e48a96d3ea00cb6defbefc42a1197eb2b0d9bdf->enter($__internal_7d22e0a02ee428047bf7fbb82e48a96d3ea00cb6defbefc42a1197eb2b0d9bdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2641498bb9429615f81558bc16567245c13e14570131feb23269fbea6775562d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2641498bb9429615f81558bc16567245c13e14570131feb23269fbea6775562d->enter($__internal_2641498bb9429615f81558bc16567245c13e14570131feb23269fbea6775562d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2641498bb9429615f81558bc16567245c13e14570131feb23269fbea6775562d->leave($__internal_2641498bb9429615f81558bc16567245c13e14570131feb23269fbea6775562d_prof);

        
        $__internal_7d22e0a02ee428047bf7fbb82e48a96d3ea00cb6defbefc42a1197eb2b0d9bdf->leave($__internal_7d22e0a02ee428047bf7fbb82e48a96d3ea00cb6defbefc42a1197eb2b0d9bdf_prof);

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
