<?php

/* @App/HomePage/index.html.twig */
class __TwigTemplate_3e12ceccbc6b096e3a1eb8c16a6f6942f903bc66d87404e30d8d73395005b7c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("@App/Base/base.html.twig", "@App/HomePage/index.html.twig", 2);
        $this->blocks = array(
            'page_header' => array($this, 'block_page_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@App/Base/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a624fa2781e16d86338dac962baf0872cfe468eb4fffe9bd673e21b5f02b1799 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a624fa2781e16d86338dac962baf0872cfe468eb4fffe9bd673e21b5f02b1799->enter($__internal_a624fa2781e16d86338dac962baf0872cfe468eb4fffe9bd673e21b5f02b1799_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/HomePage/index.html.twig"));

        $__internal_5b9f610decc5e3e25fb4d13b9ec7ccca6edba41560bd4985d860c65b887028cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b9f610decc5e3e25fb4d13b9ec7ccca6edba41560bd4985d860c65b887028cb->enter($__internal_5b9f610decc5e3e25fb4d13b9ec7ccca6edba41560bd4985d860c65b887028cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/HomePage/index.html.twig"));

        // line 1
        $context["active_page"] = "dwd_admin_homepage";
        // line 2
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a624fa2781e16d86338dac962baf0872cfe468eb4fffe9bd673e21b5f02b1799->leave($__internal_a624fa2781e16d86338dac962baf0872cfe468eb4fffe9bd673e21b5f02b1799_prof);

        
        $__internal_5b9f610decc5e3e25fb4d13b9ec7ccca6edba41560bd4985d860c65b887028cb->leave($__internal_5b9f610decc5e3e25fb4d13b9ec7ccca6edba41560bd4985d860c65b887028cb_prof);

    }

    // line 3
    public function block_page_header($context, array $blocks = array())
    {
        $__internal_c24c4ec0409544301f1f0730f1266738ee4b44b77091e06626734e7074c3378c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c24c4ec0409544301f1f0730f1266738ee4b44b77091e06626734e7074c3378c->enter($__internal_c24c4ec0409544301f1f0730f1266738ee4b44b77091e06626734e7074c3378c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_header"));

        $__internal_57af8b9de7838d0fb23f2d296ba4d016cda4d8df844a524963e929610ea59b5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57af8b9de7838d0fb23f2d296ba4d016cda4d8df844a524963e929610ea59b5e->enter($__internal_57af8b9de7838d0fb23f2d296ba4d016cda4d8df844a524963e929610ea59b5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_header"));

        echo twig_escape_filter($this->env, (isset($context["service_name"]) || array_key_exists("service_name", $context) ? $context["service_name"] : (function () { throw new Twig_Error_Runtime('Variable "service_name" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        
        $__internal_57af8b9de7838d0fb23f2d296ba4d016cda4d8df844a524963e929610ea59b5e->leave($__internal_57af8b9de7838d0fb23f2d296ba4d016cda4d8df844a524963e929610ea59b5e_prof);

        
        $__internal_c24c4ec0409544301f1f0730f1266738ee4b44b77091e06626734e7074c3378c->leave($__internal_c24c4ec0409544301f1f0730f1266738ee4b44b77091e06626734e7074c3378c_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_761aa7797af57c7f39ca3794e99e4883e2a8eb2c3eb71954f1cf3cdf0b2377c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_761aa7797af57c7f39ca3794e99e4883e2a8eb2c3eb71954f1cf3cdf0b2377c4->enter($__internal_761aa7797af57c7f39ca3794e99e4883e2a8eb2c3eb71954f1cf3cdf0b2377c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_7b3f84d7b47a96082e971cf2752b839815539ae271901aca5787933a6c89abe7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b3f84d7b47a96082e971cf2752b839815539ae271901aca5787933a6c89abe7->enter($__internal_7b3f84d7b47a96082e971cf2752b839815539ae271901aca5787933a6c89abe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "    <h1 class=\"page-title\">
        Hello
    </h1>
";
        
        $__internal_7b3f84d7b47a96082e971cf2752b839815539ae271901aca5787933a6c89abe7->leave($__internal_7b3f84d7b47a96082e971cf2752b839815539ae271901aca5787933a6c89abe7_prof);

        
        $__internal_761aa7797af57c7f39ca3794e99e4883e2a8eb2c3eb71954f1cf3cdf0b2377c4->leave($__internal_761aa7797af57c7f39ca3794e99e4883e2a8eb2c3eb71954f1cf3cdf0b2377c4_prof);

    }

    public function getTemplateName()
    {
        return "@App/HomePage/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 5,  62 => 4,  44 => 3,  34 => 2,  32 => 1,  11 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set active_page = 'dwd_admin_homepage' %}
{% extends '@App/Base/base.html.twig' %}
{% block page_header %}{{ service_name }}{% endblock %}
{% block content %}
    <h1 class=\"page-title\">
        Hello
    </h1>
{% endblock content %}
", "@App/HomePage/index.html.twig", "/home/g.molybog/Drukwerkdeal/html/skeleton/src/AppBundle/Resources/views/HomePage/index.html.twig");
    }
}
