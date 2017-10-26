<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_8d75d46680520b17a436b17adebc419e865bc5fb1e9380c89c0f2d5ba5bb5b37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_fa975707ae57ae8cee54db878fca35dd934b4fd64ffb0a9038faa66aa1df3f4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa975707ae57ae8cee54db878fca35dd934b4fd64ffb0a9038faa66aa1df3f4b->enter($__internal_fa975707ae57ae8cee54db878fca35dd934b4fd64ffb0a9038faa66aa1df3f4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_721b1c1524a8bb05e63f266167bc25d2cb16f1984a051018cf6c573221b86bef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_721b1c1524a8bb05e63f266167bc25d2cb16f1984a051018cf6c573221b86bef->enter($__internal_721b1c1524a8bb05e63f266167bc25d2cb16f1984a051018cf6c573221b86bef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa975707ae57ae8cee54db878fca35dd934b4fd64ffb0a9038faa66aa1df3f4b->leave($__internal_fa975707ae57ae8cee54db878fca35dd934b4fd64ffb0a9038faa66aa1df3f4b_prof);

        
        $__internal_721b1c1524a8bb05e63f266167bc25d2cb16f1984a051018cf6c573221b86bef->leave($__internal_721b1c1524a8bb05e63f266167bc25d2cb16f1984a051018cf6c573221b86bef_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d19176d9333781f44c4ade98d5186eb1d7a8cfcbd4d9870b578a27e3edf4a376 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d19176d9333781f44c4ade98d5186eb1d7a8cfcbd4d9870b578a27e3edf4a376->enter($__internal_d19176d9333781f44c4ade98d5186eb1d7a8cfcbd4d9870b578a27e3edf4a376_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_990046e3aba0981c82b320a0070cfdd1cd556eb4d247371adf2f8831d847a348 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_990046e3aba0981c82b320a0070cfdd1cd556eb4d247371adf2f8831d847a348->enter($__internal_990046e3aba0981c82b320a0070cfdd1cd556eb4d247371adf2f8831d847a348_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_990046e3aba0981c82b320a0070cfdd1cd556eb4d247371adf2f8831d847a348->leave($__internal_990046e3aba0981c82b320a0070cfdd1cd556eb4d247371adf2f8831d847a348_prof);

        
        $__internal_d19176d9333781f44c4ade98d5186eb1d7a8cfcbd4d9870b578a27e3edf4a376->leave($__internal_d19176d9333781f44c4ade98d5186eb1d7a8cfcbd4d9870b578a27e3edf4a376_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b6b01601a3ec265e9c49e3945ba82ddc75b3cabb19d0087f3fddbc7246469407 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6b01601a3ec265e9c49e3945ba82ddc75b3cabb19d0087f3fddbc7246469407->enter($__internal_b6b01601a3ec265e9c49e3945ba82ddc75b3cabb19d0087f3fddbc7246469407_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_01d94a3a5908483ebd399e49ebfbff603f7461c6541a40110dedcf16a8ce5616 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01d94a3a5908483ebd399e49ebfbff603f7461c6541a40110dedcf16a8ce5616->enter($__internal_01d94a3a5908483ebd399e49ebfbff603f7461c6541a40110dedcf16a8ce5616_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_01d94a3a5908483ebd399e49ebfbff603f7461c6541a40110dedcf16a8ce5616->leave($__internal_01d94a3a5908483ebd399e49ebfbff603f7461c6541a40110dedcf16a8ce5616_prof);

        
        $__internal_b6b01601a3ec265e9c49e3945ba82ddc75b3cabb19d0087f3fddbc7246469407->leave($__internal_b6b01601a3ec265e9c49e3945ba82ddc75b3cabb19d0087f3fddbc7246469407_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b140c8a7394757455fd4d3a0b1efa982105155e1362552f80997d84e34925d0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b140c8a7394757455fd4d3a0b1efa982105155e1362552f80997d84e34925d0c->enter($__internal_b140c8a7394757455fd4d3a0b1efa982105155e1362552f80997d84e34925d0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_066d954c6070458cb4b73eac143fe956060a6fb33162f9b50d2771e525d3f4ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_066d954c6070458cb4b73eac143fe956060a6fb33162f9b50d2771e525d3f4ae->enter($__internal_066d954c6070458cb4b73eac143fe956060a6fb33162f9b50d2771e525d3f4ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_066d954c6070458cb4b73eac143fe956060a6fb33162f9b50d2771e525d3f4ae->leave($__internal_066d954c6070458cb4b73eac143fe956060a6fb33162f9b50d2771e525d3f4ae_prof);

        
        $__internal_b140c8a7394757455fd4d3a0b1efa982105155e1362552f80997d84e34925d0c->leave($__internal_b140c8a7394757455fd4d3a0b1efa982105155e1362552f80997d84e34925d0c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Users/julioromero/Desktop/cursoSymfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
