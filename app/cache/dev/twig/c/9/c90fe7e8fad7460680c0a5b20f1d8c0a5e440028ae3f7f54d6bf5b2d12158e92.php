<?php

/* RestDumbledarApiBundle:event:index.html.twig */
class __TwigTemplate_c0b1f0bbf695247f96ed95bf8ec655c8322facb115c1b4b913bd23b8d0ab581e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "RestDumbledarApiBundle:event:index.html.twig", 1);
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
        $__internal_930aa4340de2c113d7f167bd39d6d7388a99b1b2ea7ea8f754823980bc132d98 = $this->env->getExtension("native_profiler");
        $__internal_930aa4340de2c113d7f167bd39d6d7388a99b1b2ea7ea8f754823980bc132d98->enter($__internal_930aa4340de2c113d7f167bd39d6d7388a99b1b2ea7ea8f754823980bc132d98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RestDumbledarApiBundle:event:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_930aa4340de2c113d7f167bd39d6d7388a99b1b2ea7ea8f754823980bc132d98->leave($__internal_930aa4340de2c113d7f167bd39d6d7388a99b1b2ea7ea8f754823980bc132d98_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b3fa911ef604e0256a77bf9ce33f42b9b515cf370b9dd370bfb44bcb5b2bd628 = $this->env->getExtension("native_profiler");
        $__internal_b3fa911ef604e0256a77bf9ce33f42b9b515cf370b9dd370bfb44bcb5b2bd628->enter($__internal_b3fa911ef604e0256a77bf9ce33f42b9b515cf370b9dd370bfb44bcb5b2bd628_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>event list</h1>

    <table class=\"records_list\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Dtstart</th>
                <th>Dtend</th>
                <th>Summary</th>
                <th>Location</th>
                <th>Description</th>
                <th>Calid</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 21
            echo "            <tr>
                <td><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("event_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 23
            if ($this->getAttribute($context["entity"], "dtstart", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dtstart", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 24
            if ($this->getAttribute($context["entity"], "dtend", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dtend", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "summary", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "location", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "description", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "calid", array()), "html", null, true);
            echo "</td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("event_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("event_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                    </li>
                </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "        </tbody>
    </table>

        <ul>
        <li>
            <a href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("event_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
    ";
        
        $__internal_b3fa911ef604e0256a77bf9ce33f42b9b515cf370b9dd370bfb44bcb5b2bd628->leave($__internal_b3fa911ef604e0256a77bf9ce33f42b9b515cf370b9dd370bfb44bcb5b2bd628_prof);

    }

    public function getTemplateName()
    {
        return "RestDumbledarApiBundle:event:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 46,  120 => 41,  108 => 35,  102 => 32,  95 => 28,  91 => 27,  87 => 26,  83 => 25,  77 => 24,  71 => 23,  65 => 22,  62 => 21,  58 => 20,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body -%}*/
/*     <h1>event list</h1>*/
/* */
/*     <table class="records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Dtstart</th>*/
/*                 <th>Dtend</th>*/
/*                 <th>Summary</th>*/
/*                 <th>Location</th>*/
/*                 <th>Description</th>*/
/*                 <th>Calid</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for entity in entities %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('event_show', { 'id': entity.id }) }}">{{ entity.id }}</a></td>*/
/*                 <td>{% if entity.dtstart %}{{ entity.dtstart|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td>{% if entity.dtend %}{{ entity.dtend|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td>{{ entity.summary }}</td>*/
/*                 <td>{{ entity.location }}</td>*/
/*                 <td>{{ entity.description }}</td>*/
/*                 <td>{{ entity.calid }}</td>*/
/*                 <td>*/
/*                 <ul>*/
/*                     <li>*/
/*                         <a href="{{ path('event_show', { 'id': entity.id }) }}">show</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="{{ path('event_edit', { 'id': entity.id }) }}">edit</a>*/
/*                     </li>*/
/*                 </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*         <ul>*/
/*         <li>*/
/*             <a href="{{ path('event_new') }}">*/
/*                 Create a new entry*/
/*             </a>*/
/*         </li>*/
/*     </ul>*/
/*     {% endblock %}*/
/* */
