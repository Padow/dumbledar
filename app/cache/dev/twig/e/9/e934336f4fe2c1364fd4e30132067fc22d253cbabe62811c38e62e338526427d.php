<?php

/* RestDumbledarApiBundle:event:show.html.twig */
class __TwigTemplate_05bb3e806d8989c09d12a96b3f436e0beb7c26f5b3c1ccafbc440bc80012409e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "RestDumbledarApiBundle:event:show.html.twig", 1);
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
        $__internal_3950b49be9f7d7fcc35dd7a2728a435cc2f2367a999a159fe587f4b3a2c74764 = $this->env->getExtension("native_profiler");
        $__internal_3950b49be9f7d7fcc35dd7a2728a435cc2f2367a999a159fe587f4b3a2c74764->enter($__internal_3950b49be9f7d7fcc35dd7a2728a435cc2f2367a999a159fe587f4b3a2c74764_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RestDumbledarApiBundle:event:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3950b49be9f7d7fcc35dd7a2728a435cc2f2367a999a159fe587f4b3a2c74764->leave($__internal_3950b49be9f7d7fcc35dd7a2728a435cc2f2367a999a159fe587f4b3a2c74764_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5ccd05beaae754f2618cbd35e0797163b13a3a3ed5491c026cbec840008c1cc8 = $this->env->getExtension("native_profiler");
        $__internal_5ccd05beaae754f2618cbd35e0797163b13a3a3ed5491c026cbec840008c1cc8->enter($__internal_5ccd05beaae754f2618cbd35e0797163b13a3a3ed5491c026cbec840008c1cc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>event</h1>

    <table class=\"record_properties\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Dtstart</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dtstart", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Dtend</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dtend", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Summary</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "summary", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Location</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "location", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "description", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Calid</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "calid", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("event");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("event_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>";
        // line 50
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
        
        $__internal_5ccd05beaae754f2618cbd35e0797163b13a3a3ed5491c026cbec840008c1cc8->leave($__internal_5ccd05beaae754f2618cbd35e0797163b13a3a3ed5491c026cbec840008c1cc8_prof);

    }

    public function getTemplateName()
    {
        return "RestDumbledarApiBundle:event:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 50,  108 => 46,  100 => 41,  90 => 34,  83 => 30,  76 => 26,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body -%}*/
/*     <h1>event</h1>*/
/* */
/*     <table class="record_properties">*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ entity.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Dtstart</th>*/
/*                 <td>{{ entity.dtstart|date('Y-m-d H:i:s') }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Dtend</th>*/
/*                 <td>{{ entity.dtend|date('Y-m-d H:i:s') }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Summary</th>*/
/*                 <td>{{ entity.summary }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Location</th>*/
/*                 <td>{{ entity.location }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Description</th>*/
/*                 <td>{{ entity.description }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Calid</th>*/
/*                 <td>{{ entity.calid }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*         <ul class="record_actions">*/
/*     <li>*/
/*         <a href="{{ path('event') }}">*/
/*             Back to the list*/
/*         </a>*/
/*     </li>*/
/*     <li>*/
/*         <a href="{{ path('event_edit', { 'id': entity.id }) }}">*/
/*             Edit*/
/*         </a>*/
/*     </li>*/
/*     <li>{{ form(delete_form) }}</li>*/
/* </ul>*/
/* {% endblock %}*/
/* */
