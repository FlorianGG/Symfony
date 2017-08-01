<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_093ee862ffe8606dcec8f7eb6bf8054464c5b35a6871f5d3ef2e45dcb6577926 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bbca70e57afd3e2813c98d8d5c9faebada543cf34f54c56dbaad811266eacd52 = $this->env->getExtension("native_profiler");
        $__internal_bbca70e57afd3e2813c98d8d5c9faebada543cf34f54c56dbaad811266eacd52->enter($__internal_bbca70e57afd3e2813c98d8d5c9faebada543cf34f54c56dbaad811266eacd52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bbca70e57afd3e2813c98d8d5c9faebada543cf34f54c56dbaad811266eacd52->leave($__internal_bbca70e57afd3e2813c98d8d5c9faebada543cf34f54c56dbaad811266eacd52_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_848170cf2a8232547a63af72e53ac83ab7fd862334998cb6d454eaffaf04dc82 = $this->env->getExtension("native_profiler");
        $__internal_848170cf2a8232547a63af72e53ac83ab7fd862334998cb6d454eaffaf04dc82->enter($__internal_848170cf2a8232547a63af72e53ac83ab7fd862334998cb6d454eaffaf04dc82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_848170cf2a8232547a63af72e53ac83ab7fd862334998cb6d454eaffaf04dc82->leave($__internal_848170cf2a8232547a63af72e53ac83ab7fd862334998cb6d454eaffaf04dc82_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4feaa9631c02b74c92d1770b820f20255a987c267317ebe67ad012f2e37c4e9c = $this->env->getExtension("native_profiler");
        $__internal_4feaa9631c02b74c92d1770b820f20255a987c267317ebe67ad012f2e37c4e9c->enter($__internal_4feaa9631c02b74c92d1770b820f20255a987c267317ebe67ad012f2e37c4e9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4feaa9631c02b74c92d1770b820f20255a987c267317ebe67ad012f2e37c4e9c->leave($__internal_4feaa9631c02b74c92d1770b820f20255a987c267317ebe67ad012f2e37c4e9c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1c4cbfa24e6a964d80faf2089fcd4a397cf28681eb9168d598891ded7e589547 = $this->env->getExtension("native_profiler");
        $__internal_1c4cbfa24e6a964d80faf2089fcd4a397cf28681eb9168d598891ded7e589547->enter($__internal_1c4cbfa24e6a964d80faf2089fcd4a397cf28681eb9168d598891ded7e589547_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1c4cbfa24e6a964d80faf2089fcd4a397cf28681eb9168d598891ded7e589547->leave($__internal_1c4cbfa24e6a964d80faf2089fcd4a397cf28681eb9168d598891ded7e589547_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
