<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_a42c368d2c86c06d8af9502f97aeecf70f9086da5c9b40861facd3da8b48f57e extends Twig_Template
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
        $__internal_c32e5750dc50ba6b29922fd4add3f91fba8822291e12a3f43b37b110ce96fda3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c32e5750dc50ba6b29922fd4add3f91fba8822291e12a3f43b37b110ce96fda3->enter($__internal_c32e5750dc50ba6b29922fd4add3f91fba8822291e12a3f43b37b110ce96fda3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_9aa306c44082cf9ebe18ece1e73e39e2b93d4659961694fe09bceb4818ec0f6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9aa306c44082cf9ebe18ece1e73e39e2b93d4659961694fe09bceb4818ec0f6e->enter($__internal_9aa306c44082cf9ebe18ece1e73e39e2b93d4659961694fe09bceb4818ec0f6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c32e5750dc50ba6b29922fd4add3f91fba8822291e12a3f43b37b110ce96fda3->leave($__internal_c32e5750dc50ba6b29922fd4add3f91fba8822291e12a3f43b37b110ce96fda3_prof);

        
        $__internal_9aa306c44082cf9ebe18ece1e73e39e2b93d4659961694fe09bceb4818ec0f6e->leave($__internal_9aa306c44082cf9ebe18ece1e73e39e2b93d4659961694fe09bceb4818ec0f6e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_353cc53a5b71fa65dfe2e05496f3aa8dad8f218bf7e7c93f8a3478fce7c2c83b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_353cc53a5b71fa65dfe2e05496f3aa8dad8f218bf7e7c93f8a3478fce7c2c83b->enter($__internal_353cc53a5b71fa65dfe2e05496f3aa8dad8f218bf7e7c93f8a3478fce7c2c83b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7d8f1de58f3e065f103d81f2ad2c7d023822c69cb28571f3ac695a773cdaa1b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d8f1de58f3e065f103d81f2ad2c7d023822c69cb28571f3ac695a773cdaa1b2->enter($__internal_7d8f1de58f3e065f103d81f2ad2c7d023822c69cb28571f3ac695a773cdaa1b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_7d8f1de58f3e065f103d81f2ad2c7d023822c69cb28571f3ac695a773cdaa1b2->leave($__internal_7d8f1de58f3e065f103d81f2ad2c7d023822c69cb28571f3ac695a773cdaa1b2_prof);

        
        $__internal_353cc53a5b71fa65dfe2e05496f3aa8dad8f218bf7e7c93f8a3478fce7c2c83b->leave($__internal_353cc53a5b71fa65dfe2e05496f3aa8dad8f218bf7e7c93f8a3478fce7c2c83b_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_48f49519fb79d0fae0b0288fa4650b6c5347f65fb9fdc51076817a518d660c7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48f49519fb79d0fae0b0288fa4650b6c5347f65fb9fdc51076817a518d660c7a->enter($__internal_48f49519fb79d0fae0b0288fa4650b6c5347f65fb9fdc51076817a518d660c7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_32841ae8c8348db45e04456c20cae59db0d3e68f0ac09cfd313859a87e7239eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32841ae8c8348db45e04456c20cae59db0d3e68f0ac09cfd313859a87e7239eb->enter($__internal_32841ae8c8348db45e04456c20cae59db0d3e68f0ac09cfd313859a87e7239eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_32841ae8c8348db45e04456c20cae59db0d3e68f0ac09cfd313859a87e7239eb->leave($__internal_32841ae8c8348db45e04456c20cae59db0d3e68f0ac09cfd313859a87e7239eb_prof);

        
        $__internal_48f49519fb79d0fae0b0288fa4650b6c5347f65fb9fdc51076817a518d660c7a->leave($__internal_48f49519fb79d0fae0b0288fa4650b6c5347f65fb9fdc51076817a518d660c7a_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ec6c58565e9776a00aaa064d102ccc1d5d4021b22be2577ef2f8311da7a1628d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec6c58565e9776a00aaa064d102ccc1d5d4021b22be2577ef2f8311da7a1628d->enter($__internal_ec6c58565e9776a00aaa064d102ccc1d5d4021b22be2577ef2f8311da7a1628d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f9cdc78c345953585872d2cf9b636e2210ab529dec05d9acb75abedfbacbf8a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9cdc78c345953585872d2cf9b636e2210ab529dec05d9acb75abedfbacbf8a9->enter($__internal_f9cdc78c345953585872d2cf9b636e2210ab529dec05d9acb75abedfbacbf8a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_f9cdc78c345953585872d2cf9b636e2210ab529dec05d9acb75abedfbacbf8a9->leave($__internal_f9cdc78c345953585872d2cf9b636e2210ab529dec05d9acb75abedfbacbf8a9_prof);

        
        $__internal_ec6c58565e9776a00aaa064d102ccc1d5d4021b22be2577ef2f8311da7a1628d->leave($__internal_ec6c58565e9776a00aaa064d102ccc1d5d4021b22be2577ef2f8311da7a1628d_prof);

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
