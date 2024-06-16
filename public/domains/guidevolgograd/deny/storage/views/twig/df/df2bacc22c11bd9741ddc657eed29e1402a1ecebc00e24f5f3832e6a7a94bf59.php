<?php

/* generate_route_quiz */
class __TwigTemplate_573cd283d1132fb88ec0c614e711602d9fdd09d360bde94a23e5332623078b36 extends TwigBridge\Twig\Template
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
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
                array(),
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
        echo "<div class=\"gqz\" v-show=\"isGenerateRouteQuizShowed\" v-cloak>
\t<div class=\"gqz__wrapper\">
\t\t<div class=\"gqz__inner\">
\t\t\t<div class=\"gqz__header\">
\t\t\t\t<div class=\"gqz__title\">Создать маршрут для вас?</div>
\t\t\t\t<div class=\"gqz__closer\" @click.stop=\"isGenerateRouteQuizShowed = false\">
\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"23\" height=\"24\" viewBox=\"0 0 23 24\" fill=\"none\"><path d=\"M5.57159 17.3144C5.43017 17.173 5.35239 17.0104 5.33825 16.8265C5.35239 16.6427 5.43017 16.48 5.57159 16.3386L9.98394 11.9263L5.63523 7.57756C5.49381 7.43614 5.41603 7.27351 5.40189 7.08966C5.41603 6.90581 5.49381 6.74318 5.63523 6.60175L6.31406 5.92293C6.45548 5.78151 6.61104 5.7108 6.78075 5.7108C6.97874 5.7108 7.14844 5.78151 7.28986 5.92293L11.6386 10.2716L15.9236 5.98657C16.0651 5.84515 16.2206 5.77444 16.3903 5.77444C16.5883 5.77444 16.758 5.84515 16.8994 5.98657L17.6419 6.72903C17.7833 6.87046 17.847 7.03309 17.8328 7.21694C17.847 7.40079 17.7833 7.56342 17.6419 7.70484L13.3568 11.9899L17.7268 16.3598C17.8682 16.5013 17.9318 16.6639 17.9177 16.8477C17.9318 17.0316 17.8682 17.1942 17.7268 17.3356L17.0479 18.0145C16.9065 18.1559 16.7368 18.2266 16.5388 18.2266C16.3691 18.2266 16.2136 18.1559 16.0721 18.0145L11.7022 13.6445L7.28986 18.0569C7.14844 18.1983 6.97874 18.269 6.78075 18.269C6.61104 18.269 6.45548 18.1983 6.31406 18.0569L5.57159 17.3144Z\" fill=\"#000\"></path></svg>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"gqz__main\">
\t\t\t\t<div class=\"gqz-q\">
\t\t\t\t\t<div class=\"gqz-q__actions\" >
\t\t\t\t\t\t<button class=\"rbtn rbtn--text\" @click.stop=\"generateRouteFromPlan\">
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"21\" height=\"18\" viewBox=\"0 0 21 18\" fill=\"none\">
\t\t\t\t\t\t\t\t<path d=\"M19.1603 1.99992C18.1002 0.937129 16.6951 0.288461 15.1986 0.171091C13.7021 0.0537212 12.213 0.475387 11.0003 1.35992C9.72793 0.413559 8.14427 -0.0155675 6.5682 0.158959C4.99212 0.333485 3.54072 1.0987 2.50625 2.30051C1.47178 3.50231 0.931098 5.05144 0.993077 6.63594C1.05506 8.22043 1.71509 9.72259 2.84028 10.8399L9.05028 17.0599C9.57029 17.5717 10.2707 17.8585 11.0003 17.8585C11.7299 17.8585 12.4303 17.5717 12.9503 17.0599L19.1603 10.8399C20.3279 9.66519 20.9832 8.07619 20.9832 6.41992C20.9832 4.76365 20.3279 3.17465 19.1603 1.99992ZM17.7503 9.45992L11.5403 15.6699C11.4696 15.7413 11.3855 15.7979 11.2928 15.8366C11.2001 15.8752 11.1007 15.8951 11.0003 15.8951C10.8999 15.8951 10.8004 15.8752 10.7077 15.8366C10.615 15.7979 10.5309 15.7413 10.4603 15.6699L4.25028 9.42992C3.46603 8.62827 3.02689 7.55139 3.02689 6.42992C3.02689 5.30846 3.46603 4.23158 4.25028 3.42992C5.04943 2.64091 6.12725 2.19849 7.25028 2.19849C8.3733 2.19849 9.45112 2.64091 10.2503 3.42992C10.3432 3.52365 10.4538 3.59804 10.5757 3.64881C10.6976 3.69958 10.8283 3.72572 10.9603 3.72572C11.0923 3.72572 11.223 3.69958 11.3449 3.64881C11.4667 3.59804 11.5773 3.52365 11.6703 3.42992C12.4694 2.64091 13.5472 2.19849 14.6703 2.19849C15.7933 2.19849 16.8711 2.64091 17.6703 3.42992C18.4653 4.22107 18.9189 5.29211 18.9338 6.41361C18.9488 7.5351 18.5239 8.61786 17.7503 9.42992V9.45992Z\" fill=\"black\"/>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\tИз избранного
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<button class=\"rbtn rbtn--text\">
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"23\" viewBox=\"0 0 20 23\" fill=\"none\">
\t\t\t\t\t\t\t\t<path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M3.68659 6.05764C2.87114 6.48613 2.35774 7.09164 2.35774 8.04484C2.35774 9.00232 2.87643 9.61055 3.66751 10.0392C4.50276 10.4917 5.50155 10.6466 5.98867 10.6466H12.4253C12.4389 10.6466 12.4529 10.6466 12.4672 10.6466C13.2399 10.6464 14.8788 10.6459 16.3491 11.191C17.1167 11.4755 17.9051 11.9313 18.5019 12.6706C19.1112 13.4255 19.4514 14.3905 19.4514 15.5611C19.4514 16.7317 19.1112 17.6968 18.5019 18.4515C17.9051 19.1909 17.1167 19.6466 16.3491 19.9312C14.8788 20.4762 13.2399 20.4757 12.4672 20.4756C12.4529 20.4756 12.4389 20.4756 12.4253 20.4756H6.24801V18.1629H12.4253C13.2272 18.1629 14.4786 18.1522 15.5157 17.7678C16.0154 17.5825 16.397 17.3336 16.6535 17.0159C16.8973 16.7138 17.0936 16.2696 17.0936 15.5611C17.0936 14.8526 16.8973 14.4083 16.6535 14.1062C16.397 13.7885 16.0154 13.5397 15.5157 13.3545C14.4786 12.97 13.2272 12.9593 12.4253 12.9593H5.98867C5.17902 12.9593 3.7729 12.7384 2.52746 12.0635C1.23782 11.3647 0 10.0938 0 8.04484C0 5.99153 1.24313 4.71798 2.57322 4.01905C3.85857 3.34361 5.32881 3.13037 6.24801 3.13037H15.9619V5.44306H6.24801C5.61111 5.44306 4.54676 5.60562 3.68659 6.05764Z\" fill=\"black\"/>
\t\t\t\t\t\t\t\t<path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M4.7128 18.7409C4.38727 18.7409 4.12337 18.9997 4.12337 19.3191C4.12337 19.6384 4.38727 19.8973 4.7128 19.8973C5.03834 19.8973 5.30224 19.6384 5.30224 19.3191C5.30224 18.9997 5.03834 18.7409 4.7128 18.7409ZM1.76562 19.3191C1.76562 17.7225 3.08512 16.4282 4.7128 16.4282C6.34047 16.4282 7.65998 17.7225 7.65998 19.3191C7.65998 20.9157 6.34047 22.2099 4.7128 22.2099C3.08512 22.2099 1.76562 20.9157 1.76562 19.3191Z\" fill=\"black\"/>
\t\t\t\t\t\t\t\t<path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M14.8358 4.2867L12.1328 1.63532L13.7999 0L18.1702 4.2867L13.7999 8.57339L12.1328 6.93807L14.8358 4.2867Z\" fill=\"black\"/>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\tВыбрать готовый
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<button class=\"rbtn rbtn--text\">
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"27\" height=\"20\" viewBox=\"0 0 27 20\" fill=\"none\">
\t\t\t\t\t\t\t\t<path d=\"M0.842217 0.0106612C3.39019 0.597015 6.44989 1.69509 9.01919 2.47335L17.1428 0.0213224C17.2175 4.88497e-07 17.2921 0 17.3667 0C17.4414 0 17.516 0.0106615 17.5906 0.0213224L25.8529 2.51599C25.9275 2.53731 26.0021 2.57996 26.0661 2.6226C26.1301 2.66524 26.1834 2.72921 26.2367 2.79318C26.2793 2.85714 26.322 2.92111 26.3433 2.99573C26.3646 3.07036 26.3753 3.14499 26.3753 3.21961V6.3646C26.3753 6.54584 26.3006 6.70575 26.1834 6.82302C26.0661 6.94029 25.9062 7.01492 25.7249 7.01492C25.5437 7.01492 25.3838 6.94029 25.2665 6.82302C25.1492 6.70575 25.0746 6.54584 25.0746 6.3646V3.63539L18.0277 1.51386V3.01706C18.0277 3.19829 17.9531 3.35821 17.8358 3.47548C17.7185 3.59275 17.5586 3.66738 17.3774 3.66738C17.1962 3.66738 17.0362 3.59275 16.919 3.47548C16.8017 3.35821 16.7271 3.19829 16.7271 3.01706V1.51386L9.68017 3.63539V5.23454C9.68017 5.41578 9.60554 5.57569 9.48827 5.69296C9.371 5.81023 9.21108 5.88486 9.02985 5.88486C8.84861 5.88486 8.6887 5.81023 8.57142 5.69296C8.45415 5.57569 8.37953 5.41578 8.37953 5.23454V3.63539L1.33262 1.51386V7.15352C1.33262 7.33475 1.258 7.49466 1.14072 7.61194C1.02345 7.72921 0.863539 7.80383 0.682302 7.80383C0.501066 7.80383 0.341151 7.72921 0.223881 7.61194C0.10661 7.49466 0.0319829 7.33475 0.0319829 7.15352V0.692963C0.0319829 0.66098 0.0319829 0.628999 0.0426439 0.586355C0.0426439 0.554372 0.0533049 0.522389 0.0639659 0.490406C0.0852878 0.415779 0.117271 0.351813 0.159915 0.298508C0.202559 0.234542 0.255863 0.181238 0.309168 0.138594C0.33049 0.127933 0.341151 0.117271 0.362473 0.10661C0.415778 0.0746272 0.479744 0.0426446 0.533049 0.0319837C0.597015 0.0106617 0.660981 0 0.724946 0H0.788912C0.810234 0 0.831556 0.0106612 0.852878 0.0106612H0.863539H0.842217ZM25.0746 9.87206C25.0746 9.69083 25.1492 9.53091 25.2665 9.41364C25.3838 9.29637 25.5544 9.22174 25.7249 9.22174C25.9062 9.22174 26.0661 9.29637 26.1834 9.41364C26.3006 9.53091 26.3753 9.70149 26.3753 9.87206V19.2964C26.3753 19.3283 26.3753 19.3603 26.3646 19.403C26.3646 19.435 26.3539 19.4669 26.3433 19.5096C26.322 19.5842 26.29 19.6482 26.2473 19.7015C26.2047 19.7654 26.1514 19.8188 26.0981 19.8614C26.0767 19.8827 26.0448 19.904 26.0128 19.9147C25.9595 19.9467 25.9062 19.968 25.8529 19.9787C25.7996 19.9893 25.7356 20 25.6823 20C25.6503 20 25.6183 20 25.5757 19.9893C25.5437 19.9893 25.5117 19.9787 25.4797 19.968L17.3667 17.5266L9.25373 19.968C9.18976 19.9893 9.09381 20 9.00852 20C8.92324 20 8.83795 19.9893 8.76332 19.968L0.522388 17.484L0.469083 17.4627L0.426439 17.4414C0.373134 17.4094 0.319829 17.3774 0.266524 17.3454C0.21322 17.3028 0.170576 17.2601 0.138593 17.2068C0.0959488 17.1428 0.0533049 17.0789 0.0319829 17.0043C0.010661 16.9296 0 16.855 0 16.7804V12.2068C0 12.0256 0.0746268 11.8657 0.191898 11.7484C0.309168 11.6311 0.479744 11.5565 0.65032 11.5565C0.831556 11.5565 0.991471 11.6311 1.10874 11.7484C1.22601 11.8657 1.30064 12.0362 1.30064 12.2068V16.3539L8.34754 18.4755V16.8443C8.34754 16.6631 8.42217 16.5032 8.53944 16.3859C8.65671 16.2686 8.82729 16.194 8.99786 16.194C9.1791 16.194 9.33902 16.2686 9.45629 16.3859C9.57356 16.5032 9.64818 16.6738 9.64818 16.8443V18.4755L16.6951 16.3539V5.08529C16.6951 4.90405 16.7697 4.74413 16.887 4.62686C17.0043 4.50959 17.1748 4.43497 17.3454 4.43497C17.5266 4.43497 17.6866 4.50959 17.8038 4.62686C17.9211 4.74413 17.9957 4.91471 17.9957 5.08529V16.3539L25.0426 18.4755V9.87206H25.0746ZM8.36887 8.742C8.36887 8.56076 8.44349 8.40085 8.56076 8.28358C8.67804 8.16631 8.84861 8.09168 9.01919 8.09168C9.20042 8.09168 9.36034 8.16631 9.47761 8.28358C9.59488 8.40085 9.66951 8.57142 9.66951 8.742V13.3369C9.66951 13.5181 9.59488 13.678 9.47761 13.7953C9.36034 13.9126 9.20042 13.9872 9.01919 13.9872C8.83795 13.9872 8.67804 13.9126 8.56076 13.7953C8.44349 13.678 8.36887 13.5181 8.36887 13.3369V8.742ZM1.32196 10.1386C1.32196 10.3198 1.24733 10.4797 1.13006 10.597C1.01279 10.7143 0.852878 10.7889 0.671641 10.7889C0.490405 10.7889 0.33049 10.7143 0.21322 10.597C0.0959488 10.4797 0.021322 10.3198 0.021322 10.1386V9.36034C0.021322 9.1791 0.0959488 9.01919 0.21322 8.90191C0.33049 8.78464 0.501066 8.71002 0.671641 8.71002C0.852878 8.71002 1.01279 8.78464 1.13006 8.90191C1.24733 9.01919 1.32196 9.18976 1.32196 9.36034V10.1386Z\" fill=\"#2B2A29\"/>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\tМаршруты пользователей
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"gqz-q__variants\">
\t\t\t\t\t\t<div class=\"gqz__title\">Собрать по параметрам</div>
\t\t\t\t\t\t<div class=\"gqz-q__actions\">
\t\t\t\t\t\t\t<city-switcher :selectedcity=\"generateRouteQuizSelectedOptions.city\" @set-city=\"setGenRouteCity\"></city-switcher>
\t\t\t\t\t\t\t";
        // line 47
        echo "\t\t\t\t\t\t\t<v-date-picker :min-date='new Date()' :columns=\"2\" is-range v-model=\"generateRouteQuizSelectedOptions.dates\" @input=\"setMyRouteDays\">
\t\t\t\t\t\t\t\t<template v-slot=\"{ inputValue, togglePopover }\">
\t\t\t\t\t\t\t\t\t<button class=\"rbtn rbtn--text\" @click=\"togglePopover()\">
\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"26\" viewBox=\"0 0 24 26\" fill=\"none\">
\t\t\t\t\t\t\t\t\t\t\t<path d=\"M17.0551 0.00119755C17.5601 0.0319941 17.9497 0.454001 17.9362 0.955598V2.30096C21.9478 2.68042 24 4.8422 24 8.72879V19.4802C24 23.8037 21.4725 26 16.4986 26H7.50145C2.52754 26 0 23.8037 0 19.4802V8.72879C0 6.14156 0.904348 4.29025 2.75942 3.20936L2.88954 3.13706C3.15846 3.01468 3.47386 3.0259 3.73602 3.17429C4.04187 3.34742 4.22249 3.67739 4.20226 4.02608C4.18202 4.37476 3.96444 4.68201 3.64058 4.8192C2.41159 5.53212 1.83188 6.77399 1.83188 8.72879V9.07376H18.7478C19.2537 9.07376 19.6638 9.48046 19.6638 9.98216C19.6638 10.4839 19.2537 10.8906 18.7478 10.8906H1.83188V19.4802C1.83188 22.7803 3.47826 24.1487 7.50145 24.1717H16.4986C20.4638 24.1717 22.1565 22.7688 22.1565 19.4687V8.71729C22.1565 5.84259 20.8696 4.45124 17.9362 4.11777V4.99168C17.8686 5.45748 17.4574 5.79753 16.9832 5.77978C16.509 5.76204 16.1248 5.39222 16.0928 4.92269V0.875107L16.1097 0.731324C16.1475 0.542905 16.2448 0.369845 16.3895 0.238437C16.5704 0.0741765 16.8101 -0.0112815 17.0551 0.00119755ZM17.5827 18.4561L17.7303 18.4654C17.9834 18.4963 18.2209 18.6095 18.4042 18.7895C18.6241 19.0055 18.7478 19.2997 18.7478 19.6067C18.7478 20.2417 18.2287 20.7565 17.5884 20.7565C16.9481 20.7565 16.429 20.2417 16.429 19.6067C16.429 18.9716 16.9481 18.4568 17.5884 18.4568L17.5827 18.4561ZM12.0232 18.4568L12.1686 18.4657C12.7403 18.5367 13.1826 19.0205 13.1826 19.6067C13.1826 20.2417 12.6635 20.7565 12.0232 20.7565C11.3829 20.7565 10.8638 20.2417 10.8638 19.6067C10.8638 18.9716 11.3829 18.4568 12.0232 18.4568ZM6.464 18.4561L6.61145 18.4654C6.8646 18.4963 7.10202 18.6095 7.28531 18.7895C7.50526 19.0055 7.62899 19.2997 7.62899 19.6067C7.62899 20.2417 7.1099 20.7565 6.46957 20.7565C5.82924 20.7565 5.31015 20.2417 5.31015 19.6067C5.31015 18.9716 5.82924 18.4568 6.46957 18.4568L6.464 18.4561ZM17.5827 13.7995L17.7303 13.8083C17.9834 13.8393 18.2209 13.9525 18.4042 14.1325C18.6241 14.3484 18.7478 14.6427 18.7478 14.9496C18.7478 15.5847 18.2287 16.0995 17.5884 16.0995C16.9481 16.0995 16.429 15.5847 16.429 14.9496C16.429 14.3146 16.9481 13.7998 17.5884 13.7998L17.5827 13.7995ZM12.0232 13.7998L12.1686 13.8087C12.7403 13.8797 13.1826 14.3634 13.1826 14.9496C13.1826 15.5847 12.6635 16.0995 12.0232 16.0995C11.3829 16.0995 10.8638 15.5847 10.8638 14.9496C10.8638 14.3146 11.3829 13.7998 12.0232 13.7998ZM6.464 13.7995L6.61145 13.8083C6.8646 13.8393 7.10202 13.9525 7.28531 14.1325C7.50526 14.3484 7.62899 14.6427 7.62899 14.9496C7.62899 15.5847 7.1099 16.0995 6.46957 16.0995C5.82924 16.0995 5.31015 15.5847 5.31015 14.9496C5.31015 14.3146 5.82924 13.7998 6.46957 13.7998L6.464 13.7995ZM6.98551 0.138382C7.45771 0.138382 7.85454 0.490212 7.90725 0.955598V2.20897H13.1478C13.6537 2.20897 14.0638 2.61568 14.0638 3.11737C14.0638 3.61907 13.6537 4.02578 13.1478 4.02578H7.88406V4.93419C7.88408 5.17712 7.78599 5.40993 7.6117 5.58063C7.43741 5.75132 7.20145 5.84567 6.95652 5.84259L6.82259 5.82955C6.38619 5.75477 6.05785 5.37479 6.06369 4.92269V0.955598L6.08958 0.819628C6.1966 0.423364 6.56053 0.138382 6.98551 0.138382Z\" fill=\"#2D4356\"/>
\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t {{ generateRouteQuizDateFormat(inputValue) }} 
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</template>
\t\t\t\t\t\t\t</v-date-picker>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"gqz-q__variant\">
\t\t\t\t\t\t\t<div class=\"filter filter--price\">
\t\t\t\t\t\t\t\t<div class=\"filter__title\">Цены на билеты от/до</div>
\t\t\t\t\t\t\t\t\t<div class=\"filter-slider\">
\t\t\t\t\t\t\t\t\t\t<vue-slider 
\t\t\t\t\t\t\t\t\t\t\tref=\"filter-pricerange\"
\t\t\t\t\t\t\t\t\t\t\tv-model=\"generateRouteQuizSelectedOptions.price.range\" 
\t\t\t\t\t\t\t\t\t\t\t:min=\"generateRouteQuizSelectedOptions.price.min\" 
\t\t\t\t\t\t\t\t\t\t\t:max=\"generateRouteQuizSelectedOptions.price.max\"
\t\t\t\t\t\t\t\t\t\t\t:enable-cross=\"false\"
\t\t\t\t\t\t\t\t\t\t\t:tooltip=\"'always'\"
\t\t\t\t\t\t\t\t\t\t\t:tooltip-formatter=\"generateRouteQuizSelectedOptions.price.format\"
\t\t\t\t\t\t\t\t\t\t\t:min-range=\"1\"
\t\t\t\t\t\t\t\t\t\t\t:contained=\"true\"
\t\t\t\t\t\t\t\t\t\t\t:lazy=\"true\"
\t\t\t\t\t\t\t\t\t\t></vue-slider>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"filter\" v-for=\"(q, i) in generateRouteQuizQuestions\" :key=\"q.id\">
\t\t\t\t\t\t\t\t<div class=\"filter__title\">{{q.title}}</div>
\t\t\t\t\t\t\t\t<template v-if=\"q.type == 'or'\">
\t\t\t\t\t\t\t\t\t<div class=\"filter-radios\">
\t\t\t\t\t\t\t\t\t\t<!--div class=\"filter-radio\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" value=\"\" name=\"cat-filter-places-type\" @change=\"generateRouteQuizSelectedOptions[q.id].items = []\" :id=\"`\${q.id}-0`\">
\t\t\t\t\t\t\t\t\t\t\t<label :for=\"`\${q.id}-0`\">Все</label>
\t\t\t\t\t\t\t\t\t\t</div-->
\t\t\t\t\t\t\t\t\t\t<div class=\"filter-radio\" v-for=\"(v, j) in q.variants\" :key=\"v.value\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" :value=\"v.value\" :name=\"`\${q.id}-gr`\" @change=\"generateRouteQuizSelectedOptions[q.id].items = [v.value]\" :id=\"`\${q.id}-\${j + 1}`\">
\t\t\t\t\t\t\t\t\t\t\t<label :for=\"`\${q.id}-\${j + 1}`\">{{v.title}}</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</template>
\t\t\t\t\t\t\t\t<template v-else>
\t\t\t\t\t\t\t\t\t<div class=\"filter-radios\">
\t\t\t\t\t\t\t\t\t\t<div class=\"filter-radio\" v-for=\"(v, j) in q.variants\" :key=\"v.value\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" :value=\"v.value\" :name=\"`\${q.id}-gr`\" v-model=\"generateRouteQuizSelectedOptions[q.id].items\" :id=\"`\${q.id}-\${j + 1}`\">
\t\t\t\t\t\t\t\t\t\t\t<label :for=\"`\${q.id}-\${j + 1}`\">{{v.title}}</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</template>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"gqz__action\">
\t\t\t\t<div class=\"v-btn v-btn--color-blue\" :class=\"{'v-btn--disabled': !isRouteGenerationEnabled}\" @click.stop=\"generateFakeRoute\">Сгенерировать</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "generate_route_quiz";
    }

    public function getDebugInfo()
    {
        return array (  83 => 47,  43 => 1,);
    }
}
/* <div class="gqz" v-show="isGenerateRouteQuizShowed" v-cloak>*/
/* 	<div class="gqz__wrapper">*/
/* 		<div class="gqz__inner">*/
/* 			<div class="gqz__header">*/
/* 				<div class="gqz__title">Создать маршрут для вас?</div>*/
/* 				<div class="gqz__closer" @click.stop="isGenerateRouteQuizShowed = false">*/
/* 					<svg xmlns="http://www.w3.org/2000/svg" width="23" height="24" viewBox="0 0 23 24" fill="none"><path d="M5.57159 17.3144C5.43017 17.173 5.35239 17.0104 5.33825 16.8265C5.35239 16.6427 5.43017 16.48 5.57159 16.3386L9.98394 11.9263L5.63523 7.57756C5.49381 7.43614 5.41603 7.27351 5.40189 7.08966C5.41603 6.90581 5.49381 6.74318 5.63523 6.60175L6.31406 5.92293C6.45548 5.78151 6.61104 5.7108 6.78075 5.7108C6.97874 5.7108 7.14844 5.78151 7.28986 5.92293L11.6386 10.2716L15.9236 5.98657C16.0651 5.84515 16.2206 5.77444 16.3903 5.77444C16.5883 5.77444 16.758 5.84515 16.8994 5.98657L17.6419 6.72903C17.7833 6.87046 17.847 7.03309 17.8328 7.21694C17.847 7.40079 17.7833 7.56342 17.6419 7.70484L13.3568 11.9899L17.7268 16.3598C17.8682 16.5013 17.9318 16.6639 17.9177 16.8477C17.9318 17.0316 17.8682 17.1942 17.7268 17.3356L17.0479 18.0145C16.9065 18.1559 16.7368 18.2266 16.5388 18.2266C16.3691 18.2266 16.2136 18.1559 16.0721 18.0145L11.7022 13.6445L7.28986 18.0569C7.14844 18.1983 6.97874 18.269 6.78075 18.269C6.61104 18.269 6.45548 18.1983 6.31406 18.0569L5.57159 17.3144Z" fill="#000"></path></svg>*/
/* 				</div>*/
/* 			</div>*/
/* 			*/
/* 			<div class="gqz__main">*/
/* 				<div class="gqz-q">*/
/* 					<div class="gqz-q__actions" >*/
/* 						<button class="rbtn rbtn--text" @click.stop="generateRouteFromPlan">*/
/* 							<svg xmlns="http://www.w3.org/2000/svg" width="21" height="18" viewBox="0 0 21 18" fill="none">*/
/* 								<path d="M19.1603 1.99992C18.1002 0.937129 16.6951 0.288461 15.1986 0.171091C13.7021 0.0537212 12.213 0.475387 11.0003 1.35992C9.72793 0.413559 8.14427 -0.0155675 6.5682 0.158959C4.99212 0.333485 3.54072 1.0987 2.50625 2.30051C1.47178 3.50231 0.931098 5.05144 0.993077 6.63594C1.05506 8.22043 1.71509 9.72259 2.84028 10.8399L9.05028 17.0599C9.57029 17.5717 10.2707 17.8585 11.0003 17.8585C11.7299 17.8585 12.4303 17.5717 12.9503 17.0599L19.1603 10.8399C20.3279 9.66519 20.9832 8.07619 20.9832 6.41992C20.9832 4.76365 20.3279 3.17465 19.1603 1.99992ZM17.7503 9.45992L11.5403 15.6699C11.4696 15.7413 11.3855 15.7979 11.2928 15.8366C11.2001 15.8752 11.1007 15.8951 11.0003 15.8951C10.8999 15.8951 10.8004 15.8752 10.7077 15.8366C10.615 15.7979 10.5309 15.7413 10.4603 15.6699L4.25028 9.42992C3.46603 8.62827 3.02689 7.55139 3.02689 6.42992C3.02689 5.30846 3.46603 4.23158 4.25028 3.42992C5.04943 2.64091 6.12725 2.19849 7.25028 2.19849C8.3733 2.19849 9.45112 2.64091 10.2503 3.42992C10.3432 3.52365 10.4538 3.59804 10.5757 3.64881C10.6976 3.69958 10.8283 3.72572 10.9603 3.72572C11.0923 3.72572 11.223 3.69958 11.3449 3.64881C11.4667 3.59804 11.5773 3.52365 11.6703 3.42992C12.4694 2.64091 13.5472 2.19849 14.6703 2.19849C15.7933 2.19849 16.8711 2.64091 17.6703 3.42992C18.4653 4.22107 18.9189 5.29211 18.9338 6.41361C18.9488 7.5351 18.5239 8.61786 17.7503 9.42992V9.45992Z" fill="black"/>*/
/* 							</svg>*/
/* 							Из избранного*/
/* 						</button>*/
/* 						<button class="rbtn rbtn--text">*/
/* 							<svg xmlns="http://www.w3.org/2000/svg" width="20" height="23" viewBox="0 0 20 23" fill="none">*/
/* 								<path fill-rule="evenodd" clip-rule="evenodd" d="M3.68659 6.05764C2.87114 6.48613 2.35774 7.09164 2.35774 8.04484C2.35774 9.00232 2.87643 9.61055 3.66751 10.0392C4.50276 10.4917 5.50155 10.6466 5.98867 10.6466H12.4253C12.4389 10.6466 12.4529 10.6466 12.4672 10.6466C13.2399 10.6464 14.8788 10.6459 16.3491 11.191C17.1167 11.4755 17.9051 11.9313 18.5019 12.6706C19.1112 13.4255 19.4514 14.3905 19.4514 15.5611C19.4514 16.7317 19.1112 17.6968 18.5019 18.4515C17.9051 19.1909 17.1167 19.6466 16.3491 19.9312C14.8788 20.4762 13.2399 20.4757 12.4672 20.4756C12.4529 20.4756 12.4389 20.4756 12.4253 20.4756H6.24801V18.1629H12.4253C13.2272 18.1629 14.4786 18.1522 15.5157 17.7678C16.0154 17.5825 16.397 17.3336 16.6535 17.0159C16.8973 16.7138 17.0936 16.2696 17.0936 15.5611C17.0936 14.8526 16.8973 14.4083 16.6535 14.1062C16.397 13.7885 16.0154 13.5397 15.5157 13.3545C14.4786 12.97 13.2272 12.9593 12.4253 12.9593H5.98867C5.17902 12.9593 3.7729 12.7384 2.52746 12.0635C1.23782 11.3647 0 10.0938 0 8.04484C0 5.99153 1.24313 4.71798 2.57322 4.01905C3.85857 3.34361 5.32881 3.13037 6.24801 3.13037H15.9619V5.44306H6.24801C5.61111 5.44306 4.54676 5.60562 3.68659 6.05764Z" fill="black"/>*/
/* 								<path fill-rule="evenodd" clip-rule="evenodd" d="M4.7128 18.7409C4.38727 18.7409 4.12337 18.9997 4.12337 19.3191C4.12337 19.6384 4.38727 19.8973 4.7128 19.8973C5.03834 19.8973 5.30224 19.6384 5.30224 19.3191C5.30224 18.9997 5.03834 18.7409 4.7128 18.7409ZM1.76562 19.3191C1.76562 17.7225 3.08512 16.4282 4.7128 16.4282C6.34047 16.4282 7.65998 17.7225 7.65998 19.3191C7.65998 20.9157 6.34047 22.2099 4.7128 22.2099C3.08512 22.2099 1.76562 20.9157 1.76562 19.3191Z" fill="black"/>*/
/* 								<path fill-rule="evenodd" clip-rule="evenodd" d="M14.8358 4.2867L12.1328 1.63532L13.7999 0L18.1702 4.2867L13.7999 8.57339L12.1328 6.93807L14.8358 4.2867Z" fill="black"/>*/
/* 							</svg>*/
/* 							Выбрать готовый*/
/* 						</button>*/
/* 						<button class="rbtn rbtn--text">*/
/* 							<svg xmlns="http://www.w3.org/2000/svg" width="27" height="20" viewBox="0 0 27 20" fill="none">*/
/* 								<path d="M0.842217 0.0106612C3.39019 0.597015 6.44989 1.69509 9.01919 2.47335L17.1428 0.0213224C17.2175 4.88497e-07 17.2921 0 17.3667 0C17.4414 0 17.516 0.0106615 17.5906 0.0213224L25.8529 2.51599C25.9275 2.53731 26.0021 2.57996 26.0661 2.6226C26.1301 2.66524 26.1834 2.72921 26.2367 2.79318C26.2793 2.85714 26.322 2.92111 26.3433 2.99573C26.3646 3.07036 26.3753 3.14499 26.3753 3.21961V6.3646C26.3753 6.54584 26.3006 6.70575 26.1834 6.82302C26.0661 6.94029 25.9062 7.01492 25.7249 7.01492C25.5437 7.01492 25.3838 6.94029 25.2665 6.82302C25.1492 6.70575 25.0746 6.54584 25.0746 6.3646V3.63539L18.0277 1.51386V3.01706C18.0277 3.19829 17.9531 3.35821 17.8358 3.47548C17.7185 3.59275 17.5586 3.66738 17.3774 3.66738C17.1962 3.66738 17.0362 3.59275 16.919 3.47548C16.8017 3.35821 16.7271 3.19829 16.7271 3.01706V1.51386L9.68017 3.63539V5.23454C9.68017 5.41578 9.60554 5.57569 9.48827 5.69296C9.371 5.81023 9.21108 5.88486 9.02985 5.88486C8.84861 5.88486 8.6887 5.81023 8.57142 5.69296C8.45415 5.57569 8.37953 5.41578 8.37953 5.23454V3.63539L1.33262 1.51386V7.15352C1.33262 7.33475 1.258 7.49466 1.14072 7.61194C1.02345 7.72921 0.863539 7.80383 0.682302 7.80383C0.501066 7.80383 0.341151 7.72921 0.223881 7.61194C0.10661 7.49466 0.0319829 7.33475 0.0319829 7.15352V0.692963C0.0319829 0.66098 0.0319829 0.628999 0.0426439 0.586355C0.0426439 0.554372 0.0533049 0.522389 0.0639659 0.490406C0.0852878 0.415779 0.117271 0.351813 0.159915 0.298508C0.202559 0.234542 0.255863 0.181238 0.309168 0.138594C0.33049 0.127933 0.341151 0.117271 0.362473 0.10661C0.415778 0.0746272 0.479744 0.0426446 0.533049 0.0319837C0.597015 0.0106617 0.660981 0 0.724946 0H0.788912C0.810234 0 0.831556 0.0106612 0.852878 0.0106612H0.863539H0.842217ZM25.0746 9.87206C25.0746 9.69083 25.1492 9.53091 25.2665 9.41364C25.3838 9.29637 25.5544 9.22174 25.7249 9.22174C25.9062 9.22174 26.0661 9.29637 26.1834 9.41364C26.3006 9.53091 26.3753 9.70149 26.3753 9.87206V19.2964C26.3753 19.3283 26.3753 19.3603 26.3646 19.403C26.3646 19.435 26.3539 19.4669 26.3433 19.5096C26.322 19.5842 26.29 19.6482 26.2473 19.7015C26.2047 19.7654 26.1514 19.8188 26.0981 19.8614C26.0767 19.8827 26.0448 19.904 26.0128 19.9147C25.9595 19.9467 25.9062 19.968 25.8529 19.9787C25.7996 19.9893 25.7356 20 25.6823 20C25.6503 20 25.6183 20 25.5757 19.9893C25.5437 19.9893 25.5117 19.9787 25.4797 19.968L17.3667 17.5266L9.25373 19.968C9.18976 19.9893 9.09381 20 9.00852 20C8.92324 20 8.83795 19.9893 8.76332 19.968L0.522388 17.484L0.469083 17.4627L0.426439 17.4414C0.373134 17.4094 0.319829 17.3774 0.266524 17.3454C0.21322 17.3028 0.170576 17.2601 0.138593 17.2068C0.0959488 17.1428 0.0533049 17.0789 0.0319829 17.0043C0.010661 16.9296 0 16.855 0 16.7804V12.2068C0 12.0256 0.0746268 11.8657 0.191898 11.7484C0.309168 11.6311 0.479744 11.5565 0.65032 11.5565C0.831556 11.5565 0.991471 11.6311 1.10874 11.7484C1.22601 11.8657 1.30064 12.0362 1.30064 12.2068V16.3539L8.34754 18.4755V16.8443C8.34754 16.6631 8.42217 16.5032 8.53944 16.3859C8.65671 16.2686 8.82729 16.194 8.99786 16.194C9.1791 16.194 9.33902 16.2686 9.45629 16.3859C9.57356 16.5032 9.64818 16.6738 9.64818 16.8443V18.4755L16.6951 16.3539V5.08529C16.6951 4.90405 16.7697 4.74413 16.887 4.62686C17.0043 4.50959 17.1748 4.43497 17.3454 4.43497C17.5266 4.43497 17.6866 4.50959 17.8038 4.62686C17.9211 4.74413 17.9957 4.91471 17.9957 5.08529V16.3539L25.0426 18.4755V9.87206H25.0746ZM8.36887 8.742C8.36887 8.56076 8.44349 8.40085 8.56076 8.28358C8.67804 8.16631 8.84861 8.09168 9.01919 8.09168C9.20042 8.09168 9.36034 8.16631 9.47761 8.28358C9.59488 8.40085 9.66951 8.57142 9.66951 8.742V13.3369C9.66951 13.5181 9.59488 13.678 9.47761 13.7953C9.36034 13.9126 9.20042 13.9872 9.01919 13.9872C8.83795 13.9872 8.67804 13.9126 8.56076 13.7953C8.44349 13.678 8.36887 13.5181 8.36887 13.3369V8.742ZM1.32196 10.1386C1.32196 10.3198 1.24733 10.4797 1.13006 10.597C1.01279 10.7143 0.852878 10.7889 0.671641 10.7889C0.490405 10.7889 0.33049 10.7143 0.21322 10.597C0.0959488 10.4797 0.021322 10.3198 0.021322 10.1386V9.36034C0.021322 9.1791 0.0959488 9.01919 0.21322 8.90191C0.33049 8.78464 0.501066 8.71002 0.671641 8.71002C0.852878 8.71002 1.01279 8.78464 1.13006 8.90191C1.24733 9.01919 1.32196 9.18976 1.32196 9.36034V10.1386Z" fill="#2B2A29"/>*/
/* 							</svg>*/
/* 							Маршруты пользователей*/
/* 						</button>*/
/* 					</div>*/
/* 					<div class="gqz-q__variants">*/
/* 						<div class="gqz__title">Собрать по параметрам</div>*/
/* 						<div class="gqz-q__actions">*/
/* 							<city-switcher :selectedcity="generateRouteQuizSelectedOptions.city" @set-city="setGenRouteCity"></city-switcher>*/
/* 							{#*/
/* 							<button class="rbtn rbtn--text">*/
/* 								<svg xmlns="http://www.w3.org/2000/svg" width="18" height="24" viewBox="0 0 18 24" fill="none">*/
/* 									<path d="M9.28139 23.7922C9.24675 23.8268 9.24675 23.8268 9.21212 23.8615C9.17749 23.8615 9.17749 23.8961 9.14286 23.8961C9.10823 23.8961 9.07359 23.9307 9.03896 23.9307C9.00433 23.9654 8.93506 23.9654 8.90043 23.9654C8.8658 23.9654 8.79654 23.9654 8.7619 24C8.72727 24 8.72727 24 8.69264 24C8.65801 24 8.58874 24 8.55411 23.9654C8.51948 23.9654 8.45022 23.9307 8.41558 23.9307L8.31169 23.8961C8.27706 23.8961 8.24242 23.8615 8.24242 23.8615C8.20779 23.8268 8.20779 23.8268 8.17316 23.7922C7.37662 23.1342 6.61472 22.4069 5.85281 21.5758C5.12554 20.7792 4.4329 19.9134 3.77489 19.013C3.15152 18.1472 2.5974 17.2468 2.07792 16.3117C1.59307 15.4113 1.17749 14.4762 0.831169 13.5758C0.761905 13.3333 0.761905 13.1255 0.865801 12.9177C0.969697 12.71 1.14286 12.5368 1.35065 12.4675C1.59307 12.3983 1.80087 12.3983 2.00866 12.5022C2.21645 12.6061 2.38961 12.7792 2.45887 12.987C2.77056 13.8182 3.15152 14.684 3.60173 15.5152C4.05195 16.381 4.60606 17.2121 5.19481 18.0433C5.74892 18.8398 6.37229 19.6017 6.99567 20.2944C7.54978 20.9177 8.13853 21.5065 8.72727 22.026C9.62771 21.2294 10.5281 20.2597 11.3939 19.2208C12.2597 18.1472 13.0563 16.9697 13.7489 15.7576C14.4069 14.5801 14.9264 13.368 15.2727 12.1558C15.5844 11.0476 15.7922 9.90476 15.7922 8.79654C15.7922 7.82684 15.619 6.92641 15.2727 6.09524C14.9264 5.22944 14.4069 4.46753 13.7489 3.80952C13.0909 3.15152 12.329 2.63203 11.4632 2.28571C10.632 1.93939 9.7316 1.76623 8.7619 1.76623C7.79221 1.76623 6.89177 1.93939 6.06061 2.28571C5.19481 2.63203 4.4329 3.15152 3.77489 3.80952C3.11688 4.46753 2.5974 5.22944 2.25108 6.09524C1.90476 6.92641 1.7316 7.82684 1.7316 8.79654V9.07359V9.31602L1.76623 9.59307L1.80087 9.87013C1.8355 10.1126 1.76623 10.3203 1.59307 10.4935C1.45455 10.6667 1.24675 10.7706 1.00433 10.8052C0.761905 10.8398 0.554113 10.7706 0.380952 10.5974C0.207792 10.4589 0.103896 10.2511 0.0692641 10.0087L0.034632 9.69697L0 9.38528V9.07359V8.7619C0 7.58442 0.242424 6.44156 0.658009 5.4026C1.10823 4.329 1.76623 3.35931 2.56277 2.56277C3.35931 1.76623 4.329 1.10823 5.4026 0.658009C6.44156 0.242424 7.58442 0 8.7619 0C9.93939 0 11.0823 0.242424 12.1212 0.658009C13.1948 1.10823 14.1645 1.76623 14.961 2.56277C15.7576 3.35931 16.4156 4.329 16.8658 5.4026C17.2814 6.44156 17.5238 7.58442 17.5238 8.7619C17.5238 10.0087 17.316 11.29 16.9351 12.5714C16.5541 13.9221 15.9654 15.2727 15.2381 16.5541C14.4762 17.9394 13.5758 19.2554 12.5714 20.4675C11.5325 21.7489 10.3896 22.8571 9.28139 23.8268V23.7922ZM8.72727 5.57576C9.21212 5.57576 9.69697 5.67965 10.1472 5.85281C10.5281 6.02597 10.9091 6.23377 11.2208 6.54545L11.3247 6.64935C11.671 6.99567 11.9481 7.37662 12.1212 7.86147C12.2944 8.31169 12.3983 8.7619 12.3983 9.28139C12.3983 9.76623 12.2944 10.2511 12.1212 10.7013C11.9481 11.1515 11.671 11.5671 11.3247 11.9134C10.9784 12.2597 10.5974 12.5368 10.1472 12.71C9.69697 12.8831 9.24675 12.987 8.72727 12.987C8.24242 12.987 7.75758 12.8831 7.30736 12.71C6.99567 12.5714 6.68398 12.3983 6.40693 12.1905L6.12987 11.9134C5.78355 11.5671 5.50649 11.1861 5.33333 10.7013C5.16017 10.2511 5.05628 9.80087 5.05628 9.28139C5.05628 8.79654 5.16017 8.31169 5.33333 7.86147C5.50649 7.41126 5.78355 6.99567 6.12987 6.68398C6.47619 6.33766 6.85714 6.06061 7.30736 5.88745C7.75758 5.71429 8.20779 5.61039 8.72727 5.61039V5.57576ZM10.0087 7.82684C9.8355 7.68831 9.66234 7.54978 9.45455 7.48052C9.21212 7.37662 8.9697 7.34199 8.72727 7.34199C8.45022 7.34199 8.20779 7.37662 8 7.48052C7.75758 7.58442 7.54978 7.72294 7.37662 7.8961C7.20346 8.06926 7.06493 8.27706 6.96104 8.51948C6.85714 8.7619 6.82251 9.00433 6.82251 9.24675C6.82251 9.52381 6.85714 9.76623 6.96104 9.97403C7.06493 10.2165 7.20346 10.4242 7.37662 10.5974L7.44589 10.6667C7.61905 10.8052 7.79221 10.9437 8 11.0476C8.24242 11.1515 8.48485 11.1861 8.72727 11.1861C9.00433 11.1861 9.24675 11.1515 9.45455 11.0476C9.69697 10.9437 9.90476 10.8052 10.0779 10.632C10.2511 10.4589 10.3896 10.2511 10.4935 10.0087C10.5974 9.76623 10.632 9.52381 10.632 9.28139C10.632 9.00433 10.5974 8.7619 10.4935 8.55411C10.3896 8.31169 10.2511 8.1039 10.0779 7.93074L10.0087 7.86147V7.82684Z" fill="#2B2A29"/>*/
/* 								</svg>*/
/* 								Город/место*/
/* 							</button>*/
/* 							#}*/
/* 							<v-date-picker :min-date='new Date()' :columns="2" is-range v-model="generateRouteQuizSelectedOptions.dates" @input="setMyRouteDays">*/
/* 								<template v-slot="{ inputValue, togglePopover }">*/
/* 									<button class="rbtn rbtn--text" @click="togglePopover()">*/
/* 										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="26" viewBox="0 0 24 26" fill="none">*/
/* 											<path d="M17.0551 0.00119755C17.5601 0.0319941 17.9497 0.454001 17.9362 0.955598V2.30096C21.9478 2.68042 24 4.8422 24 8.72879V19.4802C24 23.8037 21.4725 26 16.4986 26H7.50145C2.52754 26 0 23.8037 0 19.4802V8.72879C0 6.14156 0.904348 4.29025 2.75942 3.20936L2.88954 3.13706C3.15846 3.01468 3.47386 3.0259 3.73602 3.17429C4.04187 3.34742 4.22249 3.67739 4.20226 4.02608C4.18202 4.37476 3.96444 4.68201 3.64058 4.8192C2.41159 5.53212 1.83188 6.77399 1.83188 8.72879V9.07376H18.7478C19.2537 9.07376 19.6638 9.48046 19.6638 9.98216C19.6638 10.4839 19.2537 10.8906 18.7478 10.8906H1.83188V19.4802C1.83188 22.7803 3.47826 24.1487 7.50145 24.1717H16.4986C20.4638 24.1717 22.1565 22.7688 22.1565 19.4687V8.71729C22.1565 5.84259 20.8696 4.45124 17.9362 4.11777V4.99168C17.8686 5.45748 17.4574 5.79753 16.9832 5.77978C16.509 5.76204 16.1248 5.39222 16.0928 4.92269V0.875107L16.1097 0.731324C16.1475 0.542905 16.2448 0.369845 16.3895 0.238437C16.5704 0.0741765 16.8101 -0.0112815 17.0551 0.00119755ZM17.5827 18.4561L17.7303 18.4654C17.9834 18.4963 18.2209 18.6095 18.4042 18.7895C18.6241 19.0055 18.7478 19.2997 18.7478 19.6067C18.7478 20.2417 18.2287 20.7565 17.5884 20.7565C16.9481 20.7565 16.429 20.2417 16.429 19.6067C16.429 18.9716 16.9481 18.4568 17.5884 18.4568L17.5827 18.4561ZM12.0232 18.4568L12.1686 18.4657C12.7403 18.5367 13.1826 19.0205 13.1826 19.6067C13.1826 20.2417 12.6635 20.7565 12.0232 20.7565C11.3829 20.7565 10.8638 20.2417 10.8638 19.6067C10.8638 18.9716 11.3829 18.4568 12.0232 18.4568ZM6.464 18.4561L6.61145 18.4654C6.8646 18.4963 7.10202 18.6095 7.28531 18.7895C7.50526 19.0055 7.62899 19.2997 7.62899 19.6067C7.62899 20.2417 7.1099 20.7565 6.46957 20.7565C5.82924 20.7565 5.31015 20.2417 5.31015 19.6067C5.31015 18.9716 5.82924 18.4568 6.46957 18.4568L6.464 18.4561ZM17.5827 13.7995L17.7303 13.8083C17.9834 13.8393 18.2209 13.9525 18.4042 14.1325C18.6241 14.3484 18.7478 14.6427 18.7478 14.9496C18.7478 15.5847 18.2287 16.0995 17.5884 16.0995C16.9481 16.0995 16.429 15.5847 16.429 14.9496C16.429 14.3146 16.9481 13.7998 17.5884 13.7998L17.5827 13.7995ZM12.0232 13.7998L12.1686 13.8087C12.7403 13.8797 13.1826 14.3634 13.1826 14.9496C13.1826 15.5847 12.6635 16.0995 12.0232 16.0995C11.3829 16.0995 10.8638 15.5847 10.8638 14.9496C10.8638 14.3146 11.3829 13.7998 12.0232 13.7998ZM6.464 13.7995L6.61145 13.8083C6.8646 13.8393 7.10202 13.9525 7.28531 14.1325C7.50526 14.3484 7.62899 14.6427 7.62899 14.9496C7.62899 15.5847 7.1099 16.0995 6.46957 16.0995C5.82924 16.0995 5.31015 15.5847 5.31015 14.9496C5.31015 14.3146 5.82924 13.7998 6.46957 13.7998L6.464 13.7995ZM6.98551 0.138382C7.45771 0.138382 7.85454 0.490212 7.90725 0.955598V2.20897H13.1478C13.6537 2.20897 14.0638 2.61568 14.0638 3.11737C14.0638 3.61907 13.6537 4.02578 13.1478 4.02578H7.88406V4.93419C7.88408 5.17712 7.78599 5.40993 7.6117 5.58063C7.43741 5.75132 7.20145 5.84567 6.95652 5.84259L6.82259 5.82955C6.38619 5.75477 6.05785 5.37479 6.06369 4.92269V0.955598L6.08958 0.819628C6.1966 0.423364 6.56053 0.138382 6.98551 0.138382Z" fill="#2D4356"/>*/
/* 										</svg>*/
/* 										 {{ generateRouteQuizDateFormat(inputValue) }} */
/* 									</button>*/
/* 								</template>*/
/* 							</v-date-picker>*/
/* 							*/
/* 						</div>*/
/* 						<div class="gqz-q__variant">*/
/* 							<div class="filter filter--price">*/
/* 								<div class="filter__title">Цены на билеты от/до</div>*/
/* 									<div class="filter-slider">*/
/* 										<vue-slider */
/* 											ref="filter-pricerange"*/
/* 											v-model="generateRouteQuizSelectedOptions.price.range" */
/* 											:min="generateRouteQuizSelectedOptions.price.min" */
/* 											:max="generateRouteQuizSelectedOptions.price.max"*/
/* 											:enable-cross="false"*/
/* 											:tooltip="'always'"*/
/* 											:tooltip-formatter="generateRouteQuizSelectedOptions.price.format"*/
/* 											:min-range="1"*/
/* 											:contained="true"*/
/* 											:lazy="true"*/
/* 										></vue-slider>*/
/* 									</div>*/
/* 								</div>*/
/* 							<div class="filter" v-for="(q, i) in generateRouteQuizQuestions" :key="q.id">*/
/* 								<div class="filter__title">{{q.title}}</div>*/
/* 								<template v-if="q.type == 'or'">*/
/* 									<div class="filter-radios">*/
/* 										<!--div class="filter-radio">*/
/* 											<input type="radio" value="" name="cat-filter-places-type" @change="generateRouteQuizSelectedOptions[q.id].items = []" :id="`${q.id}-0`">*/
/* 											<label :for="`${q.id}-0`">Все</label>*/
/* 										</div-->*/
/* 										<div class="filter-radio" v-for="(v, j) in q.variants" :key="v.value">*/
/* 											<input type="radio" :value="v.value" :name="`${q.id}-gr`" @change="generateRouteQuizSelectedOptions[q.id].items = [v.value]" :id="`${q.id}-${j + 1}`">*/
/* 											<label :for="`${q.id}-${j + 1}`">{{v.title}}</label>*/
/* 										</div>*/
/* 									</div>*/
/* 								</template>*/
/* 								<template v-else>*/
/* 									<div class="filter-radios">*/
/* 										<div class="filter-radio" v-for="(v, j) in q.variants" :key="v.value">*/
/* 											<input type="checkbox" :value="v.value" :name="`${q.id}-gr`" v-model="generateRouteQuizSelectedOptions[q.id].items" :id="`${q.id}-${j + 1}`">*/
/* 											<label :for="`${q.id}-${j + 1}`">{{v.title}}</label>*/
/* 										</div>*/
/* 									</div>*/
/* 								</template>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="gqz__action">*/
/* 				<div class="v-btn v-btn--color-blue" :class="{'v-btn--disabled': !isRouteGenerationEnabled}" @click.stop="generateFakeRoute">Сгенерировать</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
