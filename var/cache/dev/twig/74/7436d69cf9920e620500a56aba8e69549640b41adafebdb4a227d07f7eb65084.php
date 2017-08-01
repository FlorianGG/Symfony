<?php

/* OCPlatformBundle::layout.html.twig */
class __TwigTemplate_85f9df16b080784ec93be5af55813f222d0ba3b98ba44d899df5e745fba70803 extends Twig_Template
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
        $__internal_1d1eea768b1d614e679fedeff54b823d03588488f925bd72dc48a6b2e0436617 = $this->env->getExtension("native_profiler");
        $__internal_1d1eea768b1d614e679fedeff54b823d03588488f925bd72dc48a6b2e0436617->enter($__internal_1d1eea768b1d614e679fedeff54b823d03588488f925bd72dc48a6b2e0436617_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d1eea768b1d614e679fedeff54b823d03588488f925bd72dc48a6b2e0436617->leave($__internal_1d1eea768b1d614e679fedeff54b823d03588488f925bd72dc48a6b2e0436617_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d4fe4646063231784a1a066aaf9bf7ef2b88fcf5d6340eb12b27fef990cfeb3e = $this->env->getExtension("native_profiler");
        $__internal_d4fe4646063231784a1a066aaf9bf7ef2b88fcf5d6340eb12b27fef990cfeb3e->enter($__internal_d4fe4646063231784a1a066aaf9bf7ef2b88fcf5d6340eb12b27fef990cfeb3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_d4fe4646063231784a1a066aaf9bf7ef2b88fcf5d6340eb12b27fef990cfeb3e->leave($__internal_d4fe4646063231784a1a066aaf9bf7ef2b88fcf5d6340eb12b27fef990cfeb3e_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_02f14731aeafbd92a0218fd674f882111b6091a786cdf99189cf127ff1b0d268 = $this->env->getExtension("native_profiler");
        $__internal_02f14731aeafbd92a0218fd674f882111b6091a786cdf99189cf127ff1b0d268->enter($__internal_02f14731aeafbd92a0218fd674f882111b6091a786cdf99189cf127ff1b0d268_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_02f14731aeafbd92a0218fd674f882111b6091a786cdf99189cf127ff1b0d268->leave($__internal_02f14731aeafbd92a0218fd674f882111b6091a786cdf99189cf127ff1b0d268_prof);

    }

    // line 17
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_1bdd62077002821c0c58f7ad5589d419b890905d812bff3ecb676b294dc53f93 = $this->env->getExtension("native_profiler");
        $__internal_1bdd62077002821c0c58f7ad5589d419b890905d812bff3ecb676b294dc53f93->enter($__internal_1bdd62077002821c0c58f7ad5589d419b890905d812bff3ecb676b294dc53f93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 18
        echo "  ";
        
        $__internal_1bdd62077002821c0c58f7ad5589d419b890905d812bff3ecb676b294dc53f93->leave($__internal_1bdd62077002821c0c58f7ad5589d419b890905d812bff3ecb676b294dc53f93_prof);

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
