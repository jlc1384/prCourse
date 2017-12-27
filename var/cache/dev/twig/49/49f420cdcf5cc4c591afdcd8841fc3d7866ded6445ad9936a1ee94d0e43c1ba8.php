<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_31b5b7f95d3b151188edac66de9067cad14085ec1a083d5d9644f4d8ca1ddecf extends Twig_Template
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
        $__internal_ca0caa42b3fe08b27e95d65dc907da2acf50c6b5127276187cd0851a35e21ca2 = $this->env->getExtension("native_profiler");
        $__internal_ca0caa42b3fe08b27e95d65dc907da2acf50c6b5127276187cd0851a35e21ca2->enter($__internal_ca0caa42b3fe08b27e95d65dc907da2acf50c6b5127276187cd0851a35e21ca2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca0caa42b3fe08b27e95d65dc907da2acf50c6b5127276187cd0851a35e21ca2->leave($__internal_ca0caa42b3fe08b27e95d65dc907da2acf50c6b5127276187cd0851a35e21ca2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2d64d3771e814971d7be193e5febdccb0282a9da6d5bd91a8434bc940d381119 = $this->env->getExtension("native_profiler");
        $__internal_2d64d3771e814971d7be193e5febdccb0282a9da6d5bd91a8434bc940d381119->enter($__internal_2d64d3771e814971d7be193e5febdccb0282a9da6d5bd91a8434bc940d381119_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2d64d3771e814971d7be193e5febdccb0282a9da6d5bd91a8434bc940d381119->leave($__internal_2d64d3771e814971d7be193e5febdccb0282a9da6d5bd91a8434bc940d381119_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_320f97c3e9a29e89c5e3169c00259b8fed57d401cadd768edae49107783edf0d = $this->env->getExtension("native_profiler");
        $__internal_320f97c3e9a29e89c5e3169c00259b8fed57d401cadd768edae49107783edf0d->enter($__internal_320f97c3e9a29e89c5e3169c00259b8fed57d401cadd768edae49107783edf0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_320f97c3e9a29e89c5e3169c00259b8fed57d401cadd768edae49107783edf0d->leave($__internal_320f97c3e9a29e89c5e3169c00259b8fed57d401cadd768edae49107783edf0d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6dc2ecce0179a14dda3595a305daf465bee0c12939cb7ad5b8359b2073a40dd5 = $this->env->getExtension("native_profiler");
        $__internal_6dc2ecce0179a14dda3595a305daf465bee0c12939cb7ad5b8359b2073a40dd5->enter($__internal_6dc2ecce0179a14dda3595a305daf465bee0c12939cb7ad5b8359b2073a40dd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6dc2ecce0179a14dda3595a305daf465bee0c12939cb7ad5b8359b2073a40dd5->leave($__internal_6dc2ecce0179a14dda3595a305daf465bee0c12939cb7ad5b8359b2073a40dd5_prof);

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
