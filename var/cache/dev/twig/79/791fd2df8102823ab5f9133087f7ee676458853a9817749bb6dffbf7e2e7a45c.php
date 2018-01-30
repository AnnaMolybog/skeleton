<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_ef74b84bf87bf0f907cc2698710e9693babd3dfc1e9b4728c2ea6dc4d3e404ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_204e426ac6b6a4b42196692bd42d8992d743b5acfe115e4ee4ea92c05eb830b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_204e426ac6b6a4b42196692bd42d8992d743b5acfe115e4ee4ea92c05eb830b0->enter($__internal_204e426ac6b6a4b42196692bd42d8992d743b5acfe115e4ee4ea92c05eb830b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_27d7c61c79c4ab86758dad8a2928727f3bc4e74e44a6d10fc520d14bdbd32349 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27d7c61c79c4ab86758dad8a2928727f3bc4e74e44a6d10fc520d14bdbd32349->enter($__internal_27d7c61c79c4ab86758dad8a2928727f3bc4e74e44a6d10fc520d14bdbd32349_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_204e426ac6b6a4b42196692bd42d8992d743b5acfe115e4ee4ea92c05eb830b0->leave($__internal_204e426ac6b6a4b42196692bd42d8992d743b5acfe115e4ee4ea92c05eb830b0_prof);

        
        $__internal_27d7c61c79c4ab86758dad8a2928727f3bc4e74e44a6d10fc520d14bdbd32349->leave($__internal_27d7c61c79c4ab86758dad8a2928727f3bc4e74e44a6d10fc520d14bdbd32349_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d1e8206eb9ba7edf6ff7ff75b7955c6d981da40787e993e3e2963008e43cee88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1e8206eb9ba7edf6ff7ff75b7955c6d981da40787e993e3e2963008e43cee88->enter($__internal_d1e8206eb9ba7edf6ff7ff75b7955c6d981da40787e993e3e2963008e43cee88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_654127d01c8adcdb561166d5509a66e9fd166b21c562b28d16f7899606e4019b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_654127d01c8adcdb561166d5509a66e9fd166b21c562b28d16f7899606e4019b->enter($__internal_654127d01c8adcdb561166d5509a66e9fd166b21c562b28d16f7899606e4019b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_654127d01c8adcdb561166d5509a66e9fd166b21c562b28d16f7899606e4019b->leave($__internal_654127d01c8adcdb561166d5509a66e9fd166b21c562b28d16f7899606e4019b_prof);

        
        $__internal_d1e8206eb9ba7edf6ff7ff75b7955c6d981da40787e993e3e2963008e43cee88->leave($__internal_d1e8206eb9ba7edf6ff7ff75b7955c6d981da40787e993e3e2963008e43cee88_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/home/g.molybog/Drukwerkdeal/html/skeleton/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
