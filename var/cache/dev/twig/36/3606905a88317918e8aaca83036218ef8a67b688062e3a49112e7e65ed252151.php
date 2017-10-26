<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_cf162f25fa3b6f82cee69ba6f883fb7c82621dcf246f7c18429b115a3511835f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_25988a1f1b62aab56159eb85f5759fd25059397b6f9deb95a9877cd2866d9aac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25988a1f1b62aab56159eb85f5759fd25059397b6f9deb95a9877cd2866d9aac->enter($__internal_25988a1f1b62aab56159eb85f5759fd25059397b6f9deb95a9877cd2866d9aac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_c9603bfb9da170ae1944c2a2729c1b4b837908931b7437bb435042c777947e82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9603bfb9da170ae1944c2a2729c1b4b837908931b7437bb435042c777947e82->enter($__internal_c9603bfb9da170ae1944c2a2729c1b4b837908931b7437bb435042c777947e82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_25988a1f1b62aab56159eb85f5759fd25059397b6f9deb95a9877cd2866d9aac->leave($__internal_25988a1f1b62aab56159eb85f5759fd25059397b6f9deb95a9877cd2866d9aac_prof);

        
        $__internal_c9603bfb9da170ae1944c2a2729c1b4b837908931b7437bb435042c777947e82->leave($__internal_c9603bfb9da170ae1944c2a2729c1b4b837908931b7437bb435042c777947e82_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_eb1cc67adc846175154a46c024fd4e20fafe5e16d78dc87b13f46e21c7f9b217 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb1cc67adc846175154a46c024fd4e20fafe5e16d78dc87b13f46e21c7f9b217->enter($__internal_eb1cc67adc846175154a46c024fd4e20fafe5e16d78dc87b13f46e21c7f9b217_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ffd86086e94d5f2967b35490e927779241c1c9d2ae429582622f2d8b19127e32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffd86086e94d5f2967b35490e927779241c1c9d2ae429582622f2d8b19127e32->enter($__internal_ffd86086e94d5f2967b35490e927779241c1c9d2ae429582622f2d8b19127e32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_ffd86086e94d5f2967b35490e927779241c1c9d2ae429582622f2d8b19127e32->leave($__internal_ffd86086e94d5f2967b35490e927779241c1c9d2ae429582622f2d8b19127e32_prof);

        
        $__internal_eb1cc67adc846175154a46c024fd4e20fafe5e16d78dc87b13f46e21c7f9b217->leave($__internal_eb1cc67adc846175154a46c024fd4e20fafe5e16d78dc87b13f46e21c7f9b217_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4c6d6a1b8a7d228a2a6685a79547965df1a8e6fbe70ed0ffc3f474db920e08e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c6d6a1b8a7d228a2a6685a79547965df1a8e6fbe70ed0ffc3f474db920e08e0->enter($__internal_4c6d6a1b8a7d228a2a6685a79547965df1a8e6fbe70ed0ffc3f474db920e08e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ced33fbfbdb204e8c74ffe9b5ee2edbbcee9bb40d0d973100a008292be7cbfb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ced33fbfbdb204e8c74ffe9b5ee2edbbcee9bb40d0d973100a008292be7cbfb5->enter($__internal_ced33fbfbdb204e8c74ffe9b5ee2edbbcee9bb40d0d973100a008292be7cbfb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_ced33fbfbdb204e8c74ffe9b5ee2edbbcee9bb40d0d973100a008292be7cbfb5->leave($__internal_ced33fbfbdb204e8c74ffe9b5ee2edbbcee9bb40d0d973100a008292be7cbfb5_prof);

        
        $__internal_4c6d6a1b8a7d228a2a6685a79547965df1a8e6fbe70ed0ffc3f474db920e08e0->leave($__internal_4c6d6a1b8a7d228a2a6685a79547965df1a8e6fbe70ed0ffc3f474db920e08e0_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a1673dea17b18d1a67cf75ac62c7207159f23723252176023b7abda37baac151 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1673dea17b18d1a67cf75ac62c7207159f23723252176023b7abda37baac151->enter($__internal_a1673dea17b18d1a67cf75ac62c7207159f23723252176023b7abda37baac151_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1c4028408b9b28b38a27d06bb9eb8d42fdb097043653649b3bec3e444f5e91af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c4028408b9b28b38a27d06bb9eb8d42fdb097043653649b3bec3e444f5e91af->enter($__internal_1c4028408b9b28b38a27d06bb9eb8d42fdb097043653649b3bec3e444f5e91af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_1c4028408b9b28b38a27d06bb9eb8d42fdb097043653649b3bec3e444f5e91af->leave($__internal_1c4028408b9b28b38a27d06bb9eb8d42fdb097043653649b3bec3e444f5e91af_prof);

        
        $__internal_a1673dea17b18d1a67cf75ac62c7207159f23723252176023b7abda37baac151->leave($__internal_a1673dea17b18d1a67cf75ac62c7207159f23723252176023b7abda37baac151_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/Applications/MAMP/htdocs/cursoSymfony3/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
