<?php

/* layouts.add_object */
class __TwigTemplate_f26b3beb3381241e3b5ded2ec61dedab7f35eac39297bddcfbd3680764451ad5 extends TwigBridge\Twig\Template
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
        $this->loadTemplate("sidebar", "layouts.add_object", 2)->display($context);
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
\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"237\" height=\"60\" viewBox=\"0 0 237 60\" fill=\"none\"><path d=\"M44.1887 7.20227C44.1887 5.8236 45.3064 4.70628 46.6847 4.70628C48.0634 4.70628 49.1807 5.82395 49.1807 7.20227V19.3318C49.1807 22.2447 47.9908 24.8912 46.074 26.8076C44.1573 28.7244 41.5108 29.9143 38.5982 29.9143C35.6853 29.9143 33.0388 28.7244 31.1224 26.8076C29.2056 24.8909 28.0157 22.2444 28.0157 19.3318V7.20227C28.0157 5.8236 29.1334 4.70628 30.5117 4.70628C31.8904 4.70628 33.0077 5.82395 33.0077 7.20227V19.3318C33.0077 20.8664 33.6377 22.2637 34.6521 23.278C35.6664 24.2923 37.0637 24.9223 38.5982 24.9223C40.1328 24.9223 41.5301 24.2923 42.5444 23.278C43.5587 22.2637 44.1887 20.8664 44.1887 19.3318V7.20227Z\" fill=\"#2D2727\"/><path d=\"M65.8014 7.20227C65.8014 5.8236 66.9191 4.70628 68.2974 4.70628C69.6761 4.70628 70.7934 5.82395 70.7934 7.20227V14.8143H82.4485V7.20227C82.4485 5.8236 83.5661 4.70628 84.9445 4.70628C86.3231 4.70628 87.4405 5.82395 87.4405 7.20227V17.3103V27.4183C87.4405 28.797 86.3228 29.9143 84.9445 29.9143C83.5658 29.9143 82.4485 28.7966 82.4485 27.4183V19.8063H70.7934V27.4183C70.7934 28.797 69.6757 29.9143 68.2974 29.9143C66.9187 29.9143 65.8014 28.7966 65.8014 27.4183V7.20227Z\" fill=\"#2D2727\"/><path d=\"M4.99198 27.4187C4.99198 28.7974 3.87431 29.9147 2.49599 29.9147C1.11731 29.9147 0 28.797 0 27.4187V15.2884C0 12.3755 1.18989 9.72937 3.10667 7.81259C5.02309 5.89618 7.6696 4.70628 10.5825 4.70628C13.4957 4.70628 16.1422 5.89618 18.0586 7.81259C19.9754 9.72937 21.1653 12.3755 21.1653 15.2884C21.1653 16.6671 20.0476 17.7844 18.6693 17.7844C17.2907 17.7844 16.1733 16.6667 16.1733 15.2884C16.1733 13.7538 15.5434 12.3566 14.529 11.3426C13.515 10.3286 12.1178 9.69862 10.5832 9.69862C9.04827 9.69862 7.65101 10.3286 6.63667 11.3426C5.62232 12.3569 4.99234 13.7538 4.99234 15.2884V27.4187H4.99198Z\" fill=\"#2D2727\"/><path d=\"M145.02 24.9223C146.399 24.9223 147.516 26.04 147.516 27.4183C147.516 28.797 146.399 29.9143 145.02 29.9143H128.847C127.469 29.9143 126.351 28.7966 126.351 27.4183V7.20227C126.351 5.8236 127.469 4.70628 128.847 4.70628C130.226 4.70628 131.343 5.82395 131.343 7.20227V24.9223H145.02Z\" fill=\"#2D2727\"/><path d=\"M159.36 27.4187C159.36 28.7974 158.242 29.9147 156.864 29.9147C155.485 29.9147 154.368 28.797 154.368 27.4187V7.20264C154.368 5.82396 155.485 4.70665 156.864 4.70665C158.242 4.70665 159.36 5.82432 159.36 7.20264V27.4187Z\" fill=\"#2D2727\"/><path d=\"M168.707 4.70628H174.772C178.241 4.70628 181.392 6.12357 183.675 8.40683C185.958 10.6897 187.376 13.8418 187.376 17.3103C187.376 20.7792 185.959 23.9312 183.675 26.2145C181.392 28.4974 178.24 29.915 174.772 29.915H168.707C167.328 29.915 166.211 28.7974 166.211 27.419V7.20299C166.211 5.82431 167.329 4.707 168.707 4.707V4.70628ZM174.772 9.69862H171.203V24.9227H174.772C176.862 24.9227 178.765 24.0653 180.146 22.6848C181.527 21.304 182.384 19.4012 182.384 17.3107C182.384 15.2198 181.526 13.3173 180.146 11.9365C178.765 10.556 176.862 9.69862 174.772 9.69862Z\" fill=\"#2D2727\"/><path d=\"M57.4817 30.6841C59.2852 30.6841 60.7471 29.2221 60.7471 27.4187C60.7471 25.6153 59.2852 24.1533 57.4817 24.1533C55.6783 24.1533 54.2163 25.6153 54.2163 27.4187C54.2163 29.2221 55.6783 30.6841 57.4817 30.6841Z\" fill=\"#DD0A23\"/><path d=\"M196.284 28.7255C195.67 29.9533 194.177 30.451 192.949 29.8371C191.721 29.2232 191.224 27.7302 191.838 26.5024L201.945 6.28774L201.946 6.28595L201.948 6.28094L201.975 6.2291L201.976 6.22803L202.004 6.17547L202.006 6.17297C202.056 6.08287 202.113 5.99598 202.175 5.91232L202.177 5.90982L202.203 5.87549L202.215 5.86083L202.224 5.84939L202.248 5.81936L202.254 5.81221L202.279 5.78146L202.293 5.76537L202.319 5.73605L202.325 5.72962L202.358 5.69386L202.361 5.68957L202.393 5.65704L202.403 5.64703L202.419 5.63094L202.429 5.62128L202.461 5.58982L202.466 5.58589L202.501 5.55299L202.508 5.54727L202.537 5.52153L202.553 5.50758L202.584 5.48184L202.591 5.47612L202.621 5.45217L202.633 5.44323L202.647 5.43179L202.681 5.40569L202.684 5.40354C202.768 5.34133 202.855 5.28484 202.945 5.23407L202.947 5.23264L203 5.20403L203.001 5.20332L203.053 5.1765L203.058 5.174L203.106 5.1504L203.115 5.14611L203.16 5.12537L203.162 5.12466L203.211 5.10356L203.217 5.1007L203.263 5.08247L203.275 5.07746C203.54 4.97485 203.815 4.92086 204.087 4.91192L204.131 4.91085L204.147 4.91049H204.191L204.207 4.91085L204.251 4.91192C204.523 4.9205 204.797 4.97449 205.063 5.07746L205.075 5.08247L205.12 5.1007L205.127 5.10356L205.176 5.12466L205.177 5.12537L205.223 5.14611L205.231 5.1504L205.28 5.174L205.285 5.1765L205.337 5.20332L205.338 5.20403L205.391 5.23264L205.393 5.23407C205.483 5.28484 205.57 5.34133 205.654 5.40354L205.656 5.40569L205.691 5.43179L205.705 5.44323L205.717 5.45217L205.747 5.47612L205.754 5.48184L205.785 5.50758L205.801 5.52153L205.83 5.54727L205.836 5.55299L205.872 5.58589L205.876 5.58982L205.909 5.62128L205.919 5.63094L205.935 5.64703L205.945 5.65704L205.976 5.68957L205.98 5.69386L206.013 5.72962L206.019 5.73605L206.045 5.76537L206.058 5.78146L206.084 5.81221L206.09 5.81936L206.114 5.84939L206.123 5.86083L206.134 5.87549L206.16 5.90982L206.163 5.91232C206.225 5.99598 206.281 6.08287 206.332 6.17297L206.333 6.17547L206.362 6.22803L206.363 6.2291L206.39 6.28094L206.392 6.28595L206.393 6.28774L216.5 26.5024C217.114 27.7302 216.616 29.2232 215.388 29.8371C214.161 30.451 212.668 29.9533 212.054 28.7255L210.09 24.7987H198.247L196.284 28.7255ZM204.169 12.9559L200.743 19.8067H207.594L204.168 12.9559H204.169Z\" fill=\"#2D2727\"/><path d=\"M106.896 34.6214C109.264 34.6214 119.5 22.7067 119.5 12.6044C119.5 9.13552 118.083 5.98344 115.799 3.70054C113.516 1.41765 110.364 0 106.896 0C103.427 0 100.275 1.41729 97.9917 3.70054C95.7088 5.98344 94.2911 9.13552 94.2911 12.6044C94.2911 22.7067 104.528 34.6214 106.895 34.6214H106.896ZM106.896 4.99234C108.987 4.99234 110.889 5.84972 112.27 7.23018C113.651 8.61065 114.508 10.5135 114.508 12.604C114.508 14.6949 113.651 16.5977 112.27 17.9782C110.89 19.3587 108.987 20.216 106.896 20.216C104.805 20.216 102.902 19.3587 101.522 17.9782C100.141 16.5977 99.2838 14.6949 99.2838 12.604C99.2838 10.5135 100.141 8.61065 101.522 7.23018C102.902 5.84972 104.805 4.99234 106.896 4.99234Z\" fill=\"#DD0A23\"/><path d=\"M99.5877 50.3528C99.0349 50.9796 99.8219 51.9531 100.584 51.4454C100.633 51.4097 100.674 51.3721 100.715 51.3253C101.337 50.6063 102.083 49.6971 102.584 48.8955C103.031 48.2422 102.251 47.3956 101.532 47.875C101.213 48.1182 100.024 49.849 99.5877 50.3528Z\" fill=\"#DD0A23\"/><path d=\"M94.1129 55.0204C93.4086 55.4652 93.8526 56.5729 94.6979 56.3716C94.7715 56.3505 94.8366 56.3244 94.9031 56.2825C95.7537 55.7523 96.6329 55.1477 97.4062 54.5102C97.5367 54.409 97.634 54.2449 97.6662 54.0844C97.7977 53.3926 97.0258 52.9202 96.4684 53.3539C95.6915 53.9585 94.9503 54.4984 94.1129 55.0204Z\" fill=\"#DD0A23\"/><path d=\"M87.5004 57.8239C86.5732 58.0767 86.8761 59.4489 87.835 59.2745C88.8089 59.0471 89.858 58.702 90.7897 58.337C91.567 58.0409 91.3325 56.8224 90.4268 56.905C90.3617 56.914 90.307 56.9276 90.2452 56.9512C89.3635 57.2976 88.4199 57.5983 87.5004 57.8239Z\" fill=\"#DD0A23\"/><path d=\"M80.3427 58.4607C79.9512 58.4436 79.6123 58.7106 79.559 59.1C79.5014 59.523 79.8196 59.9277 80.2501 59.9463C81.2773 60.0124 82.2877 60.0178 83.3157 59.9606C83.6614 59.9456 83.9596 59.6706 84.0086 59.3295C84.0736 58.8533 83.709 58.4532 83.2295 58.4743C82.262 58.5279 81.3102 58.5229 80.3431 58.4607H80.3427Z\" fill=\"#DD0A23\"/><path d=\"M73.3388 56.8686C72.5794 56.5793 71.9759 57.5243 72.5422 58.0903C72.6173 58.1604 72.6938 58.2158 72.7936 58.254C73.7522 58.6334 74.71 58.948 75.7068 59.2105C76.4691 59.4182 77.0029 58.4006 76.3354 57.8904C76.2517 57.8314 76.1791 57.7964 76.0805 57.7692C75.1416 57.5214 74.2416 57.2257 73.3388 56.8682V56.8686Z\" fill=\"#DD0A23\"/><path d=\"M67.1526 53.2131C66.4092 52.635 65.5168 53.6364 66.1439 54.305C66.1654 54.3265 66.1868 54.348 66.2104 54.3662C67.0042 55.0158 67.8315 55.609 68.6964 56.16C69.4186 56.6162 70.2499 55.6751 69.6182 55.0015C69.5774 54.9633 69.5406 54.9325 69.4927 54.9021C68.6775 54.3819 67.9009 53.8256 67.1526 53.2131Z\" fill=\"#DD0A23\"/><path d=\"M62.3215 47.8786C61.8095 47.1302 60.6483 47.7624 61.0319 48.6151C61.0476 48.6466 61.0641 48.6769 61.0837 48.7056C61.6469 49.5547 62.269 50.3774 62.9308 51.1518C63.416 51.7021 64.3055 51.3213 64.2347 50.5773C64.214 50.4318 64.1604 50.2959 64.061 50.1829C63.4371 49.4432 62.8571 48.6852 62.3219 47.8786H62.3215Z\" fill=\"#DD0A23\"/><path d=\"M59.266 41.3606C58.9825 40.4693 57.655 40.7939 57.8237 41.7239C58.0618 42.6653 58.5023 43.7747 58.8892 44.6707C59.2142 45.4294 60.3944 45.1634 60.3108 44.2835C60.3008 44.2095 60.2836 44.1455 60.2539 44.0762C59.8699 43.1848 59.5446 42.2906 59.2657 41.3606H59.266Z\" fill=\"#DD0A23\"/><path d=\"M56.9277 37.2918C57.0478 38.2139 58.4115 38.1424 58.4115 37.1849C58.3786 36.7523 58.3196 36.32 58.3021 35.8863C58.2874 35.3354 58.2731 34.7783 58.2731 34.2248C58.2731 33.3961 57.0568 33.1751 56.8058 34.0536C56.7911 34.1176 56.7843 34.1723 56.7843 34.2399C56.7843 34.774 56.7911 35.325 56.8115 35.8581C56.8308 36.3165 56.8526 36.8506 56.9284 37.2922L56.9277 37.2918Z\" fill=\"#DD0A23\"/><path d=\"M107.013 36.979L107.503 48.3052C107.511 48.51 107.352 48.6834 107.148 48.692C107.034 48.697 106.931 48.6505 106.86 48.5733C105.758 47.3888 104.55 46.5464 103.218 46.0423C101.887 45.5381 100.424 45.369 98.8131 45.5292C98.609 45.5496 98.4274 45.4001 98.4073 45.1963C98.3962 45.0841 98.4366 44.9782 98.5092 44.9028L106.375 36.7351C106.517 36.5871 106.752 36.5828 106.9 36.7248C106.972 36.7941 107.01 36.886 107.014 36.979H107.013Z\" fill=\"#DD0A23\"/><path d=\"M229.02 23.2551V27.6042C229.02 28.9829 227.903 30.1002 226.524 30.1002C225.146 30.1002 224.028 28.9826 224.028 27.6042V23.2551L216.68 8.50945C216.066 7.28165 216.563 5.78857 217.791 5.17467C219.019 4.56077 220.512 5.05847 221.126 6.28626L226.525 17.119L231.924 6.28626C232.538 5.05847 234.031 4.56077 235.258 5.17467C236.486 5.78857 236.984 7.28165 236.37 8.50945L229.021 23.2551H229.02Z\" fill=\"#2D2727\"/></svg>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"hero-top__item\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"hero-search\">
\t\t\t\t\t\t\t<form class=\"hero-search__form\">
\t\t\t\t\t\t\t\t<div class=\"hero-search__input\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"q\" placeholder=\"Найти путешествие мечты...\">
\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"hero-search__submit\">
\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"21\" height=\"20\" viewBox=\"0 0 21 20\" fill=\"none\"><path d=\"M2.37488 2.5511C3.99216 0.885494 6.1319 0.0326109 8.28325 0.000918007C10.4349 -0.0307749 12.5988 0.758095 14.2647 2.37537C15.9306 3.99265 16.7832 6.13239 16.8149 8.28374C16.8444 10.2766 16.1698 12.2802 14.7847 13.8884L20.2622 19.2062C20.3243 19.2664 20.3259 19.3665 20.2657 19.429L19.7573 19.9524C19.6971 20.0145 19.597 20.0161 19.5345 19.9558L14.0561 14.6371C12.4921 16.0579 10.5171 16.7859 8.53209 16.8154C6.38074 16.8471 4.21652 16.0582 2.55061 14.4409C0.885006 12.8237 0.0321226 10.6842 0.000429725 8.53258C-0.0312631 6.38091 0.757607 4.21701 2.37488 2.5511ZM4.26202 5.05671C4.10105 5.25691 3.80797 5.28923 3.60745 5.12857C3.40726 4.9676 3.37494 4.67452 3.53591 4.47401C3.60118 4.39242 3.66613 4.3146 3.73077 4.24117C3.80954 4.15174 3.87763 4.07706 3.93599 4.01713C4.06339 3.88596 4.19707 3.76013 4.33639 3.63964C4.47477 3.52008 4.61912 3.40649 4.76848 3.29855C4.97715 3.14698 5.26898 3.19374 5.42054 3.40241C5.57178 3.61108 5.52534 3.90291 5.31667 4.05447C5.19053 4.14547 5.06721 4.24274 4.94828 4.34535C4.8303 4.44733 4.71608 4.55496 4.60625 4.66793C4.53345 4.74292 4.47414 4.80662 4.42896 4.85809C4.36965 4.92555 4.3138 4.99176 4.26202 5.05671ZM6.79086 3.30796C6.54642 3.38766 6.28315 3.25399 6.20313 3.00954C6.12343 2.76479 6.2571 2.50152 6.50155 2.42181C7.60484 2.06472 8.76272 2.02707 9.85283 2.28061C10.9433 2.53352 11.9656 3.07858 12.7974 3.88596C12.9826 4.06576 12.987 4.36167 12.8072 4.54649C12.6274 4.73163 12.3318 4.73602 12.1466 4.55622C11.4378 3.86808 10.5683 3.40398 9.64197 3.1884L9.64071 3.18715C8.71503 2.97158 7.73035 3.00358 6.79086 3.30765V3.30796ZM8.29706 0.934446C6.38482 0.962687 4.48293 1.72081 3.04514 3.20158C1.60735 4.68236 0.90603 6.6059 0.934271 8.51814C0.962512 10.4304 1.72063 12.3323 3.20141 13.7701C4.68219 15.2078 6.60573 15.9092 8.51828 15.8809C10.4305 15.8524 12.3324 15.0946 13.7702 13.6138C15.208 12.1327 15.9093 10.2095 15.8811 8.29692C15.8528 6.38499 15.0947 4.48279 13.6139 3.04532C12.1328 1.60753 10.2093 0.906204 8.29706 0.934132V0.934446Z\" fill=\"#2B2A29\"/></svg>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"hero-slider\">
\t\t\t\t
\t\t\t\t<div class=\"hero-slide\" style=\"background-image: url(/site/theme/images/add_object_bg.jpg)\">
\t\t\t\t\t<div class=\"hero-slide__wrapper\" style=\"height: 50vh !important;     align-items: flex-end !important;\">
\t\t\t\t\t\t<div class=\"hero-slide__inner\">
\t\t\t\t\t\t\t<div class=\"cont cont--min\">
\t\t\t\t\t\t\t\t<div class=\"hero-slide__title\" style=\"text-align: center;\">
\t\t\t\t\t\t\t\t\tДобавить
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!--div class=\"\" style=\"color:#fff; font-size:30px; position: absolute;right: 270px;margin-top: -100px;\"> Классное место, кемпинг, <br>ресторан, гостиницу,<br> экскурсию, статью</div-->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>

<section class=\"add-forms\">
\t<div class=\"cont\">
\t\t<!--h2 class=\"section__title\">Добавить на Ru.Holiday</h2-->
\t\t<div class=\"add-forms__wrapper\">
\t\t\t<div class=\"add-forms__desc\">
\t\t\t\tРазмещать информацию могут все пользователи. Если вы занимаетесь организацией туристической или культмассовой деятельности на территории России (гид, ведущий мастер-классов и т.д.) доступны дополнительные возможности по работе с контентом.
\t\t\t
\t\t\t\t<!--Выбирайте категорию и добавляйте на сайт статьи, места и события. Вы так же можете сделать это из личного кабинета. Кроме того из личного кабинета вам будет доступно редактирование ранее выложенных материалов.
Напоминаем, что все отправленные на сайт материалы проходят модерацию и появляются в открытом доступе только после их одобрения!-->
\t\t\t</div>
\t\t\t<div class=\"add-forms__items\">
\t\t\t\t<a href=\"#\" class=\"add-forms__item add-modale-trigger\" data-modale-id=\"add-place\">
\t\t\t\t\tДобавить место
\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"19\" height=\"19\" viewBox=\"0 0 19 19\" fill=\"none\">
\t\t\t\t\t\t<path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M10.6925 1.31665C10.6925 0.764366 10.2448 0.31665 9.6925 0.31665C9.14022 0.31665 8.6925 0.764366 8.6925 1.31665V8.43732H1.57227C1.01998 8.43732 0.572266 8.88503 0.572266 9.43732C0.572266 9.9896 1.01998 10.4373 1.57227 10.4373H8.6925V17.558C8.6925 18.1103 9.14022 18.558 9.6925 18.558C10.2448 18.558 10.6925 18.1103 10.6925 17.558V10.4373H17.8136C18.3659 10.4373 18.8136 9.9896 18.8136 9.43732C18.8136 8.88503 18.3659 8.43732 17.8136 8.43732H10.6925V1.31665Z\" fill=\"#E85768\"/>
\t\t\t\t\t</svg>
\t\t\t\t</a>
\t\t\t\t<a href=\"#\" class=\"add-forms__item add-modale-trigger\" data-modale-id=\"add-event\">
\t\t\t\t\tДобавить событие
\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"19\" height=\"19\" viewBox=\"0 0 19 19\" fill=\"none\">
\t\t\t\t\t\t<path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M10.6925 1.31665C10.6925 0.764366 10.2448 0.31665 9.6925 0.31665C9.14022 0.31665 8.6925 0.764366 8.6925 1.31665V8.43732H1.57227C1.01998 8.43732 0.572266 8.88503 0.572266 9.43732C0.572266 9.9896 1.01998 10.4373 1.57227 10.4373H8.6925V17.558C8.6925 18.1103 9.14022 18.558 9.6925 18.558C10.2448 18.558 10.6925 18.1103 10.6925 17.558V10.4373H17.8136C18.3659 10.4373 18.8136 9.9896 18.8136 9.43732C18.8136 8.88503 18.3659 8.43732 17.8136 8.43732H10.6925V1.31665Z\" fill=\"#E85768\"/>
\t\t\t\t\t</svg>
\t\t\t\t</a>
\t\t\t\t<a href=\"#\" class=\"add-forms__item add-modale-trigger\" data-modale-id=\"add-article\">
\t\t\t\t\tДобавить статью
\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"19\" height=\"19\" viewBox=\"0 0 19 19\" fill=\"none\">
\t\t\t\t\t\t<path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M10.6925 1.31665C10.6925 0.764366 10.2448 0.31665 9.6925 0.31665C9.14022 0.31665 8.6925 0.764366 8.6925 1.31665V8.43732H1.57227C1.01998 8.43732 0.572266 8.88503 0.572266 9.43732C0.572266 9.9896 1.01998 10.4373 1.57227 10.4373H8.6925V17.558C8.6925 18.1103 9.14022 18.558 9.6925 18.558C10.2448 18.558 10.6925 18.1103 10.6925 17.558V10.4373H17.8136C18.3659 10.4373 18.8136 9.9896 18.8136 9.43732C18.8136 8.88503 18.3659 8.43732 17.8136 8.43732H10.6925V1.31665Z\" fill=\"#E85768\"/>
\t\t\t\t\t</svg>
\t\t\t\t</a>
\t\t\t\t<a href=\"#\" class=\"add-forms__item add-modale-trigger\" data-modale-id=\"add-restaurant\">
\t\t\t\t\tДобавить ресторан/кафе
\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"19\" height=\"19\" viewBox=\"0 0 19 19\" fill=\"none\">
\t\t\t\t\t\t<path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M10.6925 1.31665C10.6925 0.764366 10.2448 0.31665 9.6925 0.31665C9.14022 0.31665 8.6925 0.764366 8.6925 1.31665V8.43732H1.57227C1.01998 8.43732 0.572266 8.88503 0.572266 9.43732C0.572266 9.9896 1.01998 10.4373 1.57227 10.4373H8.6925V17.558C8.6925 18.1103 9.14022 18.558 9.6925 18.558C10.2448 18.558 10.6925 18.1103 10.6925 17.558V10.4373H17.8136C18.3659 10.4373 18.8136 9.9896 18.8136 9.43732C18.8136 8.88503 18.3659 8.43732 17.8136 8.43732H10.6925V1.31665Z\" fill=\"#E85768\"/>
\t\t\t\t\t</svg>
\t\t\t\t</a>
\t\t\t\t
\t\t\t</div>
\t\t\t<div class=\"add-forms__items\">
\t\t\t\t<a href=\"#\" class=\"add-forms__item add-modale-trigger\" data-modale-id=\"add-hotel\">
\t\t\t\t\tДобавить гостиницу/отель
\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"19\" height=\"19\" viewBox=\"0 0 19 19\" fill=\"none\">
\t\t\t\t\t\t<path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M10.6925 1.31665C10.6925 0.764366 10.2448 0.31665 9.6925 0.31665C9.14022 0.31665 8.6925 0.764366 8.6925 1.31665V8.43732H1.57227C1.01998 8.43732 0.572266 8.88503 0.572266 9.43732C0.572266 9.9896 1.01998 10.4373 1.57227 10.4373H8.6925V17.558C8.6925 18.1103 9.14022 18.558 9.6925 18.558C10.2448 18.558 10.6925 18.1103 10.6925 17.558V10.4373H17.8136C18.3659 10.4373 18.8136 9.9896 18.8136 9.43732C18.8136 8.88503 18.3659 8.43732 17.8136 8.43732H10.6925V1.31665Z\" fill=\"#E85768\"/>
\t\t\t\t\t</svg>
\t\t\t\t</a>
\t\t\t\t<a href=\"#\" class=\"add-forms__item add-modale-trigger\" data-modale-id=\"\">
\t\t\t\t\tДобавить Кемпинг
\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"19\" height=\"19\" viewBox=\"0 0 19 19\" fill=\"none\">
\t\t\t\t\t\t<path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M10.6925 1.31665C10.6925 0.764366 10.2448 0.31665 9.6925 0.31665C9.14022 0.31665 8.6925 0.764366 8.6925 1.31665V8.43732H1.57227C1.01998 8.43732 0.572266 8.88503 0.572266 9.43732C0.572266 9.9896 1.01998 10.4373 1.57227 10.4373H8.6925V17.558C8.6925 18.1103 9.14022 18.558 9.6925 18.558C10.2448 18.558 10.6925 18.1103 10.6925 17.558V10.4373H17.8136C18.3659 10.4373 18.8136 9.9896 18.8136 9.43732C18.8136 8.88503 18.3659 8.43732 17.8136 8.43732H10.6925V1.31665Z\" fill=\"#E85768\"/>
\t\t\t\t\t</svg>
\t\t\t\t</a>
\t\t\t\t<a href=\"#\" class=\"add-forms__item add-modale-trigger\" data-modale-id=\"\">
\t\t\t\t\tДобавить экскурсию
\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"19\" height=\"19\" viewBox=\"0 0 19 19\" fill=\"none\">
\t\t\t\t\t\t<path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M10.6925 1.31665C10.6925 0.764366 10.2448 0.31665 9.6925 0.31665C9.14022 0.31665 8.6925 0.764366 8.6925 1.31665V8.43732H1.57227C1.01998 8.43732 0.572266 8.88503 0.572266 9.43732C0.572266 9.9896 1.01998 10.4373 1.57227 10.4373H8.6925V17.558C8.6925 18.1103 9.14022 18.558 9.6925 18.558C10.2448 18.558 10.6925 18.1103 10.6925 17.558V10.4373H17.8136C18.3659 10.4373 18.8136 9.9896 18.8136 9.43732C18.8136 8.88503 18.3659 8.43732 17.8136 8.43732H10.6925V1.31665Z\" fill=\"#E85768\"/>
\t\t\t\t\t</svg>
\t\t\t\t</a>
\t\t\t\t<a href=\"#\" class=\"add-forms__item add-modale-trigger\" data-modale-id=\"\">
\t\t\t\t\tДобавить маршрут
\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"19\" height=\"19\" viewBox=\"0 0 19 19\" fill=\"none\">
\t\t\t\t\t\t<path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M10.6925 1.31665C10.6925 0.764366 10.2448 0.31665 9.6925 0.31665C9.14022 0.31665 8.6925 0.764366 8.6925 1.31665V8.43732H1.57227C1.01998 8.43732 0.572266 8.88503 0.572266 9.43732C0.572266 9.9896 1.01998 10.4373 1.57227 10.4373H8.6925V17.558C8.6925 18.1103 9.14022 18.558 9.6925 18.558C10.2448 18.558 10.6925 18.1103 10.6925 17.558V10.4373H17.8136C18.3659 10.4373 18.8136 9.9896 18.8136 9.43732C18.8136 8.88503 18.3659 8.43732 17.8136 8.43732H10.6925V1.31665Z\" fill=\"#E85768\"/>
\t\t\t\t\t</svg>
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
\t\t\t\t
<section class=\"forus\">
\t<div class=\"cont\">
\t\t<!--h2 class=\"section__title\">Добавить</h2-->
\t\t<div class=\"forus__wrapper\">
\t\t\t<div class=\"foru\">
\t\t\t\t<div class=\"foru__item\">
\t\t\t\t\t<div class=\"foru__content\">
\t\t\t\t\t\t<div class=\"foru__title\">Место / Ресторан / Гостиница / Кемпинг</div>
\t\t\t\t\t\t<div class=\"foru__desc\">
\t\t\t\t\t\t\tНа сайте можно разместить информацию о любых локациях, которая может быть интересна. Это могут быть рестораны, кафе, гостиница, места аренды туристического снаряжения, достопримечательности, культурные, исторические и природные памятники, зоны отдыха, площадки для кемпинга и т.д. 
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"foru__action\">
\t\t\t\t\t\t\t<!--a href=\"#\" class=\"link link--add\">
\t\t\t\t\t\t\t\tДОБАВИТЬ МЕСТО
\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"19\" height=\"19\" viewBox=\"0 0 19 19\" fill=\"none\">
\t\t\t\t\t\t\t\t\t<path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M10.6925 1.31665C10.6925 0.764366 10.2448 0.31665 9.6925 0.31665C9.14022 0.31665 8.6925 0.764366 8.6925 1.31665V8.43732H1.57227C1.01998 8.43732 0.572266 8.88503 0.572266 9.43732C0.572266 9.9896 1.01998 10.4373 1.57227 10.4373H8.6925V17.558C8.6925 18.1103 9.14022 18.558 9.6925 18.558C10.2448 18.558 10.6925 18.1103 10.6925 17.558V10.4373H17.8136C18.3659 10.4373 18.8136 9.9896 18.8136 9.43732C18.8136 8.88503 18.3659 8.43732 17.8136 8.43732H10.6925V1.31665Z\" fill=\"#E85768\"/>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</a-->
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"foru__item\">
\t\t\t\t\t<div class=\"foru__img\">
\t\t\t\t\t\t<img src=\"/site/theme/images/add_object1.png\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"foru\">
\t\t\t\t<div class=\"foru__item\">
\t\t\t\t\t<div class=\"foru__content\">
\t\t\t\t\t\t<div class=\"foru__title\">События / Мероприятия</div>
\t\t\t\t\t\t<div class=\"foru__desc\">
\t\t\t\t\t\tРассказывайте о событиях, которые могут заинтересовать пользователей сайта. Это могут быть как разовые мероприятия, например, музыкальный вечер или выставка, так и регулярные, например, ежегодные фестивали.<br><br> 
\t\t\t\t\t\t\t<span class=\"hl-text hl-text--acc\">СКОРО:</span> Для удобства пользователей ближайшие события будут отображаться в ленте новостей.
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"foru__action\">
\t\t\t\t\t\t\t<!--a href=\"#\" class=\"link link--add\">
\t\t\t\t\t\t\t\tДОБАВИТЬ СОБЫТИЕ
\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"19\" height=\"19\" viewBox=\"0 0 19 19\" fill=\"none\">
\t\t\t\t\t\t\t\t\t<path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M10.6925 1.31665C10.6925 0.764366 10.2448 0.31665 9.6925 0.31665C9.14022 0.31665 8.6925 0.764366 8.6925 1.31665V8.43732H1.57227C1.01998 8.43732 0.572266 8.88503 0.572266 9.43732C0.572266 9.9896 1.01998 10.4373 1.57227 10.4373H8.6925V17.558C8.6925 18.1103 9.14022 18.558 9.6925 18.558C10.2448 18.558 10.6925 18.1103 10.6925 17.558V10.4373H17.8136C18.3659 10.4373 18.8136 9.9896 18.8136 9.43732C18.8136 8.88503 18.3659 8.43732 17.8136 8.43732H10.6925V1.31665Z\" fill=\"#E85768\"/>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</a-->
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"foru__item\">
\t\t\t\t\t<div class=\"foru__img\">
\t\t\t\t\t\t<img src=\"/site/theme/images/add_object2.png\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"foru\">
\t\t\t\t<div class=\"foru__item\">
\t\t\t\t\t<div class=\"foru__content\">
\t\t\t\t\t\t<div class=\"foru__title\">Статьи / Обзоры</div>
\t\t\t\t\t\t<div class=\"foru__desc\">
\t\t\t\t\t\t\tБлог - это зона самовыражения, где любой пользователь может рассказать о своих путешествиях, поделиться полезным опытом с другими, оставить развернутый отзыв о маршруте или событии. 
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"foru__action\">
\t\t\t\t\t\t\t<!--a href=\"#\" class=\"link link--add\">
\t\t\t\t\t\t\t\tДОБАВИТЬ СТАТЬЮ
\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"19\" height=\"19\" viewBox=\"0 0 19 19\" fill=\"none\">
\t\t\t\t\t\t\t\t\t<path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M10.6925 1.31665C10.6925 0.764366 10.2448 0.31665 9.6925 0.31665C9.14022 0.31665 8.6925 0.764366 8.6925 1.31665V8.43732H1.57227C1.01998 8.43732 0.572266 8.88503 0.572266 9.43732C0.572266 9.9896 1.01998 10.4373 1.57227 10.4373H8.6925V17.558C8.6925 18.1103 9.14022 18.558 9.6925 18.558C10.2448 18.558 10.6925 18.1103 10.6925 17.558V10.4373H17.8136C18.3659 10.4373 18.8136 9.9896 18.8136 9.43732C18.8136 8.88503 18.3659 8.43732 17.8136 8.43732H10.6925V1.31665Z\" fill=\"#E85768\"/>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</a-->
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"foru__item\">
\t\t\t\t\t<div class=\"foru__img\">
\t\t\t\t\t\t<img src=\"/site/theme/images/add_object3.png\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"foru\">
\t\t\t\t<div class=\"foru__item\">
\t\t\t\t\t<div class=\"foru__content\">
\t\t\t\t\t\t<div class=\"foru__title\"><span class=\"hl-text hl-text--acc\">скоро!</span> маршруты</div>
\t\t\t\t\t\t<div class=\"foru__desc\">
\t\t\t\t\t\t\tМаршрут в нашем случае это набор мест и/или событий, сгруппированных в соответствии с некоей траекторией движения, где есть начальная, конечная и промежуточные точки.  В маршруте учитывается время в пути, уровень сложности маршрута (одни подойдут для семей с детьми, а другие - только для подготовленных спортсменов), а так же способ передвижения (пеший, велосипедный маршрут и т.д.).
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"foru__action\">
\t\t\t\t\t\t\t<!--a href=\"#\" class=\"link link--add link--disabled\">
\t\t\t\t\t\t\t\tДОБАВИТЬ МАРШРУТ
\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"19\" height=\"19\" viewBox=\"0 0 19 19\" fill=\"none\">
\t\t\t\t\t\t\t\t\t<path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M10.6925 1.31665C10.6925 0.764366 10.2448 0.31665 9.6925 0.31665C9.14022 0.31665 8.6925 0.764366 8.6925 1.31665V8.43732H1.57227C1.01998 8.43732 0.572266 8.88503 0.572266 9.43732C0.572266 9.9896 1.01998 10.4373 1.57227 10.4373H8.6925V17.558C8.6925 18.1103 9.14022 18.558 9.6925 18.558C10.2448 18.558 10.6925 18.1103 10.6925 17.558V10.4373H17.8136C18.3659 10.4373 18.8136 9.9896 18.8136 9.43732C18.8136 8.88503 18.3659 8.43732 17.8136 8.43732H10.6925V1.31665Z\" fill=\"#E85768\"/>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</a-->
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"foru__item\">
\t\t\t\t\t<div class=\"foru__img\">
\t\t\t\t\t\t<img src=\"/site/theme/images/add_object4.png\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>\t\t\t\t\t\t
\t\t\t\t\t\t
<!--section class=\"add-warn\">
\t<div class=\"cont\">
\t\t<div class=\"add-warn__wrapper\">
\t\t\t<h2 class=\"section__title add-warn__title\">ОБРАТИТЕ ВНИМАНИЕ!</h2>
\t\t\t<div class=\"add-warn__text\">
\t\t\t\tВсе, добавляемые на сайт материалы, перед размещением проходят модерацию и могут быть отклонены в случае нарушения <a href=\"/policy\">правил сайта</a> и/или законодательства Российской Федерации!
\t\t\t</div>
\t\t</div>
\t</div>
</section-->

<!--section class=\"add-cond\">
\t<div class=\"cont\">
\t\t<h2 class=\"section__title add-warn__title\">УСЛОВИЯ РАЗМЕЩЕНИЯ МАТЕРИАЛОВ</h2>
\t\t<div class=\"section__subtitle\">МЕСТА. СОБЫТИЯ</div>
\t\t<div class=\"add-cond__wrapper\">
\t\t\t<div class=\"add-cond__desc\">
\t\t\t\tРазмещать на сайте информацию о местах и событиях, а также создавать маршруты могут все пользователи без исключения. Если вы занимаетесь организацией туристической или культмассовой деятельности на территории России (гид, ведущий мастер-классов и т.д.) доступны дополнительные возможности по работе с контентом.
\t\t\t</div>
\t\t\t<div class=\"add-cond__items\">
\t\t\t\t<div class=\"add-cond__item\">
\t\t\t\t\t<div class=\"add-cond__item-title\">БАЗОВЫЕ УСЛОВИЯ</div>
\t\t\t\t\t<div class=\"add-cond__item-subtitle\">БЕСПЛАТНО</div>
\t\t\t\t\t<div class=\"add-cond__item-blocks\">
\t\t\t\t\t\t<div class=\"add-cond__item-block\">
\t\t\t\t\t\t\t<div class=\"add-cond__item-block-title\">Места:</div>
\t\t\t\t\t\t\t<ul class=\"add-cond__item-block-list\">
\t\t\t\t\t\t\t\t<li>Сопроводительный текст до 1 500 знаков</li>
\t\t\t\t\t\t\t\t<li>5 фото в галерее</li>
\t\t\t\t\t\t\t\t<li>Нельзя прикреплять дополнительные файлы к материалам</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"add-cond__item-block\">
\t\t\t\t\t\t\t<div class=\"add-cond__item-block-title\">События:</div>
\t\t\t\t\t\t\t<ul class=\"add-cond__item-block-list\">
\t\t\t\t\t\t\t\t<li>Сопроводительный текст до 1 500 знаков</li>
\t\t\t\t\t\t\t\t<li>5 фото в галерее</li>
\t\t\t\t\t\t\t\t<li>Нельзя прикреплять дополнительные файлы к материалам</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"add-cond__item\">
\t\t\t\t\t<div class=\"add-cond__item-title\">СПЕЦИАЛЬНЫЕ УСЛОВИЯ</div>
\t\t\t\t\t<div class=\"add-cond__item-subtitle\">ЗА ДОПОЛНИТЕЛЬНУЮ ПЛАТУ</div>
\t\t\t\t\t<div class=\"add-cond__item-blocks\">
\t\t\t\t\t\t<div class=\"add-cond__item-block\">
\t\t\t\t\t\t\t<div class=\"add-cond__item-block-title\">Места:</div>
\t\t\t\t\t\t\t<ul class=\"add-cond__item-block-list\">
\t\t\t\t\t\t\t\t<li>Размер сопроводительного текста не ограничен</li>
\t\t\t\t\t\t\t\t<li>Неограниченное количество фото в галерее</li>
\t\t\t\t\t\t\t\t<li>Можно прикреплять дополнительные файлы (например, меню ресторана в PDF)</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"add-cond__item-block\">
\t\t\t\t\t\t\t<div class=\"add-cond__item-block-title\">События:</div>
\t\t\t\t\t\t\t<ul class=\"add-cond__item-block-list\">
\t\t\t\t\t\t\t\t<li>Размер сопроводительного текста не ограничен</li>
\t\t\t\t\t\t\t\t<li>Неограниченное количество фото в галерее</li>
\t\t\t\t\t\t\t\t<li>Можно прикреплять дополнительные файлы (например, меню ресторана в PDF)</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"add-cond__bottom-desc\">
\t\t\t\tТак же для предпринимателей в сфере туризма доступны дополнительные услуги, которые помогут сделать страницы организаций (гостиниц, хостелов, ресторанов, кафе, туристических агентств, кемпингов, гидов и т.д.) максимально наполненными, информативными и привлекательными.
\t\t\t</div>
\t\t\t<div class=\"add-cond__bottom-action\">
\t\t\t\t<a href=\"/service\" class=\"alink alink--red\">К СПИСКУ УСЛУГ</a>
\t\t\t</div>
\t\t</div>
\t</div>
</section-->



<div class=\"add-modale\" data-modale-id=\"add-place\">
\t<div class=\"add-modale__closer\"></div>
\t<div class=\"add-modale__wrapper\">
\t\t<div class=\"cont\">
\t\t\t<div class=\"add-modale__inner\">
\t\t\t\t<div class=\"add-modale__title\">Добавить место</div>
\t\t\t\t<div class=\"add-modale__form\">
\t\t\t\t\t<form data-action=\"3\" class=\"js-superform\">
\t\t\t\t\t\t<div class=\"
\t\t\t\t\t\t\tform-group
\t\t\t\t\t\t\ttype_string
\t\t\t\t\t\t\tfield_name
\t\t\t\t\t\t\trequired
\t\t\t\t\t\t\t\">
\t\t\t\t\t\t\t<input class=\"form-control\" name=\"field_name\" placeholder=\"Имя\" required=\"\" type=\"text\" value=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"
\t\t\t\t\t\t\tform-group
\t\t\t\t\t\t\ttype_email
\t\t\t\t\t\t\tfield_email
\t\t\t\t\t\t\trequired
\t\t\t\t\t\t\t\">
\t\t\t\t\t\t\t<input class=\"form-control\" name=\"field_email\" placeholder=\"E-mail\" required=\"\" type=\"email\" value=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"
\t\t\t\t\t\t\tform-group
\t\t\t\t\t\t\ttype_string
\t\t\t\t\t\t\tfield_phone
\t\t\t\t\t\t\t\">
\t\t\t\t\t\t\t<input class=\"form-control\" name=\"field_phone\" placeholder=\"Телефон\" type=\"text\" value=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"
\t\t\t\t\t\t\tform-group
\t\t\t\t\t\t\ttype_string
\t\t\t\t\t\t\tfield_obj_name
\t\t\t\t\t\t\trequired
\t\t\t\t\t\t\t\">
\t\t\t\t\t\t\t<input class=\"form-control\" name=\"field_obj_name\" placeholder=\"Название места\" required=\"\" type=\"text\" value=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"
\t\t\t\t\t\t\tform-group
\t\t\t\t\t\t\ttype_string
\t\t\t\t\t\t\tfield_obj_address
\t\t\t\t\t\t\t\">
\t\t\t\t\t\t\t<input class=\"form-control\" name=\"field_obj_address\" placeholder=\"Адрес места\" type=\"text\" value=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"
\t\t\t\t\t\t\tform-group
\t\t\t\t\t\t\ttype_string
\t\t\t\t\t\t\tfield_obj_site
\t\t\t\t\t\t\t\">
\t\t\t\t\t\t\t<input class=\"form-control\" name=\"field_obj_site\" placeholder=\"Ссылка на сайт (если есть)\" type=\"text\" value=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"
\t\t\t\t\t\t\tform-group
\t\t\t\t\t\t\ttype_text
\t\t\t\t\t\t\tfield_text
\t\t\t\t\t\t\t\">
\t\t\t\t\t\t\t<textarea class=\"form-control\" name=\"field_text\" placeholder=\"Описание\" rows=\"4\"></textarea>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"
\t\t\t\t\t\t\tform-group
\t\t\t\t\t\t\ttype_checkbox
\t\t\t\t\t\t\tfield_policy
\t\t\t\t\t\t\trequired
\t\t\t\t\t\t\t\">
\t\t\t\t\t\t\t<input name=\"field_policy\" type=\"hidden\" value=\"\">
\t\t\t\t\t\t\t<div class=\"checkbox checkbox-switcher\">
\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t<input name=\"field_policy\" type=\"checkbox\" value=\"1\" required=\"\">
\t\t\t\t\t\t\t\t\t<div class=\"checkbox-switcher__switch\"></div>
\t\t\t\t\t\t\t\t\tя принимаю <a href=\"/policy\">условия обработки персональных данных</a>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<input class=\"btn btn-default\" type=\"submit\" value=\"Отправить\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

<div class=\"add-modale\" data-modale-id=\"add-event\">
\t<div class=\"add-modale__closer\"></div>
\t<div class=\"add-modale__wrapper\">
\t\t<div class=\"cont\">
\t\t\t<div class=\"add-modale__inner\">
\t\t\t\t<div class=\"add-modale__title\">Добавить событие</div>
\t\t\t\t<div class=\"add-modale__form\">
\t\t\t\t\t<form data-action=\"3\" class=\"js-superform\">
\t\t\t\t\t\t<div class=\"
\t\t\t\t\t\t\tform-group
\t\t\t\t\t\t\ttype_string
\t\t\t\t\t\t\tfield_name
\t\t\t\t\t\t\trequired
\t\t\t\t\t\t\t\">
\t\t\t\t\t\t\t<input class=\"form-control\" name=\"field_name\" placeholder=\"Имя\" required=\"\" type=\"text\" value=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"
\t\t\t\t\t\t\tform-group
\t\t\t\t\t\t\ttype_email
\t\t\t\t\t\t\tfield_email
\t\t\t\t\t\t\trequired
\t\t\t\t\t\t\t\">
\t\t\t\t\t\t\t<input class=\"form-control\" name=\"field_email\" placeholder=\"E-mail\" required=\"\" type=\"email\" value=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"
\t\t\t\t\t\t\tform-group
\t\t\t\t\t\t\ttype_string
\t\t\t\t\t\t\tfield_phone
\t\t\t\t\t\t\t\">
\t\t\t\t\t\t\t<input class=\"form-control\" name=\"field_phone\" placeholder=\"Телефон\" type=\"text\" value=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"
\t\t\t\t\t\t\tform-group
\t\t\t\t\t\t\ttype_string
\t\t\t\t\t\t\tfield_obj_name
\t\t\t\t\t\t\trequired
\t\t\t\t\t\t\t\">
\t\t\t\t\t\t\t<input class=\"form-control\" name=\"field_obj_name\" placeholder=\"Название места\" required=\"\" type=\"text\" value=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"
\t\t\t\t\t\t\tform-group
\t\t\t\t\t\t\ttype_string
\t\t\t\t\t\t\tfield_obj_address
\t\t\t\t\t\t\t\">
\t\t\t\t\t\t\t<input class=\"form-control\" name=\"field_obj_address\" placeholder=\"Адрес места\" type=\"text\" value=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"
\t\t\t\t\t\t\tform-group
\t\t\t\t\t\t\ttype_string
\t\t\t\t\t\t\tfield_obj_site
\t\t\t\t\t\t\t\">
\t\t\t\t\t\t\t<input class=\"form-control\" name=\"field_obj_site\" placeholder=\"Ссылка на сайт (если есть)\" type=\"text\" value=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"
\t\t\t\t\t\t\tform-group
\t\t\t\t\t\t\ttype_text
\t\t\t\t\t\t\tfield_text
\t\t\t\t\t\t\t\">
\t\t\t\t\t\t\t<textarea class=\"form-control\" name=\"field_text\" placeholder=\"Описание\" rows=\"4\"></textarea>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"
\t\t\t\t\t\t\tform-group
\t\t\t\t\t\t\ttype_checkbox
\t\t\t\t\t\t\tfield_policy
\t\t\t\t\t\t\trequired
\t\t\t\t\t\t\t\">
\t\t\t\t\t\t\t<input name=\"field_policy\" type=\"hidden\" value=\"\">
\t\t\t\t\t\t\t<div class=\"checkbox checkbox-switcher\">
\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t<input name=\"field_policy\" type=\"checkbox\" value=\"1\" required=\"\">
\t\t\t\t\t\t\t\t\t<div class=\"checkbox-switcher__switch\"></div>
\t\t\t\t\t\t\t\t\tя принимаю <a href=\"/policy\">условия обработки персональных данных</a>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<input class=\"btn btn-default\" type=\"submit\" value=\"Отправить\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

<div class=\"add-modale\" data-modale-id=\"add-article\">
\t<div class=\"add-modale__closer\"></div>
\t<div class=\"add-modale__wrapper\">
\t\t<div class=\"cont\">
\t\t\t<div class=\"add-modale__inner\">
\t\t\t\t<div class=\"add-modale__title\">Добавить статью</div>
\t\t\t\t<div class=\"add-modale__form\">
\t\t\t\t\t<form data-action=\"3\" class=\"js-superform\">
\t\t\t\t\t\t<div class=\"
\t\t\t\t\t\t\tform-group
\t\t\t\t\t\t\ttype_string
\t\t\t\t\t\t\tfield_name
\t\t\t\t\t\t\trequired
\t\t\t\t\t\t\t\">
\t\t\t\t\t\t\t<input class=\"form-control\" name=\"field_name\" placeholder=\"Имя\" required=\"\" type=\"text\" value=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"
\t\t\t\t\t\t\tform-group
\t\t\t\t\t\t\ttype_email
\t\t\t\t\t\t\tfield_email
\t\t\t\t\t\t\trequired
\t\t\t\t\t\t\t\">
\t\t\t\t\t\t\t<input class=\"form-control\" name=\"field_email\" placeholder=\"E-mail\" required=\"\" type=\"email\" value=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"
\t\t\t\t\t\t\tform-group
\t\t\t\t\t\t\ttype_string
\t\t\t\t\t\t\tfield_phone
\t\t\t\t\t\t\t\">
\t\t\t\t\t\t\t<input class=\"form-control\" name=\"field_phone\" placeholder=\"Телефон\" type=\"text\" value=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"
\t\t\t\t\t\t\tform-group
\t\t\t\t\t\t\ttype_string
\t\t\t\t\t\t\tfield_obj_name
\t\t\t\t\t\t\trequired
\t\t\t\t\t\t\t\">
\t\t\t\t\t\t\t<input class=\"form-control\" name=\"field_obj_name\" placeholder=\"Название места\" required=\"\" type=\"text\" value=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"
\t\t\t\t\t\t\tform-group
\t\t\t\t\t\t\ttype_string
\t\t\t\t\t\t\tfield_obj_address
\t\t\t\t\t\t\t\">
\t\t\t\t\t\t\t<input class=\"form-control\" name=\"field_obj_address\" placeholder=\"Адрес места\" type=\"text\" value=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"
\t\t\t\t\t\t\tform-group
\t\t\t\t\t\t\ttype_string
\t\t\t\t\t\t\tfield_obj_site
\t\t\t\t\t\t\t\">
\t\t\t\t\t\t\t<input class=\"form-control\" name=\"field_obj_site\" placeholder=\"Ссылка на сайт (если есть)\" type=\"text\" value=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"
\t\t\t\t\t\t\tform-group
\t\t\t\t\t\t\ttype_text
\t\t\t\t\t\t\tfield_text
\t\t\t\t\t\t\t\">
\t\t\t\t\t\t\t<textarea class=\"form-control\" name=\"field_text\" placeholder=\"Описание\" rows=\"4\"></textarea>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"
\t\t\t\t\t\t\tform-group
\t\t\t\t\t\t\ttype_checkbox
\t\t\t\t\t\t\tfield_policy
\t\t\t\t\t\t\trequired
\t\t\t\t\t\t\t\">
\t\t\t\t\t\t\t<input name=\"field_policy\" type=\"hidden\" value=\"\">
\t\t\t\t\t\t\t<div class=\"checkbox checkbox-switcher\">
\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t<input name=\"field_policy\" type=\"checkbox\" value=\"1\" required=\"\">
\t\t\t\t\t\t\t\t\t<div class=\"checkbox-switcher__switch\"></div>
\t\t\t\t\t\t\t\t\tя принимаю <a href=\"/policy\">условия обработки персональных данных</a>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<input class=\"btn btn-default\" type=\"submit\" value=\"Отправить\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

<div class=\"add-modale\" data-modale-id=\"add-restaurant\">
\t<div class=\"add-modale__closer\"></div>
\t<div class=\"add-modale__wrapper\">
\t\t<div class=\"cont\">
\t\t\t<div class=\"add-modale__inner\">
\t\t\t\t<div class=\"add-modale__title\">Добавить ресторан/кафе</div>
\t\t\t\t<div class=\"add-modale__form\">
\t\t\t\t\t<form data-action=\"3\" class=\"js-superform\">
\t\t\t\t\t\t<div class=\"
\t\t\t\t\t\t\tform-group
\t\t\t\t\t\t\ttype_string
\t\t\t\t\t\t\tfield_name
\t\t\t\t\t\t\trequired
\t\t\t\t\t\t\t\">
\t\t\t\t\t\t\t<input class=\"form-control\" name=\"field_name\" placeholder=\"Имя\" required=\"\" type=\"text\" value=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"
\t\t\t\t\t\t\tform-group
\t\t\t\t\t\t\ttype_email
\t\t\t\t\t\t\tfield_email
\t\t\t\t\t\t\trequired
\t\t\t\t\t\t\t\">
\t\t\t\t\t\t\t<input class=\"form-control\" name=\"field_email\" placeholder=\"E-mail\" required=\"\" type=\"email\" value=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"
\t\t\t\t\t\t\tform-group
\t\t\t\t\t\t\ttype_string
\t\t\t\t\t\t\tfield_phone
\t\t\t\t\t\t\t\">
\t\t\t\t\t\t\t<input class=\"form-control\" name=\"field_phone\" placeholder=\"Телефон\" type=\"text\" value=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"
\t\t\t\t\t\t\tform-group
\t\t\t\t\t\t\ttype_string
\t\t\t\t\t\t\tfield_obj_name
\t\t\t\t\t\t\trequired
\t\t\t\t\t\t\t\">
\t\t\t\t\t\t\t<input class=\"form-control\" name=\"field_obj_name\" placeholder=\"Название места\" required=\"\" type=\"text\" value=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"
\t\t\t\t\t\t\tform-group
\t\t\t\t\t\t\ttype_string
\t\t\t\t\t\t\tfield_obj_address
\t\t\t\t\t\t\t\">
\t\t\t\t\t\t\t<input class=\"form-control\" name=\"field_obj_address\" placeholder=\"Адрес места\" type=\"text\" value=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"
\t\t\t\t\t\t\tform-group
\t\t\t\t\t\t\ttype_string
\t\t\t\t\t\t\tfield_obj_site
\t\t\t\t\t\t\t\">
\t\t\t\t\t\t\t<input class=\"form-control\" name=\"field_obj_site\" placeholder=\"Ссылка на сайт (если есть)\" type=\"text\" value=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"
\t\t\t\t\t\t\tform-group
\t\t\t\t\t\t\ttype_text
\t\t\t\t\t\t\tfield_text
\t\t\t\t\t\t\t\">
\t\t\t\t\t\t\t<textarea class=\"form-control\" name=\"field_text\" placeholder=\"Описание\" rows=\"4\"></textarea>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"
\t\t\t\t\t\t\tform-group
\t\t\t\t\t\t\ttype_checkbox
\t\t\t\t\t\t\tfield_policy
\t\t\t\t\t\t\trequired
\t\t\t\t\t\t\t\">
\t\t\t\t\t\t\t<input name=\"field_policy\" type=\"hidden\" value=\"\">
\t\t\t\t\t\t\t<div class=\"checkbox checkbox-switcher\">
\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t<input name=\"field_policy\" type=\"checkbox\" value=\"1\" required=\"\">
\t\t\t\t\t\t\t\t\t<div class=\"checkbox-switcher__switch\"></div>
\t\t\t\t\t\t\t\t\tя принимаю <a href=\"/policy\">условия обработки персональных данных</a>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<input class=\"btn btn-default\" type=\"submit\" value=\"Отправить\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

<div class=\"add-modale\" data-modale-id=\"add-hotel\">
\t<div class=\"add-modale__closer\"></div>
\t<div class=\"add-modale__wrapper\">
\t\t<div class=\"cont\">
\t\t\t<div class=\"add-modale__inner\">
\t\t\t\t<div class=\"add-modale__title\">Добавить гостиницу/отель</div>
\t\t\t\t<div class=\"add-modale__form\">
\t\t\t\t\t<form data-action=\"3\" class=\"js-superform\">
\t\t\t\t\t\t<div class=\"
\t\t\t\t\t\t\tform-group
\t\t\t\t\t\t\ttype_string
\t\t\t\t\t\t\tfield_name
\t\t\t\t\t\t\trequired
\t\t\t\t\t\t\t\">
\t\t\t\t\t\t\t<input class=\"form-control\" name=\"field_name\" placeholder=\"Имя\" required=\"\" type=\"text\" value=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"
\t\t\t\t\t\t\tform-group
\t\t\t\t\t\t\ttype_email
\t\t\t\t\t\t\tfield_email
\t\t\t\t\t\t\trequired
\t\t\t\t\t\t\t\">
\t\t\t\t\t\t\t<input class=\"form-control\" name=\"field_email\" placeholder=\"E-mail\" required=\"\" type=\"email\" value=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"
\t\t\t\t\t\t\tform-group
\t\t\t\t\t\t\ttype_string
\t\t\t\t\t\t\tfield_phone
\t\t\t\t\t\t\t\">
\t\t\t\t\t\t\t<input class=\"form-control\" name=\"field_phone\" placeholder=\"Телефон\" type=\"text\" value=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"
\t\t\t\t\t\t\tform-group
\t\t\t\t\t\t\ttype_string
\t\t\t\t\t\t\tfield_obj_name
\t\t\t\t\t\t\trequired
\t\t\t\t\t\t\t\">
\t\t\t\t\t\t\t<input class=\"form-control\" name=\"field_obj_name\" placeholder=\"Название места\" required=\"\" type=\"text\" value=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"
\t\t\t\t\t\t\tform-group
\t\t\t\t\t\t\ttype_string
\t\t\t\t\t\t\tfield_obj_address
\t\t\t\t\t\t\t\">
\t\t\t\t\t\t\t<input class=\"form-control\" name=\"field_obj_address\" placeholder=\"Адрес места\" type=\"text\" value=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"
\t\t\t\t\t\t\tform-group
\t\t\t\t\t\t\ttype_string
\t\t\t\t\t\t\tfield_obj_site
\t\t\t\t\t\t\t\">
\t\t\t\t\t\t\t<input class=\"form-control\" name=\"field_obj_site\" placeholder=\"Ссылка на сайт (если есть)\" type=\"text\" value=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"
\t\t\t\t\t\t\tform-group
\t\t\t\t\t\t\ttype_text
\t\t\t\t\t\t\tfield_text
\t\t\t\t\t\t\t\">
\t\t\t\t\t\t\t<textarea class=\"form-control\" name=\"field_text\" placeholder=\"Описание\" rows=\"4\"></textarea>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"
\t\t\t\t\t\t\tform-group
\t\t\t\t\t\t\ttype_checkbox
\t\t\t\t\t\t\tfield_policy
\t\t\t\t\t\t\trequired
\t\t\t\t\t\t\t\">
\t\t\t\t\t\t\t<input name=\"field_policy\" type=\"hidden\" value=\"\">
\t\t\t\t\t\t\t<div class=\"checkbox checkbox-switcher\">
\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t<input name=\"field_policy\" type=\"checkbox\" value=\"1\" required=\"\">
\t\t\t\t\t\t\t\t\t<div class=\"checkbox-switcher__switch\"></div>
\t\t\t\t\t\t\t\t\tя принимаю <a href=\"/policy\">условия обработки персональных данных</a>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<input class=\"btn btn-default\" type=\"submit\" value=\"Отправить\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>





";
        // line 729
        $this->loadTemplate("footer", "layouts.add_object", 729)->display($context);
    }

    public function getTemplateName()
    {
        return "layouts.add_object";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  773 => 729,  45 => 3,  43 => 2,);
    }
}
/* {# include 'header' #}*/
/* {% include 'sidebar' %}*/
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
/* 											<svg xmlns="http://www.w3.org/2000/svg" width="237" height="60" viewBox="0 0 237 60" fill="none"><path d="M44.1887 7.20227C44.1887 5.8236 45.3064 4.70628 46.6847 4.70628C48.0634 4.70628 49.1807 5.82395 49.1807 7.20227V19.3318C49.1807 22.2447 47.9908 24.8912 46.074 26.8076C44.1573 28.7244 41.5108 29.9143 38.5982 29.9143C35.6853 29.9143 33.0388 28.7244 31.1224 26.8076C29.2056 24.8909 28.0157 22.2444 28.0157 19.3318V7.20227C28.0157 5.8236 29.1334 4.70628 30.5117 4.70628C31.8904 4.70628 33.0077 5.82395 33.0077 7.20227V19.3318C33.0077 20.8664 33.6377 22.2637 34.6521 23.278C35.6664 24.2923 37.0637 24.9223 38.5982 24.9223C40.1328 24.9223 41.5301 24.2923 42.5444 23.278C43.5587 22.2637 44.1887 20.8664 44.1887 19.3318V7.20227Z" fill="#2D2727"/><path d="M65.8014 7.20227C65.8014 5.8236 66.9191 4.70628 68.2974 4.70628C69.6761 4.70628 70.7934 5.82395 70.7934 7.20227V14.8143H82.4485V7.20227C82.4485 5.8236 83.5661 4.70628 84.9445 4.70628C86.3231 4.70628 87.4405 5.82395 87.4405 7.20227V17.3103V27.4183C87.4405 28.797 86.3228 29.9143 84.9445 29.9143C83.5658 29.9143 82.4485 28.7966 82.4485 27.4183V19.8063H70.7934V27.4183C70.7934 28.797 69.6757 29.9143 68.2974 29.9143C66.9187 29.9143 65.8014 28.7966 65.8014 27.4183V7.20227Z" fill="#2D2727"/><path d="M4.99198 27.4187C4.99198 28.7974 3.87431 29.9147 2.49599 29.9147C1.11731 29.9147 0 28.797 0 27.4187V15.2884C0 12.3755 1.18989 9.72937 3.10667 7.81259C5.02309 5.89618 7.6696 4.70628 10.5825 4.70628C13.4957 4.70628 16.1422 5.89618 18.0586 7.81259C19.9754 9.72937 21.1653 12.3755 21.1653 15.2884C21.1653 16.6671 20.0476 17.7844 18.6693 17.7844C17.2907 17.7844 16.1733 16.6667 16.1733 15.2884C16.1733 13.7538 15.5434 12.3566 14.529 11.3426C13.515 10.3286 12.1178 9.69862 10.5832 9.69862C9.04827 9.69862 7.65101 10.3286 6.63667 11.3426C5.62232 12.3569 4.99234 13.7538 4.99234 15.2884V27.4187H4.99198Z" fill="#2D2727"/><path d="M145.02 24.9223C146.399 24.9223 147.516 26.04 147.516 27.4183C147.516 28.797 146.399 29.9143 145.02 29.9143H128.847C127.469 29.9143 126.351 28.7966 126.351 27.4183V7.20227C126.351 5.8236 127.469 4.70628 128.847 4.70628C130.226 4.70628 131.343 5.82395 131.343 7.20227V24.9223H145.02Z" fill="#2D2727"/><path d="M159.36 27.4187C159.36 28.7974 158.242 29.9147 156.864 29.9147C155.485 29.9147 154.368 28.797 154.368 27.4187V7.20264C154.368 5.82396 155.485 4.70665 156.864 4.70665C158.242 4.70665 159.36 5.82432 159.36 7.20264V27.4187Z" fill="#2D2727"/><path d="M168.707 4.70628H174.772C178.241 4.70628 181.392 6.12357 183.675 8.40683C185.958 10.6897 187.376 13.8418 187.376 17.3103C187.376 20.7792 185.959 23.9312 183.675 26.2145C181.392 28.4974 178.24 29.915 174.772 29.915H168.707C167.328 29.915 166.211 28.7974 166.211 27.419V7.20299C166.211 5.82431 167.329 4.707 168.707 4.707V4.70628ZM174.772 9.69862H171.203V24.9227H174.772C176.862 24.9227 178.765 24.0653 180.146 22.6848C181.527 21.304 182.384 19.4012 182.384 17.3107C182.384 15.2198 181.526 13.3173 180.146 11.9365C178.765 10.556 176.862 9.69862 174.772 9.69862Z" fill="#2D2727"/><path d="M57.4817 30.6841C59.2852 30.6841 60.7471 29.2221 60.7471 27.4187C60.7471 25.6153 59.2852 24.1533 57.4817 24.1533C55.6783 24.1533 54.2163 25.6153 54.2163 27.4187C54.2163 29.2221 55.6783 30.6841 57.4817 30.6841Z" fill="#DD0A23"/><path d="M196.284 28.7255C195.67 29.9533 194.177 30.451 192.949 29.8371C191.721 29.2232 191.224 27.7302 191.838 26.5024L201.945 6.28774L201.946 6.28595L201.948 6.28094L201.975 6.2291L201.976 6.22803L202.004 6.17547L202.006 6.17297C202.056 6.08287 202.113 5.99598 202.175 5.91232L202.177 5.90982L202.203 5.87549L202.215 5.86083L202.224 5.84939L202.248 5.81936L202.254 5.81221L202.279 5.78146L202.293 5.76537L202.319 5.73605L202.325 5.72962L202.358 5.69386L202.361 5.68957L202.393 5.65704L202.403 5.64703L202.419 5.63094L202.429 5.62128L202.461 5.58982L202.466 5.58589L202.501 5.55299L202.508 5.54727L202.537 5.52153L202.553 5.50758L202.584 5.48184L202.591 5.47612L202.621 5.45217L202.633 5.44323L202.647 5.43179L202.681 5.40569L202.684 5.40354C202.768 5.34133 202.855 5.28484 202.945 5.23407L202.947 5.23264L203 5.20403L203.001 5.20332L203.053 5.1765L203.058 5.174L203.106 5.1504L203.115 5.14611L203.16 5.12537L203.162 5.12466L203.211 5.10356L203.217 5.1007L203.263 5.08247L203.275 5.07746C203.54 4.97485 203.815 4.92086 204.087 4.91192L204.131 4.91085L204.147 4.91049H204.191L204.207 4.91085L204.251 4.91192C204.523 4.9205 204.797 4.97449 205.063 5.07746L205.075 5.08247L205.12 5.1007L205.127 5.10356L205.176 5.12466L205.177 5.12537L205.223 5.14611L205.231 5.1504L205.28 5.174L205.285 5.1765L205.337 5.20332L205.338 5.20403L205.391 5.23264L205.393 5.23407C205.483 5.28484 205.57 5.34133 205.654 5.40354L205.656 5.40569L205.691 5.43179L205.705 5.44323L205.717 5.45217L205.747 5.47612L205.754 5.48184L205.785 5.50758L205.801 5.52153L205.83 5.54727L205.836 5.55299L205.872 5.58589L205.876 5.58982L205.909 5.62128L205.919 5.63094L205.935 5.64703L205.945 5.65704L205.976 5.68957L205.98 5.69386L206.013 5.72962L206.019 5.73605L206.045 5.76537L206.058 5.78146L206.084 5.81221L206.09 5.81936L206.114 5.84939L206.123 5.86083L206.134 5.87549L206.16 5.90982L206.163 5.91232C206.225 5.99598 206.281 6.08287 206.332 6.17297L206.333 6.17547L206.362 6.22803L206.363 6.2291L206.39 6.28094L206.392 6.28595L206.393 6.28774L216.5 26.5024C217.114 27.7302 216.616 29.2232 215.388 29.8371C214.161 30.451 212.668 29.9533 212.054 28.7255L210.09 24.7987H198.247L196.284 28.7255ZM204.169 12.9559L200.743 19.8067H207.594L204.168 12.9559H204.169Z" fill="#2D2727"/><path d="M106.896 34.6214C109.264 34.6214 119.5 22.7067 119.5 12.6044C119.5 9.13552 118.083 5.98344 115.799 3.70054C113.516 1.41765 110.364 0 106.896 0C103.427 0 100.275 1.41729 97.9917 3.70054C95.7088 5.98344 94.2911 9.13552 94.2911 12.6044C94.2911 22.7067 104.528 34.6214 106.895 34.6214H106.896ZM106.896 4.99234C108.987 4.99234 110.889 5.84972 112.27 7.23018C113.651 8.61065 114.508 10.5135 114.508 12.604C114.508 14.6949 113.651 16.5977 112.27 17.9782C110.89 19.3587 108.987 20.216 106.896 20.216C104.805 20.216 102.902 19.3587 101.522 17.9782C100.141 16.5977 99.2838 14.6949 99.2838 12.604C99.2838 10.5135 100.141 8.61065 101.522 7.23018C102.902 5.84972 104.805 4.99234 106.896 4.99234Z" fill="#DD0A23"/><path d="M99.5877 50.3528C99.0349 50.9796 99.8219 51.9531 100.584 51.4454C100.633 51.4097 100.674 51.3721 100.715 51.3253C101.337 50.6063 102.083 49.6971 102.584 48.8955C103.031 48.2422 102.251 47.3956 101.532 47.875C101.213 48.1182 100.024 49.849 99.5877 50.3528Z" fill="#DD0A23"/><path d="M94.1129 55.0204C93.4086 55.4652 93.8526 56.5729 94.6979 56.3716C94.7715 56.3505 94.8366 56.3244 94.9031 56.2825C95.7537 55.7523 96.6329 55.1477 97.4062 54.5102C97.5367 54.409 97.634 54.2449 97.6662 54.0844C97.7977 53.3926 97.0258 52.9202 96.4684 53.3539C95.6915 53.9585 94.9503 54.4984 94.1129 55.0204Z" fill="#DD0A23"/><path d="M87.5004 57.8239C86.5732 58.0767 86.8761 59.4489 87.835 59.2745C88.8089 59.0471 89.858 58.702 90.7897 58.337C91.567 58.0409 91.3325 56.8224 90.4268 56.905C90.3617 56.914 90.307 56.9276 90.2452 56.9512C89.3635 57.2976 88.4199 57.5983 87.5004 57.8239Z" fill="#DD0A23"/><path d="M80.3427 58.4607C79.9512 58.4436 79.6123 58.7106 79.559 59.1C79.5014 59.523 79.8196 59.9277 80.2501 59.9463C81.2773 60.0124 82.2877 60.0178 83.3157 59.9606C83.6614 59.9456 83.9596 59.6706 84.0086 59.3295C84.0736 58.8533 83.709 58.4532 83.2295 58.4743C82.262 58.5279 81.3102 58.5229 80.3431 58.4607H80.3427Z" fill="#DD0A23"/><path d="M73.3388 56.8686C72.5794 56.5793 71.9759 57.5243 72.5422 58.0903C72.6173 58.1604 72.6938 58.2158 72.7936 58.254C73.7522 58.6334 74.71 58.948 75.7068 59.2105C76.4691 59.4182 77.0029 58.4006 76.3354 57.8904C76.2517 57.8314 76.1791 57.7964 76.0805 57.7692C75.1416 57.5214 74.2416 57.2257 73.3388 56.8682V56.8686Z" fill="#DD0A23"/><path d="M67.1526 53.2131C66.4092 52.635 65.5168 53.6364 66.1439 54.305C66.1654 54.3265 66.1868 54.348 66.2104 54.3662C67.0042 55.0158 67.8315 55.609 68.6964 56.16C69.4186 56.6162 70.2499 55.6751 69.6182 55.0015C69.5774 54.9633 69.5406 54.9325 69.4927 54.9021C68.6775 54.3819 67.9009 53.8256 67.1526 53.2131Z" fill="#DD0A23"/><path d="M62.3215 47.8786C61.8095 47.1302 60.6483 47.7624 61.0319 48.6151C61.0476 48.6466 61.0641 48.6769 61.0837 48.7056C61.6469 49.5547 62.269 50.3774 62.9308 51.1518C63.416 51.7021 64.3055 51.3213 64.2347 50.5773C64.214 50.4318 64.1604 50.2959 64.061 50.1829C63.4371 49.4432 62.8571 48.6852 62.3219 47.8786H62.3215Z" fill="#DD0A23"/><path d="M59.266 41.3606C58.9825 40.4693 57.655 40.7939 57.8237 41.7239C58.0618 42.6653 58.5023 43.7747 58.8892 44.6707C59.2142 45.4294 60.3944 45.1634 60.3108 44.2835C60.3008 44.2095 60.2836 44.1455 60.2539 44.0762C59.8699 43.1848 59.5446 42.2906 59.2657 41.3606H59.266Z" fill="#DD0A23"/><path d="M56.9277 37.2918C57.0478 38.2139 58.4115 38.1424 58.4115 37.1849C58.3786 36.7523 58.3196 36.32 58.3021 35.8863C58.2874 35.3354 58.2731 34.7783 58.2731 34.2248C58.2731 33.3961 57.0568 33.1751 56.8058 34.0536C56.7911 34.1176 56.7843 34.1723 56.7843 34.2399C56.7843 34.774 56.7911 35.325 56.8115 35.8581C56.8308 36.3165 56.8526 36.8506 56.9284 37.2922L56.9277 37.2918Z" fill="#DD0A23"/><path d="M107.013 36.979L107.503 48.3052C107.511 48.51 107.352 48.6834 107.148 48.692C107.034 48.697 106.931 48.6505 106.86 48.5733C105.758 47.3888 104.55 46.5464 103.218 46.0423C101.887 45.5381 100.424 45.369 98.8131 45.5292C98.609 45.5496 98.4274 45.4001 98.4073 45.1963C98.3962 45.0841 98.4366 44.9782 98.5092 44.9028L106.375 36.7351C106.517 36.5871 106.752 36.5828 106.9 36.7248C106.972 36.7941 107.01 36.886 107.014 36.979H107.013Z" fill="#DD0A23"/><path d="M229.02 23.2551V27.6042C229.02 28.9829 227.903 30.1002 226.524 30.1002C225.146 30.1002 224.028 28.9826 224.028 27.6042V23.2551L216.68 8.50945C216.066 7.28165 216.563 5.78857 217.791 5.17467C219.019 4.56077 220.512 5.05847 221.126 6.28626L226.525 17.119L231.924 6.28626C232.538 5.05847 234.031 4.56077 235.258 5.17467C236.486 5.78857 236.984 7.28165 236.37 8.50945L229.021 23.2551H229.02Z" fill="#2D2727"/></svg>*/
/* 										</a>*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="hero-top__item">*/
/* 									*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="hero-search">*/
/* 							<form class="hero-search__form">*/
/* 								<div class="hero-search__input">*/
/* 									<input type="text" name="q" placeholder="Найти путешествие мечты...">*/
/* 									<button type="submit" class="hero-search__submit">*/
/* 										<svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20" fill="none"><path d="M2.37488 2.5511C3.99216 0.885494 6.1319 0.0326109 8.28325 0.000918007C10.4349 -0.0307749 12.5988 0.758095 14.2647 2.37537C15.9306 3.99265 16.7832 6.13239 16.8149 8.28374C16.8444 10.2766 16.1698 12.2802 14.7847 13.8884L20.2622 19.2062C20.3243 19.2664 20.3259 19.3665 20.2657 19.429L19.7573 19.9524C19.6971 20.0145 19.597 20.0161 19.5345 19.9558L14.0561 14.6371C12.4921 16.0579 10.5171 16.7859 8.53209 16.8154C6.38074 16.8471 4.21652 16.0582 2.55061 14.4409C0.885006 12.8237 0.0321226 10.6842 0.000429725 8.53258C-0.0312631 6.38091 0.757607 4.21701 2.37488 2.5511ZM4.26202 5.05671C4.10105 5.25691 3.80797 5.28923 3.60745 5.12857C3.40726 4.9676 3.37494 4.67452 3.53591 4.47401C3.60118 4.39242 3.66613 4.3146 3.73077 4.24117C3.80954 4.15174 3.87763 4.07706 3.93599 4.01713C4.06339 3.88596 4.19707 3.76013 4.33639 3.63964C4.47477 3.52008 4.61912 3.40649 4.76848 3.29855C4.97715 3.14698 5.26898 3.19374 5.42054 3.40241C5.57178 3.61108 5.52534 3.90291 5.31667 4.05447C5.19053 4.14547 5.06721 4.24274 4.94828 4.34535C4.8303 4.44733 4.71608 4.55496 4.60625 4.66793C4.53345 4.74292 4.47414 4.80662 4.42896 4.85809C4.36965 4.92555 4.3138 4.99176 4.26202 5.05671ZM6.79086 3.30796C6.54642 3.38766 6.28315 3.25399 6.20313 3.00954C6.12343 2.76479 6.2571 2.50152 6.50155 2.42181C7.60484 2.06472 8.76272 2.02707 9.85283 2.28061C10.9433 2.53352 11.9656 3.07858 12.7974 3.88596C12.9826 4.06576 12.987 4.36167 12.8072 4.54649C12.6274 4.73163 12.3318 4.73602 12.1466 4.55622C11.4378 3.86808 10.5683 3.40398 9.64197 3.1884L9.64071 3.18715C8.71503 2.97158 7.73035 3.00358 6.79086 3.30765V3.30796ZM8.29706 0.934446C6.38482 0.962687 4.48293 1.72081 3.04514 3.20158C1.60735 4.68236 0.90603 6.6059 0.934271 8.51814C0.962512 10.4304 1.72063 12.3323 3.20141 13.7701C4.68219 15.2078 6.60573 15.9092 8.51828 15.8809C10.4305 15.8524 12.3324 15.0946 13.7702 13.6138C15.208 12.1327 15.9093 10.2095 15.8811 8.29692C15.8528 6.38499 15.0947 4.48279 13.6139 3.04532C12.1328 1.60753 10.2093 0.906204 8.29706 0.934132V0.934446Z" fill="#2B2A29"/></svg>*/
/* 									</button>*/
/* 								</div>*/
/* 							</form>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="hero-slider">*/
/* 				*/
/* 				<div class="hero-slide" style="background-image: url(/site/theme/images/add_object_bg.jpg)">*/
/* 					<div class="hero-slide__wrapper" style="height: 50vh !important;     align-items: flex-end !important;">*/
/* 						<div class="hero-slide__inner">*/
/* 							<div class="cont cont--min">*/
/* 								<div class="hero-slide__title" style="text-align: center;">*/
/* 									Добавить*/
/* 								</div>*/
/* 								<!--div class="" style="color:#fff; font-size:30px; position: absolute;right: 270px;margin-top: -100px;"> Классное место, кемпинг, <br>ресторан, гостиницу,<br> экскурсию, статью</div-->*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </section>*/
/* */
/* <section class="add-forms">*/
/* 	<div class="cont">*/
/* 		<!--h2 class="section__title">Добавить на Ru.Holiday</h2-->*/
/* 		<div class="add-forms__wrapper">*/
/* 			<div class="add-forms__desc">*/
/* 				Размещать информацию могут все пользователи. Если вы занимаетесь организацией туристической или культмассовой деятельности на территории России (гид, ведущий мастер-классов и т.д.) доступны дополнительные возможности по работе с контентом.*/
/* 			*/
/* 				<!--Выбирайте категорию и добавляйте на сайт статьи, места и события. Вы так же можете сделать это из личного кабинета. Кроме того из личного кабинета вам будет доступно редактирование ранее выложенных материалов.*/
/* Напоминаем, что все отправленные на сайт материалы проходят модерацию и появляются в открытом доступе только после их одобрения!-->*/
/* 			</div>*/
/* 			<div class="add-forms__items">*/
/* 				<a href="#" class="add-forms__item add-modale-trigger" data-modale-id="add-place">*/
/* 					Добавить место*/
/* 					<svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19" fill="none">*/
/* 						<path fill-rule="evenodd" clip-rule="evenodd" d="M10.6925 1.31665C10.6925 0.764366 10.2448 0.31665 9.6925 0.31665C9.14022 0.31665 8.6925 0.764366 8.6925 1.31665V8.43732H1.57227C1.01998 8.43732 0.572266 8.88503 0.572266 9.43732C0.572266 9.9896 1.01998 10.4373 1.57227 10.4373H8.6925V17.558C8.6925 18.1103 9.14022 18.558 9.6925 18.558C10.2448 18.558 10.6925 18.1103 10.6925 17.558V10.4373H17.8136C18.3659 10.4373 18.8136 9.9896 18.8136 9.43732C18.8136 8.88503 18.3659 8.43732 17.8136 8.43732H10.6925V1.31665Z" fill="#E85768"/>*/
/* 					</svg>*/
/* 				</a>*/
/* 				<a href="#" class="add-forms__item add-modale-trigger" data-modale-id="add-event">*/
/* 					Добавить событие*/
/* 					<svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19" fill="none">*/
/* 						<path fill-rule="evenodd" clip-rule="evenodd" d="M10.6925 1.31665C10.6925 0.764366 10.2448 0.31665 9.6925 0.31665C9.14022 0.31665 8.6925 0.764366 8.6925 1.31665V8.43732H1.57227C1.01998 8.43732 0.572266 8.88503 0.572266 9.43732C0.572266 9.9896 1.01998 10.4373 1.57227 10.4373H8.6925V17.558C8.6925 18.1103 9.14022 18.558 9.6925 18.558C10.2448 18.558 10.6925 18.1103 10.6925 17.558V10.4373H17.8136C18.3659 10.4373 18.8136 9.9896 18.8136 9.43732C18.8136 8.88503 18.3659 8.43732 17.8136 8.43732H10.6925V1.31665Z" fill="#E85768"/>*/
/* 					</svg>*/
/* 				</a>*/
/* 				<a href="#" class="add-forms__item add-modale-trigger" data-modale-id="add-article">*/
/* 					Добавить статью*/
/* 					<svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19" fill="none">*/
/* 						<path fill-rule="evenodd" clip-rule="evenodd" d="M10.6925 1.31665C10.6925 0.764366 10.2448 0.31665 9.6925 0.31665C9.14022 0.31665 8.6925 0.764366 8.6925 1.31665V8.43732H1.57227C1.01998 8.43732 0.572266 8.88503 0.572266 9.43732C0.572266 9.9896 1.01998 10.4373 1.57227 10.4373H8.6925V17.558C8.6925 18.1103 9.14022 18.558 9.6925 18.558C10.2448 18.558 10.6925 18.1103 10.6925 17.558V10.4373H17.8136C18.3659 10.4373 18.8136 9.9896 18.8136 9.43732C18.8136 8.88503 18.3659 8.43732 17.8136 8.43732H10.6925V1.31665Z" fill="#E85768"/>*/
/* 					</svg>*/
/* 				</a>*/
/* 				<a href="#" class="add-forms__item add-modale-trigger" data-modale-id="add-restaurant">*/
/* 					Добавить ресторан/кафе*/
/* 					<svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19" fill="none">*/
/* 						<path fill-rule="evenodd" clip-rule="evenodd" d="M10.6925 1.31665C10.6925 0.764366 10.2448 0.31665 9.6925 0.31665C9.14022 0.31665 8.6925 0.764366 8.6925 1.31665V8.43732H1.57227C1.01998 8.43732 0.572266 8.88503 0.572266 9.43732C0.572266 9.9896 1.01998 10.4373 1.57227 10.4373H8.6925V17.558C8.6925 18.1103 9.14022 18.558 9.6925 18.558C10.2448 18.558 10.6925 18.1103 10.6925 17.558V10.4373H17.8136C18.3659 10.4373 18.8136 9.9896 18.8136 9.43732C18.8136 8.88503 18.3659 8.43732 17.8136 8.43732H10.6925V1.31665Z" fill="#E85768"/>*/
/* 					</svg>*/
/* 				</a>*/
/* 				*/
/* 			</div>*/
/* 			<div class="add-forms__items">*/
/* 				<a href="#" class="add-forms__item add-modale-trigger" data-modale-id="add-hotel">*/
/* 					Добавить гостиницу/отель*/
/* 					<svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19" fill="none">*/
/* 						<path fill-rule="evenodd" clip-rule="evenodd" d="M10.6925 1.31665C10.6925 0.764366 10.2448 0.31665 9.6925 0.31665C9.14022 0.31665 8.6925 0.764366 8.6925 1.31665V8.43732H1.57227C1.01998 8.43732 0.572266 8.88503 0.572266 9.43732C0.572266 9.9896 1.01998 10.4373 1.57227 10.4373H8.6925V17.558C8.6925 18.1103 9.14022 18.558 9.6925 18.558C10.2448 18.558 10.6925 18.1103 10.6925 17.558V10.4373H17.8136C18.3659 10.4373 18.8136 9.9896 18.8136 9.43732C18.8136 8.88503 18.3659 8.43732 17.8136 8.43732H10.6925V1.31665Z" fill="#E85768"/>*/
/* 					</svg>*/
/* 				</a>*/
/* 				<a href="#" class="add-forms__item add-modale-trigger" data-modale-id="">*/
/* 					Добавить Кемпинг*/
/* 					<svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19" fill="none">*/
/* 						<path fill-rule="evenodd" clip-rule="evenodd" d="M10.6925 1.31665C10.6925 0.764366 10.2448 0.31665 9.6925 0.31665C9.14022 0.31665 8.6925 0.764366 8.6925 1.31665V8.43732H1.57227C1.01998 8.43732 0.572266 8.88503 0.572266 9.43732C0.572266 9.9896 1.01998 10.4373 1.57227 10.4373H8.6925V17.558C8.6925 18.1103 9.14022 18.558 9.6925 18.558C10.2448 18.558 10.6925 18.1103 10.6925 17.558V10.4373H17.8136C18.3659 10.4373 18.8136 9.9896 18.8136 9.43732C18.8136 8.88503 18.3659 8.43732 17.8136 8.43732H10.6925V1.31665Z" fill="#E85768"/>*/
/* 					</svg>*/
/* 				</a>*/
/* 				<a href="#" class="add-forms__item add-modale-trigger" data-modale-id="">*/
/* 					Добавить экскурсию*/
/* 					<svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19" fill="none">*/
/* 						<path fill-rule="evenodd" clip-rule="evenodd" d="M10.6925 1.31665C10.6925 0.764366 10.2448 0.31665 9.6925 0.31665C9.14022 0.31665 8.6925 0.764366 8.6925 1.31665V8.43732H1.57227C1.01998 8.43732 0.572266 8.88503 0.572266 9.43732C0.572266 9.9896 1.01998 10.4373 1.57227 10.4373H8.6925V17.558C8.6925 18.1103 9.14022 18.558 9.6925 18.558C10.2448 18.558 10.6925 18.1103 10.6925 17.558V10.4373H17.8136C18.3659 10.4373 18.8136 9.9896 18.8136 9.43732C18.8136 8.88503 18.3659 8.43732 17.8136 8.43732H10.6925V1.31665Z" fill="#E85768"/>*/
/* 					</svg>*/
/* 				</a>*/
/* 				<a href="#" class="add-forms__item add-modale-trigger" data-modale-id="">*/
/* 					Добавить маршрут*/
/* 					<svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19" fill="none">*/
/* 						<path fill-rule="evenodd" clip-rule="evenodd" d="M10.6925 1.31665C10.6925 0.764366 10.2448 0.31665 9.6925 0.31665C9.14022 0.31665 8.6925 0.764366 8.6925 1.31665V8.43732H1.57227C1.01998 8.43732 0.572266 8.88503 0.572266 9.43732C0.572266 9.9896 1.01998 10.4373 1.57227 10.4373H8.6925V17.558C8.6925 18.1103 9.14022 18.558 9.6925 18.558C10.2448 18.558 10.6925 18.1103 10.6925 17.558V10.4373H17.8136C18.3659 10.4373 18.8136 9.9896 18.8136 9.43732C18.8136 8.88503 18.3659 8.43732 17.8136 8.43732H10.6925V1.31665Z" fill="#E85768"/>*/
/* 					</svg>*/
/* 				</a>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </section>*/
/* 				*/
/* <section class="forus">*/
/* 	<div class="cont">*/
/* 		<!--h2 class="section__title">Добавить</h2-->*/
/* 		<div class="forus__wrapper">*/
/* 			<div class="foru">*/
/* 				<div class="foru__item">*/
/* 					<div class="foru__content">*/
/* 						<div class="foru__title">Место / Ресторан / Гостиница / Кемпинг</div>*/
/* 						<div class="foru__desc">*/
/* 							На сайте можно разместить информацию о любых локациях, которая может быть интересна. Это могут быть рестораны, кафе, гостиница, места аренды туристического снаряжения, достопримечательности, культурные, исторические и природные памятники, зоны отдыха, площадки для кемпинга и т.д. */
/* 						</div>*/
/* 						<div class="foru__action">*/
/* 							<!--a href="#" class="link link--add">*/
/* 								ДОБАВИТЬ МЕСТО*/
/* 								<svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19" fill="none">*/
/* 									<path fill-rule="evenodd" clip-rule="evenodd" d="M10.6925 1.31665C10.6925 0.764366 10.2448 0.31665 9.6925 0.31665C9.14022 0.31665 8.6925 0.764366 8.6925 1.31665V8.43732H1.57227C1.01998 8.43732 0.572266 8.88503 0.572266 9.43732C0.572266 9.9896 1.01998 10.4373 1.57227 10.4373H8.6925V17.558C8.6925 18.1103 9.14022 18.558 9.6925 18.558C10.2448 18.558 10.6925 18.1103 10.6925 17.558V10.4373H17.8136C18.3659 10.4373 18.8136 9.9896 18.8136 9.43732C18.8136 8.88503 18.3659 8.43732 17.8136 8.43732H10.6925V1.31665Z" fill="#E85768"/>*/
/* 								</svg>*/
/* 							</a-->*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="foru__item">*/
/* 					<div class="foru__img">*/
/* 						<img src="/site/theme/images/add_object1.png">*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="foru">*/
/* 				<div class="foru__item">*/
/* 					<div class="foru__content">*/
/* 						<div class="foru__title">События / Мероприятия</div>*/
/* 						<div class="foru__desc">*/
/* 						Рассказывайте о событиях, которые могут заинтересовать пользователей сайта. Это могут быть как разовые мероприятия, например, музыкальный вечер или выставка, так и регулярные, например, ежегодные фестивали.<br><br> */
/* 							<span class="hl-text hl-text--acc">СКОРО:</span> Для удобства пользователей ближайшие события будут отображаться в ленте новостей.*/
/* 						</div>*/
/* 						<div class="foru__action">*/
/* 							<!--a href="#" class="link link--add">*/
/* 								ДОБАВИТЬ СОБЫТИЕ*/
/* 								<svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19" fill="none">*/
/* 									<path fill-rule="evenodd" clip-rule="evenodd" d="M10.6925 1.31665C10.6925 0.764366 10.2448 0.31665 9.6925 0.31665C9.14022 0.31665 8.6925 0.764366 8.6925 1.31665V8.43732H1.57227C1.01998 8.43732 0.572266 8.88503 0.572266 9.43732C0.572266 9.9896 1.01998 10.4373 1.57227 10.4373H8.6925V17.558C8.6925 18.1103 9.14022 18.558 9.6925 18.558C10.2448 18.558 10.6925 18.1103 10.6925 17.558V10.4373H17.8136C18.3659 10.4373 18.8136 9.9896 18.8136 9.43732C18.8136 8.88503 18.3659 8.43732 17.8136 8.43732H10.6925V1.31665Z" fill="#E85768"/>*/
/* 								</svg>*/
/* 							</a-->*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="foru__item">*/
/* 					<div class="foru__img">*/
/* 						<img src="/site/theme/images/add_object2.png">*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="foru">*/
/* 				<div class="foru__item">*/
/* 					<div class="foru__content">*/
/* 						<div class="foru__title">Статьи / Обзоры</div>*/
/* 						<div class="foru__desc">*/
/* 							Блог - это зона самовыражения, где любой пользователь может рассказать о своих путешествиях, поделиться полезным опытом с другими, оставить развернутый отзыв о маршруте или событии. */
/* 						</div>*/
/* 						<div class="foru__action">*/
/* 							<!--a href="#" class="link link--add">*/
/* 								ДОБАВИТЬ СТАТЬЮ*/
/* 								<svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19" fill="none">*/
/* 									<path fill-rule="evenodd" clip-rule="evenodd" d="M10.6925 1.31665C10.6925 0.764366 10.2448 0.31665 9.6925 0.31665C9.14022 0.31665 8.6925 0.764366 8.6925 1.31665V8.43732H1.57227C1.01998 8.43732 0.572266 8.88503 0.572266 9.43732C0.572266 9.9896 1.01998 10.4373 1.57227 10.4373H8.6925V17.558C8.6925 18.1103 9.14022 18.558 9.6925 18.558C10.2448 18.558 10.6925 18.1103 10.6925 17.558V10.4373H17.8136C18.3659 10.4373 18.8136 9.9896 18.8136 9.43732C18.8136 8.88503 18.3659 8.43732 17.8136 8.43732H10.6925V1.31665Z" fill="#E85768"/>*/
/* 								</svg>*/
/* 							</a-->*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="foru__item">*/
/* 					<div class="foru__img">*/
/* 						<img src="/site/theme/images/add_object3.png">*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="foru">*/
/* 				<div class="foru__item">*/
/* 					<div class="foru__content">*/
/* 						<div class="foru__title"><span class="hl-text hl-text--acc">скоро!</span> маршруты</div>*/
/* 						<div class="foru__desc">*/
/* 							Маршрут в нашем случае это набор мест и/или событий, сгруппированных в соответствии с некоей траекторией движения, где есть начальная, конечная и промежуточные точки.  В маршруте учитывается время в пути, уровень сложности маршрута (одни подойдут для семей с детьми, а другие - только для подготовленных спортсменов), а так же способ передвижения (пеший, велосипедный маршрут и т.д.).*/
/* 						</div>*/
/* 						<div class="foru__action">*/
/* 							<!--a href="#" class="link link--add link--disabled">*/
/* 								ДОБАВИТЬ МАРШРУТ*/
/* 								<svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19" fill="none">*/
/* 									<path fill-rule="evenodd" clip-rule="evenodd" d="M10.6925 1.31665C10.6925 0.764366 10.2448 0.31665 9.6925 0.31665C9.14022 0.31665 8.6925 0.764366 8.6925 1.31665V8.43732H1.57227C1.01998 8.43732 0.572266 8.88503 0.572266 9.43732C0.572266 9.9896 1.01998 10.4373 1.57227 10.4373H8.6925V17.558C8.6925 18.1103 9.14022 18.558 9.6925 18.558C10.2448 18.558 10.6925 18.1103 10.6925 17.558V10.4373H17.8136C18.3659 10.4373 18.8136 9.9896 18.8136 9.43732C18.8136 8.88503 18.3659 8.43732 17.8136 8.43732H10.6925V1.31665Z" fill="#E85768"/>*/
/* 								</svg>*/
/* 							</a-->*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="foru__item">*/
/* 					<div class="foru__img">*/
/* 						<img src="/site/theme/images/add_object4.png">*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </section>						*/
/* 						*/
/* <!--section class="add-warn">*/
/* 	<div class="cont">*/
/* 		<div class="add-warn__wrapper">*/
/* 			<h2 class="section__title add-warn__title">ОБРАТИТЕ ВНИМАНИЕ!</h2>*/
/* 			<div class="add-warn__text">*/
/* 				Все, добавляемые на сайт материалы, перед размещением проходят модерацию и могут быть отклонены в случае нарушения <a href="/policy">правил сайта</a> и/или законодательства Российской Федерации!*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </section-->*/
/* */
/* <!--section class="add-cond">*/
/* 	<div class="cont">*/
/* 		<h2 class="section__title add-warn__title">УСЛОВИЯ РАЗМЕЩЕНИЯ МАТЕРИАЛОВ</h2>*/
/* 		<div class="section__subtitle">МЕСТА. СОБЫТИЯ</div>*/
/* 		<div class="add-cond__wrapper">*/
/* 			<div class="add-cond__desc">*/
/* 				Размещать на сайте информацию о местах и событиях, а также создавать маршруты могут все пользователи без исключения. Если вы занимаетесь организацией туристической или культмассовой деятельности на территории России (гид, ведущий мастер-классов и т.д.) доступны дополнительные возможности по работе с контентом.*/
/* 			</div>*/
/* 			<div class="add-cond__items">*/
/* 				<div class="add-cond__item">*/
/* 					<div class="add-cond__item-title">БАЗОВЫЕ УСЛОВИЯ</div>*/
/* 					<div class="add-cond__item-subtitle">БЕСПЛАТНО</div>*/
/* 					<div class="add-cond__item-blocks">*/
/* 						<div class="add-cond__item-block">*/
/* 							<div class="add-cond__item-block-title">Места:</div>*/
/* 							<ul class="add-cond__item-block-list">*/
/* 								<li>Сопроводительный текст до 1 500 знаков</li>*/
/* 								<li>5 фото в галерее</li>*/
/* 								<li>Нельзя прикреплять дополнительные файлы к материалам</li>*/
/* 							</ul>*/
/* 						</div>*/
/* 						<div class="add-cond__item-block">*/
/* 							<div class="add-cond__item-block-title">События:</div>*/
/* 							<ul class="add-cond__item-block-list">*/
/* 								<li>Сопроводительный текст до 1 500 знаков</li>*/
/* 								<li>5 фото в галерее</li>*/
/* 								<li>Нельзя прикреплять дополнительные файлы к материалам</li>*/
/* 							</ul>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="add-cond__item">*/
/* 					<div class="add-cond__item-title">СПЕЦИАЛЬНЫЕ УСЛОВИЯ</div>*/
/* 					<div class="add-cond__item-subtitle">ЗА ДОПОЛНИТЕЛЬНУЮ ПЛАТУ</div>*/
/* 					<div class="add-cond__item-blocks">*/
/* 						<div class="add-cond__item-block">*/
/* 							<div class="add-cond__item-block-title">Места:</div>*/
/* 							<ul class="add-cond__item-block-list">*/
/* 								<li>Размер сопроводительного текста не ограничен</li>*/
/* 								<li>Неограниченное количество фото в галерее</li>*/
/* 								<li>Можно прикреплять дополнительные файлы (например, меню ресторана в PDF)</li>*/
/* 							</ul>*/
/* 						</div>*/
/* 						<div class="add-cond__item-block">*/
/* 							<div class="add-cond__item-block-title">События:</div>*/
/* 							<ul class="add-cond__item-block-list">*/
/* 								<li>Размер сопроводительного текста не ограничен</li>*/
/* 								<li>Неограниченное количество фото в галерее</li>*/
/* 								<li>Можно прикреплять дополнительные файлы (например, меню ресторана в PDF)</li>*/
/* 							</ul>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="add-cond__bottom-desc">*/
/* 				Так же для предпринимателей в сфере туризма доступны дополнительные услуги, которые помогут сделать страницы организаций (гостиниц, хостелов, ресторанов, кафе, туристических агентств, кемпингов, гидов и т.д.) максимально наполненными, информативными и привлекательными.*/
/* 			</div>*/
/* 			<div class="add-cond__bottom-action">*/
/* 				<a href="/service" class="alink alink--red">К СПИСКУ УСЛУГ</a>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </section-->*/
/* */
/* */
/* */
/* <div class="add-modale" data-modale-id="add-place">*/
/* 	<div class="add-modale__closer"></div>*/
/* 	<div class="add-modale__wrapper">*/
/* 		<div class="cont">*/
/* 			<div class="add-modale__inner">*/
/* 				<div class="add-modale__title">Добавить место</div>*/
/* 				<div class="add-modale__form">*/
/* 					<form data-action="3" class="js-superform">*/
/* 						<div class="*/
/* 							form-group*/
/* 							type_string*/
/* 							field_name*/
/* 							required*/
/* 							">*/
/* 							<input class="form-control" name="field_name" placeholder="Имя" required="" type="text" value="">*/
/* 						</div>*/
/* 						<div class="*/
/* 							form-group*/
/* 							type_email*/
/* 							field_email*/
/* 							required*/
/* 							">*/
/* 							<input class="form-control" name="field_email" placeholder="E-mail" required="" type="email" value="">*/
/* 						</div>*/
/* 						<div class="*/
/* 							form-group*/
/* 							type_string*/
/* 							field_phone*/
/* 							">*/
/* 							<input class="form-control" name="field_phone" placeholder="Телефон" type="text" value="">*/
/* 						</div>*/
/* 						<div class="*/
/* 							form-group*/
/* 							type_string*/
/* 							field_obj_name*/
/* 							required*/
/* 							">*/
/* 							<input class="form-control" name="field_obj_name" placeholder="Название места" required="" type="text" value="">*/
/* 						</div>*/
/* 						<div class="*/
/* 							form-group*/
/* 							type_string*/
/* 							field_obj_address*/
/* 							">*/
/* 							<input class="form-control" name="field_obj_address" placeholder="Адрес места" type="text" value="">*/
/* 						</div>*/
/* 						<div class="*/
/* 							form-group*/
/* 							type_string*/
/* 							field_obj_site*/
/* 							">*/
/* 							<input class="form-control" name="field_obj_site" placeholder="Ссылка на сайт (если есть)" type="text" value="">*/
/* 						</div>*/
/* 						<div class="*/
/* 							form-group*/
/* 							type_text*/
/* 							field_text*/
/* 							">*/
/* 							<textarea class="form-control" name="field_text" placeholder="Описание" rows="4"></textarea>*/
/* 						</div>*/
/* 						<div class="*/
/* 							form-group*/
/* 							type_checkbox*/
/* 							field_policy*/
/* 							required*/
/* 							">*/
/* 							<input name="field_policy" type="hidden" value="">*/
/* 							<div class="checkbox checkbox-switcher">*/
/* 								<label>*/
/* 									<input name="field_policy" type="checkbox" value="1" required="">*/
/* 									<div class="checkbox-switcher__switch"></div>*/
/* 									я принимаю <a href="/policy">условия обработки персональных данных</a>*/
/* 								</label>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="form-group">*/
/* 							<input class="btn btn-default" type="submit" value="Отправить">*/
/* 						</div>*/
/* 					</form>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* */
/* <div class="add-modale" data-modale-id="add-event">*/
/* 	<div class="add-modale__closer"></div>*/
/* 	<div class="add-modale__wrapper">*/
/* 		<div class="cont">*/
/* 			<div class="add-modale__inner">*/
/* 				<div class="add-modale__title">Добавить событие</div>*/
/* 				<div class="add-modale__form">*/
/* 					<form data-action="3" class="js-superform">*/
/* 						<div class="*/
/* 							form-group*/
/* 							type_string*/
/* 							field_name*/
/* 							required*/
/* 							">*/
/* 							<input class="form-control" name="field_name" placeholder="Имя" required="" type="text" value="">*/
/* 						</div>*/
/* 						<div class="*/
/* 							form-group*/
/* 							type_email*/
/* 							field_email*/
/* 							required*/
/* 							">*/
/* 							<input class="form-control" name="field_email" placeholder="E-mail" required="" type="email" value="">*/
/* 						</div>*/
/* 						<div class="*/
/* 							form-group*/
/* 							type_string*/
/* 							field_phone*/
/* 							">*/
/* 							<input class="form-control" name="field_phone" placeholder="Телефон" type="text" value="">*/
/* 						</div>*/
/* 						<div class="*/
/* 							form-group*/
/* 							type_string*/
/* 							field_obj_name*/
/* 							required*/
/* 							">*/
/* 							<input class="form-control" name="field_obj_name" placeholder="Название места" required="" type="text" value="">*/
/* 						</div>*/
/* 						<div class="*/
/* 							form-group*/
/* 							type_string*/
/* 							field_obj_address*/
/* 							">*/
/* 							<input class="form-control" name="field_obj_address" placeholder="Адрес места" type="text" value="">*/
/* 						</div>*/
/* 						<div class="*/
/* 							form-group*/
/* 							type_string*/
/* 							field_obj_site*/
/* 							">*/
/* 							<input class="form-control" name="field_obj_site" placeholder="Ссылка на сайт (если есть)" type="text" value="">*/
/* 						</div>*/
/* 						<div class="*/
/* 							form-group*/
/* 							type_text*/
/* 							field_text*/
/* 							">*/
/* 							<textarea class="form-control" name="field_text" placeholder="Описание" rows="4"></textarea>*/
/* 						</div>*/
/* 						<div class="*/
/* 							form-group*/
/* 							type_checkbox*/
/* 							field_policy*/
/* 							required*/
/* 							">*/
/* 							<input name="field_policy" type="hidden" value="">*/
/* 							<div class="checkbox checkbox-switcher">*/
/* 								<label>*/
/* 									<input name="field_policy" type="checkbox" value="1" required="">*/
/* 									<div class="checkbox-switcher__switch"></div>*/
/* 									я принимаю <a href="/policy">условия обработки персональных данных</a>*/
/* 								</label>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="form-group">*/
/* 							<input class="btn btn-default" type="submit" value="Отправить">*/
/* 						</div>*/
/* 					</form>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* */
/* <div class="add-modale" data-modale-id="add-article">*/
/* 	<div class="add-modale__closer"></div>*/
/* 	<div class="add-modale__wrapper">*/
/* 		<div class="cont">*/
/* 			<div class="add-modale__inner">*/
/* 				<div class="add-modale__title">Добавить статью</div>*/
/* 				<div class="add-modale__form">*/
/* 					<form data-action="3" class="js-superform">*/
/* 						<div class="*/
/* 							form-group*/
/* 							type_string*/
/* 							field_name*/
/* 							required*/
/* 							">*/
/* 							<input class="form-control" name="field_name" placeholder="Имя" required="" type="text" value="">*/
/* 						</div>*/
/* 						<div class="*/
/* 							form-group*/
/* 							type_email*/
/* 							field_email*/
/* 							required*/
/* 							">*/
/* 							<input class="form-control" name="field_email" placeholder="E-mail" required="" type="email" value="">*/
/* 						</div>*/
/* 						<div class="*/
/* 							form-group*/
/* 							type_string*/
/* 							field_phone*/
/* 							">*/
/* 							<input class="form-control" name="field_phone" placeholder="Телефон" type="text" value="">*/
/* 						</div>*/
/* 						<div class="*/
/* 							form-group*/
/* 							type_string*/
/* 							field_obj_name*/
/* 							required*/
/* 							">*/
/* 							<input class="form-control" name="field_obj_name" placeholder="Название места" required="" type="text" value="">*/
/* 						</div>*/
/* 						<div class="*/
/* 							form-group*/
/* 							type_string*/
/* 							field_obj_address*/
/* 							">*/
/* 							<input class="form-control" name="field_obj_address" placeholder="Адрес места" type="text" value="">*/
/* 						</div>*/
/* 						<div class="*/
/* 							form-group*/
/* 							type_string*/
/* 							field_obj_site*/
/* 							">*/
/* 							<input class="form-control" name="field_obj_site" placeholder="Ссылка на сайт (если есть)" type="text" value="">*/
/* 						</div>*/
/* 						<div class="*/
/* 							form-group*/
/* 							type_text*/
/* 							field_text*/
/* 							">*/
/* 							<textarea class="form-control" name="field_text" placeholder="Описание" rows="4"></textarea>*/
/* 						</div>*/
/* 						<div class="*/
/* 							form-group*/
/* 							type_checkbox*/
/* 							field_policy*/
/* 							required*/
/* 							">*/
/* 							<input name="field_policy" type="hidden" value="">*/
/* 							<div class="checkbox checkbox-switcher">*/
/* 								<label>*/
/* 									<input name="field_policy" type="checkbox" value="1" required="">*/
/* 									<div class="checkbox-switcher__switch"></div>*/
/* 									я принимаю <a href="/policy">условия обработки персональных данных</a>*/
/* 								</label>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="form-group">*/
/* 							<input class="btn btn-default" type="submit" value="Отправить">*/
/* 						</div>*/
/* 					</form>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* */
/* <div class="add-modale" data-modale-id="add-restaurant">*/
/* 	<div class="add-modale__closer"></div>*/
/* 	<div class="add-modale__wrapper">*/
/* 		<div class="cont">*/
/* 			<div class="add-modale__inner">*/
/* 				<div class="add-modale__title">Добавить ресторан/кафе</div>*/
/* 				<div class="add-modale__form">*/
/* 					<form data-action="3" class="js-superform">*/
/* 						<div class="*/
/* 							form-group*/
/* 							type_string*/
/* 							field_name*/
/* 							required*/
/* 							">*/
/* 							<input class="form-control" name="field_name" placeholder="Имя" required="" type="text" value="">*/
/* 						</div>*/
/* 						<div class="*/
/* 							form-group*/
/* 							type_email*/
/* 							field_email*/
/* 							required*/
/* 							">*/
/* 							<input class="form-control" name="field_email" placeholder="E-mail" required="" type="email" value="">*/
/* 						</div>*/
/* 						<div class="*/
/* 							form-group*/
/* 							type_string*/
/* 							field_phone*/
/* 							">*/
/* 							<input class="form-control" name="field_phone" placeholder="Телефон" type="text" value="">*/
/* 						</div>*/
/* 						<div class="*/
/* 							form-group*/
/* 							type_string*/
/* 							field_obj_name*/
/* 							required*/
/* 							">*/
/* 							<input class="form-control" name="field_obj_name" placeholder="Название места" required="" type="text" value="">*/
/* 						</div>*/
/* 						<div class="*/
/* 							form-group*/
/* 							type_string*/
/* 							field_obj_address*/
/* 							">*/
/* 							<input class="form-control" name="field_obj_address" placeholder="Адрес места" type="text" value="">*/
/* 						</div>*/
/* 						<div class="*/
/* 							form-group*/
/* 							type_string*/
/* 							field_obj_site*/
/* 							">*/
/* 							<input class="form-control" name="field_obj_site" placeholder="Ссылка на сайт (если есть)" type="text" value="">*/
/* 						</div>*/
/* 						<div class="*/
/* 							form-group*/
/* 							type_text*/
/* 							field_text*/
/* 							">*/
/* 							<textarea class="form-control" name="field_text" placeholder="Описание" rows="4"></textarea>*/
/* 						</div>*/
/* 						<div class="*/
/* 							form-group*/
/* 							type_checkbox*/
/* 							field_policy*/
/* 							required*/
/* 							">*/
/* 							<input name="field_policy" type="hidden" value="">*/
/* 							<div class="checkbox checkbox-switcher">*/
/* 								<label>*/
/* 									<input name="field_policy" type="checkbox" value="1" required="">*/
/* 									<div class="checkbox-switcher__switch"></div>*/
/* 									я принимаю <a href="/policy">условия обработки персональных данных</a>*/
/* 								</label>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="form-group">*/
/* 							<input class="btn btn-default" type="submit" value="Отправить">*/
/* 						</div>*/
/* 					</form>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* */
/* <div class="add-modale" data-modale-id="add-hotel">*/
/* 	<div class="add-modale__closer"></div>*/
/* 	<div class="add-modale__wrapper">*/
/* 		<div class="cont">*/
/* 			<div class="add-modale__inner">*/
/* 				<div class="add-modale__title">Добавить гостиницу/отель</div>*/
/* 				<div class="add-modale__form">*/
/* 					<form data-action="3" class="js-superform">*/
/* 						<div class="*/
/* 							form-group*/
/* 							type_string*/
/* 							field_name*/
/* 							required*/
/* 							">*/
/* 							<input class="form-control" name="field_name" placeholder="Имя" required="" type="text" value="">*/
/* 						</div>*/
/* 						<div class="*/
/* 							form-group*/
/* 							type_email*/
/* 							field_email*/
/* 							required*/
/* 							">*/
/* 							<input class="form-control" name="field_email" placeholder="E-mail" required="" type="email" value="">*/
/* 						</div>*/
/* 						<div class="*/
/* 							form-group*/
/* 							type_string*/
/* 							field_phone*/
/* 							">*/
/* 							<input class="form-control" name="field_phone" placeholder="Телефон" type="text" value="">*/
/* 						</div>*/
/* 						<div class="*/
/* 							form-group*/
/* 							type_string*/
/* 							field_obj_name*/
/* 							required*/
/* 							">*/
/* 							<input class="form-control" name="field_obj_name" placeholder="Название места" required="" type="text" value="">*/
/* 						</div>*/
/* 						<div class="*/
/* 							form-group*/
/* 							type_string*/
/* 							field_obj_address*/
/* 							">*/
/* 							<input class="form-control" name="field_obj_address" placeholder="Адрес места" type="text" value="">*/
/* 						</div>*/
/* 						<div class="*/
/* 							form-group*/
/* 							type_string*/
/* 							field_obj_site*/
/* 							">*/
/* 							<input class="form-control" name="field_obj_site" placeholder="Ссылка на сайт (если есть)" type="text" value="">*/
/* 						</div>*/
/* 						<div class="*/
/* 							form-group*/
/* 							type_text*/
/* 							field_text*/
/* 							">*/
/* 							<textarea class="form-control" name="field_text" placeholder="Описание" rows="4"></textarea>*/
/* 						</div>*/
/* 						<div class="*/
/* 							form-group*/
/* 							type_checkbox*/
/* 							field_policy*/
/* 							required*/
/* 							">*/
/* 							<input name="field_policy" type="hidden" value="">*/
/* 							<div class="checkbox checkbox-switcher">*/
/* 								<label>*/
/* 									<input name="field_policy" type="checkbox" value="1" required="">*/
/* 									<div class="checkbox-switcher__switch"></div>*/
/* 									я принимаю <a href="/policy">условия обработки персональных данных</a>*/
/* 								</label>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="form-group">*/
/* 							<input class="btn btn-default" type="submit" value="Отправить">*/
/* 						</div>*/
/* 					</form>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* */
/* */
/* */
/* */
/* */
/* {% include 'footer' %}*/
