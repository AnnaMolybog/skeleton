<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_408c2f145e4e7c0e8c06fc80be9e8b4b8229a44396f9eeca1f0796fa9e94cd47 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3aa118d896eb8a8ae17669a29866f546eac21adc9a4bc2b6981b0d2787026d3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3aa118d896eb8a8ae17669a29866f546eac21adc9a4bc2b6981b0d2787026d3f->enter($__internal_3aa118d896eb8a8ae17669a29866f546eac21adc9a4bc2b6981b0d2787026d3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_77a3115c23adb1f728ba476e9fc7787285d01136d1520b87be6cd4d667049af4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77a3115c23adb1f728ba476e9fc7787285d01136d1520b87be6cd4d667049af4->enter($__internal_77a3115c23adb1f728ba476e9fc7787285d01136d1520b87be6cd4d667049af4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_3aa118d896eb8a8ae17669a29866f546eac21adc9a4bc2b6981b0d2787026d3f->leave($__internal_3aa118d896eb8a8ae17669a29866f546eac21adc9a4bc2b6981b0d2787026d3f_prof);

        
        $__internal_77a3115c23adb1f728ba476e9fc7787285d01136d1520b87be6cd4d667049af4->leave($__internal_77a3115c23adb1f728ba476e9fc7787285d01136d1520b87be6cd4d667049af4_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3d841523a97390636bb897a7eb120d94ca9a9be5ade762c7f5985f3950d6b299 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d841523a97390636bb897a7eb120d94ca9a9be5ade762c7f5985f3950d6b299->enter($__internal_3d841523a97390636bb897a7eb120d94ca9a9be5ade762c7f5985f3950d6b299_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c42917ea525634a52177964988df28d7580dfa492db62c889121011d9b2c3481 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c42917ea525634a52177964988df28d7580dfa492db62c889121011d9b2c3481->enter($__internal_c42917ea525634a52177964988df28d7580dfa492db62c889121011d9b2c3481_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_c42917ea525634a52177964988df28d7580dfa492db62c889121011d9b2c3481->leave($__internal_c42917ea525634a52177964988df28d7580dfa492db62c889121011d9b2c3481_prof);

        
        $__internal_3d841523a97390636bb897a7eb120d94ca9a9be5ade762c7f5985f3950d6b299->leave($__internal_3d841523a97390636bb897a7eb120d94ca9a9be5ade762c7f5985f3950d6b299_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_ab5684915a3d44f0d0bfb60086cfd1a6bb9af77df4be051883f9cf96d61635b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab5684915a3d44f0d0bfb60086cfd1a6bb9af77df4be051883f9cf96d61635b7->enter($__internal_ab5684915a3d44f0d0bfb60086cfd1a6bb9af77df4be051883f9cf96d61635b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d4554bd37e94c75728ee0ac6c1a9afd14259c8d22e4e4e1929030fc748e66b11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4554bd37e94c75728ee0ac6c1a9afd14259c8d22e4e4e1929030fc748e66b11->enter($__internal_d4554bd37e94c75728ee0ac6c1a9afd14259c8d22e4e4e1929030fc748e66b11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_d4554bd37e94c75728ee0ac6c1a9afd14259c8d22e4e4e1929030fc748e66b11->leave($__internal_d4554bd37e94c75728ee0ac6c1a9afd14259c8d22e4e4e1929030fc748e66b11_prof);

        
        $__internal_ab5684915a3d44f0d0bfb60086cfd1a6bb9af77df4be051883f9cf96d61635b7->leave($__internal_ab5684915a3d44f0d0bfb60086cfd1a6bb9af77df4be051883f9cf96d61635b7_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_84f72149ee2df9d4a66b1415f34757df14a6ce460e33be55ee2209803c7bc689 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84f72149ee2df9d4a66b1415f34757df14a6ce460e33be55ee2209803c7bc689->enter($__internal_84f72149ee2df9d4a66b1415f34757df14a6ce460e33be55ee2209803c7bc689_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b0dc8cc0e40e8d9d2f20be1f322cc38fe95ec35cd06ca8d1b30940ee1c32721b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0dc8cc0e40e8d9d2f20be1f322cc38fe95ec35cd06ca8d1b30940ee1c32721b->enter($__internal_b0dc8cc0e40e8d9d2f20be1f322cc38fe95ec35cd06ca8d1b30940ee1c32721b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b0dc8cc0e40e8d9d2f20be1f322cc38fe95ec35cd06ca8d1b30940ee1c32721b->leave($__internal_b0dc8cc0e40e8d9d2f20be1f322cc38fe95ec35cd06ca8d1b30940ee1c32721b_prof);

        
        $__internal_84f72149ee2df9d4a66b1415f34757df14a6ce460e33be55ee2209803c7bc689->leave($__internal_84f72149ee2df9d4a66b1415f34757df14a6ce460e33be55ee2209803c7bc689_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/home/g.molybog/Drukwerkdeal/html/skeleton/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
