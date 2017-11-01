<?php

/* @Debug/Profiler/dump.html.twig */
class __TwigTemplate_f25ae4fff2df571e6e6c836ffa5eff2c3bdd534b50ad359e9d7a90287a3d69b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@Debug/Profiler/dump.html.twig", 1);
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
        $__internal_a26b795e7c3590ddba2eefbd6d71d3d1a23b255b9e5f5428cd6fd643c6af6a9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a26b795e7c3590ddba2eefbd6d71d3d1a23b255b9e5f5428cd6fd643c6af6a9d->enter($__internal_a26b795e7c3590ddba2eefbd6d71d3d1a23b255b9e5f5428cd6fd643c6af6a9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Debug/Profiler/dump.html.twig"));

        $__internal_5f6f3633188984e26a5a5b6e89ab1a5aa90baebc308c0c72547faaa650bfa461 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f6f3633188984e26a5a5b6e89ab1a5aa90baebc308c0c72547faaa650bfa461->enter($__internal_5f6f3633188984e26a5a5b6e89ab1a5aa90baebc308c0c72547faaa650bfa461_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Debug/Profiler/dump.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a26b795e7c3590ddba2eefbd6d71d3d1a23b255b9e5f5428cd6fd643c6af6a9d->leave($__internal_a26b795e7c3590ddba2eefbd6d71d3d1a23b255b9e5f5428cd6fd643c6af6a9d_prof);

        
        $__internal_5f6f3633188984e26a5a5b6e89ab1a5aa90baebc308c0c72547faaa650bfa461->leave($__internal_5f6f3633188984e26a5a5b6e89ab1a5aa90baebc308c0c72547faaa650bfa461_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f2c0ece77a8a2b3a1ba3b6fcddfb18feeb4a63161253a9c610d3d97a71dea001 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2c0ece77a8a2b3a1ba3b6fcddfb18feeb4a63161253a9c610d3d97a71dea001->enter($__internal_f2c0ece77a8a2b3a1ba3b6fcddfb18feeb4a63161253a9c610d3d97a71dea001_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f1c63e6793d6f1f0f5bed412fb0213e76dce0815eef6d25e028583ebc38d23be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1c63e6793d6f1f0f5bed412fb0213e76dce0815eef6d25e028583ebc38d23be->enter($__internal_f1c63e6793d6f1f0f5bed412fb0213e76dce0815eef6d25e028583ebc38d23be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "dumpsCount", array())) {
            // line 5
            echo "        ";
            ob_start();
            // line 6
            echo "            ";
            echo twig_include($this->env, $context, "@Debug/Profiler/icon.svg");
            echo "
            <span class=\"sf-toolbar-value\">";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 7, $this->getSourceContext()); })()), "dumpsCount", array()), "html", null, true);
            echo "</span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 9
            echo "
        ";
            // line 10
            ob_start();
            // line 11
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 11, $this->getSourceContext()); })()), "getDumps", array(0 => "html"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["dump"]) {
                // line 12
                echo "                <div class=\"sf-toolbar-info-piece\">
                    <span>
                    ";
                // line 14
                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["dump"], "file", array())) {
                    // line 15
                    echo "                        ";
                    $context["link"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->getFileLink(twig_get_attribute($this->env, $this->getSourceContext(), $context["dump"], "file", array()), twig_get_attribute($this->env, $this->getSourceContext(), $context["dump"], "line", array()));
                    // line 16
                    echo "                        ";
                    if ((isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new Twig_Error_Runtime('Variable "link" does not exist.', 16, $this->getSourceContext()); })())) {
                        // line 17
                        echo "                            <a href=\"";
                        echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new Twig_Error_Runtime('Variable "link" does not exist.', 17, $this->getSourceContext()); })()), "html", null, true);
                        echo "\" title=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["dump"], "file", array()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["dump"], "name", array()), "html", null, true);
                        echo "</a>
                        ";
                    } else {
                        // line 19
                        echo "                            <abbr title=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["dump"], "file", array()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["dump"], "name", array()), "html", null, true);
                        echo "</abbr>
                        ";
                    }
                    // line 21
                    echo "                    ";
                } else {
                    // line 22
                    echo "                        ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["dump"], "name", array()), "html", null, true);
                    echo "
                    ";
                }
                // line 24
                echo "                    </span>
                    <span class=\"sf-toolbar-file-line\">line ";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["dump"], "line", array()), "html", null, true);
                echo "</span>

                    ";
                // line 27
                echo twig_get_attribute($this->env, $this->getSourceContext(), $context["dump"], "data", array());
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dump'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 31
            echo "
        ";
            // line 32
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => true));
            echo "
    ";
        }
        
        $__internal_f1c63e6793d6f1f0f5bed412fb0213e76dce0815eef6d25e028583ebc38d23be->leave($__internal_f1c63e6793d6f1f0f5bed412fb0213e76dce0815eef6d25e028583ebc38d23be_prof);

        
        $__internal_f2c0ece77a8a2b3a1ba3b6fcddfb18feeb4a63161253a9c610d3d97a71dea001->leave($__internal_f2c0ece77a8a2b3a1ba3b6fcddfb18feeb4a63161253a9c610d3d97a71dea001_prof);

    }

    // line 36
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4f32d4b5b4778c1bafafcffe889e5f4a8914265125c7117d968d2f2828e46453 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f32d4b5b4778c1bafafcffe889e5f4a8914265125c7117d968d2f2828e46453->enter($__internal_4f32d4b5b4778c1bafafcffe889e5f4a8914265125c7117d968d2f2828e46453_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_77cda4c777aab99397c1187d1a6011e3ba67f3305415e95c6d3f7d34eee875c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77cda4c777aab99397c1187d1a6011e3ba67f3305415e95c6d3f7d34eee875c3->enter($__internal_77cda4c777aab99397c1187d1a6011e3ba67f3305415e95c6d3f7d34eee875c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 37
        echo "    <span class=\"label ";
        echo (((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 37, $this->getSourceContext()); })()), "dumpsCount", array()) == 0)) ? ("disabled") : (""));
        echo "\">
        <span class=\"icon\">";
        // line 38
        echo twig_include($this->env, $context, "@Debug/Profiler/icon.svg");
        echo "</span>
        <strong>Debug</strong>
    </span>
";
        
        $__internal_77cda4c777aab99397c1187d1a6011e3ba67f3305415e95c6d3f7d34eee875c3->leave($__internal_77cda4c777aab99397c1187d1a6011e3ba67f3305415e95c6d3f7d34eee875c3_prof);

        
        $__internal_4f32d4b5b4778c1bafafcffe889e5f4a8914265125c7117d968d2f2828e46453->leave($__internal_4f32d4b5b4778c1bafafcffe889e5f4a8914265125c7117d968d2f2828e46453_prof);

    }

    // line 43
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6ba4156bcb834aeee6f7d92cb3983e1152fb189230a0df39d2e7c942874b9543 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ba4156bcb834aeee6f7d92cb3983e1152fb189230a0df39d2e7c942874b9543->enter($__internal_6ba4156bcb834aeee6f7d92cb3983e1152fb189230a0df39d2e7c942874b9543_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_281a61cbb35213aeaea8fdf30e33b65eb768e19e33c742ebea1535fc30e1d661 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_281a61cbb35213aeaea8fdf30e33b65eb768e19e33c742ebea1535fc30e1d661->enter($__internal_281a61cbb35213aeaea8fdf30e33b65eb768e19e33c742ebea1535fc30e1d661_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 44
        echo "    <h2>Dumped Contents</h2>

    ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 46, $this->getSourceContext()); })()), "getDumps", array(0 => "html"), "method"));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["dump"]) {
            // line 47
            echo "        <div class=\"sf-dump sf-reset\">
            <span class=\"metadata\">In
                ";
            // line 49
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["dump"], "line", array())) {
                // line 50
                echo "                    ";
                $context["link"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->getFileLink(twig_get_attribute($this->env, $this->getSourceContext(), $context["dump"], "file", array()), twig_get_attribute($this->env, $this->getSourceContext(), $context["dump"], "line", array()));
                // line 51
                echo "                    ";
                if ((isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new Twig_Error_Runtime('Variable "link" does not exist.', 51, $this->getSourceContext()); })())) {
                    // line 52
                    echo "                        <a href=\"";
                    echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new Twig_Error_Runtime('Variable "link" does not exist.', 52, $this->getSourceContext()); })()), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["dump"], "file", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["dump"], "name", array()), "html", null, true);
                    echo "</a>
                    ";
                } else {
                    // line 54
                    echo "                        <abbr title=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["dump"], "file", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["dump"], "name", array()), "html", null, true);
                    echo "</abbr>
                    ";
                }
                // line 56
                echo "                ";
            } else {
                // line 57
                echo "                    ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["dump"], "name", array()), "html", null, true);
                echo "
                ";
            }
            // line 59
            echo "                line <a class=\"text-small sf-toggle\" data-toggle-selector=\"#sf-trace-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index0", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["dump"], "line", array()), "html", null, true);
            echo "</a>:
            </span>

            <div class=\"sf-dump-compact hidden\" id=\"sf-trace-";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index0", array()), "html", null, true);
            echo "\">
                <div class=\"trace\">
                    ";
            // line 64
            echo ((twig_get_attribute($this->env, $this->getSourceContext(), $context["dump"], "fileExcerpt", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), $context["dump"], "fileExcerpt", array())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(twig_get_attribute($this->env, $this->getSourceContext(), $context["dump"], "file", array()), twig_get_attribute($this->env, $this->getSourceContext(), $context["dump"], "line", array()))));
            echo "
                </div>
            </div>

            ";
            // line 68
            echo twig_get_attribute($this->env, $this->getSourceContext(), $context["dump"], "data", array());
            echo "
        </div>
    ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 71
            echo "        <div class=\"empty\">
            <p>No content was dumped.</p>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dump'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_281a61cbb35213aeaea8fdf30e33b65eb768e19e33c742ebea1535fc30e1d661->leave($__internal_281a61cbb35213aeaea8fdf30e33b65eb768e19e33c742ebea1535fc30e1d661_prof);

        
        $__internal_6ba4156bcb834aeee6f7d92cb3983e1152fb189230a0df39d2e7c942874b9543->leave($__internal_6ba4156bcb834aeee6f7d92cb3983e1152fb189230a0df39d2e7c942874b9543_prof);

    }

    public function getTemplateName()
    {
        return "@Debug/Profiler/dump.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  287 => 71,  271 => 68,  264 => 64,  259 => 62,  250 => 59,  244 => 57,  241 => 56,  233 => 54,  223 => 52,  220 => 51,  217 => 50,  215 => 49,  211 => 47,  193 => 46,  189 => 44,  180 => 43,  166 => 38,  161 => 37,  152 => 36,  139 => 32,  136 => 31,  133 => 30,  124 => 27,  119 => 25,  116 => 24,  110 => 22,  107 => 21,  99 => 19,  89 => 17,  86 => 16,  83 => 15,  81 => 14,  77 => 12,  72 => 11,  70 => 10,  67 => 9,  62 => 7,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% if collector.dumpsCount %}
        {% set icon %}
            {{ include('@Debug/Profiler/icon.svg') }}
            <span class=\"sf-toolbar-value\">{{ collector.dumpsCount }}</span>
        {% endset %}

        {% set text %}
            {% for dump in collector.getDumps('html') %}
                <div class=\"sf-toolbar-info-piece\">
                    <span>
                    {% if dump.file %}
                        {% set link = dump.file|file_link(dump.line) %}
                        {% if link %}
                            <a href=\"{{ link }}\" title=\"{{ dump.file }}\">{{ dump.name }}</a>
                        {% else %}
                            <abbr title=\"{{ dump.file }}\">{{ dump.name }}</abbr>
                        {% endif %}
                    {% else %}
                        {{ dump.name }}
                    {% endif %}
                    </span>
                    <span class=\"sf-toolbar-file-line\">line {{ dump.line }}</span>

                    {{ dump.data|raw }}
                </div>
            {% endfor %}
        {% endset %}

        {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { 'link': true }) }}
    {% endif %}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.dumpsCount == 0 ? 'disabled' }}\">
        <span class=\"icon\">{{ include('@Debug/Profiler/icon.svg') }}</span>
        <strong>Debug</strong>
    </span>
{% endblock %}

{% block panel %}
    <h2>Dumped Contents</h2>

    {% for dump in collector.getDumps('html') %}
        <div class=\"sf-dump sf-reset\">
            <span class=\"metadata\">In
                {% if dump.line %}
                    {% set link = dump.file|file_link(dump.line) %}
                    {% if link %}
                        <a href=\"{{ link }}\" title=\"{{ dump.file }}\">{{ dump.name }}</a>
                    {% else %}
                        <abbr title=\"{{ dump.file }}\">{{ dump.name }}</abbr>
                    {% endif %}
                {% else %}
                    {{ dump.name }}
                {% endif %}
                line <a class=\"text-small sf-toggle\" data-toggle-selector=\"#sf-trace-{{ loop.index0 }}\">{{ dump.line }}</a>:
            </span>

            <div class=\"sf-dump-compact hidden\" id=\"sf-trace-{{ loop.index0 }}\">
                <div class=\"trace\">
                    {{ dump.fileExcerpt ? dump.fileExcerpt|raw : dump.file|file_excerpt(dump.line) }}
                </div>
            </div>

            {{ dump.data|raw }}
        </div>
    {% else %}
        <div class=\"empty\">
            <p>No content was dumped.</p>
        </div>
    {% endfor %}
{% endblock %}
", "@Debug/Profiler/dump.html.twig", "/Users/julioromero/Desktop/cursoSymfony/vendor/symfony/symfony/src/Symfony/Bundle/DebugBundle/Resources/views/Profiler/dump.html.twig");
    }
}
