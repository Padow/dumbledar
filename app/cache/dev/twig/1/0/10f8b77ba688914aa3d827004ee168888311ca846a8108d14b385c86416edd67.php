<?php

/* RestDumbledarApiBundle:calendar:new.html.twig */
class __TwigTemplate_28607732873ba377a55374be083e36ad209eeffe09ce0f1d61d6642a9a5a4d87 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "RestDumbledarApiBundle:calendar:new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_993ae866bebfae25f1f650114038acabb1b15c5d88a43a4cd9daa1cbf47e4483 = $this->env->getExtension("native_profiler");
        $__internal_993ae866bebfae25f1f650114038acabb1b15c5d88a43a4cd9daa1cbf47e4483->enter($__internal_993ae866bebfae25f1f650114038acabb1b15c5d88a43a4cd9daa1cbf47e4483_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RestDumbledarApiBundle:calendar:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_993ae866bebfae25f1f650114038acabb1b15c5d88a43a4cd9daa1cbf47e4483->leave($__internal_993ae866bebfae25f1f650114038acabb1b15c5d88a43a4cd9daa1cbf47e4483_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_90bfb0bc564c9862ee9b6176f20dc3a9701ab7bbbf257bef5ae8b95a31674142 = $this->env->getExtension("native_profiler");
        $__internal_90bfb0bc564c9862ee9b6176f20dc3a9701ab7bbbf257bef5ae8b95a31674142->enter($__internal_90bfb0bc564c9862ee9b6176f20dc3a9701ab7bbbf257bef5ae8b95a31674142_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>calendar creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("calendar");
        echo "\">
            Back to the list
        </a>
    </li>
</ul>
";
        
        $__internal_90bfb0bc564c9862ee9b6176f20dc3a9701ab7bbbf257bef5ae8b95a31674142->leave($__internal_90bfb0bc564c9862ee9b6176f20dc3a9701ab7bbbf257bef5ae8b95a31674142_prof);

    }

    public function getTemplateName()
    {
        return "RestDumbledarApiBundle:calendar:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 10,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body -%}*/
/*     <h1>calendar creation</h1>*/
/* */
/*     {{ form(form) }}*/
/* */
/*         <ul class="record_actions">*/
/*     <li>*/
/*         <a href="{{ path('calendar') }}">*/
/*             Back to the list*/
/*         </a>*/
/*     </li>*/
/* </ul>*/
/* {% endblock %}*/
/* */
