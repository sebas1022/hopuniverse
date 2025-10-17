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

/* part/template/extension/module/slideshow.twig */
class __TwigTemplate_380b29a48fabc86e5f367922e128265714e88c907f22cda8ba2bfd433d871234 extends Template
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
        echo "</div>
</div>
</div>
<div class=\"slider-main slider";
        // line 4
        echo ($context["module"] ?? null);
        echo "\">
";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 6
            echo "<div class=\"slider-main-item\" style=\"background-image:url(";
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 6);
            echo ")\"></div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "</div>
<div class=\"container\">
<div class=\"row\">
<div id=\"content\" class=\"col-sm-12\">
<script type=\"text/javascript\">
<!--
\$('.slider";
        // line 14
        echo ($context["module"] ?? null);
        echo "').slick({
dots: true,
arrows: false,
infinite: true,
slidesToShow: 1,
slidesToScroll: 1,
autoplay: true,
autoplaySpeed: 5000,
});
-->
</script>
<style>
.slider-main {
width: calc(100% + 30px);
padding: 0;
margin: 0 -15px 50px -15px;
}
.slide {
width: 100%;
margin: auto;
}
#content  {
\tmin-height: 1px;
}
.slider-main-item {
min-height: 80vh;
background-position: center;
background-repeat: no-repeat;
background-size: cover;
padding: 0;
margin: 0;
}

@media (max-width: 768px) {
.slider-main-item {
min-height: 260px;
}
}
</style>
";
    }

    public function getTemplateName()
    {
        return "part/template/extension/module/slideshow.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 14,  59 => 8,  50 => 6,  46 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "part/template/extension/module/slideshow.twig", "");
    }
}
