<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_f80b1eb8133ce2f1327e469d2067b6386b3f775cc04d0b50eb74197424412f04 extends Twig_Template
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
        $__internal_4f46b949d2d1b8a252ffd01b448fc01b87ccbd3f2eac21aa6605231272336a73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f46b949d2d1b8a252ffd01b448fc01b87ccbd3f2eac21aa6605231272336a73->enter($__internal_4f46b949d2d1b8a252ffd01b448fc01b87ccbd3f2eac21aa6605231272336a73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_3b4adacfa12fba63513ea6fedbf07558ef0049d6894b58981a8b3c792c0ceea8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b4adacfa12fba63513ea6fedbf07558ef0049d6894b58981a8b3c792c0ceea8->enter($__internal_3b4adacfa12fba63513ea6fedbf07558ef0049d6894b58981a8b3c792c0ceea8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f46b949d2d1b8a252ffd01b448fc01b87ccbd3f2eac21aa6605231272336a73->leave($__internal_4f46b949d2d1b8a252ffd01b448fc01b87ccbd3f2eac21aa6605231272336a73_prof);

        
        $__internal_3b4adacfa12fba63513ea6fedbf07558ef0049d6894b58981a8b3c792c0ceea8->leave($__internal_3b4adacfa12fba63513ea6fedbf07558ef0049d6894b58981a8b3c792c0ceea8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1b373e7f32ec5ec803bd62401ae75fa5982b2f4ff0542ca8954a84e7fc3ff9e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b373e7f32ec5ec803bd62401ae75fa5982b2f4ff0542ca8954a84e7fc3ff9e7->enter($__internal_1b373e7f32ec5ec803bd62401ae75fa5982b2f4ff0542ca8954a84e7fc3ff9e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2cb16aa4972e909d1dee83d0222a08abe2667893c00c17894a65c9310982332f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cb16aa4972e909d1dee83d0222a08abe2667893c00c17894a65c9310982332f->enter($__internal_2cb16aa4972e909d1dee83d0222a08abe2667893c00c17894a65c9310982332f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_2cb16aa4972e909d1dee83d0222a08abe2667893c00c17894a65c9310982332f->leave($__internal_2cb16aa4972e909d1dee83d0222a08abe2667893c00c17894a65c9310982332f_prof);

        
        $__internal_1b373e7f32ec5ec803bd62401ae75fa5982b2f4ff0542ca8954a84e7fc3ff9e7->leave($__internal_1b373e7f32ec5ec803bd62401ae75fa5982b2f4ff0542ca8954a84e7fc3ff9e7_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0c798b0f21eb42a32ab8c248cfbbd09358c9c6419f8a71be3bf0535c01b257b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c798b0f21eb42a32ab8c248cfbbd09358c9c6419f8a71be3bf0535c01b257b3->enter($__internal_0c798b0f21eb42a32ab8c248cfbbd09358c9c6419f8a71be3bf0535c01b257b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_33d7f77a3b396eb4845bffac979f953cb75bbd3d7dd2786ff9234ef281290105 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33d7f77a3b396eb4845bffac979f953cb75bbd3d7dd2786ff9234ef281290105->enter($__internal_33d7f77a3b396eb4845bffac979f953cb75bbd3d7dd2786ff9234ef281290105_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_33d7f77a3b396eb4845bffac979f953cb75bbd3d7dd2786ff9234ef281290105->leave($__internal_33d7f77a3b396eb4845bffac979f953cb75bbd3d7dd2786ff9234ef281290105_prof);

        
        $__internal_0c798b0f21eb42a32ab8c248cfbbd09358c9c6419f8a71be3bf0535c01b257b3->leave($__internal_0c798b0f21eb42a32ab8c248cfbbd09358c9c6419f8a71be3bf0535c01b257b3_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_845083efbe3dae44f10e998e274dfc1f869f079e680a6e375724be2a8ddcf4c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_845083efbe3dae44f10e998e274dfc1f869f079e680a6e375724be2a8ddcf4c9->enter($__internal_845083efbe3dae44f10e998e274dfc1f869f079e680a6e375724be2a8ddcf4c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_708605ce8c4ccec91cffab566739e36d8a31fa12194202e01d9a15ef980c8cc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_708605ce8c4ccec91cffab566739e36d8a31fa12194202e01d9a15ef980c8cc6->enter($__internal_708605ce8c4ccec91cffab566739e36d8a31fa12194202e01d9a15ef980c8cc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_708605ce8c4ccec91cffab566739e36d8a31fa12194202e01d9a15ef980c8cc6->leave($__internal_708605ce8c4ccec91cffab566739e36d8a31fa12194202e01d9a15ef980c8cc6_prof);

        
        $__internal_845083efbe3dae44f10e998e274dfc1f869f079e680a6e375724be2a8ddcf4c9->leave($__internal_845083efbe3dae44f10e998e274dfc1f869f079e680a6e375724be2a8ddcf4c9_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/Users/julioromero/Desktop/cursoSymfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
