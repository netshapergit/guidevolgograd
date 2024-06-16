<?php

/* auth_form */
class __TwigTemplate_c29d33e5e95da7531d0aae8a870213b1d767f000256eed726eb88308c325cd33 extends TwigBridge\Twig\Template
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
<div style=\"display: flex; justify-content: center; margin-top: 50px;\">
<script async src=\"https://telegram.org/js/telegram-widget.js?22\" data-telegram-login=\"guideplaceauth_bot\" data-size=\"large\" data-onauth=\"onTelegramAuth(user)\" data-request-access=\"write\"></script>
<script type=\"text/javascript\">
\tfunction onTelegramAuth(user) {
\t\ttry {
\t\t\tconsole.log(user)
\t\t\tconst data = {
\t\t\t\t...user
\t\t\t}
\t\t\tfetch(location.origin + '/register-tg', {
\t\t\t\tmethod: 'POST',
\t\t\t\theaders: {
\t\t\t\t\t'Content-Type': 'application/json'
\t\t\t\t},
\t\t\t\tbody: JSON.stringify(data)
\t\t\t}).then(r => r.json()).then(r => {
\t\t\t\tconsole.log(r)
\t\t\t\tlocation.reload()
\t\t\t})
\t\t} catch(err) {
\t\t\tnoti(false, err.message)
\t\t\tconsole.log(err)
\t\t}

\t}
</script>
</div>";
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
/* <div style="display: flex; justify-content: center; margin-top: 50px;">*/
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
