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

/* tt_aboss2/template/extension/module/category.twig */
class __TwigTemplate_9d1f5167f1f351bd677033a970181007f1a92d2df238470d534c28e8c2c9c7c7 extends \Twig\Template
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
        echo "<div class=\"module module-category\">
\t<h3 class=\"module-title module-category-title\">";
        // line 2
        echo ($context["heading_title"] ?? null);
        echo "</h3>
\t<ul>
\t\t";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 5
            echo "\t\t<li ";
            if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 5)) {
                echo " class=\"hadchild\" ";
            }
            echo ">
\t\t\t<a href=\"";
            // line 6
            echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 6);
            echo "\" class=\"";
            if ((twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 6) == ($context["category_id"] ?? null))) {
                echo "active";
            }
            echo "\"><span>";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 6);
            echo "</span></a>
\t\t\t";
            // line 7
            if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 7)) {
                // line 8
                echo "\t\t\t<span class=\"button-view ";
                if ((twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 8) == ($context["category_id"] ?? null))) {
                    echo "ttopen";
                } else {
                    echo "ttclose";
                }
                echo "\">view</span>
\t\t\t<ul class=\"list-child\" ";
                // line 9
                if ((twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 9) == ($context["category_id"] ?? null))) {
                    echo " style=\"display: block; \"";
                } else {
                    echo " style=\"display: none;\" ";
                }
                echo ">
\t\t\t\t";
                // line 10
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 10));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 11
                    echo "\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["child"], "category_id", [], "any", false, false, false, 11) == ($context["child_id"] ?? null))) {
                        // line 12
                        echo "\t\t\t\t<li><a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 12);
                        echo "\" class=\"active\"><span>";
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 12);
                        echo "</span></a></li>
\t\t\t\t";
                    } else {
                        // line 14
                        echo "\t\t\t\t<li><a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 14);
                        echo "\"s><span>";
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 14);
                        echo "</span></a></li>
\t\t\t\t";
                    }
                    // line 16
                    echo "\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 17
                echo "\t\t\t</ul>
\t\t\t";
            }
            // line 19
            echo "\t\t</li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "\t</ul>
</div>
<script type=\"text/javascript\">
\t\$(document).ready(function(){
\t\t\$('span.button-view').click(function() {
\t\t\tif (\$(this).hasClass('ttopen')) {varche = true} else {varche = false};
\t\t\tif(varche == false){
\t\t\t\t\$(this).addClass(\"ttopen\");
\t\t\t\t\$(this).removeClass(\"ttclose\");
\t\t\t\t\$(this).parent().find('ul').slideDown();
\t\t\t\tvarche = true;
\t\t\t} else 
\t\t\t{\t
\t\t\t\t\$(this).removeClass(\"ttopen\");
\t\t\t\t\$(this).addClass(\"ttclose\");
\t\t\t\t\$(this).parent().find('ul').slideUp();
\t\t\t\tvarche = false;
\t\t\t}
\t\t});
\t});
</script>";
    }

    public function getTemplateName()
    {
        return "tt_aboss2/template/extension/module/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 21,  118 => 19,  114 => 17,  108 => 16,  100 => 14,  92 => 12,  89 => 11,  85 => 10,  77 => 9,  68 => 8,  66 => 7,  56 => 6,  49 => 5,  45 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tt_aboss2/template/extension/module/category.twig", "");
    }
}
