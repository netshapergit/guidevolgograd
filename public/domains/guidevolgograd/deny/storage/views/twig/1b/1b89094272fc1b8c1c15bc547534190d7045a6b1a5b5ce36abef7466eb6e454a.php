<?php

/* layouts.lk */
class __TwigTemplate_5b060c80cfa0a0aa8c5591d5b7eadd9123ee897117b85c80db42cb41776b13f7 extends TwigBridge\Twig\Template
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
        $tags = array("include" => 1);
        $filters = array("escape" => 3, "json_encode" => 3);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('include'),
                array('escape', 'json_encode'),
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
        $this->loadTemplate("header", "layouts.lk", 1)->display($context);
        // line 2
        echo "
<div class=\"lk\" data-user=\"";
        // line 3
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["user"]) ? $context["user"] : null)), "html", null, true));
        echo "\" id=\"lk\">
\t<div class=\"lk__layout\">
\t\t<div class=\"lk-content\">
\t\t\t";
        // line 19
        echo "\t\t\t<div class=\"page-edit\">
\t\t\t\t<div class=\"lk-user\">
\t\t\t\t\t<div class=\"page-edit-block page-edit-block--ava\">
\t\t\t\t\t\t<div class=\"page-edit__ava\">
\t\t\t\t\t\t\t<div class=\"lk-ava\" @click.stop=\"onAddFileClick('page-edit-image')\">
\t\t\t\t\t\t\t\t<img :src=\"'/site/data/images/large/' + user.field_image\">
\t\t\t\t\t\t\t\t<div class=\"lk-info__avatar-change\">
\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\"><g data-name=\"Layer 2\"><path d=\"M19.4 7.34 16.66 4.6A2 2 0 0 0 14 4.53l-9 9a2 2 0 0 0-.57 1.21L4 18.91a1 1 0 0 0 .29.8A1 1 0 0 0 5 20h.09l4.17-.38a2 2 0 0 0 1.21-.57l9-9a1.92 1.92 0 0 0-.07-2.71zM9.08 17.62l-3 .28.27-3L12 9.32l2.7 2.7zM16 10.68 13.32 8l1.95-2L18 8.73z\" data-name=\"edit\"/></g></svg>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<input type=\"file\" class=\"hidden\" ref=\"page-edit-image\" id=\"page-edit-image\" @change.stop=\"onImageUpload(\$event)\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"page-edit-block\">
\t\t\t\t\t\t<div class=\"page-edit-block__title\">
\t\t\t\t\t\t\tМои данные
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"page-edit-blocks\">
\t\t\t\t\t\t<div class=\"page-edit-block\">
\t\t\t\t\t\t\t<div class=\"page-edit-input\">
\t\t\t\t\t\t\t\t<input class=\"q-input\" type=\"text\" v-model=\"user.field_first_name\" placeholder=\"Имя\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"page-edit-block\">
\t\t\t\t\t\t\t<div class=\"page-edit-input\">
\t\t\t\t\t\t\t\t<input class=\"q-input\" type=\"text\" v-model=\"user.field_last_name\" placeholder=\"Фамилия\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"page-edit-block\">
\t\t\t\t\t\t\t<div class=\"page-edit-input\">
\t\t\t\t\t\t\t\t<div class=\"q-input\">Логин: {{user.login}}</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"page-edit-block\">
\t\t\t\t\t\t\t<div class=\"page-edit-input\">
\t\t\t\t\t\t\t\t<div class=\"q-input\">E-mail: {{user.email}}</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"page-edit-block\">
\t\t\t\t\t\t\t<div class=\"page-edit-input\">
\t\t\t\t\t\t\t\t<input class=\"q-input\" type=\"text\" v-model=\"user.field_phone\" placeholder=\"Телефон\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"page-edit-block\">
\t\t\t\t\t\t\t<div class=\"page-edit-input\">
\t\t\t\t\t\t\t\t<input class=\"q-input\" type=\"text\" v-model=\"user.field_telegram\" placeholder=\"Telegram\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"page-edit-block\">
\t\t\t\t\t\t\t<div class=\"page-edit-block__title\" style=\"font-size:14px;\">
\t\t\t\t\t\t\t\tОсобенности <br>и интересы
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<Br> 
 \t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li>\"ЗРЕНИЕ\" - для лиц с нарушениями зрения</li> 
\t\t\t\t\t\t\t<li>\"СЛУХ\" - для лиц с нарушениями слуха</li> 
\t\t\t\t\t\t\t<li>\"КОЛЯСКА\" - для передвигающихся на креслах-колясках</li> 
\t\t\t\t\t\t\t<li>\"МАЛОМОБИЛЬНЫЙ\" - c нарушениями опорно-двигательного аппарата</li>
\t\t\t\t\t\t\t<li>\"КОСМОС\" - любая тема которая вам интересна</li>
\t\t\t\t\t\t\t<li>\"ИСТОРИЯ\" - любая тема которая вам интересна</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<div class=\"page-edit-block\">
\t\t\t\t\t\t\t<div class=\"page-edit-input\">
\t\t\t\t\t\t\t\t<input class=\"q-input\" type=\"text\" v-model=\"user.field_prefs\" placeholder=\"Интересы\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<br>
\t\t\t\t\t<div class=\"page-edit-block\" v-if=\"!isPasswordChangeFieldsShowed\">
\t\t\t\t\t\t<button class=\"rbtn rbtn--text rbtn--full\" @click.stop=\"isPasswordChangeFieldsShowed = !isPasswordChangeFieldsShowed\">Сменить пароль</button>
\t\t\t\t\t</div>
\t\t\t\t\t<template v-else>
\t\t\t\t\t\t<div class=\"page-edit-block\">
\t\t\t\t\t\t\t<div class=\"page-edit-input\">
\t\t\t\t\t\t\t\t<input class=\"q-input\" type=\"password\" v-model=\"user.password\" placeholder=\"Новый пароль\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"page-edit-block\">
\t\t\t\t\t\t\t<div class=\"page-edit-input\">
\t\t\t\t\t\t\t\t<input class=\"q-input\" type=\"password\" v-model=\"user.password_confirmation\" placeholder=\"Подтверждение пароля\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</template>
\t\t\t\t\t<br>
\t\t\t\t\t<div class=\"page-edit-block\">
\t\t\t\t\t\t<button class=\"rbtn rbtn--text rbtn--color-pink rbtn--full\" :class=\"{'rbtn--tpa': !isUserDataChanged}\" @click.stop=\"onSaveChangesButtonClick\">Сохранить</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t<form data-action=\"/user/users/";
        // line 111
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed(twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()), "html", null, true));
        echo "\" class=\"js-user-edit-form hidden\" ref=\"js-opage-form\" autocomplete=\"off\" @submit.prevent=\"saveChanges\"> 
\t\t\t\t<input name=\"_method\" type=\"hidden\" value=\"put\">
\t\t\t\t
\t\t\t\t<input class=\"form-control\" autocomplete=\"false\" id=\"password\" name=\"password\" placeholder=\"Пароль\" type=\"password\" :value=\"user.password\">
\t\t\t\t<input class=\"form-control\" autocomplete=\"false\" id=\"password_confirmation\" name=\"password_confirmation\" placeholder=\"Подтверждение\" type=\"password\" :value=\"user.password_confirmation\">
\t\t\t\t<input name=\"login\" autocomplete=\"false\" type=\"text\" :value=\"user.login\">
\t\t\t\t<input name=\"email\" autocomplete=\"false\" type=\"email\" :value=\"user.email\">
\t\t\t\t<input name=\"field_first_name\" autocomplete=\"false\" type=\"text\" :value=\"user.field_first_name\">
\t\t\t\t<input name=\"field_last_name\" autocomplete=\"false\" type=\"text\" :value=\"user.field_last_name\">
\t\t\t\t<input name=\"field_phone\" autocomplete=\"false\" type=\"text\" :value=\"user.field_phone\">
\t\t\t\t<input name=\"field_telegram\" autocomplete=\"false\" type=\"text\" :value=\"user.field_telegram\">
\t\t\t\t<input name=\"field_prefs\" autocomplete=\"false\" type=\"text\" :value=\"user.field_prefs\">
\t\t\t\t<input name=\"field_image\" autocomplete=\"false\" type=\"text\" :value=\"user.field_image\">
\t\t\t\t
\t\t\t\t<button type=\"submit\" class=\"mbtn js-up-user-save\" ref=\"save-changes-form-button\">Сохранить</button>
\t\t\t</form>
\t\t</div>
\t</div>
</div>

";
        // line 131
        $this->loadTemplate("footer", "layouts.lk", 131)->display($context);
        // line 132
        echo "<script src=\"/site/theme/js/lk_personal.js\" type=\"module\"></script>";
    }

    public function getTemplateName()
    {
        return "layouts.lk";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 132,  171 => 131,  148 => 111,  54 => 19,  48 => 3,  45 => 2,  43 => 1,);
    }
}
/* {% include 'header' %}*/
/* */
/* <div class="lk" data-user="{$ user|json_encode() $}" id="lk">*/
/* 	<div class="lk__layout">*/
/* 		<div class="lk-content">*/
/* 			{#*/
/* 			<div class="lk-content-header">*/
/* 				<div class="lk-content-header__block">*/
/* 					<h1>Персональные данные</h1>*/
/* 				</div>*/
/* 				<div class="divider"></div>*/
/* 				<div class="lk-content-header__block">*/
/* 					<div class="lk-content-actions">*/
/* 						<button class="mbtn mbtn--color-orange" @click.stop="onSaveChangesButtonClick">Сохранить</button>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			#}*/
/* 			<div class="page-edit">*/
/* 				<div class="lk-user">*/
/* 					<div class="page-edit-block page-edit-block--ava">*/
/* 						<div class="page-edit__ava">*/
/* 							<div class="lk-ava" @click.stop="onAddFileClick('page-edit-image')">*/
/* 								<img :src="'/site/data/images/large/' + user.field_image">*/
/* 								<div class="lk-info__avatar-change">*/
/* 									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g data-name="Layer 2"><path d="M19.4 7.34 16.66 4.6A2 2 0 0 0 14 4.53l-9 9a2 2 0 0 0-.57 1.21L4 18.91a1 1 0 0 0 .29.8A1 1 0 0 0 5 20h.09l4.17-.38a2 2 0 0 0 1.21-.57l9-9a1.92 1.92 0 0 0-.07-2.71zM9.08 17.62l-3 .28.27-3L12 9.32l2.7 2.7zM16 10.68 13.32 8l1.95-2L18 8.73z" data-name="edit"/></g></svg>*/
/* 								</div>*/
/* 							</div>*/
/* 							<input type="file" class="hidden" ref="page-edit-image" id="page-edit-image" @change.stop="onImageUpload($event)">*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="page-edit-block">*/
/* 						<div class="page-edit-block__title">*/
/* 							Мои данные*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="page-edit-blocks">*/
/* 						<div class="page-edit-block">*/
/* 							<div class="page-edit-input">*/
/* 								<input class="q-input" type="text" v-model="user.field_first_name" placeholder="Имя">*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="page-edit-block">*/
/* 							<div class="page-edit-input">*/
/* 								<input class="q-input" type="text" v-model="user.field_last_name" placeholder="Фамилия">*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="page-edit-block">*/
/* 							<div class="page-edit-input">*/
/* 								<div class="q-input">Логин: {{user.login}}</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="page-edit-block">*/
/* 							<div class="page-edit-input">*/
/* 								<div class="q-input">E-mail: {{user.email}}</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="page-edit-block">*/
/* 							<div class="page-edit-input">*/
/* 								<input class="q-input" type="text" v-model="user.field_phone" placeholder="Телефон">*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="page-edit-block">*/
/* 							<div class="page-edit-input">*/
/* 								<input class="q-input" type="text" v-model="user.field_telegram" placeholder="Telegram">*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="page-edit-block">*/
/* 							<div class="page-edit-block__title" style="font-size:14px;">*/
/* 								Особенности <br>и интересы*/
/* 							</div>*/
/* 						</div>*/
/* 						<Br> */
/*  						<ul>*/
/* 							<li>"ЗРЕНИЕ" - для лиц с нарушениями зрения</li> */
/* 							<li>"СЛУХ" - для лиц с нарушениями слуха</li> */
/* 							<li>"КОЛЯСКА" - для передвигающихся на креслах-колясках</li> */
/* 							<li>"МАЛОМОБИЛЬНЫЙ" - c нарушениями опорно-двигательного аппарата</li>*/
/* 							<li>"КОСМОС" - любая тема которая вам интересна</li>*/
/* 							<li>"ИСТОРИЯ" - любая тема которая вам интересна</li>*/
/* 						</ul>*/
/* 						<div class="page-edit-block">*/
/* 							<div class="page-edit-input">*/
/* 								<input class="q-input" type="text" v-model="user.field_prefs" placeholder="Интересы">*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 					<br>*/
/* 					<div class="page-edit-block" v-if="!isPasswordChangeFieldsShowed">*/
/* 						<button class="rbtn rbtn--text rbtn--full" @click.stop="isPasswordChangeFieldsShowed = !isPasswordChangeFieldsShowed">Сменить пароль</button>*/
/* 					</div>*/
/* 					<template v-else>*/
/* 						<div class="page-edit-block">*/
/* 							<div class="page-edit-input">*/
/* 								<input class="q-input" type="password" v-model="user.password" placeholder="Новый пароль">*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="page-edit-block">*/
/* 							<div class="page-edit-input">*/
/* 								<input class="q-input" type="password" v-model="user.password_confirmation" placeholder="Подтверждение пароля">*/
/* 							</div>*/
/* 						</div>*/
/* 					</template>*/
/* 					<br>*/
/* 					<div class="page-edit-block">*/
/* 						<button class="rbtn rbtn--text rbtn--color-pink rbtn--full" :class="{'rbtn--tpa': !isUserDataChanged}" @click.stop="onSaveChangesButtonClick">Сохранить</button>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			*/
/* 			<form data-action="/user/users/{$ user.id $}" class="js-user-edit-form hidden" ref="js-opage-form" autocomplete="off" @submit.prevent="saveChanges"> */
/* 				<input name="_method" type="hidden" value="put">*/
/* 				*/
/* 				<input class="form-control" autocomplete="false" id="password" name="password" placeholder="Пароль" type="password" :value="user.password">*/
/* 				<input class="form-control" autocomplete="false" id="password_confirmation" name="password_confirmation" placeholder="Подтверждение" type="password" :value="user.password_confirmation">*/
/* 				<input name="login" autocomplete="false" type="text" :value="user.login">*/
/* 				<input name="email" autocomplete="false" type="email" :value="user.email">*/
/* 				<input name="field_first_name" autocomplete="false" type="text" :value="user.field_first_name">*/
/* 				<input name="field_last_name" autocomplete="false" type="text" :value="user.field_last_name">*/
/* 				<input name="field_phone" autocomplete="false" type="text" :value="user.field_phone">*/
/* 				<input name="field_telegram" autocomplete="false" type="text" :value="user.field_telegram">*/
/* 				<input name="field_prefs" autocomplete="false" type="text" :value="user.field_prefs">*/
/* 				<input name="field_image" autocomplete="false" type="text" :value="user.field_image">*/
/* 				*/
/* 				<button type="submit" class="mbtn js-up-user-save" ref="save-changes-form-button">Сохранить</button>*/
/* 			</form>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* */
/* {% include 'footer' %}*/
/* <script src="/site/theme/js/lk_personal.js" type="module"></script>*/
