<?php

/* base.html.twig */
class __TwigTemplate_1b36e06ee48e923c1c1e7ae6dff514ef00f2c9c8715e08672426e23440500c56 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7752995632582bf883c402f0fdb3e6dc91cc2dca86d40e24273cd66e328bb7f9 = $this->env->getExtension("native_profiler");
        $__internal_7752995632582bf883c402f0fdb3e6dc91cc2dca86d40e24273cd66e328bb7f9->enter($__internal_7752995632582bf883c402f0fdb3e6dc91cc2dca86d40e24273cd66e328bb7f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_7752995632582bf883c402f0fdb3e6dc91cc2dca86d40e24273cd66e328bb7f9->leave($__internal_7752995632582bf883c402f0fdb3e6dc91cc2dca86d40e24273cd66e328bb7f9_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_305922428cbb635e9738e98bd67021063fdfc83a02c05ededa81880b2fe83511 = $this->env->getExtension("native_profiler");
        $__internal_305922428cbb635e9738e98bd67021063fdfc83a02c05ededa81880b2fe83511->enter($__internal_305922428cbb635e9738e98bd67021063fdfc83a02c05ededa81880b2fe83511_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_305922428cbb635e9738e98bd67021063fdfc83a02c05ededa81880b2fe83511->leave($__internal_305922428cbb635e9738e98bd67021063fdfc83a02c05ededa81880b2fe83511_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7314206f5138819424b3db3c1eae0f642a46ee104fd73a417a5fbf38b470f7de = $this->env->getExtension("native_profiler");
        $__internal_7314206f5138819424b3db3c1eae0f642a46ee104fd73a417a5fbf38b470f7de->enter($__internal_7314206f5138819424b3db3c1eae0f642a46ee104fd73a417a5fbf38b470f7de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_7314206f5138819424b3db3c1eae0f642a46ee104fd73a417a5fbf38b470f7de->leave($__internal_7314206f5138819424b3db3c1eae0f642a46ee104fd73a417a5fbf38b470f7de_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_a6b5ea685215927cfb851e1e43dcc82de026992b83b52cf4d99911df12b040ee = $this->env->getExtension("native_profiler");
        $__internal_a6b5ea685215927cfb851e1e43dcc82de026992b83b52cf4d99911df12b040ee->enter($__internal_a6b5ea685215927cfb851e1e43dcc82de026992b83b52cf4d99911df12b040ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a6b5ea685215927cfb851e1e43dcc82de026992b83b52cf4d99911df12b040ee->leave($__internal_a6b5ea685215927cfb851e1e43dcc82de026992b83b52cf4d99911df12b040ee_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d99eea05b2dc5e5c7bcdf01c4032c5c30fd6dd878fb795375592d722dbd849bc = $this->env->getExtension("native_profiler");
        $__internal_d99eea05b2dc5e5c7bcdf01c4032c5c30fd6dd878fb795375592d722dbd849bc->enter($__internal_d99eea05b2dc5e5c7bcdf01c4032c5c30fd6dd878fb795375592d722dbd849bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d99eea05b2dc5e5c7bcdf01c4032c5c30fd6dd878fb795375592d722dbd849bc->leave($__internal_d99eea05b2dc5e5c7bcdf01c4032c5c30fd6dd878fb795375592d722dbd849bc_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
