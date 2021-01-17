<?php

/* common/footer.twig */
class __TwigTemplate_0054fd06ae263a7c8b9aa05306045b7ae46a5241e0ee6f58eff418ff2a1b752a extends Twig_Template
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
        echo "<footer id=\"footer\">";
        echo (isset($context["text_footer"]) ? $context["text_footer"] : null);
        echo "<br />";
        echo (isset($context["text_version"]) ? $context["text_version"] : null);
        echo "</footer></div>
</body></html>
";
    }

    public function getTemplateName()
    {
        return "common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <footer id="footer">{{ text_footer }}<br />{{ text_version }}</footer></div>*/
/* </body></html>*/
/* */
