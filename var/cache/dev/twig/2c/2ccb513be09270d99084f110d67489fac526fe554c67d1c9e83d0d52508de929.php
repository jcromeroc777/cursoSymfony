<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_edaf73c63603964fb658c57af8131b0c2cdc9036093ba63fa1e26ededaf215dc extends Twig_Template
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
        $__internal_40f874c2aeeebde58d37a5d1aef6b1bdd9693867952b14b91323cb6c141613e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40f874c2aeeebde58d37a5d1aef6b1bdd9693867952b14b91323cb6c141613e2->enter($__internal_40f874c2aeeebde58d37a5d1aef6b1bdd9693867952b14b91323cb6c141613e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_615a1875a45e55c914762d3b95b3ca7ed195ee5fab739edb0a99d2663c8b7dda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_615a1875a45e55c914762d3b95b3ca7ed195ee5fab739edb0a99d2663c8b7dda->enter($__internal_615a1875a45e55c914762d3b95b3ca7ed195ee5fab739edb0a99d2663c8b7dda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_40f874c2aeeebde58d37a5d1aef6b1bdd9693867952b14b91323cb6c141613e2->leave($__internal_40f874c2aeeebde58d37a5d1aef6b1bdd9693867952b14b91323cb6c141613e2_prof);

        
        $__internal_615a1875a45e55c914762d3b95b3ca7ed195ee5fab739edb0a99d2663c8b7dda->leave($__internal_615a1875a45e55c914762d3b95b3ca7ed195ee5fab739edb0a99d2663c8b7dda_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_67ec327b658c52094923012b386939962a295ba50452885c15edde4fe0a0ad81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67ec327b658c52094923012b386939962a295ba50452885c15edde4fe0a0ad81->enter($__internal_67ec327b658c52094923012b386939962a295ba50452885c15edde4fe0a0ad81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_10ce07c18fb5a5034c2d951742ca6edec666672582d22bfbb3c91b4d9040a22e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10ce07c18fb5a5034c2d951742ca6edec666672582d22bfbb3c91b4d9040a22e->enter($__internal_10ce07c18fb5a5034c2d951742ca6edec666672582d22bfbb3c91b4d9040a22e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_10ce07c18fb5a5034c2d951742ca6edec666672582d22bfbb3c91b4d9040a22e->leave($__internal_10ce07c18fb5a5034c2d951742ca6edec666672582d22bfbb3c91b4d9040a22e_prof);

        
        $__internal_67ec327b658c52094923012b386939962a295ba50452885c15edde4fe0a0ad81->leave($__internal_67ec327b658c52094923012b386939962a295ba50452885c15edde4fe0a0ad81_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
", "@WebProfiler/Collector/ajax.html.twig", "/Applications/MAMP/htdocs/cursoSymfony3/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
