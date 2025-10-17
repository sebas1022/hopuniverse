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

/* tt_aboss2/template/extension/module/octestimonial.twig */
class __TwigTemplate_1ac33769918f73ab36e2a0c0c0c597d2890d6ccc15007e01d26b43b3f3acc503 extends \Twig\Template
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
        echo "<div class=\"module module-testimonial\">
\t";
        // line 2
        $context["count"] = 0;
        // line 3
        echo "\t";
        if (($context["rows"] ?? null)) {
            echo "\t\t
\t";
            // line 4
            $context["rows"] = twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "rows", [], "any", false, false, false, 4);
            // line 5
            echo "\t";
        } else {
            // line 6
            echo "\t";
            $context["rows"] = 1;
            // line 7
            echo "\t";
        }
        // line 8
        echo "\t";
        if (($context["testimonials"] ?? null)) {
            // line 9
            echo "\t<div class=\"block-content\">
\t\t<div class=\"testimonial-slider owl-carousel owl-theme\">
\t\t\t";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["testimonials"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["testimonial"]) {
                // line 12
                echo "\t\t\t";
                if (((($context["count"] ?? null) % ($context["rows"] ?? null)) == 0)) {
                    // line 13
                    echo "\t\t\t<div class=\"row_items\">
\t\t\t\t";
                }
                // line 15
                echo "\t\t\t\t";
                $context["count"] = (($context["count"] ?? null) + 1);
                // line 16
                echo "\t\t\t\t<div class=\"testimonial-content\">
\t\t\t\t\t<div class=\"testimonial-image\">
\t\t\t\t\t\t<a href=\"";
                // line 18
                echo ($context["more"] ?? null);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["testimonial"], "image", [], "any", false, false, false, 18);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["testimonial"], "customer_name", [], "any", false, false, false, 18);
                echo "\"></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<h4 class=\"testimonial-author\"><a href=\"";
                // line 21
                echo ($context["more"] ?? null);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["testimonial"], "customer_name", [], "any", false, false, false, 21);
                echo "</a></h4>
\t\t\t\t\t<div class=\"testimonial-box\">\t\t\t\t\t\t\t
\t\t\t\t\t\t";
                // line 23
                echo twig_get_attribute($this->env, $this->source, $context["testimonial"], "content", [], "any", false, false, false, 23);
                echo "
\t\t\t\t\t</div>
\t\t\t\t</div><!--testimonial-content-->
\t\t\t\t";
                // line 26
                if ((((($context["count"] ?? null) % ($context["rows"] ?? null)) == 0) || (($context["count"] ?? null) == twig_length_filter($this->env, ($context["testimonials"] ?? null))))) {
                    // line 27
                    echo "\t\t\t</div>
\t\t\t";
                }
                // line 29
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['testimonial'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "\t\t</div>

\t</div><!--block-content-->
\t";
        } else {
            // line 34
            echo "\t<p class=\"text_empty\">";
            echo ($context["text_empty"] ?? null);
            echo "</p>
\t";
        }
        // line 36
        echo "</div><!--module-testimonial-->\t\t\t\t\t
<script type=\"text/javascript\">
\t\$(document).ready(function() {
\t\t\$(\".testimonial-slider\").owlCarousel({
\t\t\tnav : ";
        // line 40
        if ((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["slide"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["navigation"] ?? null) : null)) {
            echo " true  ";
        } else {
            echo " false ";
        }
        echo ",
\t\t\tdots :";
        // line 41
        if ((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["slide"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["pagination"] ?? null) : null)) {
            echo " true ";
        } else {
            echo " false ";
        }
        echo ",
\t\t\tautoPlay : ";
        // line 42
        if ((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["slide"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["auto"] ?? null) : null)) {
            echo " ";
            echo (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["slide"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["auto"] ?? null) : null);
            echo " ";
        } else {
            echo " false ";
        }
        echo ",
\t\t\titems : ";
        // line 43
        echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["slide"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["items"] ?? null) : null);
        echo ",
\t\t\tloop: true,
\t\t\tmargin: 0,
\t\t\tnavSpeed : ";
        // line 46
        echo (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["slide"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["speed"] ?? null) : null);
        echo ",
\t\t\tdotsSpeed : ";
        // line 47
        echo (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["slide"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["speed"] ?? null) : null);
        echo ",
\t\t\tautoplaySpeed : ";
        // line 48
        echo (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["slide"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["speed"] ?? null) : null);
        echo ",
\t\t\tlazyLoad: true,
\t\t\tnavText : ['<i class=\"ion-ios-arrow-left\"></i>','<i class=\"ion-ios-arrow-right\"></i>'],
\t\t\tresponsive:{
\t\t\t\t0:{
\t\t\t\t\titems: 1,
\t\t\t\t},
\t\t\t\t480:{
\t\t\t\t\titems: 1,
\t\t\t\t},
\t\t\t\t768:{
\t\t\t\t\titems: 1,
\t\t\t\t},
\t\t\t\t992:{
\t\t\t\t\titems: 1,
\t\t\t\t},
\t\t\t},
\t\t});
\t});
</script>";
    }

    public function getTemplateName()
    {
        return "tt_aboss2/template/extension/module/octestimonial.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 48,  172 => 47,  168 => 46,  162 => 43,  152 => 42,  144 => 41,  136 => 40,  130 => 36,  124 => 34,  118 => 30,  112 => 29,  108 => 27,  106 => 26,  100 => 23,  93 => 21,  83 => 18,  79 => 16,  76 => 15,  72 => 13,  69 => 12,  65 => 11,  61 => 9,  58 => 8,  55 => 7,  52 => 6,  49 => 5,  47 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tt_aboss2/template/extension/module/octestimonial.twig", "");
    }
}
