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

/* tt_aboss2/template/blog/blog_home.twig */
class __TwigTemplate_ae55df8ce99208009f4afc162bc4258d7a399a14947c84996ee3f4dcd138cc5e extends \Twig\Template
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
        echo "<div id=\"blog_home\" class=\"menu-recent post-carousel\">
\t<div class=\"blog-title module-title\">
\t\t<h2>";
        // line 3
        echo ($context["text_headingtitle"] ?? null);
        echo "</h2>
\t\t<p class=\"module-description\">";
        // line 4
        echo ($context["text_subtitle"] ?? null);
        echo "</p>
\t</div>
\t";
        // line 6
        list($context["count"], $context["rows"]) =         [0, twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "rows", [], "any", false, false, false, 6)];
        // line 7
        echo "\t";
        if ( !($context["rows"] ?? null)) {
            // line 8
            echo "\t";
            $context["rows"] = 1;
            // line 9
            echo "\t";
        }
        // line 10
        echo "
\t";
        // line 11
        if (($context["articles"] ?? null)) {
            // line 12
            echo "\t<div class=\"post-carousel-inner owl-carousel owl-theme\">
\t\t";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["articles"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 14
                echo "\t\t";
                if (((($context["count"] ?? null) % ($context["rows"] ?? null)) == 0)) {
                    // line 15
                    echo "\t\t<div class=\"row_items\">
\t\t\t";
                }
                // line 17
                echo "\t\t\t";
                $context["count"] = (($context["count"] ?? null) + 1);
                // line 18
                echo "\t\t\t<div class=\"post-content item-inner\">
\t\t\t\t<div class=\"post-thumb\">
\t\t\t\t\t<a href=\" ";
                // line 20
                echo twig_get_attribute($this->env, $this->source, $context["article"], "href", [], "any", false, false, false, 20);
                echo "\" class=\"post-image\">
\t\t\t\t\t\t<img src=\"";
                // line 21
                echo twig_get_attribute($this->env, $this->source, $context["article"], "image", [], "any", false, false, false, 21);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["article"], "name", [], "any", false, false, false, 21);
                echo "\"/>
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"readmore\" href=\"";
                // line 23
                echo twig_get_attribute($this->env, $this->source, $context["article"], "href", [], "any", false, false, false, 23);
                echo "\">";
                echo ($context["button_read_more"] ?? null);
                echo "</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"post-info\">
\t\t\t\t\t<h3 class=\"post-title\"><a href=\"";
                // line 26
                echo twig_get_attribute($this->env, $this->source, $context["article"], "href", [], "any", false, false, false, 26);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["article"], "name", [], "any", false, false, false, 26);
                echo "</a></h3>
\t\t\t\t\t<div class=\"post-meta\">
\t\t\t\t\t\t";
                // line 28
                if (twig_get_attribute($this->env, $this->source, $context["article"], "author", [], "any", false, false, false, 28)) {
                    // line 29
                    echo "\t\t\t\t\t\t<div class=\"post-author\">
\t\t\t\t\t\t\t";
                    // line 30
                    if (twig_get_attribute($this->env, $this->source, $context["article"], "author", [], "any", false, false, false, 30)) {
                        // line 31
                        echo "\t\t\t\t\t\t\t<span class=\"text\">";
                        echo ($context["text_post_by"] ?? null);
                        echo "</span>
\t\t\t\t\t\t\t";
                    }
                    // line 32
                    echo "\t\t
\t\t\t\t\t\t\t<span class=\"post-author\">";
                    // line 33
                    echo twig_get_attribute($this->env, $this->source, $context["article"], "author", [], "any", false, false, false, 33);
                    echo "</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 35
                echo "\t
\t\t\t\t\t\t<span class=\"separator\"> - </span>\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"post-date\">
\t\t\t\t\t\t\t<span class=\"month\">";
                // line 38
                echo twig_get_attribute($this->env, $this->source, $context["article"], "date_added_m", [], "any", false, false, false, 38);
                echo "</span>
\t\t\t\t\t\t\t<span class=\"day\">";
                // line 39
                echo twig_get_attribute($this->env, $this->source, $context["article"], "date_added_d", [], "any", false, false, false, 39);
                echo ", </span>
\t\t\t\t\t\t\t<span class=\"year\">";
                // line 40
                echo twig_get_attribute($this->env, $this->source, $context["article"], "date_added_y", [], "any", false, false, false, 40);
                echo "</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"post-desc\">";
                // line 43
                echo twig_get_attribute($this->env, $this->source, $context["article"], "intro_text", [], "any", false, false, false, 43);
                echo "</div>
\t\t\t\t</div>\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t</div>
\t\t\t";
                // line 46
                if ((((($context["count"] ?? null) % ($context["rows"] ?? null)) == 0) || (($context["count"] ?? null) == twig_length_filter($this->env, ($context["articles"] ?? null))))) {
                    // line 47
                    echo "\t\t</div>
\t\t";
                }
                // line 49
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "\t</div>
\t";
        } else {
            // line 52
            echo "\t<p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
\t";
        }
        // line 54
        echo "
</div>
<script type=\"text/javascript\">
\t\$(document).ready(function() {
\t\t\$(\".post-carousel-inner\").owlCarousel({
\t\t\tautoPlay : ";
        // line 59
        if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "auto", [], "any", false, false, false, 59)) {
            echo " true ";
        } else {
            echo " false ";
        }
        echo ",
\t\t\titems : ";
        // line 60
        echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["slide"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["items"] ?? null) : null);
        echo ",
\t\t\tmargin: 30,
\t\t\tloop: true,\t\t\t
\t\t\tnavSpeed : ";
        // line 63
        echo (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["slide"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["speed"] ?? null) : null);
        echo ",
\t\t\tdotsSpeed : ";
        // line 64
        echo (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["slide"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["speed"] ?? null) : null);
        echo ",
\t\t\tautoplaySpeed : ";
        // line 65
        echo (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["slide"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["speed"] ?? null) : null);
        echo ",
\t\t\tnav : ";
        // line 66
        if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "navigation", [], "any", false, false, false, 66)) {
            echo " true ";
        } else {
            echo " false ";
        }
        echo ",
\t\t\tdots : ";
        // line 67
        if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "pagination", [], "any", false, false, false, 67)) {
            echo " true ";
        } else {
            echo " false ";
        }
        echo ",
\t\t\tnavText : ['<i class=\"ion-chevron-left\"></i>','<i class=\"ion-chevron-right\"></i>'],
\t\t\tresponsive:{
\t\t\t\t0:{
\t\t\t\t\titems: 1,
\t\t\t\t},
\t\t\t\t480:{
\t\t\t\t\titems: 1,
\t\t\t\t},
\t\t\t\t640:{
\t\t\t\t\titems: 2,
\t\t\t\t},
\t\t\t\t992:{
\t\t\t\t\titems: 2,
\t\t\t\t},
\t\t\t\t1200:{
\t\t\t\t\titems: ";
        // line 83
        echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["slide"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["items"] ?? null) : null);
        echo "
\t\t\t\t}
\t\t\t}
\t\t});
\t});
</script>";
    }

    public function getTemplateName()
    {
        return "tt_aboss2/template/blog/blog_home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 83,  223 => 67,  215 => 66,  211 => 65,  207 => 64,  203 => 63,  197 => 60,  189 => 59,  182 => 54,  176 => 52,  172 => 50,  166 => 49,  162 => 47,  160 => 46,  154 => 43,  148 => 40,  144 => 39,  140 => 38,  135 => 35,  129 => 33,  126 => 32,  120 => 31,  118 => 30,  115 => 29,  113 => 28,  106 => 26,  98 => 23,  91 => 21,  87 => 20,  83 => 18,  80 => 17,  76 => 15,  73 => 14,  69 => 13,  66 => 12,  64 => 11,  61 => 10,  58 => 9,  55 => 8,  52 => 7,  50 => 6,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tt_aboss2/template/blog/blog_home.twig", "");
    }
}
