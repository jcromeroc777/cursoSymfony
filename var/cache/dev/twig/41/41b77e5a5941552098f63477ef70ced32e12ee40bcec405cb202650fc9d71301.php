<?php

/* lucky/number.html.twig */
class __TwigTemplate_5dafe240ab87f00156c55a97705b03df4b1c5fd93ddae640807acf9969c5a5ce extends Twig_Template
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
        $__internal_aca26eda7efc0386a513b8003f93cd26a439f214639db4f1c3b94e3c727865e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aca26eda7efc0386a513b8003f93cd26a439f214639db4f1c3b94e3c727865e9->enter($__internal_aca26eda7efc0386a513b8003f93cd26a439f214639db4f1c3b94e3c727865e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "lucky/number.html.twig"));

        $__internal_f7825783cf5a8a7b2a4b6d2c66c513bc80c453c4273e6d704ffa2c4bb137c684 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7825783cf5a8a7b2a4b6d2c66c513bc80c453c4273e6d704ffa2c4bb137c684->enter($__internal_f7825783cf5a8a7b2a4b6d2c66c513bc80c453c4273e6d704ffa2c4bb137c684_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "lucky/number.html.twig"));

        // line 1
        echo "<h1>Your lucky number is ";
        echo twig_escape_filter($this->env, ($context["number"] ?? $this->getContext($context, "number")), "html", null, true);
        echo "</h1>";
        
        $__internal_aca26eda7efc0386a513b8003f93cd26a439f214639db4f1c3b94e3c727865e9->leave($__internal_aca26eda7efc0386a513b8003f93cd26a439f214639db4f1c3b94e3c727865e9_prof);

        
        $__internal_f7825783cf5a8a7b2a4b6d2c66c513bc80c453c4273e6d704ffa2c4bb137c684->leave($__internal_f7825783cf5a8a7b2a4b6d2c66c513bc80c453c4273e6d704ffa2c4bb137c684_prof);

    }

    public function getTemplateName()
    {
        return "lucky/number.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1>Your lucky number is {{ number }}</h1>", "lucky/number.html.twig", "/Applications/MAMP/htdocs/cursoSymfony3/app/Resources/views/lucky/number.html.twig");
    }
}
