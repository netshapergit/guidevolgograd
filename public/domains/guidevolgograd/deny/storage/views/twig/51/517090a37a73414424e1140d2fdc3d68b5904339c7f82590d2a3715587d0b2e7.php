<?php

/* auth_form */
class __TwigTemplate_6301a742aa0c134f0619811a851a6fdeae444c715a224b880f7499e0758c5254 extends TwigBridge\Twig\Template
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
        echo "<form action=\"/auth/login\" class=\"auth js-auth-form\" method=\"post\">
\t<div class=\"form-group\">
\t\t<input class=\"form__data form-control\" name=\"login\" placeholder=\"Логин\" type=\"text\" value=\"\">
\t</div>
\t<div class=\"form-group\">
\t\t<input class=\"form__data form-control\" name=\"password\" placeholder=\"Пароль\" type=\"password\">
\t</div>
\t<div class=\"form-group form-group--tac\" >
\t\t<button class=\"form__button rbtn rbtn--text rbtn--main\" type=\"submit\">Войти</button>
\t</div>
\t<div class=\"form-group form-group--tac\">
\t\t<a href=\"#\" class=\"link js-pas\">Напомнить пароль?</a>
\t</div>
\t<div class=\"form-group form-group--mid\">
\t\t<a href=\"#\" class=\"rbtn rbtn--text js-reg\" data-modale-trigger=\"reg\">Регистрация</a>
\t</div>
</form>
";
    }

    public function getTemplateName()
    {
        return "auth_form";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }
}
/* <form action="/auth/login" class="auth js-auth-form" method="post">*/
/* 	<div class="form-group">*/
/* 		<input class="form__data form-control" name="login" placeholder="Логин" type="text" value="">*/
/* 	</div>*/
/* 	<div class="form-group">*/
/* 		<input class="form__data form-control" name="password" placeholder="Пароль" type="password">*/
/* 	</div>*/
/* 	<div class="form-group form-group--tac" >*/
/* 		<button class="form__button rbtn rbtn--text rbtn--main" type="submit">Войти</button>*/
/* 	</div>*/
/* 	<div class="form-group form-group--tac">*/
/* 		<a href="#" class="link js-pas">Напомнить пароль?</a>*/
/* 	</div>*/
/* 	<div class="form-group form-group--mid">*/
/* 		<a href="#" class="rbtn rbtn--text js-reg" data-modale-trigger="reg">Регистрация</a>*/
/* 	</div>*/
/* </form>*/
/* {#*/
/* <div style="display: flex; justify-content: center; margin-top: 50px;">*/
/* 	*/
/* <script async src="https://telegram.org/js/telegram-widget.js?22" data-telegram-login="guideplaceauth_bot" data-size="large" data-onauth="onTelegramAuth(user)" data-request-access="write"></script>*/
/* <script type="text/javascript">*/
/* 	function onTelegramAuth(user) {*/
/* 		try {*/
/* 			console.log(user)*/
/* 			const data = {*/
/* 				...user*/
/* 			}*/
/* 			fetch(location.origin + '/register-tg', {*/
/* 				method: 'POST',*/
/* 				headers: {*/
/* 					'Content-Type': 'application/json'*/
/* 				},*/
/* 				body: JSON.stringify(data)*/
/* 			}).then(r => r.json()).then(r => {*/
/* 				console.log(r)*/
/* 				location.reload()*/
/* 			})*/
/* 		} catch(err) {*/
/* 			noti(false, err.message)*/
/* 			console.log(err)*/
/* 		}*/
/* */
/* 	}*/
/* </script>*/
/* </div>*/
/* #}*/
