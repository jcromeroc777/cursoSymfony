<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_40d17f889cda0e9198fdd0de6a45002f4e95d20d7f1dda71b6e52967dec960e9 extends Twig_Template
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
        $__internal_74c65893d2bfe0823251753766323518c61faa6444f862413135f9c8200a29b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74c65893d2bfe0823251753766323518c61faa6444f862413135f9c8200a29b8->enter($__internal_74c65893d2bfe0823251753766323518c61faa6444f862413135f9c8200a29b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_772f6485b35c28a63e80c7553794a6dbcfe1c294e8e48db993fa451f317e59a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_772f6485b35c28a63e80c7553794a6dbcfe1c294e8e48db993fa451f317e59a9->enter($__internal_772f6485b35c28a63e80c7553794a6dbcfe1c294e8e48db993fa451f317e59a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_74c65893d2bfe0823251753766323518c61faa6444f862413135f9c8200a29b8->leave($__internal_74c65893d2bfe0823251753766323518c61faa6444f862413135f9c8200a29b8_prof);

        
        $__internal_772f6485b35c28a63e80c7553794a6dbcfe1c294e8e48db993fa451f317e59a9->leave($__internal_772f6485b35c28a63e80c7553794a6dbcfe1c294e8e48db993fa451f317e59a9_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_42706ea8124af3d210ccfb395d117151320030ef2707f21209fef904c856eeaf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42706ea8124af3d210ccfb395d117151320030ef2707f21209fef904c856eeaf->enter($__internal_42706ea8124af3d210ccfb395d117151320030ef2707f21209fef904c856eeaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cc7ceeb82657f656dc5b00479ab2f5c0813f95dc4121325e856733cc86228142 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc7ceeb82657f656dc5b00479ab2f5c0813f95dc4121325e856733cc86228142->enter($__internal_cc7ceeb82657f656dc5b00479ab2f5c0813f95dc4121325e856733cc86228142_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_cc7ceeb82657f656dc5b00479ab2f5c0813f95dc4121325e856733cc86228142->leave($__internal_cc7ceeb82657f656dc5b00479ab2f5c0813f95dc4121325e856733cc86228142_prof);

        
        $__internal_42706ea8124af3d210ccfb395d117151320030ef2707f21209fef904c856eeaf->leave($__internal_42706ea8124af3d210ccfb395d117151320030ef2707f21209fef904c856eeaf_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_4541f78294baed16347cfeb81ec5375564945727dc4ea8f8b9e50a62b7894a17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4541f78294baed16347cfeb81ec5375564945727dc4ea8f8b9e50a62b7894a17->enter($__internal_4541f78294baed16347cfeb81ec5375564945727dc4ea8f8b9e50a62b7894a17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_694636a53ef38c46e3e2ec42ad21c853fa6f2ba256c6d23e55e4b430de31e963 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_694636a53ef38c46e3e2ec42ad21c853fa6f2ba256c6d23e55e4b430de31e963->enter($__internal_694636a53ef38c46e3e2ec42ad21c853fa6f2ba256c6d23e55e4b430de31e963_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_694636a53ef38c46e3e2ec42ad21c853fa6f2ba256c6d23e55e4b430de31e963->leave($__internal_694636a53ef38c46e3e2ec42ad21c853fa6f2ba256c6d23e55e4b430de31e963_prof);

        
        $__internal_4541f78294baed16347cfeb81ec5375564945727dc4ea8f8b9e50a62b7894a17->leave($__internal_4541f78294baed16347cfeb81ec5375564945727dc4ea8f8b9e50a62b7894a17_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_1568eeea9ec2f22e2ab883cf322a8c84d7102ab930243560f58e5f7a501bf98b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1568eeea9ec2f22e2ab883cf322a8c84d7102ab930243560f58e5f7a501bf98b->enter($__internal_1568eeea9ec2f22e2ab883cf322a8c84d7102ab930243560f58e5f7a501bf98b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_12297ce0a54cfd935d204d2f083536ea29aac87aed227cd40262a284619e458a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12297ce0a54cfd935d204d2f083536ea29aac87aed227cd40262a284619e458a->enter($__internal_12297ce0a54cfd935d204d2f083536ea29aac87aed227cd40262a284619e458a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_12297ce0a54cfd935d204d2f083536ea29aac87aed227cd40262a284619e458a->leave($__internal_12297ce0a54cfd935d204d2f083536ea29aac87aed227cd40262a284619e458a_prof);

        
        $__internal_1568eeea9ec2f22e2ab883cf322a8c84d7102ab930243560f58e5f7a501bf98b->leave($__internal_1568eeea9ec2f22e2ab883cf322a8c84d7102ab930243560f58e5f7a501bf98b_prof);

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
", "@Twig/layout.html.twig", "/Applications/MAMP/htdocs/cursoSymfony3/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
