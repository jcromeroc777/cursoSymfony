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
        $__internal_4017a3adfbaaf15c7d8c3f8a78d25d5c6093b9b77388338f103a2adafdd6a309 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4017a3adfbaaf15c7d8c3f8a78d25d5c6093b9b77388338f103a2adafdd6a309->enter($__internal_4017a3adfbaaf15c7d8c3f8a78d25d5c6093b9b77388338f103a2adafdd6a309_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_5f8e3f387992989d4006bb9f0178ba08d3ddc4630baeadd1b090ded915c20fc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f8e3f387992989d4006bb9f0178ba08d3ddc4630baeadd1b090ded915c20fc4->enter($__internal_5f8e3f387992989d4006bb9f0178ba08d3ddc4630baeadd1b090ded915c20fc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_4017a3adfbaaf15c7d8c3f8a78d25d5c6093b9b77388338f103a2adafdd6a309->leave($__internal_4017a3adfbaaf15c7d8c3f8a78d25d5c6093b9b77388338f103a2adafdd6a309_prof);

        
        $__internal_5f8e3f387992989d4006bb9f0178ba08d3ddc4630baeadd1b090ded915c20fc4->leave($__internal_5f8e3f387992989d4006bb9f0178ba08d3ddc4630baeadd1b090ded915c20fc4_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_cf3e0648e1d9c7261b0fbc596a3a31328689498baf43471553afef509d8cbf37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf3e0648e1d9c7261b0fbc596a3a31328689498baf43471553afef509d8cbf37->enter($__internal_cf3e0648e1d9c7261b0fbc596a3a31328689498baf43471553afef509d8cbf37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_872398914621e5ad663f3779f8561d4c494eb2fc5a305bba2d750fc229abbf50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_872398914621e5ad663f3779f8561d4c494eb2fc5a305bba2d750fc229abbf50->enter($__internal_872398914621e5ad663f3779f8561d4c494eb2fc5a305bba2d750fc229abbf50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_872398914621e5ad663f3779f8561d4c494eb2fc5a305bba2d750fc229abbf50->leave($__internal_872398914621e5ad663f3779f8561d4c494eb2fc5a305bba2d750fc229abbf50_prof);

        
        $__internal_cf3e0648e1d9c7261b0fbc596a3a31328689498baf43471553afef509d8cbf37->leave($__internal_cf3e0648e1d9c7261b0fbc596a3a31328689498baf43471553afef509d8cbf37_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_381628b04c2fcb77109f062e9e918f8237fcfa5eda977beb33324e29522e2d35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_381628b04c2fcb77109f062e9e918f8237fcfa5eda977beb33324e29522e2d35->enter($__internal_381628b04c2fcb77109f062e9e918f8237fcfa5eda977beb33324e29522e2d35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_8399a44e8c1088a77b7deeb4275dab4294368cd187f807c954b87de44ecc237d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8399a44e8c1088a77b7deeb4275dab4294368cd187f807c954b87de44ecc237d->enter($__internal_8399a44e8c1088a77b7deeb4275dab4294368cd187f807c954b87de44ecc237d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_8399a44e8c1088a77b7deeb4275dab4294368cd187f807c954b87de44ecc237d->leave($__internal_8399a44e8c1088a77b7deeb4275dab4294368cd187f807c954b87de44ecc237d_prof);

        
        $__internal_381628b04c2fcb77109f062e9e918f8237fcfa5eda977beb33324e29522e2d35->leave($__internal_381628b04c2fcb77109f062e9e918f8237fcfa5eda977beb33324e29522e2d35_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_5bb0143babe5d4e022d62bf1453c48b6c70a2aba508ba043ba579c83e8648eaa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bb0143babe5d4e022d62bf1453c48b6c70a2aba508ba043ba579c83e8648eaa->enter($__internal_5bb0143babe5d4e022d62bf1453c48b6c70a2aba508ba043ba579c83e8648eaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cc64a81b3c17ef6fea16fb3e5147b5e2c7f9b67d564d45f49a58b67f441f15b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc64a81b3c17ef6fea16fb3e5147b5e2c7f9b67d564d45f49a58b67f441f15b0->enter($__internal_cc64a81b3c17ef6fea16fb3e5147b5e2c7f9b67d564d45f49a58b67f441f15b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_cc64a81b3c17ef6fea16fb3e5147b5e2c7f9b67d564d45f49a58b67f441f15b0->leave($__internal_cc64a81b3c17ef6fea16fb3e5147b5e2c7f9b67d564d45f49a58b67f441f15b0_prof);

        
        $__internal_5bb0143babe5d4e022d62bf1453c48b6c70a2aba508ba043ba579c83e8648eaa->leave($__internal_5bb0143babe5d4e022d62bf1453c48b6c70a2aba508ba043ba579c83e8648eaa_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a67b3ae85ee604ab719e33014cfabbedc8653469c00e84e6d88c1ab2638d199a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a67b3ae85ee604ab719e33014cfabbedc8653469c00e84e6d88c1ab2638d199a->enter($__internal_a67b3ae85ee604ab719e33014cfabbedc8653469c00e84e6d88c1ab2638d199a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_39f636cddb7dd5c6369ed9a6745f1f2c93829064965db63bfa16ab787a3099f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39f636cddb7dd5c6369ed9a6745f1f2c93829064965db63bfa16ab787a3099f1->enter($__internal_39f636cddb7dd5c6369ed9a6745f1f2c93829064965db63bfa16ab787a3099f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_39f636cddb7dd5c6369ed9a6745f1f2c93829064965db63bfa16ab787a3099f1->leave($__internal_39f636cddb7dd5c6369ed9a6745f1f2c93829064965db63bfa16ab787a3099f1_prof);

        
        $__internal_a67b3ae85ee604ab719e33014cfabbedc8653469c00e84e6d88c1ab2638d199a->leave($__internal_a67b3ae85ee604ab719e33014cfabbedc8653469c00e84e6d88c1ab2638d199a_prof);

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
