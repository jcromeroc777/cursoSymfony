<?php

/* base.html.twig */
class __TwigTemplate_83b5e9b24179292353fe88ba51f5993b124411c8d1e7b755b4a700156f836eec extends Twig_Template
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
        $__internal_01a4ebdbcd53409b3ca4c5f7e89c2f953cc067c4f3a3059fd3d5e56d09f88dc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01a4ebdbcd53409b3ca4c5f7e89c2f953cc067c4f3a3059fd3d5e56d09f88dc5->enter($__internal_01a4ebdbcd53409b3ca4c5f7e89c2f953cc067c4f3a3059fd3d5e56d09f88dc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_2aec2a3b4bd340dea89bc42266ce6a70c575a4e5ab5f988f2946c4c5495429ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2aec2a3b4bd340dea89bc42266ce6a70c575a4e5ab5f988f2946c4c5495429ef->enter($__internal_2aec2a3b4bd340dea89bc42266ce6a70c575a4e5ab5f988f2946c4c5495429ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_01a4ebdbcd53409b3ca4c5f7e89c2f953cc067c4f3a3059fd3d5e56d09f88dc5->leave($__internal_01a4ebdbcd53409b3ca4c5f7e89c2f953cc067c4f3a3059fd3d5e56d09f88dc5_prof);

        
        $__internal_2aec2a3b4bd340dea89bc42266ce6a70c575a4e5ab5f988f2946c4c5495429ef->leave($__internal_2aec2a3b4bd340dea89bc42266ce6a70c575a4e5ab5f988f2946c4c5495429ef_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_36e4e3909a2be8b1b22b3d617ae7aaf95685ca7d3acf095023b963a1b807903e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36e4e3909a2be8b1b22b3d617ae7aaf95685ca7d3acf095023b963a1b807903e->enter($__internal_36e4e3909a2be8b1b22b3d617ae7aaf95685ca7d3acf095023b963a1b807903e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c02cab856dcc20b0434ea5ec1a30ba174617b74bca4b5457455808ce8b9effd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c02cab856dcc20b0434ea5ec1a30ba174617b74bca4b5457455808ce8b9effd6->enter($__internal_c02cab856dcc20b0434ea5ec1a30ba174617b74bca4b5457455808ce8b9effd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c02cab856dcc20b0434ea5ec1a30ba174617b74bca4b5457455808ce8b9effd6->leave($__internal_c02cab856dcc20b0434ea5ec1a30ba174617b74bca4b5457455808ce8b9effd6_prof);

        
        $__internal_36e4e3909a2be8b1b22b3d617ae7aaf95685ca7d3acf095023b963a1b807903e->leave($__internal_36e4e3909a2be8b1b22b3d617ae7aaf95685ca7d3acf095023b963a1b807903e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cb0aacdcab6378d48db3026e2bf7f728a83f10d92c633eff30afed7f9e61fd14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb0aacdcab6378d48db3026e2bf7f728a83f10d92c633eff30afed7f9e61fd14->enter($__internal_cb0aacdcab6378d48db3026e2bf7f728a83f10d92c633eff30afed7f9e61fd14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_d48441c8ceff78497c1dcb1cd89d825db1a8ac34c8057e90945d28c31631b2fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d48441c8ceff78497c1dcb1cd89d825db1a8ac34c8057e90945d28c31631b2fb->enter($__internal_d48441c8ceff78497c1dcb1cd89d825db1a8ac34c8057e90945d28c31631b2fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d48441c8ceff78497c1dcb1cd89d825db1a8ac34c8057e90945d28c31631b2fb->leave($__internal_d48441c8ceff78497c1dcb1cd89d825db1a8ac34c8057e90945d28c31631b2fb_prof);

        
        $__internal_cb0aacdcab6378d48db3026e2bf7f728a83f10d92c633eff30afed7f9e61fd14->leave($__internal_cb0aacdcab6378d48db3026e2bf7f728a83f10d92c633eff30afed7f9e61fd14_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_291ce1eefce618ceff506077b6834ed755c78f48b4a1fa90d272819569c0cd18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_291ce1eefce618ceff506077b6834ed755c78f48b4a1fa90d272819569c0cd18->enter($__internal_291ce1eefce618ceff506077b6834ed755c78f48b4a1fa90d272819569c0cd18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6e645adf14639a2e2bf9087ab385820b91f83d2f8812b0399c2f9dcfe12bd0d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e645adf14639a2e2bf9087ab385820b91f83d2f8812b0399c2f9dcfe12bd0d9->enter($__internal_6e645adf14639a2e2bf9087ab385820b91f83d2f8812b0399c2f9dcfe12bd0d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6e645adf14639a2e2bf9087ab385820b91f83d2f8812b0399c2f9dcfe12bd0d9->leave($__internal_6e645adf14639a2e2bf9087ab385820b91f83d2f8812b0399c2f9dcfe12bd0d9_prof);

        
        $__internal_291ce1eefce618ceff506077b6834ed755c78f48b4a1fa90d272819569c0cd18->leave($__internal_291ce1eefce618ceff506077b6834ed755c78f48b4a1fa90d272819569c0cd18_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_57e5b41b9cfae05a000d448c1d9103f45a14e71dc31230e343200736b9db72cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57e5b41b9cfae05a000d448c1d9103f45a14e71dc31230e343200736b9db72cc->enter($__internal_57e5b41b9cfae05a000d448c1d9103f45a14e71dc31230e343200736b9db72cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_60e84d0e1d711136a2b73a6ff6b68b3d292058a5169e1e4f45d92b1e7db163bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60e84d0e1d711136a2b73a6ff6b68b3d292058a5169e1e4f45d92b1e7db163bc->enter($__internal_60e84d0e1d711136a2b73a6ff6b68b3d292058a5169e1e4f45d92b1e7db163bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_60e84d0e1d711136a2b73a6ff6b68b3d292058a5169e1e4f45d92b1e7db163bc->leave($__internal_60e84d0e1d711136a2b73a6ff6b68b3d292058a5169e1e4f45d92b1e7db163bc_prof);

        
        $__internal_57e5b41b9cfae05a000d448c1d9103f45a14e71dc31230e343200736b9db72cc->leave($__internal_57e5b41b9cfae05a000d448c1d9103f45a14e71dc31230e343200736b9db72cc_prof);

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
", "base.html.twig", "/Users/julioromero/Desktop/cursoSymfony/app/Resources/views/base.html.twig");
    }
}
