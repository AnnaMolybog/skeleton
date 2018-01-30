<?php

/* @App/Base/base.html.twig */
class __TwigTemplate_5bc109756ea21ed65c0a8d1ab3fa816a55982c8f8a9b5589f429c804ba335efc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'page_header' => array($this, 'block_page_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e66a0854f71672359b81c3d1361a5a8707495266271841945f576ba3ad7b0857 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e66a0854f71672359b81c3d1361a5a8707495266271841945f576ba3ad7b0857->enter($__internal_e66a0854f71672359b81c3d1361a5a8707495266271841945f576ba3ad7b0857_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Base/base.html.twig"));

        $__internal_128445f4a93607ce4396116566e491f32396c75dfa1fd001411a07e515938a8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_128445f4a93607ce4396116566e491f32396c75dfa1fd001411a07e515938a8e->enter($__internal_128445f4a93607ce4396116566e491f32396c75dfa1fd001411a07e515938a8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Base/base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<!--[if IE 8]>
<html lang=\"en\" class=\"ie8\"> <![endif]-->
<!--[if IE 9]>
<html lang=\"en\" class=\"ie9\"> <![endif]-->
<!--[if !IE]><!-->
<html lang=\"en\"> <!--<![endif]-->
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"\">

    <title>";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["enviroment"]) || array_key_exists("enviroment", $context) ? $context["enviroment"] : (function () { throw new Twig_Error_Runtime('Variable "enviroment" does not exist.', 13, $this->getSourceContext()); })()), "html", null, true);
        echo " | ";
        echo twig_escape_filter($this->env, (isset($context["service_name"]) || array_key_exists("service_name", $context) ? $context["service_name"] : (function () { throw new Twig_Error_Runtime('Variable "service_name" does not exist.', 13, $this->getSourceContext()); })()), "html", null, true);
        echo " | ";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

</head>


";
        // line 18
        $this->displayBlock('page_header', $context, $blocks);
        // line 20
        echo "
<body>
";
        // line 22
        $this->displayBlock('content', $context, $blocks);
        // line 25
        echo "</body>
</html>";
        
        $__internal_e66a0854f71672359b81c3d1361a5a8707495266271841945f576ba3ad7b0857->leave($__internal_e66a0854f71672359b81c3d1361a5a8707495266271841945f576ba3ad7b0857_prof);

        
        $__internal_128445f4a93607ce4396116566e491f32396c75dfa1fd001411a07e515938a8e->leave($__internal_128445f4a93607ce4396116566e491f32396c75dfa1fd001411a07e515938a8e_prof);

    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        $__internal_f243e262ef7ee3f70811ea63db46dabe001ab5e608003f1a6e80daa50898464b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f243e262ef7ee3f70811ea63db46dabe001ab5e608003f1a6e80daa50898464b->enter($__internal_f243e262ef7ee3f70811ea63db46dabe001ab5e608003f1a6e80daa50898464b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8af98962d13341369c070e2f40c0076e6dedd91468e1ccaed5ff04367a970b79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8af98962d13341369c070e2f40c0076e6dedd91468e1ccaed5ff04367a970b79->enter($__internal_8af98962d13341369c070e2f40c0076e6dedd91468e1ccaed5ff04367a970b79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome";
        
        $__internal_8af98962d13341369c070e2f40c0076e6dedd91468e1ccaed5ff04367a970b79->leave($__internal_8af98962d13341369c070e2f40c0076e6dedd91468e1ccaed5ff04367a970b79_prof);

        
        $__internal_f243e262ef7ee3f70811ea63db46dabe001ab5e608003f1a6e80daa50898464b->leave($__internal_f243e262ef7ee3f70811ea63db46dabe001ab5e608003f1a6e80daa50898464b_prof);

    }

    // line 18
    public function block_page_header($context, array $blocks = array())
    {
        $__internal_e1a5d0051c9cd7a91e39b2e26bf0004b7bda947fa661629ba4c7341d67324fbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1a5d0051c9cd7a91e39b2e26bf0004b7bda947fa661629ba4c7341d67324fbb->enter($__internal_e1a5d0051c9cd7a91e39b2e26bf0004b7bda947fa661629ba4c7341d67324fbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_header"));

        $__internal_965030e67a497affeeaa09ad7ed2e4e54b39c9bb99c182bb78773da0e8d0ecb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_965030e67a497affeeaa09ad7ed2e4e54b39c9bb99c182bb78773da0e8d0ecb4->enter($__internal_965030e67a497affeeaa09ad7ed2e4e54b39c9bb99c182bb78773da0e8d0ecb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_header"));

        
        $__internal_965030e67a497affeeaa09ad7ed2e4e54b39c9bb99c182bb78773da0e8d0ecb4->leave($__internal_965030e67a497affeeaa09ad7ed2e4e54b39c9bb99c182bb78773da0e8d0ecb4_prof);

        
        $__internal_e1a5d0051c9cd7a91e39b2e26bf0004b7bda947fa661629ba4c7341d67324fbb->leave($__internal_e1a5d0051c9cd7a91e39b2e26bf0004b7bda947fa661629ba4c7341d67324fbb_prof);

    }

    // line 22
    public function block_content($context, array $blocks = array())
    {
        $__internal_2455062d30569059f91761351b7d84ace0adce27b53cddd51e22777eb070f7da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2455062d30569059f91761351b7d84ace0adce27b53cddd51e22777eb070f7da->enter($__internal_2455062d30569059f91761351b7d84ace0adce27b53cddd51e22777eb070f7da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_4d0f2dc8467dafa06ad67484618456ce17d7d597167cd90fdde50d9a20a56400 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d0f2dc8467dafa06ad67484618456ce17d7d597167cd90fdde50d9a20a56400->enter($__internal_4d0f2dc8467dafa06ad67484618456ce17d7d597167cd90fdde50d9a20a56400_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 23
        echo "
";
        
        $__internal_4d0f2dc8467dafa06ad67484618456ce17d7d597167cd90fdde50d9a20a56400->leave($__internal_4d0f2dc8467dafa06ad67484618456ce17d7d597167cd90fdde50d9a20a56400_prof);

        
        $__internal_2455062d30569059f91761351b7d84ace0adce27b53cddd51e22777eb070f7da->leave($__internal_2455062d30569059f91761351b7d84ace0adce27b53cddd51e22777eb070f7da_prof);

    }

    public function getTemplateName()
    {
        return "@App/Base/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 23,  108 => 22,  91 => 18,  73 => 13,  62 => 25,  60 => 22,  56 => 20,  54 => 18,  42 => 13,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<!--[if IE 8]>
<html lang=\"en\" class=\"ie8\"> <![endif]-->
<!--[if IE 9]>
<html lang=\"en\" class=\"ie9\"> <![endif]-->
<!--[if !IE]><!-->
<html lang=\"en\"> <!--<![endif]-->
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"\">

    <title>{{ enviroment }} | {{ service_name }} | {% block title %}Welcome{% endblock title %}</title>

</head>


{% block page_header %}
{% endblock page_header %}

<body>
{% block content %}

{% endblock content %}
</body>
</html>", "@App/Base/base.html.twig", "/home/g.molybog/Drukwerkdeal/html/skeleton/src/AppBundle/Resources/views/Base/base.html.twig");
    }
}
