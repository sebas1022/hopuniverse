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

/* tt_aboss2/template/extension/module/ocproduct.twig */
class __TwigTemplate_64a6203c5be1c6778ad35df1e902ee69af36fe4616d2d290e029515a24473f9b extends \Twig\Template
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
        echo "<div class=\"tt_product_module";
        if ((twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "row", [], "any", false, false, false, 1) >= 2)) {
            echo " multi-rows";
        }
        echo "\" id=\"product_module";
        echo twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "module_id", [], "any", false, false, false, 1);
        echo "\">
\t<div class=\"module-title module-product-title\">
\t\t<h2>
\t\t\t";
        // line 4
        if (twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "title_lang", [], "any", false, false, false, 4)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[($context["code"] ?? null)] ?? null) : null), "title", [], "any", false, false, false, 4)) {
            // line 5
            echo "\t\t\t";
            echo twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "title_lang", [], "any", false, false, false, 5)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[($context["code"] ?? null)] ?? null) : null), "title", [], "any", false, false, false, 5);
            echo "
\t\t\t";
        } else {
            // line 7
            echo "\t\t\t";
            echo ($context["heading_title"] ?? null);
            echo "
\t\t\t";
        }
        // line 9
        echo "\t\t</h2>
\t\t";
        // line 10
        if (($context["module_description"] ?? null)) {
            // line 11
            echo "\t\t<div class=\"module-description\">
\t\t\t";
            // line 12
            echo ($context["module_description"] ?? null);
            echo "
\t\t</div>
\t\t";
        }
        // line 15
        echo "\t</div>
\t";
        // line 16
        if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "slider", [], "any", false, false, false, 16)) {
            // line 17
            echo "\t";
            $context["class_slider"] = " owl-carousel owl-theme ";
            // line 18
            echo "\t";
        } else {
            // line 19
            echo "\t";
            $context["class_slider"] = "";
            // line 20
            echo "\t";
        }
        // line 21
        echo "\t";
        if ((twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "nrow", [], "any", false, false, false, 21) == 0)) {
            // line 22
            echo "\t";
            $context["class"] = "two_items col-lg-6 col-md-6 col-sm-6 col-xs-12";
            // line 23
            echo "\t";
        } elseif ((twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "nrow", [], "any", false, false, false, 23) == 1)) {
            // line 24
            echo "\t";
            $context["class"] = "three_items col-lg-4 col-md-4 col-sm-4 col-xs-12";
            // line 25
            echo "\t";
        } elseif ((twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "nrow", [], "any", false, false, false, 25) == 2)) {
            // line 26
            echo "\t";
            $context["class"] = "four_items col-lg-3 col-md-3 col-sm-3 col-xs-12";
            // line 27
            echo "\t";
        } else {
            echo "\t\t
\t";
            // line 28
            $context["class"] = "six_items col-lg-2 col-md-2 col-sm-2 col-xs-12";
            // line 29
            echo "\t";
        }
        // line 30
        echo "\t";
        if ((twig_length_filter($this->env, ($context["products"] ?? null)) > 0)) {
            // line 31
            echo "\t";
            if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "row", [], "any", false, false, false, 31)) {
                // line 32
                echo "\t";
                $context["rows"] = twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "row", [], "any", false, false, false, 32);
                // line 33
                echo "\t";
            } else {
                // line 34
                echo "\t";
                $context["rows"] = 1;
                // line 35
                echo "\t";
            }
            // line 36
            echo "\t";
            $context["count"] = 0;
            // line 37
            echo "\t<div class=\"tt-product ";
            echo ($context["class_slider"] ?? null);
            echo "\">\t
\t\t";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                echo " 
\t\t";
                // line 39
                if (((($context["count"] ?? null) % ($context["rows"] ?? null)) == 0)) {
                    // line 40
                    echo "\t\t<div class=\"row_items ";
                    if ( !twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "slider", [], "any", false, false, false, 40)) {
                        echo ($context["class"] ?? null);
                    }
                    echo "\">
\t\t\t";
                }
                // line 42
                echo "\t\t\t";
                $context["count"] = (($context["count"] ?? null) + 1);
                // line 43
                echo "\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "type", [], "any", false, false, false, 43) == 0)) {
                    // line 44
                    echo "\t\t\t<div class=\"product-layout product-grid\">
\t\t\t\t<div class=\"product-wrapper\">
\t\t\t\t\t<div class=\"product-thumb\">
\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t<a href=\"";
                    // line 48
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 48);
                    echo "\">
\t\t\t\t\t\t\t\t<img src=\"";
                    // line 49
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 49);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 49);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 49);
                    echo "\" class=\"img-responsive\" />
\t\t\t\t\t\t\t\t";
                    // line 50
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "rotator_image", [], "any", false, false, false, 50)) {
                        // line 51
                        echo "\t\t\t\t\t\t\t\t<img class=\"img-r img-responsive\" src=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "rotator_image", [], "any", false, false, false, 51);
                        echo "\" alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 51);
                        echo "\" title=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 51);
                        echo "\" />
\t\t\t\t\t\t\t\t";
                    }
                    // line 53
                    echo "\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
                    // line 54
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 54)) {
                        // line 55
                        echo "\t\t\t\t\t\t\t<div class=\"label-product label_sale\">";
                        echo ($context["text_label_sale"] ?? null);
                        echo "</div>
\t\t\t\t\t\t\t";
                    }
                    // line 57
                    echo "\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "is_new", [], "any", false, false, false, 57)) {
                        // line 58
                        echo "\t\t\t\t\t\t\t<div class=\"label-product label_new\">";
                        echo ($context["text_label_new"] ?? null);
                        echo "</div>
\t\t\t\t\t\t\t";
                    }
                    // line 60
                    echo "\t\t\t\t\t\t\t<div class=\"action-links\">
\t\t\t\t\t\t\t\t";
                    // line 61
                    if (($context["use_catalog"] ?? null)) {
                        // line 62
                        echo "\t\t\t\t\t\t\t\t<button class=\"btn-cart\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                        echo ($context["button_cart"] ?? null);
                        echo "\" onclick=\"cart.add('";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 62);
                        echo "');\"><span>";
                        echo ($context["button_cart"] ?? null);
                        echo "</span></button>
\t\t\t\t\t\t\t\t";
                    }
                    // line 64
                    echo "\t\t\t\t\t\t\t\t";
                    if (($context["use_quickview"] ?? null)) {
                        // line 65
                        echo "\t\t\t\t\t\t\t\t<button class=\"btn-quickview\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                        echo ($context["button_quickview"] ?? null);
                        echo "\" onclick=\"ocquickview.ajaxView('";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 65);
                        echo "')\"><span>";
                        echo ($context["button_quickview"] ?? null);
                        echo "</span></button>
\t\t\t\t\t\t\t\t";
                    }
                    // line 67
                    echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"product-wishlist\">
\t\t\t\t\t\t\t\t<button class=\"btn-wishlist\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                    // line 69
                    echo ($context["button_wishlist"] ?? null);
                    echo "\" onclick=\"wishlist.add('";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 69);
                    echo "');\"><span>";
                    echo ($context["button_wishlist"] ?? null);
                    echo "</span></button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"product-info\">
\t\t\t\t\t\t";
                    // line 74
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "manufacturer", [], "any", false, false, false, 74)) {
                        // line 75
                        echo "\t\t\t\t\t\t<div class=\"manufacture-product\">
\t\t\t\t\t\t\t<a href=\"";
                        // line 76
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "manufacturers", [], "any", false, false, false, 76);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "manufacturer", [], "any", false, false, false, 76);
                        echo "</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                    }
                    // line 79
                    echo "\t\t\t\t\t\t<h3 class=\"product-name\"><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 79);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 79);
                    echo "</a></h3>
\t\t\t\t\t\t<div class=\"ratings\">
\t\t\t\t\t\t\t<div class=\"rating-box\">
\t\t\t\t\t\t\t\t";
                    // line 82
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 83
                        echo "\t\t\t\t\t\t\t\t";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 83) == $context["i"])) {
                            // line 84
                            echo "\t\t\t\t\t\t\t\t";
                            $context["class_r"] = ("rating" . $context["i"]);
                            // line 85
                            echo "\t\t\t\t\t\t\t\t<div class=\"";
                            echo ($context["class_r"] ?? null);
                            echo "\">rating</div>
\t\t\t\t\t\t\t\t";
                        }
                        // line 87
                        echo "\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 88
                    echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                    // line 90
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 90)) {
                        // line 91
                        echo "\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t<div class=\"price-inner\">
\t\t\t\t\t\t\t\t";
                        // line 93
                        if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 93)) {
                            // line 94
                            echo "\t\t\t\t\t\t\t\t";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 94);
                            echo "
\t\t\t\t\t\t\t\t";
                        } else {
                            // line 96
                            echo "\t\t\t\t\t\t\t\t<span class=\"price-old\">";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 96);
                            echo "</span>
\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                            // line 97
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 97);
                            echo "</span>
\t\t\t\t\t\t\t\t";
                        }
                        // line 99
                        echo "\t\t\t\t\t\t\t\t";
                        if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 99)) {
                            // line 100
                            echo "\t\t\t\t\t\t\t\t<span class=\"price-tax\">";
                            echo ($context["text_tax"] ?? null);
                            echo " ";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 100);
                            echo "</span>
\t\t\t\t\t\t\t\t";
                        }
                        // line 102
                        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                    }
                    // line 105
                    echo "\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "description", [], "any", false, false, false, 105)) {
                        echo "<p class=\"product-desc\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 105);
                        echo "</p>";
                    }
                    // line 106
                    echo "\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "countdown", [], "any", false, false, false, 106)) {
                        // line 107
                        echo "\t\t\t\t\t\t<div id=\"Countdown";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 107);
                        echo "-";
                        echo twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "module_id", [], "any", false, false, false, 107);
                        echo "\" class=\"box-timer countdown-box\"></div> 
\t\t\t\t\t\t";
                    }
                    // line 109
                    echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
                    // line 111
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 111) && twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "countdown", [], "any", false, false, false, 111))) {
                        // line 112
                        echo "\t\t\t\t<script type=\"text/javascript\">
\t\t\t\t\t\$(document).ready(function () {
\t\t\t\t\t\t\$('#Countdown";
                        // line 114
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 114);
                        echo "-";
                        echo twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "module_id", [], "any", false, false, false, 114);
                        echo "').countdown({
\t\t\t\t\t\t\tuntil: new Date(";
                        // line 115
                        echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 115), "Y");
                        echo ", ";
                        echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 115), "m");
                        echo "-1, ";
                        echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 115), "d");
                        echo ", ";
                        echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 115), "H");
                        echo ", ";
                        echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 115), "i");
                        echo ", ";
                        echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 115), "s");
                        echo "),
\t\t\t\t\t\t\tlabels: ['";
                        // line 116
                        echo ($context["text_years"] ?? null);
                        echo "', '";
                        echo ($context["text_months"] ?? null);
                        echo " ', '";
                        echo ($context["text_weeks"] ?? null);
                        echo "', '";
                        echo ($context["text_days"] ?? null);
                        echo "', '";
                        echo ($context["text_hrs"] ?? null);
                        echo "', '";
                        echo ($context["text_mins"] ?? null);
                        echo "', '";
                        echo ($context["text_secs"] ?? null);
                        echo "'],
\t\t\t\t\t\t\tlabels1: ['";
                        // line 117
                        echo ($context["text_year"] ?? null);
                        echo "', '";
                        echo ($context["text_month"] ?? null);
                        echo " ', '";
                        echo ($context["text_week"] ?? null);
                        echo "', '";
                        echo ($context["text_day"] ?? null);
                        echo "', '";
                        echo ($context["text_hr"] ?? null);
                        echo "', '";
                        echo ($context["text_min"] ?? null);
                        echo "', '";
                        echo ($context["text_sec"] ?? null);
                        echo "'],
\t\t\t\t\t\t});
\t\t\t\t\t\t// \$('#Countdown";
                        // line 119
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 119);
                        echo "-";
                        echo twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "module_id", [], "any", false, false, false, 119);
                        echo "').countdown('pause');
\t\t\t\t\t});
\t\t\t\t</script>
\t\t\t\t";
                    }
                    // line 123
                    echo "\t\t\t</div><!-- product-layout grid-->

\t\t\t";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 125
($context["config_module"] ?? null), "type", [], "any", false, false, false, 125) == 1)) {
                    // line 126
                    echo "\t\t\t<!-- List -->
\t\t\t<div class=\"product-layout product-list\">
\t\t\t\t<div class=\"product-wrapper clearfix\">
\t\t\t\t\t<div class=\"product-thumb\">
\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t<a href=\"";
                    // line 131
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 131);
                    echo "\">
\t\t\t\t\t\t\t\t<img src=\"";
                    // line 132
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 132);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 132);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 132);
                    echo "\" class=\"img-responsive\" />
\t\t\t\t\t\t\t\t";
                    // line 133
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "rotator_image", [], "any", false, false, false, 133)) {
                        // line 134
                        echo "\t\t\t\t\t\t\t\t<img class=\"img-r img-responsive\" src=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "rotator_image", [], "any", false, false, false, 134);
                        echo "\" alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 134);
                        echo "\" title=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 134);
                        echo "\" />
\t\t\t\t\t\t\t\t";
                    }
                    // line 136
                    echo "\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
                    // line 137
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 137)) {
                        // line 138
                        echo "\t\t\t\t\t\t\t<div class=\"label-product label_sale\">";
                        echo ($context["text_label_sale"] ?? null);
                        echo "</div>
\t\t\t\t\t\t\t";
                    }
                    // line 140
                    echo "\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "is_new", [], "any", false, false, false, 140)) {
                        // line 141
                        echo "\t\t\t\t\t\t\t<div class=\"label-product label_new\">";
                        echo ($context["text_label_new"] ?? null);
                        echo "</div>
\t\t\t\t\t\t\t";
                    }
                    // line 143
                    echo "\t\t\t\t\t\t\t<div class=\"action-links\">
\t\t\t\t\t\t\t\t";
                    // line 144
                    if (($context["use_catalog"] ?? null)) {
                        // line 145
                        echo "\t\t\t\t\t\t\t\t<button class=\"btn-cart\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                        echo ($context["button_cart"] ?? null);
                        echo "\" onclick=\"cart.add('";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 145);
                        echo "');\"><span>";
                        echo ($context["button_cart"] ?? null);
                        echo "</span></button>
\t\t\t\t\t\t\t\t";
                    }
                    // line 147
                    echo "\t\t\t\t\t\t\t\t";
                    if (($context["use_quickview"] ?? null)) {
                        // line 148
                        echo "\t\t\t\t\t\t\t\t<button class=\"btn-quickview\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                        echo ($context["button_quickview"] ?? null);
                        echo "\" onclick=\"ocquickview.ajaxView('";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 148);
                        echo "')\"><span>";
                        echo ($context["button_quickview"] ?? null);
                        echo "</span></button>
\t\t\t\t\t\t\t\t";
                    }
                    // line 150
                    echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"product-wishlist\">
\t\t\t\t\t\t\t\t<button class=\"btn-wishlist\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                    // line 152
                    echo ($context["button_wishlist"] ?? null);
                    echo "\" onclick=\"wishlist.add('";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 152);
                    echo "');\"><span>";
                    echo ($context["button_wishlist"] ?? null);
                    echo "</span></button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"product-info\">
\t\t\t\t\t\t";
                    // line 157
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "manufacturer", [], "any", false, false, false, 157)) {
                        // line 158
                        echo "\t\t\t\t\t\t<div class=\"manufacture-product\">
\t\t\t\t\t\t\t<a href=\"";
                        // line 159
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "manufacturers", [], "any", false, false, false, 159);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "manufacturer", [], "any", false, false, false, 159);
                        echo "</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                    }
                    // line 162
                    echo "\t\t\t\t\t\t<h3 class=\"product-name\"><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 162);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 162);
                    echo "</a></h3>
\t\t\t\t\t\t<div class=\"ratings\">
\t\t\t\t\t\t\t<div class=\"rating-box\">
\t\t\t\t\t\t\t\t";
                    // line 165
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 166
                        echo "\t\t\t\t\t\t\t\t";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 166) == $context["i"])) {
                            // line 167
                            echo "\t\t\t\t\t\t\t\t";
                            $context["class_r"] = ("rating" . $context["i"]);
                            // line 168
                            echo "\t\t\t\t\t\t\t\t<div class=\"";
                            echo ($context["class_r"] ?? null);
                            echo "\">rating</div>
\t\t\t\t\t\t\t\t";
                        }
                        // line 170
                        echo "\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 171
                    echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                    // line 173
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 173)) {
                        // line 174
                        echo "\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t<div class=\"price-inner\">
\t\t\t\t\t\t\t\t";
                        // line 176
                        if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 176)) {
                            // line 177
                            echo "\t\t\t\t\t\t\t\t";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 177);
                            echo "
\t\t\t\t\t\t\t\t";
                        } else {
                            // line 179
                            echo "\t\t\t\t\t\t\t\t<span class=\"price-old\">";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 179);
                            echo "</span>
\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                            // line 180
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 180);
                            echo "</span>
\t\t\t\t\t\t\t\t";
                        }
                        // line 182
                        echo "\t\t\t\t\t\t\t\t";
                        if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 182)) {
                            // line 183
                            echo "\t\t\t\t\t\t\t\t<span class=\"price-tax\">";
                            echo ($context["text_tax"] ?? null);
                            echo " ";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 183);
                            echo "</span>
\t\t\t\t\t\t\t\t";
                        }
                        // line 185
                        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                    }
                    // line 188
                    echo "\t\t\t\t\t\t<p class=\"product-desc\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 188);
                    echo "</p>
\t\t\t\t\t\t";
                    // line 189
                    if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "countdown", [], "any", false, false, false, 189)) {
                        // line 190
                        echo "\t\t\t\t\t\t<div id=\"Countdown";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 190);
                        echo "-";
                        echo twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "module_id", [], "any", false, false, false, 190);
                        echo "\" class=\"box-timer countdown-box\"></div> 
\t\t\t\t\t\t";
                    }
                    // line 192
                    echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
                    // line 194
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 194) && twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "countdown", [], "any", false, false, false, 194))) {
                        // line 195
                        echo "\t\t\t\t<script type=\"text/javascript\">
\t\t\t\t\t\$(document).ready(function () {
\t\t\t\t\t\t\$('#Countdown";
                        // line 197
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 197);
                        echo "-";
                        echo twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "module_id", [], "any", false, false, false, 197);
                        echo "').countdown({
\t\t\t\t\t\t\tuntil: new Date(";
                        // line 198
                        echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 198), "Y");
                        echo ", ";
                        echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 198), "m");
                        echo "-1, ";
                        echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 198), "d");
                        echo ", ";
                        echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 198), "H");
                        echo ", ";
                        echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 198), "i");
                        echo ", ";
                        echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 198), "s");
                        echo "),
\t\t\t\t\t\t\tlabels: ['";
                        // line 199
                        echo ($context["text_years"] ?? null);
                        echo "', '";
                        echo ($context["text_months"] ?? null);
                        echo " ', '";
                        echo ($context["text_weeks"] ?? null);
                        echo "', '";
                        echo ($context["text_days"] ?? null);
                        echo "', '";
                        echo ($context["text_hrs"] ?? null);
                        echo "', '";
                        echo ($context["text_mins"] ?? null);
                        echo "', '";
                        echo ($context["text_secs"] ?? null);
                        echo "'],
\t\t\t\t\t\t\tlabels1: ['";
                        // line 200
                        echo ($context["text_year"] ?? null);
                        echo "', '";
                        echo ($context["text_month"] ?? null);
                        echo " ', '";
                        echo ($context["text_week"] ?? null);
                        echo "', '";
                        echo ($context["text_day"] ?? null);
                        echo "', '";
                        echo ($context["text_hr"] ?? null);
                        echo "', '";
                        echo ($context["text_min"] ?? null);
                        echo "', '";
                        echo ($context["text_sec"] ?? null);
                        echo "'],
\t\t\t\t\t\t});
\t\t\t\t\t\t// \$('#Countdown";
                        // line 202
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 202);
                        echo "-";
                        echo twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "module_id", [], "any", false, false, false, 202);
                        echo "').countdown('pause');
\t\t\t\t\t});
\t\t\t\t</script>
\t\t\t\t";
                    }
                    // line 206
                    echo "\t\t\t</div><!-- product-layout list -->
\t\t\t";
                } else {
                    // line 208
                    echo "\t\t\t<!-- other type -->
\t\t\t<div class=\"product-layout product-customize\">
\t\t\t\t<div class=\"product-wrapper\">
\t\t\t\t\t<div class=\"product-thumb\">
\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t<a href=\"";
                    // line 213
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 213);
                    echo "\">
\t\t\t\t\t\t\t\t<img src=\"";
                    // line 214
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 214);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 214);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 214);
                    echo "\" class=\"img-responsive\" />
\t\t\t\t\t\t\t\t";
                    // line 215
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "rotator_image", [], "any", false, false, false, 215)) {
                        // line 216
                        echo "\t\t\t\t\t\t\t\t<img class=\"img-r img-responsive\" src=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "rotator_image", [], "any", false, false, false, 216);
                        echo "\" alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 216);
                        echo "\" title=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 216);
                        echo "\" />
\t\t\t\t\t\t\t\t";
                    }
                    // line 218
                    echo "\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
                    // line 219
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 219)) {
                        // line 220
                        echo "\t\t\t\t\t\t\t<div class=\"label-product label_sale\">";
                        echo ($context["text_label_sale"] ?? null);
                        echo "</div>
\t\t\t\t\t\t\t";
                    }
                    // line 222
                    echo "\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "is_new", [], "any", false, false, false, 222)) {
                        // line 223
                        echo "\t\t\t\t\t\t\t<div class=\"label-product label_new\">";
                        echo ($context["text_label_new"] ?? null);
                        echo "</div>
\t\t\t\t\t\t\t";
                    }
                    // line 225
                    echo "\t\t\t\t\t\t\t<div class=\"action-links\">
\t\t\t\t\t\t\t\t";
                    // line 226
                    if (($context["use_catalog"] ?? null)) {
                        // line 227
                        echo "\t\t\t\t\t\t\t\t<button class=\"btn-cart\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                        echo ($context["button_cart"] ?? null);
                        echo "\" onclick=\"cart.add('";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 227);
                        echo "');\"><span>";
                        echo ($context["button_cart"] ?? null);
                        echo "</span></button>
\t\t\t\t\t\t\t\t";
                    }
                    // line 229
                    echo "\t\t\t\t\t\t\t\t";
                    if (($context["use_quickview"] ?? null)) {
                        // line 230
                        echo "\t\t\t\t\t\t\t\t<button class=\"btn-quickview\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                        echo ($context["button_quickview"] ?? null);
                        echo "\" onclick=\"ocquickview.ajaxView('";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 230);
                        echo "')\"><span>";
                        echo ($context["button_quickview"] ?? null);
                        echo "</span></button>
\t\t\t\t\t\t\t\t";
                    }
                    // line 232
                    echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"product-wishlist\">
\t\t\t\t\t\t\t\t<button class=\"btn-wishlist\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                    // line 234
                    echo ($context["button_wishlist"] ?? null);
                    echo "\" onclick=\"wishlist.add('";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 234);
                    echo "');\"><span>";
                    echo ($context["button_wishlist"] ?? null);
                    echo "</span></button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"product-info\">
\t\t\t\t\t\t";
                    // line 239
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "manufacturer", [], "any", false, false, false, 239)) {
                        // line 240
                        echo "\t\t\t\t\t\t<div class=\"manufacture-product\">
\t\t\t\t\t\t\t<a href=\"";
                        // line 241
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "manufacturers", [], "any", false, false, false, 241);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "manufacturer", [], "any", false, false, false, 241);
                        echo "</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                    }
                    // line 244
                    echo "\t\t\t\t\t\t<h3 class=\"product-name\"><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 244);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 244);
                    echo "</a></h3>
\t\t\t\t\t\t<div class=\"ratings\">
\t\t\t\t\t\t\t<div class=\"rating-box\">
\t\t\t\t\t\t\t\t";
                    // line 247
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 248
                        echo "\t\t\t\t\t\t\t\t";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 248) == $context["i"])) {
                            // line 249
                            echo "\t\t\t\t\t\t\t\t";
                            $context["class_r"] = ("rating" . $context["i"]);
                            // line 250
                            echo "\t\t\t\t\t\t\t\t<div class=\"";
                            echo ($context["class_r"] ?? null);
                            echo "\">rating</div>
\t\t\t\t\t\t\t\t";
                        }
                        // line 252
                        echo "\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 253
                    echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div> 
\t\t\t\t\t\t";
                    // line 255
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 255)) {
                        // line 256
                        echo "\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t<div class=\"price-inner\">
\t\t\t\t\t\t\t\t";
                        // line 258
                        if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 258)) {
                            // line 259
                            echo "\t\t\t\t\t\t\t\t";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 259);
                            echo "
\t\t\t\t\t\t\t\t";
                        } else {
                            // line 261
                            echo "\t\t\t\t\t\t\t\t<span class=\"price-old\">";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 261);
                            echo "</span>
\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                            // line 262
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 262);
                            echo "</span>
\t\t\t\t\t\t\t\t";
                        }
                        // line 264
                        echo "\t\t\t\t\t\t\t\t";
                        if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 264)) {
                            // line 265
                            echo "\t\t\t\t\t\t\t\t<span class=\"price-tax\">";
                            echo ($context["text_tax"] ?? null);
                            echo " ";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 265);
                            echo "</span>
\t\t\t\t\t\t\t\t";
                        }
                        // line 267
                        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                    }
                    // line 270
                    echo "\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "description", [], "any", false, false, false, 270)) {
                        echo "<p class=\"product-desc\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 270);
                        echo "</p>";
                    }
                    // line 271
                    echo "\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "countdown", [], "any", false, false, false, 271)) {
                        // line 272
                        echo "\t\t\t\t\t\t<div id=\"Countdown";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 272);
                        echo "-";
                        echo twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "module_id", [], "any", false, false, false, 272);
                        echo "\" class=\"box-timer countdown-box\"></div> 
\t\t\t\t\t\t";
                    }
                    // line 274
                    echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
                    // line 276
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 276) && twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "countdown", [], "any", false, false, false, 276))) {
                        // line 277
                        echo "\t\t\t\t<script type=\"text/javascript\">
\t\t\t\t\t\$(document).ready(function () {
\t\t\t\t\t\t\$('#Countdown";
                        // line 279
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 279);
                        echo "-";
                        echo twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "module_id", [], "any", false, false, false, 279);
                        echo "').countdown({
\t\t\t\t\t\t\tuntil: new Date(";
                        // line 280
                        echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 280), "Y");
                        echo ", ";
                        echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 280), "m");
                        echo "-1, ";
                        echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 280), "d");
                        echo ", ";
                        echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 280), "H");
                        echo ", ";
                        echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 280), "i");
                        echo ", ";
                        echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 280), "s");
                        echo "),
\t\t\t\t\t\t\tlabels: ['";
                        // line 281
                        echo ($context["text_years"] ?? null);
                        echo "', '";
                        echo ($context["text_months"] ?? null);
                        echo " ', '";
                        echo ($context["text_weeks"] ?? null);
                        echo "', '";
                        echo ($context["text_days"] ?? null);
                        echo "', '";
                        echo ($context["text_hrs"] ?? null);
                        echo "', '";
                        echo ($context["text_mins"] ?? null);
                        echo "', '";
                        echo ($context["text_secs"] ?? null);
                        echo "'],
\t\t\t\t\t\t\tlabels1: ['";
                        // line 282
                        echo ($context["text_year"] ?? null);
                        echo "', '";
                        echo ($context["text_month"] ?? null);
                        echo " ', '";
                        echo ($context["text_week"] ?? null);
                        echo "', '";
                        echo ($context["text_day"] ?? null);
                        echo "', '";
                        echo ($context["text_hr"] ?? null);
                        echo "', '";
                        echo ($context["text_min"] ?? null);
                        echo "', '";
                        echo ($context["text_sec"] ?? null);
                        echo "'],
\t\t\t\t\t\t});
\t\t\t\t\t\t// \$('#Countdown";
                        // line 284
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 284);
                        echo "-";
                        echo twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "module_id", [], "any", false, false, false, 284);
                        echo "').countdown('pause');
\t\t\t\t\t});
\t\t\t\t</script>
\t\t\t\t";
                    }
                    // line 288
                    echo "\t\t\t</div><!-- product-layout custom -->
\t\t\t";
                }
                // line 290
                echo "\t\t\t";
                if ((((($context["count"] ?? null) % ($context["rows"] ?? null)) == 0) || (($context["count"] ?? null) == twig_length_filter($this->env, ($context["products"] ?? null))))) {
                    // line 291
                    echo "\t\t</div>
\t\t";
                }
                // line 293
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "\t
\t</div>
\t";
        } else {
            // line 296
            echo "\t<p class=\"text_empty\">";
            echo ($context["text_empty"] ?? null);
            echo "</p>
\t";
        }
        // line 298
        echo "</div>
";
        // line 299
        if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "slider", [], "any", false, false, false, 299)) {
            // line 300
            echo "<script type=\"text/javascript\">
\t\$(document).ready(function() {
\t\t\$(\"#product_module";
            // line 302
            echo twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "module_id", [], "any", false, false, false, 302);
            echo " .tt-product\").owlCarousel({
\t\t\tloop: ";
            // line 303
            if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "loop", [], "any", false, false, false, 303)) {
                echo " true ";
            } else {
                echo " false ";
            }
            echo ",
\t\t\tmargin: ";
            // line 304
            if ((twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "margin", [], "any", false, false, false, 304) >= 0)) {
                echo " ";
                echo twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "margin", [], "any", false, false, false, 304);
                echo " ";
            } else {
                echo " 20 ";
            }
            echo ",
\t\t\tnav: ";
            // line 305
            if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "navigation", [], "any", false, false, false, 305)) {
                echo " true ";
            } else {
                echo " false ";
            }
            echo ",
\t\t\tdots: ";
            // line 306
            if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "pagination", [], "any", false, false, false, 306)) {
                echo " true ";
            } else {
                echo " false ";
            }
            echo ",
\t\t\tautoplay:  ";
            // line 307
            if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "auto", [], "any", false, false, false, 307)) {
                echo " true ";
            } else {
                echo " false ";
            }
            echo ",
\t\t\tautoplayTimeout: ";
            // line 308
            if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "time", [], "any", false, false, false, 308)) {
                echo " ";
                echo twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "time", [], "any", false, false, false, 308);
                echo " ";
            } else {
                echo " 2000 ";
            }
            echo ",
\t\t\tautoplayHoverPause: true,
\t\t\tautoplaySpeed: ";
            // line 310
            if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "speed", [], "any", false, false, false, 310)) {
                echo " ";
                echo twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "speed", [], "any", false, false, false, 310);
                echo " ";
            } else {
                echo " 3000 ";
            }
            echo ",
\t\t\tnavSpeed: ";
            // line 311
            if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "speed", [], "any", false, false, false, 311)) {
                echo " ";
                echo twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "speed", [], "any", false, false, false, 311);
                echo " ";
            } else {
                echo " 3000 ";
            }
            echo ",
\t\t\tdotsSpeed: ";
            // line 312
            if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "speed", [], "any", false, false, false, 312)) {
                echo " ";
                echo twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "speed", [], "any", false, false, false, 312);
                echo " ";
            } else {
                echo " 3000 ";
            }
            echo ",
\t\t\tlazyLoad: true,
\t\t\tnavText : ['<i class=\"ion-chevron-left\"></i>','<i class=\"ion-chevron-right\"></i>'],
\t\t\tresponsive:{
\t\t\t\t0:{
\t\t\t\t\titems: ";
            // line 317
            echo twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "smobile", [], "any", false, false, false, 317);
            echo ",
\t\t\t\t},
\t\t\t\t768:{
\t\t\t\t\titems: ";
            // line 320
            echo twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "mobile", [], "any", false, false, false, 320);
            echo ",
\t\t\t\t},
\t\t\t\t992:{
\t\t\t\t\titems: ";
            // line 323
            echo twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "tablet", [], "any", false, false, false, 323);
            echo ",
\t\t\t\t},
\t\t\t\t1200:{
\t\t\t\t\titems: ";
            // line 326
            echo twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "desktop", [], "any", false, false, false, 326);
            echo ",
\t\t\t\t},
\t\t\t\t1600:{
\t\t\t\t\titems: ";
            // line 329
            echo twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "items", [], "any", false, false, false, 329);
            echo ",
\t\t\t\t},
\t\t\t}
\t\t});
\t\tcheckClasses();
\t\t\$('#product_module";
            // line 334
            echo twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "module_id", [], "any", false, false, false, 334);
            echo " .tt-product').on('translated.owl.carousel', function(event) {
\t\t\tcheckClasses();
\t\t});

\t\tfunction checkClasses(){
\t\t\t\$('#product_module";
            // line 339
            echo twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "module_id", [], "any", false, false, false, 339);
            echo " .tt-product').each(function(){
\t\t\t\tvar total = \$(this).find('.owl-item.active').length;
\t\t\t\t\$(this).find('.owl-item').removeClass('firstActiveItem');
\t\t\t\t\$(this).find('.owl-item').removeClass('lastActiveItem');
\t\t\t\t\$(this).find('.owl-item.active').each(function(index){
\t\t\t\t\tif (index === 0) { \$(this).addClass('firstActiveItem'); }
\t\t\t\t\tif (index === total - 1) {
\t\t\t\t\t\t\$(this).addClass('lastActiveItem');
\t\t\t\t\t}
\t\t\t\t});  
\t\t\t});
\t\t}
\t});
</script>
";
        }
    }

    public function getTemplateName()
    {
        return "tt_aboss2/template/extension/module/ocproduct.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1161 => 339,  1153 => 334,  1145 => 329,  1139 => 326,  1133 => 323,  1127 => 320,  1121 => 317,  1107 => 312,  1097 => 311,  1087 => 310,  1076 => 308,  1068 => 307,  1060 => 306,  1052 => 305,  1042 => 304,  1034 => 303,  1030 => 302,  1026 => 300,  1024 => 299,  1021 => 298,  1015 => 296,  1005 => 293,  1001 => 291,  998 => 290,  994 => 288,  985 => 284,  968 => 282,  952 => 281,  938 => 280,  932 => 279,  928 => 277,  926 => 276,  922 => 274,  914 => 272,  911 => 271,  904 => 270,  899 => 267,  891 => 265,  888 => 264,  883 => 262,  878 => 261,  872 => 259,  870 => 258,  866 => 256,  864 => 255,  860 => 253,  854 => 252,  848 => 250,  845 => 249,  842 => 248,  838 => 247,  829 => 244,  821 => 241,  818 => 240,  816 => 239,  804 => 234,  800 => 232,  790 => 230,  787 => 229,  777 => 227,  775 => 226,  772 => 225,  766 => 223,  763 => 222,  757 => 220,  755 => 219,  752 => 218,  742 => 216,  740 => 215,  732 => 214,  728 => 213,  721 => 208,  717 => 206,  708 => 202,  691 => 200,  675 => 199,  661 => 198,  655 => 197,  651 => 195,  649 => 194,  645 => 192,  637 => 190,  635 => 189,  630 => 188,  625 => 185,  617 => 183,  614 => 182,  609 => 180,  604 => 179,  598 => 177,  596 => 176,  592 => 174,  590 => 173,  586 => 171,  580 => 170,  574 => 168,  571 => 167,  568 => 166,  564 => 165,  555 => 162,  547 => 159,  544 => 158,  542 => 157,  530 => 152,  526 => 150,  516 => 148,  513 => 147,  503 => 145,  501 => 144,  498 => 143,  492 => 141,  489 => 140,  483 => 138,  481 => 137,  478 => 136,  468 => 134,  466 => 133,  458 => 132,  454 => 131,  447 => 126,  445 => 125,  441 => 123,  432 => 119,  415 => 117,  399 => 116,  385 => 115,  379 => 114,  375 => 112,  373 => 111,  369 => 109,  361 => 107,  358 => 106,  351 => 105,  346 => 102,  338 => 100,  335 => 99,  330 => 97,  325 => 96,  319 => 94,  317 => 93,  313 => 91,  311 => 90,  307 => 88,  301 => 87,  295 => 85,  292 => 84,  289 => 83,  285 => 82,  276 => 79,  268 => 76,  265 => 75,  263 => 74,  251 => 69,  247 => 67,  237 => 65,  234 => 64,  224 => 62,  222 => 61,  219 => 60,  213 => 58,  210 => 57,  204 => 55,  202 => 54,  199 => 53,  189 => 51,  187 => 50,  179 => 49,  175 => 48,  169 => 44,  166 => 43,  163 => 42,  155 => 40,  153 => 39,  147 => 38,  142 => 37,  139 => 36,  136 => 35,  133 => 34,  130 => 33,  127 => 32,  124 => 31,  121 => 30,  118 => 29,  116 => 28,  111 => 27,  108 => 26,  105 => 25,  102 => 24,  99 => 23,  96 => 22,  93 => 21,  90 => 20,  87 => 19,  84 => 18,  81 => 17,  79 => 16,  76 => 15,  70 => 12,  67 => 11,  65 => 10,  62 => 9,  56 => 7,  50 => 5,  48 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tt_aboss2/template/extension/module/ocproduct.twig", "");
    }
}
