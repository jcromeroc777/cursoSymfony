<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_52c432c68a1784b956f4d55926d2f563c9e598302fe2d1b3e738d48e1c5a4cc4 extends Twig_Template
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
        $__internal_9bae87c3fee83a7406b65d3408d6201185842262e488eb6b6ccf03b233fc0c80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bae87c3fee83a7406b65d3408d6201185842262e488eb6b6ccf03b233fc0c80->enter($__internal_9bae87c3fee83a7406b65d3408d6201185842262e488eb6b6ccf03b233fc0c80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_758a8cd0972d300a8ad19dd2b8f41551e57350d1e164244d084a1c17d2ed7c8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_758a8cd0972d300a8ad19dd2b8f41551e57350d1e164244d084a1c17d2ed7c8f->enter($__internal_758a8cd0972d300a8ad19dd2b8f41551e57350d1e164244d084a1c17d2ed7c8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9bae87c3fee83a7406b65d3408d6201185842262e488eb6b6ccf03b233fc0c80->leave($__internal_9bae87c3fee83a7406b65d3408d6201185842262e488eb6b6ccf03b233fc0c80_prof);

        
        $__internal_758a8cd0972d300a8ad19dd2b8f41551e57350d1e164244d084a1c17d2ed7c8f->leave($__internal_758a8cd0972d300a8ad19dd2b8f41551e57350d1e164244d084a1c17d2ed7c8f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6bc184de609335010aee801db68b879d9611dbfefc08b03f9b2805606c5bfe0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bc184de609335010aee801db68b879d9611dbfefc08b03f9b2805606c5bfe0c->enter($__internal_6bc184de609335010aee801db68b879d9611dbfefc08b03f9b2805606c5bfe0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2e56a17b60bc2f0b48f0bedcd3686a92ec66b4beaebbcdecf8a5f2aac0f7e6bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e56a17b60bc2f0b48f0bedcd3686a92ec66b4beaebbcdecf8a5f2aac0f7e6bc->enter($__internal_2e56a17b60bc2f0b48f0bedcd3686a92ec66b4beaebbcdecf8a5f2aac0f7e6bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_2e56a17b60bc2f0b48f0bedcd3686a92ec66b4beaebbcdecf8a5f2aac0f7e6bc->leave($__internal_2e56a17b60bc2f0b48f0bedcd3686a92ec66b4beaebbcdecf8a5f2aac0f7e6bc_prof);

        
        $__internal_6bc184de609335010aee801db68b879d9611dbfefc08b03f9b2805606c5bfe0c->leave($__internal_6bc184de609335010aee801db68b879d9611dbfefc08b03f9b2805606c5bfe0c_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_467ba7983e870be52f72080e2d28358f790188e64d747c30e6f105e92a67e4d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_467ba7983e870be52f72080e2d28358f790188e64d747c30e6f105e92a67e4d6->enter($__internal_467ba7983e870be52f72080e2d28358f790188e64d747c30e6f105e92a67e4d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d4e7812c3432cb687666f375a4e240471fe3d628c7490e0f1a0bd5e2d3932266 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4e7812c3432cb687666f375a4e240471fe3d628c7490e0f1a0bd5e2d3932266->enter($__internal_d4e7812c3432cb687666f375a4e240471fe3d628c7490e0f1a0bd5e2d3932266_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_d4e7812c3432cb687666f375a4e240471fe3d628c7490e0f1a0bd5e2d3932266->leave($__internal_d4e7812c3432cb687666f375a4e240471fe3d628c7490e0f1a0bd5e2d3932266_prof);

        
        $__internal_467ba7983e870be52f72080e2d28358f790188e64d747c30e6f105e92a67e4d6->leave($__internal_467ba7983e870be52f72080e2d28358f790188e64d747c30e6f105e92a67e4d6_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_d785b3b35426952e45274ef12e8e6cadda31f99c73eb2f3ea92ad2a45aa11af2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d785b3b35426952e45274ef12e8e6cadda31f99c73eb2f3ea92ad2a45aa11af2->enter($__internal_d785b3b35426952e45274ef12e8e6cadda31f99c73eb2f3ea92ad2a45aa11af2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d6690cf0b5b304ed999c3714e0f8e767ac3e73f4aedabdcc84df995a05ea9e1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6690cf0b5b304ed999c3714e0f8e767ac3e73f4aedabdcc84df995a05ea9e1c->enter($__internal_d6690cf0b5b304ed999c3714e0f8e767ac3e73f4aedabdcc84df995a05ea9e1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_d6690cf0b5b304ed999c3714e0f8e767ac3e73f4aedabdcc84df995a05ea9e1c->leave($__internal_d6690cf0b5b304ed999c3714e0f8e767ac3e73f4aedabdcc84df995a05ea9e1c_prof);

        
        $__internal_d785b3b35426952e45274ef12e8e6cadda31f99c73eb2f3ea92ad2a45aa11af2->leave($__internal_d785b3b35426952e45274ef12e8e6cadda31f99c73eb2f3ea92ad2a45aa11af2_prof);

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
