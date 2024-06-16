<?php

/* layouts.search_places_twig_vue */
class __TwigTemplate_f0f332509c913aaf56044f491a0e40bdd6d1ccebd0e031dab91ccec072cc9e0c extends TwigBridge\Twig\Template
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
        $tags = array("include" => 1, "for" => 90);
        $filters = array("escape" => 3);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('include', 'for'),
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
        $this->loadTemplate("header", "layouts.search_places_twig_vue", 1)->display($context);
        // line 2
        echo "
<section class=\"search\" id=\"v-search-root\" data-find-inset=\"1\" data-lid=\"";
        // line 3
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "layout_id", array()), "html", null, true));
        echo "\">
\t<div class=\"search__wrapper\" :class=\"{'search__wrapper--fw': isFullWidthLayout}\">
\t\t<div v-show=\"isSearchShowlist\" class=\"search-item search-item--list\">
\t\t\t<div class=\"search-filters-cat\" :class=\"{'search-filters-cat--active': isCatFiltersShow}\">
\t\t\t\t<div class=\"search-filters-cat__actions\">
\t\t\t\t\t<button class=\"icon-btn filter_btn\" @click=\"isCatFiltersShow = !isCatFiltersShow\">
\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"19\" height=\"19\" viewBox=\"0 0 19 19\" fill=\"none\"><path d=\"M18.3235 2.62752C18.714 2.23699 18.714 1.60383 18.3235 1.2133C17.933 0.822779 17.2998 0.822779 16.9093 1.2133L9.58343 8.53918L2.25764 1.21339C1.86712 0.822866 1.23396 0.822865 0.84343 1.21339C0.452906 1.60391 0.452906 2.23708 0.84343 2.6276L8.16922 9.95339L0.843499 17.2791C0.452975 17.6696 0.452974 18.3028 0.843499 18.6933C1.23402 19.0838 1.86719 19.0838 2.25771 18.6933L9.58343 11.3676L16.9092 18.6934C17.2998 19.0839 17.9329 19.0839 18.3235 18.6934C18.714 18.3029 18.714 17.6697 18.3235 17.2792L10.9976 9.95339L18.3235 2.62752Z\" fill=\"#2D2727\"/></svg>
\t\t\t\t\t</button>
\t\t\t\t\t<button class=\"search-filters-btn-showitems\" :disabled=\"filteredItems.length == 0\" @click=\"isCatFiltersShow = !isCatFiltersShow\">
\t\t\t\t\t\t<span v-if=\"filteredItems.length != 0\">Показать {{filteredItems.length}} элементов</span>
\t\t\t\t\t\t<span v-else>0 элементов</span>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t\t<div class=\"serch-filters-main-cat__wrapper\">
\t\t\t\t\t<div class=\"filters__wrapper\">
\t\t\t\t\t\t<div class=\"filter__group\">
\t\t\t\t\t\t\t<div class=\"filter filter--places-type\">
\t\t\t\t\t\t\t\t<div class=\"filter__title\">Тип</div>
\t\t\t\t\t\t\t\t<div class=\"filter-radios\">
\t\t\t\t\t\t\t\t\t<div class=\"filter-radio\">
\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" value=\"\" name=\"cat-filter-places-type\" @change=\"selectedCatFilters.places.type.items = []\" id=\"cat-filter-places-type-0\">
\t\t\t\t\t\t\t\t\t\t<label for=\"cat-filter-places-type-0\">Все</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"filter-radio\" v-for=\"(item,i) in catFilters.places.types\">
\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" :value=\"item.value\" name=\"cat-filter-places-type\" @change=\"selectedCatFilters.places.type.items = [item.value]\" :id=\"`cat-filter-places-type-\${i + 1}`\">
\t\t\t\t\t\t\t\t\t\t<label :for=\"`cat-filter-places-type-\${i + 1}`\">{{item.name}}</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"filter filter--places-service\">
\t\t\t\t\t\t\t\t<div class=\"filter__title\">Удобства</div>
\t\t\t\t\t\t\t\t<div class=\"filter-radios\">
\t\t\t\t\t\t\t\t\t<div class=\"filter-radio\" v-for=\"(item,i) in catFilters.places.service\">
\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" :value=\"item.value\" name=\"cat-filter-places-service\" v-model=\"selectedCatFilters.places.service.items\" :id=\"`cat-filter-places-service-\${i + 1}`\">
\t\t\t\t\t\t\t\t\t\t<label :for=\"`cat-filter-places-service-\${i + 1}`\">{{item.name}}</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"search-main\">
\t\t\t\t<div class=\"search-top\">
\t\t\t\t\t<div class=\"cont\">
\t\t\t\t\t\t<h1 style=\"font-size:24px; padding-left: 15px; font-weight: 100; text-transform: uppercase;\">";
        // line 48
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "field_header", array()), "html", null, true));
        echo "</h1>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"search-totop\" @click=\"scrollToMap\">Карта</div>
\t\t\t\t<div class=\"search-filters\">
\t\t\t\t\t<div class=\"cont\">
\t\t\t\t\t\t<div class=\"flexer flexer--jcb flexer--aic\">
\t\t\t\t\t\t\t<city-switcher
\t\t\t\t\t\t\t\t:cities=\"filteredCities\"
\t\t\t\t\t\t\t\t:selected-city=\"shared.selectedCity\"
\t\t\t\t\t\t\t\t@set-item=\"setSelectedCity\"
\t\t\t\t\t\t\t></city-switcher>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<button class=\"icon-btn filter_btn\" @click=\"isCatFiltersShow = !isCatFiltersShow\">
\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"22\" height=\"18\" viewBox=\"0 0 22 18\" fill=\"none\"><path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M0.259521 3.46436C0.259521 2.91207 0.707237 2.46436 1.25952 2.46436H20.2595C20.8118 2.46436 21.2595 2.91207 21.2595 3.46436C21.2595 4.01664 20.8118 4.46436 20.2595 4.46436H1.25952C0.707237 4.46436 0.259521 4.01664 0.259521 3.46436Z\" fill=\"#2D2727\"/><line x1=\"1.25952\" y1=\"14.4644\" x2=\"20.2595\" y2=\"14.4644\" stroke=\"#2D2727\" stroke-width=\"2\" stroke-linecap=\"round\"/><circle cx=\"7.25952\" cy=\"14.4644\" r=\"2.95605\" fill=\"#2D2727\"/><circle cx=\"14.3887\" cy=\"3.46436\" r=\"2.95605\" fill=\"#2D2727\"/></svg>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<div class=\"filters\">
\t\t\t\t\t\t\t<div class=\"filters__wrapper\">
\t\t\t\t\t\t\t\t<div class=\"filter__group\">
\t\t\t\t\t\t\t\t\t<div class=\"filter filter--tags\">
\t\t\t\t\t\t\t\t\t\t<div class=\"tagsearch__input\">
\t\t\t\t\t\t\t\t\t\t\t<vue-tags-input
\t\t\t\t\t\t\t\t\t\t\t\tv-model=\"tag\"
\t\t\t\t\t\t\t\t\t\t\t\t:tags=\"tags\"
\t\t\t\t\t\t\t\t\t\t\t\t:autocomplete-items=\"filteredTags\"
\t\t\t\t\t\t\t\t\t\t\t\t@tags-changed=\"newTags => tags = newTags\"
\t\t\t\t\t\t\t\t\t\t\t\tplaceholder=\"Поиск...\"
\t\t\t\t\t\t\t\t\t\t\t/>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"search-list search-list--skeleton\" v-if=\"!isAppLoaded\">
\t\t\t\t\t<div class=\"search-results__wrapper\">
\t\t\t\t\t\t";
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 4));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 91
            echo "\t\t\t\t\t\t<div class=\"search-card search-card--skeleton\">
\t\t\t\t\t\t\t<div class=\"search-card__gallery\"></div>
\t\t\t\t\t\t\t<div class=\"search-card__info\">
\t\t\t\t\t\t\t\t<div class=\"search-card__text\">
\t\t\t\t\t\t\t\t\t<div class=\"search-card__title\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"search-card__infoblock search-card__infoblock--address\"> </div> 
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"search-card__actions\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"search-list\" v-cloak>
\t\t\t\t\t<div class=\"cont\">
\t\t\t\t\t\t<div class=\"search-warning\" v-show=\"filteredItems.length == 0\" v-cloak>Результатов по вашему запросу нет</div>
\t\t\t\t\t\t<transition-group 
\t\t\t\t\t\t\tmode=\"out-in\" 
\t\t\t\t\t\t\tname=\"search-transition2\" 
\t\t\t\t\t\t\ttag=\"div\" 
\t\t\t\t\t\t\tclass=\"search-results__wrapper\"
\t\t\t\t\t\t>
\t\t\t\t\t\t\t<object-card
\t\t\t\t\t\t\t\tv-for=\"item in pageItems\"
\t\t\t\t\t\t\t\t:key=\"item.id\"
\t\t\t\t\t\t\t\t:item=\"item\"
\t\t\t\t\t\t\t\t:favorites=\"shared.user?.user_favorites\"
\t\t\t\t\t\t\t\t:my-route-plan-items=\"myRoutePlanItems\"
\t\t\t\t\t\t\t\t:my-route-items=\"myRouteItems\"
\t\t\t\t\t\t\t\t@add-item-plan=\"addItemToMyRoutePlan\"
\t\t\t\t\t\t\t\t@remove-item-plan=\"removeItemFromMyRoutePlanByID\"
\t\t\t\t\t\t\t\t@show-object-on-map=\"showOnMap\"
\t\t\t\t\t\t\t\t@add-remove-fav=\"addRemoveFav\"
\t\t\t\t\t\t\t></object-card>
\t\t\t\t\t\t</transition-group>
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
\t\t\tcenter: [";
        // line 143
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "parent_page", array()), "field_coords", array()), "html", null, true));
        echo "],
\t\t\tcontrols: ['zoomControl'],
\t\t\tzoom: ";
        // line 145
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "parent_page", array()), "field_initial_zoom", array())) ? ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "parent_page", array()), "field_initial_zoom", array())) : (12)), "html", null, true));
        echo "
        }, {
            searchControlProvider: 'yandex#search'
        })
\t\t
        var\tobjectManager = new ymaps.ObjectManager({
\t\t\tclusterize: true,
\t\t\tgridSize: 32,
\t\t\t//clusterDisableClickZoom: true,
            //geoObjectOpenBalloonOnClick: false,
            clusterOpenBalloonOnClick: false
\t\t});
\t\t
\t\t
\t\t
\t\tobjectManager.objects.options.set('preset', 'islands#redStretchyIcon')
\t\tobjectManager.clusters.options.set('preset', 'islands#redClusterIcons')
\t\t
\t\t//console.log(objectManager.objects)
\t\t
\t\tfunction onObjectEvent (e) {
\t\t\tvar objectId = e.get('objectId');
\t\t\tif (e.get('type') == 'mouseenter') {
\t\t\t\t// Метод setObjectOptions позволяет задавать опции объекта \"на лету\".
\t\t\t\tobjectManager.objects.setObjectOptions(objectId, {
\t\t\t\t\tpreset: 'islands#yellowCircleDotIcon'
\t\t\t\t});
\t\t\t} else {
\t\t\t\tobjectManager.objects.setObjectOptions(objectId, {
\t\t\t\t\tpreset: 'islands#redCircleDotIcon'
\t\t\t\t});
\t\t\t}
\t\t}

\t\tfunction onClusterEvent (e) {
\t\t\tvar objectId = e.get('objectId');
\t\t\tif (e.get('type') == 'mouseenter') {
\t\t\t\tobjectManager.clusters.setClusterOptions(objectId, {
\t\t\t\t\tpreset: 'islands#yellowClusterIcons'
\t\t\t\t});
\t\t\t} else {
\t\t\t\tobjectManager.clusters.setClusterOptions(objectId, {
\t\t\t\t\tpreset: 'islands#redClusterIcons'
\t\t\t\t});
\t\t\t}
\t\t}

\t\tobjectManager.objects.events.add(['mouseenter', 'mouseleave'], onObjectEvent);
\t\tobjectManager.clusters.events.add(['mouseenter', 'mouseleave'], onClusterEvent);
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

\t\t
\t\t//objectManager.add(json);
\t\t
\t\t
\t\t
\t\t
\t\tdocument.addEventListener('redrawMap', function(e) {
\t\t\tobjectManager.removeAll()
\t\t\t//console.log(e.detail)
\t\t\tlet objects = e.detail
\t\t\t
\t\t\t
\t\t\tobjectManager.add(e.detail);
\t\t})
\t\t
\t\t
    }
\t
\t
\t
</script>
<!--script src=\"https://unpkg.com/swiper/swiper-bundle.js\"></script-->

<script src=\"https://cdn.jsdelivr.net/npm/vue-slider-component@3.1.4/dist/vue-slider-component.umd.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js\"></script>
<script src=\"/site/theme/js/search_twig.js\" type=\"module\"></script>
";
        // line 250
        $this->loadTemplate("footer", "layouts.search_places_twig_vue", 250)->display($context);
    }

    public function getTemplateName()
    {
        return "layouts.search_places_twig_vue";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  317 => 250,  209 => 145,  204 => 143,  161 => 102,  145 => 91,  141 => 90,  96 => 48,  48 => 3,  45 => 2,  43 => 1,);
    }
}
/* {% include 'header' %}*/
/* */
/* <section class="search" id="v-search-root" data-find-inset="1" data-lid="{$ page.layout_id $}">*/
/* 	<div class="search__wrapper" :class="{'search__wrapper--fw': isFullWidthLayout}">*/
/* 		<div v-show="isSearchShowlist" class="search-item search-item--list">*/
/* 			<div class="search-filters-cat" :class="{'search-filters-cat--active': isCatFiltersShow}">*/
/* 				<div class="search-filters-cat__actions">*/
/* 					<button class="icon-btn filter_btn" @click="isCatFiltersShow = !isCatFiltersShow">*/
/* 						<svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19" fill="none"><path d="M18.3235 2.62752C18.714 2.23699 18.714 1.60383 18.3235 1.2133C17.933 0.822779 17.2998 0.822779 16.9093 1.2133L9.58343 8.53918L2.25764 1.21339C1.86712 0.822866 1.23396 0.822865 0.84343 1.21339C0.452906 1.60391 0.452906 2.23708 0.84343 2.6276L8.16922 9.95339L0.843499 17.2791C0.452975 17.6696 0.452974 18.3028 0.843499 18.6933C1.23402 19.0838 1.86719 19.0838 2.25771 18.6933L9.58343 11.3676L16.9092 18.6934C17.2998 19.0839 17.9329 19.0839 18.3235 18.6934C18.714 18.3029 18.714 17.6697 18.3235 17.2792L10.9976 9.95339L18.3235 2.62752Z" fill="#2D2727"/></svg>*/
/* 					</button>*/
/* 					<button class="search-filters-btn-showitems" :disabled="filteredItems.length == 0" @click="isCatFiltersShow = !isCatFiltersShow">*/
/* 						<span v-if="filteredItems.length != 0">Показать {{filteredItems.length}} элементов</span>*/
/* 						<span v-else>0 элементов</span>*/
/* 					</button>*/
/* 				</div>*/
/* 				<div class="serch-filters-main-cat__wrapper">*/
/* 					<div class="filters__wrapper">*/
/* 						<div class="filter__group">*/
/* 							<div class="filter filter--places-type">*/
/* 								<div class="filter__title">Тип</div>*/
/* 								<div class="filter-radios">*/
/* 									<div class="filter-radio">*/
/* 										<input type="radio" value="" name="cat-filter-places-type" @change="selectedCatFilters.places.type.items = []" id="cat-filter-places-type-0">*/
/* 										<label for="cat-filter-places-type-0">Все</label>*/
/* 									</div>*/
/* 									<div class="filter-radio" v-for="(item,i) in catFilters.places.types">*/
/* 										<input type="radio" :value="item.value" name="cat-filter-places-type" @change="selectedCatFilters.places.type.items = [item.value]" :id="`cat-filter-places-type-${i + 1}`">*/
/* 										<label :for="`cat-filter-places-type-${i + 1}`">{{item.name}}</label>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="filter filter--places-service">*/
/* 								<div class="filter__title">Удобства</div>*/
/* 								<div class="filter-radios">*/
/* 									<div class="filter-radio" v-for="(item,i) in catFilters.places.service">*/
/* 										<input type="checkbox" :value="item.value" name="cat-filter-places-service" v-model="selectedCatFilters.places.service.items" :id="`cat-filter-places-service-${i + 1}`">*/
/* 										<label :for="`cat-filter-places-service-${i + 1}`">{{item.name}}</label>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="search-main">*/
/* 				<div class="search-top">*/
/* 					<div class="cont">*/
/* 						<h1 style="font-size:24px; padding-left: 15px; font-weight: 100; text-transform: uppercase;">{$ page.field_header $}</h1>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="search-totop" @click="scrollToMap">Карта</div>*/
/* 				<div class="search-filters">*/
/* 					<div class="cont">*/
/* 						<div class="flexer flexer--jcb flexer--aic">*/
/* 							<city-switcher*/
/* 								:cities="filteredCities"*/
/* 								:selected-city="shared.selectedCity"*/
/* 								@set-item="setSelectedCity"*/
/* 							></city-switcher>*/
/* 							*/
/* 							<div>*/
/* 							<button class="icon-btn filter_btn" @click="isCatFiltersShow = !isCatFiltersShow">*/
/* 								<svg xmlns="http://www.w3.org/2000/svg" width="22" height="18" viewBox="0 0 22 18" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M0.259521 3.46436C0.259521 2.91207 0.707237 2.46436 1.25952 2.46436H20.2595C20.8118 2.46436 21.2595 2.91207 21.2595 3.46436C21.2595 4.01664 20.8118 4.46436 20.2595 4.46436H1.25952C0.707237 4.46436 0.259521 4.01664 0.259521 3.46436Z" fill="#2D2727"/><line x1="1.25952" y1="14.4644" x2="20.2595" y2="14.4644" stroke="#2D2727" stroke-width="2" stroke-linecap="round"/><circle cx="7.25952" cy="14.4644" r="2.95605" fill="#2D2727"/><circle cx="14.3887" cy="3.46436" r="2.95605" fill="#2D2727"/></svg>*/
/* 							</button>*/
/* 							</div>	*/
/* 						</div>*/
/* 						<br>*/
/* 						<div class="filters">*/
/* 							<div class="filters__wrapper">*/
/* 								<div class="filter__group">*/
/* 									<div class="filter filter--tags">*/
/* 										<div class="tagsearch__input">*/
/* 											<vue-tags-input*/
/* 												v-model="tag"*/
/* 												:tags="tags"*/
/* 												:autocomplete-items="filteredTags"*/
/* 												@tags-changed="newTags => tags = newTags"*/
/* 												placeholder="Поиск..."*/
/* 											/>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* */
/* 					</div>*/
/* 				</div>*/
/* 				<div class="search-list search-list--skeleton" v-if="!isAppLoaded">*/
/* 					<div class="search-results__wrapper">*/
/* 						{% for item in 1..4 %}*/
/* 						<div class="search-card search-card--skeleton">*/
/* 							<div class="search-card__gallery"></div>*/
/* 							<div class="search-card__info">*/
/* 								<div class="search-card__text">*/
/* 									<div class="search-card__title"></div>*/
/* 									<div class="search-card__infoblock search-card__infoblock--address"> </div> */
/* 								</div>*/
/* 								<div class="search-card__actions"></div>*/
/* 							</div>*/
/* 						</div>*/
/* 						{% endfor %}*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="search-list" v-cloak>*/
/* 					<div class="cont">*/
/* 						<div class="search-warning" v-show="filteredItems.length == 0" v-cloak>Результатов по вашему запросу нет</div>*/
/* 						<transition-group */
/* 							mode="out-in" */
/* 							name="search-transition2" */
/* 							tag="div" */
/* 							class="search-results__wrapper"*/
/* 						>*/
/* 							<object-card*/
/* 								v-for="item in pageItems"*/
/* 								:key="item.id"*/
/* 								:item="item"*/
/* 								:favorites="shared.user?.user_favorites"*/
/* 								:my-route-plan-items="myRoutePlanItems"*/
/* 								:my-route-items="myRouteItems"*/
/* 								@add-item-plan="addItemToMyRoutePlan"*/
/* 								@remove-item-plan="removeItemFromMyRoutePlanByID"*/
/* 								@show-object-on-map="showOnMap"*/
/* 								@add-remove-fav="addRemoveFav"*/
/* 							></object-card>*/
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
/* 			center: [{$ page.parent_page.field_coords $}],*/
/* 			controls: ['zoomControl'],*/
/* 			zoom: {$ page.parent_page.field_initial_zoom ? page.parent_page.field_initial_zoom : 12 $}*/
/*         }, {*/
/*             searchControlProvider: 'yandex#search'*/
/*         })*/
/* 		*/
/*         var	objectManager = new ymaps.ObjectManager({*/
/* 			clusterize: true,*/
/* 			gridSize: 32,*/
/* 			//clusterDisableClickZoom: true,*/
/*             //geoObjectOpenBalloonOnClick: false,*/
/*             clusterOpenBalloonOnClick: false*/
/* 		});*/
/* 		*/
/* 		*/
/* 		*/
/* 		objectManager.objects.options.set('preset', 'islands#redStretchyIcon')*/
/* 		objectManager.clusters.options.set('preset', 'islands#redClusterIcons')*/
/* 		*/
/* 		//console.log(objectManager.objects)*/
/* 		*/
/* 		function onObjectEvent (e) {*/
/* 			var objectId = e.get('objectId');*/
/* 			if (e.get('type') == 'mouseenter') {*/
/* 				// Метод setObjectOptions позволяет задавать опции объекта "на лету".*/
/* 				objectManager.objects.setObjectOptions(objectId, {*/
/* 					preset: 'islands#yellowCircleDotIcon'*/
/* 				});*/
/* 			} else {*/
/* 				objectManager.objects.setObjectOptions(objectId, {*/
/* 					preset: 'islands#redCircleDotIcon'*/
/* 				});*/
/* 			}*/
/* 		}*/
/* */
/* 		function onClusterEvent (e) {*/
/* 			var objectId = e.get('objectId');*/
/* 			if (e.get('type') == 'mouseenter') {*/
/* 				objectManager.clusters.setClusterOptions(objectId, {*/
/* 					preset: 'islands#yellowClusterIcons'*/
/* 				});*/
/* 			} else {*/
/* 				objectManager.clusters.setClusterOptions(objectId, {*/
/* 					preset: 'islands#redClusterIcons'*/
/* 				});*/
/* 			}*/
/* 		}*/
/* */
/* 		objectManager.objects.events.add(['mouseenter', 'mouseleave'], onObjectEvent);*/
/* 		objectManager.clusters.events.add(['mouseenter', 'mouseleave'], onClusterEvent);*/
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
/* 		*/
/* 		//objectManager.add(json);*/
/* 		*/
/* 		*/
/* 		*/
/* 		*/
/* 		document.addEventListener('redrawMap', function(e) {*/
/* 			objectManager.removeAll()*/
/* 			//console.log(e.detail)*/
/* 			let objects = e.detail*/
/* 			*/
/* 			*/
/* 			objectManager.add(e.detail);*/
/* 		})*/
/* 		*/
/* 		*/
/*     }*/
/* 	*/
/* 	*/
/* 	*/
/* </script>*/
/* <!--script src="https://unpkg.com/swiper/swiper-bundle.js"></script-->*/
/* */
/* <script src="https://cdn.jsdelivr.net/npm/vue-slider-component@3.1.4/dist/vue-slider-component.umd.min.js"></script>*/
/* <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>*/
/* <script src="/site/theme/js/search_twig.js" type="module"></script>*/
/* {% include 'footer' %}*/
