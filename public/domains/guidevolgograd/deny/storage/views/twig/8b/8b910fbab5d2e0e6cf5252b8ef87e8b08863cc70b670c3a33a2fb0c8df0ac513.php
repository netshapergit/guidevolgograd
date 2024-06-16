<?php

/* module_types.announcement.news */
class __TwigTemplate_664b487af5d8d522854e9c827b0963e73d34ed9ee827324af432ff033d57b4bd extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("_.module_types.announcement.rows", "module_types.announcement.news", 1);
        $this->blocks = array(
            'item' => array($this, 'block_item'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_.module_types.announcement.rows";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 5);
        $filters = array("default" => 5, "escape" => 6, "date" => 14);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array('default', 'escape', 'date'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_item($context, array $blocks = array())
    {
        // line 4
        echo "
\t";
        // line 5
        if ((($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "field_image", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "field_image", array()), "")) : (""))) {
            // line 6
            echo "\t\t<a class=\"pull-left\" href=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "path", array()), "html", null, true));
            echo "\">
\t\t\t<img class=\"media-object\" src=\"/site/data/images/small/";
            // line 7
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "field_image", array()), "html", null, true));
            echo "\">
\t\t</a>
\t";
        }
        // line 10
        echo "
\t<div class=\"media-body\">

\t\t<p class=\"text-muted\">
\t\t\t<small>";
        // line 14
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "created_at", array()), "H:i m.d.Y"), "html", null, true));
        echo "</small>
\t\t</p>

\t\t";
        // line 17
        if ((($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "field_header", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "field_header", array()), "")) : (""))) {
            // line 18
            echo "\t\t\t<h4 class=\"media-heading\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "field_header", array()), "html", null, true));
            echo "</h4>
\t\t";
        }
        // line 20
        echo "
\t\t";
        // line 21
        if ((($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "field_summary", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "field_summary", array()), "")) : (""))) {
            // line 22
            echo "\t\t\t<p>";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "field_summary", array()), "html", null, true));
            echo "</p>
\t\t";
        }
        // line 24
        echo "
\t\t<a href=\"";
        // line 25
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "path", array()), "html", null, true));
        echo "\">Подробнее</a>

\t</div>

";
    }

    public function getTemplateName()
    {
        return "module_types.announcement.news";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 25,  102 => 24,  96 => 22,  94 => 21,  91 => 20,  85 => 18,  83 => 17,  77 => 14,  71 => 10,  65 => 7,  60 => 6,  58 => 5,  55 => 4,  52 => 3,  11 => 1,);
    }
}
/* {% extends '_.module_types.announcement.rows' %}*/
/* */
/* {% block item %}*/
/* */
/* 	{% if item.field_image|default('') %}*/
/* 		<a class="pull-left" href="{$ item.path $}">*/
/* 			<img class="media-object" src="/site/data/images/small/{$ item.field_image $}">*/
/* 		</a>*/
/* 	{% endif %}*/
/* */
/* 	<div class="media-body">*/
/* */
/* 		<p class="text-muted">*/
/* 			<small>{$ item.created_at|date('H:i m.d.Y') $}</small>*/
/* 		</p>*/
/* */
/* 		{% if item.field_header|default('') %}*/
/* 			<h4 class="media-heading">{$ item.field_header $}</h4>*/
/* 		{% endif %}*/
/* */
/* 		{% if item.field_summary|default('') %}*/
/* 			<p>{$ item.field_summary $}</p>*/
/* 		{% endif %}*/
/* */
/* 		<a href="{$ item.path $}">Подробнее</a>*/
/* */
/* 	</div>*/
/* */
/* {% endblock %}*/
/* */
