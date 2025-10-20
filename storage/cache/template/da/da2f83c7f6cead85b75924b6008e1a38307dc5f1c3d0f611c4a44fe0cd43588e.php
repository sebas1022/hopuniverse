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

/* tt_aboss2/template/extension/module/oclayerednavigation/occategory.twig */
class __TwigTemplate_d5eb7e540e5b8c773d5f21f0e35af5aa1a664a09de2bff5296e62c5ad1ae90e5 extends \Twig\Template
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
<div class=\"layer-category\">
    <div class=\"page-content\">
        <div class=\"container\">
            <h2 class=\"category-name\">";
        // line 5
        echo ($context["heading_title"] ?? null);
        echo "</h2>
            <ul class=\"breadcrumb\">
                ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 8
            echo "                    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 8);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 8);
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "            </ul>
            <div class=\"layered-navigation-block\"></div>
            <div class=\"ajax-loader\">
                <img src=\"";
        // line 13
        echo ($context["module_oclayerednavigation_loader_img"] ?? null);
        echo "\" alt=\"\" />
            </div>
            <div class=\"clearfix\"></div>
            <div class=\"row\">
                ";
        // line 17
        echo ($context["column_left"] ?? null);
        echo "
                ";
        // line 18
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 19
            echo "                ";
            $context["class"] = "col-md-6 col-sm-12";
            // line 20
            echo "                ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 21
            echo "                ";
            $context["class"] = "col-md-9 col-sm-12";
            // line 22
            echo "                ";
        } else {
            // line 23
            echo "                ";
            $context["class"] = "col-sm-12";
            // line 24
            echo "                ";
        }
        // line 25
        echo "                <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">
                    ";
        // line 26
        echo ($context["content_top"] ?? null);
        echo "
                    <div class=\"category-info\">
                        ";
        // line 28
        if ((($context["thumb"] ?? null) || ($context["description"] ?? null))) {
            // line 29
            echo "                        <div class=\"row\"> 
                            ";
            // line 30
            if (($context["thumb"] ?? null)) {
                // line 31
                echo "                            <div class=\"col-sm-2\"><img src=\"";
                echo ($context["thumb"] ?? null);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" class=\"img-thumbnail\" /></div>
                            ";
            }
            // line 33
            echo "                            ";
            if (($context["description"] ?? null)) {
                // line 34
                echo "                            <div class=\"col-sm-10\">";
                echo ($context["description"] ?? null);
                echo "</div>
                            ";
            }
            // line 35
            echo " 
                        </div>
                        <hr>
                        ";
        }
        // line 39
        echo "                        ";
        if (($context["categories"] ?? null)) {
            // line 40
            echo "                        <h3>";
            echo ($context["text_refine"] ?? null);
            echo "</h3>
                        ";
            // line 41
            if ((twig_length_filter($this->env, ($context["categories"] ?? null)) <= 5)) {
                // line 42
                echo "                        <div class=\"row\">
                            <div class=\"col-sm-3\">
                                <ul>
                                    ";
                // line 45
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 46
                    echo "                                    <li><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 46);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 46);
                    echo "</a></li>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 48
                echo "                                </ul>
                            </div>
                        </div>
                        ";
            } else {
                // line 52
                echo "                        <div class=\"row\"> 
                            ";
                // line 53
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_array_batch(($context["categories"] ?? null), twig_round((twig_length_filter($this->env, ($context["categories"] ?? null)) / 4), 1, "ceil")));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 54
                    echo "                            <div class=\"col-sm-3\">
                                <ul>
                                    ";
                    // line 56
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                        // line 57
                        echo "                                    <li><a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 57);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 57);
                        echo "</a></li>
                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 59
                    echo "                                </ul>
                            </div>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 61
                echo " 
                        </div>
                        <br />
                        ";
            }
            // line 65
            echo "                        ";
        }
        // line 66
        echo "                    </div>
                    <div class=\"custom-category\">
                        ";
        // line 68
        if (($context["products"] ?? null)) {
            // line 69
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
            // line 79
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 80
                echo "                                    ";
                if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 80) == sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                    // line 81
                    echo "                                    <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 81);
                    echo "\" selected=\"selected\">";
                    echo (($context["text_sort"] ?? null) . twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 81));
                    echo "</option>
                                    ";
                } else {
                    // line 83
                    echo "                                    <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 83);
                    echo "\">";
                    echo (($context["text_sort"] ?? null) . twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 83));
                    echo "</option>
                                    ";
                }
                // line 85
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 86
            echo "                                </select>
                            </div>
                            <div class=\"toolbar-show\">
                                <select id=\"input-limit\" class=\"form-control\" onchange=\"oclayerednavigationajax.filter(this.value)\">
                                    ";
            // line 90
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 91
                echo "                                    ";
                if ((twig_get_attribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 91) == ($context["limit"] ?? null))) {
                    // line 92
                    echo "                                    <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 92);
                    echo "\" selected=\"selected\">";
                    echo (($context["text_limit"] ?? null) . twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 92));
                    echo "</option>
                                    ";
                } else {
                    // line 94
                    echo "                                    <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 94);
                    echo "\">";
                    echo (($context["text_limit"] ?? null) . twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 94));
                    echo "</option>
                                    ";
                }
                // line 96
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 97
            echo "                                </select>
                            </div>
                        </div>
                        <div class=\"custom-products clearfix\">
                            ";
            // line 101
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 102
                echo "                            <div class=\"product-layout product-list col-xs-12\">
                                <div class=\"product-wrapper\">
                                    <div class=\"product-thumb\">
                                        <div class=\"image\">
                                            <a href=\"";
                // line 106
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 106);
                echo "\">
                                                <img src=\"";
                // line 107
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 107);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 107);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 107);
                echo "\" class=\"img-responsive\" />
                                                ";
                // line 108
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rotator_image", [], "any", false, false, false, 108)) {
                    // line 109
                    echo "                                                <img class=\"img-r img-responsive\" src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "rotator_image", [], "any", false, false, false, 109);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 109);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 109);
                    echo "\" />
                                                ";
                }
                // line 111
                echo "                                            </a>
                                            ";
                // line 112
                if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 112)) {
                    // line 113
                    echo "                                            <div class=\"label-product label_sale\">";
                    echo ($context["text_label_sale"] ?? null);
                    echo "</div>
                                            ";
                }
                // line 115
                echo "                                            ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "is_new", [], "any", false, false, false, 115)) {
                    // line 116
                    echo "                                            <div class=\"label-product label_new\">";
                    echo ($context["text_label_new"] ?? null);
                    echo "</div>
                                            ";
                }
                // line 118
                echo "                                            <div class=\"action-links\">
                                                ";
                // line 119
                if (($context["use_catalog"] ?? null)) {
                    // line 120
                    echo "                                                <button class=\"btn-cart\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                    echo ($context["button_cart"] ?? null);
                    echo "\" onclick=\"cart.add('";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 120);
                    echo "', '";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 120);
                    echo "')\"><span>";
                    echo ($context["button_cart"] ?? null);
                    echo "</span></button>
                                                ";
                }
                // line 122
                echo "                                                ";
                if (($context["use_quickview"] ?? null)) {
                    // line 123
                    echo "                                                <button class=\"btn-quickview\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                    echo ($context["button_quickview"] ?? null);
                    echo "\" onclick=\"ocquickview.ajaxView('";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 123);
                    echo "')\"><span>";
                    echo ($context["button_quickview"] ?? null);
                    echo "</span></button>
                                                ";
                }
                // line 125
                echo "                                            </div>
                                            <div class=\"product-wishlist\">
                                                <button class=\"btn-wishlist\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 127
                echo ($context["button_wishlist"] ?? null);
                echo "\" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 127);
                echo "');\"><span>";
                echo ($context["button_wishlist"] ?? null);
                echo "</span></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"product-info\">
                                        ";
                // line 132
                if (twig_get_attribute($this->env, $this->source, $context["product"], "manufacturer", [], "any", false, false, false, 132)) {
                    // line 133
                    echo "                                        <div class=\"manufacture-product\">
                                            <a href=\"";
                    // line 134
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "manufacturers", [], "any", false, false, false, 134);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "manufacturer", [], "any", false, false, false, 134);
                    echo "</a>
                                        </div>
                                        ";
                }
                // line 137
                echo "                                        <h3 class=\"product-name\"><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 137);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 137);
                echo "</a></h3>
                                        <div class=\"ratings\">
                                            <div class=\"rating-box\">
                                                ";
                // line 140
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 141
                    echo "                                                ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 141) == $context["i"])) {
                        // line 142
                        echo "                                                ";
                        $context["class_r"] = ("rating" . $context["i"]);
                        // line 143
                        echo "                                                <div class=\"";
                        echo ($context["class_r"] ?? null);
                        echo "\">rating</div>
                                                ";
                    }
                    // line 145
                    echo "                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 146
                echo "                                            </div>
                                        </div>
                                        ";
                // line 148
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 148)) {
                    // line 149
                    echo "                                        <div class=\"price\">
                                            <div class=\"price-inner\">
                                                ";
                    // line 151
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 151)) {
                        // line 152
                        echo "                                                ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 152);
                        echo "
                                                ";
                    } else {
                        // line 154
                        echo "                                                <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 154);
                        echo "</span><span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 154);
                        echo "</span>                        
                                                ";
                    }
                    // line 156
                    echo "                                                ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 156)) {
                        // line 157
                        echo "                                                <span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 157);
                        echo "</span>
                                                ";
                    }
                    // line 159
                    echo "                                            </div>
                                        </div>
                                        ";
                }
                // line 162
                echo "                                        <p class=\"product-desc\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 162);
                echo "</p>
                                    </div>
                                </div>
                            </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 167
            echo "                        </div>
                        <div class=\"toolbar-bottom\">
                            <div class=\"row\">
                                <div class=\"col-sm-6 show-page\">";
            // line 170
            echo ($context["pagination"] ?? null);
            echo "</div>
                                <div class=\"col-sm-6 text-result text-right\">";
            // line 171
            echo ($context["results"] ?? null);
            echo "</div>
                            </div>
                        </div>
                        ";
        }
        // line 175
        echo "                        ";
        if (( !($context["categories"] ?? null) &&  !($context["products"] ?? null))) {
            // line 176
            echo "                        <p class=\"text_empty\">";
            echo ($context["text_empty"] ?? null);
            echo "</p>
                        <div class=\"buttons\">
                            <div class=\"pull-right\"><a href=\"";
            // line 178
            echo ($context["continue"] ?? null);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["button_continue"] ?? null);
            echo "</a></div>
                        </div>
                        ";
        }
        // line 181
        echo "                    </div>
                    ";
        // line 182
        echo ($context["content_bottom"] ?? null);
        echo "
                </div>
                ";
        // line 184
        echo ($context["column_right"] ?? null);
        echo "
            </div>
        </div>
    </div>
</div>
";
        // line 189
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "tt_aboss2/template/extension/module/oclayerednavigation/occategory.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  560 => 189,  552 => 184,  547 => 182,  544 => 181,  536 => 178,  530 => 176,  527 => 175,  520 => 171,  516 => 170,  511 => 167,  499 => 162,  494 => 159,  486 => 157,  483 => 156,  475 => 154,  469 => 152,  467 => 151,  463 => 149,  461 => 148,  457 => 146,  451 => 145,  445 => 143,  442 => 142,  439 => 141,  435 => 140,  426 => 137,  418 => 134,  415 => 133,  413 => 132,  401 => 127,  397 => 125,  387 => 123,  384 => 122,  372 => 120,  370 => 119,  367 => 118,  361 => 116,  358 => 115,  352 => 113,  350 => 112,  347 => 111,  337 => 109,  335 => 108,  327 => 107,  323 => 106,  317 => 102,  313 => 101,  307 => 97,  301 => 96,  293 => 94,  285 => 92,  282 => 91,  278 => 90,  272 => 86,  266 => 85,  258 => 83,  250 => 81,  247 => 80,  243 => 79,  227 => 69,  225 => 68,  221 => 66,  218 => 65,  212 => 61,  204 => 59,  193 => 57,  189 => 56,  185 => 54,  181 => 53,  178 => 52,  172 => 48,  161 => 46,  157 => 45,  152 => 42,  150 => 41,  145 => 40,  142 => 39,  136 => 35,  130 => 34,  127 => 33,  117 => 31,  115 => 30,  112 => 29,  110 => 28,  105 => 26,  100 => 25,  97 => 24,  94 => 23,  91 => 22,  88 => 21,  85 => 20,  82 => 19,  80 => 18,  76 => 17,  69 => 13,  64 => 10,  53 => 8,  49 => 7,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tt_aboss2/template/extension/module/oclayerednavigation/occategory.twig", "");
    }
}
