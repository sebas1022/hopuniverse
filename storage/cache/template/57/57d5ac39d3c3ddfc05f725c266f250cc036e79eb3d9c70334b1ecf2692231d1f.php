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

/* tt_aboss/template/common/currency.twig */
class __TwigTemplate_8e8ee8d3a5fa562b492cf3fda00209014a738c538d7ddb49117aed49fb2bc4a9 extends \Twig\Template
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
        if ((twig_length_filter($this->env, ($context["currencies"] ?? null)) > 1)) {
            // line 2
            echo "<li class=\"currency\">
    <form action=\"";
            // line 3
            echo ($context["action"] ?? null);
            echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-currency\">
        <h3 class=\"text-ex switcher-title\">";
            // line 4
            echo ($context["text_currency"] ?? null);
            echo "</h3>
        <ul class=\"switcher-option\">
            ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["currencies"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
                // line 7
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 7) == ($context["code"] ?? null))) {
                    // line 8
                    echo "            <li>
                <button class=\"item-selected currency-select btn btn-link btn-block\" type=\"button\" name=\"";
                    // line 9
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 9);
                    echo "\">
                    ";
                    // line 10
                    if (twig_get_attribute($this->env, $this->source, $context["currency"], "symbol_left", [], "any", false, false, false, 10)) {
                        echo " 
                    ";
                        // line 11
                        echo twig_get_attribute($this->env, $this->source, $context["currency"], "symbol_left", [], "any", false, false, false, 11);
                        echo "
                    ";
                    }
                    // line 12
                    echo "     
                    ";
                    // line 13
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 13);
                    echo "
                    ";
                    // line 14
                    if (twig_get_attribute($this->env, $this->source, $context["currency"], "symbol_right", [], "any", false, false, false, 14)) {
                        echo " 
                    ";
                        // line 15
                        echo twig_get_attribute($this->env, $this->source, $context["currency"], "symbol_right", [], "any", false, false, false, 15);
                        echo "
                    ";
                    }
                    // line 17
                    echo "                </button>
            </li>
            ";
                } else {
                    // line 20
                    echo "            <li>
                <button class=\"currency-select btn btn-link btn-block\" type=\"button\" name=\"";
                    // line 21
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 21);
                    echo "\">
                    ";
                    // line 22
                    if (twig_get_attribute($this->env, $this->source, $context["currency"], "symbol_left", [], "any", false, false, false, 22)) {
                        echo " 
                    ";
                        // line 23
                        echo twig_get_attribute($this->env, $this->source, $context["currency"], "symbol_left", [], "any", false, false, false, 23);
                        echo "
                    ";
                    }
                    // line 24
                    echo "     
                    ";
                    // line 25
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 25);
                    echo "
                    ";
                    // line 26
                    if (twig_get_attribute($this->env, $this->source, $context["currency"], "symbol_right", [], "any", false, false, false, 26)) {
                        echo " 
                    ";
                        // line 27
                        echo twig_get_attribute($this->env, $this->source, $context["currency"], "symbol_right", [], "any", false, false, false, 27);
                        echo "
                    ";
                    }
                    // line 29
                    echo "                </button>
            </li>
            ";
                }
                // line 32
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "        </ul>
        <input type=\"hidden\" name=\"code\" value=\"\" />
        <input type=\"hidden\" name=\"redirect\" value=\"";
            // line 35
            echo ($context["redirect"] ?? null);
            echo "\" />
    </form>
</li>
";
        }
    }

    public function getTemplateName()
    {
        return "tt_aboss/template/common/currency.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 35,  138 => 33,  132 => 32,  127 => 29,  122 => 27,  118 => 26,  114 => 25,  111 => 24,  106 => 23,  102 => 22,  98 => 21,  95 => 20,  90 => 17,  85 => 15,  81 => 14,  77 => 13,  74 => 12,  69 => 11,  65 => 10,  61 => 9,  58 => 8,  55 => 7,  51 => 6,  46 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tt_aboss/template/common/currency.twig", "");
    }
}
