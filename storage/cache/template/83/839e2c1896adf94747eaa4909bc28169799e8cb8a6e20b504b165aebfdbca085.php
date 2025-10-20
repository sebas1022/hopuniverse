<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* tt_aboss2/template/extension/module/ochozmegamenu.twig */
class __TwigTemplate_22e579c6fde1e4ec064dd2c8488dcdede6c4d3a664c85f5dfae369f9d943d059 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"hozmenu-container\">
\t<div class=\"mobileMenu-container\">
\t\t<div id=\"mobileMenu\" class=\"mobileMenu inactive\">
\t\t\t<a class=\"mobileMenu-toggle\">
\t\t\t\t";
        // line 5
        if (($context["mobile_menu"] ?? null)) {
            // line 6
            echo "\t\t\t\t<span class=\"mobileMenu-label\">";
            echo ($context["menu_title"] ?? null);
            echo "</span>
\t\t\t\t";
        } else {
            // line 8
            echo "\t\t\t\t<span class=\"mobileMenu-label\">";
            echo ($context["category_title"] ?? null);
            echo "</span>
\t\t\t\t";
        }
        // line 10
        echo "\t\t\t\t<span class=\"mobileMenu-icon\"><i class=\"fa fa-bars\" aria-hidden=\"true\"></i></span>
\t\t\t</a>
\t\t</div>
\t\t";
        // line 13
        echo ($context["_menu"] ?? null);
        echo " 
\t</div>
\t<div class=\"nav-container visible-lg visible-md\">\t\t
\t\t<div id=\"pt_custommenu\" class=\"pt_custommenu\">
\t\t\t";
        // line 17
        echo ($context["hozmegamenu"] ?? null);
        echo "
\t\t</div>
\t</div>
\t<div id=\"sticky-menu\" data-sticky=\"";
        // line 20
        echo ($context["sticky_menu"] ?? null);
        echo "\"></div>
\t<script type=\"text/javascript\">
\t\t//<![CDATA[
\t\tvar body_class = \$('body').attr('class'); 
\t\tif(body_class.search('common-home') != -1) {
\t\t\t\$('#pt_menu_home').addClass('act');
\t\t}\t
\t\tvar CUSTOMMENU_POPUP_EFFECT =";
        // line 27
        echo ($context["effect"] ?? null);
        echo "
\t\tvar CUSTOMMENU_POPUP_TOP_OFFSET = ";
        // line 28
        echo ($context["top_offset"] ?? null);
        echo "
\t\t//]]>
\t</script>
</div>";
    }

    public function getTemplateName()
    {
        return "tt_aboss2/template/extension/module/ochozmegamenu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 28,  85 => 27,  75 => 20,  69 => 17,  62 => 13,  57 => 10,  51 => 8,  45 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tt_aboss2/template/extension/module/ochozmegamenu.twig", "");
    }
}
