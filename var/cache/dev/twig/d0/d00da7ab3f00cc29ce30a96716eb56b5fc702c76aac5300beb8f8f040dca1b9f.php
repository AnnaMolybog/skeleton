<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_051eb6d9f5b3991d452cf3207c0cf98d36ec0fe3874a59248fa5efdfd076957e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_c885ba6d611f9f3e934910094940d192e85895c027dab24915a5bd703246cb8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c885ba6d611f9f3e934910094940d192e85895c027dab24915a5bd703246cb8a->enter($__internal_c885ba6d611f9f3e934910094940d192e85895c027dab24915a5bd703246cb8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_5bd74f8056aadd1b24d56aaae34982d4939d000b85b4352c2686c598ef991fa7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bd74f8056aadd1b24d56aaae34982d4939d000b85b4352c2686c598ef991fa7->enter($__internal_5bd74f8056aadd1b24d56aaae34982d4939d000b85b4352c2686c598ef991fa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c885ba6d611f9f3e934910094940d192e85895c027dab24915a5bd703246cb8a->leave($__internal_c885ba6d611f9f3e934910094940d192e85895c027dab24915a5bd703246cb8a_prof);

        
        $__internal_5bd74f8056aadd1b24d56aaae34982d4939d000b85b4352c2686c598ef991fa7->leave($__internal_5bd74f8056aadd1b24d56aaae34982d4939d000b85b4352c2686c598ef991fa7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e2160a332b280d3ede88498a14a26bd10aee54e3cfe3d47a14663b15401420aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2160a332b280d3ede88498a14a26bd10aee54e3cfe3d47a14663b15401420aa->enter($__internal_e2160a332b280d3ede88498a14a26bd10aee54e3cfe3d47a14663b15401420aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c89098c36e5ab691512a0c1134198046a9fb04ff31d25c304fa386823194acce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c89098c36e5ab691512a0c1134198046a9fb04ff31d25c304fa386823194acce->enter($__internal_c89098c36e5ab691512a0c1134198046a9fb04ff31d25c304fa386823194acce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_c89098c36e5ab691512a0c1134198046a9fb04ff31d25c304fa386823194acce->leave($__internal_c89098c36e5ab691512a0c1134198046a9fb04ff31d25c304fa386823194acce_prof);

        
        $__internal_e2160a332b280d3ede88498a14a26bd10aee54e3cfe3d47a14663b15401420aa->leave($__internal_e2160a332b280d3ede88498a14a26bd10aee54e3cfe3d47a14663b15401420aa_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e7ff3e560ec6faffe2f7c1e6896a93d408a5a022c24d3baf274f550a90e3582a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7ff3e560ec6faffe2f7c1e6896a93d408a5a022c24d3baf274f550a90e3582a->enter($__internal_e7ff3e560ec6faffe2f7c1e6896a93d408a5a022c24d3baf274f550a90e3582a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_54987c404507e2d640fe33be21b0bc679fcde01c184d0af0a73b19c60f9d5331 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54987c404507e2d640fe33be21b0bc679fcde01c184d0af0a73b19c60f9d5331->enter($__internal_54987c404507e2d640fe33be21b0bc679fcde01c184d0af0a73b19c60f9d5331_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_54987c404507e2d640fe33be21b0bc679fcde01c184d0af0a73b19c60f9d5331->leave($__internal_54987c404507e2d640fe33be21b0bc679fcde01c184d0af0a73b19c60f9d5331_prof);

        
        $__internal_e7ff3e560ec6faffe2f7c1e6896a93d408a5a022c24d3baf274f550a90e3582a->leave($__internal_e7ff3e560ec6faffe2f7c1e6896a93d408a5a022c24d3baf274f550a90e3582a_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ceb36e4db1de17abc6b7b2d3ca56771cb8821ce7f98ddc0292821315efd2bd9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ceb36e4db1de17abc6b7b2d3ca56771cb8821ce7f98ddc0292821315efd2bd9d->enter($__internal_ceb36e4db1de17abc6b7b2d3ca56771cb8821ce7f98ddc0292821315efd2bd9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e14e6c810d0644a748c178619b4d3fa68ebffd56fd1ee2633ea1a1a81b47ef58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e14e6c810d0644a748c178619b4d3fa68ebffd56fd1ee2633ea1a1a81b47ef58->enter($__internal_e14e6c810d0644a748c178619b4d3fa68ebffd56fd1ee2633ea1a1a81b47ef58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_e14e6c810d0644a748c178619b4d3fa68ebffd56fd1ee2633ea1a1a81b47ef58->leave($__internal_e14e6c810d0644a748c178619b4d3fa68ebffd56fd1ee2633ea1a1a81b47ef58_prof);

        
        $__internal_ceb36e4db1de17abc6b7b2d3ca56771cb8821ce7f98ddc0292821315efd2bd9d->leave($__internal_ceb36e4db1de17abc6b7b2d3ca56771cb8821ce7f98ddc0292821315efd2bd9d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/g.molybog/Drukwerkdeal/html/skeleton/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}