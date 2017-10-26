<?php

/* base.html.twig */
class __TwigTemplate_e7512925d8fb00307cc049a1006d437f3028b1723b810d6e2acede88a13e1891 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4758c1aafd805d5fec135f837b37e8ae4dd8f89b25dea1419a0520b6417c1961 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4758c1aafd805d5fec135f837b37e8ae4dd8f89b25dea1419a0520b6417c1961->enter($__internal_4758c1aafd805d5fec135f837b37e8ae4dd8f89b25dea1419a0520b6417c1961_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_3a0fdddc9869709a70e0386c94d546681ae50f950d2b4361d63970d10bf980c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a0fdddc9869709a70e0386c94d546681ae50f950d2b4361d63970d10bf980c5->enter($__internal_3a0fdddc9869709a70e0386c94d546681ae50f950d2b4361d63970d10bf980c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_4758c1aafd805d5fec135f837b37e8ae4dd8f89b25dea1419a0520b6417c1961->leave($__internal_4758c1aafd805d5fec135f837b37e8ae4dd8f89b25dea1419a0520b6417c1961_prof);

        
        $__internal_3a0fdddc9869709a70e0386c94d546681ae50f950d2b4361d63970d10bf980c5->leave($__internal_3a0fdddc9869709a70e0386c94d546681ae50f950d2b4361d63970d10bf980c5_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_51bed0dac4d22002c75257655984f5e117c67e15201f0c6dcdb1b36e70a0c57e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51bed0dac4d22002c75257655984f5e117c67e15201f0c6dcdb1b36e70a0c57e->enter($__internal_51bed0dac4d22002c75257655984f5e117c67e15201f0c6dcdb1b36e70a0c57e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fbc9e48fdf6dcd60db8e6c375b1f9c7cd6efc621c4a93e6871ca4bf90a98558f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbc9e48fdf6dcd60db8e6c375b1f9c7cd6efc621c4a93e6871ca4bf90a98558f->enter($__internal_fbc9e48fdf6dcd60db8e6c375b1f9c7cd6efc621c4a93e6871ca4bf90a98558f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_fbc9e48fdf6dcd60db8e6c375b1f9c7cd6efc621c4a93e6871ca4bf90a98558f->leave($__internal_fbc9e48fdf6dcd60db8e6c375b1f9c7cd6efc621c4a93e6871ca4bf90a98558f_prof);

        
        $__internal_51bed0dac4d22002c75257655984f5e117c67e15201f0c6dcdb1b36e70a0c57e->leave($__internal_51bed0dac4d22002c75257655984f5e117c67e15201f0c6dcdb1b36e70a0c57e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0d6e07a62f9d15599a83e3b82cac8479dc1f01b8467d01b10d63e27c2c929b0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d6e07a62f9d15599a83e3b82cac8479dc1f01b8467d01b10d63e27c2c929b0e->enter($__internal_0d6e07a62f9d15599a83e3b82cac8479dc1f01b8467d01b10d63e27c2c929b0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_16cff9c7d856c2f93112ce8784e11db88cef98b029e28817d2c9bf1256bcb7a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16cff9c7d856c2f93112ce8784e11db88cef98b029e28817d2c9bf1256bcb7a9->enter($__internal_16cff9c7d856c2f93112ce8784e11db88cef98b029e28817d2c9bf1256bcb7a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_16cff9c7d856c2f93112ce8784e11db88cef98b029e28817d2c9bf1256bcb7a9->leave($__internal_16cff9c7d856c2f93112ce8784e11db88cef98b029e28817d2c9bf1256bcb7a9_prof);

        
        $__internal_0d6e07a62f9d15599a83e3b82cac8479dc1f01b8467d01b10d63e27c2c929b0e->leave($__internal_0d6e07a62f9d15599a83e3b82cac8479dc1f01b8467d01b10d63e27c2c929b0e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_e76bb14fc3a7aeedb433bf76396d2bd69b1eeab0822d45b7c0d0faa837431ac8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e76bb14fc3a7aeedb433bf76396d2bd69b1eeab0822d45b7c0d0faa837431ac8->enter($__internal_e76bb14fc3a7aeedb433bf76396d2bd69b1eeab0822d45b7c0d0faa837431ac8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6617b18d407af3bb3a6396528e24e49d3f9db5f840021e8b14dad6a7eeb1a2e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6617b18d407af3bb3a6396528e24e49d3f9db5f840021e8b14dad6a7eeb1a2e3->enter($__internal_6617b18d407af3bb3a6396528e24e49d3f9db5f840021e8b14dad6a7eeb1a2e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6617b18d407af3bb3a6396528e24e49d3f9db5f840021e8b14dad6a7eeb1a2e3->leave($__internal_6617b18d407af3bb3a6396528e24e49d3f9db5f840021e8b14dad6a7eeb1a2e3_prof);

        
        $__internal_e76bb14fc3a7aeedb433bf76396d2bd69b1eeab0822d45b7c0d0faa837431ac8->leave($__internal_e76bb14fc3a7aeedb433bf76396d2bd69b1eeab0822d45b7c0d0faa837431ac8_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2f4478a31d61d9b6ba3f9367d3ef95b4d7985a84ec591a9c2f5fae70448c4a07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f4478a31d61d9b6ba3f9367d3ef95b4d7985a84ec591a9c2f5fae70448c4a07->enter($__internal_2f4478a31d61d9b6ba3f9367d3ef95b4d7985a84ec591a9c2f5fae70448c4a07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_8b4bc1ffe2cbb3c2c79ba8305fce568d5b576a4a656bde89fe8ca5bf7232d605 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b4bc1ffe2cbb3c2c79ba8305fce568d5b576a4a656bde89fe8ca5bf7232d605->enter($__internal_8b4bc1ffe2cbb3c2c79ba8305fce568d5b576a4a656bde89fe8ca5bf7232d605_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_8b4bc1ffe2cbb3c2c79ba8305fce568d5b576a4a656bde89fe8ca5bf7232d605->leave($__internal_8b4bc1ffe2cbb3c2c79ba8305fce568d5b576a4a656bde89fe8ca5bf7232d605_prof);

        
        $__internal_2f4478a31d61d9b6ba3f9367d3ef95b4d7985a84ec591a9c2f5fae70448c4a07->leave($__internal_2f4478a31d61d9b6ba3f9367d3ef95b4d7985a84ec591a9c2f5fae70448c4a07_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/Applications/MAMP/htdocs/cursoSymfony3/app/Resources/views/base.html.twig");
    }
}
