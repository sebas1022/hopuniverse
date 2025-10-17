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

/* tt_aboss2/template/common/layout_content_built.twig */
class __TwigTemplate_66337463902ae3f81174bfa9a5722887641b230980395512b76a921364865b07 extends \Twig\Template
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
        if (($context["widgets"] ?? null)) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["widgets"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["rows"]) {
                // line 3
                echo "<div class=\"row-main ";
                echo twig_get_attribute($this->env, $this->source, $context["rows"], "class", [], "any", false, false, false, 3);
                echo "\">
    <div class=\"container\">
        <div class=\"row\">
            ";
                // line 6
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["rows"], "main_cols", [], "any", false, false, false, 6));
                foreach ($context['_seq'] as $context["_key"] => $context["main_col"]) {
                    // line 7
                    echo "            <div class=\"col-main col-sm-12 col-md-";
                    echo twig_get_attribute($this->env, $this->source, $context["main_col"], "format", [], "any", false, false, false, 7);
                    echo "\">
                ";
                    // line 8
                    if (twig_get_attribute($this->env, $this->source, $context["main_col"], "sub_rows", [], "any", false, false, false, 8)) {
                        // line 9
                        echo "                ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["main_col"], "sub_rows", [], "any", false, false, false, 9));
                        foreach ($context['_seq'] as $context["_key"] => $context["sub_row"]) {
                            // line 10
                            echo "                <div class=\"row row-sub\">
                    ";
                            // line 11
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($context["sub_row"]);
                            foreach ($context['_seq'] as $context["_key"] => $context["sub_col"]) {
                                // line 12
                                echo "                    <div class=\"col-sub col-sm-12 col-md-";
                                echo twig_get_attribute($this->env, $this->source, $context["sub_col"], "format", [], "any", false, false, false, 12);
                                echo "\">
                        ";
                                // line 13
                                if (twig_get_attribute($this->env, $this->source, $context["sub_col"], "info", [], "any", false, false, false, 13)) {
                                    // line 14
                                    echo "                        ";
                                    $context['_parent'] = $context;
                                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["sub_col"], "info", [], "any", false, false, false, 14));
                                    foreach ($context['_seq'] as $context["_key"] => $context["modules"]) {
                                        // line 15
                                        echo "                        ";
                                        echo $context["modules"];
                                        echo "
                        ";
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['modules'], $context['_parent'], $context['loop']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 17
                                    echo "                        ";
                                }
                                // line 18
                                echo "                    </div>
                    ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub_col'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 20
                            echo "                </div>
                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub_row'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 22
                        echo "                ";
                    }
                    // line 23
                    echo "            </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['main_col'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 25
                echo "        </div>
    </div>
</div>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rows'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "tt_aboss2/template/common/layout_content_built.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 25,  114 => 23,  111 => 22,  104 => 20,  97 => 18,  94 => 17,  85 => 15,  80 => 14,  78 => 13,  73 => 12,  69 => 11,  66 => 10,  61 => 9,  59 => 8,  54 => 7,  50 => 6,  43 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tt_aboss2/template/common/layout_content_built.twig", "");
    }
}
