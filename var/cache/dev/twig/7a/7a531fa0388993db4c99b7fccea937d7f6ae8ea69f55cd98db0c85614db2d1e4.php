<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_21eab3932b3f9bdd488ff26a1ad90287a2de5934e0a284f08a723492f552758a extends Twig_Template
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
        $__internal_ce4b58c7c21f8577a4ad9df99b0a642755b5a2cac8c55e99ba7ba3ec67a38195 = $this->env->getExtension("native_profiler");
        $__internal_ce4b58c7c21f8577a4ad9df99b0a642755b5a2cac8c55e99ba7ba3ec67a38195->enter($__internal_ce4b58c7c21f8577a4ad9df99b0a642755b5a2cac8c55e99ba7ba3ec67a38195_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce4b58c7c21f8577a4ad9df99b0a642755b5a2cac8c55e99ba7ba3ec67a38195->leave($__internal_ce4b58c7c21f8577a4ad9df99b0a642755b5a2cac8c55e99ba7ba3ec67a38195_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_668939c8e74606afc64c8010eda0f87fb051c8b2ae211c18372d4e1b29bec665 = $this->env->getExtension("native_profiler");
        $__internal_668939c8e74606afc64c8010eda0f87fb051c8b2ae211c18372d4e1b29bec665->enter($__internal_668939c8e74606afc64c8010eda0f87fb051c8b2ae211c18372d4e1b29bec665_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_668939c8e74606afc64c8010eda0f87fb051c8b2ae211c18372d4e1b29bec665->leave($__internal_668939c8e74606afc64c8010eda0f87fb051c8b2ae211c18372d4e1b29bec665_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8076b872bdaba4d3953873e231dd240835e599e19d74e55f23b3f5177d00462e = $this->env->getExtension("native_profiler");
        $__internal_8076b872bdaba4d3953873e231dd240835e599e19d74e55f23b3f5177d00462e->enter($__internal_8076b872bdaba4d3953873e231dd240835e599e19d74e55f23b3f5177d00462e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_8076b872bdaba4d3953873e231dd240835e599e19d74e55f23b3f5177d00462e->leave($__internal_8076b872bdaba4d3953873e231dd240835e599e19d74e55f23b3f5177d00462e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_93344516320fb0affb2ab815e79715b3828c4bc928448a2056209094de1d3da7 = $this->env->getExtension("native_profiler");
        $__internal_93344516320fb0affb2ab815e79715b3828c4bc928448a2056209094de1d3da7->enter($__internal_93344516320fb0affb2ab815e79715b3828c4bc928448a2056209094de1d3da7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_93344516320fb0affb2ab815e79715b3828c4bc928448a2056209094de1d3da7->leave($__internal_93344516320fb0affb2ab815e79715b3828c4bc928448a2056209094de1d3da7_prof);

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
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
