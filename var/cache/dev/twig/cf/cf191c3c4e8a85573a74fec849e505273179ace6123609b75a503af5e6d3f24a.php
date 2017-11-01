<?php

/* @WebProfiler/Collector/events.html.twig */
class __TwigTemplate_de6456a0a083e1ca207884c1b50ed7602a5ae5964edba5738b4285bb8b6d1f30 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/events.html.twig", 1);
        $this->blocks = array(
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
        $__internal_4b135f3351867a67432e489fd3045f9acb82d632cfafd2d118fbffd3a093c646 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b135f3351867a67432e489fd3045f9acb82d632cfafd2d118fbffd3a093c646->enter($__internal_4b135f3351867a67432e489fd3045f9acb82d632cfafd2d118fbffd3a093c646_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/events.html.twig"));

        $__internal_606497e00a879fb571210a03052594f04ee76144d0989ea90e11af75b493b757 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_606497e00a879fb571210a03052594f04ee76144d0989ea90e11af75b493b757->enter($__internal_606497e00a879fb571210a03052594f04ee76144d0989ea90e11af75b493b757_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/events.html.twig"));

        // line 3
        $context["helper"] = $this;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b135f3351867a67432e489fd3045f9acb82d632cfafd2d118fbffd3a093c646->leave($__internal_4b135f3351867a67432e489fd3045f9acb82d632cfafd2d118fbffd3a093c646_prof);

        
        $__internal_606497e00a879fb571210a03052594f04ee76144d0989ea90e11af75b493b757->leave($__internal_606497e00a879fb571210a03052594f04ee76144d0989ea90e11af75b493b757_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7b94df9db1a233d4811e31c9172a242f26ab1549d21e7df50f9aeb9411d28c6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b94df9db1a233d4811e31c9172a242f26ab1549d21e7df50f9aeb9411d28c6d->enter($__internal_7b94df9db1a233d4811e31c9172a242f26ab1549d21e7df50f9aeb9411d28c6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_9924d9c30d4b07713c0e6c42cd4435e545ce06fce6d19e5d4b31fb84ed488f7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9924d9c30d4b07713c0e6c42cd4435e545ce06fce6d19e5d4b31fb84ed488f7a->enter($__internal_9924d9c30d4b07713c0e6c42cd4435e545ce06fce6d19e5d4b31fb84ed488f7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/event.svg");
        echo "</span>
    <strong>Events</strong>
</span>
";
        
        $__internal_9924d9c30d4b07713c0e6c42cd4435e545ce06fce6d19e5d4b31fb84ed488f7a->leave($__internal_9924d9c30d4b07713c0e6c42cd4435e545ce06fce6d19e5d4b31fb84ed488f7a_prof);

        
        $__internal_7b94df9db1a233d4811e31c9172a242f26ab1549d21e7df50f9aeb9411d28c6d->leave($__internal_7b94df9db1a233d4811e31c9172a242f26ab1549d21e7df50f9aeb9411d28c6d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_13274d077b1b5b041c3dd18dfdb8ae436384cdf740543530f58010a0c8c57111 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13274d077b1b5b041c3dd18dfdb8ae436384cdf740543530f58010a0c8c57111->enter($__internal_13274d077b1b5b041c3dd18dfdb8ae436384cdf740543530f58010a0c8c57111_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_68b02767eb53f8b47fbcebb2fc4ea557015a7777daa0aff4ce50e49f512f1c13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68b02767eb53f8b47fbcebb2fc4ea557015a7777daa0aff4ce50e49f512f1c13->enter($__internal_68b02767eb53f8b47fbcebb2fc4ea557015a7777daa0aff4ce50e49f512f1c13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    <h2>Event Dispatcher</h2>

    ";
        // line 15
        if (twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 15, $this->getSourceContext()); })()), "calledlisteners", array()))) {
            // line 16
            echo "        <div class=\"empty\">
            <p>No events have been recorded. Check that debugging is enabled in the kernel.</p>
        </div>
    ";
        } else {
            // line 20
            echo "        <div class=\"sf-tabs\">
            <div class=\"tab\">
                <h3 class=\"tab-title\">Called Listeners <span class=\"badge\">";
            // line 22
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 22, $this->getSourceContext()); })()), "calledlisteners", array())), "html", null, true);
            echo "</span></h3>

                <div class=\"tab-content\">
                    ";
            // line 25
            echo $context["helper"]->macro_render_table(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 25, $this->getSourceContext()); })()), "calledlisteners", array()));
            echo "
                </div>
            </div>

            <div class=\"tab\">
                <h3 class=\"tab-title\">Not Called Listeners <span class=\"badge\">";
            // line 30
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 30, $this->getSourceContext()); })()), "notcalledlisteners", array())), "html", null, true);
            echo "</span></h3>
                <div class=\"tab-content\">
                    ";
            // line 32
            if (twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 32, $this->getSourceContext()); })()), "notcalledlisteners", array()))) {
                // line 33
                echo "                        <div class=\"empty\">
                            <p>
                                <strong>There are no uncalled listeners</strong>.
                            </p>
                            <p>
                                All listeners were called for this request or an error occurred
                                when trying to collect uncalled listeners (in which case check the
                                logs to get more information).
                            </p>
                        </div>
                    ";
            } else {
                // line 44
                echo "                        ";
                echo $context["helper"]->macro_render_table(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 44, $this->getSourceContext()); })()), "notcalledlisteners", array()));
                echo "
                    ";
            }
            // line 46
            echo "                </div>
            </div>
        </div>
    ";
        }
        
        $__internal_68b02767eb53f8b47fbcebb2fc4ea557015a7777daa0aff4ce50e49f512f1c13->leave($__internal_68b02767eb53f8b47fbcebb2fc4ea557015a7777daa0aff4ce50e49f512f1c13_prof);

        
        $__internal_13274d077b1b5b041c3dd18dfdb8ae436384cdf740543530f58010a0c8c57111->leave($__internal_13274d077b1b5b041c3dd18dfdb8ae436384cdf740543530f58010a0c8c57111_prof);

    }

    // line 52
    public function macro_render_table($__listeners__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "listeners" => $__listeners__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_04bb15b1771e85fd50f03e25c740b50c9deb6407881126602833a1baacc25c24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_04bb15b1771e85fd50f03e25c740b50c9deb6407881126602833a1baacc25c24->enter($__internal_04bb15b1771e85fd50f03e25c740b50c9deb6407881126602833a1baacc25c24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_table"));

            $__internal_6e4ebe0335676c87bd719049d2edc3050f84f8a041ff4e58628b9a56c3ac216e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_6e4ebe0335676c87bd719049d2edc3050f84f8a041ff4e58628b9a56c3ac216e->enter($__internal_6e4ebe0335676c87bd719049d2edc3050f84f8a041ff4e58628b9a56c3ac216e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_table"));

            // line 53
            echo "    <table>
        <thead>
            <tr>
                <th class=\"text-right\">Priority</th>
                <th>Listener</th>
            </tr>
        </thead>

        ";
            // line 61
            $context["previous_event"] = twig_get_attribute($this->env, $this->getSourceContext(), twig_first($this->env, (isset($context["listeners"]) || array_key_exists("listeners", $context) ? $context["listeners"] : (function () { throw new Twig_Error_Runtime('Variable "listeners" does not exist.', 61, $this->getSourceContext()); })())), "event", array());
            // line 62
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listeners"]) || array_key_exists("listeners", $context) ? $context["listeners"] : (function () { throw new Twig_Error_Runtime('Variable "listeners" does not exist.', 62, $this->getSourceContext()); })()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["listener"]) {
                // line 63
                echo "            ";
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "first", array()) || (twig_get_attribute($this->env, $this->getSourceContext(), $context["listener"], "event", array()) != (isset($context["previous_event"]) || array_key_exists("previous_event", $context) ? $context["previous_event"] : (function () { throw new Twig_Error_Runtime('Variable "previous_event" does not exist.', 63, $this->getSourceContext()); })())))) {
                    // line 64
                    echo "                ";
                    if ( !twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "first", array())) {
                        // line 65
                        echo "                    </tbody>
                ";
                    }
                    // line 67
                    echo "
                <tbody>
                    <tr>
                        <th colspan=\"2\" class=\"colored font-normal\">";
                    // line 70
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["listener"], "event", array()), "html", null, true);
                    echo "</th>
                    </tr>

                ";
                    // line 73
                    $context["previous_event"] = twig_get_attribute($this->env, $this->getSourceContext(), $context["listener"], "event", array());
                    // line 74
                    echo "            ";
                }
                // line 75
                echo "
            <tr>
                <td class=\"text-right\">";
                // line 77
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), $context["listener"], "priority", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), $context["listener"], "priority", array()), "-")) : ("-")), "html", null, true);
                echo "</td>
                <td class=\"font-normal\">";
                // line 78
                echo call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["listener"], "stub", array())));
                echo "</td>
            </tr>

            ";
                // line 81
                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "last", array())) {
                    // line 82
                    echo "                </tbody>
            ";
                }
                // line 84
                echo "        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listener'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 85
            echo "    </table>
";
            
            $__internal_6e4ebe0335676c87bd719049d2edc3050f84f8a041ff4e58628b9a56c3ac216e->leave($__internal_6e4ebe0335676c87bd719049d2edc3050f84f8a041ff4e58628b9a56c3ac216e_prof);

            
            $__internal_04bb15b1771e85fd50f03e25c740b50c9deb6407881126602833a1baacc25c24->leave($__internal_04bb15b1771e85fd50f03e25c740b50c9deb6407881126602833a1baacc25c24_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/events.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 85,  243 => 84,  239 => 82,  237 => 81,  231 => 78,  227 => 77,  223 => 75,  220 => 74,  218 => 73,  212 => 70,  207 => 67,  203 => 65,  200 => 64,  197 => 63,  179 => 62,  177 => 61,  167 => 53,  149 => 52,  135 => 46,  129 => 44,  116 => 33,  114 => 32,  109 => 30,  101 => 25,  95 => 22,  91 => 20,  85 => 16,  83 => 15,  79 => 13,  70 => 12,  56 => 7,  53 => 6,  44 => 5,  34 => 1,  32 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% import _self as helper %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/event.svg') }}</span>
    <strong>Events</strong>
</span>
{% endblock %}

{% block panel %}
    <h2>Event Dispatcher</h2>

    {% if collector.calledlisteners is empty %}
        <div class=\"empty\">
            <p>No events have been recorded. Check that debugging is enabled in the kernel.</p>
        </div>
    {% else %}
        <div class=\"sf-tabs\">
            <div class=\"tab\">
                <h3 class=\"tab-title\">Called Listeners <span class=\"badge\">{{ collector.calledlisteners|length }}</span></h3>

                <div class=\"tab-content\">
                    {{ helper.render_table(collector.calledlisteners) }}
                </div>
            </div>

            <div class=\"tab\">
                <h3 class=\"tab-title\">Not Called Listeners <span class=\"badge\">{{ collector.notcalledlisteners|length }}</span></h3>
                <div class=\"tab-content\">
                    {% if collector.notcalledlisteners is empty %}
                        <div class=\"empty\">
                            <p>
                                <strong>There are no uncalled listeners</strong>.
                            </p>
                            <p>
                                All listeners were called for this request or an error occurred
                                when trying to collect uncalled listeners (in which case check the
                                logs to get more information).
                            </p>
                        </div>
                    {% else %}
                        {{ helper.render_table(collector.notcalledlisteners) }}
                    {% endif %}
                </div>
            </div>
        </div>
    {% endif %}
{% endblock %}

{% macro render_table(listeners) %}
    <table>
        <thead>
            <tr>
                <th class=\"text-right\">Priority</th>
                <th>Listener</th>
            </tr>
        </thead>

        {% set previous_event = (listeners|first).event %}
        {% for listener in listeners %}
            {% if loop.first or listener.event != previous_event %}
                {% if not loop.first %}
                    </tbody>
                {% endif %}

                <tbody>
                    <tr>
                        <th colspan=\"2\" class=\"colored font-normal\">{{ listener.event }}</th>
                    </tr>

                {% set previous_event = listener.event %}
            {% endif %}

            <tr>
                <td class=\"text-right\">{{ listener.priority|default('-') }}</td>
                <td class=\"font-normal\">{{ profiler_dump(listener.stub) }}</td>
            </tr>

            {% if loop.last %}
                </tbody>
            {% endif %}
        {% endfor %}
    </table>
{% endmacro %}
", "@WebProfiler/Collector/events.html.twig", "/Users/julioromero/Desktop/cursoSymfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/events.html.twig");
    }
}
