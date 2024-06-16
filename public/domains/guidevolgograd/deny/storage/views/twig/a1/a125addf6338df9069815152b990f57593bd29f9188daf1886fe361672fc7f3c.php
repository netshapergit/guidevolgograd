<?php

/* _.admin.documents.file */
class __TwigTemplate_ffa5c5f3b49f19f97156da6bf90ce87c68ec75965a108533e3ba23f4380380eb extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("_.admin.file", "_.admin.documents.file", 1);
        $this->blocks = array(
            'fields' => array($this, 'block_fields'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_.admin.file";
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

        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_fields($context, array $blocks = array())
    {
        // line 4
        echo "
\t<div class=\"form-group\">
\t\t<div class=\"col-sm-12\">
\t\t\t<a class=\"btn btn-default\" href=\"/site/data/documents/{{ item.id }}\" target=\"_blank\">
\t\t\t\t<span class=\"fa fa-download\"></span>
\t\t\t\tСкачать
\t\t\t</a>
\t\t</div>
\t</div>

";
    }

    public function getTemplateName()
    {
        return "_.admin.documents.file";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 4,  52 => 3,  11 => 1,);
    }
}
/* {% extends '_.admin.file' %}*/
/* */
/* {% block fields %}*/
/* */
/* 	<div class="form-group">*/
/* 		<div class="col-sm-12">*/
/* 			<a class="btn btn-default" href="/site/data/documents/{{ item.id }}" target="_blank">*/
/* 				<span class="fa fa-download"></span>*/
/* 				Скачать*/
/* 			</a>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* {% endblock %}*/
/* */
