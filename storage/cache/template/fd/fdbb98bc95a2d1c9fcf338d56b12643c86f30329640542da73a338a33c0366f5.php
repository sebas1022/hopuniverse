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

/* tt_aboss2/template/common/cart.twig */
class __TwigTemplate_b4ebc58f37e2e96021073aeb16c25e87ccf24d1a387eb3c10c23816e8d037fa5 extends \Twig\Template
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
        echo "<div id=\"cart\" class=\"btn-group btn-block\">
    <button type=\"button\" data-toggle=\"dropdown\" data-loading-text=\"";
        // line 2
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"cart-toogle\"><i class=\"fa fa-shopping-cart\" aria-hidden=\"true\"></i><span id=\"cart-total\">";
        echo ($context["text_items"] ?? null);
        echo "</span></button>
    <ul class=\"cart-dropdown-menu dropdown-menu\">
        ";
        // line 4
        if ((($context["products"] ?? null) || ($context["vouchers"] ?? null))) {
            // line 5
            echo "        <li class=\"has-scroll cart-product\">
            <div class=\"cart-product-content\">
                <table class=\"table\">
                    ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 9
                echo "                    <tr class=\"cart-item\">
                        <td class=\"text-center cart-item-image\">
                            ";
                // line 11
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 11)) {
                    echo " 
                            <a href=\"";
                    // line 12
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 12);
                    echo "\"><img class=\"cart-image\" src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 12);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 12);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 12);
                    echo "\" /></a> 
                            ";
                }
                // line 14
                echo "                        </td>
                        <td class=\"text-left cart-item-info\">
                            <a href=\"";
                // line 16
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 16);
                echo "\" class=\"cart-item-title\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 16);
                echo "</a> 
                            ";
                // line 17
                if (twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 17)) {
                    // line 18
                    echo "                            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 18));
                    foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                        // line 19
                        echo "                            <small>- ";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 19);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 19);
                        echo "</small> ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 20
                    echo "                            ";
                }
                // line 21
                echo "                            ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 21)) {
                    // line 22
                    echo "                            <small>- ";
                    echo ($context["text_recurring"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 22);
                    echo "</small> 
                            ";
                }
                // line 24
                echo "                            <p class=\"cart-item-quantity\">&times;";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 24);
                echo "</p>
                            <p class=\"cart-item-price\">";
                // line 25
                echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 25);
                echo "</p>
                        </td>          
                        <td class=\"text-center cart-close\"><button type=\"button\" onclick=\"cart.remove('";
                // line 27
                echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 27);
                echo "');\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger btn-xs\"><i class=\"ion-android-close\"></i></button></td>
                    </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
                // line 31
                echo "                    <tr>
                        <td class=\"text-center\"></td>
                        <td class=\"text-left\">";
                // line 33
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 33);
                echo "</td>
                        <td class=\"text-right\">x&nbsp;1</td>
                        <td class=\"text-right\">";
                // line 35
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 35);
                echo "</td>
                        <td class=\"text-center text-danger\"><button type=\"button\" onclick=\"voucher.remove('";
                // line 36
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "key", [], "any", false, false, false, 36);
                echo "');\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger btn-xs\"><i class=\"ion-android-close\"></i></button></td>
                    </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "                </table>
            </div>
        </li>
        <li class=\"cart-info\">
            <div class=\"cart-info-content\">
                <table class=\"table\">
                    ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
                // line 46
                echo "                    <tr>
                        <td class=\"text-left\">";
                // line 47
                echo (twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 47) . " :");
                echo "</td>
                        <td class=\"text-right\">";
                // line 48
                echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 48);
                echo "</td>
                    </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "                </table>
            </div>
        </li>
        <li class=\"cart-button\">
            <a href=\"";
            // line 55
            echo ($context["cart"] ?? null);
            echo "\">";
            echo ($context["text_cart"] ?? null);
            echo "</a><a href=\"";
            echo ($context["checkout"] ?? null);
            echo "\">";
            echo ($context["text_checkout"] ?? null);
            echo "</a>
        </li>
        ";
        } else {
            // line 58
            echo "        <li>
            <p class=\"text-center cart-empty\">";
            // line 59
            echo ($context["text_empty"] ?? null);
            echo "</p>
        </li>
        ";
        }
        // line 62
        echo "    </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "tt_aboss2/template/common/cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 62,  217 => 59,  214 => 58,  202 => 55,  196 => 51,  187 => 48,  183 => 47,  180 => 46,  176 => 45,  168 => 39,  157 => 36,  153 => 35,  148 => 33,  144 => 31,  139 => 30,  128 => 27,  123 => 25,  118 => 24,  110 => 22,  107 => 21,  104 => 20,  94 => 19,  89 => 18,  87 => 17,  81 => 16,  77 => 14,  66 => 12,  62 => 11,  58 => 9,  54 => 8,  49 => 5,  47 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tt_aboss2/template/common/cart.twig", "");
    }
}
