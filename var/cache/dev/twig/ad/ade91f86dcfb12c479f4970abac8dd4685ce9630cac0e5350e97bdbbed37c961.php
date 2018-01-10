<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_1edaabe78b6d93d8531c36b918dac051fdd8f54746c30e4e583a74c29401f864 extends Twig_Template
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
        $__internal_81e21909fce4cba43c6262a050ac4a11c1cb271b9987d25cac479971d50b219b = $this->env->getExtension("native_profiler");
        $__internal_81e21909fce4cba43c6262a050ac4a11c1cb271b9987d25cac479971d50b219b->enter($__internal_81e21909fce4cba43c6262a050ac4a11c1cb271b9987d25cac479971d50b219b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_81e21909fce4cba43c6262a050ac4a11c1cb271b9987d25cac479971d50b219b->leave($__internal_81e21909fce4cba43c6262a050ac4a11c1cb271b9987d25cac479971d50b219b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_83b4cdcabb2ae263c16c3399e2e4929f6a2e0e5f55922465ebcf12dc7203b396 = $this->env->getExtension("native_profiler");
        $__internal_83b4cdcabb2ae263c16c3399e2e4929f6a2e0e5f55922465ebcf12dc7203b396->enter($__internal_83b4cdcabb2ae263c16c3399e2e4929f6a2e0e5f55922465ebcf12dc7203b396_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_83b4cdcabb2ae263c16c3399e2e4929f6a2e0e5f55922465ebcf12dc7203b396->leave($__internal_83b4cdcabb2ae263c16c3399e2e4929f6a2e0e5f55922465ebcf12dc7203b396_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a9699e514eb472e1b42856c13f1e1dc43addf54492cb23e8b0b049fe68957525 = $this->env->getExtension("native_profiler");
        $__internal_a9699e514eb472e1b42856c13f1e1dc43addf54492cb23e8b0b049fe68957525->enter($__internal_a9699e514eb472e1b42856c13f1e1dc43addf54492cb23e8b0b049fe68957525_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a9699e514eb472e1b42856c13f1e1dc43addf54492cb23e8b0b049fe68957525->leave($__internal_a9699e514eb472e1b42856c13f1e1dc43addf54492cb23e8b0b049fe68957525_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_aee6109661c49808dd04f3908bfd3c4d2da1220b10fa62e135cb33679427fff4 = $this->env->getExtension("native_profiler");
        $__internal_aee6109661c49808dd04f3908bfd3c4d2da1220b10fa62e135cb33679427fff4->enter($__internal_aee6109661c49808dd04f3908bfd3c4d2da1220b10fa62e135cb33679427fff4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_aee6109661c49808dd04f3908bfd3c4d2da1220b10fa62e135cb33679427fff4->leave($__internal_aee6109661c49808dd04f3908bfd3c4d2da1220b10fa62e135cb33679427fff4_prof);

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
