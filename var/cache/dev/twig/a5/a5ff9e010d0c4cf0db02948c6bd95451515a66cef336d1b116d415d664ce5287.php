<?php

/* OCPlatformBundle::layout.html.twig */
class __TwigTemplate_fb13674ab0f21355931c65fb5920eb98635ad27de8524329b2007259eca3f9c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCCoreBundle::layout.html.twig", "OCPlatformBundle::layout.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'ocplatform_body' => array($this, 'block_ocplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_08f019c5f44fcec917ef8409f495309e586fc48a17b16fa91701eb99a3c34f38 = $this->env->getExtension("native_profiler");
        $__internal_08f019c5f44fcec917ef8409f495309e586fc48a17b16fa91701eb99a3c34f38->enter($__internal_08f019c5f44fcec917ef8409f495309e586fc48a17b16fa91701eb99a3c34f38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_08f019c5f44fcec917ef8409f495309e586fc48a17b16fa91701eb99a3c34f38->leave($__internal_08f019c5f44fcec917ef8409f495309e586fc48a17b16fa91701eb99a3c34f38_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_76ae0a474a4aad78cc650ee09fd8e30736c2c069ac2b01bab6e8a7c00a1ab2d4 = $this->env->getExtension("native_profiler");
        $__internal_76ae0a474a4aad78cc650ee09fd8e30736c2c069ac2b01bab6e8a7c00a1ab2d4->enter($__internal_76ae0a474a4aad78cc650ee09fd8e30736c2c069ac2b01bab6e8a7c00a1ab2d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_76ae0a474a4aad78cc650ee09fd8e30736c2c069ac2b01bab6e8a7c00a1ab2d4->leave($__internal_76ae0a474a4aad78cc650ee09fd8e30736c2c069ac2b01bab6e8a7c00a1ab2d4_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_651566478fae8740aecc863d9f1d27fed6f943272474b61ee84f1fbf2f229d6a = $this->env->getExtension("native_profiler");
        $__internal_651566478fae8740aecc863d9f1d27fed6f943272474b61ee84f1fbf2f229d6a->enter($__internal_651566478fae8740aecc863d9f1d27fed6f943272474b61ee84f1fbf2f229d6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
  ";
        // line 12
        echo "  <h1>Annonces</h1>

  <hr>

  ";
        // line 17
        echo "  ";
        $this->displayBlock('ocplatform_body', $context, $blocks);
        // line 19
        echo "
";
        
        $__internal_651566478fae8740aecc863d9f1d27fed6f943272474b61ee84f1fbf2f229d6a->leave($__internal_651566478fae8740aecc863d9f1d27fed6f943272474b61ee84f1fbf2f229d6a_prof);

    }

    // line 17
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_6b9c19af968295b7b395ef44604cded1e7d8041f40b7d9ef52b96fc56d6dfc12 = $this->env->getExtension("native_profiler");
        $__internal_6b9c19af968295b7b395ef44604cded1e7d8041f40b7d9ef52b96fc56d6dfc12->enter($__internal_6b9c19af968295b7b395ef44604cded1e7d8041f40b7d9ef52b96fc56d6dfc12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 18
        echo "  ";
        
        $__internal_6b9c19af968295b7b395ef44604cded1e7d8041f40b7d9ef52b96fc56d6dfc12->leave($__internal_6b9c19af968295b7b395ef44604cded1e7d8041f40b7d9ef52b96fc56d6dfc12_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 18,  78 => 17,  70 => 19,  67 => 17,  61 => 12,  58 => 10,  52 => 9,  42 => 6,  36 => 5,  11 => 3,);
    }
}
/* {# src/OC/PlatformBundle/Resources/views/layout.html.twig #}*/
/* */
/* {% extends "OCCoreBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Annonces - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*   {# On définit un sous-titre commun à toutes les pages du bundle, par exemple #}*/
/*   <h1>Annonces</h1>*/
/* */
/*   <hr>*/
/* */
/*   {# On définit un nouveau bloc, que les vues du bundle pourront remplir #}*/
/*   {% block ocplatform_body %}*/
/*   {% endblock %}*/
/* */
/* {% endblock %}*/
/* */
