<?php

/* layouts.lk_favorites */
class __TwigTemplate_12e39cb9c1d7a1ae2ff54c8bf2f96410402026a98382c3b2b36666c458f923d7 extends TwigBridge\Twig\Template
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
        $this->loadTemplate("header", "layouts.lk_favorites", 1)->display($context);
        // line 2
        echo "
<div class=\"lk\" data-user=\"";
        // line 3
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["user"]) ? $context["user"] : null)), "html", null, true));
        echo "\" id=\"lk\">
\t<div class=\"lk__layout\">
\t\t<div class=\"lk-content\">
\t\t\t
\t\t\t<div class=\"feed-header\">
\t\t\t\t<div class=\"feed-header__block\" style=\"display: flex; align-items: center; gap: 10px;\">
\t\t\t\t\t<div class=\"feed-header__title\">
\t\t\t\t\t\t<div class=\"feed-header__title-logo\">
\t\t\t\t\t\t\t<div class=\"feed-header__title-logo__text\">Избранное<span style=\"color:#DD0A23;\">.</span></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"feed-header__title-cityswitcher\">
\t\t\t\t\t\t\t<city-switcher
\t\t\t\t\t\t\t\t:cities=\"favCities\"
\t\t\t\t\t\t\t\t:selected-city=\"selectedCity\"
\t\t\t\t\t\t\t\t@set-item=\"setSelectedCity\"
\t\t\t\t\t\t\t></city-switcher>
\t\t\t\t\t\t\t";
        // line 35
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div style=\"display: flex; gap: 10px;\">
\t\t\t\t\t\t<div class=\"rbtn rbtn--text\" 
\t\t\t\t\t\t\t v-for=\"tpl in userFavTemplates\" 
\t\t\t\t\t\t\t :key=\"tpl.id\"
\t\t\t\t\t\t\t :class=\"{'rbtn--color-pink': filters.templates.items.includes(tpl)}\"
\t\t\t\t\t\t\t @click.stop=\"setFilter(filters.templates.items, tpl)\">{{tpl.name_pl}}</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"feed-header__block\">
\t\t\t\t\t
\t\t\t\t\t<div class=\"feed__filters\">
\t\t\t\t\t\t";
        // line 98
        echo "\t\t\t\t\t\t";
        // line 141
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"feed-list\">
\t\t\t\t<feed-item
\t\t\t\t\t:item=\"item\"
\t\t\t\t\t:tags=\"filters.tags.items\"
\t\t\t\t\t:favorites=\"shared.user?.user_favorites\"
\t\t\t\t\tv-for=\"item in filteredItems\"
\t\t\t\t\t:key=\"item.id\"
\t\t\t\t\t@select-post=\"payload => selectedPost = payload\"
\t\t\t\t\t@set-tag=\"setTag\"
\t\t\t\t\t@add-remove-fav=\"addRemoveFav\"
\t\t\t\t></feed-item>
\t\t\t</div>
\t\t\t<post-view
\t\t\t\t:item=\"selectedPost\"
\t\t\t\t:favorites=\"shared.user?.user_favorites\"
\t\t\t\t:shared=\"shared\"
\t\t\t\t@close-view=\"() => selectedPost = null\"
\t\t\t\t@add-remove-fav=\"addRemoveFav\"
\t\t\t\t@remove-item-routeplan=\"removeSelectedPostObjectFromMyRoutePlanById\"
\t\t\t\t@add-item-routeplan=\"addSelectedPostObjectToPlanById\"
\t\t\t></post-view>
\t\t\t<div class=\"feed-list\" style=\"margin-top: 50px;\">
\t\t\t\t<a v-for=\"item in favCities\" :href=\"item.path\" style=\"background: #f5f5f5;
    height: 300px;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    border-radius: 10px;
    font-size: 20px;
    cursor: pointer;
    transition: .2s;\">
\t\t\t\t\t{{item.field_header}}
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

";
        // line 184
        $this->loadTemplate("footer", "layouts.lk_favorites", 184)->display($context);
        // line 185
        echo "<script src=\"https://api-maps.yandex.ru/2.1/?apikey=b303c4d1-e74e-4a8d-942f-15e384f9386b&lang=ru_RU\" type=\"text/javascript\"></script>
<script src=\"/site/theme/js/lk_favorites.js\" type=\"module\"></script>";
    }

    public function getTemplateName()
    {
        return "layouts.lk_favorites";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 185,  130 => 184,  85 => 141,  83 => 98,  67 => 35,  48 => 3,  45 => 2,  43 => 1,);
    }
}
/* {% include 'header' %}*/
/* */
/* <div class="lk" data-user="{$ user|json_encode() $}" id="lk">*/
/* 	<div class="lk__layout">*/
/* 		<div class="lk-content">*/
/* 			*/
/* 			<div class="feed-header">*/
/* 				<div class="feed-header__block" style="display: flex; align-items: center; gap: 10px;">*/
/* 					<div class="feed-header__title">*/
/* 						<div class="feed-header__title-logo">*/
/* 							<div class="feed-header__title-logo__text">Избранное<span style="color:#DD0A23;">.</span></div>*/
/* 						</div>*/
/* 						<div class="feed-header__title-cityswitcher">*/
/* 							<city-switcher*/
/* 								:cities="favCities"*/
/* 								:selected-city="selectedCity"*/
/* 								@set-item="setSelectedCity"*/
/* 							></city-switcher>*/
/* 							{#*/
/* 							<div class="citysw">*/
/* 								<div class="citysw-trigger" @click.stop="citySwitcherActive = !citySwitcherActive">*/
/* 									<template v-if="selectedCity">{{selectedCity.field_header}}</template>*/
/* 									<template v-else>Направления</template>*/
/* 								</div>*/
/* 								<div class="citysw-list" :class="{'citysw-list--active': citySwitcherActive}">*/
/* 									<div class="citysw-list__item" :class="{'citysw-list__item--active': !selectedCity}" @click.stop="setSelectedCity(false)">Все города</div>*/
/* 									<div class="citysw-list__item" */
/* 										 :class="{'citysw-list__item--active': selectedCity && selectedCity.id == city.id}" */
/* 										 @click.stop="setSelectedCity(city)" */
/* 										 v-for="city in favCities" */
/* 										 :key="city.id">{{city.field_header}}</div>*/
/* 								</div>*/
/* 							</div>*/
/* 							#}*/
/* 						</div>*/
/* 					</div>*/
/* 					*/
/* 					<div style="display: flex; gap: 10px;">*/
/* 						<div class="rbtn rbtn--text" */
/* 							 v-for="tpl in userFavTemplates" */
/* 							 :key="tpl.id"*/
/* 							 :class="{'rbtn--color-pink': filters.templates.items.includes(tpl)}"*/
/* 							 @click.stop="setFilter(filters.templates.items, tpl)">{{tpl.name_pl}}</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="feed-header__block">*/
/* 					*/
/* 					<div class="feed__filters">*/
/* 						{#*/
/* 						<div class="feed-filter">*/
/* 							*/
/* 							<button class="rbtn">*/
/* 								<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">*/
/* 									<path d="M2.88624 3.11468C3.85712 2.11524 4.97078 1.37281 6.1701 0.830254C7.42654 0.287702 8.74008 0.00214884 10.0822 0.00214884C11.4243 -0.0264065 12.7664 0.230592 14.0228 0.716032C15.2507 1.20147 16.3929 1.91536 17.3638 2.88624C18.3632 3.85712 19.1057 4.97078 19.6482 6.1701C20.1908 7.42654 20.4763 8.74008 20.4763 10.0822C20.5049 11.3101 20.305 12.5665 19.8767 13.7373C19.5054 14.7938 18.9343 15.8218 18.1919 16.707L24.5026 22.8464C24.5883 22.9321 24.6454 23.0463 24.6454 23.1605C24.6454 23.2747 24.6169 23.389 24.5026 23.5032L23.903 24.1314C23.8173 24.2171 23.7031 24.2742 23.5889 24.2742C23.4746 24.2742 23.3604 24.2456 23.2462 24.1314L16.9355 17.992C16.0503 18.763 15.0508 19.3627 14.0228 19.7624C12.8521 20.2193 11.6527 20.4478 10.3963 20.4763C9.05419 20.5049 7.71209 20.2479 6.45566 19.7624C5.22778 19.277 4.08556 18.5631 3.11468 17.5922C2.11524 16.6214 1.37281 15.5077 0.830254 14.3084C0.287702 13.0519 0.00214884 11.7384 0.00214884 10.3963C-0.0264065 9.05419 0.230592 7.71209 0.716032 6.45566C1.20147 5.22778 1.91536 4.08556 2.88624 3.11468ZM10.1107 1.65836C8.99708 1.68691 7.88342 1.91536 6.82688 2.37224C5.82744 2.80057 4.88511 3.42879 4.08556 4.28545C3.28601 5.11355 2.6578 6.08444 2.25802 7.08387C1.82969 8.14042 1.6298 9.25408 1.65836 10.3963C1.68691 11.51 1.91536 12.6236 2.37224 13.6802C2.80057 14.6796 3.42879 15.6219 4.28545 16.4215C5.11356 17.221 6.08444 17.8492 7.08387 18.249C8.14042 18.6773 9.25408 18.8772 10.3963 18.8487C11.51 18.8201 12.6236 18.5917 13.6802 18.1348C14.6796 17.7065 15.6219 17.0782 16.4215 16.2216C17.221 15.3935 17.8492 14.4226 18.249 13.4232C18.6773 12.3666 18.8772 11.253 18.8487 10.1107C18.8201 8.99708 18.5917 7.88342 18.1348 6.82688C17.7065 5.82744 17.0782 4.88511 16.2216 4.08556C15.3935 3.28601 14.4226 2.6578 13.4232 2.25802C12.3666 1.82969 11.253 1.6298 10.1107 1.65836Z" fill="black"/>*/
/* 									<path d="M8.73913 5.45519C8.53924 5.5123 8.33935 5.48375 8.16802 5.39808C7.99669 5.31241 7.85391 5.16964 7.7968 4.96975C7.73969 4.76986 7.76825 4.56998 7.85391 4.39864C7.93958 4.22731 8.08236 4.08454 8.28224 4.02742C8.88191 3.82754 9.48157 3.71332 10.1098 3.71332C10.738 3.68476 11.3377 3.74187 11.9373 3.88465C12.537 4.02742 13.1081 4.25587 13.6506 4.54142C14.1932 4.82697 14.6786 5.19819 15.1355 5.62652C15.2783 5.7693 15.364 5.94063 15.364 6.14052C15.364 6.34041 15.3069 6.51174 15.1641 6.65452C15.0213 6.79729 14.85 6.88296 14.6501 6.88296C14.4502 6.88296 14.2789 6.82585 14.1361 6.68307C13.7934 6.34041 13.3936 6.05485 12.9653 5.82641C12.537 5.59797 12.0801 5.42664 11.6232 5.31242L11.5661 5.28386C11.1092 5.16964 10.6523 5.14108 10.1955 5.16964C9.71001 5.19819 9.25312 5.28386 8.76768 5.42664L8.73913 5.45519Z" fill="black"/>*/
/* 									<path d="M5.79797 7.51127C5.68374 7.6826 5.51241 7.79682 5.34108 7.82537C5.16975 7.85393 4.96986 7.82537 4.79853 7.71115C4.6272 7.59693 4.51298 7.4256 4.48442 7.25427C4.45587 7.08294 4.48442 6.88305 4.59864 6.71172L4.68431 6.56894L4.76997 6.42616L4.8842 6.28339L4.96986 6.16916C5.02697 6.0835 5.11264 6.02639 5.16975 5.94072C5.22686 5.85506 5.31253 5.79795 5.36964 5.71228C5.42675 5.65517 5.51241 5.5695 5.56952 5.51239C5.65519 5.45528 5.7123 5.36961 5.79797 5.3125C5.94074 5.16973 6.14063 5.11262 6.34052 5.14117C6.54041 5.14117 6.71174 5.22684 6.85451 5.39817C6.99729 5.54095 7.0544 5.74083 7.02585 5.94072C7.02585 6.14061 6.94018 6.31194 6.76885 6.45472C6.71174 6.51183 6.65463 6.54038 6.59752 6.62605C6.5404 6.68316 6.48329 6.74027 6.42618 6.79738C6.36907 6.85449 6.31196 6.9116 6.25485 6.96871C6.19774 7.02583 6.14063 7.08294 6.11208 7.14005L6.02641 7.25427L5.88363 7.45415L5.79797 7.56838V7.51127Z" fill="black"/>*/
/* 								</svg>*/
/* 							</button>*/
/* 							*/
/* 							<div class="feed-filter__title">*/
/* 								<template v-if="filters.dates">*/
/* 									{{feedDateFormat}}*/
/* 								</template>*/
/* 								<template v-else>*/
/* 									Дата*/
/* 								</template>*/
/* 							</div>*/
/* 							<div class="feed-filter__main">*/
/* 								<div class="hide-mobile">*/
/* 									<v-date-picker :min-date='new Date()' :columns="$screens({ lg: 2, sm: 1 })" v-model="filters.dates" @input="setFeedDateFilter">*/
/* 										<template v-slot="{ inputValue, togglePopover }">*/
/* 											<button class="rbtn rbtn--pin" @click="togglePopover()">*/
/* 												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="26" viewBox="0 0 24 26" fill="none">*/
/* 													<path d="M17.0551 0.00119755C17.5601 0.0319941 17.9497 0.454001 17.9362 0.955598V2.30096C21.9478 2.68042 24 4.8422 24 8.72879V19.4802C24 23.8037 21.4725 26 16.4986 26H7.50145C2.52754 26 0 23.8037 0 19.4802V8.72879C0 6.14156 0.904348 4.29025 2.75942 3.20936L2.88954 3.13706C3.15846 3.01468 3.47386 3.0259 3.73602 3.17429C4.04187 3.34742 4.22249 3.67739 4.20226 4.02608C4.18202 4.37476 3.96444 4.68201 3.64058 4.8192C2.41159 5.53212 1.83188 6.77399 1.83188 8.72879V9.07376H18.7478C19.2537 9.07376 19.6638 9.48046 19.6638 9.98216C19.6638 10.4839 19.2537 10.8906 18.7478 10.8906H1.83188V19.4802C1.83188 22.7803 3.47826 24.1487 7.50145 24.1717H16.4986C20.4638 24.1717 22.1565 22.7688 22.1565 19.4687V8.71729C22.1565 5.84259 20.8696 4.45124 17.9362 4.11777V4.99168C17.8686 5.45748 17.4574 5.79753 16.9832 5.77978C16.509 5.76204 16.1248 5.39222 16.0928 4.92269V0.875107L16.1097 0.731324C16.1475 0.542905 16.2448 0.369845 16.3895 0.238437C16.5704 0.0741765 16.8101 -0.0112815 17.0551 0.00119755ZM17.5827 18.4561L17.7303 18.4654C17.9834 18.4963 18.2209 18.6095 18.4042 18.7895C18.6241 19.0055 18.7478 19.2997 18.7478 19.6067C18.7478 20.2417 18.2287 20.7565 17.5884 20.7565C16.9481 20.7565 16.429 20.2417 16.429 19.6067C16.429 18.9716 16.9481 18.4568 17.5884 18.4568L17.5827 18.4561ZM12.0232 18.4568L12.1686 18.4657C12.7403 18.5367 13.1826 19.0205 13.1826 19.6067C13.1826 20.2417 12.6635 20.7565 12.0232 20.7565C11.3829 20.7565 10.8638 20.2417 10.8638 19.6067C10.8638 18.9716 11.3829 18.4568 12.0232 18.4568ZM6.464 18.4561L6.61145 18.4654C6.8646 18.4963 7.10202 18.6095 7.28531 18.7895C7.50526 19.0055 7.62899 19.2997 7.62899 19.6067C7.62899 20.2417 7.1099 20.7565 6.46957 20.7565C5.82924 20.7565 5.31015 20.2417 5.31015 19.6067C5.31015 18.9716 5.82924 18.4568 6.46957 18.4568L6.464 18.4561ZM17.5827 13.7995L17.7303 13.8083C17.9834 13.8393 18.2209 13.9525 18.4042 14.1325C18.6241 14.3484 18.7478 14.6427 18.7478 14.9496C18.7478 15.5847 18.2287 16.0995 17.5884 16.0995C16.9481 16.0995 16.429 15.5847 16.429 14.9496C16.429 14.3146 16.9481 13.7998 17.5884 13.7998L17.5827 13.7995ZM12.0232 13.7998L12.1686 13.8087C12.7403 13.8797 13.1826 14.3634 13.1826 14.9496C13.1826 15.5847 12.6635 16.0995 12.0232 16.0995C11.3829 16.0995 10.8638 15.5847 10.8638 14.9496C10.8638 14.3146 11.3829 13.7998 12.0232 13.7998ZM6.464 13.7995L6.61145 13.8083C6.8646 13.8393 7.10202 13.9525 7.28531 14.1325C7.50526 14.3484 7.62899 14.6427 7.62899 14.9496C7.62899 15.5847 7.1099 16.0995 6.46957 16.0995C5.82924 16.0995 5.31015 15.5847 5.31015 14.9496C5.31015 14.3146 5.82924 13.7998 6.46957 13.7998L6.464 13.7995ZM6.98551 0.138382C7.45771 0.138382 7.85454 0.490212 7.90725 0.955598V2.20897H13.1478C13.6537 2.20897 14.0638 2.61568 14.0638 3.11737C14.0638 3.61907 13.6537 4.02578 13.1478 4.02578H7.88406V4.93419C7.88408 5.17712 7.78599 5.40993 7.6117 5.58063C7.43741 5.75132 7.20145 5.84567 6.95652 5.84259L6.82259 5.82955C6.38619 5.75477 6.05785 5.37479 6.06369 4.92269V0.955598L6.08958 0.819628C6.1966 0.423364 6.56053 0.138382 6.98551 0.138382Z" fill="#2D4356"/>*/
/* 												</svg>*/
/* 												<span class="pin show-mobile" v-if="filters.dates"></span>*/
/* 											</button>*/
/* 										</template>*/
/* 									</v-date-picker>*/
/* 								</div>*/
/* 								<div class="show-mobile">*/
/* 									<div class="rbtn-dd rbtn-dd--center" v-click-outside="closeDatesFilterDropdown">*/
/* 										<button class="rbtn rbtn--pin" @click.stop="filters.isDatesFilterShowed = !filters.isDatesFilterShowed">*/
/* 											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="26" viewBox="0 0 24 26" fill="none">*/
/* 												<path d="M17.0551 0.00119755C17.5601 0.0319941 17.9497 0.454001 17.9362 0.955598V2.30096C21.9478 2.68042 24 4.8422 24 8.72879V19.4802C24 23.8037 21.4725 26 16.4986 26H7.50145C2.52754 26 0 23.8037 0 19.4802V8.72879C0 6.14156 0.904348 4.29025 2.75942 3.20936L2.88954 3.13706C3.15846 3.01468 3.47386 3.0259 3.73602 3.17429C4.04187 3.34742 4.22249 3.67739 4.20226 4.02608C4.18202 4.37476 3.96444 4.68201 3.64058 4.8192C2.41159 5.53212 1.83188 6.77399 1.83188 8.72879V9.07376H18.7478C19.2537 9.07376 19.6638 9.48046 19.6638 9.98216C19.6638 10.4839 19.2537 10.8906 18.7478 10.8906H1.83188V19.4802C1.83188 22.7803 3.47826 24.1487 7.50145 24.1717H16.4986C20.4638 24.1717 22.1565 22.7688 22.1565 19.4687V8.71729C22.1565 5.84259 20.8696 4.45124 17.9362 4.11777V4.99168C17.8686 5.45748 17.4574 5.79753 16.9832 5.77978C16.509 5.76204 16.1248 5.39222 16.0928 4.92269V0.875107L16.1097 0.731324C16.1475 0.542905 16.2448 0.369845 16.3895 0.238437C16.5704 0.0741765 16.8101 -0.0112815 17.0551 0.00119755ZM17.5827 18.4561L17.7303 18.4654C17.9834 18.4963 18.2209 18.6095 18.4042 18.7895C18.6241 19.0055 18.7478 19.2997 18.7478 19.6067C18.7478 20.2417 18.2287 20.7565 17.5884 20.7565C16.9481 20.7565 16.429 20.2417 16.429 19.6067C16.429 18.9716 16.9481 18.4568 17.5884 18.4568L17.5827 18.4561ZM12.0232 18.4568L12.1686 18.4657C12.7403 18.5367 13.1826 19.0205 13.1826 19.6067C13.1826 20.2417 12.6635 20.7565 12.0232 20.7565C11.3829 20.7565 10.8638 20.2417 10.8638 19.6067C10.8638 18.9716 11.3829 18.4568 12.0232 18.4568ZM6.464 18.4561L6.61145 18.4654C6.8646 18.4963 7.10202 18.6095 7.28531 18.7895C7.50526 19.0055 7.62899 19.2997 7.62899 19.6067C7.62899 20.2417 7.1099 20.7565 6.46957 20.7565C5.82924 20.7565 5.31015 20.2417 5.31015 19.6067C5.31015 18.9716 5.82924 18.4568 6.46957 18.4568L6.464 18.4561ZM17.5827 13.7995L17.7303 13.8083C17.9834 13.8393 18.2209 13.9525 18.4042 14.1325C18.6241 14.3484 18.7478 14.6427 18.7478 14.9496C18.7478 15.5847 18.2287 16.0995 17.5884 16.0995C16.9481 16.0995 16.429 15.5847 16.429 14.9496C16.429 14.3146 16.9481 13.7998 17.5884 13.7998L17.5827 13.7995ZM12.0232 13.7998L12.1686 13.8087C12.7403 13.8797 13.1826 14.3634 13.1826 14.9496C13.1826 15.5847 12.6635 16.0995 12.0232 16.0995C11.3829 16.0995 10.8638 15.5847 10.8638 14.9496C10.8638 14.3146 11.3829 13.7998 12.0232 13.7998ZM6.464 13.7995L6.61145 13.8083C6.8646 13.8393 7.10202 13.9525 7.28531 14.1325C7.50526 14.3484 7.62899 14.6427 7.62899 14.9496C7.62899 15.5847 7.1099 16.0995 6.46957 16.0995C5.82924 16.0995 5.31015 15.5847 5.31015 14.9496C5.31015 14.3146 5.82924 13.7998 6.46957 13.7998L6.464 13.7995ZM6.98551 0.138382C7.45771 0.138382 7.85454 0.490212 7.90725 0.955598V2.20897H13.1478C13.6537 2.20897 14.0638 2.61568 14.0638 3.11737C14.0638 3.61907 13.6537 4.02578 13.1478 4.02578H7.88406V4.93419C7.88408 5.17712 7.78599 5.40993 7.6117 5.58063C7.43741 5.75132 7.20145 5.84567 6.95652 5.84259L6.82259 5.82955C6.38619 5.75477 6.05785 5.37479 6.06369 4.92269V0.955598L6.08958 0.819628C6.1966 0.423364 6.56053 0.138382 6.98551 0.138382Z" fill="#2D4356"/>*/
/* 											</svg>*/
/* 											<span class="pin show-mobile" v-if="filters.dates"></span>*/
/* 										</button>*/
/* 										<div class="rbtn-dd__content" :class="{'rbtn-dd__content--active': filters.isDatesFilterShowed}">*/
/* 											<v-date-picker :min-date='new Date()' :columns="$screens({ lg: 2, sm: 1 })" v-model="filters.dates" @input="setFeedDateFilter">*/
/* 											</v-date-picker>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						#}*/
/* 						{#*/
/* 						<div class="feed-filter">*/
/* 							*/
/* 							<button class="rbtn">*/
/* 								<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">*/
/* 									<path d="M2.88624 3.11468C3.85712 2.11524 4.97078 1.37281 6.1701 0.830254C7.42654 0.287702 8.74008 0.00214884 10.0822 0.00214884C11.4243 -0.0264065 12.7664 0.230592 14.0228 0.716032C15.2507 1.20147 16.3929 1.91536 17.3638 2.88624C18.3632 3.85712 19.1057 4.97078 19.6482 6.1701C20.1908 7.42654 20.4763 8.74008 20.4763 10.0822C20.5049 11.3101 20.305 12.5665 19.8767 13.7373C19.5054 14.7938 18.9343 15.8218 18.1919 16.707L24.5026 22.8464C24.5883 22.9321 24.6454 23.0463 24.6454 23.1605C24.6454 23.2747 24.6169 23.389 24.5026 23.5032L23.903 24.1314C23.8173 24.2171 23.7031 24.2742 23.5889 24.2742C23.4746 24.2742 23.3604 24.2456 23.2462 24.1314L16.9355 17.992C16.0503 18.763 15.0508 19.3627 14.0228 19.7624C12.8521 20.2193 11.6527 20.4478 10.3963 20.4763C9.05419 20.5049 7.71209 20.2479 6.45566 19.7624C5.22778 19.277 4.08556 18.5631 3.11468 17.5922C2.11524 16.6214 1.37281 15.5077 0.830254 14.3084C0.287702 13.0519 0.00214884 11.7384 0.00214884 10.3963C-0.0264065 9.05419 0.230592 7.71209 0.716032 6.45566C1.20147 5.22778 1.91536 4.08556 2.88624 3.11468ZM10.1107 1.65836C8.99708 1.68691 7.88342 1.91536 6.82688 2.37224C5.82744 2.80057 4.88511 3.42879 4.08556 4.28545C3.28601 5.11355 2.6578 6.08444 2.25802 7.08387C1.82969 8.14042 1.6298 9.25408 1.65836 10.3963C1.68691 11.51 1.91536 12.6236 2.37224 13.6802C2.80057 14.6796 3.42879 15.6219 4.28545 16.4215C5.11356 17.221 6.08444 17.8492 7.08387 18.249C8.14042 18.6773 9.25408 18.8772 10.3963 18.8487C11.51 18.8201 12.6236 18.5917 13.6802 18.1348C14.6796 17.7065 15.6219 17.0782 16.4215 16.2216C17.221 15.3935 17.8492 14.4226 18.249 13.4232C18.6773 12.3666 18.8772 11.253 18.8487 10.1107C18.8201 8.99708 18.5917 7.88342 18.1348 6.82688C17.7065 5.82744 17.0782 4.88511 16.2216 4.08556C15.3935 3.28601 14.4226 2.6578 13.4232 2.25802C12.3666 1.82969 11.253 1.6298 10.1107 1.65836Z" fill="black"/>*/
/* 									<path d="M8.73913 5.45519C8.53924 5.5123 8.33935 5.48375 8.16802 5.39808C7.99669 5.31241 7.85391 5.16964 7.7968 4.96975C7.73969 4.76986 7.76825 4.56998 7.85391 4.39864C7.93958 4.22731 8.08236 4.08454 8.28224 4.02742C8.88191 3.82754 9.48157 3.71332 10.1098 3.71332C10.738 3.68476 11.3377 3.74187 11.9373 3.88465C12.537 4.02742 13.1081 4.25587 13.6506 4.54142C14.1932 4.82697 14.6786 5.19819 15.1355 5.62652C15.2783 5.7693 15.364 5.94063 15.364 6.14052C15.364 6.34041 15.3069 6.51174 15.1641 6.65452C15.0213 6.79729 14.85 6.88296 14.6501 6.88296C14.4502 6.88296 14.2789 6.82585 14.1361 6.68307C13.7934 6.34041 13.3936 6.05485 12.9653 5.82641C12.537 5.59797 12.0801 5.42664 11.6232 5.31242L11.5661 5.28386C11.1092 5.16964 10.6523 5.14108 10.1955 5.16964C9.71001 5.19819 9.25312 5.28386 8.76768 5.42664L8.73913 5.45519Z" fill="black"/>*/
/* 									<path d="M5.79797 7.51127C5.68374 7.6826 5.51241 7.79682 5.34108 7.82537C5.16975 7.85393 4.96986 7.82537 4.79853 7.71115C4.6272 7.59693 4.51298 7.4256 4.48442 7.25427C4.45587 7.08294 4.48442 6.88305 4.59864 6.71172L4.68431 6.56894L4.76997 6.42616L4.8842 6.28339L4.96986 6.16916C5.02697 6.0835 5.11264 6.02639 5.16975 5.94072C5.22686 5.85506 5.31253 5.79795 5.36964 5.71228C5.42675 5.65517 5.51241 5.5695 5.56952 5.51239C5.65519 5.45528 5.7123 5.36961 5.79797 5.3125C5.94074 5.16973 6.14063 5.11262 6.34052 5.14117C6.54041 5.14117 6.71174 5.22684 6.85451 5.39817C6.99729 5.54095 7.0544 5.74083 7.02585 5.94072C7.02585 6.14061 6.94018 6.31194 6.76885 6.45472C6.71174 6.51183 6.65463 6.54038 6.59752 6.62605C6.5404 6.68316 6.48329 6.74027 6.42618 6.79738C6.36907 6.85449 6.31196 6.9116 6.25485 6.96871C6.19774 7.02583 6.14063 7.08294 6.11208 7.14005L6.02641 7.25427L5.88363 7.45415L5.79797 7.56838V7.51127Z" fill="black"/>*/
/* 								</svg>*/
/* 							</button>*/
/* 							*/
/* 							<div class="feed-filter__title">*/
/* 								Интересы*/
/* 							</div>*/
/* 							<div class="feed-filter__main">*/
/* 								<div class="rbtn-dd" v-click-outside="closeTagsFilterDropdown">*/
/* 									<button class="rbtn rbtn--pin" @click.stop="filters.tags.isShowed = !filters.tags.isShowed">*/
/* 										<svg xmlns="http://www.w3.org/2000/svg" width="21" height="17" viewBox="0 0 21 17" fill="none">*/
/* 											<path fill-rule="evenodd" clip-rule="evenodd" d="M0 2.95605C0 2.40377 0.447715 1.95605 1 1.95605H20C20.5523 1.95605 21 2.40377 21 2.95605C21 3.50834 20.5523 3.95605 20 3.95605H1C0.447715 3.95605 0 3.50834 0 2.95605Z" fill="#2D2727"/>*/
/* 											<line x1="1" y1="13.9561" x2="20" y2="13.9561" stroke="#2D2727" stroke-width="2" stroke-linecap="round"/>*/
/* 											<circle cx="7" cy="13.9561" r="2.95605" fill="#2D2727"/>*/
/* 											<circle cx="14.1289" cy="2.95605" r="2.95605" fill="#2D2727"/>*/
/* 										</svg>*/
/* 										<span class="pin" v-show="filters.tags.items.length"></span>*/
/* 									</button>*/
/* 									<div class="rbtn-dd__content" :class="{'rbtn-dd__content--active': filters.tags.isShowed}">*/
/* 										<div class="rbtn-dd-search">*/
/* 											<input type="text" v-model="filters.tags.search" placeholder="Поиск по интересам">*/
/* 										</div>*/
/* 										<div class="rbtn-dd-list">*/
/* 											<div */
/* 												 class="rbtn-dd-list__item rbtn rbtn--text rbtn--size-s" */
/* 												 :class="{'rbtn--selected': filters.tags.items.includes(tag)}"*/
/* 												 @click.stop="setFilter(filters.tags.items, tag)" */
/* 												 v-for="template in TEMPLATES">*/
/* 												{{template.name_pl}}*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						#}*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			*/
/* 			<div class="feed-list">*/
/* 				<feed-item*/
/* 					:item="item"*/
/* 					:tags="filters.tags.items"*/
/* 					:favorites="shared.user?.user_favorites"*/
/* 					v-for="item in filteredItems"*/
/* 					:key="item.id"*/
/* 					@select-post="payload => selectedPost = payload"*/
/* 					@set-tag="setTag"*/
/* 					@add-remove-fav="addRemoveFav"*/
/* 				></feed-item>*/
/* 			</div>*/
/* 			<post-view*/
/* 				:item="selectedPost"*/
/* 				:favorites="shared.user?.user_favorites"*/
/* 				:shared="shared"*/
/* 				@close-view="() => selectedPost = null"*/
/* 				@add-remove-fav="addRemoveFav"*/
/* 				@remove-item-routeplan="removeSelectedPostObjectFromMyRoutePlanById"*/
/* 				@add-item-routeplan="addSelectedPostObjectToPlanById"*/
/* 			></post-view>*/
/* 			<div class="feed-list" style="margin-top: 50px;">*/
/* 				<a v-for="item in favCities" :href="item.path" style="background: #f5f5f5;*/
/*     height: 300px;*/
/*     display: flex;*/
/*     align-items: center;*/
/*     justify-content: center;*/
/*     text-align: center;*/
/*     border-radius: 10px;*/
/*     font-size: 20px;*/
/*     cursor: pointer;*/
/*     transition: .2s;">*/
/* 					{{item.field_header}}*/
/* 				</a>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* */
/* {% include 'footer' %}*/
/* <script src="https://api-maps.yandex.ru/2.1/?apikey=b303c4d1-e74e-4a8d-942f-15e384f9386b&lang=ru_RU" type="text/javascript"></script>*/
/* <script src="/site/theme/js/lk_favorites.js" type="module"></script>*/
