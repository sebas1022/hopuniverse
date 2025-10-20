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

/* tt_aboss2/template/product/search.twig */
class __TwigTemplate_2cac40ae300f0c6ca21bfb3ebaf1193204030353a8ac1ad9701bd860e7b8ab13 extends \Twig\Template
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
<div id=\"product-search\">
\t<div class=\"page-content\">
\t\t<h2 class=\"page-title\">";
        // line 4
        echo ($context["text_search"] ?? null);
        echo "</h2>
\t\t<ul class=\"breadcrumb\">
\t\t\t";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 7
            echo "\t\t\t<li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 7);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 7);
            echo "</a></li>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "\t\t</ul>
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t";
        // line 12
        echo ($context["column_left"] ?? null);
        echo "
\t\t\t\t";
        // line 13
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 14
            echo "\t\t\t\t";
            $context["class"] = "col-sm-6";
            // line 15
            echo "\t\t\t\t";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 16
            echo "\t\t\t\t";
            $context["class"] = "col-sm-9";
            // line 17
            echo "\t\t\t\t";
        } else {
            // line 18
            echo "\t\t\t\t";
            $context["class"] = "col-sm-12";
            // line 19
            echo "\t\t\t\t";
        }
        // line 20
        echo "\t\t\t\t<div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">
\t\t\t\t\t";
        // line 21
        echo ($context["content_top"] ?? null);
        echo "
\t\t\t\t\t<label class=\"control-label\" for=\"input-search\">";
        // line 22
        echo ($context["entry_search"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"search\" value=\"";
        // line 25
        echo ($context["search"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["text_keyword"] ?? null);
        echo "\" id=\"input-search\" class=\"form-control\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t<select name=\"category_id\" class=\"form-control\">
\t\t\t\t\t\t\t\t<option value=\"0\">";
        // line 29
        echo ($context["text_category"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category_1"]) {
            // line 31
            echo "\t\t\t\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["category_1"], "category_id", [], "any", false, false, false, 31) == ($context["category_id"] ?? null))) {
                // line 32
                echo "\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category_1"], "category_id", [], "any", false, false, false, 32);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["category_1"], "name", [], "any", false, false, false, 32);
                echo "</option>
\t\t\t\t\t\t\t\t";
            } else {
                // line 34
                echo "\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category_1"], "category_id", [], "any", false, false, false, 34);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["category_1"], "name", [], "any", false, false, false, 34);
                echo "</option>
\t\t\t\t\t\t\t\t";
            }
            // line 36
            echo "\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category_1"], "children", [], "any", false, false, false, 36));
            foreach ($context['_seq'] as $context["_key"] => $context["category_2"]) {
                // line 37
                echo "\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["category_2"], "category_id", [], "any", false, false, false, 37) == ($context["category_id"] ?? null))) {
                    // line 38
                    echo "\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "category_id", [], "any", false, false, false, 38);
                    echo "\" selected=\"selected\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "name", [], "any", false, false, false, 38);
                    echo "</option>
\t\t\t\t\t\t\t\t";
                } else {
                    // line 40
                    echo "\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "category_id", [], "any", false, false, false, 40);
                    echo "\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "name", [], "any", false, false, false, 40);
                    echo "</option>
\t\t\t\t\t\t\t\t";
                }
                // line 42
                echo "\t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category_2"], "children", [], "any", false, false, false, 42));
                foreach ($context['_seq'] as $context["_key"] => $context["category_3"]) {
                    // line 43
                    echo "\t\t\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["category_3"], "category_id", [], "any", false, false, false, 43) == ($context["category_id"] ?? null))) {
                        // line 44
                        echo "\t\t\t\t\t\t\t\t<option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category_3"], "category_id", [], "any", false, false, false, 44);
                        echo "\" selected=\"selected\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                        echo twig_get_attribute($this->env, $this->source, $context["category_3"], "name", [], "any", false, false, false, 44);
                        echo "</option>
\t\t\t\t\t\t\t\t";
                    } else {
                        // line 46
                        echo "\t\t\t\t\t\t\t\t<option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category_3"], "category_id", [], "any", false, false, false, 46);
                        echo "\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                        echo twig_get_attribute($this->env, $this->source, $context["category_3"], "name", [], "any", false, false, false, 46);
                        echo "</option>
\t\t\t\t\t\t\t\t";
                    }
                    // line 48
                    echo "\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_3'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 49
                echo "\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_2'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t<label class=\"checkbox-inline\">
\t\t\t\t\t\t\t\t";
        // line 55
        if (($context["sub_category"] ?? null)) {
            // line 56
            echo "\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"sub_category\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t";
        } else {
            // line 58
            echo "\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"sub_category\" value=\"1\" />
\t\t\t\t\t\t\t\t";
        }
        // line 60
        echo "\t\t\t\t\t\t\t";
        echo ($context["text_sub_category"] ?? null);
        echo "</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<p>
\t\t\t\t\t\t<label class=\"checkbox-inline\">
\t\t\t\t\t\t\t";
        // line 65
        if (($context["description"] ?? null)) {
            // line 66
            echo "\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"description\" value=\"1\" id=\"description\" checked=\"checked\" />
\t\t\t\t\t\t\t";
        } else {
            // line 68
            echo "\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"description\" value=\"1\" id=\"description\" />
\t\t\t\t\t\t\t";
        }
        // line 70
        echo "\t\t\t\t\t\t";
        echo ($context["entry_description"] ?? null);
        echo "</label>
\t\t\t\t\t</p>
\t\t\t\t\t<input type=\"button\" value=\"";
        // line 72
        echo ($context["button_search"] ?? null);
        echo "\" id=\"button-search\" class=\"btn btn-primary\" />
\t\t\t\t\t<h2>";
        // line 73
        echo ($context["text_search"] ?? null);
        echo "</h2>
\t\t\t\t\t<div class=\"custom-category\">
\t\t\t\t\t\t";
        // line 75
        if (($context["products"] ?? null)) {
            // line 76
            echo "\t\t\t\t\t\t<div class=\"category-compare\"><a href=\"";
            echo ($context["compare"] ?? null);
            echo "\" id=\"compare-total\">";
            echo ($context["text_compare"] ?? null);
            echo "</a></div>
\t\t\t\t\t\t<div class=\"toolbar clearfix\">
\t\t\t\t\t\t\t<div class=\"view-mode\">
\t\t\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" id=\"grid-view\" class=\"btn btn-default\"><i class=\"fa fa-th\"></i></button>
\t\t\t\t\t\t\t\t\t<button type=\"button\" id=\"list-view\" class=\"btn btn-default\"><i class=\"fa fa-th-list\"></i></button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"toolbar-ordering\">
\t\t\t\t\t\t\t\t<select id=\"input-sort\" class=\"form-control\" onchange=\"oclayerednavigationajax.filter(this.value)\">
\t\t\t\t\t\t\t\t\t";
            // line 86
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 87
                echo "\t\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 87) == sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                    // line 88
                    echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 88);
                    echo "\" selected=\"selected\">";
                    echo (($context["text_sort"] ?? null) . twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 88));
                    echo "</option>
\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 90
                    echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 90);
                    echo "\">";
                    echo (($context["text_sort"] ?? null) . twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 90));
                    echo "</option>
\t\t\t\t\t\t\t\t\t";
                }
                // line 92
                echo "\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            echo "\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"toolbar-show\">
\t\t\t\t\t\t\t\t<select id=\"input-limit\" class=\"form-control\" onchange=\"oclayerednavigationajax.filter(this.value)\">
\t\t\t\t\t\t\t\t\t";
            // line 97
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 98
                echo "\t\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 98) == ($context["limit"] ?? null))) {
                    // line 99
                    echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 99);
                    echo "\" selected=\"selected\">";
                    echo (($context["text_limit"] ?? null) . twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 99));
                    echo "</option>
\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 101
                    echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 101);
                    echo "\">";
                    echo (($context["text_limit"] ?? null) . twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 101));
                    echo "</option>
\t\t\t\t\t\t\t\t\t";
                }
                // line 103
                echo "\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 104
            echo "\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"custom-products clearfix\">
\t\t\t\t\t\t\t";
            // line 108
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 109
                echo "\t\t\t\t\t\t\t<div class=\"product-layout product-list col-xs-12\">
\t\t\t\t\t\t\t\t<div class=\"product-wrapper\">
\t\t\t\t\t\t\t\t\t<div class=\"product-thumb\">
\t\t\t\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 113
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 113);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 114
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 114);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 114);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 114);
                echo "\" class=\"img-responsive\" />
\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-r img-responsive\" src=\"";
                // line 115
                echo twig_get_attribute($this->env, $this->source, $context["product"], "rotator_image", [], "any", false, false, false, 115);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 115);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 115);
                echo "\" />
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t";
                // line 117
                if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 117)) {
                    // line 118
                    echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"label-product label_sale\">";
                    echo ($context["text_label_sale"] ?? null);
                    echo "</div>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 120
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "is_new", [], "any", false, false, false, 120)) {
                    // line 121
                    echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"label-product label_new\">";
                    echo ($context["text_label_new"] ?? null);
                    echo "</div>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 123
                echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"action-links\">
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn-cart\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 124
                echo ($context["button_cart"] ?? null);
                echo "\" onclick=\"cart.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 124);
                echo "', '";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 124);
                echo "')\"><span>";
                echo ($context["button_cart"] ?? null);
                echo "</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn-quickview\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 125
                echo ($context["button_quickview"] ?? null);
                echo "\" onclick=\"ocquickview.ajaxView('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 125);
                echo "')\"><span>";
                echo ($context["button_quickview"] ?? null);
                echo "</span></button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-wishlist\">
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn-wishlist\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 128
                echo ($context["button_wishlist"] ?? null);
                echo "\" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 128);
                echo "');\"><span>";
                echo ($context["button_wishlist"] ?? null);
                echo "</span></button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product-info\">
\t\t\t\t\t\t\t\t\t\t";
                // line 133
                if (twig_get_attribute($this->env, $this->source, $context["product"], "manufacturer", [], "any", false, false, false, 133)) {
                    // line 134
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"manufacture-product\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 135
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "manufacturers", [], "any", false, false, false, 135);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "manufacturer", [], "any", false, false, false, 135);
                    echo "</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 138
                echo "\t\t\t\t\t\t\t\t\t\t<h3 class=\"product-name\"><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 138);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 138);
                echo "</a></h3>
\t\t\t\t\t\t\t\t\t\t<div class=\"ratings\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating-box\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 141
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 142
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 142) == $context["i"])) {
                        // line 143
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context["class_r"] = ("rating" . $context["i"]);
                        // line 144
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"";
                        echo ($context["class_r"] ?? null);
                        echo "\">rating</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 146
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 147
                echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div> 
\t\t\t\t\t\t\t\t\t\t";
                // line 149
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 149)) {
                    // line 150
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"price-inner\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 152
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 152)) {
                        // line 153
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 153);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 155
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 155);
                        echo "</span><span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 155);
                        echo "</span>                        
\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 157
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 157)) {
                        // line 158
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 158);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 160
                    echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 163
                echo "\t\t\t\t\t\t\t\t\t\t<p class=\"product-desc\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 163);
                echo "</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 168
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"toolbar-bottom\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-6 show-page\">";
            // line 171
            echo ($context["pagination"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-6 text-result text-right\">";
            // line 172
            echo ($context["results"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        } else {
            // line 176
            echo "\t\t\t\t\t\t<p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
\t\t\t\t\t\t";
        }
        // line 178
        echo "\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 179
        echo ($context["content_bottom"] ?? null);
        echo "
\t\t\t\t</div>
\t\t\t\t";
        // line 181
        echo ($context["column_right"] ?? null);
        echo "
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<script type=\"text/javascript\"><!--
\$('#button-search').bind('click', function() {
\turl = 'index.php?route=product/search';
\tvar search = \$('#content input[name=\\'search\\']').prop('value');
\tif (search) {
\t\turl += '&search=' + encodeURIComponent(search);
\t}
\tvar category_id = \$('#content select[name=\\'category_id\\']').prop('value');
\tif (category_id > 0) {
\t\turl += '&category_id=' + encodeURIComponent(category_id);
\t}
\tvar sub_category = \$('#content input[name=\\'sub_category\\']:checked').prop('value');
\tif (sub_category) {
\t\turl += '&sub_category=true';
\t}
\tvar filter_description = \$('#content input[name=\\'description\\']:checked').prop('value');
\tif (filter_description) {
\t\turl += '&description=true';
\t}
\tlocation = url;
});
\$('#content input[name=\\'search\\']').bind('keydown', function(e) {
\tif (e.keyCode == 13) {
\t\t\$('#button-search').trigger('click');
\t}
});
\$('select[name=\\'category_id\\']').on('change', function() {
\tif (this.value == '0') {
\t\t\$('input[name=\\'sub_category\\']').prop('disabled', true);
\t} else {
\t\t\$('input[name=\\'sub_category\\']').prop('disabled', false);
\t}
});
\$('select[name=\\'category_id\\']').trigger('change');
--></script>
";
        // line 221
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "tt_aboss2/template/product/search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  601 => 221,  558 => 181,  553 => 179,  550 => 178,  544 => 176,  537 => 172,  533 => 171,  528 => 168,  516 => 163,  511 => 160,  503 => 158,  500 => 157,  492 => 155,  486 => 153,  484 => 152,  480 => 150,  478 => 149,  474 => 147,  468 => 146,  462 => 144,  459 => 143,  456 => 142,  452 => 141,  443 => 138,  435 => 135,  432 => 134,  430 => 133,  418 => 128,  408 => 125,  398 => 124,  395 => 123,  389 => 121,  386 => 120,  380 => 118,  378 => 117,  369 => 115,  361 => 114,  357 => 113,  351 => 109,  347 => 108,  341 => 104,  335 => 103,  327 => 101,  319 => 99,  316 => 98,  312 => 97,  306 => 93,  300 => 92,  292 => 90,  284 => 88,  281 => 87,  277 => 86,  261 => 76,  259 => 75,  254 => 73,  250 => 72,  244 => 70,  240 => 68,  236 => 66,  234 => 65,  225 => 60,  221 => 58,  217 => 56,  215 => 55,  209 => 51,  203 => 50,  197 => 49,  191 => 48,  183 => 46,  175 => 44,  172 => 43,  167 => 42,  159 => 40,  151 => 38,  148 => 37,  143 => 36,  135 => 34,  127 => 32,  124 => 31,  120 => 30,  116 => 29,  107 => 25,  101 => 22,  97 => 21,  92 => 20,  89 => 19,  86 => 18,  83 => 17,  80 => 16,  77 => 15,  74 => 14,  72 => 13,  68 => 12,  63 => 9,  52 => 7,  48 => 6,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tt_aboss2/template/product/search.twig", "");
    }
}
