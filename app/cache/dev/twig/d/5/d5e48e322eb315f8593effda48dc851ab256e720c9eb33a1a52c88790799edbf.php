<?php

/* ::base.html.twig */
class __TwigTemplate_14fd8b33084eb44dcc79cba9da9b455563280df9f350df191f8b12bc94689723 extends Twig_Template
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
        $__internal_9c66f04e52c83af94b2d721804db22f5a9925628d7471157d8871ca2e692fb03 = $this->env->getExtension("native_profiler");
        $__internal_9c66f04e52c83af94b2d721804db22f5a9925628d7471157d8871ca2e692fb03->enter($__internal_9c66f04e52c83af94b2d721804db22f5a9925628d7471157d8871ca2e692fb03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_9c66f04e52c83af94b2d721804db22f5a9925628d7471157d8871ca2e692fb03->leave($__internal_9c66f04e52c83af94b2d721804db22f5a9925628d7471157d8871ca2e692fb03_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_017145d1098ec6209c7e3430c9f5ae518d67e1191f0cf587f7a577450f3f43f1 = $this->env->getExtension("native_profiler");
        $__internal_017145d1098ec6209c7e3430c9f5ae518d67e1191f0cf587f7a577450f3f43f1->enter($__internal_017145d1098ec6209c7e3430c9f5ae518d67e1191f0cf587f7a577450f3f43f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_017145d1098ec6209c7e3430c9f5ae518d67e1191f0cf587f7a577450f3f43f1->leave($__internal_017145d1098ec6209c7e3430c9f5ae518d67e1191f0cf587f7a577450f3f43f1_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8208c996fae36fd59aea5500efa601e5db72efa964b40f327ab161bbce979cf5 = $this->env->getExtension("native_profiler");
        $__internal_8208c996fae36fd59aea5500efa601e5db72efa964b40f327ab161bbce979cf5->enter($__internal_8208c996fae36fd59aea5500efa601e5db72efa964b40f327ab161bbce979cf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_8208c996fae36fd59aea5500efa601e5db72efa964b40f327ab161bbce979cf5->leave($__internal_8208c996fae36fd59aea5500efa601e5db72efa964b40f327ab161bbce979cf5_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_00d246157500ab876fad0b39c24e1854105c7837cf0e165630b45499406ee47b = $this->env->getExtension("native_profiler");
        $__internal_00d246157500ab876fad0b39c24e1854105c7837cf0e165630b45499406ee47b->enter($__internal_00d246157500ab876fad0b39c24e1854105c7837cf0e165630b45499406ee47b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_00d246157500ab876fad0b39c24e1854105c7837cf0e165630b45499406ee47b->leave($__internal_00d246157500ab876fad0b39c24e1854105c7837cf0e165630b45499406ee47b_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9fd820d1ce3073f6371de19e7e326d357d9277e622fff6ffb2d58f94d40b015c = $this->env->getExtension("native_profiler");
        $__internal_9fd820d1ce3073f6371de19e7e326d357d9277e622fff6ffb2d58f94d40b015c->enter($__internal_9fd820d1ce3073f6371de19e7e326d357d9277e622fff6ffb2d58f94d40b015c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_9fd820d1ce3073f6371de19e7e326d357d9277e622fff6ffb2d58f94d40b015c->leave($__internal_9fd820d1ce3073f6371de19e7e326d357d9277e622fff6ffb2d58f94d40b015c_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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
