<?php

/* OCPlatformBundle:Advert:add.html.twig */
class __TwigTemplate_d3bc67c53204edb61bd7ac10496716e37f587f595d95c31473bc81299514d8a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "OCPlatformBundle:Advert:add.html.twig", 3);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCPlatformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_89bf97a41aef00f0358d361a0a78a6b3032022ff6445ffbd24deb30e9eb6ba08 = $this->env->getExtension("native_profiler");
        $__internal_89bf97a41aef00f0358d361a0a78a6b3032022ff6445ffbd24deb30e9eb6ba08->enter($__internal_89bf97a41aef00f0358d361a0a78a6b3032022ff6445ffbd24deb30e9eb6ba08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_89bf97a41aef00f0358d361a0a78a6b3032022ff6445ffbd24deb30e9eb6ba08->leave($__internal_89bf97a41aef00f0358d361a0a78a6b3032022ff6445ffbd24deb30e9eb6ba08_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_0a27b2dc23b0a0af6911242e5b6e8db28b3154212556a4eb250e6d3a80e1f54e = $this->env->getExtension("native_profiler");
        $__internal_0a27b2dc23b0a0af6911242e5b6e8db28b3154212556a4eb250e6d3a80e1f54e->enter($__internal_0a27b2dc23b0a0af6911242e5b6e8db28b3154212556a4eb250e6d3a80e1f54e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
  <h2>Ajouter une annonce</h2>

  ";
        // line 9
        echo twig_include($this->env, $context, "OCPlatformBundle:Advert:form.html.twig");
        echo "

  <p>
    Attention : cette annonce sera ajoutée directement
    sur la page d'accueil après validation du formulaire.
  </p>

";
        
        $__internal_0a27b2dc23b0a0af6911242e5b6e8db28b3154212556a4eb250e6d3a80e1f54e->leave($__internal_0a27b2dc23b0a0af6911242e5b6e8db28b3154212556a4eb250e6d3a80e1f54e_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 9,  40 => 6,  34 => 5,  11 => 3,);
    }
}
/* {# src/OC/PlatformBundle/Resources/views/Advert/add.html.twig #}*/
/* */
/* {% extends "OCPlatformBundle::layout.html.twig" %}*/
/* */
/* {% block body %}*/
/* */
/*   <h2>Ajouter une annonce</h2>*/
/* */
/*   {{ include("OCPlatformBundle:Advert:form.html.twig") }}*/
/* */
/*   <p>*/
/*     Attention : cette annonce sera ajoutée directement*/
/*     sur la page d'accueil après validation du formulaire.*/
/*   </p>*/
/* */
/* {% endblock %}*/
/* */
