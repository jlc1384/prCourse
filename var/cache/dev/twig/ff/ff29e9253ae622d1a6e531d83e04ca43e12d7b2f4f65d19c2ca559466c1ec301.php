<?php

/* FirstBundle:course:addCourse.html.twig */
class __TwigTemplate_10188fbfd8ffe7249fcb9b3115058b9fbdae6a230a1774be851d61fcef7d6fcb extends Twig_Template
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
        $__internal_0080bb83b9fe49b1f08ce9cef2fef93b5e99c0389c7a0cae2b074ef317d6fa9e = $this->env->getExtension("native_profiler");
        $__internal_0080bb83b9fe49b1f08ce9cef2fef93b5e99c0389c7a0cae2b074ef317d6fa9e->enter($__internal_0080bb83b9fe49b1f08ce9cef2fef93b5e99c0389c7a0cae2b074ef317d6fa9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FirstBundle:course:addCourse.html.twig"));

        // line 2
        echo "<h2>Add Course</h2>
";
        // line 3
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => "", "method" => "POST"));
        echo "
    ";
        // line 4
        if ((((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")) != null) && ((isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")) != null))) {
            // line 5
            echo "        <h3>";
            echo twig_escape_filter($this->env, (isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")), "html", null, true);
            echo "</h3>
        ";
            // line 6
            echo $this->env->getExtension('dump')->dump($this->env, $context, (isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")));
            echo "
    ";
        }
        // line 8
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
    ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        
        $__internal_0080bb83b9fe49b1f08ce9cef2fef93b5e99c0389c7a0cae2b074ef317d6fa9e->leave($__internal_0080bb83b9fe49b1f08ce9cef2fef93b5e99c0389c7a0cae2b074ef317d6fa9e_prof);

    }

    public function getTemplateName()
    {
        return "FirstBundle:course:addCourse.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 10,  46 => 9,  41 => 8,  36 => 6,  31 => 5,  29 => 4,  25 => 3,  22 => 2,);
    }
}
/* {# empty Twig template #}*/
/* <h2>Add Course</h2>*/
/* {{form_start(form, {'action':'', 'method':'POST'})}}*/
/*     {% if data != null and status != null %}*/
/*         <h3>{{ status }}</h3>*/
/*         {{ dump(data) }}*/
/*     {% endif %}*/
/*     {{ form_errors(form) }}*/
/*     {{ form_widget(form) }}*/
/* {{form_end(form)}}*/
