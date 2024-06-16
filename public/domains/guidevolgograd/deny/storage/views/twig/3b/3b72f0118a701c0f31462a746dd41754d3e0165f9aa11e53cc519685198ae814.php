<?php

/* layouts.sitemap */
class __TwigTemplate_01cdf2c442dc561ffba89e2ea88cac1a4949bc869427aa88f876a7172fc94a87 extends TwigBridge\Twig\Template
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
        echo "<div class=\"module layout-news type-announcement\">
\t\t<div class=\"module-body\">
\t\t\t<ul class=\"media-list\">
\t\t\t\t\t\t\t\t\t<li class=\"media\">
\t\t\t\t\t
\t
\t<div class=\"media-body\">

\t\t<p class=\"text-muted\">
\t\t\t<small>10:16 02.17.2024</small>
\t\t</p>

\t\t\t\t\t<h4 class=\"media-heading\">sitemap</h4>
\t\t
\t\t
\t\t<a href=\"/sitemap\">Подробнее</a>

\t</div>

\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"media\">
\t\t\t\t\t
\t
\t<div class=\"media-body\">

\t\t<p class=\"text-muted\">
\t\t\t<small>16:50 02.12.2024</small>
\t\t</p>

\t\t\t\t\t<h4 class=\"media-heading\">Калининград</h4>
\t\t
\t\t
\t\t<a href=\"/kaliningrad\">Подробнее</a>

\t</div>

\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"media\">
\t\t\t\t\t
\t
\t<div class=\"media-body\">

\t\t<p class=\"text-muted\">
\t\t\t<small>14:21 02.12.2024</small>
\t\t</p>

\t\t\t\t\t<h4 class=\"media-heading\">Ставропольский край</h4>
\t\t
\t\t
\t\t<a href=\"/stavropol-region\">Подробнее</a>

\t</div>

\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"media\">
\t\t\t\t\t
\t
\t<div class=\"media-body\">

\t\t<p class=\"text-muted\">
\t\t\t<small>10:50 02.12.2024</small>
\t\t</p>

\t\t\t\t\t<h4 class=\"media-heading\">Пятигорск</h4>
\t\t
\t\t
\t\t<a href=\"/pyatigorsk\">Подробнее</a>

\t</div>

\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"media\">
\t\t\t\t\t
\t
\t<div class=\"media-body\">

\t\t<p class=\"text-muted\">
\t\t\t<small>13:13 02.09.2024</small>
\t\t</p>

\t\t\t\t\t<h4 class=\"media-heading\">Башкирия</h4>
\t\t
\t\t
\t\t<a href=\"/bashkiria\">Подробнее</a>

\t</div>

\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"media\">
\t\t\t\t\t
\t
\t<div class=\"media-body\">

\t\t<p class=\"text-muted\">
\t\t\t<small>07:55 02.06.2024</small>
\t\t</p>

\t\t\t\t\t<h4 class=\"media-heading\">Ульяновская область</h4>
\t\t
\t\t
\t\t<a href=\"/ulyanovsk-region\">Подробнее</a>

\t</div>

\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"media\">
\t\t\t\t\t
\t
\t<div class=\"media-body\">

\t\t<p class=\"text-muted\">
\t\t\t<small>11:02 02.05.2024</small>
\t\t</p>

\t\t\t\t\t<h4 class=\"media-heading\">Пензенская область</h4>
\t\t
\t\t
\t\t<a href=\"/penza-region\">Подробнее</a>

\t</div>

\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"media\">
\t\t\t\t\t
\t
\t<div class=\"media-body\">

\t\t<p class=\"text-muted\">
\t\t\t<small>13:40 02.03.2024</small>
\t\t</p>

\t\t\t\t\t<h4 class=\"media-heading\">Сочи</h4>
\t\t
\t\t
\t\t<a href=\"/sochi\">Подробнее</a>

\t</div>

\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"media\">
\t\t\t\t\t
\t
\t<div class=\"media-body\">

\t\t<p class=\"text-muted\">
\t\t\t<small>08:45 01.31.2024</small>
\t\t</p>

\t\t\t\t\t<h4 class=\"media-heading\">Ульяновск</h4>
\t\t
\t\t
\t\t<a href=\"/ulyanovsk\">Подробнее</a>

\t</div>

\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"media\">
\t\t\t\t\t
\t
\t<div class=\"media-body\">

\t\t<p class=\"text-muted\">
\t\t\t<small>10:16 12.16.2023</small>
\t\t</p>

\t\t\t\t\t<h4 class=\"media-heading\">В круиз</h4>
\t\t
\t\t
\t\t<a href=\"/cruise\">Подробнее</a>

\t</div>

\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"media\">
\t\t\t\t\t
\t
\t<div class=\"media-body\">

\t\t<p class=\"text-muted\">
\t\t\t<small>09:20 10.20.2023</small>
\t\t</p>

\t\t\t\t\t<h4 class=\"media-heading\">Посты</h4>
\t\t
\t\t
\t\t<a href=\"/posts\">Подробнее</a>

\t</div>

\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"media\">
\t\t\t\t\t
\t
\t<div class=\"media-body\">

\t\t<p class=\"text-muted\">
\t\t\t<small>12:53 06.07.2023</small>
\t\t</p>

\t\t
\t\t
\t\t<a href=\"/lk\">Подробнее</a>

\t</div>

\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"media\">
\t\t\t\t\t
\t
\t<div class=\"media-body\">

\t\t<p class=\"text-muted\">
\t\t\t<small>08:07 05.22.2023</small>
\t\t</p>

\t\t\t\t\t<h4 class=\"media-heading\">Москва</h4>
\t\t
\t\t
\t\t<a href=\"/moskov\">Подробнее</a>

\t</div>

\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"media\">
\t\t\t\t\t
\t
\t<div class=\"media-body\">

\t\t<p class=\"text-muted\">
\t\t\t<small>09:17 10.26.2022</small>
\t\t</p>

\t\t\t\t\t<h4 class=\"media-heading\">Мой маршрут</h4>
\t\t
\t\t
\t\t<a href=\"/myroute\">Подробнее</a>

\t</div>

\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"media\">
\t\t\t\t\t
\t
\t<div class=\"media-body\">

\t\t<p class=\"text-muted\">
\t\t\t<small>11:56 08.13.2021</small>
\t\t</p>

\t\t\t\t\t<h4 class=\"media-heading\">import</h4>
\t\t
\t\t
\t\t<a href=\"/import\">Подробнее</a>

\t</div>

\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"media\">
\t\t\t\t\t
\t\t\t<a class=\"pull-left\" href=\"/ufa\">
\t\t\t<img class=\"media-object\" src=\"/site/data/images/small/0AOQ.jpg\">
\t\t</a>
\t
\t<div class=\"media-body\">

\t\t<p class=\"text-muted\">
\t\t\t<small>04:17 08.10.2021</small>
\t\t</p>

\t\t\t\t\t<h4 class=\"media-heading\">Уфа</h4>
\t\t
\t\t
\t\t<a href=\"/ufa\">Подробнее</a>

\t</div>

\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"media\">
\t\t\t\t\t
\t\t\t<a class=\"pull-left\" href=\"/orenburg-region\">
\t\t\t<img class=\"media-object\" src=\"/site/data/images/small/Zyrf.jpg\">
\t\t</a>
\t
\t<div class=\"media-body\">

\t\t<p class=\"text-muted\">
\t\t\t<small>04:26 08.07.2021</small>
\t\t</p>

\t\t\t\t\t<h4 class=\"media-heading\">Оренбургская область</h4>
\t\t
\t\t
\t\t<a href=\"/orenburg-region\">Подробнее</a>

\t</div>

\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"media\">
\t\t\t\t\t
\t\t\t<a class=\"pull-left\" href=\"/nizhny-novgorod\">
\t\t\t<img class=\"media-object\" src=\"/site/data/images/small/hiLD.jpg\">
\t\t</a>
\t
\t<div class=\"media-body\">

\t\t<p class=\"text-muted\">
\t\t\t<small>07:49 08.04.2021</small>
\t\t</p>

\t\t\t\t\t<h4 class=\"media-heading\">Нижний Новгород</h4>
\t\t
\t\t
\t\t<a href=\"/nizhny-novgorod\">Подробнее</a>

\t</div>

\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"media\">
\t\t\t\t\t
\t\t\t<a class=\"pull-left\" href=\"/saratov\">
\t\t\t<img class=\"media-object\" src=\"/site/data/images/small/626g.jpg\">
\t\t</a>
\t
\t<div class=\"media-body\">

\t\t<p class=\"text-muted\">
\t\t\t<small>10:22 07.26.2021</small>
\t\t</p>

\t\t\t\t\t<h4 class=\"media-heading\">Саратов</h4>
\t\t
\t\t
\t\t<a href=\"/saratov\">Подробнее</a>

\t</div>

\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"media\">
\t\t\t\t\t
\t\t\t<a class=\"pull-left\" href=\"/yaroslavl-region\">
\t\t\t<img class=\"media-object\" src=\"/site/data/images/small/gcOp.jpg\">
\t\t</a>
\t
\t<div class=\"media-body\">

\t\t<p class=\"text-muted\">
\t\t\t<small>04:42 07.16.2021</small>
\t\t</p>

\t\t\t\t\t<h4 class=\"media-heading\">Ярославская область</h4>
\t\t
\t\t
\t\t<a href=\"/yaroslavl-region\">Подробнее</a>

\t</div>

\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"media\">
\t\t\t\t\t
\t\t\t<a class=\"pull-left\" href=\"/chelyabinsk-region\">
\t\t\t<img class=\"media-object\" src=\"/site/data/images/small/o5yU.jpg\">
\t\t</a>
\t
\t<div class=\"media-body\">

\t\t<p class=\"text-muted\">
\t\t\t<small>04:27 07.16.2021</small>
\t\t</p>

\t\t\t\t\t<h4 class=\"media-heading\">Челябинская область </h4>
\t\t
\t\t
\t\t<a href=\"/chelyabinsk-region\">Подробнее</a>

\t</div>

\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"media\">
\t\t\t\t\t
\t\t\t<a class=\"pull-left\" href=\"/tver-region\">
\t\t\t<img class=\"media-object\" src=\"/site/data/images/small/jb19.jpg\">
\t\t</a>
\t
\t<div class=\"media-body\">

\t\t<p class=\"text-muted\">
\t\t\t<small>03:33 07.16.2021</small>
\t\t</p>

\t\t\t\t\t<h4 class=\"media-heading\">Тверская область</h4>
\t\t
\t\t
\t\t<a href=\"/tver-region\">Подробнее</a>

\t</div>

\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"media\">
\t\t\t\t\t
\t\t\t<a class=\"pull-left\" href=\"/tatarstan\">
\t\t\t<img class=\"media-object\" src=\"/site/data/images/small/fkMF.jpg\">
\t\t</a>
\t
\t<div class=\"media-body\">

\t\t<p class=\"text-muted\">
\t\t\t<small>03:21 07.16.2021</small>
\t\t</p>

\t\t\t\t\t<h4 class=\"media-heading\">Республика Татарстан</h4>
\t\t
\t\t
\t\t<a href=\"/tatarstan\">Подробнее</a>

\t</div>

\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"media\">
\t\t\t\t\t
\t\t\t<a class=\"pull-left\" href=\"/smolensk-region\">
\t\t\t<img class=\"media-object\" src=\"/site/data/images/small/4nWg.jpg\">
\t\t</a>
\t
\t<div class=\"media-body\">

\t\t<p class=\"text-muted\">
\t\t\t<small>03:13 07.16.2021</small>
\t\t</p>

\t\t\t\t\t<h4 class=\"media-heading\">Смоленская область </h4>
\t\t
\t\t
\t\t<a href=\"/smolensk-region\">Подробнее</a>

\t</div>

\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"media\">
\t\t\t\t\t
\t\t\t<a class=\"pull-left\" href=\"/saratov-region\">
\t\t\t<img class=\"media-object\" src=\"/site/data/images/small/DQYk.jpg\">
\t\t</a>
\t
\t<div class=\"media-body\">

\t\t<p class=\"text-muted\">
\t\t\t<small>03:03 07.16.2021</small>
\t\t</p>

\t\t\t\t\t<h4 class=\"media-heading\">Саратовская область </h4>
\t\t
\t\t
\t\t<a href=\"/saratov-region\">Подробнее</a>

\t</div>

\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"media\">
\t\t\t\t\t
\t\t\t<a class=\"pull-left\" href=\"/saint-petersburg\">
\t\t\t<img class=\"media-object\" src=\"/site/data/images/small/vzSI.jpg\">
\t\t</a>
\t
\t<div class=\"media-body\">

\t\t<p class=\"text-muted\">
\t\t\t<small>09:05 07.15.2021</small>
\t\t</p>

\t\t\t\t\t<h4 class=\"media-heading\">Санкт-Петербург </h4>
\t\t
\t\t
\t\t<a href=\"/saint-petersburg\">Подробнее</a>

\t</div>

\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"media\">
\t\t\t\t\t
\t\t\t<a class=\"pull-left\" href=\"/novgorod-region\">
\t\t\t<img class=\"media-object\" src=\"/site/data/images/small/GPFE.jpg\">
\t\t</a>
\t
\t<div class=\"media-body\">

\t\t<p class=\"text-muted\">
\t\t\t<small>08:45 07.15.2021</small>
\t\t</p>

\t\t\t\t\t<h4 class=\"media-heading\">Новгородская область</h4>
\t\t
\t\t
\t\t<a href=\"/novgorod-region\">Подробнее</a>

\t</div>

\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"media\">
\t\t\t\t\t
\t\t\t<a class=\"pull-left\" href=\"/ryazan-region\">
\t\t\t<img class=\"media-object\" src=\"/site/data/images/small/332z.jpg\">
\t\t</a>
\t
\t<div class=\"media-body\">

\t\t<p class=\"text-muted\">
\t\t\t<small>08:35 07.15.2021</small>
\t\t</p>

\t\t\t\t\t<h4 class=\"media-heading\">Рязанская область </h4>
\t\t
\t\t
\t\t<a href=\"/ryazan-region\">Подробнее</a>

\t</div>

\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"media\">
\t\t\t\t\t
\t\t\t<a class=\"pull-left\" href=\"/rostov-region\">
\t\t\t<img class=\"media-object\" src=\"/site/data/images/small/31kR.jpg\">
\t\t</a>
\t
\t<div class=\"media-body\">

\t\t<p class=\"text-muted\">
\t\t\t<small>08:00 07.15.2021</small>
\t\t</p>

\t\t\t\t\t<h4 class=\"media-heading\">Ростовская область </h4>
\t\t
\t\t
\t\t<a href=\"/rostov-region\">Подробнее</a>

\t</div>

\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"media\">
\t\t\t\t\t
\t
\t<div class=\"media-body\">

\t\t<p class=\"text-muted\">
\t\t\t<small>09:42 07.15.2021</small>
\t\t</p>

\t\t\t\t\t<h4 class=\"media-heading\">Добавить объект</h4>
\t\t
\t\t
\t\t<a href=\"/add-object\">Подробнее</a>

\t</div>

\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"media\">
\t\t\t\t\t
\t\t\t<a class=\"pull-left\" href=\"/pskov-region\">
\t\t\t<img class=\"media-object\" src=\"/site/data/images/small/OoZd.jpg\">
\t\t</a>
\t
\t<div class=\"media-body\">

\t\t<p class=\"text-muted\">
\t\t\t<small>04:02 07.15.2021</small>
\t\t</p>

\t\t\t\t\t<h4 class=\"media-heading\">Псковская область</h4>
\t\t
\t\t
\t\t<a href=\"/pskov-region\">Подробнее</a>

\t</div>

\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"media\">
\t\t\t\t\t
\t\t\t<a class=\"pull-left\" href=\"/perm-region\">
\t\t\t<img class=\"media-object\" src=\"/site/data/images/small/IjWd.jpg\">
\t\t</a>
\t
\t<div class=\"media-body\">

\t\t<p class=\"text-muted\">
\t\t\t<small>03:53 07.15.2021</small>
\t\t</p>

\t\t\t\t\t<h4 class=\"media-heading\">Пермский край</h4>
\t\t
\t\t
\t\t<a href=\"/perm-region\">Подробнее</a>

\t</div>

\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"media\">
\t\t\t\t\t
\t\t\t<a class=\"pull-left\" href=\"/novgorod-region\">
\t\t\t<img class=\"media-object\" src=\"/site/data/images/small/y0AY.jpg\">
\t\t</a>
\t
\t<div class=\"media-body\">

\t\t<p class=\"text-muted\">
\t\t\t<small>03:33 07.15.2021</small>
\t\t</p>

\t\t\t\t\t<h4 class=\"media-heading\">Новгородская область </h4>
\t\t
\t\t
\t\t<a href=\"/novgorod-region\">Подробнее</a>

\t</div>

\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"media\">
\t\t\t\t\t
\t\t\t<a class=\"pull-left\" href=\"/murmansk-region\">
\t\t\t<img class=\"media-object\" src=\"/site/data/images/small/XlWN.jpg\">
\t\t</a>
\t
\t<div class=\"media-body\">

\t\t<p class=\"text-muted\">
\t\t\t<small>03:12 07.15.2021</small>
\t\t</p>

\t\t\t\t\t<h4 class=\"media-heading\">Мурманская область </h4>
\t\t
\t\t
\t\t<a href=\"/murmansk-region\">Подробнее</a>

\t</div>

\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"media\">
\t\t\t\t\t
\t\t\t<a class=\"pull-left\" href=\"/moscow-region\">
\t\t\t<img class=\"media-object\" src=\"/site/data/images/small/jwzt.jpg\">
\t\t</a>
\t
\t<div class=\"media-body\">

\t\t<p class=\"text-muted\">
\t\t\t<small>10:06 07.14.2021</small>
\t\t</p>

\t\t\t\t\t<h4 class=\"media-heading\">Московская область</h4>
\t\t
\t\t
\t\t<a href=\"/moscow-region\">Подробнее</a>

\t</div>

\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"media\">
\t\t\t\t\t
\t\t\t<a class=\"pull-left\" href=\"/lipetsk-region\">
\t\t\t<img class=\"media-object\" src=\"/site/data/images/small/zDO1.jpg\">
\t\t</a>
\t
\t<div class=\"media-body\">

\t\t<p class=\"text-muted\">
\t\t\t<small>09:49 07.14.2021</small>
\t\t</p>

\t\t\t\t\t<h4 class=\"media-heading\">Липецкая область</h4>
\t\t
\t\t
\t\t<a href=\"/lipetsk-region\">Подробнее</a>

\t</div>

\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"media\">
\t\t\t\t\t
\t\t\t<a class=\"pull-left\" href=\"/leningrad-region\">
\t\t\t<img class=\"media-object\" src=\"/site/data/images/small/u5Qd.jpg\">
\t\t</a>
\t
\t<div class=\"media-body\">

\t\t<p class=\"text-muted\">
\t\t\t<small>09:05 07.14.2021</small>
\t\t</p>

\t\t\t\t\t<h4 class=\"media-heading\">Ленинградская область</h4>
\t\t
\t\t
\t\t<a href=\"/leningrad-region\">Подробнее</a>

\t</div>

\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"media\">
\t\t\t\t\t
\t\t\t<a class=\"pull-left\" href=\"/kurgan-region\">
\t\t\t<img class=\"media-object\" src=\"/site/data/images/small/bxpL.jpg\">
\t\t</a>
\t
\t<div class=\"media-body\">

\t\t<p class=\"text-muted\">
\t\t\t<small>08:43 07.14.2021</small>
\t\t</p>

\t\t\t\t\t<h4 class=\"media-heading\">Курганская область</h4>
\t\t
\t\t
\t\t<a href=\"/kurgan-region\">Подробнее</a>

\t</div>

\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"media\">
\t\t\t\t\t
\t\t\t<a class=\"pull-left\" href=\"/crimea\">
\t\t\t<img class=\"media-object\" src=\"/site/data/images/small/1fXX.jpg\">
\t\t</a>
\t
\t<div class=\"media-body\">

\t\t<p class=\"text-muted\">
\t\t\t<small>07:23 07.14.2021</small>
\t\t</p>

\t\t\t\t\t<h4 class=\"media-heading\">Крым</h4>
\t\t
\t\t
\t\t<a href=\"/crimea\">Подробнее</a>

\t</div>

\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"media\">
\t\t\t\t\t
\t\t\t<a class=\"pull-left\" href=\"/krasnodar-territory\">
\t\t\t<img class=\"media-object\" src=\"/site/data/images/small/yhU8.jpg\">
\t\t</a>
\t
\t<div class=\"media-body\">

\t\t<p class=\"text-muted\">
\t\t\t<small>15:39 07.13.2021</small>
\t\t</p>

\t\t\t\t\t<h4 class=\"media-heading\">Краснодарский край</h4>
\t\t
\t\t
\t\t<a href=\"/krasnodar-territory\">Подробнее</a>

\t</div>

\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"media\">
\t\t\t\t\t
\t\t\t<a class=\"pull-left\" href=\"/karelia\">
\t\t\t<img class=\"media-object\" src=\"/site/data/images/small/OaCf.jpg\">
\t\t</a>
\t
\t<div class=\"media-body\">

\t\t<p class=\"text-muted\">
\t\t\t<small>09:46 07.13.2021</small>
\t\t</p>

\t\t\t\t\t<h4 class=\"media-heading\">Карелия</h4>
\t\t
\t\t
\t\t<a href=\"/karelia\">Подробнее</a>

\t</div>

\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"media\">
\t\t\t\t\t
\t\t\t<a class=\"pull-left\" href=\"/kaluga-region\">
\t\t\t<img class=\"media-object\" src=\"/site/data/images/small/NvJk.jpg\">
\t\t</a>
\t
\t<div class=\"media-body\">

\t\t<p class=\"text-muted\">
\t\t\t<small>09:24 07.13.2021</small>
\t\t</p>

\t\t\t\t\t<h4 class=\"media-heading\">Калужская область </h4>
\t\t
\t\t
\t\t<a href=\"/kaluga-region\">Подробнее</a>

\t</div>

\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"media\">
\t\t\t\t\t
\t\t\t<a class=\"pull-left\" href=\"/kaliningrad-region\">
\t\t\t<img class=\"media-object\" src=\"/site/data/images/small/aBao.jpg\">
\t\t</a>
\t
\t<div class=\"media-body\">

\t\t<p class=\"text-muted\">
\t\t\t<small>09:04 07.13.2021</small>
\t\t</p>

\t\t\t\t\t<h4 class=\"media-heading\">Калининградская область </h4>
\t\t
\t\t
\t\t<a href=\"/kaliningrad-region\">Подробнее</a>

\t</div>

\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"media\">
\t\t\t\t\t
\t\t\t<a class=\"pull-left\" href=\"/irkutsk-region\">
\t\t\t<img class=\"media-object\" src=\"/site/data/images/small/kWTy.jpg\">
\t\t</a>
\t
\t<div class=\"media-body\">

\t\t<p class=\"text-muted\">
\t\t\t<small>08:36 07.13.2021</small>
\t\t</p>

\t\t\t\t\t<h4 class=\"media-heading\">Иркутская область</h4>
\t\t
\t\t
\t\t<a href=\"/irkutsk-region\">Подробнее</a>

\t</div>

\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"media\">
\t\t\t\t\t
\t\t\t<a class=\"pull-left\" href=\"/voronezh-region\">
\t\t\t<img class=\"media-object\" src=\"/site/data/images/small/IOzn.jpg\">
\t\t</a>
\t
\t<div class=\"media-body\">

\t\t<p class=\"text-muted\">
\t\t\t<small>08:20 07.13.2021</small>
\t\t</p>

\t\t\t\t\t<h4 class=\"media-heading\">Воронежская область</h4>
\t\t
\t\t
\t\t<a href=\"/voronezh-region\">Подробнее</a>

\t</div>

\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"media\">
\t\t\t\t\t
\t\t\t<a class=\"pull-left\" href=\"/volgograd-region\">
\t\t\t<img class=\"media-object\" src=\"/site/data/images/small/Xxar.jpg\">
\t\t</a>
\t
\t<div class=\"media-body\">

\t\t<p class=\"text-muted\">
\t\t\t<small>08:08 07.13.2021</small>
\t\t</p>

\t\t\t\t\t<h4 class=\"media-heading\">Волгоградская область</h4>
\t\t
\t\t
\t\t<a href=\"/volgograd-region\">Подробнее</a>

\t</div>

\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"media\">
\t\t\t\t\t
\t\t\t<a class=\"pull-left\" href=\"/vladimir-region\">
\t\t\t<img class=\"media-object\" src=\"/site/data/images/small/ppyy.jpg\">
\t\t</a>
\t
\t<div class=\"media-body\">

\t\t<p class=\"text-muted\">
\t\t\t<small>07:47 07.13.2021</small>
\t\t</p>

\t\t\t\t\t<h4 class=\"media-heading\">Владимирская область </h4>
\t\t
\t\t
\t\t<a href=\"/vladimir-region\">Подробнее</a>

\t</div>

\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"media\">
\t\t\t\t\t
\t
\t<div class=\"media-body\">

\t\t<p class=\"text-muted\">
\t\t\t<small>15:18 07.05.2021</small>
\t\t</p>

\t\t\t\t\t<h4 class=\"media-heading\">Услуги партнёрам</h4>
\t\t
\t\t
\t\t<a href=\"/service\">Подробнее</a>

\t</div>

\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"media\">
\t\t\t\t\t
\t
\t<div class=\"media-body\">

\t\t<p class=\"text-muted\">
\t\t\t<small>09:52 07.01.2021</small>
\t\t</p>

\t\t
\t\t
\t\t<a href=\"/tags\">Подробнее</a>

\t</div>

\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"media\">
\t\t\t\t\t
\t\t\t<a class=\"pull-left\" href=\"/penza\">
\t\t\t<img class=\"media-object\" src=\"/site/data/images/small/w6Rc.jpg\">
\t\t</a>
\t
\t<div class=\"media-body\">

\t\t<p class=\"text-muted\">
\t\t\t<small>06:35 07.01.2021</small>
\t\t</p>

\t\t\t\t\t<h4 class=\"media-heading\">Пенза</h4>
\t\t
\t\t
\t\t<a href=\"/penza\">Подробнее</a>

\t</div>

\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"media\">
\t\t\t\t\t
\t\t\t<a class=\"pull-left\" href=\"/kazan\">
\t\t\t<img class=\"media-object\" src=\"/site/data/images/small/HroG.jpg\">
\t\t</a>
\t
\t<div class=\"media-body\">

\t\t<p class=\"text-muted\">
\t\t\t<small>04:36 06.26.2021</small>
\t\t</p>

\t\t\t\t\t<h4 class=\"media-heading\">Казань</h4>
\t\t
\t\t
\t\t<a href=\"/kazan\">Подробнее</a>

\t</div>

\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"media\">
\t\t\t\t\t
\t\t\t<a class=\"pull-left\" href=\"/zhigulevsk\">
\t\t\t<img class=\"media-object\" src=\"/site/data/images/small/REqH.jpg\">
\t\t</a>
\t
\t<div class=\"media-body\">

\t\t<p class=\"text-muted\">
\t\t\t<small>16:54 06.10.2021</small>
\t\t</p>

\t\t\t\t\t<h4 class=\"media-heading\">Жигулевск</h4>
\t\t
\t\t
\t\t<a href=\"/zhigulevsk\">Подробнее</a>

\t</div>

\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"media\">
\t\t\t\t\t
\t\t\t<a class=\"pull-left\" href=\"/tolyatti\">
\t\t\t<img class=\"media-object\" src=\"/site/data/images/small/ChuM.jpg\">
\t\t</a>
\t
\t<div class=\"media-body\">

\t\t<p class=\"text-muted\">
\t\t\t<small>00:24 06.07.2021</small>
\t\t</p>

\t\t\t\t\t<h4 class=\"media-heading\">Тольятти</h4>
\t\t
\t\t
\t\t<a href=\"/tolyatti\">Подробнее</a>

\t</div>

\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"media\">
\t\t\t\t\t
\t\t\t<a class=\"pull-left\" href=\"/sizran\">
\t\t\t<img class=\"media-object\" src=\"/site/data/images/small/VaRw.jpg\">
\t\t</a>
\t
\t<div class=\"media-body\">

\t\t<p class=\"text-muted\">
\t\t\t<small>12:00 06.02.2021</small>
\t\t</p>

\t\t\t\t\t<h4 class=\"media-heading\">Сызрань</h4>
\t\t
\t\t
\t\t<a href=\"/sizran\">Подробнее</a>

\t</div>

\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"media\">
\t\t\t\t\t
\t\t\t<a class=\"pull-left\" href=\"/samarskay-oblast\">
\t\t\t<img class=\"media-object\" src=\"/site/data/images/small/DSvB.jpg\">
\t\t</a>
\t
\t<div class=\"media-body\">

\t\t<p class=\"text-muted\">
\t\t\t<small>11:53 06.02.2021</small>
\t\t</p>

\t\t\t\t\t<h4 class=\"media-heading\">Самарская область </h4>
\t\t
\t\t
\t\t<a href=\"/samarskay-oblast\">Подробнее</a>

\t</div>

\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"media\">
\t\t\t\t\t
\t
\t<div class=\"media-body\">

\t\t<p class=\"text-muted\">
\t\t\t<small>08:26 05.19.2021</small>
\t\t</p>

\t\t\t\t\t<h4 class=\"media-heading\">ВДНХ</h4>
\t\t
\t\t
\t\t<a href=\"/vdnh\">Подробнее</a>

\t</div>

\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"media\">
\t\t\t\t\t
\t\t\t<a class=\"pull-left\" href=\"/samara\">
\t\t\t<img class=\"media-object\" src=\"/site/data/images/small/1DuX.jpg\">
\t\t</a>
\t
\t<div class=\"media-body\">

\t\t<p class=\"text-muted\">
\t\t\t<small>06:06 05.18.2021</small>
\t\t</p>

\t\t\t\t\t<h4 class=\"media-heading\">Самара</h4>
\t\t
\t\t
\t\t<a href=\"/samara\">Подробнее</a>

\t</div>

\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"media\">
\t\t\t\t\t
\t\t\t<a class=\"pull-left\" href=\"/blog\">
\t\t\t<img class=\"media-object\" src=\"/site/data/images/small/FrnW.jpg\">
\t\t</a>
\t
\t<div class=\"media-body\">

\t\t<p class=\"text-muted\">
\t\t\t<small>14:30 05.12.2021</small>
\t\t</p>

\t\t\t\t\t<h4 class=\"media-heading\">Блог</h4>
\t\t
\t\t
\t\t<a href=\"/blog\">Подробнее</a>

\t</div>

\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"media\">
\t\t\t\t\t
\t
\t<div class=\"media-body\">

\t\t<p class=\"text-muted\">
\t\t\t<small>03:52 04.17.2021</small>
\t\t</p>

\t\t
\t\t
\t\t<a href=\"/ajax\">Подробнее</a>

\t</div>

\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"media\">
\t\t\t\t\t
\t
\t<div class=\"media-body\">

\t\t<p class=\"text-muted\">
\t\t\t<small>17:07 05.05.2017</small>
\t\t</p>

\t\t\t\t\t<h4 class=\"media-heading\">О проекте</h4>
\t\t
\t\t
\t\t<a href=\"/about\">Подробнее</a>

\t</div>

\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"media\">
\t\t\t\t\t
\t
\t<div class=\"media-body\">

\t\t<p class=\"text-muted\">
\t\t\t<small>02:48 11.09.2016</small>
\t\t</p>

\t\t\t\t\t<h4 class=\"media-heading\">поиск по каталогу</h4>
\t\t
\t\t
\t\t<a href=\"/searchcat\">Подробнее</a>

\t</div>

\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"media\">
\t\t\t\t\t
\t
\t<div class=\"media-body\">

\t\t<p class=\"text-muted\">
\t\t\t<small>15:36 05.19.2016</small>
\t\t</p>

\t\t\t\t\t<h4 class=\"media-heading\">Результаты поиска</h4>
\t\t
\t\t
\t\t<a href=\"/search\">Подробнее</a>

\t</div>

\t\t\t\t</li>
\t\t\t\t\t\t</ul>

\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "layouts.sitemap";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }
}
/* <div class="module layout-news type-announcement">*/
/* 		<div class="module-body">*/
/* 			<ul class="media-list">*/
/* 									<li class="media">*/
/* 					*/
/* 	*/
/* 	<div class="media-body">*/
/* */
/* 		<p class="text-muted">*/
/* 			<small>10:16 02.17.2024</small>*/
/* 		</p>*/
/* */
/* 					<h4 class="media-heading">sitemap</h4>*/
/* 		*/
/* 		*/
/* 		<a href="/sitemap">Подробнее</a>*/
/* */
/* 	</div>*/
/* */
/* 				</li>*/
/* 							<li class="media">*/
/* 					*/
/* 	*/
/* 	<div class="media-body">*/
/* */
/* 		<p class="text-muted">*/
/* 			<small>16:50 02.12.2024</small>*/
/* 		</p>*/
/* */
/* 					<h4 class="media-heading">Калининград</h4>*/
/* 		*/
/* 		*/
/* 		<a href="/kaliningrad">Подробнее</a>*/
/* */
/* 	</div>*/
/* */
/* 				</li>*/
/* 							<li class="media">*/
/* 					*/
/* 	*/
/* 	<div class="media-body">*/
/* */
/* 		<p class="text-muted">*/
/* 			<small>14:21 02.12.2024</small>*/
/* 		</p>*/
/* */
/* 					<h4 class="media-heading">Ставропольский край</h4>*/
/* 		*/
/* 		*/
/* 		<a href="/stavropol-region">Подробнее</a>*/
/* */
/* 	</div>*/
/* */
/* 				</li>*/
/* 							<li class="media">*/
/* 					*/
/* 	*/
/* 	<div class="media-body">*/
/* */
/* 		<p class="text-muted">*/
/* 			<small>10:50 02.12.2024</small>*/
/* 		</p>*/
/* */
/* 					<h4 class="media-heading">Пятигорск</h4>*/
/* 		*/
/* 		*/
/* 		<a href="/pyatigorsk">Подробнее</a>*/
/* */
/* 	</div>*/
/* */
/* 				</li>*/
/* 							<li class="media">*/
/* 					*/
/* 	*/
/* 	<div class="media-body">*/
/* */
/* 		<p class="text-muted">*/
/* 			<small>13:13 02.09.2024</small>*/
/* 		</p>*/
/* */
/* 					<h4 class="media-heading">Башкирия</h4>*/
/* 		*/
/* 		*/
/* 		<a href="/bashkiria">Подробнее</a>*/
/* */
/* 	</div>*/
/* */
/* 				</li>*/
/* 							<li class="media">*/
/* 					*/
/* 	*/
/* 	<div class="media-body">*/
/* */
/* 		<p class="text-muted">*/
/* 			<small>07:55 02.06.2024</small>*/
/* 		</p>*/
/* */
/* 					<h4 class="media-heading">Ульяновская область</h4>*/
/* 		*/
/* 		*/
/* 		<a href="/ulyanovsk-region">Подробнее</a>*/
/* */
/* 	</div>*/
/* */
/* 				</li>*/
/* 							<li class="media">*/
/* 					*/
/* 	*/
/* 	<div class="media-body">*/
/* */
/* 		<p class="text-muted">*/
/* 			<small>11:02 02.05.2024</small>*/
/* 		</p>*/
/* */
/* 					<h4 class="media-heading">Пензенская область</h4>*/
/* 		*/
/* 		*/
/* 		<a href="/penza-region">Подробнее</a>*/
/* */
/* 	</div>*/
/* */
/* 				</li>*/
/* 							<li class="media">*/
/* 					*/
/* 	*/
/* 	<div class="media-body">*/
/* */
/* 		<p class="text-muted">*/
/* 			<small>13:40 02.03.2024</small>*/
/* 		</p>*/
/* */
/* 					<h4 class="media-heading">Сочи</h4>*/
/* 		*/
/* 		*/
/* 		<a href="/sochi">Подробнее</a>*/
/* */
/* 	</div>*/
/* */
/* 				</li>*/
/* 							<li class="media">*/
/* 					*/
/* 	*/
/* 	<div class="media-body">*/
/* */
/* 		<p class="text-muted">*/
/* 			<small>08:45 01.31.2024</small>*/
/* 		</p>*/
/* */
/* 					<h4 class="media-heading">Ульяновск</h4>*/
/* 		*/
/* 		*/
/* 		<a href="/ulyanovsk">Подробнее</a>*/
/* */
/* 	</div>*/
/* */
/* 				</li>*/
/* 							<li class="media">*/
/* 					*/
/* 	*/
/* 	<div class="media-body">*/
/* */
/* 		<p class="text-muted">*/
/* 			<small>10:16 12.16.2023</small>*/
/* 		</p>*/
/* */
/* 					<h4 class="media-heading">В круиз</h4>*/
/* 		*/
/* 		*/
/* 		<a href="/cruise">Подробнее</a>*/
/* */
/* 	</div>*/
/* */
/* 				</li>*/
/* 							<li class="media">*/
/* 					*/
/* 	*/
/* 	<div class="media-body">*/
/* */
/* 		<p class="text-muted">*/
/* 			<small>09:20 10.20.2023</small>*/
/* 		</p>*/
/* */
/* 					<h4 class="media-heading">Посты</h4>*/
/* 		*/
/* 		*/
/* 		<a href="/posts">Подробнее</a>*/
/* */
/* 	</div>*/
/* */
/* 				</li>*/
/* 							<li class="media">*/
/* 					*/
/* 	*/
/* 	<div class="media-body">*/
/* */
/* 		<p class="text-muted">*/
/* 			<small>12:53 06.07.2023</small>*/
/* 		</p>*/
/* */
/* 		*/
/* 		*/
/* 		<a href="/lk">Подробнее</a>*/
/* */
/* 	</div>*/
/* */
/* 				</li>*/
/* 							<li class="media">*/
/* 					*/
/* 	*/
/* 	<div class="media-body">*/
/* */
/* 		<p class="text-muted">*/
/* 			<small>08:07 05.22.2023</small>*/
/* 		</p>*/
/* */
/* 					<h4 class="media-heading">Москва</h4>*/
/* 		*/
/* 		*/
/* 		<a href="/moskov">Подробнее</a>*/
/* */
/* 	</div>*/
/* */
/* 				</li>*/
/* 							<li class="media">*/
/* 					*/
/* 	*/
/* 	<div class="media-body">*/
/* */
/* 		<p class="text-muted">*/
/* 			<small>09:17 10.26.2022</small>*/
/* 		</p>*/
/* */
/* 					<h4 class="media-heading">Мой маршрут</h4>*/
/* 		*/
/* 		*/
/* 		<a href="/myroute">Подробнее</a>*/
/* */
/* 	</div>*/
/* */
/* 				</li>*/
/* 							<li class="media">*/
/* 					*/
/* 	*/
/* 	<div class="media-body">*/
/* */
/* 		<p class="text-muted">*/
/* 			<small>11:56 08.13.2021</small>*/
/* 		</p>*/
/* */
/* 					<h4 class="media-heading">import</h4>*/
/* 		*/
/* 		*/
/* 		<a href="/import">Подробнее</a>*/
/* */
/* 	</div>*/
/* */
/* 				</li>*/
/* 							<li class="media">*/
/* 					*/
/* 			<a class="pull-left" href="/ufa">*/
/* 			<img class="media-object" src="/site/data/images/small/0AOQ.jpg">*/
/* 		</a>*/
/* 	*/
/* 	<div class="media-body">*/
/* */
/* 		<p class="text-muted">*/
/* 			<small>04:17 08.10.2021</small>*/
/* 		</p>*/
/* */
/* 					<h4 class="media-heading">Уфа</h4>*/
/* 		*/
/* 		*/
/* 		<a href="/ufa">Подробнее</a>*/
/* */
/* 	</div>*/
/* */
/* 				</li>*/
/* 							<li class="media">*/
/* 					*/
/* 			<a class="pull-left" href="/orenburg-region">*/
/* 			<img class="media-object" src="/site/data/images/small/Zyrf.jpg">*/
/* 		</a>*/
/* 	*/
/* 	<div class="media-body">*/
/* */
/* 		<p class="text-muted">*/
/* 			<small>04:26 08.07.2021</small>*/
/* 		</p>*/
/* */
/* 					<h4 class="media-heading">Оренбургская область</h4>*/
/* 		*/
/* 		*/
/* 		<a href="/orenburg-region">Подробнее</a>*/
/* */
/* 	</div>*/
/* */
/* 				</li>*/
/* 							<li class="media">*/
/* 					*/
/* 			<a class="pull-left" href="/nizhny-novgorod">*/
/* 			<img class="media-object" src="/site/data/images/small/hiLD.jpg">*/
/* 		</a>*/
/* 	*/
/* 	<div class="media-body">*/
/* */
/* 		<p class="text-muted">*/
/* 			<small>07:49 08.04.2021</small>*/
/* 		</p>*/
/* */
/* 					<h4 class="media-heading">Нижний Новгород</h4>*/
/* 		*/
/* 		*/
/* 		<a href="/nizhny-novgorod">Подробнее</a>*/
/* */
/* 	</div>*/
/* */
/* 				</li>*/
/* 							<li class="media">*/
/* 					*/
/* 			<a class="pull-left" href="/saratov">*/
/* 			<img class="media-object" src="/site/data/images/small/626g.jpg">*/
/* 		</a>*/
/* 	*/
/* 	<div class="media-body">*/
/* */
/* 		<p class="text-muted">*/
/* 			<small>10:22 07.26.2021</small>*/
/* 		</p>*/
/* */
/* 					<h4 class="media-heading">Саратов</h4>*/
/* 		*/
/* 		*/
/* 		<a href="/saratov">Подробнее</a>*/
/* */
/* 	</div>*/
/* */
/* 				</li>*/
/* 							<li class="media">*/
/* 					*/
/* 			<a class="pull-left" href="/yaroslavl-region">*/
/* 			<img class="media-object" src="/site/data/images/small/gcOp.jpg">*/
/* 		</a>*/
/* 	*/
/* 	<div class="media-body">*/
/* */
/* 		<p class="text-muted">*/
/* 			<small>04:42 07.16.2021</small>*/
/* 		</p>*/
/* */
/* 					<h4 class="media-heading">Ярославская область</h4>*/
/* 		*/
/* 		*/
/* 		<a href="/yaroslavl-region">Подробнее</a>*/
/* */
/* 	</div>*/
/* */
/* 				</li>*/
/* 							<li class="media">*/
/* 					*/
/* 			<a class="pull-left" href="/chelyabinsk-region">*/
/* 			<img class="media-object" src="/site/data/images/small/o5yU.jpg">*/
/* 		</a>*/
/* 	*/
/* 	<div class="media-body">*/
/* */
/* 		<p class="text-muted">*/
/* 			<small>04:27 07.16.2021</small>*/
/* 		</p>*/
/* */
/* 					<h4 class="media-heading">Челябинская область </h4>*/
/* 		*/
/* 		*/
/* 		<a href="/chelyabinsk-region">Подробнее</a>*/
/* */
/* 	</div>*/
/* */
/* 				</li>*/
/* 							<li class="media">*/
/* 					*/
/* 			<a class="pull-left" href="/tver-region">*/
/* 			<img class="media-object" src="/site/data/images/small/jb19.jpg">*/
/* 		</a>*/
/* 	*/
/* 	<div class="media-body">*/
/* */
/* 		<p class="text-muted">*/
/* 			<small>03:33 07.16.2021</small>*/
/* 		</p>*/
/* */
/* 					<h4 class="media-heading">Тверская область</h4>*/
/* 		*/
/* 		*/
/* 		<a href="/tver-region">Подробнее</a>*/
/* */
/* 	</div>*/
/* */
/* 				</li>*/
/* 							<li class="media">*/
/* 					*/
/* 			<a class="pull-left" href="/tatarstan">*/
/* 			<img class="media-object" src="/site/data/images/small/fkMF.jpg">*/
/* 		</a>*/
/* 	*/
/* 	<div class="media-body">*/
/* */
/* 		<p class="text-muted">*/
/* 			<small>03:21 07.16.2021</small>*/
/* 		</p>*/
/* */
/* 					<h4 class="media-heading">Республика Татарстан</h4>*/
/* 		*/
/* 		*/
/* 		<a href="/tatarstan">Подробнее</a>*/
/* */
/* 	</div>*/
/* */
/* 				</li>*/
/* 							<li class="media">*/
/* 					*/
/* 			<a class="pull-left" href="/smolensk-region">*/
/* 			<img class="media-object" src="/site/data/images/small/4nWg.jpg">*/
/* 		</a>*/
/* 	*/
/* 	<div class="media-body">*/
/* */
/* 		<p class="text-muted">*/
/* 			<small>03:13 07.16.2021</small>*/
/* 		</p>*/
/* */
/* 					<h4 class="media-heading">Смоленская область </h4>*/
/* 		*/
/* 		*/
/* 		<a href="/smolensk-region">Подробнее</a>*/
/* */
/* 	</div>*/
/* */
/* 				</li>*/
/* 							<li class="media">*/
/* 					*/
/* 			<a class="pull-left" href="/saratov-region">*/
/* 			<img class="media-object" src="/site/data/images/small/DQYk.jpg">*/
/* 		</a>*/
/* 	*/
/* 	<div class="media-body">*/
/* */
/* 		<p class="text-muted">*/
/* 			<small>03:03 07.16.2021</small>*/
/* 		</p>*/
/* */
/* 					<h4 class="media-heading">Саратовская область </h4>*/
/* 		*/
/* 		*/
/* 		<a href="/saratov-region">Подробнее</a>*/
/* */
/* 	</div>*/
/* */
/* 				</li>*/
/* 							<li class="media">*/
/* 					*/
/* 			<a class="pull-left" href="/saint-petersburg">*/
/* 			<img class="media-object" src="/site/data/images/small/vzSI.jpg">*/
/* 		</a>*/
/* 	*/
/* 	<div class="media-body">*/
/* */
/* 		<p class="text-muted">*/
/* 			<small>09:05 07.15.2021</small>*/
/* 		</p>*/
/* */
/* 					<h4 class="media-heading">Санкт-Петербург </h4>*/
/* 		*/
/* 		*/
/* 		<a href="/saint-petersburg">Подробнее</a>*/
/* */
/* 	</div>*/
/* */
/* 				</li>*/
/* 							<li class="media">*/
/* 					*/
/* 			<a class="pull-left" href="/novgorod-region">*/
/* 			<img class="media-object" src="/site/data/images/small/GPFE.jpg">*/
/* 		</a>*/
/* 	*/
/* 	<div class="media-body">*/
/* */
/* 		<p class="text-muted">*/
/* 			<small>08:45 07.15.2021</small>*/
/* 		</p>*/
/* */
/* 					<h4 class="media-heading">Новгородская область</h4>*/
/* 		*/
/* 		*/
/* 		<a href="/novgorod-region">Подробнее</a>*/
/* */
/* 	</div>*/
/* */
/* 				</li>*/
/* 							<li class="media">*/
/* 					*/
/* 			<a class="pull-left" href="/ryazan-region">*/
/* 			<img class="media-object" src="/site/data/images/small/332z.jpg">*/
/* 		</a>*/
/* 	*/
/* 	<div class="media-body">*/
/* */
/* 		<p class="text-muted">*/
/* 			<small>08:35 07.15.2021</small>*/
/* 		</p>*/
/* */
/* 					<h4 class="media-heading">Рязанская область </h4>*/
/* 		*/
/* 		*/
/* 		<a href="/ryazan-region">Подробнее</a>*/
/* */
/* 	</div>*/
/* */
/* 				</li>*/
/* 							<li class="media">*/
/* 					*/
/* 			<a class="pull-left" href="/rostov-region">*/
/* 			<img class="media-object" src="/site/data/images/small/31kR.jpg">*/
/* 		</a>*/
/* 	*/
/* 	<div class="media-body">*/
/* */
/* 		<p class="text-muted">*/
/* 			<small>08:00 07.15.2021</small>*/
/* 		</p>*/
/* */
/* 					<h4 class="media-heading">Ростовская область </h4>*/
/* 		*/
/* 		*/
/* 		<a href="/rostov-region">Подробнее</a>*/
/* */
/* 	</div>*/
/* */
/* 				</li>*/
/* 							<li class="media">*/
/* 					*/
/* 	*/
/* 	<div class="media-body">*/
/* */
/* 		<p class="text-muted">*/
/* 			<small>09:42 07.15.2021</small>*/
/* 		</p>*/
/* */
/* 					<h4 class="media-heading">Добавить объект</h4>*/
/* 		*/
/* 		*/
/* 		<a href="/add-object">Подробнее</a>*/
/* */
/* 	</div>*/
/* */
/* 				</li>*/
/* 							<li class="media">*/
/* 					*/
/* 			<a class="pull-left" href="/pskov-region">*/
/* 			<img class="media-object" src="/site/data/images/small/OoZd.jpg">*/
/* 		</a>*/
/* 	*/
/* 	<div class="media-body">*/
/* */
/* 		<p class="text-muted">*/
/* 			<small>04:02 07.15.2021</small>*/
/* 		</p>*/
/* */
/* 					<h4 class="media-heading">Псковская область</h4>*/
/* 		*/
/* 		*/
/* 		<a href="/pskov-region">Подробнее</a>*/
/* */
/* 	</div>*/
/* */
/* 				</li>*/
/* 							<li class="media">*/
/* 					*/
/* 			<a class="pull-left" href="/perm-region">*/
/* 			<img class="media-object" src="/site/data/images/small/IjWd.jpg">*/
/* 		</a>*/
/* 	*/
/* 	<div class="media-body">*/
/* */
/* 		<p class="text-muted">*/
/* 			<small>03:53 07.15.2021</small>*/
/* 		</p>*/
/* */
/* 					<h4 class="media-heading">Пермский край</h4>*/
/* 		*/
/* 		*/
/* 		<a href="/perm-region">Подробнее</a>*/
/* */
/* 	</div>*/
/* */
/* 				</li>*/
/* 							<li class="media">*/
/* 					*/
/* 			<a class="pull-left" href="/novgorod-region">*/
/* 			<img class="media-object" src="/site/data/images/small/y0AY.jpg">*/
/* 		</a>*/
/* 	*/
/* 	<div class="media-body">*/
/* */
/* 		<p class="text-muted">*/
/* 			<small>03:33 07.15.2021</small>*/
/* 		</p>*/
/* */
/* 					<h4 class="media-heading">Новгородская область </h4>*/
/* 		*/
/* 		*/
/* 		<a href="/novgorod-region">Подробнее</a>*/
/* */
/* 	</div>*/
/* */
/* 				</li>*/
/* 							<li class="media">*/
/* 					*/
/* 			<a class="pull-left" href="/murmansk-region">*/
/* 			<img class="media-object" src="/site/data/images/small/XlWN.jpg">*/
/* 		</a>*/
/* 	*/
/* 	<div class="media-body">*/
/* */
/* 		<p class="text-muted">*/
/* 			<small>03:12 07.15.2021</small>*/
/* 		</p>*/
/* */
/* 					<h4 class="media-heading">Мурманская область </h4>*/
/* 		*/
/* 		*/
/* 		<a href="/murmansk-region">Подробнее</a>*/
/* */
/* 	</div>*/
/* */
/* 				</li>*/
/* 							<li class="media">*/
/* 					*/
/* 			<a class="pull-left" href="/moscow-region">*/
/* 			<img class="media-object" src="/site/data/images/small/jwzt.jpg">*/
/* 		</a>*/
/* 	*/
/* 	<div class="media-body">*/
/* */
/* 		<p class="text-muted">*/
/* 			<small>10:06 07.14.2021</small>*/
/* 		</p>*/
/* */
/* 					<h4 class="media-heading">Московская область</h4>*/
/* 		*/
/* 		*/
/* 		<a href="/moscow-region">Подробнее</a>*/
/* */
/* 	</div>*/
/* */
/* 				</li>*/
/* 							<li class="media">*/
/* 					*/
/* 			<a class="pull-left" href="/lipetsk-region">*/
/* 			<img class="media-object" src="/site/data/images/small/zDO1.jpg">*/
/* 		</a>*/
/* 	*/
/* 	<div class="media-body">*/
/* */
/* 		<p class="text-muted">*/
/* 			<small>09:49 07.14.2021</small>*/
/* 		</p>*/
/* */
/* 					<h4 class="media-heading">Липецкая область</h4>*/
/* 		*/
/* 		*/
/* 		<a href="/lipetsk-region">Подробнее</a>*/
/* */
/* 	</div>*/
/* */
/* 				</li>*/
/* 							<li class="media">*/
/* 					*/
/* 			<a class="pull-left" href="/leningrad-region">*/
/* 			<img class="media-object" src="/site/data/images/small/u5Qd.jpg">*/
/* 		</a>*/
/* 	*/
/* 	<div class="media-body">*/
/* */
/* 		<p class="text-muted">*/
/* 			<small>09:05 07.14.2021</small>*/
/* 		</p>*/
/* */
/* 					<h4 class="media-heading">Ленинградская область</h4>*/
/* 		*/
/* 		*/
/* 		<a href="/leningrad-region">Подробнее</a>*/
/* */
/* 	</div>*/
/* */
/* 				</li>*/
/* 							<li class="media">*/
/* 					*/
/* 			<a class="pull-left" href="/kurgan-region">*/
/* 			<img class="media-object" src="/site/data/images/small/bxpL.jpg">*/
/* 		</a>*/
/* 	*/
/* 	<div class="media-body">*/
/* */
/* 		<p class="text-muted">*/
/* 			<small>08:43 07.14.2021</small>*/
/* 		</p>*/
/* */
/* 					<h4 class="media-heading">Курганская область</h4>*/
/* 		*/
/* 		*/
/* 		<a href="/kurgan-region">Подробнее</a>*/
/* */
/* 	</div>*/
/* */
/* 				</li>*/
/* 							<li class="media">*/
/* 					*/
/* 			<a class="pull-left" href="/crimea">*/
/* 			<img class="media-object" src="/site/data/images/small/1fXX.jpg">*/
/* 		</a>*/
/* 	*/
/* 	<div class="media-body">*/
/* */
/* 		<p class="text-muted">*/
/* 			<small>07:23 07.14.2021</small>*/
/* 		</p>*/
/* */
/* 					<h4 class="media-heading">Крым</h4>*/
/* 		*/
/* 		*/
/* 		<a href="/crimea">Подробнее</a>*/
/* */
/* 	</div>*/
/* */
/* 				</li>*/
/* 							<li class="media">*/
/* 					*/
/* 			<a class="pull-left" href="/krasnodar-territory">*/
/* 			<img class="media-object" src="/site/data/images/small/yhU8.jpg">*/
/* 		</a>*/
/* 	*/
/* 	<div class="media-body">*/
/* */
/* 		<p class="text-muted">*/
/* 			<small>15:39 07.13.2021</small>*/
/* 		</p>*/
/* */
/* 					<h4 class="media-heading">Краснодарский край</h4>*/
/* 		*/
/* 		*/
/* 		<a href="/krasnodar-territory">Подробнее</a>*/
/* */
/* 	</div>*/
/* */
/* 				</li>*/
/* 							<li class="media">*/
/* 					*/
/* 			<a class="pull-left" href="/karelia">*/
/* 			<img class="media-object" src="/site/data/images/small/OaCf.jpg">*/
/* 		</a>*/
/* 	*/
/* 	<div class="media-body">*/
/* */
/* 		<p class="text-muted">*/
/* 			<small>09:46 07.13.2021</small>*/
/* 		</p>*/
/* */
/* 					<h4 class="media-heading">Карелия</h4>*/
/* 		*/
/* 		*/
/* 		<a href="/karelia">Подробнее</a>*/
/* */
/* 	</div>*/
/* */
/* 				</li>*/
/* 							<li class="media">*/
/* 					*/
/* 			<a class="pull-left" href="/kaluga-region">*/
/* 			<img class="media-object" src="/site/data/images/small/NvJk.jpg">*/
/* 		</a>*/
/* 	*/
/* 	<div class="media-body">*/
/* */
/* 		<p class="text-muted">*/
/* 			<small>09:24 07.13.2021</small>*/
/* 		</p>*/
/* */
/* 					<h4 class="media-heading">Калужская область </h4>*/
/* 		*/
/* 		*/
/* 		<a href="/kaluga-region">Подробнее</a>*/
/* */
/* 	</div>*/
/* */
/* 				</li>*/
/* 							<li class="media">*/
/* 					*/
/* 			<a class="pull-left" href="/kaliningrad-region">*/
/* 			<img class="media-object" src="/site/data/images/small/aBao.jpg">*/
/* 		</a>*/
/* 	*/
/* 	<div class="media-body">*/
/* */
/* 		<p class="text-muted">*/
/* 			<small>09:04 07.13.2021</small>*/
/* 		</p>*/
/* */
/* 					<h4 class="media-heading">Калининградская область </h4>*/
/* 		*/
/* 		*/
/* 		<a href="/kaliningrad-region">Подробнее</a>*/
/* */
/* 	</div>*/
/* */
/* 				</li>*/
/* 							<li class="media">*/
/* 					*/
/* 			<a class="pull-left" href="/irkutsk-region">*/
/* 			<img class="media-object" src="/site/data/images/small/kWTy.jpg">*/
/* 		</a>*/
/* 	*/
/* 	<div class="media-body">*/
/* */
/* 		<p class="text-muted">*/
/* 			<small>08:36 07.13.2021</small>*/
/* 		</p>*/
/* */
/* 					<h4 class="media-heading">Иркутская область</h4>*/
/* 		*/
/* 		*/
/* 		<a href="/irkutsk-region">Подробнее</a>*/
/* */
/* 	</div>*/
/* */
/* 				</li>*/
/* 							<li class="media">*/
/* 					*/
/* 			<a class="pull-left" href="/voronezh-region">*/
/* 			<img class="media-object" src="/site/data/images/small/IOzn.jpg">*/
/* 		</a>*/
/* 	*/
/* 	<div class="media-body">*/
/* */
/* 		<p class="text-muted">*/
/* 			<small>08:20 07.13.2021</small>*/
/* 		</p>*/
/* */
/* 					<h4 class="media-heading">Воронежская область</h4>*/
/* 		*/
/* 		*/
/* 		<a href="/voronezh-region">Подробнее</a>*/
/* */
/* 	</div>*/
/* */
/* 				</li>*/
/* 							<li class="media">*/
/* 					*/
/* 			<a class="pull-left" href="/volgograd-region">*/
/* 			<img class="media-object" src="/site/data/images/small/Xxar.jpg">*/
/* 		</a>*/
/* 	*/
/* 	<div class="media-body">*/
/* */
/* 		<p class="text-muted">*/
/* 			<small>08:08 07.13.2021</small>*/
/* 		</p>*/
/* */
/* 					<h4 class="media-heading">Волгоградская область</h4>*/
/* 		*/
/* 		*/
/* 		<a href="/volgograd-region">Подробнее</a>*/
/* */
/* 	</div>*/
/* */
/* 				</li>*/
/* 							<li class="media">*/
/* 					*/
/* 			<a class="pull-left" href="/vladimir-region">*/
/* 			<img class="media-object" src="/site/data/images/small/ppyy.jpg">*/
/* 		</a>*/
/* 	*/
/* 	<div class="media-body">*/
/* */
/* 		<p class="text-muted">*/
/* 			<small>07:47 07.13.2021</small>*/
/* 		</p>*/
/* */
/* 					<h4 class="media-heading">Владимирская область </h4>*/
/* 		*/
/* 		*/
/* 		<a href="/vladimir-region">Подробнее</a>*/
/* */
/* 	</div>*/
/* */
/* 				</li>*/
/* 							<li class="media">*/
/* 					*/
/* 	*/
/* 	<div class="media-body">*/
/* */
/* 		<p class="text-muted">*/
/* 			<small>15:18 07.05.2021</small>*/
/* 		</p>*/
/* */
/* 					<h4 class="media-heading">Услуги партнёрам</h4>*/
/* 		*/
/* 		*/
/* 		<a href="/service">Подробнее</a>*/
/* */
/* 	</div>*/
/* */
/* 				</li>*/
/* 							<li class="media">*/
/* 					*/
/* 	*/
/* 	<div class="media-body">*/
/* */
/* 		<p class="text-muted">*/
/* 			<small>09:52 07.01.2021</small>*/
/* 		</p>*/
/* */
/* 		*/
/* 		*/
/* 		<a href="/tags">Подробнее</a>*/
/* */
/* 	</div>*/
/* */
/* 				</li>*/
/* 							<li class="media">*/
/* 					*/
/* 			<a class="pull-left" href="/penza">*/
/* 			<img class="media-object" src="/site/data/images/small/w6Rc.jpg">*/
/* 		</a>*/
/* 	*/
/* 	<div class="media-body">*/
/* */
/* 		<p class="text-muted">*/
/* 			<small>06:35 07.01.2021</small>*/
/* 		</p>*/
/* */
/* 					<h4 class="media-heading">Пенза</h4>*/
/* 		*/
/* 		*/
/* 		<a href="/penza">Подробнее</a>*/
/* */
/* 	</div>*/
/* */
/* 				</li>*/
/* 							<li class="media">*/
/* 					*/
/* 			<a class="pull-left" href="/kazan">*/
/* 			<img class="media-object" src="/site/data/images/small/HroG.jpg">*/
/* 		</a>*/
/* 	*/
/* 	<div class="media-body">*/
/* */
/* 		<p class="text-muted">*/
/* 			<small>04:36 06.26.2021</small>*/
/* 		</p>*/
/* */
/* 					<h4 class="media-heading">Казань</h4>*/
/* 		*/
/* 		*/
/* 		<a href="/kazan">Подробнее</a>*/
/* */
/* 	</div>*/
/* */
/* 				</li>*/
/* 							<li class="media">*/
/* 					*/
/* 			<a class="pull-left" href="/zhigulevsk">*/
/* 			<img class="media-object" src="/site/data/images/small/REqH.jpg">*/
/* 		</a>*/
/* 	*/
/* 	<div class="media-body">*/
/* */
/* 		<p class="text-muted">*/
/* 			<small>16:54 06.10.2021</small>*/
/* 		</p>*/
/* */
/* 					<h4 class="media-heading">Жигулевск</h4>*/
/* 		*/
/* 		*/
/* 		<a href="/zhigulevsk">Подробнее</a>*/
/* */
/* 	</div>*/
/* */
/* 				</li>*/
/* 							<li class="media">*/
/* 					*/
/* 			<a class="pull-left" href="/tolyatti">*/
/* 			<img class="media-object" src="/site/data/images/small/ChuM.jpg">*/
/* 		</a>*/
/* 	*/
/* 	<div class="media-body">*/
/* */
/* 		<p class="text-muted">*/
/* 			<small>00:24 06.07.2021</small>*/
/* 		</p>*/
/* */
/* 					<h4 class="media-heading">Тольятти</h4>*/
/* 		*/
/* 		*/
/* 		<a href="/tolyatti">Подробнее</a>*/
/* */
/* 	</div>*/
/* */
/* 				</li>*/
/* 							<li class="media">*/
/* 					*/
/* 			<a class="pull-left" href="/sizran">*/
/* 			<img class="media-object" src="/site/data/images/small/VaRw.jpg">*/
/* 		</a>*/
/* 	*/
/* 	<div class="media-body">*/
/* */
/* 		<p class="text-muted">*/
/* 			<small>12:00 06.02.2021</small>*/
/* 		</p>*/
/* */
/* 					<h4 class="media-heading">Сызрань</h4>*/
/* 		*/
/* 		*/
/* 		<a href="/sizran">Подробнее</a>*/
/* */
/* 	</div>*/
/* */
/* 				</li>*/
/* 							<li class="media">*/
/* 					*/
/* 			<a class="pull-left" href="/samarskay-oblast">*/
/* 			<img class="media-object" src="/site/data/images/small/DSvB.jpg">*/
/* 		</a>*/
/* 	*/
/* 	<div class="media-body">*/
/* */
/* 		<p class="text-muted">*/
/* 			<small>11:53 06.02.2021</small>*/
/* 		</p>*/
/* */
/* 					<h4 class="media-heading">Самарская область </h4>*/
/* 		*/
/* 		*/
/* 		<a href="/samarskay-oblast">Подробнее</a>*/
/* */
/* 	</div>*/
/* */
/* 				</li>*/
/* 							<li class="media">*/
/* 					*/
/* 	*/
/* 	<div class="media-body">*/
/* */
/* 		<p class="text-muted">*/
/* 			<small>08:26 05.19.2021</small>*/
/* 		</p>*/
/* */
/* 					<h4 class="media-heading">ВДНХ</h4>*/
/* 		*/
/* 		*/
/* 		<a href="/vdnh">Подробнее</a>*/
/* */
/* 	</div>*/
/* */
/* 				</li>*/
/* 							<li class="media">*/
/* 					*/
/* 			<a class="pull-left" href="/samara">*/
/* 			<img class="media-object" src="/site/data/images/small/1DuX.jpg">*/
/* 		</a>*/
/* 	*/
/* 	<div class="media-body">*/
/* */
/* 		<p class="text-muted">*/
/* 			<small>06:06 05.18.2021</small>*/
/* 		</p>*/
/* */
/* 					<h4 class="media-heading">Самара</h4>*/
/* 		*/
/* 		*/
/* 		<a href="/samara">Подробнее</a>*/
/* */
/* 	</div>*/
/* */
/* 				</li>*/
/* 							<li class="media">*/
/* 					*/
/* 			<a class="pull-left" href="/blog">*/
/* 			<img class="media-object" src="/site/data/images/small/FrnW.jpg">*/
/* 		</a>*/
/* 	*/
/* 	<div class="media-body">*/
/* */
/* 		<p class="text-muted">*/
/* 			<small>14:30 05.12.2021</small>*/
/* 		</p>*/
/* */
/* 					<h4 class="media-heading">Блог</h4>*/
/* 		*/
/* 		*/
/* 		<a href="/blog">Подробнее</a>*/
/* */
/* 	</div>*/
/* */
/* 				</li>*/
/* 							<li class="media">*/
/* 					*/
/* 	*/
/* 	<div class="media-body">*/
/* */
/* 		<p class="text-muted">*/
/* 			<small>03:52 04.17.2021</small>*/
/* 		</p>*/
/* */
/* 		*/
/* 		*/
/* 		<a href="/ajax">Подробнее</a>*/
/* */
/* 	</div>*/
/* */
/* 				</li>*/
/* 							<li class="media">*/
/* 					*/
/* 	*/
/* 	<div class="media-body">*/
/* */
/* 		<p class="text-muted">*/
/* 			<small>17:07 05.05.2017</small>*/
/* 		</p>*/
/* */
/* 					<h4 class="media-heading">О проекте</h4>*/
/* 		*/
/* 		*/
/* 		<a href="/about">Подробнее</a>*/
/* */
/* 	</div>*/
/* */
/* 				</li>*/
/* 							<li class="media">*/
/* 					*/
/* 	*/
/* 	<div class="media-body">*/
/* */
/* 		<p class="text-muted">*/
/* 			<small>02:48 11.09.2016</small>*/
/* 		</p>*/
/* */
/* 					<h4 class="media-heading">поиск по каталогу</h4>*/
/* 		*/
/* 		*/
/* 		<a href="/searchcat">Подробнее</a>*/
/* */
/* 	</div>*/
/* */
/* 				</li>*/
/* 							<li class="media">*/
/* 					*/
/* 	*/
/* 	<div class="media-body">*/
/* */
/* 		<p class="text-muted">*/
/* 			<small>15:36 05.19.2016</small>*/
/* 		</p>*/
/* */
/* 					<h4 class="media-heading">Результаты поиска</h4>*/
/* 		*/
/* 		*/
/* 		<a href="/search">Подробнее</a>*/
/* */
/* 	</div>*/
/* */
/* 				</li>*/
/* 						</ul>*/
/* */
/* 	</div>*/
/* </div>*/
