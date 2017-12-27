<?php

/* ::layout13.html.twig */
class __TwigTemplate_cbc93aa845cab5cfa14dfa7b5daedf7a8b548f6b35e14362ace952cfd4126066 extends Twig_Template
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
        $__internal_07dcf87584247b8330b1c47210d54f9b3d35a4a8aadd3e599a404474418d40f8 = $this->env->getExtension("native_profiler");
        $__internal_07dcf87584247b8330b1c47210d54f9b3d35a4a8aadd3e599a404474418d40f8->enter($__internal_07dcf87584247b8330b1c47210d54f9b3d35a4a8aadd3e599a404474418d40f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout13.html.twig"));

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
        <style>
            .container {
                border: 1px solid green;
                width: 85%;
                height: 300px;
            }
            
        </style>
    </head>
    <body>
        <div class=\"container\">
            ";
        // line 19
        $this->displayBlock('body', $context, $blocks);
        // line 22
        echo "        </div>
        ";
        // line 23
        $this->displayBlock('javascripts', $context, $blocks);
        // line 24
        echo "    </body>
</html>";
        
        $__internal_07dcf87584247b8330b1c47210d54f9b3d35a4a8aadd3e599a404474418d40f8->leave($__internal_07dcf87584247b8330b1c47210d54f9b3d35a4a8aadd3e599a404474418d40f8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_deb08a16909f1c1fce5f01cf77ef4cc4195e9feddbb6d65baf6014c3aa7d9d3d = $this->env->getExtension("native_profiler");
        $__internal_deb08a16909f1c1fce5f01cf77ef4cc4195e9feddbb6d65baf6014c3aa7d9d3d->enter($__internal_deb08a16909f1c1fce5f01cf77ef4cc4195e9feddbb6d65baf6014c3aa7d9d3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_deb08a16909f1c1fce5f01cf77ef4cc4195e9feddbb6d65baf6014c3aa7d9d3d->leave($__internal_deb08a16909f1c1fce5f01cf77ef4cc4195e9feddbb6d65baf6014c3aa7d9d3d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_26b66784e1e2875b244144df1d30292ed419a09119cdebe5fc9ab428314d22c6 = $this->env->getExtension("native_profiler");
        $__internal_26b66784e1e2875b244144df1d30292ed419a09119cdebe5fc9ab428314d22c6->enter($__internal_26b66784e1e2875b244144df1d30292ed419a09119cdebe5fc9ab428314d22c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_26b66784e1e2875b244144df1d30292ed419a09119cdebe5fc9ab428314d22c6->leave($__internal_26b66784e1e2875b244144df1d30292ed419a09119cdebe5fc9ab428314d22c6_prof);

    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        $__internal_d8b90a4be8d21305bfef3cea5a8fa00828b39f78f5fb811873f84f2cb5292595 = $this->env->getExtension("native_profiler");
        $__internal_d8b90a4be8d21305bfef3cea5a8fa00828b39f78f5fb811873f84f2cb5292595->enter($__internal_d8b90a4be8d21305bfef3cea5a8fa00828b39f78f5fb811873f84f2cb5292595_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 20
        echo "                Default content!!!!!!!!!!!
            ";
        
        $__internal_d8b90a4be8d21305bfef3cea5a8fa00828b39f78f5fb811873f84f2cb5292595->leave($__internal_d8b90a4be8d21305bfef3cea5a8fa00828b39f78f5fb811873f84f2cb5292595_prof);

    }

    // line 23
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_eea9e7160359d351742cd86e7b406e51414877ca0dced38dcead6bcc331b743b = $this->env->getExtension("native_profiler");
        $__internal_eea9e7160359d351742cd86e7b406e51414877ca0dced38dcead6bcc331b743b->enter($__internal_eea9e7160359d351742cd86e7b406e51414877ca0dced38dcead6bcc331b743b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_eea9e7160359d351742cd86e7b406e51414877ca0dced38dcead6bcc331b743b->leave($__internal_eea9e7160359d351742cd86e7b406e51414877ca0dced38dcead6bcc331b743b_prof);

    }

    public function getTemplateName()
    {
        return "::layout13.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 23,  98 => 20,  92 => 19,  81 => 6,  69 => 5,  61 => 24,  59 => 23,  56 => 22,  54 => 19,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*         <style>*/
/*             .container {*/
/*                 border: 1px solid green;*/
/*                 width: 85%;*/
/*                 height: 300px;*/
/*             }*/
/*             */
/*         </style>*/
/*     </head>*/
/*     <body>*/
/*         <div class="container">*/
/*             {% block body %}*/
/*                 Default content!!!!!!!!!!!*/
/*             {% endblock %}*/
/*         </div>*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
