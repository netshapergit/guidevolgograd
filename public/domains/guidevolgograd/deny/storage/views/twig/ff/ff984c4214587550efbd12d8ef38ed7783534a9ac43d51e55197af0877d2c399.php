<?php

/* _.admin.adminV2.scripts */
class __TwigTemplate_4e8bc2e4f23d47f3236fe1bb78e411413dab127316b50f2b5c18e284706ea60b extends TwigBridge\Twig\Template
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
        echo "<script src=\"https://cdn.jsdelivr.net/npm/vue@2.7.14/dist/vue.js\"></script>
<script src=\"https://unpkg.com/vue-toasted\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/qs@6.11.2/dist/qs.min.js\"></script>";
    }

    public function getTemplateName()
    {
        return "_.admin.adminV2.scripts";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }
}
/* <script src="https://cdn.jsdelivr.net/npm/vue@2.7.14/dist/vue.js"></script>*/
/* <script src="https://unpkg.com/vue-toasted"></script>*/
/* <script src="https://cdn.jsdelivr.net/npm/qs@6.11.2/dist/qs.min.js"></script>*/
