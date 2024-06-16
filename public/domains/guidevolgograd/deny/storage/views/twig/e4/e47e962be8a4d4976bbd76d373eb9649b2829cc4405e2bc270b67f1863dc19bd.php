<?php

/* reg_form */
class __TwigTemplate_a4a9e3ceeeaa2a28964194d4697ccdf24edb22c18b25876271f5073609177f88 extends TwigBridge\Twig\Template
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
        echo "<form action=\"/register\" class=\"auth js-auth-form\" method=\"post\">
\t<div class=\"form-group\">
\t\t<input class=\"form__data form-control\" pattern=\"[a-zA-Z0-9]+\" name=\"login\" placeholder=\"Логин (лат. буквы и цифры)\" type=\"text\" value=\"\" required>
\t</div>
\t<div class=\"form-group\">
\t\t<input class=\"form__data form-control\" name=\"email\" placeholder=\"E-mail\" type=\"email\" value=\"\" required>
\t</div>
\t<div class=\"form-group\">
\t\t<input class=\"form__data form-control\" minlength=\"8\" name=\"password\" placeholder=\"Пароль\" type=\"password\">
\t</div>
\t<div class=\"form-group\">
\t\t<input class=\"form__data form-control\" minlength=\"8\" name=\"password_confirmation\" placeholder=\"Подтверждение пароля\" type=\"password\">
\t</div>
\t<div class=\"form-group form-group--tac\" >
\t\t<button class=\"form__button rbtn rbtn--text rbtn--main\" type=\"submit\">Зарегистрироваться</button>
\t</div>
\t
\t<div class=\"form-group form-group--mid\">
\t\t<a href=\"#\" class=\"rbtn rbtn--text js-auth\" data-modale-trigger=\"auth\">Войти</a>
\t</div>
</form>";
    }

    public function getTemplateName()
    {
        return "reg_form";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }
}
/* <form action="/register" class="auth js-auth-form" method="post">*/
/* 	<div class="form-group">*/
/* 		<input class="form__data form-control" pattern="[a-zA-Z0-9]+" name="login" placeholder="Логин (лат. буквы и цифры)" type="text" value="" required>*/
/* 	</div>*/
/* 	<div class="form-group">*/
/* 		<input class="form__data form-control" name="email" placeholder="E-mail" type="email" value="" required>*/
/* 	</div>*/
/* 	<div class="form-group">*/
/* 		<input class="form__data form-control" minlength="8" name="password" placeholder="Пароль" type="password">*/
/* 	</div>*/
/* 	<div class="form-group">*/
/* 		<input class="form__data form-control" minlength="8" name="password_confirmation" placeholder="Подтверждение пароля" type="password">*/
/* 	</div>*/
/* 	<div class="form-group form-group--tac" >*/
/* 		<button class="form__button rbtn rbtn--text rbtn--main" type="submit">Зарегистрироваться</button>*/
/* 	</div>*/
/* 	*/
/* 	<div class="form-group form-group--mid">*/
/* 		<a href="#" class="rbtn rbtn--text js-auth" data-modale-trigger="auth">Войти</a>*/
/* 	</div>*/
/* </form>*/
