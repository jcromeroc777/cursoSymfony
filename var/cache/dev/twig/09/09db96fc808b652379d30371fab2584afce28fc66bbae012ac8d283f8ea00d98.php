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
        $__internal_26dfe815fa3a831d0354bde7ac2b2c7e5ed215dba3330c44008f53fa159d2aeb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26dfe815fa3a831d0354bde7ac2b2c7e5ed215dba3330c44008f53fa159d2aeb->enter($__internal_26dfe815fa3a831d0354bde7ac2b2c7e5ed215dba3330c44008f53fa159d2aeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_038e7a2e235b2722c92701fb5c14a006d98eeba66faa0c407464a1718455821a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_038e7a2e235b2722c92701fb5c14a006d98eeba66faa0c407464a1718455821a->enter($__internal_038e7a2e235b2722c92701fb5c14a006d98eeba66faa0c407464a1718455821a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_26dfe815fa3a831d0354bde7ac2b2c7e5ed215dba3330c44008f53fa159d2aeb->leave($__internal_26dfe815fa3a831d0354bde7ac2b2c7e5ed215dba3330c44008f53fa159d2aeb_prof);

        
        $__internal_038e7a2e235b2722c92701fb5c14a006d98eeba66faa0c407464a1718455821a->leave($__internal_038e7a2e235b2722c92701fb5c14a006d98eeba66faa0c407464a1718455821a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ad14de691081ef324e50d15dbcfbb344e311219da41bc81954181a9d45100acf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad14de691081ef324e50d15dbcfbb344e311219da41bc81954181a9d45100acf->enter($__internal_ad14de691081ef324e50d15dbcfbb344e311219da41bc81954181a9d45100acf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e8ca1a598ccca99a16856fbd5ed755fba275221dacbb4d9ca020495afe7c19bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8ca1a598ccca99a16856fbd5ed755fba275221dacbb4d9ca020495afe7c19bf->enter($__internal_e8ca1a598ccca99a16856fbd5ed755fba275221dacbb4d9ca020495afe7c19bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_e8ca1a598ccca99a16856fbd5ed755fba275221dacbb4d9ca020495afe7c19bf->leave($__internal_e8ca1a598ccca99a16856fbd5ed755fba275221dacbb4d9ca020495afe7c19bf_prof);

        
        $__internal_ad14de691081ef324e50d15dbcfbb344e311219da41bc81954181a9d45100acf->leave($__internal_ad14de691081ef324e50d15dbcfbb344e311219da41bc81954181a9d45100acf_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_a9c7b2f7199ca9693e080977c0075a57bddc2ae21c5541c0e3cd1043c3f2b7f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9c7b2f7199ca9693e080977c0075a57bddc2ae21c5541c0e3cd1043c3f2b7f1->enter($__internal_a9c7b2f7199ca9693e080977c0075a57bddc2ae21c5541c0e3cd1043c3f2b7f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_97de401147492c4615b1d4060a37fad580e2832e1c9107248a9a7f23ecd65e9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97de401147492c4615b1d4060a37fad580e2832e1c9107248a9a7f23ecd65e9b->enter($__internal_97de401147492c4615b1d4060a37fad580e2832e1c9107248a9a7f23ecd65e9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_97de401147492c4615b1d4060a37fad580e2832e1c9107248a9a7f23ecd65e9b->leave($__internal_97de401147492c4615b1d4060a37fad580e2832e1c9107248a9a7f23ecd65e9b_prof);

        
        $__internal_a9c7b2f7199ca9693e080977c0075a57bddc2ae21c5541c0e3cd1043c3f2b7f1->leave($__internal_a9c7b2f7199ca9693e080977c0075a57bddc2ae21c5541c0e3cd1043c3f2b7f1_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_d2695628ac680c1d6d3056446ca086094f2c95baa0fb27ece26a9085b7c1c227 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2695628ac680c1d6d3056446ca086094f2c95baa0fb27ece26a9085b7c1c227->enter($__internal_d2695628ac680c1d6d3056446ca086094f2c95baa0fb27ece26a9085b7c1c227_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f513653b6b4cd706c74054966618a29dc71c5709650dbe63d55fc35176b2e6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f513653b6b4cd706c74054966618a29dc71c5709650dbe63d55fc35176b2e6b->enter($__internal_6f513653b6b4cd706c74054966618a29dc71c5709650dbe63d55fc35176b2e6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_6f513653b6b4cd706c74054966618a29dc71c5709650dbe63d55fc35176b2e6b->leave($__internal_6f513653b6b4cd706c74054966618a29dc71c5709650dbe63d55fc35176b2e6b_prof);

        
        $__internal_d2695628ac680c1d6d3056446ca086094f2c95baa0fb27ece26a9085b7c1c227->leave($__internal_d2695628ac680c1d6d3056446ca086094f2c95baa0fb27ece26a9085b7c1c227_prof);

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
