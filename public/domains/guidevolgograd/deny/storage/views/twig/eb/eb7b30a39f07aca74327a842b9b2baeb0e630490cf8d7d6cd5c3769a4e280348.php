<?php

/* cityswitcher_search */
class __TwigTemplate_3ee622e926520daeed856de71840f8a746c81057a011082d47ef04d4ef184331 extends TwigBridge\Twig\Template
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
        $tags = array("set" => 1, "for" => 4, "if" => 5);
        $filters = array("length" => 5, "merge" => 17, "escape" => 45, "json_encode" => 45);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'for', 'if'),
                array('length', 'merge', 'escape', 'json_encode'),
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
        $context["homepage"] = (isset($context["page"]) ? $context["page"] : null);
        // line 2
        $context["index"] = (isset($context["page"]) ? $context["page"] : null);
        // line 3
        $context["check"] = true;
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["items"]) {
            if ((isset($context["check"]) ? $context["check"] : null)) {
                // line 5
                echo "\t";
                if ((twig_length_filter($this->env, $this->getAttribute((isset($context["index"]) ? $context["index"] : null), "parent_page", array())) > 0)) {
                    // line 6
                    echo "\t\t";
                    $context["index"] = $this->getAttribute((isset($context["index"]) ? $context["index"] : null), "parent_page", array());
                    // line 7
                    echo "\t\t";
                    $context["homepage"] = (isset($context["index"]) ? $context["index"] : null);
                    // line 8
                    echo "\t";
                } else {
                    // line 9
                    echo "\t\t";
                    $context["check"] = false;
                    // line 10
                    echo "\t";
                }
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['items'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "
";
        // line 13
        $context["cities"] = array();
        // line 14
        echo "
";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["homepage"]) ? $context["homepage"] : null), "active_sub_pages", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 16
            echo "\t";
            if (($this->getAttribute($context["item"], "layout_id", array()) == 7)) {
                // line 17
                echo "\t\t";
                $context["cities"] = twig_array_merge((isset($context["cities"]) ? $context["cities"] : null), array(0 => $context["item"]));
                // line 18
                echo "\t";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "
<div class=\"city-switcher cselect\" :class=\"{'city-switcher--active': isCitySwitcherShow}\" v-click-outside=\"citySwitchClose\" id=\"citysw-search\"> 
\t<div class=\"city-switcher__title cselect__title\" @click=\"isCitySwitcherShow = true\" v-cloak>
\t\t<div class=\"city-switcher__icon cselect__icon\">
\t\t\t<!--svg xmlns=\"http://www.w3.org/2000/svg\" width=\"17\" height=\"24\" viewBox=\"0 0 17 24\" fill=\"none\"><path d=\"M14.1461 2.91392L14.1461 2.91394C15.598 4.40614 16.5 6.46724 16.5 8.73752C16.5 12.0961 14.8348 15.813 12.9306 18.721C11.9831 20.1678 10.9909 21.3923 10.1459 22.2489C9.72256 22.6782 9.34528 23.0057 9.03681 23.222C8.88252 23.3302 8.75446 23.4042 8.65368 23.4496C8.60385 23.472 8.56527 23.4853 8.53724 23.4927C8.51153 23.4995 8.49982 23.5 8.49983 23.5H8.50017C8.50018 23.5 8.48847 23.4995 8.46276 23.4927C8.43473 23.4853 8.39615 23.472 8.34632 23.4496C8.24554 23.4042 8.11748 23.3302 7.96319 23.222C7.65472 23.0057 7.27744 22.6782 6.85405 22.2489C6.00909 21.3923 5.01685 20.1678 4.06943 18.721C2.1652 15.813 0.5 12.0961 0.5 8.73752C0.5 6.46727 1.40226 4.40615 2.85392 2.91392L2.85395 2.91389C4.30539 1.42166 6.30417 0.5 8.5 0.5C10.6958 0.5 12.6946 1.42189 14.1461 2.91392ZM12.4828 4.66341L12.4828 4.66337C11.464 3.61635 10.0543 2.96076 8.50024 2.96076C6.94598 2.96076 5.53628 3.61633 4.51766 4.66341C3.49922 5.71031 2.86692 7.1532 2.86692 8.73728C2.86692 10.3216 3.49921 11.7645 4.51766 12.8114L4.51771 12.8114C5.53653 13.8585 6.9462 14.514 8.50024 14.514C10.0543 14.514 11.4642 13.8585 12.4828 12.8114C13.5013 11.7645 14.1336 10.3216 14.1336 8.73728C14.1336 7.1532 13.5013 5.71031 12.4828 4.66341Z\" stroke=\"#2D2727\"/></svg-->
\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"19\" height=\"25\" viewBox=\"0 0 19 25\" fill=\"none\"><path d=\"M10.1259 24.6906C10.0912 24.7253 10.0912 24.7253 10.0566 24.7599C10.022 24.7599 10.022 24.7945 9.98734 24.7945C9.95271 24.7945 9.91808 24.8292 9.88344 24.8292C9.84881 24.8638 9.77955 24.8638 9.74492 24.8638C9.71028 24.8638 9.64102 24.8638 9.60639 24.8984C9.57176 24.8984 9.57176 24.8984 9.53712 24.8984C9.50249 24.8984 9.43323 24.8984 9.39859 24.8638C9.36396 24.8638 9.2947 24.8292 9.26007 24.8292L9.15617 24.7945C9.12154 24.7945 9.08691 24.7599 9.08691 24.7599C9.05227 24.7253 9.05227 24.7253 9.01764 24.6906C8.22111 24.0326 7.4592 23.3054 6.6973 22.4742C5.97002 21.6777 5.27738 20.8119 4.61937 19.9114C3.996 19.0456 3.44188 18.1452 2.9224 17.2101C2.43756 16.3097 2.02197 15.3746 1.67565 14.4742C1.60639 14.2318 1.60639 14.024 1.71028 13.8162C1.81418 13.6084 1.98734 13.4352 2.19513 13.366C2.43756 13.2967 2.64535 13.2967 2.85314 13.4006C3.06093 13.5045 3.23409 13.6777 3.30336 13.8855C3.61505 14.7166 3.996 15.5824 4.44621 16.4136C4.89643 17.2794 5.45054 18.1106 6.03929 18.9417C6.5934 19.7383 7.21678 20.5002 7.84015 21.1928C8.39427 21.8162 8.98301 22.4049 9.57176 22.9244C10.4722 22.1279 11.3726 21.1582 12.2384 20.1192C13.1042 19.0456 13.9008 17.8681 14.5934 16.656C15.2514 15.4785 15.7709 14.2664 16.1172 13.0543C16.4289 11.9461 16.6367 10.8032 16.6367 9.69497C16.6367 8.72528 16.4635 7.82484 16.1172 6.99368C15.7709 6.12787 15.2514 5.36597 14.5934 4.70796C13.9354 4.04995 13.1735 3.53047 12.3077 3.18415C11.4765 2.83783 10.5761 2.66467 9.60639 2.66467C8.63669 2.66467 7.73626 2.83783 6.90509 3.18415C6.03929 3.53047 5.27738 4.04995 4.61937 4.70796C3.96137 5.36597 3.44189 6.12787 3.09556 6.99368C2.74924 7.82484 2.57608 8.72528 2.57608 9.69497V9.97203V10.2145L2.61072 10.4915L2.64535 10.7686C2.67998 11.011 2.61072 11.2188 2.43756 11.3919C2.29903 11.5651 2.09124 11.669 1.84881 11.7036C1.60639 11.7383 1.39859 11.669 1.22543 11.4958C1.05227 11.3573 0.948379 11.1495 0.913746 10.9071L0.879114 10.5954L0.844482 10.2837V9.97203V9.66034C0.844482 8.48285 1.08691 7.34 1.50249 6.30103C1.95271 5.22744 2.61072 4.25774 3.40725 3.46121C4.20379 2.66467 5.17349 2.00666 6.24708 1.55645C7.28604 1.14086 8.4289 0.898438 9.60639 0.898438C10.7839 0.898438 11.9267 1.14086 12.9657 1.55645C14.0393 2.00666 15.009 2.66467 15.8055 3.46121C16.6021 4.25774 17.2601 5.22744 17.7103 6.30103C18.1259 7.34 18.3683 8.48285 18.3683 9.66034C18.3683 10.9071 18.1605 12.1885 17.7795 13.4699C17.3986 14.8205 16.8099 16.1712 16.0826 17.4525C15.3207 18.8378 14.4202 20.1538 13.4159 21.366C12.377 22.6474 11.2341 23.7556 10.1259 24.7253V24.6906ZM9.57176 6.4742C10.0566 6.4742 10.5415 6.57809 10.9917 6.75125C11.3726 6.92441 11.7536 7.1322 12.0653 7.44389L12.1692 7.54779C12.5155 7.89411 12.7925 8.27506 12.9657 8.75991C13.1389 9.21013 13.2428 9.66034 13.2428 10.1798C13.2428 10.6647 13.1389 11.1495 12.9657 11.5997C12.7925 12.05 12.5155 12.4655 12.1692 12.8119C11.8228 13.1582 11.4419 13.4352 10.9917 13.6084C10.5415 13.7816 10.0912 13.8855 9.57176 13.8855C9.08691 13.8855 8.60206 13.7816 8.15184 13.6084C7.84015 13.4699 7.52847 13.2967 7.25141 13.0889L6.97435 12.8119C6.62803 12.4655 6.35098 12.0846 6.17782 11.5997C6.00466 11.1495 5.90076 10.6993 5.90076 10.1798C5.90076 9.69497 6.00466 9.21013 6.17782 8.75991C6.35098 8.30969 6.62803 7.89411 6.97435 7.58242C7.32067 7.2361 7.70163 6.95904 8.15184 6.78588C8.60206 6.61272 9.05227 6.50883 9.57176 6.50883V6.4742ZM10.8531 8.72528C10.68 8.58675 10.5068 8.44822 10.299 8.37896C10.0566 8.27506 9.81418 8.24043 9.57176 8.24043C9.2947 8.24043 9.05227 8.27506 8.84448 8.37896C8.60206 8.48285 8.39427 8.62138 8.22111 8.79454C8.04795 8.9677 7.90942 9.17549 7.80552 9.41792C7.70163 9.66034 7.66699 9.90277 7.66699 10.1452C7.66699 10.4222 7.70163 10.6647 7.80552 10.8725C7.90942 11.1149 8.04795 11.3227 8.22111 11.4958L8.29037 11.5651C8.46353 11.7036 8.63669 11.8422 8.84448 11.9461C9.08691 12.05 9.32933 12.0846 9.57176 12.0846C9.84881 12.0846 10.0912 12.05 10.299 11.9461C10.5415 11.8422 10.7492 11.7036 10.9224 11.5305C11.0956 11.3573 11.2341 11.1495 11.338 10.9071C11.4419 10.6647 11.4765 10.4222 11.4765 10.1798C11.4765 9.90277 11.4419 9.66034 11.338 9.45255C11.2341 9.21013 11.0956 9.00233 10.9224 8.82917L10.8531 8.75991V8.72528Z\" fill=\"#8a8a8a\"/></svg>
\t\t</div>
\t\t<span v-if=\"selectedCity.city\">{{ selectedCity.city }}</span>
\t\t<span v-else>Выберите город</span>
\t</div>
\t";
        // line 30
        $context["cats"] = array();
        // line 31
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cities"]) ? $context["cities"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["city"]) {
            // line 32
            echo "\t\t";
            $context["cat"] = false;
            // line 33
            echo "\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["city"], "active_sub_pages", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 34
                echo "\t\t\t";
                $context["cat"] = $context["item"];
                // line 35
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "\t\t";
            if ((isset($context["cat"]) ? $context["cat"] : null)) {
                // line 37
                echo "\t\t\t";
                $context["cityID"] = $this->getAttribute($context["city"], "id", array());
                echo "\t
\t\t\t";
                // line 38
                $context["city"] = $this->getAttribute($context["city"], "field_header", array());
                // line 39
                echo "\t\t\t";
                $context["newCat"] = array("city" => $context["city"], "cat" => 0, "city_id" => (isset($context["cityID"]) ? $context["cityID"] : null));
                // line 40
                echo "\t\t\t";
                $context["cats"] = twig_array_merge((isset($context["cats"]) ? $context["cats"] : null), array(0 => (isset($context["newCat"]) ? $context["newCat"] : null)));
                // line 41
                echo "\t\t";
            }
            // line 42
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['city'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "\t
\t<transition name=\"cityswitch\">
\t\t<div class=\"city-switcher__list cselect__list\" data-json=\"";
        // line 45
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["cats"]) ? $context["cats"] : null)), "html", null, true));
        echo "\" v-show=\"isCitySwitcherShow\" v-cloak>
\t\t\t<div class=\"cityswitch__finder cselect__finder\">
\t\t\t\t<input type=\"text\" v-model=\"citySwitcherFilter\" placeholder=\"Поиск\">
\t\t\t</div>
\t\t\t<div class=\"city-switcher__items cselect__items\">
\t\t\t\t<div class=\"city-switcher__listitem cselect__listitem\">
\t\t\t\t\t<a href=\"#\" @click.prevent=\"selectedCity = ''; isCitySwitcherShow = false\">Все</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"city-switcher__listitem cselect__listitem\" v-for=\"city in citySwitcherFilteredList\">
\t\t\t\t\t<a href=\"#\" @click.prevent=\"selectedCity = city; isCitySwitcherShow = false\">{{ city.city }}</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</transition>
</div>";
    }

    public function getTemplateName()
    {
        return "cityswitcher_search";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 45,  163 => 43,  157 => 42,  154 => 41,  151 => 40,  148 => 39,  146 => 38,  141 => 37,  138 => 36,  132 => 35,  129 => 34,  124 => 33,  121 => 32,  116 => 31,  114 => 30,  102 => 20,  95 => 18,  92 => 17,  89 => 16,  85 => 15,  82 => 14,  80 => 13,  77 => 12,  69 => 10,  66 => 9,  63 => 8,  60 => 7,  57 => 6,  54 => 5,  49 => 4,  47 => 3,  45 => 2,  43 => 1,);
    }
}
/* {% set homepage = page %}*/
/* {% set index = page %}*/
/* {% set check = true %}*/
/* {% for items in 1..10 if check %}*/
/* 	{% if index.parent_page|length > 0 %}*/
/* 		{% set index = index.parent_page %}*/
/* 		{% set homepage = index %}*/
/* 	{% else %}*/
/* 		{% set check = false %}*/
/* 	{% endif %}*/
/* {% endfor %}*/
/* */
/* {% set cities = [] %}*/
/* */
/* {% for item in homepage.active_sub_pages %}*/
/* 	{% if item.layout_id == 7 %}*/
/* 		{% set cities = cities|merge([item]) %}*/
/* 	{% endif %}*/
/* {% endfor %}*/
/* */
/* <div class="city-switcher cselect" :class="{'city-switcher--active': isCitySwitcherShow}" v-click-outside="citySwitchClose" id="citysw-search"> */
/* 	<div class="city-switcher__title cselect__title" @click="isCitySwitcherShow = true" v-cloak>*/
/* 		<div class="city-switcher__icon cselect__icon">*/
/* 			<!--svg xmlns="http://www.w3.org/2000/svg" width="17" height="24" viewBox="0 0 17 24" fill="none"><path d="M14.1461 2.91392L14.1461 2.91394C15.598 4.40614 16.5 6.46724 16.5 8.73752C16.5 12.0961 14.8348 15.813 12.9306 18.721C11.9831 20.1678 10.9909 21.3923 10.1459 22.2489C9.72256 22.6782 9.34528 23.0057 9.03681 23.222C8.88252 23.3302 8.75446 23.4042 8.65368 23.4496C8.60385 23.472 8.56527 23.4853 8.53724 23.4927C8.51153 23.4995 8.49982 23.5 8.49983 23.5H8.50017C8.50018 23.5 8.48847 23.4995 8.46276 23.4927C8.43473 23.4853 8.39615 23.472 8.34632 23.4496C8.24554 23.4042 8.11748 23.3302 7.96319 23.222C7.65472 23.0057 7.27744 22.6782 6.85405 22.2489C6.00909 21.3923 5.01685 20.1678 4.06943 18.721C2.1652 15.813 0.5 12.0961 0.5 8.73752C0.5 6.46727 1.40226 4.40615 2.85392 2.91392L2.85395 2.91389C4.30539 1.42166 6.30417 0.5 8.5 0.5C10.6958 0.5 12.6946 1.42189 14.1461 2.91392ZM12.4828 4.66341L12.4828 4.66337C11.464 3.61635 10.0543 2.96076 8.50024 2.96076C6.94598 2.96076 5.53628 3.61633 4.51766 4.66341C3.49922 5.71031 2.86692 7.1532 2.86692 8.73728C2.86692 10.3216 3.49921 11.7645 4.51766 12.8114L4.51771 12.8114C5.53653 13.8585 6.9462 14.514 8.50024 14.514C10.0543 14.514 11.4642 13.8585 12.4828 12.8114C13.5013 11.7645 14.1336 10.3216 14.1336 8.73728C14.1336 7.1532 13.5013 5.71031 12.4828 4.66341Z" stroke="#2D2727"/></svg-->*/
/* 			<svg xmlns="http://www.w3.org/2000/svg" width="19" height="25" viewBox="0 0 19 25" fill="none"><path d="M10.1259 24.6906C10.0912 24.7253 10.0912 24.7253 10.0566 24.7599C10.022 24.7599 10.022 24.7945 9.98734 24.7945C9.95271 24.7945 9.91808 24.8292 9.88344 24.8292C9.84881 24.8638 9.77955 24.8638 9.74492 24.8638C9.71028 24.8638 9.64102 24.8638 9.60639 24.8984C9.57176 24.8984 9.57176 24.8984 9.53712 24.8984C9.50249 24.8984 9.43323 24.8984 9.39859 24.8638C9.36396 24.8638 9.2947 24.8292 9.26007 24.8292L9.15617 24.7945C9.12154 24.7945 9.08691 24.7599 9.08691 24.7599C9.05227 24.7253 9.05227 24.7253 9.01764 24.6906C8.22111 24.0326 7.4592 23.3054 6.6973 22.4742C5.97002 21.6777 5.27738 20.8119 4.61937 19.9114C3.996 19.0456 3.44188 18.1452 2.9224 17.2101C2.43756 16.3097 2.02197 15.3746 1.67565 14.4742C1.60639 14.2318 1.60639 14.024 1.71028 13.8162C1.81418 13.6084 1.98734 13.4352 2.19513 13.366C2.43756 13.2967 2.64535 13.2967 2.85314 13.4006C3.06093 13.5045 3.23409 13.6777 3.30336 13.8855C3.61505 14.7166 3.996 15.5824 4.44621 16.4136C4.89643 17.2794 5.45054 18.1106 6.03929 18.9417C6.5934 19.7383 7.21678 20.5002 7.84015 21.1928C8.39427 21.8162 8.98301 22.4049 9.57176 22.9244C10.4722 22.1279 11.3726 21.1582 12.2384 20.1192C13.1042 19.0456 13.9008 17.8681 14.5934 16.656C15.2514 15.4785 15.7709 14.2664 16.1172 13.0543C16.4289 11.9461 16.6367 10.8032 16.6367 9.69497C16.6367 8.72528 16.4635 7.82484 16.1172 6.99368C15.7709 6.12787 15.2514 5.36597 14.5934 4.70796C13.9354 4.04995 13.1735 3.53047 12.3077 3.18415C11.4765 2.83783 10.5761 2.66467 9.60639 2.66467C8.63669 2.66467 7.73626 2.83783 6.90509 3.18415C6.03929 3.53047 5.27738 4.04995 4.61937 4.70796C3.96137 5.36597 3.44189 6.12787 3.09556 6.99368C2.74924 7.82484 2.57608 8.72528 2.57608 9.69497V9.97203V10.2145L2.61072 10.4915L2.64535 10.7686C2.67998 11.011 2.61072 11.2188 2.43756 11.3919C2.29903 11.5651 2.09124 11.669 1.84881 11.7036C1.60639 11.7383 1.39859 11.669 1.22543 11.4958C1.05227 11.3573 0.948379 11.1495 0.913746 10.9071L0.879114 10.5954L0.844482 10.2837V9.97203V9.66034C0.844482 8.48285 1.08691 7.34 1.50249 6.30103C1.95271 5.22744 2.61072 4.25774 3.40725 3.46121C4.20379 2.66467 5.17349 2.00666 6.24708 1.55645C7.28604 1.14086 8.4289 0.898438 9.60639 0.898438C10.7839 0.898438 11.9267 1.14086 12.9657 1.55645C14.0393 2.00666 15.009 2.66467 15.8055 3.46121C16.6021 4.25774 17.2601 5.22744 17.7103 6.30103C18.1259 7.34 18.3683 8.48285 18.3683 9.66034C18.3683 10.9071 18.1605 12.1885 17.7795 13.4699C17.3986 14.8205 16.8099 16.1712 16.0826 17.4525C15.3207 18.8378 14.4202 20.1538 13.4159 21.366C12.377 22.6474 11.2341 23.7556 10.1259 24.7253V24.6906ZM9.57176 6.4742C10.0566 6.4742 10.5415 6.57809 10.9917 6.75125C11.3726 6.92441 11.7536 7.1322 12.0653 7.44389L12.1692 7.54779C12.5155 7.89411 12.7925 8.27506 12.9657 8.75991C13.1389 9.21013 13.2428 9.66034 13.2428 10.1798C13.2428 10.6647 13.1389 11.1495 12.9657 11.5997C12.7925 12.05 12.5155 12.4655 12.1692 12.8119C11.8228 13.1582 11.4419 13.4352 10.9917 13.6084C10.5415 13.7816 10.0912 13.8855 9.57176 13.8855C9.08691 13.8855 8.60206 13.7816 8.15184 13.6084C7.84015 13.4699 7.52847 13.2967 7.25141 13.0889L6.97435 12.8119C6.62803 12.4655 6.35098 12.0846 6.17782 11.5997C6.00466 11.1495 5.90076 10.6993 5.90076 10.1798C5.90076 9.69497 6.00466 9.21013 6.17782 8.75991C6.35098 8.30969 6.62803 7.89411 6.97435 7.58242C7.32067 7.2361 7.70163 6.95904 8.15184 6.78588C8.60206 6.61272 9.05227 6.50883 9.57176 6.50883V6.4742ZM10.8531 8.72528C10.68 8.58675 10.5068 8.44822 10.299 8.37896C10.0566 8.27506 9.81418 8.24043 9.57176 8.24043C9.2947 8.24043 9.05227 8.27506 8.84448 8.37896C8.60206 8.48285 8.39427 8.62138 8.22111 8.79454C8.04795 8.9677 7.90942 9.17549 7.80552 9.41792C7.70163 9.66034 7.66699 9.90277 7.66699 10.1452C7.66699 10.4222 7.70163 10.6647 7.80552 10.8725C7.90942 11.1149 8.04795 11.3227 8.22111 11.4958L8.29037 11.5651C8.46353 11.7036 8.63669 11.8422 8.84448 11.9461C9.08691 12.05 9.32933 12.0846 9.57176 12.0846C9.84881 12.0846 10.0912 12.05 10.299 11.9461C10.5415 11.8422 10.7492 11.7036 10.9224 11.5305C11.0956 11.3573 11.2341 11.1495 11.338 10.9071C11.4419 10.6647 11.4765 10.4222 11.4765 10.1798C11.4765 9.90277 11.4419 9.66034 11.338 9.45255C11.2341 9.21013 11.0956 9.00233 10.9224 8.82917L10.8531 8.75991V8.72528Z" fill="#8a8a8a"/></svg>*/
/* 		</div>*/
/* 		<span v-if="selectedCity.city">{{ selectedCity.city }}</span>*/
/* 		<span v-else>Выберите город</span>*/
/* 	</div>*/
/* 	{% set cats = [] %}*/
/* 	{% for city in cities %}*/
/* 		{% set cat = false %}*/
/* 		{% for item in city.active_sub_pages %}*/
/* 			{% set cat = item %}*/
/* 		{% endfor %}*/
/* 		{% if cat %}*/
/* 			{% set cityID = city.id %}	*/
/* 			{% set city = city.field_header %}*/
/* 			{% set newCat = {city: city, cat: 0, city_id: cityID} %}*/
/* 			{% set cats = cats|merge([newCat]) %}*/
/* 		{% endif %}*/
/* 	{% endfor %}*/
/* 	*/
/* 	<transition name="cityswitch">*/
/* 		<div class="city-switcher__list cselect__list" data-json="{$ cats|json_encode() $}" v-show="isCitySwitcherShow" v-cloak>*/
/* 			<div class="cityswitch__finder cselect__finder">*/
/* 				<input type="text" v-model="citySwitcherFilter" placeholder="Поиск">*/
/* 			</div>*/
/* 			<div class="city-switcher__items cselect__items">*/
/* 				<div class="city-switcher__listitem cselect__listitem">*/
/* 					<a href="#" @click.prevent="selectedCity = ''; isCitySwitcherShow = false">Все</a>*/
/* 				</div>*/
/* 				<div class="city-switcher__listitem cselect__listitem" v-for="city in citySwitcherFilteredList">*/
/* 					<a href="#" @click.prevent="selectedCity = city; isCitySwitcherShow = false">{{ city.city }}</a>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</transition>*/
/* </div>*/
