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

/* tt_aboss2/template/blog/article.twig */
class __TwigTemplate_8cf572f3dc2b89ed2c4ed5d676ffead884750cef397d144fc26f0005c9b19b30 extends \Twig\Template
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
<div class=\"wrapper single-post\">
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
            echo "                <li><a href=\"";
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
                    <div class=\"post\">
                        <h1 class=\"post-title\">";
        // line 23
        echo ($context["heading_title"] ?? null);
        echo "</h1>
                        <div class=\"post-meta\">
                            <span class=\"post-date\">
                                ";
        // line 26
        echo ($context["date"] ?? null);
        echo "
                            </span>
                            ";
        // line 28
        if (($context["author"] ?? null)) {
            // line 29
            echo "                            <span class=\"post-separator\">|</span>
                            <span class=\"post-author\">";
            // line 30
            echo ($context["author"] ?? null);
            echo "</span>
                            ";
        }
        // line 32
        echo "                        </div>
                        <div class=\"post-subtitle\">
                            <!-- AddThis Button BEGIN -->
                            <!--<div class=\"addthis_toolbox addthis_default_style\"><a class=\"addthis_button_facebook_like\" fb:like:layout=\"button_count\"></a> <a class=\"addthis_button_tweet\"></a> <a class=\"addthis_button_pinterest_pinit\"></a> <a class=\"addthis_counter addthis_pill_style\"></a></div>
                            <script type=\"text/javascript\" src=\"//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-515eeaf54693130e\"></script>-->
                            <!-- AddThis Button END -->
                        </div>
                        <div class=\"post-thumb\">
                            <img src=\"";
        // line 40
        echo ($context["image"] ?? null);
        echo "\" alt=\"";
        echo ($context["heading_title"] ?? null);
        echo "\"/>
                        </div>
                        <div class=\"post-description\">
                            <p>";
        // line 43
        echo ($context["description"] ?? null);
        echo "</p>
                        </div>
                    </div>
                    ";
        // line 46
        echo ($context["content_bottom"] ?? null);
        echo "
                </div>
                ";
        // line 48
        echo ($context["column_right"] ?? null);
        echo "
            </div>
        </div>
    </div>
</div>  
";
        // line 53
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "tt_aboss2/template/blog/article.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 53,  152 => 48,  147 => 46,  141 => 43,  133 => 40,  123 => 32,  118 => 30,  115 => 29,  113 => 28,  108 => 26,  102 => 23,  97 => 21,  92 => 20,  89 => 19,  86 => 18,  83 => 17,  80 => 16,  77 => 15,  74 => 14,  72 => 13,  68 => 12,  63 => 9,  52 => 7,  48 => 6,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tt_aboss2/template/blog/article.twig", "");
    }
}
