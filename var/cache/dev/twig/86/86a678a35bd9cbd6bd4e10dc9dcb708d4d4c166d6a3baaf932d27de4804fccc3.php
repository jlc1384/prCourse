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
        $__internal_ce709d7825588407f11222a87f3cd8b0f132fb7f633f90bc05a0eaf0dbf40e7d = $this->env->getExtension("native_profiler");
        $__internal_ce709d7825588407f11222a87f3cd8b0f132fb7f633f90bc05a0eaf0dbf40e7d->enter($__internal_ce709d7825588407f11222a87f3cd8b0f132fb7f633f90bc05a0eaf0dbf40e7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FirstBundle:testTwigExtends:testTwigFilter.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('filter_vista')->addText("Hola-caraqueso*¿qué-tal-estás*chaval?"), "html", null, true);
        echo "
";
        
        $__internal_ce709d7825588407f11222a87f3cd8b0f132fb7f633f90bc05a0eaf0dbf40e7d->leave($__internal_ce709d7825588407f11222a87f3cd8b0f132fb7f633f90bc05a0eaf0dbf40e7d_prof);

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
