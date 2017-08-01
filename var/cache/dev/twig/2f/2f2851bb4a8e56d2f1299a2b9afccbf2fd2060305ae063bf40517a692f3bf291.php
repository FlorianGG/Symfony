<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_1fc0ed951a85dda0f3ce223cfa43f90496a733e7df0bc378554a3575df5ecba8 extends Twig_Template
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
        $__internal_5720aa439b9c0d14d6c417a92678d48a198aa9543f3f084522fdaa7c0a314b53 = $this->env->getExtension("native_profiler");
        $__internal_5720aa439b9c0d14d6c417a92678d48a198aa9543f3f084522fdaa7c0a314b53->enter($__internal_5720aa439b9c0d14d6c417a92678d48a198aa9543f3f084522fdaa7c0a314b53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5720aa439b9c0d14d6c417a92678d48a198aa9543f3f084522fdaa7c0a314b53->leave($__internal_5720aa439b9c0d14d6c417a92678d48a198aa9543f3f084522fdaa7c0a314b53_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5c24a4e20ad8779e82d946b24f1c974e200d1928681817108e8530ec325f25e3 = $this->env->getExtension("native_profiler");
        $__internal_5c24a4e20ad8779e82d946b24f1c974e200d1928681817108e8530ec325f25e3->enter($__internal_5c24a4e20ad8779e82d946b24f1c974e200d1928681817108e8530ec325f25e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_5c24a4e20ad8779e82d946b24f1c974e200d1928681817108e8530ec325f25e3->leave($__internal_5c24a4e20ad8779e82d946b24f1c974e200d1928681817108e8530ec325f25e3_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e7cb1f5e78e9fac2380641fb1f5cf431b484ee75edd0e0e3aeca3bc3a378f860 = $this->env->getExtension("native_profiler");
        $__internal_e7cb1f5e78e9fac2380641fb1f5cf431b484ee75edd0e0e3aeca3bc3a378f860->enter($__internal_e7cb1f5e78e9fac2380641fb1f5cf431b484ee75edd0e0e3aeca3bc3a378f860_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e7cb1f5e78e9fac2380641fb1f5cf431b484ee75edd0e0e3aeca3bc3a378f860->leave($__internal_e7cb1f5e78e9fac2380641fb1f5cf431b484ee75edd0e0e3aeca3bc3a378f860_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_15e0c374b8e39549b33932046cfaa392df6a26c84f319491820b3dbdca36941f = $this->env->getExtension("native_profiler");
        $__internal_15e0c374b8e39549b33932046cfaa392df6a26c84f319491820b3dbdca36941f->enter($__internal_15e0c374b8e39549b33932046cfaa392df6a26c84f319491820b3dbdca36941f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_15e0c374b8e39549b33932046cfaa392df6a26c84f319491820b3dbdca36941f->leave($__internal_15e0c374b8e39549b33932046cfaa392df6a26c84f319491820b3dbdca36941f_prof);

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
