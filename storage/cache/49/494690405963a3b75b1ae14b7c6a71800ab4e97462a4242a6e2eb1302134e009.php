<?php

/* default/template/mail/order_edit.twig */
class __TwigTemplate_e3280583da185e9cd4ec50a69366808e13bec871863c833720730fcc420f8f87 extends Twig_Template
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
        // line 1
        echo (isset($context["text_order_id"]) ? $context["text_order_id"] : null);
        echo (isset($context["order_id"]) ? $context["order_id"] : null);
        // line 2
        echo (isset($context["text_date_added"]) ? $context["text_date_added"] : null);
        echo (isset($context["date_added"]) ? $context["date_added"] : null);
        // line 4
        echo (isset($context["text_order_status"]) ? $context["text_order_status"] : null);
        // line 6
        echo (isset($context["order_status"]) ? $context["order_status"] : null);
        // line 8
        if ((isset($context["link"]) ? $context["link"] : null)) {
            // line 9
            echo (isset($context["text_link"]) ? $context["text_link"] : null);
            // line 11
            echo (isset($context["link"]) ? $context["link"] : null);
        }
        // line 13
        if ((isset($context["comment"]) ? $context["comment"] : null)) {
            // line 15
            echo (isset($context["text_comment"]) ? $context["text_comment"] : null);
            // line 17
            echo (isset($context["comment"]) ? $context["comment"] : null);
            // line 18
            echo (isset($context["text_footer"]) ? $context["text_footer"] : null);
        } else {
            // line 20
            echo (isset($context["text_footer"]) ? $context["text_footer"] : null);
        }
    }

    public function getTemplateName()
    {
        return "default/template/mail/order_edit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 20,  42 => 18,  40 => 17,  38 => 15,  36 => 13,  33 => 11,  31 => 9,  29 => 8,  27 => 6,  25 => 4,  22 => 2,  19 => 1,);
    }
}
/* {{ text_order_id }} {{ order_id }}*/
/* {{ text_date_added }} {{ date_added }}*/
/* */
/* {{ text_order_status }}*/
/* */
/* {{ order_status }}*/
/* */
/* {% if link %}*/
/* {{ text_link }}*/
/* */
/* {{ link }}*/
/* {% endif %}*/
/* {% if comment %}*/
/* */
/* {{ text_comment }}*/
/* */
/* {{ comment }}*/
/* {{ text_footer }}*/
/* {% else %} */
/* {{ text_footer }}*/
/* {% endif %}*/
