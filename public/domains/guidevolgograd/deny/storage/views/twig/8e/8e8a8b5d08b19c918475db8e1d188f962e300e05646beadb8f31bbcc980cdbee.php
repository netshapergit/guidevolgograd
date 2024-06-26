<?php

/* layouts.blog */
class __TwigTemplate_93048dbe4e42cfb001824541e216ae0a2c8f8468a4e241af13599fd7ed2fd08f extends TwigBridge\Twig\Template
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
        $tags = array("set" => 3, "if" => 5, "for" => 9, "include" => 58);
        $filters = array("reverse" => 3, "split" => 6, "trim" => 15, "lower" => 15, "merge" => 16, "length" => 32, "slice" => 34, "escape" => 60);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if', 'for', 'include'),
                array('reverse', 'split', 'trim', 'lower', 'merge', 'length', 'slice', 'escape'),
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
        echo "

";
        // line 3
        $context["items"] = twig_reverse_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "active_sub_pages", array()), "sortBy", array(0 => "created_at"), "method"));
        // line 4
        echo "
";
        // line 5
        if ($this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "input", array()), "tags", array())) {
            // line 6
            echo "\t";
            $context["reqTags"] = twig_split_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "input", array()), "tags", array()), ",");
            // line 7
            echo "\t";
            $context["tagItems"] = array();
            // line 8
            echo "\t
\t";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 10
                echo "\t\t";
                if ($this->getAttribute($context["item"], "field_tags", array())) {
                    // line 11
                    echo "\t\t\t";
                    $context["itemTags"] = twig_split_filter($this->env, $this->getAttribute($context["item"], "field_tags", array()), ",");
                    // line 12
                    echo "
\t\t\t";
                    // line 13
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["reqTags"]) ? $context["reqTags"] : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["reqTag"]) {
                        // line 14
                        echo "\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((isset($context["itemTags"]) ? $context["itemTags"] : null));
                        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
                            // line 15
                            echo "\t\t\t\t\t";
                            if ((trim(twig_lower_filter($this->env, $context["t"])) == trim(twig_lower_filter($this->env, $context["reqTag"])))) {
                                // line 16
                                echo "\t\t\t\t\t\t";
                                $context["tagItems"] = twig_array_merge((isset($context["tagItems"]) ? $context["tagItems"] : null), array(0 => $context["item"]));
                                // line 17
                                echo "\t\t\t\t\t";
                            }
                            // line 18
                            echo "\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 19
                        echo "\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reqTag'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 20
                    echo "\t\t";
                }
                // line 21
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "
\t";
            // line 23
            $context["items"] = (isset($context["tagItems"]) ? $context["tagItems"] : null);
            // line 24
            echo "
";
        }
        // line 26
        echo "
";
        // line 27
        if ($this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "input", array()), "q", array())) {
            // line 28
            echo "\t";
            $context["query"] = twig_split_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "input", array()), "q", array()), " ");
            // line 29
            echo "\t";
            $context["results"] = array();
            // line 30
            echo "
\t";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 32
                echo "\t\t";
                if ((twig_length_filter($this->env, (isset($context["query"]) ? $context["query"] : null)) > 0)) {
                    // line 33
                    echo "\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["query"]) ? $context["query"] : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["que"]) {
                        // line 34
                        echo "\t\t\t\t";
                        if (((twig_length_filter($this->env, twig_slice($this->env, $context["que"], 0,  -1)) >= 3) && twig_in_filter(twig_lower_filter($this->env, twig_slice($this->env, $context["que"], 0,  -1)), twig_lower_filter($this->env, $this->getAttribute($context["item"], "field_header", array()))))) {
                            // line 35
                            echo "\t\t\t\t\t";
                            $context["results"] = twig_array_merge((isset($context["results"]) ? $context["results"] : null), array(0 => $context["item"]));
                            // line 36
                            echo "\t\t\t\t";
                        }
                        // line 37
                        echo "\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['que'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 38
                    echo "\t\t";
                }
                // line 39
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "
\t";
            // line 41
            $context["items"] = (isset($context["results"]) ? $context["results"] : null);
        }
        // line 43
        echo "
";
        // line 44
        $context["uniqResults"] = array();
        // line 45
        $context["uniqIDs"] = array();
        // line 46
        echo "
";
        // line 47
        if ((twig_length_filter($this->env, (isset($context["items"]) ? $context["items"] : null)) > 0)) {
            // line 48
            echo "\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 49
                echo "\t\t";
                if (!twig_in_filter($this->getAttribute($context["item"], "id", array()), (isset($context["uniqIDs"]) ? $context["uniqIDs"] : null))) {
                    // line 50
                    echo "\t\t\t";
                    $context["uniqResults"] = twig_array_merge((isset($context["uniqResults"]) ? $context["uniqResults"] : null), array(0 => $context["item"]));
                    // line 51
                    echo "\t\t\t";
                    $context["uniqIDs"] = twig_array_merge((isset($context["uniqIDs"]) ? $context["uniqIDs"] : null), array(0 => $this->getAttribute($context["item"], "id", array())));
                    // line 52
                    echo "\t\t";
                }
                // line 53
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 55
        echo "
";
        // line 56
        $context["items"] = (isset($context["uniqResults"]) ? $context["uniqResults"] : null);
        // line 57
        echo "
";
        // line 58
        $this->loadTemplate("header", "layouts.blog", 58)->display($context);
        // line 59
        echo "
<div class=\"page-hero\" style=\"background-image: url(/site/data/images/large/";
        // line 60
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "field_image", array()), "html", null, true));
        echo ")\">
\t<div class=\"cont\">
\t\t<div class=\"page-hero__wrapper\">
\t\t\t<div class=\"blog-finder\">
\t\t\t\t<form class=\"hero-search__form\">
\t\t\t\t\t<div class=\"hero-search__input\">
\t\t\t\t\t\t<input type=\"text\" name=\"q\" placeholder=\"Найти путешествие мечты...\">
\t\t\t\t\t\t<button type=\"submit\" class=\"hero-search__submit\">
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"21\" height=\"20\" viewBox=\"0 0 21 20\" fill=\"none\"><path d=\"M2.37488 2.5511C3.99216 0.885494 6.1319 0.0326109 8.28325 0.000918007C10.4349 -0.0307749 12.5988 0.758095 14.2647 2.37537C15.9306 3.99265 16.7832 6.13239 16.8149 8.28374C16.8444 10.2766 16.1698 12.2802 14.7847 13.8884L20.2622 19.2062C20.3243 19.2664 20.3259 19.3665 20.2657 19.429L19.7573 19.9524C19.6971 20.0145 19.597 20.0161 19.5345 19.9558L14.0561 14.6371C12.4921 16.0579 10.5171 16.7859 8.53209 16.8154C6.38074 16.8471 4.21652 16.0582 2.55061 14.4409C0.885006 12.8237 0.0321226 10.6842 0.000429725 8.53258C-0.0312631 6.38091 0.757607 4.21701 2.37488 2.5511ZM4.26202 5.05671C4.10105 5.25691 3.80797 5.28923 3.60745 5.12857C3.40726 4.9676 3.37494 4.67452 3.53591 4.47401C3.60118 4.39242 3.66613 4.3146 3.73077 4.24117C3.80954 4.15174 3.87763 4.07706 3.93599 4.01713C4.06339 3.88596 4.19707 3.76013 4.33639 3.63964C4.47477 3.52008 4.61912 3.40649 4.76848 3.29855C4.97715 3.14698 5.26898 3.19374 5.42054 3.40241C5.57178 3.61108 5.52534 3.90291 5.31667 4.05447C5.19053 4.14547 5.06721 4.24274 4.94828 4.34535C4.8303 4.44733 4.71608 4.55496 4.60625 4.66793C4.53345 4.74292 4.47414 4.80662 4.42896 4.85809C4.36965 4.92555 4.3138 4.99176 4.26202 5.05671ZM6.79086 3.30796C6.54642 3.38766 6.28315 3.25399 6.20313 3.00954C6.12343 2.76479 6.2571 2.50152 6.50155 2.42181C7.60484 2.06472 8.76272 2.02707 9.85283 2.28061C10.9433 2.53352 11.9656 3.07858 12.7974 3.88596C12.9826 4.06576 12.987 4.36167 12.8072 4.54649C12.6274 4.73163 12.3318 4.73602 12.1466 4.55622C11.4378 3.86808 10.5683 3.40398 9.64197 3.1884L9.64071 3.18715C8.71503 2.97158 7.73035 3.00358 6.79086 3.30765V3.30796ZM8.29706 0.934446C6.38482 0.962687 4.48293 1.72081 3.04514 3.20158C1.60735 4.68236 0.90603 6.6059 0.934271 8.51814C0.962512 10.4304 1.72063 12.3323 3.20141 13.7701C4.68219 15.2078 6.60573 15.9092 8.51828 15.8809C10.4305 15.8524 12.3324 15.0946 13.7702 13.6138C15.208 12.1327 15.9093 10.2095 15.8811 8.29692C15.8528 6.38499 15.0947 4.48279 13.6139 3.04532C12.1328 1.60753 10.2093 0.906204 8.29706 0.934132V0.934446Z\" fill=\"#2B2A29\"></path></svg>
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t\t<!--form class=\"hero-search__tags\">
\t\t\t\t\t<form class=\"hero-search__tag\" action=\"\">
\t\t\t\t\t\t<input type=\"text\" name=\"tags\" value=\"памятник\">
\t\t\t\t\t\t<button type=\"submit\">горы</button>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"hero-search__tag\">
\t\t\t\t\t\t<input type=\"checkbox\" name=\"tags\" id=\"tag-2\">
\t\t\t\t\t\t<label for=\"tag-2\">#памятник</label>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"hero-search__tag\">
\t\t\t\t\t\t<input type=\"checkbox\" name=\"tags\" id=\"tag-3\">
\t\t\t\t\t\t<label for=\"tag-3\">#город</label>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"hero-search__tag\">
\t\t\t\t\t\t<input type=\"checkbox\" name=\"tags\" id=\"tag-4\">
\t\t\t\t\t\t<label for=\"tag-4\">#самара</label>
\t\t\t\t\t</div>
\t\t\t\t</form-->
\t\t\t</div>
\t\t\t<h1 class=\"page-hero__title\">";
        // line 91
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "field_header", array()), "html", null, true));
        echo "</h1>
\t\t\t<div class=\"blog-city\">\t
\t\t\t\t";
        // line 93
        $this->loadTemplate("cityswitcher", "layouts.blog", 93)->display($context);
        // line 94
        echo "\t\t\t</div>
\t\t\t
\t\t\t";
        // line 96
        $context["cases"] = array(0 => 2, 1 => 0, 2 => 1, 3 => 1, 4 => 1, 5 => 2);
        // line 97
        echo "\t\t\t";
        $context["titles"] = array(0 => "история", 1 => "истории", 2 => "историй");
        // line 98
        echo "\t\t\t";
        $context["number"] = twig_length_filter($this->env, (isset($context["items"]) ? $context["items"] : null));
        // line 99
        echo "\t\t\t
\t\t\t<div class=\"blog-counter\">";
        // line 100
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (isset($context["number"]) ? $context["number"] : null), "html", null, true));
        echo " историй</div> ";
        // line 101
        echo "\t\t</div>
\t</div>
</div>
<section class=\"blog\">
\t<div class=\"blog-top\">
\t\t<div class=\"cont\">
\t\t\t<div class=\"blog-cats\">
\t\t\t\t<a class=\"blog-cat ";
        // line 108
        if (twig_in_filter("Отчеты о путешествиях", $this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "input", array()), "tags", array()))) {
            echo "blog-cat--active";
        }
        echo "\" href=\"?tags=Отчеты о путешествиях\">
\t\t\t\t\t<span class=\"blog-cat__icon\">
\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"29\" height=\"22\" viewBox=\"0 0 29 22\" fill=\"none\"><path d=\"M11.2289 0.337076H17.3421C17.4438 0.337076 17.5557 0.347248 17.6675 0.367591C17.7794 0.387934 17.8811 0.418449 17.993 0.448964C18.0948 0.489651 18.1965 0.530337 18.2982 0.581195C18.3999 0.632054 18.4914 0.693083 18.5728 0.754113C18.6644 0.825315 18.7457 0.896516 18.8271 0.97789C18.8983 1.05926 18.9797 1.14064 19.0407 1.24235C19.1119 1.34407 19.1628 1.44579 19.2136 1.5475C19.2543 1.64922 19.295 1.76111 19.3255 1.87299V1.88317C19.3967 2.229 19.4883 2.6257 19.5798 3.02239L19.6408 3.29703H26.2321C26.4864 3.29703 26.7203 3.34788 26.9441 3.43943C27.1679 3.53097 27.3815 3.67338 27.5442 3.84629C27.7171 4.01921 27.8494 4.22264 27.9511 4.44642C28.0426 4.6702 28.0935 4.90415 28.0935 5.15844V19.6123C28.0935 19.8666 28.0426 20.1006 27.9511 20.3244C27.8595 20.5481 27.7171 20.7617 27.5442 20.9245C27.3713 21.0974 27.1679 21.2296 26.9441 21.3314C26.7203 21.4229 26.4864 21.4738 26.2321 21.4738H2.35921C2.10492 21.4738 1.87097 21.4229 1.6472 21.3314C1.42342 21.2398 1.20982 21.0974 1.04707 20.9245C0.874153 20.7516 0.741922 20.5481 0.640205 20.3244C0.54866 20.1006 0.497803 19.8666 0.497803 19.6123V5.15844C0.497803 4.91432 0.54866 4.6702 0.640205 4.44642C0.73175 4.22264 0.874153 4.01921 1.04707 3.84629C1.21999 3.67338 1.42342 3.54114 1.6472 3.43943C1.87097 3.34788 2.10492 3.29703 2.35921 3.29703H8.94027L9.0013 3.02239C9.08267 2.64604 9.16405 2.27986 9.26576 1.86282C9.29628 1.75093 9.32679 1.63905 9.36748 1.53733C9.41834 1.42544 9.46919 1.32373 9.54039 1.23218C9.60142 1.14064 9.67263 1.04909 9.754 0.967718C9.83537 0.886345 9.91675 0.815143 10.0083 0.743942C10.0998 0.682912 10.1914 0.621882 10.2931 0.571024C10.3846 0.520165 10.4864 0.479479 10.5982 0.438792C10.7 0.398106 10.8119 0.377763 10.9237 0.357419C11.0356 0.337076 11.1373 0.326904 11.2492 0.326904L11.2289 0.337076ZM9.15387 10.8546C9.11319 11.0682 8.98096 11.2411 8.81821 11.353C8.65546 11.4649 8.44186 11.5055 8.22825 11.4649C8.01465 11.4242 7.84173 11.2919 7.72984 11.1292C7.61795 10.9664 7.57727 10.7528 7.61795 10.5392C7.75019 9.91877 7.96379 9.31864 8.2486 8.76937C8.54358 8.20993 8.90976 7.69118 9.33696 7.24362C9.76417 6.7859 10.2626 6.38921 10.8017 6.07388C11.3306 5.75856 11.9206 5.50427 12.5309 5.34153C13.426 5.10758 14.3211 5.05672 15.1857 5.16861C16.0808 5.29067 16.9352 5.58565 17.7082 6.02303C18.4813 6.47058 19.1628 7.06053 19.712 7.78272C20.241 8.47439 20.6478 9.27795 20.8818 10.1731C21.1157 11.0682 21.1666 11.9633 21.0547 12.8279C20.9326 13.723 20.6377 14.5774 20.2003 15.3504C19.7527 16.1235 19.1628 16.805 18.4406 17.3542C17.7489 17.8832 16.9454 18.29 16.0503 18.5342C15.1551 18.7681 14.26 18.819 13.3954 18.7071C12.5105 18.585 11.6561 18.3002 10.8831 17.8527L10.8627 17.8425C10.0897 17.3949 9.40816 16.805 8.8589 16.0828C8.32997 15.3911 7.9231 14.5876 7.68916 13.6924C7.62813 13.4788 7.66881 13.2652 7.77053 13.0923C7.87225 12.9194 8.03499 12.777 8.2486 12.7261C8.4622 12.6753 8.66564 12.7058 8.84873 12.8075C9.02164 12.9092 9.16404 13.072 9.2149 13.2856C9.39799 13.9773 9.71332 14.5876 10.1202 15.1267C10.5474 15.6759 11.0661 16.1336 11.6663 16.4795C12.2562 16.8253 12.9174 17.0491 13.6091 17.1406C14.2702 17.2322 14.9619 17.1915 15.6536 17.0084C16.3452 16.8253 16.9555 16.51 17.4946 16.1031C18.0439 15.6759 18.5016 15.1572 18.8475 14.557C19.1933 13.9671 19.4171 13.3059 19.5086 12.6143C19.6002 11.9531 19.5595 11.2614 19.3764 10.5698C19.1933 9.87808 18.878 9.26778 18.4711 8.72869C18.0439 8.17942 17.5251 7.72169 16.925 7.37586C16.3351 7.03002 15.6739 6.80624 14.9822 6.7147C14.3211 6.62315 13.6294 6.66384 12.9377 6.84693C12.4597 6.97916 12.0121 7.16225 11.6052 7.40637C11.1882 7.65049 10.8119 7.95564 10.4762 8.31165C10.1405 8.66765 9.85572 9.05418 9.63194 9.49156C9.40816 9.9086 9.24542 10.3663 9.1437 10.8546H9.15387ZM14.2906 7.88444C14.8398 7.88444 15.3586 7.99633 15.8366 8.18959C16.3351 8.39302 16.7826 8.69817 17.1488 9.06435C17.5251 9.4407 17.8201 9.87808 18.0235 10.3765C18.2168 10.8546 18.3287 11.3733 18.3287 11.9226C18.3287 12.4719 18.2168 12.9906 18.0235 13.4687C17.8201 13.9671 17.515 14.4045 17.1488 14.7808C16.7724 15.1572 16.3351 15.4521 15.8366 15.6556C15.3586 15.8488 14.8398 15.9607 14.2906 15.9607C13.7413 15.9607 13.2225 15.8488 12.7445 15.6556C12.2461 15.4521 11.8087 15.147 11.4323 14.7808C11.056 14.4045 10.761 13.9671 10.5576 13.4687C10.3643 12.9906 10.2524 12.4719 10.2524 11.9226C10.2524 11.3733 10.3643 10.8546 10.5576 10.3765C10.761 9.87808 11.0661 9.4407 11.4323 9.06435C11.8087 8.688 12.2461 8.39302 12.7445 8.18959C13.2225 7.99633 13.7413 7.88444 14.2906 7.88444ZM16.1418 10.0815C15.8977 9.83739 15.6129 9.64413 15.2975 9.5119C14.9924 9.38984 14.6567 9.31864 14.3007 9.31864C13.9447 9.31864 13.6091 9.38984 13.3039 9.5119C12.9886 9.64413 12.6936 9.83739 12.4597 10.0815C12.2155 10.3256 12.0223 10.6104 11.89 10.9258C11.768 11.2309 11.6968 11.5666 11.6968 11.9226C11.6968 12.2786 11.768 12.6143 11.89 12.9194C12.0223 13.2347 12.2155 13.5297 12.4597 13.7636C12.7038 14.0078 12.9886 14.201 13.3039 14.3333C13.6091 14.4553 13.9447 14.5265 14.3007 14.5265C14.6567 14.5265 14.9924 14.4553 15.2975 14.3333C15.6129 14.201 15.9078 14.0078 16.1418 13.7636C16.3859 13.5195 16.5792 13.2347 16.7114 12.9194C16.8335 12.6143 16.9047 12.2786 16.9047 11.9226C16.9047 11.5666 16.8335 11.2309 16.7114 10.9258C16.5792 10.6104 16.3859 10.3155 16.1418 10.0815ZM22.1532 5.95182H24.1571C24.4012 5.95182 24.6148 6.05354 24.7775 6.20612C24.9403 6.36886 25.0318 6.58247 25.0318 6.82659V7.28431C25.0318 7.52843 24.9301 7.74203 24.7775 7.90478C24.6148 8.06753 24.4012 8.15907 24.1571 8.15907H22.1532C21.9091 8.15907 21.6955 8.05736 21.5328 7.90478C21.37 7.74203 21.2785 7.52843 21.2785 7.28431V6.82659C21.2785 6.58247 21.3802 6.36886 21.5328 6.20612C21.6955 6.04337 21.9091 5.95182 22.1532 5.95182ZM14.2804 2.0154H11.2289C11.2085 2.0154 11.1882 2.0154 11.1679 2.0154C11.1475 2.0154 11.1373 2.02557 11.117 2.02557C11.0967 2.03574 11.0763 2.04591 11.056 2.05608C11.0356 2.06626 11.0153 2.07643 10.9949 2.09677C10.9746 2.10694 10.9644 2.12729 10.9441 2.13746C10.9339 2.14763 10.9237 2.16797 10.9136 2.17814L10.8932 2.20866L10.8831 2.229L10.4253 4.26333C10.3948 4.45659 10.2931 4.62951 10.1507 4.76174C9.99812 4.89397 9.80486 4.97535 9.60143 4.97535H2.34904C2.3287 4.97535 2.29818 4.97535 2.27784 4.98552C2.2575 4.99569 2.23715 5.00586 2.21681 5.02621C2.19647 5.04655 2.1863 5.06689 2.17612 5.08723C2.16595 5.10758 2.16595 5.12792 2.16595 5.15844V19.6123C2.16595 19.6327 2.16595 19.6632 2.17612 19.6835C2.1863 19.7039 2.19647 19.7242 2.21681 19.7446C2.23715 19.7649 2.2575 19.7751 2.27784 19.7853C2.29818 19.7954 2.31853 19.7954 2.34904 19.7954H26.2219C26.2422 19.7954 26.2728 19.7954 26.2931 19.7853C26.3134 19.7751 26.3338 19.7649 26.3541 19.7446C26.3745 19.7242 26.3846 19.7039 26.3948 19.6835C26.405 19.6632 26.405 19.6429 26.405 19.6123V5.15844C26.405 5.13809 26.405 5.10758 26.3948 5.08723C26.3846 5.06689 26.3745 5.04655 26.3541 5.02621C26.3338 5.00586 26.3134 4.99569 26.2931 4.98552C26.2728 4.97535 26.2524 4.97535 26.2219 4.97535H18.9695C18.7763 4.97535 18.5932 4.90415 18.4508 4.79226C18.3084 4.68037 18.2066 4.51762 18.1558 4.32436L18.0032 3.63269C17.9015 3.16479 17.7998 2.70707 17.6879 2.24935L17.6777 2.21883C17.6777 2.20866 17.6675 2.19849 17.6574 2.18832C17.6472 2.17814 17.637 2.1578 17.6167 2.14763C17.6065 2.13746 17.5862 2.11711 17.5658 2.10694C17.5455 2.0866 17.5251 2.07643 17.5048 2.06626C17.4845 2.05608 17.4641 2.04591 17.4438 2.03574C17.4234 2.02557 17.4031 2.02557 17.3929 2.02557C17.3726 2.02557 17.3624 2.02557 17.3319 2.02557H14.2804V2.0154Z\" fill=\"#2d2727\"/></svg>
\t\t\t\t\t</span>
\t\t\t\t\t<span class=\"blog-cat__title\">Отчеты о путешествиях</span>
\t\t\t\t</a>
\t\t\t\t<a class=\"blog-cat ";
        // line 114
        if (twig_in_filter("Советы бывалых", $this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "input", array()), "tags", array()))) {
            echo "blog-cat--active";
        }
        echo "\" href=\"?tags=Советы бывалых\">
\t\t\t\t\t<span class=\"blog-cat__icon\">
\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"25\" viewBox=\"0 0 24 25\" fill=\"none\"><path d=\"M12.0888 0.617676C13.6553 0.617676 15.1403 0.89231 16.5033 1.39072C17.9172 1.90947 19.1988 2.67235 20.2668 3.62848C21.345 4.58462 22.2198 5.73401 22.8199 7.01564C23.3997 8.24641 23.715 9.59924 23.715 11.0233C23.715 12.4371 23.3997 13.79 22.8199 15.0309C22.2198 16.3125 21.3552 17.4518 20.2668 18.4181C19.1988 19.364 17.9172 20.1371 16.5033 20.6558C15.1403 21.1542 13.6451 21.4289 12.0888 21.4289C11.9668 21.4289 11.8142 21.4289 11.6413 21.4187C11.4785 21.4085 11.326 21.4085 11.1836 21.3984C11.0818 21.3882 10.9598 21.378 10.8174 21.3678L10.5936 21.3475L5.74173 24.4804C5.54847 24.6024 5.32469 24.6431 5.11109 24.6024C4.89748 24.5617 4.71439 24.4295 4.58216 24.2362C4.52113 24.1447 4.48044 24.043 4.4601 23.9311C4.43976 23.8192 4.43976 23.7175 4.4601 23.6056L5.31452 19.4963C4.64319 19.069 4.03289 18.5808 3.47345 18.0417C2.86315 17.4416 2.32405 16.7703 1.8765 16.0582C1.40861 15.3055 1.04243 14.4918 0.798308 13.6272C0.554189 12.7931 0.432129 11.9184 0.432129 11.0334C0.432129 9.61958 0.74745 8.26675 1.32723 7.02581C1.92736 5.74419 2.79195 4.60496 3.88032 3.63865C4.94834 2.69269 6.22997 1.91965 7.64383 1.40089C9.00683 0.902482 10.5021 0.627847 12.0583 0.627847L12.0888 0.617676ZM15.1505 8.31761C15.8117 8.31761 16.422 8.59225 16.8593 9.02963C17.2967 9.46701 17.5714 10.0671 17.5714 10.7385C17.5612 10.8707 17.5612 10.9826 17.5408 11.1148L17.5307 11.1453C17.4188 11.837 17.0119 12.5083 16.4728 13.0678C15.8727 13.6984 15.0996 14.207 14.3978 14.4511C14.1944 14.5223 13.9706 14.4206 13.8994 14.207C13.8689 14.1155 13.8689 14.0239 13.8994 13.9425C13.9909 13.6882 14.052 13.4441 14.1028 13.2305C14.1232 13.1288 14.1435 13.0271 14.1537 12.9254C13.7773 12.7525 13.462 12.4982 13.2179 12.1727C12.9127 11.7658 12.7398 11.2674 12.7398 10.7283C12.7398 10.0671 13.0145 9.45684 13.4518 9.01946C13.8892 8.58208 14.4893 8.30744 15.1607 8.30744L15.1505 8.31761ZM9.24077 8.31761C9.9121 8.31761 10.5122 8.59225 10.9496 9.02963L10.97 9.04997C11.3972 9.48735 11.6515 10.0773 11.6515 10.7283C11.6413 10.8605 11.6413 10.9724 11.6209 11.1046L11.6108 11.1352C11.4989 11.8268 11.092 12.4982 10.5529 13.0576C9.95279 13.6882 9.17974 14.1968 8.4779 14.4409C8.27447 14.5121 8.05069 14.4104 7.97949 14.1968C7.94898 14.1053 7.94898 14.0137 7.97949 13.9324C8.06086 13.6984 8.12189 13.4746 8.17275 13.2712C8.20327 13.1491 8.22361 13.0271 8.23378 12.9152C7.85743 12.7423 7.54211 12.488 7.29799 12.1625C6.99284 11.7556 6.81992 11.2572 6.81992 10.7181C6.81992 10.057 7.09456 9.44667 7.53194 9.00928C7.96932 8.5719 8.56945 8.29727 9.24077 8.29727V8.31761ZM19.1683 4.8796C18.2529 4.06586 17.1543 3.41488 15.9235 2.95715C14.7436 2.52995 13.4518 2.28583 12.0888 2.28583C10.7258 2.28583 9.43404 2.51977 8.25412 2.95715C7.03353 3.40471 5.92482 4.06586 5.00937 4.8796C4.10409 5.68316 3.37173 6.63929 2.87332 7.70731C2.39526 8.72448 2.13079 9.84336 2.13079 11.0131C2.13079 11.7556 2.23251 12.4676 2.43594 13.1593C2.63938 13.8713 2.94453 14.5427 3.33105 15.1631C3.72774 15.8039 4.21598 16.4041 4.77542 16.933C5.33486 17.4619 5.97568 17.94 6.66735 18.3367C6.83009 18.4181 6.96233 18.5605 7.03353 18.7232C7.10473 18.886 7.13524 19.069 7.09456 19.2521L6.52495 21.9781L9.92227 19.7811C10.0036 19.72 10.1054 19.6793 10.2071 19.6488C10.3088 19.6285 10.4105 19.6183 10.5122 19.6285C10.6445 19.6488 10.7665 19.659 10.8988 19.6793C11.0208 19.6895 11.153 19.6997 11.2853 19.7099C11.4277 19.72 11.5497 19.7302 11.6718 19.7302C11.7735 19.7302 11.9159 19.7404 12.0685 19.7404C13.4315 19.7404 14.7233 19.5064 15.9032 19.069C17.1238 18.6215 18.2325 17.9603 19.148 17.1466C20.0532 16.343 20.7856 15.3869 21.284 14.3189C21.7621 13.3017 22.0265 12.1828 22.0265 11.0131C22.0265 9.84336 21.7621 8.72448 21.284 7.70731C20.7856 6.63929 20.0532 5.68316 19.148 4.8796H19.1683Z\" fill=\"#2B2A29\"/></svg>
\t\t\t\t\t</span>
\t\t\t\t\t<span class=\"blog-cat__title\">Советы бывалых</span>
\t\t\t\t</a>
\t\t\t\t<a class=\"blog-cat ";
        // line 120
        if (twig_in_filter("Проверенные маршруты", $this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "input", array()), "tags", array()))) {
            echo "blog-cat--active";
        }
        echo "\" href=\"?tags=Проверенные маршруты\">
\t\t\t\t\t<span class=\"blog-cat__icon\">
\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"19\" height=\"25\" viewBox=\"0 0 19 25\" fill=\"none\"><path d=\"M10.1259 24.6906C10.0912 24.7253 10.0912 24.7253 10.0566 24.7599C10.022 24.7599 10.022 24.7945 9.98734 24.7945C9.95271 24.7945 9.91808 24.8292 9.88344 24.8292C9.84881 24.8638 9.77955 24.8638 9.74492 24.8638C9.71028 24.8638 9.64102 24.8638 9.60639 24.8984C9.57176 24.8984 9.57176 24.8984 9.53712 24.8984C9.50249 24.8984 9.43323 24.8984 9.39859 24.8638C9.36396 24.8638 9.2947 24.8292 9.26007 24.8292L9.15617 24.7945C9.12154 24.7945 9.08691 24.7599 9.08691 24.7599C9.05227 24.7253 9.05227 24.7253 9.01764 24.6906C8.22111 24.0326 7.4592 23.3054 6.6973 22.4742C5.97002 21.6777 5.27738 20.8119 4.61937 19.9114C3.996 19.0456 3.44188 18.1452 2.9224 17.2101C2.43756 16.3097 2.02197 15.3746 1.67565 14.4742C1.60639 14.2318 1.60639 14.024 1.71028 13.8162C1.81418 13.6084 1.98734 13.4352 2.19513 13.366C2.43756 13.2967 2.64535 13.2967 2.85314 13.4006C3.06093 13.5045 3.23409 13.6777 3.30336 13.8855C3.61505 14.7166 3.996 15.5824 4.44621 16.4136C4.89643 17.2794 5.45054 18.1106 6.03929 18.9417C6.5934 19.7383 7.21678 20.5002 7.84015 21.1928C8.39427 21.8162 8.98301 22.4049 9.57176 22.9244C10.4722 22.1279 11.3726 21.1582 12.2384 20.1192C13.1042 19.0456 13.9008 17.8681 14.5934 16.656C15.2514 15.4785 15.7709 14.2664 16.1172 13.0543C16.4289 11.9461 16.6367 10.8032 16.6367 9.69497C16.6367 8.72528 16.4635 7.82484 16.1172 6.99368C15.7709 6.12787 15.2514 5.36597 14.5934 4.70796C13.9354 4.04995 13.1735 3.53047 12.3077 3.18415C11.4765 2.83783 10.5761 2.66467 9.60639 2.66467C8.63669 2.66467 7.73626 2.83783 6.90509 3.18415C6.03929 3.53047 5.27738 4.04995 4.61937 4.70796C3.96137 5.36597 3.44189 6.12787 3.09556 6.99368C2.74924 7.82484 2.57608 8.72528 2.57608 9.69497V9.97203V10.2145L2.61072 10.4915L2.64535 10.7686C2.67998 11.011 2.61072 11.2188 2.43756 11.3919C2.29903 11.5651 2.09124 11.669 1.84881 11.7036C1.60639 11.7383 1.39859 11.669 1.22543 11.4958C1.05227 11.3573 0.948379 11.1495 0.913746 10.9071L0.879114 10.5954L0.844482 10.2837V9.97203V9.66034C0.844482 8.48285 1.08691 7.34 1.50249 6.30103C1.95271 5.22744 2.61072 4.25774 3.40725 3.46121C4.20379 2.66467 5.17349 2.00666 6.24708 1.55645C7.28604 1.14086 8.4289 0.898438 9.60639 0.898438C10.7839 0.898438 11.9267 1.14086 12.9657 1.55645C14.0393 2.00666 15.009 2.66467 15.8055 3.46121C16.6021 4.25774 17.2601 5.22744 17.7103 6.30103C18.1259 7.34 18.3683 8.48285 18.3683 9.66034C18.3683 10.9071 18.1605 12.1885 17.7795 13.4699C17.3986 14.8205 16.8099 16.1712 16.0826 17.4525C15.3207 18.8378 14.4202 20.1538 13.4159 21.366C12.377 22.6474 11.2341 23.7556 10.1259 24.7253V24.6906ZM9.57176 6.4742C10.0566 6.4742 10.5415 6.57809 10.9917 6.75125C11.3726 6.92441 11.7536 7.1322 12.0653 7.44389L12.1692 7.54779C12.5155 7.89411 12.7925 8.27506 12.9657 8.75991C13.1389 9.21013 13.2428 9.66034 13.2428 10.1798C13.2428 10.6647 13.1389 11.1495 12.9657 11.5997C12.7925 12.05 12.5155 12.4655 12.1692 12.8119C11.8228 13.1582 11.4419 13.4352 10.9917 13.6084C10.5415 13.7816 10.0912 13.8855 9.57176 13.8855C9.08691 13.8855 8.60206 13.7816 8.15184 13.6084C7.84015 13.4699 7.52847 13.2967 7.25141 13.0889L6.97435 12.8119C6.62803 12.4655 6.35098 12.0846 6.17782 11.5997C6.00466 11.1495 5.90076 10.6993 5.90076 10.1798C5.90076 9.69497 6.00466 9.21013 6.17782 8.75991C6.35098 8.30969 6.62803 7.89411 6.97435 7.58242C7.32067 7.2361 7.70163 6.95904 8.15184 6.78588C8.60206 6.61272 9.05227 6.50883 9.57176 6.50883V6.4742ZM10.8531 8.72528C10.68 8.58675 10.5068 8.44822 10.299 8.37896C10.0566 8.27506 9.81418 8.24043 9.57176 8.24043C9.2947 8.24043 9.05227 8.27506 8.84448 8.37896C8.60206 8.48285 8.39427 8.62138 8.22111 8.79454C8.04795 8.9677 7.90942 9.17549 7.80552 9.41792C7.70163 9.66034 7.66699 9.90277 7.66699 10.1452C7.66699 10.4222 7.70163 10.6647 7.80552 10.8725C7.90942 11.1149 8.04795 11.3227 8.22111 11.4958L8.29037 11.5651C8.46353 11.7036 8.63669 11.8422 8.84448 11.9461C9.08691 12.05 9.32933 12.0846 9.57176 12.0846C9.84881 12.0846 10.0912 12.05 10.299 11.9461C10.5415 11.8422 10.7492 11.7036 10.9224 11.5305C11.0956 11.3573 11.2341 11.1495 11.338 10.9071C11.4419 10.6647 11.4765 10.4222 11.4765 10.1798C11.4765 9.90277 11.4419 9.66034 11.338 9.45255C11.2341 9.21013 11.0956 9.00233 10.9224 8.82917L10.8531 8.75991V8.72528Z\" fill=\"#2B2A29\"/></svg>
\t\t\t\t\t</span>
\t\t\t\t\t<span class=\"blog-cat__title\">Проверенные маршруты</span>
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"blog-posts\">
\t\t<div class=\"cont\">
\t\t\t<div class=\"blog-posts__wrapper\">
\t\t\t\t";
        // line 132
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 133
            echo "\t\t\t\t<div class=\"post-card\">
\t\t\t\t\t<div class=\"post-card__top\">
\t\t\t\t\t\t<div class=\"post-card__img\">
\t\t\t\t\t\t\t<a href=\"";
            // line 136
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["item"], "path", array()), "html", null, true));
            echo "\">
\t\t\t\t\t\t\t\t<img src=\"/site/data/images/medium/";
            // line 137
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["item"], "field_image", array()), "html", null, true));
            echo "\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"post-card__mid\">
\t\t\t\t\t\t<div class=\"post-card__title\">
\t\t\t\t\t\t\t<a href=\"";
            // line 143
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["item"], "path", array()), "html", null, true));
            echo "\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["item"], "field_header", array()), "html", null, true));
            echo "</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"post-card__desc\">";
            // line 145
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["item"], "field_summary", array()), "html", null, true));
            echo "</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 149
        echo "\t\t\t</div>
\t\t</div>
\t</div>
</section>

";
        // line 154
        $this->loadTemplate("footer", "layouts.blog", 154)->display($context);
        // line 155
        echo "<script src=\"/site/theme/js/solo_sityswitcher.js\"></script>";
    }

    public function getTemplateName()
    {
        return "layouts.blog";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  384 => 155,  382 => 154,  375 => 149,  365 => 145,  358 => 143,  349 => 137,  345 => 136,  340 => 133,  336 => 132,  319 => 120,  308 => 114,  297 => 108,  288 => 101,  285 => 100,  282 => 99,  279 => 98,  276 => 97,  274 => 96,  270 => 94,  268 => 93,  263 => 91,  229 => 60,  226 => 59,  224 => 58,  221 => 57,  219 => 56,  216 => 55,  209 => 53,  206 => 52,  203 => 51,  200 => 50,  197 => 49,  192 => 48,  190 => 47,  187 => 46,  185 => 45,  183 => 44,  180 => 43,  177 => 41,  174 => 40,  168 => 39,  165 => 38,  159 => 37,  156 => 36,  153 => 35,  150 => 34,  145 => 33,  142 => 32,  138 => 31,  135 => 30,  132 => 29,  129 => 28,  127 => 27,  124 => 26,  120 => 24,  118 => 23,  115 => 22,  109 => 21,  106 => 20,  100 => 19,  94 => 18,  91 => 17,  88 => 16,  85 => 15,  80 => 14,  76 => 13,  73 => 12,  70 => 11,  67 => 10,  63 => 9,  60 => 8,  57 => 7,  54 => 6,  52 => 5,  49 => 4,  47 => 3,  43 => 1,);
    }
}
/* */
/* */
/* {% set items = page.active_sub_pages.sortBy('created_at')|reverse %}*/
/* */
/* {% if request.input.tags %}*/
/* 	{% set reqTags = request.input.tags|split(',') %}*/
/* 	{% set tagItems = [] %}*/
/* 	*/
/* 	{% for item in items %}*/
/* 		{% if item.field_tags %}*/
/* 			{% set itemTags = item.field_tags|split(',') %}*/
/* */
/* 			{% for reqTag in reqTags %}*/
/* 				{% for t in itemTags %}*/
/* 					{% if t|lower|trim == reqTag|lower|trim %}*/
/* 						{% set tagItems = tagItems|merge([item]) %}*/
/* 					{% endif %}*/
/* 				{% endfor %}*/
/* 			{% endfor %}*/
/* 		{% endif %}*/
/* 	{% endfor %}*/
/* */
/* 	{% set items = tagItems %}*/
/* */
/* {% endif %}*/
/* */
/* {% if request.input.q %}*/
/* 	{% set query = request.input.q|split(' ') %}*/
/* 	{% set results = [] %}*/
/* */
/* 	{% for item in items %}*/
/* 		{% if query|length > 0 %}*/
/* 			{% for que in query %}*/
/* 				{% if que|slice(0, -1)|length >= 3 and que|slice(0, -1)|lower in item.field_header|lower %}*/
/* 					{% set results = results|merge([item]) %}*/
/* 				{% endif %}*/
/* 			{% endfor %}*/
/* 		{% endif %}*/
/* 	{% endfor %}*/
/* */
/* 	{% set items = results %}*/
/* {% endif %}*/
/* */
/* {% set uniqResults = [] %}*/
/* {% set uniqIDs = [] %}*/
/* */
/* {% if items|length > 0 %}*/
/* 	{% for item in items %}*/
/* 		{% if item.id not in uniqIDs %}*/
/* 			{% set uniqResults = uniqResults|merge([item]) %}*/
/* 			{% set uniqIDs = uniqIDs|merge([item.id]) %}*/
/* 		{% endif %}*/
/* 	{% endfor %}*/
/* {% endif %}*/
/* */
/* {% set items = uniqResults %}*/
/* */
/* {% include 'header'%}*/
/* */
/* <div class="page-hero" style="background-image: url(/site/data/images/large/{$ page.field_image $})">*/
/* 	<div class="cont">*/
/* 		<div class="page-hero__wrapper">*/
/* 			<div class="blog-finder">*/
/* 				<form class="hero-search__form">*/
/* 					<div class="hero-search__input">*/
/* 						<input type="text" name="q" placeholder="Найти путешествие мечты...">*/
/* 						<button type="submit" class="hero-search__submit">*/
/* 							<svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20" fill="none"><path d="M2.37488 2.5511C3.99216 0.885494 6.1319 0.0326109 8.28325 0.000918007C10.4349 -0.0307749 12.5988 0.758095 14.2647 2.37537C15.9306 3.99265 16.7832 6.13239 16.8149 8.28374C16.8444 10.2766 16.1698 12.2802 14.7847 13.8884L20.2622 19.2062C20.3243 19.2664 20.3259 19.3665 20.2657 19.429L19.7573 19.9524C19.6971 20.0145 19.597 20.0161 19.5345 19.9558L14.0561 14.6371C12.4921 16.0579 10.5171 16.7859 8.53209 16.8154C6.38074 16.8471 4.21652 16.0582 2.55061 14.4409C0.885006 12.8237 0.0321226 10.6842 0.000429725 8.53258C-0.0312631 6.38091 0.757607 4.21701 2.37488 2.5511ZM4.26202 5.05671C4.10105 5.25691 3.80797 5.28923 3.60745 5.12857C3.40726 4.9676 3.37494 4.67452 3.53591 4.47401C3.60118 4.39242 3.66613 4.3146 3.73077 4.24117C3.80954 4.15174 3.87763 4.07706 3.93599 4.01713C4.06339 3.88596 4.19707 3.76013 4.33639 3.63964C4.47477 3.52008 4.61912 3.40649 4.76848 3.29855C4.97715 3.14698 5.26898 3.19374 5.42054 3.40241C5.57178 3.61108 5.52534 3.90291 5.31667 4.05447C5.19053 4.14547 5.06721 4.24274 4.94828 4.34535C4.8303 4.44733 4.71608 4.55496 4.60625 4.66793C4.53345 4.74292 4.47414 4.80662 4.42896 4.85809C4.36965 4.92555 4.3138 4.99176 4.26202 5.05671ZM6.79086 3.30796C6.54642 3.38766 6.28315 3.25399 6.20313 3.00954C6.12343 2.76479 6.2571 2.50152 6.50155 2.42181C7.60484 2.06472 8.76272 2.02707 9.85283 2.28061C10.9433 2.53352 11.9656 3.07858 12.7974 3.88596C12.9826 4.06576 12.987 4.36167 12.8072 4.54649C12.6274 4.73163 12.3318 4.73602 12.1466 4.55622C11.4378 3.86808 10.5683 3.40398 9.64197 3.1884L9.64071 3.18715C8.71503 2.97158 7.73035 3.00358 6.79086 3.30765V3.30796ZM8.29706 0.934446C6.38482 0.962687 4.48293 1.72081 3.04514 3.20158C1.60735 4.68236 0.90603 6.6059 0.934271 8.51814C0.962512 10.4304 1.72063 12.3323 3.20141 13.7701C4.68219 15.2078 6.60573 15.9092 8.51828 15.8809C10.4305 15.8524 12.3324 15.0946 13.7702 13.6138C15.208 12.1327 15.9093 10.2095 15.8811 8.29692C15.8528 6.38499 15.0947 4.48279 13.6139 3.04532C12.1328 1.60753 10.2093 0.906204 8.29706 0.934132V0.934446Z" fill="#2B2A29"></path></svg>*/
/* 						</button>*/
/* 					</div>*/
/* 				</form>*/
/* 				<!--form class="hero-search__tags">*/
/* 					<form class="hero-search__tag" action="">*/
/* 						<input type="text" name="tags" value="памятник">*/
/* 						<button type="submit">горы</button>*/
/* 					</div>*/
/* 					<div class="hero-search__tag">*/
/* 						<input type="checkbox" name="tags" id="tag-2">*/
/* 						<label for="tag-2">#памятник</label>*/
/* 					</div>*/
/* 					<div class="hero-search__tag">*/
/* 						<input type="checkbox" name="tags" id="tag-3">*/
/* 						<label for="tag-3">#город</label>*/
/* 					</div>*/
/* 					<div class="hero-search__tag">*/
/* 						<input type="checkbox" name="tags" id="tag-4">*/
/* 						<label for="tag-4">#самара</label>*/
/* 					</div>*/
/* 				</form-->*/
/* 			</div>*/
/* 			<h1 class="page-hero__title">{$ page.field_header $}</h1>*/
/* 			<div class="blog-city">	*/
/* 				{% include 'cityswitcher' %}*/
/* 			</div>*/
/* 			*/
/* 			{% set cases = [2, 0, 1, 1, 1, 2] %}*/
/* 			{% set titles = ['история', 'истории', 'историй'] %}*/
/* 			{% set number = items|length %}*/
/* 			*/
/* 			<div class="blog-counter">{$ number $} историй</div> {# <> #}*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* <section class="blog">*/
/* 	<div class="blog-top">*/
/* 		<div class="cont">*/
/* 			<div class="blog-cats">*/
/* 				<a class="blog-cat {% if 'Отчеты о путешествиях' in request.input.tags %}blog-cat--active{% endif %}" href="?tags=Отчеты о путешествиях">*/
/* 					<span class="blog-cat__icon">*/
/* 						<svg xmlns="http://www.w3.org/2000/svg" width="29" height="22" viewBox="0 0 29 22" fill="none"><path d="M11.2289 0.337076H17.3421C17.4438 0.337076 17.5557 0.347248 17.6675 0.367591C17.7794 0.387934 17.8811 0.418449 17.993 0.448964C18.0948 0.489651 18.1965 0.530337 18.2982 0.581195C18.3999 0.632054 18.4914 0.693083 18.5728 0.754113C18.6644 0.825315 18.7457 0.896516 18.8271 0.97789C18.8983 1.05926 18.9797 1.14064 19.0407 1.24235C19.1119 1.34407 19.1628 1.44579 19.2136 1.5475C19.2543 1.64922 19.295 1.76111 19.3255 1.87299V1.88317C19.3967 2.229 19.4883 2.6257 19.5798 3.02239L19.6408 3.29703H26.2321C26.4864 3.29703 26.7203 3.34788 26.9441 3.43943C27.1679 3.53097 27.3815 3.67338 27.5442 3.84629C27.7171 4.01921 27.8494 4.22264 27.9511 4.44642C28.0426 4.6702 28.0935 4.90415 28.0935 5.15844V19.6123C28.0935 19.8666 28.0426 20.1006 27.9511 20.3244C27.8595 20.5481 27.7171 20.7617 27.5442 20.9245C27.3713 21.0974 27.1679 21.2296 26.9441 21.3314C26.7203 21.4229 26.4864 21.4738 26.2321 21.4738H2.35921C2.10492 21.4738 1.87097 21.4229 1.6472 21.3314C1.42342 21.2398 1.20982 21.0974 1.04707 20.9245C0.874153 20.7516 0.741922 20.5481 0.640205 20.3244C0.54866 20.1006 0.497803 19.8666 0.497803 19.6123V5.15844C0.497803 4.91432 0.54866 4.6702 0.640205 4.44642C0.73175 4.22264 0.874153 4.01921 1.04707 3.84629C1.21999 3.67338 1.42342 3.54114 1.6472 3.43943C1.87097 3.34788 2.10492 3.29703 2.35921 3.29703H8.94027L9.0013 3.02239C9.08267 2.64604 9.16405 2.27986 9.26576 1.86282C9.29628 1.75093 9.32679 1.63905 9.36748 1.53733C9.41834 1.42544 9.46919 1.32373 9.54039 1.23218C9.60142 1.14064 9.67263 1.04909 9.754 0.967718C9.83537 0.886345 9.91675 0.815143 10.0083 0.743942C10.0998 0.682912 10.1914 0.621882 10.2931 0.571024C10.3846 0.520165 10.4864 0.479479 10.5982 0.438792C10.7 0.398106 10.8119 0.377763 10.9237 0.357419C11.0356 0.337076 11.1373 0.326904 11.2492 0.326904L11.2289 0.337076ZM9.15387 10.8546C9.11319 11.0682 8.98096 11.2411 8.81821 11.353C8.65546 11.4649 8.44186 11.5055 8.22825 11.4649C8.01465 11.4242 7.84173 11.2919 7.72984 11.1292C7.61795 10.9664 7.57727 10.7528 7.61795 10.5392C7.75019 9.91877 7.96379 9.31864 8.2486 8.76937C8.54358 8.20993 8.90976 7.69118 9.33696 7.24362C9.76417 6.7859 10.2626 6.38921 10.8017 6.07388C11.3306 5.75856 11.9206 5.50427 12.5309 5.34153C13.426 5.10758 14.3211 5.05672 15.1857 5.16861C16.0808 5.29067 16.9352 5.58565 17.7082 6.02303C18.4813 6.47058 19.1628 7.06053 19.712 7.78272C20.241 8.47439 20.6478 9.27795 20.8818 10.1731C21.1157 11.0682 21.1666 11.9633 21.0547 12.8279C20.9326 13.723 20.6377 14.5774 20.2003 15.3504C19.7527 16.1235 19.1628 16.805 18.4406 17.3542C17.7489 17.8832 16.9454 18.29 16.0503 18.5342C15.1551 18.7681 14.26 18.819 13.3954 18.7071C12.5105 18.585 11.6561 18.3002 10.8831 17.8527L10.8627 17.8425C10.0897 17.3949 9.40816 16.805 8.8589 16.0828C8.32997 15.3911 7.9231 14.5876 7.68916 13.6924C7.62813 13.4788 7.66881 13.2652 7.77053 13.0923C7.87225 12.9194 8.03499 12.777 8.2486 12.7261C8.4622 12.6753 8.66564 12.7058 8.84873 12.8075C9.02164 12.9092 9.16404 13.072 9.2149 13.2856C9.39799 13.9773 9.71332 14.5876 10.1202 15.1267C10.5474 15.6759 11.0661 16.1336 11.6663 16.4795C12.2562 16.8253 12.9174 17.0491 13.6091 17.1406C14.2702 17.2322 14.9619 17.1915 15.6536 17.0084C16.3452 16.8253 16.9555 16.51 17.4946 16.1031C18.0439 15.6759 18.5016 15.1572 18.8475 14.557C19.1933 13.9671 19.4171 13.3059 19.5086 12.6143C19.6002 11.9531 19.5595 11.2614 19.3764 10.5698C19.1933 9.87808 18.878 9.26778 18.4711 8.72869C18.0439 8.17942 17.5251 7.72169 16.925 7.37586C16.3351 7.03002 15.6739 6.80624 14.9822 6.7147C14.3211 6.62315 13.6294 6.66384 12.9377 6.84693C12.4597 6.97916 12.0121 7.16225 11.6052 7.40637C11.1882 7.65049 10.8119 7.95564 10.4762 8.31165C10.1405 8.66765 9.85572 9.05418 9.63194 9.49156C9.40816 9.9086 9.24542 10.3663 9.1437 10.8546H9.15387ZM14.2906 7.88444C14.8398 7.88444 15.3586 7.99633 15.8366 8.18959C16.3351 8.39302 16.7826 8.69817 17.1488 9.06435C17.5251 9.4407 17.8201 9.87808 18.0235 10.3765C18.2168 10.8546 18.3287 11.3733 18.3287 11.9226C18.3287 12.4719 18.2168 12.9906 18.0235 13.4687C17.8201 13.9671 17.515 14.4045 17.1488 14.7808C16.7724 15.1572 16.3351 15.4521 15.8366 15.6556C15.3586 15.8488 14.8398 15.9607 14.2906 15.9607C13.7413 15.9607 13.2225 15.8488 12.7445 15.6556C12.2461 15.4521 11.8087 15.147 11.4323 14.7808C11.056 14.4045 10.761 13.9671 10.5576 13.4687C10.3643 12.9906 10.2524 12.4719 10.2524 11.9226C10.2524 11.3733 10.3643 10.8546 10.5576 10.3765C10.761 9.87808 11.0661 9.4407 11.4323 9.06435C11.8087 8.688 12.2461 8.39302 12.7445 8.18959C13.2225 7.99633 13.7413 7.88444 14.2906 7.88444ZM16.1418 10.0815C15.8977 9.83739 15.6129 9.64413 15.2975 9.5119C14.9924 9.38984 14.6567 9.31864 14.3007 9.31864C13.9447 9.31864 13.6091 9.38984 13.3039 9.5119C12.9886 9.64413 12.6936 9.83739 12.4597 10.0815C12.2155 10.3256 12.0223 10.6104 11.89 10.9258C11.768 11.2309 11.6968 11.5666 11.6968 11.9226C11.6968 12.2786 11.768 12.6143 11.89 12.9194C12.0223 13.2347 12.2155 13.5297 12.4597 13.7636C12.7038 14.0078 12.9886 14.201 13.3039 14.3333C13.6091 14.4553 13.9447 14.5265 14.3007 14.5265C14.6567 14.5265 14.9924 14.4553 15.2975 14.3333C15.6129 14.201 15.9078 14.0078 16.1418 13.7636C16.3859 13.5195 16.5792 13.2347 16.7114 12.9194C16.8335 12.6143 16.9047 12.2786 16.9047 11.9226C16.9047 11.5666 16.8335 11.2309 16.7114 10.9258C16.5792 10.6104 16.3859 10.3155 16.1418 10.0815ZM22.1532 5.95182H24.1571C24.4012 5.95182 24.6148 6.05354 24.7775 6.20612C24.9403 6.36886 25.0318 6.58247 25.0318 6.82659V7.28431C25.0318 7.52843 24.9301 7.74203 24.7775 7.90478C24.6148 8.06753 24.4012 8.15907 24.1571 8.15907H22.1532C21.9091 8.15907 21.6955 8.05736 21.5328 7.90478C21.37 7.74203 21.2785 7.52843 21.2785 7.28431V6.82659C21.2785 6.58247 21.3802 6.36886 21.5328 6.20612C21.6955 6.04337 21.9091 5.95182 22.1532 5.95182ZM14.2804 2.0154H11.2289C11.2085 2.0154 11.1882 2.0154 11.1679 2.0154C11.1475 2.0154 11.1373 2.02557 11.117 2.02557C11.0967 2.03574 11.0763 2.04591 11.056 2.05608C11.0356 2.06626 11.0153 2.07643 10.9949 2.09677C10.9746 2.10694 10.9644 2.12729 10.9441 2.13746C10.9339 2.14763 10.9237 2.16797 10.9136 2.17814L10.8932 2.20866L10.8831 2.229L10.4253 4.26333C10.3948 4.45659 10.2931 4.62951 10.1507 4.76174C9.99812 4.89397 9.80486 4.97535 9.60143 4.97535H2.34904C2.3287 4.97535 2.29818 4.97535 2.27784 4.98552C2.2575 4.99569 2.23715 5.00586 2.21681 5.02621C2.19647 5.04655 2.1863 5.06689 2.17612 5.08723C2.16595 5.10758 2.16595 5.12792 2.16595 5.15844V19.6123C2.16595 19.6327 2.16595 19.6632 2.17612 19.6835C2.1863 19.7039 2.19647 19.7242 2.21681 19.7446C2.23715 19.7649 2.2575 19.7751 2.27784 19.7853C2.29818 19.7954 2.31853 19.7954 2.34904 19.7954H26.2219C26.2422 19.7954 26.2728 19.7954 26.2931 19.7853C26.3134 19.7751 26.3338 19.7649 26.3541 19.7446C26.3745 19.7242 26.3846 19.7039 26.3948 19.6835C26.405 19.6632 26.405 19.6429 26.405 19.6123V5.15844C26.405 5.13809 26.405 5.10758 26.3948 5.08723C26.3846 5.06689 26.3745 5.04655 26.3541 5.02621C26.3338 5.00586 26.3134 4.99569 26.2931 4.98552C26.2728 4.97535 26.2524 4.97535 26.2219 4.97535H18.9695C18.7763 4.97535 18.5932 4.90415 18.4508 4.79226C18.3084 4.68037 18.2066 4.51762 18.1558 4.32436L18.0032 3.63269C17.9015 3.16479 17.7998 2.70707 17.6879 2.24935L17.6777 2.21883C17.6777 2.20866 17.6675 2.19849 17.6574 2.18832C17.6472 2.17814 17.637 2.1578 17.6167 2.14763C17.6065 2.13746 17.5862 2.11711 17.5658 2.10694C17.5455 2.0866 17.5251 2.07643 17.5048 2.06626C17.4845 2.05608 17.4641 2.04591 17.4438 2.03574C17.4234 2.02557 17.4031 2.02557 17.3929 2.02557C17.3726 2.02557 17.3624 2.02557 17.3319 2.02557H14.2804V2.0154Z" fill="#2d2727"/></svg>*/
/* 					</span>*/
/* 					<span class="blog-cat__title">Отчеты о путешествиях</span>*/
/* 				</a>*/
/* 				<a class="blog-cat {% if 'Советы бывалых' in request.input.tags %}blog-cat--active{% endif %}" href="?tags=Советы бывалых">*/
/* 					<span class="blog-cat__icon">*/
/* 						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none"><path d="M12.0888 0.617676C13.6553 0.617676 15.1403 0.89231 16.5033 1.39072C17.9172 1.90947 19.1988 2.67235 20.2668 3.62848C21.345 4.58462 22.2198 5.73401 22.8199 7.01564C23.3997 8.24641 23.715 9.59924 23.715 11.0233C23.715 12.4371 23.3997 13.79 22.8199 15.0309C22.2198 16.3125 21.3552 17.4518 20.2668 18.4181C19.1988 19.364 17.9172 20.1371 16.5033 20.6558C15.1403 21.1542 13.6451 21.4289 12.0888 21.4289C11.9668 21.4289 11.8142 21.4289 11.6413 21.4187C11.4785 21.4085 11.326 21.4085 11.1836 21.3984C11.0818 21.3882 10.9598 21.378 10.8174 21.3678L10.5936 21.3475L5.74173 24.4804C5.54847 24.6024 5.32469 24.6431 5.11109 24.6024C4.89748 24.5617 4.71439 24.4295 4.58216 24.2362C4.52113 24.1447 4.48044 24.043 4.4601 23.9311C4.43976 23.8192 4.43976 23.7175 4.4601 23.6056L5.31452 19.4963C4.64319 19.069 4.03289 18.5808 3.47345 18.0417C2.86315 17.4416 2.32405 16.7703 1.8765 16.0582C1.40861 15.3055 1.04243 14.4918 0.798308 13.6272C0.554189 12.7931 0.432129 11.9184 0.432129 11.0334C0.432129 9.61958 0.74745 8.26675 1.32723 7.02581C1.92736 5.74419 2.79195 4.60496 3.88032 3.63865C4.94834 2.69269 6.22997 1.91965 7.64383 1.40089C9.00683 0.902482 10.5021 0.627847 12.0583 0.627847L12.0888 0.617676ZM15.1505 8.31761C15.8117 8.31761 16.422 8.59225 16.8593 9.02963C17.2967 9.46701 17.5714 10.0671 17.5714 10.7385C17.5612 10.8707 17.5612 10.9826 17.5408 11.1148L17.5307 11.1453C17.4188 11.837 17.0119 12.5083 16.4728 13.0678C15.8727 13.6984 15.0996 14.207 14.3978 14.4511C14.1944 14.5223 13.9706 14.4206 13.8994 14.207C13.8689 14.1155 13.8689 14.0239 13.8994 13.9425C13.9909 13.6882 14.052 13.4441 14.1028 13.2305C14.1232 13.1288 14.1435 13.0271 14.1537 12.9254C13.7773 12.7525 13.462 12.4982 13.2179 12.1727C12.9127 11.7658 12.7398 11.2674 12.7398 10.7283C12.7398 10.0671 13.0145 9.45684 13.4518 9.01946C13.8892 8.58208 14.4893 8.30744 15.1607 8.30744L15.1505 8.31761ZM9.24077 8.31761C9.9121 8.31761 10.5122 8.59225 10.9496 9.02963L10.97 9.04997C11.3972 9.48735 11.6515 10.0773 11.6515 10.7283C11.6413 10.8605 11.6413 10.9724 11.6209 11.1046L11.6108 11.1352C11.4989 11.8268 11.092 12.4982 10.5529 13.0576C9.95279 13.6882 9.17974 14.1968 8.4779 14.4409C8.27447 14.5121 8.05069 14.4104 7.97949 14.1968C7.94898 14.1053 7.94898 14.0137 7.97949 13.9324C8.06086 13.6984 8.12189 13.4746 8.17275 13.2712C8.20327 13.1491 8.22361 13.0271 8.23378 12.9152C7.85743 12.7423 7.54211 12.488 7.29799 12.1625C6.99284 11.7556 6.81992 11.2572 6.81992 10.7181C6.81992 10.057 7.09456 9.44667 7.53194 9.00928C7.96932 8.5719 8.56945 8.29727 9.24077 8.29727V8.31761ZM19.1683 4.8796C18.2529 4.06586 17.1543 3.41488 15.9235 2.95715C14.7436 2.52995 13.4518 2.28583 12.0888 2.28583C10.7258 2.28583 9.43404 2.51977 8.25412 2.95715C7.03353 3.40471 5.92482 4.06586 5.00937 4.8796C4.10409 5.68316 3.37173 6.63929 2.87332 7.70731C2.39526 8.72448 2.13079 9.84336 2.13079 11.0131C2.13079 11.7556 2.23251 12.4676 2.43594 13.1593C2.63938 13.8713 2.94453 14.5427 3.33105 15.1631C3.72774 15.8039 4.21598 16.4041 4.77542 16.933C5.33486 17.4619 5.97568 17.94 6.66735 18.3367C6.83009 18.4181 6.96233 18.5605 7.03353 18.7232C7.10473 18.886 7.13524 19.069 7.09456 19.2521L6.52495 21.9781L9.92227 19.7811C10.0036 19.72 10.1054 19.6793 10.2071 19.6488C10.3088 19.6285 10.4105 19.6183 10.5122 19.6285C10.6445 19.6488 10.7665 19.659 10.8988 19.6793C11.0208 19.6895 11.153 19.6997 11.2853 19.7099C11.4277 19.72 11.5497 19.7302 11.6718 19.7302C11.7735 19.7302 11.9159 19.7404 12.0685 19.7404C13.4315 19.7404 14.7233 19.5064 15.9032 19.069C17.1238 18.6215 18.2325 17.9603 19.148 17.1466C20.0532 16.343 20.7856 15.3869 21.284 14.3189C21.7621 13.3017 22.0265 12.1828 22.0265 11.0131C22.0265 9.84336 21.7621 8.72448 21.284 7.70731C20.7856 6.63929 20.0532 5.68316 19.148 4.8796H19.1683Z" fill="#2B2A29"/></svg>*/
/* 					</span>*/
/* 					<span class="blog-cat__title">Советы бывалых</span>*/
/* 				</a>*/
/* 				<a class="blog-cat {% if 'Проверенные маршруты' in request.input.tags %}blog-cat--active{% endif %}" href="?tags=Проверенные маршруты">*/
/* 					<span class="blog-cat__icon">*/
/* 						<svg xmlns="http://www.w3.org/2000/svg" width="19" height="25" viewBox="0 0 19 25" fill="none"><path d="M10.1259 24.6906C10.0912 24.7253 10.0912 24.7253 10.0566 24.7599C10.022 24.7599 10.022 24.7945 9.98734 24.7945C9.95271 24.7945 9.91808 24.8292 9.88344 24.8292C9.84881 24.8638 9.77955 24.8638 9.74492 24.8638C9.71028 24.8638 9.64102 24.8638 9.60639 24.8984C9.57176 24.8984 9.57176 24.8984 9.53712 24.8984C9.50249 24.8984 9.43323 24.8984 9.39859 24.8638C9.36396 24.8638 9.2947 24.8292 9.26007 24.8292L9.15617 24.7945C9.12154 24.7945 9.08691 24.7599 9.08691 24.7599C9.05227 24.7253 9.05227 24.7253 9.01764 24.6906C8.22111 24.0326 7.4592 23.3054 6.6973 22.4742C5.97002 21.6777 5.27738 20.8119 4.61937 19.9114C3.996 19.0456 3.44188 18.1452 2.9224 17.2101C2.43756 16.3097 2.02197 15.3746 1.67565 14.4742C1.60639 14.2318 1.60639 14.024 1.71028 13.8162C1.81418 13.6084 1.98734 13.4352 2.19513 13.366C2.43756 13.2967 2.64535 13.2967 2.85314 13.4006C3.06093 13.5045 3.23409 13.6777 3.30336 13.8855C3.61505 14.7166 3.996 15.5824 4.44621 16.4136C4.89643 17.2794 5.45054 18.1106 6.03929 18.9417C6.5934 19.7383 7.21678 20.5002 7.84015 21.1928C8.39427 21.8162 8.98301 22.4049 9.57176 22.9244C10.4722 22.1279 11.3726 21.1582 12.2384 20.1192C13.1042 19.0456 13.9008 17.8681 14.5934 16.656C15.2514 15.4785 15.7709 14.2664 16.1172 13.0543C16.4289 11.9461 16.6367 10.8032 16.6367 9.69497C16.6367 8.72528 16.4635 7.82484 16.1172 6.99368C15.7709 6.12787 15.2514 5.36597 14.5934 4.70796C13.9354 4.04995 13.1735 3.53047 12.3077 3.18415C11.4765 2.83783 10.5761 2.66467 9.60639 2.66467C8.63669 2.66467 7.73626 2.83783 6.90509 3.18415C6.03929 3.53047 5.27738 4.04995 4.61937 4.70796C3.96137 5.36597 3.44189 6.12787 3.09556 6.99368C2.74924 7.82484 2.57608 8.72528 2.57608 9.69497V9.97203V10.2145L2.61072 10.4915L2.64535 10.7686C2.67998 11.011 2.61072 11.2188 2.43756 11.3919C2.29903 11.5651 2.09124 11.669 1.84881 11.7036C1.60639 11.7383 1.39859 11.669 1.22543 11.4958C1.05227 11.3573 0.948379 11.1495 0.913746 10.9071L0.879114 10.5954L0.844482 10.2837V9.97203V9.66034C0.844482 8.48285 1.08691 7.34 1.50249 6.30103C1.95271 5.22744 2.61072 4.25774 3.40725 3.46121C4.20379 2.66467 5.17349 2.00666 6.24708 1.55645C7.28604 1.14086 8.4289 0.898438 9.60639 0.898438C10.7839 0.898438 11.9267 1.14086 12.9657 1.55645C14.0393 2.00666 15.009 2.66467 15.8055 3.46121C16.6021 4.25774 17.2601 5.22744 17.7103 6.30103C18.1259 7.34 18.3683 8.48285 18.3683 9.66034C18.3683 10.9071 18.1605 12.1885 17.7795 13.4699C17.3986 14.8205 16.8099 16.1712 16.0826 17.4525C15.3207 18.8378 14.4202 20.1538 13.4159 21.366C12.377 22.6474 11.2341 23.7556 10.1259 24.7253V24.6906ZM9.57176 6.4742C10.0566 6.4742 10.5415 6.57809 10.9917 6.75125C11.3726 6.92441 11.7536 7.1322 12.0653 7.44389L12.1692 7.54779C12.5155 7.89411 12.7925 8.27506 12.9657 8.75991C13.1389 9.21013 13.2428 9.66034 13.2428 10.1798C13.2428 10.6647 13.1389 11.1495 12.9657 11.5997C12.7925 12.05 12.5155 12.4655 12.1692 12.8119C11.8228 13.1582 11.4419 13.4352 10.9917 13.6084C10.5415 13.7816 10.0912 13.8855 9.57176 13.8855C9.08691 13.8855 8.60206 13.7816 8.15184 13.6084C7.84015 13.4699 7.52847 13.2967 7.25141 13.0889L6.97435 12.8119C6.62803 12.4655 6.35098 12.0846 6.17782 11.5997C6.00466 11.1495 5.90076 10.6993 5.90076 10.1798C5.90076 9.69497 6.00466 9.21013 6.17782 8.75991C6.35098 8.30969 6.62803 7.89411 6.97435 7.58242C7.32067 7.2361 7.70163 6.95904 8.15184 6.78588C8.60206 6.61272 9.05227 6.50883 9.57176 6.50883V6.4742ZM10.8531 8.72528C10.68 8.58675 10.5068 8.44822 10.299 8.37896C10.0566 8.27506 9.81418 8.24043 9.57176 8.24043C9.2947 8.24043 9.05227 8.27506 8.84448 8.37896C8.60206 8.48285 8.39427 8.62138 8.22111 8.79454C8.04795 8.9677 7.90942 9.17549 7.80552 9.41792C7.70163 9.66034 7.66699 9.90277 7.66699 10.1452C7.66699 10.4222 7.70163 10.6647 7.80552 10.8725C7.90942 11.1149 8.04795 11.3227 8.22111 11.4958L8.29037 11.5651C8.46353 11.7036 8.63669 11.8422 8.84448 11.9461C9.08691 12.05 9.32933 12.0846 9.57176 12.0846C9.84881 12.0846 10.0912 12.05 10.299 11.9461C10.5415 11.8422 10.7492 11.7036 10.9224 11.5305C11.0956 11.3573 11.2341 11.1495 11.338 10.9071C11.4419 10.6647 11.4765 10.4222 11.4765 10.1798C11.4765 9.90277 11.4419 9.66034 11.338 9.45255C11.2341 9.21013 11.0956 9.00233 10.9224 8.82917L10.8531 8.75991V8.72528Z" fill="#2B2A29"/></svg>*/
/* 					</span>*/
/* 					<span class="blog-cat__title">Проверенные маршруты</span>*/
/* 				</a>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="blog-posts">*/
/* 		<div class="cont">*/
/* 			<div class="blog-posts__wrapper">*/
/* 				{% for item in items %}*/
/* 				<div class="post-card">*/
/* 					<div class="post-card__top">*/
/* 						<div class="post-card__img">*/
/* 							<a href="{$ item.path $}">*/
/* 								<img src="/site/data/images/medium/{$ item.field_image $}">*/
/* 							</a>*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="post-card__mid">*/
/* 						<div class="post-card__title">*/
/* 							<a href="{$ item.path $}">{$ item.field_header $}</a>*/
/* 						</div>*/
/* 						<div class="post-card__desc">{$ item.field_summary $}</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				{% endfor %}*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </section>*/
/* */
/* {% include 'footer' %}*/
/* <script src="/site/theme/js/solo_sityswitcher.js"></script>*/
