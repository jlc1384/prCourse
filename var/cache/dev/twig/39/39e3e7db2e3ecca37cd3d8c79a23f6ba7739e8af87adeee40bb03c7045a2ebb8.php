<?php

/* FirstBundle:testTwigExtends:testTwigExtends.html.twig */
class __TwigTemplate_85f97cb4f991726f8d9d6476a3992b1fad7d0c5925e94ed749005176d41a07d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout13.html.twig", "FirstBundle:testTwigExtends:testTwigExtends.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout13.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_15a471b841ff4ca154e72dd81f238fdc022bc3b86214fcd53e3b74ea017f2434 = $this->env->getExtension("native_profiler");
        $__internal_15a471b841ff4ca154e72dd81f238fdc022bc3b86214fcd53e3b74ea017f2434->enter($__internal_15a471b841ff4ca154e72dd81f238fdc022bc3b86214fcd53e3b74ea017f2434_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FirstBundle:testTwigExtends:testTwigExtends.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_15a471b841ff4ca154e72dd81f238fdc022bc3b86214fcd53e3b74ea017f2434->leave($__internal_15a471b841ff4ca154e72dd81f238fdc022bc3b86214fcd53e3b74ea017f2434_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_31edd1ee859cda3e04c897c45f8d75c5d6e28c4b74d209627f897a0888360d71 = $this->env->getExtension("native_profiler");
        $__internal_31edd1ee859cda3e04c897c45f8d75c5d6e28c4b74d209627f897a0888360d71->enter($__internal_31edd1ee859cda3e04c897c45f8d75c5d6e28c4b74d209627f897a0888360d71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <h1>this is an example</h1>
    ";
        // line 4
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    
    ";
        // line 6
        echo twig_include($this->env, $context, "FirstBundle:testTwigExtends:ejPart.html.twig");
        echo "
";
        
        $__internal_31edd1ee859cda3e04c897c45f8d75c5d6e28c4b74d209627f897a0888360d71->leave($__internal_31edd1ee859cda3e04c897c45f8d75c5d6e28c4b74d209627f897a0888360d71_prof);

    }

    public function getTemplateName()
    {
        return "FirstBundle:testTwigExtends:testTwigExtends.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 6,  43 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "::layout13.html.twig" %}*/
/* {% block body %}*/
/*     <h1>this is an example</h1>*/
/*     {{ parent() }}*/
/*     */
/*     {{ include('FirstBundle:testTwigExtends:ejPart.html.twig') }}*/
/* {% endblock %}*/
/* */
