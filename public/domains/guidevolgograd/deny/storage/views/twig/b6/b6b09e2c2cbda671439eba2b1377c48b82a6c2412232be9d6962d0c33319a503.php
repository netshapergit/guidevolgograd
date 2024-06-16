<?php

/* layouts.article */
class __TwigTemplate_e0c5d12b614c6a98b20cec1d98f083bb963053db97f0bdb5bf56e98451f394c9 extends TwigBridge\Twig\Template
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
        $tags = array("include" => 1, "if" => 12, "set" => 65, "for" => 66);
        $filters = array("escape" => 6, "raw" => 32, "split" => 65, "trim" => 66);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('include', 'if', 'set', 'for'),
                array('escape', 'raw', 'split', 'trim'),
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
        $this->loadTemplate("header", "layouts.article", 1)->display($context);
        // line 2
        echo "
<section class=\"article\">
\t<div class=\"article-top\">
\t\t<div class=\"article-top__img\">
\t\t\t<img src=\"/site/data/images/large/";
        // line 6
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "field_image", array()), "html", null, true));
        echo "\">
\t\t</div>
\t\t
\t</div>
\t<div class=\"article-mid\">
\t\t<div class=\"cont_blog\">
\t\t\t";
        // line 12
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "field_coords", array())) {
            // line 13
            echo "\t\t\t<div class=\"js-add-to-plan\" data-id=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "field_object_id", array()), "html", null, true));
            echo "\" style=\"border-radius: 20px;background: rgba(0, 0, 0, 0.4);position:absolute;margin-top: -120px;display: flex; gap: 10px; align-items: center;\">
\t\t\t\t<button class=\"rbtn\" :disabled=\"isItemAlreadyInRouteOrPlan\" @click.stop=\"addToPlanById\">
\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"40\" height=\"40\" viewBox=\"0 0 40 40\" fill=\"none\"><path d=\"M30.7524 10.2471L25.1869 23.7734L17.2261 15.8126L30.7524 10.2471Z\" fill=\"#DD0A23\"/><path d=\"M10.2476 30.7529L15.8131 17.2266L23.7739 25.1874L10.2476 30.7529Z\" fill=\"black\"/><path d=\"M20.5 1L20.5 6\" stroke=\"#929292\" stroke-linecap=\"round\"/><line x1=\"20.5\" y1=\"35.5\" x2=\"20.5\" y2=\"39.5\" stroke=\"#929292\" stroke-linecap=\"round\"/><path d=\"M39 20.5L34 20.5\" stroke=\"#929292\" stroke-linecap=\"round\"/><path d=\"M6 20.5L1 20.5\" stroke=\"#929292\" stroke-linecap=\"round\"/></svg>\t
\t\t\t\t</button>
\t\t\t\t<div style=\"font-size:16px; color:#fff;padding-right:10px;\">
\t\t\t\t\t<template v-if=\"!isItemAlreadyInRouteOrPlan\">
\t\t\t\t\t\tДобавить в маршрут
\t\t\t\t\t</template>
\t\t\t\t\t<template v-else>
\t\t\t\t\t\tДобавлено
\t\t\t\t\t</template>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        }
        // line 27
        echo "\t\t\t<h1 class=\"article__title\">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "field_header", array()), "html", null, true));
        echo "</h1>
\t\t\t<div class=\"article__summary\">
\t\t\t\t";
        // line 29
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "field_summary", array()), "html", null, true));
        echo "
\t\t\t</div>
\t\t\t<div class=\"article__content\">
\t\t\t\t";
        // line 32
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "field_content", array()));
        echo "
\t\t\t</div>
\t\t\t";
        // line 34
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "field_page_objects", array())) {
            // line 35
            echo "\t\t\t
\t\t\t<div class=\"article__objects objects-blocks\" id=\"objects-block\" data-objects=\"";
            // line 36
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "field_page_objects", array()), "html", null, true));
            echo "\">
\t\t\t\t<div class=\"objects-block\" v-for=\"block in objects\">
\t\t\t\t\t<div class=\"objects-block__header\">
\t\t\t\t\t\t<div class=\"objects-block__title\">{{ block.title }}</div>
\t\t\t\t\t\t<div class=\"objects-block__action\">
\t\t\t\t\t\t\t<button class=\"mbtn\" @click.stop=\"setRoute(block.items)\">Добавить в маршрут</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"objects-block__list\">
\t\t\t\t\t\t<div class=\"objects-block__day\" v-for=\"day in block.items\">
\t\t\t\t\t\t\t<object-card
\t\t\t\t\t\t\t\tv-for=\"item in day\"
\t\t\t\t\t\t\t\t:key=\"item.id\"
\t\t\t\t\t\t\t\t:item=\"item\"
\t\t\t\t\t\t\t\t:favorites=\"shared.user?.user_favorites\"
\t\t\t\t\t\t\t\t:my-route-plan-items=\"myRoutePlanItems\"
\t\t\t\t\t\t\t\t:my-route-items=\"shared.myRoute.routeItems\"
\t\t\t\t\t\t\t\t@add-item-plan=\"addItemToMyRoutePlan\"
\t\t\t\t\t\t\t\t@remove-item-plan=\"removeItemFromMyRoutePlanByID\"
\t\t\t\t\t\t\t\t@show-object-on-map=\"showOnMap\"
\t\t\t\t\t\t\t\t@add-remove-fav=\"addRemoveFav\"
\t\t\t\t\t\t\t></object-card>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t";
        }
        // line 64
        echo "\t\t\t<div class=\"article__tags\">
\t\t\t\t";
        // line 65
        $context["tags"] = twig_split_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "field_tags", array()), ",");
        // line 66
        echo "\t\t\t    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tags"]) ? $context["tags"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            echo "<a href=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "parent_page", array()), "path", array()), "html", null, true));
            echo "?tags=";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, trim($context["tag"]), "html", null, true));
            echo "\">#";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, trim($context["tag"]), "html", null, true));
            echo "</a>&nbsp;&nbsp;&nbsp;";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "\t\t\t</div>
\t\t</div>
\t</div>
</section>

";
        // line 72
        $this->loadTemplate("footer", "layouts.article", 72)->display($context);
        // line 73
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "field_page_objects", array())) {
            // line 74
            echo "<script src=\"/site/theme/js/objects_block.js\" type=\"module\"></script>
";
        }
    }

    public function getTemplateName()
    {
        return "layouts.article";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 74,  163 => 73,  161 => 72,  154 => 67,  138 => 66,  136 => 65,  133 => 64,  102 => 36,  99 => 35,  97 => 34,  92 => 32,  86 => 29,  80 => 27,  62 => 13,  60 => 12,  51 => 6,  45 => 2,  43 => 1,);
    }
}
/* {% include 'header' %}*/
/* */
/* <section class="article">*/
/* 	<div class="article-top">*/
/* 		<div class="article-top__img">*/
/* 			<img src="/site/data/images/large/{$ page.field_image $}">*/
/* 		</div>*/
/* 		*/
/* 	</div>*/
/* 	<div class="article-mid">*/
/* 		<div class="cont_blog">*/
/* 			{% if page.field_coords %}*/
/* 			<div class="js-add-to-plan" data-id="{$ page.field_object_id $}" style="border-radius: 20px;background: rgba(0, 0, 0, 0.4);position:absolute;margin-top: -120px;display: flex; gap: 10px; align-items: center;">*/
/* 				<button class="rbtn" :disabled="isItemAlreadyInRouteOrPlan" @click.stop="addToPlanById">*/
/* 					<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none"><path d="M30.7524 10.2471L25.1869 23.7734L17.2261 15.8126L30.7524 10.2471Z" fill="#DD0A23"/><path d="M10.2476 30.7529L15.8131 17.2266L23.7739 25.1874L10.2476 30.7529Z" fill="black"/><path d="M20.5 1L20.5 6" stroke="#929292" stroke-linecap="round"/><line x1="20.5" y1="35.5" x2="20.5" y2="39.5" stroke="#929292" stroke-linecap="round"/><path d="M39 20.5L34 20.5" stroke="#929292" stroke-linecap="round"/><path d="M6 20.5L1 20.5" stroke="#929292" stroke-linecap="round"/></svg>	*/
/* 				</button>*/
/* 				<div style="font-size:16px; color:#fff;padding-right:10px;">*/
/* 					<template v-if="!isItemAlreadyInRouteOrPlan">*/
/* 						Добавить в маршрут*/
/* 					</template>*/
/* 					<template v-else>*/
/* 						Добавлено*/
/* 					</template>*/
/* 				</div>*/
/* 			</div>*/
/* 			{% endif %}*/
/* 			<h1 class="article__title">{$ page.field_header $}</h1>*/
/* 			<div class="article__summary">*/
/* 				{$ page.field_summary $}*/
/* 			</div>*/
/* 			<div class="article__content">*/
/* 				{$ page.field_content|raw $}*/
/* 			</div>*/
/* 			{% if page.field_page_objects %}*/
/* 			*/
/* 			<div class="article__objects objects-blocks" id="objects-block" data-objects="{$ page.field_page_objects $}">*/
/* 				<div class="objects-block" v-for="block in objects">*/
/* 					<div class="objects-block__header">*/
/* 						<div class="objects-block__title">{{ block.title }}</div>*/
/* 						<div class="objects-block__action">*/
/* 							<button class="mbtn" @click.stop="setRoute(block.items)">Добавить в маршрут</button>*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="objects-block__list">*/
/* 						<div class="objects-block__day" v-for="day in block.items">*/
/* 							<object-card*/
/* 								v-for="item in day"*/
/* 								:key="item.id"*/
/* 								:item="item"*/
/* 								:favorites="shared.user?.user_favorites"*/
/* 								:my-route-plan-items="myRoutePlanItems"*/
/* 								:my-route-items="shared.myRoute.routeItems"*/
/* 								@add-item-plan="addItemToMyRoutePlan"*/
/* 								@remove-item-plan="removeItemFromMyRoutePlanByID"*/
/* 								@show-object-on-map="showOnMap"*/
/* 								@add-remove-fav="addRemoveFav"*/
/* 							></object-card>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			*/
/* 			{% endif %}*/
/* 			<div class="article__tags">*/
/* 				{% set tags = page.field_tags|split(',') %}*/
/* 			    {% for tag in tags %}<a href="{$ page.parent_page.path $}?tags={$ tag|trim $}">#{$ tag|trim $}</a>&nbsp;&nbsp;&nbsp;{% endfor %}*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </section>*/
/* */
/* {% include 'footer' %}*/
/* {% if page.field_page_objects %}*/
/* <script src="/site/theme/js/objects_block.js" type="module"></script>*/
/* {% endif %}*/
