<?php

/* :lucky:number.html.twig */
class __TwigTemplate_fe5b19e958113f43650de084bc38a2f5a7b17c3ff9b1f4c384ad0f89d0c0461e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<h1>Your lucky number is ";
        echo twig_escape_filter($this->env, ($context["number"] ?? null), "html", null, true);
        echo "</h1>";
    }

    public function getTemplateName()
    {
        return ":lucky:number.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":lucky:number.html.twig", "/Users/julioromero/Desktop/cursoSymfony/app/Resources/views/lucky/number.html.twig");
    }
}
