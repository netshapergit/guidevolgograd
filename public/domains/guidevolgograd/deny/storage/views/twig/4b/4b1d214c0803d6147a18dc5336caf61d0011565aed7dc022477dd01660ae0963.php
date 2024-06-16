<?php

/* base */
class __TwigTemplate_b050237116dc38540655332edcb0fb2129298714dfc3ceb5e708452b0adc92fe extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("_.new", "base", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_.new";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 4, "include" => 5);
        $filters = array("escape" => 9);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'include'),
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

        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "\t";
        if (($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "path", array()) == "/")) {
            // line 5
            echo "\t\t";
            $this->loadTemplate("domain_msgs", "base", 5)->display(array_merge($context, array("field" => "title")));
            // line 6
            echo "\t";
        } else {
            // line 7
            echo "\t \t";
            $this->displayParentBlock("title", $context, $blocks);
            echo " 🚕
\t\t";
            // line 8
            if ($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "field_name", array())) {
                // line 9
                echo "\t\t\t| ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "field_name", array()), "html", null, true));
                echo "
\t\t";
            }
            // line 11
            echo "\t";
        }
    }

    // line 14
    public function block_head($context, array $blocks = array())
    {
        // line 15
        echo "\t";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
\t<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
\t<link href=\"https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;700&display=swap\" rel=\"stylesheet\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css\"/>
\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css\" />

\t<link rel=\"manifest\" href=\"/manifest.json\">
\t<meta name=\"mobile-web-app-capable\" content=\"yes\">
\t<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
\t<meta name=\"application-name\" content=\"RussPass4u\">
\t<meta name=\"apple-mobile-web-app-title\" content=\"RussPass4u\">
\t<meta name=\"theme-color\" content=\"#f91942\">
\t<meta name=\"msapplication-navbutton-color\" content=\"#f91942\">
\t<meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black-translucent\">
\t<meta name=\"msapplication-starturl\" content=\"/\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
\t
\t<link rel=\"icon\" sizes=\"512x512\" href=\"/site/theme/images/russpass_logo.png\">
\t<link rel=\"apple-touch-icon\" sizes=\"192x192\" href=\"/site/theme/images/russpass_logo.png\">
\t<link rel=\"icon\" href=\"/site/theme/images/russpass_logo_192.png\">
\t<link rel=\"apple-touch-icon\" href=\"/site/theme/images/guideplace_logo_192.png\">


\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css\">
\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/vue-slider-component@3.1.4/theme/default.css\">
\t<link rel=\"stylesheet\" href=\"/site/theme/css/base.css\">
\t
\t<script src=\"/site/theme/js/vue.js\"></script>
\t<script src=\"/site/theme/js/store.js\" type=\"module\"></script>
\t<meta name=\"page_id\" content=\"";
        // line 44
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "id", array()), "html", null, true));
        echo "\">
\t<meta name=\"layout_id\" content=\"";
        // line 45
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "layout_id", array()), "html", null, true));
        echo "\">
<style>
.sbar {
\t\t\tposition: fixed;
\t\t\tleft: 0;
\t\t\ttop: 0;
\t\t\tz-index: 9;
\t\t\tbackground: var(--text);
\t\t\tpadding: 115px 25px 45px;
\t\t\theight: 100vh;
\t\t\tmin-width: 85px;
\t\t\ttransition: .3s;
\t\t}
\t\t
\t\t.sbar.hovered {
\t\t\twidth: unset;
\t\t}
\t\t
\t\t.sbar-menu__list {
\t\t\tlist-style: none;
\t\t\tpadding: 0;
\t\t\tmargin: 0;
\t\t\ttext-align: center;
\t\t}
\t\t
\t\t.sbar-menu__item:not(:last-child) {
\t\t\tmargin-bottom: 20px;
\t\t}
\t\t
\t\t.sbar-menu__link {
\t\t\tdisplay: flex;
\t\t\talign-items: center;
\t\t\tcolor: #fff;
\t\t\tfont-size: 12px;
\t\t\tline-height: 14px;
\t\t}
\t
\t.sbar-menu__link svg path {
\t\tfill: rgb(204, 204, 204);
\t}
\t\t
\t\t.sbar-menu__link-icon {
\t\t\tflex: 0 0 35px;
\t\t}
\t\t
\t\t.sbar.hovered .sbar-menu__link-icon {
\t\t\tpadding-right: 10px;
\t\t\tflex: 0 0 45px;
\t\t}
\t\t
\t\t.sbar-menu__link-title {
\t\t\tdisplay: none;
\t\t\tfont-size: 14px;
\t\t}
\t\tli.sbar-menu__item:hover .sbar-menu__link-title {
\t\t\tborder-bottom: 1px dashed #fff;
\t\t\tcolor:#fff;
\t\t}
\t\tli.sbar-menu__item:hover path {fill:#fff; transition: .3s;} 
\t\t
\t\t.sbar.hovered .sbar-menu__link-title {
\t\t\tdisplay: block
\t\t}
\t
\t.sbar-search {
\t\tmargin-bottom: 50px;
\t}
\t
\t.sbar-search__btn {
\t\tdisplay: inline-block;
\t\ttext-align: center;
\t\twidth: 35px;
\t\ttext-align: center;
\t}
\t
\t.sbar-search__btn svg * {
\t\tfill: rgb(204, 204, 204);
\t\ttransition: .3s;
\t}
\t
\t.sbar-search__btn:hover svg * {
\t\tfill: #fff;
\t}
\t\t
</style>
<link id=\"page_favicon\" href=\"/site/theme/images/favicon.ico\" rel=\"icon\" type=\"image/x-icon\">

 <!--script type=\"application/javascript\">
      window.tiledeskSettings= 
      {
          projectid: \"64aec9f6b8d5f000130a9d27\"
      };
      (function(d, s, id) { 
          var w=window; var d=document; var i=function(){i.c(arguments);};
          i.q=[]; i.c=function(args){i.q.push(args);}; w.Tiledesk=i;                    
          var js, fjs=d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js=d.createElement(s); 
          js.id=id; js.async=true; js.src=\"https://widget.tiledesk.com/v6/launch.js\";
          fjs.parentNode.insertBefore(js, fjs);
      }(document,'script','tiledesk-jssdk'));
  </script-->
\t\t
<!--script type=\"text/javascript\">!function(){var t=document.createElement(\"script\");t.type=\"text/javascript\",t.async=!0,t.src='https://vk.com/js/api/openapi.js?169',t.onload=function(){VK.Retargeting.Init(\"VK-RTRG-1816776-uQ7d\"),VK.Retargeting.Hit()},document.head.appendChild(t)}();</script><noscript><img src=\"https://vk.com/rtrg?p=VK-RTRG-1816776-uQ7d\" style=\"position:fixed; left:-999px;\" alt=\"\"/></noscript-->

";
    }

    public function getTemplateName()
    {
        return "base";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 45,  119 => 44,  86 => 15,  83 => 14,  78 => 11,  72 => 9,  70 => 8,  65 => 7,  62 => 6,  59 => 5,  56 => 4,  53 => 3,  11 => 1,);
    }
}
/* {% extends '_.new' %}*/
/* */
/* {% block title %}*/
/* 	{% if request.path == '/' %}*/
/* 		{% include 'domain_msgs' with {field: 'title'} %}*/
/* 	{% else %}*/
/* 	 	{$ parent() $} 🚕*/
/* 		{% if site.field_name %}*/
/* 			| {$ site.field_name $}*/
/* 		{% endif %}*/
/* 	{% endif %}*/
/* {% endblock %}*/
/* */
/* {% block head %}*/
/* 	{$ parent() $}*/
/* 	<link rel="preconnect" href="https://fonts.gstatic.com">*/
/* 	<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;700&display=swap" rel="stylesheet">*/
/* 	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>*/
/* 	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />*/
/* */
/* 	<link rel="manifest" href="/manifest.json">*/
/* 	<meta name="mobile-web-app-capable" content="yes">*/
/* 	<meta name="apple-mobile-web-app-capable" content="yes">*/
/* 	<meta name="application-name" content="RussPass4u">*/
/* 	<meta name="apple-mobile-web-app-title" content="RussPass4u">*/
/* 	<meta name="theme-color" content="#f91942">*/
/* 	<meta name="msapplication-navbutton-color" content="#f91942">*/
/* 	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">*/
/* 	<meta name="msapplication-starturl" content="/">*/
/* 	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">*/
/* 	*/
/* 	<link rel="icon" sizes="512x512" href="/site/theme/images/russpass_logo.png">*/
/* 	<link rel="apple-touch-icon" sizes="192x192" href="/site/theme/images/russpass_logo.png">*/
/* 	<link rel="icon" href="/site/theme/images/russpass_logo_192.png">*/
/* 	<link rel="apple-touch-icon" href="/site/theme/images/guideplace_logo_192.png">*/
/* */
/* */
/* 	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">*/
/* 	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/vue-slider-component@3.1.4/theme/default.css">*/
/* 	<link rel="stylesheet" href="/site/theme/css/base.css">*/
/* 	*/
/* 	<script src="/site/theme/js/vue.js"></script>*/
/* 	<script src="/site/theme/js/store.js" type="module"></script>*/
/* 	<meta name="page_id" content="{$ page.id $}">*/
/* 	<meta name="layout_id" content="{$ page.layout_id $}">*/
/* <style>*/
/* .sbar {*/
/* 			position: fixed;*/
/* 			left: 0;*/
/* 			top: 0;*/
/* 			z-index: 9;*/
/* 			background: var(--text);*/
/* 			padding: 115px 25px 45px;*/
/* 			height: 100vh;*/
/* 			min-width: 85px;*/
/* 			transition: .3s;*/
/* 		}*/
/* 		*/
/* 		.sbar.hovered {*/
/* 			width: unset;*/
/* 		}*/
/* 		*/
/* 		.sbar-menu__list {*/
/* 			list-style: none;*/
/* 			padding: 0;*/
/* 			margin: 0;*/
/* 			text-align: center;*/
/* 		}*/
/* 		*/
/* 		.sbar-menu__item:not(:last-child) {*/
/* 			margin-bottom: 20px;*/
/* 		}*/
/* 		*/
/* 		.sbar-menu__link {*/
/* 			display: flex;*/
/* 			align-items: center;*/
/* 			color: #fff;*/
/* 			font-size: 12px;*/
/* 			line-height: 14px;*/
/* 		}*/
/* 	*/
/* 	.sbar-menu__link svg path {*/
/* 		fill: rgb(204, 204, 204);*/
/* 	}*/
/* 		*/
/* 		.sbar-menu__link-icon {*/
/* 			flex: 0 0 35px;*/
/* 		}*/
/* 		*/
/* 		.sbar.hovered .sbar-menu__link-icon {*/
/* 			padding-right: 10px;*/
/* 			flex: 0 0 45px;*/
/* 		}*/
/* 		*/
/* 		.sbar-menu__link-title {*/
/* 			display: none;*/
/* 			font-size: 14px;*/
/* 		}*/
/* 		li.sbar-menu__item:hover .sbar-menu__link-title {*/
/* 			border-bottom: 1px dashed #fff;*/
/* 			color:#fff;*/
/* 		}*/
/* 		li.sbar-menu__item:hover path {fill:#fff; transition: .3s;} */
/* 		*/
/* 		.sbar.hovered .sbar-menu__link-title {*/
/* 			display: block*/
/* 		}*/
/* 	*/
/* 	.sbar-search {*/
/* 		margin-bottom: 50px;*/
/* 	}*/
/* 	*/
/* 	.sbar-search__btn {*/
/* 		display: inline-block;*/
/* 		text-align: center;*/
/* 		width: 35px;*/
/* 		text-align: center;*/
/* 	}*/
/* 	*/
/* 	.sbar-search__btn svg * {*/
/* 		fill: rgb(204, 204, 204);*/
/* 		transition: .3s;*/
/* 	}*/
/* 	*/
/* 	.sbar-search__btn:hover svg * {*/
/* 		fill: #fff;*/
/* 	}*/
/* 		*/
/* </style>*/
/* <link id="page_favicon" href="/site/theme/images/favicon.ico" rel="icon" type="image/x-icon">*/
/* */
/*  <!--script type="application/javascript">*/
/*       window.tiledeskSettings= */
/*       {*/
/*           projectid: "64aec9f6b8d5f000130a9d27"*/
/*       };*/
/*       (function(d, s, id) { */
/*           var w=window; var d=document; var i=function(){i.c(arguments);};*/
/*           i.q=[]; i.c=function(args){i.q.push(args);}; w.Tiledesk=i;                    */
/*           var js, fjs=d.getElementsByTagName(s)[0];*/
/*           if (d.getElementById(id)) return;*/
/*           js=d.createElement(s); */
/*           js.id=id; js.async=true; js.src="https://widget.tiledesk.com/v6/launch.js";*/
/*           fjs.parentNode.insertBefore(js, fjs);*/
/*       }(document,'script','tiledesk-jssdk'));*/
/*   </script-->*/
/* 		*/
/* <!--script type="text/javascript">!function(){var t=document.createElement("script");t.type="text/javascript",t.async=!0,t.src='https://vk.com/js/api/openapi.js?169',t.onload=function(){VK.Retargeting.Init("VK-RTRG-1816776-uQ7d"),VK.Retargeting.Hit()},document.head.appendChild(t)}();</script><noscript><img src="https://vk.com/rtrg?p=VK-RTRG-1816776-uQ7d" style="position:fixed; left:-999px;" alt=""/></noscript-->*/
/* */
/* {% endblock %}*/
/* */
/* */
