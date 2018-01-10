<?php

/* FirstBundle:testTwigExtends:testTwigFilter.html.twig */
class __TwigTemplate_61d00794402976cbe7e69c533b52e26dfba76d3f416c91b7ee12b0f1cdded28f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_347b26c03c90b33e33008c0530ee502e4d0e7989daaf71ec194ef466ed5c8779 = $this->env->getExtension("native_profiler");
        $__internal_347b26c03c90b33e33008c0530ee502e4d0e7989daaf71ec194ef466ed5c8779->enter($__internal_347b26c03c90b33e33008c0530ee502e4d0e7989daaf71ec194ef466ed5c8779_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FirstBundle:testTwigExtends:testTwigFilter.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('filter_vista')->addText("Hola-caraqueso*¿qué-tal-estás*chaval?"), "html", null, true);
        echo "
";
        
        $__internal_347b26c03c90b33e33008c0530ee502e4d0e7989daaf71ec194ef466ed5c8779->leave($__internal_347b26c03c90b33e33008c0530ee502e4d0e7989daaf71ec194ef466ed5c8779_prof);

    }

    public function getTemplateName()
    {
        return "FirstBundle:testTwigExtends:testTwigFilter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 3,  22 => 2,);
    }
}
/* {# empty Twig template #}*/
/* */
/* {{ "Hola-caraqueso*¿qué-tal-estás*chaval?"|addText() }}*/
/* */
