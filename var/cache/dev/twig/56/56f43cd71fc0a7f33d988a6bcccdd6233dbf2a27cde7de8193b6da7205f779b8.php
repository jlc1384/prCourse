<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_a8d024ec57916d502c04c6abc7ba84ebb4af0580c8102fa571aea7cef65f1c57 extends Twig_Template
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
        $__internal_ae558125d59ac054da20a21f5285c7e7b03d3cf395bc62dba077e036423224a8 = $this->env->getExtension("native_profiler");
        $__internal_ae558125d59ac054da20a21f5285c7e7b03d3cf395bc62dba077e036423224a8->enter($__internal_ae558125d59ac054da20a21f5285c7e7b03d3cf395bc62dba077e036423224a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae558125d59ac054da20a21f5285c7e7b03d3cf395bc62dba077e036423224a8->leave($__internal_ae558125d59ac054da20a21f5285c7e7b03d3cf395bc62dba077e036423224a8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a46bc5855d8a394bbfc2e5616b72ef42793eded63d3219387252774a48db6bf9 = $this->env->getExtension("native_profiler");
        $__internal_a46bc5855d8a394bbfc2e5616b72ef42793eded63d3219387252774a48db6bf9->enter($__internal_a46bc5855d8a394bbfc2e5616b72ef42793eded63d3219387252774a48db6bf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a46bc5855d8a394bbfc2e5616b72ef42793eded63d3219387252774a48db6bf9->leave($__internal_a46bc5855d8a394bbfc2e5616b72ef42793eded63d3219387252774a48db6bf9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8d8bd9b4e865604bfc63a22c771efe42887c5a750f0136599a06f71616bda3eb = $this->env->getExtension("native_profiler");
        $__internal_8d8bd9b4e865604bfc63a22c771efe42887c5a750f0136599a06f71616bda3eb->enter($__internal_8d8bd9b4e865604bfc63a22c771efe42887c5a750f0136599a06f71616bda3eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8d8bd9b4e865604bfc63a22c771efe42887c5a750f0136599a06f71616bda3eb->leave($__internal_8d8bd9b4e865604bfc63a22c771efe42887c5a750f0136599a06f71616bda3eb_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1f6e8de18ccb5fa299ad6ae339ac4e004477e73ea6cb0638743e65cfc7dbc6cf = $this->env->getExtension("native_profiler");
        $__internal_1f6e8de18ccb5fa299ad6ae339ac4e004477e73ea6cb0638743e65cfc7dbc6cf->enter($__internal_1f6e8de18ccb5fa299ad6ae339ac4e004477e73ea6cb0638743e65cfc7dbc6cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1f6e8de18ccb5fa299ad6ae339ac4e004477e73ea6cb0638743e65cfc7dbc6cf->leave($__internal_1f6e8de18ccb5fa299ad6ae339ac4e004477e73ea6cb0638743e65cfc7dbc6cf_prof);

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
