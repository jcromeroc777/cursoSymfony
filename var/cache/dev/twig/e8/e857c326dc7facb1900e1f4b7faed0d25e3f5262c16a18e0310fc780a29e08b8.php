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
        $__internal_085da1b961791f246f415cef56d15a823632776aff758f0c31d3d5901cec17cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085da1b961791f246f415cef56d15a823632776aff758f0c31d3d5901cec17cb->enter($__internal_085da1b961791f246f415cef56d15a823632776aff758f0c31d3d5901cec17cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_8d227743de92b9ae165fdcf1646417b6b16108b083f1d15ff2873dd5ab466391 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d227743de92b9ae165fdcf1646417b6b16108b083f1d15ff2873dd5ab466391->enter($__internal_8d227743de92b9ae165fdcf1646417b6b16108b083f1d15ff2873dd5ab466391_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085da1b961791f246f415cef56d15a823632776aff758f0c31d3d5901cec17cb->leave($__internal_085da1b961791f246f415cef56d15a823632776aff758f0c31d3d5901cec17cb_prof);

        
        $__internal_8d227743de92b9ae165fdcf1646417b6b16108b083f1d15ff2873dd5ab466391->leave($__internal_8d227743de92b9ae165fdcf1646417b6b16108b083f1d15ff2873dd5ab466391_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b158398fba0f144f9ac9970826f55040f74366ae42300df0bdcc7e817fb3ef1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b158398fba0f144f9ac9970826f55040f74366ae42300df0bdcc7e817fb3ef1b->enter($__internal_b158398fba0f144f9ac9970826f55040f74366ae42300df0bdcc7e817fb3ef1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_10ad973c551fdb8a5f84445e5a4d389ebd2261701644a292c32fde78ca6b0ebb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10ad973c551fdb8a5f84445e5a4d389ebd2261701644a292c32fde78ca6b0ebb->enter($__internal_10ad973c551fdb8a5f84445e5a4d389ebd2261701644a292c32fde78ca6b0ebb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_10ad973c551fdb8a5f84445e5a4d389ebd2261701644a292c32fde78ca6b0ebb->leave($__internal_10ad973c551fdb8a5f84445e5a4d389ebd2261701644a292c32fde78ca6b0ebb_prof);

        
        $__internal_b158398fba0f144f9ac9970826f55040f74366ae42300df0bdcc7e817fb3ef1b->leave($__internal_b158398fba0f144f9ac9970826f55040f74366ae42300df0bdcc7e817fb3ef1b_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e5c39fa2778fd7d0000aef28601f2cd060675c0793dc457f2dd67781cabd775e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5c39fa2778fd7d0000aef28601f2cd060675c0793dc457f2dd67781cabd775e->enter($__internal_e5c39fa2778fd7d0000aef28601f2cd060675c0793dc457f2dd67781cabd775e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c2d3ded1d7f59ac7a7153def6ce06c19b9d552eb59cbbf102fac65be3fbcdf73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2d3ded1d7f59ac7a7153def6ce06c19b9d552eb59cbbf102fac65be3fbcdf73->enter($__internal_c2d3ded1d7f59ac7a7153def6ce06c19b9d552eb59cbbf102fac65be3fbcdf73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_c2d3ded1d7f59ac7a7153def6ce06c19b9d552eb59cbbf102fac65be3fbcdf73->leave($__internal_c2d3ded1d7f59ac7a7153def6ce06c19b9d552eb59cbbf102fac65be3fbcdf73_prof);

        
        $__internal_e5c39fa2778fd7d0000aef28601f2cd060675c0793dc457f2dd67781cabd775e->leave($__internal_e5c39fa2778fd7d0000aef28601f2cd060675c0793dc457f2dd67781cabd775e_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_47e61563cf02ff08e30e2fbf7fad0d9f4577269112dd67c87fe3a27c7d1da62c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47e61563cf02ff08e30e2fbf7fad0d9f4577269112dd67c87fe3a27c7d1da62c->enter($__internal_47e61563cf02ff08e30e2fbf7fad0d9f4577269112dd67c87fe3a27c7d1da62c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_cbb7825a48259b7c28d6a8635d8abd3a428551152a4ee377cf2a1ef75c6e8655 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbb7825a48259b7c28d6a8635d8abd3a428551152a4ee377cf2a1ef75c6e8655->enter($__internal_cbb7825a48259b7c28d6a8635d8abd3a428551152a4ee377cf2a1ef75c6e8655_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_cbb7825a48259b7c28d6a8635d8abd3a428551152a4ee377cf2a1ef75c6e8655->leave($__internal_cbb7825a48259b7c28d6a8635d8abd3a428551152a4ee377cf2a1ef75c6e8655_prof);

        
        $__internal_47e61563cf02ff08e30e2fbf7fad0d9f4577269112dd67c87fe3a27c7d1da62c->leave($__internal_47e61563cf02ff08e30e2fbf7fad0d9f4577269112dd67c87fe3a27c7d1da62c_prof);

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
