<?php

/* layouts.lk_2gis */
class __TwigTemplate_d3cc95df25bdf6aa70cec4ea4f4873358114c327dd2f57292c8841e8435d8d14 extends TwigBridge\Twig\Template
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
        $tags = array("include" => 1);
        $filters = array("escape" => 3, "json_encode" => 3);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('include'),
                array('escape', 'json_encode'),
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
        $this->loadTemplate("header", "layouts.lk_2gis", 1)->display($context);
        // line 2
        echo "
<div class=\"lk\" data-user=\"";
        // line 3
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["user"]) ? $context["user"] : null)), "html", null, true));
        echo "\" id=\"lk\">
\t<div class=\"lk__layout\">
\t\t<div class=\"lk-content\">
\t\t\t
\t\t\t
\t\t\t<div class=\"citysw\">
\t\t\t\t<div class=\"citysw-trigger\" @click.stop=\"citySwitcherActive = !citySwitcherActive\">
\t\t\t\t\t<template v-if=\"selectedCity\">{{selectedCity.city}}</template>
\t\t\t\t\t<template v-else>Направления</template>
\t\t\t\t</div>
\t\t\t\t<div class=\"citysw-content\" :class=\"{'citysw-content--active': citySwitcherActive}\">
\t\t\t\t\t<div class=\"citysw-list\" >
\t\t\t\t\t\t<div class=\"citysw-list__item\" :class=\"{'citysw-list__item--active': !selectedCity}\" @click.stop=\"setSelectedCity(false)\">Все города</div>
\t\t\t\t\t\t<div class=\"citysw-list__item\" 
\t\t\t\t\t\t\t :class=\"{'citysw-list__item--active': selectedCity && selectedCity.id == city.id}\" 
\t\t\t\t\t\t\t @click.stop=\"setSelectedCity(city)\" 
\t\t\t\t\t\t\t v-for=\"city in shared.cities\"
\t\t\t\t\t\t\t :key=\"city.id\">{{city.city}}</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t
\t\t\t<div class=\"citysw\" v-if=\"selectedCity\">
\t\t\t\t<div class=\"citysw-trigger\" @click.stop=\"tplSwitcherActive = !tplSwitcherActive\">
\t\t\t\t\t<template v-if=\"selectedTemplate\">{{selectedTemplate.field_header}}</template>
\t\t\t\t\t<template v-else>Категория</template>
\t\t\t\t</div>
\t\t\t\t<div class=\"citysw-content\" :class=\"{'citysw-content--active': tplSwitcherActive}\">
\t\t\t\t\t<div class=\"citysw-list\">
\t\t\t\t\t\t<div class=\"citysw-list__item\" :class=\"{'citysw-list__item--active': !selectedTemplate}\" @click.stop=\"selectedTemplate = null\">Все категории</div>
\t\t\t\t\t\t<div class=\"citysw-list__item\" 
\t\t\t\t\t\t\t :class=\"{'citysw-list__item--active': selectedTemplate && selectedTemplate.id == tpl.id}\" 
\t\t\t\t\t\t\t @click.stop=\"selectedTemplate = tpl; tplSwitcherActive = false\" 
\t\t\t\t\t\t\t v-for=\"tpl in selectedCity.cat\" 
\t\t\t\t\t\t\t :key=\"tpl.id\">{{tpl.field_header}}</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"citysw\" v-if=\"selectedTemplate\">
\t\t\t\t<div class=\"citysw-trigger\" @click.stop=\"layoutSwitcherActive = !layoutSwitcherActive\">
\t\t\t\t\t<template v-if=\"selectedLayout\">{{selectedLayout.name}}</template>
\t\t\t\t\t<template v-else>Шаблон</template>
\t\t\t\t</div>
\t\t\t\t<div class=\"citysw-content\" :class=\"{'citysw-content--active': layoutSwitcherActive}\">
\t\t\t\t\t<div class=\"citysw-list\">
\t\t\t\t\t\t<div class=\"citysw-list__item\" :class=\"{'citysw-list__item--active': !selectedLayout}\" @click.stop=\"selectedLayout = null\">Все категории</div>
\t\t\t\t\t\t<div class=\"citysw-list__item\" 
\t\t\t\t\t\t\t :class=\"{'citysw-list__item--active': selectedLayout && selectedLayout.id == tpl.id}\" 
\t\t\t\t\t\t\t @click.stop=\"selectedLayout = tpl; layoutSwitcherActive = false\" 
\t\t\t\t\t\t\t v-for=\"tpl in TEMPLATES\" 
\t\t\t\t\t\t\t :key=\"tpl.id\">{{tpl.name}}</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t<input type=\"text\" v-model=\"searchQuery\">
\t\t\t<button @click.stop=\"fetchData\">search</button>
\t\t\t{{totalItems}} :: {{pagesLength}} :: {{pagination.current_page}} ::
\t\t\t
\t\t\t<button @click.stop=\"selectAll\">Выбрать все</button>
\t\t\t<button @click.stop=\"create\" :disabled=\"!selectedItems.length\">Создать из выбранных</button>
\t\t\t<hr>
\t\t\t<div class=\"pagi\" v-if=\"pagination\">
\t\t\t\t<button 
\t\t\t\t\tv-for=\"pageNumber in pagesLength\" 
\t\t\t\t\t:disabled=\"pageNumber == pagination.current_page\" 
\t\t\t\t\t:key=\"pageNumber\" 
\t\t\t\t\t@click.stop=\"setPage(pageNumber)\"
\t\t\t\t\t>
\t\t\t\t\t{{ pageNumber }}
\t\t\t\t</button>
\t\t\t</div>
\t\t\t<div v-if=\"lastCreatingResults\" style=\"margin: 30px 0;background: #f5f5f5;padding: 10px;\">
\t\t\t\t<div v-for=\"item in lastCreatingResults\">
\t\t\t\t\t<template v-if=\"item.error\">
\t\t\t\t\t\t<span style=\"color: red;\">
\t\t\t\t\t\t\t{{item.error.message}}
\t\t\t\t\t\t</span>
\t\t\t\t\t</template>
\t\t\t\t\t<template v-else>
\t\t\t\t\t\t{{item.field_2gis_id}}: Страница создана
\t\t\t\t\t</template>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"\" style=\"min-height: 70vh;\">
\t\t\t\t<div v-for=\"item in items\">
\t\t\t\t\t{{item.full_address_name}}<br>
\t\t\t\t\t{{item.name}}<br>
\t\t\t\t\t{{item.id}}<br>
\t\t\t\t\t{{item.point}}<br>
\t\t\t\t\t<input type=\"checkbox\" name=\"select-item\" :id=\"item.id\" :value=\"item\" v-model=\"selectedItems\">
\t\t\t\t\t<label :for=\"item.id\">Выбрать</label>
\t\t\t\t\t<button @click.stop=\"create(\$event, item)\">create</button>
\t\t\t\t\t<hr>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

";
        // line 105
        $this->loadTemplate("footer", "layouts.lk_2gis", 105)->display($context);
        // line 106
        echo "<script src=\"/site/theme/js/lib_translit.js\" type=\"module\"></script>
<script src=\"/site/theme/js/lk_2gis.js\" type=\"module\"></script>";
    }

    public function getTemplateName()
    {
        return "layouts.lk_2gis";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 106,  153 => 105,  48 => 3,  45 => 2,  43 => 1,);
    }
}
/* {% include 'header' %}*/
/* */
/* <div class="lk" data-user="{$ user|json_encode() $}" id="lk">*/
/* 	<div class="lk__layout">*/
/* 		<div class="lk-content">*/
/* 			*/
/* 			*/
/* 			<div class="citysw">*/
/* 				<div class="citysw-trigger" @click.stop="citySwitcherActive = !citySwitcherActive">*/
/* 					<template v-if="selectedCity">{{selectedCity.city}}</template>*/
/* 					<template v-else>Направления</template>*/
/* 				</div>*/
/* 				<div class="citysw-content" :class="{'citysw-content--active': citySwitcherActive}">*/
/* 					<div class="citysw-list" >*/
/* 						<div class="citysw-list__item" :class="{'citysw-list__item--active': !selectedCity}" @click.stop="setSelectedCity(false)">Все города</div>*/
/* 						<div class="citysw-list__item" */
/* 							 :class="{'citysw-list__item--active': selectedCity && selectedCity.id == city.id}" */
/* 							 @click.stop="setSelectedCity(city)" */
/* 							 v-for="city in shared.cities"*/
/* 							 :key="city.id">{{city.city}}</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			*/
/* 			*/
/* 			<div class="citysw" v-if="selectedCity">*/
/* 				<div class="citysw-trigger" @click.stop="tplSwitcherActive = !tplSwitcherActive">*/
/* 					<template v-if="selectedTemplate">{{selectedTemplate.field_header}}</template>*/
/* 					<template v-else>Категория</template>*/
/* 				</div>*/
/* 				<div class="citysw-content" :class="{'citysw-content--active': tplSwitcherActive}">*/
/* 					<div class="citysw-list">*/
/* 						<div class="citysw-list__item" :class="{'citysw-list__item--active': !selectedTemplate}" @click.stop="selectedTemplate = null">Все категории</div>*/
/* 						<div class="citysw-list__item" */
/* 							 :class="{'citysw-list__item--active': selectedTemplate && selectedTemplate.id == tpl.id}" */
/* 							 @click.stop="selectedTemplate = tpl; tplSwitcherActive = false" */
/* 							 v-for="tpl in selectedCity.cat" */
/* 							 :key="tpl.id">{{tpl.field_header}}</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			*/
/* 			<div class="citysw" v-if="selectedTemplate">*/
/* 				<div class="citysw-trigger" @click.stop="layoutSwitcherActive = !layoutSwitcherActive">*/
/* 					<template v-if="selectedLayout">{{selectedLayout.name}}</template>*/
/* 					<template v-else>Шаблон</template>*/
/* 				</div>*/
/* 				<div class="citysw-content" :class="{'citysw-content--active': layoutSwitcherActive}">*/
/* 					<div class="citysw-list">*/
/* 						<div class="citysw-list__item" :class="{'citysw-list__item--active': !selectedLayout}" @click.stop="selectedLayout = null">Все категории</div>*/
/* 						<div class="citysw-list__item" */
/* 							 :class="{'citysw-list__item--active': selectedLayout && selectedLayout.id == tpl.id}" */
/* 							 @click.stop="selectedLayout = tpl; layoutSwitcherActive = false" */
/* 							 v-for="tpl in TEMPLATES" */
/* 							 :key="tpl.id">{{tpl.name}}</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			*/
/* 			<input type="text" v-model="searchQuery">*/
/* 			<button @click.stop="fetchData">search</button>*/
/* 			{{totalItems}} :: {{pagesLength}} :: {{pagination.current_page}} ::*/
/* 			*/
/* 			<button @click.stop="selectAll">Выбрать все</button>*/
/* 			<button @click.stop="create" :disabled="!selectedItems.length">Создать из выбранных</button>*/
/* 			<hr>*/
/* 			<div class="pagi" v-if="pagination">*/
/* 				<button */
/* 					v-for="pageNumber in pagesLength" */
/* 					:disabled="pageNumber == pagination.current_page" */
/* 					:key="pageNumber" */
/* 					@click.stop="setPage(pageNumber)"*/
/* 					>*/
/* 					{{ pageNumber }}*/
/* 				</button>*/
/* 			</div>*/
/* 			<div v-if="lastCreatingResults" style="margin: 30px 0;background: #f5f5f5;padding: 10px;">*/
/* 				<div v-for="item in lastCreatingResults">*/
/* 					<template v-if="item.error">*/
/* 						<span style="color: red;">*/
/* 							{{item.error.message}}*/
/* 						</span>*/
/* 					</template>*/
/* 					<template v-else>*/
/* 						{{item.field_2gis_id}}: Страница создана*/
/* 					</template>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="" style="min-height: 70vh;">*/
/* 				<div v-for="item in items">*/
/* 					{{item.full_address_name}}<br>*/
/* 					{{item.name}}<br>*/
/* 					{{item.id}}<br>*/
/* 					{{item.point}}<br>*/
/* 					<input type="checkbox" name="select-item" :id="item.id" :value="item" v-model="selectedItems">*/
/* 					<label :for="item.id">Выбрать</label>*/
/* 					<button @click.stop="create($event, item)">create</button>*/
/* 					<hr>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* */
/* {% include 'footer' %}*/
/* <script src="/site/theme/js/lib_translit.js" type="module"></script>*/
/* <script src="/site/theme/js/lk_2gis.js" type="module"></script>*/
