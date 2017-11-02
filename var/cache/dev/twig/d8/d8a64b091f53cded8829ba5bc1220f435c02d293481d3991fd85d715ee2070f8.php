<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_259ea02f55be8520be9066f62683572ce80eef483e8ede44bb8dd64be20a8a7c extends Twig_Template
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
        $__internal_3b78fccfac98ebf1172048f17fe0b3d467948af227865a1e44c49b8a7ac43ecd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b78fccfac98ebf1172048f17fe0b3d467948af227865a1e44c49b8a7ac43ecd->enter($__internal_3b78fccfac98ebf1172048f17fe0b3d467948af227865a1e44c49b8a7ac43ecd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_725de51252362505fd3fb80c4692619dd467b29a477c060e4e9c54aaa892e264 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_725de51252362505fd3fb80c4692619dd467b29a477c060e4e9c54aaa892e264->enter($__internal_725de51252362505fd3fb80c4692619dd467b29a477c060e4e9c54aaa892e264_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b78fccfac98ebf1172048f17fe0b3d467948af227865a1e44c49b8a7ac43ecd->leave($__internal_3b78fccfac98ebf1172048f17fe0b3d467948af227865a1e44c49b8a7ac43ecd_prof);

        
        $__internal_725de51252362505fd3fb80c4692619dd467b29a477c060e4e9c54aaa892e264->leave($__internal_725de51252362505fd3fb80c4692619dd467b29a477c060e4e9c54aaa892e264_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6099beb7b34adb52aeef0700699211b07b9acafa86d5975cfafb5e3c52f2a2a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6099beb7b34adb52aeef0700699211b07b9acafa86d5975cfafb5e3c52f2a2a1->enter($__internal_6099beb7b34adb52aeef0700699211b07b9acafa86d5975cfafb5e3c52f2a2a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_2e6f9c72a2dff51c7007822e234efec14118be2464410a45e3cffb94f1d1719d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e6f9c72a2dff51c7007822e234efec14118be2464410a45e3cffb94f1d1719d->enter($__internal_2e6f9c72a2dff51c7007822e234efec14118be2464410a45e3cffb94f1d1719d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2e6f9c72a2dff51c7007822e234efec14118be2464410a45e3cffb94f1d1719d->leave($__internal_2e6f9c72a2dff51c7007822e234efec14118be2464410a45e3cffb94f1d1719d_prof);

        
        $__internal_6099beb7b34adb52aeef0700699211b07b9acafa86d5975cfafb5e3c52f2a2a1->leave($__internal_6099beb7b34adb52aeef0700699211b07b9acafa86d5975cfafb5e3c52f2a2a1_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c7712ef66e026a9f5dba5d25606042519520391575f1458a20d9cb045f485cb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7712ef66e026a9f5dba5d25606042519520391575f1458a20d9cb045f485cb6->enter($__internal_c7712ef66e026a9f5dba5d25606042519520391575f1458a20d9cb045f485cb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3ce6287e643282ccee22adf81ea49658f9c43eddf07f7de9c90107e0d5a81d7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ce6287e643282ccee22adf81ea49658f9c43eddf07f7de9c90107e0d5a81d7a->enter($__internal_3ce6287e643282ccee22adf81ea49658f9c43eddf07f7de9c90107e0d5a81d7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3ce6287e643282ccee22adf81ea49658f9c43eddf07f7de9c90107e0d5a81d7a->leave($__internal_3ce6287e643282ccee22adf81ea49658f9c43eddf07f7de9c90107e0d5a81d7a_prof);

        
        $__internal_c7712ef66e026a9f5dba5d25606042519520391575f1458a20d9cb045f485cb6->leave($__internal_c7712ef66e026a9f5dba5d25606042519520391575f1458a20d9cb045f485cb6_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_596da8e7c5a3b455058455169c12ca2d371cd3b3148585c07b5c39209dd37427 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_596da8e7c5a3b455058455169c12ca2d371cd3b3148585c07b5c39209dd37427->enter($__internal_596da8e7c5a3b455058455169c12ca2d371cd3b3148585c07b5c39209dd37427_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_605162b41cd675db56f5d4abe7c77e0b79778c9236b95985ecde6db51a4c549b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_605162b41cd675db56f5d4abe7c77e0b79778c9236b95985ecde6db51a4c549b->enter($__internal_605162b41cd675db56f5d4abe7c77e0b79778c9236b95985ecde6db51a4c549b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_605162b41cd675db56f5d4abe7c77e0b79778c9236b95985ecde6db51a4c549b->leave($__internal_605162b41cd675db56f5d4abe7c77e0b79778c9236b95985ecde6db51a4c549b_prof);

        
        $__internal_596da8e7c5a3b455058455169c12ca2d371cd3b3148585c07b5c39209dd37427->leave($__internal_596da8e7c5a3b455058455169c12ca2d371cd3b3148585c07b5c39209dd37427_prof);

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
