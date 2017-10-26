<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_3af4a99c1cb655a4825f0a6e01551d674b52d52b622e47d73e3845cb1496152a extends Twig_Template
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
        $__internal_ddc67273a4c9f477d9bd75d7265579a63f2dd5a0d5e2c4b4ed30a282d0362225 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddc67273a4c9f477d9bd75d7265579a63f2dd5a0d5e2c4b4ed30a282d0362225->enter($__internal_ddc67273a4c9f477d9bd75d7265579a63f2dd5a0d5e2c4b4ed30a282d0362225_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_46ea362d3e3f7e32d77f31d023d6a4872fc4c12afe44c2e200444757a82e423c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46ea362d3e3f7e32d77f31d023d6a4872fc4c12afe44c2e200444757a82e423c->enter($__internal_46ea362d3e3f7e32d77f31d023d6a4872fc4c12afe44c2e200444757a82e423c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ddc67273a4c9f477d9bd75d7265579a63f2dd5a0d5e2c4b4ed30a282d0362225->leave($__internal_ddc67273a4c9f477d9bd75d7265579a63f2dd5a0d5e2c4b4ed30a282d0362225_prof);

        
        $__internal_46ea362d3e3f7e32d77f31d023d6a4872fc4c12afe44c2e200444757a82e423c->leave($__internal_46ea362d3e3f7e32d77f31d023d6a4872fc4c12afe44c2e200444757a82e423c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3f92744e919308dff5a8ee7057cd1aa549278cdaeebfbfc44e56095913f52034 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f92744e919308dff5a8ee7057cd1aa549278cdaeebfbfc44e56095913f52034->enter($__internal_3f92744e919308dff5a8ee7057cd1aa549278cdaeebfbfc44e56095913f52034_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_afd353bd6f49519c493283549309861407c9a6373438467f649e9caa93ac8a07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afd353bd6f49519c493283549309861407c9a6373438467f649e9caa93ac8a07->enter($__internal_afd353bd6f49519c493283549309861407c9a6373438467f649e9caa93ac8a07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_afd353bd6f49519c493283549309861407c9a6373438467f649e9caa93ac8a07->leave($__internal_afd353bd6f49519c493283549309861407c9a6373438467f649e9caa93ac8a07_prof);

        
        $__internal_3f92744e919308dff5a8ee7057cd1aa549278cdaeebfbfc44e56095913f52034->leave($__internal_3f92744e919308dff5a8ee7057cd1aa549278cdaeebfbfc44e56095913f52034_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e7fbefc1f9d06ed0e5f3512ff767773f87cfe0d7a988bfa18cc04602fef945a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7fbefc1f9d06ed0e5f3512ff767773f87cfe0d7a988bfa18cc04602fef945a1->enter($__internal_e7fbefc1f9d06ed0e5f3512ff767773f87cfe0d7a988bfa18cc04602fef945a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3d0594bdb832ed984b46a80b24500f4bd61643465986bf639ee840c4962ac4e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d0594bdb832ed984b46a80b24500f4bd61643465986bf639ee840c4962ac4e2->enter($__internal_3d0594bdb832ed984b46a80b24500f4bd61643465986bf639ee840c4962ac4e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3d0594bdb832ed984b46a80b24500f4bd61643465986bf639ee840c4962ac4e2->leave($__internal_3d0594bdb832ed984b46a80b24500f4bd61643465986bf639ee840c4962ac4e2_prof);

        
        $__internal_e7fbefc1f9d06ed0e5f3512ff767773f87cfe0d7a988bfa18cc04602fef945a1->leave($__internal_e7fbefc1f9d06ed0e5f3512ff767773f87cfe0d7a988bfa18cc04602fef945a1_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0e54af17f48e524b8e4cecdd01faba01aba3190e7b7a16eb20ff141f76f5e19f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e54af17f48e524b8e4cecdd01faba01aba3190e7b7a16eb20ff141f76f5e19f->enter($__internal_0e54af17f48e524b8e4cecdd01faba01aba3190e7b7a16eb20ff141f76f5e19f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_146c334960789990de8f4ea41490362a4d1618483f0228bd3f0a54e4cdcc927d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_146c334960789990de8f4ea41490362a4d1618483f0228bd3f0a54e4cdcc927d->enter($__internal_146c334960789990de8f4ea41490362a4d1618483f0228bd3f0a54e4cdcc927d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_146c334960789990de8f4ea41490362a4d1618483f0228bd3f0a54e4cdcc927d->leave($__internal_146c334960789990de8f4ea41490362a4d1618483f0228bd3f0a54e4cdcc927d_prof);

        
        $__internal_0e54af17f48e524b8e4cecdd01faba01aba3190e7b7a16eb20ff141f76f5e19f->leave($__internal_0e54af17f48e524b8e4cecdd01faba01aba3190e7b7a16eb20ff141f76f5e19f_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
", "@WebProfiler/Collector/router.html.twig", "/Applications/MAMP/htdocs/cursoSymfony3/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
