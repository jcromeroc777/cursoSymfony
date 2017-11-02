<?php

/* base.html.twig */
class __TwigTemplate_4a658e33ffcaab0ebac23ec7730a7e8e471fa6d9dc38d5fef3a22fea83a39fd4 extends Twig_Template
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
        $__internal_1092ad5cd6f7ffcce899e3e71543a9aaaf3e864321d3733eafa3388b376a8247 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1092ad5cd6f7ffcce899e3e71543a9aaaf3e864321d3733eafa3388b376a8247->enter($__internal_1092ad5cd6f7ffcce899e3e71543a9aaaf3e864321d3733eafa3388b376a8247_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_56ab73cad21f75955f48d36cfdffc78fe1d8035a35b72bac1a8631367333d5ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56ab73cad21f75955f48d36cfdffc78fe1d8035a35b72bac1a8631367333d5ed->enter($__internal_56ab73cad21f75955f48d36cfdffc78fe1d8035a35b72bac1a8631367333d5ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_1092ad5cd6f7ffcce899e3e71543a9aaaf3e864321d3733eafa3388b376a8247->leave($__internal_1092ad5cd6f7ffcce899e3e71543a9aaaf3e864321d3733eafa3388b376a8247_prof);

        
        $__internal_56ab73cad21f75955f48d36cfdffc78fe1d8035a35b72bac1a8631367333d5ed->leave($__internal_56ab73cad21f75955f48d36cfdffc78fe1d8035a35b72bac1a8631367333d5ed_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d7066cd0a84632434fcf50394b4d31fd7f6170d31c9f133d63503cc80c078b45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7066cd0a84632434fcf50394b4d31fd7f6170d31c9f133d63503cc80c078b45->enter($__internal_d7066cd0a84632434fcf50394b4d31fd7f6170d31c9f133d63503cc80c078b45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f01c59de629f9f8905bf97d62aed80a5fa8432939f10741dfbcf91b4160673f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f01c59de629f9f8905bf97d62aed80a5fa8432939f10741dfbcf91b4160673f8->enter($__internal_f01c59de629f9f8905bf97d62aed80a5fa8432939f10741dfbcf91b4160673f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_f01c59de629f9f8905bf97d62aed80a5fa8432939f10741dfbcf91b4160673f8->leave($__internal_f01c59de629f9f8905bf97d62aed80a5fa8432939f10741dfbcf91b4160673f8_prof);

        
        $__internal_d7066cd0a84632434fcf50394b4d31fd7f6170d31c9f133d63503cc80c078b45->leave($__internal_d7066cd0a84632434fcf50394b4d31fd7f6170d31c9f133d63503cc80c078b45_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f32216d7ccdc9b8b01c615a2855fd85fdb8f71cbfc77b83d485e740478903761 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f32216d7ccdc9b8b01c615a2855fd85fdb8f71cbfc77b83d485e740478903761->enter($__internal_f32216d7ccdc9b8b01c615a2855fd85fdb8f71cbfc77b83d485e740478903761_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e0573fa357ff1ccdb51f035b5809adb63c0952faf4fdb978d3bedaa8bb8ceb53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0573fa357ff1ccdb51f035b5809adb63c0952faf4fdb978d3bedaa8bb8ceb53->enter($__internal_e0573fa357ff1ccdb51f035b5809adb63c0952faf4fdb978d3bedaa8bb8ceb53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e0573fa357ff1ccdb51f035b5809adb63c0952faf4fdb978d3bedaa8bb8ceb53->leave($__internal_e0573fa357ff1ccdb51f035b5809adb63c0952faf4fdb978d3bedaa8bb8ceb53_prof);

        
        $__internal_f32216d7ccdc9b8b01c615a2855fd85fdb8f71cbfc77b83d485e740478903761->leave($__internal_f32216d7ccdc9b8b01c615a2855fd85fdb8f71cbfc77b83d485e740478903761_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_bd8c2a1a4aa9a85ff2d1514e51da2c89e8519f6958468cee79a55e32f13f4b0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd8c2a1a4aa9a85ff2d1514e51da2c89e8519f6958468cee79a55e32f13f4b0a->enter($__internal_bd8c2a1a4aa9a85ff2d1514e51da2c89e8519f6958468cee79a55e32f13f4b0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8feca3a28e2054092575d5c9d47ce6d04a78d5072313feb74e60f26cef782966 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8feca3a28e2054092575d5c9d47ce6d04a78d5072313feb74e60f26cef782966->enter($__internal_8feca3a28e2054092575d5c9d47ce6d04a78d5072313feb74e60f26cef782966_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8feca3a28e2054092575d5c9d47ce6d04a78d5072313feb74e60f26cef782966->leave($__internal_8feca3a28e2054092575d5c9d47ce6d04a78d5072313feb74e60f26cef782966_prof);

        
        $__internal_bd8c2a1a4aa9a85ff2d1514e51da2c89e8519f6958468cee79a55e32f13f4b0a->leave($__internal_bd8c2a1a4aa9a85ff2d1514e51da2c89e8519f6958468cee79a55e32f13f4b0a_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d23de417c3342f5c2b7ce69b4865f24b1ae56c6abfa504187dca0cc8e365922a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d23de417c3342f5c2b7ce69b4865f24b1ae56c6abfa504187dca0cc8e365922a->enter($__internal_d23de417c3342f5c2b7ce69b4865f24b1ae56c6abfa504187dca0cc8e365922a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_4c888df5674362266fd391fcc3ec8fe092b0b1a9d9b2aa0bf2ffd90cadafd177 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c888df5674362266fd391fcc3ec8fe092b0b1a9d9b2aa0bf2ffd90cadafd177->enter($__internal_4c888df5674362266fd391fcc3ec8fe092b0b1a9d9b2aa0bf2ffd90cadafd177_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_4c888df5674362266fd391fcc3ec8fe092b0b1a9d9b2aa0bf2ffd90cadafd177->leave($__internal_4c888df5674362266fd391fcc3ec8fe092b0b1a9d9b2aa0bf2ffd90cadafd177_prof);

        
        $__internal_d23de417c3342f5c2b7ce69b4865f24b1ae56c6abfa504187dca0cc8e365922a->leave($__internal_d23de417c3342f5c2b7ce69b4865f24b1ae56c6abfa504187dca0cc8e365922a_prof);

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
