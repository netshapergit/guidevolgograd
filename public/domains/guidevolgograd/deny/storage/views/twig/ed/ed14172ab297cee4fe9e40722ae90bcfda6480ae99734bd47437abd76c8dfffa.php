<?php

/* layouts.service */
class __TwigTemplate_a97d759a1d6310a1ff0688e85509d3af92432d512105c8d0a0cfdaed839e363c extends TwigBridge\Twig\Template
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
        $tags = array("include" => 2);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('include'),
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

        // line 2
        $this->loadTemplate("sidebar_vue", "layouts.service", 2)->display($context);
        // line 3
        echo "<section class=\"hero\">
\t<div class=\"cont cont--fw\">
\t\t<div class=\"hero__wrapper\" style=\"height: 50vh !important;\">
\t\t\t<div class=\"hero-main\">
\t\t\t\t<div class=\"cont cont--min\">
\t\t\t\t\t<div class=\"hero-main__wrapper\">
\t\t\t\t\t\t<div class=\"hero-top\">
\t\t\t\t\t\t\t<div class=\"hero-top__wrapper\">
\t\t\t\t\t\t\t\t<div class=\"hero-top__item\">
\t\t\t\t\t\t\t\t\t<div class=\"hero-top__logo\">
\t\t\t\t\t\t\t\t\t\t<a href=\"/\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 14
        $this->loadTemplate("domain_msgs", "layouts.service", 14)->display(array_merge($context, array("field" => "logoindex", "isHTML" => true)));
        // line 15
        echo "\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"hero-top__item\">
\t\t\t\t\t\t\t\t\t<div class=\"hero-top__anthem\">
\t\t\t\t\t\t\t\t\t\tНАЧНИ СВОЙ ОТДЫХ ВМЕСТЕ С НАМИ!
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"hero-slider\">
\t\t\t\t
\t\t\t\t<div class=\"hero-slide\" style=\"background-image: url(/site/theme/images/service_holiday.png)\">
\t\t\t\t\t<div class=\"hero-slide__wrapper\" style=\"height: 50vh !important;     align-items: flex-end !important;\">
\t\t\t\t\t\t<div class=\"hero-slide__inner\">
\t\t\t\t\t\t\t<div class=\"cont cont--min\">
\t\t\t\t\t\t\t\t<div class=\"hero-slide__title\" style=\"text-align: center;\">
\t\t\t\t\t\t\t\t\tСтать партнером
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!--div class=\"\" style=\"color:#fff; font-size:30px; position: absolute;right: 270px;margin-top: -100px;\"> Фото и видео съёмка <br>Дизайн и брендинг <Br>Копирайт и переводы</div-->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
\t


\t
\t\t\t\t\t\t
\t\t\t\t\t\t
<section class=\"forus\">
\t<div class=\"cont\">
\t\t<!--h2 class=\"section__title\">Оформим и разместим</h2-->
\t\t<!--div class=\"section__subtitle\">Дайте вашим клиентам больше</div-->
\t\t<div class=\"forus__wrapper\">
\t\t\t<div class=\"foru\">
\t\t\t\t<div class=\"foru__item\">
\t\t\t\t\t<div class=\"foru__content\">
\t\t\t\t\t\t<div class=\"foru__title\">Разместим вашу информацию</div>
\t\t\t\t\t\t<div class=\"foru__desc\">
\t\t\t\t\t\t\t<div>Добавим объекты, экскурсии, события и всё что нужно туристам. Проработаем контент, визуальную часть и 
\t\t\t\t\t\t\t\tпоможем с интеграциями. Включим ваши объекты в обзорные статьи и маршруты. </div><Br>
\t\t\t\t\t\t\t<!--ul>
\t\t\t\t\t\t\t\t<li> Разработка фирменного стиля (логотипы, брендбуки, айдентика)</li>
\t\t\t\t\t\t\t\t<li> Полиграфия (визитки, буклеты, листовки)</li>
\t\t\t\t\t\t\t\t<li> Оформление социальных сетей</li>
\t\t\t\t\t\t\t\t<li> Авторская иллюстрация (сувенирная продукция, мерч, персонажи, иллюстрации, инфографика)</li>
\t\t\t\t\t\t\t\t<li> Веб-дизайн</li>
\t\t\t\t\t\t\t</ul-->
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"foru__item\">
\t\t\t\t\t<div class=\"foru__img\">
\t\t\t\t\t\t<img src=\"/site/theme/images/service1.png\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"foru\">
\t\t\t\t<div class=\"foru__item\">
\t\t\t\t\t<div class=\"foru__content\">
\t\t\t\t\t\t<div class=\"foru__title\">Дополнительные возможности</div>
\t\t\t\t\t\t<div class=\"foru__desc\">
\t\t\t\t\t\t\t<div>Проработаем концепцию размещения. Ваши предложения в рекомендательной системе и в ленте актуальном.
\t\t\t\t\t\t\tПредложим не стандартные решения выходящие за рамки проекта.</div><Br>
\t\t\t\t\t\t\t<!--ul>
\t\t\t\t\t\t\t\t<li>Разработка сайтов на платформе </li>
\t\t\t\t\t\t\t\t<li>Разработка сайтов на CMS</li>
\t\t\t\t\t\t\t\t<li>Редизайн сайтов</li>
\t\t\t\t\t\t\t\t<li>А/В - тестирование</li>
\t\t\t\t\t\t\t\t<li>Техническая поддержка</li>
\t\t\t\t\t\t\t\t<li>Домены</li>
\t\t\t\t\t\t\t\t<li>Хостинг</li>
\t\t\t\t\t\t\t</ul-->
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"foru__item\">
\t\t\t\t\t<div class=\"foru__img\">
\t\t\t\t\t\t<img src=\"/site/theme/images/service2.png\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!--div class=\"foru\">
\t\t\t\t<div class=\"foru__item\">
\t\t\t\t\t<div class=\"foru__content\">
\t\t\t\t\t\t<div class=\"foru__title\">ТЕХ. ПОДДЕРЖКА</div>
\t\t\t\t\t\t<div class=\"foru__desc\">
\t\t\t\t\t\t\t<div>Ваш партнер:  ДЕПАРТАМЕНТ САЙТОВ</div><Br>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li>Техническая поддержка</li>
\t\t\t\t\t\t\t\t<li>Домены</li>
\t\t\t\t\t\t\t\t<li>Хостинг</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"foru__item\">
\t\t\t\t\t<div class=\"foru__img\">
\t\t\t\t\t\t<img src=\"/site/theme/images/service3.png\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div-->
\t\t\t<div class=\"foru\">
\t\t\t\t<div class=\"foru__item\">
\t\t\t\t\t<div class=\"foru__content\">
\t\t\t\t\t\t<div class=\"foru__title\">Проинформаруем пользователей</div>
\t\t\t\t\t\t<div class=\"foru__desc\">
\t\t\t\t\t\t\t<div>Предложим дополнительные рекламные возможности для популяризации вашего предложения.  </div><Br>
\t\t\t\t\t\t\t<!--ul>
\t\t\t\t\t\t\t\t<li>SEO-продвижение</li>
\t\t\t\t\t\t\t\t<li>Медийная реклама</li>
\t\t\t\t\t\t\t\t<li>Социальные медиа</li>
\t\t\t\t\t\t\t\t<li>Подключение новых рекламных каналов</li>
\t\t\t\t\t\t\t\t<li>Блогеры / PR</li>
\t\t\t\t\t\t\t\t<li>Индивидуальны условия размещения информации</li>
\t\t\t\t\t\t\t\t<li>Специальные креативы</li>
\t\t\t\t\t\t\t\t<li>Дополнительное размещение в SMM</li>
\t\t\t\t\t\t\t\t<li>Копирайт, статья, обзоры</li>
\t\t\t\t\t\t\t\t<li>Фото / видео съёмка</li>
\t\t\t\t\t\t\t\t<li>Перевод на иностранные языки</li>
\t\t\t\t\t\t\t</ul-->
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"foru__item\">
\t\t\t\t\t<div class=\"foru__img\">
\t\t\t\t\t\t<img src=\"/site/theme/images/service4.png\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>\t\t\t\t\t\t
\t\t\t\t\t\t



<Br><br>





";
        // line 168
        $this->loadTemplate("footer", "layouts.service", 168)->display($context);
    }

    public function getTemplateName()
    {
        return "layouts.service";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 168,  60 => 15,  58 => 14,  45 => 3,  43 => 2,);
    }
}
/* {# include 'header' #}*/
/* {% include 'sidebar_vue' %}*/
/* <section class="hero">*/
/* 	<div class="cont cont--fw">*/
/* 		<div class="hero__wrapper" style="height: 50vh !important;">*/
/* 			<div class="hero-main">*/
/* 				<div class="cont cont--min">*/
/* 					<div class="hero-main__wrapper">*/
/* 						<div class="hero-top">*/
/* 							<div class="hero-top__wrapper">*/
/* 								<div class="hero-top__item">*/
/* 									<div class="hero-top__logo">*/
/* 										<a href="/">*/
/* 											{% include 'domain_msgs' with {field: 'logoindex',isHTML:true} %}*/
/* 										</a>*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="hero-top__item">*/
/* 									<div class="hero-top__anthem">*/
/* 										НАЧНИ СВОЙ ОТДЫХ ВМЕСТЕ С НАМИ!*/
/* 										*/
/* 										*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="hero-slider">*/
/* 				*/
/* 				<div class="hero-slide" style="background-image: url(/site/theme/images/service_holiday.png)">*/
/* 					<div class="hero-slide__wrapper" style="height: 50vh !important;     align-items: flex-end !important;">*/
/* 						<div class="hero-slide__inner">*/
/* 							<div class="cont cont--min">*/
/* 								<div class="hero-slide__title" style="text-align: center;">*/
/* 									Стать партнером*/
/* 								</div>*/
/* 								<!--div class="" style="color:#fff; font-size:30px; position: absolute;right: 270px;margin-top: -100px;"> Фото и видео съёмка <br>Дизайн и брендинг <Br>Копирайт и переводы</div-->*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </section>*/
/* 	*/
/* */
/* */
/* 	*/
/* 						*/
/* 						*/
/* <section class="forus">*/
/* 	<div class="cont">*/
/* 		<!--h2 class="section__title">Оформим и разместим</h2-->*/
/* 		<!--div class="section__subtitle">Дайте вашим клиентам больше</div-->*/
/* 		<div class="forus__wrapper">*/
/* 			<div class="foru">*/
/* 				<div class="foru__item">*/
/* 					<div class="foru__content">*/
/* 						<div class="foru__title">Разместим вашу информацию</div>*/
/* 						<div class="foru__desc">*/
/* 							<div>Добавим объекты, экскурсии, события и всё что нужно туристам. Проработаем контент, визуальную часть и */
/* 								поможем с интеграциями. Включим ваши объекты в обзорные статьи и маршруты. </div><Br>*/
/* 							<!--ul>*/
/* 								<li> Разработка фирменного стиля (логотипы, брендбуки, айдентика)</li>*/
/* 								<li> Полиграфия (визитки, буклеты, листовки)</li>*/
/* 								<li> Оформление социальных сетей</li>*/
/* 								<li> Авторская иллюстрация (сувенирная продукция, мерч, персонажи, иллюстрации, инфографика)</li>*/
/* 								<li> Веб-дизайн</li>*/
/* 							</ul-->*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="foru__item">*/
/* 					<div class="foru__img">*/
/* 						<img src="/site/theme/images/service1.png">*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="foru">*/
/* 				<div class="foru__item">*/
/* 					<div class="foru__content">*/
/* 						<div class="foru__title">Дополнительные возможности</div>*/
/* 						<div class="foru__desc">*/
/* 							<div>Проработаем концепцию размещения. Ваши предложения в рекомендательной системе и в ленте актуальном.*/
/* 							Предложим не стандартные решения выходящие за рамки проекта.</div><Br>*/
/* 							<!--ul>*/
/* 								<li>Разработка сайтов на платформе </li>*/
/* 								<li>Разработка сайтов на CMS</li>*/
/* 								<li>Редизайн сайтов</li>*/
/* 								<li>А/В - тестирование</li>*/
/* 								<li>Техническая поддержка</li>*/
/* 								<li>Домены</li>*/
/* 								<li>Хостинг</li>*/
/* 							</ul-->*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="foru__item">*/
/* 					<div class="foru__img">*/
/* 						<img src="/site/theme/images/service2.png">*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			<!--div class="foru">*/
/* 				<div class="foru__item">*/
/* 					<div class="foru__content">*/
/* 						<div class="foru__title">ТЕХ. ПОДДЕРЖКА</div>*/
/* 						<div class="foru__desc">*/
/* 							<div>Ваш партнер:  ДЕПАРТАМЕНТ САЙТОВ</div><Br>*/
/* 							<ul>*/
/* 								<li>Техническая поддержка</li>*/
/* 								<li>Домены</li>*/
/* 								<li>Хостинг</li>*/
/* 							</ul>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="foru__item">*/
/* 					<div class="foru__img">*/
/* 						<img src="/site/theme/images/service3.png">*/
/* 					</div>*/
/* 				</div>*/
/* 			</div-->*/
/* 			<div class="foru">*/
/* 				<div class="foru__item">*/
/* 					<div class="foru__content">*/
/* 						<div class="foru__title">Проинформаруем пользователей</div>*/
/* 						<div class="foru__desc">*/
/* 							<div>Предложим дополнительные рекламные возможности для популяризации вашего предложения.  </div><Br>*/
/* 							<!--ul>*/
/* 								<li>SEO-продвижение</li>*/
/* 								<li>Медийная реклама</li>*/
/* 								<li>Социальные медиа</li>*/
/* 								<li>Подключение новых рекламных каналов</li>*/
/* 								<li>Блогеры / PR</li>*/
/* 								<li>Индивидуальны условия размещения информации</li>*/
/* 								<li>Специальные креативы</li>*/
/* 								<li>Дополнительное размещение в SMM</li>*/
/* 								<li>Копирайт, статья, обзоры</li>*/
/* 								<li>Фото / видео съёмка</li>*/
/* 								<li>Перевод на иностранные языки</li>*/
/* 							</ul-->*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="foru__item">*/
/* 					<div class="foru__img">*/
/* 						<img src="/site/theme/images/service4.png">*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </section>						*/
/* 						*/
/* */
/* */
/* */
/* <Br><br>*/
/* */
/* */
/* */
/* */
/* */
/* {% include 'footer' %}*/
