<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_02c5257ca3d82efc14aaca381932aab83cd15713fea5d779f721ce8bdb6034f1 extends Twig_Template
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
        $__internal_275095757cb0ca9696375c007a4d2a6a02d1fdab54ac30da928d9917d5d5b0b6 = $this->env->getExtension("native_profiler");
        $__internal_275095757cb0ca9696375c007a4d2a6a02d1fdab54ac30da928d9917d5d5b0b6->enter($__internal_275095757cb0ca9696375c007a4d2a6a02d1fdab54ac30da928d9917d5d5b0b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_275095757cb0ca9696375c007a4d2a6a02d1fdab54ac30da928d9917d5d5b0b6->leave($__internal_275095757cb0ca9696375c007a4d2a6a02d1fdab54ac30da928d9917d5d5b0b6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_389c827b1b822ac8839f26a4a3a704dbac5e15ef5ae8dcc23aa7c8948eea738b = $this->env->getExtension("native_profiler");
        $__internal_389c827b1b822ac8839f26a4a3a704dbac5e15ef5ae8dcc23aa7c8948eea738b->enter($__internal_389c827b1b822ac8839f26a4a3a704dbac5e15ef5ae8dcc23aa7c8948eea738b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_389c827b1b822ac8839f26a4a3a704dbac5e15ef5ae8dcc23aa7c8948eea738b->leave($__internal_389c827b1b822ac8839f26a4a3a704dbac5e15ef5ae8dcc23aa7c8948eea738b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_abbc8ac10091f2d2849d493a0888153bd7041342c95700bae88dbb00f147d356 = $this->env->getExtension("native_profiler");
        $__internal_abbc8ac10091f2d2849d493a0888153bd7041342c95700bae88dbb00f147d356->enter($__internal_abbc8ac10091f2d2849d493a0888153bd7041342c95700bae88dbb00f147d356_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_abbc8ac10091f2d2849d493a0888153bd7041342c95700bae88dbb00f147d356->leave($__internal_abbc8ac10091f2d2849d493a0888153bd7041342c95700bae88dbb00f147d356_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2ba8141e8a06cd8e20102b31c56226cca6a5557acc82cb30eedde25b7387542b = $this->env->getExtension("native_profiler");
        $__internal_2ba8141e8a06cd8e20102b31c56226cca6a5557acc82cb30eedde25b7387542b->enter($__internal_2ba8141e8a06cd8e20102b31c56226cca6a5557acc82cb30eedde25b7387542b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2ba8141e8a06cd8e20102b31c56226cca6a5557acc82cb30eedde25b7387542b->leave($__internal_2ba8141e8a06cd8e20102b31c56226cca6a5557acc82cb30eedde25b7387542b_prof);

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
