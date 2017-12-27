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
        $__internal_4197bb8323303a87ef170a47fd91e30ca3c12f5d8817781ee00ffa94fb5ffc4d = $this->env->getExtension("native_profiler");
        $__internal_4197bb8323303a87ef170a47fd91e30ca3c12f5d8817781ee00ffa94fb5ffc4d->enter($__internal_4197bb8323303a87ef170a47fd91e30ca3c12f5d8817781ee00ffa94fb5ffc4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4197bb8323303a87ef170a47fd91e30ca3c12f5d8817781ee00ffa94fb5ffc4d->leave($__internal_4197bb8323303a87ef170a47fd91e30ca3c12f5d8817781ee00ffa94fb5ffc4d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_24c8bfa0e07ce3f547a86656ba5f944446bb112454ce5f07785e7f4baef0fb41 = $this->env->getExtension("native_profiler");
        $__internal_24c8bfa0e07ce3f547a86656ba5f944446bb112454ce5f07785e7f4baef0fb41->enter($__internal_24c8bfa0e07ce3f547a86656ba5f944446bb112454ce5f07785e7f4baef0fb41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_24c8bfa0e07ce3f547a86656ba5f944446bb112454ce5f07785e7f4baef0fb41->leave($__internal_24c8bfa0e07ce3f547a86656ba5f944446bb112454ce5f07785e7f4baef0fb41_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b17cbdb199b976129f62b0cfb781429bc0e2837808e677e5feeb277420d27db7 = $this->env->getExtension("native_profiler");
        $__internal_b17cbdb199b976129f62b0cfb781429bc0e2837808e677e5feeb277420d27db7->enter($__internal_b17cbdb199b976129f62b0cfb781429bc0e2837808e677e5feeb277420d27db7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b17cbdb199b976129f62b0cfb781429bc0e2837808e677e5feeb277420d27db7->leave($__internal_b17cbdb199b976129f62b0cfb781429bc0e2837808e677e5feeb277420d27db7_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e6c99da61d7199c4c8f754b552b146a8fec0ec907571828ca5b3a718674ab374 = $this->env->getExtension("native_profiler");
        $__internal_e6c99da61d7199c4c8f754b552b146a8fec0ec907571828ca5b3a718674ab374->enter($__internal_e6c99da61d7199c4c8f754b552b146a8fec0ec907571828ca5b3a718674ab374_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_e6c99da61d7199c4c8f754b552b146a8fec0ec907571828ca5b3a718674ab374->leave($__internal_e6c99da61d7199c4c8f754b552b146a8fec0ec907571828ca5b3a718674ab374_prof);

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
