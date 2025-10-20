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

/* tt_aboss2/template/product/manufacturer_info.twig */
class __TwigTemplate_c92dd5067ce6fe9848a6a6571bacc0aebd9ba3093db32b899d95e7c85ad3a69d extends \Twig\Template
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
<div id=\"product-manufacturer\">
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
            <div class=\"row\">
                ";
        // line 12
        echo ($context["column_left"] ?? null);
        echo "
                ";
        // line 13
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 14
            echo "                ";
            $context["class"] = "col-sm-6";
            // line 15
            echo "                ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 16
            echo "                ";
            $context["class"] = "col-sm-9";
            // line 17
            echo "                ";
        } else {
            // line 18
            echo "                ";
            $context["class"] = "col-sm-12";
            // line 19
            echo "                ";
        }
        // line 20
        echo "                <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">
                    ";
        // line 21
        echo ($context["content_top"] ?? null);
        echo "
                    <div class=\"custom-category\">
                        ";
        // line 23
        if (($context["products"] ?? null)) {
            // line 24
            echo "                        <div class=\"category-compare\"><a href=\"";
            echo ($context["compare"] ?? null);
            echo "\" id=\"compare-total\">";
            echo ($context["text_compare"] ?? null);
            echo "</a></div>
                        <div class=\"toolbar clearfix\">
                            <div class=\"view-mode\">
                                <div class=\"btn-group\">
                                    <button type=\"button\" id=\"grid-view\" class=\"btn btn-default\"><i class=\"fa fa-th\"></i></button>
                                    <button type=\"button\" id=\"list-view\" class=\"btn btn-default\"><i class=\"fa fa-th-list\"></i></button>
                                </div>
                            </div>
                            <div class=\"toolbar-ordering\">
                                <select id=\"input-sort\" class=\"form-control\" onchange=\"oclayerednavigationajax.filter(this.value)\">
                                    ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 35
                echo "                                    ";
                if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 35) == sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                    // line 36
                    echo "                                    <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 36);
                    echo "\" selected=\"selected\">";
                    echo (($context["text_sort"] ?? null) . twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 36));
                    echo "</option>
                                    ";
                } else {
                    // line 38
                    echo "                                    <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 38);
                    echo "\">";
                    echo (($context["text_sort"] ?? null) . twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 38));
                    echo "</option>
                                    ";
                }
                // line 40
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "                                </select>
                            </div>
                            <div class=\"toolbar-show\">
                                <select id=\"input-limit\" class=\"form-control\" onchange=\"oclayerednavigationajax.filter(this.value)\">
                                    ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 46
                echo "                                    ";
                if ((twig_get_attribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 46) == ($context["limit"] ?? null))) {
                    // line 47
                    echo "                                    <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 47);
                    echo "\" selected=\"selected\">";
                    echo (($context["text_limit"] ?? null) . twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 47));
                    echo "</option>
                                    ";
                } else {
                    // line 49
                    echo "                                    <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 49);
                    echo "\">";
                    echo (($context["text_limit"] ?? null) . twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 49));
                    echo "</option>
                                    ";
                }
                // line 51
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "                                </select>
                            </div>
                        </div>
                        <div class=\"custom-products clearfix\">
                            ";
            // line 56
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 57
                echo "                            <div class=\"product-layout product-list col-xs-12\">
                                <div class=\"product-wrapper\">
                                    <div class=\"product-thumb\">
                                        <div class=\"image\">
                                            <a href=\"";
                // line 61
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 61);
                echo "\">
                                                <img src=\"";
                // line 62
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 62);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 62);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 62);
                echo "\" class=\"img-responsive\" />
                                                ";
                // line 63
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rotator_image", [], "any", false, false, false, 63)) {
                    // line 64
                    echo "                                                <img class=\"img-r img-responsive\" src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "rotator_image", [], "any", false, false, false, 64);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 64);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 64);
                    echo "\" />
                                                ";
                }
                // line 66
                echo "                                            </a>
                                            ";
                // line 67
                if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 67)) {
                    // line 68
                    echo "                                            <div class=\"label-product label_sale\">";
                    echo ($context["text_label_sale"] ?? null);
                    echo "</div>
                                            ";
                }
                // line 70
                echo "                                            ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "is_new", [], "any", false, false, false, 70)) {
                    // line 71
                    echo "                                            <div class=\"label-product label_new\">";
                    echo ($context["text_label_new"] ?? null);
                    echo "</div>
                                            ";
                }
                // line 73
                echo "                                            <div class=\"action-links\">
                                                <button class=\"btn-cart\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 74
                echo ($context["button_cart"] ?? null);
                echo "\" onclick=\"cart.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 74);
                echo "', '";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 74);
                echo "')\"><span>";
                echo ($context["button_cart"] ?? null);
                echo "</span></button>
                                                <button class=\"btn-quickview\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 75
                echo ($context["button_quickview"] ?? null);
                echo "\" onclick=\"ocquickview.ajaxView('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 75);
                echo "')\"><span>";
                echo ($context["button_quickview"] ?? null);
                echo "</span></button>
                                            </div>
                                            <div class=\"product-wishlist\">
                                                <button class=\"btn-wishlist\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 78
                echo ($context["button_wishlist"] ?? null);
                echo "\" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 78);
                echo "');\"><span>";
                echo ($context["button_wishlist"] ?? null);
                echo "</span></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"product-info\">
                                        ";
                // line 83
                if (twig_get_attribute($this->env, $this->source, $context["product"], "manufacturer", [], "any", false, false, false, 83)) {
                    // line 84
                    echo "                                        <div class=\"manufacture-product\">
                                            <a href=\"";
                    // line 85
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "manufacturers", [], "any", false, false, false, 85);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "manufacturer", [], "any", false, false, false, 85);
                    echo "</a>
                                        </div>
                                        ";
                }
                // line 88
                echo "                                        <h3 class=\"product-name\"><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 88);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 88);
                echo "</a></h3>
                                        <div class=\"ratings\">
                                            <div class=\"rating-box\">
                                                ";
                // line 91
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 92
                    echo "                                                ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 92) == $context["i"])) {
                        // line 93
                        echo "                                                ";
                        $context["class_r"] = ("rating" . $context["i"]);
                        // line 94
                        echo "                                                <div class=\"";
                        echo ($context["class_r"] ?? null);
                        echo "\">rating</div>
                                                ";
                    }
                    // line 96
                    echo "                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 97
                echo "                                            </div>
                                        </div> 
                                        ";
                // line 99
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 99)) {
                    // line 100
                    echo "                                        <div class=\"price\">
                                            <div class=\"price-inner\">
                                                ";
                    // line 102
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 102)) {
                        // line 103
                        echo "                                                ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 103);
                        echo "
                                                ";
                    } else {
                        // line 105
                        echo "                                                <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 105);
                        echo "</span><span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 105);
                        echo "</span>                        
                                                ";
                    }
                    // line 107
                    echo "                                                ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 107)) {
                        // line 108
                        echo "                                                <span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 108);
                        echo "</span>
                                                ";
                    }
                    // line 110
                    echo "                                            </div>
                                        </div>
                                        ";
                }
                // line 113
                echo "                                        <p class=\"product-desc\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 113);
                echo "</p>
                                    </div>
                                </div>
                            </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 118
            echo "                        </div>
                        <div class=\"toolbar-bottom\">
                            <div class=\"row\">
                                <div class=\"col-sm-6 show-page\">";
            // line 121
            echo ($context["pagination"] ?? null);
            echo "</div>
                                <div class=\"col-sm-6 text-result text-right\">";
            // line 122
            echo ($context["results"] ?? null);
            echo "</div>
                            </div>
                        </div>
                        ";
        } else {
            // line 126
            echo "                        <p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
                        <div class=\"buttons\">
                            <div class=\"pull-right\"><a href=\"";
            // line 128
            echo ($context["continue"] ?? null);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["button_continue"] ?? null);
            echo "</a></div>
                        </div>
                        ";
        }
        // line 131
        echo "                    </div>
                    ";
        // line 132
        echo ($context["content_bottom"] ?? null);
        echo "
                </div>
                ";
        // line 134
        echo ($context["column_right"] ?? null);
        echo "
            </div>
        </div>
    </div>
</div>
";
        // line 139
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "tt_aboss2/template/product/manufacturer_info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  423 => 139,  415 => 134,  410 => 132,  407 => 131,  399 => 128,  393 => 126,  386 => 122,  382 => 121,  377 => 118,  365 => 113,  360 => 110,  352 => 108,  349 => 107,  341 => 105,  335 => 103,  333 => 102,  329 => 100,  327 => 99,  323 => 97,  317 => 96,  311 => 94,  308 => 93,  305 => 92,  301 => 91,  292 => 88,  284 => 85,  281 => 84,  279 => 83,  267 => 78,  257 => 75,  247 => 74,  244 => 73,  238 => 71,  235 => 70,  229 => 68,  227 => 67,  224 => 66,  214 => 64,  212 => 63,  204 => 62,  200 => 61,  194 => 57,  190 => 56,  184 => 52,  178 => 51,  170 => 49,  162 => 47,  159 => 46,  155 => 45,  149 => 41,  143 => 40,  135 => 38,  127 => 36,  124 => 35,  120 => 34,  104 => 24,  102 => 23,  97 => 21,  92 => 20,  89 => 19,  86 => 18,  83 => 17,  80 => 16,  77 => 15,  74 => 14,  72 => 13,  68 => 12,  63 => 9,  52 => 7,  48 => 6,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tt_aboss2/template/product/manufacturer_info.twig", "");
    }
}
