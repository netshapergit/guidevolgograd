<?php

/* layouts.myroute_new */
class __TwigTemplate_84a49a735d77f3fab4edab9780b97427d1b162de7f5c310e2a7ebafa9501d1b1 extends TwigBridge\Twig\Template
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
        $filters = array("escape" => 3);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('include'),
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
        $this->loadTemplate("header", "layouts.myroute_new", 1)->display($context);
        // line 2
        echo " 
<section class=\"search search--route\" id=\"v-search-root\" data-find-inset=\"1\" data-lid=\"";
        // line 3
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "layout_id", array()), "html", null, true));
        echo "\">
\t<div class=\"search__wrapper\" :class=\"{'search__wrapper--fw': isFullWidthLayout}\">
\t\t<div v-show=\"isSearchShowlist\" class=\"search-item search-item--list\">
\t\t\t
\t\t\t<div class=\"search-main search-main--vdnh\">
\t\t\t\t
\t\t\t\t";
        // line 10
        echo "\t\t\t\t
\t\t\t\t<div class=\"route-header\">
\t\t\t\t\t<div class=\"route-header__wrapper\">
\t\t\t\t\t\t<div class=\"route-header__block\">
\t\t\t\t\t\t\t<div class=\"route-header__title\">
\t\t\t\t\t\t\t\t<input type=\"text\" :size=\"myRouteTitleInputSize\" class=\"route-header__title-input\" :value=\"myRouteTitle\" @input=\"setMyRouteTitle\" placeholdet=\"Название маршрута\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"route-header__block\">
\t\t\t\t\t\t\t<div class=\"route-header__actions\" style=\"display: flex; align-items: center; gap: 10px;\">
\t\t\t\t\t\t\t\t<select v-model=\"selectedUserRoute\">
\t\t\t\t\t\t\t\t\t<option :value=\"null\">Новый</option>
\t\t\t\t\t\t\t\t\t<option
\t\t\t\t\t\t\t\t\t\tv-for=\"routeItem in userRoutes\"
\t\t\t\t\t\t\t\t\t\t:key=\"routeItem.id\"
\t\t\t\t\t\t\t\t\t\t:value=\"routeItem\"
\t\t\t\t\t\t\t\t\t>{{routeItem.id}}</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t<div class=\"route-header__users\">
\t\t\t\t\t\t\t\t\t<button class=\"rbtn rbtn--text\" @click.stop=\"createOrUpdateRoute\">
\t\t\t\t\t\t\t\t\t\tСохранить
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"route-header__options\">
\t\t\t\t\t\t\t\t\t<button class=\"rbtn\" @click.stop=\"isGenerateRouteQuizShowed = !isGenerateRouteQuizShowed\">
\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"21\" height=\"17\" viewBox=\"0 0 21 17\" fill=\"none\">
\t\t\t\t\t\t\t\t\t\t\t<path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M0 2.95605C0 2.40377 0.447715 1.95605 1 1.95605H20C20.5523 1.95605 21 2.40377 21 2.95605C21 3.50834 20.5523 3.95605 20 3.95605H1C0.447715 3.95605 0 3.50834 0 2.95605Z\" fill=\"black\"/>
\t\t\t\t\t\t\t\t\t\t\t<line x1=\"1\" y1=\"13.9561\" x2=\"20\" y2=\"13.9561\" stroke=\"#2D2727\" stroke-width=\"2\" stroke-linecap=\"round\"/>
\t\t\t\t\t\t\t\t\t\t\t<circle cx=\"6.99902\" cy=\"13.9561\" r=\"2.95605\" fill=\"black\"/>
\t\t\t\t\t\t\t\t\t\t\t<circle cx=\"14.1279\" cy=\"2.95605\" r=\"2.95605\" fill=\"black\"/>
\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t{{shared.route}}
\t\t\t\t\t<hr>
\t\t\t\t\t{{currentRoute}}
\t\t\t\t</div>

\t\t\t\t
\t\t\t\t<div class=\"route-calendar\">
\t\t\t\t\t<div class=\"route-calendar__input\">
\t\t\t\t\t\t<v-date-picker :columns=\"\$screens({ lg: 2, sm: 1 })\" :min-date='new Date()' is-range v-model=\"myRouteDates\" @input=\"setMyRouteDays\">
\t\t\t\t\t\t\t<template v-slot=\"{ inputValue, togglePopover }\">
\t\t\t\t\t\t\t\t<div @click=\"togglePopover()\" class=\"lk-select__header\">
\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"26\" viewBox=\"0 0 24 26\" fill=\"none\">
\t\t\t\t\t\t\t\t\t\t<path d=\"M17.0551 0.00119755C17.5601 0.0319941 17.9497 0.454001 17.9362 0.955598V2.30096C21.9478 2.68042 24 4.8422 24 8.72879V19.4802C24 23.8037 21.4725 26 16.4986 26H7.50145C2.52754 26 0 23.8037 0 19.4802V8.72879C0 6.14156 0.904348 4.29025 2.75942 3.20936L2.88954 3.13706C3.15846 3.01468 3.47386 3.0259 3.73602 3.17429C4.04187 3.34742 4.22249 3.67739 4.20226 4.02608C4.18202 4.37476 3.96444 4.68201 3.64058 4.8192C2.41159 5.53212 1.83188 6.77399 1.83188 8.72879V9.07376H18.7478C19.2537 9.07376 19.6638 9.48046 19.6638 9.98216C19.6638 10.4839 19.2537 10.8906 18.7478 10.8906H1.83188V19.4802C1.83188 22.7803 3.47826 24.1487 7.50145 24.1717H16.4986C20.4638 24.1717 22.1565 22.7688 22.1565 19.4687V8.71729C22.1565 5.84259 20.8696 4.45124 17.9362 4.11777V4.99168C17.8686 5.45748 17.4574 5.79753 16.9832 5.77978C16.509 5.76204 16.1248 5.39222 16.0928 4.92269V0.875107L16.1097 0.731324C16.1475 0.542905 16.2448 0.369845 16.3895 0.238437C16.5704 0.0741765 16.8101 -0.0112815 17.0551 0.00119755ZM17.5827 18.4561L17.7303 18.4654C17.9834 18.4963 18.2209 18.6095 18.4042 18.7895C18.6241 19.0055 18.7478 19.2997 18.7478 19.6067C18.7478 20.2417 18.2287 20.7565 17.5884 20.7565C16.9481 20.7565 16.429 20.2417 16.429 19.6067C16.429 18.9716 16.9481 18.4568 17.5884 18.4568L17.5827 18.4561ZM12.0232 18.4568L12.1686 18.4657C12.7403 18.5367 13.1826 19.0205 13.1826 19.6067C13.1826 20.2417 12.6635 20.7565 12.0232 20.7565C11.3829 20.7565 10.8638 20.2417 10.8638 19.6067C10.8638 18.9716 11.3829 18.4568 12.0232 18.4568ZM6.464 18.4561L6.61145 18.4654C6.8646 18.4963 7.10202 18.6095 7.28531 18.7895C7.50526 19.0055 7.62899 19.2997 7.62899 19.6067C7.62899 20.2417 7.1099 20.7565 6.46957 20.7565C5.82924 20.7565 5.31015 20.2417 5.31015 19.6067C5.31015 18.9716 5.82924 18.4568 6.46957 18.4568L6.464 18.4561ZM17.5827 13.7995L17.7303 13.8083C17.9834 13.8393 18.2209 13.9525 18.4042 14.1325C18.6241 14.3484 18.7478 14.6427 18.7478 14.9496C18.7478 15.5847 18.2287 16.0995 17.5884 16.0995C16.9481 16.0995 16.429 15.5847 16.429 14.9496C16.429 14.3146 16.9481 13.7998 17.5884 13.7998L17.5827 13.7995ZM12.0232 13.7998L12.1686 13.8087C12.7403 13.8797 13.1826 14.3634 13.1826 14.9496C13.1826 15.5847 12.6635 16.0995 12.0232 16.0995C11.3829 16.0995 10.8638 15.5847 10.8638 14.9496C10.8638 14.3146 11.3829 13.7998 12.0232 13.7998ZM6.464 13.7995L6.61145 13.8083C6.8646 13.8393 7.10202 13.9525 7.28531 14.1325C7.50526 14.3484 7.62899 14.6427 7.62899 14.9496C7.62899 15.5847 7.1099 16.0995 6.46957 16.0995C5.82924 16.0995 5.31015 15.5847 5.31015 14.9496C5.31015 14.3146 5.82924 13.7998 6.46957 13.7998L6.464 13.7995ZM6.98551 0.138382C7.45771 0.138382 7.85454 0.490212 7.90725 0.955598V2.20897H13.1478C13.6537 2.20897 14.0638 2.61568 14.0638 3.11737C14.0638 3.61907 13.6537 4.02578 13.1478 4.02578H7.88406V4.93419C7.88408 5.17712 7.78599 5.40993 7.6117 5.58063C7.43741 5.75132 7.20145 5.84567 6.95652 5.84259L6.82259 5.82955C6.38619 5.75477 6.05785 5.37479 6.06369 4.92269V0.955598L6.08958 0.819628C6.1966 0.423364 6.56053 0.138382 6.98551 0.138382Z\" fill=\"#2D4356\"/>
\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</template>
\t\t\t\t\t\t</v-date-picker>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"route-calendar__list\" :class=\"{'route-calendar__list--long': myRouteItems.length > 5}\" v-if=\"myRouteItems.length > 5\">
\t\t\t\t\t\t<div class=\"route-calendar__listitem\" 
\t\t\t\t\t\t\t v-for=\"(day, dayIndex) in myRouteItems\" 
\t\t\t\t\t\t\t @click.stop=\"scrollTo('#day' + day.date_id.replaceAll('.', ''))\" 
\t\t\t\t\t\t\t :data-scroll=\"'#day' + day.date_id.replaceAll('.', '')\"
\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t >
\t\t\t\t\t\t\t{{ getDateText2(day.date) }}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"route-calendar__list\" v-else>
\t\t\t\t\t\t<div class=\"route-calendar__listitem\" 
\t\t\t\t\t\t\t v-for=\"(day, dayIndex) in myRouteItems\" 
\t\t\t\t\t\t\t @click.stop=\"scrollTo('#day' + day.date_id.replaceAll('.', ''))\" 
\t\t\t\t\t\t\t :data-scroll=\"'#day' + day.date_id.replaceAll('.', '')\"
\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t >
\t\t\t\t\t\t\t{{ getDateText(day.date) }}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t<div class=\"vsearch-hat\" v-cloak>
\t\t\t\t\t<div class=\"cont\">
\t\t\t\t\t\t<div class=\"vsearch-hat__header\">
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<h2 class=\"vsearch-hat__title\">Места к посещению</h2>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<button v-show=\"myRoutePlanItems.length\" @click.stop=\"generateRouteFromPlan\" class=\"rbtn rbtn--text\">
\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"23\" viewBox=\"0 0 20 23\" fill=\"none\"><path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M3.68659 6.05764C2.87114 6.48613 2.35774 7.09164 2.35774 8.04484C2.35774 9.00232 2.87643 9.61055 3.66751 10.0392C4.50276 10.4917 5.50155 10.6466 5.98867 10.6466H12.4253C12.4389 10.6466 12.4529 10.6466 12.4672 10.6466C13.2399 10.6464 14.8788 10.6459 16.3491 11.191C17.1167 11.4755 17.9051 11.9313 18.5019 12.6706C19.1112 13.4255 19.4514 14.3905 19.4514 15.5611C19.4514 16.7317 19.1112 17.6968 18.5019 18.4515C17.9051 19.1909 17.1167 19.6466 16.3491 19.9312C14.8788 20.4762 13.2399 20.4757 12.4672 20.4756C12.4529 20.4756 12.4389 20.4756 12.4253 20.4756H6.24801V18.1629H12.4253C13.2272 18.1629 14.4786 18.1522 15.5157 17.7678C16.0154 17.5825 16.397 17.3336 16.6535 17.0159C16.8973 16.7138 17.0936 16.2696 17.0936 15.5611C17.0936 14.8526 16.8973 14.4083 16.6535 14.1062C16.397 13.7885 16.0154 13.5397 15.5157 13.3545C14.4786 12.97 13.2272 12.9593 12.4253 12.9593H5.98867C5.17902 12.9593 3.7729 12.7384 2.52746 12.0635C1.23782 11.3647 0 10.0938 0 8.04484C0 5.99153 1.24313 4.71798 2.57322 4.01905C3.85857 3.34361 5.32881 3.13037 6.24801 3.13037H15.9619V5.44306H6.24801C5.61111 5.44306 4.54676 5.60562 3.68659 6.05764Z\" fill=\"black\"></path> <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M4.7128 18.7409C4.38727 18.7409 4.12337 18.9997 4.12337 19.3191C4.12337 19.6384 4.38727 19.8973 4.7128 19.8973C5.03834 19.8973 5.30224 19.6384 5.30224 19.3191C5.30224 18.9997 5.03834 18.7409 4.7128 18.7409ZM1.76562 19.3191C1.76562 17.7225 3.08512 16.4282 4.7128 16.4282C6.34047 16.4282 7.65998 17.7225 7.65998 19.3191C7.65998 20.9157 6.34047 22.2099 4.7128 22.2099C3.08512 22.2099 1.76562 20.9157 1.76562 19.3191Z\" fill=\"black\"></path> <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M14.8358 4.2867L12.1328 1.63532L13.7999 0L18.1702 4.2867L13.7999 8.57339L12.1328 6.93807L14.8358 4.2867Z\" fill=\"black\"></path></svg>
\t\t\t\t\t\t\t\tСобрать в маршрут
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"search-list search-list--route search-list--plan\">
\t\t\t\t\t<div class=\"cont\" v-cloak>
\t\t\t\t\t\t<draggable
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t:list=\"myRoutePlanItemsList\"
\t\t\t\t\t\t\t:disabled=\"false\"
\t\t\t\t\t\t\tclass=\"search-results__wrapper\"
\t\t\t\t\t\t\t:class=\"{'dragging': drag}\"
\t\t\t\t\t\t\tghost-class=\"ghost\"
\t\t\t\t\t\t\tdraggable=\".vcard--draggable\"
\t\t\t\t\t\t\tghost-class=\"dragging\"
\t\t\t\t\t\t\tgroup=\"route\"
\t\t\t\t\t\t\t@start=\"drag=true\" @end=\"drag=false\"
\t\t\t\t\t\t\t@add=\"onMyRoutePlanItemsAdd\"
\t\t\t\t\t\t  >
\t\t\t\t\t\t\t<plan-card
\t\t\t\t\t\t\t\tv-for=\"item in myRoutePlanItemsList\"
\t\t\t\t\t\t\t\t:key=\"item.id\"
\t\t\t\t\t\t\t\t:item=\"item\"
\t\t\t\t\t\t\t\t:my-route-items=\"myRouteItems\"
\t\t\t\t\t\t\t\t@add-item-to-route=\"addItemToMyRouteFromPlan\"
\t\t\t\t\t\t\t></plan-card>
\t\t\t\t\t\t\t";
        // line 171
        echo "\t\t\t\t\t\t</draggable>
\t\t\t\t\t\t<div class=\"vsearch-bt\">
\t\t\t\t\t\t\t<div class=\"cont\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t
\t\t\t\t<div style=\"position: fixed; opacity: 0; pointer-events: none;\">
\t\t\t\t\t<div id=\"map-search\" style=\"width: 200px; height: 200px;\"></div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t";
        // line 292
        echo "\t\t\t\t
\t\t\t\t
\t\t\t\t<div class=\"search-days search-list search-list--route\">
\t\t\t\t\t<div class=\"search-day\" v-for=\"(day, dayIndex) in myRouteItems\" :id=\"'day' + day.date_id.replaceAll('.', '')\" >
\t\t\t\t\t\t<div class=\"search-day-header\">
\t\t\t\t\t\t\t<div class=\"search-day-main\">
\t\t\t\t\t\t\t\t<div class=\"search-day-main__title\">{{ getDateText(day.date) }}</div>
\t\t\t\t\t\t\t\t<div class=\"search-day-main-info\">
\t\t\t\t\t\t\t\t\t<div class=\"search-day-main-info__path\" v-if=\"getDayRouteInfo(day)\">
\t\t\t\t\t\t\t\t\t\t{{ getDayRouteInfo(day).fullText }}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"search-day-main-info__count\">
\t\t\t\t\t\t\t\t\t\t<div class=\"search-day-main-info__count-icon\">
\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"27\" viewBox=\"0 0 24 27\" fill=\"none\">
\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M14.0322 23.4608C14.3107 23.0425 14.7391 22.7514 15.2184 22.6003C19.9347 21.1136 23.3514 16.7379 23.3514 11.5713C23.3514 5.18065 18.124 0 11.6757 0C5.22738 0 0 5.18065 0 11.5713C0 16.7381 3.41691 21.1139 8.13342 22.6005C8.61274 22.7515 9.04117 23.0426 9.31968 23.461L11.2597 26.3749C11.4576 26.6721 11.8942 26.6721 12.0921 26.3749L14.0322 23.4608Z\" fill=\"#336AF7\"/>
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"search-day-main-info__count-text\">
\t\t\t\t\t\t\t\t\t\t\t{{ getDayRouteInfo(day).items }}
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"search-day-mapbtn rbtn\" :class=\"{'search-day-mapbtn--selected': myRouteSelectedDay == dayIndex, 'rbtn--selected': myRouteSelectedDay == dayIndex }\" @click.stop=\"setMyRouteSelectedDay(dayIndex)\">
\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"23\" viewBox=\"0 0 20 23\" fill=\"none\">
\t\t\t\t\t\t\t\t\t<path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M3.68659 6.05764C2.87114 6.48613 2.35774 7.09164 2.35774 8.04484C2.35774 9.00232 2.87643 9.61055 3.66751 10.0392C4.50276 10.4917 5.50155 10.6466 5.98867 10.6466H12.4253C12.4389 10.6466 12.4529 10.6466 12.4672 10.6466C13.2399 10.6464 14.8788 10.6459 16.3491 11.191C17.1167 11.4755 17.9051 11.9313 18.5019 12.6706C19.1112 13.4255 19.4514 14.3905 19.4514 15.5611C19.4514 16.7317 19.1112 17.6968 18.5019 18.4515C17.9051 19.1909 17.1167 19.6466 16.3491 19.9312C14.8788 20.4762 13.2399 20.4757 12.4672 20.4756C12.4529 20.4756 12.4389 20.4756 12.4253 20.4756H6.24801V18.1629H12.4253C13.2272 18.1629 14.4786 18.1522 15.5157 17.7678C16.0154 17.5825 16.397 17.3336 16.6535 17.0159C16.8973 16.7138 17.0936 16.2696 17.0936 15.5611C17.0936 14.8526 16.8973 14.4083 16.6535 14.1062C16.397 13.7885 16.0154 13.5397 15.5157 13.3545C14.4786 12.97 13.2272 12.9593 12.4253 12.9593H5.98867C5.17902 12.9593 3.7729 12.7384 2.52746 12.0635C1.23782 11.3647 0 10.0938 0 8.04484C0 5.99153 1.24313 4.71798 2.57322 4.01905C3.85857 3.34361 5.32881 3.13037 6.24801 3.13037H15.9619V5.44306H6.24801C5.61111 5.44306 4.54676 5.60562 3.68659 6.05764Z\" fill=\"#E22C38\"/>
\t\t\t\t\t\t\t\t\t<path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M4.7128 18.7409C4.38727 18.7409 4.12337 18.9997 4.12337 19.3191C4.12337 19.6384 4.38727 19.8973 4.7128 19.8973C5.03834 19.8973 5.30224 19.6384 5.30224 19.3191C5.30224 18.9997 5.03834 18.7409 4.7128 18.7409ZM1.76562 19.3191C1.76562 17.7225 3.08512 16.4282 4.7128 16.4282C6.34047 16.4282 7.65998 17.7225 7.65998 19.3191C7.65998 20.9157 6.34047 22.2099 4.7128 22.2099C3.08512 22.2099 1.76562 20.9157 1.76562 19.3191Z\" fill=\"#E22C38\"/>
\t\t\t\t\t\t\t\t\t<path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M14.8358 4.2867L12.1328 1.63532L13.7999 0L18.1702 4.2867L13.7999 8.57339L12.1328 6.93807L14.8358 4.2867Z\" fill=\"#E22C38\"/>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"search-day-list\">
\t\t\t\t\t\t\t<draggable
\t\t\t\t\t\t\t\t:list=\"day.items\"
\t\t\t\t\t\t\t\t:disabled=\"false\"
\t\t\t\t\t\t\t\tclass=\"search-results__wrapper\"
\t\t\t\t\t\t\t\t:class=\"{'dragging': drag}\"
\t\t\t\t\t\t\t\tghost-class=\"ghost\"
\t\t\t\t\t\t\t\tdraggable=\".vcard--draggable\"
\t\t\t\t\t\t\t\tghost-class=\"dragging\"
\t\t\t\t\t\t\t\tgroup=\"route\"
\t\t\t\t\t\t\t\t:handle=\"dragHandler\"
\t\t\t\t\t\t\t\t@start=\"drag=true\" @end=\"drag=false\"
\t\t\t\t\t\t\t  >
\t\t\t\t\t\t\t\t<route-card
\t\t\t\t\t\t\t\t\tv-for=\"item in day.items\"
\t\t\t\t\t\t\t\t\t:key=\"item.id\"
\t\t\t\t\t\t\t\t\t:item=\"item\"
\t\t\t\t\t\t\t\t\t:my-route-items=\"myRouteItems\"
\t\t\t\t\t\t\t\t\t@remove-item=\"removeRouteItem\"
\t\t\t\t\t\t\t\t\t@move-item=\"({item, dayId}) => moveItemToDay(item, day.date_id, dayId)\"
\t\t\t\t\t\t\t\t></route-card>
\t\t\t\t\t\t\t\t";
        // line 440
        echo "\t\t\t\t\t\t\t</draggable>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"search-day-bottom\">
\t\t\t\t\t\t\t<div class=\"search-day-bottom__actions\">
\t\t\t\t\t\t\t\t<div class=\"search-day__add\">
\t\t\t\t\t\t\t\t\t<day-add-object @add-day-object=\"(eventPayload) => myRouteDayAddItem(eventPayload, day.date_id)\" :dayId=\"day.date_id\"></day-add-object>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<button class=\"rbtn\">
\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"37\" height=\"37\" viewBox=\"0 0 37 37\" fill=\"none\">
\t\t\t\t\t\t\t\t\t<path d=\"M19.6562 31.2188H12.7188C10.8788 31.2188 9.11423 30.4878 7.8132 29.1868C6.51216 27.8858 5.78125 26.1212 5.78125 24.2812V12.7188C5.78125 10.8788 6.51216 9.11423 7.8132 7.8132C9.11423 6.51216 10.8788 5.78125 12.7188 5.78125H24.2812C26.1212 5.78125 27.8858 6.51216 29.1868 7.8132C30.4878 9.11423 31.2188 10.8788 31.2188 12.7188V19.6562C30.0625 23.125 23.125 30.0625 19.6562 31.2188Z\" stroke=\"black\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
\t\t\t\t\t\t\t\t\t<path d=\"M19.6562 31.2188V26.5938C19.6562 24.7538 20.3872 22.9892 21.6882 21.6882C22.9892 20.3872 24.7538 19.6563 26.5938 19.6562H31.2188\" stroke=\"black\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
\t\t\t\t\t\t\t\t\t<path d=\"M10.4509 20.1154C10.3763 20.1154 10.3063 20.0874 10.2409 20.0314C10.1849 19.9754 10.1569 19.9054 10.1569 19.8214C10.1569 19.784 10.1663 19.742 10.1849 19.6954L13.5589 10.6654C13.5869 10.572 13.6383 10.4927 13.7129 10.4274C13.7969 10.3527 13.9089 10.3154 14.0489 10.3154H15.5749C15.7149 10.3154 15.8223 10.3527 15.8969 10.4274C15.9716 10.4927 16.0276 10.572 16.0649 10.6654L19.4389 19.6954C19.4483 19.742 19.4529 19.784 19.4529 19.8214C19.4529 19.9054 19.4249 19.9754 19.3689 20.0314C19.3129 20.0874 19.2476 20.1154 19.1729 20.1154H17.9549C17.8243 20.1154 17.7263 20.0874 17.6609 20.0314C17.6049 19.966 17.5676 19.9054 17.5489 19.8494L16.8909 18.1414H12.7329L12.0749 19.8494C12.0563 19.9054 12.0143 19.966 11.9489 20.0314C11.8929 20.0874 11.7996 20.1154 11.6689 20.1154H10.4509ZM13.2229 16.5314H16.4009L14.8049 12.2054L13.2229 16.5314Z\" fill=\"black\"/>
\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t<button class=\"rbtn\">
\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"19\" height=\"26\" viewBox=\"0 0 19 26\" fill=\"none\">
\t\t\t\t\t\t\t\t\t<path d=\"M9.97076 25.5594C9.93356 25.5966 9.93356 25.5966 9.89636 25.6338C9.85915 25.6338 9.85915 25.671 9.82195 25.671C9.78474 25.671 9.74754 25.7082 9.71033 25.7082C9.67313 25.7454 9.59872 25.7454 9.56152 25.7454C9.52431 25.7454 9.4499 25.7454 9.4127 25.7826C9.37549 25.7826 9.37549 25.7826 9.33829 25.7826C9.30109 25.7826 9.22668 25.7826 9.18947 25.7454C9.15227 25.7454 9.07786 25.7082 9.04066 25.7082L8.92904 25.671C8.89184 25.671 8.85463 25.6338 8.85463 25.6338C8.81743 25.5966 8.81743 25.5966 8.78023 25.5594C7.92453 24.8525 7.10603 24.0712 6.28753 23.1783C5.50624 22.3226 4.76216 21.3925 4.05527 20.4252C3.3856 19.4951 2.79033 18.5278 2.23226 17.5232C1.7114 16.5559 1.26495 15.5514 0.892904 14.5841C0.818496 14.3237 0.818496 14.1004 0.930109 13.8772C1.04172 13.654 1.22774 13.468 1.45097 13.3936C1.7114 13.3192 1.93463 13.3192 2.15785 13.4308C2.38108 13.5424 2.5671 13.7284 2.64151 13.9516C2.97635 14.8445 3.3856 15.7746 3.86925 16.6675C4.35291 17.5977 4.94818 18.4906 5.58065 19.3835C6.17592 20.2392 6.8456 21.0577 7.51528 21.8017C8.11055 22.4714 8.74302 23.1039 9.37549 23.662C10.3428 22.8063 11.3101 21.7645 12.2402 20.6484C13.1703 19.4951 14.026 18.2301 14.7701 16.928C15.477 15.663 16.0351 14.3609 16.4071 13.0587C16.742 11.8682 16.9652 10.6404 16.9652 9.4499C16.9652 8.40818 16.7792 7.44087 16.4071 6.54796C16.0351 5.61786 15.477 4.79936 14.7701 4.09248C14.0632 3.3856 13.2447 2.82753 12.3146 2.45549C11.4217 2.08344 10.4544 1.89742 9.4127 1.89742C8.37098 1.89742 7.40366 2.08344 6.51076 2.45549C5.58065 2.82753 4.76216 3.3856 4.05527 4.09248C3.34839 4.79936 2.79033 5.61786 2.41828 6.54796C2.04624 7.44087 1.86022 8.40818 1.86022 9.4499V9.74754V10.008L1.89742 10.3056L1.93463 10.6032C1.97183 10.8637 1.89742 11.0869 1.7114 11.2729C1.56258 11.4589 1.33936 11.5706 1.07893 11.6078C0.818496 11.645 0.59527 11.5705 0.409248 11.3845C0.223226 11.2357 0.111613 11.0125 0.0744087 10.7521L0.0372043 10.4172L0 10.0824V9.74754V9.4127C0 8.14775 0.26043 6.92001 0.706883 5.80388C1.19054 4.65054 1.89742 3.60882 2.75312 2.75312C3.60882 1.89742 4.65054 1.19054 5.80388 0.706882C6.92001 0.26043 8.14775 0 9.4127 0C10.6776 0 11.9054 0.26043 13.0215 0.706882C14.1749 1.19054 15.2166 1.89742 16.0723 2.75312C16.928 3.60882 17.6349 4.65054 18.1185 5.80388C18.565 6.92001 18.8254 8.14775 18.8254 9.4127C18.8254 10.7521 18.6022 12.1286 18.1929 13.5052C17.7837 14.9561 17.1512 16.4071 16.3699 17.7837C15.5514 19.2718 14.5841 20.6856 13.5052 21.9878C12.389 23.3643 11.1613 24.5549 9.97076 25.5966V25.5594ZM9.37549 5.9899C9.89636 5.9899 10.4172 6.10151 10.9009 6.28753C11.3101 6.47356 11.7194 6.69678 12.0542 7.03162L12.1658 7.14323C12.5379 7.51528 12.8355 7.92452 13.0215 8.44539C13.2075 8.92904 13.3192 9.4127 13.3192 9.97076C13.3192 10.4916 13.2075 11.0125 13.0215 11.4961C12.8355 11.9798 12.5379 12.4263 12.1658 12.7983C11.7938 13.1703 11.3845 13.468 10.9009 13.654C10.4172 13.84 9.93356 13.9516 9.37549 13.9516C8.85463 13.9516 8.33377 13.84 7.85012 13.654C7.51528 13.5052 7.18044 13.3192 6.8828 13.0959L6.58517 12.7983C6.21313 12.4263 5.91549 12.017 5.72947 11.4961C5.54345 11.0125 5.43183 10.5288 5.43183 9.97076C5.43183 9.4499 5.54345 8.92904 5.72947 8.44539C5.91549 7.96173 6.21313 7.51528 6.58517 7.18044C6.95721 6.80839 7.36646 6.51076 7.85012 6.32474C8.33377 6.13872 8.81743 6.0271 9.37549 6.0271V5.9899ZM10.7521 8.40818C10.566 8.25936 10.38 8.11055 10.1568 8.03614C9.89636 7.92453 9.63593 7.88732 9.37549 7.88732C9.07786 7.88732 8.81743 7.92453 8.5942 8.03614C8.33377 8.14775 8.11055 8.29657 7.92453 8.48259C7.7385 8.66861 7.58969 8.89184 7.47807 9.15227C7.36646 9.4127 7.32926 9.67313 7.32926 9.93356C7.32926 10.2312 7.36646 10.4916 7.47807 10.7149C7.58969 10.9753 7.7385 11.1985 7.92453 11.3845L7.99893 11.4589C8.18496 11.6078 8.37098 11.7566 8.5942 11.8682C8.85463 11.9798 9.11506 12.017 9.37549 12.017C9.67313 12.017 9.93356 11.9798 10.1568 11.8682C10.4172 11.7566 10.6404 11.6078 10.8265 11.4217C11.0125 11.2357 11.1613 11.0125 11.2729 10.7521C11.3845 10.4916 11.4217 10.2312 11.4217 9.97076C11.4217 9.67313 11.3845 9.4127 11.2729 9.18947C11.1613 8.92904 11.0125 8.70582 10.8265 8.51979L10.7521 8.44539V8.40818Z\" fill=\"black\"/>
\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t
\t\t\t\t";
        // line 492
        echo "\t\t\t\t
\t\t\t</div>
\t\t\t";
        // line 521
        echo "\t\t</div>
\t\t<div class=\"search-item search-item--map\">
\t\t\t<span class=\"search-switchmode\" @click=\"scrollToList\">Список</span>
\t\t\t<div id=\"vdnhmap\" style=\"width: 100%; height: calc(100vh);\"></div>
\t\t</div>
\t</div>
</section>
<script src=\"https://api-maps.yandex.ru/2.1/?apikey=b303c4d1-e74e-4a8d-942f-15e384f9386b&lang=ru_RU\" type=\"text/javascript\"></script>
<script src=\"https://yastatic.net/s3/mapsapi-jslibs/heatmap/0.0.1/heatmap.min.js\" type=\"text/javascript\"></script>
<script type=\"text/javascript\">
\t
    //ymaps.ready(init);
    function init(){
        // Создание карты.
\t\twindow.myMap = new ymaps.Map('map', {
\t\t\tcenter: [55.830572, 37.631125],//[";
        // line 536
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "parent_page", array()), "field_coords", array()), "html", null, true));
        echo "],
\t\t\tcontrols: ['zoomControl'],
\t\t\tzoom: 15//";
        // line 538
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
\t\t\t
\t\t\tvar objectId = e.get('objectId');
\t\t\tif (e.get('type') == 'mouseenter') {
\t\t\t\tobjectManager.objects.setObjectOptions(objectId, {
\t\t\t\t\tpreset: 'islands#yellowStretchyIcon'
\t\t\t\t});
\t\t\t} else {
\t\t\t\tobjectManager.objects.setObjectOptions(objectId, {
\t\t\t\t\tpreset: 'islands#redStretchyIcon'
\t\t\t\t});
\t\t\t}
\t\t\t
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
\t\t\t/*
\t\t\tobjects.searchInside(myMap)
        // И затем добавим найденные объекты на карту.
\t\t\t\t.addToMap(myMap);

\t\t\tmyMap.events.add('boundschange', function () {
\t\t\t\t// После каждого сдвига карты будем смотреть, какие объекты попадают в видимую область.
\t\t\t\tvar visibleObjects = objects.searchInside(myMap).objectManager.add(myMap);
\t\t\t\t// Оставшиеся объекты будем удалять с карты.
\t\t\t\tobjects.remove(visibleObjects).removeFromMap(myMap);
\t\t\t});
\t\t\t*/
\t\t\t
\t\t\tobjectManager.add(e.detail);
\t\t\t//console.log(objectManager.objects)
\t\t\t/*myMap.geoObjects.add(new ymaps.Placemark([53.201717, 50.141131], {
            balloonContent: 'цвет <strong>влюбленной жабы</strong>'
        }, {
            preset: 'islands#circleIcon',
            iconColor: '#3caa3c'
        }));*/
\t\t})\t
    }
</script>

<script src='/site/theme/js/lib_vcalendar.js'></script>
<script src=\"/site/theme/js/lib_sortable.js\"></script>
<script src=\"/site/theme/js/lib_vue_draggable.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/vue-slider-component@3.1.4/dist/vue-slider-component.umd.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js\"></script>
<script src=\"https://unpkg.com/vue-chartjs@3.4.0/dist/vue-chartjs.js\"></script>
";
        // line 664
        echo "<script src=\"/site/theme/js/route_contructor.js\" type=\"module\"></script>
";
        // line 665
        $this->loadTemplate("footer", "layouts.myroute_new", 665)->display($context);
    }

    public function getTemplateName()
    {
        return "layouts.myroute_new";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  428 => 665,  425 => 664,  299 => 538,  294 => 536,  277 => 521,  273 => 492,  245 => 440,  190 => 292,  174 => 171,  57 => 10,  48 => 3,  45 => 2,  43 => 1,);
    }
}
/* {% include 'header' %}*/
/*  */
/* <section class="search search--route" id="v-search-root" data-find-inset="1" data-lid="{$ page.layout_id $}">*/
/* 	<div class="search__wrapper" :class="{'search__wrapper--fw': isFullWidthLayout}">*/
/* 		<div v-show="isSearchShowlist" class="search-item search-item--list">*/
/* 			*/
/* 			<div class="search-main search-main--vdnh">*/
/* 				*/
/* 				{# include 'generate_route_quiz' #}*/
/* 				*/
/* 				<div class="route-header">*/
/* 					<div class="route-header__wrapper">*/
/* 						<div class="route-header__block">*/
/* 							<div class="route-header__title">*/
/* 								<input type="text" :size="myRouteTitleInputSize" class="route-header__title-input" :value="myRouteTitle" @input="setMyRouteTitle" placeholdet="Название маршрута">*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="route-header__block">*/
/* 							<div class="route-header__actions" style="display: flex; align-items: center; gap: 10px;">*/
/* 								<select v-model="selectedUserRoute">*/
/* 									<option :value="null">Новый</option>*/
/* 									<option*/
/* 										v-for="routeItem in userRoutes"*/
/* 										:key="routeItem.id"*/
/* 										:value="routeItem"*/
/* 									>{{routeItem.id}}</option>*/
/* 								</select>*/
/* 								<div class="route-header__users">*/
/* 									<button class="rbtn rbtn--text" @click.stop="createOrUpdateRoute">*/
/* 										Сохранить*/
/* 									</button>*/
/* 								</div>*/
/* 								<div class="route-header__options">*/
/* 									<button class="rbtn" @click.stop="isGenerateRouteQuizShowed = !isGenerateRouteQuizShowed">*/
/* 										<svg xmlns="http://www.w3.org/2000/svg" width="21" height="17" viewBox="0 0 21 17" fill="none">*/
/* 											<path fill-rule="evenodd" clip-rule="evenodd" d="M0 2.95605C0 2.40377 0.447715 1.95605 1 1.95605H20C20.5523 1.95605 21 2.40377 21 2.95605C21 3.50834 20.5523 3.95605 20 3.95605H1C0.447715 3.95605 0 3.50834 0 2.95605Z" fill="black"/>*/
/* 											<line x1="1" y1="13.9561" x2="20" y2="13.9561" stroke="#2D2727" stroke-width="2" stroke-linecap="round"/>*/
/* 											<circle cx="6.99902" cy="13.9561" r="2.95605" fill="black"/>*/
/* 											<circle cx="14.1279" cy="2.95605" r="2.95605" fill="black"/>*/
/* 										</svg>*/
/* 									</button>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 					{{shared.route}}*/
/* 					<hr>*/
/* 					{{currentRoute}}*/
/* 				</div>*/
/* */
/* 				*/
/* 				<div class="route-calendar">*/
/* 					<div class="route-calendar__input">*/
/* 						<v-date-picker :columns="$screens({ lg: 2, sm: 1 })" :min-date='new Date()' is-range v-model="myRouteDates" @input="setMyRouteDays">*/
/* 							<template v-slot="{ inputValue, togglePopover }">*/
/* 								<div @click="togglePopover()" class="lk-select__header">*/
/* 									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="26" viewBox="0 0 24 26" fill="none">*/
/* 										<path d="M17.0551 0.00119755C17.5601 0.0319941 17.9497 0.454001 17.9362 0.955598V2.30096C21.9478 2.68042 24 4.8422 24 8.72879V19.4802C24 23.8037 21.4725 26 16.4986 26H7.50145C2.52754 26 0 23.8037 0 19.4802V8.72879C0 6.14156 0.904348 4.29025 2.75942 3.20936L2.88954 3.13706C3.15846 3.01468 3.47386 3.0259 3.73602 3.17429C4.04187 3.34742 4.22249 3.67739 4.20226 4.02608C4.18202 4.37476 3.96444 4.68201 3.64058 4.8192C2.41159 5.53212 1.83188 6.77399 1.83188 8.72879V9.07376H18.7478C19.2537 9.07376 19.6638 9.48046 19.6638 9.98216C19.6638 10.4839 19.2537 10.8906 18.7478 10.8906H1.83188V19.4802C1.83188 22.7803 3.47826 24.1487 7.50145 24.1717H16.4986C20.4638 24.1717 22.1565 22.7688 22.1565 19.4687V8.71729C22.1565 5.84259 20.8696 4.45124 17.9362 4.11777V4.99168C17.8686 5.45748 17.4574 5.79753 16.9832 5.77978C16.509 5.76204 16.1248 5.39222 16.0928 4.92269V0.875107L16.1097 0.731324C16.1475 0.542905 16.2448 0.369845 16.3895 0.238437C16.5704 0.0741765 16.8101 -0.0112815 17.0551 0.00119755ZM17.5827 18.4561L17.7303 18.4654C17.9834 18.4963 18.2209 18.6095 18.4042 18.7895C18.6241 19.0055 18.7478 19.2997 18.7478 19.6067C18.7478 20.2417 18.2287 20.7565 17.5884 20.7565C16.9481 20.7565 16.429 20.2417 16.429 19.6067C16.429 18.9716 16.9481 18.4568 17.5884 18.4568L17.5827 18.4561ZM12.0232 18.4568L12.1686 18.4657C12.7403 18.5367 13.1826 19.0205 13.1826 19.6067C13.1826 20.2417 12.6635 20.7565 12.0232 20.7565C11.3829 20.7565 10.8638 20.2417 10.8638 19.6067C10.8638 18.9716 11.3829 18.4568 12.0232 18.4568ZM6.464 18.4561L6.61145 18.4654C6.8646 18.4963 7.10202 18.6095 7.28531 18.7895C7.50526 19.0055 7.62899 19.2997 7.62899 19.6067C7.62899 20.2417 7.1099 20.7565 6.46957 20.7565C5.82924 20.7565 5.31015 20.2417 5.31015 19.6067C5.31015 18.9716 5.82924 18.4568 6.46957 18.4568L6.464 18.4561ZM17.5827 13.7995L17.7303 13.8083C17.9834 13.8393 18.2209 13.9525 18.4042 14.1325C18.6241 14.3484 18.7478 14.6427 18.7478 14.9496C18.7478 15.5847 18.2287 16.0995 17.5884 16.0995C16.9481 16.0995 16.429 15.5847 16.429 14.9496C16.429 14.3146 16.9481 13.7998 17.5884 13.7998L17.5827 13.7995ZM12.0232 13.7998L12.1686 13.8087C12.7403 13.8797 13.1826 14.3634 13.1826 14.9496C13.1826 15.5847 12.6635 16.0995 12.0232 16.0995C11.3829 16.0995 10.8638 15.5847 10.8638 14.9496C10.8638 14.3146 11.3829 13.7998 12.0232 13.7998ZM6.464 13.7995L6.61145 13.8083C6.8646 13.8393 7.10202 13.9525 7.28531 14.1325C7.50526 14.3484 7.62899 14.6427 7.62899 14.9496C7.62899 15.5847 7.1099 16.0995 6.46957 16.0995C5.82924 16.0995 5.31015 15.5847 5.31015 14.9496C5.31015 14.3146 5.82924 13.7998 6.46957 13.7998L6.464 13.7995ZM6.98551 0.138382C7.45771 0.138382 7.85454 0.490212 7.90725 0.955598V2.20897H13.1478C13.6537 2.20897 14.0638 2.61568 14.0638 3.11737C14.0638 3.61907 13.6537 4.02578 13.1478 4.02578H7.88406V4.93419C7.88408 5.17712 7.78599 5.40993 7.6117 5.58063C7.43741 5.75132 7.20145 5.84567 6.95652 5.84259L6.82259 5.82955C6.38619 5.75477 6.05785 5.37479 6.06369 4.92269V0.955598L6.08958 0.819628C6.1966 0.423364 6.56053 0.138382 6.98551 0.138382Z" fill="#2D4356"/>*/
/* 									</svg>*/
/* 								</div>*/
/* 							</template>*/
/* 						</v-date-picker>*/
/* 					</div>*/
/* 					<div class="route-calendar__list" :class="{'route-calendar__list--long': myRouteItems.length > 5}" v-if="myRouteItems.length > 5">*/
/* 						<div class="route-calendar__listitem" */
/* 							 v-for="(day, dayIndex) in myRouteItems" */
/* 							 @click.stop="scrollTo('#day' + day.date_id.replaceAll('.', ''))" */
/* 							 :data-scroll="'#day' + day.date_id.replaceAll('.', '')"*/
/* 							 */
/* 							 >*/
/* 							{{ getDateText2(day.date) }}*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="route-calendar__list" v-else>*/
/* 						<div class="route-calendar__listitem" */
/* 							 v-for="(day, dayIndex) in myRouteItems" */
/* 							 @click.stop="scrollTo('#day' + day.date_id.replaceAll('.', ''))" */
/* 							 :data-scroll="'#day' + day.date_id.replaceAll('.', '')"*/
/* 							 */
/* 							 >*/
/* 							{{ getDateText(day.date) }}*/
/* 						</div>*/
/* 					</div>*/
/* 					*/
/* 				</div>*/
/* 				*/
/* 				*/
/* 				*/
/* 				<div class="vsearch-hat" v-cloak>*/
/* 					<div class="cont">*/
/* 						<div class="vsearch-hat__header">*/
/* 							<div>*/
/* 								<h2 class="vsearch-hat__title">Места к посещению</h2>*/
/* 							</div>*/
/* 							<button v-show="myRoutePlanItems.length" @click.stop="generateRouteFromPlan" class="rbtn rbtn--text">*/
/* 								<svg xmlns="http://www.w3.org/2000/svg" width="20" height="23" viewBox="0 0 20 23" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M3.68659 6.05764C2.87114 6.48613 2.35774 7.09164 2.35774 8.04484C2.35774 9.00232 2.87643 9.61055 3.66751 10.0392C4.50276 10.4917 5.50155 10.6466 5.98867 10.6466H12.4253C12.4389 10.6466 12.4529 10.6466 12.4672 10.6466C13.2399 10.6464 14.8788 10.6459 16.3491 11.191C17.1167 11.4755 17.9051 11.9313 18.5019 12.6706C19.1112 13.4255 19.4514 14.3905 19.4514 15.5611C19.4514 16.7317 19.1112 17.6968 18.5019 18.4515C17.9051 19.1909 17.1167 19.6466 16.3491 19.9312C14.8788 20.4762 13.2399 20.4757 12.4672 20.4756C12.4529 20.4756 12.4389 20.4756 12.4253 20.4756H6.24801V18.1629H12.4253C13.2272 18.1629 14.4786 18.1522 15.5157 17.7678C16.0154 17.5825 16.397 17.3336 16.6535 17.0159C16.8973 16.7138 17.0936 16.2696 17.0936 15.5611C17.0936 14.8526 16.8973 14.4083 16.6535 14.1062C16.397 13.7885 16.0154 13.5397 15.5157 13.3545C14.4786 12.97 13.2272 12.9593 12.4253 12.9593H5.98867C5.17902 12.9593 3.7729 12.7384 2.52746 12.0635C1.23782 11.3647 0 10.0938 0 8.04484C0 5.99153 1.24313 4.71798 2.57322 4.01905C3.85857 3.34361 5.32881 3.13037 6.24801 3.13037H15.9619V5.44306H6.24801C5.61111 5.44306 4.54676 5.60562 3.68659 6.05764Z" fill="black"></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M4.7128 18.7409C4.38727 18.7409 4.12337 18.9997 4.12337 19.3191C4.12337 19.6384 4.38727 19.8973 4.7128 19.8973C5.03834 19.8973 5.30224 19.6384 5.30224 19.3191C5.30224 18.9997 5.03834 18.7409 4.7128 18.7409ZM1.76562 19.3191C1.76562 17.7225 3.08512 16.4282 4.7128 16.4282C6.34047 16.4282 7.65998 17.7225 7.65998 19.3191C7.65998 20.9157 6.34047 22.2099 4.7128 22.2099C3.08512 22.2099 1.76562 20.9157 1.76562 19.3191Z" fill="black"></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8358 4.2867L12.1328 1.63532L13.7999 0L18.1702 4.2867L13.7999 8.57339L12.1328 6.93807L14.8358 4.2867Z" fill="black"></path></svg>*/
/* 								Собрать в маршрут*/
/* 							</button>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				*/
/* 				<div class="search-list search-list--route search-list--plan">*/
/* 					<div class="cont" v-cloak>*/
/* 						<draggable*/
/* 							*/
/* 							:list="myRoutePlanItemsList"*/
/* 							:disabled="false"*/
/* 							class="search-results__wrapper"*/
/* 							:class="{'dragging': drag}"*/
/* 							ghost-class="ghost"*/
/* 							draggable=".vcard--draggable"*/
/* 							ghost-class="dragging"*/
/* 							group="route"*/
/* 							@start="drag=true" @end="drag=false"*/
/* 							@add="onMyRoutePlanItemsAdd"*/
/* 						  >*/
/* 							<plan-card*/
/* 								v-for="item in myRoutePlanItemsList"*/
/* 								:key="item.id"*/
/* 								:item="item"*/
/* 								:my-route-items="myRouteItems"*/
/* 								@add-item-to-route="addItemToMyRouteFromPlan"*/
/* 							></plan-card>*/
/* 							{#*/
/* 							<div*/
/* 								v-for="(item, i) in myRoutePlanItemsList"*/
/* 								:key="item.path" */
/* 								class="vcard vcard--draggable"*/
/* 							>*/
/* 								<div class="vcard__wrapper">*/
/* 									<div class="vcard__left">*/
/* 										<div class="vcard__top">*/
/* 											<div class="vcard__img" :class="{'vcard__img--noimg': !isMyRouteItemHasImg(item)}" @click.stop="selectedObject = item">*/
/* 												<img :src="myRouteItemImgSrc(item)">*/
/* 											</div>*/
/* 											<div class="vcard__main">*/
/* 												<div class="vcard__main-inner">*/
/* 													<div class="vcard__main-inner__content" @click.stop="selectedObject = item">*/
/* 														<div class="vcard__main-hat">*/
/* 															<div class="vcard__main-hat__type">{{ getItemObjectType(item.layout_id) }}</div>*/
/* 														</div>*/
/* 														<div class="vcard__header">*/
/* 															<div class="vcard__title">{{item.field_header}}</div>*/
/* 														</div>*/
/* 													</div>*/
/* 													<div class="vcard__main-inner__actions">*/
/* 														<div class="vcard-move">*/
/* 															<vselect-move :items="myRouteItems" @move-item="(dayId) => addItemToMyRouteFromPlan(item, dayId)"></vselect-move>*/
/* 														</div>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 										</div>*/
/* 										<div class="vcard__desc">*/
/* 											<div class="vcard__text">*/
/* 												*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 									<div class="vcard__right">*/
/* 										<div class="vcard-remove__button" @click.stop="removeItemFromMyRoutePlanByID(item)">*/
/* 											<svg xmlns="http://www.w3.org/2000/svg" width="23" height="24" viewBox="0 0 23 24" fill="none">*/
/* 												<path d="M5.57159 17.3144C5.43017 17.173 5.35239 17.0104 5.33825 16.8265C5.35239 16.6427 5.43017 16.48 5.57159 16.3386L9.98394 11.9263L5.63523 7.57756C5.49381 7.43614 5.41603 7.27351 5.40189 7.08966C5.41603 6.90581 5.49381 6.74318 5.63523 6.60175L6.31406 5.92293C6.45548 5.78151 6.61104 5.7108 6.78075 5.7108C6.97874 5.7108 7.14844 5.78151 7.28986 5.92293L11.6386 10.2716L15.9236 5.98657C16.0651 5.84515 16.2206 5.77444 16.3903 5.77444C16.5883 5.77444 16.758 5.84515 16.8994 5.98657L17.6419 6.72903C17.7833 6.87046 17.847 7.03309 17.8328 7.21694C17.847 7.40079 17.7833 7.56342 17.6419 7.70484L13.3568 11.9899L17.7268 16.3598C17.8682 16.5013 17.9318 16.6639 17.9177 16.8477C17.9318 17.0316 17.8682 17.1942 17.7268 17.3356L17.0479 18.0145C16.9065 18.1559 16.7368 18.2266 16.5388 18.2266C16.3691 18.2266 16.2136 18.1559 16.0721 18.0145L11.7022 13.6445L7.28986 18.0569C7.14844 18.1983 6.97874 18.269 6.78075 18.269C6.61104 18.269 6.45548 18.1983 6.31406 18.0569L5.57159 17.3144Z" fill="#E85768"/>*/
/* 											</svg>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 							#}*/
/* 						</draggable>*/
/* 						<div class="vsearch-bt">*/
/* 							<div class="cont">*/
/* 								*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				*/
/* 				*/
/* 				<div style="position: fixed; opacity: 0; pointer-events: none;">*/
/* 					<div id="map-search" style="width: 200px; height: 200px;"></div>*/
/* 				</div>*/
/* 				*/
/* 				{#*/
/* 				<div class="vsearch-recs" id="vsearch-recs" data-userprefs="{$ user.field_prefs $}">*/
/* 					<div class="vsearch-hat__header">*/
/* 						<h2 class="vsearch-hat__title">Рекомендации</h2>*/
/* 						<div class="city-switcher city-switcher--vsearch-recs" style="min-width: 45px;" :class="{'city-switcher--active': isRecsOptionsDropdownShowed}" v-click-outside="closeRecsOptionsDropdown">*/
/* 							<div class="rbtn rbtn--flat" style="padding: 7px;" @click.stop="isRecsOptionsDropdownShowed = !isRecsOptionsDropdownShowed">*/
/* 								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" id="dots"><path d="M10.001 7.8a2.2 2.2 0 1 0 0 4.402A2.2 2.2 0 0 0 10 7.8zm-7 0a2.2 2.2 0 1 0 0 4.402A2.2 2.2 0 0 0 3 7.8zm14 0a2.2 2.2 0 1 0 0 4.402A2.2 2.2 0 0 0 17 7.8z"></path></svg>*/
/* 							</div>*/
/* 							<transition name="cityswitch">*/
/* 								<div class="city-switcher__list" style="min-width: 215px; left: unset; right: 0;" v-cloak v-show="isRecsOptionsDropdownShowed">*/
/* 									<div class="city-switcher__items" style="max-height: 340px;">*/
/* 										<div class="city-switcher__listitem">*/
/* 											<div class="select-item">*/
/* 												<div class="select-item__title">Радиус поиска рекомендаций</div>*/
/* 												<div class="recs-options-radius">*/
/* 													{{ recsOptions.radius.range }} м*/
/* 													<vue-slider */
/* 														ref="filter-recs-radius"*/
/* 														v-model="recsOptions.radius.range" */
/* 														:min="recsOptions.radius.min" */
/* 														:max="recsOptions.radius.max"*/
/* 														:enable-cross="false"*/
/* 														:tooltip="'active'"*/
/* 														:tooltip-placement="'bottom'"*/
/* 														:interval="500"*/
/* 														:contained="true"*/
/* 														:lazy="true"*/
/* 														:adsorb="true"*/
/* 														:marks="true"*/
/* 														:hide-label="true"*/
/* 													></vue-slider>*/
/* 												</div>*/
/* 											</div>*/
/* 										</div>*/
/* 										<div class="city-switcher__listitem">*/
/* 											<div class="select-item">*/
/* 												<div class="recs-options-enable-prefs">*/
/* 													*/
/* 													<div class="recs-options-enable-prefs__input filter--switcher">*/
/* 														<input type="checkbox" v-model="recsOptions.prefs.isEnabled" id="recs-options-enable-prefs" name="recs-options-enable-prefs" />*/
/* 														<label for="recs-options-enable-prefs">*/
/* 															<span class="checkbox-switcher"></span>*/
/* 															Использовать предпочтения*/
/* 														</label>*/
/* 													</div>*/
/* */
/* 												</div>*/
/* 											</div>*/
/* 										</div>*/
/* 										<div class="city-switcher__listitem" v-show="recsOptions.prefs.isEnabled">*/
/* 											<div class="select-item">*/
/* 												<div class="select-item__title">Предпочтения</div>*/
/* 												<div class="recs-options-prefs">*/
/* 													<div class="recs-options-prefs__item">*/
/* 														<input type="radio" name="recs-options-prefs" id="recs-options-prefs-0" value="0" v-model="recsOptions.prefs.selected">*/
/* 														<label for="recs-options-prefs-0">Из профиля</label>*/
/* 													</div>*/
/* 													<div class="recs-options-prefs__item">*/
/* 														<input type="radio" name="recs-options-prefs" id="recs-options-prefs-1" value="1" v-model="recsOptions.prefs.selected">*/
/* 														<label for="recs-options-prefs-1">Новые</label>*/
/* 													</div>*/
/* 												</div>*/
/* 												<div class="recs-options-prefs-new" v-if="recsOptions.prefs.selected == 1">*/
/* 													<div class="recs-prefs-list">*/
/* 														<div class="recs-prefs-list-item" v-for="(opt, optIndex) in gqzTagsList">*/
/* 															<input type="checkbox" name="recs-options-pref-new" :id="'recs-options-prefs-new-' + optIndex" :value="opt.value" v-model="recsOptions.prefs.newPrefs">*/
/* 															<label :for="'recs-options-prefs-new-' + optIndex">{{ opt.title }}</label>*/
/* 														</div>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 							</transition>*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="vsearch-recs-slider" v-if="getMyRouteNearRecommendations.length">*/
/* 						<div class="vsearch-recs-slider-main splide">*/
/* 						  	<div class="splide__track">*/
/* 								<div class="splide__list">*/
/* 									<div class="splide__slide vsearch-recs-slider__slide" v-for="recItem in getMyRouteNearRecommendations" :key="recItem.id">*/
/* 										<div class="vsearch-recs-card" @click.stop="selectedObject = recItem">*/
/* 											<div class="vsearch-recs-card__img" :class="{'vsearch-recs-card__img--noimg': !isMyRouteItemHasImg(recItem)}">*/
/* 												<img :src="myRouteItemImgSrc(recItem)">*/
/* 											</div>*/
/* 											<div class="vsearch-recs-card__main">*/
/* 												<div class="vsearch-recs-card__main-info">*/
/* 													<div class="vsearch-recs-card__main-info__content">*/
/* 														<div class="vcard__main-hat__type">{{ getItemObjectType(recItem.layout_id) }}</div>*/
/* 														<div class="vsearch-recs-card__title">{{ recItem.field_header }}</div>*/
/* 													</div>*/
/* 												</div>*/
/* 												<div class="vsearch-recs-card__main-actions">*/
/* 													<button class="search-day-add-list__item-btn rbtn rbtn--size-xs" @click.stop="addItemToMyRoutePlan(recItem)">*/
/* 														+*/
/* 													</button>*/
/* 												</div>*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 						  	</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				#}*/
/* 				*/
/* 				*/
/* 				<div class="search-days search-list search-list--route">*/
/* 					<div class="search-day" v-for="(day, dayIndex) in myRouteItems" :id="'day' + day.date_id.replaceAll('.', '')" >*/
/* 						<div class="search-day-header">*/
/* 							<div class="search-day-main">*/
/* 								<div class="search-day-main__title">{{ getDateText(day.date) }}</div>*/
/* 								<div class="search-day-main-info">*/
/* 									<div class="search-day-main-info__path" v-if="getDayRouteInfo(day)">*/
/* 										{{ getDayRouteInfo(day).fullText }}*/
/* 									</div>*/
/* 									<div class="search-day-main-info__count">*/
/* 										<div class="search-day-main-info__count-icon">*/
/* 											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="27" viewBox="0 0 24 27" fill="none">*/
/* 												<path d="M14.0322 23.4608C14.3107 23.0425 14.7391 22.7514 15.2184 22.6003C19.9347 21.1136 23.3514 16.7379 23.3514 11.5713C23.3514 5.18065 18.124 0 11.6757 0C5.22738 0 0 5.18065 0 11.5713C0 16.7381 3.41691 21.1139 8.13342 22.6005C8.61274 22.7515 9.04117 23.0426 9.31968 23.461L11.2597 26.3749C11.4576 26.6721 11.8942 26.6721 12.0921 26.3749L14.0322 23.4608Z" fill="#336AF7"/>*/
/* 											</svg>*/
/* 										</div>*/
/* 										<div class="search-day-main-info__count-text">*/
/* 											{{ getDayRouteInfo(day).items }}*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 									*/
/* 							</div>*/
/* 							<div class="search-day-mapbtn rbtn" :class="{'search-day-mapbtn--selected': myRouteSelectedDay == dayIndex, 'rbtn--selected': myRouteSelectedDay == dayIndex }" @click.stop="setMyRouteSelectedDay(dayIndex)">*/
/* 								<svg xmlns="http://www.w3.org/2000/svg" width="20" height="23" viewBox="0 0 20 23" fill="none">*/
/* 									<path fill-rule="evenodd" clip-rule="evenodd" d="M3.68659 6.05764C2.87114 6.48613 2.35774 7.09164 2.35774 8.04484C2.35774 9.00232 2.87643 9.61055 3.66751 10.0392C4.50276 10.4917 5.50155 10.6466 5.98867 10.6466H12.4253C12.4389 10.6466 12.4529 10.6466 12.4672 10.6466C13.2399 10.6464 14.8788 10.6459 16.3491 11.191C17.1167 11.4755 17.9051 11.9313 18.5019 12.6706C19.1112 13.4255 19.4514 14.3905 19.4514 15.5611C19.4514 16.7317 19.1112 17.6968 18.5019 18.4515C17.9051 19.1909 17.1167 19.6466 16.3491 19.9312C14.8788 20.4762 13.2399 20.4757 12.4672 20.4756C12.4529 20.4756 12.4389 20.4756 12.4253 20.4756H6.24801V18.1629H12.4253C13.2272 18.1629 14.4786 18.1522 15.5157 17.7678C16.0154 17.5825 16.397 17.3336 16.6535 17.0159C16.8973 16.7138 17.0936 16.2696 17.0936 15.5611C17.0936 14.8526 16.8973 14.4083 16.6535 14.1062C16.397 13.7885 16.0154 13.5397 15.5157 13.3545C14.4786 12.97 13.2272 12.9593 12.4253 12.9593H5.98867C5.17902 12.9593 3.7729 12.7384 2.52746 12.0635C1.23782 11.3647 0 10.0938 0 8.04484C0 5.99153 1.24313 4.71798 2.57322 4.01905C3.85857 3.34361 5.32881 3.13037 6.24801 3.13037H15.9619V5.44306H6.24801C5.61111 5.44306 4.54676 5.60562 3.68659 6.05764Z" fill="#E22C38"/>*/
/* 									<path fill-rule="evenodd" clip-rule="evenodd" d="M4.7128 18.7409C4.38727 18.7409 4.12337 18.9997 4.12337 19.3191C4.12337 19.6384 4.38727 19.8973 4.7128 19.8973C5.03834 19.8973 5.30224 19.6384 5.30224 19.3191C5.30224 18.9997 5.03834 18.7409 4.7128 18.7409ZM1.76562 19.3191C1.76562 17.7225 3.08512 16.4282 4.7128 16.4282C6.34047 16.4282 7.65998 17.7225 7.65998 19.3191C7.65998 20.9157 6.34047 22.2099 4.7128 22.2099C3.08512 22.2099 1.76562 20.9157 1.76562 19.3191Z" fill="#E22C38"/>*/
/* 									<path fill-rule="evenodd" clip-rule="evenodd" d="M14.8358 4.2867L12.1328 1.63532L13.7999 0L18.1702 4.2867L13.7999 8.57339L12.1328 6.93807L14.8358 4.2867Z" fill="#E22C38"/>*/
/* 								</svg>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="search-day-list">*/
/* 							<draggable*/
/* 								:list="day.items"*/
/* 								:disabled="false"*/
/* 								class="search-results__wrapper"*/
/* 								:class="{'dragging': drag}"*/
/* 								ghost-class="ghost"*/
/* 								draggable=".vcard--draggable"*/
/* 								ghost-class="dragging"*/
/* 								group="route"*/
/* 								:handle="dragHandler"*/
/* 								@start="drag=true" @end="drag=false"*/
/* 							  >*/
/* 								<route-card*/
/* 									v-for="item in day.items"*/
/* 									:key="item.id"*/
/* 									:item="item"*/
/* 									:my-route-items="myRouteItems"*/
/* 									@remove-item="removeRouteItem"*/
/* 									@move-item="({item, dayId}) => moveItemToDay(item, day.date_id, dayId)"*/
/* 								></route-card>*/
/* 								{#*/
/* 								<div v-for="(item, itemIndex) in day.items" class="vcard vcard--draggable" :key="item.id">*/
/* */
/* 									<div class="vcard__wrapper">*/
/* 										<div class="vcard__left">*/
/* 											<div class="vcard__top">*/
/* 												<div class="vcard__img" @click.stop="selectedObject = item">*/
/* 													<img :src="myRouteItemImgSrc(item)">*/
/* 													<div class="vcard__duration" v-if="item.field_event_duration">*/
/* 														{{ myRouteItemDurationText(item.field_event_duration) }}*/
/* 													</div>*/
/* 												</div>*/
/* 												<div class="vcard__main">*/
/* 													<div class="vcard__main-inner">*/
/* 														<div class="vcard__main-inner__content"  @click.stop="selectedObject = item">*/
/* 															<div class="vcard__main-hat">*/
/* 																<div class="vcard__main-hat__type">{{ getItemObjectType(item.layout_id) }}</div>*/
/* 															</div>*/
/* 															<div class="vcard__header">*/
/* 																<div class="vcard__title">{{item.field_header}}</div>*/
/* 															</div>*/
/* 															<div class="vcard__address">{{ item.field_address }}</div>*/
/* */
/* 															<div class="vcard__tags">*/
/* 																<div class="vcard-tag vcard-tag--time">*/
/* 																	<div class="vcard-tag__icon">*/
/* 																		<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">*/
/* 																			<path d="M10 0C12.7609 0 15.2618 1.11954 17.0711 2.92886C18.8805 4.73817 20 7.23908 20 10C20 12.7609 18.8805 15.2618 17.0711 17.0711C15.2618 18.8805 12.7609 20 10 20C7.23908 20 4.73817 18.8805 2.92886 17.0711C1.11954 15.2618 0 12.7609 0 10C0 7.23908 1.11954 4.73817 2.92886 2.92886C4.73817 1.11954 7.23908 0 10 0ZM8.33333 5.08126C8.33333 4.71289 8.63128 4.41495 8.99964 4.41495C9.368 4.41495 9.66595 4.71289 9.66595 5.08126V10.5435H15.3323C15.7006 10.5435 15.9986 10.8415 15.9986 11.2098C15.9986 11.5782 15.7006 11.8761 15.3323 11.8761H8.99783C8.62947 11.8761 8.33153 11.5782 8.33153 11.2098V5.08126H8.33333ZM16.1286 3.87324C14.5612 2.30589 12.3926 1.33442 10 1.33442C7.60563 1.33442 5.43879 2.30408 3.87143 3.87324C2.30408 5.44059 1.33261 7.60925 1.33261 10.0018C1.33261 12.3962 2.30228 14.563 3.87143 16.1304C5.43879 17.6977 7.60744 18.6692 10 18.6692C12.3944 18.6692 14.5612 17.6995 16.1286 16.1304C17.6959 14.563 18.6674 12.3944 18.6674 10.0018C18.6674 7.60925 17.6977 5.44059 16.1286 3.87324Z" fill="black"/>*/
/* 																		</svg>*/
/* 																	</div>*/
/* 																	<div class="vcard-tag__title">*/
/* 																		9:00-22:00*/
/* 																		<div class="vcard-tag__subtitle">открыто</div>*/
/* 																	</div>*/
/* 																</div>*/
/* 																<div class="vcard-tag vcard-tag--place" v-if="item.field_address">*/
/* 																	<div class="vcard-tag__icon">*/
/* 																		<svg xmlns="http://www.w3.org/2000/svg" width="18" height="24" viewBox="0 0 18 24" fill="none">*/
/* 																			<path d="M9.28139 23.7922C9.24675 23.8268 9.24675 23.8268 9.21212 23.8615C9.17749 23.8615 9.17749 23.8961 9.14286 23.8961C9.10823 23.8961 9.07359 23.9307 9.03896 23.9307C9.00433 23.9654 8.93506 23.9654 8.90043 23.9654C8.8658 23.9654 8.79654 23.9654 8.7619 24C8.72727 24 8.72727 24 8.69264 24C8.65801 24 8.58874 24 8.55411 23.9654C8.51948 23.9654 8.45022 23.9307 8.41558 23.9307L8.31169 23.8961C8.27706 23.8961 8.24242 23.8615 8.24242 23.8615C8.20779 23.8268 8.20779 23.8268 8.17316 23.7922C7.37662 23.1342 6.61472 22.4069 5.85281 21.5758C5.12554 20.7792 4.4329 19.9134 3.77489 19.013C3.15152 18.1472 2.5974 17.2468 2.07792 16.3117C1.59307 15.4113 1.17749 14.4762 0.831169 13.5758C0.761905 13.3333 0.761905 13.1255 0.865801 12.9177C0.969697 12.71 1.14286 12.5368 1.35065 12.4675C1.59307 12.3983 1.80087 12.3983 2.00866 12.5022C2.21645 12.6061 2.38961 12.7792 2.45887 12.987C2.77056 13.8182 3.15152 14.684 3.60173 15.5152C4.05195 16.381 4.60606 17.2121 5.19481 18.0433C5.74892 18.8398 6.37229 19.6017 6.99567 20.2944C7.54978 20.9177 8.13853 21.5065 8.72727 22.026C9.62771 21.2294 10.5281 20.2597 11.3939 19.2208C12.2597 18.1472 13.0563 16.9697 13.7489 15.7576C14.4069 14.5801 14.9264 13.368 15.2727 12.1558C15.5844 11.0476 15.7922 9.90476 15.7922 8.79654C15.7922 7.82684 15.619 6.92641 15.2727 6.09524C14.9264 5.22944 14.4069 4.46753 13.7489 3.80952C13.0909 3.15152 12.329 2.63203 11.4632 2.28571C10.632 1.93939 9.7316 1.76623 8.7619 1.76623C7.79221 1.76623 6.89177 1.93939 6.06061 2.28571C5.19481 2.63203 4.4329 3.15152 3.77489 3.80952C3.11688 4.46753 2.5974 5.22944 2.25108 6.09524C1.90476 6.92641 1.7316 7.82684 1.7316 8.79654V9.07359V9.31602L1.76623 9.59307L1.80087 9.87013C1.8355 10.1126 1.76623 10.3203 1.59307 10.4935C1.45455 10.6667 1.24675 10.7706 1.00433 10.8052C0.761905 10.8398 0.554113 10.7706 0.380952 10.5974C0.207792 10.4589 0.103896 10.2511 0.0692641 10.0087L0.034632 9.69697L0 9.38528V9.07359V8.7619C0 7.58442 0.242424 6.44156 0.658009 5.4026C1.10823 4.329 1.76623 3.35931 2.56277 2.56277C3.35931 1.76623 4.329 1.10823 5.4026 0.658009C6.44156 0.242424 7.58442 0 8.7619 0C9.93939 0 11.0823 0.242424 12.1212 0.658009C13.1948 1.10823 14.1645 1.76623 14.961 2.56277C15.7576 3.35931 16.4156 4.329 16.8658 5.4026C17.2814 6.44156 17.5238 7.58442 17.5238 8.7619C17.5238 10.0087 17.316 11.29 16.9351 12.5714C16.5541 13.9221 15.9654 15.2727 15.2381 16.5541C14.4762 17.9394 13.5758 19.2554 12.5714 20.4675C11.5325 21.7489 10.3896 22.8571 9.28139 23.8268V23.7922ZM8.72727 5.57576C9.21212 5.57576 9.69697 5.67965 10.1472 5.85281C10.5281 6.02597 10.9091 6.23377 11.2208 6.54545L11.3247 6.64935C11.671 6.99567 11.9481 7.37662 12.1212 7.86147C12.2944 8.31169 12.3983 8.7619 12.3983 9.28139C12.3983 9.76623 12.2944 10.2511 12.1212 10.7013C11.9481 11.1515 11.671 11.5671 11.3247 11.9134C10.9784 12.2597 10.5974 12.5368 10.1472 12.71C9.69697 12.8831 9.24675 12.987 8.72727 12.987C8.24242 12.987 7.75758 12.8831 7.30736 12.71C6.99567 12.5714 6.68398 12.3983 6.40693 12.1905L6.12987 11.9134C5.78355 11.5671 5.50649 11.1861 5.33333 10.7013C5.16017 10.2511 5.05628 9.80087 5.05628 9.28139C5.05628 8.79654 5.16017 8.31169 5.33333 7.86147C5.50649 7.41126 5.78355 6.99567 6.12987 6.68398C6.47619 6.33766 6.85714 6.06061 7.30736 5.88745C7.75758 5.71429 8.20779 5.61039 8.72727 5.61039V5.57576ZM10.0087 7.82684C9.8355 7.68831 9.66234 7.54978 9.45455 7.48052C9.21212 7.37662 8.9697 7.34199 8.72727 7.34199C8.45022 7.34199 8.20779 7.37662 8 7.48052C7.75758 7.58442 7.54978 7.72294 7.37662 7.8961C7.20346 8.06926 7.06493 8.27706 6.96104 8.51948C6.85714 8.7619 6.82251 9.00433 6.82251 9.24675C6.82251 9.52381 6.85714 9.76623 6.96104 9.97403C7.06493 10.2165 7.20346 10.4242 7.37662 10.5974L7.44589 10.6667C7.61905 10.8052 7.79221 10.9437 8 11.0476C8.24242 11.1515 8.48485 11.1861 8.72727 11.1861C9.00433 11.1861 9.24675 11.1515 9.45455 11.0476C9.69697 10.9437 9.90476 10.8052 10.0779 10.632C10.2511 10.4589 10.3896 10.2511 10.4935 10.0087C10.5974 9.76623 10.632 9.52381 10.632 9.28139C10.632 9.00433 10.5974 8.7619 10.4935 8.55411C10.3896 8.31169 10.2511 8.1039 10.0779 7.93074L10.0087 7.86147V7.82684Z" fill="#2B2A29"/>*/
/* 																		</svg>*/
/* 																	</div>*/
/* 																	<div class="vcard-tag__title">{{item.field_address}}</div>*/
/* 																</div>*/
/* 																<div class="vcard-tag vcard-tag--price">*/
/* 																	<div class="vcard-tag__icon">*/
/* 																		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">*/
/* 																			<path d="M10.3263 7.05947H12.1406C13.0972 7.05947 13.691 7.35641 14.0209 7.78508C14.3837 8.21405 14.4827 8.80791 14.4827 9.40148C14.4827 10.1934 14.2848 10.787 13.8889 11.1499C13.4931 11.5129 12.8993 11.7106 12.1406 11.7106H10.3263V7.05947Z" fill="#336AF7"/>*/
/* 																			<path fill-rule="evenodd" clip-rule="evenodd" d="M12 24C18.6274 24 24 18.6276 24 12C24 5.37269 18.6274 0 12 0C5.37258 0 0 5.37269 0 12C0 18.6276 5.37258 24 12 24ZM12.1406 13.327C13.3612 13.327 14.3838 12.9644 15.0765 12.2716H15.1095C15.7693 11.6117 16.1651 10.6221 16.1651 9.40148C16.1651 8.28006 15.8682 7.22437 15.1095 6.46561C14.4498 5.83888 13.5261 5.44307 12.1736 5.44307H9.66659C9.40269 5.44307 9.13879 5.57511 8.97385 5.74C8.77593 5.93776 8.67696 6.16868 8.67696 6.43275V14.7457H8.51202C8.28111 14.7457 8.08319 14.8114 7.91825 14.9766C7.8903 15.0115 7.86382 15.0478 7.83946 15.0856C7.74881 15.2267 7.68734 15.3881 7.68734 15.5702C7.68734 15.8011 7.75332 15.9991 7.91825 16.164C8.08319 16.2961 8.28111 16.3949 8.51202 16.3949H8.67696V18.2094C8.67696 18.4403 8.77593 18.6381 8.90787 18.803C9.07281 18.9679 9.27075 19.067 9.50164 19.067C9.73256 19.067 9.93048 18.9679 10.0954 18.803C10.2274 18.6381 10.3263 18.4403 10.3263 18.2094V16.3949H13.922C14.1529 16.3949 14.3508 16.3289 14.5157 16.164C14.6477 15.9991 14.7466 15.8011 14.7466 15.5702C14.7466 15.3392 14.6807 15.1415 14.5157 14.9766C14.3508 14.8446 14.1529 14.7457 13.922 14.7457H10.3263V13.327H12.1406Z" fill="#336AF7"/>*/
/* 																		</svg>*/
/* 																	</div>*/
/* 																	*/
/* 																</div>*/
/* 																<div class="vcard-tag vcard-tag--workload" @click.stop="myRouteItemSwitchWorkLoad(item)">*/
/* 																	<div class="vcard-tag__icon">*/
/* 																		<span class="workload-icon" :class="myRouteItemWorkloadClass(item.field_event_workload_percent)"></span>*/
/* 																	</div>*/
/* 																	*/
/* 																</div>*/
/* 															</div>*/
/* 														</div>*/
/* 														<div class="vcard__main-inner__actions">*/
/* 															<div class="vcard-move">*/
/* 																<vselect-move :items="myRouteItems" :day_id="day.date_id" @move-item="(dayId) => moveItemToDay(item, day.date_id, dayId)"></vselect-move>*/
/* 															</div>*/
/* 														</div>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="vcard__desc">*/
/* 												<div class="vcard__text">*/
/* */
/* 												</div>*/
/* 											</div>*/
/* 										</div>*/
/* 										<div class="vcard__right">*/
/* 											<div class="vcard-remove__button" @click.stop="removeItemFromMyRouteByID(item.id)">*/
/* 												<svg xmlns="http://www.w3.org/2000/svg" width="23" height="24" viewBox="0 0 23 24" fill="none">*/
/* 													<path d="M5.57159 17.3144C5.43017 17.173 5.35239 17.0104 5.33825 16.8265C5.35239 16.6427 5.43017 16.48 5.57159 16.3386L9.98394 11.9263L5.63523 7.57756C5.49381 7.43614 5.41603 7.27351 5.40189 7.08966C5.41603 6.90581 5.49381 6.74318 5.63523 6.60175L6.31406 5.92293C6.45548 5.78151 6.61104 5.7108 6.78075 5.7108C6.97874 5.7108 7.14844 5.78151 7.28986 5.92293L11.6386 10.2716L15.9236 5.98657C16.0651 5.84515 16.2206 5.77444 16.3903 5.77444C16.5883 5.77444 16.758 5.84515 16.8994 5.98657L17.6419 6.72903C17.7833 6.87046 17.847 7.03309 17.8328 7.21694C17.847 7.40079 17.7833 7.56342 17.6419 7.70484L13.3568 11.9899L17.7268 16.3598C17.8682 16.5013 17.9318 16.6639 17.9177 16.8477C17.9318 17.0316 17.8682 17.1942 17.7268 17.3356L17.0479 18.0145C16.9065 18.1559 16.7368 18.2266 16.5388 18.2266C16.3691 18.2266 16.2136 18.1559 16.0721 18.0145L11.7022 13.6445L7.28986 18.0569C7.14844 18.1983 6.97874 18.269 6.78075 18.269C6.61104 18.269 6.45548 18.1983 6.31406 18.0569L5.57159 17.3144Z" fill="#E85768"/>*/
/* 												</svg>*/
/* 											</div>*/
/* 											*/
/* 										</div>*/
/* 									</div>*/
/* 									<div class="vcard__bottom" v-if="getDayRouteInfo(day, true)[itemIndex]">*/
/* 										<div class="vcard-path">*/
/* 											<div class="vcard-path__icon">*/
/* 												<svg xmlns="http://www.w3.org/2000/svg" width="18" height="23" viewBox="0 0 23 30" fill="none">*/
/* 													<path fill-rule="evenodd" clip-rule="evenodd" d="M14.0321 0.0148948C15.5874 0.173879 16.7175 1.56326 16.5585 3.11854C16.3996 4.67382 15.0102 5.80399 13.4549 5.645C11.9013 5.48602 10.7694 4.09664 10.9284 2.54136C11.0874 0.987808 12.4768 -0.144089 14.0321 0.0148948ZM0.777639 29.1919C0.349074 29.1919 0 28.8446 0 28.4143C0 27.9857 0.347345 27.6366 0.777639 27.6366H16.4497C16.3114 27.3066 16.168 26.9281 16.0038 26.503C15.0102 23.9212 13.8645 21.4345 12.8708 18.8735C12.3541 20.1471 11.789 21.3965 11.1842 22.5958C11.1185 22.7271 11.0356 22.8464 10.9457 22.938C10.925 22.9794 10.8973 23.0105 10.8662 23.0313C9.79653 23.6862 8.01488 24.4103 7.05579 24.8561C4.99937 25.81 3.84501 26.1021 3.36633 25.1378C2.83754 24.0768 3.74478 23.4132 5.69925 22.2657C6.41986 21.8424 7.42905 21.1995 8.33975 20.6448L9.39561 14.8903C9.39906 14.8626 9.40253 14.8367 9.40772 14.809C9.68939 13.2641 9.95205 11.8246 10.1974 10.4836L10.4152 9.28608L9.08629 9.53665L7.84552 9.76995L7.80059 11.3321C7.7522 13.0015 7.68654 13.8707 6.77411 13.8569C5.89106 13.843 5.76318 13.0429 5.64913 11.3753C5.59556 10.5977 5.58173 10.0084 5.49532 9.11327C5.43657 8.51881 5.54544 7.99002 6.27469 7.85523C6.29197 7.84831 6.30924 7.84313 6.32825 7.83794C7.01603 7.63921 7.74874 7.42666 8.52983 7.20028C9.36623 6.95835 10.4152 6.61964 11.3795 6.34142C11.5333 6.27921 11.7061 6.25156 11.8823 6.26884C12.482 6.32932 13.0799 6.39154 13.6795 6.45202C14.2792 6.5125 14.8771 6.57471 15.4768 6.63692C15.6254 6.65248 15.7653 6.69913 15.8863 6.76826C16.0885 6.78727 16.327 6.98773 16.479 7.28496C16.9335 8.18011 17.3569 9.01304 17.7527 9.78895L18.2382 10.7446L19.562 10.2313C21.119 9.62651 21.945 9.35002 22.2872 10.1968C22.6172 11.0159 21.9294 11.4462 20.4381 12.1979C19.7417 12.5487 19.2042 12.7906 18.4145 13.2192C17.8892 13.5043 17.3586 13.6098 16.9508 12.9894C16.9318 12.9669 16.9128 12.941 16.8972 12.9151L16.2544 11.9059L16.1697 15.5055C16.1697 15.5279 16.168 15.5504 16.1663 15.5729C16.9715 19.0031 17.8494 22.2485 18.6426 25.6372C19.1057 27.6142 19.4583 28.632 18.5631 29.0485C18.4352 29.1418 18.278 29.1971 18.1069 29.1971H18.0499C17.9358 29.2127 17.8304 29.2127 17.7319 29.1971H0.784558L0.777639 29.1919Z" fill="#E85768"/>*/
/* 												</svg>*/
/* 											</div>*/
/* 											{{ getDayRouteInfo(day, true)[itemIndex].fullText }}*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 								#}*/
/* 							</draggable>*/
/* 						</div>*/
/* 						<div class="search-day-bottom">*/
/* 							<div class="search-day-bottom__actions">*/
/* 								<div class="search-day__add">*/
/* 									<day-add-object @add-day-object="(eventPayload) => myRouteDayAddItem(eventPayload, day.date_id)" :dayId="day.date_id"></day-add-object>*/
/* 									*/
/* 								</div>*/
/* 								<button class="rbtn">*/
/* 									<svg xmlns="http://www.w3.org/2000/svg" width="37" height="37" viewBox="0 0 37 37" fill="none">*/
/* 									<path d="M19.6562 31.2188H12.7188C10.8788 31.2188 9.11423 30.4878 7.8132 29.1868C6.51216 27.8858 5.78125 26.1212 5.78125 24.2812V12.7188C5.78125 10.8788 6.51216 9.11423 7.8132 7.8132C9.11423 6.51216 10.8788 5.78125 12.7188 5.78125H24.2812C26.1212 5.78125 27.8858 6.51216 29.1868 7.8132C30.4878 9.11423 31.2188 10.8788 31.2188 12.7188V19.6562C30.0625 23.125 23.125 30.0625 19.6562 31.2188Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>*/
/* 									<path d="M19.6562 31.2188V26.5938C19.6562 24.7538 20.3872 22.9892 21.6882 21.6882C22.9892 20.3872 24.7538 19.6563 26.5938 19.6562H31.2188" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>*/
/* 									<path d="M10.4509 20.1154C10.3763 20.1154 10.3063 20.0874 10.2409 20.0314C10.1849 19.9754 10.1569 19.9054 10.1569 19.8214C10.1569 19.784 10.1663 19.742 10.1849 19.6954L13.5589 10.6654C13.5869 10.572 13.6383 10.4927 13.7129 10.4274C13.7969 10.3527 13.9089 10.3154 14.0489 10.3154H15.5749C15.7149 10.3154 15.8223 10.3527 15.8969 10.4274C15.9716 10.4927 16.0276 10.572 16.0649 10.6654L19.4389 19.6954C19.4483 19.742 19.4529 19.784 19.4529 19.8214C19.4529 19.9054 19.4249 19.9754 19.3689 20.0314C19.3129 20.0874 19.2476 20.1154 19.1729 20.1154H17.9549C17.8243 20.1154 17.7263 20.0874 17.6609 20.0314C17.6049 19.966 17.5676 19.9054 17.5489 19.8494L16.8909 18.1414H12.7329L12.0749 19.8494C12.0563 19.9054 12.0143 19.966 11.9489 20.0314C11.8929 20.0874 11.7996 20.1154 11.6689 20.1154H10.4509ZM13.2229 16.5314H16.4009L14.8049 12.2054L13.2229 16.5314Z" fill="black"/>*/
/* 									</svg>*/
/* 								</button>*/
/* 								<button class="rbtn">*/
/* 									<svg xmlns="http://www.w3.org/2000/svg" width="19" height="26" viewBox="0 0 19 26" fill="none">*/
/* 									<path d="M9.97076 25.5594C9.93356 25.5966 9.93356 25.5966 9.89636 25.6338C9.85915 25.6338 9.85915 25.671 9.82195 25.671C9.78474 25.671 9.74754 25.7082 9.71033 25.7082C9.67313 25.7454 9.59872 25.7454 9.56152 25.7454C9.52431 25.7454 9.4499 25.7454 9.4127 25.7826C9.37549 25.7826 9.37549 25.7826 9.33829 25.7826C9.30109 25.7826 9.22668 25.7826 9.18947 25.7454C9.15227 25.7454 9.07786 25.7082 9.04066 25.7082L8.92904 25.671C8.89184 25.671 8.85463 25.6338 8.85463 25.6338C8.81743 25.5966 8.81743 25.5966 8.78023 25.5594C7.92453 24.8525 7.10603 24.0712 6.28753 23.1783C5.50624 22.3226 4.76216 21.3925 4.05527 20.4252C3.3856 19.4951 2.79033 18.5278 2.23226 17.5232C1.7114 16.5559 1.26495 15.5514 0.892904 14.5841C0.818496 14.3237 0.818496 14.1004 0.930109 13.8772C1.04172 13.654 1.22774 13.468 1.45097 13.3936C1.7114 13.3192 1.93463 13.3192 2.15785 13.4308C2.38108 13.5424 2.5671 13.7284 2.64151 13.9516C2.97635 14.8445 3.3856 15.7746 3.86925 16.6675C4.35291 17.5977 4.94818 18.4906 5.58065 19.3835C6.17592 20.2392 6.8456 21.0577 7.51528 21.8017C8.11055 22.4714 8.74302 23.1039 9.37549 23.662C10.3428 22.8063 11.3101 21.7645 12.2402 20.6484C13.1703 19.4951 14.026 18.2301 14.7701 16.928C15.477 15.663 16.0351 14.3609 16.4071 13.0587C16.742 11.8682 16.9652 10.6404 16.9652 9.4499C16.9652 8.40818 16.7792 7.44087 16.4071 6.54796C16.0351 5.61786 15.477 4.79936 14.7701 4.09248C14.0632 3.3856 13.2447 2.82753 12.3146 2.45549C11.4217 2.08344 10.4544 1.89742 9.4127 1.89742C8.37098 1.89742 7.40366 2.08344 6.51076 2.45549C5.58065 2.82753 4.76216 3.3856 4.05527 4.09248C3.34839 4.79936 2.79033 5.61786 2.41828 6.54796C2.04624 7.44087 1.86022 8.40818 1.86022 9.4499V9.74754V10.008L1.89742 10.3056L1.93463 10.6032C1.97183 10.8637 1.89742 11.0869 1.7114 11.2729C1.56258 11.4589 1.33936 11.5706 1.07893 11.6078C0.818496 11.645 0.59527 11.5705 0.409248 11.3845C0.223226 11.2357 0.111613 11.0125 0.0744087 10.7521L0.0372043 10.4172L0 10.0824V9.74754V9.4127C0 8.14775 0.26043 6.92001 0.706883 5.80388C1.19054 4.65054 1.89742 3.60882 2.75312 2.75312C3.60882 1.89742 4.65054 1.19054 5.80388 0.706882C6.92001 0.26043 8.14775 0 9.4127 0C10.6776 0 11.9054 0.26043 13.0215 0.706882C14.1749 1.19054 15.2166 1.89742 16.0723 2.75312C16.928 3.60882 17.6349 4.65054 18.1185 5.80388C18.565 6.92001 18.8254 8.14775 18.8254 9.4127C18.8254 10.7521 18.6022 12.1286 18.1929 13.5052C17.7837 14.9561 17.1512 16.4071 16.3699 17.7837C15.5514 19.2718 14.5841 20.6856 13.5052 21.9878C12.389 23.3643 11.1613 24.5549 9.97076 25.5966V25.5594ZM9.37549 5.9899C9.89636 5.9899 10.4172 6.10151 10.9009 6.28753C11.3101 6.47356 11.7194 6.69678 12.0542 7.03162L12.1658 7.14323C12.5379 7.51528 12.8355 7.92452 13.0215 8.44539C13.2075 8.92904 13.3192 9.4127 13.3192 9.97076C13.3192 10.4916 13.2075 11.0125 13.0215 11.4961C12.8355 11.9798 12.5379 12.4263 12.1658 12.7983C11.7938 13.1703 11.3845 13.468 10.9009 13.654C10.4172 13.84 9.93356 13.9516 9.37549 13.9516C8.85463 13.9516 8.33377 13.84 7.85012 13.654C7.51528 13.5052 7.18044 13.3192 6.8828 13.0959L6.58517 12.7983C6.21313 12.4263 5.91549 12.017 5.72947 11.4961C5.54345 11.0125 5.43183 10.5288 5.43183 9.97076C5.43183 9.4499 5.54345 8.92904 5.72947 8.44539C5.91549 7.96173 6.21313 7.51528 6.58517 7.18044C6.95721 6.80839 7.36646 6.51076 7.85012 6.32474C8.33377 6.13872 8.81743 6.0271 9.37549 6.0271V5.9899ZM10.7521 8.40818C10.566 8.25936 10.38 8.11055 10.1568 8.03614C9.89636 7.92453 9.63593 7.88732 9.37549 7.88732C9.07786 7.88732 8.81743 7.92453 8.5942 8.03614C8.33377 8.14775 8.11055 8.29657 7.92453 8.48259C7.7385 8.66861 7.58969 8.89184 7.47807 9.15227C7.36646 9.4127 7.32926 9.67313 7.32926 9.93356C7.32926 10.2312 7.36646 10.4916 7.47807 10.7149C7.58969 10.9753 7.7385 11.1985 7.92453 11.3845L7.99893 11.4589C8.18496 11.6078 8.37098 11.7566 8.5942 11.8682C8.85463 11.9798 9.11506 12.017 9.37549 12.017C9.67313 12.017 9.93356 11.9798 10.1568 11.8682C10.4172 11.7566 10.6404 11.6078 10.8265 11.4217C11.0125 11.2357 11.1613 11.0125 11.2729 10.7521C11.3845 10.4916 11.4217 10.2312 11.4217 9.97076C11.4217 9.67313 11.3845 9.4127 11.2729 9.18947C11.1613 8.92904 11.0125 8.70582 10.8265 8.51979L10.7521 8.44539V8.40818Z" fill="black"/>*/
/* 									</svg>*/
/* 								</button>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				*/
/* 				*/
/* 				{#*/
/* 				<div class="route-budget">*/
/* 					<div class="cont">*/
/* 						<div class="route-hat__wrapper">*/
/* 							<div class="vsearch-hat__header">*/
/* 								<div class="vsearch-hat__header-flex">*/
/* 									<div class="vsearch-hat__header-flex__block">*/
/* 										<button class="rbtn rbtn--flat rbtn--size-xs">*/
/* 											<svg xmlns="http://www.w3.org/2000/svg" width="16" height="10" viewBox="0 0 16 10" fill="none">*/
/* 												<path d="M9.00397 9.00939L15.0106 3.00272C15.1434 2.87103 15.2488 2.71434 15.3207 2.54171C15.3927 2.36907 15.4297 2.18391 15.4297 1.99689C15.4297 1.80987 15.3927 1.62471 15.3207 1.45207C15.2488 1.27944 15.1434 1.12276 15.0106 0.991058C14.7452 0.727202 14.3862 0.579102 14.0119 0.579102C13.6376 0.579101 13.2786 0.727202 13.0131 0.991057L7.99814 6.00606L2.98314 0.991057C2.71771 0.727202 2.35865 0.579101 1.98439 0.579101C1.61013 0.579101 1.25107 0.727201 0.985639 0.991057C0.85434 1.12343 0.750463 1.28042 0.679963 1.45302C0.609464 1.62563 0.573729 1.81045 0.574806 1.99689C0.573728 2.18333 0.609464 2.36815 0.679963 2.54076C0.750462 2.71336 0.854339 2.87035 0.985639 3.00272L6.99231 9.00939C7.124 9.14217 7.28069 9.24756 7.45332 9.31949C7.62596 9.39141 7.81112 9.42844 7.99814 9.42844C8.18516 9.42844 8.37032 9.39141 8.54296 9.31949C8.71559 9.24756 8.87228 9.14217 9.00397 9.00939Z" fill="black"/>*/
/* 											</svg>*/
/* 										</button>*/
/* 									</div>*/
/* 									<h2 class="vsearch-hat__title">Бюджет</h2>*/
/* 								</div>*/
/* 								<div class="route-budget__total">*/
/* 									{{totalBudget}} ₽*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="route-budget__days">*/
/* 							<route-budget-day v-for="butgetDay in myRouteItems" :item="butgetDay"></route-budget-day>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				#}*/
/* 				*/
/* 			</div>*/
/* 			{#*/
/* 			<transition name="slideup">*/
/* 				<div class="vpreview" v-if="selectedObject" v-cloak>*/
/* 					<div class="vpreview__content">*/
/* 						<div class="vpreview__closer rbtn" @click.stop="selectedObject = null">*/
/* 							<svg xmlns="http://www.w3.org/2000/svg" width="23" height="24" viewBox="0 0 23 24" fill="none"><path d="M5.57159 17.3144C5.43017 17.173 5.35239 17.0104 5.33825 16.8265C5.35239 16.6427 5.43017 16.48 5.57159 16.3386L9.98394 11.9263L5.63523 7.57756C5.49381 7.43614 5.41603 7.27351 5.40189 7.08966C5.41603 6.90581 5.49381 6.74318 5.63523 6.60175L6.31406 5.92293C6.45548 5.78151 6.61104 5.7108 6.78075 5.7108C6.97874 5.7108 7.14844 5.78151 7.28986 5.92293L11.6386 10.2716L15.9236 5.98657C16.0651 5.84515 16.2206 5.77444 16.3903 5.77444C16.5883 5.77444 16.758 5.84515 16.8994 5.98657L17.6419 6.72903C17.7833 6.87046 17.847 7.03309 17.8328 7.21694C17.847 7.40079 17.7833 7.56342 17.6419 7.70484L13.3568 11.9899L17.7268 16.3598C17.8682 16.5013 17.9318 16.6639 17.9177 16.8477C17.9318 17.0316 17.8682 17.1942 17.7268 17.3356L17.0479 18.0145C16.9065 18.1559 16.7368 18.2266 16.5388 18.2266C16.3691 18.2266 16.2136 18.1559 16.0721 18.0145L11.7022 13.6445L7.28986 18.0569C7.14844 18.1983 6.97874 18.269 6.78075 18.269C6.61104 18.269 6.45548 18.1983 6.31406 18.0569L5.57159 17.3144Z" fill="#000"></path></svg>*/
/* 						</div>*/
/* 						<div class="vpreview__top">*/
/* 							<div class="vpreview__img">*/
/* 								<img :src="myRouteItemImgSrc(selectedObject)">*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="vpreview__main">*/
/* 							<div class="vpreview__title">*/
/* 								{{selectedObject.field_header}}*/
/* 							</div>*/
/* 							<div class="vpreview__desc">*/
/* 								{{selectedObject.field_summary}}*/
/* 							</div>*/
/* 							<div class="vpreview__text" v-html="selectedObject.field_content">*/
/* 							*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</transition>*/
/* 			#}*/
/* 		</div>*/
/* 		<div class="search-item search-item--map">*/
/* 			<span class="search-switchmode" @click="scrollToList">Список</span>*/
/* 			<div id="vdnhmap" style="width: 100%; height: calc(100vh);"></div>*/
/* 		</div>*/
/* 	</div>*/
/* </section>*/
/* <script src="https://api-maps.yandex.ru/2.1/?apikey=b303c4d1-e74e-4a8d-942f-15e384f9386b&lang=ru_RU" type="text/javascript"></script>*/
/* <script src="https://yastatic.net/s3/mapsapi-jslibs/heatmap/0.0.1/heatmap.min.js" type="text/javascript"></script>*/
/* <script type="text/javascript">*/
/* 	*/
/*     //ymaps.ready(init);*/
/*     function init(){*/
/*         // Создание карты.*/
/* 		window.myMap = new ymaps.Map('map', {*/
/* 			center: [55.830572, 37.631125],//[{$ page.parent_page.field_coords $}],*/
/* 			controls: ['zoomControl'],*/
/* 			zoom: 15//{$ page.parent_page.field_initial_zoom ? page.parent_page.field_initial_zoom : 12 $}*/
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
/* 			*/
/* 			var objectId = e.get('objectId');*/
/* 			if (e.get('type') == 'mouseenter') {*/
/* 				objectManager.objects.setObjectOptions(objectId, {*/
/* 					preset: 'islands#yellowStretchyIcon'*/
/* 				});*/
/* 			} else {*/
/* 				objectManager.objects.setObjectOptions(objectId, {*/
/* 					preset: 'islands#redStretchyIcon'*/
/* 				});*/
/* 			}*/
/* 			*/
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
/* 			/**/
/* 			objects.searchInside(myMap)*/
/*         // И затем добавим найденные объекты на карту.*/
/* 				.addToMap(myMap);*/
/* */
/* 			myMap.events.add('boundschange', function () {*/
/* 				// После каждого сдвига карты будем смотреть, какие объекты попадают в видимую область.*/
/* 				var visibleObjects = objects.searchInside(myMap).objectManager.add(myMap);*/
/* 				// Оставшиеся объекты будем удалять с карты.*/
/* 				objects.remove(visibleObjects).removeFromMap(myMap);*/
/* 			});*/
/* 			*//* */
/* 			*/
/* 			objectManager.add(e.detail);*/
/* 			//console.log(objectManager.objects)*/
/* 			/*myMap.geoObjects.add(new ymaps.Placemark([53.201717, 50.141131], {*/
/*             balloonContent: 'цвет <strong>влюбленной жабы</strong>'*/
/*         }, {*/
/*             preset: 'islands#circleIcon',*/
/*             iconColor: '#3caa3c'*/
/*         }));*//* */
/* 		})	*/
/*     }*/
/* </script>*/
/* */
/* <script src='/site/theme/js/lib_vcalendar.js'></script>*/
/* <script src="/site/theme/js/lib_sortable.js"></script>*/
/* <script src="/site/theme/js/lib_vue_draggable.js"></script>*/
/* <script src="https://cdn.jsdelivr.net/npm/vue-slider-component@3.1.4/dist/vue-slider-component.umd.min.js"></script>*/
/* <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>*/
/* <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>*/
/* <script src="https://unpkg.com/vue-chartjs@3.4.0/dist/vue-chartjs.js"></script>*/
/* {#*/
/* <script src="/site/theme/js/russpass1.js" type="module"></script>*/
/* #}*/
/* <script src="/site/theme/js/route_contructor.js" type="module"></script>*/
/* {% include 'footer' %}*/
