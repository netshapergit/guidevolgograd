<?php

/* _.admin.adminV2.header */
class __TwigTemplate_7e23b8f5782cdef15f939d7991f9142d5d7b663da607049347b769f34e2e0a9d extends TwigBridge\Twig\Template
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
        $tags = array("for" => 11, "if" => 13);
        $filters = array("escape" => 5, "default" => 18);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('for', 'if'),
                array('escape', 'default'),
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
        echo "<header>
    <nav class=\"navbar navbar-default navbar-static-top\">
        <div class=\"container-fluid\">
            <div class=\"navbar-header\">
                <a class=\"navbar-brand\" href=\"";
        // line 5
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["url"]) ? $context["url"] : null), "admin", array()), "html", null, true));
        echo "\">
                    <img alt=\"NetShaper\" src=\"/packages/netshaper/admin/images/logo.png\" title=\"NetShaper\">
                </a>
            </div>
            <ul class=\"nav navbar-nav\">

                ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["menu"]) ? $context["menu"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["partition"]) {
            // line 12
            echo "
                    ";
            // line 13
            if ($this->getAttribute($context["partition"], "items", array(), "any", true, true)) {
                // line 14
                echo "
                        <li
                            class=\"
                                dropdown
                                ";
                // line 18
                if ((($this->getAttribute($context["partition"], "active", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["partition"], "active", array()), false)) : (false))) {
                    // line 19
                    echo "                                    active
                                ";
                }
                // line 21
                echo "                            \"
                        >
                            <a href=\"#\" class=\"dropdown-toggle\">
                                ";
                // line 24
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["partition"], "label", array()), "html", null, true));
                echo "
                                <b class=\"caret\"></b>
                            </a>
                            <ul class=\"dropdown-menu\">
                                ";
                // line 28
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["partition"], "items", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 29
                    echo "                                    <li
                                        ";
                    // line 30
                    if (($this->getAttribute($context["item"], "alias", array()) == (($this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "segments", array(), "any", false, true), 1, array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "segments", array(), "any", false, true), 1, array(), "array"), "")) : ("")))) {
                        // line 31
                        echo "                                            class=\"active\"
                                        ";
                    }
                    // line 33
                    echo "                                    >
                                        <a href=\"";
                    // line 34
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["url"]) ? $context["url"] : null), "admin", array()), "html", null, true));
                    echo "/";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["item"], "alias", array()), "html", null, true));
                    echo "\">
                                            ";
                    // line 35
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["item"], "label", array()), "html", null, true));
                    echo "
                                        </a>
                                    </li>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 39
                echo "                            </ul>
                        </li>

                    ";
            } else {
                // line 43
                echo "
                        <li
                            ";
                // line 45
                if (($this->getAttribute($context["partition"], "alias", array()) == (($this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "segments", array(), "any", false, true), 1, array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "segments", array(), "any", false, true), 1, array(), "array"), "")) : ("")))) {
                    // line 46
                    echo "                                class=\"active\"
                            ";
                }
                // line 48
                echo "                        >
                            <a href=\"";
                // line 49
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["url"]) ? $context["url"] : null), "admin", array()), "html", null, true));
                echo "/";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["partition"], "alias", array()), "html", null, true));
                echo "\">
                                ";
                // line 50
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute($context["partition"], "label", array()), "html", null, true));
                echo "
                            </a>
                        </li>

                    ";
            }
            // line 55
            echo "
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['partition'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "
            </ul>
            <ul class=\"nav navbar-nav pull-right\">
                <li>
                    <a href=\"";
        // line 61
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["url"]) ? $context["url"] : null), "root", array()), "html", null, true));
        echo "\" target=\"_blank\">
                        <span class=\"fa fa-globe\"></span>
                        Сайт
                    </a>
                </li>
                <li>
                    <a href=\"/auth/logout/admin\">
                        <span class=\"fa fa-sign-out\"></span>
                        Выход
                    </a>
                </li>
            </ul>
            <p class=\"navbar-text pull-right\">
                <span class=\"text-info\">
                    <span class=\"fa fa-user\"></span>
                    ";
        // line 76
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "login", array()), "html", null, true));
        echo "
                </span>
            </p>
        </div>
    </nav>
</header>";
    }

    public function getTemplateName()
    {
        return "_.admin.adminV2.header";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 76,  169 => 61,  163 => 57,  156 => 55,  148 => 50,  142 => 49,  139 => 48,  135 => 46,  133 => 45,  129 => 43,  123 => 39,  113 => 35,  107 => 34,  104 => 33,  100 => 31,  98 => 30,  95 => 29,  91 => 28,  84 => 24,  79 => 21,  75 => 19,  73 => 18,  67 => 14,  65 => 13,  62 => 12,  58 => 11,  49 => 5,  43 => 1,);
    }
}
/* <header>*/
/*     <nav class="navbar navbar-default navbar-static-top">*/
/*         <div class="container-fluid">*/
/*             <div class="navbar-header">*/
/*                 <a class="navbar-brand" href="{$ url.admin $}">*/
/*                     <img alt="NetShaper" src="/packages/netshaper/admin/images/logo.png" title="NetShaper">*/
/*                 </a>*/
/*             </div>*/
/*             <ul class="nav navbar-nav">*/
/* */
/*                 {% for partition in menu %}*/
/* */
/*                     {% if partition.items is defined %}*/
/* */
/*                         <li*/
/*                             class="*/
/*                                 dropdown*/
/*                                 {% if partition.active|default(false) %}*/
/*                                     active*/
/*                                 {% endif %}*/
/*                             "*/
/*                         >*/
/*                             <a href="#" class="dropdown-toggle">*/
/*                                 {$ partition.label $}*/
/*                                 <b class="caret"></b>*/
/*                             </a>*/
/*                             <ul class="dropdown-menu">*/
/*                                 {% for item in partition.items %}*/
/*                                     <li*/
/*                                         {% if item.alias == request.segments[1]|default('') %}*/
/*                                             class="active"*/
/*                                         {% endif %}*/
/*                                     >*/
/*                                         <a href="{$ url.admin $}/{$ item.alias $}">*/
/*                                             {$ item.label $}*/
/*                                         </a>*/
/*                                     </li>*/
/*                                 {% endfor %}*/
/*                             </ul>*/
/*                         </li>*/
/* */
/*                     {% else %}*/
/* */
/*                         <li*/
/*                             {% if partition.alias == request.segments[1]|default('') %}*/
/*                                 class="active"*/
/*                             {% endif %}*/
/*                         >*/
/*                             <a href="{$ url.admin $}/{$ partition.alias $}">*/
/*                                 {$ partition.label $}*/
/*                             </a>*/
/*                         </li>*/
/* */
/*                     {% endif %}*/
/* */
/*                 {% endfor %}*/
/* */
/*             </ul>*/
/*             <ul class="nav navbar-nav pull-right">*/
/*                 <li>*/
/*                     <a href="{$ url.root $}" target="_blank">*/
/*                         <span class="fa fa-globe"></span>*/
/*                         Сайт*/
/*                     </a>*/
/*                 </li>*/
/*                 <li>*/
/*                     <a href="/auth/logout/admin">*/
/*                         <span class="fa fa-sign-out"></span>*/
/*                         Выход*/
/*                     </a>*/
/*                 </li>*/
/*             </ul>*/
/*             <p class="navbar-text pull-right">*/
/*                 <span class="text-info">*/
/*                     <span class="fa fa-user"></span>*/
/*                     {$ user.login $}*/
/*                 </span>*/
/*             </p>*/
/*         </div>*/
/*     </nav>*/
/* </header>*/
