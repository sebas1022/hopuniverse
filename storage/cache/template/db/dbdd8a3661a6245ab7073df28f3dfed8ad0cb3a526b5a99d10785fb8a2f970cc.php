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

/* part/template/common/footer.twig */
class __TwigTemplate_40561b1215c03f109276c604513cb5123ed649923c539a8592b297d028eb5a4f extends Template
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
        echo "<footer>
<div class=\"container\">
<div class=\"row\">
";
        // line 4
        if (($context["informations"] ?? null)) {
            // line 5
            echo "<div class=\"col-sm-3\">
<h5 class=\"footer-title\">";
            // line 6
            echo ($context["text_information"] ?? null);
            echo "</h5>
<ul class=\"list-unstyled\">
";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
                // line 9
                echo "<li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "href", [], "any", false, false, false, 9);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 9);
                echo "</a></li>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "</ul>
</div>
";
        }
        // line 14
        echo "<div class=\"col-sm-3\">
<h5 class=\"footer-title\">";
        // line 15
        echo ($context["text_service"] ?? null);
        echo "</h5>
<ul class=\"list-unstyled\">
<li><a href=\"";
        // line 17
        echo ($context["contact"] ?? null);
        echo "\">";
        echo ($context["text_contact"] ?? null);
        echo "</a></li>
<li><a href=\"";
        // line 18
        echo ($context["return"] ?? null);
        echo "\">";
        echo ($context["text_return"] ?? null);
        echo "</a></li>
<li><a href=\"";
        // line 19
        echo ($context["sitemap"] ?? null);
        echo "\">";
        echo ($context["text_sitemap"] ?? null);
        echo "</a></li>
</ul>
</div>
<div class=\"col-sm-3\">
<h5 class=\"footer-title\">";
        // line 23
        echo ($context["text_extra"] ?? null);
        echo "</h5>
<ul class=\"list-unstyled\">
<li><a href=\"";
        // line 25
        echo ($context["manufacturer"] ?? null);
        echo "\">";
        echo ($context["text_manufacturer"] ?? null);
        echo "</a></li>
<li><a href=\"";
        // line 26
        echo ($context["voucher"] ?? null);
        echo "\">";
        echo ($context["text_voucher"] ?? null);
        echo "</a></li>
<li><a href=\"";
        // line 27
        echo ($context["affiliate"] ?? null);
        echo "\">";
        echo ($context["text_affiliate"] ?? null);
        echo "</a></li>
<li><a href=\"";
        // line 28
        echo ($context["special"] ?? null);
        echo "\">";
        echo ($context["text_special"] ?? null);
        echo "</a></li>
</ul>
</div>
<div class=\"col-sm-3\">
<h5 class=\"footer-title\">";
        // line 32
        echo ($context["text_account"] ?? null);
        echo "</h5>
<ul class=\"list-unstyled\">
<li><a href=\"";
        // line 34
        echo ($context["account"] ?? null);
        echo "\">";
        echo ($context["text_account"] ?? null);
        echo "</a></li>
<li><a href=\"";
        // line 35
        echo ($context["order"] ?? null);
        echo "\">";
        echo ($context["text_order"] ?? null);
        echo "</a></li>
<li><a href=\"";
        // line 36
        echo ($context["wishlist"] ?? null);
        echo "\">";
        echo ($context["text_wishlist"] ?? null);
        echo "</a></li>
<li><a href=\"";
        // line 37
        echo ($context["newsletter"] ?? null);
        echo "\">";
        echo ($context["text_newsletter"] ?? null);
        echo "</a></li>
</ul>
</div>
</div>
<hr>
<p>";
        // line 42
        echo ($context["powered"] ?? null);
        echo "</p>
</div>
</footer>
<script>\$(document).ready(function() {\$(\".mousehoverimage\").HoverMouseCarousel();});</script>
";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 47
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 47);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 47);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 47);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 50
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "<!-- Theme created by made HTML5 me, visit https://madehtml5.github.io/ for more detail. Please contact us if you need support or wish to fund our work -->
</body></html>";
    }

    public function getTemplateName()
    {
        return "part/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 52,  194 => 50,  190 => 49,  177 => 47,  173 => 46,  166 => 42,  156 => 37,  150 => 36,  144 => 35,  138 => 34,  133 => 32,  124 => 28,  118 => 27,  112 => 26,  106 => 25,  101 => 23,  92 => 19,  86 => 18,  80 => 17,  75 => 15,  72 => 14,  67 => 11,  56 => 9,  52 => 8,  47 => 6,  44 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "part/template/common/footer.twig", "");
    }
}
