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

/* tt_aboss2/template/product/octestimonial.twig */
class __TwigTemplate_fefc42491f962bfd74e6fff2b7aeae6c9cd2fa218bd04433fa1905502dab67a8 extends \Twig\Template
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
        echo ($context["header"] ?? null);
        echo "
<div class=\"wrapper testimonial-product\">
    <div class=\"page-content\">
        <h2 class=\"page-title\">";
        // line 4
        echo ($context["heading_title"] ?? null);
        echo "</h2>
        <ul class=\"breadcrumb\">
            ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 7
            echo "            <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 7);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 7);
            echo "</a></li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "        </ul>
        <div class=\"container\">
            <div id=\"content\">
                ";
        // line 12
        echo ($context["content_top"] ?? null);
        echo "
                ";
        // line 13
        if (($context["testimonials"] ?? null)) {
            // line 14
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["testimonials"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["testimonial"]) {
                // line 15
                echo "                <div class=\"testimonial-content clearfix\">
                    <div class=\"col-sm-2\">
                        <div class=\"testimonial-image text-center\">
                            <img src=\"";
                // line 18
                echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["testimonial"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["image"] ?? null) : null);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\">
                        </div>
                    </div>
                    <div class=\"col-sm-10\">
                        <div class=\"testimonial-info\">
                            <div class=\"testimonial-desc\">";
                // line 23
                echo (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["testimonial"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["content"] ?? null) : null);
                echo "</div>
                            <div class=\"testimonial-name text-right\">
                                <h5>--";
                // line 25
                echo (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $context["testimonial"]) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["customer_name"] ?? null) : null);
                echo "--</h5>
                            </div>
                        </div>
                    </div>
                </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['testimonial'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "                ";
            echo ($context["content_bottom"] ?? null);
            echo "
            </div>
            <div class=\"toolbar-bottom\">
                <div class=\"row\">
                    <div class=\"col-sm-6 show-page\">";
            // line 35
            echo ($context["pagination"] ?? null);
            echo "</div>
                    <div class=\"col-sm-6 text-result text-right\">";
            // line 36
            echo ($context["results"] ?? null);
            echo "</div>
                </div>
            </div>
            ";
        } else {
            // line 40
            echo "            <p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
            <div class=\"buttons\">
                <div class=\"pull-right\"><a href=\"";
            // line 42
            echo ($context["continue"] ?? null);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["button_continue"] ?? null);
            echo "</a></div>
            </div>
            ";
        }
        // line 45
        echo "        </div>
    </div>
</div>
";
        // line 48
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "tt_aboss2/template/product/octestimonial.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 48,  144 => 45,  136 => 42,  130 => 40,  123 => 36,  119 => 35,  111 => 31,  99 => 25,  94 => 23,  84 => 18,  79 => 15,  74 => 14,  72 => 13,  68 => 12,  63 => 9,  52 => 7,  48 => 6,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tt_aboss2/template/product/octestimonial.twig", "");
    }
}
