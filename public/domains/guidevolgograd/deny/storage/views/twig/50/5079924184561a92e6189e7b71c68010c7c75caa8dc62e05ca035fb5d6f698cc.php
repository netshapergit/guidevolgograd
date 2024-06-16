<?php

/* layouts.seo_list */
class __TwigTemplate_df1f7f91c15abaff57d082fe9b045341236a06d9aea464e467ff1666a61d4021 extends TwigBridge\Twig\Template
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
        $tags = array("if" => 1, "set" => 3, "for" => 9, "include" => 41);
        $filters = array("split" => 6, "length" => 10, "slice" => 12, "lower" => 12, "merge" => 13, "escape" => 37, "json_encode" => 37, "raw" => 52);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'set', 'for', 'include'),
                array('split', 'length', 'slice', 'lower', 'merge', 'escape', 'json_encode', 'raw'),
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
        if (($this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "input", array()), "json", array()) == "yes")) {
            // line 2
            echo "
\t";
            // line 3
            $context["items"] = $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "active_sub_pages", array());
            // line 4
            echo "
\t";
            // line 5
            if ($this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "input", array()), "query", array())) {
                // line 6
                echo "\t\t";
                $context["query"] = twig_split_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "input", array()), "query", array()), " ");
                // line 7
                echo "\t\t";
                $context["results"] = array();
                // line 8
                echo "
\t\t";
                // line 9
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 10
                    echo "\t\t\t";
                    if ((twig_length_filter($this->env, (isset($context["query"]) ? $context["query"] : null)) > 0)) {
                        // line 11
                        echo "\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((isset($context["query"]) ? $context["query"] : null));
                        foreach ($context['_seq'] as $context["_key"] => $context["que"]) {
                            // line 12
                            echo "\t\t\t\t\t";
                            if (((twig_length_filter($this->env, twig_slice($this->env, $context["que"], 0,  -1)) >= 3) && twig_in_filter(twig_lower_filter($this->env, twig_slice($this->env, $context["que"], 0,  -1)), twig_lower_filter($this->env, $this->getAttribute($context["item"], "field_header", array()))))) {
                                // line 13
                                echo "\t\t\t\t\t\t";
                                $context["results"] = twig_array_merge((isset($context["results"]) ? $context["results"] : null), array(0 => $context["item"]));
                                // line 14
                                echo "\t\t\t\t\t";
                            }
                            // line 15
                            echo "\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['que'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 16
                        echo "\t\t\t";
                    }
                    // line 17
                    echo "\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 18
                echo "
\t\t";
                // line 19
                $context["items"] = (isset($context["results"]) ? $context["results"] : null);
                echo "\t\t

\t";
            }
            // line 22
            echo "
\t";
            // line 23
            $context["uniqResults"] = array();
            // line 24
            echo "\t";
            $context["uniqIDs"] = array();
            // line 25
            echo "
\t";
            // line 26
            if ((twig_length_filter($this->env, (isset($context["items"]) ? $context["items"] : null)) > 0)) {
                // line 27
                echo "\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 28
                    echo "\t\t\t";
                    if (!twig_in_filter($this->getAttribute($context["item"], "id", array()), (isset($context["uniqIDs"]) ? $context["uniqIDs"] : null))) {
                        // line 29
                        echo "\t\t\t\t";
                        $context["uniqResults"] = twig_array_merge((isset($context["uniqResults"]) ? $context["uniqResults"] : null), array(0 => $context["item"]));
                        // line 30
                        echo "\t\t\t\t";
                        $context["uniqIDs"] = twig_array_merge((isset($context["uniqIDs"]) ? $context["uniqIDs"] : null), array(0 => $this->getAttribute($context["item"], "id", array())));
                        // line 31
                        echo "\t\t\t";
                    }
                    // line 32
                    echo "\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 33
                echo "\t";
            }
            // line 34
            echo "
\t";
            // line 35
            $context["items"] = (isset($context["uniqResults"]) ? $context["uniqResults"] : null);
            // line 36
            echo "
<div id=\"ajax-answer\" data-answer=\"";
            // line 37
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["uniqResults"]) ? $context["uniqResults"] : null)), "html", null, true));
            echo "\" ";
            if (((twig_length_filter($this->env, (isset($context["results"]) ? $context["results"] : null)) == 0) && ($this->getAttribute((isset($context["query"]) ? $context["query"] : null), 0, array(), "array") != ""))) {
                echo "data-empty=\"1\"";
            }
            echo "></div>

";
        } else {
            // line 40
            echo "
";
            // line 41
            $this->loadTemplate("header", "layouts.seo_list", 41)->display($context);
            // line 42
            echo "
<section class=\"search\" id=\"v-search-root\" data-search-params=\"";
            // line 43
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "field_seo_list_params", array()), "html", null, true));
            echo "\">
\t<div class=\"search__wrapper\" :class=\"{'search__wrapper--fw': isFullWidthLayout}\">
\t\t<div v-show=\"isSearchShowlist\" class=\"search-item search-item--list\">
\t\t\t<div class=\"search-top\">
\t\t\t\t<div class=\"cont\">
\t\t\t\t\t<h1>";
            // line 48
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "field_header", array()), "html", null, true));
            echo "</h1>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"search-desc\">
\t\t\t\t";
            // line 52
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "field_content", array()));
            echo "
\t\t\t</div>
\t\t\t";
            // line 166
            echo "\t\t\t<div class=\"search-list\">
\t\t\t\t<transition name=\"loader\">
\t\t\t\t\t<div v-show=\"isLoading\" class=\"search-loader\">
\t\t\t\t\t\t<div class=\"loader\">
\t\t\t\t\t\t\t<svg viewBox=\"0 0 80 80\">
\t\t\t\t\t\t\t\t<rect x=\"8\" y=\"8\" width=\"64\" height=\"64\"></rect>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</transition>
\t\t\t\t<div class=\"cont\">
\t\t\t\t\t<div class=\"search-warning\" v-show=\"emptyAnswer || filteredList.length == 0\">Результатов по вашему запросу нет</div>
\t\t\t\t\t";
            // line 189
            echo "\t\t\t\t\t<transition-group 
\t\t\t\t\t    mode=\"out-in\" 
\t\t\t\t\t    name=\"search-transition\" 
\t\t\t\t\t    tag=\"div\" 
\t\t\t\t\t    class=\"search-results__wrapper\"
\t\t\t\t\t>
\t\t\t\t\t\t";
            // line 195
            $this->loadTemplate("item_vue", "layouts.seo_list", 195)->display($context);
            // line 196
            echo "\t\t\t\t\t\t</transition-group>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"search-item search-item--map\">
\t\t\t<span class=\"search-switchmode\" @click=\"scrollToList\">Список</span>
\t\t\t<div id=\"map\" style=\"width: 100%; height: calc(100vh);\"></div>
\t\t</div>
\t</div>
</section>
<script src=\"https://api-maps.yandex.ru/2.1/?apikey=b303c4d1-e74e-4a8d-942f-15e384f9386b&lang=ru_RU\" type=\"text/javascript\"></script>
<script type=\"text/javascript\">
\t
    ymaps.ready(init);
    function init(){
        // Создание карты.
\t\twindow.myMap = new ymaps.Map('map', {
\t\t\tcenter: [55.830572, 37.631125],
\t\t\tcontrols: ['zoomControl'],
            zoom: 15
        }, {
            searchControlProvider: 'yandex#search'
        })
\t\t
        window.objectManager = new ymaps.ObjectManager({
\t\t\tclusterize: true,
\t\t\tgridSize: 32,
\t\t\t//clusterDisableClickZoom: true,
            //geoObjectOpenBalloonOnClick: false,
            clusterOpenBalloonOnClick: false
\t\t});
\t\t
\t\tobjectManager.objects.options.set('preset', 'islands#redStretchyIcon')
\t\tobjectManager.clusters.options.set('preset', 'islands#redClusterIcons')
\t\t
\t\tconst json = { 
\t\t   \"type\":\"FeatureCollection\",
\t\t   \"features\":[ 
\t\t\t\t{ 
\t\t\t\t\t\"type\":\"Feature\",
\t\t\t\t\t\"id\":0,
\t\t\t\t\t\"geometry\":{ 
\t\t\t\t\t\"type\":\"Point\",
\t\t\t\t\t\"coordinates\":[ 
\t\t\t\t\t\t53.215555,
\t\t\t\t\t    50.187128
\t\t\t\t\t]
\t\t\t\t\t},
\t\t\t\t\t\"properties\":{ 
\t\t\t\t\t\t\"balloonContentHeader\":\"<font size=3><b><a target='_blank' href='https://yandex.ru'>Здесь может быть ваша ссылка</a></b></font>\",
\t\t\t\t\t\t\"balloonContentBody\":\"<p>Ваше имя: <input name='login'></p><p><em>Телефон в формате 2xxx-xxx:</em>  <input></p><p><input type='submit' value='Отправить'></p>\",
\t\t\t\t\t\t\"balloonContentFooter\":\"<font size=1>Информация предоставлена: </font> <strong>этим балуном</strong>\",
\t\t\t\t\t\t\"clusterCaption\":\"<strong><s>Еще</s> одна</strong> метка\",
\t\t\t\t\t\t\"hintContent\":\"<strong>Текст  <s>подсказки</s></strong>\"
\t\t\t\t\t}
\t\t\t\t}
\t\t  \t]
\t\t }
\t\t
\t\t
\t\t//objectManager.objects.options.set('preset', 'islands#greenDotIcon');
\t\t//objectManager.clusters.options.set('preset', 'islands#greenClusterIcons');
\t\tmyMap.geoObjects.add(objectManager);

\t\tlet circle = new ymaps.Circle([[53.193936, 50.200425], 10000], null, { draggable: true });
        
    
\t\t//objectManager.add(json);
\t\t
\t\t
\t\t
\t\tdocument.addEventListener('redrawMap', function(e) {
\t\t\tobjectManager.removeAll()
\t\t\tconsole.log(e.detail)
\t\t\t
\t\t\tobjectManager.add(e.detail);
\t\t\tlet objects = ymaps.geoQuery(e.detail)
\t\t\t/*myMap.geoObjects.add(new ymaps.Placemark([53.201717, 50.141131], {
            balloonContent: 'цвет <strong>влюбленной жабы</strong>'
        }, {
            preset: 'islands#circleIcon',
            iconColor: '#3caa3c'
        }));*/
\t\t\tfunction findInside() {
\t\t\t\t// Объекты, попадающие в круг, будут становиться красными.
\t\t\t\tlet objectsInsideCircle = objects.searchInside(circle);
\t\t\t\t//console.log(objectsInsideCircle)
\t\t\t\t//objectsInsideCircle.setOptions('preset', 'islands#redIcon');
\t\t\t\t//console.log([...objectsInsideCircle].forEach(e => console.log(e.properties.get(\"myID\"))))
\t\t\t\t// Оставшиеся объекты - синими.
\t\t\t\tlet itemsInsideRadius = []
\t\t\t\tobjectsInsideCircle.each(e => itemsInsideRadius.push(e.properties._data.data.object_id))
\t\t\t\twindow.App.raduisFilterItems = itemsInsideRadius
\t\t\t\t//objects.remove(objectsInsideCircle).setOptions('preset', 'islands#blueIcon');
\t\t\t}
\t\t\t//circle.events.add('dragend', findInside);
\t\t\t//myMap.geoObjects.add(circle);
\t\t\t
\t\t\t
\t\t})
\t\t
\t\t
\t\t\t
\t\t\t//findInside();
\t\t
\t\t
\t\t//circle.events.fire('dragend')
\t\t
\t\t
\t\t
    }
\t
\t
\t
</script>

";
            // line 313
            $this->loadTemplate("footer", "layouts.seo_list", 313)->display($context);
            // line 314
            echo "<script src=\"https://cdn.jsdelivr.net/npm/vue-slider-component@3.1.4/dist/vue-slider-component.umd.min.js\"></script>
<script src=\"/site/theme/js/search_seo_list.js\"></script>

";
        }
    }

    public function getTemplateName()
    {
        return "layouts.seo_list";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  339 => 314,  337 => 313,  218 => 196,  216 => 195,  208 => 189,  194 => 166,  189 => 52,  182 => 48,  174 => 43,  171 => 42,  169 => 41,  166 => 40,  156 => 37,  153 => 36,  151 => 35,  148 => 34,  145 => 33,  139 => 32,  136 => 31,  133 => 30,  130 => 29,  127 => 28,  122 => 27,  120 => 26,  117 => 25,  114 => 24,  112 => 23,  109 => 22,  103 => 19,  100 => 18,  94 => 17,  91 => 16,  85 => 15,  82 => 14,  79 => 13,  76 => 12,  71 => 11,  68 => 10,  64 => 9,  61 => 8,  58 => 7,  55 => 6,  53 => 5,  50 => 4,  48 => 3,  45 => 2,  43 => 1,);
    }
}
/* {% if request.input.json == 'yes' %}*/
/* */
/* 	{% set items = page.active_sub_pages %}*/
/* */
/* 	{% if request.input.query %}*/
/* 		{% set query = request.input.query|split(' ') %}*/
/* 		{% set results = [] %}*/
/* */
/* 		{% for item in items %}*/
/* 			{% if query|length > 0 %}*/
/* 				{% for que in query %}*/
/* 					{% if que|slice(0, -1)|length >= 3 and que|slice(0, -1)|lower in item.field_header|lower %}*/
/* 						{% set results = results|merge([item]) %}*/
/* 					{% endif %}*/
/* 				{% endfor %}*/
/* 			{% endif %}*/
/* 		{% endfor %}*/
/* */
/* 		{% set items = results %}		*/
/* */
/* 	{% endif %}*/
/* */
/* 	{% set uniqResults = [] %}*/
/* 	{% set uniqIDs = [] %}*/
/* */
/* 	{% if items|length > 0 %}*/
/* 		{% for item in items %}*/
/* 			{% if item.id not in uniqIDs %}*/
/* 				{% set uniqResults = uniqResults|merge([item]) %}*/
/* 				{% set uniqIDs = uniqIDs|merge([item.id]) %}*/
/* 			{% endif %}*/
/* 		{% endfor %}*/
/* 	{% endif %}*/
/* */
/* 	{% set items = uniqResults %}*/
/* */
/* <div id="ajax-answer" data-answer="{$ uniqResults|json_encode() $}" {% if results|length == 0 and query[0] != '' %}data-empty="1"{% endif %}></div>*/
/* */
/* {% else %}*/
/* */
/* {% include 'header' %}*/
/* */
/* <section class="search" id="v-search-root" data-search-params="{$ page.field_seo_list_params $}">*/
/* 	<div class="search__wrapper" :class="{'search__wrapper--fw': isFullWidthLayout}">*/
/* 		<div v-show="isSearchShowlist" class="search-item search-item--list">*/
/* 			<div class="search-top">*/
/* 				<div class="cont">*/
/* 					<h1>{$ page.field_header $}</h1>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="search-desc">*/
/* 				{$ page.field_content|raw $}*/
/* 			</div>*/
/* 			{#*/
/* 			<div class="search-filters search-filters--results-page">*/
/* 				<div class="cont">*/
/* 					<div class="flexer flexer--jcb flexer--aic">*/
/* 						{% include 'cityswitcher_search_common' %}*/
/* 						<div class="filter__group">*/
/* 							<div class="filter filter--switcher filter--radius">*/
/* 								<div class="filter-radius">*/
/* 									<input type="checkbox" id="filter-radius" name="filter-radius" v-model="radiusFilterIsActive">*/
/* 									<label for="filter-radius">*/
/* 										<span class="checkbox-switcher"></span>*/
/* 										Искать рядом со мной*/
/* 									</label>*/
/* 									<div v-show="radiusFilterIsActive" class="filter-radius-changer">*/
/* 										<vue-slider */
/* 											ref="filter-radius"*/
/* 											v-model="circleRadius" */
/* 											:min="500" */
/* 											:max="10000"*/
/* 											:tooltip="'active'"*/
/* 											:tooltip-formatter="circleRadiusTooltipFormatter"*/
/* 											:min-range="1"*/
/* 											:lazy="true"*/
/* 											:adsorb="true"*/
/*         									:interval="500"*/
/* 										></vue-slider>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="filters">*/
/* 						*/
/* 						<div class="filters__wrapper">*/
/* 							<div class="filter__group">*/
/* 								<div class="filter filter--tags">*/
/* 									<div class="tagsearch__input">*/
/* 										<vue-tags-input*/
/* 											v-model="tag"*/
/* 											:tags="tags"*/
/* 											:autocomplete-items="filteredTags"*/
/* 											@tags-changed="newTags => tags = newTags"*/
/* 											placeholder="Поиск..."*/
/* 										/>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 							<!--div class="filter__group">*/
/* 								<div class="filter filter--search">*/
/* 									<input */
/* 										type="text" */
/* 										class="form-input form-input--text" */
/* 										placeholder="Поиск..."*/
/* 										@input="inputHandler"*/
/* 										v-model="searchParams.query"*/
/* 									>*/
/* 								</div>*/
/* 							</div-->*/
/* 							<!--div class="filter__group filter__group--flex">*/
/* 								<div class="filter filter--date">*/
/* 									<v-date-picker */
/* 										mode='range' */
/* 										:min-date='new Date()'*/
/* 										v-model='range'*/
/* 									/>*/
/* 								</div>*/
/* 								*/
/* 							</div-->*/
/* 							<div class="filter__group filter__group--flex">*/
/* 								<div class="filter filter--cats">*/
/* 									<div class="filter-radios">*/
/* 										<div class="filter-radio">*/
/* 											<input type="radio" value="" name="filter-cat" v-model="searchSelectedCat" id="filter-cat-0">*/
/* 											<label for="filter-cat-0">Все</label>*/
/* 										</div>*/
/* 										<div class="filter-radio">*/
/* 											<input type="radio" value="22" name="filter-cat" v-model="searchSelectedCat" id="filter-cat-3">*/
/* 											<label for="filter-cat-3">Маршруты</label>*/
/* 										</div>*/
/* 										<div class="filter-radio">*/
/* 											<input type="radio" value="24" name="filter-cat" v-model="searchSelectedCat" id="filter-cat-4">*/
/* 											<label for="filter-cat-4">Места</label>*/
/* 										</div>*/
/* 										<div class="filter-radio">*/
/* 											<input type="radio" value="49" name="filter-cat" v-model="searchSelectedCat" id="filter-cat-5">*/
/* 											<label for="filter-cat-5">События</label>*/
/* 										</div>*/
/* 										<div class="filter-radio">*/
/* 											<input type="radio" value="50" name="filter-cat" v-model="searchSelectedCat" id="filter-cat-7">*/
/* 											<label for="filter-cat-7">Экскурсии</label>*/
/* 										</div>*/
/* 										<div class="filter-radio">*/
/* 											<input type="radio" value="51" name="filter-cat" v-model="searchSelectedCat" id="filter-cat-2">*/
/* 											<label for="filter-cat-2">Рестораны</label>*/
/* 										</div>*/
/* 										<div class="filter-radio">*/
/* 											<input type="radio" value="53" name="filter-cat" v-model="searchSelectedCat" id="filter-cat-1">*/
/* 											<label for="filter-cat-1">Отели</label>*/
/* 										</div>*/
/* 										<div class="filter-radio">*/
/* 											<input type="radio" value="52" name="filter-cat" v-model="searchSelectedCat" id="filter-cat-6">*/
/* 											<label for="filter-cat-6">Кемпинги</label>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 					*/
/* 				</div>*/
/* 			</div>*/
/* 			#}*/
/* 			<div class="search-list">*/
/* 				<transition name="loader">*/
/* 					<div v-show="isLoading" class="search-loader">*/
/* 						<div class="loader">*/
/* 							<svg viewBox="0 0 80 80">*/
/* 								<rect x="8" y="8" width="64" height="64"></rect>*/
/* 							</svg>*/
/* 						</div>*/
/* 					</div>*/
/* 				</transition>*/
/* 				<div class="cont">*/
/* 					<div class="search-warning" v-show="emptyAnswer || filteredList.length == 0">Результатов по вашему запросу нет</div>*/
/* 					{#*/
/* 					<div class="search-results__sort" v-show="filteredList.length > 0">*/
/* 						<div class="filter filter--sort">*/
/* 							<select v-model="sortType" class="form-input form-input--select">*/
/* 								<option value="0" disabled selected>Сортировка</option>*/
/* 								<option value="priceUp">Цена ↑</option>*/
/* 								<option value="priceDown">Цена ↓</option>*/
/* 							</select>*/
/* 						</div>*/
/* 					</div>*/
/* 					#}*/
/* 					<transition-group */
/* 					    mode="out-in" */
/* 					    name="search-transition" */
/* 					    tag="div" */
/* 					    class="search-results__wrapper"*/
/* 					>*/
/* 						{% include 'item_vue' %}*/
/* 						</transition-group>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 		<div class="search-item search-item--map">*/
/* 			<span class="search-switchmode" @click="scrollToList">Список</span>*/
/* 			<div id="map" style="width: 100%; height: calc(100vh);"></div>*/
/* 		</div>*/
/* 	</div>*/
/* </section>*/
/* <script src="https://api-maps.yandex.ru/2.1/?apikey=b303c4d1-e74e-4a8d-942f-15e384f9386b&lang=ru_RU" type="text/javascript"></script>*/
/* <script type="text/javascript">*/
/* 	*/
/*     ymaps.ready(init);*/
/*     function init(){*/
/*         // Создание карты.*/
/* 		window.myMap = new ymaps.Map('map', {*/
/* 			center: [55.830572, 37.631125],*/
/* 			controls: ['zoomControl'],*/
/*             zoom: 15*/
/*         }, {*/
/*             searchControlProvider: 'yandex#search'*/
/*         })*/
/* 		*/
/*         window.objectManager = new ymaps.ObjectManager({*/
/* 			clusterize: true,*/
/* 			gridSize: 32,*/
/* 			//clusterDisableClickZoom: true,*/
/*             //geoObjectOpenBalloonOnClick: false,*/
/*             clusterOpenBalloonOnClick: false*/
/* 		});*/
/* 		*/
/* 		objectManager.objects.options.set('preset', 'islands#redStretchyIcon')*/
/* 		objectManager.clusters.options.set('preset', 'islands#redClusterIcons')*/
/* 		*/
/* 		const json = { */
/* 		   "type":"FeatureCollection",*/
/* 		   "features":[ */
/* 				{ */
/* 					"type":"Feature",*/
/* 					"id":0,*/
/* 					"geometry":{ */
/* 					"type":"Point",*/
/* 					"coordinates":[ */
/* 						53.215555,*/
/* 					    50.187128*/
/* 					]*/
/* 					},*/
/* 					"properties":{ */
/* 						"balloonContentHeader":"<font size=3><b><a target='_blank' href='https://yandex.ru'>Здесь может быть ваша ссылка</a></b></font>",*/
/* 						"balloonContentBody":"<p>Ваше имя: <input name='login'></p><p><em>Телефон в формате 2xxx-xxx:</em>  <input></p><p><input type='submit' value='Отправить'></p>",*/
/* 						"balloonContentFooter":"<font size=1>Информация предоставлена: </font> <strong>этим балуном</strong>",*/
/* 						"clusterCaption":"<strong><s>Еще</s> одна</strong> метка",*/
/* 						"hintContent":"<strong>Текст  <s>подсказки</s></strong>"*/
/* 					}*/
/* 				}*/
/* 		  	]*/
/* 		 }*/
/* 		*/
/* 		*/
/* 		//objectManager.objects.options.set('preset', 'islands#greenDotIcon');*/
/* 		//objectManager.clusters.options.set('preset', 'islands#greenClusterIcons');*/
/* 		myMap.geoObjects.add(objectManager);*/
/* */
/* 		let circle = new ymaps.Circle([[53.193936, 50.200425], 10000], null, { draggable: true });*/
/*         */
/*     */
/* 		//objectManager.add(json);*/
/* 		*/
/* 		*/
/* 		*/
/* 		document.addEventListener('redrawMap', function(e) {*/
/* 			objectManager.removeAll()*/
/* 			console.log(e.detail)*/
/* 			*/
/* 			objectManager.add(e.detail);*/
/* 			let objects = ymaps.geoQuery(e.detail)*/
/* 			/*myMap.geoObjects.add(new ymaps.Placemark([53.201717, 50.141131], {*/
/*             balloonContent: 'цвет <strong>влюбленной жабы</strong>'*/
/*         }, {*/
/*             preset: 'islands#circleIcon',*/
/*             iconColor: '#3caa3c'*/
/*         }));*//* */
/* 			function findInside() {*/
/* 				// Объекты, попадающие в круг, будут становиться красными.*/
/* 				let objectsInsideCircle = objects.searchInside(circle);*/
/* 				//console.log(objectsInsideCircle)*/
/* 				//objectsInsideCircle.setOptions('preset', 'islands#redIcon');*/
/* 				//console.log([...objectsInsideCircle].forEach(e => console.log(e.properties.get("myID"))))*/
/* 				// Оставшиеся объекты - синими.*/
/* 				let itemsInsideRadius = []*/
/* 				objectsInsideCircle.each(e => itemsInsideRadius.push(e.properties._data.data.object_id))*/
/* 				window.App.raduisFilterItems = itemsInsideRadius*/
/* 				//objects.remove(objectsInsideCircle).setOptions('preset', 'islands#blueIcon');*/
/* 			}*/
/* 			//circle.events.add('dragend', findInside);*/
/* 			//myMap.geoObjects.add(circle);*/
/* 			*/
/* 			*/
/* 		})*/
/* 		*/
/* 		*/
/* 			*/
/* 			//findInside();*/
/* 		*/
/* 		*/
/* 		//circle.events.fire('dragend')*/
/* 		*/
/* 		*/
/* 		*/
/*     }*/
/* 	*/
/* 	*/
/* 	*/
/* </script>*/
/* */
/* {% include 'footer' %}*/
/* <script src="https://cdn.jsdelivr.net/npm/vue-slider-component@3.1.4/dist/vue-slider-component.umd.min.js"></script>*/
/* <script src="/site/theme/js/search_seo_list.js"></script>*/
/* */
/* {% endif %}*/
