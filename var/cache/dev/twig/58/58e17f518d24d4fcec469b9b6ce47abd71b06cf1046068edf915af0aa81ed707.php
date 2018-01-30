<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_0f80ca228c2b07cc4f91f0b43fbffefbae06d2ff5e26044e53a05bf0288de3d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6f89befee08b7845501018167f0366a1f8a4ba37351ebf02e552800e670b5718 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f89befee08b7845501018167f0366a1f8a4ba37351ebf02e552800e670b5718->enter($__internal_6f89befee08b7845501018167f0366a1f8a4ba37351ebf02e552800e670b5718_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_741aefe1b6b0cb82803a17be54bf302f875b3f97d4b231abbc6554cbe1ac8e67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_741aefe1b6b0cb82803a17be54bf302f875b3f97d4b231abbc6554cbe1ac8e67->enter($__internal_741aefe1b6b0cb82803a17be54bf302f875b3f97d4b231abbc6554cbe1ac8e67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f89befee08b7845501018167f0366a1f8a4ba37351ebf02e552800e670b5718->leave($__internal_6f89befee08b7845501018167f0366a1f8a4ba37351ebf02e552800e670b5718_prof);

        
        $__internal_741aefe1b6b0cb82803a17be54bf302f875b3f97d4b231abbc6554cbe1ac8e67->leave($__internal_741aefe1b6b0cb82803a17be54bf302f875b3f97d4b231abbc6554cbe1ac8e67_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_da0735e29aa279f1a9e881f4fa816254db6493d63e74cd03ad9cf2e8fb5c9acf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da0735e29aa279f1a9e881f4fa816254db6493d63e74cd03ad9cf2e8fb5c9acf->enter($__internal_da0735e29aa279f1a9e881f4fa816254db6493d63e74cd03ad9cf2e8fb5c9acf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_65cb9c812f3437229dad0448f7aa6c40f23c9ddbc19e1169a3f9304c025d23bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65cb9c812f3437229dad0448f7aa6c40f23c9ddbc19e1169a3f9304c025d23bf->enter($__internal_65cb9c812f3437229dad0448f7aa6c40f23c9ddbc19e1169a3f9304c025d23bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_65cb9c812f3437229dad0448f7aa6c40f23c9ddbc19e1169a3f9304c025d23bf->leave($__internal_65cb9c812f3437229dad0448f7aa6c40f23c9ddbc19e1169a3f9304c025d23bf_prof);

        
        $__internal_da0735e29aa279f1a9e881f4fa816254db6493d63e74cd03ad9cf2e8fb5c9acf->leave($__internal_da0735e29aa279f1a9e881f4fa816254db6493d63e74cd03ad9cf2e8fb5c9acf_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_4ad0ea19d1d86f77c264236c389ff7f3144f4c6b4117a20202679bb6372c4a9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ad0ea19d1d86f77c264236c389ff7f3144f4c6b4117a20202679bb6372c4a9c->enter($__internal_4ad0ea19d1d86f77c264236c389ff7f3144f4c6b4117a20202679bb6372c4a9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ccc9d7f415666a173e75988ae2e1066e9f98fe73783136462654507ec7b35ed2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccc9d7f415666a173e75988ae2e1066e9f98fe73783136462654507ec7b35ed2->enter($__internal_ccc9d7f415666a173e75988ae2e1066e9f98fe73783136462654507ec7b35ed2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_ccc9d7f415666a173e75988ae2e1066e9f98fe73783136462654507ec7b35ed2->leave($__internal_ccc9d7f415666a173e75988ae2e1066e9f98fe73783136462654507ec7b35ed2_prof);

        
        $__internal_4ad0ea19d1d86f77c264236c389ff7f3144f4c6b4117a20202679bb6372c4a9c->leave($__internal_4ad0ea19d1d86f77c264236c389ff7f3144f4c6b4117a20202679bb6372c4a9c_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_7371a4fd4777f57f604e09614b90fc0c3725efb57b862fa0acffeaeb98e163c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7371a4fd4777f57f604e09614b90fc0c3725efb57b862fa0acffeaeb98e163c0->enter($__internal_7371a4fd4777f57f604e09614b90fc0c3725efb57b862fa0acffeaeb98e163c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_78ceddea11734e7e833d96eb6e05082c60cc37c136b77d44a996099f8c2a5904 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78ceddea11734e7e833d96eb6e05082c60cc37c136b77d44a996099f8c2a5904->enter($__internal_78ceddea11734e7e833d96eb6e05082c60cc37c136b77d44a996099f8c2a5904_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_78ceddea11734e7e833d96eb6e05082c60cc37c136b77d44a996099f8c2a5904->leave($__internal_78ceddea11734e7e833d96eb6e05082c60cc37c136b77d44a996099f8c2a5904_prof);

        
        $__internal_7371a4fd4777f57f604e09614b90fc0c3725efb57b862fa0acffeaeb98e163c0->leave($__internal_7371a4fd4777f57f604e09614b90fc0c3725efb57b862fa0acffeaeb98e163c0_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/g.molybog/Drukwerkdeal/html/skeleton/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
