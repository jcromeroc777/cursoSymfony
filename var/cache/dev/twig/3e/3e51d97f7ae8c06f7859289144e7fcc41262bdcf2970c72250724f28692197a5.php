<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_8d75d46680520b17a436b17adebc419e865bc5fb1e9380c89c0f2d5ba5bb5b37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_4b850091e1041a71bf6c769b0847410223bada41ff72cc6f5ba7e160be9171d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b850091e1041a71bf6c769b0847410223bada41ff72cc6f5ba7e160be9171d5->enter($__internal_4b850091e1041a71bf6c769b0847410223bada41ff72cc6f5ba7e160be9171d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_88b7f2df5646eda2cbb7764ed28ccc2821b6fa11963136b94c582efab7a861c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88b7f2df5646eda2cbb7764ed28ccc2821b6fa11963136b94c582efab7a861c7->enter($__internal_88b7f2df5646eda2cbb7764ed28ccc2821b6fa11963136b94c582efab7a861c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b850091e1041a71bf6c769b0847410223bada41ff72cc6f5ba7e160be9171d5->leave($__internal_4b850091e1041a71bf6c769b0847410223bada41ff72cc6f5ba7e160be9171d5_prof);

        
        $__internal_88b7f2df5646eda2cbb7764ed28ccc2821b6fa11963136b94c582efab7a861c7->leave($__internal_88b7f2df5646eda2cbb7764ed28ccc2821b6fa11963136b94c582efab7a861c7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3907c2d7c9596ccde778c0ecb9a7e8c6a29e9c1ed9e50fceb03d9824e704a00f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3907c2d7c9596ccde778c0ecb9a7e8c6a29e9c1ed9e50fceb03d9824e704a00f->enter($__internal_3907c2d7c9596ccde778c0ecb9a7e8c6a29e9c1ed9e50fceb03d9824e704a00f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c30cc28c58796680259a614bbfc91b413ded1780da3f989ffbe4eb3a9ba99482 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c30cc28c58796680259a614bbfc91b413ded1780da3f989ffbe4eb3a9ba99482->enter($__internal_c30cc28c58796680259a614bbfc91b413ded1780da3f989ffbe4eb3a9ba99482_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c30cc28c58796680259a614bbfc91b413ded1780da3f989ffbe4eb3a9ba99482->leave($__internal_c30cc28c58796680259a614bbfc91b413ded1780da3f989ffbe4eb3a9ba99482_prof);

        
        $__internal_3907c2d7c9596ccde778c0ecb9a7e8c6a29e9c1ed9e50fceb03d9824e704a00f->leave($__internal_3907c2d7c9596ccde778c0ecb9a7e8c6a29e9c1ed9e50fceb03d9824e704a00f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9358a68a49d9d78f04512410de83af76a439148b419c293875fb071172e36094 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9358a68a49d9d78f04512410de83af76a439148b419c293875fb071172e36094->enter($__internal_9358a68a49d9d78f04512410de83af76a439148b419c293875fb071172e36094_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_13195e218765e918c2da49c9c61b2f04416ac061e4ac456ee151e347b669ab1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13195e218765e918c2da49c9c61b2f04416ac061e4ac456ee151e347b669ab1b->enter($__internal_13195e218765e918c2da49c9c61b2f04416ac061e4ac456ee151e347b669ab1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_13195e218765e918c2da49c9c61b2f04416ac061e4ac456ee151e347b669ab1b->leave($__internal_13195e218765e918c2da49c9c61b2f04416ac061e4ac456ee151e347b669ab1b_prof);

        
        $__internal_9358a68a49d9d78f04512410de83af76a439148b419c293875fb071172e36094->leave($__internal_9358a68a49d9d78f04512410de83af76a439148b419c293875fb071172e36094_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fa95142a046b5bd36bb5f03a78e3be3eb70e587b81b2c22030d522a5c7adae1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa95142a046b5bd36bb5f03a78e3be3eb70e587b81b2c22030d522a5c7adae1e->enter($__internal_fa95142a046b5bd36bb5f03a78e3be3eb70e587b81b2c22030d522a5c7adae1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_91b43a60ced19c452b90a50c8a01763283e44ceb39473ec3724cbae9ffc8e615 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91b43a60ced19c452b90a50c8a01763283e44ceb39473ec3724cbae9ffc8e615->enter($__internal_91b43a60ced19c452b90a50c8a01763283e44ceb39473ec3724cbae9ffc8e615_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_91b43a60ced19c452b90a50c8a01763283e44ceb39473ec3724cbae9ffc8e615->leave($__internal_91b43a60ced19c452b90a50c8a01763283e44ceb39473ec3724cbae9ffc8e615_prof);

        
        $__internal_fa95142a046b5bd36bb5f03a78e3be3eb70e587b81b2c22030d522a5c7adae1e->leave($__internal_fa95142a046b5bd36bb5f03a78e3be3eb70e587b81b2c22030d522a5c7adae1e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Users/julioromero/Desktop/cursoSymfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
