<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_aa2e58817133491c2b0d627e8741e5459503bb34dce29dee6a64e84e7a6f6ec3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3b840b5696ff369de4b999ff6fd21223dd9f94c84509832bbe0f999b0af6a143 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b840b5696ff369de4b999ff6fd21223dd9f94c84509832bbe0f999b0af6a143->enter($__internal_3b840b5696ff369de4b999ff6fd21223dd9f94c84509832bbe0f999b0af6a143_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_822d026084f50b73655a92363fb181b2ee15105df17fe281bfd254680ff42980 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_822d026084f50b73655a92363fb181b2ee15105df17fe281bfd254680ff42980->enter($__internal_822d026084f50b73655a92363fb181b2ee15105df17fe281bfd254680ff42980_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b840b5696ff369de4b999ff6fd21223dd9f94c84509832bbe0f999b0af6a143->leave($__internal_3b840b5696ff369de4b999ff6fd21223dd9f94c84509832bbe0f999b0af6a143_prof);

        
        $__internal_822d026084f50b73655a92363fb181b2ee15105df17fe281bfd254680ff42980->leave($__internal_822d026084f50b73655a92363fb181b2ee15105df17fe281bfd254680ff42980_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_bcedf14903801fe72e136e5fc5d79acf02da8f2c07e4f6210704dbeb518c1ff7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcedf14903801fe72e136e5fc5d79acf02da8f2c07e4f6210704dbeb518c1ff7->enter($__internal_bcedf14903801fe72e136e5fc5d79acf02da8f2c07e4f6210704dbeb518c1ff7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2b793b37ebaf7b62fd3e452b05599762fcc055052227cd97f7560ca07c91955a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b793b37ebaf7b62fd3e452b05599762fcc055052227cd97f7560ca07c91955a->enter($__internal_2b793b37ebaf7b62fd3e452b05599762fcc055052227cd97f7560ca07c91955a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_2b793b37ebaf7b62fd3e452b05599762fcc055052227cd97f7560ca07c91955a->leave($__internal_2b793b37ebaf7b62fd3e452b05599762fcc055052227cd97f7560ca07c91955a_prof);

        
        $__internal_bcedf14903801fe72e136e5fc5d79acf02da8f2c07e4f6210704dbeb518c1ff7->leave($__internal_bcedf14903801fe72e136e5fc5d79acf02da8f2c07e4f6210704dbeb518c1ff7_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_70a9bf1e3f791a939bce40438f68006546977538ce645b2522f5de6ae901b3c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70a9bf1e3f791a939bce40438f68006546977538ce645b2522f5de6ae901b3c2->enter($__internal_70a9bf1e3f791a939bce40438f68006546977538ce645b2522f5de6ae901b3c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bc4e04c1c00391bc3f1b9cd729770a197df7cb27de1e032515eeb3f8381752df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc4e04c1c00391bc3f1b9cd729770a197df7cb27de1e032515eeb3f8381752df->enter($__internal_bc4e04c1c00391bc3f1b9cd729770a197df7cb27de1e032515eeb3f8381752df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_bc4e04c1c00391bc3f1b9cd729770a197df7cb27de1e032515eeb3f8381752df->leave($__internal_bc4e04c1c00391bc3f1b9cd729770a197df7cb27de1e032515eeb3f8381752df_prof);

        
        $__internal_70a9bf1e3f791a939bce40438f68006546977538ce645b2522f5de6ae901b3c2->leave($__internal_70a9bf1e3f791a939bce40438f68006546977538ce645b2522f5de6ae901b3c2_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_4b33637c7d74f47c21256635153cd76b03f982a1ed9764e3891e9eabbfbd4bc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b33637c7d74f47c21256635153cd76b03f982a1ed9764e3891e9eabbfbd4bc8->enter($__internal_4b33637c7d74f47c21256635153cd76b03f982a1ed9764e3891e9eabbfbd4bc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7c7bd61a35f07d11e6e170bf498ccce5f9828c3a63524836b1a6212fe7c2c52a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c7bd61a35f07d11e6e170bf498ccce5f9828c3a63524836b1a6212fe7c2c52a->enter($__internal_7c7bd61a35f07d11e6e170bf498ccce5f9828c3a63524836b1a6212fe7c2c52a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_7c7bd61a35f07d11e6e170bf498ccce5f9828c3a63524836b1a6212fe7c2c52a->leave($__internal_7c7bd61a35f07d11e6e170bf498ccce5f9828c3a63524836b1a6212fe7c2c52a_prof);

        
        $__internal_4b33637c7d74f47c21256635153cd76b03f982a1ed9764e3891e9eabbfbd4bc8->leave($__internal_4b33637c7d74f47c21256635153cd76b03f982a1ed9764e3891e9eabbfbd4bc8_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Users/julioromero/Desktop/cursoSymfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
