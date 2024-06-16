<?php

/* _.admin.adminV2.page_new */
class __TwigTemplate_a7a961534ed67d791b60fb4b54de0f380a70660eb85bfcbbd1ae58731c69ff66 extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("_.root", "_.admin.adminV2.page_new", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_.root";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 4, "include" => 26);
        $filters = array("escape" => 7);
        $functions = array("constant" => 4);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'include'),
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

        // line 4
        $context["V"] = twig_constant("V");
        // line 2
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        // line 7
        echo "\tAdmin | ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "domain", array()), "html", null, true));
        echo " | NetShaper
";
    }

    // line 17
    public function block_head($context, array $blocks = array())
    {
        // line 18
        echo "    <link rel=\"stylesheet\" href=\"/packages/bootstrap-themes/yeti/bootstrap.min.css\">
\t<link rel=\"stylesheet\" href=\"/packages/font-awesome/4.1.0/css/font-awesome.min.css\">
\t<link rel=\"stylesheet\" href=\"/packages/netshaper/admin/css/base.css?v=";
        // line 20
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (isset($context["V"]) ? $context["V"] : null), "html", null, true));
        echo "\">
    <link rel=\"stylesheet\" href=\"/packages/netshaper/admin/v2/css/style.css?v=";
        // line 21
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, (isset($context["V"]) ? $context["V"] : null), "html", null, true));
        echo "\">
";
    }

    // line 24
    public function block_body($context, array $blocks = array())
    {
        // line 25
        echo "
    ";
        // line 26
        $this->loadTemplate("_.admin.adminV2.header", "_.admin.adminV2.page_new", 26)->display($context);
        // line 27
        echo "
    <div id=\"app\" style=\"padding-top: 70px;\">
        <div class=\"container-fluid\">
            <div class=\"egood-header\">
                <div class=\"egood-tabs-triggers\">
                ";
        // line 43
        echo "                </div>
                <div class=\"egood-header__actions\">
                    <a href=\"./\" type=\"button\" class=\"mbtn btn btn-sm btn-warning\">К списку</a>
                    <button type=\"button\" class=\"mbtn btn btn-sm btn-success\" @click.stop=\"savePage\">Создать</button>
                </div>
            </div>
            <div class=\"av2-page-blocks\">
                <div class=\"av2-page-block\">
                    <div class=\"av2-edit-input\" :key=\"item.alias\" v-for=\"item in commonFields\">
                        <label>{{item.name}}</label>
                        <Component 
                            :is=\"'input-' + item.type\" 
                            :item=\"item\"
                            @input=\"updateField\"
                            />
                    </div>
                </div>
                <div class=\"av2-page-block\">
                    <template v-if=\"selectedLayout\">
                        <div class=\"av2-edit-input\" :key=\"item.alias\" v-for=\"item in additionalFields\">
                            <label>{{item.name}}</label>
                            <Component 
                                :is=\"'input-' + item.type\" 
                                :item=\"item\"
                                @input=\"updateField\"
                            />
                        </div>
                    </template>
                </div>
            </div>
        </div>
    </div>

    ";
        // line 76
        $this->loadTemplate("_.admin.adminV2.scripts", "_.admin.adminV2.page_new", 76)->display($context);
        // line 77
        echo "
    <script src=\"https://cdn.jsdelivr.net/npm/vue2-dropzone@3.6.0/dist/vue2Dropzone.min.js\"></script>
    <link href=\"https://cdn.jsdelivr.net/npm/vue2-dropzone@3.6.0/dist/vue2Dropzone.min.css\" rel=\"stylesheet\">
    ";
        // line 87
        echo "    <script src=\"/packages/netshaper/admin/v2/js/page_new.js\" type=\"module\"></script>

";
    }

    public function getTemplateName()
    {
        return "_.admin.adminV2.page_new";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 87,  136 => 77,  134 => 76,  99 => 43,  92 => 27,  90 => 26,  87 => 25,  84 => 24,  78 => 21,  74 => 20,  70 => 18,  67 => 17,  60 => 7,  57 => 6,  53 => 2,  51 => 4,  11 => 2,);
    }
}
/* {#% extends '_.admin.base' %#}*/
/* {% extends '_.root' %}*/
/* */
/* {% set V = constant('V') %}*/
/* */
/* {% block title %}*/
/* 	Admin | {$ request.domain $} | NetShaper*/
/* {% endblock %}*/
/* */
/* */
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
/* {% block body %}*/
/* */
/*     {% include '_.admin.adminV2.header' %}*/
/* */
/*     <div id="app" style="padding-top: 70px;">*/
/*         <div class="container-fluid">*/
/*             <div class="egood-header">*/
/*                 <div class="egood-tabs-triggers">*/
/*                 {#*/
/*                     <div */
/*                         class="egood-tab-trigger" */
/*                         :class="{'egood-tab-trigger--active': currentTab == tabIndex}"*/
/*                         @click.stop="setTab(tabIndex)"*/
/*                         v-for="(tab, tabIndex) in tabs"*/
/*                         :key="tabIndex"*/
/*                         >*/
/*                         {{ tab.title }}*/
/*                     </div>*/
/*                 #}*/
/*                 </div>*/
/*                 <div class="egood-header__actions">*/
/*                     <a href="./" type="button" class="mbtn btn btn-sm btn-warning">К списку</a>*/
/*                     <button type="button" class="mbtn btn btn-sm btn-success" @click.stop="savePage">Создать</button>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="av2-page-blocks">*/
/*                 <div class="av2-page-block">*/
/*                     <div class="av2-edit-input" :key="item.alias" v-for="item in commonFields">*/
/*                         <label>{{item.name}}</label>*/
/*                         <Component */
/*                             :is="'input-' + item.type" */
/*                             :item="item"*/
/*                             @input="updateField"*/
/*                             />*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="av2-page-block">*/
/*                     <template v-if="selectedLayout">*/
/*                         <div class="av2-edit-input" :key="item.alias" v-for="item in additionalFields">*/
/*                             <label>{{item.name}}</label>*/
/*                             <Component */
/*                                 :is="'input-' + item.type" */
/*                                 :item="item"*/
/*                                 @input="updateField"*/
/*                             />*/
/*                         </div>*/
/*                     </template>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     {% include '_.admin.adminV2.scripts' %}*/
/* */
/*     <script src="https://cdn.jsdelivr.net/npm/vue2-dropzone@3.6.0/dist/vue2Dropzone.min.js"></script>*/
/*     <link href="https://cdn.jsdelivr.net/npm/vue2-dropzone@3.6.0/dist/vue2Dropzone.min.css" rel="stylesheet">*/
/*     {#*/
/*     <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>*/
/*     <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">*/
/*     <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>*/
/* */
/*     <script src="https://cdn.jsdelivr.net/npm/vue2-editor@2.3.34/dist/vue2-editor.js" type="module"></script>*/
/*     #}*/
/*     <script src="/packages/netshaper/admin/v2/js/page_new.js" type="module"></script>*/
/* */
/* {% endblock %}*/
/* */
