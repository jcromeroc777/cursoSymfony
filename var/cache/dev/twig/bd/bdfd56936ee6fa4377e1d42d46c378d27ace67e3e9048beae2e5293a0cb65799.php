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
        $__internal_2506638d03a081cd6113493e34dd53b5c924a429230d845af29b4ad67d0e5879 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2506638d03a081cd6113493e34dd53b5c924a429230d845af29b4ad67d0e5879->enter($__internal_2506638d03a081cd6113493e34dd53b5c924a429230d845af29b4ad67d0e5879_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_40bd6856c197455bcf35311d16fcd458aa6e3cf6b5ebc87ac93db8dea3e70c05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40bd6856c197455bcf35311d16fcd458aa6e3cf6b5ebc87ac93db8dea3e70c05->enter($__internal_40bd6856c197455bcf35311d16fcd458aa6e3cf6b5ebc87ac93db8dea3e70c05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_2506638d03a081cd6113493e34dd53b5c924a429230d845af29b4ad67d0e5879->leave($__internal_2506638d03a081cd6113493e34dd53b5c924a429230d845af29b4ad67d0e5879_prof);

        
        $__internal_40bd6856c197455bcf35311d16fcd458aa6e3cf6b5ebc87ac93db8dea3e70c05->leave($__internal_40bd6856c197455bcf35311d16fcd458aa6e3cf6b5ebc87ac93db8dea3e70c05_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_278ff5846d73fba40696658cd9d8cb423025f95e18fa9060b19095984acbe9ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_278ff5846d73fba40696658cd9d8cb423025f95e18fa9060b19095984acbe9ad->enter($__internal_278ff5846d73fba40696658cd9d8cb423025f95e18fa9060b19095984acbe9ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5082fd2f043c8740e7f64d30d4a100a9bbf1781d0bce10fe70ca0707de83ef69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5082fd2f043c8740e7f64d30d4a100a9bbf1781d0bce10fe70ca0707de83ef69->enter($__internal_5082fd2f043c8740e7f64d30d4a100a9bbf1781d0bce10fe70ca0707de83ef69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_5082fd2f043c8740e7f64d30d4a100a9bbf1781d0bce10fe70ca0707de83ef69->leave($__internal_5082fd2f043c8740e7f64d30d4a100a9bbf1781d0bce10fe70ca0707de83ef69_prof);

        
        $__internal_278ff5846d73fba40696658cd9d8cb423025f95e18fa9060b19095984acbe9ad->leave($__internal_278ff5846d73fba40696658cd9d8cb423025f95e18fa9060b19095984acbe9ad_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_e0f1443066efd4cda927fcf4c2845ca800b3275403377de3251fb52f00e65ae6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0f1443066efd4cda927fcf4c2845ca800b3275403377de3251fb52f00e65ae6->enter($__internal_e0f1443066efd4cda927fcf4c2845ca800b3275403377de3251fb52f00e65ae6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ad3008d44c92acfc5191ac12cdada40bc60ea49108f8a6f66e75b8530b0f8bff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad3008d44c92acfc5191ac12cdada40bc60ea49108f8a6f66e75b8530b0f8bff->enter($__internal_ad3008d44c92acfc5191ac12cdada40bc60ea49108f8a6f66e75b8530b0f8bff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_ad3008d44c92acfc5191ac12cdada40bc60ea49108f8a6f66e75b8530b0f8bff->leave($__internal_ad3008d44c92acfc5191ac12cdada40bc60ea49108f8a6f66e75b8530b0f8bff_prof);

        
        $__internal_e0f1443066efd4cda927fcf4c2845ca800b3275403377de3251fb52f00e65ae6->leave($__internal_e0f1443066efd4cda927fcf4c2845ca800b3275403377de3251fb52f00e65ae6_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_147e7bc1d6ebb24a491ff87e38e9237056a6af0181f5c45f79b84ded330e4cb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_147e7bc1d6ebb24a491ff87e38e9237056a6af0181f5c45f79b84ded330e4cb1->enter($__internal_147e7bc1d6ebb24a491ff87e38e9237056a6af0181f5c45f79b84ded330e4cb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_10ff774e52610ec65da37f469dd0c44f5b7a953f6b3d36afc647a73075390ec4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10ff774e52610ec65da37f469dd0c44f5b7a953f6b3d36afc647a73075390ec4->enter($__internal_10ff774e52610ec65da37f469dd0c44f5b7a953f6b3d36afc647a73075390ec4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_10ff774e52610ec65da37f469dd0c44f5b7a953f6b3d36afc647a73075390ec4->leave($__internal_10ff774e52610ec65da37f469dd0c44f5b7a953f6b3d36afc647a73075390ec4_prof);

        
        $__internal_147e7bc1d6ebb24a491ff87e38e9237056a6af0181f5c45f79b84ded330e4cb1->leave($__internal_147e7bc1d6ebb24a491ff87e38e9237056a6af0181f5c45f79b84ded330e4cb1_prof);

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
