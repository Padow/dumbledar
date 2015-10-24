<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_8b26dfb8ffc70877e38589b61478c444d31889cf3263c4aded82ecc70d8c548c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2de343c6fe464fa779a8b5fab25764d802652c0daf5bc0236eaf28ef82c836d0 = $this->env->getExtension("native_profiler");
        $__internal_2de343c6fe464fa779a8b5fab25764d802652c0daf5bc0236eaf28ef82c836d0->enter($__internal_2de343c6fe464fa779a8b5fab25764d802652c0daf5bc0236eaf28ef82c836d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2de343c6fe464fa779a8b5fab25764d802652c0daf5bc0236eaf28ef82c836d0->leave($__internal_2de343c6fe464fa779a8b5fab25764d802652c0daf5bc0236eaf28ef82c836d0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9338518ead67a134b03362e986c62050789b3abcf03894c0485bc467c5d4f2b9 = $this->env->getExtension("native_profiler");
        $__internal_9338518ead67a134b03362e986c62050789b3abcf03894c0485bc467c5d4f2b9->enter($__internal_9338518ead67a134b03362e986c62050789b3abcf03894c0485bc467c5d4f2b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_9338518ead67a134b03362e986c62050789b3abcf03894c0485bc467c5d4f2b9->leave($__internal_9338518ead67a134b03362e986c62050789b3abcf03894c0485bc467c5d4f2b9_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2ab1b4d5ec831c90e5f5d41bd4f1b18462a075b26cdc0e5e2a42764cd4835c2b = $this->env->getExtension("native_profiler");
        $__internal_2ab1b4d5ec831c90e5f5d41bd4f1b18462a075b26cdc0e5e2a42764cd4835c2b->enter($__internal_2ab1b4d5ec831c90e5f5d41bd4f1b18462a075b26cdc0e5e2a42764cd4835c2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_2ab1b4d5ec831c90e5f5d41bd4f1b18462a075b26cdc0e5e2a42764cd4835c2b->leave($__internal_2ab1b4d5ec831c90e5f5d41bd4f1b18462a075b26cdc0e5e2a42764cd4835c2b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e878653077a8e0f9a2bbc16feb9b5a02321297fed1533461c2380b156e98f039 = $this->env->getExtension("native_profiler");
        $__internal_e878653077a8e0f9a2bbc16feb9b5a02321297fed1533461c2380b156e98f039->enter($__internal_e878653077a8e0f9a2bbc16feb9b5a02321297fed1533461c2380b156e98f039_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_e878653077a8e0f9a2bbc16feb9b5a02321297fed1533461c2380b156e98f039->leave($__internal_e878653077a8e0f9a2bbc16feb9b5a02321297fed1533461c2380b156e98f039_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
/* {% extends 'TwigBundle::layout.html.twig' %}*/
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
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
