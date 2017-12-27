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
        $__internal_6311363c7bb916e4530e14ef4c0f42f1c8dc0b977cfe31857aa7f15b9e5a54b6 = $this->env->getExtension("native_profiler");
        $__internal_6311363c7bb916e4530e14ef4c0f42f1c8dc0b977cfe31857aa7f15b9e5a54b6->enter($__internal_6311363c7bb916e4530e14ef4c0f42f1c8dc0b977cfe31857aa7f15b9e5a54b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6311363c7bb916e4530e14ef4c0f42f1c8dc0b977cfe31857aa7f15b9e5a54b6->leave($__internal_6311363c7bb916e4530e14ef4c0f42f1c8dc0b977cfe31857aa7f15b9e5a54b6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5a0c95c25cab8f43c6546e7a899dda08cbd4720852db5b868206c4e71730cffd = $this->env->getExtension("native_profiler");
        $__internal_5a0c95c25cab8f43c6546e7a899dda08cbd4720852db5b868206c4e71730cffd->enter($__internal_5a0c95c25cab8f43c6546e7a899dda08cbd4720852db5b868206c4e71730cffd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5a0c95c25cab8f43c6546e7a899dda08cbd4720852db5b868206c4e71730cffd->leave($__internal_5a0c95c25cab8f43c6546e7a899dda08cbd4720852db5b868206c4e71730cffd_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_94f396a7ee0fa26429db1c38404652b92d7d984a22e2eb74ebf98a1dc9cb4501 = $this->env->getExtension("native_profiler");
        $__internal_94f396a7ee0fa26429db1c38404652b92d7d984a22e2eb74ebf98a1dc9cb4501->enter($__internal_94f396a7ee0fa26429db1c38404652b92d7d984a22e2eb74ebf98a1dc9cb4501_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_94f396a7ee0fa26429db1c38404652b92d7d984a22e2eb74ebf98a1dc9cb4501->leave($__internal_94f396a7ee0fa26429db1c38404652b92d7d984a22e2eb74ebf98a1dc9cb4501_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fb02e71c56d3a8c6b93eee0a97d53a3981629efbad0359abcf8ebc2786011a5f = $this->env->getExtension("native_profiler");
        $__internal_fb02e71c56d3a8c6b93eee0a97d53a3981629efbad0359abcf8ebc2786011a5f->enter($__internal_fb02e71c56d3a8c6b93eee0a97d53a3981629efbad0359abcf8ebc2786011a5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_fb02e71c56d3a8c6b93eee0a97d53a3981629efbad0359abcf8ebc2786011a5f->leave($__internal_fb02e71c56d3a8c6b93eee0a97d53a3981629efbad0359abcf8ebc2786011a5f_prof);

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
