<?php

/* AppBundle:pruebas:index.html.twig */
class __TwigTemplate_12fb907a44a0968ae8c1c8750bc7ee0c6058f295502ab2cef3a7844b6c1655da extends Twig_Template
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
        $__internal_9cfdf3ee34b6fea753582070b1dc0ccc2b60c896adb67ca7701d365a4147dfdc = $this->env->getExtension("native_profiler");
        $__internal_9cfdf3ee34b6fea753582070b1dc0ccc2b60c896adb67ca7701d365a4147dfdc->enter($__internal_9cfdf3ee34b6fea753582070b1dc0ccc2b60c896adb67ca7701d365a4147dfdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:pruebas:index.html.twig"));

        // line 2
        echo twig_escape_filter($this->env, (isset($context["textSent"]) ? $context["textSent"] : $this->getContext($context, "textSent")), "html", null, true);
        
        $__internal_9cfdf3ee34b6fea753582070b1dc0ccc2b60c896adb67ca7701d365a4147dfdc->leave($__internal_9cfdf3ee34b6fea753582070b1dc0ccc2b60c896adb67ca7701d365a4147dfdc_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:pruebas:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,);
    }
}
/* {# empty Twig template #}*/
/* {{textSent}}*/
