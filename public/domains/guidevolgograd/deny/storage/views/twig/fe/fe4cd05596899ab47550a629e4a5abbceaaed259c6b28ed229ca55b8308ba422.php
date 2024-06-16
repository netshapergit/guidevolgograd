<?php

/* _.user.sitemap */
class __TwigTemplate_24fa8434d60e40491735b2aaf5dc9eb9490df9348d79db455f0034742b5e2c1e extends TwigBridge\Twig\Template
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
        $tags = array("for" => 11, "if" => 13);
        $filters = array("escape" => 12);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('for', 'if'),
                array('escape'),
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

        // line 1
        echo "<!DOCTYPE html>
<html>
 
    <head>
        <title>
            Sitemap
        </title>
    </head>
    
    <body >
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pages"]) ? $context["pages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 12
            echo "            <a href=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["page"], "path", array()), "html", null, true));
            echo "\">
                ";
            // line 13
            if ($this->getAttribute($context["page"], "field_header", array())) {
                // line 14
                echo "                    ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["page"], "field_header", array()), "html", null, true));
                echo "
                ";
            } elseif ($this->getAttribute(            // line 15
$context["page"], "title", array())) {
                // line 16
                echo "                    ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["page"], "title", array()), "html", null, true));
                echo "
                ";
            } else {
                // line 18
                echo "                    ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["page"], "path", array()), "html", null, true));
                echo "
                ";
            }
            // line 20
            echo "            </a>
            <br>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "    </body>
 
</html>";
    }

    public function getTemplateName()
    {
        return "_.user.sitemap";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 23,  85 => 20,  79 => 18,  73 => 16,  71 => 15,  66 => 14,  64 => 13,  59 => 12,  55 => 11,  43 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*  */
/*     <head>*/
/*         <title>*/
/*             Sitemap*/
/*         </title>*/
/*     </head>*/
/*     */
/*     <body >*/
/*         {% for page in pages %}*/
/*             <a href="{$ page.path $}">*/
/*                 {% if page.field_header %}*/
/*                     {$ page.field_header $}*/
/*                 {% elseif page.title %}*/
/*                     {$ page.title $}*/
/*                 {% else %}*/
/*                     {$ page.path $}*/
/*                 {% endif %}*/
/*             </a>*/
/*             <br>*/
/*         {% endfor %}*/
/*     </body>*/
/*  */
/* </html>*/
