<?php

/* OCPlatformBundle:Advert:index.html.twig */
class __TwigTemplate_b6bf2f57bf585f65d2162fe114387fe17ccdd49d2aa316facc06a769504d22f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "OCPlatformBundle:Advert:index.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'ocplatform_body' => array($this, 'block_ocplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCPlatformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_97871e7d92db7ddf6153ccdf618ef139a1a69251726097c30e836411c0222877 = $this->env->getExtension("native_profiler");
        $__internal_97871e7d92db7ddf6153ccdf618ef139a1a69251726097c30e836411c0222877->enter($__internal_97871e7d92db7ddf6153ccdf618ef139a1a69251726097c30e836411c0222877_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_97871e7d92db7ddf6153ccdf618ef139a1a69251726097c30e836411c0222877->leave($__internal_97871e7d92db7ddf6153ccdf618ef139a1a69251726097c30e836411c0222877_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f54aca6bdc2a19d7cb6cbe831fb68348e2b229702139a2b2cc3cf83d2de5a89f = $this->env->getExtension("native_profiler");
        $__internal_f54aca6bdc2a19d7cb6cbe831fb68348e2b229702139a2b2cc3cf83d2de5a89f->enter($__internal_f54aca6bdc2a19d7cb6cbe831fb68348e2b229702139a2b2cc3cf83d2de5a89f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "Acceuil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_f54aca6bdc2a19d7cb6cbe831fb68348e2b229702139a2b2cc3cf83d2de5a89f->leave($__internal_f54aca6bdc2a19d7cb6cbe831fb68348e2b229702139a2b2cc3cf83d2de5a89f_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_a5da34613370920b3163652b1470f686125d7eb1d0c1df3b3224363296470274 = $this->env->getExtension("native_profiler");
        $__internal_a5da34613370920b3163652b1470f686125d7eb1d0c1df3b3224363296470274->enter($__internal_a5da34613370920b3163652b1470f686125d7eb1d0c1df3b3224363296470274_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 10
        echo "<div class=\"row\">
  <h2>Liste des annonces</h2>
  ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listAdverts"]) ? $context["listAdverts"] : $this->getContext($context, "listAdverts")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 13
            echo "  <div class=\"col-sm-4\">
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <img src=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["advert"], "image", array()), "url", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["advert"], "image", array()), "alt", array()), "html", null, true);
            echo "\" class=\"img-responsive\">
      </div>
      <div class=\"panel-body\">
          <a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("oc_platform_view", array("id" => $this->getAttribute($context["advert"], "id", array()))), "html", null, true);
            echo "\">
            ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "title", array()), "html", null, true);
            echo "
          </a>
      </div>
      <div class=\"panel-footer\">
          <small><em>Par ";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "author", array()), "html", null, true);
            echo ", le ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["advert"], "date", array()), "d/m/Y"), "html", null, true);
            echo "</em></small>
      </div>
    </div>
  </div>
  ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 29
            echo "    <div class=\"panel panel-default\">
      <div class=\"panel-body\">
          <p>Pas (encore !) d'annonces</p>
      </div>
    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "</div>
<div class=\"row\">
  <ul class=\"pagination\">
    ";
        // line 39
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["nbPages"]) ? $context["nbPages"] : $this->getContext($context, "nbPages"))));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 40
            echo "      <li";
            if (($context["p"] == (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))) {
                echo " class=\"active\"";
            }
            echo ">
        <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("oc_platform_home", array("page" => $context["p"])), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["p"], "html", null, true);
            echo "</a>
      </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "  </ul>
</div>
";
        
        $__internal_a5da34613370920b3163652b1470f686125d7eb1d0c1df3b3224363296470274->leave($__internal_a5da34613370920b3163652b1470f686125d7eb1d0c1df3b3224363296470274_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 44,  130 => 41,  123 => 40,  118 => 39,  113 => 35,  102 => 29,  90 => 24,  83 => 20,  79 => 19,  71 => 16,  66 => 13,  61 => 12,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# /src/OC/PlatformBundle/Resources/views/Advert/index.html.twig #}*/
/* */
/* {% extends 'OCPlatformBundle::layout.html.twig' %}*/
/* */
/* {% block title %}*/
/* Acceuil - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block ocplatform_body %}*/
/* <div class="row">*/
/*   <h2>Liste des annonces</h2>*/
/*   {% for advert in listAdverts %}*/
/*   <div class="col-sm-4">*/
/*     <div class="panel panel-default">*/
/*       <div class="panel-heading">*/
/*         <img src="{{ advert.image.url }}" alt="{{ advert.image.alt }}" class="img-responsive">*/
/*       </div>*/
/*       <div class="panel-body">*/
/*           <a href="{{ path('oc_platform_view', {'id': advert.id}) }}">*/
/*             {{ advert.title }}*/
/*           </a>*/
/*       </div>*/
/*       <div class="panel-footer">*/
/*           <small><em>Par {{ advert.author }}, le {{ advert.date|date('d/m/Y') }}</em></small>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/*   {% else %}*/
/*     <div class="panel panel-default">*/
/*       <div class="panel-body">*/
/*           <p>Pas (encore !) d'annonces</p>*/
/*       </div>*/
/*     </div>*/
/*   {% endfor %}*/
/* </div>*/
/* <div class="row">*/
/*   <ul class="pagination">*/
/*     {# On utilise la fonction range(a, b) qui crée un tableau de valeurs entre a et b #}*/
/*     {% for p in range(1, nbPages) %}*/
/*       <li{% if p == page %} class="active"{% endif %}>*/
/*         <a href="{{ path('oc_platform_home', {'page': p}) }}">{{ p }}</a>*/
/*       </li>*/
/*     {% endfor %}*/
/*   </ul>*/
/* </div>*/
/* {% endblock %}*/
/* */
