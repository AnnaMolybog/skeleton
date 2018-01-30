<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_3f39af80504b421ce0cc1921c84e01ed95268b8700e6acd16d467fdad59cf9e0 extends Twig_Template
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
        $__internal_911db6e2f58b73091a5e1f392cf5922236711beca434f49d444821bfa0273331 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_911db6e2f58b73091a5e1f392cf5922236711beca434f49d444821bfa0273331->enter($__internal_911db6e2f58b73091a5e1f392cf5922236711beca434f49d444821bfa0273331_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_5b4b1d8838625ab600e7921f10dffa7b7f7d0ff646048009f3caeb5f38d6dbc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b4b1d8838625ab600e7921f10dffa7b7f7d0ff646048009f3caeb5f38d6dbc8->enter($__internal_5b4b1d8838625ab600e7921f10dffa7b7f7d0ff646048009f3caeb5f38d6dbc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_911db6e2f58b73091a5e1f392cf5922236711beca434f49d444821bfa0273331->leave($__internal_911db6e2f58b73091a5e1f392cf5922236711beca434f49d444821bfa0273331_prof);

        
        $__internal_5b4b1d8838625ab600e7921f10dffa7b7f7d0ff646048009f3caeb5f38d6dbc8->leave($__internal_5b4b1d8838625ab600e7921f10dffa7b7f7d0ff646048009f3caeb5f38d6dbc8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c36e8dd76b6680d9c16b7cb321d494ed97b36928ff9e8c5e3d0dda3ac18ad845 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c36e8dd76b6680d9c16b7cb321d494ed97b36928ff9e8c5e3d0dda3ac18ad845->enter($__internal_c36e8dd76b6680d9c16b7cb321d494ed97b36928ff9e8c5e3d0dda3ac18ad845_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_0adef24f3d1efabbe0d6f66338a5e83fbe1f7c02e4f042e4707cee33048ce232 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0adef24f3d1efabbe0d6f66338a5e83fbe1f7c02e4f042e4707cee33048ce232->enter($__internal_0adef24f3d1efabbe0d6f66338a5e83fbe1f7c02e4f042e4707cee33048ce232_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0adef24f3d1efabbe0d6f66338a5e83fbe1f7c02e4f042e4707cee33048ce232->leave($__internal_0adef24f3d1efabbe0d6f66338a5e83fbe1f7c02e4f042e4707cee33048ce232_prof);

        
        $__internal_c36e8dd76b6680d9c16b7cb321d494ed97b36928ff9e8c5e3d0dda3ac18ad845->leave($__internal_c36e8dd76b6680d9c16b7cb321d494ed97b36928ff9e8c5e3d0dda3ac18ad845_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3811478ce1269847aefaceb597866dc711af25af71148b909983e32fa972213f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3811478ce1269847aefaceb597866dc711af25af71148b909983e32fa972213f->enter($__internal_3811478ce1269847aefaceb597866dc711af25af71148b909983e32fa972213f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d110c395cb15e71f1c629459255eb97ea9bf9f8f0fa849ed51a0db6f39250eca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d110c395cb15e71f1c629459255eb97ea9bf9f8f0fa849ed51a0db6f39250eca->enter($__internal_d110c395cb15e71f1c629459255eb97ea9bf9f8f0fa849ed51a0db6f39250eca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d110c395cb15e71f1c629459255eb97ea9bf9f8f0fa849ed51a0db6f39250eca->leave($__internal_d110c395cb15e71f1c629459255eb97ea9bf9f8f0fa849ed51a0db6f39250eca_prof);

        
        $__internal_3811478ce1269847aefaceb597866dc711af25af71148b909983e32fa972213f->leave($__internal_3811478ce1269847aefaceb597866dc711af25af71148b909983e32fa972213f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4ce801ca1c42e578c913063ae58d8961838874d6f7c5b51677bdaeda62f166c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ce801ca1c42e578c913063ae58d8961838874d6f7c5b51677bdaeda62f166c5->enter($__internal_4ce801ca1c42e578c913063ae58d8961838874d6f7c5b51677bdaeda62f166c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_bdc4816d4f4b7c10ac7d68a418cb2d9ba030f9d8723cbe6250fb5c952d083ae2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdc4816d4f4b7c10ac7d68a418cb2d9ba030f9d8723cbe6250fb5c952d083ae2->enter($__internal_bdc4816d4f4b7c10ac7d68a418cb2d9ba030f9d8723cbe6250fb5c952d083ae2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_bdc4816d4f4b7c10ac7d68a418cb2d9ba030f9d8723cbe6250fb5c952d083ae2->leave($__internal_bdc4816d4f4b7c10ac7d68a418cb2d9ba030f9d8723cbe6250fb5c952d083ae2_prof);

        
        $__internal_4ce801ca1c42e578c913063ae58d8961838874d6f7c5b51677bdaeda62f166c5->leave($__internal_4ce801ca1c42e578c913063ae58d8961838874d6f7c5b51677bdaeda62f166c5_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/home/g.molybog/Drukwerkdeal/html/skeleton/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
