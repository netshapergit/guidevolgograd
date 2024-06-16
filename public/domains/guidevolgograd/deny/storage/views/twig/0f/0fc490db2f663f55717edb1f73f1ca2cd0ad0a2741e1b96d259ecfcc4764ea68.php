<?php

/* layouts.ajax */
class __TwigTemplate_3af73789a4b4a995939fe6e6a77bcc1c11bc61757c9daafa3cf315d28b46a6db extends TwigBridge\Twig\Template
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
        $filters = array("length" => 5, "merge" => 17, "split" => 60, "trim" => 131, "lower" => 131, "escape" => 134, "slice" => 173, "json_encode" => 199, "default" => 208, "round" => 209);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'for', 'if'),
                array('length', 'merge', 'split', 'trim', 'lower', 'escape', 'slice', 'json_encode', 'default', 'round'),
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
        // line 11
        echo "\t

";
        // line 13
        $context["items"] = array();
        // line 14
        echo "

";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["homepage"]) ? $context["homepage"] : null), "active_sub_pages", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["subpage1"]) {
            // line 17
            echo "\t\t";
            $context["items"] = twig_array_merge((isset($context["items"]) ? $context["items"] : null), array(0 => $context["subpage1"]));
            // line 18
            echo "\t";
            if ((twig_length_filter($this->env, $this->getAttribute($context["subpage1"], "active_sub_pages", array())) > 0)) {
                // line 19
                echo "\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["subpage1"], "active_sub_pages", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["subpage2"]) {
                    // line 20
                    echo "\t\t\t\t";
                    $context["items"] = twig_array_merge((isset($context["items"]) ? $context["items"] : null), array(0 => $context["subpage2"]));
                    // line 21
                    echo "\t\t\t";
                    if ((twig_length_filter($this->env, $this->getAttribute($context["subpage2"], "active_sub_pages", array())) > 0)) {
                        // line 22
                        echo "\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["subpage2"], "active_sub_pages", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["subpage3"]) {
                            // line 23
                            echo "\t\t\t\t\t\t";
                            $context["items"] = twig_array_merge((isset($context["items"]) ? $context["items"] : null), array(0 => $context["subpage3"]));
                            // line 24
                            echo "\t\t\t\t\t";
                            if ((twig_length_filter($this->env, $this->getAttribute($context["subpage3"], "active_sub_pages", array())) > 0)) {
                                // line 25
                                echo "\t\t\t\t\t\t";
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["subpage3"], "active_sub_pages", array()));
                                foreach ($context['_seq'] as $context["_key"] => $context["subpage4"]) {
                                    // line 26
                                    echo "\t\t\t\t\t\t\t\t";
                                    $context["items"] = twig_array_merge((isset($context["items"]) ? $context["items"] : null), array(0 => $context["subpage4"]));
                                    // line 27
                                    echo "\t\t\t\t\t\t\t";
                                    if ((twig_length_filter($this->env, $this->getAttribute($context["subpage4"], "active_sub_pages", array())) > 0)) {
                                        // line 28
                                        echo "\t\t\t\t\t\t\t\t";
                                        $context['_parent'] = $context;
                                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["subpage4"], "active_sub_pages", array()));
                                        foreach ($context['_seq'] as $context["_key"] => $context["subpage5"]) {
                                            // line 29
                                            echo "\t\t\t\t\t\t\t\t\t\t";
                                            $context["items"] = twig_array_merge((isset($context["items"]) ? $context["items"] : null), array(0 => $context["subpage5"]));
                                            // line 30
                                            echo "\t\t\t\t\t\t\t\t\t";
                                            if ((twig_length_filter($this->env, $this->getAttribute($context["subpage5"], "active_sub_pages", array())) > 0)) {
                                                // line 31
                                                echo "\t\t\t\t\t\t\t\t\t\t";
                                                $context['_parent'] = $context;
                                                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["subpage5"], "active_sub_pages", array()));
                                                foreach ($context['_seq'] as $context["_key"] => $context["subpage6"]) {
                                                    // line 32
                                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                                                    $context["items"] = twig_array_merge((isset($context["items"]) ? $context["items"] : null), array(0 => $context["subpage6"]));
                                                    // line 33
                                                    echo "\t\t\t\t\t\t\t\t\t\t";
                                                }
                                                $_parent = $context['_parent'];
                                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subpage6'], $context['_parent'], $context['loop']);
                                                $context = array_intersect_key($context, $_parent) + $_parent;
                                                // line 34
                                                echo "\t\t\t\t\t\t\t\t\t";
                                            }
                                            // line 35
                                            echo "\t\t\t\t\t\t\t\t";
                                        }
                                        $_parent = $context['_parent'];
                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subpage5'], $context['_parent'], $context['loop']);
                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                        // line 36
                                        echo "\t\t\t\t\t\t\t";
                                    }
                                    // line 37
                                    echo "\t\t\t\t\t\t";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subpage4'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 38
                                echo "\t\t\t\t\t";
                            }
                            // line 39
                            echo "\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subpage3'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 40
                        echo "\t\t\t";
                    }
                    // line 41
                    echo "\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subpage2'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 42
                echo "\t";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subpage1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "
";
        // line 45
        $context["allItems"] = (isset($context["items"]) ? $context["items"] : null);
        // line 46
        echo "

";
        // line 48
        $context["curItems"] = array();
        // line 49
        $context["curLayouts"] = array(0 => 53, 1 => 51, 2 => 22, 3 => 17, 4 => 24, 5 => 49, 6 => 50, 7 => 52);
        // line 50
        echo "
";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 52
            echo "\t";
            if (twig_in_filter($this->getAttribute($context["item"], "layout_id", array()), (isset($context["curLayouts"]) ? $context["curLayouts"] : null))) {
                // line 53
                echo "\t\t";
                $context["curItems"] = twig_array_merge((isset($context["curItems"]) ? $context["curItems"] : null), array(0 => $context["item"]));
                // line 54
                echo "\t";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "
";
        // line 57
        $context["items"] = (isset($context["curItems"]) ? $context["curItems"] : null);
        // line 58
        echo "
";
        // line 59
        if ($this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "input", array()), "ids", array())) {
            // line 60
            echo "\t";
            $context["ids"] = twig_split_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "input", array()), "ids", array()), ",");
            // line 61
            echo "\t";
            $context["itemsByIDs"] = array();
            // line 62
            echo "
\t";
            // line 63
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["ids"]) ? $context["ids"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["id"]) {
                // line 64
                echo "\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 65
                    echo "\t\t\t";
                    if (($this->getAttribute($context["item"], "id", array()) == $context["id"])) {
                        // line 66
                        echo "\t\t\t\t";
                        $context["itemsByIDs"] = twig_array_merge((isset($context["itemsByIDs"]) ? $context["itemsByIDs"] : null), array(0 => $context["item"]));
                        // line 67
                        echo "\t\t\t";
                    }
                    // line 68
                    echo "\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 69
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['id'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            echo "
\t";
            // line 71
            $context["items"] = (isset($context["itemsByIDs"]) ? $context["itemsByIDs"] : null);
            // line 72
            echo "\t\t
";
        }
        // line 74
        echo "
";
        // line 76
        echo "
";
        // line 77
        if ($this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "input", array()), "cat", array())) {
            // line 78
            echo "\t";
            $context["cat"] = $this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "input", array()), "cat", array());
            // line 79
            echo "\t";
            $context["catFiltered"] = array();
            // line 80
            echo "
\t";
            // line 81
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["curItems"]) ? $context["curItems"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 82
                echo "\t\t";
                if ((twig_length_filter($this->env, (isset($context["cat"]) ? $context["cat"] : null)) > 0)) {
                    // line 83
                    echo "\t\t\t";
                    if (($this->getAttribute($context["item"], "layout_id", array()) == (isset($context["cat"]) ? $context["cat"] : null))) {
                        // line 84
                        echo "\t\t\t\t";
                        $context["catFiltered"] = twig_array_merge((isset($context["catFiltered"]) ? $context["catFiltered"] : null), array(0 => $context["item"]));
                        // line 85
                        echo "\t\t\t";
                    }
                    // line 86
                    echo "\t\t";
                }
                // line 87
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            echo "
\t";
            // line 89
            $context["items"] = (isset($context["catFiltered"]) ? $context["catFiltered"] : null);
            echo "\t\t

";
        }
        // line 92
        echo "
";
        // line 94
        echo "
";
        // line 96
        echo "
";
        // line 97
        if ($this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "input", array()), "city", array())) {
            // line 98
            echo "\t";
            $context["city"] = $this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "input", array()), "city", array());
            // line 99
            echo "\t";
            $context["cityFiltered"] = array();
            // line 100
            echo "
\t";
            // line 101
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 102
                echo "\t\t";
                if ((twig_length_filter($this->env, (isset($context["city"]) ? $context["city"] : null)) > 0)) {
                    // line 103
                    echo "\t\t\t";
                    if (($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "parent_page", array()), "parent_page", array()), "id", array()) == (isset($context["city"]) ? $context["city"] : null))) {
                        // line 104
                        echo "\t\t\t\t";
                        $context["cityFiltered"] = twig_array_merge((isset($context["cityFiltered"]) ? $context["cityFiltered"] : null), array(0 => $context["item"]));
                        // line 105
                        echo "\t\t\t";
                    }
                    // line 106
                    echo "\t\t";
                }
                // line 107
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 108
            echo "
\t";
            // line 109
            $context["items"] = (isset($context["cityFiltered"]) ? $context["cityFiltered"] : null);
            echo "\t\t

";
        }
        // line 112
        echo "
";
        // line 114
        echo "
";
        // line 116
        echo "
";
        // line 117
        if ($this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "input", array()), "tags", array())) {
            // line 118
            echo "\t";
            $context["reqTags"] = twig_split_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "input", array()), "tags", array()), ",");
            // line 119
            echo "\t";
            $context["tagItems"] = array();
            // line 120
            echo "\t
\t";
            // line 121
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 122
                echo "\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["reqTags"]) ? $context["reqTags"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["reqTag"]) {
                    // line 123
                    echo "\t\t\t
\t\t\t";
                    // line 124
                    $context["tagFinded"] = false;
                    // line 125
                    echo "\t\t\t";
                    $context["tagInHeader"] = false;
                    // line 126
                    echo "\t\t\t";
                    $context["tagInFilters"] = false;
                    // line 127
                    echo "
\t\t\t";
                    // line 128
                    if (($this->getAttribute($context["item"], "field_tags", array()) &&  !(isset($context["tagFinded"]) ? $context["tagFinded"] : null))) {
                        // line 129
                        echo "\t\t\t\t";
                        $context["itemTags"] = twig_split_filter($this->env, $this->getAttribute($context["item"], "field_tags", array()), ",");
                        // line 130
                        echo "\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((isset($context["itemTags"]) ? $context["itemTags"] : null));
                        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
                            // line 131
                            echo "\t\t\t\t\t";
                            if ((trim(twig_lower_filter($this->env, $context["t"])) == trim(twig_lower_filter($this->env, $context["reqTag"])))) {
                                // line 132
                                echo "\t\t\t\t\t\t";
                                $context["tagItems"] = twig_array_merge((isset($context["tagItems"]) ? $context["tagItems"] : null), array(0 => $context["item"]));
                                // line 133
                                echo "\t\t\t\t\t\t";
                                $context["tagFinded"] = true;
                                // line 134
                                echo "\t\t\t\t\t\tHeader: ";
                                echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["item"], "field_header", array()), "html", null, true));
                                echo "<br>Tags: ";
                                echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["item"], "field_tags", array()), "html", null, true));
                                echo "<br>Filters: ";
                                echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["item"], "field_filters", array()), "html", null, true));
                                echo "<br>Finded by: tags<hr>
\t\t\t\t\t";
                            }
                            // line 136
                            echo "\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 137
                        echo "\t\t\t";
                    }
                    // line 138
                    echo "
\t\t\t";
                    // line 139
                    if ((twig_in_filter(trim(twig_lower_filter($this->env, $context["reqTag"])), twig_lower_filter($this->env, $this->getAttribute($context["item"], "field_header", array()))) &&  !(isset($context["tagFinded"]) ? $context["tagFinded"] : null))) {
                        // line 140
                        echo "\t\t\t\t";
                        $context["tagItems"] = twig_array_merge((isset($context["tagItems"]) ? $context["tagItems"] : null), array(0 => $context["item"]));
                        // line 141
                        echo "\t\t\t\t";
                        $context["tagFinded"] = true;
                        // line 142
                        echo "\t\t\t\tHeader: ";
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["item"], "field_header", array()), "html", null, true));
                        echo "<br>Tags: ";
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["item"], "field_tags", array()), "html", null, true));
                        echo "<br>Filters: ";
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["item"], "field_filters", array()), "html", null, true));
                        echo "<br>Finded by: header<hr>
\t\t\t";
                    }
                    // line 144
                    echo "\t\t\t
\t\t\t";
                    // line 152
                    echo "\t\t\t
\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reqTag'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 154
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 160
            echo "\t";
            $context["items"] = (isset($context["tagItems"]) ? $context["tagItems"] : null);
            // line 161
            echo "
";
        }
        // line 163
        echo "
";
        // line 165
        echo "
";
        // line 166
        if ($this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "input", array()), "query", array())) {
            // line 167
            echo "\t";
            $context["query"] = twig_split_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "input", array()), "query", array()), " ");
            // line 168
            echo "\t";
            $context["results"] = array();
            // line 169
            echo "
\t";
            // line 170
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 171
                echo "\t\t";
                if ((twig_length_filter($this->env, (isset($context["query"]) ? $context["query"] : null)) > 0)) {
                    // line 172
                    echo "\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["query"]) ? $context["query"] : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["que"]) {
                        // line 173
                        echo "\t\t\t\t";
                        if (((twig_length_filter($this->env, twig_slice($this->env, $context["que"], 0,  -1)) >= 3) && twig_in_filter(twig_lower_filter($this->env, twig_slice($this->env, $context["que"], 0,  -1)), twig_lower_filter($this->env, $this->getAttribute($context["item"], "field_header", array()))))) {
                            // line 174
                            echo "\t\t\t\t\t";
                            $context["results"] = twig_array_merge((isset($context["results"]) ? $context["results"] : null), array(0 => $context["item"]));
                            // line 175
                            echo "\t\t\t\t";
                        }
                        // line 176
                        echo "\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['que'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 177
                    echo "\t\t";
                }
                // line 178
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 179
            echo "
\t";
            // line 180
            $context["items"] = (isset($context["results"]) ? $context["results"] : null);
            echo "\t\t

";
        }
        // line 183
        echo "
";
        // line 184
        $context["uniqResults"] = array();
        // line 185
        $context["uniqIDs"] = array();
        // line 186
        echo "
";
        // line 187
        if ((twig_length_filter($this->env, (isset($context["items"]) ? $context["items"] : null)) > 0)) {
            // line 188
            echo "\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 189
                echo "\t\t";
                if (!twig_in_filter($this->getAttribute($context["item"], "id", array()), (isset($context["uniqIDs"]) ? $context["uniqIDs"] : null))) {
                    // line 190
                    echo "\t\t\t";
                    $context["uniqResults"] = twig_array_merge((isset($context["uniqResults"]) ? $context["uniqResults"] : null), array(0 => $context["item"]));
                    // line 191
                    echo "\t\t\t";
                    $context["uniqIDs"] = twig_array_merge((isset($context["uniqIDs"]) ? $context["uniqIDs"] : null), array(0 => $this->getAttribute($context["item"], "id", array())));
                    // line 192
                    echo "\t\t";
                }
                // line 193
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 195
        echo "
";
        // line 196
        $context["items"] = (isset($context["uniqResults"]) ? $context["uniqResults"] : null);
        // line 197
        echo "\t
";
        // line 198
        if ($this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "input", array()), "json", array())) {
            // line 199
            echo "\t<div id=\"ajax-answer\" data-answer=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["items"]) ? $context["items"] : null)), "html", null, true));
            echo "\" ";
            if (((twig_length_filter($this->env, (isset($context["results"]) ? $context["results"] : null)) == 0) && ($this->getAttribute((isset($context["query"]) ? $context["query"] : null), 0, array(), "array") != ""))) {
                echo "data-empty=\"1\"";
            }
            echo "></div>
";
        } else {
            // line 200
            echo "\t\t
\t

\t";
            // line 203
            $context["perPage"] = 300;
            // line 204
            echo "\t";
            if ($this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "input", array()), "pp", array())) {
                // line 205
                echo "\t\t";
                $context["perPage"] = $this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "input", array()), "pp", array());
                // line 206
                echo "\t";
            }
            // line 207
            echo "\t
\t";
            // line 208
            $context["pageCurrent"] = (($this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "input", array(), "any", false, true), "p", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "input", array(), "any", false, true), "p", array()), 1)) : (1));
            // line 209
            echo "\t";
            $context["pageCount"] = twig_round((twig_length_filter($this->env, (isset($context["items"]) ? $context["items"] : null)) / (isset($context["perPage"]) ? $context["perPage"] : null)), 0, "ceil");
            // line 210
            echo "\t
\t";
            // line 211
            $context["items"] = twig_slice($this->env, (isset($context["items"]) ? $context["items"] : null), ((isset($context["perPage"]) ? $context["perPage"] : null) * ((isset($context["pageCurrent"]) ? $context["pageCurrent"] : null) - 1)), (isset($context["perPage"]) ? $context["perPage"] : null));
            // line 212
            echo "\t
\t";
            // line 213
            $context["itemsWithCities"] = array();
            // line 214
            echo "
\t";
            // line 215
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 216
                echo "\t\t";
                $context["itemCity"] = 0;
                // line 217
                echo "\t\t";
                $context["parentPage"] = array();
                // line 218
                echo "\t\t";
                $context["parentPageParent"] = array();
                // line 219
                echo "\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["allItems"]) ? $context["allItems"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["pp"]) {
                    // line 220
                    echo "\t\t\t";
                    if (($this->getAttribute($context["pp"], "id", array()) == $this->getAttribute($context["item"], "parent_page_id", array()))) {
                        // line 221
                        echo "\t\t\t\t";
                        $context["parentPage"] = $context["pp"];
                        // line 222
                        echo "\t\t\t";
                    }
                    // line 223
                    echo "\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pp'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 224
                echo "\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["allItems"]) ? $context["allItems"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["ppp"]) {
                    // line 225
                    echo "\t\t\t";
                    if (($this->getAttribute($context["ppp"], "id", array()) == $this->getAttribute((isset($context["parentPage"]) ? $context["parentPage"] : null), "parent_page_id", array()))) {
                        // line 226
                        echo "\t\t\t\t";
                        $context["parentPageParent"] = $context["ppp"];
                        // line 227
                        echo "\t\t\t";
                    }
                    // line 228
                    echo "\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ppp'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 229
                echo "\t\t";
                $context["itemCity"] = $this->getAttribute((isset($context["parentPageParent"]) ? $context["parentPageParent"] : null), "id", array());
                // line 230
                echo "
\t\t";
                // line 231
                $context["itemData"] = array("id" => $this->getAttribute(                // line 232
$context["item"], "id", array()), "alias" => $this->getAttribute(                // line 233
$context["item"], "alias", array()), "field_header" => $this->getAttribute(                // line 234
$context["item"], "field_header", array()), "layout_id" => $this->getAttribute(                // line 235
$context["item"], "layout_id", array()), "path" => $this->getAttribute(                // line 236
$context["item"], "path", array()), "field_image" => $this->getAttribute(                // line 237
$context["item"], "field_image", array()), "field_gallery" => $this->getAttribute(                // line 238
$context["item"], "field_gallery", array()), "field_coords" => $this->getAttribute(                // line 239
$context["item"], "field_coords", array()), "field_address" => $this->getAttribute(                // line 240
$context["item"], "field_address", array()), "field_tags" => $this->getAttribute(                // line 241
$context["item"], "field_tags", array()), "field_prices" => $this->getAttribute(                // line 242
$context["item"], "field_prices", array()), "field_filters" => $this->getAttribute(                // line 243
$context["item"], "field_filters", array()), "field_is_not_generated" => $this->getAttribute(                // line 244
$context["item"], "field_is_not_generated", array()), "field_recommendations" => $this->getAttribute(                // line 245
$context["item"], "field_recommendations", array()), "field_cities_ids" => $this->getAttribute(                // line 246
$context["item"], "field_cities_ids", array()), "field_is_payment_required" => $this->getAttribute(                // line 247
$context["item"], "field_is_payment_required", array()), "field_price" => $this->getAttribute(                // line 248
$context["item"], "field_price", array()), "parent_page_id" => $this->getAttribute(                // line 249
$context["item"], "parent_page_id", array()));
                // line 251
                echo "
\t\t";
                // line 252
                $context["itemWithCity"] = array("item_data" => (isset($context["itemData"]) ? $context["itemData"] : null), "item_city" => (isset($context["itemCity"]) ? $context["itemCity"] : null));
                // line 253
                echo "\t\t";
                $context["itemsWithCities"] = twig_array_merge((isset($context["itemsWithCities"]) ? $context["itemsWithCities"] : null), array(0 => (isset($context["itemWithCity"]) ? $context["itemWithCity"] : null)));
                // line 254
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 255
            echo "
\t";
            // line 256
            $context["items"] = (isset($context["itemsWithCities"]) ? $context["itemsWithCities"] : null);
            // line 257
            echo "
\t";
            // line 258
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["items"]) ? $context["items"] : null)), "html", null, true));
            echo "
\t
";
        }
    }

    public function getTemplateName()
    {
        return "layouts.ajax";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  775 => 258,  772 => 257,  770 => 256,  767 => 255,  761 => 254,  758 => 253,  756 => 252,  753 => 251,  751 => 249,  750 => 248,  749 => 247,  748 => 246,  747 => 245,  746 => 244,  745 => 243,  744 => 242,  743 => 241,  742 => 240,  741 => 239,  740 => 238,  739 => 237,  738 => 236,  737 => 235,  736 => 234,  735 => 233,  734 => 232,  733 => 231,  730 => 230,  727 => 229,  721 => 228,  718 => 227,  715 => 226,  712 => 225,  707 => 224,  701 => 223,  698 => 222,  695 => 221,  692 => 220,  687 => 219,  684 => 218,  681 => 217,  678 => 216,  674 => 215,  671 => 214,  669 => 213,  666 => 212,  664 => 211,  661 => 210,  658 => 209,  656 => 208,  653 => 207,  650 => 206,  647 => 205,  644 => 204,  642 => 203,  637 => 200,  627 => 199,  625 => 198,  622 => 197,  620 => 196,  617 => 195,  610 => 193,  607 => 192,  604 => 191,  601 => 190,  598 => 189,  593 => 188,  591 => 187,  588 => 186,  586 => 185,  584 => 184,  581 => 183,  575 => 180,  572 => 179,  566 => 178,  563 => 177,  557 => 176,  554 => 175,  551 => 174,  548 => 173,  543 => 172,  540 => 171,  536 => 170,  533 => 169,  530 => 168,  527 => 167,  525 => 166,  522 => 165,  519 => 163,  515 => 161,  512 => 160,  506 => 154,  499 => 152,  496 => 144,  486 => 142,  483 => 141,  480 => 140,  478 => 139,  475 => 138,  472 => 137,  466 => 136,  456 => 134,  453 => 133,  450 => 132,  447 => 131,  442 => 130,  439 => 129,  437 => 128,  434 => 127,  431 => 126,  428 => 125,  426 => 124,  423 => 123,  418 => 122,  414 => 121,  411 => 120,  408 => 119,  405 => 118,  403 => 117,  400 => 116,  397 => 114,  394 => 112,  388 => 109,  385 => 108,  379 => 107,  376 => 106,  373 => 105,  370 => 104,  367 => 103,  364 => 102,  360 => 101,  357 => 100,  354 => 99,  351 => 98,  349 => 97,  346 => 96,  343 => 94,  340 => 92,  334 => 89,  331 => 88,  325 => 87,  322 => 86,  319 => 85,  316 => 84,  313 => 83,  310 => 82,  306 => 81,  303 => 80,  300 => 79,  297 => 78,  295 => 77,  292 => 76,  289 => 74,  285 => 72,  283 => 71,  280 => 70,  274 => 69,  268 => 68,  265 => 67,  262 => 66,  259 => 65,  254 => 64,  250 => 63,  247 => 62,  244 => 61,  241 => 60,  239 => 59,  236 => 58,  234 => 57,  231 => 56,  224 => 54,  221 => 53,  218 => 52,  214 => 51,  211 => 50,  209 => 49,  207 => 48,  203 => 46,  201 => 45,  198 => 44,  191 => 42,  185 => 41,  182 => 40,  176 => 39,  173 => 38,  167 => 37,  164 => 36,  158 => 35,  155 => 34,  149 => 33,  146 => 32,  141 => 31,  138 => 30,  135 => 29,  130 => 28,  127 => 27,  124 => 26,  119 => 25,  116 => 24,  113 => 23,  108 => 22,  105 => 21,  102 => 20,  97 => 19,  94 => 18,  91 => 17,  87 => 16,  83 => 14,  81 => 13,  77 => 11,  69 => 10,  66 => 9,  63 => 8,  60 => 7,  57 => 6,  54 => 5,  49 => 4,  47 => 3,  45 => 2,  43 => 1,);
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
/* {% endfor %}	*/
/* */
/* {% set items = [] %}*/
/* */
/* */
/* {% for subpage1 in homepage.active_sub_pages %}*/
/* 		{% set items = items|merge([subpage1]) %}*/
/* 	{% if subpage1.active_sub_pages|length > 0 %}*/
/* 		{% for subpage2 in subpage1.active_sub_pages %}*/
/* 				{% set items = items|merge([subpage2]) %}*/
/* 			{% if subpage2.active_sub_pages|length > 0 %}*/
/* 				{% for subpage3 in subpage2.active_sub_pages %}*/
/* 						{% set items = items|merge([subpage3]) %}*/
/* 					{% if subpage3.active_sub_pages|length > 0 %}*/
/* 						{% for subpage4 in subpage3.active_sub_pages %}*/
/* 								{% set items = items|merge([subpage4]) %}*/
/* 							{% if subpage4.active_sub_pages|length > 0 %}*/
/* 								{% for subpage5 in subpage4.active_sub_pages %}*/
/* 										{% set items = items|merge([subpage5]) %}*/
/* 									{% if subpage5.active_sub_pages|length > 0 %}*/
/* 										{% for subpage6 in subpage5.active_sub_pages %}*/
/* 												{% set items = items|merge([subpage6]) %}*/
/* 										{% endfor %}*/
/* 									{% endif %}*/
/* 								{% endfor %}*/
/* 							{% endif %}*/
/* 						{% endfor %}*/
/* 					{% endif %}*/
/* 				{% endfor %}*/
/* 			{% endif %}*/
/* 		{% endfor %}*/
/* 	{% endif %}*/
/* {% endfor %}*/
/* */
/* {% set allItems = items %}*/
/* */
/* */
/* {% set curItems = [] %}*/
/* {% set curLayouts = [53, 51, 22, 17, 24, 49, 50, 52] %}*/
/* */
/* {% for item in items %}*/
/* 	{% if item.layout_id in curLayouts %}*/
/* 		{% set curItems = curItems|merge([item]) %}*/
/* 	{% endif %}*/
/* {% endfor %}*/
/* */
/* {% set items = curItems %}*/
/* */
/* {% if request.input.ids %}*/
/* 	{% set ids = request.input.ids|split(',') %}*/
/* 	{% set itemsByIDs = [] %}*/
/* */
/* 	{% for id in ids %}*/
/* 		{% for item in items %}*/
/* 			{% if item.id == id %}*/
/* 				{% set itemsByIDs = itemsByIDs|merge([item]) %}*/
/* 			{% endif %}*/
/* 		{% endfor %}*/
/* 	{% endfor %}*/
/* */
/* 	{% set items = itemsByIDs %}*/
/* 		*/
/* {% endif %}*/
/* */
/* {# --------------------- cat filter -------------------------------- #}*/
/* */
/* {% if request.input.cat %}*/
/* 	{% set cat = request.input.cat %}*/
/* 	{% set catFiltered = [] %}*/
/* */
/* 	{% for item in curItems %}*/
/* 		{% if cat|length > 0 %}*/
/* 			{% if item.layout_id == cat %}*/
/* 				{% set catFiltered = catFiltered|merge([item]) %}*/
/* 			{% endif %}*/
/* 		{% endif %}*/
/* 	{% endfor %}*/
/* */
/* 	{% set items = catFiltered %}		*/
/* */
/* {% endif %}*/
/* */
/* {# ------------------------- cat filter end --------------------------- #}*/
/* */
/* {# --------------------- city filter -------------------------------- #}*/
/* */
/* {% if request.input.city %}*/
/* 	{% set city = request.input.city %}*/
/* 	{% set cityFiltered = [] %}*/
/* */
/* 	{% for item in items %}*/
/* 		{% if city|length > 0 %}*/
/* 			{% if item.parent_page.parent_page.id == city %}*/
/* 				{% set cityFiltered = cityFiltered|merge([item]) %}*/
/* 			{% endif %}*/
/* 		{% endif %}*/
/* 	{% endfor %}*/
/* */
/* 	{% set items = cityFiltered %}		*/
/* */
/* {% endif %}*/
/* */
/* {# ------------------------- city filter end --------------------------- #}*/
/* */
/* {# ------------------------- tags filter --------------------------- #}*/
/* */
/* {% if request.input.tags %}*/
/* 	{% set reqTags = request.input.tags|split(',') %}*/
/* 	{% set tagItems = [] %}*/
/* 	*/
/* 	{% for item in items %}*/
/* 		{% for reqTag in reqTags %}*/
/* 			*/
/* 			{% set tagFinded = false %}*/
/* 			{% set tagInHeader = false %}*/
/* 			{% set tagInFilters = false %}*/
/* */
/* 			{% if item.field_tags and not tagFinded %}*/
/* 				{% set itemTags = item.field_tags|split(',') %}*/
/* 				{% for t in itemTags %}*/
/* 					{% if t|lower|trim == reqTag|lower|trim %}*/
/* 						{% set tagItems = tagItems|merge([item]) %}*/
/* 						{% set tagFinded = true %}*/
/* 						Header: {$ item.field_header $}<br>Tags: {$ item.field_tags $}<br>Filters: {$ item.field_filters $}<br>Finded by: tags<hr>*/
/* 					{% endif %}*/
/* 				{% endfor %}*/
/* 			{% endif %}*/
/* */
/* 			{% if (reqTag|lower|trim in item.field_header|lower) and not tagFinded %}*/
/* 				{% set tagItems = tagItems|merge([item]) %}*/
/* 				{% set tagFinded = true %}*/
/* 				Header: {$ item.field_header $}<br>Tags: {$ item.field_tags $}<br>Filters: {$ item.field_filters $}<br>Finded by: header<hr>*/
/* 			{% endif %}*/
/* 			*/
/* 			{# ------------------*/
/* 			{% if (reqTag|lower|trim in item.field_filters|lower) and not tagFinded %}*/
/* 				{% set tagItems = tagItems|merge([item]) %}*/
/* 				{% set tagFinded = true %}*/
/* 				Header: {$ item.field_header $}<br>Tags: {$ item.field_tags $}<br>Filters: {$ item.field_filters $}<br>Finded by: filters<hr>*/
/* 			{% endif %}*/
/* 			---------------------- #}*/
/* 			*/
/* 		{% endfor %}*/
/* 	{% endfor %}*/
/* {#*/
/* 	{% for ti in tagItems %}*/
/* 		{$ ti.field_header $}<br>*/
/* 	{% endfor %}*/
/* #}*/
/* 	{% set items = tagItems %}*/
/* */
/* {% endif %}*/
/* */
/* {# ------------------------- tags filter end --------------------------- #}*/
/* */
/* {% if request.input.query %}*/
/* 	{% set query = request.input.query|split(' ') %}*/
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
/* 	{% set items = results %}		*/
/* */
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
/* 	*/
/* {% if request.input.json %}*/
/* 	<div id="ajax-answer" data-answer="{$ items|json_encode() $}" {% if results|length == 0 and query[0] != '' %}data-empty="1"{% endif %}></div>*/
/* {% else %}		*/
/* 	*/
/* */
/* 	{% set perPage = 300 %}*/
/* 	{% if request.input.pp %}*/
/* 		{% set perPage = request.input.pp %}*/
/* 	{% endif %}*/
/* 	*/
/* 	{% set pageCurrent = request.input.p|default(1) %}*/
/* 	{% set pageCount = (items|length / perPage)|round(0, 'ceil') %}*/
/* 	*/
/* 	{% set items = items|slice(perPage * (pageCurrent - 1), perPage) %}*/
/* 	*/
/* 	{% set itemsWithCities = [] %}*/
/* */
/* 	{% for item in items %}*/
/* 		{% set itemCity = 0 %}*/
/* 		{% set parentPage = {} %}*/
/* 		{% set parentPageParent = {} %}*/
/* 		{% for pp in allItems %}*/
/* 			{% if pp.id == item.parent_page_id %}*/
/* 				{% set parentPage = pp %}*/
/* 			{% endif %}*/
/* 		{% endfor %}*/
/* 		{% for ppp in allItems %}*/
/* 			{% if ppp.id == parentPage.parent_page_id %}*/
/* 				{% set parentPageParent = ppp %}*/
/* 			{% endif %}*/
/* 		{% endfor %}*/
/* 		{% set itemCity = parentPageParent.id %}*/
/* */
/* 		{% set itemData = {*/
/* 			id: item.id,*/
/* 			alias: item.alias,*/
/* 			field_header: item.field_header,*/
/* 			layout_id: item.layout_id,*/
/* 			path: item.path,*/
/* 			field_image: item.field_image,*/
/* 			field_gallery: item.field_gallery,*/
/* 			field_coords: item.field_coords,*/
/* 			field_address: item.field_address,*/
/* 			field_tags: item.field_tags,*/
/* 			field_prices: item.field_prices,*/
/* 			field_filters: item.field_filters,*/
/* 			field_is_not_generated: item.field_is_not_generated,*/
/* 			field_recommendations: item.field_recommendations,*/
/* 			field_cities_ids: item.field_cities_ids,*/
/* 			field_is_payment_required: item.field_is_payment_required,*/
/* 			field_price: item.field_price,*/
/* 			parent_page_id: item.parent_page_id*/
/* 		} %}*/
/* */
/* 		{% set itemWithCity = {item_data: itemData, item_city: itemCity} %}*/
/* 		{% set itemsWithCities = itemsWithCities|merge([itemWithCity]) %}*/
/* 	{% endfor %}*/
/* */
/* 	{% set items = itemsWithCities %}*/
/* */
/* 	{$ items|json_encode() $}*/
/* 	*/
/* {% endif %}*/
