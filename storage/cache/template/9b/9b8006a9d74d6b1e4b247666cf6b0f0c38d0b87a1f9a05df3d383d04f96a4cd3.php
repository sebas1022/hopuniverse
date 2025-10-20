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

/* tt_aboss2/template/extension/module/oclayerednavigation/oclayerednavigation.twig */
class __TwigTemplate_c7110a93f73bfb283d016446a8f9ca6ae430749aa999191a3e9745a56a8f5a28 extends \Twig\Template
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
        echo "<div class=\"layernavigation-module\">
    <div class=\"layered\">
        ";
        // line 3
        if (($context["is_filter"] ?? null)) {
            // line 4
            echo "        <div class=\"filter-attribute-container module-remove-attribute\">
            ";
            // line 5
            $context["is_filter"] = false;
            // line 6
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["filter_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["filter_group"]) {
                // line 7
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["filter_group"], "filter", [], "any", false, false, false, 7));
                foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                    // line 8
                    echo "            ";
                    $context["filter_id"] = twig_get_attribute($this->env, $this->source, $context["filter"], "filter_id", [], "any", false, false, false, 8);
                    // line 9
                    echo "            ";
                    if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["filter"], "filter_id", [], "any", false, false, false, 9), ($context["filter_category"] ?? null))) {
                        // line 10
                        echo "            ";
                        $context["is_filter"] = true;
                        // line 11
                        echo "            <div class=\"list-group-item filter-act-name\">
                <p>";
                        // line 12
                        echo twig_get_attribute($this->env, $this->source, $context["filter"], "e_name", [], "any", false, false, false, 12);
                        echo "</p>
                <a class=\"a-filter remove-filter\" href=\"javascript:void(0);\" name=\"";
                        // line 13
                        echo ($context["filter_id"] ?? null);
                        echo "\"><span>Remove</span></a>
            </div>
            ";
                    }
                    // line 16
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 17
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "            <div class=\"list-group-item filter-clear-all\">
                <a class=\"clear-filter\" href=\"javascript:void(0);\" onclick=\"oclayerednavigationajax.filter('";
            // line 19
            echo ($context["clear_action"] ?? null);
            echo "')\">Clear all</a>
            </div>
        </div>
        ";
        }
        // line 23
        echo "        <div class=\"module module-filter-price\">
            <h3 class=\"module-title module-filter-price-title\">";
        // line 24
        echo ($context["text_byprice"] ?? null);
        echo "</h3>
            <div class=\"list-group-item\">
                <div class=\"filter-price\">
                    <div id=\"slider-price\"></div>
                    <div class=\"slider-value\">
                        <span>";
        // line 29
        echo ($context["currency_symbol_left"] ?? null);
        echo "</span>
                        <input id=\"price-from\" disabled=\"disabled\" class=\"input-price\" type=\"text\" value=\"";
        // line 30
        echo ($context["min_price"] ?? null);
        echo "\" placeholder=\"Min\" name=\"price-from\"/>
                        <span>";
        // line 31
        echo ($context["currency_symbol_right"] ?? null);
        echo "</span>
                        <span class=\"separator\"> - </span>
                        <span>";
        // line 33
        echo ($context["currency_symbol_left"] ?? null);
        echo "</span>
                        <input id=\"price-to\" disabled=\"disabled\" class=\"input-price\" type=\"text\" value=\"";
        // line 34
        echo ($context["max_price"] ?? null);
        echo "\" placeholder=\"Max\" name=\"price-to\" />
                        <span>";
        // line 35
        echo ($context["currency_symbol_right"] ?? null);
        echo "</span>
                    </div>
                </div>
            </div>
        </div>
        ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["filter_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["filter_group"]) {
            // line 41
            echo "        <div class=\"module module-filter-attribute\">
            <h3 class=\"module-title module-atribute-filter-title\">";
            // line 42
            echo twig_get_attribute($this->env, $this->source, $context["filter_group"], "name", [], "any", false, false, false, 42);
            echo "</h3>
            <div class=\"list-group-item\">
                <div id=\"filter-group";
            // line 44
            echo twig_get_attribute($this->env, $this->source, $context["filter_group"], "filter_group_id", [], "any", false, false, false, 44);
            echo "\">
                    ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["filter_group"], "filter", [], "any", false, false, false, 45));
            foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                // line 46
                echo "                    ";
                $context["filter_id"] = twig_get_attribute($this->env, $this->source, $context["filter"], "filter_id", [], "any", false, false, false, 46);
                // line 47
                echo "                    ";
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["filter"], "filter_id", [], "any", false, false, false, 47), ($context["filter_category"] ?? null))) {
                    // line 48
                    echo "                    <!-- Not show filter attribute -->
                    ";
                } else {
                    // line 50
                    echo "                    <a class=\"a-filter add-filter\" href=\"javascript:void(0);\" name=\"";
                    echo ($context["filter_id"] ?? null);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["filter"], "name", [], "any", false, false, false, 50);
                    echo "</a>
                    ";
                }
                // line 52
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "                </div>
            </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "    </div>
    <input type=\"hidden\" class=\"filter-url\" value=\"";
        // line 58
        echo ($context["action"] ?? null);
        echo "\" />
    <input type=\"hidden\" class=\"price-url\" value=\"";
        // line 59
        echo ($context["action"] ?? null);
        echo "\" />
</div>
<script type=\"text/javascript\">
    var filter_url = '';
    var ids = [];
    var min_price = parseFloat('";
        // line 64
        echo ($context["min_price"] ?? null);
        echo "');
    var max_price = parseFloat('";
        // line 65
        echo ($context["max_price"] ?? null);
        echo "');
    var current_min_price = parseFloat(\$('#price-from').val());
    var current_max_price = parseFloat(\$('#price-to').val());
    \$('#slider-price').slider({
        range   : true,
        min     : min_price,
        max     : max_price,
        values  : [ current_min_price, current_max_price ],
        slide   : function (event, ui) {
            \$('#price-from').val(ui.values[0]);
            \$('#price-to').val(ui.values[1]);
            current_min_price = ui.values[0];
            current_max_price = ui.values[1];
        },
        stop    : function (event, ui) {
            filter_url = \$('.price-url').val();
            filter_url += '&price=' + current_min_price + ',' + current_max_price;
            oclayerednavigationajax.filter(filter_url);
        }
    });
    \$('.a-filter').click(function () {
        var id = \$(this).attr('name');
        var filter_ids;
        filter_url = \$('.filter-url').val();
        if(\$(this).hasClass('add-filter') == true) {
            ids.push(id);
        } else if(\$(this).hasClass('remove-filter') == true) {
            ids = \$.grep(ids, function (value) {
                return value != id;
            });
        }
        filter_ids = ids.join(',');
        filter_url += '&filter=' + filter_ids;
        oclayerednavigationajax.filter(filter_url);
    });
    \$('.clear-filter').click(function () {
        ids = [];
        \$('.module-remove-attribute').css('display','none');
    });
    function resizeInput() {
        \$(this).attr('size', \$(this).val().length);
    }
    \$('.slider-value .input-price')
    // event handler
    .keyup(resizeInput)
    // resize on page load
    .each(resizeInput);
    \$(document).ajaxComplete(function () {
        var current_min_price = parseFloat(\$('#price-from').val());
        var current_max_price = parseFloat(\$('#price-to').val());
        \$('#slider-price').slider({
            range   : true,
            min     : min_price,
            max     : max_price,
            values  : [ current_min_price, current_max_price ],
            slide   : function (event, ui) {
                \$('#price-from').val(ui.values[0]);
                \$('#price-to').val(ui.values[1]);
                current_min_price = ui.values[0];
                current_max_price = ui.values[1];
            },
            stop    : function (event, ui) {
                filter_url = \$('.price-url').val();
                filter_url += '&price=' + current_min_price + ',' + current_max_price;
                oclayerednavigationajax.filter(filter_url);
            }
        });
        \$('.a-filter').click(function () {
            var id = \$(this).attr('name');
            var filter_ids = '';
            filter_url = \$('.filter-url').val();
            if(\$(this).hasClass('add-filter') == true) {
                ids.push(id);
            } else if(\$(this).hasClass('remove-filter') == true) {
                ids = \$.grep(ids, function (value) {
                    return value != id;
                });
            }
            filter_ids = ids.join(',');
            filter_url += '&filter=' + filter_ids;
            oclayerednavigationajax.filter(filter_url);
        });
        \$('.clear-filter').click(function () {
            ids = [];
            \$('.module-remove-attribute').css('display','none');
        });
        \$('.slider-value .input-price').each(function () {
            \$(this).attr('size', \$(this).attr('value').length);
        });
    });
</script>";
    }

    public function getTemplateName()
    {
        return "tt_aboss2/template/extension/module/oclayerednavigation/oclayerednavigation.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 65,  210 => 64,  202 => 59,  198 => 58,  195 => 57,  186 => 53,  180 => 52,  172 => 50,  168 => 48,  165 => 47,  162 => 46,  158 => 45,  154 => 44,  149 => 42,  146 => 41,  142 => 40,  134 => 35,  130 => 34,  126 => 33,  121 => 31,  117 => 30,  113 => 29,  105 => 24,  102 => 23,  95 => 19,  92 => 18,  86 => 17,  80 => 16,  74 => 13,  70 => 12,  67 => 11,  64 => 10,  61 => 9,  58 => 8,  53 => 7,  48 => 6,  46 => 5,  43 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tt_aboss2/template/extension/module/oclayerednavigation/oclayerednavigation.twig", "");
    }
}
