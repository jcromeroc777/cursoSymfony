<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_bc7d54b7afb954f64b058365c9fe35bc678d685126ac77c83f40fb65913cf522 extends Twig_Template
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
        $__internal_6a955079625dfbb1215bdf429594715de813f3b7282460560d8935822fc5e4f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a955079625dfbb1215bdf429594715de813f3b7282460560d8935822fc5e4f6->enter($__internal_6a955079625dfbb1215bdf429594715de813f3b7282460560d8935822fc5e4f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_fe8a250158de4f644ff232610040d8697ff50694cbcf949dbd6c9393f0d9636d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe8a250158de4f644ff232610040d8697ff50694cbcf949dbd6c9393f0d9636d->enter($__internal_fe8a250158de4f644ff232610040d8697ff50694cbcf949dbd6c9393f0d9636d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a955079625dfbb1215bdf429594715de813f3b7282460560d8935822fc5e4f6->leave($__internal_6a955079625dfbb1215bdf429594715de813f3b7282460560d8935822fc5e4f6_prof);

        
        $__internal_fe8a250158de4f644ff232610040d8697ff50694cbcf949dbd6c9393f0d9636d->leave($__internal_fe8a250158de4f644ff232610040d8697ff50694cbcf949dbd6c9393f0d9636d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2e81eb6879bff48a8809512a5bb7bd491685429e8a96be56a615558319920b0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e81eb6879bff48a8809512a5bb7bd491685429e8a96be56a615558319920b0b->enter($__internal_2e81eb6879bff48a8809512a5bb7bd491685429e8a96be56a615558319920b0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_274ac3b47c91d93c6d78e6525e2fefb73e280308817b0e801ffc2dfae8417aa4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_274ac3b47c91d93c6d78e6525e2fefb73e280308817b0e801ffc2dfae8417aa4->enter($__internal_274ac3b47c91d93c6d78e6525e2fefb73e280308817b0e801ffc2dfae8417aa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_274ac3b47c91d93c6d78e6525e2fefb73e280308817b0e801ffc2dfae8417aa4->leave($__internal_274ac3b47c91d93c6d78e6525e2fefb73e280308817b0e801ffc2dfae8417aa4_prof);

        
        $__internal_2e81eb6879bff48a8809512a5bb7bd491685429e8a96be56a615558319920b0b->leave($__internal_2e81eb6879bff48a8809512a5bb7bd491685429e8a96be56a615558319920b0b_prof);

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
