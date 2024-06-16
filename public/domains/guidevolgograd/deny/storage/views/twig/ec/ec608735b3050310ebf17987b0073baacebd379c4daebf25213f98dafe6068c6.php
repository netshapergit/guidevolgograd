<?php

/* _.admin.field_types.form */
class __TwigTemplate_2464f488e166112d03308b8c2cb20dd9f3524173ad722f63f1bfc0ffa9da6a15 extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("_.admin.form", "_.admin.field_types.form", 1);
        $this->blocks = array(
            'fields' => array($this, 'block_fields'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_.admin.form";
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
\t<div class=\"row\">

\t\t<div class=\"col-sm-6\">

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t<ns-integer alias=\"id\" disabled item=\"item\" label=\"ID\" size=\"6\"></ns-integer>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t<ns-string alias=\"database_type\" disabled item=\"item\" label=\"Тип в БД\" size=\"8\"></ns-string>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t<ns-string alias=\"relationship\" disabled item=\"item\" label=\"Связь\" size=\"8\"></ns-string>
\t\t\t\t</div>
\t\t\t</div>

\t\t</div>

\t\t<div class=\"col-sm-6\">

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t<ns-checkbox alias=\"active_page\" item=\"item\" label=\"Страницы\" size=\"12\"></ns-checkbox>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t<ns-checkbox alias=\"active_forme\" item=\"item\" label=\"Формы\" size=\"12\"></ns-checkbox>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t<ns-checkbox alias=\"active_user\" item=\"item\" label=\"Пользователи\" size=\"12\"></ns-checkbox>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t<ns-checkbox alias=\"active_setting\" item=\"item\" label=\"Настройки\" size=\"12\"></ns-checkbox>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t<ns-string alias=\"alias\" disabled item=\"item\" label=\"Алиас\" size=\"8\"></ns-string>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t<ns-string alias=\"name\" item=\"item\" label=\"Название\" size=\"8\"></ns-string>
\t\t\t\t</div>
\t\t\t</div>

\t\t</div>

\t</div>

";
    }

    public function getTemplateName()
    {
        return "_.admin.field_types.form";
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
/* {% extends '_.admin.form' %}*/
/* */
/* {% block fields %}*/
/* */
/* 	<div class="row">*/
/* */
/* 		<div class="col-sm-6">*/
/* */
/* 			<div class="row">*/
/* 				<div class="col-sm-4">*/
/* 					<ns-integer alias="id" disabled item="item" label="ID" size="6"></ns-integer>*/
/* 				</div>*/
/* 			</div>*/
/* */
/* 			<div class="row">*/
/* 				<div class="col-sm-6">*/
/* 					<ns-string alias="database_type" disabled item="item" label="Тип в БД" size="8"></ns-string>*/
/* 				</div>*/
/* 				<div class="col-sm-6">*/
/* 					<ns-string alias="relationship" disabled item="item" label="Связь" size="8"></ns-string>*/
/* 				</div>*/
/* 			</div>*/
/* */
/* 		</div>*/
/* */
/* 		<div class="col-sm-6">*/
/* */
/* 			<div class="row">*/
/* 				<div class="col-sm-3">*/
/* 					<ns-checkbox alias="active_page" item="item" label="Страницы" size="12"></ns-checkbox>*/
/* 				</div>*/
/* 				<div class="col-sm-3">*/
/* 					<ns-checkbox alias="active_forme" item="item" label="Формы" size="12"></ns-checkbox>*/
/* 				</div>*/
/* 				<div class="col-sm-3">*/
/* 					<ns-checkbox alias="active_user" item="item" label="Пользователи" size="12"></ns-checkbox>*/
/* 				</div>*/
/* 				<div class="col-sm-3">*/
/* 					<ns-checkbox alias="active_setting" item="item" label="Настройки" size="12"></ns-checkbox>*/
/* 				</div>*/
/* 			</div>*/
/* */
/* 			<div class="row">*/
/* 				<div class="col-sm-6">*/
/* 					<ns-string alias="alias" disabled item="item" label="Алиас" size="8"></ns-string>*/
/* 				</div>*/
/* 				<div class="col-sm-6">*/
/* 					<ns-string alias="name" item="item" label="Название" size="8"></ns-string>*/
/* 				</div>*/
/* 			</div>*/
/* */
/* 		</div>*/
/* */
/* 	</div>*/
/* */
/* {% endblock %}*/
/* */
