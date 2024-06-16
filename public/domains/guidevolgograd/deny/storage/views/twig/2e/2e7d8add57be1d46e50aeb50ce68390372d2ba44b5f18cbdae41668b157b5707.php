<?php

/* _.admin.adminV2.pages */
class __TwigTemplate_3d71aeff8fa872cb096d25a45f6d2a53dc9a0502a5672d1ac484869843fa0701 extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 6, "block" => 13, "include" => 22);
        $filters = array("escape" => 16);
        $functions = array("constant" => 6);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'block', 'include'),
                array('escape'),
                array('constant')
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

        // line 3
        echo "


";
        // line 6
        $context["V"] = twig_constant("V");
        // line 12
        echo "
";
        // line 13
        $this->displayBlock('head', $context, $blocks);
        // line 19
        echo "
";
        // line 20
        $this->displayBlock('content', $context, $blocks);
    }

    // line 13
    public function block_head($context, array $blocks = array())
    {
        // line 14
        echo "    <link rel=\"stylesheet\" href=\"/packages/bootstrap-themes/yeti/bootstrap.min.css\">
\t<link rel=\"stylesheet\" href=\"/packages/font-awesome/4.1.0/css/font-awesome.min.css\">
\t<link rel=\"stylesheet\" href=\"/packages/netshaper/admin/css/base.css?v=";
        // line 16
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (isset($context["V"]) ? $context["V"] : null), "html", null, true));
        echo "\">
    <link rel=\"stylesheet\" href=\"/packages/netshaper/admin/v2/css/style.css?v=";
        // line 17
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (isset($context["V"]) ? $context["V"] : null), "html", null, true));
        echo "\">
";
    }

    // line 20
    public function block_content($context, array $blocks = array())
    {
        // line 21
        echo "
    ";
        // line 22
        $this->loadTemplate("_.admin.adminV2.header", "_.admin.adminV2.pages", 22)->display($context);
        // line 23
        echo "
    <div id=\"app\" style=\"padding-top: 70px;\">
        <div class=\"container\">
            <div class=\"av2-pages-search\">
                <input type=\"text\" class=\"form-control\" @input=\"onSearchInputChange\" placeholder=\"Поиск по названию, id, alias\">
                <select class=\"form-control\" v-model=\"queryParams.layout\">
                    <option value=\"\">Все</option>
                    <option 
                        v-for=\"layout in sortedLayouts\"
                        :key=\"layout.id\"
                        :value=\"layout.id\"
                    >{{ layout.name }}</option>
                </select>
                <a href=\"/admin/pages-list/new\" class=\"btn btn-success\">Создать</a>
            </div>
            
            <div class=\"av2-pages-list\">
                <pages-tree
                    v-for=\"item in pages\"
                    :key=\"item.id\"
                    :item=\"item\"
                    @remove-page=\"deletePage\"
                ></pages-tree>
                <button class=\"btn btn-xs btn-primary btn-block\" v-if=\"this.pagination && this.pagination.current_page < this.pagination.last_page\" @click.stop=\"fetchPages\">Загрузить еще</button>
            </div>
        </div>
    </div>

    ";
        // line 51
        $this->loadTemplate("_.admin.adminV2.scripts", "_.admin.adminV2.pages", 51)->display($context);
        // line 52
        echo "    <script src=\"/packages/netshaper/admin/v2/js/pages.js\" type=\"module\"></script>

";
    }

    public function getTemplateName()
    {
        return "_.admin.adminV2.pages";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 52,  119 => 51,  89 => 23,  87 => 22,  84 => 21,  81 => 20,  75 => 17,  71 => 16,  67 => 14,  64 => 13,  60 => 20,  57 => 19,  55 => 13,  52 => 12,  50 => 6,  45 => 3,);
    }
}
/* {#% extends '_.admin.base' %#}*/
/* {#% extends '_.root' %#}*/
/* */
/* */
/* */
/* {% set V = constant('V') %}*/
/* {#*/
/* {% block title %}*/
/* 	Admin | {$ request.domain $} | NetShaper*/
/* {% endblock %}*/
/* #}*/
/* */
/* {% block head %}*/
/*     <link rel="stylesheet" href="/packages/bootstrap-themes/yeti/bootstrap.min.css">*/
/* 	<link rel="stylesheet" href="/packages/font-awesome/4.1.0/css/font-awesome.min.css">*/
/* 	<link rel="stylesheet" href="/packages/netshaper/admin/css/base.css?v={$ V $}">*/
/*     <link rel="stylesheet" href="/packages/netshaper/admin/v2/css/style.css?v={$ V $}">*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/* */
/*     {% include '_.admin.adminV2.header' %}*/
/* */
/*     <div id="app" style="padding-top: 70px;">*/
/*         <div class="container">*/
/*             <div class="av2-pages-search">*/
/*                 <input type="text" class="form-control" @input="onSearchInputChange" placeholder="Поиск по названию, id, alias">*/
/*                 <select class="form-control" v-model="queryParams.layout">*/
/*                     <option value="">Все</option>*/
/*                     <option */
/*                         v-for="layout in sortedLayouts"*/
/*                         :key="layout.id"*/
/*                         :value="layout.id"*/
/*                     >{{ layout.name }}</option>*/
/*                 </select>*/
/*                 <a href="/admin/pages-list/new" class="btn btn-success">Создать</a>*/
/*             </div>*/
/*             */
/*             <div class="av2-pages-list">*/
/*                 <pages-tree*/
/*                     v-for="item in pages"*/
/*                     :key="item.id"*/
/*                     :item="item"*/
/*                     @remove-page="deletePage"*/
/*                 ></pages-tree>*/
/*                 <button class="btn btn-xs btn-primary btn-block" v-if="this.pagination && this.pagination.current_page < this.pagination.last_page" @click.stop="fetchPages">Загрузить еще</button>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     {% include '_.admin.adminV2.scripts' %}*/
/*     <script src="/packages/netshaper/admin/v2/js/pages.js" type="module"></script>*/
/* */
/* {% endblock %}*/
