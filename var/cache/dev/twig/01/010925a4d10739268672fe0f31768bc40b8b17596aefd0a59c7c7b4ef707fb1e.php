<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_ffe97f5221c38ac5902a05e4c17b92ad8a8c15bef7051052f0b27c38c3cfad2a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_54de39e98619a934f805561e977aab3b5ea1bb6d934da3d9d018379bbc67150f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54de39e98619a934f805561e977aab3b5ea1bb6d934da3d9d018379bbc67150f->enter($__internal_54de39e98619a934f805561e977aab3b5ea1bb6d934da3d9d018379bbc67150f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_8b80521769f661e7b6f6dde193cd4a216fbed3e05a4735720f359cbf8ea34817 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b80521769f661e7b6f6dde193cd4a216fbed3e05a4735720f359cbf8ea34817->enter($__internal_8b80521769f661e7b6f6dde193cd4a216fbed3e05a4735720f359cbf8ea34817_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_54de39e98619a934f805561e977aab3b5ea1bb6d934da3d9d018379bbc67150f->leave($__internal_54de39e98619a934f805561e977aab3b5ea1bb6d934da3d9d018379bbc67150f_prof);

        
        $__internal_8b80521769f661e7b6f6dde193cd4a216fbed3e05a4735720f359cbf8ea34817->leave($__internal_8b80521769f661e7b6f6dde193cd4a216fbed3e05a4735720f359cbf8ea34817_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_367a548b4a075d760d5af046ea1a759044b871d2faaca821b9f60b2a2c609c4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_367a548b4a075d760d5af046ea1a759044b871d2faaca821b9f60b2a2c609c4c->enter($__internal_367a548b4a075d760d5af046ea1a759044b871d2faaca821b9f60b2a2c609c4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_0b65592e44bec87b83d29368c56d70cca10e84f7aa785fab94f6b7493b280afc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b65592e44bec87b83d29368c56d70cca10e84f7aa785fab94f6b7493b280afc->enter($__internal_0b65592e44bec87b83d29368c56d70cca10e84f7aa785fab94f6b7493b280afc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_0b65592e44bec87b83d29368c56d70cca10e84f7aa785fab94f6b7493b280afc->leave($__internal_0b65592e44bec87b83d29368c56d70cca10e84f7aa785fab94f6b7493b280afc_prof);

        
        $__internal_367a548b4a075d760d5af046ea1a759044b871d2faaca821b9f60b2a2c609c4c->leave($__internal_367a548b4a075d760d5af046ea1a759044b871d2faaca821b9f60b2a2c609c4c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/Users/julioromero/Desktop/cursoSymfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
