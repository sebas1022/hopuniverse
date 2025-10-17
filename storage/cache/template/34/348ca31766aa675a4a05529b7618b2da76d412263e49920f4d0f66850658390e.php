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

/* part/template/common/cart.twig */
class __TwigTemplate_d15a0c5932ecfe124dbeea03a33f35f08043e9f429df7944b2c9c854517183d6 extends Template
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
        echo "<div id=\"cart\">
<button type=\"button\" data-toggle=\"modal\" data-target=\"#cartmodal\"> 
<svg width=\"24px\" height=\"26px\" viewBox=\"0 0 24 26\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\">
<g id=\"Page-1\" stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
<g id=\"cart\" fill=\"var(--text2)\" fill-rule=\"nonzero\">
<path d=\"M12,0 C9.253906,0 7,2.253906 7,5 L7,6 L2.0625,6 L2,6.9375 L1,24.9375 L0.9375,26 L23.0625,26 L23,24.9375 L22,6.9375 L21.9375,6 L17,6 L17,5 C17,2.253906 14.746094,0 12,0 Z M12,2 C13.65625,2 15,3.34375 15,5 L15,6 L9,6 L9,5 C9,3.34375 10.34375,2 12,2 Z M3.9375,8 L7,8 L7,11 L9,11 L9,8 L15,8 L15,11 L17,11 L17,8 L20.0625,8 L20.9375,24 L3.0625,24 L3.9375,8 Z\" id=\"Shape\"></path>
</g>
</g>
</svg>
<span id=\"cart-total\">";
        // line 10
        echo ($context["text_items"] ?? null);
        echo "</span></button>
<div class=\"modal fade\" tabindex=\"-1\" id=\"cartmodal\" role=\"dialog\" >
<div class=\"modal-dialog modal-block\" role=\"document\">
<button type=\"button\" data-dismiss=\"modal\" aria-label=\"close\" class=\"modal-close\"><span aria-hidden=\"true\">&times;</span></button>
<div class=\"menu-modal\">
<ul class=\"cart-block\">
";
        // line 16
        if ((($context["products"] ?? null) || ($context["vouchers"] ?? null))) {
            // line 17
            echo "<li>
<table class=\"table cart-table\">
";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 20
                echo "<tr class=\"flex-center\">
<td class=\"text-center\">";
                // line 21
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 21)) {
                    echo " <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 21);
                    echo "\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 21);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 21);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 21);
                    echo "\" /></a> ";
                }
                echo "</td>
<td class=\"text-left\"><a href=\"";
                // line 22
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 22);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 22);
                echo "</a> ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 22)) {
                    // line 23
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 23));
                    foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                        echo " <br />
- <small>";
                        // line 24
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 24);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 24);
                        echo "</small> ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                }
                // line 26
                if (twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 26)) {
                    echo " <br />
 - <small>";
                    // line 27
                    echo ($context["text_recurring"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 27);
                    echo "</small> ";
                }
                echo "</td>
<td class=\"text-right\">";
                // line 28
                echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 28);
                echo "</td>
<td class=\"text-center\"><button type=\"button\" onclick=\"cart.remove('";
                // line 29
                echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 29);
                echo "');\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"cart-close\"><span aria-hidden=\"true\">&times;</span></button></td>
</tr>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
                // line 33
                echo "<tr>
<td class=\"text-center\"></td>
<td class=\"text-left\">";
                // line 35
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 35);
                echo "</td>
<td class=\"text-right\">";
                // line 36
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 36);
                echo "</td>
<td class=\"text-center text-danger\"><button type=\"button\" onclick=\"voucher.remove('";
                // line 37
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "key", [], "any", false, false, false, 37);
                echo "');\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"cart-close\"><span aria-hidden=\"true\">&times;</span></button></td>
</tr>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "</table>
</li>
<li>
<div>
<table class=\"table cart-total\">
";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
                // line 46
                echo "<tr>
<td class=\"text-right\"><strong>";
                // line 47
                echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 47);
                echo "</strong></td>
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
            echo "</table>
<p class=\"text-center\">
<a href=\"";
            // line 53
            echo ($context["cart"] ?? null);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["text_cart"] ?? null);
            echo "</a></br></br>
<a href=\"";
            // line 54
            echo ($context["checkout"] ?? null);
            echo "\" class=\"btn btn-default\">";
            echo ($context["text_checkout"] ?? null);
            echo "</a></p>
</div>
</li>
";
        } else {
            // line 58
            echo "<li>
<p class=\"text-center cart-text\">";
            // line 59
            echo ($context["text_empty"] ?? null);
            echo "</p>
</li>
";
        }
        // line 62
        echo "</ul>
</div>
 </div>
</div>
</div>";
    }

    public function getTemplateName()
    {
        return "part/template/common/cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 62,  209 => 59,  206 => 58,  197 => 54,  191 => 53,  187 => 51,  178 => 48,  174 => 47,  171 => 46,  167 => 45,  160 => 40,  149 => 37,  145 => 36,  141 => 35,  137 => 33,  133 => 32,  122 => 29,  118 => 28,  110 => 27,  106 => 26,  96 => 24,  90 => 23,  84 => 22,  70 => 21,  67 => 20,  63 => 19,  59 => 17,  57 => 16,  48 => 10,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "part/template/common/cart.twig", "");
    }
}
