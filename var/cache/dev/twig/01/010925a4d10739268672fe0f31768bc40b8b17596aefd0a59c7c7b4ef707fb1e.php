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
        $__internal_43858f34a9d68a9ad92738b47f12352aaf531da5e1ec46e234638c27fbfb47bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43858f34a9d68a9ad92738b47f12352aaf531da5e1ec46e234638c27fbfb47bf->enter($__internal_43858f34a9d68a9ad92738b47f12352aaf531da5e1ec46e234638c27fbfb47bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_d369709f4bb71356f6d082d9773c5484340797e29052e498dce6ec87c7a16a95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d369709f4bb71356f6d082d9773c5484340797e29052e498dce6ec87c7a16a95->enter($__internal_d369709f4bb71356f6d082d9773c5484340797e29052e498dce6ec87c7a16a95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_43858f34a9d68a9ad92738b47f12352aaf531da5e1ec46e234638c27fbfb47bf->leave($__internal_43858f34a9d68a9ad92738b47f12352aaf531da5e1ec46e234638c27fbfb47bf_prof);

        
        $__internal_d369709f4bb71356f6d082d9773c5484340797e29052e498dce6ec87c7a16a95->leave($__internal_d369709f4bb71356f6d082d9773c5484340797e29052e498dce6ec87c7a16a95_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_712c7e161f03081addfc04acaf05cdc3c98c2b16ef27d944757a0857dc4695aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_712c7e161f03081addfc04acaf05cdc3c98c2b16ef27d944757a0857dc4695aa->enter($__internal_712c7e161f03081addfc04acaf05cdc3c98c2b16ef27d944757a0857dc4695aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_06daf835b641562e865406104318c00671b1015f39fea07278d03051ddc4e595 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06daf835b641562e865406104318c00671b1015f39fea07278d03051ddc4e595->enter($__internal_06daf835b641562e865406104318c00671b1015f39fea07278d03051ddc4e595_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_06daf835b641562e865406104318c00671b1015f39fea07278d03051ddc4e595->leave($__internal_06daf835b641562e865406104318c00671b1015f39fea07278d03051ddc4e595_prof);

        
        $__internal_712c7e161f03081addfc04acaf05cdc3c98c2b16ef27d944757a0857dc4695aa->leave($__internal_712c7e161f03081addfc04acaf05cdc3c98c2b16ef27d944757a0857dc4695aa_prof);

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
